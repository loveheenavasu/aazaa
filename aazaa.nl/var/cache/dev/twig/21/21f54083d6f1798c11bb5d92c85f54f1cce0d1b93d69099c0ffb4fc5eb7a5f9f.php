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

/* Account/menu.html.twig */
class __TwigTemplate_afcce82ab90d30f05c051b93c8d585dfa4e4d4dc374e6f0a275a7ea8450079a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/menu.html.twig"));

        // line 1
        echo "<div class=\"dark col-xs-12\">
    <ul class=\"nav account-submenu\" style=\"width: 100%;\">
        <li class=\"";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3) == "account_index")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
        echo "\">Profiel
                <span class=\"pull-left fas fa-user\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>
        <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "account_favorites")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_favorites");
        echo "\">Favorieten
                <span class=\"pull-left fas fa-star\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "account_viewed_videos")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_viewed_videos");
        echo "\">Bekeken video's
                <span class=\"pull-left fas fa-video\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "account_workshop")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_workshop");
        echo "\">Workshop / Sessies
                <span class=\"pull-left fas fa-list-ul\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "account_subscription")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_subscription");
        echo "\">Lidmaatschap
                <span class=\"pull-left fas fa-shopping-cart\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "account_logout")) {
            echo "active";
        }
        echo " col-xs-12\" >
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
        echo "\">Uitloggen
                <span class=\"pull-left fas fa-sign-out-alt\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Account/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  116 => 32,  108 => 27,  102 => 26,  94 => 21,  88 => 20,  80 => 15,  74 => 14,  66 => 9,  60 => 8,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dark col-xs-12\">
    <ul class=\"nav account-submenu\" style=\"width: 100%;\">
        <li class=\"{% if app.request.get('_route') == 'account_index' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_index') }}\">Profiel
                <span class=\"pull-left fas fa-user\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>
        <li class=\"{% if app.request.get('_route') == 'account_favorites' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_favorites') }}\">Favorieten
                <span class=\"pull-left fas fa-star\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"{% if app.request.get('_route') == 'account_viewed_videos' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_viewed_videos') }}\">Bekeken video's
                <span class=\"pull-left fas fa-video\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"{% if app.request.get('_route') == 'account_workshop' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_workshop') }}\">Workshop / Sessies
                <span class=\"pull-left fas fa-list-ul\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"{% if app.request.get('_route') == 'account_subscription' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_subscription') }}\">Lidmaatschap
                <span class=\"pull-left fas fa-shopping-cart\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"{% if app.request.get('_route') == 'account_logout' %}active{% endif %} col-xs-12\" >
            <a href=\"{{ path('account_logout') }}\">Uitloggen
                <span class=\"pull-left fas fa-sign-out-alt\" style=\"margin-right: 5px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

    </ul>
</div>", "Account/menu.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/menu.html.twig");
    }
}
