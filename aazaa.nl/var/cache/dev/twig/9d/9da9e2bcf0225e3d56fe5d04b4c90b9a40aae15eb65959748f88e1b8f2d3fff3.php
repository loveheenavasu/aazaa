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

/* Blocks/shareButtons.html.twig */
class __TwigTemplate_b633c80d2ecfeaf4d80b17d6d64f4b0f3b776b0a92224e9502dab326a17832ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/shareButtons.html.twig"));

        // line 1
        if (((isset($context["menuItems"]) || array_key_exists("menuItems", $context)) &&  !twig_test_empty((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"row\" id=\"templatesharebutton\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                // line 4
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["menuItem"], "viewPosition", [], "any", false, false, false, 4) == "Pagina_menu") && twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 4))) {
                    // line 5
                    echo "                <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
                    ";
                    // line 6
                    if ((twig_get_attribute($this->env, $this->source, $context["menuItem"], "alias", [], "any", false, false, false, 6) == "shareVideoModel")) {
                        // line 7
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
                            // line 8
                            echo "                            ";
                            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 8)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 8, $this->source); })()), "vimeoId", [], "any", false, false, false, 8)))) {
                                // line 9
                                echo "                                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#shareVideoModel\">
                                    <img src=\"";
                                // line 10
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 10), "html", null, true);
                                echo "\" class=\"img-responsive\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 10), "html", null, true);
                                echo "\">
                                </div>
                            ";
                            } else {
                                // line 13
                                echo "                                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#sharePageModel\">
                                    <img src=\"";
                                // line 14
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 14), "html", null, true);
                                echo "\" class=\"img-responsive\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 14), "html", null, true);
                                echo "\">
                                </div>
                            ";
                            }
                            // line 17
                            echo "                        ";
                        } else {
                            // line 18
                            echo "                            <a href=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
                            echo "\">
                                <img src=\"";
                            // line 19
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 19), "html", null, true);
                            echo "\" class=\"img-responsive\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 19), "html", null, true);
                            echo "\">
                            </a>
                        ";
                        }
                        // line 22
                        echo "                    ";
                    } else {
                        // line 23
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, $context["menuItem"], "alias", [], "any", false, false, false, 23)]), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 24), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 24), "html", null, true);
                        echo "\">
                        </a>
                    ";
                    }
                    // line 27
                    echo "                </div>        
            ";
                }
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/shareButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 30,  124 => 29,  120 => 27,  112 => 24,  107 => 23,  104 => 22,  96 => 19,  91 => 18,  88 => 17,  80 => 14,  77 => 13,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if menuItems is defined and menuItems is not empty %}
    <div class=\"row\" id=\"templatesharebutton\">
        {% for menuItem in menuItems %}
            {% if menuItem.viewPosition == 'Pagina_menu' and menuItem.image %}
                <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-bottom: 15px\">
                    {% if menuItem.alias == 'shareVideoModel' %}
                        {% if app.user %}
                            {% if pageContent is defined and pageContent.vimeoId is defined and pageContent.vimeoId is not empty %}
                                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#shareVideoModel\">
                                    <img src=\"{{ menuItem.image }}\" class=\"img-responsive\" alt=\"{{ menuItem.name }}\">
                                </div>
                            {% else %}
                                <div style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#sharePageModel\">
                                    <img src=\"{{ menuItem.image }}\" class=\"img-responsive\" alt=\"{{ menuItem.name }}\">
                                </div>
                            {% endif %}
                        {% else %}
                            <a href=\"{{ path('account_index') }}\">
                                <img src=\"{{ menuItem.image }}\" class=\"img-responsive\" alt=\"{{ menuItem.name }}\">
                            </a>
                        {% endif %}
                    {% else %}
                        <a href=\"{{ path('page_loader', {'slug': menuItem.alias}) }}\">
                            <img src=\"{{ menuItem.image }}\" class=\"img-responsive\" alt=\"{{ menuItem.name }}\">
                        </a>
                    {% endif %}
                </div>        
            {% endif %}
        {% endfor %}
    </div>
{% endif %}", "Blocks/shareButtons.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons.html.twig");
    }
}
