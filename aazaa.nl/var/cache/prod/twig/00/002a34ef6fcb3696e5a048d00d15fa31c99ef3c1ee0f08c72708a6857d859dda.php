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

/* HttplugBundle:script:httplug.js.twig */
class __TwigTemplate_85c3edac0d75eac0566c48851e67a7ebb520f9a6ce363e5d253cbac007f08b82 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('httplug-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.httplug-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.httplug-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
";
    }

    public function getTemplateName()
    {
        return "HttplugBundle:script:httplug.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HttplugBundle:script:httplug.js.twig", "/home/deb116267/domains/aazaa.org/vendor/php-http/httplug-bundle/src/Resources/views/script/httplug.js.twig");
    }
}
