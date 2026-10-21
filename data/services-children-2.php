<?php
/** Child pages: Digital PR and AI Visibility. */
require_once __DIR__ . '/services-children-3.php';

function child_service_content_two(): array {
    $c = [];

/* =================================================== DIGITAL PR CHILDREN */
$c['digital-pr/digital-pr-campaigns'] = [
  'parent' => 'digital-pr', 'label' => 'Digital PR Campaigns', 'icon' => 'megaphone',
  'card_blurb' => 'Data-led story angles built, pitched and placed across national, trade and niche publications your buyers already read.',
  'meta_title' => 'Digital PR Campaign Services — Data-Led Story Placement | Links Boots',
  'meta_desc'  => 'Digital PR campaigns built on original data and pitched to named journalists. Earned coverage on publications that do not sell placements.',
  'eyebrow' => 'Digital PR Campaigns', 'pill' => 'Earned, never paid',
  'title' => 'Stories Journalists <span class="gradient-text">Actually Want to Cover</span>',
  'lead'  => 'Data-led campaigns built from an angle up: original research, a page worth linking to, and pitches sent to reporters who have covered the subject before.',
  'ticks' => ['Original data and research','Named journalist targeting','Tier-one publications','Full coverage reporting'],
  'panel' => ['title' => 'A typical campaign', 'metrics' => [
      ['8-20','Placements from a strong story'],['4-6wk','Angle to first coverage'],
      ['DR 70+','Tier-one publication range'],['100%','Earned placements'],
  ]],
  'intro'=>[
    'eyebrow'=>'What Makes It Work','h2'=>'The Angle Does <span class="gradient-text">Most of the Work</span>',
    'paras'=>[
      'A campaign succeeds or fails at the idea stage. If the story is not genuinely interesting to a publication\'s readers, no amount of outreach volume rescues it, and the sends get reported as activity instead of results.',
      'We test angles against what is already running in the target publications before committing budget to research. The ones that survive that test are the ones we build.',
    ],
    'checks'=>['Angles tested against live coverage before we build','Data commissioned or sourced to support the claim','A landing page worth linking to, published first','Pitches written per publication, never mass-sent'],
  ],
  'visual'=>['title'=>'What a campaign includes','items'=>[
      ['search','Angle research and testing'],['chart','Original data or survey'],
      ['pen','Written findings and assets'],['doc','Campaign landing page'],
      ['users','Named journalist outreach'],['eye','Coverage tracking and reporting'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Build','h2'=>'A Campaign, Not a <span class="gradient-text">Press Release</span>',
    'lead'=>'Everything from the idea to the coverage report, run as one piece of work.',
    'tiles'=>[
      ['search','Angle Development','Multiple angles researched and tested against what target publications are already running.'],
      ['chart','Data & Research','Surveys, data studies and analysis designed to produce a headline finding worth quoting.'],
      ['doc','Campaign Assets','A landing page, charts, quotes and spokesperson lines, ready before the first pitch goes out.'],
      ['users','Journalist Outreach','Pitches written for named reporters at named publications, followed up personally.'],
      ['bolt','Reactive Opportunities','Fast commentary placed when a news cycle creates an opening in your sector.'],
      ['eye','Coverage Reporting','Every placement, mention and metric logged, with branded search and referral lift tracked.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Angle','title'=>'Test the Idea First','points'=>['Target publications reviewed','Multiple angles drafted','Angles tested against live coverage','Shortlist agreed with you']],
    ['tag'=>'Research','title'=>'Build the Story','points'=>['Survey or data study run','Findings analysed and written up','Charts and assets produced','Landing page built and published']],
    ['tag'=>'Pitch','title'=>'Reach the Right Desks','points'=>['Named journalists identified','Pitches tailored per publication','Exclusives offered where useful','Personal follow-up on every send']],
    ['tag'=>'Report','title'=>'Show What Landed','points'=>['Placements logged with metrics','Unlinked mentions chased','Branded search lift measured','Learnings fed into the next angle']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Run It','h2'=>'Honest About What <span class="gradient-text">Did Not Land</span>',
    'lead'=>'Some campaigns underperform. We tell you which ones and why, rather than reporting sends as if they were coverage.',
    'items'=>[['search','Angles tested first'],['chart','Original data'],['users','Named journalist targeting'],
      ['shield','Earned, never paid'],['doc','Full coverage reporting'],['eye','Unlinked mentions chased'],
      ['bolt','Reactive commentary'],['globe','International press desks'],['refresh','Ongoing story pipeline']],
  ],
  'stats'=>[['320','+','Placements Secured'],['45','%','Pitch Response Rate'],['70','+','Average Publisher DR'],['18','+','Sectors Covered']],
  'faqs'=>[
    ['How many links will a campaign get?','A strong story typically earns eight to twenty placements. We give a realistic range per angle rather than a guarantee, because coverage depends partly on the news cycle.'],
    ['Do we need original data?','Not always, but it dramatically improves pickup. Commentary and expert angles work too, particularly when they are reactive to something already running.'],
    ['What if the story does not get picked up?','We reangle and re-pitch. Every campaign includes a review of what did and did not land, and that review is honest rather than reframed.'],
    ['How long does a campaign take?','Four to six weeks from angle to first coverage, longer if we are commissioning original research. Reactive commentary can land within days.'],
    ['Can you run campaigns in other markets?','Yes, with native-language writers and local press contacts across European, Gulf and Asian markets.'],
    ['Is this the same as buying links?','No. These are earned placements on publications that do not sell coverage. That is what makes them valuable and also what makes them less predictable.'],
  ],
];

$c['digital-pr/brand-unlinked-mention-services'] = [
  'parent' => 'digital-pr', 'label' => 'Brand & Unlinked Mentions', 'icon' => 'link',
  'card_blurb' => 'We find every place your brand is named without a link and turn the ones worth converting into working citations.',
  'meta_title' => 'Unlinked Brand Mention Services — Convert Mentions to Links | Links Boots',
  'meta_desc'  => 'Find every unlinked mention of your brand and convert the valuable ones into links. Plus ongoing monitoring so new mentions are caught while they are fresh.',
  'eyebrow' => 'Brand & Unlinked Mentions', 'pill' => 'Coverage you already have',
  'title' => 'You Have Already Earned These <span class="gradient-text">Links</span>',
  'lead'  => 'Every place your brand is named without a link is authority sitting unclaimed. We find them, prioritise the ones worth chasing, and convert them.',
  'ticks' => ['Full historic mention sweep','Prioritised by value','Polite editor outreach','Ongoing monitoring'],
  'panel' => ['title' => 'What a sweep typically finds', 'metrics' => [
      ['40-200','Unlinked mentions on an established brand'],['25-40%','Conversion rate on outreach'],
      ['Days','Not months, to first conversions'],['Ongoing','New mentions caught while fresh'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why It Works','h2'=>'The Cheapest Links You Will <span class="gradient-text">Ever Earn</span>',
    'paras'=>[
      'A journalist has already decided your brand was worth naming. The editorial judgement, the hardest part, is done. All that is missing is a hyperlink, and a polite request to the right person succeeds far more often than people expect.',
      'Mentions also carry weight without the link. Search engines and AI models use brand mentions as entity signals, so even the ones that never convert are worth knowing about.',
    ],
    'checks'=>['Full historic sweep across web, news and forums','Mentions prioritised by page authority and traffic','Requests sent to the person who can actually edit the page','New mentions monitored so they are caught while fresh'],
  ],
  'visual'=>['title'=>'Where we look','items'=>[
      ['doc','News and trade publications'],['globe','Blogs and industry sites'],
      ['users','Forums and communities'],['chart','Research, reports and roundups'],
      ['star','Review and comparison sites'],['building','Directories and association pages'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'Find, Prioritise, <span class="gradient-text">Convert</span>',
    'lead'=>'A one-off sweep to clear the backlog, then monitoring so it never builds up again.',
    'tiles'=>[
      ['search','Historic Mention Sweep','A full scan for every unlinked reference to your brand, products, founders and campaigns.'],
      ['chart','Value Prioritisation','Mentions ranked by page authority, traffic and relevance so effort goes where it pays.'],
      ['users','Conversion Outreach','Polite, specific requests to the person who can actually edit the page, not a generic contact form.'],
      ['pen','Correction Requests','Where a mention is inaccurate or out of date, we ask for the fix as well as the link.'],
      ['eye','Ongoing Monitoring','New mentions flagged as they appear, when conversion rates are at their highest.'],
      ['doc','Entity Reporting','What is said about your brand across the web, useful for AI visibility as much as for links.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Sweep','title'=>'Find Every Mention','points'=>['Brand, product and founder terms scanned','News, web, forums and reports covered','Existing links filtered out','Full mention list compiled']],
    ['tag'=>'Rank','title'=>'Decide What Is Worth Chasing','points'=>['Page authority and traffic assessed','Relevance to your topic weighted','Low-value mentions set aside','Target list agreed']],
    ['tag'=>'Outreach','title'=>'Ask Properly','points'=>['Correct contact identified','Request written specifically per page','Value to their reader explained','Followed up once, politely']],
    ['tag'=>'Monitor','title'=>'Catch the Next Ones','points'=>['Alerts set on brand terms','New mentions reviewed weekly','Fresh mentions converted quickly','Monthly reporting on both']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Ask','h2'=>'Polite, Specific, <span class="gradient-text">Once</span>',
    'lead'=>'Editors remember agencies that pester them. One good request beats five follow-ups, and it keeps the relationship usable next time.',
    'items'=>[['search','Full historic sweep'],['chart','Value-ranked targets'],['users','Correct contact per page'],
      ['pen','Specific, non-templated asks'],['shield','No pressure tactics'],['eye','Ongoing monitoring'],
      ['doc','Entity signal reporting'],['refresh','Weekly new-mention review'],['clock','One polite follow-up']],
  ],
  'stats'=>[['200','+','Mentions Found Per Sweep'],['35','%','Average Conversion Rate'],['1','','Polite Follow-Up'],['52','','Weeks of Monitoring']],
  'faqs'=>[
    ['How many unlinked mentions will you find?','On an established brand with any press history, usually between forty and two hundred. Newer brands find fewer, but the conversion rate is often higher because the coverage is recent.'],
    ['What conversion rate is realistic?','Twenty-five to forty per cent on well-prioritised targets. Recent mentions convert best, which is why ongoing monitoring is worth more than repeated sweeps.'],
    ['Do unlinked mentions help even without a link?','Yes. They function as entity signals for both search engines and AI models. Converting them adds link value on top of a signal you already have.'],
    ['Will you annoy journalists on our behalf?','No. One specific, polite request and at most one follow-up. Editors remember agencies that pester them, and that reputation attaches to your brand.'],
    ['Can you monitor mentions ongoing?','Yes, and it is the higher-value half of this service. A mention caught in its first week converts far more often than one chased eighteen months later.'],
    ['What about inaccurate mentions?','We flag those and request a correction alongside the link. Inaccurate descriptions are also an AI visibility problem, since models pick them up as fact.'],
  ],
];

$c['digital-pr/press-media-outreach-services'] = [
  'parent' => 'digital-pr', 'label' => 'Press & Media Outreach', 'icon' => 'doc',
  'card_blurb' => 'Launches, funding, research and expert commentary placed with the reporters who actually cover your sector.',
  'meta_title' => 'Press & Media Outreach Services — Get Covered by Real Journalists | Links Boots',
  'meta_desc'  => 'Press outreach for launches, funding, research and expert commentary. Pitched to named reporters who cover your sector, not blasted to a media list.',
  'eyebrow' => 'Press & Media Outreach', 'pill' => 'Named reporters, not lists',
  'title' => 'Get Covered by People Who <span class="gradient-text">Actually Cover You</span>',
  'lead'  => 'Launches, funding rounds, research and expert commentary placed with the journalists who write about your sector, through relationships rather than media databases.',
  'ticks' => ['Named reporter targeting','Sector-specific desks','Reactive commentary','Spokesperson support'],
  'panel' => ['title' => 'What we place', 'metrics' => [
      ['Launch','Product and company announcements'],['Funding','Rounds, acquisitions and milestones'],
      ['Research','Data findings and industry reports'],['Comment','Expert reaction to live stories'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Reality','h2'=>'Media Databases Do Not <span class="gradient-text">Get You Covered</span>',
    'paras'=>[
      'A press release blasted to a purchased list is deleted unread. Journalists get hundreds of those a week and almost none of them are relevant to what that particular reporter writes about.',
      'What works is knowing who covers your sector, what they have written recently, and why your story matters to their readers specifically. That is slower, and it is the only thing that produces coverage.',
    ],
    'checks'=>['Reporters identified by what they have actually written','Pitches written for one publication at a time','Timing matched to the news cycle','Spokesperson prepared before the pitch goes out'],
  ],
  'visual'=>['title'=>'Where we place','items'=>[
      ['building','National business press'],['chart','Trade and industry publications'],
      ['globe','Regional and local media'],['sparkle','Technology and startup outlets'],
      ['play','Podcasts and broadcast'],['users','Newsletters and expert roundups'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Handle','h2'=>'The Full <span class="gradient-text">Press Operation</span>',
    'lead'=>'From the announcement itself to the follow-up interview.',
    'tiles'=>[
      ['pen','Press Materials','Announcements written to be usable by a journalist, not to satisfy an internal approval chain.'],
      ['users','Reporter Targeting','Journalists identified by recent coverage, then pitched individually with a reason it matters to them.'],
      ['bolt','Reactive Commentary','Fast expert reaction placed when a story breaks in your sector and reporters need a source.'],
      ['megaphone','Launch Support','Coordinated outreach around product launches, funding rounds and company milestones.'],
      ['doc','Spokesperson Prep','Lines, likely questions and background prepared so your spokesperson is ready before the call.'],
      ['eye','Coverage Tracking','Every placement, mention and syndication logged and reported with its metrics.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Prepare','title'=>'Make It Worth Covering','points'=>['Announcement written for journalists','Supporting data and quotes gathered','Assets and images prepared','Timing agreed against the news cycle']],
    ['tag'=>'Target','title'=>'Identify Real Contacts','points'=>['Reporters found by recent coverage','Publication priorities ranked','Exclusive strategy decided','Contact details verified']],
    ['tag'=>'Pitch','title'=>'One Publication at a Time','points'=>['Pitch tailored per reporter','Relevance to their beat explained','Embargoes handled properly','Personal follow-up on each send']],
    ['tag'=>'Support','title'=>'Handle What Comes Back','points'=>['Interview requests coordinated','Spokesperson briefed','Follow-up questions answered fast','Coverage logged and reported']],
  ],
  'quality'=>[
    'eyebrow'=>'Our Approach','h2'=>'Relationships, <span class="gradient-text">Not Databases</span>',
    'lead'=>'A journalist who has had a useful story from us before opens the next email. That is the whole asset.',
    'items'=>[['users','Named reporter targeting'],['search','Beat-matched pitching'],['bolt','Reactive speed'],
      ['doc','Journalist-ready materials'],['shield','Embargoes respected'],['globe','International desks'],
      ['pen','Spokesperson preparation'],['eye','Full coverage tracking'],['clock','News-cycle timing']],
  ],
  'stats'=>[['45','%','Pitch Response Rate'],['18','+','Sectors Covered'],['48','h','Reactive Turnaround'],['100','%','Earned Coverage']],
  'faqs'=>[
    ['Do you write the press release?','Yes, and we write it for journalists rather than for internal sign-off. Releases written to satisfy a committee are the ones that get deleted.'],
    ['What counts as a story worth pitching?','Something new, something with data behind it, or something that connects to a story already running. A product update with no wider angle usually is not, and we will say so before spending your budget.'],
    ['How fast can you place reactive commentary?','Within 48 hours when the news cycle is live, faster if your spokesperson is available and pre-briefed. Speed is most of the value in reactive work.'],
    ['Do you guarantee coverage?','No. Anyone guaranteeing editorial coverage is either buying it or misleading you. We commit to the targeting, the materials and honest reporting on what landed.'],
    ['Can you handle interview requests?','Yes. We coordinate scheduling, brief your spokesperson on likely questions, and handle follow-ups from the reporter.'],
    ['Do you work with in-house comms teams?','Often. We usually take the outreach and targeting while your team keeps ownership of messaging and approvals.'],
  ],
];

/* ================================================ AI VISIBILITY CHILDREN */
$c['ai-visibility/generative-engine-optimization-services'] = [
  'parent' => 'ai-visibility', 'label' => 'Generative Engine Optimization', 'icon' => 'sparkle',
  'card_blurb' => 'The authority, citation and entity work that makes assistants treat your brand as a source worth naming.',
  'meta_title' => 'Generative Engine Optimization (GEO) Services | Links Boots',
  'meta_desc'  => 'Get cited by ChatGPT, Gemini, Perplexity and AI Overviews. GEO builds the authority, entity consistency and source signals models rely on.',
  'eyebrow' => 'Generative Engine Optimization', 'pill' => 'Be the cited source',
  'title' => 'Become a Source the Models <span class="gradient-text">Trust</span>',
  'lead'  => 'Generative Engine Optimisation builds the authority, citation and entity signals that decide whether an assistant names your brand or a competitor when it answers.',
  'ticks' => ['Entity consistency','Citation source building','Prompt-set baseline','Measured monthly'],
  'panel' => ['title' => 'What decides a citation', 'metrics' => [
      ['Sources','Publications the model already trusts'],['Entity','Consistent facts about your brand'],
      ['Structure','Content that can be quoted cleanly'],['Recency','Dated, current information'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Mechanism','h2'=>'You Cannot Edit the Answer, <span class="gradient-text">Only the Inputs</span>',
    'paras'=>[
      'Assistants assemble answers from sources, structure and entity data. None of those are things you can change directly in the model, and all three are things you can change on the open web.',
      'GEO is the work of improving those inputs deliberately: earning citations on the publications models already lean on, aligning what the web says about your brand, and making your own pages quotable.',
    ],
    'checks'=>['Baseline measured before anything changes','Entity facts aligned everywhere machines read them','Citations earned on sources models already use','Re-measured on a fixed cycle so change is readable'],
  ],
  'visual'=>['title'=>'What we work on','items'=>[
      ['building','Entity consistency across the web'],['doc','Citations on trusted sources'],
      ['chart','Original data worth referencing'],['users','Author and expertise signals'],
      ['layers','Extractable content structure'],['eye','Competitor share of answer'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'The Inputs That <span class="gradient-text">Actually Move Citations</span>',
    'lead'=>'Everything here is measurable against a prompt-set baseline, or we do not do it.',
    'tiles'=>[
      ['chart','Visibility Baseline','A fixed prompt set run across assistants, recording where you appear, how you are described, and who is cited instead.'],
      ['building','Entity Alignment','Name, category, founders, location and description made consistent everywhere a machine can find them.'],
      ['doc','Citation Source Building','Placements on the publications models already treat as authoritative for your subject.'],
      ['users','Expertise Signals','Author identity, credentials and topical track record strengthened across your content.'],
      ['sparkle','Original Data Publishing','Research and figures other sites reference, which is one of the strongest paths into an answer.'],
      ['eye','Competitor Answer Analysis','Who is cited in your category, on which prompts, and what they have that you do not.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Baseline','title'=>'Measure First','points'=>['Priority prompts built from buyer questions','Every assistant queried and logged','Descriptions and citations recorded','Competitor share of answer measured']],
    ['tag'=>'Align','title'=>'Fix the Entity Layer','points'=>['Contradictory facts found across the web','Profiles and listings corrected','Schema and knowledge signals added','Descriptions standardised']],
    ['tag'=>'Earn','title'=>'Build Source Authority','points'=>['Trusted publications identified','Citations and placements earned','Original data published','Expertise signals strengthened']],
    ['tag'=>'Remeasure','title'=>'Prove the Shift','points'=>['Prompt set re-run on cycle','Appearance rate compared','Description accuracy reviewed','Next gaps prioritised']],
  ],
  'quality'=>[
    'eyebrow'=>'Our Position','h2'=>'A Number That Either <span class="gradient-text">Moved or Did Not</span>',
    'lead'=>'Most GEO offers are opinions with confident slides attached. Ours starts and ends with a measurement you can check yourself.',
    'items'=>[['chart','Prompt-set baseline'],['sparkle','Four assistants tracked'],['building','Entity consistency audit'],
      ['doc','Citation source building'],['eye','Competitor share of answer'],['refresh','Monthly re-measurement'],
      ['shield','Inaccuracy correction'],['users','Expertise signal work'],['compass','No unmeasurable claims']],
  ],
  'stats'=>[['4','x','Average Citation Lift'],['50','+','Prompts Tracked'],['4','','Assistants Monitored'],['30','d','Measurement Cycle']],
  'faqs'=>[
    ['What does GEO actually change?','The inputs models draw on: which sources cite you, what the web says about your brand, and how quotable your own pages are. You cannot edit the output, but those three reliably shift it.'],
    ['Is GEO different from SEO?','It overlaps heavily and shares most of the same work. The emphasis differs: extractability, entity consistency and citation-worthiness matter more than click-through, because there may be no click.'],
    ['How do you measure it?','A fixed prompt set run across each assistant on a schedule. We record appearance, position, description accuracy, and who is cited instead. That baseline is what makes any claim about improvement checkable.'],
    ['How long does it take?','Structural and entity work can show inside four to eight weeks. Citation and authority work compounds over three to six months.'],
    ['What if the model says something wrong about us?','That is usually an entity problem. Models repeat what the web says, so the fix is correcting the sources, and it is one of the more satisfying parts of this work.'],
    ['Will this replace traditional SEO?','No. It sits alongside it, and almost everything that helps here also helps conventional rankings.'],
  ],
];

$c['ai-visibility/aio-content-structuring'] = [
  'parent' => 'ai-visibility', 'label' => 'AIO Content Structuring', 'icon' => 'layers',
  'card_blurb' => 'Pages rebuilt so answers lift out cleanly: direct responses under question headings, self-contained definitions, validated schema.',
  'meta_title' => 'AIO Content Structuring — Make Your Content Quotable by AI | Links Boots',
  'meta_desc'  => 'Restructure content so AI assistants can extract and cite it. Direct answers, question-shaped headings, self-contained definitions and validated schema.',
  'eyebrow' => 'AIO Content Structuring', 'pill' => 'Written to be quoted',
  'title' => 'Content Built to Be <span class="gradient-text">Lifted and Quoted</span>',
  'lead'  => 'The highest-leverage change most sites can make: restructure pages so an assistant can extract a clean, correct answer without needing the rest of the page.',
  'ticks' => ['Answer-first sections','Question-shaped headings','Self-contained definitions','Validated schema'],
  'panel' => ['title' => 'The four structural rules', 'metrics' => [
      ['01','Answer in the first two sentences'],['02','Headings that mirror real questions'],
      ['03','Paragraphs that stand alone'],['04','Schema that matches the page'],
  ]],
  'intro'=>[
    'eyebrow'=>'Why Structure Wins','h2'=>'A Model Quotes the <span class="gradient-text">Paragraph, Not the Page</span>',
    'paras'=>[
      'When an assistant builds an answer it lifts a passage, not a document. If your point only makes sense after three paragraphs of preamble, it cannot be lifted, and something more quotable gets cited instead.',
      'Restructuring existing content for extractability is usually faster and cheaper than writing anything new, and it improves the page for human readers at the same time.',
    ],
    'checks'=>['The answer appears in the first two sentences of a section','Headings are written as the questions people actually ask','Definitions make sense in isolation','Schema reflects what is genuinely on the page'],
  ],
  'visual'=>['title'=>'What we restructure','items'=>[
      ['doc','Service and product pages'],['pen','Long-form articles and guides'],
      ['search','FAQ and support content'],['chart','Data and comparison pages'],
      ['building','About and entity pages'],['gear','Schema and page metadata'],
  ]],
  'includes'=>[
    'eyebrow'=>'What We Do','h2'=>'Rebuild for <span class="gradient-text">Extraction</span>',
    'lead'=>'Applied to existing pages first, since that is where the fastest gains are.',
    'tiles'=>[
      ['layers','Answer-First Restructuring','Every section rewritten so the direct answer comes first and the supporting detail follows.'],
      ['search','Question-Shaped Headings','Headings rewritten to mirror the queries people actually type and speak.'],
      ['doc','Self-Contained Passages','Definitions and key points written to make sense when lifted away from the page around them.'],
      ['gear','Schema Implementation','Structured data added and validated, reflecting real page content rather than aspiration.'],
      ['chart','Comparison & Table Formatting','Data presented in formats assistants parse reliably instead of prose that hides the numbers.'],
      ['refresh','Recency Signals','Dates, updates and freshness handled properly, since stale pages get cited less.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Audit','title'=>'Find What Cannot Be Quoted','points'=>['Priority pages reviewed for extractability','Buried answers identified','Heading structure assessed','Existing schema validated']],
    ['tag'=>'Restructure','title'=>'Move the Answers Up','points'=>['Sections rewritten answer-first','Headings reshaped as questions','Passages made self-contained','Tables and lists introduced where they help']],
    ['tag'=>'Mark Up','title'=>'Add Machine Signals','points'=>['Schema applied per page type','Markup validated against real content','Dates and authorship set','Internal links reviewed']],
    ['tag'=>'Verify','title'=>'Check It Worked','points'=>['Pages re-tested against prompt set','Citation changes recorded','Human readability confirmed','Next batch prioritised']],
  ],
  'quality'=>[
    'eyebrow'=>'Our Standard','h2'=>'Better for Machines, <span class="gradient-text">Better for People</span>',
    'lead'=>'Answer-first writing is not a trick for models. It is just clearer writing, which is why it improves both at once.',
    'items'=>[['layers','Answer-first sections'],['search','Question-shaped headings'],['doc','Self-contained passages'],
      ['gear','Validated schema only'],['chart','Parseable data formats'],['refresh','Recency handled properly'],
      ['eye','Re-tested after changes'],['users','Human readability preserved'],['sparkle','Works across assistants']],
  ],
  'stats'=>[['2','x','Typical Extraction Rate Gain'],['20','','Pages Per Sprint'],['4','','Structural Rules'],['100','%','Schema Validated']],
  'faqs'=>[
    ['Does this hurt readability for humans?','No, it improves it. Answer-first writing with clear question headings is easier to read and to skim. The model-friendly version and the reader-friendly version are the same document.'],
    ['Do we need to rewrite everything?','No. Start with the pages that already get traffic or already rank. Restructuring those is where almost all the early gain is.'],
    ['Is schema really necessary?','Valid schema helps. Half-implemented schema is worse than none, because it produces errors that suppress rich results, which is why we validate rather than assume.'],
    ['How do you know if it worked?','We test the same prompts before and after. If extraction and citation rates do not change, we say so and look at authority instead, which is usually the other half of the problem.'],
    ['Can you work with our CMS?','Yes for all common platforms. Where a CMS genuinely blocks a change, we will tell you rather than leaving it silently undone.'],
    ['How many pages per month?','Around twenty per sprint. Structuring is detailed work and going faster tends to mean going shallower.'],
  ],
];

$c['ai-visibility/ai-search-monitoring-reporting'] = [
  'parent' => 'ai-visibility', 'label' => 'AI Search Monitoring & Reporting', 'icon' => 'chart',
  'card_blurb' => 'A fixed prompt set run across every major assistant on schedule, so AI visibility becomes a number instead of a talking point.',
  'meta_title' => 'AI Search Monitoring & Reporting — Track Your Brand in AI Answers | Links Boots',
  'meta_desc'  => 'Track how ChatGPT, Gemini, Perplexity and AI Overviews describe your brand. Fixed prompt sets, scheduled runs, and reporting you can act on.',
  'eyebrow' => 'AI Search Monitoring', 'pill' => 'Measured, not guessed',
  'title' => 'Know Exactly What AI Says <span class="gradient-text">About Your Brand</span>',
  'lead'  => 'A fixed set of priority prompts run across every major assistant on a schedule, recording whether you appear, how you are described, and who gets cited instead.',
  'ticks' => ['4 assistants tracked','50+ prompts per brand','Monthly reporting','Competitor share of answer'],
  'panel' => ['title' => 'What each run records', 'metrics' => [
      ['Appear','Whether your brand is named at all'],['Position','Where in the answer you land'],
      ['Describe','How accurately you are characterised'],['Rivals','Who is cited in your place'],
  ]],
  'intro'=>[
    'eyebrow'=>'The Problem','h2'=>'You Cannot Improve What You <span class="gradient-text">Have Not Measured</span>',
    'paras'=>[
      'Most brands have no idea how they appear in AI answers. They have anecdotes: someone asked ChatGPT once and it said something odd. That is not a baseline and it cannot support a decision.',
      'A fixed prompt set, run the same way on a schedule, turns AI visibility from a talking point into a workstream with a number attached.',
    ],
    'checks'=>['Prompts built from questions your buyers genuinely ask','Same set run identically each cycle','Appearance, position and description all recorded','Competitor citations tracked alongside yours'],
  ],
  'visual'=>['title'=>'What we monitor','items'=>[
      ['sparkle','ChatGPT and GPT-powered tools'],['globe','Google Gemini'],
      ['compass','Perplexity'],['search','Google AI Overviews'],
      ['eye','Description accuracy'],['users','Competitor citations'],
  ]],
  'includes'=>[
    'eyebrow'=>'What You Get','h2'=>'Reporting You Can <span class="gradient-text">Act On</span>',
    'lead'=>'Not a dashboard of numbers with no next step attached.',
    'tiles'=>[
      ['search','Prompt Set Design','Fifty or more priority prompts built from the questions your buyers actually ask before purchase.'],
      ['refresh','Scheduled Runs','The same set executed identically each cycle, so changes reflect reality rather than prompt variation.'],
      ['chart','Appearance Tracking','Whether you are named, where in the answer, and how that has moved since the last run.'],
      ['eye','Description Accuracy','What the assistant says about you, flagged when it is wrong or out of date.'],
      ['users','Competitor Share','Who is being cited instead of you, on which prompts, and how consistently.'],
      ['doc','Action Reporting','Every report ends with what to fix next, not just what the numbers were.'],
    ],
  ],
  'process'=>[
    ['tag'=>'Design','title'=>'Build the Prompt Set','points'=>['Buyer questions gathered','Commercial and comparison prompts included','Competitor-trigger prompts added','Set agreed and frozen']],
    ['tag'=>'Baseline','title'=>'Run It Cold','points'=>['Every assistant queried','Responses captured verbatim','Appearance and position logged','Competitor citations recorded']],
    ['tag'=>'Analyse','title'=>'Find the Cause','points'=>['Gaps traced to sources or structure','Inaccuracies traced to their origin','Competitor advantages identified','Fix list prioritised']],
    ['tag'=>'Report','title'=>'Show the Movement','points'=>['Set re-run on schedule','Change reported per prompt','Wins and regressions both shown','Next actions recommended']],
  ],
  'quality'=>[
    'eyebrow'=>'How We Report','h2'=>'Honest Numbers, <span class="gradient-text">Including the Bad Ones</span>',
    'lead'=>'Regressions get reported as clearly as gains. A monitoring service that only shows improvement is a marketing document.',
    'items'=>[['chart','Fixed, frozen prompt sets'],['refresh','Identical scheduled runs'],['sparkle','Four assistants covered'],
      ['eye','Verbatim response capture'],['users','Competitor citation tracking'],['doc','Action-led reporting'],
      ['shield','Regressions shown too'],['building','Inaccuracy root-cause tracing'],['compass','Next steps every cycle']],
  ],
  'stats'=>[['50','+','Prompts Per Brand'],['4','','Assistants Covered'],['30','d','Reporting Cycle'],['100','%','Responses Captured']],
  'faqs'=>[
    ['How many prompts do we need?','Fifty or more for a useful picture. Fewer than that and normal model variation drowns out any real signal.'],
    ['How often should it run?','Monthly for most brands. Weekly is worth it during an active campaign or after a significant content or PR push.'],
    ['Do AI answers change between runs?','Yes, models vary. That is precisely why the set is frozen and run identically each cycle, so variation averages out and real movement becomes visible.'],
    ['What if the answers are wrong about us?','We trace the inaccuracy to its source. It is almost always something on the web saying it, and correcting that source is the fix.'],
    ['Can we track competitors too?','Yes, and it is one of the more useful parts. Knowing who gets cited instead of you, and on which prompts, tells you exactly where to focus.'],
    ['Is this useful without the other AI services?','As a diagnostic, yes. But monitoring only tells you where you stand; changing it needs the structural and authority work alongside it.'],
  ],
];

    return $c + child_service_content_three();
}
