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
class __TwigTemplate_fe53042452a1553dbdc1cff6e4d6437bb28439bbe6353ffb500cf9d2f946b03d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base/base.html.twig"));

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
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "uri", [], "any", false, false, false, 61)]));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaTitle"));

        echo "Aazaa.org";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_socialMeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "socialMeta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "socialMeta"));

        // line 28
        echo "            <meta property=\"og:title\" content=\"Aazaa.org\">
            <meta property=\"og:description\" content=\"\">
            <meta property=\"og:image\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-228px-250px.png"), "html", null, true);
        echo "\">
            <meta property=\"og:url\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "schemeAndHttpHost", [], "any", false, false, false, 31) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "requestUri", [], "any", false, false, false, 31)), "html", null, true);
        echo "\">
            <meta name=\"twitter:image:alt\" content=\"Aazaa.org\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_submenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submenu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  358 => 81,  340 => 73,  322 => 67,  304 => 64,  286 => 38,  273 => 31,  269 => 30,  265 => 28,  255 => 27,  237 => 25,  218 => 24,  207 => 82,  205 => 81,  201 => 80,  197 => 79,  193 => 78,  189 => 77,  184 => 76,  182 => 75,  179 => 74,  177 => 73,  173 => 71,  171 => 69,  168 => 68,  166 => 67,  162 => 65,  160 => 64,  156 => 62,  154 => 61,  153 => 59,  148 => 57,  143 => 54,  141 => 53,  139 => 52,  137 => 51,  135 => 50,  133 => 49,  131 => 48,  129 => 47,  127 => 46,  125 => 45,  123 => 44,  121 => 43,  119 => 42,  113 => 39,  111 => 38,  107 => 37,  102 => 34,  100 => 27,  95 => 25,  91 => 24,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('images/favicons/apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('images/favicons/favicon-32x32.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('images/favicons/favicon-16x16.png') }}\">
        <link rel=\"manifest\" href=\"{{ asset('images/favicons/site.webmanifest') }}\">
        <link rel=\"mask-icon\" href=\"{{ asset('images/favicons/safari-pinned-tab.svg') }}\" color=\"#b3b565\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Aazaa.org\">
        <meta name=\"application-name\" content=\"Aazaa.org\">
        <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <title>{% block metaTitle %}Aazaa.org{% endblock %}</title>
        <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />

        {% block socialMeta %}
            <meta property=\"og:title\" content=\"Aazaa.org\">
            <meta property=\"og:description\" content=\"\">
            <meta property=\"og:image\" content=\"{{ asset('images/logo/logo-228px-250px.png') }}\">
            <meta property=\"og:url\" content=\"{{ app.request.schemeAndHttpHost ~ app.request.requestUri }}\">
            <meta name=\"twitter:image:alt\" content=\"Aazaa.org\">
        {% endblock %}

        <link href=\"https://fonts.googleapis.com/css?family=Buda:300|Dosis|Open+Sans\" rel=\"stylesheet\">
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/bootstrap.css') | versionControl }}\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
        <link href=\"{{ asset('css/style.css') | versionControl }}\" rel=\"stylesheet\">

        {#<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/cookiebar.css') }}\" />#}
        {#<script src=\"{{ asset('js/cookiebar.js') }}\"></script>#}
        {#<script>#}
            {#window.addEventListener(\"load\", function(){#}
                {#window.cookieconsent.initialise({#}
                    {#\"showLink\": false,#}
                    {#\"theme\": \"classic\",#}
                    {#\"content\": {#}
                        {#\"message\": \"Deze site gebruikt alleen maar functionele cookies\",#}
                        {#\"dismiss\": \"OK\"#}
                    {#}#}
                {#})});#}
        {#</script>#}

    </head>

    <body style=\"background: url('{{ render(controller('App\\\\Controller\\\\DefaultController::background')) }}') no-repeat center center fixed;\">
        <nav id=\"TopNav\" class=\"navbar navbar-fixed-top\">
            {{ render(controller(
                'App\\\\Controller\\\\DefaultController::navigation',
                {'route': app.request.uri }
            )) }}

            {% block submenu %}{% endblock %}
        </nav>

        {% block content %}{% endblock %}
        <footer>
            {{  render(controller(
                'App\\\\Controller\\\\DefaultController::footer'
            )) }}

            {% block footer %}{% endblock %}
        </footer>
        {% include 'Models/sharePage.html.twig' %}
        <script src=\"{{ asset('js/jquery-3-2-1.min.js') | versionControl }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') | versionControl }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        <script src=\"{{ asset('js/bootstrap.js') | versionControl }}\"></script>
        <script src=\"{{ asset('js/base.js') | versionControl }}\"></script>
        {% block javascript_footer %}{% endblock %}
    </body>
</html>", "Base/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Base/base.html.twig");
    }
}
