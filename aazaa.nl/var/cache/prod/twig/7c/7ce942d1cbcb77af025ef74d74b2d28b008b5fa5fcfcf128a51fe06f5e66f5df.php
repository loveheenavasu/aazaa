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

/* Admin/Video/session.html.twig */
class __TwigTemplate_f7847095548d94e804eeae33cd0bb9883aac9d32ed3fd125ade2a71340a3ad65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 56
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Video/session.html.twig", 56);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/opentok.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Videochat</h1>
        </div>

        <div class=\"col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body form-inline\">
                    <div class=\"form-group col-xs-3\">
                        <label for=\"audio-source-select\">Audio:</label>
                        <select id=\"audio-source-select\" class=\"form-control\"></select>
                    </div>
                    <div class=\"form-group col-xs-3\">
                        <label for=\"video-source-select\">Video:</label>
                        <select id=\"video-source-select\" class=\"form-control\"></select>
                    </div>
                    <div class=\"form-group col-xs-3\">
                        <div id=\"audio-meter\">
                            <label for=\"audio-meter\">Volume:</label>
                            <meter min=\"0\" max=\"1\" value=\"0\"></meter>
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <button id=\"publish-btn\" class=\"btn btn-success \" type=\"button\">Start uitzenden</button>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_close", ["workshop" => twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" id=\"stop-btn\" class=\"btn btn-danger\" style=\"display: none\">Stop sessie</a>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"col-xs-12 embed-responsive embed-responsive-4by3\">
            <div class=\"embed-responsive-item\" id=\"subscribers\"></div>
            <div id=\"publisher\"></div>
        </div>

";
    }

    // line 44
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        var apiKey = '";
        // line 48
        echo twig_escape_filter($this->env, ($context["apiKey"] ?? null), "html", null, true);
        echo "';
        var sessionId = '";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "videoChatSessionId", [], "any", false, false, false, 49), "html", null, true);
        echo "';
        var token = '";
        // line 50
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "';
        var session = OT.initSession(apiKey, sessionId);
    </script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok-option.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "Admin/Video/session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  126 => 50,  122 => 49,  118 => 48,  113 => 46,  110 => 45,  106 => 44,  89 => 30,  63 => 6,  59 => 5,  52 => 2,  48 => 1,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Video/session.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Video/session.html.twig");
    }
}
