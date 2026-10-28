<?php
/**
 * Reusable markup: inline icon set + section renderers shared by every page.
 */

/** Inline SVG icon. All icons are 24×24, stroke-based, and inherit currentColor. */
function icon(string $name, string $class = ''): string {
    $p = [
        'search'    => '<circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>',
        'megaphone' => '<path d="M3 11v2a1 1 0 001 1h2l4 4V6L6 10H4a1 1 0 00-1 1z"/><path d="M14 8a5 5 0 010 8"/><path d="M17.5 5a9 9 0 010 14"/>',
        'link'      => '<path d="M10 13a5 5 0 007.5.5l3-3a5 5 0 00-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 00-7.5-.5l-3 3a5 5 0 007 7l1.7-1.7"/>',
        'sparkle'   => '<path d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9z"/><path d="M18.5 15.5l.8 2.2 2.2.8-2.2.8-.8 2.2-.8-2.2-2.2-.8 2.2-.8z"/>',
        'target'    => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1" fill="currentColor"/>',
        'pen'       => '<path d="M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4z"/><path d="M14.5 5.5l3 3"/>',
        'check'     => '<path d="M20 6L9 17l-5-5"/>',
        'arrow'     => '<path d="M5 12h13"/><path d="M13 6l6 6-6 6"/>',
        'plus'      => '<path d="M12 5v14"/><path d="M5 12h14"/>',
        'chevron'   => '<path d="M6 9l6 6 6-6"/>',
        'chev-left' => '<path d="M15 5l-7 7 7 7"/>',
        'chev-right'=> '<path d="M9 5l7 7-7 7"/>',
        'pause'     => '<rect x="7" y="5" width="3.4" height="14" rx="1.5" fill="currentColor" stroke="none"/><rect x="13.6" y="5" width="3.4" height="14" rx="1.5" fill="currentColor" stroke="none"/>',
        'play-fill' => '<path d="M8 5.6v12.8a1 1 0 001.53.85l10-6.4a1 1 0 000-1.7l-10-6.4A1 1 0 008 5.6z" fill="currentColor" stroke="none"/>',
        'phone'     => '<path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 1.9.7 2.8a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.3-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.8.7a2 2 0 011.7 2z"/>',
        'mail'      => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2.5 6.5l9.5 7 9.5-7"/>',
        'pin'       => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0116 0z"/><circle cx="12" cy="10" r="3"/>',
        'star'      => '<path d="M12 2.5l2.9 6.1 6.6.9-4.8 4.6 1.2 6.6L12 17.6 6.1 20.7l1.2-6.6L2.5 9.5l6.6-.9z" fill="currentColor" stroke="none"/>',
        'doc'       => '<path d="M14 2H7a2 2 0 00-2 2v16a2 2 0 002 2h10a2 2 0 002-2V7z"/><path d="M14 2v5h5"/><path d="M9 13h6"/><path d="M9 17h4"/>',
        'shield'    => '<path d="M12 2l8 3.5v6c0 5-3.4 9.3-8 10.5-4.6-1.2-8-5.5-8-10.5v-6z"/><path d="M9 12l2 2 4-4"/>',
        'globe'     => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a15 15 0 010 18a15 15 0 010-18z"/>',
        'chart'     => '<path d="M4 20h16"/><rect x="5" y="12" width="3.5" height="6" rx="1"/><rect x="10.2" y="8" width="3.5" height="10" rx="1"/><rect x="15.5" y="4" width="3.5" height="14" rx="1"/>',
        'users'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0113 0"/><path d="M16 5.2a3.5 3.5 0 010 6.6"/><path d="M18 14.5a6.5 6.5 0 013.5 5.5"/>',
        'bolt'      => '<path d="M13 2L4.5 13.5H11L10 22l8.5-11.5H12z"/>',
        'clock'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5.2l3.4 2"/>',
        'trophy'    => '<path d="M8 3h8v5a4 4 0 01-8 0z"/><path d="M8 5H5.5A2.5 2.5 0 008 9.5"/><path d="M16 5h2.5A2.5 2.5 0 0116 9.5"/><path d="M12 12v4"/><path d="M8.5 21h7"/><path d="M10 16h4l.8 5h-5.6z"/>',
        'gear'      => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.6 1.6 0 00.3 1.8l.1.1a2 2 0 11-2.8 2.8l-.1-.1a1.6 1.6 0 00-2.7 1.1V21a2 2 0 11-4 0v-.1A1.6 1.6 0 006.9 19.6l-.1.1A2 2 0 114 16.9l.1-.1A1.6 1.6 0 003 14.5H3a2 2 0 010-4h.1A1.6 1.6 0 004.4 7.9l-.1-.1A2 2 0 117.1 5l.1.1A1.6 1.6 0 009.9 4V3a2 2 0 014 0v.1a1.6 1.6 0 002.7 1.1l.1-.1A2 2 0 1119.6 7l-.1.1a1.6 1.6 0 001.1 2.7H21a2 2 0 010 4h-.1a1.6 1.6 0 00-1.5 1.3z"/>',
        'layers'    => '<path d="M12 2.5L21 7l-9 4.5L3 7z"/><path d="M3 12l9 4.5L21 12"/><path d="M3 17l9 4.5L21 17"/>',
        'eye'       => '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>',
        'compass'   => '<circle cx="12" cy="12" r="9"/><path d="M15.5 8.5l-2 5-5 2 2-5z"/>',
        'refresh'   => '<path d="M20.5 11a8.5 8.5 0 00-15-4.5L3 9"/><path d="M3.5 13a8.5 8.5 0 0015 4.5L21 15"/><path d="M3 4v5h5"/><path d="M21 20v-5h-5"/>',
        'money'     => '<rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2.6"/><path d="M6 12h.01"/><path d="M18 12h.01"/>',
        'lock'      => '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 018 0v3"/>',
        'play'      => '<circle cx="12" cy="12" r="9"/><path d="M10.5 9l5 3-5 3z" fill="currentColor"/>',
        'flag'      => '<path d="M5 21V4"/><path d="M5 5h11l-1.5 3.5L16 12H5z"/>',
        'building'  => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M9 7h.01M15 7h.01M9 11h.01M15 11h.01M9 15h.01M15 15h.01"/>',
        'linkedin'  => '<path d="M4.5 9H8v11H4.5z" fill="currentColor" stroke="none"/><circle cx="6.25" cy="5.5" r="2" fill="currentColor" stroke="none"/><path d="M10.5 9H14v1.6a3.8 3.8 0 013.4-1.8c2.6 0 4.1 1.7 4.1 4.9V20H18v-5.6c0-1.4-.5-2.3-1.8-2.3-1 0-1.6.7-1.9 1.4-.1.2-.1.6-.1.9V20h-3.7z" fill="currentColor" stroke="none"/>',
        'facebook'  => '<path d="M14 8.5V6.8c0-.8.2-1.3 1.4-1.3H17V2.6c-.3 0-1.2-.1-2.3-.1-2.4 0-4 1.4-4 4.1v1.9H8V12h2.7v9.4H14V12h2.7l.4-3.5z" fill="currentColor" stroke="none"/>',
        'instagram' => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/>',
        'tiktok'    => '<path d="M16 3c.4 2.3 1.8 3.8 4 4.1v3c-1.5.1-2.9-.3-4.2-1.1v5.6a5.9 5.9 0 11-5-5.8v3.1a2.9 2.9 0 102 2.7V3z" fill="currentColor" stroke="none"/>',
        'youtube'   => '<rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10.2 9.2l5 2.8-5 2.8z" fill="currentColor" stroke="none"/>',
    ];
    $d = $p[$name] ?? $p['check'];
    $c = $class ? ' class="' . e($class) . '"' : '';
    return '<svg' . $c . ' viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" '
         . 'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
}

/** The shared Links Boots logo used by the header and footer. */
function brand_lockup(string $href = null): string {
    $href = $href ?? url();
    ob_start(); ?>
<a class="brand" href="<?= e($href) ?>" aria-label="<?= e(SITE_NAME) ?> home">
  <img class="brand-logo" src="<?= asset('img/logo-site.png') ?>" alt="<?= e(SITE_NAME) ?>">
</a>
<?php return ob_get_clean();
}

/* =======================================================================
   Section renderers
   ======================================================================= */

/** Inner-page hero: breadcrumbs, left-aligned headline, optional ruled index on the right. */
function hero_inner(array $o): void { ?>
<section class="hero hero-page">
  <div class="wrap">
    <?php if (!empty($o['crumbs'])): ?>
    <nav class="crumbs" aria-label="Breadcrumb">
      <a href="<?= url() ?>">Home</a>
      <?php foreach ($o['crumbs'] as $c): ?>
        <span aria-hidden="true">/</span>
        <?php if (!empty($c['path'])): ?><a href="<?= url($c['path']) ?>"><?= e($c['label']) ?></a>
        <?php else: ?><span aria-current="page"><?= e($c['label']) ?></span><?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <?php endif; ?>
    <div class="hero-inner<?= empty($o['panel']) ? ' is-solo' : '' ?>">
      <div class="reveal">
        <?php if (!empty($o['eyebrow'])): ?><span class="eyebrow"><?= e($o['eyebrow']) ?></span><?php endif; ?>
        <h1><?= $o['title'] ?></h1>
        <p class="lead"><?= e($o['lead']) ?></p>
        <div class="btn-row">
          <a class="btn btn-primary" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
          <a class="btn btn-ghost" href="<?= url('contact-us') ?>">Contact Us</a>
        </div>
        <?php if (!empty($o['ticks'])): ?>
        <ul class="hero-ticks">
          <?php foreach ($o['ticks'] as $t): ?><li><?= icon('check') ?><?= e($t) ?></li><?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
      <?php if (!empty($o['panel'])): ?>
      <aside class="hero-index reveal" aria-label="<?= e($o['panel']['title']) ?>">
        <h2 class="hero-index-title"><?= e($o['panel']['title']) ?></h2>
        <ol>
          <?php foreach ($o['panel']['metrics'] as $m): ?>
          <li><b><?= e($m[0]) ?></b><span><?= e($m[1]) ?></span></li>
          <?php endforeach; ?>
        </ol>
      </aside>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php }

/** Section heading. Left-aligned by default; pass $center for the rare centred head. */
function section_head(string $eyebrow, string $title, string $lead = '', bool $center = false): void { ?>
<div class="head<?= $center ? ' center' : '' ?> reveal">
  <?php if ($eyebrow): ?><span class="eyebrow"><?= e($eyebrow) ?></span><?php endif; ?>
  <h2><?= $title ?></h2>
  <?php if ($lead): ?><p class="lead"><?= e($lead) ?></p><?php endif; ?>
</div>
<?php }

/** Split heading: title on the left, lead on the right. */
function section_head_split(string $eyebrow, string $title, string $lead = ''): void { ?>
<div class="head-split reveal">
  <div>
    <?php if ($eyebrow): ?><span class="eyebrow"><?= e($eyebrow) ?></span><?php endif; ?>
    <h2><?= $title ?></h2>
  </div>
  <?php if ($lead): ?><p class="lead"><?= e($lead) ?></p><?php endif; ?>
</div>
<?php }

/**
 * Feature items: [icon, title, text].
 * $style: 'rules' (hairline grid), 'ledger' (numbered full-width rows),
 *         'lead' (first item large, the rest listed beside it).
 */
function tile_grid(array $items, string $cols = 'g3', string $style = 'rules'): void {
    if ($style === 'ledger'): ?>
<ol class="ledger">
  <?php foreach ($items as $i => $it): ?>
  <li class="reveal">
    <span class="ledger-n"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
    <h3><?= e($it[1]) ?></h3>
    <p><?= e($it[2]) ?></p>
  </li>
  <?php endforeach; ?>
</ol>
<?php elseif ($style === 'lead' && count($items) > 2):
        $first = $items[0]; ?>
<div class="lead-grid">
  <article class="lead-item reveal">
    <span class="lead-ico"><?= icon($first[0]) ?></span>
    <h3><?= e($first[1]) ?></h3>
    <p><?= e($first[2]) ?></p>
  </article>
  <ul class="lead-rest">
    <?php foreach (array_slice($items, 1) as $it): ?>
    <li class="reveal"><span class="ic"><?= icon($it[0]) ?></span><div><h3><?= e($it[1]) ?></h3><p><?= e($it[2]) ?></p></div></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php else: ?>
<div class="rules <?= e($cols) ?>">
  <?php foreach ($items as $it): ?>
  <article class="rule-item reveal">
    <span class="rule-ico"><?= icon($it[0]) ?></span>
    <h3><?= e($it[1]) ?></h3>
    <p><?= e($it[2]) ?></p>
  </article>
  <?php endforeach; ?>
</div>
<?php endif;
}

/** Four-stage process. $style: 'timeline' (horizontal) or 'stack' (vertical). */
function process_steps(array $steps, string $style = 'timeline'): void { ?>
<ol class="steps steps-<?= e($style) ?>">
  <?php foreach ($steps as $i => $s): ?>
  <li class="step reveal">
    <span class="step-n"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
    <div>
      <span class="step-tag"><?= e($s['tag']) ?></span>
      <h3><?= e($s['title']) ?></h3>
      <ul><?php foreach ($s['points'] as $p): ?><li><?= e($p) ?></li><?php endforeach; ?></ul>
    </div>
  </li>
  <?php endforeach; ?>
</ol>
<?php }

/**
 * Stat band: [value, suffix, label]. Renders nothing until PROOF_VERIFIED is
 * true (includes/config.php), so unverified numbers never reach visitors.
 */
function stat_band(array $stats): void {
    if (!PROOF_VERIFIED) return; ?>
<div class="stats reveal">
  <?php foreach ($stats as $s): ?>
  <div class="stat">
    <b data-count="<?= e($s[0]) ?>" data-suffix="<?= e($s[1]) ?>">0<?= e($s[1]) ?></b>
    <span><?= e($s[2]) ?></span>
  </div>
  <?php endforeach; ?>
</div>
<?php }

/** Client-logo strip. Hidden until real, permissioned logos exist (PROOF_VERIFIED). */
function logo_strip(string $label = 'Trusted by teams at'): void {
    if (!PROOF_VERIFIED) return; ?>
  <p><?= e($label) ?></p>
  <div class="logo-row">
    <?php for ($i = 1; $i <= 6; $i++): ?>
      <span class="ph-logo">[Client logo <?= $i ?>]</span>
    <?php endfor; ?>
  </div>
<?php }

/** Accordion FAQ. Pass [[question, answer], ...]. */
function faq_block(array $faqs): void { ?>
<div class="faq">
  <?php foreach ($faqs as $i => $f): ?>
  <div class="faq-item<?= $i === 0 ? ' is-open' : '' ?>">
    <button class="faq-q" type="button" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
      <span><?= e($f[0]) ?></span>
      <span class="faq-ico"><?= icon('plus') ?></span>
    </button>
    <div class="faq-a"><div><?= e($f[1]) ?></div></div>
  </div>
  <?php endforeach; ?>
</div>
<?php }

/** FAQ section: sticky heading column beside the accordion. */
function faq_section(string $title, array $faqs, string $class = ''): void { ?>
<section class="section <?= e($class) ?>">
  <div class="wrap faq-layout">
    <div class="faq-aside reveal">
      <span class="eyebrow">FAQ</span>
      <h2><?= $title ?></h2>
      <p>Something not covered here? <a class="text-link" href="<?= url('contact-us') ?>">Ask us directly</a> and a strategist will reply within one working day.</p>
    </div>
    <?php faq_block($faqs); ?>
  </div>
</section>
<?php }

/**
 * Client testimonials. Renders nothing until PROOF_VERIFIED is true; callers
 * check the same flag so no empty heading shows.
 */
function testimonials(): void {
    if (!PROOF_VERIFIED) return; ?>
<div class="quotes">
  <?php for ($i = 0; $i < 3; $i++): ?>
  <figure class="quote reveal">
    <blockquote><p>[Placeholder &mdash; add a real, permissioned client testimonial here.]</p></blockquote>
    <figcaption class="quote-by"><b>[Client name]</b><span>[Role, Company]</span></figcaption>
  </figure>
  <?php endfor; ?>
</div>
<?php }

/** Full-width photographic band with copy over a scrim. */
function media_band(string $photo, string $eyebrow, string $title, string $text, string $alt = ''): void { ?>
<div class="media-band reveal">
  <img src="<?= asset('img/photos/' . $photo . '.jpg') ?>" alt="<?= e($alt) ?>"
       width="1200" height="800" loading="lazy" decoding="async">
  <div class="media-band-body">
    <span class="eyebrow"><?= e($eyebrow) ?></span>
    <h3><?= $title ?></h3>
    <p><?= e($text) ?></p>
  </div>
</div>
<?php }

/** Closing call to action: full-bleed dark band, headline left, actions right. */
function cta_band(?string $title = null, ?string $text = null): void {
    $title = $title ?? "Let's Figure Out What Growth Actually Looks Like";
    $text  = $text  ?? 'We look closely at your website, your industry, and where you currently stand. Then we walk you through exactly what we do, and how much it would cost.'; ?>
<section class="cta-band">
  <div class="wrap cta-inner reveal">
    <h2><?= e($title) ?></h2>
    <div>
      <p><?= e($text) ?></p>
      <div class="btn-row">
        <a class="btn btn-primary btn-lg" href="<?= e(BOOKING_URL) ?>">Book a Free Strategy Call <?= icon('arrow') ?></a>
        <a class="btn btn-ghost btn-lg" href="<?= url('services') ?>">Explore Services</a>
      </div>
    </div>
  </div>
</section>
<?php }

/** Blog card. $variant 'feature' renders the large lead story. */
function post_card(string $slug, array $p, int $delay = 0, string $variant = ''): void { ?>
<article class="post<?= $variant ? ' post-' . e($variant) : '' ?> reveal">
  <a class="post-thumb" href="<?= url('blog/' . $slug) ?>" tabindex="-1" aria-hidden="true">
    <img src="<?= asset('img/photos/' . ($p['photo'] ?? 'blog-rank-higher') . '.jpg') ?>"
         alt="" width="800" height="500" loading="lazy" decoding="async">
  </a>
  <div class="post-body">
    <div class="post-kicker"><?= e(implode(' · ', $p['tags'])) ?></div>
    <h3><a href="<?= url('blog/' . $slug) ?>"><?= e($p['title']) ?></a></h3>
    <p><?= e($p['excerpt']) ?></p>
    <div class="post-meta"><?= e(date('F j, Y', strtotime($p['date']))) ?> &middot; <?= e($p['read']) ?></div>
  </div>
</article>
<?php }

/** Services as alternating image rows (home + services index), Ranklizer-style zig-zag. */
function service_rows(): void {
    $i = 0;
    foreach (nav_services() as $slug => $s): $i++; ?>
  <article class="svc-row reveal<?= $i % 2 === 0 ? ' is-rev' : '' ?>">
    <a class="svc-media" href="<?= url($slug) ?>" tabindex="-1" aria-hidden="true">
      <img src="<?= asset('img/photos/' . $slug . '.jpg') ?>" alt="" width="1200" height="800" loading="lazy" decoding="async">
    </a>
    <div class="svc-body">
      <span class="svc-n"><?= str_pad((string)$i, 2, '0', STR_PAD_LEFT) ?> / 06</span>
      <h3><a href="<?= url($slug) ?>"><?= e($s['label']) ?></a></h3>
      <p><?= e($s['blurb']) ?></p>
      <ul class="svc-list">
        <?php foreach ($s['children'] as $c): ?>
        <li><a href="<?= url($c['path']) ?>"><?= e($c['label']) ?> <?= icon('arrow') ?></a></li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn-dark btn-sm" href="<?= url($slug) ?>">Explore <?= e($s['label']) ?> <?= icon('arrow') ?></a>
    </div>
  </article>
<?php endforeach;
}

/** Compact six-service index. */
function service_cards(): void {
    foreach (nav_services() as $slug => $s): ?>
  <article class="rule-item reveal">
    <span class="rule-ico"><?= icon($s['icon']) ?></span>
    <h3><a href="<?= url($slug) ?>"><?= e($s['label']) ?></a></h3>
    <p><?= e($s['blurb']) ?></p>
  </article>
<?php endforeach;
}
