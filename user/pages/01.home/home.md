---
title: Home
menu: Home
process:
    markdown: true
    twig: true
visible: true
unitegallery:
    gallery_theme: slider
---

<div class="columns">
    <div class="column">
		<div class="card">
		  <header class="card-header">
		    <h1 class="card-header-title title is-3">
		      Love - Happiness - Commitment
		    </h1>
		  </header>
		  <div class="card-content">
		    <div class="content">
				<p>Your wedding is such a special day and finding the right people to help you can be hard. At Rosetree, we make it simple and stress free.</p>
		        <ul>
		            <li>Quick and easy consults, in person or via live video chat.</li>
		            <li>Private Pinterest board to Collaborate on the style you want</li>
		            <li>Itemised detailed quotes with options from extravagant to simple.</li>
		            <li>Extras like Arches, Vases, Urns, Columns, Furniture and much more.</li>
		        </ul>
		        <p>We are located in Waco, TX but will travel to you for your wedding. Click the button below to schedule a free wedding consult.</p>
		        <button class="button is-primary">Schedule Now</button>
		    </div>
		  </div>
		</div>
    </div>
    <div class="column">
		<div class="gallery-container {{ page.header.class }}">
			{{ unite_gallery(page.media.images, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '","gallery_width":"100%","slider_control_zoom":"true", "gallery_height":"500"}') }}
		</div>
	</div>
</div>
<div class="columns is-variable is-1">
	<div class="column">
		<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="bouquet.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Bouquets</p>
		    </div>
		  </div>
		</div>
	</div>
    <div class="column">
		<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="paulsen-winters-boutonnieres.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Boutonnieres</p>
		    </div>
		  </div>
		</div>
    </div>
    <div class="column">
    	<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="bouquet.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Corsages</p>
		    </div>
		  </div>
		</div>
    </div>
    <div class="column">
    	<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="bouquet.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Centerpieces</p>
		    </div>
		  </div>
		</div>
    </div>
    <div class="column">
    	<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="paulsen-winters-tablescape.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Tablescapes</p>
		    </div>
		  </div>
		</div>
    </div>
    <div class="column">
    	<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="bouquet.jpg">
		    </figure>
		  </div>
		  <div class="card-content">
		    <div class="content has-text-centered">
		      <p class="title is-4">Arches</p>
		    </div>
		  </div>
		</div>
    </div>
</div>