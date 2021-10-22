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

/* Email/sharePage.html.twig */
class __TwigTemplate_1b942e7a349cc2e54d45fe6642e6ae4744c644f514f4c796293ce84a16abd8ff extends \Twig\Template
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
        // line 18
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/sharePage.html.twig", 18);
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
        echo "    Beste ";
        echo twig_escape_filter($this->env, ($context["receiverName"] ?? null), "html", null, true);
        echo ",<br>
    <br>
    Graag wil ik de volgende pagina met je delen!<br>
    <br>
    Link naar de pagina: <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["pageUrl"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["pageUrl"] ?? null), "html", null, true);
        echo "</a><br>
    <br>
    Met vriendelijke groet,<br>
    ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 15))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 15), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 15), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 15), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "Email/sharePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  74 => 8,  70 => 7,  63 => 5,  59 => 4,  52 => 2,  48 => 1,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/sharePage.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/sharePage.html.twig");
    }
}
