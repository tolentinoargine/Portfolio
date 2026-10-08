# Argine Tolentino — Portfolio

A responsive portfolio built from the supplied six-page PDF with plain HTML, CSS, and JavaScript. No framework, package installation, API key, or build step is needed.

## Open the portfolio

Open `index.html` in your browser. Keep `styles.css`, `script.js`, and the `assets` folder beside it. If you are using the full Site source checkout, open `dist/index.html` instead.

## Files

```text
index.html
styles.css
script.js
assets/
  argine-portrait.webp
  Argine-Tolentino-Portfolio.pdf
```

The downloadable ZIP uses this structure directly. The hosted source keeps the website inside `dist/`.

## What is included

- Responsive mobile navigation with keyboard and Escape support.
- About, services, experience, quality scores, work samples, working style, and contact sections.
- Keyboard-accessible work sample tabs and email scenario tabs.
- Six expandable quick-reply macros.
- Appointment and lead tracking samples, with horizontal scrolling for wide tables.
- Email, phone, and LinkedIn links; an email copy button with success or fallback feedback.
- A download of the original portfolio PDF.
- Focus indicators, a skip link, reduced-motion support, and print styles.
- A fallback that keeps every work sample readable when JavaScript is disabled.

## Personalize it

1. Edit `index.html` to change your biography, services, work samples, availability, or links.
2. Change the variables at the top of `styles.css` to adjust the color palette and fonts.
3. Replace `assets/argine-portrait.webp` to use a new photograph. Update the image description in `index.html` too.
4. Replace the PDF in `assets/` and update its filename in `index.html` if needed.
5. If you change your email address, update the email links in `index.html` and `emailAddress` in `script.js`.

## Content and contact behavior

Experience, quality scores, contact details, availability, email samples, macros, and tables were taken from the supplied PDF. Copy was lightly edited for grammar and web readability. All illustrative customer names, orders, dates, and operational examples remain labeled as fictional. Sample turnaround times are part of those examples, not service guarantees.

Email links open the visitor's configured email application; phone links open a calling application where supported. The site has no message submission server and does not send messages by itself.

System fonts and local images keep the downloadable portfolio usable without internet access. LinkedIn and sending email require the visitor's usual internet access and apps.

## Publish elsewhere

Upload the entire extracted folder to any static web host. `index.html` should be at the host's public root. No compilation is required.
