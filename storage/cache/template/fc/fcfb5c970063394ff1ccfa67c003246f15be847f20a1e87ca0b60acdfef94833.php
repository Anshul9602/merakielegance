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

/* default/template/product/category.twig */
class __TwigTemplate_2c57202cd45810a74e1b3f9291477f6c4bf74c80eb865a246c41ee7eced49d57 extends \Twig\Template
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
\t.real_pro-img {
\t\tpadding: 3px;
\t}

\t.nice-select {
\t\tfloat: right;
\t\tbackground: transparent;
\t\tborder: none;
\t\tmax-width: 140px;
\t\tbackground: #fff;
\t}

\t.pagination li {
\t\tpadding: 5px 10px 2px;
\t\tfont-size: 12px;
\t}

\t.pagination li a {
\t\tcolor: #666;
\t}

\t.pagination li.active {
\t\tbackground: #003B30;
\t\tcolor: #fff;
\t}

\t.product-card {
\t\tmargin: auto;
\t\tbox-shadow: 0 4px 8px 0 rgba(131, 129, 129, 0.6);
\t\tborder-radius: 0;
\t\tbackground: #fff;
\t\theight: auto;
\t\ttext-align: left;
\t}
\t.product-card-body {
\t\tpadding-left: 5px;
\t}
\t.product_name {
\t\tmargin-top: 7.5px;

\t\tfont-size: 16px;
\t}
\t.sub-title {
\t\tcolor: #999;
\t\ttext-transform: uppercase;
\t\tfont-size: 10px;
\t\tmargin-top: -14px;
\t}


\t#mobile_filter {
\t\tdisplay: none;
\t}


\t.p-card-holder {
\t\tpadding: 5px;
\t}

\t.wishlist_link {
\t\tposition: absolute;
\t\ttop: 15px;
\t\tright: 15px;
\t\tborder-radius: 50%;
\t\tbackground: rgb(255, 255, 255, 0.5);
\t\tcursor: pointer;
\t\twidth: 37px;
\t\theight: 37px;
\t\ttext-align: center;
\t}
\t.wishlist_link i {
\t\tline-height: 38px;
\t}
\t@media screen and(max-width:789px) {
\t\t.product_name {
\t\t\tfont-size: 12px !important;
\t\t\tmargin-top: 5px;
\t\t}
\t\t.price_new {
\t\t\tfont-size: 12px !important;
\t\t\tmargin-top: 5px;
\t\t}

\t\t#mobile_filter {
\t\t\tdisplay: inline;
\t\t\tfloat: right;
\t\t\tcursor: pointer;
\t\t\tcolor: #333;
\t\t}
.mob_st{
\ttext-align: start !important;
}
\t\t.nice-select {
\t\t\tmargin-right: 30px;
\t\t\tmargin-top: -28px;
\t\t}

\t\t.p-card {
\t\t\tpadding: 2px !important;
\t\t}

\t\t.product-card {
\t\t\tbox-shadow: 0 2.5px 5px 0 rgba(131, 129, 129, 0.4);
\t\t\tborder-radius: 0;
\t\t\theight: auto !important;
\t\t}

\t\t.mt-4 {
\t\t\tmargin-top: 5px;
\t\t}
\t}
\t.alert-dismissible{
\t\tdisplay: none;
\t}
</style>
<script>
\t\$(document).ready(function () {
\$(\"#mobile_filter\").click(function (e) {
e.preventDefault();
\$(\".backdrop-filter\").fadeIn();
\$(\".filter-panel\").animate({left: '0px'})
})
\$(\".backdrop-filter\").click(function () {
\$(\".backdrop-filter\").fadeOut();
\$(\".filter-panel\").animate({left: '-260px'})
})

})
</script>
<section style=\"background:#fcfcfc\">
\t<div id=\"product-category\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
\t\t\t\t";
        // line 136
        if (($context["products"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 140
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 143
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 150
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 153) == ($context["limit"] ?? null))) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 154);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 154);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 156);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 156);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:20px;float:left;\" class=\"row\">



\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"float:right;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div style='padding-top:12px' class=\"col-sm-6 hide-phone\">
\t\t\t\t\t\t\t\t\t";
            // line 170
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6  text-right\">
\t\t\t\t\t\t\t\t\t<a id=\"mobile_filter\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-filter\"></li>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 178) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 179);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 179);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 181);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 181);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mt-10\"/>
\t\t\t\t\t\t\t<div style=\"margin-top:-20px\" class=\"row \">
\t\t\t\t\t\t\t\t";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-4 p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 193);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 194);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 194);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 194);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 197);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 199);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 199);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 199);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 199);
                    echo " \" btnpercent=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 199);
                    echo "\" style=\"color: #4a4975; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #4a4975; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\" style=\"padding-bottom:15px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 208);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 209);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5  mob_ts\" style=\"text-align: end;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 214
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 214)) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 216
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 216)) {
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 217);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 219);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 220);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 222)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 224);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 228);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 243
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br/><br/>
\t\t\t\t";
        }
        // line 249
        echo "\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 250
            echo "\t\t\t\t\t<p class=\"text-center d-flex justify-content-center\" style=\"min-height:300px;align-items: center;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 253
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 257
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 262
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 262,  453 => 257,  444 => 253,  437 => 250,  434 => 249,  425 => 243,  420 => 240,  401 => 228,  397 => 226,  392 => 224,  387 => 223,  384 => 222,  379 => 220,  374 => 219,  368 => 217,  366 => 216,  363 => 215,  361 => 214,  353 => 209,  349 => 208,  343 => 204,  338 => 201,  320 => 199,  318 => 198,  314 => 197,  304 => 194,  300 => 193,  295 => 190,  291 => 189,  284 => 184,  278 => 183,  270 => 181,  262 => 179,  259 => 178,  255 => 177,  245 => 170,  232 => 159,  226 => 158,  218 => 156,  210 => 154,  207 => 153,  203 => 152,  198 => 150,  188 => 143,  182 => 140,  177 => 137,  175 => 136,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
