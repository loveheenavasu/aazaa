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

/* Admin/Page/pageEdit.html.twig */
class __TwigTemplate_b2417fa5c96033677c3ed31fdc81a8de2849c3a615a9573229008c6a9c076459 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript_footer' => [$this, 'block_javascript_footer'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 229
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/pageEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/pageEdit.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/pageEdit.html.twig", 229);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 2
        echo "    <script>
        function getTemplate(element) {
            \$.post(Routing.generate('admin_page_get_template'),{
                template: \$(element).val(),
                ";
        // line 6
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "                pageContent: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
            echo "
                ";
        }
        // line 9
        echo "            },
            function(data,status){
                if(data.status){
                    \$('#templating').html(data.html);
                    \$('#templatefound').show()
                }
                else {
                    \$('#templatefound').hide();
                    \$('#templating').html('');
                }
            });
        }
    </script>
    <script>
        \$(document).ready(function(){

            \$(\"#metaCount\").html(\$(\"#metaDescription\").val().length);
            \$(\"#titleCount\").html(\$(\"#metaTitle\").val().length);

            \$(\".titleTag-serp-desc\").html(\$(\"#metaDescription\").val());
            \$(\".titleTag-serp-title\").html(\$(\"#metaTitle\").val());

            \$(\"#metaDescription\").keyup(function(){

                \$(\".titleTag-serp-desc\").html(\$(\"#metaDescription\").val());
                cal = \$(\"#metaDescription\").val().length;
                if(cal < 210){
                    \$(\"#metaDescriptionSign\").removeClass(\"has-warning\").removeClass(\"has-error\");
                }
                else if(cal === 320){
                    \$(\"#metaDescriptionSign\").addClass(\"has-error\");
                }else {
                    \$(\"#metaDescriptionSign\").addClass(\"has-warning\").removeClass(\"has-error\");
                }
                \$(\"#metaCount\").html(cal);
            });

            \$(\"#metaTitle\").keyup(function(){
                \$(\".titleTag-serp-title\").html(\$(\"#metaTitle\").val());
                cal = \$(\"#metaTitle\").val().length;
                if(cal < 70){
                    \$(\"#metaTitleSign\").removeClass(\"has-warning\").removeClass(\"has-error\");
                }
                else if(cal === 180){
                    \$(\"#metaTitleSign\").addClass(\"has-error\");
                }else {
                    \$(\"#metaTitleSign\").addClass(\"has-warning\").removeClass(\"has-error\");
                }
                \$(\"#titleCount\").html(cal);
            });

            \$(\"#cat\").change(function(){
                var cat = \$(\"#cat option:selected\").text();
                cat = cat.replace(/ /g, '-').toLowerCase();

                var url = \$(\"#slug\").val();
                url = url.replace(/ /g, '-').toLowerCase();

                \$(\"#serp-url-slug\").html(\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "schemeAndHttpHost", [], "any", false, false, false, 67), "html", null, true);
        echo "/\" + cat + \"/\" + url);
                \$(\"#slug\").val(url);
            });

            \$(\"#slug\").keyup(function(){
                var cat = \$(\"#cat option:selected\").text();
                cat = cat.replace(/ /g, '-').toLowerCase();

                var url = \$(\"#slug\").val();
                url = url.replace(/ /g, '-').toLowerCase();

                \$(\"#serp-url-slug\").html(\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "schemeAndHttpHost", [], "any", false, false, false, 78), "html", null, true);
        echo "/\" + cat + \"/\" + url);
                \$(\"#slug\").val(url);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 87
        echo "
    ";
        // line 88
        $context["templates"] = [0 => "template1", 1 => "template2"];
        // line 89
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Pagina</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit");
        echo "\">
                <input type=\"hidden\" name=\"pageContentId\" value=\"";
        // line 95
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 95, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95), "html", null, true);
        }
        echo "\">

                <hr>
                <h3>Template instellingen</h3>
                <div class=\"form-group\">
                    <label for=\"cat\">Categorie</label>
                    <select id=\"cat\" name=\"category\" class=\"form-control\">
                        <option value=\"null\">Geen</option>
                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) || array_key_exists("categoryList", $context) ? $context["categoryList"] : (function () { throw new RuntimeError('Variable "categoryList" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 104
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\" ";
            if (((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 104, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 104, $this->source); })()), "category", [], "any", false, false, false, 104))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 104, $this->source); })()), "category", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 104)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"template\">Template</label>
                    <select id=\"template\" name=\"template\" class=\"form-control\" onchange=\"getTemplate(this)\" required>
                        <option selected hidden></option>
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 113
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\" ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 113, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 113, $this->source); })()), "template", [], "any", false, false, false, 113) == $context["template"]))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"vimeoId\">Hoofdvideo -> Vimeo Id (Voorbeeld: https://vimeo.com/255804519 -> Id is 255804519)</label>
                    <input class=\"form-control\" type=\"number\" id=\"vimeoId\" name=\"vimeoId\" value=\"";
        // line 119
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 119, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 119, $this->source); })()), "vimeoId", [], "any", false, false, false, 119), "html", null, true);
        }
        echo "\">
                </div>
                <div class=\"form-group\" id=\"templating\">
                    ";
        // line 122
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 122, $this->source); })()))) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 122, $this->source); })()), "template", [], "any", false, false, false, 122)))) {
            // line 123
            echo "                        ";
            $this->loadTemplate((("Admin/Page/Blocks/" . twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 123, $this->source); })()), "template", [], "any", false, false, false, 123)) . ".html.twig"), "Admin/Page/pageEdit.html.twig", 123)->display($context);
            // line 124
            echo "                    ";
        }
        // line 125
        echo "                </div>
                <hr>

                <div id=\"templatefound\" style=\"";
        // line 128
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 128, $this->source); })()))) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 128, $this->source); })()), "template", [], "any", false, false, false, 128)))) {
        } else {
            echo "display:none";
        }
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"title\">Page Title</label>
                        <input class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 131
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 131, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 131, $this->source); })()), "title", [], "any", false, false, false, 131), "html", null, true);
        }
        echo "\" required>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"slug\">Slug</label>
                        <input class=\"form-control\" id=\"slug\" name=\"slug\" value=\"";
        // line 136
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 136, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 136, $this->source); })()), "slug", [], "any", false, false, false, 136), "html", null, true);
        }
        echo "\">
                    </div>

                    <div id=\"metaTitleSign\" class=\"form-group\">
                        <label for=\"metaTitle\">Meta Title</label>
                        <input class=\"form-control\" id=\"metaTitle\" name=\"metaTitle\" value=\"";
        // line 141
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 141, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 141, $this->source); })()), "metaTitle", [], "any", false, false, false, 141), "html", null, true);
        }
        echo "\" required>
                        <span id=\"titleCount\">0</span> / 180 (mobiel) - <strong>70 (desktop)</strong>
                    </div>

                    <div id=\"metaDescriptionSign\" class=\"form-group\">
                        <label for=\"metaDescription\">Meta Description</label>
                        <textarea class=\"form-control\" id=\"metaDescription\" name=\"metaDescription\" maxlength=\"320\">";
        // line 147
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 147, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 147, $this->source); })()), "metaDescription", [], "any", false, false, false, 147), "html", null, true);
        }
        echo "</textarea>
                        <span id=\"metaCount\">0</span> / <strong>210 (mobiel)</strong> - 320(desktop)
                    </div>

                    <hr>
                    <div class=\"titleTag-serp\" style=\"width: 600px;\">
                        <div class=\"titleTag-serp-title-container\">
                            <span class=\"titleTag-serp-title\" style=\"color: #1a0dab; white-space: nowrap;\"></span>
                        </div>
                        <div class=\"titleTag-serp-url\" id=\"serp-url-slug\" style=\"font-size: 14px; color: #006621\">
                            ";
        // line 157
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 157, $this->source); })())))) {
            // line 158
            echo "                                ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "schemeAndHttpHost", [], "any", false, false, false, 158) . "/") . twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 158, $this->source); })()), "path", [], "any", false, false, false, 158)), "html", null, true);
            echo "
                            ";
        }
        // line 160
        echo "                        </div>
                        <div class=\"titleTag-serp-desc\" style=\"font-size: 13px; line-height: 18px;\"></div>
                    </div>
                    <hr>

                    <div class=\"form-group\">
                        <label for=\"content\">Pagina text (onder)</label>
                        <textarea class=\"form-control tinymce\" id=\"content\" name=\"content\">";
        // line 167
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 167, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 167, $this->source); })()), "content", [], "any", false, false, false, 167), "html", null, true);
        }
        echo "</textarea>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewTop\">Preview tekst Boven</label>
                            <input class=\"form-control\" id=\"previewTop\" name=\"previewTop\" value=\"";
        // line 173
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 173, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 173, $this->source); })()), "previewTop", [], "any", false, false, false, 173), "html", null, true);
        }
        echo "\">
                        </div>
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewBottom\">Preview tekst Onder</label>
                            <input class=\"form-control\" id=\"previewBottom\" name=\"previewBottom\" value=\"";
        // line 177
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 177, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 177, $this->source); })()), "previewBottom", [], "any", false, false, false, 177), "html", null, true);
        }
        echo "\">

                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"shortDescription\">Omschrijving Kort (muisover)</label>
                        <textarea class=\"form-control\" id=\"shortDescription\" name=\"shortDescription\">";
        // line 184
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 184, $this->source); })())))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 184, $this->source); })()), "shortDescription", [], "any", false, false, false, 184), "html", null, true);
        }
        echo "</textarea>
                    </div>

                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" ";
        // line 190
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 190, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 190, $this->source); })()), "active", [], "any", false, false, false, 190) == 0))) {
            echo "checked";
        }
        echo ">Niet Online zichtbaar
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" ";
        // line 195
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 195, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 195, $this->source); })()), "active", [], "any", false, false, false, 195) != 1))) {
        } else {
            echo "checked";
        }
        echo ">Online zichtbaar
                        </label>
                    </div>
                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"paid\" id=\"optionsRadios3\" value=\"0\" ";
        // line 201
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 201, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 201, $this->source); })()), "paid", [], "any", false, false, false, 201) == 0))) {
            echo "checked";
        }
        echo ">Gratis
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"paid\" id=\"optionsRadios4\" value=\"1\" ";
        // line 206
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 206, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 206, $this->source); })()), "paid", [], "any", false, false, false, 206) != 1))) {
        } else {
            echo "checked";
        }
        echo ">Betaald
                        </label>
                    </div>
                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios5\" value=\"0\" ";
        // line 212
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 212, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 212, $this->source); })()), "accountRequired", [], "any", false, false, false, 212) == 0))) {
            echo "checked";
        }
        echo "> Account is niet verplicht
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios6\" value=\"1\" ";
        // line 217
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 217, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 217, $this->source); })()), "accountRequired", [], "any", false, false, false, 217) != 1))) {
        } else {
            echo "checked";
        }
        echo ">Account is verplicht
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
                </div>
            </form>
            <a href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_overview");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/pageEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 223,  454 => 217,  444 => 212,  432 => 206,  422 => 201,  410 => 195,  400 => 190,  389 => 184,  377 => 177,  368 => 173,  357 => 167,  348 => 160,  342 => 158,  340 => 157,  325 => 147,  314 => 141,  304 => 136,  294 => 131,  285 => 128,  280 => 125,  277 => 124,  274 => 123,  272 => 122,  264 => 119,  258 => 115,  243 => 113,  239 => 112,  231 => 106,  216 => 104,  212 => 103,  199 => 95,  195 => 94,  188 => 89,  186 => 88,  183 => 87,  173 => 86,  157 => 78,  143 => 67,  83 => 9,  77 => 7,  75 => 6,  69 => 2,  59 => 1,  36 => 229,);
    }

    public function getSourceContext()
    {
        return new Source("{% block javascript_footer %}
    <script>
        function getTemplate(element) {
            \$.post(Routing.generate('admin_page_get_template'),{
                template: \$(element).val(),
                {% if pageContent is defined and pageContent is not empty %}
                pageContent: {{ pageContent.id }}
                {% endif %}
            },
            function(data,status){
                if(data.status){
                    \$('#templating').html(data.html);
                    \$('#templatefound').show()
                }
                else {
                    \$('#templatefound').hide();
                    \$('#templating').html('');
                }
            });
        }
    </script>
    <script>
        \$(document).ready(function(){

            \$(\"#metaCount\").html(\$(\"#metaDescription\").val().length);
            \$(\"#titleCount\").html(\$(\"#metaTitle\").val().length);

            \$(\".titleTag-serp-desc\").html(\$(\"#metaDescription\").val());
            \$(\".titleTag-serp-title\").html(\$(\"#metaTitle\").val());

            \$(\"#metaDescription\").keyup(function(){

                \$(\".titleTag-serp-desc\").html(\$(\"#metaDescription\").val());
                cal = \$(\"#metaDescription\").val().length;
                if(cal < 210){
                    \$(\"#metaDescriptionSign\").removeClass(\"has-warning\").removeClass(\"has-error\");
                }
                else if(cal === 320){
                    \$(\"#metaDescriptionSign\").addClass(\"has-error\");
                }else {
                    \$(\"#metaDescriptionSign\").addClass(\"has-warning\").removeClass(\"has-error\");
                }
                \$(\"#metaCount\").html(cal);
            });

            \$(\"#metaTitle\").keyup(function(){
                \$(\".titleTag-serp-title\").html(\$(\"#metaTitle\").val());
                cal = \$(\"#metaTitle\").val().length;
                if(cal < 70){
                    \$(\"#metaTitleSign\").removeClass(\"has-warning\").removeClass(\"has-error\");
                }
                else if(cal === 180){
                    \$(\"#metaTitleSign\").addClass(\"has-error\");
                }else {
                    \$(\"#metaTitleSign\").addClass(\"has-warning\").removeClass(\"has-error\");
                }
                \$(\"#titleCount\").html(cal);
            });

            \$(\"#cat\").change(function(){
                var cat = \$(\"#cat option:selected\").text();
                cat = cat.replace(/ /g, '-').toLowerCase();

                var url = \$(\"#slug\").val();
                url = url.replace(/ /g, '-').toLowerCase();

                \$(\"#serp-url-slug\").html(\"{{ app.request.schemeAndHttpHost }}/\" + cat + \"/\" + url);
                \$(\"#slug\").val(url);
            });

            \$(\"#slug\").keyup(function(){
                var cat = \$(\"#cat option:selected\").text();
                cat = cat.replace(/ /g, '-').toLowerCase();

                var url = \$(\"#slug\").val();
                url = url.replace(/ /g, '-').toLowerCase();

                \$(\"#serp-url-slug\").html(\"{{ app.request.schemeAndHttpHost }}/\" + cat + \"/\" + url);
                \$(\"#slug\").val(url);
            });
        });
    </script>
{% endblock %}


{% block content %}

    {% set templates = ['template1', 'template2'] %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Pagina</h1>
        </div>
        <div class=\"col-xs-12\">
            <form method=\"post\" action=\"{{ path('admin_page_edit') }}\">
                <input type=\"hidden\" name=\"pageContentId\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.id }}{% endif %}\">

                <hr>
                <h3>Template instellingen</h3>
                <div class=\"form-group\">
                    <label for=\"cat\">Categorie</label>
                    <select id=\"cat\" name=\"category\" class=\"form-control\">
                        <option value=\"null\">Geen</option>
                        {% for cat in categoryList %}
                            <option value=\"{{ cat.id }}\" {% if pageContent is defined and pageContent is not empty and pageContent.category is not empty and pageContent.category.id == cat.id %}selected{% endif %}>{{ cat.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"template\">Template</label>
                    <select id=\"template\" name=\"template\" class=\"form-control\" onchange=\"getTemplate(this)\" required>
                        <option selected hidden></option>
                        {% for template in templates %}
                            <option value=\"{{ template }}\" {% if pageContent is defined and pageContent is not empty and pageContent.template == template %}selected{% endif %}>{{ template }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"vimeoId\">Hoofdvideo -> Vimeo Id (Voorbeeld: https://vimeo.com/255804519 -> Id is 255804519)</label>
                    <input class=\"form-control\" type=\"number\" id=\"vimeoId\" name=\"vimeoId\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.vimeoId }}{% endif %}\">
                </div>
                <div class=\"form-group\" id=\"templating\">
                    {% if pageContent is defined and pageContent is not empty and pageContent.template is not null %}
                        {% include 'Admin/Page/Blocks/'~pageContent.template~'.html.twig' %}
                    {% endif %}
                </div>
                <hr>

                <div id=\"templatefound\" style=\"{% if pageContent is defined and pageContent is not empty and pageContent.template is not null %}{% else %}display:none{% endif %}\">
                    <div class=\"form-group\">
                        <label for=\"title\">Page Title</label>
                        <input class=\"form-control\" id=\"title\" name=\"title\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.title }}{% endif %}\" required>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"slug\">Slug</label>
                        <input class=\"form-control\" id=\"slug\" name=\"slug\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.slug }}{% endif %}\">
                    </div>

                    <div id=\"metaTitleSign\" class=\"form-group\">
                        <label for=\"metaTitle\">Meta Title</label>
                        <input class=\"form-control\" id=\"metaTitle\" name=\"metaTitle\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.metaTitle }}{% endif %}\" required>
                        <span id=\"titleCount\">0</span> / 180 (mobiel) - <strong>70 (desktop)</strong>
                    </div>

                    <div id=\"metaDescriptionSign\" class=\"form-group\">
                        <label for=\"metaDescription\">Meta Description</label>
                        <textarea class=\"form-control\" id=\"metaDescription\" name=\"metaDescription\" maxlength=\"320\">{% if pageContent is defined and pageContent is not empty %}{{ pageContent.metaDescription }}{% endif %}</textarea>
                        <span id=\"metaCount\">0</span> / <strong>210 (mobiel)</strong> - 320(desktop)
                    </div>

                    <hr>
                    <div class=\"titleTag-serp\" style=\"width: 600px;\">
                        <div class=\"titleTag-serp-title-container\">
                            <span class=\"titleTag-serp-title\" style=\"color: #1a0dab; white-space: nowrap;\"></span>
                        </div>
                        <div class=\"titleTag-serp-url\" id=\"serp-url-slug\" style=\"font-size: 14px; color: #006621\">
                            {% if pageContent is defined and pageContent is not empty %}
                                {{ app.request.schemeAndHttpHost ~ '/' ~ pageContent.path }}
                            {% endif %}
                        </div>
                        <div class=\"titleTag-serp-desc\" style=\"font-size: 13px; line-height: 18px;\"></div>
                    </div>
                    <hr>

                    <div class=\"form-group\">
                        <label for=\"content\">Pagina text (onder)</label>
                        <textarea class=\"form-control tinymce\" id=\"content\" name=\"content\">{% if pageContent is defined and pageContent is not empty %}{{ pageContent.content }}{% endif %}</textarea>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewTop\">Preview tekst Boven</label>
                            <input class=\"form-control\" id=\"previewTop\" name=\"previewTop\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.previewTop }}{% endif %}\">
                        </div>
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewBottom\">Preview tekst Onder</label>
                            <input class=\"form-control\" id=\"previewBottom\" name=\"previewBottom\" value=\"{% if pageContent is defined and pageContent is not empty %}{{ pageContent.previewBottom }}{% endif %}\">

                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"shortDescription\">Omschrijving Kort (muisover)</label>
                        <textarea class=\"form-control\" id=\"shortDescription\" name=\"shortDescription\">{% if pageContent is defined and pageContent is not empty %}{{ pageContent.shortDescription }}{% endif %}</textarea>
                    </div>

                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" {% if pageContent is defined and pageContent is not empty and pageContent.active == 0 %}checked{% endif %}>Niet Online zichtbaar
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" {% if pageContent is defined and pageContent is not empty and pageContent.active != 1 %}{% else %}checked{% endif %}>Online zichtbaar
                        </label>
                    </div>
                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"paid\" id=\"optionsRadios3\" value=\"0\" {% if pageContent is defined and pageContent is not empty and pageContent.paid == 0 %}checked{% endif %}>Gratis
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"paid\" id=\"optionsRadios4\" value=\"1\" {% if pageContent is defined and pageContent is not empty and pageContent.paid != 1 %}{% else %}checked{% endif %}>Betaald
                        </label>
                    </div>
                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios5\" value=\"0\" {% if pageContent is defined and pageContent is not empty and pageContent.accountRequired == 0 %}checked{% endif %}> Account is niet verplicht
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios6\" value=\"1\" {% if pageContent is defined and pageContent is not empty and pageContent.accountRequired != 1 %}{% else %}checked{% endif %}>Account is verplicht
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success pull-right\">Opslaan</button>
                </div>
            </form>
            <a href=\"{{ path('admin_page_overview') }}\" class=\"btn btn-default pull-left\">Terug</a>
        </div>
    </div>


{% endblock %}
{% extends 'Admin/base.html.twig' %}

", "Admin/Page/pageEdit.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/pageEdit.html.twig");
    }
}
