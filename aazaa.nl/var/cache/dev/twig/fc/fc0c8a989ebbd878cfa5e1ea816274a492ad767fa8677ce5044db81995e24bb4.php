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

/* Admin/Page/categoryIndex.html.twig */
class __TwigTemplate_fdd755b92488c38b24124fd35455f933d71c570986e88afeb321364418cc8b84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 104
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/categoryIndex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/categoryIndex.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/categoryIndex.html.twig", 104);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Categorieën</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12 admin-menu\" >
            <h2>Menu</h2>
            <div class=\"row\">
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Boven</h3>
                    <ul id=\"Boven\" class=\"sort_these\">
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 21))) {
                // line 22
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 22) == "Boven")) {
                    // line 23
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 28
                echo "                            ";
            }
            // line 29
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </ul>

                    <h3>Hoofdmenu</h3>
                    <ul id=\"Hoofdmenu\" class=\"sort_these\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 35
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 35))) {
                // line 36
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 36) == "Hoofdmenu")) {
                    // line 37
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 42
                echo "                            ";
            }
            // line 43
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </ul>
                </div>
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Pagina Menu</h3>
                    <ul id=\"Pagina_menu\" class=\"sort_these\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 50
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 50))) {
                // line 51
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 51) == "Pagina_menu")) {
                    // line 52
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 52), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 53), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 57
                echo "                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </ul>
                    <h3>Niet in het menu</h3>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 62
            echo "                        ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 62))) {
                // line 63
                echo "                            <li class=\"ui-state-default\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
                                ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "
                                <a class=\"btn btn-warning pull-right\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                            </li>
                        ";
            }
            // line 68
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 76
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$(function() {
            var index;
            \$( \".sort_these\" ).sortable({
                placeholder: \"ui-state-highlight\",
                start: function (event, ui) {
                    var start_pos = ui.item.index();
                    ui.item.data('start_pos', start_pos);
                },
                change: function (event, ui) {
                    index = ui.placeholder.index();
                },
                stop: function (event, ui) {
                    var sortItem = \$(ui.item);
                    \$.post(Routing.generate('admin_page_category_sort'),{
                        id: sortItem.attr('rel'),
                        position: index,
                        viewPosition: sortItem.parent().attr('id')
                    },
                    function(data,status){
                    });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/categoryIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 76,  272 => 75,  258 => 69,  252 => 68,  246 => 65,  242 => 64,  237 => 63,  234 => 62,  230 => 61,  226 => 59,  220 => 58,  217 => 57,  211 => 54,  207 => 53,  202 => 52,  199 => 51,  196 => 50,  192 => 49,  185 => 44,  179 => 43,  176 => 42,  170 => 39,  166 => 38,  161 => 37,  158 => 36,  155 => 35,  151 => 34,  145 => 30,  139 => 29,  136 => 28,  130 => 25,  126 => 24,  121 => 23,  118 => 22,  115 => 21,  111 => 20,  99 => 11,  91 => 5,  81 => 4,  70 => 2,  60 => 1,  37 => 104,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% endblock %}
{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Categorieën</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"{{ path('admin_page_category_edit') }}\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12 admin-menu\" >
            <h2>Menu</h2>
            <div class=\"row\">
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Boven</h3>
                    <ul id=\"Boven\" class=\"sort_these\">
                        {% for cat in category %}
                            {% if cat.viewPosition is not empty %}
                                {% if cat.viewPosition == 'Boven' %}
                                    <li class=\"ui-state-default\" rel=\"{{ cat.id }}\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>{{ cat.name }}
                                        <a class=\"btn btn-warning pull-right\" href=\"{{ path('admin_page_category_edit', { 'categoryId': cat.id }) }}\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <h3>Hoofdmenu</h3>
                    <ul id=\"Hoofdmenu\" class=\"sort_these\">
                        {% for cat in category %}
                            {% if cat.viewPosition is not empty %}
                                {% if cat.viewPosition == 'Hoofdmenu' %}
                                    <li class=\"ui-state-default\" rel=\"{{ cat.id }}\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>{{ cat.name }}
                                        <a class=\"btn btn-warning pull-right\" href=\"{{ path('admin_page_category_edit', { 'categoryId': cat.id }) }}\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Pagina Menu</h3>
                    <ul id=\"Pagina_menu\" class=\"sort_these\">
                        {% for cat in category %}
                            {% if cat.viewPosition is not empty %}
                                {% if cat.viewPosition == 'Pagina_menu' %}
                                    <li class=\"ui-state-default\" rel=\"{{ cat.id }}\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>{{ cat.name }}
                                        <a class=\"btn btn-warning pull-right\" href=\"{{ path('admin_page_category_edit', { 'categoryId': cat.id }) }}\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </ul>
                    <h3>Niet in het menu</h3>
                    {% for cat in category %}
                        {% if cat.viewPosition is empty %}
                            <li class=\"ui-state-default\" rel=\"{{ cat.id }}\">
                                {{ cat.name }}
                                <a class=\"btn btn-warning pull-right\" href=\"{{ path('admin_page_category_edit', { 'categoryId': cat.id }) }}\"><i class=\"far fa-edit\"></i> Bewerken</a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascript_footer %}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$(function() {
            var index;
            \$( \".sort_these\" ).sortable({
                placeholder: \"ui-state-highlight\",
                start: function (event, ui) {
                    var start_pos = ui.item.index();
                    ui.item.data('start_pos', start_pos);
                },
                change: function (event, ui) {
                    index = ui.placeholder.index();
                },
                stop: function (event, ui) {
                    var sortItem = \$(ui.item);
                    \$.post(Routing.generate('admin_page_category_sort'),{
                        id: sortItem.attr('rel'),
                        position: index,
                        viewPosition: sortItem.parent().attr('id')
                    },
                    function(data,status){
                    });
                }
            });
        });
    </script>
{% endblock %}

{% extends 'Admin/base.html.twig' %}

", "Admin/Page/categoryIndex.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/categoryIndex.html.twig");
    }
}
