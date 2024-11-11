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

/* extension/module/rest_api.twig */
class __TwigTemplate_2a93d3e889bd93e5af16f46f5e5c44139a4d82e50b44e25a82b2d0e3454bac9e extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
\t\t\t\t\t\tonclick=\"confirm('";
        // line 7
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-user').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 24
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 28
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\').prop('checked', this.checked);\"/></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 39
        if ((($context["sort"] ?? null) == "username")) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 43
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 44
        if ((($context["sort"] ?? null) == "status")) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_public"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_public"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 49
        if ((($context["sort"] ?? null) == "created_at")) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 54
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t";
        // line 60
        if (($context["apis"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
                // line 62
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 63
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["api"], "id", [], "any", false, false, false, 63), ($context["selected"] ?? null))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["api"], "id", [], "any", false, false, false, 64);
                    echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["api"], "id", [], "any", false, false, false, 66);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t";
                }
                // line 67
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["api"], "title", [], "any", false, false, false, 68);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["api"], "public", [], "any", false, false, false, 69);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["api"], "date_added", [], "any", false, false, false, 70);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["api"], "edit", [], "any", false, false, false, 71);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-pencil\"></i></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"5\">";
            // line 78
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 86
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 87
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 93
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/rest_api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 93,  279 => 87,  275 => 86,  268 => 81,  262 => 78,  259 => 77,  255 => 75,  243 => 71,  239 => 70,  235 => 69,  231 => 68,  228 => 67,  222 => 66,  216 => 64,  214 => 63,  211 => 62,  206 => 61,  204 => 60,  195 => 54,  192 => 53,  184 => 52,  174 => 50,  172 => 49,  169 => 48,  161 => 47,  151 => 45,  149 => 44,  146 => 43,  138 => 42,  128 => 40,  126 => 39,  117 => 33,  111 => 30,  107 => 28,  99 => 24,  96 => 23,  88 => 19,  86 => 18,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  55 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/rest_api.twig", "");
    }
}
