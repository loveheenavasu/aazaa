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

/* Email/newUsername.html.twig */
class __TwigTemplate_0565e3b792dbb335c899b1e3fe3228440e9e8999406124af83679a98d006af33 extends \Twig\Template
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
        // line 17
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/newUsername.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    Gebruikersnaam gewijzigd - Aazaa.org
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    Gebruikersnaam gewijzigd op Aazaa.org
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    Uw gebruikersnaam voor uw account is succesvol gewijzigd:<br>
    <br>
    uw gebruikersnaam is van ";
        // line 10
        echo twig_escape_filter($this->env, ($context["oldUsername"] ?? null), "html", null, true);
        echo " naar ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 10), "html", null, true);
        echo " gewijzigd<br>
    <br>
    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/newUsername.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  70 => 8,  66 => 7,  61 => 5,  57 => 4,  52 => 2,  48 => 1,  37 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/newUsername.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/newUsername.html.twig");
    }
}
