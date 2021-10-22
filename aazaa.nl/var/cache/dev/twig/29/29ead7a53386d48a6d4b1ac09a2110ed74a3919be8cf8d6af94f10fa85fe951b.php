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
class __TwigTemplate_cb5d92dbc2b29ab324ca964bc0b7b1a46c53dc81770d15b27a1539d298e27410 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/subscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/subscription.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/subscription.html.twig", 39);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accountContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accountContent"));

        // line 2
        echo "    <div class=\"block dark\">
        <h2>Lidmaatschap</h2>
        <div class=\"row\">
            ";
        // line 5
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !(isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, (isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "subscriptionActiveTillDate", [], "any", false, false, false, 11)) {
            // line 12
            echo "                    ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "subscriptionActiveTillDate", [], "any", false, false, false, 12), "Ymd") > twig_date_format_filter($this->env, "NOW", "Ymd"))) {
                // line 13
                echo "                        Je lidmaatschap is geldig tot ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "subscriptionActiveTillDate", [], "any", false, false, false, 13), "d-m-Y H:i"), "html", null, true);
                echo ".<br>
                        ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "subscriptionActive", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                            Je lidmaatschap wordt automatisch verlengd.<br>
                        ";
                } else {
                    // line 17
                    echo "                            Je lidmaatschap wordt niet meer automatisch verlengd. <br>Na ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "subscriptionActiveTillDate", [], "any", false, false, false, 17), "d-m-Y H:i"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "subscriptionActive", [], "any", false, false, false, 27)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  140 => 32,  134 => 30,  128 => 28,  126 => 27,  122 => 25,  118 => 23,  115 => 22,  111 => 20,  108 => 19,  102 => 17,  98 => 15,  96 => 14,  91 => 13,  88 => 12,  86 => 11,  81 => 8,  75 => 6,  73 => 5,  68 => 2,  58 => 1,  35 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{% block accountContent %}
    <div class=\"block dark\">
        <h2>Lidmaatschap</h2>
        <div class=\"row\">
            {% if errormessage is defined and not empty %}
                <div>{{ errormessage }}</div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if app.user.subscriptionActiveTillDate %}
                    {% if app.user.subscriptionActiveTillDate |date('Ymd') > \"NOW\"|date('Ymd')  %}
                        Je lidmaatschap is geldig tot {{ app.user.subscriptionActiveTillDate | date('d-m-Y H:i') }}.<br>
                        {% if app.user.subscriptionActive %}
                            Je lidmaatschap wordt automatisch verlengd.<br>
                        {% else %}
                            Je lidmaatschap wordt niet meer automatisch verlengd. <br>Na {{ app.user.subscriptionActiveTillDate | date('d-m-Y H:i') }} wordt je account omgezet naar de gratis versie.
                        {% endif %}
                    {% else %}
                        Je lidmaatschap is verlopen. Wij hebben jouw lidmaatschap niet automatisch kunnen verlengen.
                    {% endif %}
                {% else %}
                    Je bent nog geen lidmaatschap afgesloten.
                {% endif %}
            </div>
            <div class=\"col-xs-12\">
                {% if app.user.subscriptionActive %}
                    <a href=\"{{ path('account_stop_subscription') }}\" class=\"btn btn-admin pull-right\">Opzeggen</a>
                {% else %}
                    <a href=\"{{ path('account_new_subscription') }}\" class=\"btn btn-admin pull-right\">Word nu lid!</a>
                {% endif %}

            </div>
        </div>
    </div>

{% endblock %}

{% extends 'Account/base.html.twig' %}
", "Account/subscription.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/subscription.html.twig");
    }
}
