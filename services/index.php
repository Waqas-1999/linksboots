<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../data/services-content.php';

$page_title = 'Services — SEO, Link Building, Digital PR, AI Visibility & PPC | ' . SITE_NAME;
$page_desc  = 'Every Links Boots service in one place: SEO, link building, digital PR, AI visibility, paid media and content marketing, run as one integrated system.';

require __DIR__ . '/../includes/header.php';

$nav = nav_services();
$all = service_content();

hero_inner([
  'crumbs'  => [['label' => 'Services']],
  'eyebrow' => 'Services',
  'pill'    => 'Six disciplines, one system',
  'title'   => 'Everything Needed to Get <span class="gradient-text">Found and Chosen</span>',
  'lead'    => 'Six disciplines that reinforce each other rather than sitting in silos. Run the full system, or start with the one closing the biggest gap.',
  'ticks'   => ['Fully in-house team', 'One integrated strategy', 'Reporting you can verify'],
  'panel'   => ['title' => 'How engagements start', 'metrics' => [
      ['01', 'Audit of where you actually stand'],
      ['02', 'Priorities ranked by revenue impact'],
      ['03', 'Scope, timing and cost, in writing'],
      ['04', 'Work ships in the first month'],
  ]],
]);
?>

<section class="section">
  <div class="wrap">
    <?php section_head_split('The Full Range', 'Solutions designed to improve your visibility', 'With our assistance, businesses overcome online visibility challenges and connect with the right audience.'); ?>
    <div class="svc-rows"><?php service_rows(); ?></div>
  </div>
</section>

<!-- every child service, grouped by pillar -->
<section class="section section-alt">
  <div class="wrap">
    <?php section_head('Directory', 'Every service, in one place', 'Eighteen focused services across the six disciplines.'); ?>
    <div class="directory">
      <?php foreach ($nav as $slug => $s): ?>
      <div class="dir-group reveal">
        <h3><a href="<?= url($slug) ?>"><?= e($s['label']) ?></a></h3>
        <ul>
          <?php foreach ($s['children'] as $ch): $cd = $all[$ch['path']] ?? []; ?>
          <li><a href="<?= url($ch['path']) ?>"><b><?= e($ch['label']) ?></b><span><?= e($cd['card_blurb'] ?? '') ?></span><?= icon('arrow') ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <?php section_head('Who We Help', 'Built for Ambitious <span class="gradient-text">Brands and Agencies</span>', 'Search visibility does not just attract traffic, it starts conversations with the right people.'); ?>
    <?php tile_grid([
      ['building','In-house Teams','For companies that want search presence, better enquiries, and credibility in their market.'],
      ['users','SEO & Digital Agencies','Extra support for teams that need reliable output without adding pressure to internal staff.'],
      ['bolt','SaaS & Technology','Search-focused support for campaigns that need stronger authority and business value.'],
      ['globe','Multi-market Businesses','Visibility for companies competing in crowded markets where trust affects every decision.'],
      ['money','E-commerce','Category and product visibility across search, shopping and the answer engines buyers now use first.'],
      ['shield','Regulated Sectors','Careful, defensible work for finance, legal and health brands where accuracy is not optional.'],
    ], 'g3', 'lead'); ?>
    <div style="margin-top:56px">
      <?php stat_band([['450','+','Links Built Monthly'],['120','+','Agency Partners'],['28','+','Countries Covered'],['100','%','Manual Reach']]); ?>
    </div>
  </div>
</section>

<?php faq_section('Choosing a service', [
      ['Which service should we start with?', 'It depends on what is capping you. If the site cannot be crawled properly, technical SEO comes first. If content ranks but has no authority behind it, link building does. We tell you which after the audit rather than before.'],
      ['Can we run more than one service?', 'Yes, and most clients do. The services are designed to compound: content gives links something worth pointing at, links give content the authority to rank, and both feed AI visibility.'],
      ['Do you offer bundled retainers?', 'Yes. Full-service retainers cover several disciplines under one strategy and one report. They usually cost less than buying the same work separately.'],
      ['Is there a minimum commitment?', 'Link building and content can start as single campaigns. Retainers typically run on a three-month minimum, because that is the honest point at which results become readable.'],
      ['Do you work white-label?', 'Yes, across every service. Reports are branded to you and nothing identifies Links Boots to your clients.'],
      ['What if we only need an audit?', 'That is a standalone deliverable in SEO and paid media. You get the findings and the fix list whether or not you hire us to implement them.'],
    ], 'section-alt'); ?>

<?php cta_band(); ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>
