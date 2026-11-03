# Mascot Orbit

This site is authored as PHP pages with shared includes. GitHub Pages does not
run PHP, so the build script renders each page to static HTML and rewrites
internal `.php` links to `.html` for GitHub Pages. The PHP files remain the
local source pages; generated HTML is written only to `_site/`. GitHub Pages
serves PHP as plain source rather than executing it.

Every push to `main` builds and deploys the site to GitHub Pages. To build it
locally, run:

```sh
php scripts/build-static.php
```

The generated site is written to `_site/`.
