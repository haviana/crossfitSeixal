<?php

/* partials/base_aux.html.twig */
class __TwigTemplate_2def3e2f734209034d34034428583b1902b0318b588b38191f460978b3442b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "    </head>
    <body>

        ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
        <script src=\"";
        // line 68
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/landio.min.js");
        echo "\" type=\"text/javascript\" ></script>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base_aux.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-57x57.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-60x60.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-72x72.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-76x76.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-114x114.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-120x120.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-144x144.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-152x152.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-180x180.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-32x32.png");
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/android-chrome-192x192.png");
        echo "\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-96x96.png");
        echo "\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-16x16.png");
        echo "\" sizes=\"16x16\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">


        <link rel=\"manifest\"href=\"";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/manifest.json");
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon.ico");
        echo "\" />

        <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/mstile-144x144.png");
        echo "\">
        <meta name=\"msapplication-config\" content=\"";
        // line 30
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/browserconfig.xml");
        echo "\">
        <meta name=\"theme-color\" content=\"#663fb5\">

        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate.min.css"), "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/landio.css"), "method");
        // line 36
        echo "        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 41
        echo "        ";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "             ";
        $this->loadTemplate("partials/navigation_aux.html.twig", "partials/base_aux.html.twig", 49)->display($context);
        // line 50
        echo "        ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "                <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 56
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo " 
                    </div>
            </div>
    </div>

            ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base_aux.html.twig", 65)->display($context);
        // line 66
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base_aux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 66,  239 => 65,  236 => 64,  226 => 56,  222 => 54,  219 => 53,  215 => 62,  212 => 53,  209 => 52,  205 => 50,  202 => 49,  199 => 48,  195 => 41,  192 => 40,  189 => 39,  185 => 36,  182 => 35,  179 => 34,  176 => 33,  168 => 42,  166 => 39,  160 => 37,  158 => 33,  152 => 30,  148 => 29,  142 => 26,  138 => 25,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  80 => 8,  78 => 7,  70 => 6,  67 => 5,  64 => 4,  56 => 68,  53 => 67,  51 => 64,  48 => 63,  46 => 52,  43 => 51,  41 => 48,  36 => 45,  34 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ url('theme://img/favicon/apple-touch-icon-57x57.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ url('theme://img/favicon/apple-touch-icon-60x60.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://img/favicon/apple-touch-icon-72x72.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://img/favicon/apple-touch-icon-76x76.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://img/favicon/apple-touch-icon-114x114.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ url('theme://img/favicon/apple-touch-icon-120x120.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ url('theme://img/favicon/apple-touch-icon-144x144.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ url('theme://img/favicon/apple-touch-icon-152x152.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/favicon/apple-touch-icon-180x180.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/android-chrome-192x192.png') }}\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-96x96.png') }}\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">


        <link rel=\"manifest\"href=\"{{ url('theme://img/favicon/manifest.json') }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon.ico') }}\" />

        <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
        <meta name=\"msapplication-TileImage\" content=\"{{ url('theme://img/favicon/mstile-144x144.png') }}\">
        <meta name=\"msapplication-config\" content=\"{{ url('theme://img/favicon/browserconfig.xml') }}\">
        <meta name=\"theme-color\" content=\"#663fb5\">

        {% block stylesheets %}
            {% do assets.addCss('theme://css/animate.min.css') %}
            {% do assets.addCss('theme://css/landio.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
        {% endblock %}
        {{ assets.js() }}

        {% endblock head%}
    </head>
    <body>

        {% block header %}
             {% include 'partials/navigation_aux.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}
                <div class=\"container\">
                <div class=\"row\">
                    {{ page.content }} 
                    </div>
            </div>
    </div>

            {% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        <script src=\"{{ url('theme://js/landio.min.js') }}\" type=\"text/javascript\" ></script>
    </body>
</html>
", "partials/base_aux.html.twig", "/home/hviana/crossfit/user/themes/landio/templates/partials/base_aux.html.twig");
    }
}
