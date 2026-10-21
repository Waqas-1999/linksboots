<?php
/** Child pages: PPC & Paid Media and Content Marketing. */
function child_service_content_three(): array {
    $c = [];

/* ================================================== PAID MEDIA CHILDREN */
$c['paid-media/google-ads-management-services'] = [
  'parent' => 'paid-media', 'label' => 'Google Ads Management', 'icon' => 'search',
  'card_blurb' => 'Search, Shopping, Performance Max and YouTube built around commercial intent and managed to a target cost per acquisition.',
  'meta_title' => 'Google Ads Management Services — Managed to CPA, Not Clicks | Links Boots',
  'meta_desc'  => 'Google Ads management across Search, Shopping, Performance Max and YouTube. Flat fee, full account ownership, and decisions judged on cost per acquisition.',
  'eyebrow' => 'Google Ads Management', 'pill' => 'Flat fee, not a spend cut',
  'title' => 'Google Ads Judged on <span class="gradient-text">Cost Per Customer</span>',
  'lead'  => 'Search, Shopping, Performance Max and YouTube campaigns structured around commercial intent, managed to a target CPA, and reported against what your business actually earns.',
  'ticks' => ['Flat management fee','You own the account','Verified conversion tracking','Weekly optimisation'],
  'panel' => ['title' => 'What we fix first', 'metrics' => [
      ['01','Conversion tracking, end to end'],['02','Wasted spend on broad match'],
      ['03','Account structure and negatives'],['04','The landing page after the click'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Common Fault','h2'=>'Most Accounts Are Optimised <span class="gradient-text">Against Bad Data</span>',
    'paras'=>[
      'We audit tracking before touching a bid. On a large share of the accounts we inherit, conversions are double-counted, form views are recorded as submissions, or a migration broke the tag months ago and nobody checked.',
      'Every optimisation made on top of that is guesswork with a confident dashboard attached. Fix the measurement first and the rest of the work starts producing real answers.',
    ],
    'checks'=>['Conversion tracking verified against your CRM','Broad match and search terms audited for waste','Campaigns restructured around intent, not product lists','Landing pages tested as seriously as ad copy'],
  ],
  'visual'=>['title'=>'Campaign types we run','items'=>[
      ['search','Search and Dynamic Search'],['money','Shopping and Merchant Center'],
      ['sparkle','Performance Max'],['play','YouTube and Demand Gen'],
      ['refresh','Remarketing and RLSA'],['globe','International and multi-locale'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Manage','h2'=>'The Whole Account, <span class="gradient-text">Not Just the Bids</span>',
    'lead'=>'Structure, tracking, creative and the page after the click, because any one of them can sink the others.',
    'tiles'=>[
      ['target','Conversion Tracking','GA4, server-side events and CRM alignment so platform numbers match business numbers.'],
      ['layers','Account Restructure','Campaigns rebuilt around commercial intent, with negative lists and exclusions that stop budget leaking.'],
      ['search','Search & Shopping','Query-level management, feed optimisation and bidding tuned to margin rather than volume.'],
      ['sparkle','Performance Max Control','Asset groups, audience signals and exclusions configured so PMax does not quietly cannibalise brand traffic.'],
      ['pen','Ad Creative & Testing','Copy and creative tested continuously, with results reported rather than assumed.'],
      ['chart','Weekly Optimisation','Bids, budgets, queries and audiences reviewed every week, with a written note on what changed.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Audit','title'=>'Verify Before Changing','points'=>['Tracking checked end to end','Search terms reviewed for waste','Structure and bidding assessed','Baseline CPA and ROAS set']],
    ['tag'=>'Rebuild','title'=>'Fix the Foundations','points'=>['Campaigns restructured around intent','Negative keyword lists rebuilt','Audience exclusions applied','Feeds and assets refreshed']],
    ['tag'=>'Test','title'=>'Prove It Before Scaling','points'=>['Controlled budgets on new structures','Landing pages checked for speed and mobile','Tracking verified on live traffic','Early results reviewed together']],
    ['tag'=>'Scale','title'=>'Fund What Returns','points'=>['Winning campaigns scaled deliberately','Underperformers cut or rebuilt','Incremental tests kept running','Weekly reporting with reasoning']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Charge','h2'=>'A Flat Fee, <span class="gradient-text">Not a Cut of Your Spend</span>',
    'lead'=>'A percentage-of-spend model rewards an agency for spending more of your money. That is the wrong incentive on the wrong side of the table.',
    'items'=>[['money','Flat monthly fee'],['lock','You own the account'],['target','CPA-led decisions'],
      ['chart','Verified tracking'],['doc','Full spend transparency'],['refresh','Weekly optimisation'],
      ['users','Named account manager'],['bolt','No long lock-ins'],['eye','Live dashboard access']],
  ],
  'stats'=>[['38','%','Average CPA Reduction'],['4.2','x','Average ROAS'],['12','+','Verticals Managed'],['0','','Lock-In Contracts']],
  'faqs'=>[
    ['How do you charge?','A flat monthly management fee based on scope and complexity. We do not take a percentage of ad spend, because that pays us more for spending more of your budget.'],
    ['Do we keep the account?','Always. We work inside accounts you own. If we part ways, the account, history and learnings all stay with you.'],
    ['What minimum spend makes sense?','Around $1,500 a month in media. Below that, management fees take too large a share and we would usually recommend organic work first.'],
    ['How fast do results come?','Wasted spend gets cut in the first two weeks. Structural gains show over four to eight weeks. Anything faster is normally a tracking artefact rather than a real improvement.'],
    ['Do you handle Performance Max?','Yes, and carefully. PMax needs deliberate exclusions and audience signals or it quietly absorbs brand traffic you were already winning for free.'],
    ['Can you work with our existing landing pages?','Yes, and we will test them. If the page is where conversions are being lost, we will say so and either build a new one or hand your team the specifics.'],
  ],
];

$c['paid-media/meta-ads-services'] = [
  'parent' => 'paid-media', 'label' => 'Meta Ads', 'icon' => 'users',
  'card_blurb' => 'Facebook and Instagram campaigns with structured creative testing and reporting that survives contact with your CRM.',
  'meta_title' => 'Meta Ads Services — Facebook & Instagram Campaign Management | Links Boots',
  'meta_desc'  => 'Facebook and Instagram advertising managed on creative testing, clean audience structure, and conversion data that matches your CRM.',
  'eyebrow' => 'Meta Ads', 'pill' => 'Creative is the targeting',
  'title' => 'Meta Campaigns Where the <span class="gradient-text">Creative Does the Work</span>',
  'lead'  => 'Facebook and Instagram campaigns built on structured creative testing, clean audience architecture, and conversion tracking that still matches your CRM at the end of the month.',
  'ticks' => ['Structured creative testing','Clean account architecture','Server-side tracking','Full spend transparency'],
  'panel' => ['title' => 'How we run creative', 'metrics' => [
      ['3-5','Concepts tested per cycle'],['1','Variable changed at a time'],
      ['Weekly','Refresh cadence on winners'],['Logged','Every test result recorded'],
  ]],
  'intro'=>[
    'eyebrow'=>'What Changed','h2'=>'Targeting Got Automated. <span class="gradient-text">Creative Did Not.</span>',
    'paras'=>[
      'Meta\'s delivery system now finds the audience on its own far better than manual interest stacking ever did. What it cannot do is invent the hook, the angle or the offer.',
      'So the work moved. Campaigns are won on a disciplined creative testing programme and a clean account structure that gives the algorithm enough signal to learn from, rather than on ever-narrower audience definitions.',
    ],
    'checks'=>['Creative tested one variable at a time, with results logged','Account structure kept simple enough to exit the learning phase','Server-side events set up so conversions are actually attributed','Reporting reconciled against your CRM, not just the platform'],
  ],
  'visual'=>['title'=>'What we manage','items'=>[
      ['pen','Creative concepting and testing'],['users','Audience and exclusion architecture'],
      ['target','Conversions API and event setup'],['refresh','Retargeting and retention'],
      ['play','Video and UGC-style formats'],['chart','CRM-reconciled reporting'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'Discipline Where It <span class="gradient-text">Actually Pays</span>',
    'lead'=>'A testing programme you can read, not a folder of ads nobody can explain.',
    'tiles'=>[
      ['pen','Creative Testing Programme','Three to five concepts per cycle, one variable at a time, with every result logged so learning accumulates.'],
      ['users','Audience Architecture','Prospecting, retargeting and exclusion layers structured so campaigns exit the learning phase and stay there.'],
      ['target','Conversions API','Server-side event tracking configured properly, so conversions are attributed rather than lost to browser restrictions.'],
      ['refresh','Retargeting & Retention','Sequenced messaging for people who already know you, priced against their actual value rather than a blended CPA.'],
      ['play','Format Production','Static, video and UGC-style assets produced or directed to match what performs on each placement.'],
      ['chart','CRM Reconciliation','Platform-reported conversions checked against your CRM so the numbers you act on are the real ones.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Audit','title'=>'Check the Signal','points'=>['Pixel and CAPI setup verified','Event quality and deduplication checked','Account structure reviewed','Historic creative performance analysed']],
    ['tag'=>'Structure','title'=>'Simplify the Account','points'=>['Campaigns consolidated for signal','Audience and exclusion layers rebuilt','Budgets set to exit learning','Naming and reporting standardised']],
    ['tag'=>'Test','title'=>'Run the Programme','points'=>['Concepts briefed and produced','One variable changed per test','Results logged against a hypothesis','Winners promoted, losers retired']],
    ['tag'=>'Scale','title'=>'Fund the Winners','points'=>['Budget moved to proven concepts','Fatigue monitored and refreshed','Retargeting sequenced behind prospecting','Weekly reporting against CPA']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Work','h2'=>'Every Test Has a <span class="gradient-text">Written Hypothesis</span>',
    'lead'=>'If nobody can say what a test was meant to prove, it was not a test. It was just another ad.',
    'items'=>[['pen','Structured creative testing'],['doc','Logged test results'],['target','Server-side tracking'],
      ['users','Clean audience architecture'],['chart','CRM-reconciled numbers'],['money','Flat management fee'],
      ['lock','You own the account'],['refresh','Fatigue monitoring'],['eye','Full spend transparency']],
  ],
  'stats'=>[['5','','Concepts Tested Per Cycle'],['31','%','Average CPA Reduction'],['1','','Variable Per Test'],['0','','Lock-In Contracts']],
  'faqs'=>[
    ['Do you produce the creative?','We can produce it or direct it. Many clients have in-house design or UGC creators, in which case we brief and they build. Either way the testing structure is ours.'],
    ['How much creative do you need per month?','Three to five distinct concepts per testing cycle, plus variations of proven winners. Fewer than that and the programme stalls; many more and results get hard to attribute.'],
    ['Is iOS tracking still a problem?','Less than it was, if the Conversions API is set up properly with good event matching. Most accounts we inherit have it half-configured, which is where a lot of the apparent performance loss actually comes from.'],
    ['Should we run Meta and Google together?','Usually yes. They do different jobs: Google captures existing intent, Meta creates it. Judging Meta on last-click attribution alone consistently undervalues it.'],
    ['What is a realistic minimum budget?','Around $1,500 a month in media. Below that there is not enough conversion volume for the delivery system to learn from, whatever the structure.'],
    ['Do you manage LinkedIn or TikTok too?','Yes, where they fit the audience. For most B2B accounts we will tell you honestly whether LinkedIn justifies its higher cost per click before you commit budget.'],
  ],
];

$c['paid-media/paid-search-audit-services'] = [
  'parent' => 'paid-media', 'label' => 'Paid Search Audit', 'icon' => 'chart',
  'card_blurb' => 'A full account review naming the wasted spend, the tracking faults and the structural fixes — yours whether or not you hire us.',
  'meta_title' => 'Paid Search Audit Services — Find the Wasted Spend | Links Boots',
  'meta_desc'  => 'An independent Google Ads and Meta account audit. Wasted spend quantified, tracking faults identified, and a prioritised fix list you own outright.',
  'eyebrow' => 'Paid Search Audit', 'pill' => 'Yours to keep either way',
  'title' => 'Find Out Exactly Where the <span class="gradient-text">Budget Is Leaking</span>',
  'lead'  => 'An independent review of your paid accounts that quantifies the wasted spend, names the tracking faults, and hands you a prioritised fix list — whether or not you hire us to implement it.',
  'ticks' => ['Fixed-fee, standalone','Wasted spend quantified','Tracking verified','No obligation to continue'],
  'panel' => ['title' => 'What the audit covers', 'metrics' => [
      ['Tracking','Verified end to end against your CRM'],['Waste','Quantified in currency, not adjectives'],
      ['Structure','Assessed against your actual goals'],['Fixes','Ranked by payoff and effort'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why It Exists','h2'=>'A Second Opinion With <span class="gradient-text">Nothing Attached</span>',
    'paras'=>[
      'Most audits offered for free are sales documents. They find dramatic-sounding problems, quantify none of them, and end with a proposal. That is not a diagnostic, it is a pitch with charts.',
      'Ours is a fixed-fee, standalone deliverable. You get the findings, the numbers and the fix list. If you want us to implement them, good; if you want your existing team or agency to, the document works just as well for that.',
    ],
    'checks'=>['Wasted spend quantified in currency, not described as "significant"','Tracking faults traced to the specific tag or event','Every finding paired with a specific fix','No obligation to buy anything afterwards'],
  ],
  'visual'=>['title'=>'What we examine','items'=>[
      ['target','Conversion tracking and attribution'],['search','Search terms and match types'],
      ['layers','Account and campaign structure'],['money','Bidding strategy and budget split'],
      ['pen','Ad copy, assets and extensions'],['doc','Landing page and post-click experience'],
  ]],
  'includes'=>[
    'eyebrow'=>'What You Receive','h2'=>'Findings, Numbers <span class="gradient-text">and a Fix List</span>',
    'lead'=>'A document your team can act on without needing us to interpret it.',
    'tiles'=>[
      ['target','Tracking Verification','Every conversion action tested end to end, with double-counting and broken events identified specifically.'],
      ['money','Wasted Spend Analysis','Search terms, placements and audiences that consumed budget without returning, totalled in currency.'],
      ['layers','Structure Review','Whether the account architecture supports how you actually sell, or just how it was set up years ago.'],
      ['chart','Performance Benchmarking','Your CPA, ROAS and conversion rates set against realistic benchmarks for your vertical.'],
      ['doc','Prioritised Fix List','Every finding paired with a specific action, ranked by expected payoff against effort.'],
      ['users','Walkthrough Call','A session with your team to go through the findings and answer questions, recorded for anyone who missed it.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Access','title'=>'Read-Only Is Enough','points'=>['Read-only account access granted','Analytics and CRM context gathered','Business goals and margins understood','Scope confirmed in writing']],
    ['tag'=>'Analyse','title'=>'Test Everything','points'=>['Conversion actions tested live','Search terms reviewed at query level','Structure and bidding assessed','Landing pages checked on speed and mobile']],
    ['tag'=>'Quantify','title'=>'Put Numbers on It','points'=>['Wasted spend totalled by cause','Tracking faults traced to source','Opportunity sized per fix','Benchmarks applied']],
    ['tag'=>'Deliver','title'=>'Hand It Over','points'=>['Written findings delivered','Fix list prioritised by payoff','Walkthrough call recorded','Document yours to keep']],
  ],
  'quality'=>[
    'eyebrow'=>'How It Works','h2'=>'A Deliverable, <span class="gradient-text">Not a Pitch</span>',
    'lead'=>'The audit is priced as its own piece of work, so it does not need to sell you anything to be worth commissioning.',
    'items'=>[['money','Fixed fee, standalone'],['lock','Read-only access only'],['chart','Waste quantified in currency'],
      ['target','Tracking tested live'],['doc','Prioritised fix list'],['users','Recorded walkthrough'],
      ['shield','No obligation to continue'],['eye','Works for your existing agency'],['clock','Two-week turnaround']],
  ],
  'stats'=>[['2','wk','Typical Turnaround'],['31','%','Median Waste Found'],['1','','Fixed Fee'],['0','','Strings Attached']],
  'faqs'=>[
    ['Do we have to hire you afterwards?','No. The audit is a standalone deliverable at a fixed fee. Plenty of clients take the fix list to their existing agency or in-house team, which is a perfectly good outcome.'],
    ['What access do you need?','Read-only access to the ad accounts and analytics. We do not need the ability to change anything to audit it.'],
    ['How long does it take?','Around two weeks for most accounts. Very large or multi-market accounts take longer, and we will tell you before starting rather than after.'],
    ['How much wasted spend do you usually find?','The median across accounts we audit is roughly a third of spend, though it varies widely. Accounts already managed well have far less, and we say so plainly when that is the case.'],
    ['Will you criticise our current agency?','We report what the account shows. Sometimes that reflects poorly on previous management and sometimes it reflects constraints they were working under. We are not interested in manufacturing a case against anyone.'],
    ['Can you audit Meta as well as Google?','Yes, either separately or together. Auditing both is usually more useful because attribution problems tend to show up in the gap between them.'],
  ],
];

/* ============================================ CONTENT MARKETING CHILDREN */
$c['content-marketing/seo-content-writing-services'] = [
  'parent' => 'content-marketing', 'label' => 'SEO Content Writing', 'icon' => 'pen',
  'card_blurb' => 'Search-briefed articles and landing pages written by native writers who research the subject rather than paraphrase page one.',
  'meta_title' => 'SEO Content Writing Services — Human Written, Data Briefed | Links Boots',
  'meta_desc'  => 'SEO articles and landing pages written by native speakers from data-led briefs. Screened for AI output, structured for citation, one revision included.',
  'eyebrow' => 'SEO Content Writing', 'pill' => 'Human written, AI screened',
  'title' => 'Writing That Ranks Because <span class="gradient-text">It Is Worth Reading</span>',
  'lead'  => 'Articles and landing pages briefed from live search data and written by native speakers who research the subject properly instead of rewriting whatever is already on page one.',
  'ticks' => ['Native-speaker writers','Data-led briefs','AI output screened','One revision included'],
  'panel' => ['title' => 'What every piece includes', 'metrics' => [
      ['Brief','Built from live search data'],['Writer','Matched to the subject'],
      ['Edit','Full editorial pass'],['Revision','One round, included'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Standard','h2'=>'Page One Is a Starting Point, <span class="gradient-text">Not a Source</span>',
    'paras'=>[
      'Most cheap SEO content is page one, reworded. It ranks briefly, adds nothing a reader could not find elsewhere, and gets overtaken as soon as someone writes the piece properly.',
      'Our briefs identify what the current results already cover and, more usefully, what they all miss. The writer then fills that gap with actual research, which is the only durable advantage in content.',
    ],
    'checks'=>['Briefs built from live search and competitor analysis','Writers matched to subject, not assigned at random','Every piece screened for AI-generated output','Structured so assistants can quote it cleanly'],
  ],
  'visual'=>['title'=>'What we write','items'=>[
      ['doc','Long-form articles and guides'],['building','Service and landing pages'],
      ['search','Comparison and alternative pages'],['chart','Data studies and reports'],
      ['users','Thought leadership and bylines'],['refresh','Refreshes of decaying pages'],
  ]],
  'includes'=>[
    'eyebrow'=>'What You Get','h2'=>'Publish-Ready, <span class="gradient-text">Not Draft-Shaped</span>',
    'lead'=>'Formatted, linked, and structured so it can go live without a rewrite.',
    'tiles'=>[
      ['search','Data-Led Briefs','Built from live search intent, competitor coverage and the gaps in what currently ranks.'],
      ['users','Subject-Matched Writers','Native speakers assigned by topic familiarity, so the research is real rather than reworded.'],
      ['pen','Editorial Pass','A second reader for accuracy, tone and structure before anything reaches you.'],
      ['shield','AI-Output Screening','Every piece checked before delivery. We use AI in research, not in the writing you are paying for.'],
      ['sparkle','Citation-Ready Structure','Answer-first sections and question-shaped headings so assistants can quote it as well as rank it.'],
      ['link','Internal Link Mapping','Link targets chosen at brief stage so each piece joins its cluster on publication.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Brief','title'=>'Decide What to Say','points'=>['Search intent and demand analysed','Competitor coverage mapped','Gaps and angle defined','Structure and links set in advance']],
    ['tag'=>'Write','title'=>'Research, Then Draft','points'=>['Writer matched to the subject','Primary sources consulted','Draft written to the brief','Answer-first structure applied']],
    ['tag'=>'Edit','title'=>'Check It Properly','points'=>['Editorial pass for accuracy and tone','Claims and figures verified','AI-output screening run','Formatting and metadata applied']],
    ['tag'=>'Deliver','title'=>'Ready to Publish','points'=>['Publish-ready file delivered','Internal links included','One revision round available','Performance tracked after launch']],
  ],
  'quality'=>[
    'eyebrow'=>'Our Rules','h2'=>'Written by People, <span class="gradient-text">Every Time</span>',
    'lead'=>'We use AI where it genuinely helps, in research and structuring. Not for the thing you commissioned.',
    'items'=>[['users','Native-speaker writers'],['shield','AI-output screening'],['search','Data-led briefs'],
      ['pen','Full editorial pass'],['refresh','One revision included'],['link','Cluster-aware linking'],
      ['sparkle','Structured for citation'],['lock','Full ownership on delivery'],['clock','Reliable turnaround']],
  ],
  'stats'=>[['600','+','Pieces Published'],['14','+','Languages Covered'],['1','','Revision Included'],['100','%','Human Written']],
  'faqs'=>[
    ['Is any of it written by AI?','No. Every piece is written by a person and screened before delivery. We use AI for research and structural work, where it helps, and not for the writing itself.'],
    ['Who owns the content?','You do, in full, on delivery. No licensing conditions, and nothing is reused for another client.'],
    ['How long does a piece take?','Around five to seven working days from approved brief for a standard article. Research-heavy pieces and data studies take longer and we scope them separately.'],
    ['What if we do not like the draft?','One revision round is included on every piece. If the tone is wrong we re-brief rather than argue, and that usually means the brief needed fixing rather than the writer.'],
    ['Can you write technical or regulated subjects?','Yes. We match writers to subject and run an editorial pass. For genuinely specialist or regulated topics we ask for a subject-matter review from your side before publication.'],
    ['Do you write in other languages?','Yes, in fourteen with native writers. Content is written natively rather than translated, because translated content reads like translated content.'],
  ],
];

$c['content-marketing/content-strategy'] = [
  'parent' => 'content-marketing', 'label' => 'Content Strategy & Topical Authority', 'icon' => 'layers',
  'card_blurb' => 'A cluster map showing what to publish, in what order, and why each piece earns its place in the plan.',
  'meta_title' => 'Content Strategy & Topical Authority Services | Links Boots',
  'meta_desc'  => 'Topic cluster mapping and content strategy that builds topical authority. Know what to publish, in what order, and what each piece is meant to achieve.',
  'eyebrow' => 'Content Strategy', 'pill' => 'Depth beats volume',
  'title' => 'Stop Publishing and Start <span class="gradient-text">Building Authority</span>',
  'lead'  => 'A cluster map that shows exactly what to publish, in what order, and what each piece is supposed to achieve — so content compounds instead of accumulating.',
  'ticks' => ['Full cluster mapping','Prioritised roadmap','Gap and cannibalisation audit','Measurable per piece'],
  'panel' => ['title' => 'What a strategy delivers', 'metrics' => [
      ['Map','Every cluster and its pillar page'],['Order','What to publish first, and why'],
      ['Gaps','What competitors own that you do not'],['Metric','A target for each piece'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Problem','h2'=>'Ten Thorough Pages Beat <span class="gradient-text">Sixty Thin Ones</span>',
    'paras'=>[
      'Most content programmes publish steadily and plateau anyway, because the pieces do not reinforce each other. Sixty articles across ten unrelated subjects make a site look busy without making it authoritative on anything.',
      'Depth is what makes a site the obvious answer for a cluster of queries. It is also what AI answer engines draw on, since a model citing a source prefers one that covers the subject completely.',
    ],
    'checks'=>['Clusters defined around how buyers actually research','Pillar and supporting pages mapped before writing','Existing content audited for gaps and overlap','Every planned piece given a purpose and a target'],
  ],
  'visual'=>['title'=>'What the strategy covers','items'=>[
      ['layers','Cluster and pillar architecture'],['search','Keyword and intent mapping'],
      ['eye','Competitor coverage analysis'],['doc','Existing content audit'],
      ['link','Internal linking plan'],['chart','Measurement framework'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Deliver','h2'=>'A Plan Your Team <span class="gradient-text">Can Actually Follow</span>',
    'lead'=>'Specific enough to hand to a writer, structured enough to hand to a board.',
    'tiles'=>[
      ['layers','Cluster Architecture','Every topic cluster defined with its pillar page and supporting pieces, mapped to how buyers research.'],
      ['search','Intent Mapping','Each target query classified by intent and commercial value, so effort goes where it converts.'],
      ['doc','Content Audit','What you already have, what is working, what is cannibalising, and what should be merged or retired.'],
      ['eye','Competitive Gap Analysis','The subtopics competitors own that you do not, ranked by how reachable they are.'],
      ['link','Internal Linking Plan','How authority should flow through each cluster, defined before anything is written.'],
      ['chart','Roadmap & Measurement','A publishing order with a target for each piece, so the plan can be judged rather than admired.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Audit','title'=>'Understand What Exists','points'=>['Every existing page inventoried','Performance and decay assessed','Cannibalisation identified','Merge and retire candidates flagged']],
    ['tag'=>'Map','title'=>'Define the Clusters','points'=>['Buyer research paths mapped','Clusters and pillars defined','Queries assigned to pages','Intent and value scored']],
    ['tag'=>'Prioritise','title'=>'Decide the Order','points'=>['Reachability weighted against value','Quick wins separated from long plays','Capacity and budget factored in','Roadmap agreed with you']],
    ['tag'=>'Enable','title'=>'Make It Executable','points'=>['Briefs templated per page type','Internal link targets pre-assigned','Measurement framework set up','Handover to your team or ours']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Build It','h2'=>'Specific Enough to <span class="gradient-text">Hand to a Writer</span>',
    'lead'=>'A strategy that stops at themes and pillars is a slide deck. Ours goes down to page level with a target attached.',
    'items'=>[['layers','Page-level cluster maps'],['search','Intent and value scoring'],['doc','Full content audit'],
      ['eye','Competitive gap analysis'],['link','Pre-assigned internal links'],['chart','Per-piece targets'],
      ['refresh','Refresh cycle built in'],['users','Handover to any team'],['compass','Ordered by reachability']],
  ],
  'stats'=>[['40','+','Pages Mapped Per Cluster'],['3','x','Typical Cluster Traffic Lift'],['90','d','Refresh Cycle'],['1','','Owner Per Piece']],
  'faqs'=>[
    ['How is this different from a keyword list?','A keyword list tells you what people search. A strategy tells you which pages to build, how they connect, what each one is for, and in what order to build them. The list is one input.'],
    ['How long does a strategy take to produce?','Three to four weeks for most sites. Large sites with substantial existing content take longer, because the audit is the slow part.'],
    ['Can our own writers execute it?','Yes, and many clients do. The briefs are written to be handed to any competent writer, in-house or otherwise.'],
    ['How many pieces per month should we publish?','Fewer than most agencies suggest. Four strong pieces into a coherent cluster consistently outperform twelve scattered ones, and cost less to produce.'],
    ['What about content we already have?','It gets audited first. Merging, refreshing or retiring existing pages usually produces faster gains than publishing anything new.'],
    ['Does topical authority actually exist as a ranking factor?','Not as a single named signal, but the effect is well observed: sites that cover a subject comprehensively rank more easily across that subject. It also strongly influences which sources AI answers cite.'],
  ],
];

$c['content-marketing/blog-management-services'] = [
  'parent' => 'content-marketing', 'label' => 'Blog Management', 'icon' => 'refresh',
  'card_blurb' => 'Planning, briefing, writing, editing, publishing and refreshing, run as an ongoing operation you do not have to manage.',
  'meta_title' => 'Blog Management Services — Fully Managed Content Operation | Links Boots',
  'meta_desc'  => 'A fully managed blog: planning, briefing, writing, editing, publishing, internal linking and scheduled refreshes. One monthly report, no chasing.',
  'eyebrow' => 'Blog Management', 'pill' => 'Off your plate entirely',
  'title' => 'Your Blog, Run Properly, <span class="gradient-text">Without You Running It</span>',
  'lead'  => 'Planning, briefing, writing, editing, publishing, internal linking and scheduled refreshes, handled as one ongoing operation with a single monthly report.',
  'ticks' => ['End-to-end management','Published, not just delivered','Refresh cycle included','One monthly report'],
  'panel' => ['title' => 'What we take on', 'metrics' => [
      ['4-12','Pieces published monthly'],['90d','Refresh cycle on priority pages'],
      ['0','Chasing required from you'],['1','Monthly report'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why It Stalls','h2'=>'Most Blogs Die of <span class="gradient-text">Coordination, Not Ideas</span>',
    'paras'=>[
      'The writing is rarely the bottleneck. Briefs go unwritten, drafts sit unreviewed, published pieces never get internally linked, and old articles quietly decay while everyone focuses on the next one.',
      'Blog management takes the whole operation, including the boring coordination that determines whether any of it compounds.',
    ],
    'checks'=>['Planned a quarter ahead against a cluster map','Published live, formatted and linked, not just delivered','Old pages refreshed on a schedule before they slip','One monthly report covering everything'],
  ],
  'visual'=>['title'=>'What is included','items'=>[
      ['compass','Quarterly planning'],['doc','Brief writing'],
      ['pen','Writing and editing'],['gear','Publishing and formatting'],
      ['link','Internal linking on publish'],['refresh','Scheduled content refreshes'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Run','h2'=>'The Whole Operation, <span class="gradient-text">Start to Finish</span>',
    'lead'=>'You approve the plan. We do everything after that.',
    'tiles'=>[
      ['compass','Editorial Planning','A rolling quarterly calendar built from your cluster map, agreed with you before anything is briefed.'],
      ['doc','Briefing','Every piece briefed properly from search data, so the writer starts with an angle rather than a keyword.'],
      ['pen','Writing & Editing','Native writers matched by subject, with a full editorial pass and AI-output screening before publication.'],
      ['gear','Publishing','Formatted, illustrated, tagged and scheduled in your CMS, with metadata and schema applied.'],
      ['link','Internal Linking','New pieces linked into their cluster on publication, and older pieces updated to link forward.'],
      ['refresh','Refresh Cycle','Priority pages reviewed every ninety days and updated before decay shows in rankings.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Plan','title'=>'Agree the Quarter','points'=>['Calendar built from the cluster map','Commercial priorities weighted in','Volume set to your budget','Plan approved before work starts']],
    ['tag'=>'Produce','title'=>'Brief, Write, Edit','points'=>['Briefs written from search data','Writers matched by subject','Editorial pass on every piece','AI screening before delivery']],
    ['tag'=>'Publish','title'=>'Get It Live','points'=>['Formatted and scheduled in your CMS','Metadata and schema applied','Internal links added both ways','Published on the agreed date']],
    ['tag'=>'Maintain','title'=>'Keep It Working','points'=>['Performance tracked per piece','Decaying pages flagged early','Refreshes run on a 90-day cycle','One consolidated monthly report']],
  ],
  'quality'=>[
    'eyebrow'=>'How It Runs','h2'=>'No Chasing <span class="gradient-text">Required</span>',
    'lead'=>'You approve a plan once a quarter and read one report a month. Everything between those two things is ours.',
    'items'=>[['compass','Quarterly planning'],['users','Named editor on your account'],['gear','Published, not just delivered'],
      ['link','Linking handled both ways'],['refresh','90-day refresh cycle'],['chart','Per-piece performance tracking'],
      ['doc','One monthly report'],['shield','AI-output screening'],['clock','Dates that hold']],
  ],
  'stats'=>[['12','','Pieces Monthly at Scale'],['90','d','Refresh Cycle'],['1','','Monthly Report'],['0','','Chasing Required']],
  'faqs'=>[
    ['Do you publish directly to our CMS?','Yes, on all common platforms. We work in a contributor or editor role, and you keep approval rights over anything that goes live if you want them.'],
    ['How many pieces a month?','Typically four to twelve depending on plan. We would rather publish four strong pieces into one cluster than twelve scattered ones, and we will say so if the volume you want does not fit the strategy.'],
    ['Who chooses the topics?','We propose a quarterly calendar from your cluster map and you approve or adjust it. Nothing gets written that you have not signed off.'],
    ['What does the refresh cycle actually do?','Priority pages get reviewed every ninety days and updated where competitors have moved ahead. Content decays quietly, and refreshing usually returns more than publishing something new.'],
    ['Can you take over an existing blog?','Yes, and we start with an audit. Merging, refreshing or retiring what is already there is normally the fastest early win on an established blog.'],
    ['What if we need to pause?','Plans run month to month with thirty days notice. We will not lock you into a twelve-month commitment for content you may not need.'],
  ],
];

    return $c;
}
