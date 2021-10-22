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

/* Admin/index.html.twig */
class __TwigTemplate_1a7fc1d9e4ea1f057e84134f6893dbdfef9af6d8726d7193b2209ebba275b5da extends \Twig\Template
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
        // line 57
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/index.html.twig", 57);
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
    <div class=\"col-xs-12 col-sm-12 col-md-6\">
       <div class=\"panel panel-default\">
           <div class=\"panel-heading\">
               <strong>10 Nieuwste gebruikers</strong>
           </div>
           <div class=\"panel-body\">
               <table class=\"table table-responsive\">
                   <tr>
                       <th>Id</th>
                       <th>Datum</th>
                       <th>Gebruikersnaam</th>
                       <th>Voornaam</th>
                       <th>Achternaam</th>
                   </tr>
                   ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newUsers"]) || array_key_exists("newUsers", $context) ? $context["newUsers"] : (function () { throw new RuntimeError('Variable "newUsers" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                       <tr>
                           <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                           <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "created", [], "any", false, false, false, 20), "d-m H:i"), "html", null, true);
            echo "</td>
                           <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                           <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                           <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                       </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "               </table>
           </div>
       </div>
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>10 Laatst bekeken video's</strong>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-responsive\">
                    <tr>
                        <th>Datum</th>
                        <th>Title</th>
                        <th>Gebruiker</th>
                    </tr>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastViewed"]) || array_key_exists("lastViewed", $context) ? $context["lastViewed"] : (function () { throw new RuntimeError('Variable "lastViewed" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["watchLog"]) {
            // line 44
            echo "                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "updated", [], "any", false, false, false, 45), "d-m H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), 0, 20), "html", null, true);
            echo "...</td>
                            <td>";
            // line 47
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "firstName", [], "any", false, false, false, 47)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "lastName", [], "any", false, false, false, 47)))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "firstName", [], "any", false, false, false, 47), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "lastName", [], "any", false, false, false, 47), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
            }
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['watchLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </table>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 50,  151 => 47,  147 => 46,  143 => 45,  140 => 44,  136 => 43,  117 => 26,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  89 => 18,  85 => 17,  68 => 2,  58 => 1,  35 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"col-xs-12 col-sm-12 col-md-6\">
       <div class=\"panel panel-default\">
           <div class=\"panel-heading\">
               <strong>10 Nieuwste gebruikers</strong>
           </div>
           <div class=\"panel-body\">
               <table class=\"table table-responsive\">
                   <tr>
                       <th>Id</th>
                       <th>Datum</th>
                       <th>Gebruikersnaam</th>
                       <th>Voornaam</th>
                       <th>Achternaam</th>
                   </tr>
                   {% for user in newUsers %}
                       <tr>
                           <td>{{ user.id }}</td>
                           <td>{{ user.created | date('d-m H:i') }}</td>
                           <td>{{ user.username }}</td>
                           <td>{{ user.firstname }}</td>
                           <td>{{ user.lastname }}</td>
                       </tr>
                   {% endfor %}
               </table>
           </div>
       </div>
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>10 Laatst bekeken video's</strong>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-responsive\">
                    <tr>
                        <th>Datum</th>
                        <th>Title</th>
                        <th>Gebruiker</th>
                    </tr>
                    {% for watchLog in lastViewed %}
                        <tr>
                            <td>{{ watchLog.updated | date('d-m H:i') }}</td>
                            <td>{{ watchLog.pageContent.title |slice (0,20)}}...</td>
                            <td>{% if watchLog.user.firstName is not empty or watchLog.user.lastName is not empty %}{{ watchLog.user.firstName }} {{ watchLog.user.lastName }}{% else %}{{ watchLog.user.username }}{% endif %}</td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>


{% endblock %}
{% extends 'Admin/base.html.twig' %}", "Admin/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/index.html.twig");
    }
}
