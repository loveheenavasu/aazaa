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
class __TwigTemplate_7f2ed5ee83bdfaccfe6b8ff1a5ba13e65adfeaf13c5fcc4cd919e850e1e3ebb9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/index.html.twig", 81);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"block dark\">
        <h2>Profiel</h2>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !($context["empty"] ?? null))) {
            // line 8
            echo "                    <div>";
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                            </div>
                        </label>
                        <label class=\"input col-xs-12 col-sm-6\">
                            <div class=\"input-group col-xs-12\">
                                <label>Achternaam:</label>
                                <input type=\"text\" class=\"form-control input-aazaa col-xs-8\" name=\"lastname\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "lastname", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                            </div>
                        </label>

                        <label class=\"input col-xs-12\">
                            <div class=\"input-group col-xs-12\">
                                <label>E-mailadres: *</label>
                                <input type=\"email\" class=\"form-control input-aazaa col-xs-8\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "email", [], "any", false, false, false, 44), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67), "mailingSubscription", [], "any", false, false, false, 67)) {
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
        return array (  150 => 67,  124 => 44,  114 => 37,  105 => 31,  100 => 28,  98 => 27,  96 => 26,  94 => 25,  92 => 24,  90 => 23,  88 => 22,  86 => 21,  84 => 20,  78 => 16,  70 => 11,  65 => 10,  59 => 8,  57 => 7,  50 => 2,  46 => 1,  35 => 81,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/index.html.twig");
    }
}
