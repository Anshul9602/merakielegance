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

/* default/template/common/home.twig */
class __TwigTemplate_6d9b2d0dd3db6f51862ffa5cc76dd67f885c4fbcaed626807691c1bbaa458a88 extends \Twig\Template
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
\t.separation {
\t\tpadding-top: 1.5rem;
\t\tpadding-bottom: 0.5rem;
\t}

\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 12px;
\t\ttop: 22px;
\t\tbackground: #4a4975;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 25px 0px 15px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}

\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 10px;
\t\ttop: 22px;
\t\tbackground: #4a4975;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 15px 0px 10px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}

\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}

\t.heading3.bold {
\t\tfont-weight: 700;
\t}

\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}

\t.heading3 {
\t\tfont-size: 40px;
\t\tline-height: 40px;
\t\tcolor: #4a4975;
\t\tfont-weight: 400;
\t}

\t.elastic-link {
\t\tposition: relative;
\t\ttext-align: center;
\t\tpadding: 0;
\t\tfont-size: 14px;
\t\tdisplay: inline-block;
\t\twidth: auto;
\t\theight: 1.25em;
\t\tfont-weight: 600;
\t\t-moz-transition: width 0.3s ease-out;
\t\t-o-transition: width 0.3s ease-out;
\t\t-webkit-transition: width 0.3s ease-out;
\t\ttransition: width 0.3s ease-out;
\t\tz-index: 0;
\t}

\t.card .card-title {
\t\tfont-size: 14px;
\t\tline-height: 14px;
\t\tcolor: #832729;
\t\tfont-weight: bold;
\t}

\t.serv-name3 {
\t\tposition: absolute;
\t\tfont-weight: 800;

\t\tcolor: white;
\t\tpadding: 5px 35px;
\t\tfont-family: 'Work Sans', sans-serif;
\t\tfont-size: 18px;


\t}

\t.btn-primary {
\t\tbackground: #fff;
\t\tcolor: #000;
\t\tfont-weight: 800;
\t\tborder-radius: 33px;
\t}
</style>
<style>
\t.home-testimonial {
\t\tbackground-color:#c1d2e6;
\t\theight: 350px
\t}

\t.home-testimonial-bottom {
\t\t
\t\ttransition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
\t\tmargin-top: 20px;
\t\tmargin-bottom: 0;
\t\tposition: relative;
\t\theight: 130px;
\t\ttop: 190px
\t}

\t.home-testimonial h3 {
\t\tcolor: #4a4975;
\t\tfont-size: 16px;
\t\tfont-weight: 900;
\t\t
\t}

\t.home-testimonial h2 {
\t\tcolor: white;
\t\tfont-size: 28px;
\t\tfont-weight: 700
\t}

\t.testimonial-inner {
\t\tposition: relative;
\t\ttop: -174px
\t}

\t.testimonial-pos {
\t\tposition: relative;
\t\ttop: 24px
\t}

\t.testimonial-inner .tour-desc {
\t\tborder-radius: 5px;
\t\tpadding: 40px;
\t\tbackground-color: #4a4975 !important;

\t}

\t.color-grey-3 {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2;
\t}

.tour-text{
\tcolor: #fff !important;
}
.link-name{
\tcolor:#fff !important;
}
.link-position{
\tcolor:#fff !important;
}
\t.testimonial-inner img.tm-people {
\t\twidth: 60px;
\t\theight: 60px;
\t\t-webkit-border-radius: 50%;
\t\tborder-radius: 50%;
\t\t-o-object-fit: cover;
\t\tobject-fit: cover;
\t\tmax-width: none
\t}

\t.link-name {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}

\t.link-position {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #6c83a2
\t}


\t@media screen and(max-width:1800px) {
\t\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 10px;
\t\ttop: 22px;
\t\tbackground: #4a4975;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 20px 0px 10px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}
\t}
\t@media screen and(max-width:750px) {
\t\t.hide_phone {
\t\t\tdisplay: none;
\t\t}

\t\t.product-card {
\t\t\theight: auto;
\t\t}

\t\t.slider_banner {
\t\t\twidth: 100%;
\t\t}

\t\t.slide-row {
\t\t\tmargin: -20px 0 0;
\t\t}
\t}

\t.slider_banner {
\t\twidth: 100%;
\t}
\t.section-header__title{
\t\tfont-size: 16px;
\t}
</style>

<!-- hero slider area start -->
<section class=\"slider-area \">
\t<div class=\"\">
\t\t<div class=\"row slide-row m-0\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 228
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 228);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 229
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 229);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"cares separation container mt-4\">
\t<div class=\" new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"heading3 bold\" style=\"text-align: center; margin-bottom: 10px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"section-header__title mt-1 text-center\">
\t\t\t\t\tDiscover our wide range of women’s ethnic wear and western wear fashion.
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<div class=\"swiper topSwiper\"  style=\"margin-top: 17px;\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 252
        if (($context["new_products"] ?? null)) {
            // line 253
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 254
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\" style=\"padding: 10px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 258);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 259);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 259);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 260);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">New Arrivals</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 264);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 265
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 265)) {
                    // line 266
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 267);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 268);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 268);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 269);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 269);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 270);
                    echo "\" btnpercent=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 270);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #4a4975; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 275
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #4a4975; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 280
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body pt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 285);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 286);
                echo "</h4>

\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5  mob_ts\" style=\"text-align:end;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 291
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 291)) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 293
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 293)) {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 294);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 296
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 296);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 297
                        echo twig_get_attribute($this->env, $this->source,                         // line 298
$context["product"], "price", [], "any", false, false, false, 298);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 300)) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 302
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 302);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 308);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "\t\t\t\t\t\t";
        }
        // line 322
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"cares separation mt-5 container\">
\t<div class=\" new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 10px\" class=\"heading3 bold\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"section-header__title mt-1 text-center\">
\t\t\t\t\tA royal fusion of modern and ethnic wear for all occasions.
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"swiper topSwiper \"style=\"margin-top: 17px;\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 345
        if (($context["pop_products"] ?? null)) {
            // line 346
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 347
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\" style=\"padding: 10px;\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 352);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 353);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 353);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 354);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">BEST SELLER</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 358
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 358);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 359
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 359)) {
                    // line 360
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 361);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 362
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 362);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 362);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 363);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 363);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 364
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 364);
                    echo "\"btnpercent=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 364);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #4a4975; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 369
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #4a4975; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 374
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body pt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 379
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 379);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 380
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 380);
                echo "</h4>

\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5  mob_ts\" style=\"text-align:end;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 385
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 385)) {
                    // line 386
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 387
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 387)) {
                        // line 388
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 388);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 390
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 390);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 391
                        echo twig_get_attribute($this->env, $this->source,                         // line 392
$context["product"], "price", [], "any", false, false, false, 392);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 394
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 394)) {
                        // line 395
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 396
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 396);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 398
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 400
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 402
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 402);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "\t\t\t\t\t\t";
        }
        // line 417
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room -->

";
        // line 426
        if (($context["room_categories"] ?? null)) {
            // line 427
            echo "<section class=\"shopy_by_room separation mt-5 pb-5\" style=\"background-image:url('image/shop_by_back.jpg');background-size:cover;background-repete:no-repete;\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12 pt-3\">
\t\t\t\t<h2 class=\"text-center  heading3 bold\">Shop By Categories
\t\t\t\t\t\t<span class=\"hb \" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<p class=\"section-header__title mt-1 text-center\">
\t\t\t\t\tA royal fusion of modern and ethnic wear for all occasions.
\t\t\t\t</p>
\t\t\t
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row mt-4 pb-3\">
\t\t\t";
            // line 442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 443
                echo "\t\t\t<div class=\"col-sm-4 col-6 text-center pt-4\">

\t\t\t\t<div class=\"prod-card\">
\t\t\t\t\t<a href=\"";
                // line 446
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 446);
                echo "\">
\t\t\t\t\t\t<img  alt=\"\"
\t\t\t\t\t\t\tsrc=\"";
                // line 448
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 448);
                echo "\">

\t\t\t\t\t</a>
\t\t\t\t</div>



\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "
\t\t</div>

\t</div>
</section>



";
        }
        // line 467
        echo "<div style=\"background:#f1f1f1; padding:0px 0px\">
\t<section class=\"\">
\t\t<div class=\"\">

\t\t\t<div class=\"row m-0\" style=\"margin-top:3%;width:100%;\">

\t\t\t\t<div class=\"col-md-6  p-0\"
\t\t\t\t\tstyle=\"background: black;align-items: center;display: flex;justify-content: center;\">
\t\t\t\t\t<div class=\"serv-name3 text-center\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h2 style=\"font-weight:700;color: white;\">Printed Designs</h2>
\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Explore Now</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"image/1.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6   p-0\"
\t\t\t\t\tstyle=\"background: black;align-items: center;display: flex;justify-content: center;\">
\t\t\t\t\t<div class=\"serv-name3 text-center\">

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h2 style=\"font-weight:700;color: white;\">Solid Designs</h2>
\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Explore Now</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"image/2.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t</section>
</div>




";
        // line 519
        echo "

<!-- News -->
<section class=\"home-testimonial \">
\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex justify-content-center testimonial-pos\">
\t\t\t<div class=\"col-md-12 pt-4 d-flex justify-content-center\">
\t\t\t\t<h1 style=\"color:#4a4975\">Testimonials
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h1>
\t\t\t</div>
\t\t\t<p class=\"section-header__title mt-1 text-center\">
\t\t\t\tWhat they are saying about us
\t\t\t</p>
\t\t
\t\t</div>
\t\t<section class=\"home-testimonial-bottom mb-2 pt-4\">
\t\t\t<div class=\"container testimonial-inner\">
\t\t\t\t<div class=\"row d-flex justify-content-center m-0\" style=\"width: 100%;\">
\t\t\t\t\t<div class=\"swiper topSwiper1 m-0\"style=\"margin-top: 17px;width:100%;\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"swiper-slide col-md-4\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\"style=\"height: 72px;
\t\t\t\t\t\t\t\t\t\toverflow: hidden;\">&ldquo;Very happy with the purchases I've made here. The trousers I ordered are exactly what I needed. I really like the look and feel of the Daevish brand and the prices are hard to beat.
\t\t\t\t\t\t\t\t\t\t\t&rdquo;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Samriddhi Oberoi</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Business Owner</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper-slide col-md-4\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\"style=\"height: 72px;
\t\t\t\t\t\t\t\t\t\toverflow: hidden;\">&ldquo;I found this website while looking to purchase some printed kurtas. I have since used them a couple more times. Their prices are great, and the quality has been great.&rdquo;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Shilpa Sen</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper-slide col-md-4\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\" style=\"height: 72px;
\t\t\t\t\t\t\t\t\t\toverflow: hidden;\">&ldquo;Great online shopping experience. The fit was true to size and shipping was super fast.&rdquo;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Paramjeet Kaur Sindhu</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Housewise</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper-slide col-md-4\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\" style=\"height: 72px;
\t\t\t\t\t\t\t\t\t\toverflow: hidden;\">&ldquo;Great online shopping experience. The fit was true to size and shipping was super fast.&rdquo;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Paramjeet Kaur Sindhu</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Housewise</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t</section>
</section>


<div class=\"container separation \">
\t<div class=\"row pt-5\">
\t\t<div class=\"col-12\" style=\"margin-top:25px\">
\t\t\t<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t\t</div>
\t</div>
</div>


<script>
\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 4,
\t\tspaceBetween: 20,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t740: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t}
\t\t}
\t});
\tvar swiper = new Swiper(\".topSwiper1\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 3,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 0
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 0
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t740: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t}
\t\t}
\t});
</script>

";
        // line 681
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  936 => 681,  772 => 519,  720 => 467,  709 => 458,  693 => 448,  688 => 446,  683 => 443,  679 => 442,  662 => 427,  660 => 426,  649 => 417,  646 => 416,  626 => 402,  622 => 400,  618 => 398,  613 => 396,  608 => 395,  605 => 394,  600 => 392,  599 => 391,  594 => 390,  588 => 388,  586 => 387,  583 => 386,  581 => 385,  573 => 380,  569 => 379,  562 => 374,  555 => 369,  545 => 364,  539 => 363,  533 => 362,  529 => 361,  526 => 360,  524 => 359,  520 => 358,  513 => 354,  507 => 353,  503 => 352,  496 => 347,  491 => 346,  489 => 345,  464 => 322,  461 => 321,  442 => 308,  438 => 306,  434 => 304,  429 => 302,  424 => 301,  421 => 300,  416 => 298,  415 => 297,  410 => 296,  404 => 294,  402 => 293,  399 => 292,  397 => 291,  389 => 286,  385 => 285,  378 => 280,  371 => 275,  361 => 270,  355 => 269,  349 => 268,  345 => 267,  342 => 266,  340 => 265,  336 => 264,  329 => 260,  323 => 259,  319 => 258,  313 => 254,  308 => 253,  306 => 252,  284 => 232,  275 => 229,  270 => 228,  266 => 227,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
