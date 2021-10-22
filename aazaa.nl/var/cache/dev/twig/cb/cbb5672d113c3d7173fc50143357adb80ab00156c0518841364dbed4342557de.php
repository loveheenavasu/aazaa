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

/* Blocks/shareButtons2.html.twig.old */
class __TwigTemplate_926d6a00025b790c7df134684af965432a78df280419bb03c8e636b7444a3c26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons2.html.twig.old"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons2.html.twig.old"));

        // line 1
        echo "<div class=\"row\" id=\"templatesharebutton\">
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 4)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 4, $this->source); })()), "vimeoId", [], "any", false, false, false, 4)))) {
                // line 5
                echo "                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#shareVideoModel\">
                    <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            ";
            } else {
                // line 9
                echo "                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#sharePageModel\">
                    <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Delen\">
                </div>
            ";
            }
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\">
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deel_video.png"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"Delen\">
            </a>
        ";
        }
        // line 18
        echo "    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cursussen");
        echo "\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cursussen.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Cursussen\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar");
        echo "\">
            <img src=\"";
        // line 26
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
        return "Blocks/shareButtons2.html.twig.old";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  99 => 25,  92 => 21,  88 => 20,  84 => 18,  78 => 15,  73 => 14,  70 => 13,  64 => 10,  61 => 9,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" id=\"templatesharebutton\">
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
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
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        <a href=\"{{ path('cursussen') }}\">
            <img src=\"{{ asset('images/cursussen.png') }}\" class=\"img-responsive\" alt=\"Cursussen\">
        </a>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        <a href=\"{{ path('sessions_calendar') }}\">
            <img src=\"{{ asset('images/sessies.png') }}\" class=\"img-responsive\" alt=\"Sessies\">
        </a>
    </div>
</div>", "Blocks/shareButtons2.html.twig.old", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons2.html.twig.old");
    }
}
