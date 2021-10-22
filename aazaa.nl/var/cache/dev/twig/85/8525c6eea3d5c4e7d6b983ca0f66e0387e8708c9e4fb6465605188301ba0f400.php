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

/* Base/navbar.html.twig */
class __TwigTemplate_ab0064dceb448986ddaaa8e1fb48bbc8375f65b9687182d75876f2d05f1d4f2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/navbar.html.twig"));

        // line 1
        echo "<div itemscope itemtype=\"http://schema.org/Organization\">
    <meta itemprop=\"name\" content=\"Aazaa.org\">
    <div itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
        <meta itemprop=\"bestRating\" content=\"10\">
        <meta itemprop=\"ratingCount\" content=\"20\">
        <meta itemprop=\"ratingValue\" content=\"9\">
    </div>
</div>
";
        // line 9
        if (((isset($context["menuItems"]) || array_key_exists("menuItems", $context)) &&  !twig_test_empty((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "    <div class=\"container-fluid navbar-main navbar-inner-container\">
        <div class=\"container navbar-inner-container\">
            <div class=\"row menu-main-buttons\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                // line 14
                echo "                    ";
                if ((((twig_get_attribute($this->env, $this->source, $context["menuItem"], "viewPosition", [], "any", false, false, false, 14) == "Boven") && twig_get_attribute($this->env, $this->source, $context["menuItem"], "pageContent", [], "any", false, false, false, 14)) && twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuItem"], "pageContent", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16)]), "html", null, true);
                    echo "\">
                                <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" class=\"img-responsive\">
                            </a>
                        </div>
                    ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>
        </div>

        <div class=\"navbar-header\">
            <span id=\"toggleMenu\" class=\"navbar-mobile-menu collapsed\" data-toggle=\"collapse\" data-target=\"#Menu\" aria-expanded=\"false\" onclick=\"openMainMenu(this)\"><img class=\"img-responsive\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menu.png"), "html", null, true);
            echo "\"> </span>
        </div>

        <div class=\"container navbar-inner-container\">
            <div class=\"collapse navbar-collapse\" id=\"Menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"";
            // line 32
            if (((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()) == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "schemeAndHttpHost", [], "any", false, false, false, 32) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index")))) {
                echo "active";
            }
            echo " hidden-sm hidden-md hidden-lg\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Home</a></li>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                // line 34
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["menuItem"], "viewPosition", [], "any", false, false, false, 34) == "Hoofdmenu") && twig_get_attribute($this->env, $this->source, $context["menuItem"], "pageContent", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "                            <li class=\"";
                    if (((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()) == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "schemeAndHttpHost", [], "any", false, false, false, 35) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuItem"], "pageContent", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35)])))) {
                        echo "active";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuItem"], "pageContent", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 37
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    <li class=\"";
            if (((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 38, $this->source); })()) == "account_index")) {
                echo "active";
            }
            echo " hidden-sm hidden-md hidden-lg\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            } else {
                echo "Inloggen";
            }
            echo "</a></li>
                </ul>
            </div>
        </div>
    </div>
";
        }
        // line 44
        echo "
<div class=\"container-fluid navbar-sub\">
    <div class=\"container navbar-inner-container\">
        <div class=\"col-md-3 col-sm-3 hidden-xs text-center\">
            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" ><img class=\"img-responsive\" style=\"margin:auto; padding: 2px\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home.png"), "html", null, true);
        echo "\" alt=\"Homepage\"></a>
        </div>
        <div class=\"no-padding col-md-6 col-sm-6 col-xs-12\">
            <!--<div class=\"col-xs-3 col-md-3 no-padding text-center\">

                <a target=\"_blank\" href=\"https://www.facebook.com/peter.aazaa\">
                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Facebook\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a target=\"_blank\" href=\"https://www.instagram.com/aazaaacademy/\">
                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Instagram\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a target=\"_blank\" href=\"https://www.pinterest.com/peteraazaa/\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pinterest.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op pinterest\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a href=\"mailto:info@aazaa.org\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Mail ons\">
                </a>
            </div>-->
        </div>
        <div class=\"col-md-3 col-sm-3 hidden-xs text-center\">
            <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
        echo "\" class=\"user\"><img class=\"img-responsive\" style=\"margin:auto; padding: 2px\"  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/login.png"), "html", null, true);
        echo "\"></a>
        </div>
    </div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Base/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  196 => 69,  188 => 64,  180 => 59,  172 => 54,  161 => 48,  155 => 44,  135 => 38,  129 => 37,  117 => 35,  114 => 34,  110 => 33,  102 => 32,  93 => 26,  87 => 22,  81 => 21,  74 => 17,  70 => 16,  67 => 15,  64 => 14,  60 => 13,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div itemscope itemtype=\"http://schema.org/Organization\">
    <meta itemprop=\"name\" content=\"Aazaa.org\">
    <div itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
        <meta itemprop=\"bestRating\" content=\"10\">
        <meta itemprop=\"ratingCount\" content=\"20\">
        <meta itemprop=\"ratingValue\" content=\"9\">
    </div>
</div>
{% if menuItems is defined and menuItems is not empty %}
    <div class=\"container-fluid navbar-main navbar-inner-container\">
        <div class=\"container navbar-inner-container\">
            <div class=\"row menu-main-buttons\">
                {% for menuItem in menuItems %}
                    {% if menuItem.viewPosition == 'Boven' and menuItem.pageContent and menuItem.image %}
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <a href=\"{{ path('page_loader', {'slug': menuItem.pageContent.path }) }}\">
                                <img src=\"{{ menuItem.image }}\" class=\"img-responsive\">
                            </a>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>

        <div class=\"navbar-header\">
            <span id=\"toggleMenu\" class=\"navbar-mobile-menu collapsed\" data-toggle=\"collapse\" data-target=\"#Menu\" aria-expanded=\"false\" onclick=\"openMainMenu(this)\"><img class=\"img-responsive\" src=\"{{ asset('images/menu.png') }}\"> </span>
        </div>

        <div class=\"container navbar-inner-container\">
            <div class=\"collapse navbar-collapse\" id=\"Menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"{% if route == app.request.schemeAndHttpHost ~ path('index') %}active{% endif %} hidden-sm hidden-md hidden-lg\"><a href=\"{{ path('index') }}\">Home</a></li>
                    {% for menuItem in menuItems %}
                        {% if menuItem.viewPosition == 'Hoofdmenu' and menuItem.pageContent %}
                            <li class=\"{% if route == app.request.schemeAndHttpHost ~ path('page_loader', {'slug': menuItem.pageContent.path})  %}active{% endif %}\"><a href=\"{{ path('page_loader', {'slug': menuItem.pageContent.path}) }}\">{{ menuItem.name }}</a></li>
                        {% endif %}
                    {% endfor %}
                    <li class=\"{% if route == 'account_index' %}active{% endif %} hidden-sm hidden-md hidden-lg\"><a href=\"{{ path('account_index') }}\">{% if app.user %}{{ app.user.username }}{% else %}Inloggen{% endif %}</a></li>
                </ul>
            </div>
        </div>
    </div>
{% endif %}

<div class=\"container-fluid navbar-sub\">
    <div class=\"container navbar-inner-container\">
        <div class=\"col-md-3 col-sm-3 hidden-xs text-center\">
            <a href=\"{{ path('index') }}\" ><img class=\"img-responsive\" style=\"margin:auto; padding: 2px\" src=\"{{ asset('images/home.png') }}\" alt=\"Homepage\"></a>
        </div>
        <div class=\"no-padding col-md-6 col-sm-6 col-xs-12\">
            <!--<div class=\"col-xs-3 col-md-3 no-padding text-center\">

                <a target=\"_blank\" href=\"https://www.facebook.com/peter.aazaa\">
                    <img src=\"{{ asset('images/facebook.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Facebook\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a target=\"_blank\" href=\"https://www.instagram.com/aazaaacademy/\">
                    <img src=\"{{ asset('images/instagram.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Instagram\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a target=\"_blank\" href=\"https://www.pinterest.com/peteraazaa/\">
                    <img src=\"{{ asset('images/pinterest.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op pinterest\">
                </a>
            </div>
            <div class=\"col-xs-3 col-md-3 no-padding text-center\">
                <a href=\"mailto:info@aazaa.org\">
                    <img src=\"{{ asset('images/email.png') }}\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Mail ons\">
                </a>
            </div>-->
        </div>
        <div class=\"col-md-3 col-sm-3 hidden-xs text-center\">
            <a href=\"{{ path('account_index') }}\" class=\"user\"><img class=\"img-responsive\" style=\"margin:auto; padding: 2px\"  src=\"{{ asset('images/login.png') }}\"></a>
        </div>
    </div>
</div>


", "Base/navbar.html.twig", "/home/deb116267/domains/aazaa.org/templates/Base/navbar.html.twig");
    }
}
