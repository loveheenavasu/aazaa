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
class __TwigTemplate_1a2bfeec9b303a7d1f5db9b82c0c46cb428a684e5067bd45a5967d836d741676 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Workshop/detail.html.twig", 118);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaTitle", [], "any", false, false, false, 1), "html", null, true);
    }

    // line 2
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaDescription", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container base\">
        <div class=\"block dark\">
            <div class=\"cursus-container\">

                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "danger"], "method", false, false, false, 10));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-xs-2 cursus-container-location-pre hidden-xs\">
                        op locatie:
                    </div>
                    <div class=\"col-xs-6 col-md-4 cursus-container-location\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "location", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"padding-top: 40px\">
                    <div class=\"col-md-6\">
                        Van: ";
        // line 30
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 30), "full", "none"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        echo " uur.<br>
                        Tot: ";
        // line 31
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "endDatetime", [], "any", false, false, false, 31), "full", "none"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "endDatetime", [], "any", false, false, false, 31), "H:i"), "html", null, true);
        echo " uur.<br>
                        ";
        // line 32
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 32), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
            // line 33
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "seatsAvailable", [], "any", false, false, false, 33) > 1)) {
                echo "Nog <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "seatsAvailable", [], "any", false, false, false, 33), "html", null, true);
                echo "</strong> beschikbare plaatsen!<br>";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "seatsAvailable", [], "any", false, false, false, 33) > 0)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "<br>
                    </div>
                    ";
        // line 38
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 38), "Ymd") == twig_date_format_filter($this->env, "now", "Ymd"))) {
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
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49) && (twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "seatsAvailable", [], "any", false, false, false, 49) > 0))) {
                // line 50
                echo "                            <div class=\"col-md-6\">
                                <div class=\"block dark inline\">
                                    <p class=\"h3\">Inschrijven</p>
                                    ";
                // line 53
                echo ($context["price_explanation"] ?? null);
                echo "
                                    <form action=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshops_cursus_register", ["workshop" => twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" method=\"post\">
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"0\" checked>€ ";
                // line 57
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "price", [0 => 0], "method", false, false, false, 57), 2, ",", "."), "html", null, true);
                echo " <small>(Normaal tarief)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"1\">€ ";
                // line 62
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "price", [0 => 1], "method", false, false, false, 62), 2, ",", "."), "html", null, true);
                echo " <small>(25% reductie)</small>
                                            </label>
                                        </div>
                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"price\" value=\"2\">€ ";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "price", [0 => 2], "method", false, false, false, 67), 2, ",", "."), "html", null, true);
                echo " <small>(50% reductie)</small>
                                            </label>
                                        </div>

                                        <hr>
                                        ";
                // line 72
                if ((isset($context["booking_conditions"]) || array_key_exists("booking_conditions", $context))) {
                    // line 73
                    echo "                                            ";
                    echo ($context["booking_conditions"] ?? null);
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
($context["app"] ?? null), "user", [], "any", false, false, false, 84)) {
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
        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "startDatetime", [], "any", false, false, false, 96), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
            // line 97
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 97)) {
                // line 98
                echo "                            <div class=\"col-xs-12\">
                                <h3>Inschrijven</h3>
                                <p>Om in te schrijven, dien je eerst in te loggen. Indien je nog geen account hebt, kan je ook een gratis account aanmaken.</p>
                                <div class=\"row\">
                                    ";
                // line 102
                $this->loadTemplate("Blocks/loginOrCreateAccount.html.twig", "Workshop/detail.html.twig", 102)->display(twig_array_merge($context, ["referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 102), "uri", [], "any", false, false, false, 102)]));
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
        echo twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "content", [], "any", false, false, false, 108);
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
        return array (  274 => 114,  272 => 112,  265 => 108,  262 => 107,  259 => 106,  254 => 103,  252 => 102,  246 => 98,  243 => 97,  241 => 96,  236 => 93,  233 => 92,  224 => 85,  222 => 84,  211 => 75,  205 => 73,  203 => 72,  195 => 67,  187 => 62,  179 => 57,  173 => 54,  169 => 53,  164 => 50,  161 => 49,  149 => 39,  147 => 38,  142 => 36,  139 => 35,  136 => 34,  125 => 33,  123 => 32,  117 => 31,  111 => 30,  103 => 25,  94 => 19,  89 => 16,  80 => 13,  76 => 11,  72 => 10,  66 => 6,  62 => 5,  55 => 2,  48 => 1,  37 => 118,);
    }

    public function getSourceContext()
    {
        return new Source("", "Workshop/detail.html.twig", "/home/deb116267/domains/aazaa.org/templates/Workshop/detail.html.twig");
    }
}
