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

/* Admin/index.html.twig */
class __TwigTemplate_8f3e8c2cd1da76d4f412a6996af31a0613bc081ee835cbbe0b32d9107db0d695 extends \Twig\Template
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
        // line 57
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/index.html.twig", 57);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"col-xs-12 col-sm-12 col-md-6\">
       <div class=\"panel panel-default\">
           <div class=\"panel-heading\">
               <strong>10 Nieuwste gebruikers</strong>
           </div>
           <div class=\"panel-body\">
               <table class=\"table table-responsive\">
                   <tr>
                       <th>Id</th>
                       <th>Datum</th>
                       <th>Gebruikersnaam</th>
                       <th>Voornaam</th>
                       <th>Achternaam</th>
                   </tr>
                   ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newUsers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                       <tr>
                           <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                           <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "created", [], "any", false, false, false, 20), "d-m H:i"), "html", null, true);
            echo "</td>
                           <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                           <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                           <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                       </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "               </table>
           </div>
       </div>
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>10 Laatst bekeken video's</strong>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-responsive\">
                    <tr>
                        <th>Datum</th>
                        <th>Title</th>
                        <th>Gebruiker</th>
                    </tr>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastViewed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["watchLog"]) {
            // line 44
            echo "                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["watchLog"], "updated", [], "any", false, false, false, 45), "d-m H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "pageContent", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), 0, 20), "html", null, true);
            echo "...</td>
                            <td>";
            // line 47
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "firstName", [], "any", false, false, false, 47)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "lastName", [], "any", false, false, false, 47)))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "firstName", [], "any", false, false, false, 47), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "lastName", [], "any", false, false, false, 47), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["watchLog"], "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
            }
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['watchLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </table>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  133 => 47,  129 => 46,  125 => 45,  122 => 44,  118 => 43,  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  50 => 2,  46 => 1,  35 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/index.html.twig");
    }
}
