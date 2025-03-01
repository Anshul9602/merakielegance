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

/* default/template/account/reset.twig */
class __TwigTemplate_54475ca7aa2afb5dc3c68f0c4d8516390d0221d7284413d1e7960dab03158bac extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-reset\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form action=\"";
        // line 18
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 20
        echo ($context["text_password"] ?? null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 22
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 24
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 25
        if (($context["error_password"] ?? null)) {
            // line 26
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 27
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 30
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 32
        echo ($context["confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_confirm"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "</div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 39
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 41
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 45
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 46
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 48,  169 => 46,  165 => 45,  158 => 41,  151 => 39,  145 => 35,  139 => 34,  137 => 33,  133 => 32,  128 => 30,  123 => 27,  117 => 26,  115 => 25,  111 => 24,  106 => 22,  101 => 20,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/reset.twig", "");
    }
}
