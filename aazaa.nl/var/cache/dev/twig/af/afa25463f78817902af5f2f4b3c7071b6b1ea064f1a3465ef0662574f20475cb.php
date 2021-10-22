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

/* Admin/Page/Blocks/template2.html.twig */
class __TwigTemplate_b0f6f0845f4c555c90c34ff2887243eef99d2a02e209cfb611a3fbeb5de62449 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/template2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Page/Blocks/template2.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        ";
        // line 3
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template2.html.twig", 3)->display(twig_array_merge($context, ["position" => "0", "location" => "rijboven"]));
        // line 4
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 6
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template2.html.twig", 6)->display(twig_array_merge($context, ["position" => "1", "location" => "rijboven"]));
        // line 7
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 9
        $this->loadTemplate("Admin/Page/Blocks/pageContentRelationsSelect.html.twig", "Admin/Page/Blocks/template2.html.twig", 9)->display(twig_array_merge($context, ["position" => "2", "location" => "rijboven"]));
        // line 10
        echo "    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Page/Blocks/template2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  59 => 9,  55 => 7,  53 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '0', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '1', 'location': 'rijboven' } %}
    </div>
    <div class=\"col-md-3\">
        {% include 'Admin/Page/Blocks/pageContentRelationsSelect.html.twig' with {'position': '2', 'location': 'rijboven' } %}
    </div>
</div>

", "Admin/Page/Blocks/template2.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/template2.html.twig");
    }
}
