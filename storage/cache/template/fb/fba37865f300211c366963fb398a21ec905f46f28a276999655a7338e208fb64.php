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

/* default/template/extension/payment/payubiz.twig */
class __TwigTemplate_922b8aa4e4085261e12e89219a66332e3e9f16a9cc60747f2743de25b59f0b1f extends \Twig\Template
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
        echo "  <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" id=\"payubiz_form\" name=\"payubiz_form\" >
\t\t<input type=\"hidden\" name=\"key\" value=\"";
        // line 2
        echo ($context["key"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"txnid\" value=\"";
        // line 3
        echo ($context["txnid"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"amount\" value=\"";
        // line 4
        echo ($context["amount"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"productinfo\" value=\"";
        // line 5
        echo ($context["productinfo"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"firstname\" value=\"";
        // line 6
        echo ($context["firstname"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"Lastname\" value=\"";
        // line 7
        echo ($context["Lastname"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"Zipcode\" value=\"";
        // line 8
        echo ($context["Zipcode"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"email\" value=\"";
        // line 9
        echo ($context["email"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"phone\" value=\"";
        // line 10
        echo ($context["phone"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"surl\" value=\"";
        // line 11
        echo ($context["surl"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"Furl\" value=\"";
        // line 12
        echo ($context["Furl"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"curl\" value=\"";
        // line 13
        echo ($context["curl"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"Hash\" value=\"";
        // line 14
        echo ($context["Hash"] ?? null);
        echo "\" />
\t\t
\t\t<input type=\"hidden\" name=\"address1\" value=\"";
        // line 16
        echo ($context["address1"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"address2\" value=\"";
        // line 17
        echo ($context["address2"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"city\" value=\"";
        // line 18
        echo ($context["city"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"country\" value=\"";
        // line 19
        echo ($context["country"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"state\" value=\"";
        // line 20
        echo ($context["state"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"pg\" value=\"";
        // line 21
        echo ($context["pg"] ?? null);
        echo "\" />
        <input type=\"hidden\" name=\"bankcode\" value=\"";
        // line 22
        echo ($context["bankcode"] ?? null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"udf5\" value=\"";
        // line 23
        echo ($context["udf5"] ?? null);
        echo "\" />
\t\t<div class=\"buttons\">
    <div class=\"pull-right\"><input type=\"submit\" value=\"";
        // line 25
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" /></div>
  </div>
\t</form>\t
\t
\t";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/payubiz.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/payubiz.twig", "");
    }
}
