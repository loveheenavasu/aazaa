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

/* Email/base.html.twig */
class __TwigTemplate_fe4489ff5d42c01afb1c63fed88544054aca95229de7f7504d51a2cc88ef7e40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subject' => [$this, 'block_subject'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Email/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Email/base.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
        <meta content=\"width=450, target-densitydpi=device-dpi\" name=\"viewport\">
        <style type=\"text/css\">
            @media only screen and (max-width: 675px) {
                table[class=w0], td[class=w0] { width: 0 !important; }
                table[class=w10], td[class=w10], img[class=w10] { width:10px !important; }
                table[class=w15], td[class=w15], img[class=w15] { width:5px !important; }
                table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }
                table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }
                table[class=w125], td[class=w125], img[class=w125] { width:80px !important; }
                table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }
                table[class=w140], td[class=w140], img[class=w140] { width:90px !important; }
                table[class=w160], td[class=w160], img[class=w160] { width:180px !important; }
                table[class=w170], td[class=w170], img[class=w170] { width:100px !important; }
                table[class=w180], td[class=w180], img[class=w180] { width:80px !important; }
                table[class=w195], td[class=w195], img[class=w195] { width:80px !important; }
                table[class=w220], td[class=w220], img[class=w220] { width:80px !important; }
                table[class=w240], td[class=w240], img[class=w240] { width:180px !important; }
                table[class=w255], td[class=w255], img[class=w255] { width:185px !important; }
                table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
                table[class=w280], td[class=w280], img[class=w280] { width:135px !important; }
                table[class=w300], td[class=w300], img[class=w300] { width:140px !important; }
                table[class=w325], td[class=w325], img[class=w325] { width:95px !important; }
                table[class=w360], td[class=w360], img[class=w360] { width:140px !important; }
                table[class=w410], td[class=w410], img[class=w410] { width:180px !important; }
                table[class=w470], td[class=w470], img[class=w470] { width:200px !important; }
                table[class=w580], td[class=w580], img[class=w580] { width:350px !important; }
                table[class=w640], td[class=w640], img[class=w640] { width:450px !important; }
                table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }
                table[class=h0], td[class=h0] { height: 0 !important; }
                p[class=footer-content-left] { text-align: center !important; }
                #headline p { font-size: 30px !important; }
                .article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; }
                .header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;}
                img { height: auto; line-height: 100%;}
            }
            #outlook a { padding: 0; }
            body { width: 100% !important; }
            .ReadMsgBody { width: 100%; }
            .ExternalClass { width: 100%; display:block !important; }
            body { background-color: #ececec; margin: 0; padding: 0; }
            img { outline: none; text-decoration: none; display: block;}
            br, strong br, b br, em br, i br { line-height:100%; }
            h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
            h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active { color: green !important; }
            h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: green !important; }

            table td, table tr { border-collapse: collapse; }
            .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
                color: green; text-decoration: none !important; border-bottom: none !important; background: none !important;
            }
            code {
                white-space: normal;
                word-break: break-all;
            }
            #background-table { background-color: #ececec; }
            #top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #223546; color: #FFFFFF; }
            #top-bar a { font-weight: bold; color: #FFFFFF; text-decoration: none;}
            #footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
            body, td { font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
            .header-content { font-size: 12px; color: #FFFFFF; }
            .header-content a { font-weight: bold; color: #FFFFFF; text-decoration: none; }
            #headline p { color: #223546; font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
            #headline p a { color: #23527c; text-decoration: none; }
            .article-title { font-size: 18px; line-height:24px; color: #223546; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .article-title a { color: #23527c; text-decoration: none; }
            .article-title.with-meta {margin-bottom: 0;}
            .article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
            .article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .article-content a { color: #23527c; font-weight:bold; text-decoration:none; }
            .article-content img { max-width: 100% }
            .article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
            .article-content li { font-size: 13px; line-height: 18px; color: #444444; }
            .article-content li a { color: #23CDCB; text-decoration:underline; }
            .article-content p {margin-bottom: 15px;}
            .footer-content-left { font-size: 12px; line-height: 15px; color: #FFFFFF; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-left a { color: #23527c; font-weight: bold; text-decoration: none; }
            .footer-content-right { font-size: 11px; line-height: 16px; color: #FFFFFF; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-right a { color: #23527c; font-weight: bold; text-decoration: none; }
            #footer { background-color: #223546; color: #FFFFFF; }
            #footer a { color: #23527c; text-decoration: none; font-weight: bold; }
            #permission-reminder { white-space: normal; }
            #street-address { color: #FFFFFF; white-space: normal; }
            #facebox{position:absolute;top:0;left:0;z-index:100;text-align:left;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#facebox .popup{position:relative;border:7px solid rgba(0,0,0,0.445);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;padding:0}#facebox .content{display:block;width:470px;overflow:show;padding:0;background:#fff;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#facebox .content>p:first-child{margin-top:0}#facebox .content>p:last-child{margin-bottom:0}#facebox .loading{text-align:center}#facebox .image{text-align:center}#facebox img{border:0;margin:0}#facebox_overlay{position:fixed;top:0;left:0;height:100%;width:100%}.facebox_hide{z-index:-100}.facebox_overlayBG{background-color:#000;z-index:99}#fblike{margin:0;padding:0;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;position:relative;background-color:#fff;display:none}#fblike h1,h1.fb{background-color:#6d84b4!important;font-size:14px!important;color:#fff!important;padding:5px 10px!important;margin:0!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;letter-spacing:normal!important}.fblikeContent{border-bottom:1px solid #ccc;padding:10px;font-size:12px;position:relative;height:120px!IE;min-height:80px!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;overflow:hidden;z-index:1}.fblikeContent span{height:auto!important}h2.fbCustomURL{background-color:#f2f2f2!important;border-bottom:1px solid #ccc!important;color:#999!important;font-size:12px!important;font-weight:normal!important;margin:0 0 10px!important;padding:5px 10px!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;font-style:normal!important;line-height:1.2!important}.fblikeContent iframe{min-height:80px!important;position:relative!important}.fblikeContent p{margin-top:0!important;margin-bottom:15px;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#closeBox{display:none!important;background-color:#f2f2f2;height:41px;position:relative;width:420px;padding:0;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;z-index:2}#closeBox a{text-decoration:none;color:#fff!important;font-size:11px;font-weight:bold;background-color:#5d76aa;border:1px solid #2a437e;-webkit-box-shadow:inset 0 1px 0 #8a9cc2;padding:3px 6px;position:absolute;right:10px;top:10px}#closeBox a:hover{color:#fff!important}
        </style><!--[if gte mso 9]>
        <style _tmplitem=\"225\" >
            .article-content ol, .article-content ul {
                margin: 0 0 0 24px !important;
                padding: 0 !important;
                list-style-position: inside !important;
            }
        </style>
        <![endif]-->
    </head>
    <body style=\"width:100% !important;background-color:#ececec;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:Helvetica Neue, Arial, Helvetica, sans-serif;\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"background-table\" style=\"background-color:#ececec;\" width=\"100%\">
            <tbody>
                <tr style=\"border-collapse:collapse;\">
                    <td align=\"center\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w640\" style=\"margin-top:0;margin-bottom:0;margin-right:10px;margin-left:10px;\" width=\"675\">
                            <tbody>
                                <tr style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" height=\"30\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\"></td>
                                </tr>

                                <tr style=\"border-collapse:collapse;\">
                                    <td align=\"center\" class=\"w640\" id=\"header\" style=\"background-color:#ffffff; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif;\" width=\"675\">
                                        <a href=\"https://www.aazaa.org\" style=\"color:#fff;text-decoration:none;font-size:30px;\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\mailEmbedImages']->embed($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-46px-50px.png")), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 113, $this->source); })())), "html", null, true);
        echo "\" align=\"right\" style=\"margin: 15px\" ></a>
                                    </td>
                                </tr>
                                <tr style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" height=\"30\" style=\"background-color: #FFFFFF; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\"></td>
                                </tr>
                                <tr id=\"simple-content-row\" style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" style=\"background-color: #FFFFFF; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\">
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w640\" width=\"675\">
                                            <tbody>
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td class=\"w30\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"30\"></td>
                                                    <td class=\"w580\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"580\">
                                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w580\" width=\"580\">
                                                            <tbody>
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td class=\"w580\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"580\">
                                                                        <p id=\"subject\" class=\"article-title\" style=\"color: #223546; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; line-height: 24px; margin-bottom: 18px; margin-top: 0px; text-align: left\">
                                                                            ";
        // line 131
        $this->displayBlock('subject', $context, $blocks);
        // line 132
        echo "                                                                        </p>
                                                                        <div id=\"content\" class=\"article-content\" style=\"color: #444444; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; font-size: 13px; line-height: 18px; margin-bottom: 18px; margin-top: 0px; text-align: left\">
                                                                            ";
        // line 134
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td class=\"w30\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"30\">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr style=\"border-collapse:collapse;\">
                    <td align=\"center\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif;padding-top:20px;\">
                        ";
        // line 155
        if ((((isset($context["unsubscribe"]) || array_key_exists("unsubscribe", $context)) && ((isset($context["unsubscribe"]) || array_key_exists("unsubscribe", $context) ? $context["unsubscribe"] : (function () { throw new RuntimeError('Variable "unsubscribe" does not exist.', 155, $this->source); })()) == true)) && (isset($context["user"]) || array_key_exists("user", $context)))) {
            // line 156
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("unsubscribe_mailing", ["userMail" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "email", [], "any", false, false, false, 156), "userToken" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "tokenLogin", [], "any", false, false, false, 156)])), "html", null, true);
            echo "\">uitschrijven</a>
                        ";
        }
        // line 158
        echo "                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
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

    public function getTemplateName()
    {
        return "Email/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 134,  255 => 131,  237 => 3,  222 => 158,  216 => 156,  214 => 155,  192 => 135,  190 => 134,  186 => 132,  184 => 131,  163 => 113,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
        <meta content=\"width=450, target-densitydpi=device-dpi\" name=\"viewport\">
        <style type=\"text/css\">
            @media only screen and (max-width: 675px) {
                table[class=w0], td[class=w0] { width: 0 !important; }
                table[class=w10], td[class=w10], img[class=w10] { width:10px !important; }
                table[class=w15], td[class=w15], img[class=w15] { width:5px !important; }
                table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }
                table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }
                table[class=w125], td[class=w125], img[class=w125] { width:80px !important; }
                table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }
                table[class=w140], td[class=w140], img[class=w140] { width:90px !important; }
                table[class=w160], td[class=w160], img[class=w160] { width:180px !important; }
                table[class=w170], td[class=w170], img[class=w170] { width:100px !important; }
                table[class=w180], td[class=w180], img[class=w180] { width:80px !important; }
                table[class=w195], td[class=w195], img[class=w195] { width:80px !important; }
                table[class=w220], td[class=w220], img[class=w220] { width:80px !important; }
                table[class=w240], td[class=w240], img[class=w240] { width:180px !important; }
                table[class=w255], td[class=w255], img[class=w255] { width:185px !important; }
                table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
                table[class=w280], td[class=w280], img[class=w280] { width:135px !important; }
                table[class=w300], td[class=w300], img[class=w300] { width:140px !important; }
                table[class=w325], td[class=w325], img[class=w325] { width:95px !important; }
                table[class=w360], td[class=w360], img[class=w360] { width:140px !important; }
                table[class=w410], td[class=w410], img[class=w410] { width:180px !important; }
                table[class=w470], td[class=w470], img[class=w470] { width:200px !important; }
                table[class=w580], td[class=w580], img[class=w580] { width:350px !important; }
                table[class=w640], td[class=w640], img[class=w640] { width:450px !important; }
                table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }
                table[class=h0], td[class=h0] { height: 0 !important; }
                p[class=footer-content-left] { text-align: center !important; }
                #headline p { font-size: 30px !important; }
                .article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; }
                .header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;}
                img { height: auto; line-height: 100%;}
            }
            #outlook a { padding: 0; }
            body { width: 100% !important; }
            .ReadMsgBody { width: 100%; }
            .ExternalClass { width: 100%; display:block !important; }
            body { background-color: #ececec; margin: 0; padding: 0; }
            img { outline: none; text-decoration: none; display: block;}
            br, strong br, b br, em br, i br { line-height:100%; }
            h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
            h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active { color: green !important; }
            h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: green !important; }

            table td, table tr { border-collapse: collapse; }
            .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
                color: green; text-decoration: none !important; border-bottom: none !important; background: none !important;
            }
            code {
                white-space: normal;
                word-break: break-all;
            }
            #background-table { background-color: #ececec; }
            #top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #223546; color: #FFFFFF; }
            #top-bar a { font-weight: bold; color: #FFFFFF; text-decoration: none;}
            #footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
            body, td { font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
            .header-content { font-size: 12px; color: #FFFFFF; }
            .header-content a { font-weight: bold; color: #FFFFFF; text-decoration: none; }
            #headline p { color: #223546; font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
            #headline p a { color: #23527c; text-decoration: none; }
            .article-title { font-size: 18px; line-height:24px; color: #223546; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .article-title a { color: #23527c; text-decoration: none; }
            .article-title.with-meta {margin-bottom: 0;}
            .article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
            .article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; }
            .article-content a { color: #23527c; font-weight:bold; text-decoration:none; }
            .article-content img { max-width: 100% }
            .article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
            .article-content li { font-size: 13px; line-height: 18px; color: #444444; }
            .article-content li a { color: #23CDCB; text-decoration:underline; }
            .article-content p {margin-bottom: 15px;}
            .footer-content-left { font-size: 12px; line-height: 15px; color: #FFFFFF; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-left a { color: #23527c; font-weight: bold; text-decoration: none; }
            .footer-content-right { font-size: 11px; line-height: 16px; color: #FFFFFF; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-right a { color: #23527c; font-weight: bold; text-decoration: none; }
            #footer { background-color: #223546; color: #FFFFFF; }
            #footer a { color: #23527c; text-decoration: none; font-weight: bold; }
            #permission-reminder { white-space: normal; }
            #street-address { color: #FFFFFF; white-space: normal; }
            #facebox{position:absolute;top:0;left:0;z-index:100;text-align:left;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#facebox .popup{position:relative;border:7px solid rgba(0,0,0,0.445);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;padding:0}#facebox .content{display:block;width:470px;overflow:show;padding:0;background:#fff;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#facebox .content>p:first-child{margin-top:0}#facebox .content>p:last-child{margin-bottom:0}#facebox .loading{text-align:center}#facebox .image{text-align:center}#facebox img{border:0;margin:0}#facebox_overlay{position:fixed;top:0;left:0;height:100%;width:100%}.facebox_hide{z-index:-100}.facebox_overlayBG{background-color:#000;z-index:99}#fblike{margin:0;padding:0;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;position:relative;background-color:#fff;display:none}#fblike h1,h1.fb{background-color:#6d84b4!important;font-size:14px!important;color:#fff!important;padding:5px 10px!important;margin:0!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;letter-spacing:normal!important}.fblikeContent{border-bottom:1px solid #ccc;padding:10px;font-size:12px;position:relative;height:120px!IE;min-height:80px!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;overflow:hidden;z-index:1}.fblikeContent span{height:auto!important}h2.fbCustomURL{background-color:#f2f2f2!important;border-bottom:1px solid #ccc!important;color:#999!important;font-size:12px!important;font-weight:normal!important;margin:0 0 10px!important;padding:5px 10px!important;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;font-style:normal!important;line-height:1.2!important}.fblikeContent iframe{min-height:80px!important;position:relative!important}.fblikeContent p{margin-top:0!important;margin-bottom:15px;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important}#closeBox{display:none!important;background-color:#f2f2f2;height:41px;position:relative;width:420px;padding:0;font-family:\"lucida grande\",tahoma,verdana,arial,sans-serif!important;z-index:2}#closeBox a{text-decoration:none;color:#fff!important;font-size:11px;font-weight:bold;background-color:#5d76aa;border:1px solid #2a437e;-webkit-box-shadow:inset 0 1px 0 #8a9cc2;padding:3px 6px;position:absolute;right:10px;top:10px}#closeBox a:hover{color:#fff!important}
        </style><!--[if gte mso 9]>
        <style _tmplitem=\"225\" >
            .article-content ol, .article-content ul {
                margin: 0 0 0 24px !important;
                padding: 0 !important;
                list-style-position: inside !important;
            }
        </style>
        <![endif]-->
    </head>
    <body style=\"width:100% !important;background-color:#ececec;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:Helvetica Neue, Arial, Helvetica, sans-serif;\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"background-table\" style=\"background-color:#ececec;\" width=\"100%\">
            <tbody>
                <tr style=\"border-collapse:collapse;\">
                    <td align=\"center\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w640\" style=\"margin-top:0;margin-bottom:0;margin-right:10px;margin-left:10px;\" width=\"675\">
                            <tbody>
                                <tr style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" height=\"30\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\"></td>
                                </tr>

                                <tr style=\"border-collapse:collapse;\">
                                    <td align=\"center\" class=\"w640\" id=\"header\" style=\"background-color:#ffffff; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif;\" width=\"675\">
                                        <a href=\"https://www.aazaa.org\" style=\"color:#fff;text-decoration:none;font-size:30px;\"><img src=\"{{ absolute_url(asset('images/logo/logo-46px-50px.png')) | embed(message) }}\" align=\"right\" style=\"margin: 15px\" ></a>
                                    </td>
                                </tr>
                                <tr style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" height=\"30\" style=\"background-color: #FFFFFF; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\"></td>
                                </tr>
                                <tr id=\"simple-content-row\" style=\"border-collapse:collapse;\">
                                    <td class=\"w640\" style=\"background-color: #FFFFFF; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif\" width=\"675\">
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w640\" width=\"675\">
                                            <tbody>
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td class=\"w30\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"30\"></td>
                                                    <td class=\"w580\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"580\">
                                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"w580\" width=\"580\">
                                                            <tbody>
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td class=\"w580\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"580\">
                                                                        <p id=\"subject\" class=\"article-title\" style=\"color: #223546; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; line-height: 24px; margin-bottom: 18px; margin-top: 0px; text-align: left\">
                                                                            {% block subject %}{% endblock %}
                                                                        </p>
                                                                        <div id=\"content\" class=\"article-content\" style=\"color: #444444; font-family: Helvetica Neue, Arial, Helvetica, sans-serif; font-size: 13px; line-height: 18px; margin-bottom: 18px; margin-top: 0px; text-align: left\">
                                                                            {% block content %}{% endblock %}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td class=\"w30\" style=\"font-family:Helvetica Neue, Arial, Helvetica, sans-serif;border-collapse:collapse;\" width=\"30\">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr style=\"border-collapse:collapse;\">
                    <td align=\"center\" style=\"background-color: #ECECEC; border-collapse: collapse; font-family: Helvetica Neue, Arial, Helvetica, sans-serif;padding-top:20px;\">
                        {% if unsubscribe is defined and unsubscribe == true and user is defined %}
                            <a href=\"{{ absolute_url(url('unsubscribe_mailing', {'userMail': user.email, 'userToken': user.tokenLogin })) }}\">uitschrijven</a>
                        {% endif %}
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>", "Email/base.html.twig", "/home/deb116267/domains/aazaa.org/templates/Email/base.html.twig");
    }
}
