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

/* default/template/checkout/shipping_address_new.twig */
class __TwigTemplate_d61a0ecab57aff3c6a30c15f0c28297363e1df609c42e5067db2a797d95740e3 extends \Twig\Template
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
   label {
   font-size: 12px;
   text-transform: uppercase
   }
   select {
   -webkit-border-radius: 0px;
   }
   select option {
   border-radius: 0px
   }
   .address_card {
   padding: 10px;
   }
   .card_body {
   border: thin solid #f1f1f1;
   min-height: 148px;
   box-shadow: 1px 1px 1px #f1f1f1;
   padding: 10px;
   cursor: pointer;
   transition-duration: 100ms;
   -webkit-transition-duration: 100ms
   }
   .card_body:hover {
   -webkit-transform: scale(1.03);
   box-shadow: 2px 2px 2px #f1f1f1;
   transition-duration: 100ms;
   -webkit-transition-duration: 100ms
   }
   .card_body .fa-check-circle {
   color: green;
   position: absolute;
   top: 20px;
   right: 20px;
   display: none;
   list-style: none
   }
   .nice-select{
    width:100%;
   }
</style>

<div style=\" min-height:70vh\" class=\"container\">
 <div class=\"row\">
  <div class=\"col-sm-8 offset-sm-2 col-xs-10 offset-xs-1\">

      <div class=\"row text-center\">
            <div class=\"col-sm-12\">
               <br /><br />
               <h3 style=\"text-transform:uppercase\">Shipping Information</h3>
               <h5>Please select address</h5>
               <hr />
            </div>
         </div>

         <div class=\"row\">
          <div class=\"col-sm-12\">
          <form class=\"form-horizontal\">
  ";
        // line 60
        if (($context["addresses"] ?? null)) {
            // line 61
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 64
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"shipping-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 69
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 69) == ($context["address_id"] ?? null))) {
                    // line 70
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 70);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 70);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 70);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 70);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 70);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 70);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 70);
                    echo "</option>
      ";
                } else {
                    // line 72
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 72);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 72);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 72);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 72);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 72);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 72);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 72);
                    echo "</option>
      ";
                }
                // line 74
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 80
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 83
        echo "  <br />
  <div id=\"shipping-new\" style=\"display: ";
        // line 84
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 88
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
      </div>
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 91
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
      </div>
  
    </div>
    </div>
    
    <div class=\"form-group\">
    <div class=\"row\">
      <div style=\"display:none\" class=\"col-sm-6\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 100
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
      </div>
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 103
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
      </div>
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 106
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
      </div>
   
    </div> 
   
    </div>
    
    <div class=\"form-group required\">
      <div class=\"row\">
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 116
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
      </div>
      <div class=\"col-sm-6\">
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 119
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
        <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
          <option value=\"\">";
        // line 129
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 131
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 131) == ($context["country_id"] ?? null))) {
                // line 132
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 132);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 132);
                echo "</option>
          ";
            } else {
                // line 134
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 134);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 134);
                echo "</option>
           ";
            }
            // line 136
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        </select>
      </div>
      <div class=\"col-sm-6\">
        <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
        </select>
      </div>
      </div>
      
    </div>
    
   ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 148
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "select")) {
                // line 149
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 149);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 152);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "]\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 153
                echo ($context["text_select"] ?? null);
                echo "</option>
          ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 154));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 155
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 161
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "radio")) {
                // line 162
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 162)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\">
          ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 167
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 169);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 169);
                    echo "\" />
              ";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 170);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 177
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                // line 178
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 178)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 178);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                echo "\">
          ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 182));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 183
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 185);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 185);
                    echo "\" />
              ";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 186);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 193
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "text")) {
                // line 194
                echo "    <div class=\"form-group";
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
        <input type=\"text\" name=\"custom_field[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 197);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 197);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 201
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 201) == "textarea")) {
                // line 202
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 202)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 202);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 205);
                echo "</textarea>
      </div>
    </div>
    ";
            }
            // line 209
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 209) == "file")) {
                // line 210
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 210)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 210);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-shipping-custom-field";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 218
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "date")) {
                // line 219
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 219)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 219);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 223);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 223);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 230
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 230) == "time")) {
                // line 231
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 231)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 231);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 232);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 235);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 235);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 235);
                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 242
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 242) == "datetime")) {
                // line 243
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 243)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 243);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 244);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 247);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 247);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 254
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <input type=\"button\" value=\"";
        // line 258
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-address\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
          </div>
         </div>

         
  </div>
 </div>


</div>

 <script type=\"text/javascript\">
            <!--
            \$(document).delegate('#button-shipping-address', 'click', function(e) {
              e.preventDefault();
              \$.ajax({
                url: 'index.php?route=checkout/shipping_address/save',
                type: 'post',
                data: \$('input[type=\\'text\\'], input[type=\\'checkbox\\']:checked, input[type=\\'radio\\']:checked,select'),
                dataType: 'json',
                beforeSend: function() {
                  \$('#button-shipping-address').button('loading');
                },
                success: function(json) {
                  \$('.alert, .text-danger').remove();

                  if (json['redirect']) {
                    location = json['redirect'];
                  } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');

                    if (json['error']['warning']) {
                      \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                      var element = \$('#input-shipping-' + i.replace('_', '-'));

                      if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                      }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                  } else {
                    window.location = 'index.php?route=checkout/checkout_new';
                  }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
              });
            });




            \$(\".sticky-header\").addClass(\"header_disabled\");
            \$(\".sticky-header\").css(\"background-color\", '#fff');
            \$(\".sticky-header\").css(\"border-bottom\", '#f1f1f1 thin solid');
            \$(\".sticky-header #navigation a\").css(\"color\", \"#181818\");
            \$(\".main_logo\").attr(\"src\", \"img/logo-blue.png\");


            \$('input[name=\\'shipping_address\\']').on('change', function() {
              if (this.value == 'new') {
                \$('#shipping-existing').hide();
                \$('#shipping-new').show();
              } else {
                \$('#shipping-existing').show();
                \$('#shipping-new').hide();
              }
            });
            //
            -->
          </script>


          <script type=\"text/javascript\">
            <!--
            \$('select[name=\\'country_id\\']').on('change', function() {
              \$.ajax({
                url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
                dataType: 'json',
                beforeSend: function() {
                  \$('select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                },
                complete: function() {
                  \$('.fa-spin').remove();
                },
                success: function(json) {
                  if (json['postcode_required'] == '1') {
                    \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
                  } else {
                    \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
                  }

                  html = '<option value=\"\"><?php echo \$text_select; ?></option>';

                  if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == '<?php echo \$zone_id; ?>') {
                        html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                  } else {
                    html += '<option value=\"0\" selected=\"selected\"><?php echo \$text_none; ?></option>';
                  }

                  \$('select[name=\\'zone_id\\']').html(html);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
              });
            });

            \$('select[name=\\'country_id\\']').trigger('change');

            \$(\".card_body\").not(\".card_body#add_new\").click(function() {
              \$(\"#button-shipping-address\").prop(\"disabled\", false);

              \$(\"#a_id\").val(\$(this).find('.address_id').val());

              \$(\".card_body\").not(\".card_body#add_new\").find(\".fa\").fadeOut();

              \$(this).find(\".fa\").fadeIn();
            })

            \$(\".card_body#add_new\").click(function() {
              \$(\"#button-shipping-address\").prop(\"disabled\", false);
              \$(\"#exising_btn\").prop(\"disabled\", false);
              \$(\"#new_address_radio\").prop(\"checked\", true);
              \$('#shipping-existing').hide();
              \$('#shipping-new').show();
            })
            //
            -->
          </script>

";
        // line 408
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_address_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 408,  687 => 258,  682 => 255,  676 => 254,  658 => 247,  650 => 244,  641 => 243,  638 => 242,  620 => 235,  612 => 232,  603 => 231,  600 => 230,  582 => 223,  574 => 220,  565 => 219,  562 => 218,  551 => 214,  543 => 213,  538 => 211,  529 => 210,  526 => 209,  511 => 205,  504 => 203,  495 => 202,  492 => 201,  477 => 197,  470 => 195,  461 => 194,  458 => 193,  452 => 189,  443 => 186,  435 => 185,  431 => 183,  427 => 182,  423 => 181,  418 => 179,  409 => 178,  406 => 177,  400 => 173,  391 => 170,  383 => 169,  379 => 167,  375 => 166,  371 => 165,  366 => 163,  357 => 162,  354 => 161,  348 => 157,  337 => 155,  333 => 154,  329 => 153,  321 => 152,  314 => 150,  305 => 149,  302 => 148,  298 => 147,  286 => 137,  280 => 136,  272 => 134,  264 => 132,  261 => 131,  257 => 130,  253 => 129,  238 => 119,  232 => 116,  219 => 106,  213 => 103,  207 => 100,  195 => 91,  189 => 88,  178 => 84,  175 => 83,  169 => 80,  162 => 75,  156 => 74,  138 => 72,  120 => 70,  117 => 69,  113 => 68,  106 => 64,  101 => 61,  99 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/shipping_address_new.twig", "");
    }
}
