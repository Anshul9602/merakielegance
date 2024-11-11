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

/* extension/payment/payubiz.twig */
class __TwigTemplate_cd297be0f5d26a8a31f1c47075c2dc478f2ba63b49bb39bbfc19ca4f405e8ffb extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payubiz\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "         <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
   ";
        }
        // line 22
        echo "   ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
\t  ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
       <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t<h4 class=\"pull-right\"> ";
        // line 30
        echo ($context["text_cta"] ?? null);
        echo "</h4>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payubiz\" class=\"form-horizontal\">
\t\t
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 36
            echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant\"><span data-toggle=\"tooltip\" title=\"";
            // line 37
            echo ($context["help_merchantid"] ?? null);
            echo "\">";
            echo ($context["entry_merchantid"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 37);
            echo " :</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_payubiz_merchantid_";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context, ("payment_payubiz_merchantid_" . twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39)), [], "any", false, false, false, 39);
            echo "\" placeholder=\"";
            echo ($context["entry_merchantid"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39);
            echo " :\" id=\"input-merchant\" class=\"form-control\" />
\t\t\t\t  ";
            // line 40
            if (($context["error_merchant"] ?? null)) {
                // line 41
                echo "              <div class=\"text-danger\">";
                echo ($context["error_merchant"] ?? null);
                echo "</div>
\t\t\t\t  ";
            }
            // line 43
            echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-salt\"><span data-toggle=\"tooltip\" title=\"";
            // line 46
            echo ($context["help_salt"] ?? null);
            echo "\">";
            echo ($context["entry_salt"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 46);
            echo " :</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_payubiz_salt_";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 48);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context, ("payment_payubiz_salt_" . twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 48)), [], "any", false, false, false, 48);
            echo "\" placeholder=\"";
            echo ($context["entry_salt"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 48);
            echo " :\" id=\"input-password\" class=\"form-control\" />
            </div>
          </div>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
           

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payubiz_payment_gateway\">";
        // line 56
        echo ($context["entry_mode"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_payubiz_payment_gateway\" id=\"payment_payubiz_payment_gateway\" class=\"form-control\">
\t\t\t";
        // line 59
        if ((($context["payment_payubiz_payment_gateway"] ?? null) == "live")) {
            // line 60
            echo "                <option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t";
        } else {
            // line 62
            echo "                <option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 64
        echo "\t\t\t";
        if ((($context["payment_payubiz_payment_gateway"] ?? null) == "demo")) {
            // line 65
            echo "                <option value=\"demo\" selected=\"selected\">";
            echo ($context["text_demo"] ?? null);
            echo "</option>
\t\t\t";
        } else {
            // line 67
            echo "                <option value=\"demo\">";
            echo ($context["text_demo"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 69
        echo "                
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payment_payubiz_total\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_payubiz_total\" value=\"";
        // line 76
        echo ($context["payubiz_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
         
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payment_payubiz_geo_zone_id\">";
        // line 81
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_payubiz_geo_zone_id\" id=\"payment_payubiz_geo_zone_id\" class=\"form-control\">
                <option value=\"0\">";
        // line 84
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 86
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 86) == ($context["payment_payubiz_geo_zone_id"] ?? null))) {
                // line 87
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 87);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 87);
                echo "</option>
\t\t\t\t";
            } else {
                // line 89
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 89);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 89);
                echo "</option>
\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "              </select>
            </div>
          </div>

\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payment_payubiz_order_status_id\">";
        // line 97
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_payubiz_order_status_id\" id=\"payment_payubiz_order_status_id\" class=\"form-control\">
\t\t\t  ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 101
            echo "\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 101) == ($context["payment_payubiz_order_status_id"] ?? null))) {
                // line 102
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 102);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 102);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 104
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 104);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 104);
                echo "</option>
\t\t\t\t";
            }
            // line 106
            echo "\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payment_payubiz_status\">";
        // line 113
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_payubiz_status\" id=\"payment_payubiz_status\" class=\"form-control\">
\t\t\t  ";
        // line 116
        if (($context["payment_payubiz_status"] ?? null)) {
            // line 117
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 120
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 121
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 123
        echo "              </select>
            </div>
          </div> 

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"payment_payubiz_sort_order\">";
        // line 128
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_payubiz_sort_order\" value=\"";
        // line 130
        echo ($context["payment_payubiz_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"payment_payubiz_sort_order\" class=\"form-control\" />
            </div>
          </div>
        </div>
        
        </form>
      </div>
    </div>
  </div>
</div>
<style>
@media (min-width: 768px) {
\t#button-register, #img_loading_register {
\t\tposition: relative;
\t\tleft: 5px;
\t}
}
</style>

";
        // line 149
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/payubiz.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 149,  381 => 130,  376 => 128,  369 => 123,  364 => 121,  359 => 120,  354 => 118,  349 => 117,  347 => 116,  341 => 113,  333 => 107,  327 => 106,  319 => 104,  311 => 102,  308 => 101,  304 => 100,  298 => 97,  291 => 92,  285 => 91,  277 => 89,  269 => 87,  266 => 86,  262 => 85,  258 => 84,  252 => 81,  242 => 76,  235 => 74,  228 => 69,  222 => 67,  216 => 65,  213 => 64,  207 => 62,  201 => 60,  199 => 59,  193 => 56,  187 => 52,  171 => 48,  162 => 46,  157 => 43,  151 => 41,  149 => 40,  139 => 39,  130 => 37,  127 => 36,  123 => 35,  118 => 33,  112 => 30,  108 => 29,  104 => 27,  96 => 23,  93 => 22,  85 => 18,  83 => 17,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/payubiz.twig", "");
    }
}
