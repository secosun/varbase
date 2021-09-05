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

/* modules/contrib/varbase_email/templates/varbase_emails.html.twig */
class __TwigTemplate_34ba5dad59df5047cd56f528abbcb86e0f99c0499770acaf6384c30b26110b9f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 38, $this->source), "html", null, true);
        echo "</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
          border: none;
          -ms-interpolation-mode: bicubic;
          max-width: 100%;
        }

        body {
          background-color: #f6f6f6;
          font-family: sans-serif;
          -webkit-font-smoothing: antialiased;
          font-size: 14px;
          line-height: 1.4;
          margin: 0;
          padding: 0;
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
          direction: ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dir"] ?? null), 59, $this->source), "html", null, true);
        echo ";
        }

        table {
          border-collapse: separate;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
          width: 100%;
          direction: ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dir"] ?? null), 67, $this->source), "html", null, true);
        echo ";
        }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top;
        }
        em {
          font-style: normal;
          font-weight: bold;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
          background-color: #f6f6f6;
          width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
          display: block;
          margin: 0 auto !important;
          /* makes it centered */
          max-width: 580px;
          padding: 10px;
          width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
          box-sizing: border-box;
          display: block;
          margin: 0 auto;
          max-width: 580px;
          padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .header {
          padding-top: 30px;
          padding-bottom: 30px;
          text-align: center;
        }

        .postheader {
          padding-bottom: 30px;
          text-align: center;
          font-size: 18px;
        }

        .main {
          background: #fff;
          border-radius: 3px;
          width: 100%;
          box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24);
        }

        .wrapper {
          box-sizing: border-box;
          padding: 50px;
        }

        .footer {
          clear: both;
          padding-top: 10px;
          text-align: center;
          width: 100%;
        }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center;
        }

        .content-block {
          padding-top: 10px;
        }
        .content-block img {
          margin: 10px 0;
        }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
          color: #000000;
          font-family: sans-serif;
          font-weight: 400;
          line-height: 1.4;
          margin: 0;
          margin-bottom: 30px;
        }

        h1 {
          font-size: 35px;
          font-weight: 300;
          text-align: center;
          text-transform: capitalize;
        }

        p,
        ul,
        ol {
          font-family: sans-serif;
          font-size: 14px;
          font-weight: normal;
          margin: 0;
          margin-bottom: 15px;
        }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px;
        }

        ul {
          padding-left: 1em;
        }

        a {
          color: #328EC7;
          font-weight: bold;
          text-decoration: none;
        }

        a:hover, a:visited {
          text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
          box-sizing: border-box;
          width: 100%;
        }
        .btn > tbody > tr > td {
          padding-bottom: 15px;
        }
        .btn table {
          width: auto;
        }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center;
        }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #784288;
          border-radius: 5px;
          box-sizing: border-box;
          color: #784288;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize;
        }

        .btn-primary table td {
          background-color: #784288;
        }

        .btn-primary a {
          background-color: #784288;
          border-color: #784288;
          color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
          margin-bottom: 0;
        }

        .first {
          margin-top: 0;
        }

        .align-center {
          text-align: center;
        }

        .align-right {
          text-align: right;
        }

        .align-left {
          text-align: left;
        }

        .clear {
          clear: both;
        }

        .mt0 {
          margin-top: 0;
        }

        .mb0 {
          margin-bottom: 0;
        }

        .logo {
          max-height: 80px;
          max-width: 160px;
        }

        .preheader {
          color: transparent;
          display: none;
          height: 0;
          max-height: 0;
          max-width: 0;
          opacity: 0;
          overflow: hidden;
          mso-hide: all;
          visibility: hidden;
          width: 0;
        }

        .powered-by a {
          text-decoration: none;
        }

        hr {
          border: 0;
          border-bottom: 1px solid #f6f6f6;
          margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
              font-size: 16px !important;
            }
            table[class=body] .wrapper,
            table[class=body] .article {
              padding: 10px !important;
            }
            table[class=body] .content {
              padding: 0 !important;
            }
            table[class=body] .container {
              padding: 0 !important;
              width: 100% !important;
            }
            table[class=body] .main {
              border-left-width: 0 !important;
              border-radius: 0 !important;
              border-right-width: 0 !important;
            }
            table[class=body] .btn table {
              width: 100% !important;
            }
            table[class=body] .btn a {
              width: 100% !important;
            }
            table[class=body] .img-responsive {
              height: auto !important;
              max-width: 100% !important;
              width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
          .ExternalClass {
            width: 100%;
          }
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
            line-height: 100%;
          }
          .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
          }
          .btn-primary table td:hover {
            background-color: #34495e !important;
          }
          .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
          }
        }

    </style>
</head>
<body class=\"\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
    <tr>
        <td>&nbsp;</td>
        <td class=\"container\">
            <div class=\"content\">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class=\"preheader\"></span>

                ";
        // line 404
        if (($context["logo"] ?? null)) {
            // line 405
            echo "                    <div class=\"header\">
                        <img src=\"";
            // line 406
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 406, $this->source), "html", null, true);
            echo "\" alt=\"Logo\" class=\"logo\" />
                    </div>
                ";
        }
        // line 409
        echo "
                <div class=\"postheader\">
                    ";
        // line 411
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 411, $this->source), "html", null, true);
        echo "
                </div>

                <table class=\"main\" style=\"background: #fff;border-radius: 3px;width: 100%;box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24);\">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class=\"wrapper\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                <tr>
                                    <td>
                                        ";
        // line 422
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 422, $this->source), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class=\"footer\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"content-block\">
                                <strong class=\"brand\">
                                    ";
        // line 438
        if (($context["site_link"] ?? null)) {
            // line 439
            echo "                                        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 439, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 439, $this->source), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 441
            echo "                                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 441, $this->source), "html", null, true);
            echo "
                                    ";
        }
        // line 443
        echo "                                </strong>
                                ";
        // line 444
        if (($context["site_slogan"] ?? null)) {
            // line 445
            echo "                                    <br />
                                    <span class=\"tagline\">";
            // line 446
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 446, $this->source), "html", null, true);
            echo "</span>
                                ";
        }
        // line 448
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block powered-by\">
                                Copyright &copy;";
        // line 452
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/varbase_email/templates/varbase_emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 452,  498 => 448,  493 => 446,  490 => 445,  488 => 444,  485 => 443,  479 => 441,  471 => 439,  469 => 438,  450 => 422,  436 => 411,  432 => 409,  426 => 406,  423 => 405,  421 => 404,  81 => 67,  70 => 59,  46 => 38,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/varbase_email/templates/varbase_emails.html.twig", "/opt/drupal9/docroot/modules/contrib/varbase_email/templates/varbase_emails.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 404);
        static $filters = array("escape" => 38, "date" => 452);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
