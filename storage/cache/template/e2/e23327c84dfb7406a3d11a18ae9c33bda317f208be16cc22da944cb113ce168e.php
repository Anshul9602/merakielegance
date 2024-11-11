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

/* default/template/product/product.twig */
class __TwigTemplate_45329e1894fbd2f041e9a8a141c53c1e5aca8bd27575fdb1e61aa89fc8122c9f extends \Twig\Template
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
\t/****radio css***/
\t.radio-custom label {
\t\t
\t\tdisplay: inline-block;
\t\tmargin-right: 15px;
\t\tcursor: pointer;
\t\tfont-weight: 500;
\t\tposition: relative;
\t\toverflow: hidden;
\t\tmargin-bottom: 0.375em;
\t\tfloat: left;
\t\t
\t}

\t.fix_st p {
\t\tmargin-bottom: 0px !important;
\t}

\t.radio-custom label input {
\t\tposition: absolute;
\t\tleft: -9999px;
\t}

\t.radio-custom label input:checked+span {
\t\tbackground-color: #d97676;
\t\tcolor: #fff;
\t}

\t.radio-custom label span {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tpadding: 10px 15px;
\t\tborder-radius: 25px;
\t\ttransition: 0.25s ease;
\t\tbackground-color: #fff;
\t\tborder: thin solid #333;
\t}

\t.arrow {
\t\tdisplay: none !important;
\t}

\t.slick-active div {
\t\tdisplay: flex;
\t\tjustify-content: center;
\t}

\t.plocationbox {
\t\tdisplay: none !important;
\t}
\t.alert-dismissible{
\t\tdisplay:none !important;
\t}
</style>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 65
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 66);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 66);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product mt-10\" class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 80
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 83
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 84
            echo "\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t";
            // line 85
            if (($context["thumb"] ?? null)) {
                // line 86
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 89
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 90
                    echo "\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 91);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 97
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t";
        // line 100
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 101
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 102
            if (($context["thumb"] ?? null)) {
                // line 103
                echo "\t\t\t\t\t\t<li class=\" d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" style=\"max-height:700px;\"
\t\t\t\t\t\t\t\ttitle=\"";
                // line 104
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 107
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 108
                    echo "\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\" style=\"\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 109);
                    echo "\" style=\"max-height:700px;\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 110
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 mt-3 p-3\">
\t\t\t\t\t<h2 class=\"text-capitalize\">";
        // line 119
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t<p class=\"pmob\"style=\"font-size: 17px;\">SKU : ";
        // line 120
        echo ($context["sku_id"] ?? null);
        echo " </p>
\t\t\t\t\t";
        // line 121
        if (($context["price"] ?? null)) {
            // line 122
            echo "\t\t\t\t\t<ul class=\"list-unstyled mt-4\">

\t\t\t\t\t\t";
            // line 124
            if ( !($context["special"] ?? null)) {
                // line 125
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h2 style=\"color:#4a4975;\">";
                // line 126
                echo ($context["price"] ?? null);
                echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            } else {
                // line 129
                echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h3 style=\"color:#4a4975;\">";
                // line 131
                echo ($context["special"] ?? null);
                echo "
\t\t\t\t\t\t\t\t&nbsp; &nbsp;<span class=\"span_mob\"
\t\t\t\t\t\t\t\t\tstyle=\"text-decoration: line-through;font-size: 18px;color:#525151;\">";
                // line 133
                echo ($context["price"] ?? null);
                // line 134
                echo "</span> &nbsp; <span class=\"span_mob\"style=\"font-size:18px;color:#6c8bab;\">
\t\t\t\t\t\t\t\t\t";
                // line 135
                echo ($context["percent1"] ?? null);
                echo "% OFF</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p class=\"pmob\"style=\"font-size: 16px;\">inclusive of all taxes</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 142
            if (($context["tax"] ?? null)) {
                // line 143
                echo "\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t";
                // line 144
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t";
                // line 148
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 151
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 155
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 155);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 155);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "\t\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<br>

\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t\t";
        // line 163
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 163)) {
            // line 164
            echo "\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            echo ($context["product_id"] ?? null);
            echo "\" btnname=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 165
            echo ($context["thumb"] ?? null);
            echo "\" btnhref=\"";
            echo ($context["href1"] ?? null);
            echo "\" btnprice=\"";
            echo ($context["price"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
            // line 166
            echo ($context["special"] ?? null);
            echo "\"btnpercent=\"";
            echo ($context["percent1"] ?? null);
            echo "\" style=\"color: #4a4975; font-size:30px;\"></i>
\t\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #4a4975; font-size:30px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t";
        // line 173
        if (($context["options"] ?? null)) {
            // line 174
            echo "

\t\t\t\t\t\t";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 177
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "select")) {
                    // line 178
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<h3 class=\"control-label\" for=\"input-option";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "
\t\t\t\t\t\t\t</h3><br>
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "]\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 183
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 184));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 185);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 185);
                        echo "
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "radio")) {
                    // line 192
                    echo "\t\t\t\t\t\t<div class=\"row form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 192)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"col-md-6 col-6 control-label float-r\" style=\"float: left;\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "
\t\t\t\t\t\t\t\t&nbsp; &nbsp; &nbsp;

\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"col-md-6 col-6 control-label \" style=\"text-align: end;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn size-chart\" data-toggle=\"modal\"
\t\t\t\t\t\t\t\t\tdata-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clothes-hanger\"></i>
\t\t\t\t\t\t\t\t\t<h4 style=\"    color: #d97676;\">
\t\t\t\t\t\t\t\t\t\tSize Chart</h4>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 209));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 210
                        echo "\t\t\t\t\t\t\t<li class=\"radio-custom \">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 213);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-sign=\"";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 214);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-price=\"";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 216)) {
                            // line 217
                            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 217);
                            echo "\"
\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 218
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 218);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 218);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 222);
                        echo "</span>

\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                }
                // line 233
                echo "
\t\t\t\t\t\t";
                // line 234
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "checkbox")) {
                    // line 235
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 238
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 238));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 239
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                        echo "][]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 242
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 242);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 243
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 243)) {
                            // line 244
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 244);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 245
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 245);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 245);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 248
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 248);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 250);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 250);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 252
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 258
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 258) == "text")) {
                    // line 259
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 259)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 260);
                    // line 261
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 262);
                    echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 263);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 263);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 267
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 267) == "textarea")) {
                    // line 268
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 268)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 269);
                    // line 270
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 272);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\">";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 273);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 276
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 276) == "file")) {
                    // line 277
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 277)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 278);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 279
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 279);
                    echo "\"
\t\t\t\t\t\t\t\tdata-loading-text=\"";
                    // line 280
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 282
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "]\" value=\"\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 287
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 287) == "date")) {
                    // line 288
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 288)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 289);
                    // line 290
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 293);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 294);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 303
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "datetime")) {
                    // line 304
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 305);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 305);
                    // line 306
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 309);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 319
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 319) == "time")) {
                    // line 320
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 320)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 321);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 321);
                    // line 322
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 324);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 325);
                    echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 326);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 335
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            echo "\t\t\t\t\t\t";
        }
        // line 337
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 338
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 339
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 342
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 344
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 344);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 344);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 350
        echo "

\t\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\t\t\t\taria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<img src=\"image/chart.webp\" style=\"width:100%;\" alt=\"placeholder\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group  \" style=\"margin-top: 1.5rem;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 371
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
\t\t\t\t\t\t\t\tclass=\"form-control iq\" />

\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; margin-top:-12px; max-width:300px\"
\t\t\t\t\t\t\t\tclass=\"row ml-0\">
\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\"
\t\t\t\t\t\t\t\t\t\tstyle=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\"
\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 394
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
        // line 399
        echo "\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\"
\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
        // line 401
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 404
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='float:right; max-width:49%;'
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-5 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 414
        if ((($context["minimum"] ?? null) > 1)) {
            // line 415
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t";
            // line 417
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 420
        echo "\t\t\t\t\t</div>


\t\t\t\t\t<section style=\" padding:20px 0px\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12 \">

\t\t\t\t\t\t\t\t<div style=\"background:#fff;padding:10px 10px;\" class=\" des-con\">
\t\t\t\t\t\t\t\t\t<h3 class=\"pb-3 nav-tabs \" style=\"font-size: 20px;color:#4a4975;\">Specifications
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Fabric</p>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 435
        if ((null == ($context["fabric"] ?? null))) {
            // line 436
            echo "\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 438
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["fabric"] ?? null);
            echo "</h6>";
        }
        // line 440
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Pattern</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 443
        if ((null == ($context["pattern"] ?? null))) {
            // line 444
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 446
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["pattern"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 448
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Sleeve Length</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 451
        if ((null == ($context["sleeve"] ?? null))) {
            // line 452
            echo "\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 454
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["sleeve"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 456
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Style</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 459
        if ((null == ($context["style"] ?? null))) {
            // line 460
            echo "\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 462
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["style"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 464
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Occasion</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 467
        if ((null == ($context["occasion"] ?? null))) {
            // line 468
            echo "\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 470
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["occasion"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 472
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<p>Washcare</p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 475
        if ((null == ($context["washcare"] ?? null))) {
            // line 476
            echo "\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">-</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 478
            echo "\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pb-2\" style=\"border-bottom: 1px solid gray;\">";
            echo ($context["washcare"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 480
        echo "\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-ul des-tab mt-4\" style=\"padding:10px;\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h3 style=\"color:#4a4975;font-size:20px;\">Description</h3>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div style=\"background:#fff;padding:10px 0px;\" class=\"tab-content des-con\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active p-10 fix_st\" id=\"tab-overview\">
\t\t\t\t\t\t\t\t\t\t";
        // line 493
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding:10px;\">
\t\t\t\t\t\t\t\t\t<p>100% Original Products<br>Pay on delivery might be available
\t\t\t\t\t\t\t\t\t\t<br>Easy 7 days returns and exchanges<br>Machine-wash
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div class=\"mt-4\"><img src=\"assets/img/product-icon.webp\" alt=\"Product\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>


\t</div>
</div>
";
        // line 515
        if (($context["products"] ?? null)) {
            // line 516
            echo "<section class=\"ptb-30\">
\t<div class=\"container pt-5\">
\t\t<div class=\"row text-center w-100\">
\t\t\t<div class=\"col-sm-12 w-100\">
\t\t\t\t<h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
\t\t\t\t\t<span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
\t\t\t\t</h3>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 528
                echo "\t\t\t<div class=\"col-sm-3 col-6 \" style=\"margin-top:15px;\">
\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t<a  href=\"";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 532);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 533
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 533);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 533);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 533);
                echo "\"
\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 537
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 537);
                echo "');\">
\t\t\t\t\t\t\t";
                // line 538
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 538)) {
                    // line 539
                    echo "\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 539);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 539);
                    echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
                    // line 540
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 540);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 540);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 540);
                    echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 541
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 541);
                    echo "\" style=\"color: #4a4975; font-size:24px;\"></i>
\t\t\t\t\t\t\t";
                } else {
                    // line 543
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #4a4975; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
                }
                // line 546
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 550
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 550);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 551
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 551);
                echo "</h4>

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5  mob_ts\" style=\"text-align:end;\">
\t\t\t\t\t\t\t\t\t";
                // line 556
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 556)) {
                    // line 557
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 558
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 558)) {
                        // line 559
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 559);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 561
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 561);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 562
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 562);
                        // line 563
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 565
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 565)) {
                        // line 566
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 567
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 567);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 569
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 571
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 571) == null)) {
                    // line 572
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 573
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                    // line 574
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 574);
                    echo "% OFF</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 576
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            echo "\t\t</div>
\t\t<br />
\t</div>
</section>
";
        }
        // line 592
        echo "

<script type=\"text/javascript\">

\t\$('#myModal').on('shown.bs.modal', function () {
\t\t\$('#myInput').trigger('focus')
\t})


\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
// -->
</script>
<script type=\"text/javascript\">
\t
\t\$('#button-cart').on('click', function () {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function () {
\$('#button-cart').button('loading');
},
complete: function () {
\$('#button-cart').button('reset');
},
success: function (json) {
if (json['error']) {
if (json['error']['option']) {
for (i in json['error']['option']) {
var element = \$('#input-option' + i.replace('_', '-'));

if (element.parent().hasClass('input-group')) {
element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
} else {
element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
}
}
}

if (json['error']['recurring']) {
\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
\$('.text-danger').parent().addClass('has-error');
}

if (json['success']) {

\$('.cart-counter-header').html(json['total'][0]);

setTimeout(function () {
\$(\"#cart-total\").html(json['total']);
let t = json['total'].split('-');
\$('.slide-cart-total').html(t[1]);
}, 100);

\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\$('.cart_backdrop').fadeIn();
\$(\".cart\").animate({right: '0px'})

}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
// buy now
\$('#button-buy').on('click', function () {
\t

\t\$(\"#button-cart\").click();
\tsetTimeout(function () {

\twindow.location = \"index.php?route=checkout/cart\";
\t}, 200)
\t
\t})
//
\t
</script>
<script type=\"text/javascript\">
\t
\t\$('.date').datetimepicker({language: '";
        // line 696
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 698
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 700
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//
\t
</script>
<script type=\"text/javascript\">

\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=     ";
        // line 768
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=     ";
        // line 772
        echo ($context["product_id"] ?? null);
        echo "',
type: 'post',
dataType: 'json',

              data: new FormData(\$('#form-review')[0]),
                cache: false,
                contentType: false,
                processData: false,
\t\t\t\t error: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t},
            
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\$('input[name=\\'name\\']').val('');
\$('textarea[name=\\'text\\']').val('');
\$('input[name=\\'rating\\']:checked').prop('checked', false);
}
}
});
});


\$(document).ready(function () {
\$(\"#add_quantity\").click(function () {
console.log('Adding quantity');
var b = Number(\$(\"#input-quantity\").val()) + 1;

\$(\".iq\").val(b);
})
\$(\"#less_quantity\").click(function () {
var b = Number(\$(\"#input-quantity\").val()) - 1;
if (b < 0) {
b = 0;
}
\$(\".iq\").val(b);
})


var slides_to_show = 3;
\$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: true,
fade: false,
infinite: true,
asNavFor: '.slider-nav',
nextArrow: '<button style=\"width: 25px;top: 150px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
prevArrow: '<button style=\"width: 25px;top: 150px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

});
\$('.slider-nav').slick({
slidesToShow: slides_to_show,
vertical: true,
slidesToScroll: 1,
asNavFor: '.slider-for',
dots: false,
arrows: false,

focusOnSelect: true

});

\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
//
\t 
</script>

<script>
\tconst zoom = document.querySelector(\".zoom\");
\tzoom.addEventListener(\"click\", () => {
\t\t\$('.zoom').zoom({ magnify: '2.5' });
\t});
</script>
<script>
\t// Initiate zoom effect:
\timageZoom(\"myimage\", \"myresult\");
</script>

<script>
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
\tconst imagePopup = document.querySelector(\".imagePopup\");
\tconst mainImages = document.querySelectorAll(\".mainImage\");


\tmainImages.forEach(eImage => {
\t\teImage.addEventListener(\"click\", () => {
\t\t\tlet dataIndex = 0;

\t\t\tlet Index = eImage.closest(\"li\").getAttribute(\"data-index\");
\t\t\tdataIndex = Number(Index);

\t\t\tif (imagePopup.classList.contains(\"hidden\")) {
\t\t\t\timagePopup.classList.remove(\"hidden\");
\t\t\t\tconst imagePopupSlider = new Splide(\"#imagePopup\", {
\t\t\t\t\tperPage: 1,
\t\t\t\t\ttype: 'loop',
\t\t\t\t\tstart: dataIndex
\t\t\t\t});
\t\t\t\timagePopupSlider.mount();
\t\t\t}
\t\t});
\t});

\timagePopupClose.addEventListener(\"click\", () => {
\t\timagePopup.classList.add(\"hidden\");
\t});


\tvar fade_state = false;
\tlet add = document.getElementsByClassName(\"add\");
\tfor (i = 0; i < add.length; i++) {
\t\tadd[i].style.display = 'none';
\t}
\tlet remove = document.getElementsByClassName(\"remove\");
\tfor (i = 0; i < remove.length; i++) {
\t\tremove[i].style.display = 'block';
\t}
\t// on btn click
\tfunction fade() { // get the button and div

\t\tlet add = document.getElementsByClassName(\"add\");
\t\tfor (i = 0; i < add.length; i++) {
\t\t\tadd[i].style.display = 'none';
\t\t}
\t\tlet remove = document.getElementsByClassName(\"remove\");
\t\tfor (i = 0; i < remove.length; i++) {
\t\t\tremove[i].style.display = 'block';
\t\t}


\t\tlet btn = document.getElementById(\"fade\");
\t\t// if faded in or out

\t\tconsole.log(fade_state)

\t\tif (fade_state == true) { // trigers animation
\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tremove[i].style.display = 'block';
\t\t\t}
\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = false;
\t\t\tconsole.log(fade_state);

\t\t} else if (fade_state == false) { // trigers animation
\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\tremove[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'block';
\t\t\t}

\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = true;


\t\t}

\t}
</script>
";
        // line 962
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1694 => 962,  1501 => 772,  1494 => 768,  1423 => 700,  1418 => 698,  1413 => 696,  1307 => 592,  1300 => 587,  1284 => 576,  1279 => 574,  1276 => 573,  1273 => 572,  1270 => 571,  1266 => 569,  1261 => 567,  1256 => 566,  1253 => 565,  1249 => 563,  1247 => 562,  1242 => 561,  1236 => 559,  1234 => 558,  1231 => 557,  1229 => 556,  1221 => 551,  1217 => 550,  1211 => 546,  1206 => 543,  1201 => 541,  1193 => 540,  1186 => 539,  1184 => 538,  1180 => 537,  1169 => 533,  1165 => 532,  1159 => 528,  1155 => 527,  1142 => 516,  1140 => 515,  1115 => 493,  1100 => 480,  1094 => 478,  1090 => 476,  1088 => 475,  1083 => 472,  1077 => 470,  1073 => 468,  1071 => 467,  1066 => 464,  1060 => 462,  1056 => 460,  1054 => 459,  1049 => 456,  1043 => 454,  1039 => 452,  1037 => 451,  1032 => 448,  1026 => 446,  1022 => 444,  1020 => 443,  1015 => 440,  1010 => 438,  1006 => 436,  1004 => 435,  987 => 420,  981 => 417,  977 => 415,  975 => 414,  962 => 404,  956 => 401,  952 => 399,  947 => 394,  921 => 371,  898 => 350,  892 => 346,  881 => 344,  877 => 343,  873 => 342,  867 => 339,  864 => 338,  861 => 337,  858 => 336,  852 => 335,  840 => 326,  836 => 325,  832 => 324,  828 => 322,  824 => 321,  817 => 320,  814 => 319,  802 => 310,  798 => 309,  794 => 308,  790 => 306,  786 => 305,  779 => 304,  776 => 303,  764 => 294,  760 => 293,  756 => 292,  752 => 290,  748 => 289,  741 => 288,  738 => 287,  732 => 284,  728 => 283,  724 => 282,  719 => 280,  715 => 279,  711 => 278,  704 => 277,  701 => 276,  695 => 273,  689 => 272,  685 => 271,  682 => 270,  678 => 269,  671 => 268,  668 => 267,  659 => 263,  653 => 262,  650 => 261,  646 => 260,  639 => 259,  636 => 258,  631 => 255,  623 => 252,  616 => 250,  614 => 249,  609 => 248,  595 => 245,  590 => 244,  588 => 243,  584 => 242,  580 => 241,  576 => 239,  572 => 238,  568 => 237,  564 => 236,  557 => 235,  555 => 234,  552 => 233,  544 => 227,  533 => 222,  530 => 221,  516 => 218,  511 => 217,  509 => 216,  505 => 215,  501 => 214,  497 => 213,  493 => 212,  489 => 210,  485 => 209,  466 => 193,  459 => 192,  456 => 191,  451 => 188,  439 => 185,  435 => 184,  431 => 183,  427 => 182,  423 => 181,  416 => 179,  409 => 178,  406 => 177,  402 => 176,  398 => 174,  396 => 173,  392 => 171,  387 => 168,  380 => 166,  372 => 165,  365 => 164,  363 => 163,  358 => 162,  352 => 158,  349 => 157,  338 => 155,  334 => 154,  329 => 151,  326 => 150,  321 => 148,  316 => 147,  313 => 146,  308 => 144,  303 => 143,  301 => 142,  296 => 139,  289 => 135,  286 => 134,  284 => 133,  279 => 131,  275 => 129,  269 => 126,  266 => 125,  264 => 124,  260 => 122,  258 => 121,  254 => 120,  250 => 119,  245 => 116,  241 => 114,  238 => 113,  229 => 110,  223 => 109,  220 => 108,  215 => 107,  212 => 106,  205 => 104,  200 => 103,  198 => 102,  195 => 101,  193 => 100,  188 => 97,  184 => 95,  181 => 94,  168 => 91,  165 => 90,  160 => 89,  157 => 88,  147 => 86,  145 => 85,  142 => 84,  140 => 83,  134 => 80,  122 => 70,  110 => 66,  107 => 65,  103 => 64,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
