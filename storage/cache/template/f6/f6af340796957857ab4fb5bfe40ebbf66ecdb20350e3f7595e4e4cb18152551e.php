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
class __TwigTemplate_87ad589c5701da187318c021f4bb0f8c040c793279a14b37cae36150f04d7c8e extends \Twig\Template
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
.float {
    position: fixed;
    width: 70px;
    height: 70px;
    bottom: 50px;
    right: 45px ;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 40px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }
\t.footer-heading {
\t\tcolor: #fff;
\t\tfont-size: 16px;
\t}

\t.hb1::after {
\t\tcontent: \"\";
\t\tposition: initial;
\t\tdisplay: block;
\t\twidth: 40px;
\t\theight: 2px;
\t\tmargin-top: 5px;
\t\tbackground: #f3f3f3;
\t\tbottom: 0;
\t\tleft: calc(50% - 20px);
\t}
\t.footer-row .col-sm-3 ul {
\t\tmargin-top: 15px;
\t}
\t.footer-row .col-sm-3 ul li a {
\t\tcolor: #f1f1f1;
\t}
\t.f1 {
\t\tfont-size: 22px;
\t}
</style>

<footer style=\"background:#4a4975;background-size:cover;background-repete:no-repete;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t padding:40px 0px  10px; 0px\">
\t<div class=\"contanier\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row footer-row\">
\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">Useful links<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/about\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=128\">Sale</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">Categories<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=134\">High Slit Kurta</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=135\">Maxi Dress</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=137\">Dress</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=136\">Shrug</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=139\">Trouser</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=138\">Mini Dress</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 89
        if (($context["informations"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t\t<h5 class=\"footer-heading\">Need Help?<span class=\"hb1\"></span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 95
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 96);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 103
        echo "

\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">";
        // line 106
        echo ($context["text_account"] ?? null);
        echo "<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 110
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 113
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"row mt-4\">
\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\">
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=100092589905401\">

\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-1 col-2\">
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/daevish.in/\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram f1 \"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-1 col-2 pl-4\">
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UCfxeAeVFtrHP1W5VSk4tSpA\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-1 col-2 pl-4\">
\t\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/daevish-clothing-brand-980300279/\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin-square f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<p id=\"demo\"></p>
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<p class=\"text-center mt-3 container\" style=\" font-size:12px; color:#f1f1f1; padding:5px;font-weight: 400;\">
\t\t\t\t\t\tCopyright © 2023, Daevish . All rights reserved. Developed by
\t\t\t\t\t\t<a href=\"https://theodin.in/\" style=\"color:#fff;\">
\t\t\t\t\t\t\t The Odin</a> .
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
<a href=\"https://api.whatsapp.com/send?phone=+91-9828232081&amp;text=HELLO\" class=\"float d-flex justify-content-center\" style=\"align-items: center;\" target=\"_blank\">
  <i class=\"fa fa-whatsapp wp-button\"></i>
</a>
\t<!--Start of Tawk.to Script-->
\t<script type=\"text/javascript\">



// wishlist product


const allProductBtns = document.querySelectorAll(\".wishlist_link\");

const wishlist1 = [];

allProductBtns.forEach((btn, index) => {
btn.addEventListener(\"click\", (e) => { 
\tconsole.log(\"click\");
\t
\t// alert(`You clicked on Product \${index + 1}`);
const productId = e.target.getAttribute(\"btnid\");
const productname = e.target.getAttribute(\"btnname\");
const productprice = e.target.getAttribute(\"btnprice\");
const productsprice = e.target.getAttribute(\"btnsprice\");
const productimg = e.target.getAttribute(\"btnimg\");
const producturl = e.target.getAttribute(\"btnhref\");
const productpercent = e.target.getAttribute(\"btnpercent\");
if (productprice == null || productId == null || productimg == null || producturl == null || productname == null || productsprice == null) {} else {
console.log(\"click\");
myobj = {
\"productid\": productId,
\"productprice\": productprice,
\"productsprice\": productsprice,
\"productname\": productname,
\"producturl\": producturl,
\"productimg\": productimg,
\"productpercent\": productpercent
}
console.log(myobj);
const wishlistLocal = localStorage.getItem(\"wishlist1\");
if (wishlistLocal) {  console.log(\"wishlist do exist in localStorage\");
const wishlistFromLocalStorage = JSON.parse(wishlistLocal);
const isProductIdExist = wishlistFromLocalStorage.find((item) => item.productid === productId);

if (! isProductIdExist) {
wishlistFromLocalStorage.push(myobj);
localStorage.setItem(\"wishlist1\", JSON.stringify(wishlistFromLocalStorage));
alert(\"ITEM ADDED TO YOUR WISHLIST SUCCESSFULLY\");
}else{
\talert(\"Item present in wishlist\");
}
}
else {  console.log(\"Wishlist doesn't exist in localStorage\");
wishlist1.push(myobj);
localStorage.setItem(\"wishlist1\", JSON.stringify(wishlist1));

alert(\"Item present in wishlist\");
}


}
});
});


// total in wishlist
const product11 = JSON.parse(localStorage.getItem(\"wishlist1\"));
\t</script>
\t<!--End of Tawk.to Script-->

\t";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 229
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 229);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 229);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 229);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 232
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "

\t<!-- Modernizer JS -->
\t<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
\t<!-- Popper JS -->
\t<script src=\"assets/js/vendor/popper.min.js\"></script>
\t<!-- Bootstrap JS -->
\t<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
\t<!-- slick Slider JS -->
\t<script src=\"assets/js/plugins/slick.min.js\"></script>
\t<!-- Countdown JS -->
\t<script src=\"assets/js/plugins/countdown.min.js\"></script>
\t<!-- Nice Select JS -->
\t<script src=\"assets/js/plugins/nice-select.min.js\"></script>
\t<!-- jquery UI JS -->
\t<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
\t<!-- Image zoom JS -->
\t<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
\t<!-- Imagesloaded JS -->
\t<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
\t<!-- Instagram feed JS -->
\t<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
\t<!-- mailchimp active js -->
\t<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
\t<!-- contact form dynamic js -->
\t<script src=\"assets/js/plugins/ajax-mail.js\"></script>
\t<!-- google map api -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
\t<!-- google map active js -->
\t<script src=\"assets/js/plugins/google-map.js\"></script>
\t<!-- Main JS -->
\t<script src=\"assets/js/main.js?v1.1\"></script>

</body></html>
";
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
        return array (  340 => 234,  331 => 232,  326 => 231,  313 => 229,  309 => 228,  192 => 116,  184 => 113,  176 => 110,  169 => 106,  164 => 103,  158 => 99,  147 => 96,  144 => 95,  140 => 94,  134 => 90,  132 => 89,  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
