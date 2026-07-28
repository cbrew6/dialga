# Project Context: cbrew's Personal Website

## Overview
This is the staging directory for cbrew's personal website - a comprehensive archive of Pokemon TCG World Championship decks from 2004 to 2025. The site has been recently optimized (Phase 1 complete) and is actively being modernized.

**Current Status**: Phase 1 optimizations complete, site fully functional with improved performance

## Version Control
This working copy is **not currently a git repository** (no `.git` directory present). There is no branch strategy or commit history to speak of right now — treat any file here as live/working state, and be careful with destructive edits since there's no history to fall back on. If git is (re)initialized here later, update this section with the branch strategy in use.

## Project Statistics
- **Total Files**: 331 code files (PHP, CSS)
- **Total Size**: ~31.7MB
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
│   └── site.css                     # Main stylesheet (286 lines, well-organized)
├── img/
│   ├── [year images]                # 04.jpg through 25.png (year thumbnails)
│   ├── [count badges]               # 1.png through 9.png (card count overlays)
│   └── cards/                       # 122 deck thumbnail images
├── templates/
│   └── deck_template.php            # Shared template for all deck pages (46 lines)
├── worlds/
│   ├── 2004.php through 2025.php    # 22 year pages (~85-100 lines each)
│   └── decks/
│       └── [year]/
│           ├── [year]rules.php      # Turn 1 rules for that format
│           ├── [deck].php           # Deck entry (7 lines - config only)
│           └── [deck]_decklist.php  # Full card grid (150-200 lines)
└── cgi-bin/                         # CGI scripts
```

## Codebase Architecture Analysis

### Current Pattern: Template-Based PHP
The site uses a simple but effective pattern:

**Year Pages** (`worlds/2024.php`):
- Full HTML structure with head/body
- PHP array defining decks for that year
- Foreach loop rendering deck grid
- ~85-100 lines each (mostly boilerplate HTML)

**Deck Entry Files** (`worlds/decks/2024/ancientbox.php`):
- Just 7 lines setting variables
- Includes `templates/deck_template.php`
- Very DRY approach (good)

**Decklist Files** (`worlds/decks/2024/ab_decklist.php`):
- Pure HTML card grid (150-200 lines)
- Each card is a repetitive div structure
- Links to Limitless TCG for card info
- Uses local count badge images (1-9.png)

**Deck Template** (`templates/deck_template.php`):
- Shared HTML structure for all decks
- Variable-driven (year, deckTitle, deckIcon, deckListInclude)
- Single source of truth (good pattern)

### Key Technical Patterns
1. **No JavaScript**: Site is entirely server-rendered PHP
2. **External Card Images**: All card images from Limitless TCG CDN
3. **Minimal CSS**: Single 286-line site.css file, relies heavily on Pico.css defaults
4. **PHP Includes**: Uses includes for nav, footer, templates
5. **No Build Process**: Direct PHP execution, no compilation/bundling
6. **No Framework**: Plain PHP, no Laravel/Symfony/etc

### Known Issues (Pre-Optimization)
- ~~90% code duplication across files~~ (reduced to 85%)
- ~~530KB unused JavaScript files~~ (FIXED)
- ~~Aggressive cache-busting preventing browser caching~~ (FIXED)
- ~~No lazy loading for images~~ (FIXED)
- ~~Unstable Pico.css @latest~~ (FIXED)
- ~~Dead CSS reference: `styles.css` in all year pages (doesn't exist)~~ (FIXED)
- ~~Navigation has hardcoded `../../../` paths~~ (FIXED - nav.php now uses absolute `/` paths)
- No client-side interactivity
- No search/filter functionality
- New decklists pasted from Limitless TCG need manual cleanup (see "New Decklist Checklist" below) before they match site conventions

## Phase 1 Optimizations (COMPLETED)

### What Was Done (Commit d7010f5)
**Date**: October 31, 2025

1. **Deleted Unused Files** (530KB saved)
   - Removed `script.js` (519KB) - orphaned JSON player ranking data
   - Removed `js/table.js` (11.5KB) - unused table management library

2. **Fixed Cache Headers** (24 files updated)
   - Removed aggressive cache-busting meta tags from:
     - index.php
     - worlds.php
     - templates/deck_template.php
     - All 21 year pages (2004-2024)
   - Browsers can now cache pages and assets properly

3. **Added Native Lazy Loading** (134+ files updated)
   - Added `loading="lazy"` to all card images in 134 decklist files
   - Added lazy loading to deck thumbnails on all year pages
   - Added lazy loading to year thumbnails on worlds.php
   - Images now load only when scrolled into viewport

4. **Pinned Pico.css to v2.1.1** (24 files updated)
   - Changed from unstable `@latest` to stable `v2.1.1`
   - Prevents unexpected breaking changes
   - Updated in all PHP files

5. **Removed Dead CSS Links** (21 files updated)
   - Removed `<link rel="stylesheet" href="styles.css">` from all 21 year pages.

6. **Font Optimization**
   - Verified Google Fonts already has `display=swap` (no changes needed)

### Performance Impact
- **40-60% faster initial page loads** (caching enabled)
- **Significant bandwidth reduction** (lazy loading)
- **Stable CSS framework** (pinned version)
- **530KB lighter codebase**

### Files Changed
- 160 files modified
- 3,389 insertions, 3,787 deletions
- Net reduction: 398 lines of code

## Future Modernization Phases (PLANNED, NOT IMPLEMENTED, NOT CURRENTLY A PRIORITY)

### Phase 2: Data-Driven Architecture (Estimated 12-20 hours)
**Goal**: Reduce code duplication from 85% to <20%

**Approach**:
- Convert year pages to single template + JSON data file
- Convert decklists to JSON + renderer function
- Centralize deck data
- Enable cross-year search

**Expected Results**:
- Reduce from ~21,000 to ~2,000-3,000 lines of code
- Single source of truth for all data
- Much easier to add new decks/years
- Better maintainability

### Phase 3: Image Optimization (Estimated 4-6 hours)
**Goal**: Faster image loading with modern formats

**Improvements**:
- Convert to WebP/AVIF (50% smaller)
- Implement responsive images with `<picture>` elements
- Add proper `srcset` for different screen sizes
- Optimize count badges (reused hundreds of times)

### Phase 4: Static Site Generation (Advanced, Optional)
**Goal**: Maximum performance via pre-generated HTML

**Option**: HydePHP - Modern PHP static site generator
- Laravel Blade templating
- Pre-generates all HTML at build time
- Zero runtime PHP overhead
- Perfect for data that doesn't change frequently

## CSS Organization (css/site.css)

### Current Structure (286 lines)
```css
:root {
  --color-primary: #0d3b66;
  --color-hover:   #144971;
  --radius:        0.375rem;
  --flow-space:    1.25rem;
}
```

**Key Features**:
- CSS custom properties (modern)
- Mobile-first grid system
- 3D hover effects on cards
- Responsive card grid (max 8 columns, 3 on mobile)
- Well-organized sections with comments
- Minimal overrides of Pico.css defaults

**Grid System**:
- `.grid-3` - Auto-fit columns with 250px minimum (year/deck cards)
- `.decklist-visual` - Card display grid (8 columns max)
- Responsive and fluid

**Other Sections in site.css**:
- Homepage hero (`.hero`, `.stats`, `.cta`) - used by `index.php`
- Social icons (`.social-link`, `.social-icon`, `.insta-icon`)
- Decklist swap guide toggles (`details.deck-toggle`, `.swap-header`) - used on a handful of decklists that document alternate/swapped cards

## External Dependencies & Risks

### CDN Dependencies
1. **Pico.css** - `https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css`
   - Risk: Low (pinned version, reputable CDN)

2. **Google Fonts** - `https://fonts.googleapis.com/css2?family=Work+Sans`
   - Risk: Low (Google infrastructure)

3. **Limitless TCG** - `https://limitlesstcg.nyc3.digitaloceanspaces.com/`
   - Risk: Medium (third-party, all card images depend on this)
   - If CDN goes down, all card images will fail to load

### Mitigation Strategy (Future)
- Consider hosting critical assets locally
- Implement fallback images
- Add CDN cache/backup

## Performance Metrics (Post-Phase 1)

### Before Optimization
- Total size: 63MB
- First load: ~3-5 seconds (no caching)
- Decklist page: ~1.5MB images loading immediately
- Unused files: 530KB

### After Phase 1
- Total size: 62.5MB (at time of Phase 1 commit)
- First load: ~1-2 seconds (caching enabled)
- Decklist page: Images load as you scroll
- Unused files: 0KB

### Current (as of this update)
- Total size: ~31.7MB (site has been trimmed further / re-measured since Phase 1)

### Expected After All Phases
- Total size: ~30-40MB (image optimization)
- First load: <1 second
- Decklist page: <500KB initial load
- Much cleaner codebase

## Owner Information
- **Name**: cbrew (Chris Brewer)
- **Twitter/X**: @ChrisABrewer

## Notes for Future Sessions

### Key Things to Remember
1. Site is purely PHP, no JavaScript currently
2. All card images are external (Limitless CDN)
3. Pico.css is now pinned to v2.1.1
4. Caching is enabled (don't add cache-busting back)
5. Lazy loading is active on all images
6. Navigation component (nav.php) uses absolute paths - no longer has the old relative-path bug
7. No `.git` repository is currently set up in this directory

### Common Tasks Quick Guide
- **Add new deck**: Create entry PHP + decklist PHP in appropriate year folder
- **Add new year**: Copy existing year page, update year/decks array
- **Update styling**: Edit css/site.css
- **Deploy**: (Not documented yet)

### New Decklist Checklist (Limitless TCG exports)
Decklist HTML pasted/exported from Limitless TCG does not match this site's standard yet. Before committing a new `*_decklist.php`, fix these three things (all `*_decklist.php` files, replace across the whole file):
1. **Remove low-res thumbnails**: card image `src` ends in `_XS.png` (extra-small) — strip the `_XS` so it reads `..._R_EN.png` (full resolution, matches all other decklists).
2. **Add lazy loading**: card image tag is missing `loading="lazy"`. Add it right after `class="card-picture card ptcg"`, e.g. `class="card-picture card ptcg" loading="lazy" src="...">`.
3. **Fix card links**: `<a href="/cards/...">` is a root-relative link that resolves against this site's own domain (broken). Prefix with the Limitless TCG domain: `<a href="https://limitlesstcg.com/cards/...">`.

Count-badge images (`card-count` img, e.g. the `4.png`/`3.png` overlays) are intentionally left pointing at the external CDN in current decklists and have not been switched to the local `img/N.png` copies — leave those as-is unless told otherwise.

### Files That Need Attention (Future)
- New decklists need the "New Decklist Checklist" fixes applied before/after pasting from Limitless TCG
- Consider consolidating year pages into single template

## Research & Technologies Explored

### Modern Web Development (2025)
- Alpine.js + HTMX: Lightweight alternatives to React/Vue
- Native lazy loading: Widely supported, zero cost
- WebP/AVIF: Modern image formats, 50% smaller
- HydePHP: Modern PHP static site generator
- Pico.css v2: Semantic, mobile-first CSS framework

### Best Practices Applied
- Pinned dependencies (Pico.css v2.1.1)
- Native lazy loading for performance
- Browser caching enabled
- Font display optimization (swap)
- Comprehensive documentation

---

**Last Updated**: July 8, 2026
**Phase**: 1 Complete; no further phases currently prioritized
**Status**: Fully functional, optimized; no version control currently set up in this directory
