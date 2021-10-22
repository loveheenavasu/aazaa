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
class __TwigTemplate_5e1669bddff2b64e6ccfb8a16f6be8f39397bdb7dc867dab43cc0b3a340345c7 extends \Twig\Template
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
        if (((isset($context["menuItems"]) || array_key_exists("menuItems", $context)) &&  !twig_test_empty(($context["menuItems"] ?? null)))) {
            // line 2
            echo "    <div class=\"row\" id=\"templatesharebutton\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
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
                        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
                            // line 8
                            echo "                            ";
                            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) && twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", true, true, false, 8)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 8)))) {
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
        return array (  124 => 30,  118 => 29,  114 => 27,  106 => 24,  101 => 23,  98 => 22,  90 => 19,  85 => 18,  82 => 17,  74 => 14,  71 => 13,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/shareButtons.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons.html.twig");
    }
}
