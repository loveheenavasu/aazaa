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

/* Account/favorites.html.twig */
class __TwigTemplate_124cfa79727909457f05200b331dee84a18de63e669b12f2893c53317c9bf779 extends \Twig\Template
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
        // line 41
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/favorites.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"block dark\">
        <h2>Favorieten</h2>
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "favorites", [], "any", false, false, false, 11)) < 1)) {
            // line 12
            echo "                    Geen favorieten
                ";
        } else {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "favorites", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 15
                echo "                        <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"block inline-block video-containeradmin\">
                            <div class=\"video-bottom\">
                                <span class=\"text top\">";
                // line 18
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "previewTop", [], "any", false, false, false, 18)) > 1)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "previewTop", [], "any", false, false, false, 18), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                }
                echo "</span>

                                <div class=\"image-container\">
                                    <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-91px-100px.png"), "html", null, true);
                echo "\"/>
                                </div>
                                <span class=\"text bottom\">
                                    <button type=\"button\" class=\"btn btn-admin pull-right favoriteAction\" data-favorite=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" data-reload=\"true\">Verwijderen</button>
                                    <a class=\"btn btn-admin pull-left\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Bekijken</a>
                                </span>
                            </div>
                       </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "Account/favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  116 => 31,  104 => 25,  100 => 24,  94 => 21,  84 => 18,  79 => 15,  74 => 14,  70 => 12,  68 => 11,  63 => 8,  57 => 6,  55 => 5,  50 => 2,  46 => 1,  35 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/favorites.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/favorites.html.twig");
    }
}
