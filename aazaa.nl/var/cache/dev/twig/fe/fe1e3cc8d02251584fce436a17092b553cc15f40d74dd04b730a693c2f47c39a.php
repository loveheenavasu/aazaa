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
class __TwigTemplate_3fa758e5e1ccbda9fe845b3676da91a4bd85869eb90b7925eb7673cd38954c6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/menu.html.twig"));

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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "admin_index")) {
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
        if (twig_in_filter("admin_page_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Content
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-file-alt\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 24
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24), [0 => "admin_page_category", 1 => "admin_page_category_edit"])) {
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
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), [0 => "admin_page_overview", 1 => "admin_page_edit"])) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) == "admin_collector_index")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", [0 => "_route"], "method", false, false, false, 43) == "admin_background_index")) {
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
        if (twig_in_filter("admin_workshop_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Workshop / Sessies / Cursussen
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54) == "admin_workshop_index")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", [0 => "_route"], "method", false, false, false, 59) == "admin_workshop_location_index")) {
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
        if (twig_in_filter("video_chat", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67))) {
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
        if (twig_in_filter("admin_user_", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73))) {
            echo "open";
        }
        echo "\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gebruikers
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "get", [0 => "_route"], "method", false, false, false, 78) == "admin_user_overview")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83) == "admin_user_mailing")) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  234 => 92,  223 => 84,  217 => 83,  210 => 79,  204 => 78,  194 => 73,  186 => 68,  180 => 67,  170 => 60,  164 => 59,  157 => 55,  151 => 54,  141 => 49,  133 => 44,  127 => 43,  119 => 38,  113 => 37,  103 => 30,  97 => 29,  90 => 25,  84 => 24,  74 => 19,  66 => 14,  60 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <img style=\"max-height: 50px; margin:auto; padding:0 10px 0 10px; margin-bottom:20px;\" src=\"{{ asset( 'images/logo/logo-46px-50px.png' ) }}\">
</div>
<div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">

    <ul class=\"nav navbar-nav\" style=\"width: 100%;\">
        <li {% if app.request.get('_route') == 'admin_index' %} class=\"active\" {% endif %}>
            <a href=\"{{ path('admin_index') }}\">Dashboard
                <span class=\"pull-right hidden-xs showopacity fas fa-home\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown {% if 'admin_page_' in app.request.get('_route') %}open{% endif %}\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Content
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-file-alt\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li {% if app.request.get('_route') in ['admin_page_category','admin_page_category_edit'] %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_page_category') }}\">Categorieën / Menu
                        <span class=\"pull-right hidden-xs fas fa-bars\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li {% if app.request.get('_route') in ['admin_page_overview','admin_page_edit'] %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_page_overview') }}\">Pagina's
                        <span class=\"pull-right hidden-xs fab fa-vimeo\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li {% if app.request.get('_route') == 'admin_collector_index' %} class=\"active\" {% endif %}>
            <a href=\"{{ path('admin_collector_index') }}\">Blokken / Instellingen
                <span class=\"pull-right hidden-xs showopacity fas fa-cogs\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li {% if app.request.get('_route') == 'admin_background_index' %} class=\"active\" {% endif %}>
            <a href=\"{{ path('admin_background_index') }}\">Verander de achtergrond
                <span class=\"pull-right hidden-xs showopacity fas fa-cogs\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown {% if 'admin_workshop_' in app.request.get('_route') %}open{% endif %}\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Workshop / Sessies / Cursussen
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li {% if app.request.get('_route') == 'admin_workshop_index' %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_workshop_index') }}\">Workshops / Sessies
                        <span class=\"pull-right hidden-xs far fa-calendar-alt\" style=\"font-size:16px;\" aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li {% if app.request.get('_route') == 'admin_workshop_location_index' %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_workshop_location_index') }}\">Locaties
                        <span class=\"pull-right hidden-xs far fa-building\" style=\"font-size:16px;\" aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li {% if 'video_chat' in app.request.get('_route') %} class=\"active\" {% endif %}>
            <a href=\"{{ path('video_chat_index') }}\">Video bellen
                <span class=\"pull-right hidden-xs showopacity fas fa-video\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>

        <li class=\"dropdown {% if 'admin_user_' in app.request.get('_route') %}open{% endif %}\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gebruikers
                <span style=\"font-size:16px;\" class=\"pull-right hidden-xs fas fa-users\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li {% if app.request.get('_route') == 'admin_user_overview' %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_user_overview') }}\">Overzicht
                        <span class=\"pull-right hidden-xs fas fa-user\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
                <li {% if app.request.get('_route') == 'admin_user_mailing' %} class=\"active\" {% endif %}>
                    <a href=\"{{ path('admin_user_mailing') }}\">Mailing
                        <span class=\"pull-right hidden-xs fas fa-envelope\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href=\"{{ path('admin_logout') }}\">Uitloggen
                <span class=\"pull-right hidden-xs showopacity fas fa-sign-out-alt\" style=\"font-size:16px;\"  aria-hidden=\"true\"></span>
            </a>
        </li>
    </ul>

</div>", "Admin/menu.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/menu.html.twig");
    }
}
