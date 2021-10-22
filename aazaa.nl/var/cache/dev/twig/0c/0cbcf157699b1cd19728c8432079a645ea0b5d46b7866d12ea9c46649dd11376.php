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

/* Workshop/calendar.html.twig */
class __TwigTemplate_fa5fd7b9904334e9a4f5e4490437684951ea6ff4f761704f0142214669def9eb extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 135
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Workshop/calendar.html.twig"));

        // line 8
        $context["counter"] = 0;
        // line 135
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Workshop/calendar.html.twig", 135);
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

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/schedule.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"container base\">
        <div class=\"col-xs-12 block dark\">
            <div class=\"row\">
                ";
        // line 14
        if ((twig_date_format_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 14, $this->source); })()), "YW") > twig_date_format_filter($this->env, "now", "YW"))) {
            // line 15
            echo "                    <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar_date", ["year" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 15, $this->source); })()), "-1 week"), "Y"), "week" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 15, $this->source); })()), "-1 week"), "W")]), "html", null, true);
            echo "\">vorige week</a>
                ";
        } else {
            // line 17
            echo "                    <div class=\"col-xs-12 col-md-3\"></div>
                ";
        }
        // line 19
        echo "                <div class=\"col-xs-12 col-md-6\" style=\"text-align: center\"> Weeknummer: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 19, $this->source); })()), "W"), "html", null, true);
        echo "</div>
                <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar_date", ["year" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 20, $this->source); })()), "+1 week"), "Y"), "week" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 20, $this->source); })()), "+1 week"), "W")]), "html", null, true);
        echo "\">volgende week</a>
            </div>

            <div class=\"cd-schedule loading\">
                <div class=\"timeline\">
                    <ul>
                        <li><span>09:00</span></li>
                        <li><span>09:30</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:30</span></li>
                        <li><span>11:00</span></li>
                        <li><span>11:30</span></li>
                        <li><span>12:00</span></li>
                        <li><span>12:30</span></li>
                        <li><span>13:00</span></li>
                        <li><span>13:30</span></li>
                        <li><span>14:00</span></li>
                        <li><span>14:30</span></li>
                        <li><span>15:00</span></li>
                        <li><span>15:30</span></li>
                        <li><span>16:00</span></li>
                        <li><span>16:30</span></li>
                        <li><span>17:00</span></li>
                        <li><span>17:30</span></li>
                        <li><span>18:00</span></li>
                        ";
        // line 45
        if (((isset($context["latestTime"]) || array_key_exists("latestTime", $context)) && ((isset($context["latestTime"]) || array_key_exists("latestTime", $context) ? $context["latestTime"] : (function () { throw new RuntimeError('Variable "latestTime" does not exist.', 45, $this->source); })()) > 18))) {
            // line 46
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(18, (isset($context["latestTime"]) || array_key_exists("latestTime", $context) ? $context["latestTime"] : (function () { throw new RuntimeError('Variable "latestTime" does not exist.', 46, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 47
                echo "                                ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 47, $this->source); })()) + 1);
                // line 48
                echo "                                <li><span>";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo ":30</span></li>
                                <li><span>";
                // line 49
                echo twig_escape_filter($this->env, ($context["test"] + 1), "html", null, true);
                echo ":00</span></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        ";
        }
        // line 52
        echo "                        <script>
                            var counter = ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ";
                        </script>
                    </ul>
                </div>

                <div class=\"events\">
                    <ul>
                        ";
        // line 60
        $context["dateNames"] = [0 => "Maandag", 1 => "Dinsdag", 2 => "Woensdag", 3 => "Donderdag", 4 => "Vrijdag", 5 => "Zaterdag", 6 => "Zondag"];
        // line 61
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 61, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["date"] => $context["workshopData"]) {
            // line 62
            echo "                            ";
            $context["datenummer"] = (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62) - 1);
            // line 63
            echo "
                            <li class=\"events-group\">
                                <div class=\"top-info\"><span>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dateNames"]) || array_key_exists("dateNames", $context) ? $context["dateNames"] : (function () { throw new RuntimeError('Variable "dateNames" does not exist.', 65, $this->source); })()), (isset($context["datenummer"]) || array_key_exists("datenummer", $context) ? $context["datenummer"] : (function () { throw new RuntimeError('Variable "datenummer" does not exist.', 65, $this->source); })()), [], "array", false, false, false, 65), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 65, $this->source); })()), (("+" . (isset($context["datenummer"]) || array_key_exists("datenummer", $context) ? $context["datenummer"] : (function () { throw new RuntimeError('Variable "datenummer" does not exist.', 65, $this->source); })())) . " day")), "d-m-Y"), "html", null, true);
            echo "</span></div>
                                <ul class=\"";
            // line 66
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 66, $this->source); })()), (("+" . (isset($context["datenummer"]) || array_key_exists("datenummer", $context) ? $context["datenummer"] : (function () { throw new RuntimeError('Variable "datenummer" does not exist.', 66, $this->source); })())) . " day")), "Ymd") < twig_date_format_filter($this->env, "now", "Ymd"))) {
                echo "calendar-past";
            } elseif ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 66, $this->source); })()), (("+" . (isset($context["datenummer"]) || array_key_exists("datenummer", $context) ? $context["datenummer"] : (function () { throw new RuntimeError('Variable "datenummer" does not exist.', 66, $this->source); })())) . " day")), "Ymd") == twig_date_format_filter($this->env, "now", "Ymd"))) {
                echo "calendar-today";
            }
            echo "\">
                                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["workshopData"]);
            foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
                // line 68
                echo "                                        <li class=\"single-event\" data-start=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "startTime", [], "array", false, false, false, 68), "H:i"), "html", null, true);
                echo "\" data-end=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "endTime", [], "array", false, false, false, 68), "H:i"), "html", null, true);
                echo "\" data-color=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "color", [], "array", false, false, false, 68), "html", null, true);
                echo "\" style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "color", [], "array", false, false, false, 68), "html", null, true);
                echo "\">
                                            <a href=\"#0\">
                                                <em class=\"event-name\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "title", [], "array", false, false, false, 70), "html", null, true);
                echo "  <font style=\"color: red\">";
                if ((twig_get_attribute($this->env, $this->source, $context["workshop"], "seatsAvailable", [], "array", false, false, false, 70) < 1)) {
                    echo "(VOL!)";
                }
                echo "</font></em>
                                            </a>
                                            <div class=\"event-model-info\">
                                                <div>
                                                    ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "description", [], "array", false, false, false, 74), "html", null, true);
                echo "<br><br>
                                                    ";
                // line 75
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "date", [], "array", false, false, false, 75), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
                    // line 76
                    echo "                                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["workshop"], "seatsAvailable", [], "array", false, false, false, 76) > 0)) {
                        // line 77
                        echo "                                                            <a class=\"btn btn-aazaa pull-right\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshops_cursus_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["workshop"], "slug", [], "array", false, false, false, 77)]), "html", null, true);
                        echo "\">Aanmelden</a>
                                                        ";
                    } else {
                        // line 79
                        echo "                                                            <b>
                                                                Er is helaas geen plek meer op de door jou gekozen dag en/of tijd.<br>
                                                                Probeer een andere dag en/of tijd waarop er nog wel beschikbare plaatsen staan aangegeven
                                                            </b>
                                                        ";
                    }
                    // line 84
                    echo "                                                    ";
                } else {
                    // line 85
                    echo "                                                        <p class=\"h3\">Je bent helaas te laat!</p>
                                                        <br>
                                                        Je kunt niet op de dag zelf nog boeken.<br>
                                                        <br>
                                                        Je kunt een email sturen met je verzoek naar <a style=\"color: black\" href=\"mailto:info@aazaa.nl\">info@aazaa.nl</a> en als het mogelijk is laten we je dat weten. Hoor je niets, dan was je echt te laat…
                                                    ";
                }
                // line 91
                echo "                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                </ul>
                            </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['workshopData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    </ul>
                </div>

                <div class=\"event-modal\">
                    <header class=\"header\">
                        <div class=\"content\">
                            <span class=\"event-date\"></span>
                            <h3 class=\"event-name\"></h3>
                        </div>

                        <div class=\"header-bg\"></div>
                    </header>

                    <div class=\"body\">
                        <div class=\"event-info\"><div></div></div>
                        <div class=\"body-bg\"></div>
                    </div>

                    <a href=\"#0\" class=\"close\"></a>
                </div>
                <div class=\"cover-layer\"></div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 126
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 132
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/schedule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Workshop/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 133,  404 => 132,  394 => 131,  381 => 126,  379 => 124,  351 => 98,  335 => 95,  326 => 91,  318 => 85,  315 => 84,  308 => 79,  302 => 77,  299 => 76,  297 => 75,  293 => 74,  282 => 70,  270 => 68,  266 => 67,  258 => 66,  252 => 65,  248 => 63,  245 => 62,  227 => 61,  225 => 60,  215 => 53,  212 => 52,  209 => 51,  201 => 49,  196 => 48,  193 => 47,  188 => 46,  186 => 45,  158 => 20,  153 => 19,  149 => 17,  143 => 15,  141 => 14,  136 => 11,  126 => 10,  113 => 5,  103 => 4,  84 => 2,  65 => 1,  54 => 135,  52 => 8,  39 => 135,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaTitle %}{{ pageContent.metaTitle }}{% endblock %}
{% block description %}{{ pageContent.metaDescription }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/schedule.css') }}\">
{% endblock %}

{% set counter = 0 %}

{% block content %}
    <div class=\"container base\">
        <div class=\"col-xs-12 block dark\">
            <div class=\"row\">
                {% if startDate|date(\"YW\") > \"now\"|date(\"YW\") %}
                    <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"{{ path('sessions_calendar_date', {'year': startDate|date_modify(\"-1 week\")|date(\"Y\"), 'week': startDate|date_modify(\"-1 week\")|date(\"W\") }) }}\">vorige week</a>
                {% else %}
                    <div class=\"col-xs-12 col-md-3\"></div>
                {% endif %}
                <div class=\"col-xs-12 col-md-6\" style=\"text-align: center\"> Weeknummer: {{ startDate|date('W') }}</div>
                <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"{{ path('sessions_calendar_date', {'year': startDate|date_modify(\"+1 week\")|date(\"Y\"), 'week': startDate|date_modify(\"+1 week\")|date(\"W\") }) }}\">volgende week</a>
            </div>

            <div class=\"cd-schedule loading\">
                <div class=\"timeline\">
                    <ul>
                        <li><span>09:00</span></li>
                        <li><span>09:30</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:30</span></li>
                        <li><span>11:00</span></li>
                        <li><span>11:30</span></li>
                        <li><span>12:00</span></li>
                        <li><span>12:30</span></li>
                        <li><span>13:00</span></li>
                        <li><span>13:30</span></li>
                        <li><span>14:00</span></li>
                        <li><span>14:30</span></li>
                        <li><span>15:00</span></li>
                        <li><span>15:30</span></li>
                        <li><span>16:00</span></li>
                        <li><span>16:30</span></li>
                        <li><span>17:00</span></li>
                        <li><span>17:30</span></li>
                        <li><span>18:00</span></li>
                        {% if latestTime is defined and latestTime > 18 %}
                            {% for test in 18..latestTime %}
                                {% set counter = counter +1 %}
                                <li><span>{{ test }}:30</span></li>
                                <li><span>{{ test+1 }}:00</span></li>
                            {% endfor %}
                        {% endif %}
                        <script>
                            var counter = {{ counter }};
                        </script>
                    </ul>
                </div>

                <div class=\"events\">
                    <ul>
                        {% set dateNames = ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag'] %}
                        {% for date, workshopData in workshops %}
                            {% set datenummer = loop.index-1 %}

                            <li class=\"events-group\">
                                <div class=\"top-info\"><span>{{ dateNames[datenummer] }}<br>{{ startDate | date_modify(\"+\"~datenummer~\" day\") | date('d-m-Y') }}</span></div>
                                <ul class=\"{% if startDate | date_modify(\"+\"~datenummer~\" day\") | date('Ymd') < \"now\"|date('Ymd') %}calendar-past{% elseif startDate| date_modify(\"+\"~datenummer~\" day\")| date('Ymd') == \"now\"|date('Ymd') %}calendar-today{% endif %}\">
                                    {% for workshop in workshopData %}
                                        <li class=\"single-event\" data-start=\"{{ workshop['startTime']|date('H:i') }}\" data-end=\"{{ workshop['endTime']|date('H:i') }}\" data-color=\"{{ workshop['color'] }}\" style=\"background-color: {{ workshop['color'] }}\">
                                            <a href=\"#0\">
                                                <em class=\"event-name\">{{ workshop['title'] }}  <font style=\"color: red\">{% if workshop['seatsAvailable'] < 1 %}(VOL!){% endif %}</font></em>
                                            </a>
                                            <div class=\"event-model-info\">
                                                <div>
                                                    {{ workshop['description'] }}<br><br>
                                                    {% if workshop['date'] | date('Ymd') != \"now\"|date('Ymd') %}
                                                        {% if workshop['seatsAvailable'] > 0 %}
                                                            <a class=\"btn btn-aazaa pull-right\" href=\"{{ path('workshops_cursus_detail', {'slug': workshop['slug']}) }}\">Aanmelden</a>
                                                        {% else %}
                                                            <b>
                                                                Er is helaas geen plek meer op de door jou gekozen dag en/of tijd.<br>
                                                                Probeer een andere dag en/of tijd waarop er nog wel beschikbare plaatsen staan aangegeven
                                                            </b>
                                                        {% endif %}
                                                    {% else %}
                                                        <p class=\"h3\">Je bent helaas te laat!</p>
                                                        <br>
                                                        Je kunt niet op de dag zelf nog boeken.<br>
                                                        <br>
                                                        Je kunt een email sturen met je verzoek naar <a style=\"color: black\" href=\"mailto:info@aazaa.nl\">info@aazaa.nl</a> en als het mogelijk is laten we je dat weten. Hoor je niets, dan was je echt te laat…
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </li>
                        {% endfor %}
                    </ul>
                </div>

                <div class=\"event-modal\">
                    <header class=\"header\">
                        <div class=\"content\">
                            <span class=\"event-date\"></span>
                            <h3 class=\"event-name\"></h3>
                        </div>

                        <div class=\"header-bg\"></div>
                    </header>

                    <div class=\"body\">
                        <div class=\"event-info\"><div></div></div>
                        <div class=\"body-bg\"></div>
                    </div>

                    <a href=\"#0\" class=\"close\"></a>
                </div>
                <div class=\"cover-layer\"></div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        {{ render(controller(
            'App\\\\Controller\\\\DefaultController::navigationMiddle'
        )) }}
    </div>

{% endblock %}

{% block javascript_footer %}
    <script src=\"{{ asset('js/modernizr.js') }}\"></script>
    <script src=\"{{ asset('js/schedule.js') }}\"></script>
{% endblock %}
{% extends 'Base/base.html.twig' %}", "Workshop/calendar.html.twig", "/home/deb116267/domains/aazaa.org/templates/Workshop/calendar.html.twig");
    }
}
