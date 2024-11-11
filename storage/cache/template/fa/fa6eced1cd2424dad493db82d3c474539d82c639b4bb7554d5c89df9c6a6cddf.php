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

/* default/template/information/contact.twig */
class __TwigTemplate_e00fdb26bc4ae3666f5a605a3357fc69357bafab23c0460b181c45de25dfbec9 extends \Twig\Template
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
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"contact-message\">
                    <h4 class=\"contact-title\">Send Us A Message</h4>
                    <form  action=\"index.php?route=information/contact\" method=\"post\" class=\"contact-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"name\" name=\"name\" placeholder=\"Name *\" type=\"text\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"phone\" name=\"phone\" placeholder=\"Phone *\" type=\"tel\" maxlength=\"12\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"email\" name=\"email\" placeholder=\"Email *\" type=\"email\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"subject\" name=\"subject\" placeholder=\"Subject *\" type=\"text\">
                            </div>
                            <div class=\"col-12\">
                                <div class=\"contact2-textarea text-center\">
                                    <textarea id=\"message\" placeholder=\"Message *\" name=\"enquiry\" class=\"form-control2\" required=\"\"></textarea>
                                </div>
                                <div class=\"contact-btn1\">
                                    <button class=\"btn btn-hero\" type=\"submit\">Send Message</button>
                               <br /><br />
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-info\">
                    
                    <h6 class=\"contact-title\">India</h6>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i> +91 98298 66746</li>
                        <li><i class=\"fa fa-envelope-o\"></i>meraki.eleganceredefined@gmail.com </li>
                        <li><i class=\"fa fa-map-pin\"></i>353, Hanuman Nagar Extension, Janak Marg, Sirsi Road, Jaipur 
                       </li>
                        <li>
                        <a href=\"index.php?route=information/store_india\" >Store Locater</a></li>
                 
                    </ul>
                   
                    <hr/>
                    <h6 class=\"contact-title pt-2\">USA</h6>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i> +19086963680</li>
                        <li><i class=\"fa fa-envelope-o\"></i>meraki.eleganceredefined@gmail.com             
                        </li>
                        <li><i class=\"fa fa-map-pin\"></i>  Manalapan, New Jersey, zip code 07726
                        
                        </li>
                        <li><a href=\"index.php?route=information/store_usa\" >Store Locater</a>
                        </li>
                 
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script>
   
</script>
";
        // line 90
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 90,  64 => 13,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
