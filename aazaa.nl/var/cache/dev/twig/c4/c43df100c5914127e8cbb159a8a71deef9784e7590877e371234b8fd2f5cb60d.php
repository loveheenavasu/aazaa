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

/* Workshop/detail.html.twig */
class __TwigTemplate_cb394fd30d1029ad308d95dcbf309927e17afcd718577ba5498ea8b5df815bc2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metaTitle' => [$this, 'block_metaTitle'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 118
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/detail.html.twig"));

        $this->parent = $this->loadTemplate("Base/base.html.twig", "Workshop/detail.html.twig", 118);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 1, $this->source); })()), "metaTitle", [], "any", false, false, false, 1), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 2, $this->source); })()), "metaDescription", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container base\">
        <div class=\"block dark\">
            <div class=\"cursus-container\">

                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Error!</strong> ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
                <div class=\"row cursus-container-header\">
                    <div class=\"col-xs-6\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-xs-2 cursus-container-location-pre hidden-xs\">
                        op locatie:
                    </div>
                    <div class=\"col-xs-6 col-md-4 cursus-container-location\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 25, $this->source); })()), "location", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"padding-top: 40px\">
                    <div class=\"col-md-6\">
                        Van: ";
        // line 30
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })()), "startDatetime", [], "any", false, false, false, 30), "full", "none"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })()), "startDatetime", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        echo " uur.<br>
                        Tot: ";
        // line 31
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 31, $this->source); })()), "endDatetime", [], "any", false, false, false, 31), "full", "none"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 31, $this->source); })()), "endDatetime", [], "any", false, false, false, 31), "H:i"), "html", null, true);
        echo " uur.<br>
                        ";
        // line 32
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 32, $this->source); })()), "startDatetime", [], "any", false, false, false, 32), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
            // line 33
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 33, $this->source); })()), "seatsAvailable", [], "any", false, false, false, 33) > 1)) {
                echo "Nog <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 33, $this->source); })()), "seatsAvailable", [], "any", false, false, false, 33), "html", null, true);
                echo "</strong> beschikbare plaatsen!<br>";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 33, $this->source); })()), "seatsAvailable", [], "any", false, false, false, 33) > 0)) {
                echo "<p style=\"color: red\">Laatste plaats beschikbaar</p>";
            } else {
                echo "<strong>Geen plaatsen meer beschikbaar</strong>";
            }
            // line 34
            echo "                        ";
        }
        // line 35
        echo "                        <br>
                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "<br>
                    </div>
                    ";
        // line 38
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 38, $this->source); })()), "startDatetime", [], "any", false, false, false, 38), "Ymd") == twig_date_format_filter($this->env, "now", "Ymd"))) {
            // line 39
            echo "                        <div class=\"col-md-6\">
                            <div class=\"block dark inline\">
                                <p class=\"h3\">Je bent helaas te laat!</p>
                                <br>
                                Je kunt niet op de dag zelf nog boeken.<br>
                                <br>
                                Je kunt een email sturen met je verzoek naar <a href=\"mailto:info@aazaa.nl\">info@aazaa.nl</a> en als het mogelijk is laten we je dat weten. Hoor je niets, dan was je echt te laat…
                            </div>
                        </div>
                    ";
        } else {
            // line 49
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49) && (twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 49, $this->source); })()), "seatsAvailable", [], "any", false, false, false, 49) > 0))) {
                // line 50
                echo "                            <div class=\"col-md-6\">
                                <div class=\"block dark inline\">
                                    <p class=\"h3\">Inschrijven</p>
                                    ";
                // line 53
                echo (isset($context["price_explanation"]) || array_key_exists("price_explanation", $context) ? $context["price_explanation"] : (function () { throw new RuntimeError('Variable "price_explanation" does not exist.', 53, $this->source); })());
                echo "
                                    <form action=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshops_cursus_register", ["workshop" => twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" method=\"post\">
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"0\" checked>€ ";
                // line 57
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 57, $this->source); })()), "price", [0 => 0], "method", false, false, false, 57), 2, ",", "."), "html", null, true);
                echo " <small>(Normaal tarief)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"1\">€ ";
                // line 62
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 62, $this->source); })()), "price", [0 => 1], "method", false, false, false, 62), 2, ",", "."), "html", null, true);
                echo " <small>(25% reductie)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"2\">€ ";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 67, $this->source); })()), "price", [0 => 2], "method", false, false, false, 67), 2, ",", "."), "html", null, true);
                echo " <small>(50% reductie)</small>
                                            </label>
                                        </div>

                                        <hr>
                                        ";
                // line 72
                if ((isset($context["booking_conditions"]) || array_key_exists("booking_conditions", $context))) {
                    // line 73
                    echo "                                            ";
                    echo (isset($context["booking_conditions"]) || array_key_exists("booking_conditions", $context) ? $context["booking_conditions"] : (function () { throw new RuntimeError('Variable "booking_conditions" does not exist.', 73, $this->source); })());
                    echo "
                                        ";
                }
                // line 75
                echo "                                        <div class=\"checkbox input\">
                                            <label><input name=\"req\" type=\"checkbox\" value=\"1\" required oninvalid=\"this.setCustomValidity('Je moet met de boekingsvoorwaarden akkoord gaan om de boeking te kunnen maken')\">Ik ga akkoord met bovengenoemde voorwaarden</label>
                                        </div>


                                        <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-aazaa pull-right\">Inschrijven</button>
                                    </form>
                                </div>
                            </div>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
                // line 85
                echo "                            <div class=\"col-md-6\">
                                <div class=\"block dark inline\">
                                    <p class=\"h3\">Geen plaatsen meer beschikbaar</p>
                                    Er is helaas geen plek meer op de door jouw gekozen dag en/of tijd. Probeer een andere dag en/of tijd waarop er nog wel beschikbare plaatsen staan aangegeven
                                </div>
                            </div>
                        ";
            }
            // line 92
            echo "                    ";
        }
        // line 93
        echo "                </div>

                <div class=\"row\" style=\"padding-top: 40px\">
                    ";
        // line 96
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 96, $this->source); })()), "startDatetime", [], "any", false, false, false, 96), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
            // line 97
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
                // line 98
                echo "                            <div class=\"col-xs-12\">
                                <h3>Inschrijven</h3>
                                <p>Om in te schrijven, dien je eerst in te loggen. Indien je nog geen account hebt, kan je ook een gratis account aanmaken.</p>
                                <div class=\"row\">
                                    ";
                // line 102
                $this->loadTemplate("Blocks/loginOrCreateAccount.html.twig", "Workshop/detail.html.twig", 102)->display(twig_array_merge($context, ["referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "uri", [], "any", false, false, false, 102)]));
                // line 103
                echo "                                </div>
                            </div>
                        ";
            }
            // line 106
            echo "                    ";
        }
        // line 107
        echo "                </div>
            ";
        // line 108
        echo twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 108, $this->source); })()), "content", [], "any", false, false, false, 108);
        echo "
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: 30px;\">
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 114
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Workshop/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 114,  314 => 112,  307 => 108,  304 => 107,  301 => 106,  296 => 103,  294 => 102,  288 => 98,  285 => 97,  283 => 96,  278 => 93,  275 => 92,  266 => 85,  264 => 84,  253 => 75,  247 => 73,  245 => 72,  237 => 67,  229 => 62,  221 => 57,  215 => 54,  211 => 53,  206 => 50,  203 => 49,  191 => 39,  189 => 38,  184 => 36,  181 => 35,  178 => 34,  167 => 33,  165 => 32,  159 => 31,  153 => 30,  145 => 25,  136 => 19,  131 => 16,  122 => 13,  118 => 11,  114 => 10,  108 => 6,  98 => 5,  79 => 2,  60 => 1,  37 => 118,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaTitle %}{{ pageContent.metaTitle }}{% endblock %}
{% block description %}{{ pageContent.metaDescription }}{% endblock %}


{% block content %}
    <div class=\"container base\">
        <div class=\"block dark\">
            <div class=\"cursus-container\">

                {% for message in app.flashes('danger') %}
                    <div class=\"alert alert-success alert-dismissible\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        <strong>Error!</strong> {{ message }}
                    </div>
                {% endfor %}

                <div class=\"row cursus-container-header\">
                    <div class=\"col-xs-6\">
                        {{ workshop.title }}
                    </div>
                    <div class=\"col-xs-2 cursus-container-location-pre hidden-xs\">
                        op locatie:
                    </div>
                    <div class=\"col-xs-6 col-md-4 cursus-container-location\">
                        {{ workshop.location.name }}
                    </div>
                </div>
                <div class=\"row\" style=\"padding-top: 40px\">
                    <div class=\"col-md-6\">
                        Van: {{ workshop.startDatetime | localizeddate('full', 'none') }} {{ workshop.startDatetime|date('H:i') }} uur.<br>
                        Tot: {{ workshop.endDatetime | localizeddate('full', 'none') }} {{ workshop.endDatetime|date('H:i') }} uur.<br>
                        {% if workshop.startDatetime | date('Ymd') != \"now\"|date('Ymd') %}
                            {% if workshop.seatsAvailable > 1 %}Nog <strong>{{ workshop.seatsAvailable }}</strong> beschikbare plaatsen!<br>{% elseif workshop.seatsAvailable > 0%}<p style=\"color: red\">Laatste plaats beschikbaar</p>{% else %}<strong>Geen plaatsen meer beschikbaar</strong>{% endif %}
                        {% endif %}
                        <br>
                        {{ workshop.description }}<br>
                    </div>
                    {% if workshop.startDatetime | date('Ymd') == \"now\"|date('Ymd') %}
                        <div class=\"col-md-6\">
                            <div class=\"block dark inline\">
                                <p class=\"h3\">Je bent helaas te laat!</p>
                                <br>
                                Je kunt niet op de dag zelf nog boeken.<br>
                                <br>
                                Je kunt een email sturen met je verzoek naar <a href=\"mailto:info@aazaa.nl\">info@aazaa.nl</a> en als het mogelijk is laten we je dat weten. Hoor je niets, dan was je echt te laat…
                            </div>
                        </div>
                    {% else %}
                        {% if app.user and workshop.seatsAvailable > 0 %}
                            <div class=\"col-md-6\">
                                <div class=\"block dark inline\">
                                    <p class=\"h3\">Inschrijven</p>
                                    {{ price_explanation |raw }}
                                    <form action=\"{{ path(\"workshops_cursus_register\", {'workshop' :  workshop.id}) }}\" method=\"post\">
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"0\" checked>€ {{ workshop.price(0) |number_format(2, ',', '.') }} <small>(Normaal tarief)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"1\">€ {{ workshop.price(1) | number_format(2, ',', '.') }} <small>(25% reductie)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"2\">€ {{ workshop.price(2) | number_format(2, ',', '.') }} <small>(50% reductie)</small>
                                            </label>
                                        </div>

                                        <hr>
                                        {% if booking_conditions is defined %}
                                            {{ booking_conditions | raw }}
                                        {% endif %}
                                        <div class=\"checkbox input\">
                                            <label><input name=\"req\" type=\"checkbox\" value=\"1\" required oninvalid=\"this.setCustomValidity('Je moet met de boekingsvoorwaarden akkoord gaan om de boeking te kunnen maken')\">Ik ga akkoord met bovengenoemde voorwaarden</label>
                                        </div>


                                        <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-aazaa pull-right\">Inschrijven</button>
                                    </form>
                                </div>
                            </div>
                        {% elseif app.user %}
                            <div class=\"col-md-6\">
                                <div class=\"block dark inline\">
                                    <p class=\"h3\">Geen plaatsen meer beschikbaar</p>
                                    Er is helaas geen plek meer op de door jouw gekozen dag en/of tijd. Probeer een andere dag en/of tijd waarop er nog wel beschikbare plaatsen staan aangegeven
                                </div>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>

                <div class=\"row\" style=\"padding-top: 40px\">
                    {% if workshop.startDatetime | date('Ymd') != \"now\"|date('Ymd') %}
                        {% if not app.user %}
                            <div class=\"col-xs-12\">
                                <h3>Inschrijven</h3>
                                <p>Om in te schrijven, dien je eerst in te loggen. Indien je nog geen account hebt, kan je ook een gratis account aanmaken.</p>
                                <div class=\"row\">
                                    {% include 'Blocks/loginOrCreateAccount.html.twig' with {'referer': app.request.uri } %}
                                </div>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>
            {{ pageContent.content | raw }}
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: 30px;\">
        {{ render(controller(
            'App\\\\Controller\\\\DefaultController::navigationMiddle'
        )) }}
    </div>
{% endblock %}

{% extends 'Base/base.html.twig' %}", "Workshop/detail.html.twig", "/home/deb116267/domains/aazaa.org/templates/Workshop/detail.html.twig");
    }
}
