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
class __TwigTemplate_ce19b220e9187f907daf231cacb3f93da1d27089b02f105909aca234d68dea98 extends \Twig\Template
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
        echo "<div class=\"row\" id=\"templatesharebutton\">
    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 4)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 4)))) {
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
        return array (  97 => 26,  93 => 25,  86 => 21,  82 => 20,  78 => 18,  72 => 15,  67 => 14,  64 => 13,  58 => 10,  55 => 9,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/shareButtons2.html.twig.old", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons2.html.twig.old");
    }
}
