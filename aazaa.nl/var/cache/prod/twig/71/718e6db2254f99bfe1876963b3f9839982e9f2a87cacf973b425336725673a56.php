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
class __TwigTemplate_1829410d34b8d428e99f0d95964743189ea5c91e7808f86b64ec3e64430067e2 extends \Twig\Template
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
        // line 1
        if (((isset($context["position"]) || array_key_exists("position", $context)) && (isset($context["location"]) || array_key_exists("location", $context)))) {
            // line 2
            echo "    <div class=\"form-group\">
        <label for=\"cat\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
            echo "</label>
        <select id=\"cat\" name=\"location[";
            // line 4
            echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
            echo "]\" class=\"form-control\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
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
                    if ( !twig_test_empty(($context["pageContent"] ?? null))) {
                        // line 10
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 10));
                        foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                            // line 11
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["relation"], "location", [], "any", false, false, false, 11) == ($context["location"] ?? null))) {
                                // line 12
                                echo "                                            ";
                                if ((twig_get_attribute($this->env, $this->source, $context["relation"], "position", [], "any", false, false, false, 12) == ($context["position"] ?? null))) {
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
        return array (  129 => 29,  124 => 26,  117 => 24,  108 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  90 => 16,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  72 => 10,  70 => 9,  65 => 8,  61 => 7,  56 => 6,  52 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/pageContentRelationsSelect.html.twig");
    }
}
