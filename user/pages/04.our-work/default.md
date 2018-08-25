---
title: 'Our Work'
process:
    markdown: true
    twig: true
unitegallery:
    gallery_theme: tiles
    assets_in_meta: true
---

<div class="pb-4 gallery-container {{ page.header.class }}">
   {{ unite_gallery(page.media.images|randomize, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '", "tiles_col_width":"35", "tile_enable_textpanel":true, "tile_textpanel_source":"title"}') }}
</div>