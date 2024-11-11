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

/* default/template/common/footer.twig */
class __TwigTemplate_f757a4dd0daee678d96023f2314be089db491c66f658ac877f05d6dff12692f5 extends \Twig\Template
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
        echo "<style>
   @media screen and (max-width:650px) {
      .info-heading{
      margin-top:20px;
   }
   .mob_padding{
padding:0 10% !important;
   }
   }
  .widget-title {
   font-size:16px !important;
  }
  .new_fot .widget-title{
       border-bottom: 1px solid #e6e6e6;
       padding-bottom:10px;
      
  }
  .info-list {
    display: grid;
    grid-template-columns: none;
}
  .info-list nav ul li{
padding:0px !important;
}
  .info-list nav ul li a:first-child{
    margin-left: 0px!important;
}
.subscribe-box{
   color:#333;
}
</style>
<footer>
   <div class=\"mob_padding\"style=\"padding:0 5%;\">
      <div class=\"row new_fot\">
         <div class=\"col-lg-3 col-12 mt-3 p-1\">
            <div class=\"widget-body\">
               <h4 class=\"widget-title \">Customer Service</h4>
                  <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li >
                     <i class=\"pe-7s-mail\"></i>
                     <a style=\"text-transform:lowercase\" href=\"mailto:meraki.eleganceredefined@gmail.com\">
                     meraki.eleganceredefined@gmail.com </a>
                     </li>
                     <br />
                     <font>India:</font>
                     
                     <li><i class=\"pe-7s-map-marker\"></i> 
                     353, Hanuman Nagar Extension, Janak Marg, Sirsi Road, Jaipur.
Pin code 302012
                     </li>
                     <li><i class=\"pe-7s-call\"></i> 
                     <a href=\"tel:+19086963680\"> +91 98298 66746</a>
                     </li>
                     <br />
                     <font>USA:</font>
                     
                     <li><i class=\"pe-7s-map-marker\"></i> 
                      Manalapan, New Jersey, zip code 07726
                     </li>
                     <li><i class=\"pe-7s-call\"></i> 
                     <a href=\"tel:+91 98298 66746\">+1 90869 63680</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
          <div class=\"col-lg-3 col-6 mt-3 p-1\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title\">Useful Links</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                 
                    ";
        // line 74
        echo ($context["menu"] ?? null);
        echo "
                     </ul>
               </div>
            </div>
         </div>
         <div class=\"col-lg-3 col-6 mt-3 p-1\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title info-heading \" style=\"margin-top: -6px;\">Information</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"index.php?route=information/information&amp;information_id=5\">Terms & Conditions</a></li>
                    
                     <li> <a href=\"index.php?route=information/information&amp;information_id=6\">Shipping & Returns</a></li>
                     <li><a href=\"index.php?route=information/information&amp;information_id=3\">privacy
                        policy</a>
                     </li>
                     <li><a href=\"index.php?route=information/contact\">contact</a></li>
                   
                     
                      <li> <a href=\"index.php?route=common/aboutus\">About</a></li>
                      <br> <br>
                  </ul>
               </div>
            </div>
         </div>
        
         <div class=\"col-lg-3 col-12 mt-3 p-1\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title info-heading\">Subscribe</h4>
               <div class=\"widget-body social-link\">
                  <div class=\"row\">
                  
                  <div class=\"col-sm-12 col-12 \">
                  <p class=\"mb-3\">Be the first to know about our new collections, exclusive offers, and other perks!</p>
               
                  <form class=\"newsletter-inner\" id=\"mc-form\"> 
                  <input type=\"email\" value=\"\" placeholder=\"Your Email\" name=\"EMAIL\" id=\"mc-email\" autocomplete=\"off\" 
                  class=\"required email mail_boxj subscribe-box\" />
                  <button id=\"mc-submit\" class=\"subscribe-btn\"><li class=\"fa fa-arrow-right\"></li></button>
               <br /><br />
               <div style=\"margin-top:-7.5px\" class=\"chimp-msg text-success\"></div>
                 
               </form>

                  </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-sm-12\">
                     <a target=\"_blank\" href=\"https://www.facebook.com/meraki.eleganeredefined\"><i class=\"fa fa-facebook\"style=\"margin-top: 10px;\"></i></a>
                     <a target=\"_blank\" href=\"https://www.instagram.com/meraki.eleganceredefined/\"><i class=\"fa fa-instagram\"style=\"margin-top: 10px;\"></i></a>
                     ";
        // line 125
        echo "                
                     </div>
                   </div>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <p class=\"text-center\">All Rights Reserved - Meraki © 2023</p>
   </div>
</footer>
";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 137
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 137);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 137);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 137);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 140
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "<!-- Modernizer JS -->
<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
<!-- Popper JS -->
<script src=\"assets/js/vendor/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
<!-- slick Slider JS -->
<script src=\"assets/js/plugins/slick.min.js\"></script>
<!-- Countdown JS -->
<script src=\"assets/js/plugins/countdown.min.js\"></script>
<!-- Nice Select JS -->
<script src=\"assets/js/plugins/nice-select.min.js\"></script>
<!-- jquery UI JS -->
<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
<!-- Image zoom JS -->
<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
<!-- Imagesloaded JS -->
<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
<!-- Instagram feed JS -->
<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
<!-- mailchimp active js -->
<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
<!-- contact form dynamic js -->
<script src=\"assets/js/plugins/ajax-mail.js\"></script>
<!-- google map api -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
<!-- google map active js -->
<script src=\"assets/js/plugins/google-map.js\"></script>
<!-- Main JS -->
<script src=\"assets/js/main.js\"></script>

<script>
// Mailchimp for dynamic newsletter
        \$('#mc-form').ajaxChimp({
            language: 'en',
            callback: mailChimpResponse,
            // ADD YOUR MAILCHIMP URL BELOW HERE!
            url: 'https://merakielegance.us21.list-manage.com/subscribe/post?u=1261d5671351178c0cd20e2e1&amp;id=c9c9e3a5cc&amp;f_id=007f59e1f0'

        });

        // mailchimp active js
        function mailChimpResponse(resp) {
            if (resp.result === 'success') {
              \$(\".chimp-msg\").html('Thank you for subscribing.');
                \$(\".mail_boxj\").val(\"\");

            } else if (resp.result === 'error') {
               alert('Invalid Email');
               \$(\".mail_boxj\").css('border','thin soild red');
            }
        }
        </script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 142,  199 => 140,  195 => 139,  182 => 137,  178 => 136,  165 => 125,  112 => 74,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
