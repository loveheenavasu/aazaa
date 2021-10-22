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
class __TwigTemplate_e8f204e70906c4d5bba4e4fc8877dd45225d695cabbaff6e7c588142fd26cabc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/footer.html.twig"));

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
        echo (isset($context["collectorFooter"]) || array_key_exists("collectorFooter", $context) ? $context["collectorFooter"] : (function () { throw new RuntimeError('Variable "collectorFooter" does not exist.', 24, $this->source); })());
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  71 => 24,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
            <img src=\"{{ asset('images/copyright.png') }}\" class=\"img-responsive copyright-image\">
        </div>
        <div class=\"footer-text\">
            {{ collectorFooter | raw }}
        </div>
    </div>
</div>", "Base/footer.html.twig", "/home/deb116267/domains/aazaa.org/templates/Base/footer.html.twig");
    }
}
