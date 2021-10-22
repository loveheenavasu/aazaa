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
class __TwigTemplate_7fbb8e85ab5196da7b35fcdd1207c1700dd7975d6a8b987c7bec7aef9bfa7340 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Templates/template1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Templates/template1.html.twig"));

        $this->parent = $this->loadTemplate("Base/base.html.twig", "Templates/template1.html.twig", 129);
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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 12, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 12));
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
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 26)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 26), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 26, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 26, $this->source); })())]));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 32, $this->source); })()), "vimeoId", [], "any", false, false, false, 32), "html", null, true);
        echo "?autoplay=1&loop=0&autopause=0\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"col-md-3 hidden-xs hidden-sm\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 36, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 36));
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
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 50)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 50), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 50, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 50, $this->source); })())]));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 65, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 65));
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
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 80)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 80), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 80, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 80, $this->source); })())]));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 88, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 88));
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
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template1.html.twig", 103)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 103), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 103, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 103, $this->source); })())]));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"block-square\">
                <div class=\"row\" style=\"margin-left:0; margin-right: 0;\">
                    <div class=\"col-xs-12 seo-content-block\">
                        ";
        // line 118
        echo twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 118, $this->source); })()), "content", [], "any", false, false, false, 118);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 125
        $this->loadTemplate("Models/shareVideo.html.twig", "Templates/template1.html.twig", 125)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  528 => 125,  518 => 118,  511 => 113,  501 => 112,  488 => 107,  474 => 106,  470 => 104,  467 => 103,  464 => 102,  458 => 101,  455 => 100,  452 => 99,  449 => 98,  446 => 97,  443 => 96,  440 => 95,  435 => 94,  432 => 93,  429 => 92,  427 => 91,  424 => 90,  421 => 89,  404 => 88,  398 => 84,  384 => 83,  380 => 81,  377 => 80,  374 => 79,  368 => 78,  365 => 77,  362 => 76,  359 => 75,  356 => 74,  353 => 73,  350 => 72,  345 => 71,  342 => 70,  339 => 69,  337 => 68,  334 => 67,  331 => 66,  314 => 65,  307 => 60,  305 => 58,  298 => 53,  284 => 52,  281 => 51,  278 => 50,  275 => 49,  269 => 48,  266 => 47,  263 => 46,  260 => 45,  257 => 44,  254 => 43,  251 => 42,  246 => 41,  243 => 40,  240 => 39,  237 => 38,  234 => 37,  217 => 36,  208 => 32,  203 => 29,  189 => 28,  186 => 27,  183 => 26,  180 => 25,  174 => 24,  171 => 23,  168 => 22,  165 => 21,  162 => 20,  159 => 19,  156 => 18,  151 => 17,  148 => 16,  145 => 15,  142 => 14,  139 => 13,  122 => 12,  116 => 8,  114 => 7,  109 => 4,  99 => 3,  80 => 2,  61 => 1,  38 => 129,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaTitle %}{{ pageContent.metaTitle }}{% endblock %}
{% block description %}{{ pageContent.metaDescription }}{% endblock %}
{% block content %}


    <div class=\"container base\">
        {% include 'Blocks/addToFavorites.html.twig' %}

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"col-md-3 hidden-xs hidden-sm\">
                    {% for pageContentRelation in pageContent.pageContentRelations %}
                        {% if pageContentRelation.location == 'links' %}
                            {% set baseFilter = '' %}
                            {% set paidFilter = '' %}
                            {% if pageContentRelation.pageContentLinked.category is defined and pageContentRelation.pageContentLinked.category is not empty %}
                                {% for filter, value in pageContentRelation.pageContentLinked.category.cssFilter %}
                                    {% if filter == pageContentRelation.pageContentLinked.template %}
                                        {% set baseFilter = value %}
                                    {% endif %}
                                    {% if filter == (pageContentRelation.pageContentLinked.template ~'-betaald') %}
                                        {% set paidFilter = value %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            {% include 'Blocks/videoPreview.html.twig' with {'pageContentLinked' : pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                        {% endif %}
                    {% endfor %}
                </div>
                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"video-embed-container\">
                        <iframe class=\"video-embed\" src=\"https:\\\\player.vimeo.com\\video\\{{ pageContent.vimeoId }}?autoplay=1&loop=0&autopause=0\" title=\"{{ pageContent.title }}\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class=\"col-md-3 hidden-xs hidden-sm\">
                    {% for pageContentRelation in pageContent.pageContentRelations %}
                        {% if pageContentRelation.location == 'rechts' %}
                            {% set baseFilter = '' %}
                            {% set paidFilter = '' %}
                            {% if pageContentRelation.pageContentLinked.category is defined and pageContentRelation.pageContentLinked.category is not empty %}
                                {% for filter, value in pageContentRelation.pageContentLinked.category.cssFilter %}
                                    {% if filter == pageContentRelation.pageContentLinked.template %}
                                        {% set baseFilter = value %}
                                    {% endif %}
                                    {% if filter == (pageContentRelation.pageContentLinked.template ~'-betaald') %}
                                        {% set paidFilter = value %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            {% include 'Blocks/videoPreview.html.twig' with {'pageContentLinked' : pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>

        <div class=\"col-xs-12\">
            {{ render(controller(
                'App\\\\Controller\\\\DefaultController::navigationMiddle'
            )) }}
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% for pageContentRelation in pageContent.pageContentRelations %}
                    {% if pageContentRelation.location == 'rijboven' %}
                        <div class=\"col-xs-12 col-sm-6 col-md-3 template2-video\">
                            {% set baseFilter = '' %}
                            {% set paidFilter = '' %}
                            {% if pageContentRelation.pageContentLinked.category is defined and pageContentRelation.pageContentLinked.category is not empty %}
                                {% for filter, value in pageContentRelation.pageContentLinked.category.cssFilter %}
                                    {% if filter == pageContentRelation.pageContentLinked.template %}
                                        {% set baseFilter = value %}
                                    {% endif %}
                                    {% if filter == (pageContentRelation.pageContentLinked.template ~'-betaald') %}
                                        {% set paidFilter = value %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            {% include 'Blocks/videoPreview.html.twig' with {'pageContentLinked' : pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% for pageContentRelation in pageContent.pageContentRelations %}
                    {% if pageContentRelation.location == 'rijonder' %}
                        <div class=\"col-xs-12 col-sm-6 col-md-3 template2-video\">
                            {% set baseFilter = '' %}
                            {% set paidFilter = '' %}
                            {% if pageContentRelation.pageContentLinked.category is defined and pageContentRelation.pageContentLinked.category is not empty %}
                                {% for filter, value in pageContentRelation.pageContentLinked.category.cssFilter %}
                                    {% if filter == pageContentRelation.pageContentLinked.template %}
                                        {% set baseFilter = value %}
                                    {% endif %}
                                    {% if filter == (pageContentRelation.pageContentLinked.template ~'-betaald') %}
                                        {% set paidFilter = value %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            {% include 'Blocks/videoPreview.html.twig' with {'pageContentLinked' : pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"block-square\">
                <div class=\"row\" style=\"margin-left:0; margin-right: 0;\">
                    <div class=\"col-xs-12 seo-content-block\">
                        {{ pageContent.content | raw }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include 'Models/shareVideo.html.twig' %}
{% endblock %}


{% extends 'Base/base.html.twig' %}", "Templates/template1.html.twig", "/home/deb116267/domains/aazaa.org/templates/Templates/template1.html.twig");
    }
}
