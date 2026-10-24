<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/functions.php';
$portfolio = require __DIR__ . '/data/portfolio.php';
$profile = $portfolio['profile'];

header('Content-Type: text/html; charset=UTF-8');
require __DIR__ . '/includes/header.php';
?>
  <main id="main">
    <section class="hero" id="home" aria-labelledby="hero-title">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span> Ecommerce customer support</p>
            <h1 id="hero-title">Calm support.<br><em>Happy customers.</em></h1>
            <p class="hero-intro"><?= portfolio_e($profile['intro']) ?></p>
            <div class="hero-actions">
              <a class="button button-gold" href="#work">Explore my work</a>
              <a class="button button-outline" href="<?= portfolio_e($profile['resume_file']) ?>" download="<?= portfolio_e($profile['resume_file']) ?>">Download resume <span class="file-label">PDF</span></a>
            </div>
            <p class="hero-footnote">Based in <?= portfolio_e($profile['location']) ?>.</p>
          </div>
          <div class="hero-visual">
            <div class="portrait-card">
              <div class="portrait-topline"><span>A little about me</span><span aria-hidden="true">01 / AT</span></div>
              <img class="portrait" src="<?= portfolio_e($profile['portrait_file']) ?>" width="800" height="800" alt="<?= portfolio_e($profile['portrait_alt']) ?>" fetchpriority="high">
              <div class="portrait-caption"><strong><?= portfolio_e($profile['name']) ?></strong><span>Your ecommerce support partner</span></div>
            </div>
            <div class="care-note"><span class="care-symbol" aria-hidden="true">✳</span><span>Clear answers.<br>Thoughtful follow-through.</span></div>
          </div>
        </div>
        <div class="hero-stats" aria-label="Experience and performance from my resume">
          <?php foreach ($portfolio['stats'] as $stat): ?>
          <div class="stat"><strong><?= portfolio_e($stat['value']) ?><span><?= portfolio_e($stat['unit'] === '%' ? '%' : ' ' . $stat['unit']) ?></span></strong><p><?= portfolio_e($stat['label']) ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section about-section" id="about" aria-labelledby="about-title">
      <div class="container about-grid">
        <div class="section-heading">
          <p class="section-kicker"><span>01</span> About me</p>
          <h2 id="about-title">A human touch<br>for your <em>online store.</em></h2>
          <p class="heading-note">Accurate answers. A calm tone.<br>Support that follows through.</p>
        </div>
        <div class="about-copy">
          <p class="lead">Behind every order is a person who wants to be heard. That's where I come in.</p>
          <p>I'm Argine R. Tolentino, a customer service representative with 2+ years of experience at JQ BPO Global Solutions Inc., supporting a high-volume international ecommerce account through live chat, email, and phone support.</p>
          <p>I handle order, refund, account, and delivery concerns with clear communication and a calm approach. My experience also includes shipment tracking across carriers, ticket escalation, price matching, and helping teammates with live cases.</p>
          <p>I'm looking to bring that experience to customer support, operations support, or virtual assistance roles where reliable service and attention to detail make a difference.</p>
          <div class="skill-tags" aria-label="Core competencies">
            <?php foreach ($portfolio['skills'] as $skill): ?>
            <span><?= portfolio_e($skill) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section experience-section" id="experience" aria-labelledby="experience-title">
      <div class="container experience-grid">
        <div class="section-heading">
          <p class="section-kicker"><span>02</span> Professional experience</p>
          <h2 id="experience-title">Real experience.<br><em>Reliable support.</em></h2>
          <p class="heading-note">A high-volume international account.<br>Customers, teammates, and details to care for.</p>
        </div>
        <article class="experience-card">
          <p class="experience-period"><time datetime="2023-12-18">December 18, 2023</time> – <time datetime="2026-05-29">May 29, 2026</time></p>
          <h3>Customer Service Representative</h3>
          <p class="experience-company">JQ BPO Global Solutions Inc.</p>
          <p class="experience-context">Global ecommerce account · Santiago City, Isabela</p>
          <ul class="experience-highlights">
            <li>Handled 200+ customer chats per day while maintaining 85% CSAT and an 80–90% QA score.</li>
            <li>Processed refunds and order changes, followed documented procedures, and recorded requests accurately.</li>
            <li>Resolved a high-risk customer case within SOP without supervisor escalation.</li>
            <li>Supported teammates with questions, escalations, and live cases when the team leader was unavailable.</li>
            <li>Researched competitor prices and checked promotion eligibility for price-matching requests.</li>
          </ul>
          <div class="experience-channels"><span>Live chat</span><span>Email</span><span>Phone support</span></div>
        </article>
      </div>
    </section>

    <section class="section services-section" id="services" aria-labelledby="services-title">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div><p class="section-kicker"><span>03</span> How I can help</p><h2 id="services-title">More care.<br><em>Less on your plate.</em></h2></div>
          <p>From the first customer message to the final follow-up, I'll help keep the details in order.</p>
        </div>
        <div class="service-list">
          <?php foreach ($portfolio['services'] as $index => $service): ?>
          <article class="service-row">
            <span class="service-number" aria-hidden="true"><?= portfolio_e(sprintf('%02d', $index + 1)) ?></span>
            <h3><?= portfolio_lines($service['title']) ?></h3>
            <div><p><?= portfolio_e($service['description']) ?></p><p class="service-keywords"><?= portfolio_e($service['keywords']) ?></p></div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section work-section" id="work" aria-labelledby="work-title">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div><p class="section-kicker"><span>04</span> Selected work samples</p><h2 id="work-title">A look at <em>how I work.</em></h2></div>
          <p>A calm voice in the inbox.<br>A clear process behind the scenes.</p>
        </div>
        <p class="sample-disclaimer">Illustrative samples from my portfolio. All customer names, orders, dates, and details below are fictional.</p>

        <!-- All panels remain readable without JavaScript. JavaScript adds accessible tabs. -->
        <div class="work-tabs" data-tabs>
          <div class="tab-list work-tab-list" role="tablist" aria-label="Work sample categories" hidden>
            <button id="tab-email" role="tab" type="button" aria-selected="true" aria-controls="panel-email">Email support</button>
            <button id="tab-macros" role="tab" type="button" aria-selected="false" aria-controls="panel-macros" tabindex="-1">Quick replies</button>
            <button id="tab-operations" role="tab" type="button" aria-selected="false" aria-controls="panel-operations" tabindex="-1">Operations</button>
          </div>

          <div class="work-panel" id="panel-email" role="tabpanel" aria-labelledby="tab-email" tabindex="0">
            <div class="email-tabs" data-tabs>
              <div class="tab-list scenario-tab-list" role="tablist" aria-label="Email support scenarios" hidden>
                <button id="tab-delivery" role="tab" type="button" aria-selected="true" aria-controls="panel-delivery">Missing delivery</button>
                <button id="tab-escalation" role="tab" type="button" aria-selected="false" aria-controls="panel-escalation" tabindex="-1">Case escalation</button>
              </div>
              <div id="panel-delivery" role="tabpanel" aria-labelledby="tab-delivery" tabindex="0">
                <div class="email-showcase">
                  <div class="sample-brief">
                    <p class="small-label">The situation</p>
                    <h3>It says delivered.<br>But where is it?</h3>
                    <p>A buyer's tracking shows their order was delivered, but their package hasn't arrived.</p>
                    <div class="approach"><p class="small-label">My approach</p><ol><li>Acknowledge the concern.</li><li>Check the tracking details.</li><li>Suggest practical checks.</li><li>Give clear next steps and timelines.</li></ol></div>
                    <span class="sample-tag">Empathy + clear next steps</span>
                  </div>
                  <article class="email-card" aria-label="Sample missing delivery email">
                    <div class="email-toolbar"><span class="email-icon" aria-hidden="true">@</span><span>Sample email reply</span><span class="email-type">Customer care</span></div>
                    <div class="email-subject"><span>Subject</span><strong>Update on your order #123456789</strong></div>
                    <div class="email-body">
                      <p>Hi Maria,</p>
                      <p>Thank you for letting us know, and I'm sorry for the inconvenience this has caused. I understand how frustrating it is when tracking says delivered but the package isn't with you.</p>
                      <p>I've checked your tracking details, and it shows the package was marked delivered on October 3. To help us resolve this quickly, could you please:</p>
                      <ol><li>Check around your home, mailbox, and with neighbors or building reception.</li><li>Reply with any details that might help, such as a photo of the delivery area.</li></ol>
                      <p>If the package still can't be found by October 8, we'll move forward with a replacement or refund, whichever you prefer. I'll keep following up until this is resolved.</p>
                      <p class="email-signature">Warm regards,<br><strong>Argine</strong></p>
                    </div>
                  </article>
                </div>
              </div>
              <div id="panel-escalation" role="tabpanel" aria-labelledby="tab-escalation" tabindex="0">
                <div class="email-showcase">
                  <div class="sample-brief">
                    <p class="small-label">The situation</p>
                    <h3>A specialist review.<br>A customer kept informed.</h3>
                    <p>A buyer's concern needs to be passed to another team, and they want to know what happens next.</p>
                    <div class="approach"><p class="small-label">My approach</p><ol><li>Reassure the buyer.</li><li>Explain the escalation.</li><li>Set expectations on timing.</li><li>Keep the conversation open.</li></ol></div>
                    <span class="sample-tag">Reassurance + follow-through</span>
                  </div>
                  <article class="email-card" aria-label="Sample case escalation email">
                    <div class="email-toolbar"><span class="email-icon" aria-hidden="true">@</span><span>Sample email reply</span><span class="email-type">Escalation</span></div>
                    <div class="email-subject"><span>Subject</span><strong>Your case has been escalated</strong></div>
                    <div class="email-body">
                      <p>Hi Daniel,</p>
                      <p>Thank you for your patience. I've escalated your case to our specialist team for a closer review, so you won't need to explain the issue again.</p>
                      <ul><li>The team will review your case within 2 to 3 business days.</li><li>You'll receive an update at this email address.</li><li>If you have new details or photos, simply reply to this message.</li></ul>
                      <p>Thank you for your understanding. I'm here if you need anything in the meantime.</p>
                      <p class="email-signature">Best regards,<br><strong>Argine</strong></p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>

          <div class="work-panel" id="panel-macros" role="tabpanel" aria-labelledby="tab-macros" tabindex="0">
            <div class="macro-heading"><h3>Fast replies. Still personal.</h3><p>Six sample macros for common customer concerns. Open a topic to read the reply.</p></div>
            <div class="macro-grid">
              <details class="macro" open><summary><span><span class="macro-number">01</span>Order status</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Adelle, thanks for reaching out! Your order #123456 is currently in transit and is expected to arrive by October 10. You can track it here: <span class="example-url">track.example.com/123456</span>. Let me know if you need anything else.</p></details>
              <details class="macro"><summary><span><span class="macro-number">02</span>Refund request received</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Mark, I'm sorry about the trouble with your order #2468. I've started your refund request, and it should be processed within 24 to 48 hours. I'll update you as soon as it's confirmed.</p></details>
              <details class="macro"><summary><span><span class="macro-number">03</span>Handling an upset customer</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Ben, I completely understand your frustration, and I'm sorry for the trouble. Let me look into this right now and get you a clear answer as soon as possible.</p></details>
              <details class="macro"><summary><span><span class="macro-number">04</span>Asking for more details</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Pete, to look into this for you, could you please send a photo, your order number, or a description? Once I have it, I'll get back to you right away.</p></details>
              <details class="macro"><summary><span><span class="macro-number">05</span>Closing the case</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Sam, I'm glad we could get this sorted. If anything else comes up, just reply to this message and I'll be happy to help.</p></details>
              <details class="macro"><summary><span><span class="macro-number">06</span>Wrong item received</span><span class="details-symbol" aria-hidden="true"></span></summary><p>Hi Carlo, I'm sorry you received the wrong item. Could you please send a photo of the item and the packaging? Once I have it, I'll arrange a replacement or refund, whichever you prefer.</p></details>
            </div>
          </div>

          <div class="work-panel" id="panel-operations" role="tabpanel" aria-labelledby="tab-operations" tabindex="0">
            <div class="operations-heading"><h3>The details, kept in order.</h3><p>Sample schedules and lead tracking that make the next action easy to see.</p></div>
            <div class="operations-block">
              <div class="table-heading"><h4>Calendar &amp; appointments</h4><span class="sample-tag">Sample week</span></div>
              <div class="table-scroll" role="region" aria-label="Sample appointment schedule, scroll horizontally if needed" tabindex="0">
                <table><caption class="sr-only">Fictional weekly appointment schedule</caption><thead><tr><th scope="col">Day</th><th scope="col">Time</th><th scope="col">Appointment</th></tr></thead><tbody><tr><th scope="row">Monday</th><td>9:00 AM</td><td>Discovery call: Sarah</td></tr><tr><th scope="row">Tuesday</th><td>10:00 AM</td><td>Discovery call: Kenji</td></tr><tr><th scope="row">Wednesday</th><td>3:00 PM</td><td>Follow-up: Sarah</td></tr><tr><th scope="row">Friday</th><td>6:00 PM</td><td>Strategy call: Priya</td></tr></tbody></table>
              </div>
            </div>
            <div class="operations-block">
              <div class="table-heading"><h4>Lead tracker</h4><span class="sample-tag">Sample entries</span></div>
              <div class="table-scroll" role="region" aria-label="Sample lead tracker, scroll horizontally if needed" tabindex="0">
                <table class="lead-table"><caption class="sr-only">Fictional leads, sources, statuses, and follow-ups</caption><thead><tr><th scope="col">Lead name</th><th scope="col">Source</th><th scope="col">Status</th><th scope="col">Next follow-up</th><th scope="col">Notes</th></tr></thead><tbody><tr><th scope="row">Darwin Selis</th><td>Instagram DM</td><td><span class="lead-status">New inquiry</span></td><td>Oct 31, 2026</td><td>Ask about bulk pricing</td></tr><tr><th scope="row">Jade Merit</th><td>Facebook page</td><td><span class="lead-status status-follow-up">Follow-up due</span></td><td>Oct 15, 2026</td><td>Requested product samples</td></tr><tr><th scope="row">Wally Jad</th><td>Email referral</td><td><span class="lead-status status-won">Closed - won</span></td><td>N/A</td><td>First order placed</td></tr><tr><th scope="row">Ruth Bett</th><td>Website form</td><td><span class="lead-status">Quoted</span></td><td>Oct 29, 2026</td><td>Waiting for reply to quote</td></tr></tbody></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section tools-section" id="skills" aria-labelledby="tools-title">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div><p class="section-kicker"><span>05</span> Tools &amp; background</p><h2 id="tools-title">The tools I use.<br><em>The foundation I bring.</em></h2></div>
          <p>Practical tools, communication studies, and ecommerce customer service training.</p>
        </div>
        <div class="tool-grid" aria-label="Tools and practical skills">
          <?php foreach ($portfolio['tools'] as $tool): ?>
          <article class="tool-item"><p class="small-label"><?= portfolio_e($tool['category']) ?></p><h3><?= portfolio_lines($tool['title']) ?></h3><p><?= portfolio_e($tool['description']) ?></p></article>
          <?php endforeach; ?>
        </div>
        <div class="background-grid">
          <div class="background-column">
            <h3>Education</h3>
            <article class="background-item"><p class="background-date">2021–2023</p><h4>Bachelor of Arts in Communication</h4><p class="study-note">Undergraduate studies</p><p>Northeastern College<br>Santiago City, Isabela</p></article>
            <article class="background-item"><p class="background-date">2019–2021</p><h4>Senior High School · HUMSS</h4><p>Smart Achiever’s Academy Subic Inc.<br>Subic, Zambales</p></article>
          </div>
          <div class="background-column">
            <h3>Training &amp; recognition</h3>
            <article class="background-item"><p class="background-date"><time datetime="2023-12-29">December 29, 2023</time></p><h4>Certificate of Achievement</h4><p class="study-note">Training completion</p><p>Awarded for completing the training period and outstanding performance as a customer service representative supporting an ecommerce account through JQ BPO Global Solutions Inc.</p></article>
          </div>
        </div>
      </div>
    </section>

    <section class="section working-section" aria-labelledby="working-title">
      <div class="container">
        <div class="section-heading"><p class="section-kicker"><span>06</span> Working together</p><h2 id="working-title">Good support starts<br>with <em>good habits.</em></h2></div>
        <div class="habit-grid">
          <article><span class="habit-number">01 / Communication</span><h3>Clear, calm,<br>and friendly.</h3><p>Fast, understandable replies that treat each customer's concern with care.</p></article>
          <article><span class="habit-number">02 / Personalization</span><h3>A person.<br>Never just a ticket.</h3><p>Every reply is personalized with the customer's name and relevant order details.</p></article>
          <article><span class="habit-number">03 / Adaptability</span><h3>Your tools.<br>My willingness to learn.</h3><p>Quick to learn new tools, and happy to work in your helpdesk or CRM of choice.</p></article>
        </div>
      </div>
    </section>

    <section class="section contact-section" id="contact" aria-labelledby="contact-title">
      <div class="container contact-grid">
        <div class="contact-copy">
          <p class="section-kicker"><span>07</span> Let's work together</p>
          <h2 id="contact-title">Your customers<br>are in <em>good hands.</em></h2>
          <p>Hiring for customer support, operations support, or virtual assistance? Let's talk about how I can help your team and customers.</p>
          <a class="button button-gold" href="<?= portfolio_e('mailto:' . $profile['email'] . '?subject=' . rawurlencode('Intro call — Customer support')) ?>">Let's start a conversation</a>
        </div>
        <div class="contact-details">
          <div class="contact-link-row"><span class="contact-label">Email</span><div class="email-contact"><a href="<?= portfolio_e('mailto:' . $profile['email']) ?>"><?= portfolio_e($profile['email']) ?></a><button class="copy-email" data-email="<?= portfolio_e($profile['email']) ?>" type="button" aria-label="Copy email address" hidden>Copy</button></div></div>
          <div class="contact-link-row"><span class="contact-label">Phone / WhatsApp</span><a href="<?= portfolio_e('tel:' . $profile['phone_number']) ?>"><?= portfolio_e($profile['phone_display']) ?></a></div>
          <div class="contact-link-row"><span class="contact-label">LinkedIn</span><a href="<?= portfolio_e($profile['linkedin_url']) ?>" target="_blank" rel="noopener noreferrer">Connect with Argine<span class="sr-only"> (opens in a new tab)</span></a></div>
          <div class="availability"><span class="contact-label">Availability</span><p>Monday–Friday · 9:00 AM–5:00 PM<br>Philippine Time (UTC+8)</p><p class="availability-note">Flexible to overlap with US and EU business hours.<br>Rates available upon request.</p></div>
        </div>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
