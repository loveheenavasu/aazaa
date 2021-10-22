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

/* Workshop/list.html.twig */
class __TwigTemplate_6c6d255589eb17ba10c8648b80fdfbe650206f18a90d47fd435c2504945821fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metaTitle' => [$this, 'block_metaTitle'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 51
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/list.html.twig"));

        $this->parent = $this->loadTemplate("Base/base.html.twig", "Workshop/list.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 1, $this->source); })()), "metaTitle", [], "any", false, false, false, 1), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 2, $this->source); })()), "metaDescription", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container base\">
        <div class=\"block dark\">
            ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 9, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
                // line 10
                echo "                    <div class=\"cursus-container\">
                        <div class=\"row cursus-container-header\">
                            <div class=\"col-xs-6\">
                                ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "title", [], "any", false, false, false, 13), "html", null, true);
                echo " <small>(";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "type", [], "any", false, false, false, 13)), "html", null, true);
                echo ")</small>
                            </div>
                            <div class=\"col-xs-2 cursus-container-location-pre hidden-xs\">
                                op locatie:
                            </div>
                            <div class=\"col-xs-6 col-md-4 cursus-container-location\" ";
                // line 18
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 18), "color", [], "any", false, false, false, 18))) {
                    echo "style=\"background-color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 18), "color", [], "any", false, false, false, 18), "html", null, true);
                    echo "\"";
                }
                echo ">
                                ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "descriptionShort", [], "any", false, false, false, 24), "html", null, true);
                echo "<br>
                                Op ";
                // line 25
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "startDatetime", [], "any", false, false, false, 25), "full", "none"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "startDatetime", [], "any", false, false, false, 25), "H:i"), "html", null, true);
                echo "u tot
                                ";
                // line 26
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "startDatetime", [], "any", false, false, false, 26), "Ymd") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "endDatetime", [], "any", false, false, false, 26), "Ymd"))) {
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "endDatetime", [], "any", false, false, false, 26), "full", "none"), "html", null, true);
                    echo " ";
                }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "endDatetime", [], "any", false, false, false, 26), "H:i"), "html", null, true);
                echo "u.<br>
                                Kosten: € ";
                // line 27
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "price", [], "any", false, false, false, 27), 2, ",", "."), "html", null, true);
                echo " / € ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["workshop"], "price", [], "any", false, false, false, 27) * 0.75), 2, ",", "."), "html", null, true);
                echo " / € ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["workshop"], "price", [], "any", false, false, false, 27) * 0.5), 2, ",", "."), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 cursus-container-button\">
                                <a class=\"btn btn-aazaa\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshops_cursus_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["workshop"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Meer info</a>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        } else {
            // line 38
            echo "                Momenteel geen Cursussen gepland
                <hr>
            ";
        }
        // line 41
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41);
        echo "
        </div>
    </div>
    <div class=\"container\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 47
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Workshop/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 47,  230 => 45,  222 => 41,  217 => 38,  214 => 37,  195 => 32,  183 => 27,  175 => 26,  169 => 25,  165 => 24,  157 => 19,  149 => 18,  137 => 13,  132 => 10,  114 => 9,  112 => 8,  108 => 6,  98 => 5,  79 => 2,  60 => 1,  37 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaTitle %}{{ pageContent.metaTitle }}{% endblock %}
{% block description %}{{ pageContent.metaDescription }}{% endblock %}


{% block content %}
    <div class=\"container base\">
        <div class=\"block dark\">
            {% if workshops | length > 0 %}
                {% for workshop in workshops %}
                    <div class=\"cursus-container\">
                        <div class=\"row cursus-container-header\">
                            <div class=\"col-xs-6\">
                                {{ loop.index }}. {{ workshop.title }} <small>({{ workshop.type | capitalize }})</small>
                            </div>
                            <div class=\"col-xs-2 cursus-container-location-pre hidden-xs\">
                                op locatie:
                            </div>
                            <div class=\"col-xs-6 col-md-4 cursus-container-location\" {% if workshop.location.color is not empty %}style=\"background-color: {{ workshop.location.color }}\"{% endif %}>
                                {{ workshop.location.name }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                {{ workshop.descriptionShort }}<br>
                                Op {{ workshop.startDatetime | localizeddate('full', 'none') }} {{ workshop.startDatetime|date('H:i') }}u tot
                                {% if workshop.startDatetime| date('Ymd') != workshop.endDatetime | date('Ymd') %}{{ workshop.endDatetime | localizeddate('full', 'none') }} {% endif %}{{ workshop.endDatetime | date('H:i') }}u.<br>
                                Kosten: € {{ workshop.price |number_format(2, ',', '.') }} / € {{ (workshop.price * 0.75) | number_format(2, ',', '.') }} / € {{ (workshop.price * 0.5) | number_format(2, ',', '.') }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 cursus-container-button\">
                                <a class=\"btn btn-aazaa\" href=\"{{ path('workshops_cursus_detail', {'slug': workshop.slug }) }}\">Meer info</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                Momenteel geen Cursussen gepland
                <hr>
            {% endif %}
            {{ pageContent.content | raw }}
        </div>
    </div>
    <div class=\"container\">
        {{ render(controller(
            'App\\\\Controller\\\\DefaultController::navigationMiddle'
        )) }}
    </div>
{% endblock %}

{% extends 'Base/base.html.twig' %}", "Workshop/list.html.twig", "/home/deb116267/domains/aazaa.org/templates/Workshop/list.html.twig");
    }
}
