<?php
$currentPage = 'mascots';
$pageTitle = 'Mascots | Mascot Orbit';
$pageDescription = 'Mascot Orbit — mascot design, branding and digital experiences.';
include __DIR__ . '/includes/header.php';
?>

    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <div class="eyebrow">Mascots</div>
          <h1 class="display">
            Mascots for <span class="script">Bigger</span>
            <span class="pink">Stories.</span>
          </h1>
          <p class="lead">
            Unique, memorable mascot characters designed to bring brands to
            life, build recognition and create real emotional connection.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php"
              >Start Your Mascot →</a
            ><a class="btn btn-outline" href="portfolio.php"
              >▶ Watch Showcase</a
            >
          </div>
          <div class="trust">
            <div class="avatar-row">
              <span></span><span></span><span></span><span></span>
            </div>
            <span>Trusted by 500+ amazing brands</span>
          </div>
        </div>
        <div class="hero-art reveal">
          <img
            src="assets/images/hero-mascots.jpg"
            alt="Mascot Orbit character artwork"
          />
          <div class="hero-scribble">
            IDEAS<br />CHARACTERS<br />BRANDS<br />REAL IMPACT!
          </div>
          <div class="hero-badge">GOOD MASCOTS • BRIGHTER BUSINESSES</div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="filters reveal">
          <button class="chip active" type="button" data-filter="all" aria-pressed="true">All Mascots</button
          ><button class="chip" type="button" data-filter="animal" aria-pressed="false">Animal</button
          ><button class="chip" type="button" data-filter="human" aria-pressed="false">Human</button
          ><button class="chip" type="button" data-filter="fantasy" aria-pressed="false">Fantasy</button
          ><button class="chip" type="button" data-filter="robot" aria-pressed="false">Robot</button
          ><button class="chip" type="button" data-filter="food" aria-pressed="false">Food</button
          ><button class="chip" type="button" data-filter="sports" aria-pressed="false">Sports</button
          ><button class="chip" type="button" data-filter="corporate" aria-pressed="false">Corporate</button>
        </div>
        <div class="mascot-grid reveal">
          <article class="mascot-card" data-category="animal">
            <img src="assets/images/mascot-sky.jpg" alt="Sky" />
            <div>
              <h3>Sky</h3>
              <span class="muted">Animal Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="human">
            <img src="assets/images/mascot-luna.jpg" alt="Luna" />
            <div>
              <h3>Luna</h3>
              <span class="muted">Lifestyle Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="fantasy">
            <img src="assets/images/mascot-rexy.jpg" alt="Rexy" />
            <div>
              <h3>Rexy</h3>
              <span class="muted">Fantasy Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="animal">
            <img src="assets/images/mascot-pango.jpg" alt="Pango" />
            <div>
              <h3>Pango</h3>
              <span class="muted">Animal Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="human">
            <img src="assets/images/mascot-nova.jpg" alt="Nova" />
            <div>
              <h3>Nova</h3>
              <span class="muted">Human Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="robot">
            <img src="assets/images/mascot-orbit.jpg" alt="Orbit" />
            <div>
              <h3>Orbit</h3>
              <span class="muted">Robot Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="fantasy">
            <img src="assets/images/mascot-dizzy.jpg" alt="Dizzy" />
            <div>
              <h3>Dizzy</h3>
              <span class="muted">Fantasy Mascot</span>
            </div>
          </article>
          <article class="mascot-card" data-category="food">
            <img src="assets/images/mascot-pizzio.jpg" alt="Pizzio" />
            <div>
              <h3>Pizzio</h3>
              <span class="muted">Food Mascot</span>
            </div>
          </article>
        </div>
        <p class="filter-empty muted" role="status" hidden>
          No mascots in this category yet. Check back soon.
        </p>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="spotlight reveal">
          <div>
            <div class="eyebrow">Character Spotlight</div>
            <h2 class="h2">
              Sky the <span class="script">Travel Tiger.</span>
            </h2>
            <p class="lead">
              Adventurous, friendly and unstoppable—created to inspire
              exploration and make every journey more fun.
            </p>
            <a class="btn btn-primary" href="portfolio.php"
              >View Case Study →</a
            >
          </div>
          <div class="spotlight-img">
            <img src="assets/images/mascot-sky.jpg" alt="Sky Travel Tiger" />
          </div>
          <div class="check-list">
            <div><span>✓</span>Custom Mascot Design</div>
            <div><span>✓</span>Multiple Expressions</div>
            <div><span>✓</span>Pose Library</div>
            <div><span>✓</span>Brand Applications</div>
            <div><span>✓</span>3D & Illustration Styles</div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <img
            src="assets/images/astronaut-cta.jpg"
            alt="Mascot Orbit astronaut"
          />
          <div>
            <div class="eyebrow">Same planet. Bigger ideas.</div>
            <h2>Ready to Create <span class="script">Your Mascot?</span></h2>
            <p>
              Let's turn your idea into a character the world will remember.
            </p>
          </div>
          <a class="btn btn-primary" href="contact.php"
            >Get a Free Consultation →</a
          >
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
