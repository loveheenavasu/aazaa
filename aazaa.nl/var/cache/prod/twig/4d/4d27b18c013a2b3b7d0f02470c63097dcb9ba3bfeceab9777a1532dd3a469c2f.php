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

/* Account/base.html.twig */
class __TwigTemplate_cce254d57992e5fbcc5b2732f4846db9f325979876d56f0dd49016ade402231c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'accountContent' => [$this, 'block_accountContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Base/base.html.twig", "Account/base.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-4 col-md-3\">
            ";
        // line 4
        $this->loadTemplate("Account/menu.html.twig", "Account/base.html.twig", 4)->display($context);
        // line 5
        echo "        </div>
        <div class=\"col-xs-12 col-sm-8 col-md-9\">
            ";
        // line 7
        $this->displayBlock('accountContent', $context, $blocks);
        // line 8
        echo "        </div>
    </div>
    <div class=\"container\" style=\"margin-top: 30px;\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigationMiddle"));
        // line 13
        echo "
    </div>
";
    }

    // line 7
    public function block_accountContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "Account/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  70 => 13,  68 => 11,  63 => 8,  61 => 7,  57 => 5,  55 => 4,  51 => 2,  47 => 1,  36 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "Account/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/base.html.twig");
    }
}
