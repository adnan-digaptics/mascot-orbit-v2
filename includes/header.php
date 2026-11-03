<?php
if (!headers_sent()) {
  header('X-Content-Type-Options: nosniff');
  header('X-Frame-Options: SAMEORIGIN');
  header('Referrer-Policy: strict-origin-when-cross-origin');
  header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
  header("Content-Security-Policy: default-src 'self'; base-uri 'self'; form-action 'self'; frame-ancestors 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com data:; script-src 'self' https://cdnjs.cloudflare.com; connect-src 'self'");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle ?? 'Mascot Orbit', ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription ?? '', ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="stylesheet" href="assets/css/style.css?v=20260929-footer" />
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg" />
  </head>
  <body data-page="<?= htmlspecialchars($currentPage ?? '', ENT_QUOTES, 'UTF-8') ?>">
<?php
$currentPage = $currentPage ?? '';
$servicePages = [
    'services',
    'mascot-design',
    'cartoon-logo-design',
    'character-systems',
    'illustration-graphics',
    'web-art-direction',
];
$serviceActive = in_array($currentPage, $servicePages, true);
?>
<header class="site-header">
  <div class="container nav-shell">
    <a class="brand" href="index.php" aria-label="Mascot Orbit home">
      <span class="brand-crown">♕</span><span>Mascot <b>Orbit</b></span>
    </a>
    <nav class="desktop-nav" aria-label="Primary navigation">
      <a class="<?= $currentPage === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
      <div class="nav-drop <?= $serviceActive ? 'active' : '' ?>">
        <a class="drop-trigger" href="services.php">Services <span>⌄</span></a>
        <div class="mega-menu">
          <a href="service-mascot-design.php"><span class="mini-icon purple">✎</span><span><b>Mascot Design</b><small>Custom character systems</small></span></a>
          <a href="service-brand-identity.php"><span class="mini-icon cyan">♡</span><span><b>Cartoon Logo Design</b><small>Character-led identity marks</small></span></a>
          <a href="service-motion-mascots.php"><span class="mini-icon orange">✦</span><span><b>Character Systems</b><small>Expressions, poses &amp; asset libraries</small></span></a>
          <a href="service-web-social.php"><span class="mini-icon lime">▧</span><span><b>Illustration &amp; Graphics</b><small>Campaign, packaging &amp; digital art</small></span></a>
          <a href="service-web-art-direction.php"><span class="mini-icon purple">⌘</span><span><b>Web Art Direction</b><small>Mascot-led web visuals &amp; motion</small></span></a>
        </div>
      </div>
      <a class="<?= $currentPage === 'portfolio' ? 'active' : '' ?>" href="portfolio.php">Portfolio</a>
      <a class="<?= $currentPage === 'mascots' ? 'active' : '' ?>" href="mascots.php">Mascots</a>
      <a class="<?= $currentPage === 'process' ? 'active' : '' ?>" href="process.php">Process</a>
      <a class="<?= $currentPage === 'about' ? 'active' : '' ?>" href="about.php">About</a>
      <a class="<?= $currentPage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a>
    </nav>
    <div class="nav-actions">
      <a class="btn btn-primary nav-cta" href="contact.php">Start a Project <span>→</span></a>
      <button class="menu-toggle" type="button" aria-label="Open menu" aria-controls="mobile-site-nav" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
  <div class="mobile-panel" id="mobile-site-nav">
    <a href="index.php">Home</a>
    <details>
      <summary>Services</summary>
      <a href="services.php">All Services</a>
      <a href="service-mascot-design.php">Mascot Design</a>
      <a href="service-brand-identity.php">Cartoon Logo Design</a>
      <a href="service-motion-mascots.php">Character Systems</a>
      <a href="service-web-social.php">Illustration &amp; Graphics</a>
      <a href="service-web-art-direction.php">Web Art Direction</a>
    </details>
    <a href="portfolio.php">Portfolio</a>
    <a href="mascots.php">Mascots</a>
    <a href="process.php">Process</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </div>
</header>
