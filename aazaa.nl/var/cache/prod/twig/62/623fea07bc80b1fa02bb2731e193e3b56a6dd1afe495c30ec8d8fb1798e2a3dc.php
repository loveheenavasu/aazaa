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
class __TwigTemplate_c6a271b7b04d5927e146efa8f3770a73249ad47679da9448a6bc453807da886c extends \Twig\Template
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
        // line 1
        echo "<div class=\"dark col-xs-12\">
    <ul class=\"nav account-submenu\" style=\"width: 100%;\">
        <li class=\"";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3) == "account_index")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "account_favorites")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "account_viewed_videos")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "account_workshop")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "account_subscription")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "account_logout")) {
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
        return array (  116 => 33,  110 => 32,  102 => 27,  96 => 26,  88 => 21,  82 => 20,  74 => 15,  68 => 14,  60 => 9,  54 => 8,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/menu.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/menu.html.twig");
    }
}
