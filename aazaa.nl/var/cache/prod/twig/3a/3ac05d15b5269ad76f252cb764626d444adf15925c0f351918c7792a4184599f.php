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
class __TwigTemplate_fbe1768f1ddef4e716adf2d9b8f63e569cc8c1928f6364b20c575849b7a51936 extends \Twig\Template
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
        // line 8
        $context["counter"] = 0;
        // line 135
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Workshop/calendar.html.twig", 135);
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

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/schedule.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"container base\">
        <div class=\"col-xs-12 block dark\">
            <div class=\"row\">
                ";
        // line 14
        if ((twig_date_format_filter($this->env, ($context["startDate"] ?? null), "YW") > twig_date_format_filter($this->env, "now", "YW"))) {
            // line 15
            echo "                    <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar_date", ["year" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), "-1 week"), "Y"), "week" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), "-1 week"), "W")]), "html", null, true);
            echo "\">vorige week</a>
                ";
        } else {
            // line 17
            echo "                    <div class=\"col-xs-12 col-md-3\"></div>
                ";
        }
        // line 19
        echo "                <div class=\"col-xs-12 col-md-6\" style=\"text-align: center\"> Weeknummer: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["startDate"] ?? null), "W"), "html", null, true);
        echo "</div>
                <a class=\"col-xs-12 col-md-3 btn btn-aazaa\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_calendar_date", ["year" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), "+1 week"), "Y"), "week" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), "+1 week"), "W")]), "html", null, true);
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
        if (((isset($context["latestTime"]) || array_key_exists("latestTime", $context)) && (($context["latestTime"] ?? null) > 18))) {
            // line 46
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(18, ($context["latestTime"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 47
                echo "                                ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["workshops"] ?? null));
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
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["dateNames"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["datenummer"] ?? null)] ?? null) : null), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), (("+" . ($context["datenummer"] ?? null)) . " day")), "d-m-Y"), "html", null, true);
            echo "</span></div>
                                <ul class=\"";
            // line 66
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), (("+" . ($context["datenummer"] ?? null)) . " day")), "Ymd") < twig_date_format_filter($this->env, "now", "Ymd"))) {
                echo "calendar-past";
            } elseif ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["startDate"] ?? null), (("+" . ($context["datenummer"] ?? null)) . " day")), "Ymd") == twig_date_format_filter($this->env, "now", "Ymd"))) {
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["workshop"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["startTime"] ?? null) : null), "H:i"), "html", null, true);
                echo "\" data-end=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["workshop"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["endTime"] ?? null) : null), "H:i"), "html", null, true);
                echo "\" data-color=\"";
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["workshop"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["color"] ?? null) : null), "html", null, true);
                echo "\" style=\"background-color: ";
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["workshop"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["color"] ?? null) : null), "html", null, true);
                echo "\">
                                            <a href=\"#0\">
                                                <em class=\"event-name\">";
                // line 70
                echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["workshop"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["title"] ?? null) : null), "html", null, true);
                echo "  <font style=\"color: red\">";
                if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["workshop"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["seatsAvailable"] ?? null) : null) < 1)) {
                    echo "(VOL!)";
                }
                echo "</font></em>
                                            </a>
                                            <div class=\"event-model-info\">
                                                <div>
                                                    ";
                // line 74
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["workshop"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["description"] ?? null) : null), "html", null, true);
                echo "<br><br>
                                                    ";
                // line 75
                if ((twig_date_format_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["workshop"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["date"] ?? null) : null), "Ymd") != twig_date_format_filter($this->env, "now", "Ymd"))) {
                    // line 76
                    echo "                                                        ";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["workshop"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["seatsAvailable"] ?? null) : null) > 0)) {
                        // line 77
                        echo "                                                            <a class=\"btn btn-aazaa pull-right\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshops_cursus_detail", ["slug" => (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["workshop"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["slug"] ?? null) : null)]), "html", null, true);
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
    }

    // line 131
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/schedule.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  343 => 133,  338 => 132,  334 => 131,  327 => 126,  325 => 124,  297 => 98,  281 => 95,  272 => 91,  264 => 85,  261 => 84,  254 => 79,  248 => 77,  245 => 76,  243 => 75,  239 => 74,  228 => 70,  216 => 68,  212 => 67,  204 => 66,  198 => 65,  194 => 63,  191 => 62,  173 => 61,  171 => 60,  161 => 53,  158 => 52,  155 => 51,  147 => 49,  142 => 48,  139 => 47,  134 => 46,  132 => 45,  104 => 20,  99 => 19,  95 => 17,  89 => 15,  87 => 14,  82 => 11,  78 => 10,  71 => 5,  67 => 4,  60 => 2,  53 => 1,  48 => 135,  46 => 8,  39 => 135,);
    }

    public function getSourceContext()
    {
        return new Source("", "Workshop/calendar.html.twig", "/home/deb116267/domains/aazaa.org/templates/Workshop/calendar.html.twig");
    }
}
