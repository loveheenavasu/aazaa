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

/* Admin/base.html.twig */
class __TwigTemplate_ec9d3ec16fbc60884126800689a931ac1857e097b77cb68d1e6d208cc18957e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript_header' => [$this, 'block_javascript_header'],
            'content' => [$this, 'block_content'],
            'loginbody' => [$this, 'block_loginbody'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">

        <title>Aazaa.org Admin</title>

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3-2-1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tinymce/langs/nl.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 25
        $this->displayBlock('javascript_header', $context, $blocks);
        // line 26
        echo "
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/site.webmanifest"), "html", null, true);
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#b3b565\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Aazaa.org\">
        <meta name=\"application-name\" content=\"Aazaa.org\">
        <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
        <meta name=\"theme-color\" content=\"#ffffff\">
    </head>

    <body>
    ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "        <input name=\"image\" type=\"file\" id=\"uploadTinyMce\" class=\"hidden\" onchange=\"\">
        <nav class=\"navbar navbar-inverse sidebar\" role=\"navigation\">
            <div class=\"container-fluid\">
                ";
            // line 43
            $this->loadTemplate("Admin/menu.html.twig", "Admin/base.html.twig", 43)->display($context);
            // line 44
            echo "            </div>
        </nav>
        <div class=\"main\">
            <div class=\"container\">
                <div class=\"col-xs-12\">
                    ";
            // line 49
            $this->loadTemplate("Admin/flashMessages.html.twig", "Admin/base.html.twig", 49)->display($context);
            // line 50
            echo "                </div>
                ";
            // line 51
            $this->displayBlock('content', $context, $blocks);
            // line 52
            echo "            </div>
        </div>
    ";
        } else {
            // line 55
            echo "        <div class=\"container\">
            ";
            // line 56
            $this->displayBlock('loginbody', $context, $blocks);
            // line 57
            echo "        </div>
    ";
        }
        // line 59
        echo "
        <div class=\"modal fade\" id=\"modalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div id=\"modelContent\" class=\"modal-dialog modal-lg\"></div>
        </div>

        ";
        // line 64
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 65
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "            <script>
                tinymce.init({
                    selector:'.tinymce',
                    browser_spellcheck: true,
                    branding: false,
                    theme: \"modern\",
                    menubar: false,
                    statusbar: false,
                    plugins: ['link', 'paste', 'image', 'media', 'code'],
                    image_advtab: true,
                    height : \"480\",
                    inline_styles : false,
                    toolbar: 'undo redo | styleselect | bold italic | link | image | code',
                    paste_auto_cleanup_on_paste : true,
                    paste_remove_styles: true,
                    paste_remove_styles_if_webkit: true,
                    paste_strip_class_attributes: true,
                    file_picker_callback: function(callback, value, meta) {
                        if (meta.filetype == 'image') {
                            \$('#uploadTinyMce').trigger('click');
                            \$('#uploadTinyMce').on('change', function() {
                                var file = this.files[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    callback(e.target.result, {
                                        alt: ''
                                    });
                                };
                                reader.readAsDataURL(file);
                            });
                        }
                    },
                    images_upload_handler: function (blobInfo, success, failure) {
                        var xhr, formData;

                        xhr = new XMLHttpRequest();
                        xhr.withCredentials = false;
                        xhr.open('POST', Routing.generate('admin_image_upload') );

                        xhr.onload = function() {
                            var json;

                            if (xhr.status !== 200) {
                                failure('HTTP Error: ' + xhr.status);
                                return;
                            }

                            json = JSON.parse(xhr.responseText);

                            if (!json || typeof json.location !== 'string') {
                                failure('Invalid JSON: ' + xhr.responseText);
                                return;
                            }

                            success(json.location);
                        };

                        formData = new FormData();
                        formData.append('file', blobInfo.blob(), blobInfo.filename());

                        xhr.send(formData);
                    },
                    ";
            // line 129
            echo "                    setup: function (editor) {
                        editor.on('change', function () {
                            editor.save();
                        });
                        editor.on('blur', function () {
                            editor.save();
                        });

                    }
                });
            </script>
        ";
        }
        // line 141
        echo "    </body>
</html>";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_javascript_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 56
    public function block_loginbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 64
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 64,  278 => 56,  271 => 51,  265 => 25,  259 => 16,  254 => 141,  240 => 129,  176 => 66,  173 => 65,  171 => 64,  164 => 59,  160 => 57,  158 => 56,  155 => 55,  150 => 52,  148 => 51,  145 => 50,  143 => 49,  136 => 44,  134 => 43,  129 => 40,  127 => 39,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  74 => 19,  70 => 18,  67 => 17,  65 => 16,  60 => 14,  56 => 13,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/base.html.twig");
    }
}
