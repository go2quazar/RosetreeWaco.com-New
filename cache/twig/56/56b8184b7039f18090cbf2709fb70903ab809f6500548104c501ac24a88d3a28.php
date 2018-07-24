<?php

/* partials/navigation.html.twig */
class __TwigTemplate_8cf1e3d02f09e56a1b519c959994afb3302044f21f20a51d46a778b1e847fd67 extends Twig_Template
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
        $context["navbar_style"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("navbar_style");
        // line 2
        $context["navbar_bgcolor"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("navbar_bgcolor");
        // line 3
        echo "<nav class=\"navbar sticky-top navbar-expand-md ";
        echo ($context["navbar_style"] ?? null);
        echo "\" style=\"background-color:";
        echo ($context["navbar_bgcolor"] ?? null);
        echo ";\" role=\"navigation\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["media"] ?? null), "theme://images/rosetree.png", array(), "array"), "resize", array(0 => 150, 1 => 75), "method");
        echo "</a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"d-none d-xl-inline\">
            <span class=\"align-middle font-italic\">Waco's Premier Florist<br />Weddings, Events and Flower Arrangements<br />254-754-5995</span>
        </div>
        <div class=\"navbar-collapse collapse justify-content-end pr-5\">
            <ul class=\"navbar-nav\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 16
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "bootstrap4", array()), "dropdown", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0))) {
                // line 17
                echo "                        <li class=\"nav-item dropdown ";
                echo ($context["current_page"] ?? null);
                echo "\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 18
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
                            <div class=\"dropdown-menu\">
                                ";
                // line 20
                $context["current_parent"] = (($this->getAttribute($context["page"], "active", array())) ? ("active") : (""));
                // line 21
                echo "                                <a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"dropdown-item ";
                echo ($context["current_parent"] ?? null);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    echo "                                    ";
                    $context["current_child"] = ((($this->getAttribute($context["child"], "active", array()) || $this->getAttribute($context["child"], "activeChild", array()))) ? ("active") : (""));
                    // line 25
                    echo "                                    <a href=\"";
                    echo $this->getAttribute($context["child"], "url", array());
                    echo "\" class=\"dropdown-item ";
                    echo ($context["current_child"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["child"], "menu", array());
                    echo "</a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </div>
                        </li>
                    ";
            } else {
                // line 30
                echo "                        <li class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\"><a class=\"nav-link\" href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "                    <li class=\"nav-item\">
                        ";
            // line 35
            $context["icon"] = (($this->getAttribute($context["mitem"], "icon", array())) ? ((("<i class=\"fa fa-fw fa-" . $this->getAttribute($context["mitem"], "icon", array())) . "\"></i> ")) : (""));
            // line 36
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">";
            echo ($context["icon"] ?? null);
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 41
            echo "                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 41)->display($context);
            echo "</span></li>
                ";
        }
        // line 43
        echo "            </ul>
        </div>
    </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  146 => 41,  144 => 40,  141 => 39,  128 => 36,  126 => 35,  123 => 34,  118 => 33,  112 => 32,  102 => 30,  97 => 27,  84 => 25,  81 => 24,  77 => 23,  67 => 21,  65 => 20,  60 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 14,  31 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set navbar_style = theme_var('navbar_style') %}
{% set navbar_bgcolor = theme_var('navbar_bgcolor') %}
<nav class=\"navbar sticky-top navbar-expand-md {{ navbar_style }}\" style=\"background-color:{{ navbar_bgcolor }};\" role=\"navigation\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ media['theme://images/rosetree.png'].resize(150, 75) }}</a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"d-none d-xl-inline\">
            <span class=\"align-middle font-italic\">Waco's Premier Florist<br />Weddings, Events and Flower Arrangements<br />254-754-5995</span>
        </div>
        <div class=\"navbar-collapse collapse justify-content-end pr-5\">
            <ul class=\"navbar-nav\">
                {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    {% if config.themes.bootstrap4.dropdown.enabled and page.children.visible.count > 0 %}
                        <li class=\"nav-item dropdown {{ current_page }}\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ page.menu }}</a>
                            <div class=\"dropdown-menu\">
                                {% set current_parent = page.active ? 'active' : '' %}
                                <a href=\"{{ page.url }}\" class=\"dropdown-item {{ current_parent }}\">{{ page.menu }}</a>
                                <div class=\"dropdown-divider\"></div>
                                {% for child in page.children.visible %}
                                    {% set current_child = (child.active or child.activeChild) ? 'active' : '' %}
                                    <a href=\"{{ child.url }}\" class=\"dropdown-item {{ current_child }}\">{{ child.menu }}</a>
                                {% endfor %}
                            </div>
                        </li>
                    {% else %}
                        <li class=\"nav-item {{ current_page }}\"><a class=\"nav-link\" href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                    <li class=\"nav-item\">
                        {% set icon = mitem.icon ? '<i class=\"fa fa-fw fa-' ~ mitem.icon ~ '\"></i> ' : '' %}
                        <a class=\"nav-link\" href=\"{{ mitem.url }}\">{{ icon }}{{ mitem.text }}</a>
                    </li>
                {% endfor %}

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</span></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

", "partials/navigation.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/bootstrap4/templates/partials/navigation.html.twig");
    }
}
