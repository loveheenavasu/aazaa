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
class __TwigTemplate_6939a21324cd316a27a40d3ff00f72eac46b93ffd1e007ed0fd6eb14de22856c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascript_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_loginbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loginbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "loginbody"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  345 => 64,  326 => 56,  307 => 51,  289 => 25,  271 => 16,  260 => 141,  246 => 129,  182 => 66,  179 => 65,  177 => 64,  170 => 59,  166 => 57,  164 => 56,  161 => 55,  156 => 52,  154 => 51,  151 => 50,  149 => 49,  142 => 44,  140 => 43,  135 => 40,  133 => 39,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  103 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  80 => 19,  76 => 18,  73 => 17,  71 => 16,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"nl\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">

        <title>Aazaa.org Admin</title>

        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/admin.css') }}\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}

        <script src=\"{{ asset('js/jquery-3-2-1.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        <script src=\"{{ asset('js/tinymce/tinymce.min.js') }}\"></script>
        <script src=\"{{ asset('js/tinymce/langs/nl.js') }}\"></script>
        {% block javascript_header %}{% endblock %}

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('images/favicons/apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('images/favicons/favicon-32x32.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('images/favicons/favicon-16x16.png') }}\">
        <link rel=\"manifest\" href=\"{{ asset('images/favicons/site.webmanifest') }}\">
        <link rel=\"mask-icon\" href=\"{{ asset('images/favicons/safari-pinned-tab.svg') }}\" color=\"#b3b565\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Aazaa.org\">
        <meta name=\"application-name\" content=\"Aazaa.org\">
        <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
        <meta name=\"theme-color\" content=\"#ffffff\">
    </head>

    <body>
    {% if is_granted('ROLE_ADMIN') %}
        <input name=\"image\" type=\"file\" id=\"uploadTinyMce\" class=\"hidden\" onchange=\"\">
        <nav class=\"navbar navbar-inverse sidebar\" role=\"navigation\">
            <div class=\"container-fluid\">
                {% include 'Admin/menu.html.twig' %}
            </div>
        </nav>
        <div class=\"main\">
            <div class=\"container\">
                <div class=\"col-xs-12\">
                    {% include 'Admin/flashMessages.html.twig' %}
                </div>
                {% block content %} {% endblock %}
            </div>
        </div>
    {% else %}
        <div class=\"container\">
            {% block loginbody %} {% endblock %}
        </div>
    {% endif %}

        <div class=\"modal fade\" id=\"modalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div id=\"modelContent\" class=\"modal-dialog modal-lg\"></div>
        </div>

        {% block javascript_footer %}{% endblock %}
        {% if is_granted('ROLE_ADMIN') %}
            <script>
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
                    {#link_list: {{  render(controller('WebsiteBundle:Admin/Default:getAllPageUrls') ) }},#}
                    setup: function (editor) {
                        editor.on('change', function () {
                            editor.save();
                        });
                        editor.on('blur', function () {
                            editor.save();
                        });

                    }
                });
            </script>
        {% endif %}
    </body>
</html>", "Admin/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/base.html.twig");
    }
}
