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

/* extension/export_import.twig */
class __TwigTemplate_7bdeb7f553683755d065611c31139bcaeba853a98cb8af7c5e7974534957c5dd extends \Twig\Template
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
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (( !($context["error_warning"] ?? null) &&  !($context["success"] ?? null))) {
            // line 28
            echo "\t\t<div id=\"export_import_welcome\" class=\"alert alert-info\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t";
            // line 31
            echo ($context["text_welcome"] ?? null);
            echo "<br /><br />";
            echo ($context["text_used_category_ids"] ?? null);
            echo " ";
            echo ($context["text_used_product_ids"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 34
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_export"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_import"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-support\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 48
        echo ($context["export"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 50
        echo ($context["entry_export"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 53
        echo ($context["entry_export_type"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((($context["export_type"] ?? null) == "c")) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"c\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_category"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 66
        if ((($context["export_type"] ?? null) == "p")) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_product"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        if ((($context["export_type"] ?? null) == "o")) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_option"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 84
        if ((($context["export_type"] ?? null) == "a")) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_attribute"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        // line 92
        if (($context["exist_filter"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
            // line 94
            if ((($context["export_type"] ?? null) == "f")) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_export_type_filter"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 104
        if ((($context["export_type"] ?? null) == "u")) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_customer"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\" id=\"export_filter\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 116
        echo ($context["entry_category_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 117
        echo ($context["help_category_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 119
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<div id=\"categories\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"category";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 122);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 122);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 123);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        echo ($context["entry_manufacturer_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 130
        echo ($context["help_manufacturer_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"manufacturer\" value=\"\" placeholder=\"";
        // line 132
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<div id=\"manufacturers\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"manufacturer";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 135);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 135);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"manufacturers[]\" value=\"";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 136);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\" id=\"range_type\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 144
        echo ($context["entry_range_type"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 145
        echo ($context["help_range_type"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"id\" id=\"range_type_id\">";
        // line 149
        echo ($context["button_export_id"] ?? null);
        echo " &nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"range_type\" value=\"page\" id=\"range_type_page\">";
        // line 152
        echo ($context["button_export_page"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 155
        echo ($context["entry_start_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 156
        echo ($context["entry_start_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 158
        echo ($context["min"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 160
        echo ($context["entry_end_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 161
        echo ($context["entry_end_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 163
        echo ($context["max"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 168
        echo ($context["button_export"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 175
        echo ($context["import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 178
        echo ($context["entry_import"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 179
        echo ($context["help_import"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 180
        echo ($context["help_format"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 185
        echo ($context["entry_incremental"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 188
        if (($context["incremental"] ?? null)) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 191
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 196
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 206
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 213
        echo ($context["entry_upload"] ?? null);
        echo "<br /><br />
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"upload\" id=\"upload\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 219
        echo ($context["button_import"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 226
        echo ($context["settings"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 229
        if (($context["settings_use_option_id"] ?? null)) {
            // line 230
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 232
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 234
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 238
        if (($context["settings_use_option_value_id"] ?? null)) {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 241
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_option_value_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_option_value_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 247
        if (($context["settings_use_attribute_group_id"] ?? null)) {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 250
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_group_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_group_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 252
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
        // line 256
        if (($context["settings_use_attribute_id"] ?? null)) {
            // line 257
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_attribute_id\" value=\"1\" /> ";
            echo ($context["entry_settings_use_attribute_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 261
        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 263
        if (($context["exist_filter"] ?? null)) {
            // line 264
            echo "\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
            // line 266
            if (($context["settings_use_filter_group_id"] ?? null)) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_group_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_group_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t";
            // line 275
            if (($context["settings_use_filter_id"] ?? null)) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" checked=\"checked\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"export_import_settings_use_filter_id\" value=\"1\" /> ";
                echo ($context["entry_settings_use_filter_id"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 280
            echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 283
        echo "\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 285
        echo ($context["button_settings"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t<div id=\"export_import_notification\" class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t<div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 293
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 299
        echo ($context["entry_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 300
        echo ($context["version_export_import"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 303
        echo ($context["entry_oc_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 304
        echo ($context["version_opencart"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\" style=\"vertical-align:top;\">";
        // line 307
        echo ($context["entry_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-wrap\">";
        // line 308
        echo ($context["text_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> <div id=\"export_import_loading\"><img src=\"view/image/export-import/loading.gif\" />";
        // line 323
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/getNotifications&user_token=";
        // line 328
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 332
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+json['message']);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 336
        echo ($context["error_no_news"] ?? null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 340
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> '+'";
        // line 343
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_export_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#export_filter').show();
\t} else {
\t\t\$('#export_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_export_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_export_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_welcome').remove();
\t});

\t\$('a[href=\"#tab-support\"').click(function() {
\t\tif (\$(this).parent().attr('class')!='active') {
\t\t\tgetNotifications();
\t\t}
\t});

});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 427
        echo ($context["error_select_file"] ?? null);
        echo "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 433
        if ((array_key_exists("post_max_size", $context) && ($context["post_max_size"] ?? null))) {
            // line 434
            echo "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 435
            echo ($context["post_max_size"] ?? null);
            echo ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 437
            echo ($context["error_post_max_size"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 441
        echo "\t\t";
        if ((array_key_exists("upload_max_filesize", $context) && ($context["upload_max_filesize"] ?? null))) {
            // line 442
            echo "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 443
            echo ($context["upload_max_filesize"] ?? null);
            echo ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 445
            echo ($context["error_upload_max_filesize"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 449
        echo "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 464
        echo ($context["count_product"] ?? null);
        echo ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/getCountProduct&user_token=";
        // line 468
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]'],input[name='manufacturers[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 499
        echo ($context["error_param_not_number"] ?? null);
        echo "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 506
        echo (($context["count_category"] ?? null) - 1);
        echo "; break;
\t\tdefault:  count_item = ";
        // line 507
        echo (($context["count_customer"] ?? null) - 1);
        echo "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 512
        echo ($context["min_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 513
        echo ($context["min_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 514
        echo ($context["min_customer_id"] ?? null);
        echo " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 519
        echo ($context["max_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 520
        echo ($context["max_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 521
        echo ($context["max_customer_id"] ?? null);
        echo " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 527
        echo ($context["error_batch_number"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 531
        echo ($context["error_page_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 538
        echo ($context["error_min_item_id"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 542
        echo ($context["error_id_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 563
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t\$('#category' + item['value']).remove();
\t\t\$('#categories').append('<div id=\"category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
\t\tupdateCountProducts();
\t}
});

\$('#categories').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
\tupdateCountProducts();
});

// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 592
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val('');
\t\t\$('#manufacturer' + item['value']).remove();
\t\t\$('#manufacturers').append('<div id=\"manufacturer' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"manufacturers[]\" value=\"' + item['value'] + '\" /></div>');
\t\tupdateCountProducts();
\t}
});

\$('#manufacturers').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
\tupdateCountProducts();
});
//--></script>

</div>
";
        // line 619
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/export_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1113 => 619,  1083 => 592,  1051 => 563,  1027 => 542,  1020 => 538,  1010 => 531,  1003 => 527,  994 => 521,  990 => 520,  986 => 519,  978 => 514,  974 => 513,  970 => 512,  962 => 507,  958 => 506,  948 => 499,  914 => 468,  907 => 464,  890 => 449,  883 => 445,  878 => 443,  875 => 442,  872 => 441,  865 => 437,  860 => 435,  857 => 434,  855 => 433,  846 => 427,  757 => 343,  749 => 340,  742 => 336,  735 => 332,  728 => 328,  720 => 323,  702 => 308,  698 => 307,  692 => 304,  688 => 303,  682 => 300,  678 => 299,  669 => 293,  658 => 285,  654 => 283,  649 => 280,  643 => 278,  637 => 276,  635 => 275,  629 => 271,  623 => 269,  617 => 267,  615 => 266,  611 => 264,  609 => 263,  605 => 261,  599 => 259,  593 => 257,  591 => 256,  585 => 252,  579 => 250,  573 => 248,  571 => 247,  565 => 243,  559 => 241,  553 => 239,  551 => 238,  545 => 234,  539 => 232,  533 => 230,  531 => 229,  525 => 226,  515 => 219,  506 => 213,  500 => 209,  492 => 206,  482 => 201,  478 => 199,  470 => 196,  460 => 191,  456 => 189,  454 => 188,  448 => 185,  440 => 180,  436 => 179,  432 => 178,  426 => 175,  416 => 168,  408 => 163,  403 => 161,  399 => 160,  394 => 158,  389 => 156,  385 => 155,  379 => 152,  373 => 149,  366 => 145,  362 => 144,  355 => 139,  346 => 136,  339 => 135,  335 => 134,  330 => 132,  325 => 130,  321 => 129,  316 => 126,  307 => 123,  300 => 122,  296 => 121,  291 => 119,  286 => 117,  282 => 116,  271 => 109,  267 => 107,  263 => 105,  261 => 104,  258 => 103,  250 => 99,  246 => 97,  242 => 95,  240 => 94,  237 => 93,  235 => 92,  228 => 89,  224 => 87,  220 => 85,  218 => 84,  210 => 80,  206 => 78,  202 => 76,  200 => 75,  192 => 71,  188 => 69,  184 => 67,  182 => 66,  174 => 62,  170 => 60,  166 => 58,  164 => 57,  157 => 53,  151 => 50,  146 => 48,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  118 => 34,  108 => 31,  103 => 28,  100 => 27,  92 => 23,  89 => 22,  81 => 18,  79 => 17,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/export_import.twig", "");
    }
}
