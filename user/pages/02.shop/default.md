---
title: Shop
media_order: 'barnwood-succulent-box-01.jpg,designers-choice-arrangement-shop-min.jpg,kraft-paper-wrapped-bouquet-03.jpg,premium-vase-arrangement-003-min.jpg'
content:
    items: '@self.children'
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
process:
	markdown: true
    twig: true
---

<div class="container-fluid pt-4 pb-4">
	<div class="row pb-5">
		{% include 'include.html.twig' with {'page': page.find('/shop/designers-choice-arrangement/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/barnwood-succulent-box/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/kraft-paper-wrapped-bouquet/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/premium-vase-arrangement/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/funeral-arrangement/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/live-plant-box/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/premium-dozen-roses/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/premium-dozen-garden-roses/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/funeral-easel-spray/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/two-dozen-premium-roses/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/dozen-roses-wrapped/include')} %}
		{% include 'include.html.twig' with {'page': page.find('/shop/premium-dozen-garden-roses-wrapped/include')} %}
	</div>
</div>