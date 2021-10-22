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

/* Admin/User/index.html.twig */
class __TwigTemplate_4683166e83f032b7bdf837a4f83490acf3e3aefec3d86b1a8ff014a505fc79b4 extends \Twig\Template
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
        // line 47
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/User/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/User/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/User/index.html.twig", 47);
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
            <h1>Gebruikers</h1>
        </div>
        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()), "isSorted", [0 => "u.id"], "method", false, false, false, 10)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()), "Id", "u.id");
        echo "</th>
                    <th";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "isSorted", [0 => "u.email"], "method", false, false, false, 11)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "E-mail", "u.email");
        echo "</th>
                    <th";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 12, $this->source); })()), "isSorted", [0 => "u.firstname"], "method", false, false, false, 12)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 12, $this->source); })()), "Voornaam", "u.firstname");
        echo "</th>
                    <th";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 13, $this->source); })()), "isSorted", [0 => "u.lastname"], "method", false, false, false, 13)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 13, $this->source); })()), "Achternaam", "u.lastname");
        echo "</th>
                    <th";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "isSorted", [0 => "u.subscriptionActive"], "method", false, false, false, 14)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "lidmaatschap", "u.subscriptionActive");
        echo "</th>
                    <th";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "isSorted", [0 => "u.subscriptionActiveTillDate"], "method", false, false, false, 15)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "Geldig tot", "u.subscriptionActiveTillDate");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 25)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActiveTillDate", [], "any", false, false, false, 26)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActiveTillDate", [], "any", false, false, false, 26), "d-m-Y H:i:s"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>
                            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                <a class=\"btn btn-danger\" onclick='return confirm(\"Weet je het zeker?\")' href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_disable", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\"></i> Uitschakelen</a>
                            ";
            } else {
                // line 31
                echo "                                <a class=\"btn btn-success\" onclick='return confirm(\"Weet je het zeker?\")' href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_enable", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\"><i class=\"fas fa-check\"></i> Inschakelen</a>
                            ";
            }
            // line 33
            echo "                            <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i> Bekijken</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 40, $this->source); })()));
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
        return "Admin/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  194 => 37,  183 => 33,  177 => 31,  171 => 29,  169 => 28,  160 => 26,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  133 => 20,  129 => 19,  118 => 15,  110 => 14,  102 => 13,  94 => 12,  86 => 11,  78 => 10,  68 => 2,  58 => 1,  35 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Gebruikers</h1>
        </div>
        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th{% if pagination.isSorted('u.id') %} class=\"sorted\"{% endif %} >{{ knp_pagination_sortable(pagination, 'Id', 'u.id') }}</th>
                    <th{% if pagination.isSorted('u.email') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'E-mail', 'u.email') }}</th>
                    <th{% if pagination.isSorted('u.firstname') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Voornaam', 'u.firstname') }}</th>
                    <th{% if pagination.isSorted('u.lastname') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Achternaam', 'u.lastname') }}</th>
                    <th{% if pagination.isSorted('u.subscriptionActive') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'lidmaatschap', 'u.subscriptionActive') }}</th>
                    <th{% if pagination.isSorted('u.subscriptionActiveTillDate') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Geldig tot', 'u.subscriptionActiveTillDate') }}</th>
                    <th>#</th>
                </tr>

                {% for user in pagination %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.firstname }}</td>
                        <td>{{ user.lastname }}</td>
                        <td>{% if user.subscriptionActive %}Ja{% else %}Nee{% endif %}</td>
                        <td>{% if user.subscriptionActiveTillDate %}{{ user.subscriptionActiveTillDate | date('d-m-Y H:i:s') }}{% else %}-{% endif %}</td>
                        <td>
                            {% if user.enabled %}
                                <a class=\"btn btn-danger\" onclick='return confirm(\"Weet je het zeker?\")' href=\"{{ path('admin_user_disable', { 'user': user.id }) }}\"><i class=\"fas fa-trash-alt\"></i> Uitschakelen</a>
                            {% else %}
                                <a class=\"btn btn-success\" onclick='return confirm(\"Weet je het zeker?\")' href=\"{{ path('admin_user_enable', { 'user': user.id }) }}\"><i class=\"fas fa-check\"></i> Inschakelen</a>
                            {% endif %}
                            <a class=\"btn btn-warning\" href=\"{{ path('admin_user_detail', { 'user': user.id }) }}\"><i class=\"fas fa-eye\"></i> Bekijken</a>
                        </td>
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

", "Admin/User/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/User/index.html.twig");
    }
}
