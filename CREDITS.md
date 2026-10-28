# Credits

## Third-party code

| Library | Version | Licence | Where |
|---|---|---|---|
| [three.js](https://threejs.org) | r160 | MIT | `assets/js/vendor/three.module.min.js` |

three.js powers the animated constellation behind the homepage hero. It is vendored
locally rather than loaded from a CDN, and it is **only fetched on the homepage** —
`assets/js/hero-bg.js` checks for the hero canvas, WebGL support, reduced-motion and
data-saver preferences *before* dynamically importing it, so the 655KB never downloads
for anyone who cannot or should not see the effect.

---

# Image credits

All photography is from **[Pexels](https://www.pexels.com)** and used under the
[Pexels License](https://www.pexels.com/license/): free for commercial use, no
attribution required. This file is kept as a record of where each file came from,
not because attribution is owed.

Files are stored locally under `assets/img/` rather than hotlinked, so the site has
no external image dependency and keeps working offline.

**No Shutterstock, Getty or other rights-managed images are used anywhere.** Those
require a paid licence per image; dropping them in would either watermark the site or
breach their terms. If you want a specific Shutterstock photo, buy the licence and
drop the file into `assets/img/photos/` using the same filename — nothing else needs
to change.

## Testimonial headshots — `assets/img/people/`

> These are placeholder faces attached to placeholder quotes and invented names.
> Replace them with real clients before launch.

| File | Pexels photo |
|---|---|
| `daniel-whitmore.jpg` | https://www.pexels.com/photo/12311572/ |
| `sophie-bennett.jpg` | https://www.pexels.com/photo/30468665/ |
| `marcus-feld.jpg` | https://www.pexels.com/photo/10816007/ |

## Service pillars — `assets/img/photos/`

Child service pages reuse their pillar's photo.

| File | Used on | Pexels photo |
|---|---|---|
| `link-building.jpg` | /link-building/ + 3 children | https://www.pexels.com/photo/8386437/ |
| `seo-services.jpg` | /seo-services/ + 3 children | https://www.pexels.com/photo/6986455/ |
| `digital-pr.jpg` | /digital-pr/ + 3 children | https://www.pexels.com/photo/6950231/ |
| `ai-visibility.jpg` | /ai-visibility/ + 3 children | https://www.pexels.com/photo/12969403/ |
| `paid-media.jpg` | /paid-media/ + 3 children | https://www.pexels.com/photo/7698796/ |
| `content-marketing.jpg` | /content-marketing/ + 3 children | https://www.pexels.com/photo/7504756/ |

## Blog articles — `assets/img/photos/`

| File | Article | Pexels photo |
|---|---|---|
| `blog-rank-higher.jpg` | How to Rank Higher on Google | https://www.pexels.com/photo/577195/ |
| `blog-multilingual.jpg` | Multilingual Link Building | https://www.pexels.com/photo/8828597/ |
| `blog-pr-vs-guest.jpg` | Digital PR vs Guest Posting | https://www.pexels.com/photo/6950229/ |
| `blog-ai-visibility.jpg` | AI Visibility: What Changed | https://www.pexels.com/photo/8849295/ |
| `blog-technical-seo.jpg` | Technical SEO Audit Checklist | https://www.pexels.com/photo/7439131/ |
| `blog-choosing-agency.jpg` | Choosing a Marketing Agency | https://www.pexels.com/photo/7433869/ |

## Team and office — `assets/img/photos/`

| File | Used on | Pexels photo |
|---|---|---|
| `team-collaboration.jpg` | Home — "Your Brand's Growth Partner" | https://www.pexels.com/photo/8278875/ |
| `team-strategy.jpg` | Home — "In Practice" band | https://www.pexels.com/photo/9034280/ |
| `team-office.jpg` | About — "How We Started" | https://www.pexels.com/photo/7654401/ |

## A note on the founder

Muhammad Waqas is shown with an initial monogram, **not** a stock photo, and that is
deliberate: putting a stranger's face next to a real named person misrepresents who
they are. Drop a real photograph into `assets/img/people/` and swap the
`.person-photo` block in `about-us/index.php` when you have one.

## Replacing an image

Overwrite the file, keeping the same name and roughly the same aspect ratio:

- Headshots — square, 400×400
- Blog thumbnails — 16:10, 800×500
- Pillar and team photos — 3:2, 1200×800
