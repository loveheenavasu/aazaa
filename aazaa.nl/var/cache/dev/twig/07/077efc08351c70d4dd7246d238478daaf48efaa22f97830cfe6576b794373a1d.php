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
class __TwigTemplate_8d466667fc163e697c9418a7b60f7cb7cdd6d641988e12b77182f81d8d718e41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Collector/editor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Collector/editor.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Collector/editor.html.twig", 28);
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
            <h1>Block / Instelling</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_edit");
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"key\">Sleutel</label>
                    <input class=\"form-control\" type=\"text\" id=\"key\" name=\"key\" value=\"";
        // line 11
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "key", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"value\">Waarde Lang</label>
                    <textarea class=\"form-control tinymce\" id=\"value\" name=\"value\" rows=\"5\">";
        // line 15
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "value", [], "any", false, false, false, 15), "html", null, true);
        }
        echo "</textarea>
                </div>
                <div class=\"form-group\">
                    <label for=\"valueInt\">Waarde Kort / getal</label>
                    <input class=\"form-control\" type=\"number\" id=\"valueInt\" name=\"valueInt\" value=\"";
        // line 19
        if (((isset($context["collector"]) || array_key_exists("collector", $context)) &&  !twig_test_empty((isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "valueInt", [], "any", false, false, false, 19), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  113 => 22,  105 => 19,  96 => 15,  87 => 11,  79 => 8,  75 => 7,  68 => 2,  58 => 1,  35 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Block / Instelling</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_collector_edit') }}\">
                <input type=\"hidden\" name=\"id\" value=\"{% if collector is defined and collector is not empty %}{{ collector.id }}{% endif %}\">
                <div class=\"form-group\">
                    <label for=\"key\">Sleutel</label>
                    <input class=\"form-control\" type=\"text\" id=\"key\" name=\"key\" value=\"{% if collector is defined and collector is not empty %}{{ collector.key }}{% endif %}\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"value\">Waarde Lang</label>
                    <textarea class=\"form-control tinymce\" id=\"value\" name=\"value\" rows=\"5\">{% if collector is defined and collector is not empty %}{{ collector.value }}{% endif %}</textarea>
                </div>
                <div class=\"form-group\">
                    <label for=\"valueInt\">Waarde Kort / getal</label>
                    <input class=\"form-control\" type=\"number\" id=\"valueInt\" name=\"valueInt\" value=\"{% if collector is defined and collector is not empty %}{{ collector.valueInt }}{% endif %}\">
                </div>
                <p>* let op, waarde kort, kan een valuta zijn. Deze dient dan met cent ingevoerd te worden 3 euro = 300 </p>
                <a href=\"{{ path('admin_collector_index') }}\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
{% endblock %}
{% extends 'Admin/base.html.twig' %}

", "Admin/Collector/editor.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Collector/editor.html.twig");
    }
}
