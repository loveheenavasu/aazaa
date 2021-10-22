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
class __TwigTemplate_83b31d2842cf33c147e77e79cb44555e22cfd3eae7860572e7cb5f8e5748be17 extends \Twig\Template
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
        if (((isset($context["referer"]) || array_key_exists("referer", $context)) &&  !twig_test_empty(($context["referer"] ?? null)))) {
            // line 16
            echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["successmessage"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        // line 24
        echo "
                    ";
        // line 25
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 26
            echo "                        <div class=\"col-xs-12\" style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
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
        return array (  189 => 99,  160 => 75,  148 => 68,  141 => 63,  135 => 61,  133 => 60,  128 => 58,  124 => 57,  110 => 46,  90 => 28,  84 => 26,  82 => 25,  79 => 24,  73 => 22,  71 => 21,  64 => 18,  58 => 16,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blocks/loginOrCreateAccount.html.twig", "/home/deb116267/domains/aazaa.org/templates/Blocks/loginOrCreateAccount.html.twig");
    }
}
