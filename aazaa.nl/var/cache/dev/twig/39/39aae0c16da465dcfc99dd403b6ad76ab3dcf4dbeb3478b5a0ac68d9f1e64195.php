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

/* Admin/Page/Blocks/pageContentRelationsSelect.html.twig */
class __TwigTemplate_06f2a030153ffc3acb9909f53c498647338d88e1f06ef00ec3f0f1ad48ad31b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/pageContentRelationsSelect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/pageContentRelationsSelect.html.twig"));

        // line 1
        if (((isset($context["position"]) || array_key_exists("position", $context)) && (isset($context["location"]) || array_key_exists("location", $context)))) {
            // line 2
            echo "    <div class=\"form-group\">
        <label for=\"cat\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</label>
        <select id=\"cat\" name=\"location[";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "]\" class=\"form-control\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "pageContents", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["pageContentOption"]) {
                    // line 8
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageContentOption"], "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "\"
                                ";
                    // line 9
                    if ( !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 9, $this->source); })()))) {
                        // line 10
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 10, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 10));
                        foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                            // line 11
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["relation"], "location", [], "any", false, false, false, 11) == (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 11, $this->source); })()))) {
                                // line 12
                                echo "                                            ";
                                if ((twig_get_attribute($this->env, $this->source, $context["relation"], "position", [], "any", false, false, false, 12) == (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 12, $this->source); })()))) {
                                    // line 13
                                    echo "                                                ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["relation"], "pageContentLinked", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, $context["pageContentOption"], "id", [], "any", false, false, false, 13))) {
                                        // line 14
                                        echo "                                                    selected
                                                ";
                                    }
                                    // line 16
                                    echo "                                            ";
                                }
                                // line 17
                                echo "                                        ";
                            }
                            // line 18
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        echo "                                ";
                    }
                    // line 20
                    echo "                            >
                            ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageContentOption"], "title", [], "any", false, false, false, 21), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </optgroup>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </select>
    </div>
";
        }
        // line 29
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/Blocks/pageContentRelationsSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  130 => 26,  123 => 24,  114 => 21,  111 => 20,  108 => 19,  102 => 18,  99 => 17,  96 => 16,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  78 => 10,  76 => 9,  71 => 8,  67 => 7,  62 => 6,  58 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if position is defined and location is defined %}
    <div class=\"form-group\">
        <label for=\"cat\">{{ location }}</label>
        <select id=\"cat\" name=\"location[{{ location }}][{{ position }}]\" class=\"form-control\">
            {% for category in categoryList %}
                <optgroup label=\"{{ category.name }}\">
                    {% for pageContentOption in category.pageContents %}
                        <option value=\"{{ pageContentOption.id }}\"
                                {% if pageContent is not empty %}
                                    {% for relation in pageContent.pageContentRelations %}
                                        {% if relation.location == location %}
                                            {% if relation.position == position %}
                                                {% if relation.pageContentLinked.id == pageContentOption.id %}
                                                    selected
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            >
                            {{ pageContentOption.title }}
                        </option>
                    {% endfor %}
                </optgroup>
            {% endfor %}
        </select>
    </div>
{% endif %}


", "Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/pageContentRelationsSelect.html.twig");
    }
}
