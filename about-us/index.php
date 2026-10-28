<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'About ' . SITE_NAME . ' — Meet Your Growth Partner';
$page_desc  = 'Links Boots is a digital marketing agency for brands tired of short-term tricks. We focus on the fundamentals that compound: authority, relevance, and quality traffic.';

require __DIR__ . '/../includes/header.php';

hero_inner([
  'crumbs'  => [['label' => 'About Us']],
  'eyebrow' => 'About Us',
  'pill'    => 'Fully in-house team',
  'title'   => 'Meet Your <span class="gradient-text">Growth Partner</span>',
  'lead'    => 'We are a digital marketing agency for brands tired of short-term tricks. We focus on the fundamentals that compound: authority, relevance, and quality traffic.',
  'ticks'   => ['No outsourced delivery', 'No guaranteed-ranking promises', 'Reporting you can verify'],
]);
?>

<section class="section">
  <div class="wrap">
    <div class="split split-wide">
      <div class="reveal">
        <span class="eyebrow">Our Story</span>
        <h2>How We <span class="gradient-text">Started</span></h2>
        <p class="lead">What started with a passion for search and genuine client relationships has grown into a full-service digital marketing operation helping brands and agencies build authority and grow at scale.</p>
        <p>We started because too many campaigns were being sold on promises nobody intended to measure. The fix was not a cleverer tactic. It was doing ordinary work properly, reporting it honestly, and staying in the conversation when results took longer than anyone wanted.</p>
      </div>
      <div class="split-visual reveal">
        <figure class="photo-tall">
          <img src="<?= asset('img/photos/team-office.jpg') ?>"
               alt="A marketing team collaborating in an office"
               width="1200" height="800" loading="lazy" decoding="async">
        </figure>
      </div>
    </div>

    <ol class="milestones reveal">
      <?php foreach ([
        ['Digital Roots','Built our foundation through hands-on SEO, content and outreach.'],
        ['Service Growth','Grew into paid media, digital PR, content strategy, organic and AI visibility.'],
        ['Global Reach','Expanded our work across international markets and industries.'],
        ['Lasting Impact','Helped agencies and brands strengthen their authority and drive sustainable growth.'],
      ] as $i => $s): ?>
      <li><span><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span><h3><?= e($s[0]) ?></h3><p><?= e($s[1]) ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- ------------------------------------------------------------- team -->
<section class="section section-alt">
  <div class="wrap">
    <?php section_head('The Person Behind ' . SITE_NAME_CAPS, 'One standard, no shortcuts', 'Senior people doing the work, rather than supervising someone else doing it.'); ?>
    <div class="grid" style="gap:24px">
      <article class="person reveal">
        <div class="person-photo">AS</div>
        <div>
          <h3>Muhammad Waqas</h3>
          <p class="role">Founder &amp; CEO &middot; 5+ Years in Digital Marketing</p>
          <p>Waqas has spent more than five years in digital marketing, building experience across everything from ambitious startups to established enterprise brands. Through every shift in search the approach has stayed the same: do the work properly, maintain real standards, and think about the client&rsquo;s long-term growth rather than the next invoice. That philosophy became Links Boots.</p>
          <p>Active in the wider search community and a regular at industry events including BrightonSEO, Waqas stays close to how search keeps changing so client strategies never fall a step behind it.</p>
          <ul class="person-stats">
            <li>5+ years in digital marketing</li>
            <li>UK &middot; USA &middot; Europe</li>
            <li>Regular at BrightonSEO</li>
          </ul>
          <blockquote>Not the biggest. Not the loudest. The best to actually partner with.</blockquote>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------ values -->
<section class="section">
  <div class="wrap">
    <div class="split rev">
      <div class="split-visual reveal">
        <div class="measure">
          <h3>The three things we measure</h3>
          <dl>
            <div><dt>Visibility</dt><dd>How often you show up</dd></div>
            <div><dt>Position</dt><dd>Where you land against rivals</dd></div>
            <div><dt>Sentiment</dt><dd>How you are talked about</dd></div>
          </dl>
        </div>
      </div>
      <div class="reveal">
        <span class="eyebrow">What Drives Us</span>
        <h2>Results Without <span class="gradient-text">the Shortcuts</span></h2>
        <p>Our marketers do not believe in shortcuts. We understand each project completely before starting the work, and stay in touch throughout rather than reappearing at reporting time.</p>
        <p>When something is not working we say so early. That is uncomfortable in the moment and it is the only thing that makes a long engagement worth having.</p>
        <div class="btn-row" style="margin-top:28px">
          <a class="btn btn-primary" href="<?= e(BOOKING_URL) ?>">Book a Strategy Call <?= icon('arrow') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- -------------------------------------------------------------- data -->
<section class="section section-dark">
  <div class="wrap">
    <?php section_head('How We Handle Your Data', 'Your Data Stays <span class="gradient-text">Between Us</span>', 'We do not share data with anyone outside the project. Reports and account access remain between you and us, and our team complies with data protection rules.'); ?>
    <?php tile_grid([
      ['lock','Client Data','Only used for the work we are doing with you, never repurposed or shared with another client.'],
      ['eye','Reporting Access','You choose who on your team sees what, and access is revoked the day an engagement ends.'],
      ['shield','GDPR Compliance','We handle data in accordance with UK and EU rules, and we can put that in writing.'],
    ], 'g3', 'ledger'); ?>
  </div>
</section>

<?php if (PROOF_VERIFIED): ?>
<!-- events: placeholders until real conferences are listed -->
<section class="section">
  <div class="wrap">
    <?php section_head('Industry', 'Conferences We&rsquo;ve <span class="gradient-text">Been Part Of</span>', 'We stay close to the people driving search and digital marketing forward. These are some of the events where you will find our team.'); ?>
    <?php tile_grid([
      ['users','[Event name]','[Placeholder — add a conference the team has actually attended or spoken at.]'],
      ['flag','[Event name]','[Placeholder]'],
      ['globe','[Event name]','[Placeholder]'],
      ['trophy','[Event name]','[Placeholder]'],
    ], 'g4'); ?>
  </div>
</section>

<section class="section section-alt">
  <div class="wrap">
    <?php section_head('Who We Serve', 'Businesses We <span class="gradient-text">Work With</span>'); ?>
    <div class="logos logos-light reveal" style="margin-bottom:44px"><?php logo_strip('Client logos'); ?></div>
    <?php testimonials(); ?>
  </div>
</section>

<?php endif; ?>

<?php cta_band(); ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>
