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
class __TwigTemplate_aee3ed9217de62e8a29dbf8ebaddf6658584425e3d3a182d309a066ba3d9212c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Account/reset.html.twig", 36);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            echo twig_escape_filter($this->env, ($context["successmessage"] ?? null), "html", null, true);
            echo "</div>
                            ";
        }
        // line 15
        echo "                            ";
        if ((isset($context["errormessage"]) || array_key_exists("errormessage", $context))) {
            // line 16
            echo "                                <div class=\"col-xs-12\" style=\"color: red\">";
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
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
        return array (  85 => 18,  79 => 16,  76 => 15,  70 => 13,  68 => 12,  63 => 10,  59 => 9,  50 => 2,  46 => 1,  35 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/reset.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/reset.html.twig");
    }
}
