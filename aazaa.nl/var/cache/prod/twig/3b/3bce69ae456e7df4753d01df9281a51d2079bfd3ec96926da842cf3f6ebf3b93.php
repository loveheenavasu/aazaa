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

/* Admin/Page/contentPageEdit.html.twig */
class __TwigTemplate_e8dac83f5c280f3e9f425dafcd2b1281580c4d1b0f790b5804d9a4b7dd675d48 extends \Twig\Template
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
        // line 176
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/contentPageEdit.html.twig", 176);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<script>
    function getTemplate(element) {
        \$.post(Routing.generate('admin_page_get_template'),{
                template: \$(element).val()
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

            \$(\"#serp-url-slug\").html(\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "schemeAndHttpHost", [], "any", false, false, false, 64), "html", null, true);
        echo "/\" + cat + \"/\" + url);
            \$(\"#slug\").val(url);
        });

        \$(\"#slug\").keyup(function(){
            var cat = \$(\"#cat option:selected\").text();
            cat = cat.replace(/ /g, '-').toLowerCase();

            var url = \$(\"#slug\").val();
            url = url.replace(/ /g, '-').toLowerCase();

            \$(\"#serp-url-slug\").html(\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "schemeAndHttpHost", [], "any", false, false, false, 75), "html", null, true);
        echo "/\" + cat + \"/\" + url);
            \$(\"#slug\").val(url);
        });
    });
</script>
";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <h1>ContentPagina</h1>
    </div>
    <div class=\"col-xs-12\">
        <form method=\"post\" action=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit_content");
        echo "\">
            <input type=\"hidden\" name=\"pageContentId\" value=\"";
        // line 90
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "id", [], "any", false, false, false, 90), "html", null, true);
        }
        echo "\">

            <div id=\"templatefound\">
                <div class=\"form-group\">
                    <label for=\"title\">Page Title</label>
                    <input class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 95
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "title", [], "any", false, false, false, 95), "html", null, true);
        }
        echo "\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"slug\">Slug</label>
                    <input class=\"form-control\" id=\"slug\" name=\"slug\" value=\"";
        // line 100
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "slug", [], "any", false, false, false, 100), "html", null, true);
        }
        echo "\">
                </div>

                <div id=\"metaTitleSign\" class=\"form-group\">
                    <label for=\"metaTitle\">Meta Title</label>
                    <input class=\"form-control\" id=\"metaTitle\" name=\"metaTitle\" value=\"";
        // line 105
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaTitle", [], "any", false, false, false, 105), "html", null, true);
        }
        echo "\" required>
                    <span id=\"titleCount\">0</span> / 180 (mobiel) - <strong>70 (desktop)</strong>
                </div>

                <div id=\"metaDescriptionSign\" class=\"form-group\">
                    <label for=\"metaDescription\">Meta Description</label>
                    <textarea class=\"form-control\" id=\"metaDescription\" name=\"metaDescription\" maxlength=\"320\">";
        // line 111
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "metaDescription", [], "any", false, false, false, 111), "html", null, true);
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
        // line 121
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            // line 122
            echo "                        ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 122), "schemeAndHttpHost", [], "any", false, false, false, 122) . "/") . twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "path", [], "any", false, false, false, 122)), "html", null, true);
            echo "
                        ";
        }
        // line 124
        echo "                    </div>
                    <div class=\"titleTag-serp-desc\" style=\"font-size: 13px; line-height: 18px;\"></div>
                </div>
                <hr>

                <div class=\"form-group\">
                    <label for=\"content\">Content</label>
                    <textarea class=\"form-control tinymce\" id=\"content\" name=\"content\">";
        // line 131
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null)))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "content", [], "any", false, false, false, 131), "html", null, true);
        }
        echo "</textarea>
                </div>

                <hr>
                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios1\" value=\"0\" ";
        // line 137
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "active", [], "any", false, false, false, 137) == 0))) {
            echo "checked";
        }
        echo ">Niet Online zichtbaar
                    </label>
                </div>
                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"active\" id=\"optionsRadios2\" value=\"1\" ";
        // line 142
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "active", [], "any", false, false, false, 142) != 1))) {
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
        // line 148
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "paid", [], "any", false, false, false, 148) == 0))) {
            echo "checked";
        }
        echo ">Gratis
                    </label>
                </div>
                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"paid\" id=\"optionsRadios4\" value=\"1\" ";
        // line 153
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "paid", [], "any", false, false, false, 153) != 1))) {
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
        // line 159
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "accountRequired", [], "any", false, false, false, 159) == 0))) {
            echo "checked";
        }
        echo "> Account is niet verplicht
                    </label>
                </div>
                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"accountRequired\" id=\"optionsRadios6\" value=\"1\" ";
        // line 164
        if ((((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty(($context["pageContent"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["pageContent"] ?? null), "accountRequired", [], "any", false, false, false, 164) != 1))) {
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
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_overview");
        echo "\" class=\"btn btn-default pull-left\">Terug</a>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "Admin/Page/contentPageEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 170,  292 => 164,  282 => 159,  270 => 153,  260 => 148,  248 => 142,  238 => 137,  227 => 131,  218 => 124,  212 => 122,  210 => 121,  195 => 111,  184 => 105,  174 => 100,  164 => 95,  154 => 90,  150 => 89,  143 => 84,  139 => 83,  129 => 75,  115 => 64,  51 => 2,  47 => 1,  36 => 176,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/contentPageEdit.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/contentPageEdit.html.twig");
    }
}
