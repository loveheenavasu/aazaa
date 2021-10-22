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
class __TwigTemplate_4b8cb3c4b5e5e056c0cf227c48061ef03988dda4403a836fe70ee69ee4391bb4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/workshop.html.twig", 47);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"block dark\">
        <h2>Workshops / Sessies</h2>
        <div class=\"row\">
            ";
        // line 5
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !($context["empty"] ?? null))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "workshops", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "workshops", [], "any", false, false, false, 12));
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
        return array (  145 => 38,  141 => 36,  138 => 35,  132 => 34,  128 => 32,  122 => 29,  119 => 28,  117 => 27,  109 => 24,  103 => 23,  99 => 22,  95 => 21,  89 => 18,  82 => 16,  78 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 8,  57 => 6,  55 => 5,  50 => 2,  46 => 1,  35 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/workshop.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/workshop.html.twig");
    }
}
