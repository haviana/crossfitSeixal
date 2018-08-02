<?php

/* teste.html.twig */
class __TwigTemplate_eae7c5cc39dd7da933417fe87a21b14cd4539510f5a7101c1843c36245642683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base_aux.html.twig", "teste.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base_aux.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "teste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base_aux.html.twig' %}
{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}

", "teste.html.twig", "/home/hviana/crossfit/user/themes/landio/templates/teste.html.twig");
    }
}
