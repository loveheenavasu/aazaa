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

/* Models/shareVideo.html.twig */
class __TwigTemplate_febb10b9dda5936e5263c61293e984ef4683eda71eb55757b0b78d7dd26a9e1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Models/shareVideo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Models/shareVideo.html.twig"));

        // line 1
        if (((isset($context["pageContent"]) || array_key_exists("pageContent", $context)) &&  !twig_test_empty((isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"modal fade\" id=\"shareVideoModel\" role=\"dialog\">
        <div class=\"modal-dialog model-background\">
            <form method=\"post\" action=\"";
            // line 4
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_share_video");
            echo "\">
                <div class=\"modal-content block\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Met wie zou je deze video willen delen ? </h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("share"), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"pageContentId\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageContent"]) || array_key_exists("pageContent", $context) ? $context["pageContent"] : (function () { throw new RuntimeError('Variable "pageContent" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>Naam ontvanger: *</label>
                                    <input type=\"text\" minlength=\"4\" class=\"form-control input-aazaa col-xs-12\" name=\"name\" required=\"required\" value=\"\">
                                </div>
                            </label>
                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>Emailadres ontvanger: *</label>
                                    <input type=\"email\" class=\"form-control input-aazaa col-xs-12\" name=\"email\" required=\"required\" value=\"\">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-aazaa\">Deel Video</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Models/shareVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageContent is defined and pageContent is not empty %}
    <div class=\"modal fade\" id=\"shareVideoModel\" role=\"dialog\">
        <div class=\"modal-dialog model-background\">
            <form method=\"post\" action=\"{{ path('account_share_video') }}\">
                <div class=\"modal-content block\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Met wie zou je deze video willen delen ? </h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('share') }}\">
                            <input type=\"hidden\" name=\"pageContentId\" value=\"{{ pageContent.id }}\">
                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>Naam ontvanger: *</label>
                                    <input type=\"text\" minlength=\"4\" class=\"form-control input-aazaa col-xs-12\" name=\"name\" required=\"required\" value=\"\">
                                </div>
                            </label>
                            <label class=\"input col-xs-12\">
                                <div class=\"input-group col-xs-12\">
                                    <label>Emailadres ontvanger: *</label>
                                    <input type=\"email\" class=\"form-control input-aazaa col-xs-12\" name=\"email\" required=\"required\" value=\"\">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-aazaa\">Deel Video</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endif %}
", "Models/shareVideo.html.twig", "/home/deb116267/domains/aazaa.org/templates/Models/shareVideo.html.twig");
    }
}
