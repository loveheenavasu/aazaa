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

/* Account/subscription.html.twig */
class __TwigTemplate_f0e96b14f63d58cda4f6b2d74f6b0b0db2c02af76ea6f5826f1b100e506c19b9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/subscription.html.twig", 39);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"block dark\">
        <h2>Lidmaatschap</h2>
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "subscriptionActiveTillDate", [], "any", false, false, false, 11)) {
            // line 12
            echo "                    ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "subscriptionActiveTillDate", [], "any", false, false, false, 12), "Ymd") > twig_date_format_filter($this->env, "NOW", "Ymd"))) {
                // line 13
                echo "                        Je lidmaatschap is geldig tot ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "subscriptionActiveTillDate", [], "any", false, false, false, 13), "d-m-Y H:i"), "html", null, true);
                echo ".<br>
                        ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "subscriptionActive", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                            Je lidmaatschap wordt automatisch verlengd.<br>
                        ";
                } else {
                    // line 17
                    echo "                            Je lidmaatschap wordt niet meer automatisch verlengd. <br>Na ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "subscriptionActiveTillDate", [], "any", false, false, false, 17), "d-m-Y H:i"), "html", null, true);
                    echo " wordt je account omgezet naar de gratis versie.
                        ";
                }
                // line 19
                echo "                    ";
            } else {
                // line 20
                echo "                        Je lidmaatschap is verlopen. Wij hebben jouw lidmaatschap niet automatisch kunnen verlengen.
                    ";
            }
            // line 22
            echo "                ";
        } else {
            // line 23
            echo "                    Je bent nog geen lidmaatschap afgesloten.
                ";
        }
        // line 25
        echo "            </div>
            <div class=\"col-xs-12\">
                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "subscriptionActive", [], "any", false, false, false, 27)) {
            // line 28
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_stop_subscription");
            echo "\" class=\"btn btn-admin pull-right\">Opzeggen</a>
                ";
        } else {
            // line 30
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_new_subscription");
            echo "\" class=\"btn btn-admin pull-right\">Word nu lid!</a>
                ";
        }
        // line 32
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Account/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  116 => 30,  110 => 28,  108 => 27,  104 => 25,  100 => 23,  97 => 22,  93 => 20,  90 => 19,  84 => 17,  80 => 15,  78 => 14,  73 => 13,  70 => 12,  68 => 11,  63 => 8,  57 => 6,  55 => 5,  50 => 2,  46 => 1,  35 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/subscription.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/subscription.html.twig");
    }
}
