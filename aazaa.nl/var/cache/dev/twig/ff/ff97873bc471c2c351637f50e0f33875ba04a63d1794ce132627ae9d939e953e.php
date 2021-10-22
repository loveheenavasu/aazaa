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

/* Account/viewedVideos.html.twig */
class __TwigTemplate_96553fc0717831b1cc1ef25430f937942320eccb9175d860ff82bb5fb792723c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/viewedVideos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/viewedVideos.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/viewedVideos.html.twig", 39);
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
        <h2>Bekeken video's</h2>
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "watchLog", [], "any", false, false, false, 11)) < 1)) {
            // line 12
            echo "                    Geen bekeken video's
                ";
        } else {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "watchLog", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["watchLog"]) {
                // line 15
                echo "                        <div class=\"col-xs-12 col-sm-6 block\">
                            <div class=\"admin-video\">
                                <strong>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</strong>
                                <span class=\"text\">
                                    ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 19), "shortDescription", [], "any", false, false, false, 19), "html", null, true);
                echo "
                                    <br>
                                    Aantal: ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "views", [], "any", false, false, false, 21), "html", null, true);
                echo " x bekeken
                                </span>
                            </div>
                            <div class=\"admin-video-buttons\">
                                <a class=\"btn btn-admin pull-right\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Bekijken</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['watchLog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/viewedVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  128 => 29,  118 => 25,  111 => 21,  106 => 19,  101 => 17,  97 => 15,  92 => 14,  88 => 12,  86 => 11,  81 => 8,  75 => 6,  73 => 5,  68 => 2,  58 => 1,  35 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{% block accountContent %}
    <div class=\"block dark\">
        <h2>Bekeken video's</h2>
        <div class=\"row\">
            {% if errormessage is defined and not empty %}
                <div>{{ errormessage }}</div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if app.user.watchLog | length  < 1%}
                    Geen bekeken video's
                {% else %}
                    {% for watchLog in app.user.watchLog %}
                        <div class=\"col-xs-12 col-sm-6 block\">
                            <div class=\"admin-video\">
                                <strong>{{ watchLog.pageContent.title }}</strong>
                                <span class=\"text\">
                                    {{ watchLog.pageContent.shortDescription }}
                                    <br>
                                    Aantal: {{ watchLog.views }} x bekeken
                                </span>
                            </div>
                            <div class=\"admin-video-buttons\">
                                <a class=\"btn btn-admin pull-right\" href=\"{{ path('page_loader', {'slug': watchLog.pageContent.path }) }}\">Bekijken</a>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>




{% endblock %}

{% extends 'Account/base.html.twig' %}", "Account/viewedVideos.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/viewedVideos.html.twig");
    }
}
