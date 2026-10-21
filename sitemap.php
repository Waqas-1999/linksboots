<?php
/**
 * XML sitemap generated from the same nav and post data the site renders from,
 * so it can never drift out of sync with the pages that actually exist.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/posts.php';

header('Content-Type: application/xml; charset=utf-8');

// Change this to the live domain before launch.
$origin = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http')
        . '://' . ($_SERVER['HTTP_HOST'] ?? 'linksboots.com');

/** @var array<string,float> path => priority */
$urls = [
    ''                 => 1.0,
    'services'         => 0.9,
    'about-us'         => 0.8,
    'blog'             => 0.8,
    'contact-us'       => 0.8,
    'terms-conditions' => 0.3,
    'privacy-policy'   => 0.3,
];

foreach (nav_services() as $slug => $s) {
    $urls[$slug] = 0.9;
    foreach ($s['children'] as $child) {
        $urls[$child['path']] = 0.8;
    }
}

foreach (array_keys(all_posts()) as $slug) {
    $urls['blog/' . $slug] = 0.7;
}

$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $path => $priority): ?>
  <url>
    <loc><?= e($origin . url($path)) ?></loc>
    <lastmod><?= $today ?></lastmod>
    <changefreq><?= $priority >= 0.9 ? 'weekly' : 'monthly' ?></changefreq>
    <priority><?= number_format($priority, 1) ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
