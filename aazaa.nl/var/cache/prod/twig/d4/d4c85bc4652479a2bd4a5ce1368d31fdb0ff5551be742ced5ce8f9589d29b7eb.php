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

/* Models/sharePage.html.twig */
class __TwigTemplate_c80138256c188bc51f5034145a421c3b583ae90c2c66ca7931e6ae758ab94e5f extends \Twig\Template
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
        // line 1
        echo "
<div class=\"modal fade\" id=\"sharePageModel\" role=\"dialog\">
    <div class=\"modal-dialog model-background\">
        <form method=\"post\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_share_page");
        echo "\">
            <div class=\"modal-content block\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Met wie zou je deze pagina willen delen ?</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("share"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"pageUrl\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "schemeAndHttpHost", [], "any", false, false, false, 13) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "requestUri", [], "any", false, false, false, 13)), "html", null, true);
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
                    <button type=\"submit\" class=\"btn btn-aazaa\">Deel Pagina</button>
                </div>
            </div>
        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Models/sharePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Models/sharePage.html.twig", "/home/deb116267/domains/aazaa.org/templates/Models/sharePage.html.twig");
    }
}
