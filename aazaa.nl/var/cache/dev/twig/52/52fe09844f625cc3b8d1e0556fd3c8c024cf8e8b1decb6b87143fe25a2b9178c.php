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

/* Account/favorites.html.twig */
class __TwigTemplate_446d2101c0929223c6d34d59ab3293b9c34dc7b3da60de157367eb303cae0bf3 extends \Twig\Template
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
        // line 41
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/favorites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/favorites.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/favorites.html.twig", 41);
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
        <h2>Favorieten</h2>
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "favorites", [], "any", false, false, false, 11)) < 1)) {
            // line 12
            echo "                    Geen favorieten
                ";
        } else {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "favorites", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 15
                echo "                        <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"block inline-block video-containeradmin\">
                            <div class=\"video-bottom\">
                                <span class=\"text top\">";
                // line 18
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "previewTop", [], "any", false, false, false, 18)) > 1)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "previewTop", [], "any", false, false, false, 18), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 18), "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                }
                echo "</span>

                                <div class=\"image-container\">
                                    <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-91px-100px.png"), "html", null, true);
                echo "\"/>
                                </div>
                                <span class=\"text bottom\">
                                    <button type=\"button\" class=\"btn btn-admin pull-right favoriteAction\" data-favorite=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" data-reload=\"true\">Verwijderen</button>
                                    <a class=\"btn btn-admin pull-left\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_loader", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "pageContent", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">Bekijken</a>
                                </span>
                            </div>
                       </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  134 => 31,  122 => 25,  118 => 24,  112 => 21,  102 => 18,  97 => 15,  92 => 14,  88 => 12,  86 => 11,  81 => 8,  75 => 6,  73 => 5,  68 => 2,  58 => 1,  35 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{% block accountContent %}
    <div class=\"block dark\">
        <h2>Favorieten</h2>
        <div class=\"row\">
            {% if errormessage is defined and not empty %}
                <div>{{ errormessage }}</div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if app.user.favorites | length  < 1%}
                    Geen favorieten
                {% else %}
                    {% for favorite in app.user.favorites %}
                        <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"block inline-block video-containeradmin\">
                            <div class=\"video-bottom\">
                                <span class=\"text top\">{% if favorite.pageContent.previewTop | length >1 %}{{ favorite.pageContent.previewTop }}{% else %}{{ favorite.pageContent.category.name }}{% endif %}</span>

                                <div class=\"image-container\">
                                    <img src=\"{{ asset('images/logo/logo-91px-100px.png') }}\"/>
                                </div>
                                <span class=\"text bottom\">
                                    <button type=\"button\" class=\"btn btn-admin pull-right favoriteAction\" data-favorite=\"{{ favorite.pageContent.id }}\" data-reload=\"true\">Verwijderen</button>
                                    <a class=\"btn btn-admin pull-left\" href=\"{{ path('page_loader', {'slug': favorite.pageContent.path }) }}\">Bekijken</a>
                                </span>
                            </div>
                       </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>




{% endblock %}

{% extends 'Account/base.html.twig' %}", "Account/favorites.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/favorites.html.twig");
    }
}
