<?php

/* forms/form.html.twig */
class __TwigTemplate_019d3574dc9b6569f1849c4fff192077b527a6bbea354c3096dacde829f895e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->blocks = array(
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"form-group\">
";
    }

    // line 7
    public function block_button_classes($context, array $blocks = array())
    {
        // line 8
        echo "class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "btn btn-primary btn-block")) : ("btn btn-primary btn-block"));
        echo "\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'forms/default/form.html.twig' %}

{% block inner_markup_buttons_start %}
  <div class=\"form-group\">
{% endblock %}

{% block button_classes %}
class=\"{{ button.classes|default('btn btn-primary btn-block') }}\"
{% endblock %}
", "forms/form.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/forms/form.html.twig");
    }
}
