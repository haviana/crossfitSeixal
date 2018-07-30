<?php

/* modular/team.html.twig */
class __TwigTemplate_36a9cc6a8a35eb6df02e1fde0b0a3ffe2ae1283910dfea628c41146f9ae7ebcb extends Twig_Template
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
        echo "<section id=\"team\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "people", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["member"], "pic", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
                    <h4>";
            // line 13
            echo $this->getAttribute($context["member"], "name", array());
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 14
            echo $this->getAttribute($context["member"], "position", array());
            echo "</p>
                    <p class=\"text-muted\">";
            // line 15
            echo $this->getAttribute($context["member"], "description", array());
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
        echo "</p>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  62 => 18,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"team\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for member in page.header.people %}
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"{{ page.media[member.pic].url }}\" class=\"img-responsive img-circle\" alt=\"\">
                    <h4>{{ member.name }}</h4>
                    <p class=\"text-muted\">{{ member.position }}</p>
                    <p class=\"text-muted\">{{ member.description }}</p>
                    </div>
                </div>
            {% endfor %}  
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">{{ page.header.description }}</p>
            </div>
        </div>
    </div>
</section>
", "modular/team.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/modular/team.html.twig");
    }
}
