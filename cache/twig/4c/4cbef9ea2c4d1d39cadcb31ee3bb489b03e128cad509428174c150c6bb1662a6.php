<?php

/* modular/gallery.html.twig */
class __TwigTemplate_152c1463e96e70427d1ebe16af3af2afb305a91f04edecc99a7ed715ee3214c5 extends Twig_Template
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
        echo "<section id=\"galeria\" class=\"section-intro bg-faded text-center hidden-overflow\">
<!--<div class=\"container\">-->
";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t<div class=\"modular-row gallery-container ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
\t\t";
        // line 5
        echo $this->env->getExtension('UniteGalleryTwigExtension')->uniteGallery($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        echo "
\t</div>
\t<!--</div>-->
</section>";
    }

    public function getTemplateName()
    {
        return "modular/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"galeria\" class=\"section-intro bg-faded text-center hidden-overflow\">
<!--<div class=\"container\">-->
{{ page.content }}
\t<div class=\"modular-row gallery-container {{ page.header.class }}\">
\t\t{{ unite_gallery(page.media.images) }}
\t</div>
\t<!--</div>-->
</section>", "modular/gallery.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/gallery.html.twig");
    }
}
