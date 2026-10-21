<?php
/**
 * Document head + sticky site header.
 * Set $page_title / $page_desc before including this file.
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components.php';

$page_title = $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_desc  = $page_desc  ?? SITE_DESC;
$services   = nav_services();
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<script>document.documentElement.className+=" js";</script>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_desc) ?>">
<meta name="theme-color" content="#1E160C">
<link rel="icon" href="<?= asset('img/favicon.svg') ?>" type="image/svg+xml">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:title" content="<?= e($page_title) ?>">
<meta property="og:description" content="<?= e($page_desc) ?>">
<meta property="og:image" content="<?= asset('img/logo.svg') ?>">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= asset('css/style.css') ?>">
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type'    => 'ProfessionalService',
  'name'     => SITE_NAME,
  'description' => SITE_DESC,
  'email'    => SITE_EMAIL,
  'telephone'=> SITE_PHONE,
  'address'  => ['@type' => 'PostalAddress', 'streetAddress' => SITE_ADDRESS],
  'areaServed' => 'Worldwide',
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
</head>
<body>
<a href="#content" class="btn btn-primary" style="position:absolute;left:-9999px;top:0;z-index:999" onfocus="this.style.left='12px';this.style.top='12px'" onblur="this.style.left='-9999px'">Skip to content</a>

<div class="topbar">
  <div class="wrap topbar-inner">
    <p class="topbar-note"><span class="dot" aria-hidden="true"></span>Taking on new clients &mdash; we reply within one working day</p>
    <ul class="topbar-links">
      <li><a href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= icon('phone') ?><?= e(SITE_PHONE) ?></a></li>
      <li><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= icon('mail') ?><?= e(SITE_EMAIL) ?></a></li>
      <li><a href="<?= e(SOCIAL_LINKEDIN) ?>" aria-label="LinkedIn"><?= icon('linkedin') ?></a></li>
    </ul>
  </div>
</div>

<header class="site-header" id="siteHeader">
  <div class="wrap nav">
    <?= brand_lockup() ?>

    <nav aria-label="Main" class="nav-main">
      <ul class="nav-menu" id="navMenu">
        <li><a class="nav-link<?= is_current('') ? ' is-active' : '' ?>" href="<?= url() ?>">Home</a></li>

        <li class="has-mega">
          <a class="nav-link<?= in_section('services') ? ' is-active' : '' ?>" href="<?= url('services') ?>" aria-haspopup="true">
            Services <?= icon('chevron', 'chev') ?>
          </a>
          <div class="mega" id="megaMenu">
            <?php
            // One-line notes under each sub-service, keyed by path.
            $notes = [
              'seo-services/technical-seo-services' => 'Fix crawl, speed and indexing',
              'seo-services/on-page-seo-services'   => 'Match pages to search intent',
              'seo-services/local-seo-services'     => 'Win the map pack and local results',
              'digital-pr/digital-pr-campaigns'     => 'Stories that earn real coverage',
              'digital-pr/brand-unlinked-mention-services' => 'Turn existing mentions into links',
              'digital-pr/press-media-outreach-services'   => 'Pitches to the right reporters',
              'link-building/guest-posting-services'       => 'Placements on sites with readers',
              'link-building/link-insertion-services'      => 'Links inside content that ranks',
              'link-building/multilingual-outreach-services' => 'Native outreach in new markets',
              'ai-visibility/generative-engine-optimization-services' => 'Get named in AI answers',
              'ai-visibility/aio-content-structuring'      => 'Content AI engines can parse',
              'ai-visibility/ai-search-monitoring-reporting' => 'Track how AI describes you',
              'paid-media/google-ads-management-services'  => 'Reach high-intent searchers',
              'paid-media/meta-ads-services'               => 'Paid social that converts',
              'paid-media/paid-search-audit-services'      => 'Find wasted spend and fix it',
              'content-marketing/seo-content-writing-services' => 'Articles written to rank',
              'content-marketing/content-strategy'         => 'Topic plans that build authority',
              'content-marketing/blog-management-services' => 'A steady, managed publishing rhythm',
            ];
            ?>
            <div class="mega-grid">
              <?php foreach ($services as $slug => $s): ?>
              <div class="mega-col">
                <a class="mega-title" href="<?= url($slug) ?>"><?= e($s['label']) ?></a>
                <?php foreach ($s['children'] as $c): ?>
                <a class="mega-item" href="<?= url($c['path']) ?>">
                  <span><?= e($c['label']) ?></span>
                  <small><?= e($notes[$c['path']] ?? '') ?></small>
                </a>
                <?php endforeach; ?>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="mega-foot">
              <p>Not sure where to start? We will map the fastest route to visibility for your market.</p>
              <div class="mega-foot-actions">
                <a class="mega-all" href="<?= url('services') ?>">View all services <?= icon('arrow') ?></a>
                <a class="btn btn-primary btn-sm" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
              </div>
            </div>
          </div>
        </li>

        <li><a class="nav-link<?= in_section('about-us') ? ' is-active' : '' ?>" href="<?= url('about-us') ?>">About Us</a></li>
        <li><a class="nav-link<?= in_section('blog') ? ' is-active' : '' ?>" href="<?= url('blog') ?>">Blog</a></li>
        <li><a class="nav-link<?= in_section('contact-us') ? ' is-active' : '' ?>" href="<?= url('contact-us') ?>">Contact Us</a></li>

        <!-- Shown only inside the mobile drawer, where the header CTAs are hidden -->
        <li class="nav-cta-mobile">
          <a class="btn btn-primary" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
          <a class="nav-mobile-contact" href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= icon('phone') ?><?= e(SITE_PHONE) ?></a>
        </li>
      </ul>
    </nav>

    <div class="nav-actions">
      <a class="nav-call" href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= icon('phone') ?><span><?= e(SITE_PHONE) ?></span></a>
      <a class="btn btn-primary btn-sm" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navMenu"><span></span></button>
    </div>
  </div>
</header>

<main id="content">
