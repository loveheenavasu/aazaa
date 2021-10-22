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
class __TwigTemplate_7297996b2c2381a156d2bbed91cfd73e91a1313d3e33e6bd89c464a19ef65488 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/location.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/location.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/location.html.twig", 61);
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
            <h1>Locatie</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_edit");
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 8, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 11
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 11, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"street\">Straat</label>
                    <input class=\"form-control\" id=\"street\" name=\"street\" value=\"";
        // line 15
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 15, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 15, $this->source); })()), "street", [], "any", false, false, false, 15), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"houseNumber\">Huisnummer</label>
                    <input class=\"form-control\" id=\"houseNumber\" name=\"houseNumber\" value=\"";
        // line 19
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 19, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 19, $this->source); })()), "houseNumber", [], "any", false, false, false, 19), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"zipcode\">Postcode</label>
                    <input class=\"form-control\" id=\"zipcode\" name=\"zipcode\" value=\"";
        // line 23
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 23, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 23, $this->source); })()), "zipcode", [], "any", false, false, false, 23), "html", null, true);
        }
        echo "\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"city\">Plaats</label>
                    <input class=\"form-control\" id=\"city\" name=\"city\" value=\"";
        // line 27
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 27, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 27, $this->source); })()), "city", [], "any", false, false, false, 27), "html", null, true);
        }
        echo "\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Omschrijving</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\">";
        // line 32
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 32, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        }
        echo "</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prijs</label>
                    <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 37
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 37, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), "html", null, true);
        }
        echo "\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"color\">Kleur</label>
                    <input type=\"color\" class=\"form-control\" id=\"color\" name=\"color\" value=\"";
        // line 42
        if (((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 42, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 42, $this->source); })()), "color", [], "any", false, false, false, 42), "html", null, true);
        }
        echo "\" >
                </div>


                <div class=\"input-group\" style=\"margin-bottom: 20px\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"is_video\" name=\"is_video\" value=\"1\" ";
        // line 48
        if ((((isset($context["location"]) || array_key_exists("location", $context)) &&  !twig_test_empty((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 48, $this->source); })()))) && twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 48, $this->source); })()), "isVideo", [], "any", false, false, false, 48))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  176 => 55,  164 => 48,  153 => 42,  143 => 37,  133 => 32,  123 => 27,  114 => 23,  105 => 19,  96 => 15,  87 => 11,  79 => 8,  75 => 7,  68 => 2,  58 => 1,  35 => 61,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Locatie</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_workshop_location_edit') }}\">
                <input type=\"hidden\" name=\"id\" value=\"{% if location is defined and location is not empty %}{{ location.id }}{% endif %}\">
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input class=\"form-control\" id=\"name\" name=\"name\" value=\"{% if location is defined and location is not empty %}{{ location.name }}{% endif %}\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"street\">Straat</label>
                    <input class=\"form-control\" id=\"street\" name=\"street\" value=\"{% if location is defined and location is not empty %}{{ location.street }}{% endif %}\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"houseNumber\">Huisnummer</label>
                    <input class=\"form-control\" id=\"houseNumber\" name=\"houseNumber\" value=\"{% if location is defined and location is not empty %}{{ location.houseNumber }}{% endif %}\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"zipcode\">Postcode</label>
                    <input class=\"form-control\" id=\"zipcode\" name=\"zipcode\" value=\"{% if location is defined and location is not empty %}{{ location.zipcode }}{% endif %}\" >
                </div>
                <div class=\"form-group\">
                    <label for=\"city\">Plaats</label>
                    <input class=\"form-control\" id=\"city\" name=\"city\" value=\"{% if location is defined and location is not empty %}{{ location.city }}{% endif %}\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"description\">Omschrijving</label>
                    <textarea class=\"form-control\" id=\"description\" name=\"description\">{% if location is defined and location is not empty %}{{ location.description }}{% endif %}</textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prijs</label>
                    <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{% if location is defined and location is not empty %}{{ location.price }}{% endif %}\" >
                </div>

                <div class=\"form-group\">
                    <label for=\"color\">Kleur</label>
                    <input type=\"color\" class=\"form-control\" id=\"color\" name=\"color\" value=\"{% if location is defined and location is not empty %}{{ location.color }}{% endif %}\" >
                </div>


                <div class=\"input-group\" style=\"margin-bottom: 20px\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"is_video\" name=\"is_video\" value=\"1\" {% if location is defined and location is not empty and location.isVideo %}checked{% endif %}/>
                    </span>

                    <label class=\"form-control\" for=\"is_video\">Is een video locatie</label>
                </div>


                <a href=\"{{ path('admin_workshop_location_index') }}\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
{% endblock %}
{% extends 'Admin/base.html.twig' %}

", "Admin/Workshop/location.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/location.html.twig");
    }
}
