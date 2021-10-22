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

/* Blocks/loginOrCreateAccount.html.twig */
class __TwigTemplate_d0e5ba74ccf3f41572dfffc06a19748e60ef124b37738e4cb10945e2eb288a93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/loginOrCreateAccount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blocks/loginOrCreateAccount.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 col-md-6\">
    <div class=\"block dark\">
        <h2>Maak even een gratis account aan</h2>
        <div class=\"col-xs-12\" style=\"margin-bottom: 20px\">
            Met een gratis account kun je:<br>
            * alle gratis video's bekijken<br>
            * je favorieten video's opslaan<br>
            * de video's delen met je vrienden<br>
            * je online inschrijven voor workshops, sessies en cursussen<br>
        </div>

        <h2>Inloggen</h2>
        <div class=\"row\">
            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login_check");
        echo "\" method=\"post\">
                ";
        // line 15
        if (((isset($context["referer"]) || array_key_exists("referer", $context)) &&  !twig_test_empty((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 15, $this->source); })())))) {
            // line 16
            echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">
                ";
        }
        // line 18
        echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                <input type=\"hidden\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" checked/>
                <div class=\"col-xs-12\">
                    ";
        // line 21
        if ((isset($context["successmessage"]) || array_key_exists("successmessage", $context))) {
            // line 22
            echo "                        <div class=\"col-xs-12\" style=\"color: green\">";
            echo twig_escape_filter($this->env, (isset($context["successmessage"]) || array_key_exists("successmessage", $context) ? $context["successmessage"] : (function () { throw new RuntimeError('Variable "successmessage" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 24
        echo "
                    ";
        // line 25
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())))) {
            // line 26
            echo "                        <div class=\"col-xs-12\" style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 28
        echo "
                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Gebruikersnaam:</label>
                            <input type=\"text\" class=\"form-control input-aazaa  col-xs-8\" name=\"_username\" value=\"\" placeholder=\"Gebruikersnaam\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Wachtwoord:</label>
                            <input type=\"password\" class=\"form-control input-aazaa col-xs-8\" name=\"_password\" placeholder=\"Wachtwoord\" required=\"required\" />
                        </div>
                    </div>

                </div>
                <div class=\"col-xs-12\">
                    <br>
                    <a class=\"pull-left\" style=\"text-decoration: underline\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_reset_pass");
        echo "\">Wachtwoord vergeten?</a>
                    <input type=\"submit\" id=\"_submit_login\" name=\"_submit\" value=\"Inloggen\" class=\"btn btn-aazaa pull-right\" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class=\"col-xs-12 col-md-6\">
    <div class=\"block dark\">
        <h2>Aanmelden</h2>
        <div class=\"row\">
            <form action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("register"), "html", null, true);
        echo "\" />
                <div class=\"col-xs-12\">
                    ";
        // line 60
        if ((isset($context["errormessage"]) || array_key_exists("errormessage", $context))) {
            // line 61
            echo "                        <div class=\"col-xs-12\" style=\"color: red\">";
            echo twig_escape_filter($this->env, (isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 63
        echo "

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Gebruikersnaam: *</label>
                            <input type=\"text\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Gebruikersnaam is verplicht en dient minimaal 5 tekens lang te zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"username\" placeholder=\"Gebruikersnaam\" required=\"required\" value=\"";
        // line 68
        if ((isset($context["username"]) || array_key_exists("username", $context))) {
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 68, $this->source); })()), "html", null, true);
        }
        echo "\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>E-mailadres: *</label>
                            <input type=\"email\" class=\"form-control input-aazaa col-xs-8\" name=\"email\" value=\"";
        // line 75
        if ((isset($context["email"]) || array_key_exists("email", $context))) {
            echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 75, $this->source); })()), "html", null, true);
        }
        echo "\" placeholder=\"E-mailadres\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Wachtwoord: *</label>
                            <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password\" placeholder=\"Wachtwoord\" required=\"required\" />
                        </div>
                    </div>
                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Herhaal Wachtwoord: *</label>
                            <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password_check\" placeholder=\"Wachtwoord controle\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"checkbox input col-xs-12\">
                        <label><input name=\"mailing\" type=\"checkbox\" value=\"1\">Inschrijven voor de mailing</label>
                    </div>

                    <div class=\"checkbox input col-xs-12\">
                        <label>
                            <input name=\"privacystatement\" type=\"checkbox\" value=\"1\" oninvalid=\"this.setCustomValidity('Je dient akkoord te gaan met de algemene voorwaarden en de privacystatement')\" oninput=\"this.setCustomValidity('')\" required>
                            Je gaat akkoord met de <a style=\"text-decoration: underline\" target=\"_blank\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_statement");
        echo "\"> algemene voorwaarden en privacystatement</a>
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Aanmelden\" class=\"btn btn-aazaa pull-right\" />
                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blocks/loginOrCreateAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 99,  166 => 75,  154 => 68,  147 => 63,  141 => 61,  139 => 60,  134 => 58,  130 => 57,  116 => 46,  96 => 28,  90 => 26,  88 => 25,  85 => 24,  79 => 22,  77 => 21,  70 => 18,  64 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-md-6\">
    <div class=\"block dark\">
        <h2>Maak even een gratis account aan</h2>
        <div class=\"col-xs-12\" style=\"margin-bottom: 20px\">
            Met een gratis account kun je:<br>
            * alle gratis video's bekijken<br>
            * je favorieten video's opslaan<br>
            * de video's delen met je vrienden<br>
            * je online inschrijven voor workshops, sessies en cursussen<br>
        </div>

        <h2>Inloggen</h2>
        <div class=\"row\">
            <form action=\"{{ path(\"account_login_check\") }}\" method=\"post\">
                {% if referer is defined and referer is not empty %}
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ referer }}\">
                {% endif %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
                <input type=\"hidden\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" checked/>
                <div class=\"col-xs-12\">
                    {% if successmessage is defined %}
                        <div class=\"col-xs-12\" style=\"color: green\">{{ successmessage }}</div>
                    {% endif %}

                    {% if error is defined and error is not empty %}
                        <div class=\"col-xs-12\" style=\"color: red\">{{ error.messageKey | trans( error.messageData, 'security' ) }}</div>
                    {% endif %}

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Gebruikersnaam:</label>
                            <input type=\"text\" class=\"form-control input-aazaa  col-xs-8\" name=\"_username\" value=\"\" placeholder=\"Gebruikersnaam\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Wachtwoord:</label>
                            <input type=\"password\" class=\"form-control input-aazaa col-xs-8\" name=\"_password\" placeholder=\"Wachtwoord\" required=\"required\" />
                        </div>
                    </div>

                </div>
                <div class=\"col-xs-12\">
                    <br>
                    <a class=\"pull-left\" style=\"text-decoration: underline\" href=\"{{ path('account_reset_pass') }}\">Wachtwoord vergeten?</a>
                    <input type=\"submit\" id=\"_submit_login\" name=\"_submit\" value=\"Inloggen\" class=\"btn btn-aazaa pull-right\" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class=\"col-xs-12 col-md-6\">
    <div class=\"block dark\">
        <h2>Aanmelden</h2>
        <div class=\"row\">
            <form action=\"{{ path(\"account_register\") }}\" method=\"post\">
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('register') }}\" />
                <div class=\"col-xs-12\">
                    {% if errormessage is defined %}
                        <div class=\"col-xs-12\" style=\"color: red\">{{ errormessage }}</div>
                    {% endif %}


                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Gebruikersnaam: *</label>
                            <input type=\"text\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Gebruikersnaam is verplicht en dient minimaal 5 tekens lang te zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"username\" placeholder=\"Gebruikersnaam\" required=\"required\" value=\"{% if username is defined %}{{ username }}{% endif %}\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>E-mailadres: *</label>
                            <input type=\"email\" class=\"form-control input-aazaa col-xs-8\" name=\"email\" value=\"{% if email is defined %}{{ email }}{% endif %}\" placeholder=\"E-mailadres\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Wachtwoord: *</label>
                            <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password\" placeholder=\"Wachtwoord\" required=\"required\" />
                        </div>
                    </div>
                    <div class=\"input col-xs-12\">
                        <div class=\"input-group col-xs-12\">
                            <label>Herhaal Wachtwoord: *</label>
                            <input type=\"password\" pattern=\".{5,}\" oninvalid=\"this.setCustomValidity('Wachtwoord is verplicht en moet minimaal 5 tekens lang zijn')\" oninput=\"this.setCustomValidity('')\" class=\"form-control input-aazaa col-xs-8\" name=\"password_check\" placeholder=\"Wachtwoord controle\" required=\"required\" />
                        </div>
                    </div>

                    <div class=\"checkbox input col-xs-12\">
                        <label><input name=\"mailing\" type=\"checkbox\" value=\"1\">Inschrijven voor de mailing</label>
                    </div>

                    <div class=\"checkbox input col-xs-12\">
                        <label>
                            <input name=\"privacystatement\" type=\"checkbox\" value=\"1\" oninvalid=\"this.setCustomValidity('Je dient akkoord te gaan met de algemene voorwaarden en de privacystatement')\" oninput=\"this.setCustomValidity('')\" required>
                            Je gaat akkoord met de <a style=\"text-decoration: underline\" target=\"_blank\" href=\"{{ path('privacy_statement') }}\"> algemene voorwaarden en privacystatement</a>
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Aanmelden\" class=\"btn btn-aazaa pull-right\" />
                </div>
            </form>
        </div>
    </div>
</div>", "Blocks/loginOrCreateAccount.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/loginOrCreateAccount.html.twig");
    }
}
