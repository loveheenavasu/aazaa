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
class __TwigTemplate_d938d7f66509ae4863308dd4b614e7b71fe132eb9ee2b5f5fc70d43616d949c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Workshop/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Workshop/index.html.twig", 105);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "isSorted", [0 => "w.id"], "method", false, false, false, 14)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "Id", "w.id");
        echo "</th>
                    <th";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "isSorted", [0 => "w.title"], "method", false, false, false, 15)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "Title", "w.title");
        echo "</th>
                    <th";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "isSorted", [0 => "w.type"], "method", false, false, false, 16)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "Type", "w.type");
        echo "</th>
                    <th";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "isSorted", [0 => "w.startDatetime"], "method", false, false, false, 17)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "StartDatum", "w.startDatetime");
        echo "</th>
                    <th";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "isSorted", [0 => "w.endDatetime"], "method", false, false, false, 18)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "EindDatum", "w.endDatetime");
        echo "</th>
                    <th";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "isSorted", [0 => "w.created"], "method", false, false, false, 19)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "Gemaakt op", "w.created");
        echo "</th>
                    <th";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), "isSorted", [0 => "w.updated"], "method", false, false, false, 20)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), "Bewerkt op", "w.updated");
        echo "</th>
                    <th";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), "isSorted", [0 => "w.active"], "method", false, false, false, 21)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), "Online", "w.active");
        echo "</th>
                    <th";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), "isSorted", [0 => "w.seats"], "method", false, false, false, 22)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), "Plaatsen", "w.seats");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 83
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.multidatespicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  328 => 90,  324 => 89,  319 => 88,  309 => 87,  297 => 84,  292 => 83,  282 => 82,  244 => 53,  235 => 47,  230 => 44,  220 => 40,  216 => 39,  212 => 38,  205 => 36,  197 => 35,  193 => 34,  189 => 33,  185 => 32,  181 => 31,  177 => 30,  173 => 29,  169 => 28,  166 => 27,  162 => 26,  151 => 22,  143 => 21,  135 => 20,  127 => 19,  119 => 18,  111 => 17,  103 => 16,  95 => 15,  87 => 14,  78 => 8,  70 => 2,  60 => 1,  37 => 105,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>Workshops / Sessies / Cursussen</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"{{ path('admin_workshop_edit') }}\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th{% if pagination.isSorted('w.id') %} class=\"sorted\"{% endif %} >{{ knp_pagination_sortable(pagination, 'Id', 'w.id') }}</th>
                    <th{% if pagination.isSorted('w.title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'w.title') }}</th>
                    <th{% if pagination.isSorted('w.type') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Type', 'w.type') }}</th>
                    <th{% if pagination.isSorted('w.startDatetime') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'StartDatum', 'w.startDatetime') }}</th>
                    <th{% if pagination.isSorted('w.endDatetime') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'EindDatum', 'w.endDatetime') }}</th>
                    <th{% if pagination.isSorted('w.created') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Gemaakt op', 'w.created') }}</th>
                    <th{% if pagination.isSorted('w.updated') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Bewerkt op', 'w.updated') }}</th>
                    <th{% if pagination.isSorted('w.active') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Online', 'w.active') }}</th>
                    <th{% if pagination.isSorted('w.seats') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Plaatsen', 'w.seats') }}</th>
                    <th>#</th>
                </tr>

                {% for workshop in pagination %}
                    <tr>
                        <td>{{ workshop.id }}</td>
                        <td>{{ workshop.title }}</td>
                        <td>{{ workshop.type }}</td>
                        <td>{{ workshop.startDatetime | date('d-m-Y H:i:s') }}</td>
                        <td>{{ workshop.endDatetime | date('d-m-Y H:i:s') }}</td>
                        <td>{{ workshop.created | date('d-m-Y H:i:s') }}</td>
                        <td>{{ workshop.updated | date('d-m-Y H:i:s') }}</td>
                        <td>{% if workshop.active %}Ja{% else %}Nee{% endif %}</td>
                        <td>{{ workshop.seatsAvailable }} / {{ workshop.seats }}</td>
                        <td>
                            <a class=\"btn btn-warning\" href=\"{{ path('admin_workshop_edit', { 'workshopId': workshop.id }) }}\"><i class=\"far fa-edit\"></i> Bewerken</a>
                            <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#clone\" onclick=\"copy('{{ workshop.id }}')\" ><i class=\"far fa-clone\"></i> kopiëren</button>
                            <a onclick=\"return confirm('Weet je het zeker, dat deze verwijderd mag worden ??')\" class=\"btn btn-danger\" href=\"{{ path('admin_workshop_remove', { 'id': workshop.id }) }}\"><i class=\"far fa-trash-alt\"></i> Verwijderen </a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>

        <div id=\"clone\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <form action=\"{{ path('admin_workshop_clone') }}\" method=\"post\">
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
{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('css/jquery-ui.multidatespicker.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\">
{% endblock %}

{% block javascript_footer %}
    <script src=\"{{ asset('js/jquery-datepicker.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-datepicker-nl.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.multidatespicker.js') }}\"></script>
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
{% endblock %}

{% extends 'Admin/base.html.twig' %}

", "Admin/Workshop/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Workshop/index.html.twig");
    }
}
