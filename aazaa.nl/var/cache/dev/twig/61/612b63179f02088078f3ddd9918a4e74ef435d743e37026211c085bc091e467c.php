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

/* Account/reset.html.twig */
class __TwigTemplate_3ee22d2b2e93a4513074115990d18924c50d2920732bb015c946127e684664bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 36
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/reset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/reset.html.twig"));

        $this->parent = $this->loadTemplate("Base/base.html.twig", "Account/reset.html.twig", 36);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"block dark\">
                <h2>Wachtwoord resetten</h2>
                <p>Er zal een e-mail worden gestuurd met een nieuwe wachtwoord</p>
                <div class=\"row\">
                    <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_reset_pass");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reset"), "html", null, true);
        echo "\" />
                        <div class=\"col-xs-12\">
                            ";
        // line 12
        if ((isset($context["successmessage"]) || array_key_exists("successmessage", $context))) {
            // line 13
            echo "                                <div class=\"col-xs-12\" style=\"color: green\">";
            echo twig_escape_filter($this->env, (isset($context["successmessage"]) || array_key_exists("successmessage", $context) ? $context["successmessage"] : (function () { throw new RuntimeError('Variable "successmessage" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</div>
                            ";
        }
        // line 15
        echo "                            ";
        if ((isset($context["errormessage"]) || array_key_exists("errormessage", $context))) {
            // line 16
            echo "                                <div class=\"col-xs-12\" style=\"color: red\">";
            echo twig_escape_filter($this->env, (isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</div>
                            ";
        }
        // line 18
        echo "
                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>E-mailadres:</label>
                                    <input type=\"text\" class=\"form-control input-aazaa  col-xs-8\" name=\"email\" value=\"\" placeholder=\"email\" required=\"required\" />
                                </div>
                            </label>
                        </div>
                        <div class=\"col-xs-12\">
                            <input type=\"submit\" name=\"submit\" value=\"Aanvragen\" class=\"btn btn-aazaa pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  97 => 16,  94 => 15,  88 => 13,  86 => 12,  81 => 10,  77 => 9,  68 => 2,  58 => 1,  35 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"block dark\">
                <h2>Wachtwoord resetten</h2>
                <p>Er zal een e-mail worden gestuurd met een nieuwe wachtwoord</p>
                <div class=\"row\">
                    <form action=\"{{ path(\"account_reset_pass\") }}\" method=\"post\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('reset') }}\" />
                        <div class=\"col-xs-12\">
                            {% if successmessage is defined %}
                                <div class=\"col-xs-12\" style=\"color: green\">{{ successmessage }}</div>
                            {% endif %}
                            {% if errormessage is defined %}
                                <div class=\"col-xs-12\" style=\"color: red\">{{ errormessage }}</div>
                            {% endif %}

                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>E-mailadres:</label>
                                    <input type=\"text\" class=\"form-control input-aazaa  col-xs-8\" name=\"email\" value=\"\" placeholder=\"email\" required=\"required\" />
                                </div>
                            </label>
                        </div>
                        <div class=\"col-xs-12\">
                            <input type=\"submit\" name=\"submit\" value=\"Aanvragen\" class=\"btn btn-aazaa pull-right\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% extends 'Base/base.html.twig' %}", "Account/reset.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/reset.html.twig");
    }
}
