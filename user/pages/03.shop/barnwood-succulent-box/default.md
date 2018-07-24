---
title: 'Barnwood Succulent Box'
media_order: 'barnwood-succulent-box-01.jpg,barnwood-succulent-box-02.jpg,barnwood-succulent-box-03.jpg,barnwood-succulent-box-04.jpg,barnwood-succulent-box-05.jpg,barnwood-succulent-box-06.jpg'
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
			<h1 class="heading text-center font-weight-bold">Barnwood Succulent Box</h1>
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
			<p class="font-weight-bold">Minimum Price: $35.00</p>
			<p>Delicate, Green and Beautiful. Get one of our hand made barnwood succulent boxes. Each box is handmade with unique recycled barnwood. With so many sizes and varieties of succulents, no two boxes are the same. If your looking for a living and green present with the beauty of a flower, this is for you.</p>
			[plugin:content-inject](/shop/product-details)
			<form id="productForm" name="productForm">
			  <label class="col col-form-label col-form-label-lg">Set Your Price</label>
			    <small class="text-muted col">
			      Minimum Price: $35.00
			    </small>
			  <div class="form-group row pl-4">
			<input type="number" class="col form-control" min="35" max="250" id="numberSize validationCustom01" name="price" value="35" onchange="(!validity.rangeOverflow||(value=250)) && (!validity.rangeUnderflow||(value=35)) &&
			(!validity.stepMismatch||(value=parseInt(this.value))); return validateForm()">
			<button type="button" id="okButton" class="col btn btn-primary rounded snipcart-add-item ml-2" data-item-id="BWSB" data-item-name="Barnwood Succulent Box" data-item-price="35.00" data-item-url="http://18.219.29.57/product/barnwood-succulent-box" data-item-description="Barnwood Succulent Box - Hand made barnwood box with delicate and beautiful succulents">Add To Cart</button>
			  </div>
			</form>
		</div>
	</div>
</div>