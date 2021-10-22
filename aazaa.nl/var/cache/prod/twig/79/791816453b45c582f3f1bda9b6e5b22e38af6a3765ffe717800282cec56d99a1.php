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

/* MobileDetectBundle:Collector:device.html.twig */
class __TwigTemplate_12097faf782b179bb042f66e277539f31b96d35fdea2261fe93c82f99966bb05 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "MobileDetectBundle:Collector:device.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 6
        echo "    ";
        if ((($context["profiler_markup_version"] ?? null) > 1)) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: ";
            // line 12
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currentView", [], "any", false, false, false, 12)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start(function () { return ''; });
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "views", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 22
                echo "                ";
                $context["viewLink"] = "";
                // line 23
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["viewData"], "isCurrent", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                    ";
                    $context["viewLink"] = "<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>";
                    // line 25
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["viewData"], "enabled", [], "any", false, false, false, 25) == false)) {
                    // line 26
                    echo "                    ";
                    $context["viewLink"] = "External";
                    // line 27
                    echo "                ";
                } else {
                    // line 28
                    echo "                    ";
                    $context["viewLink"] = (("<span><a href=\"" . twig_get_attribute($this->env, $this->source, $context["viewData"], "link", [], "any", false, false, false, 28)) . "\">Use this view</a></span>");
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["viewData"], "label", [], "any", false, false, false, 31), "html", null, true);
                echo "</b>
                    ";
                // line 32
                echo ($context["viewLink"] ?? null);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            // line 38
            echo "        ";
            ob_start(function () { return ''; });
            // line 39
            echo "            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: ";
            // line 42
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currentView", [], "any", false, false, false, 42)), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "        ";
            ob_start(function () { return ''; });
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "views", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 59
                echo "                        ";
                $context["viewLink"] = "";
                // line 60
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["viewData"], "isCurrent", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                            ";
                    $context["viewLink"] = "<em>current</em>";
                    // line 62
                    echo "                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["viewData"], "enabled", [], "any", false, false, false, 62) == false)) {
                    // line 63
                    echo "                            ";
                    $context["viewLink"] = "External";
                    // line 64
                    echo "                        ";
                } else {
                    // line 65
                    echo "                            ";
                    $context["viewLink"] = (("<a href=\"" . twig_get_attribute($this->env, $this->source, $context["viewData"], "link", [], "any", false, false, false, 65)) . "\">Use this view</a>");
                    // line 66
                    echo "                        ";
                }
                // line 67
                echo "                        <tr>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["viewData"], "label", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo ($context["viewLink"] ?? null);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    ";
        }
        // line 98
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "MobileDetectBundle:Collector:device.html.twig", 98)->display(twig_array_merge($context, ["link" => false]));
    }

    public function getTemplateName()
    {
        return "MobileDetectBundle:Collector:device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 98,  216 => 76,  210 => 72,  201 => 69,  197 => 68,  194 => 67,  191 => 66,  188 => 65,  185 => 64,  182 => 63,  179 => 62,  176 => 61,  173 => 60,  170 => 59,  166 => 58,  152 => 46,  149 => 45,  143 => 42,  138 => 39,  135 => 38,  133 => 37,  130 => 36,  127 => 35,  118 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  83 => 21,  75 => 15,  72 => 14,  67 => 12,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MobileDetectBundle:Collector:device.html.twig", "/home/deb116267/domains/aazaa.org/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views/Collector/device.html.twig");
    }
}
