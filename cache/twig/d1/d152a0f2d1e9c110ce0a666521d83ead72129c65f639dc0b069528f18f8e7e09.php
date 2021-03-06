<?php

/* partials/header.html.twig */
class __TwigTemplate_f394ccdaf49838217d83d24ac04315d0887c2055f594e9030ee9d1b296595a59 extends Twig_Template
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
        echo "<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
    <h1 class=\"display-3\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</h1>
    <h2 class=\"m-b-lg\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "description", array());
        echo "</h2>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "    <a class=\"btn btn-secondary-outline m-b-md\" href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" role=\"button\"><span class=\"icon-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></span>";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    <script type=\"text/javascript\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array())) {
            // line 11
            echo "        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id=";
            // line 12
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array())) {
            // line 17
            echo "        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url=";
            // line 18
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    ";
        }
        // line 22
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array())) {
            // line 23
            echo "        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url=";
            // line 24
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    ";
        }
        // line 28
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "instagram_url", array())) {
            // line 29
            echo "        // LinkedIn Shares Count
        \$.getJSON( '//www.instagram.com/countserv/count/share?url=";
            // line 30
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "&callback=?', function( instagramdata ) {
            \$('#instagram-count').text(instagramata.count)
        });
    ";
        }
        // line 34
        echo "    </script>

    <ul class=\"list-inline social-share\">
        ";
        // line 37
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array())) {
            // line 38
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array());
            echo "\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array())) {
            // line 41
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array());
            echo "\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        ";
        }
        // line 43
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array())) {
            // line 44
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array());
            echo "\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        ";
        }
        // line 46
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "instagram_url", array())) {
            // line 47
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "instagram_url", array());
            echo "\"><span class=\"icon-instagram\"></span> <span class=\"social-text\" id=\"instagram-count\">0</span></a></li>
        ";
        }
        // line 49
        echo "    </ul>
  </div>


</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 49,  137 => 47,  134 => 46,  128 => 44,  125 => 43,  119 => 41,  116 => 40,  110 => 38,  108 => 37,  103 => 34,  96 => 30,  93 => 29,  90 => 28,  83 => 24,  80 => 23,  77 => 22,  70 => 18,  67 => 17,  64 => 16,  57 => 12,  54 => 11,  52 => 10,  48 => 8,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
    <h1 class=\"display-3\">{{ site.header.title }}</h1>
    <h2 class=\"m-b-lg\">{{ site.header.description }}</h2>
    {% for item in site.header.buttons %}
    <a class=\"btn btn-secondary-outline m-b-md\" href=\"{{ item.url }}\" role=\"button\"><span class=\"icon-{{ item.icon }}\"></span>{{ item.text }}</a>
    {% endfor %}

    <script type=\"text/javascript\">
        {% if site.socialcount.facebook_url %}
        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id={{ site.socialcount.url }}', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    {% endif %}
    {% if site.socialcount.twitter_url %}
        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url={{ site.socialcount.url }}&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    {% endif %}
    {% if site.socialcount.linkedin_url %}
        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url={{ site.socialcount.url }}&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    {% endif %}
    {% if site.socialcount.instagram_url %}
        // LinkedIn Shares Count
        \$.getJSON( '//www.instagram.com/countserv/count/share?url={{ site.socialcount.url }}&callback=?', function( instagramdata ) {
            \$('#instagram-count').text(instagramata.count)
        });
    {% endif %}
    </script>

    <ul class=\"list-inline social-share\">
        {% if site.socialcount.twitter_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.twitter_url }}\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.facebook_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.facebook_url }}\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.linkedin_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.linkedin_url }}\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.instagram_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.instagram_url }}\"><span class=\"icon-instagram\"></span> <span class=\"social-text\" id=\"instagram-count\">0</span></a></li>
        {% endif %}
    </ul>
  </div>


</header>
", "partials/header.html.twig", "/Volumes/Dados/workspace/crossfitSeixal/user/themes/landio/templates/partials/header.html.twig");
    }
}
