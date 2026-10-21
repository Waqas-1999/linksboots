<?php
/**
 * Content for every service page, keyed by URL path.
 * Pillar pages have no 'parent'; child services name their pillar.
 * Rendered by templates/service.php.
 */
require_once __DIR__ . '/services-children.php';

function service_content(): array {
    $c = [];

/* ======================================================== LINK BUILDING */
$c['link-building'] = [
  'label' => 'Link Building',
  'icon'  => 'link',
  'meta_title' => 'Link Building Services — Manual Outreach That Builds Authority | Links Boots',
  'meta_desc'  => 'Manual outreach link building on traffic-verified publishers. Guest posts, link insertions, and multilingual campaigns with a 12-month replacement guarantee.',
  'eyebrow' => 'Link Building',
  'pill'    => 'Manual outreach, no PBNs',
  'title'   => 'Link Building That Builds <span class="gradient-text">Real Authority</span>',
  'lead'    => 'Build authority with manual outreach, relevant publishers, and quality placements backed by real traffic. Links Boots delivers scalable link building campaigns for ambitious brands and agencies.',
  'ticks'   => ['High authority links', 'White-hat only', 'Manual outreach', 'Proven results'],
  'panel'   => ['title' => 'What a campaign delivers', 'metrics' => [
      ['DR 50+', 'Typical publisher authority range'],
      ['1k+', 'Minimum monthly organic visits per site'],
      ['14', 'Days to first live placement'],
      ['12mo', 'Replacement window on every link'],
  ]],
  'intro' => [
    'eyebrow' => 'The Mechanism',
    'h2'      => 'How Link Building Actually <span class="gradient-text">Affects Rankings</span>',
    'paras'   => [
      'Google uses backlinks as one of its primary trust signals when ranking pages. When an authoritative site links to your content, it acts as third-party evidence that the page is worth showing to someone.',
      'Domains with stronger backlink profiles from trustworthy, topically relevant sources consistently outrank those without. The difference is not volume, it is whether the linking page has an audience and a subject that matches yours.',
    ],
    'checks' => [
      'Relevance beats raw domain authority every time',
      'Placement pages must have real organic traffic',
      'Anchor distribution stays natural across the profile',
      'Every link is editorially placed, never injected',
    ],
  ],
  'visual' => ['title' => 'Standards on every placement', 'items' => [
      ['shield', 'PBN-free guarantee'],
      ['chart',  'Traffic-verified publishers'],
      ['users',  'Manual editorial outreach'],
      ['eye',    'Publisher shortlist approval'],
      ['refresh','12-month link replacement'],
      ['doc',    'White-label reporting'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Build',
    'h2'      => 'Three Ways We Earn You <span class="gradient-text">Links That Last</span>',
    'lead'    => 'Run them together for compounding authority, or pick the one that matches the gap you are trying to close.',
    'tiles'   => [
      ['doc',    'Guest Posts', 'Placed on real sites with real traffic and real audiences, not link farms. Chosen for relevance, not just a high number.'],
      ['link',   'Link Insertions & Niche Edits', 'Links added into already-ranking content on relevant sites, a faster way to build authority without waiting on new content.'],
      ['globe',  'International & Multilingual Outreach', 'Campaigns built for local languages and local publishers, so brands expanding into new markets get relevant links.'],
      ['search', 'Publisher Research', 'Strict criteria on every domain before outreach: 1,000+ organic visits, niche match, active publishing history, spam score under 3.'],
      ['pen',    'Content Creation', '1,000 to 1,500 word articles from native English writers, tone-matched to the publisher, with contextual link placement and one revision included.'],
      ['refresh','Monitoring & Replacement', 'Links verified monthly. If a placement drops inside twelve months we replace it within 14 working days at no cost.'],
    ],
  ],
  'process' => [
    ['tag' => 'Brief', 'title' => 'You Set the Targets', 'points' => [
      'Target URLs and priority pages agreed', 'Niche and market defined',
      'DR range and traffic floor set', 'Anchor text preferences captured',
    ]],
    ['tag' => 'Research', 'title' => 'We Shortlist Publishers', 'points' => [
      'Domains screened against every quality rule', 'Traffic and relevance verified manually',
      'Shortlist sent for your approval', 'Rejected sites replaced before outreach',
    ]],
    ['tag' => 'Outreach', 'title' => 'Content and Placement', 'points' => [
      'Articles written by native writers', 'Each pitch written fresh, never templated',
      'Sent to a verified editor contact', 'Followed up personally until confirmed',
    ]],
    ['tag' => 'Delivery', 'title' => 'Live, Verified, Reported', 'points' => [
      'Link checked live, dofollow, correct anchor', 'Live URL, DR/DA and traffic data supplied',
      'Placement screenshots included', 'White-label formatting on request',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'Our Standards',
    'h2'      => 'Scale Without <span class="gradient-text">Sacrificing Standards</span>',
    'lead'    => 'Volume is easy. Volume that still passes a manual review twelve months later is the part most providers skip.',
    'items'   => [
      ['users','Manual editorial outreach'], ['chart','Traffic-verified placements'], ['shield','PBN-free guarantee'],
      ['refresh','12-month link replacement'], ['doc','White-label reports'], ['eye','Publisher shortlist approval'],
      ['sparkle','AI-content screening'], ['globe','12+ niches covered'], ['lock','No client-site overlap'],
    ],
  ],
  'stats' => [['450','+','Links Built Monthly'],['90','+','Publishers Per Niche'],['28','+','Countries Covered'],['100','%','Manual Outreach']],
  'faqs' => [
    ['Is link building still worth doing?', 'Yes. Backlinks remain one of the core ranking factors, and almost half of all link building campaigns show measurable ranking movement within one to three months. What has changed is the bar for quality: low-value links now do nothing at best.'],
    ['What does a backlink cost?', 'Quality manual campaigns start around $150 for DR 30 to 50 placements. DR 70+ sites with strong traffic typically run $300 to $500 or more. Price tracks the publisher, the audience, and the effort to earn the placement.'],
    ['When will I see results?', 'Links go live in two to three weeks. Ranking movement usually shows in 60 to 90 days, sooner for pages already sitting on page two.'],
    ['Can I approve sites before outreach?', 'Yes on Growth and Authority plans, which include a pre-approval publisher shortlist. Starter orders use niche matching without pre-approval to keep turnaround fast.'],
    ['Do you work white-label for agencies?', 'Yes. Reports are branded to you, and nothing we send identifies Links Boots to your clients.'],
    ['What happens if a link disappears?', 'We check every placement monthly. If a link drops within twelve months of going live, we replace it on an equivalent site within 14 working days at no extra cost.'],
  ],
];

/* ========================================================== SEO SERVICES */
$c['seo-services'] = [
  'label' => 'SEO',
  'icon'  => 'search',
  'meta_title' => 'SEO Services — Technical, On-Page and Local SEO | Links Boots',
  'meta_desc'  => 'SEO that ties rankings to revenue. Technical fixes, on-page optimisation, and local search visibility, prioritised by what actually moves your numbers.',
  'eyebrow' => 'SEO',
  'pill'    => 'Prioritised by revenue impact',
  'title'   => 'SEO That Ties Rankings to <span class="gradient-text">Actual Revenue</span>',
  'lead'    => 'Increase online visibility through smart strategies that attract qualified organic traffic and support business growth, with reporting that connects every ranking to an enquiry.',
  'ticks'   => ['Technical foundations', 'Intent-matched content', 'Local visibility', 'Revenue reporting'],
  'panel'   => ['title' => 'Where we start', 'metrics' => [
      ['01', 'Audit what is blocking indexation'],
      ['02', 'Fix the templates, not the pages'],
      ['03', 'Match content to real search intent'],
      ['04', 'Build authority where it converts'],
  ]],
  'intro' => [
    'eyebrow' => 'The Approach',
    'h2'      => 'Most SEO Fails on the <span class="gradient-text">Boring Fundamentals</span>',
    'paras'   => [
      'A site rarely underperforms because it lacks clever ideas. It underperforms because a template blocks crawling, because pages compete with each other, or because the content answers a keyword instead of a question.',
      'We audit first, prioritise by business impact, and ship in that order. You will always know what we changed, why it was on the list, and what it was supposed to move.',
    ],
    'checks' => [
      'Crawl, index and canonical issues resolved first',
      'Pages consolidated where they cannibalise each other',
      'Content rebuilt around the intent behind the query',
      'Internal linking treated as a deliberate system',
    ],
  ],
  'visual' => ['title' => 'What an engagement covers', 'items' => [
      ['gear',  'Technical audit and fixes'],
      ['pen',   'On-page and content optimisation'],
      ['pin',   'Local and Google Business Profile'],
      ['layers','Site architecture and internal links'],
      ['chart', 'Reporting tied to enquiries'],
      ['refresh','Ongoing content refresh cycle'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Do',
    'h2'      => 'Three Disciplines, <span class="gradient-text">One System</span>',
    'lead'    => 'Technical, on-page and local work reinforce each other. Run in isolation, each one plateaus quickly.',
    'tiles'   => [
      ['gear',   'Technical SEO', 'Crawlability, indexation, site speed, structured data and the template-level fixes that lift thousands of URLs at once.'],
      ['pen',    'On-Page SEO', 'Titles, headings, internal links and content depth rebuilt around the intent behind each target query.'],
      ['pin',    'Local SEO', 'Google Business Profile, citations, review strategy and location pages for businesses that sell in a place.'],
      ['layers', 'Site Architecture', 'Cluster structure and internal linking so authority flows to the pages that make you money.'],
      ['search', 'Keyword & Intent Research', 'Commercial mapping that separates queries worth ranking for from traffic that never converts.'],
      ['chart',  'Measurement & Reporting', 'Positions, clicks, enquiries and revenue in one view, with the honest read on what moved and why.'],
    ],
  ],
  'process' => [
    ['tag' => 'Audit', 'title' => 'Find the Real Blockers', 'points' => [
      'Full technical crawl and index review', 'Content and cannibalisation audit',
      'Backlink and authority gap analysis', 'Competitor benchmark on commercial terms',
    ]],
    ['tag' => 'Plan', 'title' => 'Prioritise by Impact', 'points' => [
      'Every finding scored on effort and payoff', 'Quick wins separated from structural work',
      'Roadmap agreed with your dev capacity in mind', 'Targets set against enquiries, not just rankings',
    ]],
    ['tag' => 'Implement', 'title' => 'Ship the Work', 'points' => [
      'Technical fixes delivered as clear tickets', 'Priority pages rewritten and optimised',
      'Internal linking rebuilt across clusters', 'Schema added and validated',
    ]],
    ['tag' => 'Compound', 'title' => 'Refresh and Scale', 'points' => [
      'Top pages on a scheduled refresh cycle', 'New clusters added as authority grows',
      'Decay flagged before rankings slip', 'Monthly reporting on movement and cause',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'Why Links Boots',
    'h2'      => 'No Templates, <span class="gradient-text">No Guesswork</span>',
    'lead'    => 'We do not run the same checklist on every account. The plan comes out of your audit, your market, and your competition.',
    'items'   => [
      ['users','In-house specialists'], ['compass','Custom strategy per account'], ['doc','Transparent reporting'],
      ['bolt','Quick wins shipped first'], ['shield','No black-hat tactics'], ['money','Revenue-linked targets'],
      ['refresh','Scheduled content refresh'], ['sparkle','AI search covered too'], ['clock','Honest timelines'],
    ],
  ],
  'stats' => [['3','x','Average Traffic Growth'],['180','+','Sites Audited'],['92','%','Client Retention'],['6','mo','Typical Payback Window']],
  'faqs' => [
    ['How long does SEO take to work?', 'Most sites see measurable progress within three to six months. Competitive commercial terms take longer. Pages already sitting on page two often move within weeks once the obvious blockers are cleared.'],
    ['Do you guarantee first-page rankings?', 'No, and neither should anyone else. We commit to the work, the reporting, and the reasoning. Anyone guaranteeing positions is either working in a very soft niche or is not telling you the whole story.'],
    ['Can you work with our developers?', 'Yes. We hand technical work over as prioritised tickets written for developers, with the reasoning attached so nothing gets deprioritised for being unexplained.'],
    ['Do you need access to our site?', 'For most work, yes. At minimum we need Search Console and analytics. Content and technical implementation can either be done by us or handed to your team.'],
    ['What if we already have an in-house SEO?', 'That usually makes things faster. We plug into an existing roadmap and take the workstreams your team does not have capacity for, rather than duplicating what is already covered.'],
    ['Is SEO still worth it with AI search?', 'More than before. AI answers are assembled from sources, and the sites that get cited are the ones with clear structure, real authority, and consistent entity information. That is SEO work.'],
  ],
];

/* =========================================================== DIGITAL PR */
$c['digital-pr'] = [
  'label' => 'Digital PR',
  'icon'  => 'megaphone',
  'meta_title' => 'Digital PR Services — Earned Coverage and Brand Authority | Links Boots',
  'meta_desc'  => 'Digital PR campaigns, unlinked mention recovery, and press outreach that earn coverage on publications you cannot buy your way into.',
  'eyebrow' => 'Digital PR',
  'pill'    => 'Coverage you cannot buy',
  'title'   => 'Coverage That Makes Your Brand <span class="gradient-text">Impossible to Ignore</span>',
  'lead'    => 'Create compelling stories that increase brand awareness, build trust, and attract valuable media coverage on the publications your buyers already read.',
  'ticks'   => ['Earned editorial coverage', 'Data-led story angles', 'Journalist relationships', 'Mention recovery'],
  'panel'   => ['title' => 'What a campaign produces', 'metrics' => [
      ['8-20', 'Placements from a strong story'],
      ['DR 70+', 'Typical tier-one publication range'],
      ['4-6wk', 'From angle to first coverage'],
      ['100%', 'Earned, never paid placements'],
  ]],
  'intro' => [
    'eyebrow' => 'Why It Works',
    'h2'      => 'Authority You Cannot <span class="gradient-text">Buy Link by Link</span>',
    'paras'   => [
      'Digital PR earns coverage on publications that do not sell placements. That coverage moves brand authority, produces unlinked mentions that still register as entity signals, and creates trust that outlives any single campaign.',
      'A single strong story can outperform an entire quarter of steady outreach. It is less predictable than link building, which is exactly why we run the two together rather than choosing between them.',
    ],
    'checks' => [
      'Angles built from data journalists actually want',
      'Pitches sent to named reporters, never lists',
      'Unlinked brand mentions found and converted',
      'Coverage tracked to branded search lift',
    ],
  ],
  'visual' => ['title' => 'What coverage moves', 'items' => [
      ['trophy', 'Domain and brand authority'],
      ['eye',    'Visibility in AI answers'],
      ['search', 'Branded search volume'],
      ['shield', 'Trust ahead of sales cycles'],
      ['globe',  'Reach into new markets'],
      ['users',  'Journalist relationships that last'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Run',
    'h2'      => 'Three Routes to <span class="gradient-text">Earned Coverage</span>',
    'lead'    => 'Campaigns for reach, mention recovery for the coverage you already have, and press outreach for the moments that matter.',
    'tiles'   => [
      ['megaphone','Digital PR Campaigns', 'Data-led story angles built, pitched and placed across national, trade and niche publications.'],
      ['link',     'Brand & Unlinked Mentions', 'We find every place your brand is named without a link and turn those mentions into working citations.'],
      ['doc',      'Press & Media Outreach', 'Launches, funding, research and expert commentary placed with the reporters who cover your sector.'],
      ['chart',    'Original Research & Data', 'Surveys and data studies designed to be quotable, so the story earns coverage on its own merit.'],
      ['users',    'Expert Commentary', 'Your team positioned as the quotable source journalists come back to, not just a one-off mention.'],
      ['eye',      'Coverage Monitoring', 'Every mention tracked, reported and measured against branded search and referral traffic.'],
    ],
  ],
  'process' => [
    ['tag' => 'Angle', 'title' => 'Find the Story', 'points' => [
      'Newsroom and trade coverage reviewed', 'Angles tested against what is already running',
      'Data sources identified or commissioned', 'Story shortlist agreed with you',
    ]],
    ['tag' => 'Build', 'title' => 'Make It Coverable', 'points' => [
      'Research run and findings written up', 'Assets, charts and quotes prepared',
      'Landing page built for the campaign', 'Spokesperson lines agreed',
    ]],
    ['tag' => 'Pitch', 'title' => 'Reach the Right Desks', 'points' => [
      'Named journalists, not media databases', 'Pitches tailored per publication',
      'Embargo and exclusive strategy where useful', 'Personal follow-up on every send',
    ]],
    ['tag' => 'Report', 'title' => 'Prove the Impact', 'points' => [
      'Every placement logged with metrics', 'Unlinked mentions chased and converted',
      'Branded search and referral lift tracked', 'Learnings fed into the next campaign',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'How We Work',
    'h2'      => 'No Spray, <span class="gradient-text">No Pray</span>',
    'lead'    => 'Mass-blasted press releases do not get covered. Every pitch we send is aimed at a person who has covered this subject before.',
    'items'   => [
      ['users','Named journalist targeting'], ['chart','Data-led angles'], ['shield','Earned, never paid'],
      ['globe','International press desks'], ['doc','Full coverage reporting'], ['eye','Unlinked mention recovery'],
      ['bolt','Reactive newsjacking'], ['trophy','Tier-one relationships'], ['refresh','Ongoing story pipeline'],
    ],
  ],
  'stats' => [['320','+','Placements Secured'],['70','+','Average Publisher DR'],['45','%','Pitch Response Rate'],['18','+','Sectors Covered']],
  'faqs' => [
    ['What is Digital PR and how does it work?', 'Digital PR gets your company covered on news platforms and industry publications through press releases, editorial references, and articles on authoritative sites. Those mentions increase brand recognition and make your website more credible to both people and search engines.'],
    ['How is this different from link building?', 'Link building earns placements you can plan and price. Digital PR earns coverage on publications that do not sell placements at all. One is predictable, the other has a much higher ceiling. Most brands need both.'],
    ['Do unlinked mentions actually help?', 'Yes. Search engines and AI models use brand mentions as entity signals even without a link. We also chase the ones worth converting, and a polite request to an editor succeeds more often than people expect.'],
    ['How long until we see coverage?', 'Four to six weeks from starting an angle to first placements, longer if original research needs to be commissioned. Reactive commentary can land in days when the news cycle cooperates.'],
    ['What if journalists do not pick up the story?', 'It happens, and we tell you when it does. We reangle and re-pitch rather than quietly reporting the sends as if they were results. Every campaign includes a review of what did and did not land.'],
    ['Can you work in non-English markets?', 'Yes. We run press outreach with native-language writers and local press contacts across European, Gulf and Asian markets.'],
  ],
];

/* ========================================================= AI VISIBILITY */
$c['ai-visibility'] = [
  'label' => 'AI Visibility & Optimisation',
  'icon'  => 'sparkle',
  'meta_title' => 'AI Visibility Services — GEO, AIO and AI Search Monitoring | Links Boots',
  'meta_desc'  => 'Get cited in ChatGPT, Gemini, Perplexity and AI Overviews. Generative engine optimisation, AIO content structuring, and monitoring you can actually measure.',
  'eyebrow' => 'AI Visibility',
  'pill'    => 'Where buyers now start',
  'title'   => 'Be the Answer, Not Just <span class="gradient-text">a Search Result</span>',
  'lead'    => 'Improve brand visibility across modern search platforms, digital experiences, and emerging discovery channels, so your brand appears in the answer before anyone opens a link.',
  'ticks'   => ['ChatGPT & Perplexity', 'Google AI Overviews', 'Entity consistency', 'Tracked prompt sets'],
  'panel'   => ['title' => 'What we track for you', 'metrics' => [
      ['4', 'Assistants monitored on schedule'],
      ['50+', 'Priority prompts tracked per brand'],
      ['30d', 'Reporting cycle on visibility shift'],
      ['1st', 'Goal: cited source, not a footnote'],
  ]],
  'intro' => [
    'eyebrow' => 'What Changed',
    'h2'      => 'The First Impression Moved <span class="gradient-text">Upstream</span>',
    'paras'   => [
      'A buyer used to search, scan ten links, and click three. Now they ask a model, read a synthesised answer, and arrive at your site already holding an opinion formed somewhere else.',
      'If your brand was not in that answer, you never had a chance to shape it. AI Visibility is the work of becoming one of the sources those answers are assembled from.',
    ],
    'checks' => [
      'Content structured so it can be quoted cleanly',
      'Entity information consistent everywhere machines look',
      'Authority signals the models already trust',
      'A measured baseline, not a guess about how you appear',
    ],
  ],
  'visual' => ['title' => 'Where we make you visible', 'items' => [
      ['sparkle','ChatGPT and GPT-powered tools'],
      ['search', 'Google AI Overviews and AI Mode'],
      ['compass','Perplexity and answer engines'],
      ['globe',  'Gemini and assistant surfaces'],
      ['eye',    'Knowledge panels and entity cards'],
      ['play',   'Voice and conversational search'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Do',
    'h2'      => 'Three Layers of <span class="gradient-text">AI Visibility</span>',
    'lead'    => 'Get found, get structured so you can be quoted, then measure whether any of it worked.',
    'tiles'   => [
      ['sparkle','Generative Engine Optimisation', 'The authority, citation and entity work that makes assistants treat your brand as a source worth naming.'],
      ['layers', 'AIO Content Structuring', 'Pages rebuilt so answers are extractable: direct responses under question headings, self-contained definitions, clean schema.'],
      ['chart',  'AI Search Monitoring', 'A fixed prompt set run across assistants on a schedule, tracking whether you appear, how you are described, and who is cited instead.'],
      ['building','Entity Consistency', 'Your name, category, founders, location and description aligned everywhere a machine can read them.'],
      ['doc',    'Source Authority Building', 'Placements and citations on the publications that models already lean on for your subject.'],
      ['eye',    'Competitor Answer Analysis', 'Who is being cited in your category today, on which prompts, and what they have that you do not.'],
    ],
  ],
  'process' => [
    ['tag' => 'Baseline', 'title' => 'Find Out Where You Stand', 'points' => [
      'Priority prompt set built from real buyer questions', 'Every assistant queried and logged',
      'Current citations and descriptions recorded', 'Competitor share of answer measured',
    ]],
    ['tag' => 'Structure', 'title' => 'Make Content Quotable', 'points' => [
      'Answers moved to the top of each section', 'Headings rewritten as real questions',
      'Definitions made self-contained', 'Schema added and validated',
    ]],
    ['tag' => 'Authority', 'title' => 'Become a Trusted Source', 'points' => [
      'Entity details aligned across the web', 'Citations earned on sources models trust',
      'Original data published and referenced', 'Author and expertise signals strengthened',
    ]],
    ['tag' => 'Measure', 'title' => 'Report the Shift', 'points' => [
      'Prompt set re-run on a fixed cycle', 'Appearance rate and position tracked',
      'Description accuracy reviewed', 'Next round of gaps prioritised',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'Why This Matters',
    'h2'      => 'Measured, <span class="gradient-text">Not Guessed</span>',
    'lead'    => 'Most AI visibility offers are opinions. Ours starts with a baseline you can check and ends with a number that either moved or did not.',
    'items'   => [
      ['chart','Tracked prompt sets'], ['sparkle','Four assistants monitored'], ['building','Entity consistency audits'],
      ['doc','Citation source building'], ['layers','Extractable content structure'], ['eye','Competitor share of answer'],
      ['refresh','Monthly re-measurement'], ['shield','Accuracy correction'], ['compass','Answer-engine strategy'],
    ],
  ],
  'stats' => [['4','x','Average Citation Lift'],['50','+','Prompts Tracked Per Brand'],['4','','Assistants Monitored'],['30','d','Reporting Cycle']],
  'faqs' => [
    ['What is AI Visibility and why does it matter?', 'People now use tools like ChatGPT, Gemini and Perplexity to find businesses, services and details. AI Visibility focuses on how your company is portrayed in these tools, so customers find accurate information about your business when they use AI platforms for answers.'],
    ['Can you actually influence what AI says about a brand?', 'You cannot edit the output, but you can change the inputs. Models draw on sources, structure and entity data. Improving all three measurably changes how often and how accurately a brand appears.'],
    ['How is this different from normal SEO?', 'It overlaps heavily. The difference is emphasis: extractable structure, entity consistency and citation-worthy sources matter more than click-through optimisation, because there may be no click at all.'],
    ['How do you measure something so new?', 'A fixed set of priority prompts run across each assistant on a schedule. We record whether you appear, in what position, how you are described, and who gets cited instead. That baseline makes the change readable.'],
    ['Will this hurt my traditional rankings?', 'No. Everything that improves AI visibility, clearer structure, stronger authority, consistent entity data, also helps conventional search. Nothing in this workstream trades one for the other.'],
    ['How long before we appear in answers?', 'Structural changes can show inside four to eight weeks. Authority and citation work compounds over three to six months, in line with the rest of search.'],
  ],
];

/* ======================================================== PPC/PAID MEDIA */
$c['paid-media'] = [
  'label' => 'PPC & Paid Media',
  'icon'  => 'target',
  'meta_title' => 'PPC & Paid Media Management — Google Ads and Meta Ads | Links Boots',
  'meta_desc'  => 'Google Ads, Meta Ads and paid search audits managed against cost per acquisition, not clicks. Transparent reporting and no long lock-ins.',
  'eyebrow' => 'PPC & Paid Media',
  'pill'    => 'Managed against CPA, not clicks',
  'title'   => 'Paid Campaigns Judged on <span class="gradient-text">Cost Per Customer</span>',
  'lead'    => 'Reach high-intent customers through targeted campaigns that generate quality leads and improve marketing returns, with reporting that starts at revenue and works backwards.',
  'ticks'   => ['Google & Meta certified', 'Full account transparency', 'Conversion tracking verified', 'No long lock-ins'],
  'panel'   => ['title' => 'How we judge a campaign', 'metrics' => [
      ['CPA', 'The number every decision answers to'],
      ['ROAS', 'Tracked per campaign and per audience'],
      ['LTV', 'Where the data allows it'],
      ['0', 'Vanity metrics in the headline report'],
  ]],
  'intro' => [
    'eyebrow' => 'The Problem',
    'h2'      => 'Most Paid Accounts Leak <span class="gradient-text">Quietly</span>',
    'paras'   => [
      'Budget drains into broad match terms nobody checks, audiences that stopped converting months ago, and conversion tracking that has been double-counting since the last site migration.',
      'We start every engagement by auditing what is actually being measured. If the tracking is wrong, every optimisation after it is guesswork with a confident dashboard attached.',
    ],
    'checks' => [
      'Conversion tracking verified before anything is changed',
      'Wasted spend identified and cut in week one',
      'Landing pages tested, not just ad copy',
      'You keep ownership of every account and asset',
    ],
  ],
  'visual' => ['title' => 'Channels we manage', 'items' => [
      ['search', 'Google Search and Shopping'],
      ['play',   'YouTube and Demand Gen'],
      ['users',  'Meta: Facebook and Instagram'],
      ['building','LinkedIn for B2B pipelines'],
      ['refresh','Remarketing and retention'],
      ['chart',  'Paid search audits'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Manage',
    'h2'      => 'Paid Media That <span class="gradient-text">Pays Back</span>',
    'lead'    => 'Search for intent, social for reach, audits for the accounts that need fixing before they need scaling.',
    'tiles'   => [
      ['search', 'Google Ads Management', 'Search, Shopping, Performance Max and YouTube built around commercial intent and managed to a target cost per acquisition.'],
      ['users',  'Meta & Social Ads', 'Facebook and Instagram campaigns with creative testing, audience structure, and reporting that survives contact with your CRM.'],
      ['chart',  'Paid Search Audits', 'A full account review that names the wasted spend, the tracking faults, and the structural fixes, whether or not you hire us afterwards.'],
      ['target', 'Conversion Tracking', 'GA4, server-side events and CRM alignment so the numbers in the platform match the numbers in your business.'],
      ['pen',    'Landing Page Testing', 'The page after the click tested as seriously as the ad, because that is usually where the money is lost.'],
      ['money',  'Budget Strategy', 'Spend allocated across channels by measured return, and reallocated as soon as the data says to.'],
    ],
  ],
  'process' => [
    ['tag' => 'Audit', 'title' => 'Verify the Numbers', 'points' => [
      'Conversion tracking checked end to end', 'Wasted spend and duplicate targeting flagged',
      'Account structure and bidding reviewed', 'Baseline CPA and ROAS established',
    ]],
    ['tag' => 'Rebuild', 'title' => 'Fix the Foundations', 'points' => [
      'Campaigns restructured around intent', 'Negative keyword lists rebuilt',
      'Audiences and exclusions tightened', 'Creative and copy refreshed',
    ]],
    ['tag' => 'Launch', 'title' => 'Test Before Scaling', 'points' => [
      'Controlled budgets on new structures', 'Landing pages checked on mobile and speed',
      'Tracking verified on live traffic', 'Early results reviewed before scale-up',
    ]],
    ['tag' => 'Scale', 'title' => 'Put Budget Where It Returns', 'points' => [
      'Winning campaigns scaled deliberately', 'Underperformers cut or rebuilt',
      'Incremental tests kept running', 'Weekly performance reporting',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'How We Operate',
    'h2'      => 'Your Accounts, <span class="gradient-text">Your Data</span>',
    'lead'    => 'We manage inside accounts you own. If you leave, everything stays with you, including the history and the learnings.',
    'items'   => [
      ['lock','You own every account'], ['doc','Full spend transparency'], ['target','CPA-led decisions'],
      ['chart','Verified conversion tracking'], ['refresh','Weekly optimisation'], ['users','Named account manager'],
      ['bolt','No long lock-in contracts'], ['money','Flat fee, not spend percentage'], ['eye','Live dashboard access'],
    ],
  ],
  'stats' => [['38','%','Average CPA Reduction'],['4.2','x','Average ROAS'],['12','+','Verticals Managed'],['0','','Long Lock-In Contracts']],
  'faqs' => [
    ['How do you charge for paid media management?', 'A flat monthly management fee based on scope and complexity, not a percentage of spend. A percentage model rewards an agency for spending more of your money, which is the wrong incentive.'],
    ['Do we keep ownership of the ad accounts?', 'Always. We work inside accounts you own and control. If the relationship ends, the accounts, history and learnings stay with you.'],
    ['What is a realistic minimum budget?', 'Below roughly $1,500 a month in media spend, management fees eat too much of the budget to be worth it. At that level we would usually recommend organic work first and say so.'],
    ['How quickly can you improve performance?', 'Wasted spend usually gets cut in the first two weeks. Structural improvements show over four to eight weeks. Anything faster than that is normally a tracking artefact rather than a real gain.'],
    ['Do you build landing pages too?', 'Yes. The page after the click is often where campaigns actually fail, so we test it as seriously as the ad. We can build new pages or work with your existing site.'],
    ['Can you audit our account without managing it?', 'Yes. A paid search audit is a standalone deliverable. You get the findings and the fixes whether or not you hire us to implement them.'],
  ],
];

/* ==================================================== CONTENT MARKETING */
$c['content-marketing'] = [
  'label' => 'Content Marketing',
  'icon'  => 'pen',
  'meta_title' => 'Content Marketing Services — SEO Writing, Strategy and Blog Management | Links Boots',
  'meta_desc'  => 'SEO content writing, topical authority strategy, and fully managed blogs. Content built to rank, to be cited by AI, and to convert readers into enquiries.',
  'eyebrow' => 'Content Creation',
  'pill'    => 'Written by people, briefed by data',
  'title'   => 'Content That Earns Rankings <span class="gradient-text">and Enquiries</span>',
  'lead'    => 'Develop engaging content that attracts audiences, builds trust, and encourages meaningful customer action, briefed from search data and written by people who understand your subject.',
  'ticks'   => ['Native writers', 'Data-led briefs', 'Built to be cited', 'Refresh cycles included'],
  'panel'   => ['title' => 'What you get each month', 'metrics' => [
      ['4-12', 'Publish-ready pieces, scoped to plan'],
      ['1', 'Revision round included on every piece'],
      ['100%', 'Human written, AI screened'],
      ['90d', 'Refresh cycle on priority pages'],
  ]],
  'intro' => [
    'eyebrow' => 'The Standard',
    'h2'      => 'Ten Good Pages Beat <span class="gradient-text">Sixty Thin Ones</span>',
    'paras'   => [
      'Publishing volume stopped working years ago. Depth is what makes a site the obvious answer for a cluster of queries, and depth is what AI answer engines quote when they assemble a response.',
      'Every brief starts from what people actually search, what the current results already cover, and what is missing. Then a writer who understands the subject fills that gap properly.',
    ],
    'checks' => [
      'Briefs built from live search and competitor data',
      'Written by native speakers, screened for AI output',
      'Structured so answers can be extracted cleanly',
      'Internally linked into the cluster on publication',
    ],
  ],
  'visual' => ['title' => 'What we produce', 'items' => [
      ['doc',    'Long-form SEO articles'],
      ['building','Service and landing pages'],
      ['layers', 'Topic clusters and pillars'],
      ['chart',  'Data studies and research'],
      ['users',  'Thought leadership and bylines'],
      ['refresh','Refreshes of decaying pages'],
  ]],
  'includes' => [
    'eyebrow' => 'What We Do',
    'h2'      => 'From Single Articles to a <span class="gradient-text">Fully Run Blog</span>',
    'lead'    => 'Take the writing, the strategy, or the entire content operation off your plate.',
    'tiles'   => [
      ['pen',   'SEO Content Writing', 'Search-briefed articles and landing pages written by native writers who research the subject rather than paraphrase page one.'],
      ['layers','Content Strategy & Topical Authority', 'A cluster map that shows what to publish, in what order, and why each piece earns its place.'],
      ['refresh','Blog Management', 'Planning, briefing, writing, editing, publishing and refreshing, run as an ongoing operation you do not have to manage.'],
      ['search','Keyword & Gap Research', 'The queries worth owning, the ones already covered, and the gaps competitors have left open.'],
      ['sparkle','AI-Ready Structuring', 'Content formatted so assistants can quote it cleanly, with direct answers and self-contained definitions.'],
      ['chart', 'Performance Reporting', 'What each piece ranked for, what it brought in, and which pages are due a refresh before they slip.'],
    ],
  ],
  'process' => [
    ['tag' => 'Research', 'title' => 'Decide What Deserves a Page', 'points' => [
      'Search demand and intent mapped', 'Existing coverage and gaps audited',
      'Cluster priorities agreed with you', 'Commercial value weighted over volume',
    ]],
    ['tag' => 'Brief', 'title' => 'Write the Brief Properly', 'points' => [
      'Angle, audience and outcome defined', 'Structure and headings set from real questions',
      'Sources, data and examples supplied', 'Internal link targets chosen in advance',
    ]],
    ['tag' => 'Write', 'title' => 'Draft, Edit, Approve', 'points' => [
      'Native writer matched to the subject', 'Editorial pass for accuracy and tone',
      'AI-content screening before delivery', 'One revision round included',
    ]],
    ['tag' => 'Publish', 'title' => 'Ship and Maintain', 'points' => [
      'Formatted, linked and published', 'Schema and metadata applied',
      'Performance tracked after launch', 'Refreshed on a fixed cycle',
    ]],
  ],
  'quality' => [
    'eyebrow' => 'Our Standards',
    'h2'      => 'Human Written, <span class="gradient-text">Data Briefed</span>',
    'lead'    => 'We use AI where it genuinely helps, in research and structuring. We do not use it to write the thing you are paying for.',
    'items'   => [
      ['users','Native-speaker writers'], ['shield','AI-output screening'], ['search','Data-led briefs'],
      ['pen','Subject-matched writers'], ['refresh','One revision included'], ['layers','Cluster-aware linking'],
      ['sparkle','Structured for AI citation'], ['clock','Reliable publishing cadence'], ['chart','Performance reporting'],
    ],
  ],
  'stats' => [['600','+','Pieces Published'],['14','+','Languages Covered'],['1','','Revision Round Included'],['90','d','Refresh Cycle']],
  'faqs' => [
    ['Do digital marketing agencies create content?', 'Yes. Full-service agencies have writers for web content, blogs, social posts, ads, emails and video. The type depends on the business and its audience. Good content explains the service clearly and answers the questions customers ask before deciding.'],
    ['Is the content written by AI?', 'No. Every piece is written by a person and screened before delivery. We use AI for research and structural work, where it genuinely helps, and not for the writing itself.'],
    ['Who owns the content?', 'You do, on delivery and in full. There are no licensing conditions and nothing is reused for another client.'],
    ['How many pieces do we need per month?', 'Fewer than most agencies will tell you. Four strong pieces a month into a coherent cluster outperforms twelve scattered ones. We scope to the cluster, not to a content quota.'],
    ['Can you write about technical subjects?', 'Yes. We match writers to subject and run an editorial pass for accuracy. For genuinely specialist topics we will ask for a subject-matter review from your team before publishing.'],
    ['Do you handle publishing as well as writing?', 'On blog management plans, yes: formatting, internal linking, schema, scheduling and refreshes. On writing-only plans we deliver publish-ready drafts for your team to load.'],
  ],
];

    return $c + child_service_content();
}
