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

/* Blocks/shareButtons.html.twig.old */
class __TwigTemplate_f40a9e9dc2f22f77a4c0bc4d51c9340e271bb08849b527685ff1d0f14320e4e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons.html.twig.old"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons.html.twig.old"));

        // line 1
        if ( !(isset($context["css"]) || array_key_exists("css", $context))) {
            // line 2
            echo "    ";
            $context["css"] = "";
        }
        // line 4
        if ( !(isset($context["type"]) || array_key_exists("type", $context))) {
            // line 5
            echo "    ";
            $context["type"] = "";
        }
        // line 7
        echo "
<div class=\"row\" id=\"templatesharebutton\">
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => "muziek"]);
        echo "\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/muziek.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Muziek\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "            ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 16)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 16, $this->source); })()), "vimeoId", [], "any", false, false, false, 16)))) {
                // line 17
                echo "                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#shareVideoModel\">
                    <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            ";
            } else {
                // line 21
                echo "                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#sharePageModel\">
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            ";
            }
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"Delen\">
            </a>
        ";
        }
        // line 30
        echo "    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cursussen");
        echo "\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cursussen.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Cursussen\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar");
        echo "\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sessies.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Sessies\">
        </a>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/shareButtons.html.twig.old";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  123 => 37,  116 => 33,  112 => 32,  108 => 30,  102 => 27,  97 => 26,  94 => 25,  88 => 22,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  64 => 11,  60 => 10,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if css is not defined %}
    {% set css = ''  %}
{% endif %}
{% if type is not defined %}
    {% set type = ''  %}
{% endif %}

<div class=\"row\" id=\"templatesharebutton\">
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"{{ path('page_loader', {'slug': 'muziek'}) }}\">
            <img src=\"{{ asset('images/muziek.png') }}\" class=\"img-responsive\" alt=\"Muziek\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        {% if app.user %}
            {% if pageContent is defined and pageContent.vimeoId is defined and pageContent.vimeoId is not empty %}
                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#shareVideoModel\">
                    <img src=\"{{ asset('images/deel_video.png') }}\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            {% else %}
                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#sharePageModel\">
                    <img src=\"{{ asset('images/deel_video.png') }}\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            {% endif %}
        {% else %}
            <a href=\"{{ path('account_index') }}\">
                <img src=\"{{ asset('images/deel_video.png') }}\" class=\"img-responsive\" alt=\"Delen\">
            </a>
        {% endif %}
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"{{ path('cursussen') }}\">
            <img src=\"{{ asset('images/cursussen.png') }}\" class=\"img-responsive\" alt=\"Cursussen\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
        <a href=\"{{ path('sessions_calendar') }}\">
            <img src=\"{{ asset('images/sessies.png') }}\" class=\"img-responsive\" alt=\"Sessies\">
        </a>
    </div>
</div>", "Blocks/shareButtons.html.twig.old", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons.html.twig.old");
    }
}
