<?php
/**
 * Child service pages (three under each of the six pillars).
 * Keyed by URL path so templates/service.php can resolve parents and siblings.
 */
require_once __DIR__ . '/services-children-2.php';

function child_service_content(): array {
    $c = [];

/* ================================================ LINK BUILDING CHILDREN */
$c['link-building/guest-posting-services'] = [
  'parent' => 'link-building', 'label' => 'Guest Posting', 'icon' => 'doc',
  'card_blurb' => 'Editorially placed articles on traffic-verified sites in your niche, written by native writers and approved by you first.',
  'meta_title' => 'Guest Posting Services — Editorial Placements on Real Sites | Links Boots',
  'meta_desc'  => 'Guest posts placed on niche-relevant sites with verified organic traffic. Native-written articles, publisher approval, and a 12-month replacement guarantee.',
  'eyebrow' => 'Guest Posting', 'pill' => 'Real sites, real readers',
  'title' => 'Guest Posts on Sites That <span class="gradient-text">Actually Have Readers</span>',
  'lead'  => 'Editorially placed articles on niche-relevant publishers with verified organic traffic. You approve the shortlist before a single pitch goes out.',
  'ticks' => ['1,000+ monthly visits minimum', 'Native-written articles', 'You approve the sites', 'No PBNs, ever'],
  'panel' => ['title' => 'Placement criteria', 'metrics' => [
      ['1,000+','Minimum monthly organic visits'],['DR 30-80','Authority range available'],
      ['< 3','Maximum spam score'],['14d','Typical time to live'],
  ]],
  'intro' => [
    'eyebrow' => 'The Difference',
    'h2' => 'A Link Is Only Worth the <span class="gradient-text">Page It Sits On</span>',
    'paras' => [
      'Domain rating tells you what a site used to be. Page traffic tells you what it is now. Plenty of high-DR domains publish guest content onto pages that no human ever visits, and those links do close to nothing.',
      'We screen the page as well as the domain. If the site does not have an audience and a subject that matches yours, it does not make the shortlist.',
    ],
    'checks' => ['Domain screened for real organic traffic','Niche relevance checked manually, not by category tag','Publishing history reviewed for guest-post farming','Outbound link profile checked before we pitch'],
  ],
  'visual' => ['title' => 'What every placement includes', 'items' => [
      ['pen','1,000-1,500 word original article'],['users','Native English writer'],
      ['link','Contextual in-content link'],['eye','Publisher approved by you'],
      ['doc','Live URL, metrics and screenshot'],['refresh','12-month replacement cover'],
  ]],
  'includes' => [
    'eyebrow' => 'What You Get', 'h2' => 'Everything Included in <span class="gradient-text">One Placement</span>',
    'lead' => 'No add-on charges for writing, revisions, or reporting.',
    'tiles' => [
      ['search','Publisher Shortlisting','Domains screened on traffic, relevance, spam score and publishing history, then sent to you for approval.'],
      ['pen','Article Writing','Original 1,000 to 1,500 word pieces from native writers, tone-matched to the publisher, not spun or templated.'],
      ['users','Manual Outreach','Every pitch written fresh to a verified editor contact and followed up personally until confirmed.'],
      ['link','Contextual Placement','The link sits inside relevant body copy, not in an author bio or a footer block.'],
      ['doc','Full Reporting','Live URL, DR and DA, traffic figures, and a placement screenshot for every link.'],
      ['refresh','Replacement Guarantee','If a placement drops within twelve months, we replace it on an equivalent site inside 14 working days.'],
    ],
  ],
  'process' => [
    ['tag'=>'Brief','title'=>'Targets and Anchors','points'=>['Target URLs confirmed','Niche and market set','DR range agreed','Anchor preferences captured']],
    ['tag'=>'Shortlist','title'=>'You Approve the Sites','points'=>['Candidates screened on every rule','Traffic and relevance verified','Shortlist sent for approval','Rejections swapped out']],
    ['tag'=>'Write','title'=>'Article and Pitch','points'=>['Writer matched to subject','Draft written and edited','Pitch tailored per publisher','Follow-up until placed']],
    ['tag'=>'Deliver','title'=>'Live and Verified','points'=>['Link checked live and dofollow','Anchor confirmed correct','Metrics and screenshot supplied','Added to monthly monitoring']],
  ],
  'quality' => [
    'eyebrow'=>'Our Rules','h2'=>'What We <span class="gradient-text">Will Not Do</span>',
    'lead'=>'The shortcuts are easy and cheap. They are also the reason most link profiles need cleaning up two years later.',
    'items'=>[['shield','No PBNs or link farms'],['eye','No sites without organic traffic'],['lock','No paid-post disclosure sites'],
      ['users','No templated outreach'],['sparkle','No AI-written articles'],['doc','No hidden add-on fees'],
      ['refresh','No unreplaced dropped links'],['chart','No inflated metrics'],['clock','No indefinite timelines']],
  ],
  'stats'=>[['450','+','Links Built Monthly'],['1000','+','Min Monthly Visits'],['12','mo','Replacement Window'],['100','%','Manual Outreach']],
  'faqs'=>[
    ['Can I choose the sites?','Yes on Growth and Authority plans, which include a pre-approval shortlist. Starter orders use niche matching without pre-approval so turnaround stays fast.'],
    ['Who writes the article?','A native English writer matched to your subject. You get one revision round included, and we will re-brief rather than argue if the tone is off.'],
    ['Are the links dofollow?','Yes, and we verify it before delivery. If a publisher changes it later, our monitoring catches it and the replacement guarantee applies.'],
    ['How long until placement?','Typically 14 days from approved shortlist to live link. Some publishers run longer editorial calendars and we tell you upfront when that is the case.'],
    ['Will the post be marked as sponsored?','No. We only work with publishers who place contributed content editorially. Sites that tag everything as sponsored do not make the shortlist.'],
    ['Can you do this white-label?','Yes. Reports are branded to you and nothing identifies Links Boots to your clients.'],
  ],
];

$c['link-building/link-insertion-services'] = [
  'parent' => 'link-building', 'label' => 'Link Insertion', 'icon' => 'link',
  'card_blurb' => 'Links added into content that already ranks, so authority transfers immediately instead of waiting for a new page to mature.',
  'meta_title' => 'Link Insertion & Niche Edit Services — Links in Ranking Content | Links Boots',
  'meta_desc'  => 'Niche edits placed inside articles that already rank and already have traffic. Faster than guest posts, with the same publisher standards.',
  'eyebrow' => 'Link Insertion', 'pill' => 'Faster than a new post',
  'title' => 'Links Inside Content That <span class="gradient-text">Already Ranks</span>',
  'lead'  => 'Niche edits placed into established, indexed articles with existing traffic and authority, so the link starts working without waiting for a new page to mature.',
  'ticks' => ['Live, indexed pages only','Existing organic traffic','Contextually relevant','7-10 day turnaround'],
  'panel' => ['title' => 'Why insertions move faster', 'metrics' => [
      ['0','Days waiting for indexation'],['7-10','Typical days to live'],
      ['Aged','Pages with existing authority'],['Yes','Traffic verified before purchase'],
  ]],
  'intro' => [
    'eyebrow'=>'The Mechanism','h2'=>'Skip the <span class="gradient-text">Maturation Curve</span>',
    'paras'=>[
      'A brand-new guest post starts from zero. It has to be crawled, indexed, and given time to accumulate any authority of its own before the link inside it carries much weight.',
      'An insertion goes into a page that already has all of that. The article is indexed, it has rankings, and in many cases it already receives traffic. The link starts passing value almost immediately.',
    ],
    'checks'=>['Only pages that are already indexed and ranking','Existing organic traffic verified before we buy','Link placed where it genuinely fits the paragraph','Surrounding content reviewed for relevance'],
  ],
  'visual'=>['title'=>'What we check before insertion','items'=>[
      ['chart','Page-level organic traffic'],['search','Keywords the page ranks for'],
      ['clock','Page age and index status'],['link','Existing outbound link profile'],
      ['doc','Topical fit with your target page'],['shield','No paid-link footprints'],
  ]],
  'includes'=>[
    'eyebrow'=>'What You Get','h2'=>'Insertions Done <span class="gradient-text">Properly</span>',
    'lead'=>'Same standards as our guest posting, with a shorter path to live.',
    'tiles'=>[
      ['search','Page-Level Screening','We evaluate the specific article, not just the domain: traffic, rankings, age, and outbound link count.'],
      ['pen','Contextual Copy','Where a sentence needs adjusting to make the link read naturally, we write it and the editor approves it.'],
      ['link','Natural Anchor Placement','Anchors chosen to fit the sentence and your wider profile, not stuffed with exact-match commercial terms.'],
      ['eye','Approval Before Purchase','You see the exact URL and its metrics before we commit to the placement.'],
      ['doc','Complete Reporting','Live URL, page traffic, DR and DA, and a screenshot showing the link in context.'],
      ['refresh','12-Month Monitoring','Checked monthly and replaced within 14 working days if it is removed.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Brief','title'=>'Define the Target','points'=>['Target page and topic set','Anchor preferences agreed','Traffic floor confirmed','Excluded domains noted']],
    ['tag'=>'Source','title'=>'Find Ranking Pages','points'=>['Articles matched on topic','Page traffic verified','Index and age checked','URLs sent for approval']],
    ['tag'=>'Negotiate','title'=>'Agree the Placement','points'=>['Editor contacted directly','Sentence and anchor agreed','Copy adjusted where needed','Placement confirmed in writing']],
    ['tag'=>'Verify','title'=>'Live and Reported','points'=>['Link checked live and dofollow','Screenshot captured in context','Metrics reported','Added to monthly monitoring']],
  ],
  'quality'=>[
    'eyebrow'=>'Standards','h2'=>'A Shortcut on Time, <span class="gradient-text">Not on Quality</span>',
    'lead'=>'Insertions are faster. That is the only corner we cut.',
    'items'=>[['chart','Page traffic verified'],['clock','Aged, indexed pages only'],['eye','You approve every URL'],
      ['shield','No PBN networks'],['link','Natural anchor distribution'],['doc','Screenshot in context'],
      ['refresh','12-month replacement'],['lock','No link-swap schemes'],['users','Direct editor contact']],
  ],
  'stats'=>[['7','d','Fastest Time to Live'],['200','+','Insertions Monthly'],['12','mo','Replacement Window'],['100','%','Traffic Verified']],
  'faqs'=>[
    ['How is this different from a guest post?','A guest post is a new article. An insertion adds your link to an article that already exists, already ranks, and already has traffic. Insertions are faster and often cheaper; guest posts give you control over the whole piece.'],
    ['Is this the same as a niche edit?','Yes, the terms are interchangeable. Some providers use "niche edit" for lower-quality versions of the same thing, which is why we publish our screening criteria.'],
    ['Will the link look natural?','That is the main thing we control. We choose the paragraph, adjust the sentence if needed, and pick an anchor that reads as part of the writing rather than an insert.'],
    ['Can the link be removed later?','It can, which is why every placement is monitored monthly and covered by the twelve-month replacement guarantee.'],
    ['Do you insert into old, dead posts?','No. Pages must be indexed, ranking, and receiving organic traffic. An insertion into a dormant post is one of the most common ways this service gets done badly.'],
    ['How many insertions per month?','It depends on your niche depth. Most accounts run between five and twenty-five a month without straining relevance.'],
  ],
];

$c['link-building/multilingual-outreach-services'] = [
  'parent' => 'link-building', 'label' => 'Multilingual Outreach', 'icon' => 'globe',
  'card_blurb' => 'Native-language campaigns run by local outreach specialists, aligned to the language version of the page they are meant to support.',
  'meta_title' => 'Multilingual & International Link Building Services | Links Boots',
  'meta_desc'  => 'Native-language outreach across European, Gulf and Asian markets. Local publishers, local editors, and links aligned to your hreflang setup.',
  'eyebrow' => 'Multilingual Outreach', 'pill' => 'Native speakers, local publishers',
  'title' => 'Links That Work in <span class="gradient-text">Every Market You Sell In</span>',
  'lead'  => 'Campaigns built for local languages and local publishers, run by native-speaking outreach specialists, so brands expanding into new markets get links that actually count there.',
  'ticks' => ['14+ languages','Native outreach staff','Local publisher networks','Hreflang aligned'],
  'panel' => ['title' => 'Markets we run in', 'metrics' => [
      ['14+','Languages with native staff'],['28+','Countries covered'],
      ['Local','Editors, not translation agencies'],['Aligned','Links match the language version'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Mistake','h2'=>'Translation Is the <span class="gradient-text">Smallest Part</span>',
    'paras'=>[
      'A translated pitch sent to a German editor from an English outreach template reads exactly like what it is. Local publishers respond to local context: the events they cover, the competitors they know, the format they expect.',
      'Publisher landscapes are not interchangeable either. Some markets run on a handful of national outlets, others on dense networks of niche blogs. Building the same campaign shape in both wastes budget in one of them.',
    ],
    'checks'=>['Outreach written by native speakers, not translated','Top publishers mapped per market before pitching','Anchor ratios adapted to the language','Links pointed at the correct hreflang version'],
  ],
  'visual'=>['title'=>'Regions we cover','items'=>[
      ['globe','Western and Northern Europe'],['globe','Central and Eastern Europe'],
      ['globe','Gulf and MENA markets'],['globe','Latin America'],
      ['globe','Southeast Asia'],['globe','Nordics and Baltics'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Run','h2'=>'International Campaigns, <span class="gradient-text">Run Locally</span>',
    'lead'=>'One point of contact, native delivery in every market.',
    'tiles'=>[
      ['users','Native Outreach Specialists','Pitches written and sent by people who speak the language and know the publications, not by a translation layer.'],
      ['search','Market Publisher Mapping','The top publishers per language identified and ranked before any outreach begins.'],
      ['pen','Local-Language Content','Articles written natively for the market, not translated from an English original.'],
      ['layers','Hreflang Alignment','Links pointed at the correct language version so the campaign supports your setup instead of fighting it.'],
      ['chart','Per-Market Reporting','Placements, metrics and referral traffic broken out by market so you can see which ones are working.'],
      ['globe','Market Entry Support','Prioritisation advice when you are entering several markets and cannot fund them all at once.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Map','title'=>'Understand the Market','points'=>['Top publishers identified per language','Competitor link profiles reviewed locally','Ranking landscape assessed','Priority markets agreed']],
    ['tag'=>'Adapt','title'=>'Localise the Campaign','points'=>['Angles adapted to local context','Anchor strategy set per language','Native writers briefed','Target pages confirmed per locale']],
    ['tag'=>'Outreach','title'=>'Pitch in Language','points'=>['Native specialists contact editors','Relationships built, not transactions','Personal follow-up in language','Placements confirmed and scheduled']],
    ['tag'=>'Report','title'=>'Market by Market','points'=>['Placements reported per market','Local referral traffic tracked','Ranking movement per locale','Budget reallocated to what works']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Deliver','h2'=>'Local Everywhere, <span class="gradient-text">Managed Centrally</span>',
    'lead'=>'You deal with one team and one report. The outreach happens in fourteen languages behind it.',
    'items'=>[['users','Native-speaking outreach'],['globe','14+ languages'],['search','Per-market publisher maps'],
      ['pen','Natively written content'],['layers','Hreflang-aligned targets'],['chart','Per-market reporting'],
      ['shield','Same quality rules everywhere'],['clock','Single point of contact'],['refresh','12-month replacement']],
  ],
  'stats'=>[['14','+','Languages Covered'],['28','+','Countries Reached'],['600','+','Local Publishers'],['1','','Point of Contact']],
  'faqs'=>[
    ['Which languages do you cover?','Fourteen with native staff, including German, French, Spanish, Italian, Portuguese, Dutch, Polish, Swedish, Arabic, Turkish, Japanese and Korean. We will tell you honestly if a market is outside our network.'],
    ['Is the content translated or written natively?','Written natively. Translated content reads like translated content to an editor, and it is the most common reason international outreach gets ignored.'],
    ['Should links point to the English or local page?','The local one. If your German links point at an English page, you have paid for a signal that fights your own hreflang setup.'],
    ['How does pricing compare to English campaigns?','Similar in most European markets, sometimes lower in emerging ones. Where a market has very few credible publishers, prices go up because supply is genuinely limited.'],
    ['Can you help us prioritise markets?','Yes. If you cannot fund every market at once, we will look at search demand, competition and publisher availability and tell you which one to fund first.'],
    ['Do the same quality rules apply?','Yes. Traffic verification, relevance screening, spam thresholds and the replacement guarantee are identical in every language.'],
  ],
];

/* ========================================================== SEO CHILDREN */
$c['seo-services/technical-seo-services'] = [
  'parent' => 'seo-services', 'label' => 'Technical SEO', 'icon' => 'gear',
  'card_blurb' => 'Crawl, index, speed and structured data fixed at template level, so one ticket lifts thousands of URLs instead of one.',
  'meta_title' => 'Technical SEO Services — Crawl, Index, Speed and Schema | Links Boots',
  'meta_desc'  => 'Technical SEO audits and implementation. Crawlability, indexation, Core Web Vitals and structured data fixed at template level, delivered as developer-ready tickets.',
  'eyebrow' => 'Technical SEO', 'pill' => 'Fix the template, not the page',
  'title' => 'The Technical Floor That <span class="gradient-text">Caps Everything Else</span>',
  'lead'  => 'Crawlability, indexation, speed and structured data resolved at template level, delivered as prioritised tickets your developers can actually ship.',
  'ticks' => ['Template-level fixes','Developer-ready tickets','Core Web Vitals','Validated schema'],
  'panel' => ['title' => 'What an audit covers', 'metrics' => [
      ['Crawl','Full site crawl and log review'],['Index','Coverage and canonical audit'],
      ['Speed','Field data on commercial templates'],['Schema','Validated, not just present'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why It Matters','h2'=>'One Template Problem Can Cap <span class="gradient-text">Ten Thousand URLs</span>',
    'paras'=>[
      'Technical SEO rarely wins a ranking on its own. What it does is remove the ceilings. A blocked crawl path, a duplicated canonical, or a template that renders after JavaScript will quietly cap everything content and links are trying to achieve.',
      'On most sites the fix is at template level, which means one ticket instead of a project. Finding which template is the job.',
    ],
    'checks'=>['Crawl paths verified end to end','Index coverage reconciled against what should be there','Core Web Vitals judged on field data, not lab scores','Structured data validated rather than assumed'],
  ],
  'visual'=>['title'=>'What we audit','items'=>[
      ['search','Crawlability and robots directives'],['doc','Index coverage and canonicals'],
      ['bolt','Core Web Vitals and rendering'],['layers','Site architecture and link depth'],
      ['globe','Hreflang and international setup'],['gear','Structured data and validation'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Fix','h2'=>'The Twenty Checks That Find <span class="gradient-text">Most Real Problems</span>',
    'lead'=>'Not a 200-point list nobody finishes. The checks that account for the majority of what we find on real sites.',
    'tiles'=>[
      ['search','Crawl & Index Audit','Can Googlebot reach everything that matters, and is anything indexed that never should have been.'],
      ['doc','Canonical & Duplication','Canonicals verified to point where you think they point, and competing pages consolidated.'],
      ['bolt','Core Web Vitals','Field data on the templates carrying commercial traffic, not perfect scores on pages nobody visits.'],
      ['layers','Architecture & Internal Links','Link depth mapped across the site, with orphan pages treated as bugs rather than curiosities.'],
      ['gear','Structured Data','Schema implemented only where it reflects real page content, then validated so it does not suppress rich results.'],
      ['globe','International Setup','Hreflang, locale targeting and duplicate-market handling for sites selling in more than one language.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Crawl','title'=>'See What Google Sees','points'=>['Full crawl with rendering enabled','Log file review where available','Search Console coverage reconciled','Rendering differences flagged']],
    ['tag'=>'Diagnose','title'=>'Find the Template','points'=>['Issues grouped by template, not URL','Root causes separated from symptoms','Impact estimated per fix','Findings ranked by payoff']],
    ['tag'=>'Ticket','title'=>'Write It for Developers','points'=>['Each fix written as a clear ticket','Reasoning attached so nothing gets dropped','Acceptance criteria defined','Sequenced around your release cycle']],
    ['tag'=>'Verify','title'=>'Confirm It Shipped','points'=>['Re-crawl after each release','Coverage change measured','Regressions caught early','Monitoring set for recurrence']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Deliver','h2'=>'An Audit You Can <span class="gradient-text">Actually Ship</span>',
    'lead'=>'A PDF nobody opens twice is not a deliverable. Everything comes out as prioritised, developer-ready work.',
    'items'=>[['doc','Developer-ready tickets'],['chart','Impact-ranked priorities'],['gear','Template-level fixes'],
      ['bolt','Field-data performance'],['shield','Validated schema only'],['refresh','Post-release verification'],
      ['users','Works with your dev team'],['eye','Regression monitoring'],['clock','Sequenced to your releases']],
  ],
  'stats'=>[['180','+','Sites Audited'],['20','','Core Checks'],['3','x','Average Crawl Efficiency Gain'],['100','%','Fixes Verified Post-Release']],
  'faqs'=>[
    ['Do you implement fixes or just report them?','Both are available. Most clients take the tickets and ship them in-house because it is faster; where you need implementation, we can do it directly or work alongside your developers.'],
    ['Will this break anything on our site?','Nothing ships without acceptance criteria and a re-crawl afterwards. Technical SEO changes can have side effects, which is exactly why verification is part of the process rather than an optional extra.'],
    ['How long does an audit take?','Two to three weeks for most sites, longer for large e-commerce or multi-locale platforms. You get findings as they are confirmed rather than everything at the end.'],
    ['Is Core Web Vitals still worth chasing?','On the templates that carry commercial traffic, yes. Chasing a perfect score sitewide is usually a poor use of developer time.'],
    ['We are on Shopify/WordPress/Webflow. Can you help?','Yes. Platform constraints change what is possible, and we will tell you upfront when a fix is genuinely blocked by the platform rather than quietly leaving it on the list.'],
    ['How often should we re-audit?','Annually for stable sites, and after any migration, replatform or major template change. Those three events cause most of the technical damage we find.'],
  ],
];

$c['seo-services/on-page-seo-services'] = [
  'parent' => 'seo-services', 'label' => 'On-Page SEO', 'icon' => 'pen',
  'card_blurb' => 'Titles, structure, depth and internal links rebuilt around the intent behind the query rather than the keyword in it.',
  'meta_title' => 'On-Page SEO Services — Content Optimisation That Ranks | Links Boots',
  'meta_desc'  => 'On-page SEO built around search intent: titles, headings, content depth, internal linking and cannibalisation fixes on the pages that carry commercial value.',
  'eyebrow' => 'On-Page SEO', 'pill' => 'Intent first, keywords second',
  'title' => 'Pages Built for the Question, <span class="gradient-text">Not the Keyword</span>',
  'lead'  => 'Titles, structure, depth and internal links rebuilt around what the searcher actually wants, starting with the pages closest to a commercial result.',
  'ticks' => ['Intent-matched rewrites','Cannibalisation fixes','Internal link systems','Page-two quick wins'],
  'panel' => ['title' => 'Where we start', 'metrics' => [
      ['8-20','Positions with the cheapest wins'],['Top 20','Pages prioritised first'],
      ['Intent','Matched before anything else'],['4-8wk','Typical time to movement'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Shortcut','h2'=>'Positions 8 to 20 Are the <span class="gradient-text">Cheapest Wins You Have</span>',
    'paras'=>[
      'Pages sitting just off page one already have relevance and some authority. They are short of a signal or two, not a rebuild. Fixing the top twenty of those usually beats publishing anything new.',
      'Google resolves queries into topics. A page that answers the full question, including the follow-up a reader would ask next, outranks a page that repeats a phrase more often.',
    ],
    'checks'=>['Pages matched to the intent actually shown in the results','Subtopics competitors cover and you do not, added','Titles rewritten to earn the click','Two or three internal links pointed at each target'],
  ],
  'visual'=>['title'=>'What we change on a page','items'=>[
      ['doc','Title and meta description'],['layers','Heading structure and sections'],
      ['pen','Content depth and coverage'],['link','Internal links in and out'],
      ['gear','Schema and page metadata'],['eye','Above-the-fold intent match'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'On-Page Work That <span class="gradient-text">Compounds</span>',
    'lead'=>'Applied to the pages that carry commercial value, in the order that moves your numbers fastest.',
    'tiles'=>[
      ['search','Intent Analysis','What the current results actually reward for each target query, and how far your page sits from that.'],
      ['pen','Content Depth Rebuild','The subtopics, questions and evidence competitors cover, added properly rather than padded in.'],
      ['doc','Titles & Metadata','Rewritten to earn the click from a human, which is also what improves the click-through signal.'],
      ['layers','Cannibalisation Fixes','Pages competing for the same query consolidated or differentiated so they stop splitting each other.'],
      ['link','Internal Link Systems','Deliberate linking from your stronger pages into the targets that need authority.'],
      ['sparkle','AI-Ready Structure','Direct answers under question headings so the page can be quoted by assistants as well as ranked.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Prioritise','title'=>'Find the Near-Misses','points'=>['Search Console pulled and sorted','Positions 8-20 with real impressions listed','Commercial value weighted in','Top twenty targets agreed']],
    ['tag'=>'Analyse','title'=>'Compare Against Page One','points'=>['Intent of current results assessed','Coverage gaps mapped per page','Cannibalisation identified','Internal link opportunities found']],
    ['tag'=>'Rewrite','title'=>'Rebuild the Page','points'=>['Structure rebuilt around real questions','Depth added where it is missing','Title and metadata rewritten','Schema applied and validated']],
    ['tag'=>'Link & Track','title'=>'Support and Measure','points'=>['Internal links pointed at the target','Changes logged with a date','Movement tracked per page','Next batch prioritised']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Work','h2'=>'Changes You Can <span class="gradient-text">Trace to a Result</span>',
    'lead'=>'Every edit is logged with a date so movement can be attributed rather than claimed.',
    'items'=>[['chart','Impact-first prioritisation'],['search','Real intent analysis'],['doc','Dated change logs'],
      ['layers','Cannibalisation resolved'],['link','Deliberate internal linking'],['sparkle','Structured for AI citation'],
      ['refresh','Scheduled re-optimisation'],['eye','Per-page tracking'],['users','Works with your writers']],
  ],
  'stats'=>[['20','','Pages Per Sprint'],['8','wk','Typical Time to Movement'],['60','%','Wins From Page Two'],['100','%','Changes Logged']],
  'faqs'=>[
    ['Do you rewrite pages or just advise?','Either. Most clients take the rewrites from us; some prefer briefs their own writers execute. Both work, as long as the brief is specific enough to be followed.'],
    ['How many pages can you work on at once?','Around twenty per sprint on most accounts. Going wider usually means going shallower, which is where on-page work stops producing results.'],
    ['What is cannibalisation and does it really matter?','It is two or more of your pages competing for the same query, splitting signals so neither ranks well. It matters, and it is one of the most common issues we find on sites that publish regularly.'],
    ['Will rewriting hurt pages that already rank?','It can if done carelessly, which is why we work in dated batches and track each page. Pages performing well are left alone unless there is a clear reason to touch them.'],
    ['How quickly will we see change?','Four to eight weeks for pages already near page one. Pages starting further back take longer and usually need link support as well.'],
    ['Does on-page work help with AI answers?','Yes, substantially. Clear structure and direct answers are exactly what assistants extract, so the same work serves both.'],
  ],
];

$c['seo-services/local-seo-services'] = [
  'parent' => 'seo-services', 'label' => 'Local SEO', 'icon' => 'pin',
  'card_blurb' => 'Google Business Profile, citations, reviews and location pages for businesses whose customers search with a place in mind.',
  'meta_title' => 'Local SEO Services — Google Business Profile and Map Pack | Links Boots',
  'meta_desc'  => 'Local SEO for businesses that sell in a place. Google Business Profile optimisation, citation consistency, review strategy and location pages that rank.',
  'eyebrow' => 'Local SEO', 'pill' => 'Own the map pack',
  'title' => 'Show Up When Someone Searches <span class="gradient-text">Near You</span>',
  'lead'  => 'Google Business Profile, citations, reviews and location pages handled properly, so you appear in the map pack for the searches that end in a phone call.',
  'ticks' => ['Map pack visibility','Citation consistency','Review strategy','Multi-location support'],
  'panel' => ['title' => 'What drives local rank', 'metrics' => [
      ['Profile','Completeness and category accuracy'],['NAP','Consistency across every citation'],
      ['Reviews','Volume, recency and responses'],['Pages','Genuine location-specific content'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why Local Is Different','h2'=>'The Map Pack Is a <span class="gradient-text">Separate Competition</span>',
    'paras'=>[
      'Local results run on a different set of signals from organic ones. Proximity, profile completeness, category accuracy, citation consistency and review activity decide the map pack, and a strong organic site can still lose it.',
      'For businesses that sell in a place, those three map results are usually worth more than anything below them.',
    ],
    'checks'=>['Google Business Profile fully built and categorised','Name, address and phone identical across every citation','Reviews earned steadily and responded to','Location pages with genuine local content, not templates'],
  ],
  'visual'=>['title'=>'What we manage','items'=>[
      ['pin','Google Business Profile'],['building','Citation building and cleanup'],
      ['star','Review generation and response'],['doc','Location landing pages'],
      ['search','Local keyword targeting'],['chart','Map pack rank tracking'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'Everything the Map Pack <span class="gradient-text">Actually Rewards</span>',
    'lead'=>'Single location or fifty, the mechanics are the same and the consistency requirement gets harder.',
    'tiles'=>[
      ['pin','Google Business Profile','Categories, services, attributes, hours, photos and posts, set up correctly and kept current.'],
      ['building','Citation Management','Directory listings built and cleaned so your details are identical everywhere, including the ones you have forgotten about.'],
      ['star','Review Strategy','A process for earning reviews steadily and responding to all of them, including the difficult ones.'],
      ['doc','Location Pages','Pages with genuinely local content that rank, rather than one template with the city name swapped out.'],
      ['search','Local Keyword Targeting','The service-plus-place queries that convert, mapped to the right page for each location.'],
      ['chart','Map Pack Tracking','Grid-based rank tracking that shows how visibility changes with distance from your location.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Audit','title'=>'Find the Inconsistencies','points'=>['Profile completeness reviewed','Every citation found and checked','Duplicate listings identified','Review profile assessed']],
    ['tag'=>'Clean','title'=>'Make Everything Match','points'=>['NAP standardised across all sources','Duplicates merged or removed','Profile fully completed','Categories corrected']],
    ['tag'=>'Build','title'=>'Add What Is Missing','points'=>['New citations on relevant directories','Location pages written','Review request process set up','Posts and photos scheduled']],
    ['tag'=>'Sustain','title'=>'Keep It Current','points'=>['Grid rank tracking per location','Reviews monitored and answered','Profile updated as things change','Monthly reporting per location']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Work','h2'=>'Consistency Is <span class="gradient-text">The Whole Game</span>',
    'lead'=>'Local SEO fails on small contradictions: an old suite number, a legacy phone line, a duplicate listing nobody claimed.',
    'items'=>[['building','Full citation cleanup'],['pin','Profile optimisation'],['star','Review generation process'],
      ['doc','Real location pages'],['chart','Grid rank tracking'],['users','Multi-location support'],
      ['shield','Duplicate listing removal'],['refresh','Ongoing profile updates'],['eye','Per-location reporting']],
  ],
  'stats'=>[['3','x','Average Map Pack Lift'],['60','+','Citation Sources'],['50','+','Locations Managed'],['100','%','NAP Consistency Target']],
  'faqs'=>[
    ['How long until we appear in the map pack?','Profile and citation fixes often show within four to eight weeks. Competitive urban categories take longer, and proximity will always cap how far your reach extends.'],
    ['Do you handle multiple locations?','Yes. Multi-location work is mostly a consistency problem at scale, plus location pages that are genuinely different rather than templated.'],
    ['Can you remove bad reviews?','Only ones that breach Google policy, and we will flag those. Otherwise the strategy is earning enough genuine recent reviews that individual bad ones stop mattering, and responding to them well.'],
    ['Are citations still worth building?','Consistency matters more than volume now. Cleaning up contradictory listings usually produces more movement than adding new ones.'],
    ['Do we need location pages if we have a profile?','For most businesses, yes. The profile wins the map pack; the location page wins the organic result underneath it, and they support each other.'],
    ['What if we serve an area rather than a storefront?','Service-area businesses are handled differently, with the profile configured accordingly. The rest of the work is broadly the same.'],
  ],
];

    return $c + child_service_content_two();
}
