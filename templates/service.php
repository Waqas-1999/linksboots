<?php
/**
 * Shared renderer for every service page (6 pillars + 18 child services).
 *
 * A page file sets $svc to its slug and requires this template:
 *     <?php $svc = 'link-building'; require __DIR__ . '/../templates/service.php';
 *
 * Each pillar has its own layout recipe ($layouts) and its own signature
 * diagram (service_signature()), and child pages inherit both from their
 * pillar, so the six families read differently instead of sharing one template.
 */
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../data/services-content.php';

$all = service_content();
$d   = $all[$svc] ?? null;

if (!$d) {
    http_response_code(404);
    $page_title = 'Page not found — ' . SITE_NAME;
    require __DIR__ . '/../includes/header.php';
    echo '<section class="section"><div class="wrap"><h1>Page not found</h1>'
       . '<p class="lead">That service does not exist. <a class="text-link" href="' . url('services') . '">Browse all services</a>.</p></div></section>';
    require __DIR__ . '/../includes/footer.php';
    return;
}

$nav      = nav_services();
$parent   = $d['parent'] ?? null;
$family   = $parent ?: $svc;
$siblings = [];
$children = [];

if ($parent && isset($nav[$parent])) {
    foreach ($nav[$parent]['children'] as $c) {
        if (basename($c['path']) !== basename($svc)) $siblings[] = $c;
    }
} elseif (isset($nav[$svc])) {
    $children = $nav[$svc]['children'];
}

$crumbs = $parent
    ? [['label' => $nav[$parent]['label'], 'path' => $parent], ['label' => $d['label']]]
    : [['label' => 'Services', 'path' => 'services'], ['label' => $d['label']]];

/* Per-family recipe: intro order, how "what's included" is drawn, process shape, section tone. */
$layouts = [
    'seo-services'      => ['intro' => 'signature', 'includes' => 'rules',  'process' => 'timeline', 'quality' => 'dark'],
    'ai-visibility'     => ['intro' => 'signature', 'includes' => 'lead',   'process' => 'stack',    'quality' => 'dark'],
    'link-building'     => ['intro' => 'signature', 'includes' => 'ledger', 'process' => 'timeline', 'quality' => 'light'],
    'digital-pr'        => ['intro' => 'photo',     'includes' => 'lead',   'process' => 'timeline', 'quality' => 'dark'],
    'paid-media'        => ['intro' => 'signature', 'includes' => 'rules',  'process' => 'stack',    'quality' => 'light'],
    'content-marketing' => ['intro' => 'photo',     'includes' => 'ledger', 'process' => 'stack',    'quality' => 'dark'],
];
$L = $layouts[$family] ?? $layouts['seo-services'];

/**
 * A small, honest diagram of what the discipline actually works on.
 * Labels only — no invented numbers.
 */
function service_signature(string $family, string $label): void {
    switch ($family) {
    case 'seo-services': ?>
<div class="sig sig-serp" aria-hidden="true">
  <div class="sig-bar"><?= icon('search') ?><span>best <?= e(strtolower($label)) ?> agency</span></div>
  <div class="serp-row is-you"><i>yourbrand.com</i><b>Your page, earning the click</b><span>Crawlable, fast, matched to intent and backed by authority.</span></div>
  <div class="serp-row"><i>competitor.com</i><b>A rival result</b><span></span></div>
  <div class="serp-row"><i>directory.com</i><b>A listing site</b><span></span></div>
</div>
<?php break;
    case 'ai-visibility': ?>
<div class="sig sig-answer" aria-hidden="true">
  <div class="ans-q">Which agency should we use for search and AI visibility?</div>
  <div class="ans-a">
    <p>Several options are worth comparing. <mark>Your brand</mark> is frequently cited for&hellip;</p>
    <ul class="ans-src"><li>Source 1</li><li>Source 2</li><li>Source 3</li></ul>
  </div>
  <p class="sig-cap">The goal: be named, described accurately, and cited.</p>
</div>
<?php break;
    case 'link-building': ?>
<div class="sig sig-graph" aria-hidden="true">
  <svg viewBox="0 0 400 300">
    <g class="g-lines">
      <path d="M200 150 L70 60"/><path d="M200 150 L330 55"/><path d="M200 150 L60 220"/>
      <path d="M200 150 L340 230"/><path d="M200 150 L200 30"/><path d="M200 150 L210 275"/>
    </g>
    <g class="g-nodes">
      <circle cx="70" cy="60" r="12"/><circle cx="330" cy="55" r="16"/><circle cx="60" cy="220" r="10"/>
      <circle cx="340" cy="230" r="13"/><circle cx="200" cy="30" r="9"/><circle cx="210" cy="275" r="11"/>
    </g>
    <circle class="g-core" cx="200" cy="150" r="30"/>
  </svg>
  <p class="sig-cap">Relevant publishers pointing at one site. Relevance over raw volume.</p>
</div>
<?php break;
    case 'paid-media': ?>
<div class="sig sig-funnel" aria-hidden="true">
  <div style="--w:100%"><b>Impressions</b><span>Right audience, right query</span></div>
  <div style="--w:78%"><b>Clicks</b><span>Ad copy that earns attention</span></div>
  <div style="--w:56%"><b>Landing page</b><span>Fast, focused, tracked</span></div>
  <div style="--w:36%"><b>Enquiries</b><span>The number we optimise for</span></div>
</div>
<?php break;
    case 'digital-pr': ?>
<div class="sig sig-press" aria-hidden="true">
  <span class="press-kicker">Industry news</span>
  <b class="press-head">A story worth covering, with your brand at the centre of it</b>
  <span class="press-line"></span><span class="press-line short"></span>
</div>
<?php break;
    default: ?>
<div class="sig sig-cal" aria-hidden="true">
  <?php foreach (['Research','Brief','Draft','Edit','Publish','Refresh'] as $i => $s): ?>
  <div class="cal-cell<?= $i === 4 ? ' is-on' : '' ?>"><span>0<?= $i + 1 ?></span><?= $s ?></div>
  <?php endforeach; ?>
</div>
<?php }
}

$page_title = $d['meta_title'];
$page_desc  = $d['meta_desc'];

require __DIR__ . '/../includes/header.php';

hero_inner([
  'crumbs'  => $crumbs,
  'eyebrow' => $d['eyebrow'] ?? $d['label'],
  'title'   => $d['title'],
  'lead'    => $d['lead'],
  'ticks'   => $d['ticks'],
  'panel'   => $d['panel'],
]);
?>

<!-- ---------------------------------------------------------- intro -->
<section class="section">
  <div class="wrap svc-intro svc-intro-<?= e($L['intro']) ?>">
    <div class="reveal">
      <span class="eyebrow"><?= e($d['intro']['eyebrow']) ?></span>
      <h2><?= $d['intro']['h2'] ?></h2>
      <?php foreach ($d['intro']['paras'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
      <ul class="checks">
        <?php foreach ($d['intro']['checks'] as $c): ?>
        <li><?= icon('check') ?><span><?= e($c) ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="svc-intro-visual reveal">
      <?php if ($L['intro'] === 'photo'): ?>
        <figure class="photo-tall">
          <img src="<?= asset('img/photos/' . $family . '.jpg') ?>"
               alt="<?= e($d['label']) ?> at Links Boots" width="1200" height="800" loading="lazy" decoding="async">
        </figure>
        <?php service_signature($family, $d['label']); ?>
      <?php else: ?>
        <?php service_signature($family, $d['label']); ?>
      <?php endif; ?>
      <div class="standards">
        <h3><?= e($d['visual']['title']) ?></h3>
        <ul>
          <?php foreach ($d['visual']['items'] as $v): ?><li><?= icon($v[0]) ?><?= e($v[1]) ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php if ($L['intro'] !== 'photo'): ?>
<section class="section-flush">
  <div class="wrap">
    <figure class="photo-wide reveal">
      <img src="<?= asset('img/photos/' . $family . '.jpg') ?>"
           alt="<?= e($d['label']) ?> work in progress at Links Boots" width="1200" height="800" loading="lazy" decoding="async">
    </figure>
  </div>
</section>
<?php endif; ?>

<!-- ------------------------------------------------------ what's included -->
<section class="section">
  <div class="wrap">
    <?php section_head_split($d['includes']['eyebrow'], $d['includes']['h2'], $d['includes']['lead']); ?>
    <?php tile_grid($d['includes']['tiles'], 'g3', $L['includes']); ?>
  </div>
</section>

<!-- ------------------------------------------------------------- process -->
<section class="section section-alt">
  <div class="wrap<?= $L['process'] === 'stack' ? ' process-split' : '' ?>">
    <?php section_head('How It Runs', 'From brief to measurable result', $d['process_lead'] ?? 'Four stages, run in order, each with something you can review before the next one starts.'); ?>
    <?php process_steps($d['process'], $L['process']); ?>
  </div>
</section>

<!-- ------------------------------------------------------------- quality -->
<section class="section<?= $L['quality'] === 'dark' ? ' section-dark' : '' ?>">
  <div class="wrap quality">
    <div class="reveal">
      <span class="eyebrow"><?= e($d['quality']['eyebrow']) ?></span>
      <h2><?= $d['quality']['h2'] ?></h2>
      <p class="lead"><?= e($d['quality']['lead']) ?></p>
    </div>
    <ul class="quality-list reveal">
      <?php foreach ($d['quality']['items'] as $q): ?>
      <li><?= icon($q[0]) ?><span><?= e($q[1]) ?></span></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php if (PROOF_VERIFIED): ?><div class="wrap" style="margin-top:56px"><?php stat_band($d['stats']); ?></div><?php endif; ?>
</section>

<!-- ---------------------------------------------------- related services -->
<?php if ($children || $siblings):
  $rel = $children ?: array_merge($siblings, [['label' => $nav[$parent]['label'] . ' Overview', 'path' => $parent]]); ?>
<section class="section">
  <div class="wrap">
    <?php if ($children): ?>
      <?php section_head_split('Go Deeper', 'What sits inside ' . e($d['label']), 'Three focused services you can run together or on their own.'); ?>
    <?php else: ?>
      <?php section_head_split('Related', 'Pairs well with', 'Most clients run these alongside ' . $d['label'] . '.'); ?>
    <?php endif; ?>
    <ul class="related">
      <?php foreach ($rel as $i => $c): $cd = $all[$c['path']] ?? null; ?>
      <li class="reveal">
        <a href="<?= url($c['path']) ?>">
          <span class="related-n"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
          <span class="related-t"><?= e($c['label']) ?></span>
          <span class="related-d"><?= e($cd['card_blurb'] ?? $cd['lead'] ?? '') ?></span>
          <span class="related-a"><?= icon('arrow') ?></span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>

<?php if (PROOF_VERIFIED): ?>
<section class="section">
  <div class="wrap">
    <?php section_head('Testimonials', 'Here&rsquo;s what our clients say'); ?>
    <?php testimonials(); ?>
  </div>
</section>
<?php endif; ?>

<?php faq_section(e($d['label']) . ' questions', $d['faqs'], 'section-alt'); ?>

<?php cta_band($d['cta_title'] ?? null, $d['cta_text'] ?? null); ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>
