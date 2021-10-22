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

/* Account/payment.html.twig */
class __TwigTemplate_ca2dd2d2bec46c46fa86fb7009031e01f7cc3764ac67d5cead9d2a602b49f6c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/payment.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "        ";
        // line 5
        echo "            ";
        // line 6
        echo "                ";
        // line 7
        echo "            ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        // line 10
        echo "            ";
        // line 11
        echo "                ";
        // line 12
        echo "            ";
        // line 13
        echo "                ";
        // line 14
        echo "                    ";
        // line 15
        echo "                        ";
        // line 16
        echo "                        ";
        // line 17
        echo "                            ";
        // line 18
        echo "                        ";
        // line 19
        echo "                        ";
        // line 20
        echo "                            ";
        // line 21
        echo "                            ";
        // line 22
        echo "                        ";
        // line 23
        echo "                    ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
        // line 27
        echo "    ";
        // line 28
        echo "



";
        // line 33
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Account/payment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  95 => 28,  93 => 27,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  81 => 21,  79 => 20,  77 => 19,  75 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% block accountContent %}#}
    {#<div class=\"block dark\">#}
        {#<h2>Profiel</h2>#}
        {#<div class=\"row\">#}
            {#{% if errormessage is defined and not empty %}#}
                {#<div>{{ errormessage }}</div>#}
            {#{% endif %}#}
        {#</div>#}
        {#<div class=\"row\">#}
            {#{% if app.user.favorites | length  < 1%}#}
                {#Geen favorieten#}
            {#{% else %}#}
                {#{% for favorite in app.user.favorites %}#}
                    {#<div class=\"col-xs-12 col-sm-6 col-md-4 panel panel-default\">#}
                        {#<div class=\"panel-heading\">{{ favorite.pageContent.title }}</div>#}
                        {#<div class=\"panel-body\">#}
                            {#<p>{{ favorite.video.descriptionShort }}</p>#}
                        {#</div>#}
                        {#<div class=\"panel-footer\">#}
                            {#<button type=\"button\" class=\"btn btn-aazaa pull-right favoriteAction\" data-favorite=\"{{ favorite.video.id }}\" data-reload=\"true\">Verwijderen</button>#}
                            {#<a class=\"btn btn-aazaa pull-right\" href=\"{{ path('video_detail', {'categoryslug': favorite.video.category.slug, 'videoslug':favorite.video.slug }) }}\">Bekijken</a>#}
                        {#</div>#}
                    {#</div>#}
                {#{% endfor %}#}
            {#{% endif %}#}
        {#</div>#}
    {#</div>#}




{#{% endblock %}#}

{#{% extends 'Account/base.html.twig' %}#}", "Account/payment.html.twig", "/home/deb116267/domains/aazaa.org/templates/Account/payment.html.twig");
    }
}
