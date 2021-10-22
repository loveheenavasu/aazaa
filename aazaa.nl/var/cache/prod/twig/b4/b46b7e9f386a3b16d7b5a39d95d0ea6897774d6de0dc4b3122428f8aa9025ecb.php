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

/* Blocks/addToFavorites.html.twig */
class __TwigTemplate_bed44af63799b8e68a0f268f3d375912db3d8fce8387c1d526bc4158965956c7 extends \Twig\Template
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
        echo "<div class=\"col-xs-12 text-center\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            $context["favactive"] = false;
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "favorites", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 5
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "pageContent", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "                ";
                    $context["favactive"] = true;
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        <span class=\"favoriteAction ";
            if (($context["favactive"] ?? null)) {
                echo "fav-active";
            }
            echo "\" data-favorite=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" data-reload=\"false\">
            ";
            // line 10
            if (($context["favactive"] ?? null)) {
                echo " <i class=\"fas fa-star\"></i><span>Favoriet!</span>";
            } else {
                echo "<i class=\"far fa-star\"></i><span>Favoriet?</span>";
            }
            echo "</span>
        </span>
    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"pull-right favoriteAction\" data-reload=\"false\">
            <i class=\"far fa-star\"></i> <span>Favoriet?</span>
        </a>
    ";
        }
        // line 17
        echo "    <a class=\"pull-right mr-5\" href=\"mailto:info@aazaa.org\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Mail ons\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.facebook.com/peter.aazaa\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Facebook\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.instagram.com/aazaaacademy/\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op Instagram\">
    </a>
    <a class=\"pull-right mr-5\" target=\"_blank\" href=\"https://www.pinterest.com/peteraazaa/\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pinterest.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width: 30px; margin-left: auto; margin-right: auto;display: block;\" alt=\"Aazaa op pinterest\">
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "Blocks/addToFavorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  107 => 24,  101 => 21,  95 => 18,  92 => 17,  84 => 13,  74 => 10,  65 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/addToFavorites.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/addToFavorites.html.twig");
    }
}
