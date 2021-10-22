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

/* Admin/Page/pageIndex.html.twig */
class __TwigTemplate_47ea44c8420446fa082a627a5d0a06f1ca5f1feab243bbcc26ea9f0071dbaeb0 extends \Twig\Template
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
        // line 74
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/pageIndex.html.twig", 74);
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
            <h1>Pagina's</h1>
        </div>

        <div class=\"col-xs-6\">
            <h4>Filteren</h4>
            <form method=\"get\" class=\"form-inline\">
                <div class=\"form-group\">
                    <label for=\"cat\">Categorie:</label>
                    <select title=\"cat\" class=\"form-control\" name=\"categorie\">
                        <option value=\"null\">Alles</option>
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorylist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 16
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "get", [0 => "categorie"], "method", false, false, false, 16) == twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["op"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </select>
                </div><br>
                ";
        // line 21
        echo "                ";
        // line 22
        echo "                    ";
        // line 23
        echo "                    ";
        // line 24
        echo "                        ";
        // line 25
        echo "                            ";
        // line 26
        echo "                        ";
        // line 27
        echo "                    ";
        // line 28
        echo "                ";
        // line 29
        echo "                <button type=\"submit\" class=\"btn btn-default\">Filteren</button>
                <hr>
            </form>
        </div>
        <div class=\"col-xs-6\">
            <a class=\"pull-right btn btn-success\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuwe Template pagina</a>
            ";
        // line 36
        echo "        </div>


        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.id"], "method", false, false, false, 42)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Id", "p.id");
        echo "</th>
                    <th";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.title"], "method", false, false, false, 43)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Title", "p.title");
        echo "</th>
                    <th";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "pc.name"], "method", false, false, false, 44)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Categorie", "pc.name");
        echo "</th>
                    <th";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.created"], "method", false, false, false, 45)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Gemaakt op", "p.created");
        echo "</th>
                    <th";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.updated"], "method", false, false, false, 46)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Bewerkt op", "p.updated");
        echo "</th>
                    <th";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.active"], "method", false, false, false, 47)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Online", "p.active");
        echo "</th>
                    <th";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "p.paid"], "method", false, false, false, 48)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Betaald", "p.paid");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "                    <tr>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["page"], "category", [], "any", false, false, false, 56)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "category", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "created", [], "any", false, false, false, 57), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "updated", [], "any", false, false, false, 58), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 59)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td>";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["page"], "paid", [], "any", false, false, false, 60)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td><a class=\"btn btn-warning\" href=\"";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["page"], "template", [], "any", false, false, false, 61) == "content")) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit_content", ["pageContentId" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_edit", ["pageContentId" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            }
            echo "\"><i class=\"far fa-edit\"></i> Bewerken</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Admin/Page/pageIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 67,  240 => 64,  227 => 61,  219 => 60,  211 => 59,  207 => 58,  203 => 57,  197 => 56,  193 => 55,  189 => 54,  186 => 53,  182 => 52,  171 => 48,  163 => 47,  155 => 46,  147 => 45,  139 => 44,  131 => 43,  123 => 42,  115 => 36,  111 => 34,  104 => 29,  102 => 28,  100 => 27,  98 => 26,  96 => 25,  94 => 24,  92 => 23,  90 => 22,  88 => 21,  84 => 18,  69 => 16,  65 => 15,  50 => 2,  46 => 1,  35 => 74,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/pageIndex.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/pageIndex.html.twig");
    }
}
