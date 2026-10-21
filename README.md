# Links Boots

A 39-page PHP site for the Links Boots digital marketing agency, built to mirror the
Ranklizer site structure and content with Links Boots branding.

## Running it

The site lives in `htdocs`, so with XAMPP's Apache running it is served at:

```
http://localhost/link-motion/
```

`base_path()` in `includes/config.php` detects the install folder from
`DOCUMENT_ROOT`, so the same code works unchanged if you later move the site to a
domain root — no find-and-replace on URLs.

To preview without Apache, PHP's built-in server also works:

```bash
C:/xampp/php/php.exe -S localhost:8391 -t C:/xampp/htdocs/link-motion
```

## Before it goes live

Everything below is a placeholder. All of it lives in one file,
`includes/config.php`:

| Constant | Currently | Replace with |
|---|---|---|
| `SITE_PHONE` / `SITE_PHONE_HREF` | `+44 20 7946 0123` | real number (the `_HREF` is digits only) |
| `SITE_EMAIL` | `info@linksboots.com` | real inbox |
| `SITE_ADDRESS` | Brighton placeholder | real address |
| `BOOKING_URL` | the contact form | your Calendly / scheduling link |
| `SOCIAL_*` (5) | `#` | real profile URLs |

Two more things to swap before launch:

- **Testimonial headshots** — the three faces are stock photos attached to invented
  names and quotes. See `CREDITS.md`; replace with real clients.

- **Client logos** — the homepage and About page list Clarins, Adobe, Surfshark and
  others carried over from the reference site. Replace them with real Links Boots
  clients or remove the strip; naming clients you do not have is a legal risk.
- **Testimonials** — the three quotes in `testimonials()` in
  `includes/components.php` are placeholders with invented names.
- **Statistics** — the counters (450+ links/month, 120+ partners, 92% retention and
  so on) are illustrative. Put your real numbers in before publishing.
- **Legal pages** — `privacy-policy/` and `terms-conditions/` are general templates
  and say so on the page. Have a solicitor review them.
- **`robots.txt` and `sitemap.php`** — both reference `linksboots.com`; update to the
  real domain.

## How it is put together

```
includes/          config, header, footer, shared components, contact form
  config.php       brand, contact details, routing helpers, the nav tree
  components.php   icon set, section renderers (hero, cards, FAQ, stats, process)
templates/         service.php and post.php — render pages from data
data/              all page content, separate from markup
  services-content.php      6 pillar service pages
  services-children*.php    18 child service pages
  posts.php                 6 blog articles
assets/css/style.css        the whole design system, one file
assets/js/main.js           nav, scroll reveals, counters, FAQ accordions
assets/js/hero-slider.js    homepage hero carousel (no dependencies)
assets/js/hero-bg.js        three.js constellation behind the hero
assets/js/vendor/           three.js r160 (MIT), vendored locally
assets/img/                 logo mark, full lockup, favicon (all SVG)
assets/img/photos/          section, pillar and blog photography (Pexels)
assets/img/people/          testimonial headshots (Pexels)
```

Photography is stored locally rather than hotlinked, so there is no external image
dependency and the site works offline. Sources and replacement sizes are documented in
`CREDITS.md`. Every image carries `width`/`height` attributes and `loading="lazy"`
below the fold, so pages do not shift as photos arrive.

Content is deliberately kept out of the page files. Each of the 24 service pages is a
three-line file that names its slug and includes `templates/service.php`; the actual
copy lives in `data/`. Editing a service means editing one array, and adding a new one
means adding an array plus a three-line stub — the header, footer, mega menu, services
index and sitemap all pick it up automatically from `nav_services()`.

## The logo

Rebuilt as SVG from the artwork you supplied, so it stays sharp at any size:

- `assets/img/logo-mark.svg` — the LM monogram
- `assets/img/logo.svg` — monogram plus wordmark
- `assets/img/favicon.svg` — square version for the browser tab

The header and footer render the mark inline (via `brand_lockup()`) with the
"LINKS**BOOTS**" wordmark as live text, so it stays crisp and selectable.

Brand colours, taken from the logo, are the top of `assets/css/style.css`:
`--cyan: #22D3EE`, `--blue: #3B82F6`, on `--ink: #0B1220`.

## The contact form

Submissions from any page post to `/contact-us/`, which validates them and appends a
JSON line to `data/enquiries.log`. The form deliberately reports success only when the
write actually succeeded — a form that says "we received your information" while
storing nothing is worse than one that errors.

A hidden honeypot field catches bots; their submissions are accepted silently and not
stored. `data/`, `includes/` and `templates/` are blocked from the web by `.htaccess`,
so the enquiry log is not publicly readable.

**There is no email sending.** Enquiries only land in the log file. To get them by
email, add a `mail()` or SMTP call next to the `file_put_contents` in
`contact-us/index.php` — XAMPP needs an SMTP server configured in `php.ini` first.

## The homepage hero

Three slides (full-service, link building, AI visibility) over an animated three.js
constellation — drifting nodes with lines drawn between near neighbours, which is the
"earned links between real sites" idea the brand is built on rather than decoration.

Editing the slides: they are a plain `$hero_slides` array at the top of `index.php`.
Add or remove entries and the dots, labels and wrap-around all follow automatically.

The carousel and the 3D background are **separate scripts on purpose** — a failure in
one cannot take out the other, and the slider has no dependencies at all.

What the hero does under pressure:

| Condition | Behaviour |
|---|---|
| JavaScript off | Slide 1 renders, controls hidden, no 3D |
| No WebGL | Gradient hero, slider unaffected |
| `prefers-reduced-motion` | No autoplay, no slide transition, three.js never loads |
| Data saver / 2G | three.js never loads |
| Tab backgrounded | Autoplay and rendering both stop |
| Hero scrolled offscreen | Autoplay and rendering both stop |
| GPU context lost | Fades out cleanly, restores if the browser recovers it |

Accessibility follows the ARIA carousel pattern: labelled slides, a live region that
switches to `polite` when rotation stops, a real pause control (WCAG 2.2.2), arrow-key
support, and off-screen slides made `inert` so keyboard users never tab into hidden
content. Dots keep a 24px hit area (WCAG 2.5.8) while staying visually small.

## Notes on decisions

- **No JavaScript dependency for content.** Scroll reveals are scoped behind a `.js`
  class added in `<head>`, so with JS disabled or broken every page renders fully
  rather than staying invisible.
- **The mobile drawer is `display:none` when closed**, not parked off-screen with a
  transform. A fixed element sitting outside the viewport still widens the document
  and keeps its links in the tab order.
- **The header drops its `backdrop-filter` below 960px.** `backdrop-filter` makes an
  element the containing block for `position:fixed` descendants, which sized the
  mobile drawer against the header instead of the screen.
- **The mega menu anchors to `.nav`, not to the Services item.** Centring a 940px
  panel on the trigger pushed it ~92px off the left edge, so `.has-mega` is
  `position:static` and the panel centres on the container instead.
- **No inline `grid-template-columns` anywhere.** An inline style beats a media query,
  so a hard-coded two-column grid stayed two-column on a 320px phone and overflowed.
  Column counts are classes (e.g. `.pillgrid-2`) that the mobile rules can override.
