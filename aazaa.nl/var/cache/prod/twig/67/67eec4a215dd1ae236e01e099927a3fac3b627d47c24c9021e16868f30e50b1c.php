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

/* Blocks/shareButtons2.html.twig */
class __TwigTemplate_c2a1773d5f4c1c03387931209f797493149da822f513947b49bcf2a12ac2570d extends \Twig\Template
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
        echo "<div class=\"row\" id=\"templatesharebutton\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 3
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, $context["menuItem"], "viewPosition", [], "any", false, false, false, 3) == "Pagina_menu") && twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 3))) {
                // line 4
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["menuItem"], "alias", [], "any", false, false, false, 4) != "muziek")) {
                    // line 5
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["menuItem"], "alias", [], "any", false, false, false, 5) == "shareVideoModel")) {
                        // line 6
                        echo "                    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
                        ";
                        // line 7
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
                        echo "                    </div>
                ";
                    } else {
                        // line 24
                        echo "                    <div class=\"col-xs-12 col-sm-6 col-md-4\" style=\"margin-bottom: 15px\">
                        <a href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, $context["menuItem"], "alias", [], "any", false, false, false, 25)]), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "image", [], "any", false, false, false, 26), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "name", [], "any", false, false, false, 26), "html", null, true);
                        echo "\">
                        </a>
                    </div>
                ";
                    }
                    // line 30
                    echo "            ";
                }
                // line 31
                echo "        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Blocks/shareButtons2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  125 => 32,  122 => 31,  119 => 30,  110 => 26,  106 => 25,  103 => 24,  99 => 22,  91 => 19,  86 => 18,  83 => 17,  75 => 14,  72 => 13,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/shareButtons2.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/shareButtons2.html.twig");
    }
}
