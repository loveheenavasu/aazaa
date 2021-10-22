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

/* Admin/Page/pageIndex.html.twig */
class __TwigTemplate_040b85d2adb7d89964a86eba744d6602b9382efaefd6e4fbec09f0dc58df941d extends \Twig\Template
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
        // line 74
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/pageIndex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/pageIndex.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/pageIndex.html.twig", 74);
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
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Pagina's</h1>
        </div>

        <div class=\"col-xs-6\">
            <h4>Filteren</h4>
            <form method=\"get\" class=\"form-inline\">
                <div class=\"form-group\">
                    <label for=\"cat\">Categorie:</label>
                    <select title=\"cat\" class=\"form-control\" name=\"categorie\">
                        <option value=\"null\">Alles</option>
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorylist"]) || array_key_exists("categorylist", $context) ? $context["categorylist"] : (function () { throw new RuntimeError('Variable "categorylist" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 16
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", [0 => "categorie"], "method", false, false, false, 16) == twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </select>
                </div><br>
                ";
        // line 21
        echo "                ";
        // line 22
        echo "                    ";
        // line 23
        echo "                    ";
        // line 24
        echo "                        ";
        // line 25
        echo "                            ";
        // line 26
        echo "                        ";
        // line 27
        echo "                    ";
        // line 28
        echo "                ";
        // line 29
        echo "                <button type=\"submit\" class=\"btn btn-default\">Filteren</button>
                <hr>
            </form>
        </div>
        <div class=\"col-xs-6\">
            <a class=\"pull-right btn btn-success\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuwe Template pagina</a>
            ";
        // line 36
        echo "        </div>


        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), "isSorted", [0 => "p.id"], "method", false, false, false, 42)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), "Id", "p.id");
        echo "</th>
                    <th";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), "isSorted", [0 => "p.title"], "method", false, false, false, 43)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), "Title", "p.title");
        echo "</th>
                    <th";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), "isSorted", [0 => "pc.name"], "method", false, false, false, 44)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), "Categorie", "pc.name");
        echo "</th>
                    <th";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()), "isSorted", [0 => "p.created"], "method", false, false, false, 45)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()), "Gemaakt op", "p.created");
        echo "</th>
                    <th";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()), "isSorted", [0 => "p.updated"], "method", false, false, false, 46)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()), "Bewerkt op", "p.updated");
        echo "</th>
                    <th";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()), "isSorted", [0 => "p.active"], "method", false, false, false, 47)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()), "Online", "p.active");
        echo "</th>
                    <th";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })()), "isSorted", [0 => "p.paid"], "method", false, false, false, 48)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })()), "Betaald", "p.paid");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "                    <tr>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["page"], "category", [], "any", false, false, false, 56)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "category", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "created", [], "any", false, false, false, 57), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "updated", [], "any", false, false, false, 58), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 59)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td>";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["page"], "paid", [], "any", false, false, false, 60)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td><a class=\"btn btn-warning\" href=\"";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "template", [], "any", false, false, false, 61) == "content")) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit_content", ["pageContentId" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit", ["pageContentId" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            }
            echo "\"><i class=\"far fa-edit\"></i> Bewerken</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })()));
        echo "
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/pageIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 67,  258 => 64,  245 => 61,  237 => 60,  229 => 59,  225 => 58,  221 => 57,  215 => 56,  211 => 55,  207 => 54,  204 => 53,  200 => 52,  189 => 48,  181 => 47,  173 => 46,  165 => 45,  157 => 44,  149 => 43,  141 => 42,  133 => 36,  129 => 34,  122 => 29,  120 => 28,  118 => 27,  116 => 26,  114 => 25,  112 => 24,  110 => 23,  108 => 22,  106 => 21,  102 => 18,  87 => 16,  83 => 15,  68 => 2,  58 => 1,  35 => 74,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Pagina's</h1>
        </div>

        <div class=\"col-xs-6\">
            <h4>Filteren</h4>
            <form method=\"get\" class=\"form-inline\">
                <div class=\"form-group\">
                    <label for=\"cat\">Categorie:</label>
                    <select title=\"cat\" class=\"form-control\" name=\"categorie\">
                        <option value=\"null\">Alles</option>
                        {% for op in categorylist %}
                            <option value=\"{{ op.name }}\" {% if app.request.get('categorie') ==  op.name %} selected{% endif %}>{{ op.name }}</option>
                        {% endfor %}
                    </select>
                </div><br>
                {#{% set amountList = [10, 25, 50, 75, 100, 125, 150, 175, 200, 250, 300] %}#}
                {#<div class=\"form-group\">#}
                    {#<label for=\"cat\">Items per pagina:</label>#}
                    {#<select title=\"cat\" class=\"form-control\" name=\"aantal\">#}
                        {#{% for amount in amountList %}#}
                            {#<option value=\"{{ amount }}\" {% if app.request.get('aantal') == amount %} selected {% endif %}>{{ amount }}</option>#}
                        {#{% endfor %}#}
                    {#</select>#}
                {#</div>#}
                <button type=\"submit\" class=\"btn btn-default\">Filteren</button>
                <hr>
            </form>
        </div>
        <div class=\"col-xs-6\">
            <a class=\"pull-right btn btn-success\" href=\"{{ path('admin_page_edit') }}\"><i class=\"fa fa-plus\"></i> Nieuwe Template pagina</a>
            {#<a class=\"pull-right btn btn-danger\" href=\"{{ path('admin_page_edit_content') }}\"><i class=\"fa fa-plus\"></i> Nieuwe Content pagina</a> // staat uit. toekomst idee?#}
        </div>


        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th{% if pagination.isSorted('p.id') %} class=\"sorted\"{% endif %} >{{ knp_pagination_sortable(pagination, 'Id', 'p.id') }}</th>
                    <th{% if pagination.isSorted('p.title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'p.title') }}</th>
                    <th{% if pagination.isSorted('pc.name') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Categorie', 'pc.name') }}</th>
                    <th{% if pagination.isSorted('p.created') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Gemaakt op', 'p.created') }}</th>
                    <th{% if pagination.isSorted('p.updated') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Bewerkt op', 'p.updated') }}</th>
                    <th{% if pagination.isSorted('p.active') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Online', 'p.active') }}</th>
                    <th{% if pagination.isSorted('p.paid') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Betaald', 'p.paid') }}</th>
                    <th>#</th>
                </tr>

                {% for page in pagination %}
                    <tr>
                        <td>{{ page.id }}</td>
                        <td>{{ page.title }}</td>
                        <td>{% if page.category %}{{ page.category.name }}{% endif %}</td>
                        <td>{{ page.created | date('d-m-Y H:i:s') }}</td>
                        <td>{{ page.updated | date('d-m-Y H:i:s') }}</td>
                        <td>{% if page.active %}Ja{% else %}Nee{% endif %}</td>
                        <td>{% if page.paid %}Ja{% else %}Nee{% endif %}</td>
                        <td><a class=\"btn btn-warning\" href=\"{% if page.template == 'content' %}{{ path('admin_page_edit_content', { 'pageContentId': page.id }) }}{% else %}{{ path('admin_page_edit', { 'pageContentId': page.id }) }}{% endif %}\"><i class=\"far fa-edit\"></i> Bewerken</a></td>
                    </tr>
                {% endfor %}
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>


{% endblock %}
{% extends 'Admin/base.html.twig' %}

", "Admin/Page/pageIndex.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/pageIndex.html.twig");
    }
}
