---
title: Funerals
process:
    twig: true
---
<div class="container-fluid pt-4 pb-4">
	<div class="row pb-5">
		{% include 'include.html.twig' with {'page': page.find('/shop/funeral-arrangement/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/funeral-easel-spray/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/barnwood-succulent-box/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/live-plant-box/include')} %}
	</div>
</div>