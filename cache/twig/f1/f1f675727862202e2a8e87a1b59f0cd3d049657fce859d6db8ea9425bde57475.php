<?php

/* modular/intro.html.twig */
class __TwigTemplate_8261a1a7258c08451a3cb2bf3938beb6167ad1b95b0999fc26427e13db637bfb extends Twig_Template
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
        echo "<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array())) {
            // line 4
            echo "            <h3 class=\"wp wp-1\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "</h3>
        ";
        }
        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
            // line 7
            echo "            <p class=\"lead wp wp-2\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
            echo "</p>
        ";
        }
        // line 9
        echo "        ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        {% if page.header.title  %}
            <h3 class=\"wp wp-1\">{{ page.header.title }}</h3>
        {% endif %}
        {% if page.header.description  %}
            <p class=\"lead wp wp-2\">{{ page.header.description }}</p>
        {% endif %}
        {{ page.content }}
    </div>
</section>
", "modular/intro.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/intro.html.twig");
    }
}
