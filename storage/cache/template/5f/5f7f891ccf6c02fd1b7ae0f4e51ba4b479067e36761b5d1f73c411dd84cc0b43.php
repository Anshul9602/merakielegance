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

/* default/template/common/search1.twig */
class __TwigTemplate_9f4908cee184501e724e9f2d2bd35037cdb83b92854c5b219878952ab536d3b5 extends \Twig\Template
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
        echo "

<div id=\"search1\" class=\"input-group header-search-box animated fadeInLeft \">

\t<input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search-input form-control input-lg header-search-field\" autocomplete=\"off\"/>
\t<button class=\"search_icon_top header-search-btn\" style=\"z-index:99999;\">
\t\t<i class=\"pe-7s-search\"></i>
\t</button>

</div>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/search1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search1.twig", "");
    }
}
