<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../data/posts.php';

$page_title = 'Blog — Search, Link Building and AI Visibility Insights | ' . SITE_NAME;
$page_desc  = 'Practical writing on SEO, link building, digital PR and AI visibility from the Links Boots team. No filler, no recycled listicles.';

require __DIR__ . '/../includes/header.php';

$posts = all_posts();
  
// Collect every tag for the filter row.
$tags = [];
foreach ($posts as $p) { foreach ($p['tags'] as $t) { $tags[$t] = true; } }
$tags = array_keys($tags);
sort($tags);

hero_inner([
  'crumbs'  => [['label' => 'Blog']],
  'eyebrow' => 'Insights',
  'pill'    => 'Written by the people doing the work',
  'title'   => 'What We&rsquo;ve Learned, <span class="gradient-text">Written Down</span>',
  'lead'    => 'Practical writing on search, link building, digital PR and AI visibility. Everything here comes from client work, not from rewriting whatever is already ranking.',
  'ticks'   => ['No recycled listicles', 'Numbers where we have them', 'Updated when things change'],
  'panel'   => ['title' => 'What we write about', 'metrics' => [
      ['SEO', 'Technical, on-page and local'],
      ['Links', 'Outreach, insertions, multilingual'],
      ['PR', 'Campaigns, mentions, press'],
      ['AI', 'GEO, structuring, monitoring'],
  ]],
]);
?>

<section class="section">
  <div class="wrap">
    <div class="head-row reveal">
      <div><span class="eyebrow">All Articles</span><h2>Everything we have published</h2></div>
      <p class="topic-line">Topics: <?= e(implode(' · ', $tags)) ?></p>
    </div>
    <div class="post-feature-grid">
      <?php $i = 0; foreach (array_slice($posts, 0, 3, true) as $slug => $p) { post_card($slug, $p, 0, $i++ === 0 ? 'feature' : 'row'); } ?>
    </div>
    <div class="post-grid">
      <?php foreach (array_slice($posts, 3, null, true) as $slug => $p) { post_card($slug, $p); } ?>
    </div>
  </div>
</section>

<?php cta_band('Want This Applied to Your Site?', 'Reading about it is the cheap part. We will look at your site, your market and where you stand, then tell you exactly what we would do first.'); ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
