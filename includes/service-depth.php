<?php
$depth = $serviceDepth ?? [];
$orbitRich = static function (string $html): string {
  $safe = htmlspecialchars($html, ENT_QUOTES, 'UTF-8');
  return str_replace(
    ['&lt;span class=&quot;script&quot;&gt;', '&lt;/span&gt;'],
    ['<span class="script">', '</span>'],
    $safe
  );
};
$fits = $depth['fits'] ?? [];
$steps = $depth['steps'] ?? [];
$faqs = $depth['faqs'] ?? [];
?>
    <section class="section">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <div class="eyebrow"><?= htmlspecialchars($depth['eyebrow'] ?? 'Who it is for', ENT_QUOTES, 'UTF-8') ?></div>
            <h2 class="h2"><?= $orbitRich((string) ($depth['title'] ?? '')) ?></h2>
          </div>
          <p class="lead"><?= htmlspecialchars($depth['lead'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="grid grid-3 reveal">
          <?php foreach ($fits as $item): ?>
          <article class="panel benefit-card">
            <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="section-tight">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <div class="eyebrow">Scope &amp; timing</div>
            <h2 class="h2">A clear path from <span class="script">brief to files.</span></h2>
          </div>
        </div>
        <div class="grid grid-4 reveal">
          <?php foreach ($steps as $index => $step): ?>
          <article class="panel benefit-card">
            <div class="benefit-icon"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></div>
            <h3><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($step['text'], ENT_QUOTES, 'UTF-8') ?></p>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container service-faq-layout">
        <div class="reveal">
          <div class="eyebrow">Good to know</div>
          <h2 class="h2">Questions we hear <span class="script">before kickoff.</span></h2>
          <p class="lead">If your project sits between two services, say so in the brief. We will recommend a single scope instead of selling extra work.</p>
        </div>
        <div class="faq reveal">
          <?php foreach ($faqs as $faq): ?>
          <details class="faq-item">
            <summary><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></summary>
            <p><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
          </details>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
