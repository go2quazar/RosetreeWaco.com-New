---
title: Weddings
media_order: 'bliss-market-at-the-mill-bouquet.jpg,bouquet.jpg,paulsen-winters-boutonnieres.jpg,paulsen-winters-tablescape.jpg,paige-bouquet.jpg'
process:
    markdown: true
    twig: true
unitegallery:
    gallery_theme: tiles
    assets_in_meta: true
---

<div class="row">
        <div class="col-lg-4">
            <div class="card border-light mb-3">
                <div class="card-body">
                     <h1 class="card-title border border-gray rounded display-4 text-center mb-4 handwritten">
                         Your Wedding
                     </h1>
                     <p class="card-text h5 text-muted">
                        Love - Happiness - Commitment
                     </p>
                        <p class="card-text">Your wedding is such a special day and finding the right people to help you can be hard. At Rosetree, we make it simple and stress free.</p>
		        <ul>
		            <li>Quick and easy consults, in person or via live video chat.</li>
		            <li>Private Pinterest board to Collaborate on the style you want</li>
		            <li>Itemised detailed quotes with options from extravagant to simple.</li>
		            <li>Extras like Arches, Vases, Urns, Columns, Furniture and much more.</li>
		        </ul>
		        <p class="card-text">We are located in Waco, TX but will travel to you for your wedding. Click the button below to schedule a free wedding consult.</p>
		        <button class="btn btn-primary">Schedule Now</button>
                </div>
            </div>
    </div>
        <div class="col-lg-8">
            <div class="gallery-container {{ page.header.class }}">
		           {{ unite_gallery(page.media.images, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '","tiles_col_width":"400"}') }}
            </div>
        </div>
    </div>
</div>
    