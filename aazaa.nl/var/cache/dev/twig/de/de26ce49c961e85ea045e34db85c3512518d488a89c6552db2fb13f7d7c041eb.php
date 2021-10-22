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

/* Blocks/videoBlock.html.twig */
class __TwigTemplate_8c45d3694472ec930e337160f454fa38622e0f035c7db5748d539a0331705142 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/videoBlock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/videoBlock.html.twig"));

        // line 1
        if (((isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context)) && (isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context) ? $context["pageContentCategory"] : (function () { throw new RuntimeError('Variable "pageContentCategory" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context) ? $context["pageContentCategory"] : (function () { throw new RuntimeError('Variable "pageContentCategory" does not exist.', 2, $this->source); })()), "path", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\">
        <div class=\"block-square template-2 text-center template2-video\" style=\"background: none; padding: 0 10px;\">
            <h4>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 4, $this->source); })()), "category", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</h4>
            <span class=\"tag-line\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context) ? $context["pageContentCategory"] : (function () { throw new RuntimeError('Variable "pageContentCategory" does not exist.', 5, $this->source); })()), "previewTop", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
            <span class=\"tag-line\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContentCategory"]) || array_key_exists("pageContentCategory", $context) ? $context["pageContentCategory"] : (function () { throw new RuntimeError('Variable "pageContentCategory" does not exist.', 6, $this->source); })()), "previewBottom", [], "any", false, false, false, 6), "html", null, true);
            echo "</span>
            <div class=\"clearfix\"></div>
        </div>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/videoBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageContentCategory is defined and pageContentCategory  %}
    <a href=\"{{ path('page_loader', {'slug': pageContentCategory.path}) }}\">
        <div class=\"block-square template-2 text-center template2-video\" style=\"background: none; padding: 0 10px;\">
            <h4>{{ pageContent.category.name }}</h4>
            <span class=\"tag-line\">{{ pageContentCategory.previewTop }}</span>
            <span class=\"tag-line\">{{ pageContentCategory.previewBottom }}</span>
            <div class=\"clearfix\"></div>
        </div>
    </a>
{% endif %}", "Blocks/videoBlock.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/videoBlock.html.twig");
    }
}
