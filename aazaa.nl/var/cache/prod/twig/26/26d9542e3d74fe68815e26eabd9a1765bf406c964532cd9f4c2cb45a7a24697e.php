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

/* Email/paymentSuccess.html.twig */
class __TwigTemplate_f501c23aac598b6ca59448557800fad7a556d104a52205bb1564accbd0f7541f extends \Twig\Template
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
        // line 22
        return "Email/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/paymentSuccess.html.twig", 22);
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
    Je betaling is geslaagd!<br>
    Je hebt een ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userPayments"] ?? null), "userWorkshop", [], "any", false, false, false, 11), "workshop", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11), "html", null, true);
        echo " geboekt op ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userPayments"] ?? null), "userWorkshop", [], "any", false, false, false, 11), "workshop", [], "any", false, false, false, 11), "startDatetime", [], "any", false, false, false, 11), "d-m-Y H:i"), "html", null, true);
        echo " op ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userPayments"] ?? null), "userWorkshop", [], "any", false, false, false, 11), "workshop", [], "any", false, false, false, 11), "location", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo ".<br>
    Je kunt deze terug vinden onder <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_workshop")), "html", null, true);
        echo "\">“sessies/workshops”</a> in je lidmaatschapsectie.<br>
    Zet ‘m in je agenda en tot dan!<br>
    <br>
    Bij een videosessie: Als je bent ingelogd zie je in je lidmaatschapsectie onder <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_workshop")), "html", null, true);
        echo "\">“sessies/workshops”</a>  de geboekte videosessie staan.
    Op de tijd van de sessie wordt deze actief en als je dan hier op klikt wordt er een videoverbinding tot stand gebracht. Je moet wel een computer of telefoon met microfoon en camera hebben en het programma hiertoe toegang verlenen.<br>
    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/paymentSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  96 => 12,  88 => 11,  74 => 8,  70 => 7,  63 => 5,  59 => 4,  52 => 2,  48 => 1,  37 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/paymentSuccess.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/paymentSuccess.html.twig");
    }
}
