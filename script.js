/* Plain JavaScript: no dependencies, setup, or build step required. */
'use strict';

// Keep the footer current.
document.getElementById('current-year').textContent = new Date().getFullYear();

// Progressive enhancement: without JavaScript, all work samples stay visible.
document.querySelectorAll('[data-tabs]').forEach((group) => {
  const tabList = group.querySelector(':scope > .tab-list');
  if (!tabList) return;

  const tabs = Array.from(tabList.querySelectorAll('[role="tab"]'));
  const panels = tabs.map((tab) => document.getElementById(tab.getAttribute('aria-controls')));
  if (panels.some((panel) => !panel)) return;

  const activateTab = (selectedTab, moveFocus = false) => {
    tabs.forEach((tab, index) => {
      const selected = tab === selectedTab;
      tab.setAttribute('aria-selected', String(selected));
      tab.tabIndex = selected ? 0 : -1;
      panels[index].hidden = !selected;
    });
    if (moveFocus) selectedTab.focus();
  };

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => activateTab(tab));
    tab.addEventListener('keydown', (event) => {
      const index = tabs.indexOf(tab);
      let nextIndex;
      if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
      if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
      if (event.key === 'Home') nextIndex = 0;
      if (event.key === 'End') nextIndex = tabs.length - 1;
      if (nextIndex === undefined) return;
      event.preventDefault();
      activateTab(tabs[nextIndex], true);
    });
  });

  activateTab(tabs.find((tab) => tab.getAttribute('aria-selected') === 'true') || tabs[0]);
  tabList.hidden = false;
});

// Mobile navigation supports outside clicks, Escape, and resizing to desktop.
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.getElementById('main-nav');
const mobileQuery = window.matchMedia('(max-width: 760px)');

const setMenuOpen = (open, restoreFocus = false) => {
  navigation.classList.toggle('is-open', open);
  menuButton.setAttribute('aria-expanded', String(open));
  menuButton.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
  if (restoreFocus) menuButton.focus();
};

menuButton.hidden = false;
document.documentElement.classList.add('js-enabled');
menuButton.addEventListener('click', () => {
  setMenuOpen(menuButton.getAttribute('aria-expanded') !== 'true');
});
navigation.querySelectorAll('a').forEach((link) => {
  link.addEventListener('click', () => {
    setMenuOpen(false);
    // Keep keyboard focus in the newly navigated section, not the hidden menu.
    if (mobileQuery.matches) {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
      }
    }
  });
});
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && navigation.classList.contains('is-open')) setMenuOpen(false, true);
});
document.addEventListener('click', (event) => {
  if (!navigation.contains(event.target) && !menuButton.contains(event.target)) setMenuOpen(false);
});
document.addEventListener('focusin', (event) => {
  if (!navigation.contains(event.target) && !menuButton.contains(event.target)) setMenuOpen(false);
});
if (mobileQuery.addEventListener) mobileQuery.addEventListener('change', () => setMenuOpen(false));

// Mark the section currently being read in the main navigation.
if ('IntersectionObserver' in window) {
  const sectionLinks = Array.from(navigation.querySelectorAll('a[href^="#"]'));
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      sectionLinks.forEach((link) => {
        if (link.getAttribute('href') === `#${entry.target.id}`) link.setAttribute('aria-current', 'location');
        else link.removeAttribute('aria-current');
      });
    });
  }, { rootMargin: '-20% 0px -55% 0px', threshold: 0 });
  document.querySelectorAll('main > section[id]').forEach((section) => observer.observe(section));
}

// Copy the email address. Fall back for local files and older browsers.
const emailAddress = 'tolentinoargine@gmail.com';
const copyButton = document.querySelector('.copy-email');
const toast = document.getElementById('toast');
let toastTimeout;

const announce = (message) => {
  clearTimeout(toastTimeout);
  toast.textContent = message;
  toast.classList.add('is-visible');
  toastTimeout = setTimeout(() => toast.classList.remove('is-visible'), 3500);
};

const copyFallback = () => {
  const field = document.createElement('textarea');
  field.value = emailAddress;
  field.setAttribute('readonly', '');
  field.setAttribute('aria-label', 'Email address to copy');
  field.style.cssText = 'position:fixed;left:-9999px;top:0;';
  document.body.appendChild(field);
  field.select();
  let copied = false;
  try { copied = document.execCommand('copy'); } catch (_) { /* Show manual instructions below. */ }
  field.remove();
  copyButton.focus({ preventScroll: true });
  return copied;
};

copyButton.hidden = false;
copyButton.addEventListener('click', async () => {
  let copied = false;
  if (navigator.clipboard && window.isSecureContext) {
    try {
      await navigator.clipboard.writeText(emailAddress);
      copied = true;
    } catch (_) { copied = copyFallback(); }
  } else copied = copyFallback();

  announce(copied ? 'Email address copied.' : `Please copy manually: ${emailAddress}`);
});
