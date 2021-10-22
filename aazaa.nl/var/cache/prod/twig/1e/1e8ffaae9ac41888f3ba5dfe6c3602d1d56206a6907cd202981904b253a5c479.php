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

/* Blocks/videoPreview.html.twig */
class __TwigTemplate_772f554cb2991f281bc5636d921ba226053c8da5f4222eff714e85f6cdd926a2 extends \Twig\Template
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
        if (((isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context)) &&  !twig_test_empty(($context["pageContentLinked"] ?? null)))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "path", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\" class=\"block embed-responsive video-container\"
       style=\"
       ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "paid", [], "any", false, false, false, 4)) {
                // line 5
                echo "           ";
                if ((isset($context["baseFilter"]) || array_key_exists("baseFilter", $context))) {
                    // line 6
                    echo "                   filter: ";
                    echo twig_escape_filter($this->env, ($context["baseFilter"] ?? null), "html", null, true);
                    echo "
           ";
                }
                // line 8
                echo "       ";
            } else {
                // line 9
                echo "           ";
                if ((isset($context["paidFilter"]) || array_key_exists("paidFilter", $context))) {
                    // line 10
                    echo "                   filter: ";
                    echo twig_escape_filter($this->env, ($context["paidFilter"] ?? null), "html", null, true);
                    echo "
           ";
                }
                // line 12
                echo "       ";
            }
            // line 13
            echo "    \">
        <div class=\"video-bottom\">
            <span class=\"text top\">";
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "previewTop", [], "any", false, false, false, 15)) > 1)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "previewTop", [], "any", false, false, false, 15), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "category", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            }
            echo "</span>

            <div class=\"image-container\">
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-91px-100px.png"), "html", null, true);
            echo "\"/>
            </div>
            <span class=\"text bottom\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "previewBottom", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>

            <div class=\"video-top\">
                <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong><br>
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentLinked"] ?? null), "shortDescription", [], "any", false, false, false, 24), "html", null, true);
            echo "
            </div>

        </div>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "Blocks/videoPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  96 => 23,  90 => 20,  85 => 18,  75 => 15,  71 => 13,  68 => 12,  62 => 10,  59 => 9,  56 => 8,  50 => 6,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/videoPreview.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/videoPreview.html.twig");
    }
}
