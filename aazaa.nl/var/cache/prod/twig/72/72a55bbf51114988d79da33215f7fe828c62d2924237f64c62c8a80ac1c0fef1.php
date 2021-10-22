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

/* Admin/User/index.html.twig */
class __TwigTemplate_398d5a0c306ee21993345cdd72c82950ffc18b4dff5eee4fde8cdf1c5f54f19e extends \Twig\Template
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
        // line 47
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/User/index.html.twig", 47);
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
            <h1>Gebruikers</h1>
        </div>
        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.id"], "method", false, false, false, 10)) {
            echo " class=\"sorted\"";
        }
        echo " >";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Id", "u.id");
        echo "</th>
                    <th";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.email"], "method", false, false, false, 11)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "E-mail", "u.email");
        echo "</th>
                    <th";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.firstname"], "method", false, false, false, 12)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Voornaam", "u.firstname");
        echo "</th>
                    <th";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.lastname"], "method", false, false, false, 13)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Achternaam", "u.lastname");
        echo "</th>
                    <th";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.subscriptionActive"], "method", false, false, false, 14)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "lidmaatschap", "u.subscriptionActive");
        echo "</th>
                    <th";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "isSorted", [0 => "u.subscriptionActiveTillDate"], "method", false, false, false, 15)) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Geldig tot", "u.subscriptionActiveTillDate");
        echo "</th>
                    <th>#</th>
                </tr>

                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActive", [], "any", false, false, false, 25)) {
                echo "Ja";
            } else {
                echo "Nee";
            }
            echo "</td>
                        <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActiveTillDate", [], "any", false, false, false, 26)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "subscriptionActiveTillDate", [], "any", false, false, false, 26), "d-m-Y H:i:s"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>
                            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                <a class=\"btn btn-danger\" onclick='return confirm(\"Weet je het zeker?\")' href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_disable", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><i class=\"fas fa-trash-alt\"></i> Uitschakelen</a>
                            ";
            } else {
                // line 31
                echo "                                <a class=\"btn btn-success\" onclick='return confirm(\"Weet je het zeker?\")' href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_enable", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\"><i class=\"fas fa-check\"></i> Inschakelen</a>
                            ";
            }
            // line 33
            echo "                            <a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i> Bekijken</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </table>

            <div class=\"navigation\">
                ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Admin/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 40,  176 => 37,  165 => 33,  159 => 31,  153 => 29,  151 => 28,  142 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  115 => 20,  111 => 19,  100 => 15,  92 => 14,  84 => 13,  76 => 12,  68 => 11,  60 => 10,  50 => 2,  46 => 1,  35 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/User/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/User/index.html.twig");
    }
}
