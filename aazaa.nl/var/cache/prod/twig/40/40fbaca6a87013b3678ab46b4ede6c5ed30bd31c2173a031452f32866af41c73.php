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

/* HttplugBundle:style:httplug.css.twig */
class __TwigTemplate_884ecd4f431285f4183d71a8416fc81465bbc1f01f20701fcda1abbf28d9f879 extends \Twig\Template
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
        echo ".httplug-push-right {
    float: right;
}

.httplug-plugin-name {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
}

.httplug-hidden {
    display: none;
}

.httplug-toggle {
    cursor: pointer;
}

.httplug-center {
    text-align: center;
}

/**
 * Toolbar
 */
.httplug-toolbar {
    display: flex;
    justify-content: space-between;
}

.httplug-toolbar>*:not(:last-child) {
    margin-right:5px;
}

.httplug-toolbar .httplug-copy-as-curl {
    flex: 1;
}

.httplug-copy-as-curl {
    font-size: 0; /*hide line return spacings*/
    display: flex;
}

.httplug-copy-as-curl>input {
    padding: .5em .75em;
    border-radius: 2px 0px 0px 2px;
    border: 0;
    line-height: inherit;
    background-color: #eee;
    opacity: 1;
    font-size: 14px;
    flex: 1;
}

.httplug-copy-as-curl>button {
    font-size: 14px;
    border-radius: 0px 2px 2px 0px;
}

/**
 * Message
 */
.httplug-message {
    box-sizing: border-box;
    padding: 5px;
    flex: 1;
    margin: 5px;
    overflow-x: auto;
    white-space: nowrap;
}

.httplug-messages {
    clear: both;
    display: flex;
}

/**
 * Stack
 */
.httplug-stack>.httplug-stack {
    margin-left: 2.5em;
}

/**
 * Stack header
 */
.httplug-stack-header {
    display: flex;
    justify-content: space-between;

    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.httplug-stack-failed {
    color:#B0413E;
}

.httplug-stack-success {
    color: #4F805D;
}

.httplug-stack-header .httplug-stack-header-target {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: white;
    color: black;
    font-size: 0; /*hide line return spacings*/
}

.httplug-scheme-http {
    display: none;
}

.httplug-scheme-https {
    color: green;
}

.httplug-target, .httplug-scheme {
    font-weight: normal;
}

.httplug-target, .httplug-host, .httplug-scheme {
    font-size: 12px;
}

.httplug-duration {
    min-width: 6ch;
    text-align:center;
}

/**
 * HTTP method colors from swagger-ui.
 */
.httplug-method.label {
    color: black;
    width: 9ch;
    text-align: center;
}

.httplug-method-post.label {
    background: #49cc90;
}

.httplug-method-get.label {
    background: #61affe;
}

.httplug-method-put.label {
    background: #fca130;
}

.httplug-method-delete.label {
    background: #f93e3e;
}

.httplug-method-head.label {
    background: #9012fe;
    color: white;
}

.httplug-method-patch.label {
    background: #50e3c2;
}

.httplug-method-options.label {
    background: #0d5aa7;
    color: white;
}

.httplug-method-connect.label {
    background: #ebebeb;
}

.httplug-method-trace.label {
    background: #ebebeb;
}
";
    }

    public function getTemplateName()
    {
        return "HttplugBundle:style:httplug.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HttplugBundle:style:httplug.css.twig", "/home/deb116267/domains/aazaa.org/vendor/php-http/httplug-bundle/src/Resources/views/style/httplug.css.twig");
    }
}
