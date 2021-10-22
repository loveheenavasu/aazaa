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

/* Admin/Collector/index.html.twig */
class __TwigTemplate_cd8f4873b2c5f8bf821012be6295ca7c1c5652d57da76d2e40926eebb949cf74 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 40
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Collector/index.html.twig", 40);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Collector</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "c.id"], "method", false, false, false, 14)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Id", "c.id");
        echo "</th>
                    <th";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "c.key"], "method", false, false, false, 15)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Sleutel", "c.key");
        echo "</th>
                    <th";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "c.value"], "method", false, false, false, 16)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Waarde", "c.value");
        echo "</th>
                    <th";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "c.valueInt"], "method", false, false, false, 17)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Waarde", "c.valueInt");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collector"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collector"], "key", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["collector"], "value", [], "any", false, false, false, 25), 0, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collector"], "valueInt", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
                        <td><a class=\"btn btn-warning\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_collector_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["collector"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"far fa-edit\"></i> Bewerken</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Admin/Collector/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  134 => 30,  125 => 27,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  106 => 22,  102 => 21,  91 => 17,  83 => 16,  75 => 15,  67 => 14,  58 => 8,  50 => 2,  46 => 1,  35 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Collector/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Collector/index.html.twig");
    }
}
