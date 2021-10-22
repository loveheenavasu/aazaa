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

/* Admin/Page/categoryIndex.html.twig */
class __TwigTemplate_d477ea457acca2b6d7b9d3e6269dc4eb93765b41e544578edb8fb0373bcba23e extends \Twig\Template
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
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 104
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Page/categoryIndex.html.twig", 104);
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
            <h1>Categorieën</h1>
        </div>
        <div class=\"col-xs-push-6 col-xs-6\">
            <a class=\"pull-right btn btn-danger\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit");
        echo "\"><i class=\"fa fa-plus\"></i> Nieuw</a>
        </div>

        <div class=\"col-xs-12 admin-menu\" >
            <h2>Menu</h2>
            <div class=\"row\">
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Boven</h3>
                    <ul id=\"Boven\" class=\"sort_these\">
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 21))) {
                // line 22
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 22) == "Boven")) {
                    // line 23
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 28
                echo "                            ";
            }
            // line 29
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </ul>

                    <h3>Hoofdmenu</h3>
                    <ul id=\"Hoofdmenu\" class=\"sort_these\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 35
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 35))) {
                // line 36
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 36) == "Hoofdmenu")) {
                    // line 37
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 42
                echo "                            ";
            }
            // line 43
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </ul>
                </div>
                <div class=\"col-md-6 col-xs-12\">
                    <h3>Pagina Menu</h3>
                    <ul id=\"Pagina_menu\" class=\"sort_these\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 50
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 50))) {
                // line 51
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 51) == "Pagina_menu")) {
                    // line 52
                    echo "                                    <li class=\"ui-state-default\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 52), "html", null, true);
                    echo "\">
                                        <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 53), "html", null, true);
                    echo "
                                        <a class=\"btn btn-warning pull-right\" href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                                    </li>
                                ";
                }
                // line 57
                echo "                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </ul>
                    <h3>Niet in het menu</h3>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 62
            echo "                        ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cat"], "viewPosition", [], "any", false, false, false, 62))) {
                // line 63
                echo "                            <li class=\"ui-state-default\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
                                ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "
                                <a class=\"btn btn-warning pull-right\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_page_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i> Bewerken</a>
                            </li>
                        ";
            }
            // line 68
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 75
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$(function() {
            var index;
            \$( \".sort_these\" ).sortable({
                placeholder: \"ui-state-highlight\",
                start: function (event, ui) {
                    var start_pos = ui.item.index();
                    ui.item.data('start_pos', start_pos);
                },
                change: function (event, ui) {
                    index = ui.placeholder.index();
                },
                stop: function (event, ui) {
                    var sortItem = \$(ui.item);
                    \$.post(Routing.generate('admin_page_category_sort'),{
                        id: sortItem.attr('rel'),
                        position: index,
                        viewPosition: sortItem.parent().attr('id')
                    },
                    function(data,status){
                    });
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Admin/Page/categoryIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 76,  236 => 75,  228 => 69,  222 => 68,  216 => 65,  212 => 64,  207 => 63,  204 => 62,  200 => 61,  196 => 59,  190 => 58,  187 => 57,  181 => 54,  177 => 53,  172 => 52,  169 => 51,  166 => 50,  162 => 49,  155 => 44,  149 => 43,  146 => 42,  140 => 39,  136 => 38,  131 => 37,  128 => 36,  125 => 35,  121 => 34,  115 => 30,  109 => 29,  106 => 28,  100 => 25,  96 => 24,  91 => 23,  88 => 22,  85 => 21,  81 => 20,  69 => 11,  61 => 5,  57 => 4,  52 => 2,  48 => 1,  37 => 104,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Page/categoryIndex.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Page/categoryIndex.html.twig");
    }
}
