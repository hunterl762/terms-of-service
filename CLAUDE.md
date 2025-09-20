# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a static website repository for the "MultiBot-2025" Terms of Service, created for Hunters Development. The project consists of HTML pages with minimal JavaScript functionality, designed as a simple single-page application for displaying legal terms and conditions.

## Architecture

The project is organized as a static website with the following structure:

- **Main files**: Located in the `docs/` directory (GitHub Pages ready)
  - `index.html` - Main terms of service page with navigation
  - `tos.html` - Standalone terms of service document
  - HTML template system using the "Read Only" template by HTML5 UP

- **Assets**: All under `docs/assets/`
  - CSS files (main styling, Font Awesome icons)
  - JavaScript files for interactivity and fixes
  - Images and avatars

- **Templates**: Reusable HTML components in `docs/templates/`
  - `contact.html` - Contact information snippet
  - `footer.html` - Copyright footer with dynamic year

## Key Components

### JavaScript Functionality
- `docs/assets/js/fix.js` - Handles anchor link offsets and mobile navbar functionality without jQuery dependency
- `docs/assets/js/404.js` - Canvas-based flickering effect (appears to be for error pages)

### Styling
- Built on HTML5 UP's "Read Only" template
- Responsive design with mobile considerations
- Font Awesome icons integration

### Content Structure
The terms of service cover standard legal sections:
- Age requirements
- Links to other resources
- Intellectual property rights
- Indemnification
- Dispute resolution
- Changes and amendments
- Acceptance of terms
- Contact information

## Development Notes

This is a simple static website project with no build process, package managers, or testing frameworks. The site appears to be designed for GitHub Pages deployment with all files in the `docs/` directory.

The project uses vanilla HTML, CSS, and JavaScript without any modern build tools or frameworks. All dependencies (jQuery, Font Awesome) are included as external resources.

When making changes:
- Test responsive behavior on mobile devices
- Ensure anchor links work correctly with the offset fix
- Maintain the existing HTML5 UP template structure and styling