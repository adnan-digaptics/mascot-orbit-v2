<?php
$currentPage = 'web-art-direction';
$pageTitle = 'Web Art Direction | Mascot Orbit';
$pageDescription = 'Mascot-led web art direction, visual compositions and motion-ready assets by Mascot Orbit.';
include __DIR__ . '/includes/header.php';
?>

    <section class="section">
      <div class="container service-detail-hero">
        <div class="reveal">
          <div class="eyebrow">Mascot Orbit Services</div>
          <h1 class="display">
            Bring Your Mascot Into the Web
            <span class="script">Without Losing the Brand.</span>
          </h1>
          <p class="lead">
            Bring the mascot into your website without making it feel childish.
            We plan hero compositions, section moments, visual transitions and
            motion-ready assets so the site feels like one authored brand world.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php">Start a Project →</a>
            <a class="btn btn-outline" href="services.php">All Services</a>
          </div>
        </div>
        <div class="service-detail-visual reveal">
          <img
            src="assets/images/home-service-web.jpg"
            alt="Mascot-led digital art direction"
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
              One website, one
              <span class="script">authored brand world.</span>
            </h2>
          </div>
          <p class="lead">
            From page art direction to developer-ready assets, every mascot
            moment has a clear role in the experience.
          </p>
        </div>
        <div class="deliverables reveal">
          <article class="panel deliverable">
            <div class="benefit-icon">01</div>
            <h3>Page Art Direction</h3>
            <p class="muted">
              Define a cohesive visual direction that brings character, brand
              identity and website content together.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">02</div>
            <h3>Hero Composition</h3>
            <p class="muted">
              Plan the hero artwork, hierarchy and mascot placement so the first
              screen feels distinctive and clear.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">03</div>
            <h3>Section Concepts</h3>
            <p class="muted">
              Create visual moments and transitions that carry the story through
              the page without overwhelming the content.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">04</div>
            <h3>Motion Assets &amp; Handoff</h3>
            <p class="muted">
              Prepare motion-ready artwork and organized, developer-ready assets
              for implementation.
            </p>
          </article>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="case-study reveal">
          <img
            src="assets/images/hero-mascots.jpg"
            alt="Character artwork composed for a digital experience"
          />
          <div>
            <div class="eyebrow">Designed for the screen</div>
            <h2 class="h2">
              Mascot-led, never
              <span class="script">mascot-overloaded.</span>
            </h2>
            <p class="lead">
              Art direction gives the character a purposeful place in the
              interface, balancing brand expression with clarity, usability and
              responsive layouts.
            </p>
            <div class="check-list">
              <div><span>✓</span>Clear visual hierarchy</div>
              <div><span>✓</span>Responsive composition guidance</div>
              <div><span>✓</span>Production-ready creative handoff</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $serviceDepth = [
      'eyebrow' => 'Who it is for',
      'title' => 'A site that feels <span class="script">directed, not decorated.</span>',
      'lead' => 'Web art direction is for teams who have a mascot and a website that still looks like a template with a character pasted on top.',
      'fits' => [
        ['title' => 'Marketing sites', 'text' => 'Hero, product and about pages should share one visual rhythm with the character.'],
        ['title' => 'Product launches', 'text' => 'A campaign page needs scenes, motion cues and crops that a developer can build from.'],
        ['title' => 'Design systems', 'text' => 'You want illustration rules beside the UI kit so future pages stay in the same world.'],
      ],
      'steps' => [
        ['title' => 'Pages', 'text' => 'We choose the templates that matter: home, feature, story, and one conversion page.'],
        ['title' => 'Direction', 'text' => 'Composition, motion notes and how the mascot enters each layout.'],
        ['title' => 'Frames', 'text' => 'Desktop and mobile key art, exported for the build.'],
        ['title' => 'Handoff', 'text' => 'A short art-direction note for design and engineering, including what should not animate.'],
      ],
      'faqs' => [
        ['q' => 'Do you build the website?', 'a' => 'This service is art direction and the visual assets. We can work with your developers, or point you to a build partner.'],
        ['q' => 'Is motion included?', 'a' => 'We specify motion and deliver still frames plus simple looping assets when the page needs them. Full character animation is scoped on its own.'],
        ['q' => 'Can this follow our current UI kit?', 'a' => 'Yes. Send the components. The point is to make the mascot belong in that system, not replace it.'],
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
            <h2>
              Make Your Website <span class="script">Feel Like You.</span>
            </h2>
            <p>Let's plan a web experience around your character and brand.</p>
          </div>
          <a class="btn btn-primary" href="contact.php">Get a Quote →</a>
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
