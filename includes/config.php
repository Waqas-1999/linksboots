<?php
/**
 * Links Boots — global site configuration.
 * Everything brand-specific lives here so it can be changed in one place.
 */

// ---------------------------------------------------------------- brand
define('SITE_NAME',      'Links Boots');
define('SITE_NAME_CAPS', 'LINKS BOOTS');
define('SITE_TAGLINE',   'Dominate Search & Grow Faster');
define('SITE_DESC',      'Links Boots helps brands overcome digital growth challenges with clear direction, trusted guidance, and practical solutions that build stronger presence, credibility, and authority.');

// ------------------------------------------------- contact (PLACEHOLDERS)
// TODO: replace these five values with the real business details.
define('SITE_PHONE',      '+44 20 7946 0123');
define('SITE_PHONE_HREF', '+442079460123');
define('SITE_EMAIL',      'sales@linksboots.com');
define('SITE_ADDRESS',    'Suite 12, 8 Kings Road, Brighton, UK BN1 1NA');
// Booking link. Point this at your Calendly/scheduling URL when you have one;
// until then it lands on the contact form, which works from every page.
define('BOOKING_URL',     url('contact-us') . '#form');

// Proof switch. Leave false until every stat, testimonial and client logo on
// the site is real and verified — while false they render as labelled placeholders.
define('PROOF_VERIFIED', false);

define('SOCIAL_LINKEDIN',  '#');
define('SOCIAL_FACEBOOK',  '#');
define('SOCIAL_INSTAGRAM', '#');
define('SOCIAL_TIKTOK',    '#');
define('SOCIAL_YOUTUBE',   '#');

// --------------------------------------------------------------- routing
/**
 * Base path of the install, e.g. "/link-motion". Detected from the script
 * location so the site works in a subfolder of htdocs or at a domain root.
 */
function base_path(): string {
    static $base = null;
    if ($base !== null) return $base;
    if (getenv('VERCEL')) return $base = '';

    $docRoot = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'] ?? ''));
    $siteDir = str_replace('\\', '/', realpath(__DIR__ . '/..'));

    $base = ($docRoot && $siteDir && strpos($siteDir, $docRoot) === 0)
        ? substr($siteDir, strlen($docRoot))
        : '';

    return $base = rtrim($base, '/');
}

/** Build an absolute-from-root URL for a site path. */
function url(string $path = ''): string {
    $path = trim($path, '/');
    return base_path() . '/' . ($path === '' ? '' : $path . '/');
}

/** Build a URL for a file in /assets. */
function asset(string $path): string {
    return base_path() . '/assets/' . ltrim($path, '/');
}

/** Escaping shorthand. */
function e(?string $s): string {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

/** True when $path is the page currently being viewed. */
function is_current(string $path): bool {
    $here = rtrim(strtok($_SERVER['REQUEST_URI'] ?? '/', '?'), '/');
    $there = rtrim(url($path), '/');
    return $here === $there;
}

/** True when the current URL sits inside $path. */
function in_section(string $path): bool {
    $here  = rtrim(strtok($_SERVER['REQUEST_URI'] ?? '/', '?'), '/');
    $there = rtrim(url($path), '/');
    return $there !== rtrim(base_path(), '/') && strpos($here, $there) === 0;
}

// ------------------------------------------------------------ navigation
/**
 * The mega-menu. Each pillar has a landing page plus three child services —
 * this drives the header, the footer and the services index page.
 */
function nav_services(): array {
    return [
        'seo-services' => [
            'label' => 'SEO',
            'icon'  => 'search',
            'blurb' => 'Increase online visibility through smart strategies that attract qualified organic traffic and support business growth.',
            'children' => [
                ['label' => 'Technical SEO',  'path' => 'seo-services/technical-seo-services'],
                ['label' => 'On-Page SEO',    'path' => 'seo-services/on-page-seo-services'],
                ['label' => 'Local SEO',      'path' => 'seo-services/local-seo-services'],
            ],
        ],
        'digital-pr' => [
            'label' => 'Digital PR',
            'icon'  => 'megaphone',
            'blurb' => 'Create compelling stories that increase brand awareness, build trust, and attract valuable media coverage.',
            'children' => [
                ['label' => 'Digital PR Campaigns',    'path' => 'digital-pr/digital-pr-campaigns'],
                ['label' => 'Brand Unlinked Mention',  'path' => 'digital-pr/brand-unlinked-mention-services'],
                ['label' => 'Press & Media Outreach',  'path' => 'digital-pr/press-media-outreach-services'],
            ],
        ],
        'link-building' => [
            'label' => 'Link Building',
            'icon'  => 'link',
            'blurb' => 'Secure trusted backlinks that strengthen website authority, improve rankings, and drive valuable referral traffic.',
            'children' => [
                ['label' => 'Guest Posting',          'path' => 'link-building/guest-posting-services'],
                ['label' => 'Link Insertion',         'path' => 'link-building/link-insertion-services'],
                ['label' => 'Multilingual Outreach',  'path' => 'link-building/multilingual-outreach-services'],
            ],
        ],
        'ai-visibility' => [
            'label' => 'AI Visibility',
            'icon'  => 'sparkle',
            'blurb' => 'Improve brand visibility across modern search platforms, digital experiences, and emerging discovery channels.',
            'children' => [
                ['label' => 'Generative Engine Optimization', 'path' => 'ai-visibility/generative-engine-optimization-services'],
                ['label' => 'AIO Content Structuring',        'path' => 'ai-visibility/aio-content-structuring'],
                ['label' => 'AI Search Monitoring & Reporting','path' => 'ai-visibility/ai-search-monitoring-reporting'],
            ],
        ],
        'paid-media' => [
            'label' => 'PPC & Paid Media',
            'icon'  => 'target',
            'blurb' => 'Reach high-intent customers through targeted campaigns that generate quality leads and improve marketing returns.',
            'children' => [
                ['label' => 'Google Ads Management', 'path' => 'paid-media/google-ads-management-services'],
                ['label' => 'Meta Ads',              'path' => 'paid-media/meta-ads-services'],
                ['label' => 'Paid Search Audit',     'path' => 'paid-media/paid-search-audit-services'],
            ],
        ],
        'content-marketing' => [
            'label' => 'Content Creation',
            'icon'  => 'pen',
            'blurb' => 'Develop engaging content that attracts audiences, builds trust, and encourages meaningful customer action.',
            'children' => [
                ['label' => 'SEO Content Writing',                'path' => 'content-marketing/seo-content-writing-services'],
                ['label' => 'Content Strategy & Topical Authority','path' => 'content-marketing/content-strategy'],
                ['label' => 'Blog Management',                    'path' => 'content-marketing/blog-management-services'],
            ],
        ],
    ];
}
