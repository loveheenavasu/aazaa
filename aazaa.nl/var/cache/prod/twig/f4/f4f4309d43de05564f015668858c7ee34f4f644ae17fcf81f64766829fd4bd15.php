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
class __TwigTemplate_8f54af0098864cc02b9616f361d834e706f45408629465cd23fbd53860bceb74 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "            ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 16)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 16)))) {
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
        return array (  121 => 38,  117 => 37,  110 => 33,  106 => 32,  102 => 30,  96 => 27,  91 => 26,  88 => 25,  82 => 22,  79 => 21,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  58 => 11,  54 => 10,  49 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/shareButtons.html.twig.old", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons.html.twig.old");
    }
}
