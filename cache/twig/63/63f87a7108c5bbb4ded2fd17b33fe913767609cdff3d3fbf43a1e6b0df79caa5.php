<?php

/* modular/form.html.twig */
class __TwigTemplate_5022cc7ebbf43e74f544d363444a5a3ea2c399fc131da35ecfbde052d712a199 extends Twig_Template
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
        echo "<section class=\"section-signup bg-faded\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
    \t
        \t";
        // line 8
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-signup bg-faded\">
  <div class=\"container\">
    {{ page.content }}

    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
    \t
        \t{% include \"forms/form.html.twig\" %}
        </div>
    </div>
  </div>
</section>
", "modular/form.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/form.html.twig");
    }
}
