<?php
$currentPage = 'cartoon-logo-design';
$pageTitle = 'Cartoon Logo Design | Mascot Orbit';
$pageDescription = 'Character-led cartoon logo design built for recognition at every scale, from avatars to packaging and signage.';
include __DIR__ . '/includes/header.php';
?>

    <section class="section">
      <div class="container service-detail-hero">
        <div class="reveal">
          <div class="eyebrow">Mascot Orbit Services</div>
          <h1 class="display">
            A Mascot-Led Logo That
            <span class="script">Works When It Gets Tiny.</span>
          </h1>
          <p class="lead">
            Character-led identity marks built for recognition: distinctive,
            legible and memorable at every scale, from social avatars to
            packaging, apparel and signage.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php">Start a Project →</a
            ><a class="btn btn-outline" href="services.php">All Services</a>
          </div>
        </div>
        <div class="service-detail-visual reveal">
          <img
            src="assets/images/home-service-logo.jpg"
            alt="Character-led logo design"
          />
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <div class="eyebrow">What's Included</div>
            <h2 class="h2">
              Everything you need to make it
              <span class="script">work in the real world.</span>
            </h2>
          </div>
        </div>
        <div class="deliverables reveal">
          <article class="panel deliverable">
            <div class="benefit-icon">01</div>
            <h3>Logo Direction</h3>
            <p class="muted">
              Set a clear creative direction for an identity mark that carries
              your character's personality.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">02</div>
            <h3>Mascot Mark Exploration</h3>
            <p class="muted">
              Explore bold shapes and simplified details that stay distinctive
              and legible at small sizes.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">03</div>
            <h3>Primary Lockup &amp; Avatar</h3>
            <p class="muted">
              Build a primary lockup and compact icon version for profiles,
              products, apparel and signage.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">04</div>
            <h3>Color Variants &amp; Exports</h3>
            <p class="muted">
              Deliver color variations and production-ready files for reliable
              use across print and digital touchpoints.
            </p>
          </article>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="case-study reveal">
          <img
            src="assets/images/portfolio-sky.jpg"
            alt="Mascot Orbit case study"
          />
          <div>
            <div class="eyebrow">Mini Case Study</div>
            <h2 class="h2">
              From concept to a
              <span class="script">character people remember.</span>
            </h2>
            <p class="lead">
              We combine strategy, visual development and production thinking so
              the mascot is more than a single illustration—it becomes a
              flexible brand asset.
            </p>
            <div class="check-list">
              <div><span>✓</span>Strategic creative direction</div>
              <div><span>✓</span>Distinctive character language</div>
              <div><span>✓</span>Multi-platform consistency</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="process-grid reveal">
          <div class="process-intro">
            <div class="eyebrow">Our Process</div>
            <h2 class="h2">From Idea <span class="script">to Icon.</span></h2>
            <p class="lead">
              A simple, collaborative process that keeps the work bold and the
              experience clear.
            </p>
            <a class="btn btn-outline" href="process.php">Explore Process →</a>
          </div>
          <article class="step-card">
            <div class="step-thumb">
              <img src="assets/images/mascot-sky.jpg" alt="Discovery" />
            </div>
            <span class="step-no">01</span>
            <h3>Discover</h3>
            <p>We learn your brand, audience, goals and creative direction.</p>
          </article>
          <article class="step-card">
            <div class="step-thumb">
              <img src="assets/images/service-mascot-design.jpg" alt="Design" />
            </div>
            <span class="step-no">02</span>
            <h3>Design</h3>
            <p>
              We explore concepts, styles and a distinct personality system.
            </p>
          </article>
          <article class="step-card">
            <div class="step-thumb">
              <img src="assets/images/service-motion.jpg" alt="Bring to life" />
            </div>
            <span class="step-no">03</span>
            <h3>Bring to Life</h3>
            <p>
              We refine illustrations, expressions, poses and motion assets.
            </p>
          </article>
          <article class="step-card">
            <div class="step-thumb">
              <img src="assets/images/mascot-pango.jpg" alt="Launch" />
            </div>
            <span class="step-no">04</span>
            <h3>Launch</h3>
            <p>
              Your mascot goes live, ready to make an impact across every
              channel.
            </p>
          </article>
        </div>
      </div>
    </section>
    <?php
    $serviceDepth = [
      'eyebrow' => 'Who it is for',
      'title' => 'A mark people can <span class="script">spot at a glance.</span>',
      'lead' => 'Cartoon logo design is for brands that want the character and the identity mark to be the same idea, readable from an app icon to a storefront.',
      'fits' => [
        ['title' => 'App and product logos', 'text' => 'The mark has to stay clear at 32 pixels and still feel like a character, not a squashed illustration.'],
        ['title' => 'Food, retail and kids brands', 'text' => 'A face on the bag or sign does more work than a wordmark alone.'],
        ['title' => 'Rebrands', 'text' => 'You already have a mascot sketch and need it turned into a controlled logo system.'],
      ],
      'steps' => [
        ['title' => 'Audit', 'text' => 'We look at the smallest and largest places the logo must survive.'],
        ['title' => 'Marks', 'text' => 'Character-led options tested in icon, horizontal and one-color versions.'],
        ['title' => 'Lockup', 'text' => 'Clear space, minimum size and a short do-and-don\'t for partners.'],
        ['title' => 'Files', 'text' => 'SVG, PNG and a simple brand sheet your vendors can follow.'],
      ],
      'faqs' => [
        ['q' => 'Is this a full brand identity?', 'a' => 'It covers the character mark, lockups and basic color rules. Typography systems, packaging and campaigns are separate services we can add.'],
        ['q' => 'Can you redesign a logo we already use?', 'a' => 'Yes. Send the current files and where it fails. We will say if it needs a refinement or a new character.'],
        ['q' => 'Will it work in one color?', 'a' => 'Every approved mark includes a one-color version for embroidery, stamps and favicons.'],
      ],
    ];
    include __DIR__ . '/includes/service-depth.php';
    ?>
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <img
            src="assets/images/astronaut-cta.jpg"
            alt="Mascot Orbit astronaut"
          />
          <div>
            <div class="eyebrow">Same planet. Bigger ideas.</div>
            <h2>Ready to Create <span class="script">Your Logo?</span></h2>
            <p>
              Let's make a character-led identity mark that stays memorable at
              every size.
            </p>
          </div>
          <a class="btn btn-primary" href="contact.php"
            >Get a Free Consultation →</a
          >
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
