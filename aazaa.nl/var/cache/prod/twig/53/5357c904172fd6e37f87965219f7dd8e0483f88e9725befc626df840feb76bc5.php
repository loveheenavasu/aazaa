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

/* Admin/Video/index.html.twig */
class __TwigTemplate_1799afe99315706335c925a80f0cde17c3d117d640037e94beca058980cae048 extends \Twig\Template
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
        // line 38
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Video/index.html.twig", 38);
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
            <h1>Videochat</h1>
        </div>

        <div class=\"col-xs-12\">
            <table class=\"table table-responsive table-striped\">
                <tr>
                    <th>Datum</th>
                    <th>Naam</th>
                    <th>#</th>
                </tr>

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userWorkshops"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uw"]) {
            // line 17
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["uw"], "paid", [], "any", false, false, false, 17)) {
                // line 18
                echo "                        <tr>
                            <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 19), "startDatetime", [], "any", false, false, false, 19), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 22
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 22), "videoChatSessionId", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "                                    <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_create", ["workshop" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\"><i class=\"fas fa-eye\"></i> Start sessie</a>
                                ";
                } else {
                    // line 25
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_chat_open", ["workshop" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uw"], "workshop", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\"><i class=\"fas fa-eye\"></i> Open sessie</a>
                                ";
                }
                // line 27
                echo "                            </td>

                        </tr>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/Video/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  105 => 31,  99 => 27,  93 => 25,  87 => 23,  85 => 22,  80 => 20,  76 => 19,  73 => 18,  70 => 17,  66 => 16,  50 => 2,  46 => 1,  35 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Video/index.html.twig", "/home/deb116267/domains/aazaa.org/templates/Admin/Video/index.html.twig");
    }
}
