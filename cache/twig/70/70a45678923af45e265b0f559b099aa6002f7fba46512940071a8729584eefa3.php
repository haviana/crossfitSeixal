<?php

/* partials/navigation_aux.html.twig */
class __TwigTemplate_59b3037044f9d7232fadc463b159c47004322667ba0efea9574ea55601c9d45f extends Twig_Template
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
        echo "<nav class=\"navbar ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array());
        } else {
            echo "navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top";
        }
        echo "\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        if ( !$this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array())) {
            echo ($context["base_url_absolute"] ?? null);
        } else {
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array());
        }
        echo "\">
            ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "icon", array())) {
            echo "<span class=\"icon-";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "icon", array());
            echo "\"></span>";
        }
        // line 5
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text", array())) {
            echo "<span class=\"sr-only\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text", array());
            echo "</span>";
        }
        // line 6
        echo "        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                ";
        // line 15
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 16
        echo "                ";
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 19
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 20
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"";
                // line 21
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 22
                echo $this->getAttribute($context["page"], "menu", array());
                echo "<span class=\"sr-only\">(current)</span>
                    </a>
 
                </li>
                ";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 29
            echo "                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>

                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/home/"), "method"), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 36
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 37
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_module"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"home#";
                // line 38
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
                ";
            }
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    // line 16
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation_aux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 16,  149 => 42,  143 => 41,  135 => 38,  130 => 37,  127 => 36,  124 => 35,  119 => 34,  107 => 30,  104 => 29,  99 => 28,  93 => 27,  85 => 22,  81 => 21,  76 => 20,  73 => 19,  70 => 18,  65 => 17,  63 => 16,  61 => 15,  50 => 6,  43 => 5,  37 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar {% if page.header.navbar_class %}{{ page.header.navbar_class }}{% else %}navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top{% endif %}\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{% if not site.logo.url %}{{ base_url_absolute }}{% else %}{{ site.logo.url }}{% endif %}\">
            {% if site.logo.icon %}<span class=\"icon-{{ site.logo.icon }}\"></span>{% endif %}
            {% if site.logo.text %}<span class=\"sr-only\">{{ site.logo.text }}</span>{% endif %}
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
                {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
                {% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"nav-item nav-item-toggable {{ current_page }}\">
                    <a class=\"nav-link\" href=\"{{ page.url }}\">
                        {{ page.menu }}<span class=\"sr-only\">(current)</span>
                    </a>
 
                </li>
                {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"{{ mitem.link }}\">{{ mitem.text }}</a>

                </li>
                {% endfor %}
                {% for module in page.find('/home/').collection() %}
                {% if not module.header.hidemenu %}
                {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
                <li class=\"nav-item nav-item-toggable {{ current_module }}\">
                    <a class=\"nav-link\" href=\"home#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
                </li>
                {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation_aux.html.twig", "/home/hviana/crossfit/user/themes/landio/templates/partials/navigation_aux.html.twig");
    }
}
