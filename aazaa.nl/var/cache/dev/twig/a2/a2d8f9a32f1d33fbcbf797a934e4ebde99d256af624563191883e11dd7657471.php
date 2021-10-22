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

/* Templates/template2.html.twig */
class __TwigTemplate_878aaf6323bbcc715488ce4807d413e98a64c8b28e94e66d486d53f276f3080d extends \Twig\Template
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
        // line 82
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Templates/template2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Templates/template2.html.twig"));

        $this->parent = $this->loadTemplate("Base/base.html.twig", "Templates/template2.html.twig", 82);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 5, $this->source); })()), "category", [], "any", false, false, false, 5)))) {
            // line 6
            echo "        ";
            $context["baseFilter"] = "";
            // line 7
            echo "        ";
            $context["paidFilter"] = "";
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "cssFilter", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                // line 9
                echo "            ";
                if (($context["filter"] == twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 9, $this->source); })()), "template", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "                ";
                    $context["baseFilter"] = $context["value"];
                    // line 11
                    echo "            ";
                }
                // line 12
                echo "            ";
                if (($context["filter"] == (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 12, $this->source); })()), "template", [], "any", false, false, false, 12) . "-betaald"))) {
                    // line 13
                    echo "                ";
                    $context["paidFilter"] = $context["value"];
                    // line 14
                    echo "            ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "

    <div class=\"container base\">
        ";
        // line 20
        $this->loadTemplate("/Blocks/addToFavorites.html.twig", "Templates/template2.html.twig", 20)->display($context);
        // line 21
        echo "
        <div class=\"col-xs-12 col-md-8\">
            <div class=\"video-embed-container\">
                <iframe class=\"video-embed\" src=\"https:\\\\player.vimeo.com\\video\\";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 24, $this->source); })()), "vimeoId", [], "any", false, false, false, 24), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>

            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle2"));
        // line 29
        echo "

            <div class=\"row hidden-xs hidden-sm\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 32, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 32));
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
            // line 33
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 33) == "rijboven")) {
                // line 34
                echo "                        <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            ";
                // line 35
                $this->loadTemplate("/Blocks/videoPreview.html.twig", "Templates/template2.html.twig", 35)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 35), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 35, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 35, $this->source); })())]));
                // line 36
                echo "                        </div>
                    ";
            }
            // line 38
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
        // line 39
        echo "            </div>
        </div>


        <div class=\"col-xs-12 col-md-4\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 44, $this->source); })()), "category", [], "any", false, false, false, 44), "pageContents", [], "any", false, false, false, 44));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pageContentCategory"]) {
            // line 45
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentCategory"], "id", [], "any", false, false, false, 45) != twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45))) {
                // line 46
                echo "                    ";
                $this->loadTemplate("Blocks/videoBlock.html.twig", "Templates/template2.html.twig", 46)->display($context);
                // line 47
                echo "                ";
            }
            // line 48
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageContentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>


        <div class=\"hidden-md hidden-lg\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 53, $this->source); })()), "pageContentRelations", [], "any", false, false, false, 53));
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
            // line 54
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "location", [], "any", false, false, false, 54) == "rijboven")) {
                // line 55
                echo "                    <div class=\"col-xs-12 col-sm-4 col-md-4 template2-video\">
                        ";
                // line 56
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template2.html.twig", 56)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 56), "baseFilter" => (isset($context["baseFilter"]) || array_key_exists("baseFilter", $context) ? $context["baseFilter"] : (function () { throw new RuntimeError('Variable "baseFilter" does not exist.', 56, $this->source); })()), "paidFilter" => (isset($context["paidFilter"]) || array_key_exists("paidFilter", $context) ? $context["paidFilter"] : (function () { throw new RuntimeError('Variable "paidFilter" does not exist.', 56, $this->source); })())]));
                // line 57
                echo "                    </div>
                ";
            }
            // line 59
            echo "            ";
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
        // line 60
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"block-square\">
                <div class=\"row\" style=\"margin-left:0; margin-right: 0;\">
                    <div class=\"col-xs-12 seo-content-block\">
                        ";
        // line 71
        echo twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 71, $this->source); })()), "content", [], "any", false, false, false, 71);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 78
        $this->loadTemplate("Models/shareVideo.html.twig", "Templates/template2.html.twig", 78)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Templates/template2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 78,  346 => 71,  339 => 66,  329 => 65,  316 => 60,  302 => 59,  298 => 57,  296 => 56,  293 => 55,  290 => 54,  273 => 53,  267 => 49,  253 => 48,  250 => 47,  247 => 46,  244 => 45,  227 => 44,  220 => 39,  206 => 38,  202 => 36,  200 => 35,  197 => 34,  194 => 33,  177 => 32,  172 => 29,  170 => 27,  162 => 24,  157 => 21,  155 => 20,  150 => 17,  147 => 16,  141 => 15,  138 => 14,  135 => 13,  132 => 12,  129 => 11,  126 => 10,  123 => 9,  118 => 8,  115 => 7,  112 => 6,  109 => 5,  99 => 4,  80 => 2,  61 => 1,  38 => 82,);
    }

    public function getSourceContext()
    {
        return new Source("{% block metaTitle %}{{ pageContent.metaTitle }}{% endblock %}
{% block description %}{{ pageContent.metaDescription }}{% endblock %}

{% block content %}
    {% if pageContent.category is defined and pageContent.category is not empty %}
        {% set baseFilter = '' %}
        {% set paidFilter = '' %}
        {% for filter, value in pageContent.category.cssFilter %}
            {% if filter == pageContent.template %}
                {% set baseFilter = value %}
            {% endif %}
            {% if filter == (pageContent.template ~'-betaald') %}
                {% set paidFilter = value %}
            {% endif %}
        {% endfor %}
    {% endif %}


    <div class=\"container base\">
        {% include '/Blocks/addToFavorites.html.twig' %}

        <div class=\"col-xs-12 col-md-8\">
            <div class=\"video-embed-container\">
                <iframe class=\"video-embed\" src=\"https:\\\\player.vimeo.com\\video\\{{ pageContent.vimeoId }}\" title=\"{{ pageContent.title }}\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>

            {{ render(controller(
                'App\\\\Controller\\\\DefaultController::navigationMiddle2'
            )) }}

            <div class=\"row hidden-xs hidden-sm\">
                {% for pageContentRelation in pageContent.pageContentRelations %}
                    {% if pageContentRelation.location == 'rijboven' %}
                        <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            {% include '/Blocks/videoPreview.html.twig'  with {'pageContentLinked': pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>


        <div class=\"col-xs-12 col-md-4\">
            {% for pageContentCategory in pageContent.category.pageContents %}
                {% if pageContentCategory.id != pageContent.id %}
                    {% include 'Blocks/videoBlock.html.twig' %}
                {% endif %}
            {% endfor %}
        </div>


        <div class=\"hidden-md hidden-lg\">
            {% for pageContentRelation in pageContent.pageContentRelations %}
                {% if pageContentRelation.location == 'rijboven' %}
                    <div class=\"col-xs-12 col-sm-4 col-md-4 template2-video\">
                        {% include 'Blocks/videoPreview.html.twig'  with {'pageContentLinked': pageContentRelation.pageContentLinked, 'baseFilter': baseFilter, 'paidFilter': paidFilter } %}
                    </div>
                {% endif %}
            {% endfor %}
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


{% extends 'Base/base.html.twig' %}", "Templates/template2.html.twig", "/home/deb116267/domains/aazaa.org/templates/Templates/template2.html.twig");
    }
}
