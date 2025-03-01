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

/* extension/module/rest_api_edit.twig */
class __TwigTemplate_23c3769246412e171fbab400bda45662a7b6a623c94e7895475e92d8ec2e9736 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
   <div class=\"page-header\">
      <div class=\"container-fluid\">
         <div class=\"pull-right\">
            <button type=\"submit\" form=\"form-user\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
               ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
         </div>
      </div>
      <div class=\"container-fluid\">
         ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "         <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
         </div>
         ";
        }
        // line 22
        echo "         <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
               <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
               <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user\" class=\"form-horizontal\">
                  <div class=\"form-group required\">
                     <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 29
        echo ($context["entry_title"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 31
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
                        ";
        // line 32
        if (($context["error_title"] ?? null)) {
            // line 33
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                        ";
        }
        // line 35
        echo "                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 38
        echo ($context["entry_public"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"public\" value=\"";
        // line 40
        echo ($context["public"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_public"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                        ";
        // line 41
        if (($context["error_public"] ?? null)) {
            // line 42
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_public"] ?? null);
            echo "</div>
                        ";
        }
        // line 44
        echo "                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 47
        echo ($context["entry_private"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"private\" value=\"";
        // line 49
        echo ($context["private"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_private"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                        ";
        // line 50
        if (($context["error_private"] ?? null)) {
            // line 51
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_private"] ?? null);
            echo "</div>
                        ";
        }
        // line 53
        echo "                        ";
        if (($context["id"] ?? null)) {
            // line 54
            echo "                        <input type=\"hidden\" name=\"id\" value=\"";
            echo ($context["id"] ?? null);
            echo "\">
                        ";
        }
        // line 56
        echo "                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
";
        // line 63
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/rest_api_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 63,  183 => 56,  177 => 54,  174 => 53,  168 => 51,  166 => 50,  160 => 49,  155 => 47,  150 => 44,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/rest_api_edit.twig", "");
    }
}
