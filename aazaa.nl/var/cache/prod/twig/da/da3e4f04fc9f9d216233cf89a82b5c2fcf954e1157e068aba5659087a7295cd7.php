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

/* Email/newUser.html.twig */
class __TwigTemplate_4d94ae179d51811989c24c844eb27c7e7c2d8053ddee70f736fa9d0c2cd31fb3 extends \Twig\Template
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
        // line 21
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/newUser.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    Welkom bij de Aazaa Academie<br>
    <br>
    Er is een account aangemaakt met de volgende gegevens:<br>
    Gebruikersnaam: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "<br>
    <br>
    Je account is echter nog niet geactiveerd<br>
    Om je account te activeren klik <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_validate_email", ["userId" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 14), "tokenLogin" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "tokenLogin", [], "any", false, false, false, 14), "email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 14)])), "html", null, true);
        echo "\"><b>HIER</b></a>
    <br>
    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/newUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  79 => 11,  74 => 8,  70 => 7,  63 => 5,  59 => 4,  52 => 2,  48 => 1,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/newUser.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/newUser.html.twig");
    }
}
