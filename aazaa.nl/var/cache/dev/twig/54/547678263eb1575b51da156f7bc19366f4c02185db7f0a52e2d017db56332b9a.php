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

/* Account/workshop.html.twig */
class __TwigTemplate_1389a12751005ec2a3c8b9cd1a505d0f6b2a88af5a17195d22cc1b66fb7a383f extends \Twig\Template
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
        // line 47
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/workshop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/workshop.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/workshop.html.twig", 47);
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
        <h2>Workshops / Sessies</h2>
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "workshops", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "workshops", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["userWorkshop"]) {
                // line 13
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 13), "active", [], "any", false, false, false, 13) && (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 13), "startDatetime", [], "any", false, false, false, 13), "Ymd") >= twig_date_format_filter($this->env, "now", "Ymd"))) && twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "paid", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "                            <div class=\"col-xs-12 col-sm-6 block\">
                                <div class=\"admin-video\">
                                    <b>";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
                    echo "</b><br>
                                    <span class=\"text\">
                                        ";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 18), "descriptionShort", [], "any", false, false, false, 18), "html", null, true);
                    echo "<br>
                                        <br>
                                        <hr>
                                        <strong>Datum:</strong> ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 21), "startDatetime", [], "any", false, false, false, 21), "d-m-Y H:i"), "html", null, true);
                    echo "<br>
                                        <strong>Locatie:</strong> ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 22), "location", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
                    echo "<br>
                                        ";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 23), "location", [], "any", false, false, false, 23), "street", [], "any", false, false, false, 23), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 23), "location", [], "any", false, false, false, 23), "housenumber", [], "any", false, false, false, 23), "html", null, true);
                    echo "<br>
                                        ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 24), "location", [], "any", false, false, false, 24), "zipcode", [], "any", false, false, false, 24), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 24), "location", [], "any", false, false, false, 24), "city", [], "any", false, false, false, 24), "html", null, true);
                    echo "<br>
                                    </span>
                                </div>
                                ";
                    // line 27
                    if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, true, false, 27), "location", [], "any", true, true, false, 27) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 27), "location", [], "any", false, false, false, 27), "isVideo", [], "any", false, false, false, 27)) && twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "paid", [], "any", false, false, false, 27)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "workshop", [], "any", false, false, false, 27), "videoChatSessionId", [], "any", false, false, false, 27)))) {
                        // line 28
                        echo "                                    <div class=\"admin-video-buttons\">
                                        <a class=\"btn btn-admin pull-right\" href=\"";
                        // line 29
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_workshop_video_session", ["userWorkshop" => twig_get_attribute($this->env, $this->source, $context["userWorkshop"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                        echo "\">Start sessie</a>
                                    </div>
                                ";
                    }
                    // line 32
                    echo "                            </div>
                        ";
                }
                // line 34
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userWorkshop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
        } else {
            // line 36
            echo "                    Er zijn geen workshops en/of sessie bekend
                ";
        }
        // line 38
        echo "            </div>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/workshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  159 => 36,  156 => 35,  150 => 34,  146 => 32,  140 => 29,  137 => 28,  135 => 27,  127 => 24,  121 => 23,  117 => 22,  113 => 21,  107 => 18,  100 => 16,  96 => 14,  93 => 13,  88 => 12,  86 => 11,  81 => 8,  75 => 6,  73 => 5,  68 => 2,  58 => 1,  35 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{% block accountContent %}
    <div class=\"block dark\">
        <h2>Workshops / Sessies</h2>
        <div class=\"row\">
            {% if errormessage is defined and not empty %}
                <div>{{ errormessage }}</div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if app.user.workshops | length  > 0 %}
                    {% for userWorkshop in app.user.workshops %}
                        {% if userWorkshop.workshop.active and userWorkshop.workshop.startDatetime |date('Ymd') >= \"now\"|date('Ymd') and userWorkshop.paid %}
                            <div class=\"col-xs-12 col-sm-6 block\">
                                <div class=\"admin-video\">
                                    <b>{{ userWorkshop.workshop.id }} - {{ userWorkshop.workshop.title }}</b><br>
                                    <span class=\"text\">
                                        {{ userWorkshop.workshop.descriptionShort }}<br>
                                        <br>
                                        <hr>
                                        <strong>Datum:</strong> {{ userWorkshop.workshop.startDatetime | date('d-m-Y H:i') }}<br>
                                        <strong>Locatie:</strong> {{ userWorkshop.workshop.location.name }}<br>
                                        {{ userWorkshop.workshop.location.street }} {{ userWorkshop.workshop.location.housenumber }}<br>
                                        {{ userWorkshop.workshop.location.zipcode }} {{ userWorkshop.workshop.location.city }}<br>
                                    </span>
                                </div>
                                {% if userWorkshop.workshop.location is defined and userWorkshop.workshop.location.isVideo and userWorkshop.paid and userWorkshop.workshop.videoChatSessionId is not empty %}
                                    <div class=\"admin-video-buttons\">
                                        <a class=\"btn btn-admin pull-right\" href=\"{{ path('account_workshop_video_session', {'userWorkshop': userWorkshop.id }) }}\">Start sessie</a>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                    {% endfor %}
                {% else %}
                    Er zijn geen workshops en/of sessie bekend
                {% endif %}
            </div>
        </div>
    </div>




{% endblock %}

{% extends 'Account/base.html.twig' %}", "Account/workshop.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/workshop.html.twig");
    }
}
