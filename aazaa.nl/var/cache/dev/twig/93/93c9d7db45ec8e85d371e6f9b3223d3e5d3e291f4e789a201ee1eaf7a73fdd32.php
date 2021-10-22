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

/* Account/index.html.twig */
class __TwigTemplate_5e508d823527780a30f0078d17d5e829fe913645d58ea463734e85959ff77487 extends \Twig\Template
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
        // line 81
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/index.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/index.html.twig", 81);
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
        echo "
    <div class=\"block dark\">
        <h2>Profiel</h2>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !(isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "                    <div>";
            echo twig_escape_filter($this->env, (isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 10
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_update");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update"), "html", null, true);
        echo "\" />
                    <div class=\"row\">
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Gebruikersnaam: *</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"username\" required=\"required\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
                            </div>
                        </label>
                        ";
        // line 20
        echo "                            ";
        // line 21
        echo "                                ";
        // line 22
        echo "                                ";
        // line 23
        echo "                                    ";
        // line 24
        echo "                                    ";
        // line 25
        echo "                                ";
        // line 26
        echo "                            ";
        // line 27
        echo "                        ";
        // line 28
        echo "                        <label class=\"input col-xs-12 col-sm-6\">
                            <div class=\"input-group col-xs-12\">
                                <label>Voornaam:</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"firstname\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                            </div>
                        </label>
                        <label class=\"input col-xs-12 col-sm-6\">
                            <div class=\"input-group col-xs-12\">
                                <label>Achternaam:</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"lastname\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "lastname", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                            </div>
                        </label>

                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>E-mailadres: *</label>
                                <input type=\"email\" class=\"form-control input-aazaa col-xs-8\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "\" placeholder=\"E-mailadres\" required=\"required\" />
                            </div>
                        </label>

                        <br>
                        <br>
                        <div class=\"col-xs-12\">
                            <h4>Wachtwoord Wijzigen:  <small>Invullen enkel nodig, indien uw wachtwoord wilt wijzigen</small></h4>
                        </div>
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Wachtwoord:</label>
                                <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password\" placeholder=\"Wachtwoord\" />
                            </div>
                        </label>
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Herhaal Wachtwoord:</label>
                                <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password_check\" placeholder=\"Wachtwoord controle\" />
                            </div>
                        </label>

                        <div class=\"checkbox input col-xs-12\">
                            <label><input name=\"mailing\" type=\"checkbox\" value=\"1\" ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "mailingSubscription", [], "any", false, false, false, 67)) {
            echo "checked";
        }
        echo ">Inschrijven voor de mailing</label>
                        </div>

                    </div>
                    <div class=\"col-xs-12\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Opslaan\" class=\"btn btn-aazaa pull-right\" />
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  142 => 44,  132 => 37,  123 => 31,  118 => 28,  116 => 27,  114 => 26,  112 => 25,  110 => 24,  108 => 23,  106 => 22,  104 => 21,  102 => 20,  96 => 16,  88 => 11,  83 => 10,  77 => 8,  75 => 7,  68 => 2,  58 => 1,  35 => 81,);
    }

    public function getSourceContext()
    {
        return new Source("{% block accountContent %}

    <div class=\"block dark\">
        <h2>Profiel</h2>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if errormessage is defined and not empty %}
                    <div>{{ errormessage }}</div>
                {% endif %}
                <form action=\"{{ path(\"account_update\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('update') }}\" />
                    <div class=\"row\">
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Gebruikersnaam: *</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"username\" required=\"required\" value=\"{{ app.user.username }}\">
                            </div>
                        </label>
                        {#<label class=\"input col-xs-4 col-sm-2\">#}
                            {#<div class=\"input-group col-xs-12\">#}
                                {#<label for=\"gender\">Aanhef:</label>#}
                                {#<select name=\"gender\" class=\"form-control input-aazaa\" id=\"gender\">#}
                                    {#<option value=\"m\" {% if app.user.username == 'm'%}selected{% endif %}>Dhr</option>#}
                                    {#<option value=\"f\" {% if app.user.username == 'f'%}selected{% endif %}>Mevr</option>#}
                                {#</select>#}
                            {#</div>#}
                        {#</label>#}
                        <label class=\"input col-xs-12 col-sm-6\">
                            <div class=\"input-group col-xs-12\">
                                <label>Voornaam:</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"firstname\" value=\"{{ app.user.firstname }}\">
                            </div>
                        </label>
                        <label class=\"input col-xs-12 col-sm-6\">
                            <div class=\"input-group col-xs-12\">
                                <label>Achternaam:</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"lastname\" value=\"{{ app.user.lastname }}\">
                            </div>
                        </label>

                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>E-mailadres: *</label>
                                <input type=\"email\" class=\"form-control input-aazaa col-xs-8\" name=\"email\" value=\"{{ app.user.email }}\" placeholder=\"E-mailadres\" required=\"required\" />
                            </div>
                        </label>

                        <br>
                        <br>
                        <div class=\"col-xs-12\">
                            <h4>Wachtwoord Wijzigen:  <small>Invullen enkel nodig, indien uw wachtwoord wilt wijzigen</small></h4>
                        </div>
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Wachtwoord:</label>
                                <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password\" placeholder=\"Wachtwoord\" />
                            </div>
                        </label>
                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>Herhaal Wachtwoord:</label>
                                <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password_check\" placeholder=\"Wachtwoord controle\" />
                            </div>
                        </label>

                        <div class=\"checkbox input col-xs-12\">
                            <label><input name=\"mailing\" type=\"checkbox\" value=\"1\" {% if app.user.mailingSubscription %}checked{% endif %}>Inschrijven voor de mailing</label>
                        </div>

                    </div>
                    <div class=\"col-xs-12\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Opslaan\" class=\"btn btn-aazaa pull-right\" />
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}

{% extends 'Account/base.html.twig' %}", "Account/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/index.html.twig");
    }
}
