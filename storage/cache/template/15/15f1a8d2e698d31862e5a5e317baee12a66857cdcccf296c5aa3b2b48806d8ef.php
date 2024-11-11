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
class __TwigTemplate_ba7688efef5c498a7c34306fe7a49fc79df7c53b56841b97c7302e989aed5b9d extends \Twig\Template
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

<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"assets/css/plugins/theme.css\" />

<style>
.select-box .text-danger{
position:absolute;
margin-top:-30px;
left:60px;
}
\t.image-additional {
\t\tposition: relative;
\t}

\t.hide-desktop {
\t\tdisplay: none;
\t}

\t.img-zoom-lens {
\t\tposition: absolute;
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the lens:*/
\t\twidth: 40px;
\t\theight: 40px;
\t}

\t.img-zoom-result {
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the result div:*/
\t\twidth: 100%;
\t\theight: 400px;
\t}

\t.hidden {
\t\tdisplay: none;
\t}

\t.pImageMain {
\t\twidth: 50%;
\t\theight: 95vh;
\t}

\t/* // imagePopup */
\t.imagePopup {
\t\tposition: fixed;
\t\ttop: 50%;
\t\tleft: 50%;
\t\ttransform: translate(-50%, -50%);
\t\twidth: 100%;
\t\theight: 100vh;
\t\tz-index: 9000;
\t\ttransition: all 300ms ease-in-out;

\t}

\t.imagePopupBg {
\t\tbackground: #1e1e1e;
\t\topacity: 0.87;
\t\tposition: absolute;
\t\tinset: 0;
\t\ttransition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1);
\t\ttransition-property: opacity;
\t}


\t.imagePopupContainer .splide__arrow {
\t\ttop: 40%;
\t\tpadding: 8px;
\t\tbackground-color: rgba(255, 255, 255, 0.6);
\t}

\t.imagePopupContainer .splide__arrow {
\t\tz-index: 99999;
\t\tcursor: pointer;
\t}

\t.des-tab .active {
\t\tbackground-color: rgba(0, 0, 0, .03);
\t}

\t@media screen and (max-width:750px) {

\t\t.btn-round.slick-arrow {
\t\t\tdisplay: none !important;
\t\t}

\t\t.mt-10 {
\t\t\tmargin-top: 10px;
\t\t}
\t\t.product-name{
\t\t\tfont-size:24px;
\t\t}
\t}

\t

\t.list-group-item {
\t\tdisplay: none !important;
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
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 112
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 112);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 112);
            echo "</a></li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product mt-10\" style=\"padding:0 7%;\">
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 125
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1 hide_phone\">
\t\t\t\t\t";
        // line 128
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 129
            echo "\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t";
            // line 130
            if (($context["thumb"] ?? null)) {
                // line 131
                echo "\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t<img src=\"";
                // line 132
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\talt=\"";
                // line 133
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 138
                    echo "\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 139);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 140
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 149
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 150
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 151
            if (($context["thumb"] ?? null)) {
                // line 152
                echo "\t\t\t\t\t\t<li><img class=\"mainImage\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\talt=\"";
                // line 153
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 156
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 157
                    echo "\t\t\t\t\t\t<li class=\"image-additional \">
\t\t\t\t\t\t\t<img class=\"mainImage\" src=\"";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 158);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 159
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 165
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"py-2 imagePopup hidden\">
\t\t\t\t\t<div class=\"imagePopupBg \"></div>
\t\t\t\t\t<div class=\"imagePopupClose absolute right-0 py-1 flex justify-end z-[9001] cursor-pointer\"
\t\t\t\t\t\tstyle=\"top:50px;height:100px;width: 100px;z-index: 99999;  cursor: pointer;    text-align: end;right:30px;  position: absolute;\">
\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\" style=\"color: aliceblue;font-size:50px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"imagePopupContainer py-2 z-[9111] relative mt-10\">
\t\t\t\t\t\t<div class=\"splide relative \" id=\"imagePopup\" role=\"group\"
\t\t\t\t\t\t\taria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t\t\t<div class=\"splide__track max-w-[670px] mx-auto imagePopupClose\" style=\"z-index:9999;\">
\t\t\t\t\t\t\t\t";
        // line 181
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 182
            echo "\t\t\t\t\t\t\t\t<ul class=\"splide__list \" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t";
            // line 183
            if (($context["thumb"] ?? null)) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide min-h-[900px] d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pImageMain zoom d-flex\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"    align-items: center;cursor: zoom-in !important;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 187
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"\" style=\"\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide min-h-[900px] d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pImageMain zoom d-flex\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"    align-items: center;cursor: zoom-in !important;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 198);
                    echo "\" alt=\"\" style=\"\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 204
            echo "

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 mt-3\">
\t\t\t\t\t<h1 class=\"text-capitalize product-name\">";
        // line 215
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t";
        // line 216
        if (($context["review_status"] ?? null)) {
            // line 217
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<p>";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 219
                echo "\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
\t\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 220
                    echo "<span class=\"fa fa-stack\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-star fa-stack-1x\"></i><i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 223
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
        // line 227
        if (($context["manufacturer"] ?? null)) {
            // line 228
            echo "\t\t\t\t\t\t<li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t";
        if (($context["reward"] ?? null)) {
            // line 231
            echo "\t\t\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
\t\t\t\t\t\t";
        }
        // line 233
        echo "\t\t\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 235
        if (($context["price"] ?? null)) {
            // line 236
            echo "\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 237
            if ( !($context["special"] ?? null)) {
                // line 238
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h2 id=\"p_pr\">";
                // line 239
                echo ($context["price"] ?? null);
                echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t<li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h2>";
                // line 244
                echo ($context["special"] ?? null);
                echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 247
            echo "\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 248
                echo "\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t";
            }
            // line 250
            echo "\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 251
                echo "\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 254
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 258
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 258);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 258);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "\t\t\t\t\t\t";
            }
            // line 261
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<br>

\t\t\t\t\t";
        }
        // line 265
        echo "\t\t\t\t\t<div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 266
            echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 269
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 269) == "select")) {
                    // line 270
                    echo "\t\t\t\t\t\t<h5 class=\"mb-2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 270);
                    echo "</h5>
\t\t\t\t\t\t<div class=\"select-box form-group";
                    // line 271
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 271)) {
                        echo " required ";
                    }
                    echo " d-flex mb-2\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "\"></label>
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                    echo "]\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    echo "\" style=\"width: auto;\" class=\"form-control sizes\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 275
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 276
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 276));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 277
                        echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t data-sign=\"";
                        // line 278
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 278);
                        echo "\"
\t\t\t\t\t\t\t\t data-price=\"";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 279);
                        echo "\"
\t\t\t\t\t\t\t\t value=\"";
                        // line 280
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 280);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 280);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 281
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 281)) {
                            // line 282
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 282);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 282);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 283
                        echo " </option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 285
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 289) == "radio")) {
                    // line 290
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 290)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 291);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 293
$context["option"], "product_option_value", [], "any", false, false, false, 293));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 296
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 297
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 297);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 298
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 298)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 298);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 299
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 299);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 299)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 299);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 299);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" /> ";
                        }
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 301);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 302
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 302)) {
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 303);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 303);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 304
                        echo " </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 307
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 310
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 310) == "checkbox")) {
                    // line 311
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 311)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 312);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 314
$context["option"], "product_option_value", [], "any", false, false, false, 314));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 315
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 317
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 317);
                        echo "][]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 318
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 318);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 319
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 319)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 319);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 320
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 320);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 320)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 320);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 320);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" /> ";
                        }
                        // line 322
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 322);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 323
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 323)) {
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 324);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 324);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 325
                        echo " </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 328
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 331
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 331) == "text")) {
                    // line 332
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 332)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 333
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 333);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 333);
                    // line 334
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 335);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 335);
                    echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 336
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 336);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 336);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 340
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 340) == "textarea")) {
                    // line 341
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 341)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 342);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 342);
                    // line 343
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 344
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 344);
                    echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 345);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 345);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\">";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 346);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 349
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 349) == "file")) {
                    // line 350
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 350)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 351);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 352
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 352);
                    echo "\"
\t\t\t\t\t\t\t\tdata-loading-text=\"";
                    // line 353
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i
\t\t\t\t\t\t\t\t\tclass=\"fa fa-upload\"></i> ";
                    // line 354
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 355
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 355);
                    echo "]\" value=\"\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 359) == "date")) {
                    // line 360
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 360)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 361);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 361);
                    // line 362
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 364
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 364);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 365
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 365);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 374
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 374) == "datetime")) {
                    // line 375
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 375)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 376);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 376);
                    // line 377
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 379
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 379);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 380);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 381
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 381);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 389
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 389) == "time")) {
                    // line 390
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 390)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 391
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 391);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 391);
                    // line 392
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 394
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 394);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 395);
                    echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 396);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 404
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            echo "\t\t\t\t\t\t";
        }
        // line 406
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 407
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 408
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 411
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 413
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 413);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 413);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 415
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 419
        echo "


\t\t\t\t\t\t<div class=\"form-group\" style=\"width:100%;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 423
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
\t\t\t\t\t\t\t\tclass=\"form-control iq\" />
\t\t\t\t\t\t\t<div id=\"counter-btn \" style=\" max-width:200px\" class=\"row m-0\">
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
        // line 442
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%; padding:14px 30px;' id=\"button-cart\"
\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
        // line 446
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 449
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\"
\t\t\t\t\t\t\t\t\tstyle='float:right;max-width:49%;background-color:#FBCACD; padding:14px 30px; color:black'
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-6 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>



\t\t\t\t\t\t";
        // line 463
        if ((($context["minimum"] ?? null) > 1)) {
            // line 464
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 466
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<a style=\"color: #582254; cursor:pointer; font-size:16px;\" onclick=\"wishlist.add('";
        // line 468
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t<i class=\"pe-7s-like\"  style=\"color: #582254; font-size:16px;\"></i>Add to Wishlist
\t\t\t\t\t</a>
\t\t\t\t\t<hr/>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 hide_phone\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-ul des-tab\">
\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-overview\" class=\"active btn\" data-toggle=\"tab\"
\t\t\t\t\t\t\t\t\t\tstyle=\"color: #582254;\">DETAILS</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-care\" class=\"btn\" data-toggle=\"tab\" style=\"color: #582254;\">WASH
\t\t\t\t\t\t\t\t\t\tCARE</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-delivery\" class=\"btn\" data-toggle=\"tab\"
\t\t\t\t\t\t\t\t\t\tstyle=\"color: #582254;\">SHIPPING</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li style=\"display:none\">
\t\t\t\t\t\t\t\t\t<a href=\"#tab-delivery\" class=\"btn\" data-toggle=\"tab\"
\t\t\t\t\t\t\t\t\t\tstyle=\"color: #582254;\">INSPIRATION</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div style=\"background:#fff;padding:10px 10px;\"
\t\t\t\t\t\t\t\tclass=\"tab-content des-con\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active p-10\" id=\"tab-overview\">
\t\t\t\t\t\t\t\t\t";
        // line 496
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-care\">
\t\t\t\t\t\t\t\t\t";
        // line 501
        echo ($context["meta_desc"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\">
\t\t\t\t\t\t\t\t\t";
        // line 506
        echo ($context["p_shipping"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12 hide-desktop\">
\t\t\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq1\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"faq1\">DETAILS</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse show\" aria-labelledby=\"faqhead1\"
\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 524
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead2\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq2\" aria-expanded=\"true\" aria-controls=\"faq2\">WASH
\t\t\t\t\t\t\t\t\t\tCARE</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 537
        echo ($context["meta_desc"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq3\" aria-expanded=\"true\" aria-controls=\"faq3\">SHIPPING</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq3\" class=\"collapse\" aria-labelledby=\"faqhead3\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq4\" aria-expanded=\"false\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"faq4\">INSPIRATION</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"faq4\" class=\"collapse\" aria-labelledby=\"faqhead4\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#faq4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t
\t\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 584
        if (($context["products"] ?? null)) {
            // line 585
            echo "\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr />
\t\t\t<div class=\"row\"> ";
            // line 593
            $context["i"] = 0;
            // line 594
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 595
                echo "\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 596
                    echo "\t\t\t\t";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 597
                    echo "\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 598
                    echo "\t\t\t\t";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 599
                    echo "\t\t\t\t";
                } else {
                    // line 600
                    echo "\t\t\t\t";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 601
                    echo "\t\t\t\t";
                }
                // line 602
                echo "\t\t\t\t<div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 604
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 604);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 604);
                echo "\"
\t\t\t\t\t\t\t\t\talt=\"";
                // line 605
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 605);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 605);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t\t<h4 class=\"mt-10\">";
                // line 608
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 608);
                echo "</h4>
\t\t\t\t\t\t\t";
                // line 609
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 609)) {
                    // line 610
                    echo "\t\t\t\t\t\t\t<div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 611
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 611) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            // line 612
                            echo " <span
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 615
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
\t\t\t\t\t\t\t";
                }
                // line 617
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 617)) {
                    // line 618
                    echo "\t\t\t\t\t\t\t<p class=\"price\" style=\"margin-top:-5px\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 618)) {
                        // line 619
                        echo "\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 619);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 620
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 620);
                        echo "</span> <span
\t\t\t\t\t\t\t\t\tclass=\"price-old\">";
                        // line 621
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 621);
                        echo "</span> ";
                    }
                    // line 622
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 622)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 622);
                        echo "</span> ";
                    }
                    // line 623
                    echo " </p>
\t\t\t\t\t\t\t";
                }
                // line 625
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 628
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 629
                    echo "\t\t\t\t<div class=\"clearfix visible-md visible-sm\"></div>
\t\t\t\t";
                } elseif ((                // line 630
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 631
                    echo "\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t";
                } elseif ((((                // line 632
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 633
                    echo "\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t";
                }
                // line 635
                echo "\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 636
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 639
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 640
            echo "\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t";
            // line 641
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 642
                echo "\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 642);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 642);
                    echo "</a>,
\t\t\t\t\t";
                } else {
                    // line 643
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 643);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 643);
                    echo "</a> ";
                }
                // line 644
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
\t\t\t";
        }
        // line 646
        echo "\t\t</div>
\t</div>
</div>
<br /><br />
<script type=\"text/javascript\">

\$(document).ready(function () {
\tvar add =0;
\t\$(\"#button-buy\").click(function(){
\t\t\$(\"#button-cart\").click();
\t\tif(add){
\t\t\tsetTimeout(function(){
window.location=\"index.php?route=checkout/cart\";
\t\t\t},200)
\t\t\t
\t\t}
\t})
\t
\tif(\$(\"#p_pr\").text().includes('₹')){
\t\tvar curren = '₹';
\t}else{
\t\tvar curren = '\$';
\t}

var old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#₹\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));

\$('.sizes').change(function () {

\tvar p = \$(this).find(\":selected\").attr('data-price');
\tvar sig = \$(this).find(\":selected\").attr('data-sign');
\tvar q = p.replace(/[`~!@#\$₹%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
\tvar x = Number(q);

\tif (sig == \"+\") {
\tvar new_p = old_price + x;
\t} else {
\tvar new_p = old_price - x;
\t}
\t\$(\"#p_pr\").text(curren+' '+ new_p.toFixed(2));

});




var h = \$(\"#tab-care\").html();
\$(\"#tab-care\").html('');
h = h.split('-');
if(h[0].includes(\"\\t\")){
    h.splice(0, 1);
 
}

h.forEach(function(e){
\t\$(\"#tab-care\").append('-'+e);
\t\$(\"#tab-care\").append('<br />');
})


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
})\t
</script>
<script type=\"text/javascript\">
\t\$('#button-cart').on('click', function () {
\t\tadd = 0;
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tadd =1;
\t\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);

\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\$(\".cart\").animate({ right: '0px' })

\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t\$(\"#add_quantity\").click(function () {

\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\$(\".iq\").val(b);
\t})
\t\$(\"#less_quantity\").click(function () {
\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;
\t\tif (b < 0) {
\t\t\tb = 0;
\t\t}
\t\t\$(\".iq\").val(b);
\t})
//--></script>
<script type=\"text/javascript\">
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 800
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 805
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
\t});

\t\$('.time').datetimepicker({
\t\tlanguage: '";
        // line 811
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
//--></script>
<script type=\"text/javascript\">
\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\te.preventDefault();

\t\t\$('#review').fadeOut('slow');

\t\t\$('#review').load(this.href);

\t\t\$('#review').fadeIn('slow');
\t});

\t\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 878
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 882
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {


\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 150px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 150px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true

\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});


\tconst zoom = document.querySelector(\".zoom\");
\tzoom.addEventListener(\"click\", () => {
\t\t\$('.zoom').zoom({ magnify: '2.5' });
\t});
</script>
";
        // line 957
        echo "
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











//--></script>





";
        // line 1066
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
        return array (  1862 => 1066,  1751 => 957,  1678 => 882,  1671 => 878,  1601 => 811,  1592 => 805,  1584 => 800,  1428 => 646,  1419 => 644,  1412 => 643,  1402 => 642,  1398 => 641,  1393 => 640,  1390 => 639,  1386 => 637,  1380 => 636,  1377 => 635,  1373 => 633,  1371 => 632,  1368 => 631,  1366 => 630,  1363 => 629,  1361 => 628,  1356 => 625,  1352 => 623,  1343 => 622,  1339 => 621,  1334 => 620,  1328 => 619,  1325 => 618,  1322 => 617,  1313 => 615,  1308 => 612,  1302 => 611,  1297 => 610,  1295 => 609,  1291 => 608,  1283 => 605,  1277 => 604,  1271 => 602,  1268 => 601,  1265 => 600,  1262 => 599,  1259 => 598,  1256 => 597,  1253 => 596,  1250 => 595,  1245 => 594,  1243 => 593,  1233 => 585,  1231 => 584,  1181 => 537,  1165 => 524,  1144 => 506,  1136 => 501,  1128 => 496,  1097 => 468,  1093 => 466,  1087 => 464,  1085 => 463,  1068 => 449,  1062 => 446,  1055 => 442,  1033 => 423,  1027 => 419,  1021 => 415,  1010 => 413,  1006 => 412,  1002 => 411,  996 => 408,  993 => 407,  990 => 406,  987 => 405,  981 => 404,  970 => 396,  966 => 395,  962 => 394,  958 => 392,  954 => 391,  947 => 390,  944 => 389,  933 => 381,  929 => 380,  925 => 379,  921 => 377,  917 => 376,  910 => 375,  907 => 374,  896 => 366,  892 => 365,  888 => 364,  884 => 362,  880 => 361,  873 => 360,  870 => 359,  864 => 356,  860 => 355,  856 => 354,  852 => 353,  848 => 352,  844 => 351,  837 => 350,  834 => 349,  828 => 346,  822 => 345,  818 => 344,  815 => 343,  811 => 342,  804 => 341,  801 => 340,  792 => 336,  786 => 335,  783 => 334,  779 => 333,  772 => 332,  769 => 331,  764 => 328,  756 => 325,  749 => 324,  747 => 323,  742 => 322,  729 => 320,  723 => 319,  719 => 318,  715 => 317,  711 => 315,  708 => 314,  704 => 313,  700 => 312,  693 => 311,  690 => 310,  685 => 307,  677 => 304,  670 => 303,  668 => 302,  663 => 301,  650 => 299,  644 => 298,  640 => 297,  636 => 296,  632 => 294,  629 => 293,  625 => 292,  621 => 291,  614 => 290,  611 => 289,  605 => 285,  598 => 283,  591 => 282,  589 => 281,  583 => 280,  579 => 279,  575 => 278,  572 => 277,  568 => 276,  564 => 275,  560 => 274,  556 => 273,  552 => 272,  546 => 271,  541 => 270,  538 => 269,  534 => 268,  530 => 266,  527 => 265,  521 => 261,  518 => 260,  507 => 258,  503 => 257,  498 => 254,  495 => 253,  487 => 251,  484 => 250,  476 => 248,  473 => 247,  467 => 244,  461 => 242,  455 => 239,  452 => 238,  450 => 237,  447 => 236,  445 => 235,  437 => 233,  429 => 231,  426 => 230,  416 => 228,  414 => 227,  411 => 226,  401 => 223,  396 => 220,  390 => 219,  386 => 218,  383 => 217,  381 => 216,  377 => 215,  368 => 208,  362 => 204,  359 => 203,  348 => 198,  343 => 195,  338 => 194,  335 => 193,  326 => 187,  321 => 184,  319 => 183,  316 => 182,  314 => 181,  296 => 165,  292 => 163,  289 => 162,  280 => 159,  274 => 158,  271 => 157,  266 => 156,  263 => 155,  258 => 153,  251 => 152,  249 => 151,  246 => 150,  244 => 149,  239 => 146,  235 => 144,  232 => 143,  223 => 140,  217 => 139,  214 => 138,  209 => 137,  206 => 136,  200 => 133,  194 => 132,  191 => 131,  189 => 130,  186 => 129,  184 => 128,  178 => 125,  166 => 115,  154 => 112,  150 => 111,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
