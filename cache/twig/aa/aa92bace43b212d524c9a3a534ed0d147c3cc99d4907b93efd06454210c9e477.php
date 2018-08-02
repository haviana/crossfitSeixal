<?php

/* partials/teste.html.twig */
class __TwigTemplate_55e8b60d72bc9b14d5084de84b4deed27dee2e11880f99c067b35e826e14e1a2 extends Twig_Template
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
        echo "<section class=\"section-text\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
                ";
        // line 5
        echo ($context["content"] ?? null);
        echo "

                <p>
                ";
        // line 8
        $this->loadTemplate("partials/messages.html.twig", "partials/teste.html.twig", 8)->display($context);
        // line 9
        echo "                </p>

            </div>
        </div>
    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/teste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-text\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
                {{ content }}

                <p>
                {% include 'partials/messages.html.twig' %}
                </p>

            </div>
        </div>
    </div>
</div>
</section>
", "partials/teste.html.twig", "/home/hviana/crossfit/user/themes/landio/templates/partials/teste.html.twig");
    }
}
