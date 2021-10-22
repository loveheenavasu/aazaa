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

/* Blocks/videoBlock.html.twig */
class __TwigTemplate_f9d38c6c5403e350b87f445cce1a7afd7d73d4c21ab640847345a4e4cc73620a extends \Twig\Template
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
        if (((isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context)) && ($context["pageContentCategory"] ?? null))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, ($context["pageContentCategory"] ?? null), "path", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\">
        <div class=\"block-square template-2 text-center template2-video\" style=\"background: none; padding: 0 10px;\">
            <h4>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</h4>
            <span class=\"tag-line\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentCategory"] ?? null), "previewTop", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
            <span class=\"tag-line\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContentCategory"] ?? null), "previewBottom", [], "any", false, false, false, 6), "html", null, true);
            echo "</span>
            <div class=\"clearfix\"></div>
        </div>
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "Blocks/videoBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/videoBlock.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/videoBlock.html.twig");
    }
}
