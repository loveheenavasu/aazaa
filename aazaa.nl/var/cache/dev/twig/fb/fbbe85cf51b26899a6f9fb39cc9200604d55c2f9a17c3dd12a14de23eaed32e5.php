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
class __TwigTemplate_b2ed8c50f709a41f4eee35746429fec5c00f999c72c33d37ca8d1036f93c7d75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/videoChat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/videoChat.html.twig"));

        $this->parent = $this->loadTemplate("Account/base.html.twig", "Account/videoChat.html.twig", 54);
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
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accountContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accountContent"));

        // line 6
        echo "    <div class=\"block dark col-xs-12\">
        <h2>Workshops / Sessies</h2>

        ";
        // line 9
        if (((isset($context["errormessage"]) || array_key_exists("errormessage", $context)) &&  !(isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <div class=\"row\">
                <div>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["errormessage"]) || array_key_exists("errormessage", $context) ? $context["errormessage"] : (function () { throw new RuntimeError('Variable "errormessage" does not exist.', 11, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 40
        echo "    <script src=\"https://static.opentok.com/v2/js/opentok.min.js\"></script>
    ";
        // line 41
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 41, $this->source); })()), "videoChatSessionId", [], "any", false, false, false, 41)) &&  !twig_test_empty((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 41, $this->source); })())))) {
            // line 42
            echo "        <script type=\"text/javascript\">
            var apiKey = '";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["apiKey"]) || array_key_exists("apiKey", $context) ? $context["apiKey"] : (function () { throw new RuntimeError('Variable "apiKey" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "';
            var sessionId = '";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 44, $this->source); })()), "videoChatSessionId", [], "any", false, false, false, 44), "html", null, true);
            echo "';
            var token = '";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "';
            var session = OT.initSession(apiKey, sessionId);
        </script>
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/opentok/opentok-option.js"), "html", null, true);
            echo "\"></script>


    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  174 => 48,  168 => 45,  164 => 44,  160 => 43,  157 => 42,  155 => 41,  152 => 40,  142 => 39,  109 => 14,  103 => 11,  100 => 10,  98 => 9,  93 => 6,  83 => 5,  70 => 2,  60 => 1,  37 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{%  block stylesheets %}
    <link href=\"{{ asset('css/opentok.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block accountContent %}
    <div class=\"block dark col-xs-12\">
        <h2>Workshops / Sessies</h2>

        {% if errormessage is defined and not empty %}
            <div class=\"row\">
                <div>{{ errormessage }}</div>
            </div>
        {% endif %}

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
{% endblock %}

{% block javascript_footer %}
    <script src=\"https://static.opentok.com/v2/js/opentok.min.js\"></script>
    {% if workshop.videoChatSessionId is not empty and token is not empty %}
        <script type=\"text/javascript\">
            var apiKey = '{{ apiKey }}';
            var sessionId = '{{ workshop.videoChatSessionId }}';
            var token = '{{ token }}';
            var session = OT.initSession(apiKey, sessionId);
        </script>
        <script src=\"{{ asset('js/opentok/opentok-option.js')  }}\"></script>


    {% endif %}
{% endblock %}

{% extends 'Account/base.html.twig' %}", "Account/videoChat.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/videoChat.html.twig");
    }
}
