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

/* Admin/Workshop/locationOverview.html.twig */
class __TwigTemplate_f123be74abbd34f7501bf2c4e6268ca2bb0c8a764298e0ee6c5fc1edf3735f58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 48
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/locationOverview.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Locaties</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12 admin-menu\" >
            <div class=\"col-xs-12\">
                <table class=\"table table-responsive table-striped\">
                    <tr>
                        <th";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.id"], "method", false, false, false, 18)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Id", "l.id");
        echo "</th>
                        <th";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.name"], "method", false, false, false, 19)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Naam", "l.name");
        echo "</th>
                        <th";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.street"], "method", false, false, false, 20)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Straat", "l.street");
        echo "</th>
                        <th";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.housenumber"], "method", false, false, false, 21)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Huisnummer", "l.housenumber");
        echo "</th>
                        <th";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.price"], "method", false, false, false, 22)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Prijs", "l.price");
        echo "</th>
                        <th";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "l.color"], "method", false, false, false, 23)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Kleur  ", "l.color");
        echo "</th>
                        <th>#</th>
                    </tr>

                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "street", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "housenumber", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td style=\"background-color: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "color", [], "any", false, false, false, 34), "html", null, true);
            echo " \"></td>
                            <td><a class=\"btn btn-warning\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_location_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"far fa-edit\"></i> Bewerken</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </table>

                <div class=\"navigation\">
                    ";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Workshop/locationOverview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 41,  169 => 38,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  133 => 28,  129 => 27,  118 => 23,  110 => 22,  102 => 21,  94 => 20,  86 => 19,  78 => 18,  68 => 11,  60 => 5,  56 => 4,  51 => 2,  47 => 1,  36 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Workshop/locationOverview.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/locationOverview.html.twig");
    }
}
