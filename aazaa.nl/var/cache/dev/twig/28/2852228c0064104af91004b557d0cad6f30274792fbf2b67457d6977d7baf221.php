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

/* Admin/Page/categoryEdit.html.twig */
class __TwigTemplate_db807692f4ef5534f32e4add294274a8a94a2caec23704326f54e0aaaa4eacd1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 145
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/categoryEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/categoryEdit.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/categoryEdit.html.twig", 145);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Categorie</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit");
        echo "\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"categoryId\" value=\"";
        // line 8
        if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "\">
                <div class=\"form-group\">
                    <label for=\"name\">Naam *</label>
                    <input class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 11
        if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 11, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"menupos\">Positie:</label>
                    <select class=\"form-control\" id=\"menupos\" name=\"viewPosition\">
                        <option value=\"\">Geen</option>
                        <option value=\"Boven\" ";
        // line 18
        if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })())))) {
            if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "viewPosition", [], "any", false, false, false, 18) == "Boven")) {
                echo "selected";
            }
        }
        echo ">Boven</option>
                        <option value=\"Hoofdmenu\" ";
        // line 19
        if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })())))) {
            if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "viewPosition", [], "any", false, false, false, 19) == "Hoofdmenu")) {
                echo "selected";
            }
        }
        echo ">Hoofdmenu</option>
                        <option value=\"Pagina_menu\" ";
        // line 20
        if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })())))) {
            if ((twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()), "viewPosition", [], "any", false, false, false, 20) == "Pagina_menu")) {
                echo "selected";
            }
        }
        echo ">Pagina Menu</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    ";
        // line 25
        if ((((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 25, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25)))) {
            // line 26
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"img-responsive\">
                    ";
        }
        // line 28
        echo "                    <label for=\"image\">Menu plaatje</label>
                    <input type=\"file\" name=\"image\" accept=\"image/png,image/x-png,image/gif,image/jpeg\">
                </div>


                ";
        // line 33
        if (((isset($context["pageContents"]) || array_key_exists("pageContents", $context)) &&  !twig_test_empty((isset($context["pageContents"]) || array_key_exists("pageContents", $context) ? $context["pageContents"] : (function () { throw new RuntimeError('Variable "pageContents" does not exist.', 33, $this->source); })())))) {
            // line 34
            echo "                    <div class=\"form-group\">
                        <label for=\"pageContent\">Menu pagina:</label>
                        <select class=\"form-control\" id=\"pageContent\" name=\"pageContent\">
                            <option value=\"\">Geen</option>
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageContents"]) || array_key_exists("pageContents", $context) ? $context["pageContents"] : (function () { throw new RuntimeError('Variable "pageContents" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" ";
                if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 39, $this->source); })())))) {
                    echo " ";
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 39, $this->source); })()), "pageContent", [], "any", false, false, false, 39)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 39, $this->source); })()), "pageContent", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 39)))) {
                        echo "selected";
                    }
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </select>
                    </div>
                ";
        }
        // line 44
        echo "

                ";
        // line 46
        $context["types"] = [0 => "template1", 1 => "template1-betaald", 2 => "template2", 3 => "template2-betaald"];
        // line 47
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 48
            echo "                    ";
            $context["f"] = "";
            // line 49
            echo "                    ";
            if (((isset($context["category"]) || array_key_exists("category", $context)) &&  !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 49, $this->source); })())))) {
                // line 50
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 50, $this->source); })()), "cssFilter", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["filter"] => $context["value"]) {
                    // line 51
                    echo "                            ";
                    if (($context["filter"] == $context["type"])) {
                        // line 52
                        echo "                                ";
                        $context["f"] = $context["value"];
                        // line 53
                        echo "                            ";
                    }
                    // line 54
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filter'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                    ";
            }
            // line 56
            echo "

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            ";
            // line 60
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["type"]), "html", null, true);
            echo "
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"col-xs-4\">
                                <div id=\"";
            // line 64
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" class=\"block video-preview\" style=\"filter: ";
            echo twig_escape_filter($this->env, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "\">
                                    <div class=\"video-layer\"></div>
                                </div>
                            </div>
                            <input class=\"checkfilter\" type=\"hidden\" id=\"";
            // line 68
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-value\" name=\"filter[";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\">
                            <div class=\"col-xs-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <div class=\"panel-title\">Weergave opties</div>
                                    </div>
                                    <div class=\"panel-body\">
                                        <label><i class=\"fas fa-sun\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('";
            // line 76
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "')\" type=\"range\" class=\"brightness\" id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-brightness-slider\" min=\"0.5\" max=\"3\" step=\".01\" value=\"1\"> -> <span id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-brightness\">1</span><br>
                                        <label><i class=\"fas fa-adjust\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('";
            // line 78
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "')\" type=\"range\" class=\"contrast\" id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-contrast-slider\" min=\".5\" max=\"3\" step=\".01\" value=\"1\"> -> <span id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-contrast\">1</span><br>
                                        <label><i class=\"fas fa-paint-brush\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('";
            // line 80
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "')\" type=\"range\" class=\"hue\" id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-hue-slider\" min=\"0\" max=\"359\" step=\"1\" value=\"0\"> -> <span id=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-hue\">0</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "

                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 99
        echo "    <script>

        \$(document).ready(function () {
           \$(\".checkfilter\").each(function(){
               var filter = \$(this).val();

               var brightnessVal = filter.match(/brightness\\((.*?)\\)/);
               if(brightnessVal){
                   var brightness = \$(this).parent().find(\"input.brightness\");
                   brightness.val(brightnessVal[1]);
                   brightness.next(\"span\").html(brightnessVal[1]);
               }

               var contrastVal = filter.match(/contrast\\((.*?)\\)/);
               if(contrastVal){
                   var contrast = \$(this).parent().find(\"input.contrast\");
                   contrast.val(contrastVal[1]);
                   contrast.next(\"span\").html(contrastVal[1]);
               }

               var hueVal = filter.match(/hue-rotate\\((.*?)deg\\)/);
               if(hueVal){
                   var hue = \$(this).parent().find(\"input.hue\");
                   hue.val(hueVal[1]);
                   hue.next(\"span\").html(hueVal[1]);
               }

           });
        });

        function color(type){
            var brightness = \$('#'+type+'-brightness-slider').val();
            var contrast = \$('#'+type+'-contrast-slider').val();
            var hue = \$('#'+type+'-hue-slider').val();
            \$('#'+type+'-brightness').html(brightness);
            \$('#'+type+'-contrast').html(contrast);
            \$('#'+type+'-hue').html(hue);

            var filter = \"brightness(\" + brightness + \") contrast(\" + contrast + \") hue-rotate(\" + hue + \"deg)\";
            \$('#'+type+'-value').val(filter);
            \$('#'+type).css(\"filter\", filter);
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/categoryEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 99,  312 => 98,  294 => 89,  290 => 87,  273 => 80,  264 => 78,  255 => 76,  240 => 68,  231 => 64,  224 => 60,  218 => 56,  215 => 55,  209 => 54,  206 => 53,  203 => 52,  200 => 51,  195 => 50,  192 => 49,  189 => 48,  184 => 47,  182 => 46,  178 => 44,  173 => 41,  155 => 39,  151 => 38,  145 => 34,  143 => 33,  136 => 28,  130 => 26,  128 => 25,  116 => 20,  108 => 19,  100 => 18,  88 => 11,  80 => 8,  76 => 7,  69 => 2,  59 => 1,  36 => 145,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Categorie</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_page_category_edit') }}\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"categoryId\" value=\"{% if category is defined and category is not empty %}{{ category.id }}{% endif %}\">
                <div class=\"form-group\">
                    <label for=\"name\">Naam *</label>
                    <input class=\"form-control\" id=\"name\" name=\"name\" value=\"{% if category is defined and category is not empty %}{{ category.name }}{% endif %}\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"menupos\">Positie:</label>
                    <select class=\"form-control\" id=\"menupos\" name=\"viewPosition\">
                        <option value=\"\">Geen</option>
                        <option value=\"Boven\" {% if category is defined and category is not empty %}{% if category.viewPosition == 'Boven' %}selected{% endif %}{% endif %}>Boven</option>
                        <option value=\"Hoofdmenu\" {% if category is defined and category is not empty %}{%  if category.viewPosition == 'Hoofdmenu' %}selected{% endif %}{% endif %}>Hoofdmenu</option>
                        <option value=\"Pagina_menu\" {% if category is defined and category is not empty %}{%  if category.viewPosition == 'Pagina_menu' %}selected{% endif %}{% endif %}>Pagina Menu</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    {% if category is defined and category is not empty and category.image is not empty%}
                        <img src=\"{{ category.image }}\" class=\"img-responsive\">
                    {% endif %}
                    <label for=\"image\">Menu plaatje</label>
                    <input type=\"file\" name=\"image\" accept=\"image/png,image/x-png,image/gif,image/jpeg\">
                </div>


                {% if pageContents is defined and pageContents is not empty %}
                    <div class=\"form-group\">
                        <label for=\"pageContent\">Menu pagina:</label>
                        <select class=\"form-control\" id=\"pageContent\" name=\"pageContent\">
                            <option value=\"\">Geen</option>
                            {% for page in pageContents %}
                                <option value=\"{{ page.id }}\" {% if category is defined and category is not empty %} {% if category.pageContent is not empty and category.pageContent.id == page.id %}selected{% endif %}{% endif %}>{{ page.title }}</option>
                            {% endfor %}
                        </select>
                    </div>
                {% endif %}


                {% set types = ['template1', 'template1-betaald', 'template2', 'template2-betaald'] %}
                {% for type in types %}
                    {% set f = '' %}
                    {% if category is defined and category is not empty %}
                        {% for filter, value in category.cssFilter %}
                            {% if filter == type %}
                                {% set f = value %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}


                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            {{ type | capitalize }}
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"col-xs-4\">
                                <div id=\"{{ type }}\" class=\"block video-preview\" style=\"filter: {{ f }}\">
                                    <div class=\"video-layer\"></div>
                                </div>
                            </div>
                            <input class=\"checkfilter\" type=\"hidden\" id=\"{{ type }}-value\" name=\"filter[{{ type }}]\" value=\"{{ f }}\">
                            <div class=\"col-xs-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <div class=\"panel-title\">Weergave opties</div>
                                    </div>
                                    <div class=\"panel-body\">
                                        <label><i class=\"fas fa-sun\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('{{ type }}')\" type=\"range\" class=\"brightness\" id=\"{{ type }}-brightness-slider\" min=\"0.5\" max=\"3\" step=\".01\" value=\"1\"> -> <span id=\"{{ type }}-brightness\">1</span><br>
                                        <label><i class=\"fas fa-adjust\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('{{ type }}')\" type=\"range\" class=\"contrast\" id=\"{{ type }}-contrast-slider\" min=\".5\" max=\"3\" step=\".01\" value=\"1\"> -> <span id=\"{{ type }}-contrast\">1</span><br>
                                        <label><i class=\"fas fa-paint-brush\" aria-hidden=\"true\"></i></label>
                                        <input onchange=\"color('{{ type }}')\" type=\"range\" class=\"hue\" id=\"{{ type }}-hue-slider\" min=\"0\" max=\"359\" step=\"1\" value=\"0\"> -> <span id=\"{{ type }}-hue\">0</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}


                <a href=\"{{ path('admin_page_category') }}\" class=\"btn btn-default pull-left\">Terug</a>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
            </form>
        </div>
    </div>


{% endblock %}

{% block javascript_footer %}
    <script>

        \$(document).ready(function () {
           \$(\".checkfilter\").each(function(){
               var filter = \$(this).val();

               var brightnessVal = filter.match(/brightness\\((.*?)\\)/);
               if(brightnessVal){
                   var brightness = \$(this).parent().find(\"input.brightness\");
                   brightness.val(brightnessVal[1]);
                   brightness.next(\"span\").html(brightnessVal[1]);
               }

               var contrastVal = filter.match(/contrast\\((.*?)\\)/);
               if(contrastVal){
                   var contrast = \$(this).parent().find(\"input.contrast\");
                   contrast.val(contrastVal[1]);
                   contrast.next(\"span\").html(contrastVal[1]);
               }

               var hueVal = filter.match(/hue-rotate\\((.*?)deg\\)/);
               if(hueVal){
                   var hue = \$(this).parent().find(\"input.hue\");
                   hue.val(hueVal[1]);
                   hue.next(\"span\").html(hueVal[1]);
               }

           });
        });

        function color(type){
            var brightness = \$('#'+type+'-brightness-slider').val();
            var contrast = \$('#'+type+'-contrast-slider').val();
            var hue = \$('#'+type+'-hue-slider').val();
            \$('#'+type+'-brightness').html(brightness);
            \$('#'+type+'-contrast').html(contrast);
            \$('#'+type+'-hue').html(hue);

            var filter = \"brightness(\" + brightness + \") contrast(\" + contrast + \") hue-rotate(\" + hue + \"deg)\";
            \$('#'+type+'-value').val(filter);
            \$('#'+type).css(\"filter\", filter);
        }

    </script>
{% endblock %}

{% extends 'Admin/base.html.twig' %}

", "Admin/Page/categoryEdit.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/categoryEdit.html.twig");
    }
}
