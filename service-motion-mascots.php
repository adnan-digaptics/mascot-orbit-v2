<?php
$currentPage = 'character-systems';
$pageTitle = 'Character Systems | Mascot Orbit';
$pageDescription = 'Build a flexible mascot character system with expressions, poses, stickers and campaign-ready assets.';
include __DIR__ . '/includes/header.php';
?>

    <section class="section">
      <div class="container service-detail-hero">
        <div class="reveal">
          <div class="eyebrow">Mascot Orbit Services</div>
          <h1 class="display">
            Turn One Mascot Into
            <span class="script">an Entire Visual Language.</span>
          </h1>
          <p class="lead">
            Extend your core character into a flexible visual system your team
            can use consistently across channels.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php">Start a Project →</a
            ><a class="btn btn-outline" href="services.php">All Services</a>
          </div>
        </div>
        <div class="service-detail-visual reveal">
          <img src="assets/images/home-service-systems.jpg" alt="Character Systems" />
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
            <h3>Expression Library</h3>
            <p class="muted">
              Build a recognizable range of emotions and reactions that keeps
              your character's personality consistent.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">02</div>
            <h3>Pose &amp; Gesture System</h3>
            <p class="muted">
              Create repeatable poses and gestures for everyday communication,
              campaigns and product moments.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">03</div>
            <h3>Stickers &amp; GIF Art</h3>
            <p class="muted">
              Turn character reactions and actions into flexible sticker and
              GIF-ready artwork for digital channels.
            </p>
          </article>
          <article class="panel deliverable">
            <div class="benefit-icon">04</div>
            <h3>Campaign Scenes &amp; Asset Library</h3>
            <p class="muted">
              Extend the character into campaign scenes and an organized asset
              library teams can reuse with confidence.
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
      'title' => 'One character, ready for <span class="script">every channel.</span>',
      'lead' => 'Character systems are for teams that already like the mascot and keep reinventing it because they do not have a shared library.',
      'fits' => [
        ['title' => 'In-house design teams', 'text' => 'You need poses and stickers you can drop into campaigns without calling the original artist each time.'],
        ['title' => 'Social and community', 'text' => 'Reactions, celebrations and support replies should feel like the same character.'],
        ['title' => 'Multi-market brands', 'text' => 'The personality stays fixed while outfits or props change for a region or season.'],
      ],
      'steps' => [
        ['title' => 'Inventory', 'text' => 'We list the messages and formats you repeat: welcome, error, sale, thank-you, event.'],
        ['title' => 'Model sheet', 'text' => 'Proportions, colors and the expressions that define the personality.'],
        ['title' => 'Library', 'text' => 'Poses, stickers and a small set of campaign scenes built from that sheet.'],
        ['title' => 'Rules', 'text' => 'Naming, crops and what not to change so future art stays in family.'],
      ],
      'faqs' => [
        ['q' => 'Do you need to design the original mascot?', 'a' => 'No. If the hero character is already approved, we build the system from it. If it is only a rough sketch, start with mascot design first.'],
        ['q' => 'How large is a typical library?', 'a' => 'A useful first system is 6 expressions, 8 poses and 12 stickers. Larger libraries are planned around a content calendar.'],
        ['q' => 'Can our team add poses later?', 'a' => 'Yes. The model sheet is written so a later artist, including us, can extend it without drifting.'],
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
            <h2>Ready to Extend <span class="script">Your Character?</span></h2>
            <p>
              Let's build a visual language your team can use consistently
              across channels.
            </p>
          </div>
          <a class="btn btn-primary" href="contact.php"
            >Get a Free Consultation →</a
          >
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
