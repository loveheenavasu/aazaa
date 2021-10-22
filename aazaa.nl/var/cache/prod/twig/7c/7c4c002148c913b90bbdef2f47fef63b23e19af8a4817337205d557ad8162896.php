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

/* Admin/Collector/editor.html.twig */
class __TwigTemplate_587873edfbe28fb96697e17952f8c5c757c7942cde5e11bfe8a54736c5f884b0 extends \Twig\Template
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
        // line 28
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Collector/editor.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Block / Instelling</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_edit");
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty(($context["collector"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"key\">Sleutel</label>
                    <input class=\"form-control\" type=\"text\" id=\"key\" name=\"key\" value=\"";
        // line 11
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty(($context["collector"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "key", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"value\">Waarde Lang</label>
                    <textarea class=\"form-control tinymce\" id=\"value\" name=\"value\" rows=\"5\">";
        // line 15
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty(($context["collector"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "value", [], "any", false, false, false, 15), "html", null, true);
        }
        echo "</textarea>
                </div>
                <div class=\"form-group\">
                    <label for=\"valueInt\">Waarde Kort / getal</label>
                    <input class=\"form-control\" type=\"number\" id=\"valueInt\" name=\"valueInt\" value=\"";
        // line 19
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty(($context["collector"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "valueInt", [], "any", false, false, false, 19), "html", null, true);
        }
        echo "\">
                </div>
                <p>* let op, waarde kort, kan een valuta zijn. Deze dient dan met cent ingevoerd te worden 3 euro = 300 </p>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_index");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Collector/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  87 => 19,  78 => 15,  69 => 11,  61 => 8,  57 => 7,  50 => 2,  46 => 1,  35 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Collector/editor.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Collector/editor.html.twig");
    }
}
