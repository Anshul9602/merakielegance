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
class __TwigTemplate_33f7767d65106adee4b2709116fbe945bc5c0e7c034ef1426389e088fbf3a9cf extends \Twig\Template
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
<section class=\"slider-area\">
  
      <div class=\"row m-0\">
      <div class=\"slider_banner col-12 p-0\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
            echo "\">
            <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
      </div>
         
      </div>
   
</section>
<!-- hero slider area end -->


<!--New arrivals -->
<section class=\"new-arrivals\">
  <div class=\"container pt-5\">
  <div class=\"row\">
      <div class=\"col-12 text-center\">
       
        <h2>New Arrivals</h2>
        <p class=\"description\">Explore Meraki's collection, crafted to breathe new life into your home. </p>
        <br />
      </div>
    </div>
  
    <div class=\"row\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            echo "
      <div class=\"col-sm-4 col-6\">
        <div class=\"product-card text-center\">
          <a href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
            echo "\">
          <img src=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
            echo "\" alt=\"\" class=\"img-responsive\">
          </a>
          <h4 class=\"product_name\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "</h4>
          <p class=\"product_price\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
            echo "</p>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </div>
      <div class=\"row text-center\">
        <div class=\"col-12\">
        <a href=\"index.php?route=product/category&path=77\">
          <button class=\"btn btn-primary\">View All &#8594;</button>
        
        </a>
        </div>
      </div>
  </div>
</section>
<!--New arrivals -->


<!---Shop by room------>
<section class=\"shop_by_category mt-50 d-none\">
  <img src=\"image/elements/top.png\" alt=\"\" class=\"img-top-element\">
  <img src=\"image/elements/top.png\" alt=\"\" class=\"img-bottom-element\">

  <div class=\"container \">
  <div class=\"row v-center \">
      <div class=\"col-sm-4 col-12\">
        <br />
        <h2>An Oasis Of Luxury</h2>
        <p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <button class=\"btn btn-primary\">Explore Now</button>
      
        <br /> <br />
      </div>
      <div class=\"col-sm-4 col-6 text-center\">
        <img src=\"image/elements/b1.png\" alt=\"\" class=\"img-responsive b1\">
      </div>
      <div class=\"col-sm-4 col-6 text-center\">
        <img src=\"image/elements/b2.jpg\" alt=\"\" class=\"img-responsive b2\">
      </div>
   
    </div>
  
    </div>
</section>
<!---Shop by room------>
<section><br /><br />
  <img src=\"assets/img/banner/Meraki-Banner.jpg\" alt=\"\" class=\"img-responsive\" style=\"width:100%\" />
</section>



  ";
        // line 95
        echo ($context["column_right"] ?? null);
        echo "


<section>
<img src=\"image/catalog/banners/Banner-3.jpg\" alt=\"\" class=\"img-responsive\" />
  
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
      </div>
    </div>
  </div>
</section>



<!--instagram feed -->
<section>
<div class=\"container pt-5\">
  <div class=\"row \">
    <div class=\"col-md-12 text-center\" style=\"margin-top:10px\">
    <h2>Follow us on Instagram</h2>

     <div class=\"col-md-12 pt-3\">
        <a href=\"https://www.instagram.com/meraki.eleganceredefined/\">
          <button class=\"btn btn-primary\"><i class=\"fa fa-instagram\"style=\"padding:0 10px 0 0\"></i>Follow </button>
        
        </a>
        </div>
    </div>
  </div>
</div>
</section>
<br /><br />


<script>
var swiper = new Swiper(\".topSwiper\", {
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
  


</script>
";
        // line 148
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
        return array (  227 => 148,  171 => 95,  122 => 48,  112 => 44,  108 => 43,  103 => 41,  99 => 40,  94 => 37,  90 => 36,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
