<?php

/* @Page:/srv/users/serverpilot/apps/gravblogrosetree/public/user/pages/03.shop/designers-choice-arrangement */
class __TwigTemplate_8d3558b5fd5a8fd21c180298abd926d11dbc887b8f664c131f80e0a26bccbeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container-fluid pb-3\">
    <div class=\"row pb-4\">
        <div class=\"col-12 col-xl-6\">
            <h1 class=\"heading text-center font-weight-bold\">Designers Choice Arrangement</h1>
        </div>
        <div class=\"col-12 col-xl-6\"></div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-xl-6 pb-5\">
        <div class=\"gallery-container ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
            ";
        // line 11
        echo $this->env->getExtension('UniteGalleryTwigExtension')->uniteGallery($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), (("{\"gallery_theme\":\"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "unitegallery", array()), "gallery_theme", array())) . "\", \"tiles_type\":\"justified\", \"tiles_justified_row_height\":\"200\"}"));
        echo "
        </div>
        </div>
        <div class=\"col-12 col-xl-6\">
            <p class=\"font-weight-bold\">Minimum Price: \$35.00</p>
            <p>Let our designers get creative and make something amazing for you. All our designer choice arrangements are made to give you a beautiful Rosetree experience with premium flowers and pretty greenery.</p>
            <h5>Set Your Price</h5>
            <p>What does that mean? That means you can set your own price. Want a small arrangement yet still beautiful, set it for the minimum. Thinking you would like to make it a little bigger, little fuller, little prettier, add a few more dollars. Wants something really big and extravagant, set your price higher. You set the price to match the occasion and your needs, we will make it look the best your price can be.</p>
            <h5>Delivery or Pickup</h5>
            <p>On this product we only offer local delivery or local pickup. We deliver to Waco and its surrounding areas. Here is a list of zip codes we deliver to: 76708, 76707, 76701, 76710, 76711, 76712, 76706, 76643, 76705, 76704, 76640, 76633, 76655, 76657. Local pickups will be available inside Spice Village at 213 Mary Ave Waco, TX 76701 between the hours of 10am and 6pm Monday thru Friday. Go to the front desk of Spice Village and give them the name that you place the order under. Here are our Delivery Terms.</p>
            <p>* Pictures are not of the actual flower arrangement you will get but are recent examples of what we send out. Your arrangement will be designed the day you order is to be delivered with fresh flowers and greenery. We can’t customize online for specific flower or colors but we can guarantee that your flower arrangement will be just as pretty as the ones in the pictures.</p>

            <form id=\"productForm\" name=\"productForm\">
              <label class=\"col col-form-label col-form-label-lg\">Set Your Price</label>
                <small class=\"text-muted col\">
                  Minimum Price: \$35.00
                </small>
              <div class=\"form-group row pl-4\">
            <input type=\"number\" class=\"col form-control\" min=\"35\" max=\"500\" id=\"price numberSize validationCustom01\" name=\"price\" value=\"35\" onchange=\"(!validity.rangeOverflow||(value=500)) && (!validity.rangeUnderflow||(value=35)) &&
            (!validity.stepMismatch||(value=parseInt(this.value))); return validateForm()\">
            <button type=\"button\" id=\"okButton\" class=\"col btn btn-primary rounded snipcart-add-item ml-2\" data-item-id=\"2\" data-item-name=\"Designer's Choice Arrangement\" data-item-price=\"35.00\" data-item-url=\"http://18.219.29.57/shop/products/designers-choice-arrangement\" data-item-description=\"Designer's Choice Arrangement - Premium Flowers and Greenery\">Add To Cart</button>
              </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/users/serverpilot/apps/gravblogrosetree/public/user/pages/03.shop/designers-choice-arrangement";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid pb-3\">
    <div class=\"row pb-4\">
        <div class=\"col-12 col-xl-6\">
            <h1 class=\"heading text-center font-weight-bold\">Designers Choice Arrangement</h1>
        </div>
        <div class=\"col-12 col-xl-6\"></div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-xl-6 pb-5\">
        <div class=\"gallery-container {{ page.header.class }}\">
            {{ unite_gallery(page.media.images, '{\"gallery_theme\":\"' ~ page.header.unitegallery.gallery_theme ~ '\", \"tiles_type\":\"justified\", \"tiles_justified_row_height\":\"200\"}') }}
        </div>
        </div>
        <div class=\"col-12 col-xl-6\">
            <p class=\"font-weight-bold\">Minimum Price: \$35.00</p>
            <p>Let our designers get creative and make something amazing for you. All our designer choice arrangements are made to give you a beautiful Rosetree experience with premium flowers and pretty greenery.</p>
            <h5>Set Your Price</h5>
            <p>What does that mean? That means you can set your own price. Want a small arrangement yet still beautiful, set it for the minimum. Thinking you would like to make it a little bigger, little fuller, little prettier, add a few more dollars. Wants something really big and extravagant, set your price higher. You set the price to match the occasion and your needs, we will make it look the best your price can be.</p>
            <h5>Delivery or Pickup</h5>
            <p>On this product we only offer local delivery or local pickup. We deliver to Waco and its surrounding areas. Here is a list of zip codes we deliver to: 76708, 76707, 76701, 76710, 76711, 76712, 76706, 76643, 76705, 76704, 76640, 76633, 76655, 76657. Local pickups will be available inside Spice Village at 213 Mary Ave Waco, TX 76701 between the hours of 10am and 6pm Monday thru Friday. Go to the front desk of Spice Village and give them the name that you place the order under. Here are our Delivery Terms.</p>
            <p>* Pictures are not of the actual flower arrangement you will get but are recent examples of what we send out. Your arrangement will be designed the day you order is to be delivered with fresh flowers and greenery. We can’t customize online for specific flower or colors but we can guarantee that your flower arrangement will be just as pretty as the ones in the pictures.</p>

            <form id=\"productForm\" name=\"productForm\">
              <label class=\"col col-form-label col-form-label-lg\">Set Your Price</label>
                <small class=\"text-muted col\">
                  Minimum Price: \$35.00
                </small>
              <div class=\"form-group row pl-4\">
            <input type=\"number\" class=\"col form-control\" min=\"35\" max=\"500\" id=\"price numberSize validationCustom01\" name=\"price\" value=\"35\" onchange=\"(!validity.rangeOverflow||(value=500)) && (!validity.rangeUnderflow||(value=35)) &&
            (!validity.stepMismatch||(value=parseInt(this.value))); return validateForm()\">
            <button type=\"button\" id=\"okButton\" class=\"col btn btn-primary rounded snipcart-add-item ml-2\" data-item-id=\"2\" data-item-name=\"Designer's Choice Arrangement\" data-item-price=\"35.00\" data-item-url=\"http://18.219.29.57/shop/products/designers-choice-arrangement\" data-item-description=\"Designer's Choice Arrangement - Premium Flowers and Greenery\">Add To Cart</button>
              </div>
            </form>
        </div>
    </div>
</div>", "@Page:/srv/users/serverpilot/apps/gravblogrosetree/public/user/pages/03.shop/designers-choice-arrangement", "");
    }
}
