<?php
$currentPage = 'illustration-graphics';
$pageTitle = 'Illustration & Graphics | Mascot Orbit';
$pageDescription = 'Create campaign, packaging and digital illustration that builds a cohesive visual world around your character.';
include __DIR__ . '/includes/header.php';
?>

    <section class="section">
      <div class="container service-detail-hero">
        <div class="reveal">
          <div class="eyebrow">Mascot Orbit Services</div>
          <h1 class="display">
            Create the World Your Mascot
            <span class="script">Gets to Live Inside.</span>
          </h1>
          <p class="lead">
            Build a cohesive visual world around your character and wider brand
            with campaign, packaging and digital illustration.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php">Start a Project →</a
            ><a class="btn btn-outline" href="services.php">All Services</a>
          </div>
        </div>
        <div class="service-detail-visual reveal">
          <img
            src="assets/images/home-service-illustration.jpg"
            alt="Illustration and brand graphics"
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
            <h3>Campaign Illustrations</h3>
            <p class="muted">
              Create custom campaign art and editorial scenes with a clear
              connection to your mascot and brand.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">02</div>
            <h3>Packaging Art</h3>
            <p class="muted">
              Bring characters and visual storytelling onto packaging with
              artwork made for the format.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">03</div>
            <h3>Social Assets</h3>
            <p class="muted">
              Extend the visual world into flexible graphics and illustrations
              for ongoing social communication.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">04</div>
            <h3>Web Graphics &amp; Merch</h3>
            <p class="muted">
              Design web graphics and merchandise artwork that feel at home in
              the same authored visual system.
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
      'title' => 'Art that lives on the <span class="script">product, not just the pitch.</span>',
      'lead' => 'Illustration and graphics turn the mascot into packaging, campaign frames, social templates and the smaller pictures a brand uses every week.',
      'fits' => [
        ['title' => 'Packaging launches', 'text' => 'The character needs to sit on a label, a box and a shelf photo without losing the face.'],
        ['title' => 'Always-on social', 'text' => 'You want a repeatable set of frames, not a one-off poster.'],
        ['title' => 'Events and retail', 'text' => 'Booths, menus and in-store screens should feel like the same world as the website.'],
      ],
      'steps' => [
        ['title' => 'Uses', 'text' => 'We pick the real formats first: story, poster, label, hero banner.'],
        ['title' => 'World', 'text' => 'Background language, props and type placement that support the character.'],
        ['title' => 'Key art', 'text' => 'A small set of finished scenes your team can crop and reuse.'],
        ['title' => 'Templates', 'text' => 'Editable layouts for the pieces you will publish again next month.'],
      ],
      'faqs' => [
        ['q' => 'Do you design the packaging structure?', 'a' => 'We design the illustrated face of the pack and how the character is placed. Structural dielines can come from your printer, or we can coordinate with them.'],
        ['q' => 'Can you match an existing mascot?', 'a' => 'Yes. Send the current files. If they are too rough to extend, we will say so before illustrating a full campaign.'],
        ['q' => 'Are the files print-ready?', 'a' => 'Campaign and packaging art is delivered in the formats your vendor asks for, with crops and bleed called out.'],
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
              Ready to Build <span class="script">Your Brand World?</span>
            </h2>
            <p>
              Let's bring your character into campaign, packaging and digital
              art.
            </p>
          </div>
          <a class="btn btn-primary" href="contact.php"
            >Get a Free Consultation →</a
          >
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
