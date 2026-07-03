# 01 - Architecture

## Site architecture
Use a modular WordPress theme structure with clearly separated concerns:
- templates for page layout
- template-parts for reusable sections
- inc for PHP logic and setup
- assets for CSS, JS and images
- patterns for Gutenberg-ready layouts
- languages for translations

## Page structure
The homepage must be built from reusable sections in this order:
1. Hero
2. Customer Problems
3. Solutions
4. Technology Partners
5. Featured Projects
6. Industries
7. Why RETEGO
8. FAQ
9. Contact CTA

## Technical rules
- Keep HTML semantic and accessible.
- Use Gutenberg-compatible blocks and patterns where possible.
- Avoid hardcoded presentation styles in templates.
- Separate content structure from styling and behaviour.
- Ensure all major sections can be reused on other pages.

## Content module rules
Each section should be implemented as a standalone template part with:
- a clear heading
- one or two supporting paragraphs
- a list or cards where useful
- a CTA when appropriate

## Performance expectations
- Use lightweight assets.
- Prefer optimized images and clean markup.
- Keep the homepage fast and easy for crawlers to interpret.
