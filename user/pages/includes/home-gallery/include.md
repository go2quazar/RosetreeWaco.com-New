---
unitegallery:
    gallery_theme: tiles
    assets_in_meta: true
process:
    twig: true
---
<div class="gallery-container {{ page.header.class }}">
    {{ unite_gallery(page.media.images, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '", "tiles_type":"justified", "tiles_justified_row_height":"200"}') }}
</div>