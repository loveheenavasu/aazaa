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

/* Admin/User/detail.html.twig */
class __TwigTemplate_fd25e9a54a8aec56eb9b5bfdf78ce8b8d560dba3bb0502273260cd62dca5aa5f extends \Twig\Template
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
        // line 157
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/User/detail.html.twig", 157);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((isset($context["user"]) || array_key_exists("user", $context))) {
            // line 3
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h2>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 5), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 5), "html", null, true);
            echo "</h2>
                <a class=\"btn btn-warning pull-right\" href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_overview");
            echo "\">Terug</a>
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#profile\">Profiel</a></li>
                    <li><a data-toggle=\"tab\" href=\"#favorites\">Favorieten</a></li>
                    <li><a data-toggle=\"tab\" href=\"#videos\">Bekeken video's</a></li>
                    <li><a data-toggle=\"tab\" href=\"#workshops\">Workshop / sessies</a></li>
                    <li><a data-toggle=\"tab\" href=\"#email\">Emails</a></li>
                    <li><a data-toggle=\"tab\" href=\"#subscription\">Lidmaatschap</a></li>
                </ul>

                <div class=\"tab-content\">

                    <div id=\"profile\" class=\"tab-pane fade in active\">
                        <h3>Profiel</h3>
                        <table class=\"table table-responsive table-striped\">
                            <tr>
                                <td>Id</td>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Geslacht</td>
                                <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "gender", [], "any", false, false, false, 27)) {
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "gender", [], "any", false, false, false, 27) == "f")) {
                    echo "Vrouw";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "gender", [], "any", false, false, false, 27) == "m")) {
                    echo "Man";
                }
            }
            echo "</td>
                            </tr>
                            <tr>
                                <td>Voornaam</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Achternaam</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Aangemaakt op</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "created", [], "any", false, false, false, 39), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Laatste login</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastLogin", [], "any", false, false, false, 43), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                            </tr>
                        </table>
                    </div>

                    <div id=\"favorites\" class=\"tab-pane fade\">
                        <h3>Favorieten</h3>
                        <table class=\"table table-responsive table-striped\">
                            <tr>
                               <th>Naam</th>
                               <th>Vanaf</th>
                            </tr>
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "favorites", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["favorites"]) {
                // line 56
                echo "                                <tr>
                                    <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorites"], "pageContent", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                                    <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorites"], "created", [], "any", false, false, false, 58), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorites'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        </table>
                    </div>

                    <div id=\"videos\" class=\"tab-pane fade\">
                        <h3>Bekeken video's</h3>
                        <table class=\"table table-responsive table-striped\">
                            <tr>
                                <th>Naam</th>
                                <th>Aantal keer bekeken</th>
                                <th>Eerste keer bekeken</th>
                                <th>Laatste keer bekeken</th>
                            </tr>
                            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "watchLog", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["watchLog"]) {
                // line 74
                echo "                                <tr>
                                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                                    <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "views", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
                                    <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "created", [], "any", false, false, false, 77), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "updated", [], "any", false, false, false, 78), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['watchLog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </table>
                    </div>

                    <div id=\"workshops\" class=\"tab-pane fade\">
                        <h3>Workshops / Sessies</h3>
                        <table class=\"table table-responsive table-striped\">
                            <tr>
                                <th>Naam</th>
                                <th>van - tot Datum</th>
                                <th>Naam</th>
                                <th>Betaald</th>
                                <th>Aangemeld</th>
                                <th>Laatste Update</th>
                            </tr>
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "workshops", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["workshops"]) {
                // line 96
                echo "                                <tr>
                                    <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshops"], "workshop", [], "any", false, false, false, 97), "title", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                                    <td>";
                // line 98
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshops"], "workshop", [], "any", false, false, false, 98), "startDatetime", [], "any", false, false, false, 98), "d-m-Y H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshops"], "workshop", [], "any", false, false, false, 98), "endDatetime", [], "any", false, false, false, 98), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["workshops"], "paid", [], "any", false, false, false, 99)) {
                    echo "Ja";
                } else {
                    echo "Nee";
                }
                echo "</td>
                                    <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshops"], "created", [], "any", false, false, false, 100), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshops"], "updated", [], "any", false, false, false, 101), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshops'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                        </table>
                    </div>

                    <div id=\"email\" class=\"tab-pane fade\">
                        <h3>Email</h3>
                        ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 109)) {
                // line 110
                echo "                            <table class=\"table table-responsive table-striped\">
                                <tr>
                                    <th>Verzonden</th>
                                    <th>Onderwerp</th>
                                    <th>Log</th>
                                </tr>
                                ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 117
                    echo "                                    <tr>
                                        <td>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "created", [], "any", false, false, false, 118), "d-m-Y H:i"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "subject", [], "any", false, false, false, 119), "html", null, true);
                    echo "</td>
                                        <td>
                                            ";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "trackings", [], "any", false, false, false, 121));
                    foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                        // line 122
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "datetime", [], "any", false, false, false, 122), "d-m-Y H:i"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "type", [], "any", false, false, false, 122), "html", null, true);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["track"], "url", [], "any", false, false, false, 122)) {
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "url", [], "any", false, false, false, 122), "html", null, true);
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["track"], "ipadress", [], "any", false, false, false, 122)) {
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "ipadress", [], "any", false, false, false, 122), "html", null, true);
                        }
                        echo "<br>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                            </table>
                        ";
            } else {
                // line 129
                echo "                            Nog geen mails verzonden vanuit aazaa.org
                        ";
            }
            // line 131
            echo "                    </div>

                    <div id=\"subscription\" class=\"tab-pane fade\">
                        <h3>Lidmaatschap</h3>
                        ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "subscriptionActiveTillDate", [], "any", false, false, false, 135)) {
                // line 136
                echo "                            ";
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "subscriptionActiveTillDate", [], "any", false, false, false, 136), "Ymd") > twig_date_format_filter($this->env, "NOW", "Ymd"))) {
                    // line 137
                    echo "                                Lidmaatschap is geldig tot ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "subscriptionActiveTillDate", [], "any", false, false, false, 137), "d-m-Y H:i"), "html", null, true);
                    echo ".<br>
                                ";
                    // line 138
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "subscriptionActive", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                                    Lidmaatschap wordt automatisch op deze datum verlengt voor 1 maand.<br>
                                ";
                    } else {
                        // line 141
                        echo "                                    Lidmaatschap wordt niet automatisch meer verlengd. <br>Na ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "subscriptionActiveTillDate", [], "any", false, false, false, 141), "d-m-Y H:i"), "html", null, true);
                        echo " wordt het account omgezet, naar de gratis versie.
                                ";
                    }
                    // line 143
                    echo "                            ";
                } else {
                    // line 144
                    echo "                                Het lidmaatschap is verlopen en is niet automatisch kunnen verlengen
                            ";
                }
                // line 146
                echo "                        ";
            } else {
                // line 147
                echo "                            Nog geen lidmaatschap afgenomen.
                        ";
            }
            // line 149
            echo "                    </div>
                </div>
            </div>
        </div>

    ";
        }
        // line 155
        echo "
";
    }

    public function getTemplateName()
    {
        return "Admin/User/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 155,  371 => 149,  367 => 147,  364 => 146,  360 => 144,  357 => 143,  351 => 141,  347 => 139,  345 => 138,  340 => 137,  337 => 136,  335 => 135,  329 => 131,  325 => 129,  321 => 127,  313 => 124,  292 => 122,  288 => 121,  283 => 119,  279 => 118,  276 => 117,  272 => 116,  264 => 110,  262 => 109,  255 => 104,  246 => 101,  242 => 100,  234 => 99,  228 => 98,  224 => 97,  221 => 96,  217 => 95,  201 => 81,  192 => 78,  188 => 77,  184 => 76,  180 => 75,  177 => 74,  173 => 73,  159 => 61,  150 => 58,  146 => 57,  143 => 56,  139 => 55,  124 => 43,  117 => 39,  110 => 35,  103 => 31,  90 => 27,  83 => 23,  63 => 6,  57 => 5,  53 => 3,  50 => 2,  46 => 1,  35 => 157,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/User/detail.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/User/detail.html.twig");
    }
}
