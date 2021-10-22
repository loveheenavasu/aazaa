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
class __TwigTemplate_b25e7fb007d4bfec6978f9a68ce5e8637a7db626e4e61b732abb7843ce041f4e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/pageEdit.html.twig", 229);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <script>
        function getTemplate(element) {
            \$.post(Routing.generate('admin_page_get_template'),{
                template: \$(element).val(),
                ";
        // line 6
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            // line 7
            echo "                pageContent: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "schemeAndHttpHost", [], "any", false, false, false, 67), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "schemeAndHttpHost", [], "any", false, false, false, 78), "html", null, true);
        echo "/\" + cat + \"/\" + url);
                \$(\"#slug\").val(url);
            });
        });
    </script>
";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 95), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 104
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\" ";
            if (((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 104))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "category", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 104)))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 113
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\" ";
            if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 113) == $context["template"]))) {
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
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "vimeoId", [], "any", false, false, false, 119), "html", null, true);
        }
        echo "\">
                </div>
                <div class=\"form-group\" id=\"templating\">
                    ";
        // line 122
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 122)))) {
            // line 123
            echo "                        ";
            $this->loadTemplate((("Admin/Page/Blocks/" . twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 123)) . ".html.twig"), "Admin/Page/pageEdit.html.twig", 123)->display($context);
            // line 124
            echo "                    ";
        }
        // line 125
        echo "                </div>
                <hr>

                <div id=\"templatefound\" style=\"";
        // line 128
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "template", [], "any", false, false, false, 128)))) {
        } else {
            echo "display:none";
        }
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"title\">Page Title</label>
                        <input class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 131
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "title", [], "any", false, false, false, 131), "html", null, true);
        }
        echo "\" required>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"slug\">Slug</label>
                        <input class=\"form-control\" id=\"slug\" name=\"slug\" value=\"";
        // line 136
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "slug", [], "any", false, false, false, 136), "html", null, true);
        }
        echo "\">
                    </div>

                    <div id=\"metaTitleSign\" class=\"form-group\">
                        <label for=\"metaTitle\">Meta Title</label>
                        <input class=\"form-control\" id=\"metaTitle\" name=\"metaTitle\" value=\"";
        // line 141
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaTitle", [], "any", false, false, false, 141), "html", null, true);
        }
        echo "\" required>
                        <span id=\"titleCount\">0</span> / 180 (mobiel) - <strong>70 (desktop)</strong>
                    </div>

                    <div id=\"metaDescriptionSign\" class=\"form-group\">
                        <label for=\"metaDescription\">Meta Description</label>
                        <textarea class=\"form-control\" id=\"metaDescription\" name=\"metaDescription\" maxlength=\"320\">";
        // line 147
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaDescription", [], "any", false, false, false, 147), "html", null, true);
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
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            // line 158
            echo "                                ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 158), "schemeAndHttpHost", [], "any", false, false, false, 158) . "/") . twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "path", [], "any", false, false, false, 158)), "html", null, true);
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
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "content", [], "any", false, false, false, 167), "html", null, true);
        }
        echo "</textarea>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewTop\">Preview tekst Boven</label>
                            <input class=\"form-control\" id=\"previewTop\" name=\"previewTop\" value=\"";
        // line 173
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "previewTop", [], "any", false, false, false, 173), "html", null, true);
        }
        echo "\">
                        </div>
                        <div class=\"col-md-6 col-xs-12 form-group\" style=\"padding: 0;\">
                            <label for=\"previewBottom\">Preview tekst Onder</label>
                            <input class=\"form-control\" id=\"previewBottom\" name=\"previewBottom\" value=\"";
        // line 177
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "previewBottom", [], "any", false, false, false, 177), "html", null, true);
        }
        echo "\">

                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"shortDescription\">Omschrijving Kort (muisover)</label>
                        <textarea class=\"form-control\" id=\"shortDescription\" name=\"shortDescription\">";
        // line 184
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "shortDescription", [], "any", false, false, false, 184), "html", null, true);
        }
        echo "</textarea>
                    </div>

                    <hr>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" ";
        // line 190
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "active", [], "any", false, false, false, 190) == 0))) {
            echo "checked";
        }
        echo ">Niet Online zichtbaar
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" ";
        // line 195
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "active", [], "any", false, false, false, 195) != 1))) {
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
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "paid", [], "any", false, false, false, 201) == 0))) {
            echo "checked";
        }
        echo ">Gratis
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"paid\" id=\"optionsRadios4\" value=\"1\" ";
        // line 206
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "paid", [], "any", false, false, false, 206) != 1))) {
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
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "accountRequired", [], "any", false, false, false, 212) == 0))) {
            echo "checked";
        }
        echo "> Account is niet verplicht
                        </label>
                    </div>
                    <div class=\"radio\">
                        <label>
                            <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios6\" value=\"1\" ";
        // line 217
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "accountRequired", [], "any", false, false, false, 217) != 1))) {
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
        return array (  436 => 223,  424 => 217,  414 => 212,  402 => 206,  392 => 201,  380 => 195,  370 => 190,  359 => 184,  347 => 177,  338 => 173,  327 => 167,  318 => 160,  312 => 158,  310 => 157,  295 => 147,  284 => 141,  274 => 136,  264 => 131,  255 => 128,  250 => 125,  247 => 124,  244 => 123,  242 => 122,  234 => 119,  228 => 115,  213 => 113,  209 => 112,  201 => 106,  186 => 104,  182 => 103,  169 => 95,  165 => 94,  158 => 89,  156 => 88,  153 => 87,  149 => 86,  139 => 78,  125 => 67,  65 => 9,  59 => 7,  57 => 6,  51 => 2,  47 => 1,  36 => 229,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/pageEdit.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/pageEdit.html.twig");
    }
}
