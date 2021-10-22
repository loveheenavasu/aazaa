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

/* Admin/Page/Blocks/template1.html.twig */
class __TwigTemplate_21d55f26cfcdf3b04618d91131f975c56ad31fef7625f782aaabde69d36d308f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/template1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/template1.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 3
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 3)->display(twig_array_merge($context, ["position" => "0", "location" => "links"]));
        // line 4
        echo "        ";
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 4)->display(twig_array_merge($context, ["position" => "1", "location" => "links"]));
        // line 5
        echo "    </div>
    <div class=\"col-md-6\">
        ";
        // line 7
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 7)->display(twig_array_merge($context, ["position" => "0", "location" => "rechts"]));
        // line 8
        echo "        ";
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 8)->display(twig_array_merge($context, ["position" => "1", "location" => "rechts"]));
        // line 9
        echo "    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-3\">
        ";
        // line 14
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 14)->display(twig_array_merge($context, ["position" => "0", "location" => "rijboven"]));
        // line 15
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 17
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 17)->display(twig_array_merge($context, ["position" => "1", "location" => "rijboven"]));
        // line 18
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 20
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 20)->display(twig_array_merge($context, ["position" => "2", "location" => "rijboven"]));
        // line 21
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 23
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 23)->display(twig_array_merge($context, ["position" => "3", "location" => "rijboven"]));
        // line 24
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 26
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 26)->display(twig_array_merge($context, ["position" => "0", "location" => "rijonder"]));
        // line 27
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 29
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 29)->display(twig_array_merge($context, ["position" => "1", "location" => "rijonder"]));
        // line 30
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 32
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 32)->display(twig_array_merge($context, ["position" => "2", "location" => "rijonder"]));
        // line 33
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 35
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template1.html.twig", 35)->display(twig_array_merge($context, ["position" => "3", "location" => "rijonder"]));
        // line 36
        echo "    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/Blocks/template1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  110 => 35,  106 => 33,  104 => 32,  100 => 30,  98 => 29,  94 => 27,  92 => 26,  88 => 24,  86 => 23,  82 => 21,  80 => 20,  76 => 18,  74 => 17,  70 => 15,  68 => 14,  61 => 9,  58 => 8,  56 => 7,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-6\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '0', 'location': 'links' } %}
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '1', 'location': 'links' } %}
    </div>
    <div class=\"col-md-6\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '0', 'location': 'rechts' } %}
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '1', 'location': 'rechts' } %}
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '0', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '1', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '2', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '3', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '0', 'location': 'rijonder' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '1', 'location': 'rijonder' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '2', 'location': 'rijonder' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '3', 'location': 'rijonder' } %}
    </div>
</div>

", "Admin/Page/Blocks/template1.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/template1.html.twig");
    }
}
