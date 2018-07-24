---
title: 'Premium Vase Arrangement'
media_order: 'premium-vase-arrangement-001-min.jpg,premium-vase-arrangement-002-min.jpg,premium-vase-arrangement-003-min.jpg,premium-vase-arrangement-004-min.jpg'
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
			<h1 class="heading text-center font-weight-bold">Premium Vase Arrangement</h1>
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
			<p class="font-weight-bold">Minimum Price: $60.00</p>
			<p>We have over 30 different vases and continually rotate our stock so you get something unique and beautiful every time. Every arrangement is designed to accent the vase and give you flowers you will never forget.</p>
			[plugin:content-inject](/shop/product-details)
			<form id="productForm" name="productForm">
			  <label class="col col-form-label col-form-label-lg">Set Your Price</label>
			    <small class="text-muted col">
			      Minimum Price: $60.00
			    </small>
			  <div class="form-group row pl-4">
			<input type="number" class="col form-control" min="60" max="500" id="numberSize validationCustom01" name="price" value="60" onchange="(!validity.rangeOverflow||(value=500)) && (!validity.rangeUnderflow||(value=35)) &&
			(!validity.stepMismatch||(value=parseInt(this.value))); return validateForm()">
			<button type="button" id="okButton" class="col btn btn-primary rounded snipcart-add-item ml-2" data-item-id="PVA" data-item-name="Premium Vase Arrangement" data-item-price="60.00" data-item-url="http://18.219.29.57/shop/premium-vase-arrangement" data-item-description="Premium Flowers and Greenery in a beautiful and unique vase.">Add To Cart</button>
			  </div>
			</form>
		</div>
	</div>
</div>