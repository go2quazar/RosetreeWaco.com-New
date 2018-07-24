<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_fb513a712d3fec043c1dcd578c4853f575729b125d0a5b82753a9b80aa49aee1 extends Twig_Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1)) {
            // line 4
            echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 7
                echo "                ";
                $context["active"] = (($this->getAttribute($context["loop"], "last", array())) ? ("active") : (""));
                // line 8
                echo "                <li class=\"breadcrumb-item ";
                echo ($context["active"] ?? null);
                echo "\">";
                // line 9
                if (( !$this->getAttribute($context["loop"], "last", array()) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "link_trailing", array()))) {
                    // line 10
                    echo "<a href=\"";
                    echo $this->getAttribute($context["crumb"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["crumb"], "menu", array());
                    echo "</a>";
                } else {
                    // line 12
                    echo $this->getAttribute($context["crumb"], "menu", array());
                }
                // line 14
                echo "</li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ol>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  66 => 14,  63 => 12,  56 => 10,  54 => 9,  50 => 8,  47 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set crumbs = breadcrumbs.get() %}

{% if crumbs|length > 1 %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            {% for crumb in crumbs %}
                {% set active = loop.last ? 'active' : '' %}
                <li class=\"breadcrumb-item {{ active }}\">
                    {%- if not loop.last or config.plugins.breadcrumbs.link_trailing -%}
                        <a href=\"{{ crumb.url }}\">{{ crumb.menu }}</a>
                    {%- else -%}
                        {{ crumb.menu }}
                    {%- endif -%}
                </li>
            {% endfor %}
        </ol>
    </nav>
{% endif %}
", "partials/breadcrumbs.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/bootstrap4/templates/partials/breadcrumbs.html.twig");
    }
}
