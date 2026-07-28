# Project Context: cbrew's Personal Website

## Overview
This is cbrew's personal website — a comprehensive archive of Pokemon TCG World Championship decks from 2004 to 2025. Phase 1 performance work is complete (see History below); further modernization is planned but not currently prioritized.

## Version Control
This is a git repository hosted on GitHub at [cbrew6/dialga](https://github.com/cbrew6/dialga), currently a single `main` branch with no branching strategy. **This is the live/production directory** — commit meaningful changes, avoid destructive edits, and don't assume uncommitted work is disposable.

## Project Statistics
- **Total Files**: 331 code files (PHP, CSS)
- **Total Size**: ~33MB
- **Year Pages**: 22 files (2004-2025)
- **Deck Files**: 282 total (141 entry points + 141 decklists)
- **Lines of Code**: ~28,200 lines (PHP + CSS combined)

## Technical Stack
- **Backend**: PHP 8.3.6
- **Frontend**: HTML5, minimal JavaScript (currently zero client-side JS)
- **CSS Framework**: Pico.css v2.1.1 (pinned, stable)
- **Fonts**: Google Fonts (Work Sans) with display=swap
- **External Dependencies**:
  - Limitless TCG CDN for card images
  - Pico.css via unpkg CDN
  - Google Fonts CDN

## Directory Structure
```
project root/
├── README.md                        # This file - project documentation
├── index.php                        # Homepage
├── worlds.php                       # Main deck archive page (2004-2025 grid)
├── nav.php                          # Navigation component (uses absolute paths)
├── footer.php                       # Footer component
├── .htaccess                        # Apache config
├── css/
│   └── site.css                     # Main stylesheet (286 lines)
├── img/
│   ├── [year images]                # 04.jpg through 25.png (year thumbnails)
│   ├── [count badges]               # 1.png through 9.png (card count overlays)
│   └── cards/                       # 122 deck thumbnail images
├── templates/
│   └── deck_template.php            # Shared template for all deck pages (45 lines)
└── worlds/
    ├── 2004.php through 2025.php    # 22 year pages (~85-100 lines each)
    └── decks/
        └── [year]/
            ├── [year]rules.php      # Turn 1 rules for that format
            ├── [deck].php           # Deck entry (7 lines - config only)
            └── [deck]_decklist.php  # Full card grid (150-200 lines)
```

## Codebase Architecture

### Template-Based PHP
**Year Pages** (`worlds/2024.php`): full HTML structure, a PHP array of decks for that year, foreach loop rendering the grid. ~85-100 lines each, mostly boilerplate.

**Deck Entry Files** (`worlds/decks/2024/ancientbox.php`): 7 lines setting variables, includes `templates/deck_template.php`. DRY.

**Decklist Files** (`worlds/decks/2024/ab_decklist.php`): pure HTML card grid (150-200 lines), each card a repetitive div, linking to Limitless TCG, using local count-badge images (1-9.png).

**Deck Template** (`templates/deck_template.php`): shared HTML structure, variable-driven (year, deckTitle, deckIcon, deckListInclude) — single source of truth.

### Key Patterns
1. No JavaScript — entirely server-rendered PHP
2. Card images are all external (Limitless TCG CDN)
3. Single 286-line site.css, relies heavily on Pico.css defaults
4. PHP includes for nav/footer/templates
5. No build process — direct PHP execution
6. No framework — plain PHP

## Known Issues / Limitations
- No client-side interactivity
- No search/filter functionality across years or decks
- New decklists pasted from Limitless TCG need manual cleanup before they match site conventions (see checklist below)

## History
Phase 1 (Oct 2025) removed ~530KB of unused JS, fixed cache-busting, added native lazy loading to all card and thumbnail images, pinned Pico.css to v2.1.1, and removed dead CSS references — bringing total size down from ~63MB to ~33MB and roughly halving first-load time. This repo's git history starts from a single initial commit, so pre-Phase-1 detail isn't recoverable from `git log`; treat this paragraph as the record of it.

## Future Modernization (planned, not prioritized)
- **Data-driven architecture**: convert year pages/decklists to a template + JSON data, centralizing deck data and enabling cross-year search. Est. 12-20h.
- **Image optimization**: WebP/AVIF, `<picture>`/`srcset`, optimized count badges. Est. 4-6h.
- **Static site generation** (e.g. HydePHP): pre-generate HTML at build time, since deck data rarely changes.

## CSS Organization (css/site.css)
286 lines. CSS custom properties, mobile-first grid, 3D hover effects on cards, responsive card grid (max 8 columns, 3 on mobile).

```css
:root {
  --color-primary: #0d3b66;
  --color-hover:   #144971;
  --radius:        0.375rem;
  --flow-space:    1.25rem;
}
```

- `.grid-3` - auto-fit columns, 250px min (year/deck cards)
- `.decklist-visual` - card display grid (8 columns max)
- Homepage hero (`.hero`, `.stats`, `.cta`) - used by `index.php`
- Social icons (`.social-link`, `.social-icon`, `.insta-icon`)
- Decklist swap-guide toggles (`details.deck-toggle`, `.swap-header`) - used on a handful of decklists documenting alternate/swapped cards

## External Dependencies & Risks
1. **Pico.css** - `https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css` — Risk: low (pinned version, reputable CDN)
2. **Google Fonts** - `https://fonts.googleapis.com/css2?family=Work+Sans` — Risk: low
3. **Limitless TCG** - `https://limitlesstcg.nyc3.digitaloceanspaces.com/` — Risk: medium (third-party; if this CDN goes down, all card images fail to load sitewide)

Mitigation ideas (future): host critical assets locally, add fallback images, cache/backup the CDN.

## Owner Information
- **Name**: cbrew (Chris Brewer)
- **Twitter/X**: @ChrisABrewer

## Working Notes

### Things worth remembering
- Caching is enabled — don't add cache-busting back
- Lazy loading is active on all images
- `nav.php` uses absolute paths (no longer has the old relative-path bug)
- Deploy process: not documented yet

### Common Tasks
- **Add new deck**: create entry PHP + decklist PHP in the appropriate year folder
- **Add new year**: copy an existing year page, update the year/decks array
- **Update styling**: edit `css/site.css`

### New Decklist Checklist (Limitless TCG exports)
Decklist HTML pasted/exported from Limitless TCG doesn't match this site's conventions yet. Before committing a new `*_decklist.php`, fix these (replace across the whole file):
1. **Remove low-res thumbnails**: card image `src` ends in `_XS.png` — strip `_XS` so it reads `..._R_EN.png` (full resolution, matches other decklists).
2. **Add lazy loading**: add `loading="lazy"` right after `class="card-picture card ptcg"`, e.g. `class="card-picture card ptcg" loading="lazy" src="...">`.
3. **Fix card links**: `<a href="/cards/...">` is root-relative and resolves against this site's own domain (broken). Prefix with `https://limitlesstcg.com/cards/...`.

Count-badge images (`card-count` img, e.g. `4.png`/`3.png` overlays) are intentionally left pointing at the external CDN in current decklists — leave as-is unless told otherwise.
