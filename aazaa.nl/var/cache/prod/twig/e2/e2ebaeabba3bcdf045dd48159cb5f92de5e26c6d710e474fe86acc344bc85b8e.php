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

/* Admin/Workshop/location.html.twig */
class __TwigTemplate_c6735170c34fa1539345e3ee47818d2bf53fcc8fba48cfdaec0175352044ba69 extends \Twig\Template
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
        // line 61
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/location.html.twig", 61);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Locatie</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_edit");
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 11
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"street\">Straat</label>
                    <input class=\"form-control\" id=\"street\" name=\"street\" value=\"";
        // line 15
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "street", [], "any", false, false, false, 15), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"houseNumber\">Huisnummer</label>
                    <input class=\"form-control\" id=\"houseNumber\" name=\"houseNumber\" value=\"";
        // line 19
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "houseNumber", [], "any", false, false, false, 19), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"zipcode\">Postcode</label>
                    <input class=\"form-control\" id=\"zipcode\" name=\"zipcode\" value=\"";
        // line 23
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "zipcode", [], "any", false, false, false, 23), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"city\">Plaats</label>
                    <input class=\"form-control\" id=\"city\" name=\"city\" value=\"";
        // line 27
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "city", [], "any", false, false, false, 27), "html", null, true);
        }
        echo "\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Omschrijving</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\">";
        // line 32
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prijs</label>
                    <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 37
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "price", [], "any", false, false, false, 37), "html", null, true);
        }
        echo "\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"color\">Kleur</label>
                    <input type=\"color\" class=\"form-control\" id=\"color\" name=\"color\" value=\"";
        // line 42
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "color", [], "any", false, false, false, 42), "html", null, true);
        }
        echo "\" >
                </div>


                <div class=\"input-group\" style=\"margin-bottom: 20px\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"is_video\" name=\"is_video\" value=\"1\" ";
        // line 48
        if ((((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty(($context["location"] ?? null))) && twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "isVideo", [], "any", false, false, false, 48))) {
            echo "checked";
        }
        echo "/>
                    </span>

                    <label class=\"form-control\" for=\"is_video\">Is een video locatie</label>
                </div>


                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_index");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Workshop/location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  146 => 48,  135 => 42,  125 => 37,  115 => 32,  105 => 27,  96 => 23,  87 => 19,  78 => 15,  69 => 11,  61 => 8,  57 => 7,  50 => 2,  46 => 1,  35 => 61,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Workshop/location.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/location.html.twig");
    }
}
