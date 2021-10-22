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
class __TwigTemplate_09bf3bee81192cb78f1538cfc2c668f7fb4ecb3b134b3e60a3906739519b5824 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Video/session.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Video/session.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Video/session.html.twig", 56);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/opentok.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_close", ["workshop" => twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 45
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        var apiKey = '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["apiKey"]) || array_key_exists("apiKey", $context) ? $context["apiKey"] : (function () { throw new RuntimeError('Variable "apiKey" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "';
        var sessionId = '";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 49, $this->source); })()), "videoChatSessionId", [], "any", false, false, false, 49), "html", null, true);
        echo "';
        var token = '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "';
        var session = OT.initSession(apiKey, sessionId);
    </script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok-option.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  174 => 53,  168 => 50,  164 => 49,  160 => 48,  155 => 46,  152 => 45,  142 => 44,  119 => 30,  93 => 6,  83 => 5,  70 => 2,  60 => 1,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link href=\"{{ asset('css/opentok.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div class=\"row\">
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
                        <a href=\"{{ path('video_chat_close', {'workshop': workshop.id}) }}\" id=\"stop-btn\" class=\"btn btn-danger\" style=\"display: none\">Stop sessie</a>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"col-xs-12 embed-responsive embed-responsive-4by3\">
            <div class=\"embed-responsive-item\" id=\"subscribers\"></div>
            <div id=\"publisher\"></div>
        </div>

{% endblock %}

{% block javascript_footer %}

    <script src=\"{{ asset('js/opentok/opentok.min.js') }}\"></script>
    <script type=\"text/javascript\">
        var apiKey = '{{ apiKey }}';
        var sessionId = '{{ workshop.videoChatSessionId }}';
        var token = '{{ token }}';
        var session = OT.initSession(apiKey, sessionId);
    </script>
    <script src=\"{{ asset('js/opentok/opentok-option.js') }}\"></script>
{% endblock %}

{% extends 'Admin/base.html.twig' %}", "Admin/Video/session.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Video/session.html.twig");
    }
}
