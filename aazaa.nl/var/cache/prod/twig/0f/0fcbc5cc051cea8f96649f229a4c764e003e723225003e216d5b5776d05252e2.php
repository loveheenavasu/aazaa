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

/* Admin/login.html.twig */
class __TwigTemplate_a1d060e914744ff9487d3d0990e541aa7360ed9a12e365ded60b3ef2233ef916 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'loginbody' => [$this, 'block_loginbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 56
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/login.html.twig", 56);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_loginbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-91px-100px.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"height: 60px;\" />
                    </div>

                    <div class=\"panel-body\">
                        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />

                            <label class=\"input\">
                                <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" title=\"Gebruikersnaam\" data-toggle=\"tooltip\" data-html=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
                                    <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Gebruikersnaam\" required=\"required\" />
                                </div>
                            </label>

                            <label class=\"input\">
                                <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" title=\"\" data-toggle=\"tooltip\" data-html=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Wachtwoord\" required=\"required\" />
                                </div>
                            </label>

                            <label class=\"input\">
                                <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t\t\t\t</span>

                                    <label class=\"form-control\" for=\"remember_me\">Onthouden</label>
                                </div>
                            </label>

                            ";
        // line 43
        if (($context["error"] ?? null)) {
            // line 44
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 46
        echo "
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Inloggen\" class=\"btn btn-success pull-right\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  107 => 44,  105 => 43,  78 => 19,  68 => 12,  64 => 11,  57 => 7,  50 => 2,  46 => 1,  35 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/login.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/login.html.twig");
    }
}
