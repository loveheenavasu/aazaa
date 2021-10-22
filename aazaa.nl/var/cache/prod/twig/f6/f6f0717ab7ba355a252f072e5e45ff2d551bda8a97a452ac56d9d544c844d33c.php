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

/* Email/newPassword.html.twig */
class __TwigTemplate_ce651fd79940e08abca78e785e76092e4d5e4aab97b4cc6a19e5a197b4c1acfc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Email/base.html.twig", "Email/newPassword.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    Wachtwoord gewijzigd - Aazaa.org
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    Wachtwoord is gewijzigd op Aazaa.org
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    Wachtwoord voor uw account is succesvol gewijzigd:<br>
    <br>
    <b>Inloggegevens:</b><br>
    Gebruikersnaam: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "<br>
    Nieuwe wachtwoord: ";
        // line 12
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "<br>
    <br>
    ";
        // line 14
        if (((isset($context["reset"]) || array_key_exists("reset", $context)) && (($context["reset"] ?? null) == true))) {
            // line 15
            echo "        * Na inloggen kunt u, uw wachtwoord wijzigen naar voorkeur.<br>
    ";
        }
        // line 17
        echo "    <br>
    Met vriendelijke groet,<br>
    Aazaa.org
";
    }

    public function getTemplateName()
    {
        return "Email/newPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  86 => 15,  84 => 14,  79 => 12,  75 => 11,  70 => 8,  66 => 7,  61 => 5,  57 => 4,  52 => 2,  48 => 1,  37 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/newPassword.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/newPassword.html.twig");
    }
}
