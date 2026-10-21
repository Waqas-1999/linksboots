<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);

$page_title = 'Page Not Found — ' . SITE_NAME;
$page_desc  = 'That page does not exist. Try the services index or the blog instead.';

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="hero-grid"></div>
  <div class="wrap">
    <div class="hero-home">
      <span class="pill reveal"><b>404</b> Page not found</span>
      <h1 class="reveal">This Page Went <span class="gradient-text">Missing</span></h1>
      <p class="lead reveal">The link is broken or the page has moved. Nothing here is lost for good &mdash; try one of these instead.</p>
      <div class="btn-row reveal">
        <a class="btn btn-primary btn-lg" href="<?= url() ?>">Back to Home <?= icon('arrow') ?></a>
        <a class="btn btn-ghost btn-lg" href="<?= url('services') ?>">Browse Services</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <?php section_head('Popular Pages', 'Try One of <span class="gradient-text">These</span>'); ?>
    <div class="grid g3"><?php service_cards(); ?></div>
    <div class="btn-row center reveal" style="margin-top:44px">
      <a class="btn btn-outline" href="<?= url('blog') ?>">Read the Blog <?= icon('arrow') ?></a>
      <a class="btn btn-dark" href="<?= url('contact-us') ?>">Contact Us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
