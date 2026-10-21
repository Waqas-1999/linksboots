<?php
/**
 * Blog article renderer. A post page sets $post_slug and requires this file.
 */
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../data/posts.php';

$p = get_post($post_slug);

if (!$p) {
    http_response_code(404);
    $page_title = 'Article not found — ' . SITE_NAME;
    require __DIR__ . '/../includes/header.php';
    echo '<section class="section"><div class="wrap center"><h1>Article not found</h1>'
       . '<p class="lead mx-auto">That article does not exist. <a href="' . url('blog') . '">Back to the blog</a>.</p></div></section>';
    require __DIR__ . '/../includes/footer.php';
    return;
}

$page_title = $p['title'] . ' | ' . SITE_NAME;
$page_desc  = $p['excerpt'];

require __DIR__ . '/../includes/header.php';

// Three other posts for the "keep reading" row.
$others = array_slice(array_diff_key(all_posts(), [$post_slug => 1]), 0, 3, true);
?>

<section class="hero hero-page">
  <div class="wrap">
    <div class="wrap-md" style="padding:0">
      <nav class="crumbs reveal" aria-label="Breadcrumb">
        <a href="<?= url() ?>">Home</a><span>/</span>
        <a href="<?= url('blog') ?>">Blog</a><span>/</span>
        <span style="opacity:1;color:rgba(255,255,255,.8)"><?= e($p['title']) ?></span>
      </nav>
      <div class="tags reveal" style="margin-bottom:20px">
        <?php foreach ($p['tags'] as $t): ?>
        <span class="tag" style="background:rgba(255,255,255,.1);color:#fff"><?= e($t) ?></span>
        <?php endforeach; ?>
      </div>
      <h1 class="reveal" style="font-size:clamp(2.1rem,4.4vw,3.4rem)"><?= e($p['title']) ?></h1>
      <p class="lead reveal"><?= e($p['lead']) ?></p>
      <div class="reveal" style="display:flex;flex-wrap:wrap;align-items:center;gap:14px;margin-top:28px;color:rgba(255,255,255,.55);font-size:.92rem">
        <span class="avatar" style="width:38px;height:38px;font-size:.82rem">LM</span>
        <span>The <?= e(SITE_NAME) ?> Team</span>
        <span>&middot;</span>
        <span><?= e(date('F j, Y', strtotime($p['date']))) ?></span>
        <span>&middot;</span>
        <span><?= e($p['read']) ?></span>
      </div>
    </div>
  </div>
</section>

<article class="section">
  <div class="wrap-md">
    <figure class="media media-16x10 reveal" style="margin-bottom:clamp(30px,4vw,48px)">
      <img src="<?= asset('img/photos/' . ($p['photo'] ?? 'blog-rank-higher') . '.jpg') ?>"
           alt="" width="800" height="500" decoding="async">
    </figure>

    <div class="prose reveal">
      <?php foreach ($p['body'] as $block):
        [$type, $content] = $block;
        if ($type === 'h2'): ?>
          <h2><?= e($content) ?></h2>
        <?php elseif ($type === 'h3'): ?>
          <h3><?= e($content) ?></h3>
        <?php elseif ($type === 'p'): ?>
          <p><?= e($content) ?></p>
        <?php elseif ($type === 'ul'): ?>
          <ul><?php foreach ($content as $li): ?><li><?= e($li) ?></li><?php endforeach; ?></ul>
        <?php elseif ($type === 'ol'): ?>
          <ol><?php foreach ($content as $li): ?><li><?= e($li) ?></li><?php endforeach; ?></ol>
        <?php endif;
      endforeach; ?>
    </div>

    <div class="cta-band reveal" style="margin-top:56px;padding:clamp(32px,4vw,52px)">
      <h2 style="font-size:clamp(1.5rem,2.4vw,2rem)">Want This Done on Your Site?</h2>
      <p>We will look at where you stand and tell you what we would prioritise first, whether or not you work with us.</p>
      <div class="btn-row center">
        <a class="btn btn-primary" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
      </div>
    </div>
  </div>
</article>

<section class="section section-alt">
  <div class="wrap">
    <?php section_head('Keep Reading', 'More From <span class="gradient-text">the Blog</span>'); ?>
    <div class="grid g3">
      <?php $i = 0; foreach ($others as $slug => $o) { post_card($slug, $o, $i++ * 80); } ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
