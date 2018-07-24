<?php

/* partials/base.html.twig */
class __TwigTemplate_57df0b36c96d2181bba7607f2b2adf2cce94ad76cdbc5edb82aa6407822dbfbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 63
        echo "    </head>

    <body class=\"";
        // line 65
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\" onload=\"validateForm();\">
        ";
        // line 66
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 67
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 67)->display($context);
            // line 68
            echo "        ";
        }
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 73
        echo "\t
        ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('bottom', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "
        <title>";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t<link href=\"https://fonts.googleapis.com/css?family=Cuprum:400,700|Kaushan+Script\" rel=\"stylesheet\">
\t<link href=\"https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 99), "method");
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css-compiled/theme.css", 1 => 98), "method");
        // line 19
        echo "        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
\t<script src=\"/user/js/URI.js\"></script>
\t<script id=\"snipcart\"
        data-api-key=\"YjVmODQzMmYtYjQwOS00NGZkLThmZWQtNmRkYzhkMWY4MTIzNjM2Njc1NTk4MDA3NDU3MDQ2\"
        data-cart-custom1-name=\"Special Instruction\"
        data-cart-custom1-type=\"textarea\"
        data-cart-custom2-name=\"Enclosure Card\"
        data-cart-custom2-type=\"textarea\"
        data-cart-custom2-required=\"true\"
        data-cart-custom3-name=\"Recipients Phone  just in case the recipient is not home\"
        data-cart-custom4-name=\"Delivery Date  Orders placed after 12pm will be delivered the next day. We are closed Saturdays and Sundays and will not deliver unless special arrangements are made. Thank You.\"
        data-cart-custom4-required=\"true\"
        data-cart-custom5-name=\"I agree to the Delivery Terms\"
        data-cart-custom5-options=\"true|false\"
        data-cart-custom5-required=\"true\"
        src=\"https://cdn.snipcart.com/scripts/2.0/snipcart.js\"></script>
            ";
        // line 39
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/modernizr-custom.js", 1 => 100), "method");
        // line 41
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 42
        echo "
            ";
        // line 43
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 44
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 45
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 46
            echo "            ";
        }
        // line 47
        echo "\t<script>
function validateForm() {
        var price = URI(document.URL).query(true); // ala PHP
        var pp = document.forms[\"productForm\"][\"price\"];
        var p = document.getElementById(\"okButton\");
        if (document.URL.includes(\"?\")) {
        pp.setAttribute(\"value\", price['value']);
\t}
\tp.setAttribute(\"data-item-price\", document.forms[\"productForm\"][\"price\"].value);
        p.setAttribute(\"data-item-url\", p.getAttribute(\"data-item-url\")+\"?value=\"+ pp.value);
};
</script>
        ";
    }

    // line 65
    public function block_body_classes($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
    }

    // line 70
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 71
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "        ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
        // line 78
        echo "\t    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 78)->display($context);
        // line 79
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 79,  226 => 78,  223 => 77,  218 => 75,  213 => 74,  209 => 72,  206 => 71,  203 => 70,  197 => 65,  181 => 47,  178 => 46,  175 => 45,  172 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  159 => 39,  141 => 23,  138 => 22,  134 => 19,  131 => 18,  129 => 17,  125 => 15,  122 => 14,  114 => 60,  112 => 22,  106 => 20,  104 => 14,  99 => 12,  91 => 11,  88 => 10,  86 => 9,  80 => 5,  77 => 4,  71 => 81,  69 => 77,  66 => 76,  63 => 75,  61 => 74,  58 => 73,  56 => 70,  53 => 69,  50 => 68,  47 => 67,  45 => 66,  41 => 65,  37 => 63,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        {% include 'partials/metadata.html.twig' %}

        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

        {% block stylesheets %}
\t<link href=\"https://fonts.googleapis.com/css?family=Cuprum:400,700|Kaushan+Script\" rel=\"stylesheet\">
\t<link href=\"https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            {% do assets.add('theme://css/font-awesome.min.css',99) %}
            {% do assets.add('theme://css-compiled/theme.css',98) %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
\t<script src=\"/user/js/URI.js\"></script>
\t<script id=\"snipcart\"
        data-api-key=\"YjVmODQzMmYtYjQwOS00NGZkLThmZWQtNmRkYzhkMWY4MTIzNjM2Njc1NTk4MDA3NDU3MDQ2\"
        data-cart-custom1-name=\"Special Instruction\"
        data-cart-custom1-type=\"textarea\"
        data-cart-custom2-name=\"Enclosure Card\"
        data-cart-custom2-type=\"textarea\"
        data-cart-custom2-required=\"true\"
        data-cart-custom3-name=\"Recipients Phone  just in case the recipient is not home\"
        data-cart-custom4-name=\"Delivery Date  Orders placed after 12pm will be delivered the next day. We are closed Saturdays and Sundays and will not deliver unless special arrangements are made. Thank You.\"
        data-cart-custom4-required=\"true\"
        data-cart-custom5-name=\"I agree to the Delivery Terms\"
        data-cart-custom5-options=\"true|false\"
        data-cart-custom5-required=\"true\"
        src=\"https://cdn.snipcart.com/scripts/2.0/snipcart.js\"></script>
            {% do assets.add('jquery', 101) %}
            {% do assets.add('theme://js/modernizr-custom.js', 100) %}
            {% do assets.add('theme://js/site.js', {group:'bottom'}) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
\t<script>
function validateForm() {
        var price = URI(document.URL).query(true); // ala PHP
        var pp = document.forms[\"productForm\"][\"price\"];
        var p = document.getElementById(\"okButton\");
        if (document.URL.includes(\"?\")) {
        pp.setAttribute(\"value\", price['value']);
\t}
\tp.setAttribute(\"data-item-price\", document.forms[\"productForm\"][\"price\"].value);
        p.setAttribute(\"data-item-url\", p.getAttribute(\"data-item-url\")+\"?value=\"+ pp.value);
};
</script>
        {% endblock %}
        {{ assets.js() }}

        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\" onload=\"validateForm();\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}

        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}
\t
        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        {% block bottom %}
\t    {% include 'partials/footer.html.twig' %}
            {{ assets.js('bottom') }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/bootstrap4/templates/partials/base.html.twig");
    }
}
