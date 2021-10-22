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
class __TwigTemplate_2989bd85b2a9573aba79d6d55b5e25c35c267becb70b71fc326b974c5385eed4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/login.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/login.html.twig", 56);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_loginbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loginbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loginbody"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  131 => 46,  125 => 44,  123 => 43,  96 => 19,  86 => 12,  82 => 11,  75 => 7,  68 => 2,  58 => 1,  35 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("{% block loginbody %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <img src=\"{{ asset('images/logo/logo-91px-100px.png') }}\" alt=\"logo\" style=\"height: 60px;\" />
                    </div>

                    <div class=\"panel-body\">
                        <form action=\"{{ path(\"admin_login_check\") }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />

                            <label class=\"input\">
                                <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" title=\"Gebruikersnaam\" data-toggle=\"tooltip\" data-html=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
                                    <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Gebruikersnaam\" required=\"required\" />
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

                            {% if error %}
                                <div>{{ error.messageKey | trans( error.messageData, 'security' ) }}</div>
                            {% endif %}

                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Inloggen\" class=\"btn btn-success pull-right\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% extends 'Admin/base.html.twig' %}", "Admin/login.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/login.html.twig");
    }
}
