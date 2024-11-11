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

/* default/template/checkout/guest_shipping_new.twig */
class __TwigTemplate_8fad51776aef7de1f252f853a72a3ea48c10305e13724b78a4f1f5cd0d65107e extends \Twig\Template
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
<style>
   label{
   display:none;
   }
   ul.list{
   max-height:300px;
   overflow-y:auto !important;
   }
</style>
<div class=\"content\">
   <div class=\"container\" style=\"max-width:900px; margin:50px auto\">
      <div class=\"row\">
         <div class=\"col-sm-12 text-center\">
            <h3>Shipping Details</h3>
            <hr />
         </div>
      </div>
      <div class=\"row\">
         <div class=\"col-sm-12\">
            <form class=\"form-horizontal\">
               <div class=\"form-group required\">
                  <div class=\"row\">
                     <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"firstname\" value=\"";
        // line 25
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
                     </div>
                     <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"address_1\" value=\"";
        // line 28
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"Full Address\" id=\"input-shipping-address-1\" class=\"form-control\" />
                     </div>
                  </div>
               </div>
               <div class=\"form-group required\">
                  <div class=\"row\">
                     <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"lastname\" value=\"";
        // line 35
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
                     </div>
                     <div class=\"col-sm-6\">
                     <input type=\"text\" name=\"address_2\" value=\"";
        // line 38
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"Landmark/Address line 2\" id=\"input-shipping-address-2\" class=\"form-control\" />
                  </div>
                  </div>
               </div>
               <div class=\"form-group required\">
                  <div class=\"row\">
                     <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"company\" value=\"";
        // line 45
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"Telephone\" id=\"input-shipping-company\" class=\"form-control\" />
                     </div>
                     <div class=\"col-sm-3\">
                       <input type=\"text\" name=\"city\" value=\"";
        // line 48
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
                     </div>
                     <div class=\"col-sm-3\">
                     <input type=\"text\" name=\"postcode\" value=\"";
        // line 51
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
               
                     </div>
                  </div>
               </div>
              
              
               
               <div class=\"form-group required\">
                <div class=\"row\">
                <div class=\"col-sm-6\">
                     <select name=\"country_id\" id=\"input-shipping-country\" class=\"w-100 form-control\">
                        <option value=\"\">";
        // line 63
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 65
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 65) == ($context["country_id"] ?? null))) {
                // line 66
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 66);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 66);
                echo "</option>
                        ";
            } else {
                // line 68
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 68);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 68);
                echo "</option>
                        ";
            }
            // line 70
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                     </select>
                  </div>
                  <div class=\"col-sm-6\">
                     <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control w-100\">
                     </select>
                  </div>
                </div>
               
               </div>
              
               ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 82
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 82) == "address")) {
                // line 83
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 83) == "select")) {
                    // line 84
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 84)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 84);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 85);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <select name=\"custom_field[";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 87);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 88
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 90
                        echo "                        ";
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["address_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 90) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["address_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90)] ?? null) : null)))) {
                            // line 91
                            echo "                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 91);
                            echo "</option>
                        ";
                        } else {
                            // line 93
                            echo "                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 93);
                            echo "</option>
                        ";
                        }
                        // line 95
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "      
                     </select>
                  </div>
               </div>
               ";
                }
                // line 100
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 100) == "radio")) {
                    // line 101
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 101)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 101);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <div id=\"input-shipping-custom-field";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\">
                        ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 105));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 106
                        echo "                        <div class=\"radio\"> ";
                        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["address_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["address_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null)))) {
                            // line 107
                            echo "                           <label>
                           <input type=\"radio\" name=\"custom_field[";
                            // line 108
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 108);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 108);
                            echo "\" checked=\"checked\" />
                           ";
                            // line 109
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 109);
                            echo "</label>
                           ";
                        } else {
                            // line 111
                            echo "                           <label>
                           <input type=\"radio\" name=\"custom_field[";
                            // line 112
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 112);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                            echo "\" />
                           ";
                            // line 113
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                            echo "</label>
                           ";
                        }
                        // line 114
                        echo " 
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo " 
                     </div>
                  </div>
               </div>
               ";
                }
                // line 121
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                    // line 122
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 122);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <div id=\"input-shipping-custom-field";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\">
                        ";
                    // line 126
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 126));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 127
                        echo "                        <div class=\"checkbox\"> ";
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["address_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["address_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)))) {
                            // line 128
                            echo "                           <label>
                           <input type=\"checkbox\" name=\"custom_field[";
                            // line 129
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 129);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 129);
                            echo "\" checked=\"checked\" />
                           ";
                            // line 130
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 130);
                            echo "</label>
                           ";
                        } else {
                            // line 132
                            echo "                           <label>
                           <input type=\"checkbox\" name=\"custom_field[";
                            // line 133
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133);
                            echo "\" />
                           ";
                            // line 134
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 134);
                            echo "</label>
                           ";
                        }
                        // line 135
                        echo " 
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo " 
                     </div>
                  </div>
               </div>
               ";
                }
                // line 142
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "text")) {
                    // line 143
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 143)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 143);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"custom_field[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 146);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    echo "]\" value=\"";
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["address_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null)) {
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["address_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 146);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    echo "\" class=\"form-control\" />
                  </div>
               </div>
               ";
                }
                // line 150
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 150) == "textarea")) {
                    // line 151
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 151)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 151);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <textarea name=\"custom_field[";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 154);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["address_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["address_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                    }
                    echo "</textarea>
                  </div>
               </div>
               ";
                }
                // line 158
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "file")) {
                    // line 159
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 159)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 159);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"custom_field[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "]\" value=\"";
                    if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["address_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) {
                        echo "  ";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["address_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null);
                        echo " ";
                    }
                    echo "\" />
                  </div>
               </div>
               ";
                }
                // line 167
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "date")) {
                    // line 168
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 168)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 168);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 172);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "]\" value=\"";
                    if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["address_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null)) {
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["address_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 172);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
               </div>
               ";
                }
                // line 180
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 180) == "time")) {
                    // line 181
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 181)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 181);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 182);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 185);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "]\" value=\"";
                    if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["address_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null)) {
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["address_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 185);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
               </div>
               ";
                }
                // line 193
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "datetime")) {
                    // line 194
                    echo "               <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 194)) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                  <div class=\"col-sm-10\">
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 198);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "]\" value=\"";
                    if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["address_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                        echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["address_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
               </div>
               ";
                }
                // line 206
                echo "               ";
            }
            // line 207
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "               <div class=\"buttons\">
                  <div class=\"pull-right\">
                     <input type=\"button\" value=\"";
        // line 210
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-guest-shipping\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script type=\"text/javascript\"><!--
   // Sort the custom fields
   \$('.form-group[data-sort]').detach().each(function() {
   \tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length-2) {
   \t\t\$('.form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
   \t}
   
   \tif (\$(this).attr('data-sort') > \$('.form-group').length-2) {
   \t\t\$('.form-group:last').after(this);
   \t}
   
   \tif (\$(this).attr('data-sort') == \$('.form-group').length-2) {
   \t\t\$('.form-group:last').after(this);
   \t}
   
   \tif (\$(this).attr('data-sort') < -\$('.form-group').length-2) {
   \t\t\$('.form-group:first').before(this);
   \t}
   });
   //-->
</script> 
<script type=\"text/javascript\"><!--
   \$('button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
   \tvar node = this;
   
   \t\$('#form-upload').remove();
   
   \t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
   
   \t\$('#form-upload input[name=\\'file\\']').trigger('click');
   
   \tif (typeof timer != 'undefined') {
       \tclearInterval(timer);
   \t}
   
   \ttimer = setInterval(function() {
   \t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
   \t\t\tclearInterval(timer);
   
   \t\t\t\$.ajax({
   \t\t\t\turl: 'index.php?route=tool/upload',
   \t\t\t\ttype: 'post',
   \t\t\t\tdataType: 'json',
   \t\t\t\tdata: new FormData(\$('#form-upload')[0]),
   \t\t\t\tcache: false,
   \t\t\t\tcontentType: false,
   \t\t\t\tprocessData: false,
   \t\t\t\tbeforeSend: function() {
   \t\t\t\t\t\$(node).button('loading');
   \t\t\t\t},
   \t\t\t\tcomplete: function() {
   \t\t\t\t\t\$(node).button('reset');
   \t\t\t\t},
   \t\t\t\tsuccess: function(json) {
   \t\t\t\t\t\$(node).parent().find('.text-danger').remove();
   
   \t\t\t\t\tif (json['error']) {
   \t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
   \t\t\t\t\t}
   
   \t\t\t\t\tif (json['success']) {
   \t\t\t\t\t\talert(json['success']);
   
   \t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
   \t\t\t\t\t}
   \t\t\t\t},
   \t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
   \t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
   \t\t\t\t}
   \t\t\t});
   \t\t}
   \t}, 500);
   });
   //-->
</script> 
<script type=\"text/javascript\"><!--
   \$('.date').datetimepicker({
   \tlanguage: '";
        // line 295
        echo ($context["datepicker"] ?? null);
        echo "',
   \tpickTime: false
   });
   
   \$('.time').datetimepicker({
   \tlanguage: '";
        // line 300
        echo ($context["datepicker"] ?? null);
        echo "',
   \tpickDate: false
   });
   
   \$('.datetime').datetimepicker({
   \tlanguage: '";
        // line 305
        echo ($context["datepicker"] ?? null);
        echo "',
   \tpickDate: true,
   \tpickTime: true
   });
   //-->
</script> 
<script type=\"text/javascript\"><!--
   \$('select[name=\\'country_id\\']').on('change', function() {
   \t\$.ajax({
   \t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
   \t\tdataType: 'json',
   \t\tbeforeSend: function() {
   \t\t\t//\$('select[name=\\'country_id\\']').prop('disabled', true);
   \t\t},
   \t\tcomplete: function() {
   \t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
   \t\t},
   \t\tsuccess: function(json) {
   \t\t\tif (json['postcode_required'] == '1') {
   \t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
   \t\t\t} else {
   \t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
   \t\t\t}
   
   \t\t\thtml = '<option value=\"\">";
        // line 329
        echo ($context["text_select"] ?? null);
        echo "</option>';
   
   \t\t\tif (json['zone'] && json['zone'] != '') {
   \t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
   \t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
   
   \t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 335
        echo ($context["zone_id"] ?? null);
        echo "') {
   \t\t\t\t\t\thtml += ' selected=\"selected\"';
             \t\t\t}
   
   \t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
   \t\t\t\t}
   \t\t\t} else {
   \t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 342
        echo ($context["text_none"] ?? null);
        echo "</option>';
   \t\t\t}
   
   \t\t\t\$('select[name=\\'zone_id\\']').html(html);
            \$('select[name=\\'zone_id\\']').niceSelect('update');
   \t\t},
   \t\terror: function(xhr, ajaxOptions, thrownError) {
   \t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
   \t\t}
   \t});
   });
   
   \$('select[name=\\'country_id\\']').trigger('change');
   //-->
</script>
<script>
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$(' input[type=\\'text\\'],  input[type=\\'date\\'],  input[type=\\'datetime-local\\'],  input[type=\\'time\\'],  input[type=\\'password\\'],  input[type=\\'checkbox\\']:checked,  input[type=\\'radio\\']:checked,  textarea,  select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
               console.log(json['error'])
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$(' .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else{
                location = 'index.php?route=checkout/checkout_new'
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
</script>
";
        // line 403
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/guest_shipping_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  873 => 403,  809 => 342,  799 => 335,  790 => 329,  763 => 305,  755 => 300,  747 => 295,  657 => 210,  653 => 208,  647 => 207,  644 => 206,  621 => 198,  613 => 195,  604 => 194,  601 => 193,  578 => 185,  570 => 182,  561 => 181,  558 => 180,  535 => 172,  527 => 169,  518 => 168,  515 => 167,  500 => 163,  492 => 162,  487 => 160,  478 => 159,  475 => 158,  456 => 154,  449 => 152,  440 => 151,  437 => 150,  418 => 146,  411 => 144,  402 => 143,  399 => 142,  392 => 137,  384 => 135,  379 => 134,  371 => 133,  368 => 132,  363 => 130,  355 => 129,  352 => 128,  349 => 127,  345 => 126,  341 => 125,  336 => 123,  327 => 122,  324 => 121,  317 => 116,  309 => 114,  304 => 113,  296 => 112,  293 => 111,  288 => 109,  280 => 108,  277 => 107,  274 => 106,  270 => 105,  266 => 104,  261 => 102,  252 => 101,  249 => 100,  237 => 95,  229 => 93,  221 => 91,  218 => 90,  214 => 89,  210 => 88,  202 => 87,  195 => 85,  186 => 84,  183 => 83,  180 => 82,  176 => 81,  164 => 71,  158 => 70,  150 => 68,  142 => 66,  139 => 65,  135 => 64,  131 => 63,  114 => 51,  106 => 48,  100 => 45,  90 => 38,  82 => 35,  72 => 28,  64 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/guest_shipping_new.twig", "");
    }
}
