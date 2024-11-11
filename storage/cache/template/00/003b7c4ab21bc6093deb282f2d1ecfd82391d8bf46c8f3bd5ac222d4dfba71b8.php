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

/* default/template/information/about.twig */
class __TwigTemplate_8dae0183c30054e12722181d39b78d569adfcdbb17f415c4b2ade8825507d73a extends \Twig\Template
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
\t.new-font {
\t\tfont-size: 15px;
\t\tline-height: 2;
\t}
</style>

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<!-- breadcrumb area end -->
<div class=\"container\">
\t<!-- contact area start -->
\t<div class=\"contact-area section-padding pt-20\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"contact-title \" style=\"color:#4a4975; font-family: 'newfont', sans-serif;\">
\t\t\t\tAbout Us<span class=\"hb\"></span>
\t\t\t</h1><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 mt-3\">

\t\t\t\t\t<h6 class=\"contact-title new-font \"
\t\t\t\t\t\tstyle=\" line-height: 1.5;font-weight: 600;color: black; font-family: 'newfont', sans-serif\">

\t\t\t\t\t</h6>
\t\t\t\t\t<p class=\"new-font \">Whenever we think about a clothing brand, we curious about their collection
\t\t\t\t\t\twhich should be trendy and different. Daevish is a brand who gives very affordable price with
\t\t\t\t\t\tpremium quality and statement. <br>Daevish is a manufacturer of women’s clothing since 2018. We
\t\t\t\t\t\tare
\t\t\t\t\t\tlocated in Sanganer Jaipur and delivering all over Country. We are selling on other marketplaces
\t\t\t\t\t\tbut we want to give exclusive and more convenient things here.<br> Our brand designs for comfort
\t\t\t\t\t\twith fashion so that every woman can be able to look stylish on their regular wear, casual wear,
\t\t\t\t\t\toffice wear and any occasion wear. <br>We create western wear, fusion wear and ethnic wear.
\t\t\t\t\t\tDaevish
\t\t\t\t\t\tbrand is known for its unique western dresses. We believe to grab customers attention and their
\t\t\t\t\t\tsatisfaction. We are featuring lifestyle products across the whole nation.
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 mt-3\">
\t\t\t\t\t<img src=\"image/1.jpg\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h2 class=\"contact-title mt-5 text-center\" style=\"color:black; font-family: 'newfont', sans-serif;\">
\t\t\t\tVision<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t</h2>
\t\t\t<p class=\"new-font mt-3\">We envision a clothing website that embraces and celebrates diversity in
\t\t\t\tfashion. Our platform will feature an extensive range of clothing options, catering to various body
\t\t\t\ttypes, sizes, and style preferences.<br> We will collaborate with designers and brands that
\t\t\t\tprioritize inclusivity, offering a wide array of choices that reflect the diverse tastes and needs
\t\t\t\tof our customers.
\t\t\t</p>

\t\t</div>
\t</div>
\t<!-- contact area end -->
\t<br /><br />
</div>";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 78,  75 => 23,  63 => 19,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
