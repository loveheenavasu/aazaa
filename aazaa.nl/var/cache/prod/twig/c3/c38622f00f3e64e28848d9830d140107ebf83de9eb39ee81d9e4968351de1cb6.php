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

/* Email/paymentFailed.html.twig */
class __TwigTemplate_6b1bccd4ae5575b4a013b052509f57ad1f2affcf754f02f108bb5fc4eea5709e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/paymentFailed.html.twig", 21);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 8))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
        }
        echo "<br>
    <br>
    Hé, dat is jammer, je betaling is <strong>niet</strong> geslaagd!
    Je hebt dus <strong>geen</strong> plek geboekt<br>
    <br>
    Probeer het nog een keer.<br>
    <br>
    Mocht het weer niet lukken, dan kun je een email sturen naar <a href=\"mailto:info@aazaa.org\">info@aazaa.org</a> en dan lossen we het voor je op.
    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/paymentFailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  70 => 7,  63 => 5,  59 => 4,  52 => 2,  48 => 1,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/paymentFailed.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/paymentFailed.html.twig");
    }
}
