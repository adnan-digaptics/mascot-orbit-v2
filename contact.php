<?php
$currentPage = 'contact';
$pageTitle = 'Contact | Mascot Orbit';
$pageDescription = 'Start a mascot project with Mascot Orbit. Share your brief and get a clear next step within one business day.';
include __DIR__ . '/includes/header.php';
?>

    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <div class="eyebrow">Project enquiries</div>
          <h1 class="display">
            Tell us the brand. We will shape the
            <span class="script">character.</span>
          </h1>
          <p class="lead">
            Share a short brief and we reply within one business day with the
            right service, a realistic timeline, and the questions we still
            need answered.
          </p>
          <div class="row">
            <a class="btn btn-primary" href="#project-brief">Write a brief →</a
            ><a class="btn btn-outline" href="services.php">Review services</a>
          </div>
          <div class="trust">
            <div class="avatar-row">
              <span></span><span></span><span></span><span></span>
            </div>
            <span>Typical first reply: within 1 business day</span>
          </div>
        </div>
        <div class="hero-art reveal">
          <img
            src="assets/images/contact-hero.jpg"
            alt="Mascot Orbit studio characters ready for a project call"
          />
          <div class="hero-badge">BRIEFS WELCOME • CLEAR NEXT STEPS</div>
        </div>
      </div>
    </section>
    <section class="section" id="project-brief">
      <div class="container">
        <div class="contact-grid reveal">
          <div class="panel form-card">
            <div class="eyebrow">Project brief</div>
            <h2 class="h2">Start with the <span class="script">useful details.</span></h2>
            <p class="lead">
              A paragraph is enough. Budget and timing help us recommend a
              scope that fits, not a larger one.
            </p>
            <form class="brief-form" id="project-brief-form" novalidate>
              <div class="field-row">
                <label>Full name
                  <input name="name" autocomplete="name" required placeholder="Alex Rivera" />
                </label>
                <label>Work email
                  <input name="email" type="email" autocomplete="email" required placeholder="alex@brand.com" />
                </label>
              </div>
              <div class="field-row">
                <label>Company
                  <input name="company" autocomplete="organization" placeholder="Brand or studio" />
                </label>
                <label>Service
                  <select name="service" required>
                    <option value="">Choose a starting point</option>
                    <option>Mascot Design</option>
                    <option>Cartoon Logo Design</option>
                    <option>Character Systems</option>
                    <option>Illustration &amp; Graphics</option>
                    <option>Web Art Direction</option>
                    <option>Not sure yet</option>
                  </select>
                </label>
              </div>
              <div class="field-row">
                <label>Budget range
                  <select name="budget">
                    <option value="">Prefer to discuss</option>
                    <option>Under $5,000</option>
                    <option>$5,000–$12,000</option>
                    <option>$12,000–$25,000</option>
                    <option>$25,000+</option>
                  </select>
                </label>
                <label>Timing
                  <select name="timing">
                    <option value="">Flexible</option>
                    <option>Needed within 3 weeks</option>
                    <option>4–8 weeks</option>
                    <option>This quarter</option>
                    <option>Exploring for later</option>
                  </select>
                </label>
              </div>
              <label>Project notes
                <textarea name="message" required placeholder="Who is the audience, where will the mascot appear, and what should people feel?"></textarea>
              </label>
              <label class="check">
                <input name="consent" type="checkbox" required />
                <span>You can email me about this enquiry. No newsletter unless I ask.</span>
              </label>
              <p class="form-status" role="status" hidden></p>
              <button class="btn btn-primary" type="submit">Send brief →</button>
            </form>
          </div>
          <div class="contact-cards">
            <article class="contact-card">
              <span class="eyebrow">Email</span>
              <h3>hello@mascotorbit.com</h3>
              <p>Best for briefs, references and follow-up files.</p>
            </article>
            <article class="contact-card">
              <span class="eyebrow">Studio hours</span>
              <h3>Mon–Fri, 9:00–18:00</h3>
              <p>Remote-first. We schedule calls across US and EU time zones.</p>
            </article>
            <article class="contact-card">
              <span class="eyebrow">What we send back</span>
              <h3>A scoped next step</h3>
              <p>Recommended service, rough timeline, and anything missing from the brief.</p>
            </article>
            <article class="panel contact-note">
              <h3>Not ready for a full brief?</h3>
              <p class="muted">Send the audience and where the character needs to live. We can tell you whether to start with a mascot, a logo, or a wider system.</p>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <div class="eyebrow">After you write</div>
            <h2 class="h2">Three steps, <span class="script">then a decision.</span></h2>
          </div>
        </div>
        <div class="grid grid-3 reveal">
          <article class="panel benefit-card">
            <div class="benefit-icon">01</div>
            <h3>We read the brief</h3>
            <p>Same day when it arrives before 15:00 studio time. Otherwise the next business morning.</p>
          </article>
          <article class="panel benefit-card">
            <div class="benefit-icon">02</div>
            <h3>30-minute working call</h3>
            <p>Audience, references, must-have uses, and the constraints that should shape the character.</p>
          </article>
          <article class="panel benefit-card">
            <div class="benefit-icon">03</div>
            <h3>Written proposal</h3>
            <p>Scope, rounds of revision, file list and fee. You decide after that. No retainer required to talk.</p>
          </article>
        </div>
      </div>
    </section>
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <img src="assets/images/astronaut-cta.jpg" alt="Mascot Orbit astronaut" />
          <div>
            <div class="eyebrow">Prefer to look first</div>
            <h2>See the work, then <span class="script">write to us.</span></h2>
            <p>Portfolio pieces show the range. The brief is where your character starts.</p>
          </div>
          <a class="btn btn-primary" href="portfolio.php">View portfolio →</a>
        </div>
      </div>
    </section>
    <?php include __DIR__ . '/includes/footer.php'; ?>
