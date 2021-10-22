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
class __TwigTemplate_8f6f6966c4fc6d2382b0da7087b3b6fb40f57679144cc09841ce5a3af6fe6d44 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Templates/template2.html.twig", 82);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 5)))) {
            // line 6
            echo "        ";
            $context["baseFilter"] = "";
            // line 7
            echo "        ";
            $context["paidFilter"] = "";
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 8), "cssFilter", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                // line 9
                echo "            ";
                if (($context["filter"] == twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "                ";
                    $context["baseFilter"] = $context["value"];
                    // line 11
                    echo "            ";
                }
                // line 12
                echo "            ";
                if (($context["filter"] == (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 12) . "-betaald"))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 24), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 32));
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
                $this->loadTemplate("/Blocks/videoPreview.html.twig", "Templates/template2.html.twig", 35)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 35), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 44), "pageContents", [], "any", false, false, false, 44));
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
            if ((twig_get_attribute($this->env, $this->source, $context["pageContentCategory"], "id", [], "any", false, false, false, 45) != twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 45))) {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "pageContentRelations", [], "any", false, false, false, 53));
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
                $this->loadTemplate("Blocks/videoPreview.html.twig", "Templates/template2.html.twig", 56)->display(twig_array_merge($context, ["pageContentLinked" => twig_get_attribute($this->env, $this->source, $context["pageContentRelation"], "pageContentLinked", [], "any", false, false, false, 56), "baseFilter" => ($context["baseFilter"] ?? null), "paidFilter" => ($context["paidFilter"] ?? null)]));
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
    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"block-square\">
                <div class=\"row\" style=\"margin-left:0; margin-right: 0;\">
                    <div class=\"col-xs-12 seo-content-block\">
                        ";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "content", [], "any", false, false, false, 71);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 78
        $this->loadTemplate("Models/shareVideo.html.twig", "Templates/template2.html.twig", 78)->display($context);
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
        return array (  302 => 78,  292 => 71,  285 => 66,  281 => 65,  274 => 60,  260 => 59,  256 => 57,  254 => 56,  251 => 55,  248 => 54,  231 => 53,  225 => 49,  211 => 48,  208 => 47,  205 => 46,  202 => 45,  185 => 44,  178 => 39,  164 => 38,  160 => 36,  158 => 35,  155 => 34,  152 => 33,  135 => 32,  130 => 29,  128 => 27,  120 => 24,  115 => 21,  113 => 20,  108 => 17,  105 => 16,  99 => 15,  96 => 14,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  81 => 9,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  63 => 4,  56 => 2,  49 => 1,  38 => 82,);
    }

    public function getSourceContext()
    {
        return new Source("", "Templates/template2.html.twig", "/home/deb116267/domains/aazaa.org/templates/Templates/template2.html.twig");
    }
}
