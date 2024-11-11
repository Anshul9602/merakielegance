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

/* default/template/checkout/payment_method.twig */
class __TwigTemplate_dcf1daea692cf9e29c95a9db23ac0f07f72ba4fde1d787292330854ba633b58d extends \Twig\Template
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
        echo "
";
        // line 2
        if (($context["payment_methods"] ?? null)) {
            // line 3
            echo "<h4 class=\"font-18\">Payment Mode</h4>
";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 5
                echo "<div class=\"radio pg-radio\">
  <label>";
                // line 6
                if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 7
                    echo "    ";
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 7);
                    // line 8
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8);
                    echo "\" checked=\"checked\" />
    ";
                } else {
                    // line 10
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10);
                    echo "\" />
    ";
                }
                // line 12
                echo "    ";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 12);
                echo "
    ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "    (";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 14);
                    echo ")
    ";
                }
                // line 15
                echo " </label>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 19
        echo "
<script>
 \$(document).ready(function(){
  if(!(\$(\"#currency_btn\").html()).includes('INR')){
     \$(\".pg-radio\").first().hide();
     \$(\".pg-radio\").eq(1).find('input').click();
  }
 })
</script>

<p>
  <textarea style='display:none' name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 30
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
";
        // line 32
        if (($context["text_agree"] ?? null)) {
            // line 33
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">";
            // line 34
            echo ($context["text_agree"] ?? null);
            echo "
    ";
            // line 35
            if (($context["agree"] ?? null)) {
                // line 36
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 38
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    ";
            }
            // line 40
            echo "    &nbsp;
    <input type=\"button\" value=\"";
            // line 41
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
            // line 45
            echo "<div style='display:none' class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 47
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 50
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 50,  144 => 47,  140 => 45,  131 => 41,  128 => 40,  124 => 38,  120 => 36,  118 => 35,  114 => 34,  111 => 33,  109 => 32,  104 => 30,  91 => 19,  82 => 15,  76 => 14,  74 => 13,  69 => 12,  63 => 10,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/payment_method.twig", "");
    }
}
