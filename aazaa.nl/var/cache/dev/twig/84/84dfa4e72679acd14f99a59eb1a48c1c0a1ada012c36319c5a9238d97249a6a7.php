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

/* Blocks/videoPreview.html.twig */
class __TwigTemplate_564dca68f4a0d670a3a2560c1eec9da3a02b4023a894f1f2c0e5229bd8cb30bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/videoPreview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/videoPreview.html.twig"));

        // line 1
        if (((isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context)) &&  !twig_test_empty((isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 2, $this->source); })()), "path", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\" class=\"block embed-responsive video-container\"
       style=\"
       ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 4, $this->source); })()), "paid", [], "any", false, false, false, 4)) {
                // line 5
                echo "           ";
                if ((isset($context["baseFilter"]) || array_key_exists("baseFilter", $context))) {
                    // line 6
                    echo "                   filter: ";
                    echo twig_escape_filter($this->env, (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 6, $this->source); })()), "html", null, true);
                    echo "
           ";
                }
                // line 8
                echo "       ";
            } else {
                // line 9
                echo "           ";
                if ((isset($context["paidFilter"]) || array_key_exists("paidFilter", $context))) {
                    // line 10
                    echo "                   filter: ";
                    echo twig_escape_filter($this->env, (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 10, $this->source); })()), "html", null, true);
                    echo "
           ";
                }
                // line 12
                echo "       ";
            }
            // line 13
            echo "    \">
        <div class=\"video-bottom\">
            <span class=\"text top\">";
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 15, $this->source); })()), "previewTop", [], "any", false, false, false, 15)) > 1)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 15, $this->source); })()), "previewTop", [], "any", false, false, false, 15), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 15, $this->source); })()), "category", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            }
            echo "</span>

            <div class=\"image-container\">
                <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-91px-100px.png"), "html", null, true);
            echo "\"/>
            </div>
            <span class=\"text bottom\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 20, $this->source); })()), "previewBottom", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>

            <div class=\"video-top\">
                <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong><br>
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentLinked"]) || array_key_exists("pageContentLinked", $context) ? $context["pageContentLinked"] : (function () { throw new RuntimeError('Variable "pageContentLinked" does not exist.', 24, $this->source); })()), "shortDescription", [], "any", false, false, false, 24), "html", null, true);
            echo "
            </div>

        </div>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/videoPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  102 => 23,  96 => 20,  91 => 18,  81 => 15,  77 => 13,  74 => 12,  68 => 10,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageContentLinked is defined and pageContentLinked is not empty %}
    <a href=\"{{ path('page_loader', {'slug': pageContentLinked.path }) }}\" class=\"block embed-responsive video-container\"
       style=\"
       {% if pageContentLinked.paid %}
           {% if baseFilter is defined %}
                   filter: {{ baseFilter }}
           {% endif %}
       {% else %}
           {% if paidFilter is defined %}
                   filter: {{ paidFilter }}
           {% endif %}
       {% endif %}
    \">
        <div class=\"video-bottom\">
            <span class=\"text top\">{% if pageContentLinked.previewTop | length >1 %}{{ pageContentLinked.previewTop }}{% else %}{{ pageContentLinked.category.name }}{% endif %}</span>

            <div class=\"image-container\">
                <img src=\"{{ asset('images/logo/logo-91px-100px.png') }}\"/>
            </div>
            <span class=\"text bottom\">{{ pageContentLinked.previewBottom }}</span>

            <div class=\"video-top\">
                <strong>{{ pageContentLinked.category.name }}</strong><br>
                {{ pageContentLinked.shortDescription }}
            </div>

        </div>
    </a>
{% endif %}", "Blocks/videoPreview.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/videoPreview.html.twig");
    }
}
