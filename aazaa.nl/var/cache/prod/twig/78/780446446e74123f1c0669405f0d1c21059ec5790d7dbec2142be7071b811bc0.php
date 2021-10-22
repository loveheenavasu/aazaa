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

/* Account/viewedVideos.html.twig */
class __TwigTemplate_da2a1161ef63f7fcd25a758ef4f9c9209524a97ad977629cc7853157a5ae0211 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'accountContent' => [$this, 'block_accountContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 39
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/viewedVideos.html.twig", 39);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"block dark\">
        <h2>Bekeken video's</h2>
        <div class=\"row\">
            ";
        // line 5
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !($context["empty"] ?? null))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "watchLog", [], "any", false, false, false, 11)) < 1)) {
            // line 12
            echo "                    Geen bekeken video's
                ";
        } else {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "watchLog", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["watchLog"]) {
                // line 15
                echo "                        <div class=\"col-xs-12 col-sm-6 block\">
                            <div class=\"admin-video\">
                                <strong>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</strong>
                                <span class=\"text\">
                                    ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 19), "shortDescription", [], "any", false, false, false, 19), "html", null, true);
                echo "
                                    <br>
                                    Aantal: ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "views", [], "any", false, false, false, 21), "html", null, true);
                echo " x bekeken
                                </span>
                            </div>
                            <div class=\"admin-video-buttons\">
                                <a class=\"btn btn-admin pull-right\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Bekijken</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['watchLog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "Account/viewedVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  110 => 29,  100 => 25,  93 => 21,  88 => 19,  83 => 17,  79 => 15,  74 => 14,  70 => 12,  68 => 11,  63 => 8,  57 => 6,  55 => 5,  50 => 2,  46 => 1,  35 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/viewedVideos.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/viewedVideos.html.twig");
    }
}
