<?php

/* modular/news.html.twig */
class __TwigTemplate_88a51660982ec03432d9426fd12ada45c667bf2388ee26461d3acd61d09ca131 extends Twig_Template
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
        echo "
  
    <h3 class=\"sr-only\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h3>
    <div class=\"map-frame\">
    
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.9607565553233!2d-9.085280285124812!3d38.60377347180399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19499766967343%3A0xc93765ee66ce252a!2sCrossFit+Seixal!5e0!3m2!1sen!2spt!4v1547318451927\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
      
    </div>";
    }

    public function getTemplateName()
    {
        return "modular/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  
    <h3 class=\"sr-only\">{{ page.header.title }}</h3>
    <div class=\"map-frame\">
    
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.9607565553233!2d-9.085280285124812!3d38.60377347180399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19499766967343%3A0xc93765ee66ce252a!2sCrossFit+Seixal!5e0!3m2!1sen!2spt!4v1547318451927\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
      
    </div>", "modular/news.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/news.html.twig");
    }
}
