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

/* Email/mailing.html.twig */
class __TwigTemplate_e4a31ae0aa56853bb7d5d5c6f334c98947f17fcf6ee099e7a0f451292569af30 extends \Twig\Template
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
        // line 7
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["unsubscribe"] = true;
        // line 7
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/mailing.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["content"] ?? null);
    }

    public function getTemplateName()
    {
        return "Email/mailing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 3,  58 => 2,  51 => 1,  46 => 7,  44 => 5,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/mailing.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/mailing.html.twig");
    }
}
