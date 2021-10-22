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

/* Admin/menu.html.twig */
class __TwigTemplate_68466e832deb798fe4c44ea92a736ad5fc0e00ce587b19508d25e6d5b8620596 extends \Twig\Template
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
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <img style=\"max-height: 50px; margin:auto; padding:0 10px 0 10px; margin-bottom:20px;\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-46px-50px.png"), "html", null, true);
        echo "\">
</div>
<div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">

    <ul class=\"nav navbar-nav\" style=\"width: 100%;\">
        <li ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "admin_index")) {
            echo " class=\"active\" ";
        }
        echo ">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Dashboard
                <span class=\"pull-right hidden-xs showopacity fas fa-home\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown ";
        // line 19
        if (twig_in_filter("admin_page_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Content
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-file-alt\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 24
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24), [0 => "admin_page_category", 1 => "admin_page_category_edit"])) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category");
        echo "\">Categorieën / Menu
                        <span class=\"pull-right hidden-xs fas fa-bars\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li ";
        // line 29
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), [0 => "admin_page_overview", 1 => "admin_page_edit"])) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_overview");
        echo "\">Pagina's
                        <span class=\"pull-right hidden-xs fab fa-vimeo\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) == "admin_collector_index")) {
            echo " class=\"active\" ";
        }
        echo ">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_index");
        echo "\">Blokken / Instellingen
                <span class=\"pull-right hidden-xs showopacity fas fa-cogs\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "get", [0 => "_route"], "method", false, false, false, 43) == "admin_background_index")) {
            echo " class=\"active\" ";
        }
        echo ">
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_background_index");
        echo "\">Verander de achtergrond
                <span class=\"pull-right hidden-xs showopacity fas fa-cogs\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown ";
        // line 49
        if (twig_in_filter("admin_workshop_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Workshop / Sessies / Cursussen
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54) == "admin_workshop_index")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_index");
        echo "\">Workshops / Sessies
                        <span class=\"pull-right hidden-xs far fa-calendar-alt\" style=\"font-size:16px;\" aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "get", [0 => "_route"], "method", false, false, false, 59) == "admin_workshop_location_index")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_index");
        echo "\">Locaties
                        <span class=\"pull-right hidden-xs far fa-building\" style=\"font-size:16px;\" aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li ";
        // line 67
        if (twig_in_filter("video_chat", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67))) {
            echo " class=\"active\" ";
        }
        echo ">
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_index");
        echo "\">Video bellen
                <span class=\"pull-right hidden-xs showopacity fas fa-video\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown ";
        // line 73
        if (twig_in_filter("admin_user_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gebruikers
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "get", [0 => "_route"], "method", false, false, false, 78) == "admin_user_overview")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_overview");
        echo "\">Overzicht
                        <span class=\"pull-right hidden-xs fas fa-user\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83) == "admin_user_mailing")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_mailing");
        echo "\">Mailing
                        <span class=\"pull-right hidden-xs fas fa-envelope\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\">Uitloggen
                <span class=\"pull-right hidden-xs showopacity fas fa-sign-out-alt\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>
    </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "Admin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 92,  217 => 84,  211 => 83,  204 => 79,  198 => 78,  188 => 73,  180 => 68,  174 => 67,  164 => 60,  158 => 59,  151 => 55,  145 => 54,  135 => 49,  127 => 44,  121 => 43,  113 => 38,  107 => 37,  97 => 30,  91 => 29,  84 => 25,  78 => 24,  68 => 19,  60 => 14,  54 => 13,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/menu.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/menu.html.twig");
    }
}
