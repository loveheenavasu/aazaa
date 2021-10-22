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

/* Templates/template1.html.twig */
class __TwigTemplate_26ba36a4151a06274cac0cd3441e3da55b9821714db3ac75f179e4147b5514b8 extends \Twig\Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 129
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Templates/template1.html.twig", 129);
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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    <div class=\"container base\">
        ";
        // line 7
        $this->loadTemplate("Blocks/addToFavorites.html.twig", "Templates/template1.html.twig", 7)->display($context);
        // line 8
        echo "
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"col-md-3 hidden-xs hidden-sm\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pageContentRelation"]) {
            // line 13
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 13) == "links")) {
                // line 14
                echo "                            ";
                $context["baseFilter"] = "";
                // line 15
                echo "                            ";
                $context["paidFilter"] = "";
                // line 16
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, true, false, 16), "category", [], "any", true, true, false, 16) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 16), "category", [], "any", false, false, false, 16)))) {
                    // line 17
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 17), "category", [], "any", false, false, false, 17), "cssFilter", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                        // line 18
                        echo "                                    ";
                        if (($context["filter"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 18), "template", [], "any", false, false, false, 18))) {
                            // line 19
                            echo "                                        ";
                            $context["baseFilter"] = $context["value"];
                            // line 20
                            echo "                                    ";
                        }
                        // line 21
                        echo "                                    ";
                        if (($context["filter"] == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 21), "template", [], "any", false, false, false, 21) . "-betaald"))) {
                            // line 22
                            echo "                                        ";
                            $context["paidFilter"] = $context["value"];
                            // line 23
                            echo "                                    ";
                        }
                        // line 24
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                            ";
                }
                // line 26
                echo "                            ";
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 26)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 26), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
                // line 27
                echo "                        ";
            }
            // line 28
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentRelation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"video-embed-container\">
                        <iframe class=\"video-embed\" src=\"https:\\\\player.vimeo.com\\video\\";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 32), "html", null, true);
        echo "?autoplay=1&loop=0&autopause=0\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"col-md-3 hidden-xs hidden-sm\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 36));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pageContentRelation"]) {
            // line 37
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 37) == "rechts")) {
                // line 38
                echo "                            ";
                $context["baseFilter"] = "";
                // line 39
                echo "                            ";
                $context["paidFilter"] = "";
                // line 40
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, true, false, 40), "category", [], "any", true, true, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40)))) {
                    // line 41
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 41), "category", [], "any", false, false, false, 41), "cssFilter", [], "any", false, false, false, 41));
                    foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                        // line 42
                        echo "                                    ";
                        if (($context["filter"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 42), "template", [], "any", false, false, false, 42))) {
                            // line 43
                            echo "                                        ";
                            $context["baseFilter"] = $context["value"];
                            // line 44
                            echo "                                    ";
                        }
                        // line 45
                        echo "                                    ";
                        if (($context["filter"] == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 45), "template", [], "any", false, false, false, 45) . "-betaald"))) {
                            // line 46
                            echo "                                        ";
                            $context["paidFilter"] = $context["value"];
                            // line 47
                            echo "                                    ";
                        }
                        // line 48
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "                            ";
                }
                // line 50
                echo "                            ";
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 50)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 50), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
                // line 51
                echo "                        ";
            }
            // line 52
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentRelation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
            </div>
        </div>

        <div class=\"col-xs-12\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 60
        echo "
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 65));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pageContentRelation"]) {
            // line 66
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 66) == "rijboven")) {
                // line 67
                echo "                        <div class=\"col-xs-12 col-sm-6 col-md-3 template2-video\">
                            ";
                // line 68
                $context["baseFilter"] = "";
                // line 69
                echo "                            ";
                $context["paidFilter"] = "";
                // line 70
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, true, false, 70), "category", [], "any", true, true, false, 70) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 70), "category", [], "any", false, false, false, 70)))) {
                    // line 71
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 71), "category", [], "any", false, false, false, 71), "cssFilter", [], "any", false, false, false, 71));
                    foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                        // line 72
                        echo "                                    ";
                        if (($context["filter"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 72), "template", [], "any", false, false, false, 72))) {
                            // line 73
                            echo "                                        ";
                            $context["baseFilter"] = $context["value"];
                            // line 74
                            echo "                                    ";
                        }
                        // line 75
                        echo "                                    ";
                        if (($context["filter"] == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 75), "template", [], "any", false, false, false, 75) . "-betaald"))) {
                            // line 76
                            echo "                                        ";
                            $context["paidFilter"] = $context["value"];
                            // line 77
                            echo "                                    ";
                        }
                        // line 78
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                            ";
                }
                // line 80
                echo "                            ";
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 80)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 80), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
                // line 81
                echo "                        </div>
                    ";
            }
            // line 83
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentRelation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 88));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pageContentRelation"]) {
            // line 89
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 89) == "rijonder")) {
                // line 90
                echo "                        <div class=\"col-xs-12 col-sm-6 col-md-3 template2-video\">
                            ";
                // line 91
                $context["baseFilter"] = "";
                // line 92
                echo "                            ";
                $context["paidFilter"] = "";
                // line 93
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, true, false, 93), "category", [], "any", true, true, false, 93) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 93), "category", [], "any", false, false, false, 93)))) {
                    // line 94
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 94), "category", [], "any", false, false, false, 94), "cssFilter", [], "any", false, false, false, 94));
                    foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                        // line 95
                        echo "                                    ";
                        if (($context["filter"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 95), "template", [], "any", false, false, false, 95))) {
                            // line 96
                            echo "                                        ";
                            $context["baseFilter"] = $context["value"];
                            // line 97
                            echo "                                    ";
                        }
                        // line 98
                        echo "                                    ";
                        if (($context["filter"] == (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 98), "template", [], "any", false, false, false, 98) . "-betaald"))) {
                            // line 99
                            echo "                                        ";
                            $context["paidFilter"] = $context["value"];
                            // line 100
                            echo "                                    ";
                        }
                        // line 101
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "                            ";
                }
                // line 103
                echo "                            ";
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 103)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 103), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
                // line 104
                echo "                        </div>
                    ";
            }
            // line 106
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentRelation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </div>
        </div>
    </div>
";
    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"block-square\">
                <div class=\"row\" style=\"margin-left:0; margin-right: 0;\">
                    <div class=\"col-xs-12 seo-content-block\">
                        ";
        // line 118
        echo twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "content", [], "any", false, false, false, 118);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 125
        $this->loadTemplate("Models/shareVideo.html.twig", "Templates/template1.html.twig", 125)->display($context);
    }

    public function getTemplateName()
    {
        return "Templates/template1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 125,  464 => 118,  457 => 113,  453 => 112,  446 => 107,  432 => 106,  428 => 104,  425 => 103,  422 => 102,  416 => 101,  413 => 100,  410 => 99,  407 => 98,  404 => 97,  401 => 96,  398 => 95,  393 => 94,  390 => 93,  387 => 92,  385 => 91,  382 => 90,  379 => 89,  362 => 88,  356 => 84,  342 => 83,  338 => 81,  335 => 80,  332 => 79,  326 => 78,  323 => 77,  320 => 76,  317 => 75,  314 => 74,  311 => 73,  308 => 72,  303 => 71,  300 => 70,  297 => 69,  295 => 68,  292 => 67,  289 => 66,  272 => 65,  265 => 60,  263 => 58,  256 => 53,  242 => 52,  239 => 51,  236 => 50,  233 => 49,  227 => 48,  224 => 47,  221 => 46,  218 => 45,  215 => 44,  212 => 43,  209 => 42,  204 => 41,  201 => 40,  198 => 39,  195 => 38,  192 => 37,  175 => 36,  166 => 32,  161 => 29,  147 => 28,  144 => 27,  141 => 26,  138 => 25,  132 => 24,  129 => 23,  126 => 22,  123 => 21,  120 => 20,  117 => 19,  114 => 18,  109 => 17,  106 => 16,  103 => 15,  100 => 14,  97 => 13,  80 => 12,  74 => 8,  72 => 7,  67 => 4,  63 => 3,  56 => 2,  49 => 1,  38 => 129,);
    }

    public function getSourceContext()
    {
        return new Source("", "Templates/template1.html.twig", "/home/deb116267/domains/aazaa.org/templates/Templates/template1.html.twig");
    }
}
