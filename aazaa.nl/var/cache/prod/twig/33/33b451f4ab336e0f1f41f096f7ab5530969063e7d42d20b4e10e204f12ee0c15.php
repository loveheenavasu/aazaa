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

/* Error/404.html.twig */
class __TwigTemplate_f892d992133715976877e58380ceedea101a1b759fd53a64e21fa26f1543c365 extends \Twig\Template
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
        // line 13
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Error/404.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"container base\">
        <div class=\"col-md-12\">
            <p>404 Error. Geen pagina gevonden</p>
            ";
        // line 6
        if (((isset($context["slug"]) || array_key_exists("slug", $context)) &&  !twig_test_empty(($context["slug"] ?? null)))) {
            // line 7
            echo "                voor: ";
            echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
            echo "
            ";
        }
        // line 9
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Error/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  58 => 7,  56 => 6,  50 => 2,  46 => 1,  35 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "Error/404.html.twig", "/home/deb116267/domains/aazaa.org/templates/Error/404.html.twig");
    }
}
