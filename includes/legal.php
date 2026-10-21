<?php
/**
 * Shared renderer for the legal pages. A page sets $legal (an array with
 * title, lead, updated and sections) and requires this file.
 *
 * These are general-purpose templates, not legal advice. Have a solicitor
 * review them before the site goes live.
 */
require_once __DIR__ . '/config.php';

$page_title = $legal['title'] . ' — ' . SITE_NAME;
$page_desc  = $legal['lead'];

require __DIR__ . '/header.php';

hero_inner([
  'crumbs'  => [['label' => $legal['title']]],
  'eyebrow' => 'Legal',
  'pill'    => 'Last updated ' . $legal['updated'],
  'title'   => $legal['heading'],
  'lead'    => $legal['lead'],
]);
?>

<section class="section">
  <div class="wrap-md">
    <div class="alert alert-ok reveal" style="background:var(--surface-3);color:var(--blue-700);border-color:var(--line)">
      <?= icon('doc') ?>
      <span>This is a general template. Have it reviewed by a qualified solicitor before relying on it.</span>
    </div>

    <div class="prose reveal">
      <?php foreach ($legal['sections'] as $s): ?>
        <h2><?= e($s['h']) ?></h2>
        <?php foreach ($s['body'] as $block):
          if (is_array($block)): ?>
            <ul><?php foreach ($block as $li): ?><li><?= e($li) ?></li><?php endforeach; ?></ul>
          <?php else: ?>
            <p><?= $block ?></p>
          <?php endif;
        endforeach;
      endforeach; ?>

      <h2>Contact Us</h2>
      <p>Questions about this page can go to
        <a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a>,
        or by post to <?= e(SITE_ADDRESS) ?>.</p>
    </div>
  </div>
</section>

<?php cta_band('Still Have Questions?', 'If anything here is unclear, ask us directly. We would rather answer it than have you guess.'); ?>
<?php require __DIR__ . '/footer.php'; ?>
