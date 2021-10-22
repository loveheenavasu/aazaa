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

/* Account/login.html.twig */
class __TwigTemplate_6f8b5f4116fe181c7d084875e5477d691fa6bd80633faa1b1b9701321f2a1293 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Account/login.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"container\">
        ";
        // line 4
        $this->loadTemplate("Blocks/loginOrCreateAccount.html.twig", "Account/login.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 7
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "Account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  56 => 5,  54 => 4,  50 => 2,  46 => 1,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/login.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/login.html.twig");
    }
}
