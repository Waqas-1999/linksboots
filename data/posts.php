<?php
/**
 * Blog content. Each entry renders a card on /blog/ and a full article page
 * at /blog/<slug>/ through templates/post.php.
 */
function all_posts(): array {
    return [

'how-to-rank-higher-on-google' => [
  'title'   => 'How to Rank Higher on Google: 12 Tested Strategies',
  'excerpt' => 'Most websites never show up in Google search results in any meaningful way. Zero clicks. Zero visits. Here is what actually moves a page up.',
  'tags'    => ['SEO', 'Marketing Strategy'],
  'date'    => '2026-07-31',
  'read'    => '11 min read',
  'icon'    => 'chart',
  'photo'   => 'blog-rank-higher',
  'lead'    => 'Ranking is not one lever. It is a stack of small, boring decisions that compound. These twelve are the ones we run on almost every account.',
  'body'    => [
    ['h2', 'Start with the pages that already almost rank'],
    ['p',  'Positions 8 to 20 are the cheapest wins on any site. Those pages already have relevance and some authority — they are simply short of a signal or two. Pull the list from Search Console, sort by impressions, and fix the top twenty before you write a single new article.'],
    ['ul', ['Match the page to the intent actually shown in the results', 'Add the subtopics competitors cover and you do not', 'Tighten the title so it earns the click', 'Point two or three internal links at it from stronger pages']],
    ['h2', 'Write for the question, not the keyword'],
    ['p',  'Google resolves queries into topics. A page that answers the full question — including the follow-up questions a reader would ask next — outranks a page that repeats a phrase. Structure the article around those questions and use headings that read like them.'],
    ['h2', 'Fix the technical floor before chasing links'],
    ['p',  'Crawlability, indexation, duplicate templates, slow templates, broken canonicals. None of these will win you a ranking on their own, but any one of them can cap everything else you do. A technical audit is a one-time cost that keeps paying.'],
    ['h2', 'Earn links from pages that get traffic'],
    ['p',  'A link from a page with real readers passes value that a link from an orphaned post never will. Judge a placement by the traffic of the page it sits on, not just the domain rating of the site.'],
    ['h2', 'Build topical depth, not article count'],
    ['p',  'Ten thorough pages on one subject beat sixty thin pages across ten subjects. Depth is what makes a site the obvious answer for a cluster of queries, and it is what AI answer engines cite.'],
    ['h2', 'Refresh instead of republish'],
    ['p',  'Content decays. Rankings slip quietly over six to twelve months as competitors update and you do not. Put your top thirty pages on a refresh calendar and treat updating as production work, not admin.'],
    ['h2', 'The remaining six, briefly'],
    ['ol', ['Make internal linking a deliberate system, not an afterthought', 'Improve click-through with titles and descriptions written for humans', 'Consolidate pages that compete with each other', 'Add original data, screenshots, or examples competitors cannot copy', 'Get the entity basics right — brand mentions, consistent details, clean schema', 'Track outcomes as enquiries and revenue, not just positions']],
    ['h2', 'How long this takes'],
    ['p',  'Most sites see measurable movement in three to six months. Competitive commercial terms take longer. Anyone promising faster is either working in a very soft niche or is not telling you the whole story.'],
  ],
],

'multilingual-link-building-playbook' => [
  'title'   => 'Multilingual Link Building: A Market-by-Market Playbook',
  'excerpt' => 'Most link-building playbooks are written for English-speaking markets and then loosely adapted everywhere else. That does not work.',
  'tags'    => ['Link Building', 'Marketing Strategy'],
  'date'    => '2026-07-29',
  'read'    => '9 min read',
  'icon'    => 'globe',
  'photo'   => 'blog-multilingual',
  'lead'    => 'Expanding into a new language is not a translation problem. It is a publisher-relationship problem, and the rules change at every border.',
  'body'    => [
    ['h2', 'Translation is the smallest part of the job'],
    ['p',  'A translated pitch sent to a German editor from an English outreach template reads exactly like what it is. Local publishers respond to local context: the events they cover, the competitors they know, the format they expect. That research is the work.'],
    ['h2', 'Publisher landscapes are not interchangeable'],
    ['p',  'Some markets are dominated by a handful of national outlets. Others run on dense networks of niche blogs and forums. Building the same campaign shape in both wastes budget in one of them.'],
    ['ul', ['Map the top thirty publishers per language before pitching anyone', 'Check which ones actually rank for your commercial terms', 'Note who accepts contributed content and who never will', 'Track editor turnover — relationships live with people, not domains']],
    ['h2', 'Anchor text carries different weight per language'],
    ['p',  'Compound-word languages, inflected languages, and languages with heavy loanword use all behave differently in anchor distribution. Applying an English anchor ratio across the board produces patterns that look engineered.'],
    ['h2', 'Local hreflang and local links have to agree'],
    ['p',  'If your German links point at an English page, you have paid for a signal that fights your own hreflang setup. Align the link target with the language version it is meant to support before the campaign starts.'],
    ['h2', 'What good looks like'],
    ['p',  'A market is working when you see referral traffic that converts, not just placements in a report. That is the only metric that survives a currency conversion.'],
  ],
],

'digital-pr-vs-guest-posting' => [
  'title'   => 'Digital PR Links vs Guest Posting: Which Actually Wins?',
  'excerpt' => 'Both build authority. They do it at different speeds, different costs, and for different kinds of pages. Here is how to choose.',
  'tags'    => ['Digital PR', 'Link Building'],
  'date'    => '2026-06-16',
  'read'    => '8 min read',
  'icon'    => 'megaphone',
  'photo'   => 'blog-pr-vs-guest',
  'lead'    => 'The honest answer is that they solve different problems, and most brands need a blend weighted toward whichever gap is currently costing them more.',
  'body'    => [
    ['h2', 'What each one is actually good at'],
    ['p',  'Digital PR earns coverage on publications you cannot buy your way into. It moves brand authority, it produces unlinked mentions that still count as entity signals, and a single strong story can outperform a quarter of steady outreach. It is also unpredictable.'],
    ['p',  'Guest posting is predictable. You know roughly what a placement costs, how long it takes, and what it will look like. It builds relevance steadily on the specific pages you choose. It rarely produces a breakout result.'],
    ['h2', 'Cost per link is the wrong comparison'],
    ['p',  'A PR campaign that lands twelve links from national coverage looks expensive per link until you count the branded search lift, the mentions that were never linked, and the sales conversations that started because someone saw the story.'],
    ['h2', 'When to lean on guest posting'],
    ['ul', ['You need relevance on specific commercial pages', 'Your budget has to produce a knowable output each month', 'You are competing in a niche the mainstream press will never cover', 'You are supporting a market launch and need volume quickly']],
    ['h2', 'When to lean on digital PR'],
    ['ul', ['Your brand is invisible in AI answers and knowledge panels', 'You have data, research, or a story worth covering', 'Competitors dominate the results with authority you cannot match link by link', 'You need trust signals ahead of a funding round or enterprise sales cycle']],
    ['h2', 'The blend we run most often'],
    ['p',  'Roughly seventy per cent steady outreach for relevance and predictability, thirty per cent PR for authority and brand. We shift that ratio as soon as reporting shows one side pulling harder than the other.'],
  ],
],

'ai-visibility-what-changed' => [
  'title'   => 'AI Visibility: What Changed and What to Do About It',
  'excerpt' => 'People now ask ChatGPT and Perplexity before they ever open Google. If your brand is not in those answers, you are invisible earlier than you think.',
  'tags'    => ['AI Visibility', 'SEO'],
  'date'    => '2026-05-28',
  'read'    => '10 min read',
  'icon'    => 'sparkle',
  'photo'   => 'blog-ai-visibility',
  'lead'    => 'The search result is no longer the first impression. The generated answer is — and it is assembled from sources you can influence.',
  'body'    => [
    ['h2', 'The discovery path moved upstream'],
    ['p',  'A buyer used to search, scan ten links, and click three. Now they ask a model, read a synthesised answer, and arrive at your site already holding an opinion formed somewhere else. If your brand was not in that answer, you never had a chance to shape it.'],
    ['h2', 'What answer engines actually pull from'],
    ['ul', ['Pages with clear, extractable structure and direct answers', 'Sources the model already treats as authoritative in your topic', 'Consistent entity information across the web', 'Recent, dated content over stale evergreen pages']],
    ['h2', 'Structure content so it can be quoted'],
    ['p',  'Put the answer in the first two sentences under the heading. Use headings that mirror real questions. Keep definitions self-contained so a paragraph makes sense when it is lifted out of the page. This is the single highest-leverage change most sites can make.'],
    ['h2', 'Entity consistency is the quiet ranking factor'],
    ['p',  'Your company name, description, founders, location, and category should read the same everywhere a machine can find them. Contradictions make a model less confident about citing you, and less confidence means fewer citations.'],
    ['h2', 'Measure it or you are guessing'],
    ['p',  'Track a fixed set of prompts across the major assistants on a schedule. Record whether you appear, in what position, how you are described, and who is cited instead. That baseline is what turns AI visibility from a talking point into a workstream.'],
  ],
],

'technical-seo-audit-checklist' => [
  'title'   => 'The Technical SEO Audit Checklist We Actually Use',
  'excerpt' => 'Not a 200-point list nobody finishes. The twenty checks that account for most of the technical problems we find on real sites.',
  'tags'    => ['SEO', 'Technical SEO'],
  'date'    => '2026-05-12',
  'read'    => '12 min read',
  'icon'    => 'gear',
  'photo'   => 'blog-technical-seo',
  'lead'    => 'A good audit is short, prioritised, and ends with a list someone can actually ship. Everything else is a PDF nobody opens twice.',
  'body'    => [
    ['h2', 'Crawl and index first'],
    ['ul', ['Can Googlebot reach every page that matters, in three clicks or fewer', 'Are there pages indexed that should never have been', 'Do canonicals point where you think they point', 'Is the XML sitemap current and free of redirects and 404s']],
    ['h2', 'Then templates, not pages'],
    ['p',  'On most sites a single template problem affects thousands of URLs. Fixing the template is one ticket; fixing the pages is a project. Always look for the template.'],
    ['h2', 'Core Web Vitals where they matter'],
    ['p',  'Chase field data, not lab scores, and start with the templates that carry your commercial traffic. A perfect score on a page nobody visits is a vanity metric.'],
    ['h2', 'Internal linking as a structural check'],
    ['p',  'Pages with no internal links are invisible regardless of how good they are. Map link depth across the site and treat orphan pages as bugs.'],
    ['h2', 'Structured data that is actually valid'],
    ['p',  'Half-implemented schema is worse than none — it creates errors that suppress rich results. Validate everything, and only mark up what is genuinely on the page.'],
    ['h2', 'Ship in priority order'],
    ['ol', ['Anything blocking indexation', 'Anything breaking a commercial template', 'Anything degrading crawl efficiency at scale', 'Everything else, in impact order']],
  ],
],

'choosing-a-digital-marketing-agency' => [
  'title'   => 'How to Choose a Digital Marketing Agency Without Regret',
  'excerpt' => 'The questions that separate an agency that will move your numbers from one that will send you a nicely formatted report every month.',
  'tags'    => ['Marketing Strategy'],
  'date'    => '2026-04-22',
  'read'    => '7 min read',
  'icon'    => 'users',
  'photo'   => 'blog-choosing-agency',
  'lead'    => 'Most bad agency relationships are decided in the sales call, not in month six. Here is what to ask while you still have leverage.',
  'body'    => [
    ['h2', 'Ask what they would not do'],
    ['p',  'An agency that says yes to everything has no method. The useful answer sounds like: given your budget and market, here is what we would deliberately skip, and why.'],
    ['h2', 'Ask who does the work'],
    ['p',  'Find out whether the people in the pitch are the people on the account, and what is done in-house versus subcontracted. Neither answer is disqualifying, but you should know before you sign.'],
    ['h2', 'Ask how they report on a bad month'],
    ['p',  'Every account has one. The answer tells you whether reporting is a communication tool or a sales tool.'],
    ['h2', 'Ask for the metric behind the metric'],
    ['ul', ['Traffic is not the goal — enquiries and revenue are', 'Rankings without commercial intent are decoration', 'Link counts mean nothing without relevance and traffic', 'Impressions are the easiest number to make look good']],
    ['h2', 'Watch for the three warning signs'],
    ['p',  'Guaranteed rankings, unwillingness to name the sites they will place on, and contracts with long lock-ins and short notice periods. Any one of them is worth a hard conversation before you commit.'],
    ['h2', 'What a good first ninety days looks like'],
    ['p',  'A real audit, a prioritised plan you understand, visible work shipping inside the first month, and honest reporting on what has and has not moved. If that is not happening by day ninety, it will not start on day ninety-one.'],
  ],
],

    ];
}

/** One post by slug, or null. */
function get_post(string $slug): ?array {
    $all = all_posts();
    return $all[$slug] ?? null;
}
