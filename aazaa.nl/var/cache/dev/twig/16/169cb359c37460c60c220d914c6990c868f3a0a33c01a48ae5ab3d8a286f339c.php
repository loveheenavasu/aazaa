<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Blocks/addToFavorites.html.twig */
class __TwigTemplate_0807d1bc7450cfb7a67f79a54140667993a7afd757ed9860b5fedfe84f201e8d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/addToFavorites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/addToFavorites.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 text-center\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            $context["favactive"] = false;
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "favorites", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 5
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "pageContent", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "                ";
                    $context["favactive"] = true;
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        <span class=\"favoriteAction ";
            if ((isset($context["favactive"]) || array_key_exists("favactive", $context) ? $context["favactive"] : (function () { throw new RuntimeError('Variable "favactive" does not exist.', 9, $this->source); })())) {
                echo "fav-active";
            }
            echo "\" data-favorite=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" data-reload=\"false\">
            ";
            // line 10
            if ((isset($context["favactive"]) || array_key_exists("favactive", $context) ? $context["favactive"] : (function () { throw new RuntimeError('Variable "favactive" does not exist.', 10, $this->source); })())) {
                echo " <i class=\"fas fa-star\"></i><span>Favoriet!</span>";
            } else {
                echo "<i class=\"far fa-star\"></i><span>Favoriet?</span>";
            }
            echo "</span>
        </span>
    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"pull-right favoriteAction\" data-reload=\"false\">
            <i class=\"far fa-star\"></i> <span>Favoriet?</span>
        </a>
    ";
        }
        // line 17
        echo "    <a class=\"pull-right mr-5\" href=\"mailto:info@aazaa.org\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Mail ons\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.facebook.com/peter.aazaa\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Facebook\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.instagram.com/aazaaacademy/\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Instagram\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.pinterest.com/peteraazaa/\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pinterest.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op pinterest\">
    </a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/addToFavorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  113 => 24,  107 => 21,  101 => 18,  98 => 17,  90 => 13,  80 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 text-center\">
    {% if app.user %}
        {% set favactive = false %}
        {% for fav in app.user.favorites %}
            {% if fav.pageContent.id == pageContent.id %}
                {% set favactive = true %}
            {% endif %}
        {% endfor %}
        <span class=\"favoriteAction {% if favactive %}fav-active{% endif %}\" data-favorite=\"{{ pageContent.id }}\" data-reload=\"false\">
            {% if favactive %} <i class=\"fas fa-star\"></i><span>Favoriet!</span>{% else %}<i class=\"far fa-star\"></i><span>Favoriet?</span>{% endif %}</span>
        </span>
    {% else %}
        <a href=\"{{ path('account_login') }}\" class=\"pull-right favoriteAction\" data-reload=\"false\">
            <i class=\"far fa-star\"></i> <span>Favoriet?</span>
        </a>
    {% endif %}
    <a class=\"pull-right mr-5\" href=\"mailto:info@aazaa.org\">
        <img src=\"{{ asset('images/email.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Mail ons\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.facebook.com/peter.aazaa\">
        <img src=\"{{ asset('images/facebook.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Facebook\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.instagram.com/aazaaacademy/\">
        <img src=\"{{ asset('images/instagram.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Instagram\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.pinterest.com/peteraazaa/\">
        <img src=\"{{ asset('images/pinterest.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op pinterest\">
    </a>
</div>", "Blocks/addToFavorites.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/addToFavorites.html.twig");
    }
}
