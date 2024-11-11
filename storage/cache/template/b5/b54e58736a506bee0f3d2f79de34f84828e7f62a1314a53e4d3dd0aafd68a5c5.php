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

/* default/template/common/category.twig */
class __TwigTemplate_2b1e27fd295d261f81c21ea1430f1dcde5d663267ab8d004d9fccecec931af24 extends \Twig\Template
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

<!-- hero slider area start -->
<section class=\"slider-area \">
\t
\t\t<div class=\"row\">
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t\t</div>
\t
</section>
<!-- hero slider area end -->
";
        // line 17
        if (($context["room_categories"] ?? null)) {
            // line 18
            echo "<section class=\"shopy_by_room separation  pb-5\" style=\"background-image:url('image/shop_by_back.jpg');background-size:cover;background-repete:no-repete;\">
\t<div class=\"container pt-5\">
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
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 34
                echo "\t\t\t<div class=\"col-sm-4 col-6 text-center pt-4\">

\t\t\t\t<div class=\"prod-card\">
\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 37);
                echo "\">
\t\t\t\t\t\t<img  alt=\"\"
\t\t\t\t\t\t\tsrc=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 39);
                echo "\">

\t\t\t\t\t</a>
\t\t\t\t</div>



\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
\t\t</div>

\t</div>
</section>



";
        }
        // line 57
        echo "<!---Shop by room------><!-- mid slider area mid -->
<!-- mid slider area end -->


";
        // line 61
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->
<script>
\tvar swiper = new Swiper(\".topSwiper\", {
pagination: {
el: \".top-swiper-pagination\",
clickable: true
},
navigation: {
nextEl: \".swiper-button-next\",
prevEl: \".swiper-button-prev\"
},
autoplay: false,
// Default parameters
slidesPerView: 4,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: { // when window width is >= 320px
320: {
slidesPerView: 2,
spaceBetween: 5
},
// when window width is >= 480px
480: {
slidesPerView: 2,
spaceBetween: 5
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 20
}
}
});
</script>
";
        // line 95
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 95,  137 => 61,  131 => 57,  120 => 49,  104 => 39,  99 => 37,  94 => 34,  90 => 33,  73 => 18,  71 => 17,  64 => 12,  55 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/category.twig", "");
    }
}
