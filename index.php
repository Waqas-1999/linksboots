<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/posts.php';

$page_title = SITE_NAME . ' — Professional Digital Marketing Built for Growth';
$page_desc  = 'Links Boots is a full-service digital marketing agency helping enterprise and small businesses get found online, build real authority, and turn search traffic into customers.';

require __DIR__ . '/includes/header.php';

$posts = all_posts();
?>

<!-- ============================================================ HERO -->
<section class="hero hero-home">
  <div class="hero-home-inner">
    <h1 class="hero-title">Professional <span class="hl">Digital Marketing</span> Services for <span class="hl">Growth</span></h1>
    <p class="lead">A full-service agency helping businesses get found online, build real authority, and turn search traffic into customers.</p>
    <div class="btn-row">
      <a class="btn btn-primary btn-lg" href="<?= e(BOOKING_URL) ?>">Start Growing Today</a>
      <a class="btn btn-ghost btn-lg" href="<?= url('contact-us') ?>">Discuss Your Project</a>
    </div>
  </div>

  <!-- two gold growth lines along the bottom edge, as on the reference -->
  <svg class="hero-wave hero-wave-a" viewBox="0 0 1440 532" preserveAspectRatio="none" aria-hidden="true">
    <defs><linearGradient id="hwA" x1="1441" y1="306" x2="489" y2="1125" gradientUnits="userSpaceOnUse">
      <stop stop-color="#A8841F"/><stop offset=".32" stop-color="#E9C96B"/><stop offset=".39" stop-color="#F3DC8C"/>
      <stop offset=".68" stop-color="#E0BD55"/><stop offset=".75" stop-color="#E9C96B"/><stop offset=".91" stop-color="#957427"/><stop offset="1" stop-color="#7D5C15"/>
    </linearGradient></defs>
    <path d="M-94 528C110 528 126 287 178 265C229 244 260 396 335 455C409 513 431 426 527 415C623 404 738 455 785 455C832 455 861 357 891 357C922 357 957 454 1006 508C1093 604 1132 170 1191 226C1250 281 1286 69 1453 4" fill="none" stroke="url(#hwA)" stroke-width="8"/>
  </svg>
  <svg class="hero-wave hero-wave-b" viewBox="0 0 1440 532" preserveAspectRatio="none" aria-hidden="true">
    <path d="M-60 520C140 500 210 340 300 360C390 380 420 470 540 470C660 470 700 380 820 390C940 400 960 480 1080 440C1200 400 1250 230 1460 120" fill="none" stroke="#D4AF37" stroke-opacity=".35" stroke-width="3"/>
  </svg>

  <!-- the reference's client-logo band; ours lists disciplines until real logos are cleared -->
  <div class="hero-band">
    <?php if (PROOF_VERIFIED): ?>
      <div class="wrap logos"><?php logo_strip(); ?></div>
    <?php else: ?>
      <div class="marquee" aria-label="What we do">
        <ul class="marquee-track">
          <?php for ($r = 0; $r < 2; $r++): foreach (nav_services() as $slug => $s): ?>
          <li<?= $r ? ' aria-hidden="true"' : '' ?>><a href="<?= url($slug) ?>"<?= $r ? ' tabindex="-1"' : '' ?>><?= icon($s['icon']) ?><?= e($s['label']) ?></a></li>
          <?php endforeach; endfor; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ======================================== WHAT GETTING FOUND MEANS -->
<section class="section">
  <div class="wrap reality">
    <div class="reveal">
      <span class="eyebrow">The New Search Reality</span>
      <h2>What getting found online actually means</h2>
      <p>People do not just search for queries on Google anymore. They ask ChatGPT, check Perplexity, read AI Overviews, scan review platforms, and use voice search, all before landing on a website. By the time someone visits a page, they have already made up their mind somewhere else.</p>
      <p class="reality-kicker">Getting found properly now means showing up consistently across:</p>
    </div>
    <!-- A buyer's path drawn as a sequence of touchpoints, not a list in a box -->
    <ol class="journey reveal" aria-label="Where buyers look before they visit">
      <li><span>01</span><b>Google Search &amp; AI Overviews</b><em>Classic results and the summary above them</em></li>
      <li><span>02</span><b>ChatGPT, Gemini &amp; Perplexity</b><em>Answers that name a shortlist</em></li>
      <li><span>03</span><b>Knowledge Panels &amp; voice search</b><em>The facts engines repeat about you</em></li>
      <li><span>04</span><b>Review platforms &amp; publications</b><em>Third-party proof buyers trust</em></li>
      <li class="is-end"><span>05</span><b>Your website</b><em>Where the decision is confirmed</em></li>
    </ol>
  </div>
</section>

<!-- ======================================================== SOLUTIONS -->
<section class="section section-alt">
  <div class="wrap">
    <?php section_head_split('Our Solutions', 'Solutions designed to improve your visibility', 'With our assistance, businesses overcome online visibility challenges and connect with the right audience.'); ?>
    <div class="svc-rows"><?php service_rows(); ?></div>
  </div>
</section>

<!-- =================================================== GROWTH PARTNER -->
<section class="section">
  <div class="wrap partner">
    <figure class="partner-media reveal">
      <img src="<?= asset('img/photos/team-collaboration.jpg') ?>"
           alt="The Links Boots team working together in the studio"
           width="1200" height="800" loading="lazy" decoding="async">
      <figcaption>Fully in-house team &mdash; no outsourced delivery.</figcaption>
    </figure>
    <div class="reveal">
      <span class="eyebrow">Why Links Boots</span>
      <h2>Your brand&rsquo;s growth partner</h2>
      <p>Links Boots has helped brands move from zero results to real organic traffic. We follow modern trends and believe in working smart, not hard. Strategy follows your goals, not a one-size-fits-all approach.</p>
      <p>Reporting stays clear and honest, even when results take time. Priorities are set based on what moves the numbers, not what is easiest to deliver. And when search trends shift, our approach shifts with it, so your brand never gets left behind.</p>
      <ul class="tagline-list">
        <?php foreach (['Real Experts','Unified Approach','Smarter Spend','AI + Traditional','Ongoing Support','Clear Answers'] as $p): ?>
        <li><?= e($p) ?></li>
        <?php endforeach; ?>
      </ul>
      <a class="link-more" href="<?= url('about-us') ?>">Get to know us <?= icon('arrow') ?></a>
    </div>
  </div>
</section>

<!-- ======================================================= WHY CHOOSE -->
<section class="section section-dark">
  <div class="wrap">
    <div class="statement reveal">
      <span class="eyebrow">Why Choose Us</span>
      <h2>One integrated system, not a bundle of disconnected services.</h2>
      <p class="lead">As a trusted agency with a fully in-house team, your investment compounds instead of sitting in silos, giving your brand an edge in both AI-powered and traditional search. Our reporting shows what we did and why, and we tell you upfront how we plan to deliver on every commitment.</p>
    </div>
    <?php stat_band([
      ['450', '+', 'Links Built Monthly'],
      ['120', '+', 'Agency Partners'],
      ['28',  '+', 'Countries Covered'],
      ['100', '%', 'Manual Reach'],
    ]); ?>
  </div>
</section>

<!-- ================================================= SEARCH AUTHORITY -->
<section class="section">
  <div class="wrap">
    <?php section_head_split('The Outcome', 'A smarter route to search authority', 'Six outcomes every campaign is designed to move, measured against your business numbers rather than vanity metrics.'); ?>
    <?php tile_grid([
      ['trophy',  'Search Authority',   'An authoritative presence in the results that carry business value.'],
      ['eye',     'Buyer Visibility',   'Presence where customers search, compare, and choose.'],
      ['shield',  'Brand Credibility',  'A stronger reason for prospects to trust the company before contact.'],
      ['phone',   'Qualified Enquiries','Calls, bookings, and messages from people closer to a buying decision.'],
      ['globe',   'Market Reach',       'Visibility across the places the right audience already checks.'],
      ['money',   'Revenue Focus',      'Search activity tied to leads, sales, and long-term clients.'],
    ]); ?>
  </div>
</section>

<!-- =========================================================== PROCESS -->
<section class="section section-alt">
  <div class="wrap">
    <?php section_head('How We Work', 'The process behind every result', 'Four stages, run in order, with a clear deliverable at the end of each one.'); ?>
    <?php process_steps([
      ['tag' => 'Audit & Discovery', 'title' => 'Your Custom Growth Blueprint', 'points' => [
        'Full SEO, website and performance audit',
        'Competitor and market opportunity analysis',
        'Content, social media and paid campaign review',
        'Growth opportunities prioritised by impact',
      ]],
      ['tag' => 'Strategy & Offer', 'title' => 'Custom Campaign Strategy', 'points' => [
        'Right channels selected based on audience data',
        'Messaging sharpened around performance numbers',
        'Offer refined to drive real action',
        'Clear plan built on data, not guesswork',
      ]],
      ['tag' => 'Build & Launch', 'title' => 'Campaign, Built and Tested', 'points' => [
        'Landing pages and ad creative built',
        'Page speed, forms and mobile display checked',
        'Tracking set up and verified',
        'Final review completed before launch',
      ]],
      ['tag' => 'Optimize & Scale', 'title' => 'Growth, Monitored Weekly', 'points' => [
        'Performance tracked and flagged early',
        'Underperforming ads cut or revised',
        'Winning campaigns scaled with more budget',
        'Regular reporting on where things stand',
      ]],
    ]); ?>
  </div>
</section>

<!-- ======================================================== IN PRACTICE -->
<section class="section-flush">
  <?php media_band(
    'team-office',
    'In Practice',
    'Strategy sessions, not status updates',
    'Every account gets a named lead who knows your market. You will always know what we changed this month, why it was on the list, and what it was meant to move.',
    'The Links Boots team in a working session'
  ); ?>
</section>

<!-- ========================================================= WHO WE HELP -->
<section class="section">
  <div class="wrap">
    <?php section_head_split('Who We Help', 'Built for ambitious brands and agencies', 'Search visibility does not just attract traffic, it starts conversations with the right people.'); ?>
    <?php tile_grid([
      ['building','In-house Teams','For companies that want search presence, better enquiries, and credibility in their market.'],
      ['users','SEO & Digital Agencies','Extra support for teams that need reliable output without adding pressure to internal staff.'],
      ['bolt','SaaS / Technology Companies','Search-focused support for campaigns that need stronger authority and business value.'],
      ['globe','Multi-market Businesses','Visibility for companies competing in crowded markets where trust affects every decision.'],
    ], 'g4', 'ledger'); ?>
  </div>
</section>

<?php if (PROOF_VERIFIED): ?>
<section class="section section-alt">
  <div class="wrap">
    <?php section_head('Testimonials', 'Here&rsquo;s what our clients say'); ?>
    <?php testimonials(); ?>
  </div>
</section>
<?php endif; ?>

<!-- ============================================================== BLOG -->
<section class="section section-alt">
  <div class="wrap">
    <div class="head-row reveal">
      <div>
        <span class="eyebrow">Insights</span>
        <h2>From the blog</h2>
      </div>
      <a class="link-more" href="<?= url('blog') ?>">More articles <?= icon('arrow') ?></a>
    </div>
    <div class="post-feature-grid">
      <?php $i = 0; foreach (array_slice($posts, 0, 4, true) as $slug => $p) { post_card($slug, $p, 0, $i++ === 0 ? 'feature' : 'row'); } ?>
    </div>
  </div>
</section>

<!-- =============================================================== FAQ -->
<?php faq_section('Common questions', [
  ['What is AI Visibility and why does it matter?', 'Nowadays, people use tools like ChatGPT, Gemini, and Perplexity to find businesses, services, and details. AI Visibility focuses on how your company is portrayed in these tools. It helps customers find accurate details about your business when they use AI platforms for answers.'],
  ['What is Digital PR and how does it work?', 'Digital PR can help your company get listed on news platforms and different industry publications. It may include press releases, editorial references, and articles published on topical authoritative websites. These mentions can increase brand recognition and make your website more credible.'],
  ['How is Links Boots different from other SEO agencies?', 'Links Boots does not sell the same campaign to every business. We review your website, market, competition, and goals before recommending any solutions. This means your plan is based on what your business needs rather than a fixed list of services.'],
  ['How long does it take to see results?', 'Results vary based on your website, competition, and target keywords. Most clients notice progress within 3 to 6 months. SEO takes time because rankings and online credibility develop gradually.'],
  ['What type of backlinks do you build?', 'We build backlinks via guest posts, link insertions, and outreach in different languages. Our team listens to your needs and then finds niche-relevant websites that can actually benefit your website. We avoid random links that add little value.'],
  ['Why should I hire a digital marketing agency?', 'A renowned digital marketing agency can accelerate your growth and manage all online marketing for your business. This may include SEO, ads, content, social media, and performance tracking. Hiring the right agency saves time and gives you experts across every area of marketing.'],
  ['How do I choose a digital marketing agency?', 'Start by reviewing their About Us page, their past work, client feedback, services, pricing, and communication. Ask questions to check they can satisfy your needs, reach your business goals, and how they measure progress. Be careful with agencies that make false promises or focus only on traffic without discussing enquiries, sales, or revenue.'],
  ['Can small businesses use digital marketing?', 'Yes. A small business can start with a limited budget and focus on the channels that matter most. This may include a website, Google Business Profile, local SEO, social media, or paid ads. The right choice depends on where your customers search for your services.'],
  ['How much do digital marketing companies charge?', 'Most companies have different packages depending on the services required, the size of the business, and the level of competition. Some charge monthly and others charge per project. A clear quote should explain what work is included and how progress will be measured.'],
  ['Do digital marketing agencies create content?', 'Yes, full-service digital marketing agencies have qualified writers for web content, blogs, social media posts, ads, emails, and videos. The type of content depends on the business and its audience. Good content explains the service clearly and answers the questions customers ask before making a decision.'],
]); ?>

<!-- ========================================================== CONTACT -->
<section class="section section-alt" id="book">
  <div class="wrap contact-split">
    <div class="reveal">
      <span class="eyebrow">Get in Touch</span>
      <h2>Let&rsquo;s grow your rankings</h2>
      <p class="lead">Search visibility does not just attract traffic, it starts conversations with the right people.</p>
      <dl class="contact-dl">
        <div><dt>Phone</dt><dd><a href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= e(SITE_PHONE) ?></a></dd></div>
        <div><dt>Email</dt><dd><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></dd></div>
        <div><dt>LinkedIn</dt><dd><a href="<?= e(SOCIAL_LINKEDIN) ?>">Connect on LinkedIn</a></dd></div>
        <div><dt>Office</dt><dd><?= e(SITE_ADDRESS) ?></dd></div>
      </dl>
    </div>
    <div class="reveal">
      <?php $compact_form = true; require __DIR__ . '/includes/contact-form.php'; ?>
    </div>
  </div>
</section>

<?php cta_band(); ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
