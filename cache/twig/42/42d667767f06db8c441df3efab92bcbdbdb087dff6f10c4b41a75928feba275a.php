<?php

/* default.html.twig */
class __TwigTemplate_eff368675227d17e7d7b88965d7a50044b8d5572c5f3024f9a28b25f761a1418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "     <div class=\"main-content\">
         <div class=\"container-fluid\">
           ";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 7
            echo "               ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "default.html.twig", 7)->display($context);
            // line 8
            echo "           ";
        }
        // line 9
        echo "\t   ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
     <div class=\"main-content\">
         <div class=\"container-fluid\">
           {% if config.plugins.breadcrumbs.enabled %}
               {% include 'partials/breadcrumbs.html.twig' %}
           {% endif %}
\t   {{ page.content }}
        </div>
    </div>
{% endblock %}
", "default.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/bootstrap4/templates/default.html.twig");
    }
}
