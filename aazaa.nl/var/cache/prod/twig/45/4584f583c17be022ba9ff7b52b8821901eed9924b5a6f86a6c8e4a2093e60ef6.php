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
class __TwigTemplate_c5d327cce972ab485c5029d7ff5221be59ccdf8b70ebf8fcb2fcf2f39a7fd45a extends \Twig\Template
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
        return array (  55 => 10,  53 => 9,  49 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/Blocks/template2.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/Blocks/template2.html.twig");
    }
}
