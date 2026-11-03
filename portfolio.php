<?php
$currentPage = 'portfolio';
$pageTitle = 'Portfolio | Mascot Orbit';
$pageDescription = 'Mascot Orbit — mascot design, branding and digital experiences.';
include __DIR__ . '/includes/header.php';
?>

    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <div class="eyebrow">Our Portfolio</div>
          <h1 class="display">
            Real Mascots. <span class="script">Bigger</span> Brands.
            <span class="pink">Brighter</span> Stories.
          </h1>
          <p class="lead">
            Explore how Mascot Orbit turns ideas into iconic mascot brands—from
            startup launches to global campaigns.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="contact.php"
              >Start Your Project →</a
            ><a class="btn btn-outline" href="portfolio.php"
              >▶ Watch Showreel</a
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
          <div class="hero-badge">MASCOTS TURN IDEAS INTO REAL IMPACT</div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="filters reveal">
          <button class="chip active" data-filter="all">All Projects</button
          ><button class="chip" data-filter="design">Mascot Design</button
          ><button class="chip" data-filter="logo">Cartoon Logo Design</button
          ><button class="chip" data-filter="characters">
            Character Systems</button
          ><button class="chip" data-filter="illustration">
            Illustration &amp; Graphics</button
          ><button class="chip" data-filter="web">Web Art Direction</button>
        </div>
        <div class="portfolio-grid reveal">
          <article class="work-card" data-category="design">
            <img src="assets/images/portfolio-sky.jpg" alt="Sky" />
            <div class="work-info">
              <span class="tag">Mascot Design</span>
              <h3>Sky</h3>
              <span class="muted">Travel Mascot</span>
            </div>
          </article>
          <article class="work-card" data-category="logo">
            <img src="assets/images/portfolio-rexy.jpg" alt="Rexy" />
            <div class="work-info">
              <span class="tag">Cartoon Logo Design</span>
              <h3>Rexy</h3>
              <span class="muted">EdTech Mascot</span>
            </div>
          </article>
          <article class="work-card" data-category="characters">
            <img src="assets/images/portfolio-luna.jpg" alt="Luna" />
            <div class="work-info">
              <span class="tag">Character Systems</span>
              <h3>Luna</h3>
              <span class="muted">Lifestyle Mascot</span>
            </div>
          </article>
          <article class="work-card" data-category="illustration">
            <img src="assets/images/portfolio-orbit.jpg" alt="Orbit" />
            <div class="work-info">
              <span class="tag">Illustration &amp; Graphics</span>
              <h3>Orbit</h3>
              <span class="muted">Education Mascot</span>
            </div>
          </article>
          <article class="work-card" data-category="logo">
            <img src="assets/images/portfolio-panda.jpg" alt="PandaGo" />
            <div class="work-info">
              <span class="tag">Cartoon Logo Design</span>
              <h3>PandaGo</h3>
              <span class="muted">Food Delivery Mascot</span>
            </div>
          </article>
          <article class="work-card" data-category="web">
            <img src="assets/images/portfolio-bolt.jpg" alt="Boltie" />
            <div class="work-info">
              <span class="tag">Web Art Direction</span>
              <h3>Boltie</h3>
              <span class="muted">Fintech Mascot</span>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="section-tight">
      <div class="container">
        <div class="stats reveal">
          <div class="stat"><b data-count="300" data-suffix="+">300+</b><span>Happy Clients</span></div>
          <div class="stat"><b data-count="1000" data-suffix="+">1,000+</b><span>Mascot Projects</span></div>
          <div class="stat"><b data-count="12">12</b><span>International Awards</span></div>
          <div class="stat"><b data-count="98" data-suffix="%">98%</b><span>Client Satisfaction</span></div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="panel panel-pad">
          <div class="eyebrow">Client Story</div>
          <h2 class="h2">
            “A character that truly connects with our audience.”
          </h2>
          <p class="lead">
            The creativity, communication and results went beyond the original
            brief—giving the brand a mascot system it could use everywhere.
          </p>
          <b>Daniel Kim · Founder & CEO</b>
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
