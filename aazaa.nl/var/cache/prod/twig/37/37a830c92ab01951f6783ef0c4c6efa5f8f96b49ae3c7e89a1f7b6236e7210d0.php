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

/* Admin/Workshop/workshop.html.twig */
class __TwigTemplate_b86fe94f8dff9afa8920d874d0bbf48b047cd4d7fe9852a6d1845aed050cd588 extends \Twig\Template
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
        // line 79
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/workshop.html.twig", 79);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Workshop / Sessies / Cursussen</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_edit");
        echo "\">
                <input type=\"hidden\" name=\"workshopId\" value=\"";
        // line 8
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"title\">Title</label>
                    <input class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 11
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"type\">Type</label>
                    <select name=\"type\" class=\"form-control\">
                        <option value=\"workshop\" ";
        // line 17
        if ((( !twig_test_empty(($context["workshop"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 17))) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "type", [], "any", false, false, false, 17) == "workshop"))) {
            echo "selected";
        }
        echo ">Workshop</option>
                        <option value=\"sessie\" ";
        // line 18
        if ((( !twig_test_empty(($context["workshop"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 18))) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "type", [], "any", false, false, false, 18) == "sessie"))) {
            echo "selected";
        }
        echo ">Sessie</option>
                        <option value=\"cursus\" ";
        // line 19
        if ((( !twig_test_empty(($context["workshop"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 19))) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "type", [], "any", false, false, false, 19) == "cursus"))) {
            echo "selected";
        }
        echo ">Cursus</option>
                    </select>
                </div>

                <div class=\"row\">
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"startDatetime\">Start datum en tijd</label>
                        <input type=\"datetime-local\" class=\"form-control\" id=\"startDatetime\" name=\"startDatetime\" value=\"";
        // line 26
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 26), "H:i"), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"endDatetime\">Eind datum en tijd</label>
                        <input type=\"datetime-local\" class=\"form-control\" id=\"endDatetime\" name=\"endDatetime\" value=\"";
        // line 30
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "endDatetime", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "endDatetime", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"price\">Prijs</label>
                        <input type=\"number\" step=\"0.01\" pattern=\"^\\d+(?:\\.\\d{1,2})?\$\" onblur=\"this.value = parseFloat(this.value).toFixed(2);\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 34
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "price", [], "any", false, false, false, 34), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"seats\">Beschikbare plaatsen</label>
                        <input type=\"number\" step=\"1\"  onblur=\"this.value = parseFloat(this.value).toFixed(0);\" class=\"form-control\" id=\"seats\" name=\"seats\" value=\"";
        // line 38
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "seats", [], "any", false, false, false, 38), "html", null, true);
        } else {
            echo "4";
        }
        echo "\" required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"location\">Locatie</label>
                    <select name=\"location\" class=\"form-control\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 46
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\" ";
            if ((( !twig_test_empty(($context["workshop"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 46))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 46)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Omschrijving Lang</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\">";
        // line 53
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "description", [], "any", false, false, false, 53), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"descriptionShort\">Omschrijving Kort</label>
                    <textarea class=\"form-control\" id=\"descriptionShort\" name=\"descriptionShort\">";
        // line 58
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "descriptionShort", [], "any", false, false, false, 58), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" ";
        // line 63
        if ((((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "active", [], "any", false, false, false, 63) == 0))) {
            echo "checked";
        }
        echo "> Niet online zichtbaar
                    </label>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" ";
        // line 69
        if ((((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty(($context["workshop"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "active", [], "any", false, false, false, 69) != 1))) {
        } else {
            echo "checked";
        }
        echo ">Online zichtbaar
                    </label>
                </div>

                <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_index");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Workshop/workshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  206 => 69,  195 => 63,  185 => 58,  175 => 53,  168 => 48,  153 => 46,  149 => 45,  135 => 38,  126 => 34,  115 => 30,  104 => 26,  92 => 19,  86 => 18,  80 => 17,  69 => 11,  61 => 8,  57 => 7,  50 => 2,  46 => 1,  35 => 79,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Workshop/workshop.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/workshop.html.twig");
    }
}
