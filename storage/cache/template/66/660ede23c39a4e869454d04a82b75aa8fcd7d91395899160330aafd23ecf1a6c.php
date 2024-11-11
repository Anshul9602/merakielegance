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

/* default/template/checkout/checkout_new.twig */
class __TwigTemplate_11318cd65a6a1f56d5db578ce145acab5c63a4c693db64e17aa96eb7afcc3099 extends \Twig\Template
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
   h4.font-18{
    font-size:18px;
    margin-bottom:20px;
   } 

   @media screen and (max-width:850px) {
\t\t\t\t .mob_font {
\t\t\t\t\tfont-size: 8px;
\t\t\t\t}}
</style>
<div class=\"content\">
    <div class=\"container ptb-50\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h3>Secure Checkout</h3>
                <hr />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3\">
               <h4 class='font-18'>Billing Address</h4> 
               <p class='text-capitalize'>";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_firstname", [], "any", false, false, false, 24);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_lastname", [], "any", false, false, false, 24);
        echo "<br />
                ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_address_1", [], "any", false, false, false, 25);
        echo "  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_address_2", [], "any", false, false, false, 25);
        echo " <br />
                ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_city", [], "any", false, false, false, 26);
        echo ",  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_zone", [], "any", false, false, false, 26);
        echo "<br />
                ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_country", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_postcode", [], "any", false, false, false, 27);
        echo "</p>
            </div>
            
            <div class=\"col-sm-3\">
            <h4 class='font-18'>Shipping Address</h4> 
                <p class='text-capitalize'>";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_firstname", [], "any", false, false, false, 32);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_lastname", [], "any", false, false, false, 32);
        echo "<br />
                ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_address_1", [], "any", false, false, false, 33);
        echo "  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_address_2", [], "any", false, false, false, 33);
        echo " <br />
                ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_city", [], "any", false, false, false, 34);
        echo ",  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_zone", [], "any", false, false, false, 34);
        echo "<br />
                ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_country", [], "any", false, false, false, 35);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_postcode", [], "any", false, false, false, 35);
        echo "</p>
            </div>
            <div class=\"col-sm-3\">
            <h4 class='font-18'>Shipping Methods</h4> 
            <p>Standard Shipping</p>
                <div class='d-none' id=\"shipping-body\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 42
            echo "                  <p><strong>";
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 42);
            echo "</strong></p>
                  ";
            // line 43
            if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 43)) {
                // line 44
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                    // line 45
                    echo "                  <div class=\"radio\">
                    <label> ";
                    // line 46
                    if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 46) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                        // line 47
                        echo "                      ";
                        $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 47);
                        // line 48
                        echo "                      <input type=\"radio\" name=\"shipping_method\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 48);
                        echo "\" checked=\"checked\" />
                      ";
                    } else {
                        // line 50
                        echo "                      <input type=\"radio\" name=\"shipping_method\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 50);
                        echo "\" />
                      ";
                    }
                    // line 52
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 52);
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 52);
                    echo "</label>
                  </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                  ";
            } else {
                // line 56
                echo "                  <div class=\"alert alert-danger alert-dismissible\">";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 56);
                echo "</div>
                  ";
            }
            // line 58
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                  <textarea name=\"comment\" style=\"display:none\" rows=\"8\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
                  </div>
                </div>
            <div class=\"col-sm-3\">
              <span id=\"payment_appen\">

              </span>
            </div>
        </div>
        <div class=\"row\">
        <div style=\"margin-top:30px; padding-right:20px\" class=\"col-sm-4\">
          <div class=\"col-sm-12\" style=\"background-color:#f1f1f1\">
           <div class=\"sec\"style=\"padding:20px; font-size:14px\">
           <p> NEED HELP ORDERING?</p>
            <p class=\"mob_font\">
              EMAIL: meraki.eleganceredefined@gmail.com</p>
           </div>
            
            <hr style=\"margin:0\">
            <p style=\"padding:20px; font-size:14px\">
              SHIPPING &amp; FULFILLMENT<br>
              EXPECTED DELIVERY TIME -<br>
             3-5 DAYS FOR IN STOCK PRODUCTS<br><br>
              <a href=\"index.php?route=information/contact\">CONTACT US</a> FOR OUT OF STOCK PRODUCTS
            </p>
          </div>
        </div>
        <div style=\"margin-top:30px; background-color:#fff; padding:10px\" class=\"col-sm-8 col-xs-12\">
          <span id=\"confirm_box\">

          </span>
        </div>
        </div>
    </div>
</div>
<script>
  \$(document).ready(function(e) {
    \$.ajax({
      url: 'index.php?route=checkout/shipping_method/save',
      type: 'post',
      data: \$('input[name=\\'shipping_method\\']:checked, textarea'),
      dataType: 'json',
      success: function(data) {
        console.log(\"api1\");
        console.log(data);
        \$.ajax({
          url: 'index.php?route=checkout/payment_method',
          dataType: 'html',
          complete: function() {
            \$('#button-shipping-method').button('reset');
          },
          success: function(html) {
            console.log(html);
            \$('#payment_appen').html(html);

            \$.ajax({
              url: 'index.php?route=checkout/payment_method/save',
              type: 'post',
              data: \$('input[name=\\'payment_method\\']:checked, textarea'),
              dataType: 'json',
              beforeSend: function() {
                \$('#button-payment-method').button('loading');
              },
              success: function(json) {
                \$.ajax({
                  url: 'index.php?route=checkout/confirm',
                  dataType: 'html',
                  complete: function() {
                    \$('#button-payment-method').button('reset');
                  },
                  success: function(html) {
                    \$('#confirm_box').html(html);
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr
                      .responseText);
                  }
                })
                console.log(json);
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }

            })


          }
        })
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }

    })
  });

  \$(\"body\").on(\"change\", \"input[name=\\'payment_method\\']\", function() {
    \$.ajax({
      url: 'index.php?route=checkout/payment_method/save',
      type: 'post',
      data: \$('input[name=\\'payment_method\\']:checked, textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-payment-method').button('loading');
      },
      success: function(json) {
        \$.ajax({
          url: 'index.php?route=checkout/confirm',
          dataType: 'html',
          complete: function() {
            \$('#button-payment-method').button('reset');
          },
          success: function(html) {
            \$('#confirm_box').html(html);
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        })
        console.log(json);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }

    })

  })
</script> 
            
            
      

   

";
        // line 195
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 195,  183 => 59,  177 => 58,  171 => 56,  168 => 55,  156 => 52,  150 => 50,  144 => 48,  141 => 47,  139 => 46,  136 => 45,  131 => 44,  129 => 43,  124 => 42,  120 => 41,  109 => 35,  103 => 34,  97 => 33,  91 => 32,  81 => 27,  75 => 26,  69 => 25,  63 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout_new.twig", "");
    }
}
