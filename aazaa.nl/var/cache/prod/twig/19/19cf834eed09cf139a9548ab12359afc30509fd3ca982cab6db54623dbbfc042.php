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

/* Base/base.html.twig */
class __TwigTemplate_486f764805f3a28e9a4e3771a4fba337be5cc251eab1a87ac508fa110a6326d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'metaTitle' => [$this, 'block_metaTitle'],
            'description' => [$this, 'block_description'],
            'socialMeta' => [$this, 'block_socialMeta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'submenu' => [$this, 'block_submenu'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 minimum-scale=1.0, maximum-scale=1.0\">
        <meta name=\"author\" content=\"yourgeek.nl\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
        <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
        <meta name=\"mobile-web-app-capable\" content=\"yes\">

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/site.webmanifest"), "html", null, true);
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#b3b565\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Aazaa.org\">
        <meta name=\"application-name\" content=\"Aazaa.org\">
        <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <title>";
        // line 24
        $this->displayBlock('metaTitle', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 25
        $this->displayBlock('description', $context, $blocks);
        echo "\" />

        ";
        // line 27
        $this->displayBlock('socialMeta', $context, $blocks);
        // line 34
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Buda:300|Dosis|Open+Sans\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "            ";
        // line 45
        echo "                ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                        ";
        // line 50
        echo "                        ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "        ";
        // line 54
        echo "
    </head>

    <body style=\"background: url('";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::background"));
        echo "') no-repeat center center fixed;\">
        <nav id=\"TopNav\" class=\"navbar navbar-fixed-top\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::navigation", ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["app"] ?? null), "request", [], "any", false, false, false, 61), "uri", [], "any", false, false, false, 61)]));
        // line 62
        echo "

            ";
        // line 64
        $this->displayBlock('submenu', $context, $blocks);
        // line 65
        echo "        </nav>

        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        <footer>
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::footer"));
        // line 71
        echo "

            ";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "        </footer>
        ";
        // line 75
        $this->loadTemplate("Models/sharePage.html.twig", "Base/base.html.twig", 75)->display($context);
        // line 76
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3-2-1.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\versionControl']->versionControl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/base.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 81
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 82
        echo "    </body>
</html>";
    }

    // line 24
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Aazaa.org";
    }

    // line 25
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_socialMeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            <meta property=\"og:title\" content=\"Aazaa.org\">
            <meta property=\"og:description\" content=\"\">
            <meta property=\"og:image\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-228px-250px.png"), "html", null, true);
        echo "\">
            <meta property=\"og:url\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "schemeAndHttpHost", [], "any", false, false, false, 31) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "requestUri", [], "any", false, false, false, 31)), "html", null, true);
        echo "\">
            <meta name=\"twitter:image:alt\" content=\"Aazaa.org\">
        ";
    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_submenu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 81
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "Base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 81,  256 => 73,  250 => 67,  244 => 64,  238 => 38,  231 => 31,  227 => 30,  223 => 28,  219 => 27,  213 => 25,  206 => 24,  201 => 82,  199 => 81,  195 => 80,  191 => 79,  187 => 78,  183 => 77,  178 => 76,  176 => 75,  173 => 74,  171 => 73,  167 => 71,  165 => 69,  162 => 68,  160 => 67,  156 => 65,  154 => 64,  150 => 62,  148 => 61,  147 => 59,  142 => 57,  137 => 54,  135 => 53,  133 => 52,  131 => 51,  129 => 50,  127 => 49,  125 => 48,  123 => 47,  121 => 46,  119 => 45,  117 => 44,  115 => 43,  113 => 42,  107 => 39,  105 => 38,  101 => 37,  96 => 34,  94 => 27,  89 => 25,  85 => 24,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Base/base.html.twig");
    }
}
