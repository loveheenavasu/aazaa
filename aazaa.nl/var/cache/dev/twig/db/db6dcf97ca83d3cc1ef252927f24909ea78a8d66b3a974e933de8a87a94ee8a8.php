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

/* Admin/Background/index.html.twig */
class __TwigTemplate_7a4d2e2a264cdb8ad62d0042afdcb1443d9a613bc82808ce23a74510797ae874 extends \Twig\Template
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
        // line 24
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Background/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Background/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Background/index.html.twig", 24);
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
            <h1>Change Background</h1>
        </div>

        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_background_index");
        echo "\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"300\" height=\"300\">
                    <label for=\"image\">Achtergrond afbeelding</label>
                    <input type=\"file\" name=\"image\" accept=\"image/png,image/x-png,image/gif,image/jpeg,image/jpg\">
                </div>

                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_background_index");
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
        return "Admin/Background/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  82 => 11,  77 => 9,  68 => 2,  58 => 1,  35 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Change Background</h1>
        </div>

        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_background_index') }}\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <img src=\"{{ background.name }}\" class=\"img-responsive\" width=\"300\" height=\"300\">
                    <label for=\"image\">Achtergrond afbeelding</label>
                    <input type=\"file\" name=\"image\" accept=\"image/png,image/x-png,image/gif,image/jpeg,image/jpg\">
                </div>

                <a href=\"{{ path('admin_background_index') }}\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>
{% endblock %}


{% extends 'Admin/base.html.twig' %}

", "Admin/Background/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Background/index.html.twig");
    }
}
