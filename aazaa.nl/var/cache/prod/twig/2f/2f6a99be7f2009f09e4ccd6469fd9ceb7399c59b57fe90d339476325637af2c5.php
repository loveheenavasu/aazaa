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

/* Admin/Background/index.html.twig */
class __TwigTemplate_9ceef66ca9ee93253c25022554c5e1da9bfa568a113c1e98b2d2eeeb14cf2cf1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Background/index.html.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Change Background</h1>
        </div>

        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_background_index");
        echo "\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["background"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"300\" height=\"300\">
                    <label for=\"image\">Achtergrond afbeelding</label>
                    <input type=\"file\" name=\"image\" accept=\"image/png,image/x-png,image/gif,image/jpeg,image/jpg\">
                </div>

                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_background_index");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Background/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  64 => 11,  59 => 9,  50 => 2,  46 => 1,  35 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Background/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Background/index.html.twig");
    }
}
