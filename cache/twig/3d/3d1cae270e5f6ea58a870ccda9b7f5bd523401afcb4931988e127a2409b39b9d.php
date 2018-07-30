<?php

/* partials/form-messages.html.twig */
class __TwigTemplate_04bfe868c0ed2c5f7145c5153838683319ee859659703effa3b5b86579b3ccf4 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            // line 2
            echo "    ";
            $context["inline_errors"] = (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
            // line 3
            echo "    ";
            $context["status_mapping"] = array("success" => "green", "error" => "red", "warning" => "yellow");
            // line 4
            echo "    ";
            $context["message"] = ((((isset($context["inline_errors"]) ? $context["inline_errors"] : null) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())));
            // line 5
            echo "    <div class=\"notices ";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array());
            echo " ";
            echo (($this->getAttribute((isset($context["status_mapping"]) ? $context["status_mapping"] : null), $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), array(), "array")) ? ($this->getAttribute((isset($context["status_mapping"]) ? $context["status_mapping"] : null), $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), array(), "array")) : ("green"));
            echo "\"><p>";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</p></div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
    {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
    {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
    {% set message = inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
    <div class=\"notices {{ form.status }} {{ status_mapping[form.status] ?: 'green' }}\"><p>{{ message|raw }}</p></div>
{% endif %}", "partials/form-messages.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/plugins/form/templates/partials/form-messages.html.twig");
    }
}
