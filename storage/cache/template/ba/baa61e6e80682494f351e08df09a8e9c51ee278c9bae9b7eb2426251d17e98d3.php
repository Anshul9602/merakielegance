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

/* default/template/common/about.twig */
class __TwigTemplate_722d09182a5063487cdad834d5a9b05483da93a762e5266c251b228fd8446df0 extends \Twig\Template
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
   .parallax {
      background-image: url('assets/img/about/ban3.jpg');
      height: 300px;
      width: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
   }
.mobile-banner{
   display: none;
}
   @media only screen and (max-width: 850px) {
      .parallax {
         background-attachment: scroll;
      }
      .mobile-banner{
   display: block !important;
}
      .our_prod {
         text-align: center;
      }

      .desktop-banner {
         display: none !important;
      }
   }
</style>
<div class=\"row\" style=\"margin:0px;\">
   <div class=\"col-sm-12 desktop-banner\" style=\"padding:0px\">
      <img src=\"assets/img/banner/mbs.jpg\" alt=\"\" class=\"img-responsive\" />
   </div>

   <div class=\"col-sm-12 mobile-banner\" style=\"padding:0px\">
      <img src=\"assets/img/about/mob-ban.jpg\" alt=\"\" class=\"img-responsive\" />
   </div>

</div>
<div class=\"container\">
   <div class=\"row\">
      <div class=\"col-sm-6 offset-sm-3 text-center\">
         <br /><br /><br />
         <p style=\"font-size:16px\">
            At Meraki Elegance Redefined, we are passionate about creating
            aesthetic hand-crafted products that are not only exquisite but also
            made in most creative manner with immense love and soul.
            <br /><br />
            Our products are inspired by traditional Indian Hand Block Printing techniques,
            and we are committed to preserving and promoting this beautiful art form,
            this philosophy is reflected in every product that we create.
         </p>
         <br /><br /><br />
      </div>
   </div>
</div>
<div class=\"parallax\"></div>
<br /><br />
<div class=\"container\">
   <div class=\"row\" style=\"display:flex; align-items:center\">
      <div class=\"col-sm-7\">

         <p style=\"font-size:16px\" class=\"our_prod\">
            Our products are crafted with a deep sense of love, care, and attention to detail by our skilled artisans
            who use wooden blocks to stamp intricate patterns onto fabric. Each piece is unique and reflects the
            essence, skills and creativity of our artisans.
            <br /> <br />
            Ultimately our goal at Meraki is to create products that not only look beautiful but also make people feel
            good. Whether you are looking for a special gift for a loved one or an alluring piece to add to your home or
            wardrobe, we hope that our products will inspire you and bring a little bit of magic into your life. All
            products are elegant, timeless, and made with love and soul, just like the name \"MERAKI\" suggests.
         </p>

      </div>
      <div class=\"col-sm-5\">
         <div style=\"border:4px solid #41586D\">
            <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
               <img src=\"assets/img/about/b1.jpg\" alt=\"\" class=\"img-response slider-img\">
               <img src=\"assets/img/about/b2.jpg\" alt=\"\" class=\"img-response slider-img\">
               <img src=\"assets/img/about/b3.jpg\" alt=\"\" class=\"img-response slider-img\">

            </div>
         </div>
      </div>
   </div>
</div>
<br /><br />
";
        // line 89
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 89,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
