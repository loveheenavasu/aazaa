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

/* Admin/Video/index.html.twig */
class __TwigTemplate_6a8f302e69950667878d8e7ae69cc3f495880d25164e8f048a13a4c5f54ab374 extends \Twig\Template
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
        // line 38
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Video/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Video/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Video/index.html.twig", 38);
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
            <h1>Videochat</h1>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th>Datum</th>
                    <th>Naam</th>
                    <th>#</th>
                </tr>

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userWorkshops"]) || array_key_exists("userWorkshops", $context) ? $context["userWorkshops"] : (function () { throw new RuntimeError('Variable "userWorkshops" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uw"]) {
            // line 17
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["uw"], "paid", [], "any", false, false, false, 17)) {
                // line 18
                echo "                        <tr>
                            <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 19), "startDatetime", [], "any", false, false, false, 19), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 22
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 22), "videoChatSessionId", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "                                    <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_create", ["workshop" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\"><i class=\"fas fa-eye\"></i> Start sessie</a>
                                ";
                } else {
                    // line 25
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_open", ["workshop" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\"><i class=\"fas fa-eye\"></i> Open sessie</a>
                                ";
                }
                // line 27
                echo "                            </td>

                        </tr>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Video/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  123 => 31,  117 => 27,  111 => 25,  105 => 23,  103 => 22,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  84 => 16,  68 => 2,  58 => 1,  35 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Videochat</h1>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th>Datum</th>
                    <th>Naam</th>
                    <th>#</th>
                </tr>

                {% for uw in userWorkshops %}
                    {% if uw.paid %}
                        <tr>
                            <td>{{ uw.workshop.startDatetime | date('d-m-Y H:i') }}</td>
                            <td>{{ uw.user.name }}</td>
                            <td>
                                {% if uw.workshop.videoChatSessionId is empty %}
                                    <a class=\"btn btn-warning\" href=\"{{ path('video_chat_create', { 'workshop': uw.workshop.id }) }}\"><i class=\"fas fa-eye\"></i> Start sessie</a>
                                {% else %}
                                    <a class=\"btn btn-success\" href=\"{{ path('video_chat_open', { 'workshop': uw.workshop.id }) }}\"><i class=\"fas fa-eye\"></i> Open sessie</a>
                                {% endif %}
                            </td>

                        </tr>
                    {% endif %}
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}


{% extends 'Admin/base.html.twig' %}

", "Admin/Video/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Video/index.html.twig");
    }
}
