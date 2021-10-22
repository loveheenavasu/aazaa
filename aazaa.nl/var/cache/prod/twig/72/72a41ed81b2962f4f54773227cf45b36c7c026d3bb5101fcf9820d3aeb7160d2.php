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

/* Admin/Workshop/index.html.twig */
class __TwigTemplate_245619b76e6138efff8fcb540e37e948df7a0b08a4b273323b6716cc13ea9448 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 105
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/index.html.twig", 105);
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
            <h1>Workshops / Sessies / Cursussen</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.id"], "method", false, false, false, 14)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Id", "w.id");
        echo "</th>
                    <th";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.title"], "method", false, false, false, 15)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Title", "w.title");
        echo "</th>
                    <th";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.type"], "method", false, false, false, 16)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Type", "w.type");
        echo "</th>
                    <th";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.startDatetime"], "method", false, false, false, 17)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "StartDatum", "w.startDatetime");
        echo "</th>
                    <th";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.endDatetime"], "method", false, false, false, 18)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "EindDatum", "w.endDatetime");
        echo "</th>
                    <th";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.created"], "method", false, false, false, 19)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Gemaakt op", "w.created");
        echo "</th>
                    <th";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.updated"], "method", false, false, false, 20)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Bewerkt op", "w.updated");
        echo "</th>
                    <th";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.active"], "method", false, false, false, 21)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Online", "w.active");
        echo "</th>
                    <th";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "w.seats"], "method", false, false, false, 22)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Plaatsen", "w.seats");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "type", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "startDatetime", [], "any", false, false, false, 31), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "endDatetime", [], "any", false, false, false, 32), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "created", [], "any", false, false, false, 33), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "updated", [], "any", false, false, false, 34), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["workshop"], "active", [], "any", false, false, false, 35)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "seatsAvailable", [], "any", false, false, false, 36), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "seats", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-warning\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_edit", ["workshopId" => twig_get_attribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                            <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#clone\" onclick=\"copy('";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "')\" ><i class=\"far fa-clone\"></i> kopiëren</button>
                            <a onclick=\"return confirm('Weet je het zeker, dat deze verwijderd mag worden ??')\" class=\"btn btn-danger\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i> Verwijderen </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
            </div>
        </div>

        <div id=\"clone\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <form action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_workshop_clone");
        echo "\" method=\"post\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Kopieren</h4>
                        </div>
                        <div class=\"modal-body\" style=\"min-height: 350px;\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group col-xs-12\">
                                    <input type=\"hidden\" id=\"workshopId\" name=\"workshopId\" value=\"\">
                                    <input type=\"hidden\" id=\"dates\" name=\"dates\" value=\"\">
                                    <label for=\"dates\">Selecteer startdatums</label>
                                    <div id=\"datepicker\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Sluiten</button>
                            <button type=\"submit\" class=\"btn btn-success\">kopiëren </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.multidatespicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
";
    }

    // line 87
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-datepicker-nl.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.multidatespicker.js"), "html", null, true);
        echo "\"></script>
    <script>
        function copy(id){
            \$('#dates').val('');
            \$('#workshopId').val(id);

            let datepicker = \$('#datepicker');
            datepicker.multiDatesPicker({
                altField: '#dates',
            });

        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "Admin/Workshop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 90,  282 => 89,  277 => 88,  273 => 87,  267 => 84,  262 => 83,  258 => 82,  226 => 53,  217 => 47,  212 => 44,  202 => 40,  198 => 39,  194 => 38,  187 => 36,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  148 => 27,  144 => 26,  133 => 22,  125 => 21,  117 => 20,  109 => 19,  101 => 18,  93 => 17,  85 => 16,  77 => 15,  69 => 14,  60 => 8,  52 => 2,  48 => 1,  37 => 105,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Workshop/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/index.html.twig");
    }
}
