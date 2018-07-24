---
title: 'KRAFT PAPER WRAPPED BOUQUET'
media_order: 'kraft-paper-wrapped-bouquet-01.jpg,kraft-paper-wrapped-bouquet-02.jpg,kraft-paper-wrapped-bouquet-03.jpg'
process:
    markdown: true
    twig: true
unitegallery:
    gallery_theme: tiles
    assets_in_meta: true
---

<div class="container-fluid pb-3">
	<div class="row pb-4">
		<div class="col-12 col-xl-6">
			<h1 class="heading text-center font-weight-bold">Kraft Paper Wrapped Bouquet</h1>
		</div>
		<div class="col-12 col-xl-6"></div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-6 pb-5">
		<div class="gallery-container {{ page.header.class }}">
			{{ unite_gallery(page.media.images, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '", "tiles_type":"justified", "tiles_justified_row_height":"200"}') }}
		</div>
		</div>
		<div class="col-12 col-xl-6">
			<p class="font-weight-bold">Minimum Price: $25.00</p>
			<p>Send a hand tied bouquet wrapped in our signature kraft paper. Choose your price and we will fill your bouquet to make sure your recipient and yourself are very happy. Each bouquet will have the best of what we have available and you can count on our designers to make it beautiful and unique.</p>
			[plugin:content-inject](/shop/product-details)
			<form id="productForm" name="productForm">
			  <label class="col col-form-label col-form-label-lg">Set Your Price</label>
			    <small class="text-muted col">
			      Minimum Price: $25.00
			    </small>
			  <div class="form-group row pl-4">
			<input type="number" class="col form-control" min="25" max="200" id="numberSize validationCustom01" name="price" value="25" onchange="(!validity.rangeOverflow||(value=200)) && (!validity.rangeUnderflow||(value=25)) &&
			(!validity.stepMismatch||(value=parseInt(this.value))); return validateForm()">
			<button type="button" id="okButton" class="col btn btn-primary rounded snipcart-add-item ml-2" data-item-id="2" data-item-name="Designer's Choice Arrangement" data-item-price="25.00" data-item-url="http://18.219.29.57/shop/products/designers-choice-arrangement" data-item-description="Designer's Choice Arrangement - Premium Flowers and Greenery">Add To Cart</button>
			  </div>
			</form>
		</div>
	</div>
</div>