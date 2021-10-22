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
class __TwigTemplate_2c23698ef6af06a0194b951aa42e530a748ea27d0c287fb8ae8ae31e2cfdb560 extends \Twig\Template
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
        return array (  106 => 36,  104 => 35,  100 => 33,  98 => 32,  94 => 30,  92 => 29,  88 => 27,  86 => 26,  82 => 24,  80 => 23,  76 => 21,  74 => 20,  70 => 18,  68 => 17,  64 => 15,  62 => 14,  55 => 9,  52 => 8,  50 => 7,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/Blocks/template1.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/template1.html.twig");
    }
}
