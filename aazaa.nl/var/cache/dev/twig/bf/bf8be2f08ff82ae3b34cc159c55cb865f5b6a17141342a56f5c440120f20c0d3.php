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
class __TwigTemplate_bbc4754b25c6a28b09bcece2a70200cee30192a344ed3fd2fb2163a6b9571e50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/workshop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/workshop.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/workshop.html.twig", 79);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 8, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"title\">Title</label>
                    <input class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 11
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 11, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"type\">Type</label>
                    <select name=\"type\" class=\"form-control\">
                        <option value=\"workshop\" ";
        // line 17
        if ((( !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 17, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 17, $this->source); })()), "location", [], "any", false, false, false, 17))) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17) == "workshop"))) {
            echo "selected";
        }
        echo ">Workshop</option>
                        <option value=\"sessie\" ";
        // line 18
        if ((( !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 18, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 18, $this->source); })()), "location", [], "any", false, false, false, 18))) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18) == "sessie"))) {
            echo "selected";
        }
        echo ">Sessie</option>
                        <option value=\"cursus\" ";
        // line 19
        if ((( !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 19, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 19, $this->source); })()), "location", [], "any", false, false, false, 19))) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "cursus"))) {
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
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 26, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 26, $this->source); })()), "startDatetime", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 26, $this->source); })()), "startDatetime", [], "any", false, false, false, 26), "H:i"), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"endDatetime\">Eind datum en tijd</label>
                        <input type=\"datetime-local\" class=\"form-control\" id=\"endDatetime\" name=\"endDatetime\" value=\"";
        // line 30
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })()), "endDatetime", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })()), "endDatetime", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"price\">Prijs</label>
                        <input type=\"number\" step=\"0.01\" pattern=\"^\\d+(?:\\.\\d{1,2})?\$\" onblur=\"this.value = parseFloat(this.value).toFixed(2);\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 34
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 34, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "html", null, true);
        }
        echo "\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"seats\">Beschikbare plaatsen</label>
                        <input type=\"number\" step=\"1\"  onblur=\"this.value = parseFloat(this.value).toFixed(0);\" class=\"form-control\" id=\"seats\" name=\"seats\" value=\"";
        // line 38
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 38, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 38, $this->source); })()), "seats", [], "any", false, false, false, 38), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 46
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\" ";
            if ((( !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 46, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 46)))) {
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
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 53, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"descriptionShort\">Omschrijving Kort</label>
                    <textarea class=\"form-control\" id=\"descriptionShort\" name=\"descriptionShort\">";
        // line 58
        if (((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 58, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 58, $this->source); })()), "descriptionShort", [], "any", false, false, false, 58), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" ";
        // line 63
        if ((((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 63, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 63, $this->source); })()), "active", [], "any", false, false, false, 63) == 0))) {
            echo "checked";
        }
        echo "> Niet online zichtbaar
                    </label>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" ";
        // line 69
        if ((((isset($context["workshop"]) || array_key_exists("workshop", $context)) &&  !twig_test_empty((isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 69, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 69, $this->source); })()), "active", [], "any", false, false, false, 69) != 1))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  234 => 73,  224 => 69,  213 => 63,  203 => 58,  193 => 53,  186 => 48,  171 => 46,  167 => 45,  153 => 38,  144 => 34,  133 => 30,  122 => 26,  110 => 19,  104 => 18,  98 => 17,  87 => 11,  79 => 8,  75 => 7,  68 => 2,  58 => 1,  35 => 79,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Workshop / Sessies / Cursussen</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_workshop_edit') }}\">
                <input type=\"hidden\" name=\"workshopId\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.id }}{% endif %}\">
                <div class=\"form-group\">
                    <label for=\"title\">Title</label>
                    <input class=\"form-control\" id=\"title\" name=\"title\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.title }}{% endif %}\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"type\">Type</label>
                    <select name=\"type\" class=\"form-control\">
                        <option value=\"workshop\" {% if workshop is not empty and workshop.location is not empty and workshop.type == 'workshop' %}selected{% endif %}>Workshop</option>
                        <option value=\"sessie\" {% if workshop is not empty and workshop.location is not empty and workshop.type == 'sessie' %}selected{% endif %}>Sessie</option>
                        <option value=\"cursus\" {% if workshop is not empty and workshop.location is not empty and workshop.type == 'cursus' %}selected{% endif %}>Cursus</option>
                    </select>
                </div>

                <div class=\"row\">
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"startDatetime\">Start datum en tijd</label>
                        <input type=\"datetime-local\" class=\"form-control\" id=\"startDatetime\" name=\"startDatetime\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.startDatetime|date('Y-m-d') }}T{{ workshop.startDatetime|date('H:i') }}{% endif %}\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"endDatetime\">Eind datum en tijd</label>
                        <input type=\"datetime-local\" class=\"form-control\" id=\"endDatetime\" name=\"endDatetime\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.endDatetime|date('Y-m-d') }}T{{ workshop.endDatetime|date('H:i') }}{% endif %}\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"price\">Prijs</label>
                        <input type=\"number\" step=\"0.01\" pattern=\"^\\d+(?:\\.\\d{1,2})?\$\" onblur=\"this.value = parseFloat(this.value).toFixed(2);\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.price }}{% endif %}\" required>
                    </div>
                    <div class=\"form-group col-xs-12 col-sm-3\">
                        <label for=\"seats\">Beschikbare plaatsen</label>
                        <input type=\"number\" step=\"1\"  onblur=\"this.value = parseFloat(this.value).toFixed(0);\" class=\"form-control\" id=\"seats\" name=\"seats\" value=\"{% if workshop is defined and workshop is not empty %}{{ workshop.seats }}{% else %}4{% endif %}\" required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"location\">Locatie</label>
                    <select name=\"location\" class=\"form-control\">
                        {% for location in locations %}
                            <option value=\"{{ location.id }}\" {% if workshop is not empty and workshop.location is not empty and workshop.location.id == location.id %}selected{% endif %}>{{ location.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Omschrijving Lang</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\">{% if workshop is defined and workshop is not empty %}{{ workshop.description }}{% endif %}</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"descriptionShort\">Omschrijving Kort</label>
                    <textarea class=\"form-control\" id=\"descriptionShort\" name=\"descriptionShort\">{% if workshop is defined and workshop is not empty %}{{ workshop.descriptionShort }}{% endif %}</textarea>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" {% if workshop is defined and workshop is not empty and workshop.active == 0 %}checked{% endif %}> Niet online zichtbaar
                    </label>
                </div>

                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" {% if workshop is defined and workshop is not empty and workshop.active != 1 %}{% else %}checked{% endif %}>Online zichtbaar
                    </label>
                </div>

                <a href=\"{{ path('admin_workshop_index') }}\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
{% endblock %}
{% extends 'Admin/base.html.twig' %}

", "Admin/Workshop/workshop.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/workshop.html.twig");
    }
}
