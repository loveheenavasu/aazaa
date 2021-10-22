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

/* Base/footer.html.twig */
class __TwigTemplate_f2753041770525fd6b1f8ee91ed9e1dd0609c6c2921eae94d661e4fe2182bd02 extends \Twig\Template
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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"block-square\">
            <div class=\"row\" style=\"margin-left:0; margin-right: 0\">
                <h5 class=\"col-xs-12 col-sm-4 text-left\">
                    Aazaa Academie
                </h5>
                <h5 class=\"col-xs-12 col-sm-4 text-center\">
                    Email: info@aazaa.org
                </h5>
                <h5 class=\"col-xs-12 col-sm-4 text-right\">
                    Tel: +31 (0) 62 66 22 444
                </h5>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"footer-img\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/copyright.png"), "html", null, true);
        echo "\" class=\"img-responsive copyright-image\">
        </div>
        <div class=\"footer-text\">
            ";
        // line 24
        echo ($context["collectorFooter"] ?? null);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Base/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/footer.html.twig", "/home/deb116267/domains/aazaa.org/templates/Base/footer.html.twig");
    }
}
