<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_727fd0a35a7a35cb985fcf3d9961124c9a0cac38f50232616d6ec412358f1c98 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h5>SimpleSearch</h5>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 12
            echo "    <h5>Related Posts</h5>
    ";
            // line 13
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 13)->display($context);
        }
        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 17
            echo "<div class=\"sidebar-content\">
    <h5>Random Article</h5>
    <a class=\"btn\" href=\"";
            // line 19
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 22
        echo "
<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 29
            echo "<div class=\"sidebar-content\">
    <h5>Popular Tags</h5>
    ";
            // line 31
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 31)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 32
            echo "</div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 36
            echo "<div class=\"sidebar-content\">
    <h5>Archives</h5>
    ";
            // line 38
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 38)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null))));
            // line 39
            echo "</div>
";
        }
        // line 41
        echo "
";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 43
            echo "<div class=\"sidebar-content\">
    <h5>Syndicate</h5>
    <div class=\"btn-group\">
        <a class=\"btn btn-warning\" href=\"";
            // line 46
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-warning\" href=\"";
            // line 47
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  109 => 46,  104 => 43,  102 => 42,  99 => 41,  95 => 39,  93 => 38,  89 => 36,  87 => 35,  84 => 34,  80 => 32,  78 => 31,  74 => 29,  72 => 28,  64 => 22,  58 => 19,  54 => 17,  52 => 16,  49 => 15,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative ~ '/' ~ blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h5>SimpleSearch</h5>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h5>Related Posts</h5>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}

{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
    <h5>Random Article</h5>
    <a class=\"btn\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
{% endif %}

<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h5>Popular Tags</h5>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}

{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h5>Archives</h5>
    {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}

{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content\">
    <h5>Syndicate</h5>
    <div class=\"btn-group\">
        <a class=\"btn btn-warning\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-warning\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
</div>
{% endif %}
", "partials/sidebar.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/bootstrap4/templates/partials/sidebar.html.twig");
    }
}
