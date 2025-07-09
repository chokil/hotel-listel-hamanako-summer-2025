# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **swipe-type landing page** for Hotel Listel Hamanako's Summer 2025 campaign. The page features a vertical swipe interface showcasing the hotel's summer offerings including the new Skypool opening on June 28, 2025.

## Technology Stack

- **PHP** - Server-side includes and template system
- **HTML5/CSS3** - Modern markup and styling with CSS Grid, Flexbox, CSS Variables
- **Vanilla JavaScript** - Client-side interactions with Swiper.js v11
- **No build tools** - Direct file serving through PHP-enabled web server

## Development Commands

### Running the Project
```bash
# This is a PHP project - requires a web server with PHP support
# Option 1: Using PHP's built-in server (development only)
php -S localhost:8000

# Option 2: Place in Apache/Nginx document root with PHP enabled
# The project expects to be in a subdirectory where ../config/include.php exists
```

### Development Workflow
- **No build process** - Changes to PHP/CSS/JS files take effect immediately
- **No package manager** - Dependencies loaded via CDN (Swiper.js, Google Fonts)
- **No linting/testing commands** - Traditional PHP project without modern tooling

## Architecture & Key Files

### Directory Structure
```
/summer/
├── docs/                    # Technical documentation
│   ├── technical-spec.md   # Swipe implementation details
│   ├── content-outline.md  # Content structure (7 sections)
│   ├── swipe-lp-design.md  # Design specifications
│   └── assets-list.md      # Required assets list
├── images/                 # Image assets
└── index*.php             # Various implementations
```

### PHP Template System
The project uses external PHP includes:
- `../config/include.php` - Defines LOCATION_ROOT_DIR and LOCATION constants
- `/templates/common_css.php` - Common styles
- `/templates/common_js.php` - Common scripts
- `/inc/gtm.php` - Google Tag Manager

### Key Technical Features
1. **Swipe Navigation**: Vertical section-based scrolling using Swiper.js
2. **YouTube Integration**: Embedded video with facade pattern for performance
3. **Responsive Design**: Mobile-first with breakpoints at 480px, 768px, 1024px, 1440px
4. **Performance Optimizations**:
   - Lazy loading images
   - WebP format support with fallbacks
   - Critical CSS inlining
   - Intersection Observer for dynamic content loading

### Section Structure
The landing page consists of 7 swipeable sections:
1. Opening - Hero with wave animation
2. Skypool announcement
3. Marine activities showcase
4. Gourmet dining presentation
5. Well-being activities
6. Summer plan details
7. Closing with reservation CTA

### JavaScript State Management
```javascript
// Section navigation is managed through:
sectionState = {
  current: 0,
  total: 7,
  isAnimating: false,
  visited: new Set()
}
```

### Browser Support
- Chrome, Safari, Firefox, Edge (latest 2 versions)
- iOS Safari 14+
- Android Chrome 90+

## Important Implementation Notes

1. **Swipe Implementation**: Uses CSS Scroll Snap with JavaScript enhancement for controlled navigation
2. **Animation Timing**: 800ms transitions with cubic-bezier(0.4, 0, 0.2, 1) easing
3. **Mobile Considerations**: Auto-play videos must be muted, swipe threshold is 50px
4. **Accessibility**: Keyboard navigation supported (Arrow keys, Space, Home, End)
5. **SEO**: Structured data for Hotel schema, Open Graph tags for social sharing

## Common Pitfalls to Avoid

1. The project requires the parent config directory structure - ensure ../config/include.php exists
2. When editing styles, maintain the existing CSS variable system for consistency
3. Swiper.js is loaded from CDN - don't attempt to install via npm
4. The project is part of a larger hotel website - maintain consistent naming conventions