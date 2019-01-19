<?php

/* modular/intro.html.twig */
class __TwigTemplate_dad1cb4f0455ed2c471f803baeaffb0bbcb51ab6405a6eeaa24995d4b3c6dea3 extends Twig_Template
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
        echo "<section id = \"intro\"class=\"section-intro bg-image text-center hidden-overflow\">
<div class=\"container\">
        <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "crossfit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 5
            echo "            <div class=\"col-sm-3\">
                <div class=\"team-member\">
                    <img src=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["member"], "pic", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\" alt=\"\">
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  
        </div>
    </div>
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
        return array (  42 => 10,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id = \"intro\"class=\"section-intro bg-image text-center hidden-overflow\">
<div class=\"container\">
        <div class=\"row\">
        {% for member in page.header.crossfit %}
            <div class=\"col-sm-3\">
                <div class=\"team-member\">
                    <img src=\"{{ page.media[member.pic].url }}\" class=\"img-responsive\" alt=\"\">
                    </div>
                </div>
            {% endfor %}  
        </div>
    </div>
</div>
</section>
", "modular/intro.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/intro.html.twig");
    }
}
