<?php

/* partials/vimeo.html.twig */
class __TwigTemplate_74cd800f9307da58a0fee0a14de5a78f8d9de4cf5923653450e006ef185341f9 extends Twig_Template
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
        echo $this->env->getExtension('Grav\Plugin\Vimeo\Twig\VimeoTwigExtension')->embedVideo(($context["video_id"] ?? null), ($context["player_parameters"] ?? null));
    }

    public function getTemplateName()
    {
        return "partials/vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{- vimeo_embed_video(video_id, player_parameters) -}}
", "partials/vimeo.html.twig", "/srv/users/serverpilot/apps/gravblogrosetree/public/user/plugins/vimeo/templates/partials/vimeo.html.twig");
    }
}
