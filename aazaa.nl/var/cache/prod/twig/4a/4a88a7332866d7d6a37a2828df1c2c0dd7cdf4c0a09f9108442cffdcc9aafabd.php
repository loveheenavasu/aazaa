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

/* Email/newSubscriptionSuccess.html.twig */
class __TwigTemplate_5c9a3d7ed27336cbde52440066874bc73689f7964d72c0db87f52ddeb8262660 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/newSubscriptionSuccess.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    Lidmaatschap - Aazaa.org
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    Lidmaatschap Aazaa.org
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    Beste ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 9))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "<br>
    <br>
    Je betaling is geslaagd en je bent nu lid!<br>
    Je hebt nu toegang tot alle video’s!<br>
    En je kunt meer video’s als favoriet bewaren.<br>
    Ik wens je veel plezier en veel inzicht!<br>
    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/newSubscriptionSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  70 => 8,  66 => 7,  61 => 5,  57 => 4,  52 => 2,  48 => 1,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/newSubscriptionSuccess.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/newSubscriptionSuccess.html.twig");
    }
}
