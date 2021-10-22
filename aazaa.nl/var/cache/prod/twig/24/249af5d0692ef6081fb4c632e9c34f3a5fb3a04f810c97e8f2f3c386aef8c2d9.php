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

/* Account/videoChat.html.twig */
class __TwigTemplate_8121a18676f3a7b3511990479a76cc80043f3c30bc25590c9d545527b0503826 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'accountContent' => [$this, 'block_accountContent'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 54
        return "Account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/videoChat.html.twig", 54);
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
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"block dark col-xs-12\">
        <h2>Workshops / Sessies</h2>

        ";
        // line 9
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !($context["empty"] ?? null))) {
            // line 10
            echo "            <div class=\"row\">
                <div>";
            // line 11
            echo twig_escape_filter($this->env, ($context["errormessage"] ?? null), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 14
        echo "
        <div class=\"col-xs-12\">
            <div class=\"block dark col-xs-12 form-inline\" style=\"min-height: 100px;\">
                <div class=\"form-group col-xs-4\">
                    <label for=\"audio-source-select\">Audio:</label>
                    <select id=\"audio-source-select\" class=\"form-control input-aazaa\"></select>
                </div>
                <div class=\"form-group col-xs-4\">
                    <label for=\"video-source-select\">Video:</label>
                    <select id=\"video-source-select\" class=\"form-control input-aazaa\"></select>
                </div>
                <div class=\"col-xs-4\">
                    <button id=\"publish-btn\" class=\"btn btn-aazaa\" type=\"button\">Start uitzenden</button>
                </div>
            </div>
        </div>

        <div class=\"col-xs-12 video-embed-container embed-responsive embed-responsive-4by3\">
            <div class=\"embed-responsive-item\" id=\"subscribers\"></div>
            <div id=\"publisher\"></div>
        </div>

    </div>
";
    }

    // line 39
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <script src=\"https://static.opentok.com/v2/js/opentok.min.js\"></script>
    ";
        // line 41
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "videoChatSessionId", [], "any", false, false, false, 41)) &&  !twig_test_empty(($context["token"] ?? null)))) {
            // line 42
            echo "        <script type=\"text/javascript\">
            var apiKey = '";
            // line 43
            echo twig_escape_filter($this->env, ($context["apiKey"] ?? null), "html", null, true);
            echo "';
            var sessionId = '";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["workshop"] ?? null), "videoChatSessionId", [], "any", false, false, false, 44), "html", null, true);
            echo "';
            var token = '";
            // line 45
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "';
            var session = OT.initSession(apiKey, sessionId);
        </script>
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok-option.js"), "html", null, true);
            echo "\"></script>


    ";
        }
    }

    public function getTemplateName()
    {
        return "Account/videoChat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  126 => 45,  122 => 44,  118 => 43,  115 => 42,  113 => 41,  110 => 40,  106 => 39,  79 => 14,  73 => 11,  70 => 10,  68 => 9,  63 => 6,  59 => 5,  52 => 2,  48 => 1,  37 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/videoChat.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/videoChat.html.twig");
    }
}
