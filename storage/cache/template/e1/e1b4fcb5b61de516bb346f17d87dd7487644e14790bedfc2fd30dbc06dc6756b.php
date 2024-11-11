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

/* default/template/extension/total/coupon.twig */
class __TwigTemplate_fda67eb5527fdea7253b67d12a4f722c975301c4e3ddd48c31abf486fabce278 extends \Twig\Template
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
\t@media screen and (max-width:680px) {
\t\t.coupon-box {
\t\t\tmargin-bottom: 20px;
\t\t}
\t}
</style>
<div style=\"max-width:580px;  float:left;margin-bottom: 14px;\" class=\"input-group coupon-box\">
\t<input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\"
\t\tclass=\"form-control\" />
\t&nbsp;&nbsp;
\t<span class=\"input-group-btn\">
\t\t<input type=\"button\" value=\"";
        // line 13
        echo ($context["button_coupon"] ?? null);
        echo "\" id=\"button-coupon\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\tclass=\"btn btn-primary\" />
\t</span>

</div>
<script type=\"text/javascript\">
\$('#button-coupon').on('click', function() {
\$.ajax({
url: 'index.php?route=extension/total/coupon/coupon',
type: 'post',
data: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
dataType: 'json',
beforeSend: function() {
\$('#button-coupon').button('loading');
},
complete: function() {
\$('#button-coupon').button('reset');
},
success: function(json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\$('html, body').animate({ scrollTop: 0 }, 'slow');
}

if (json['redirect']) {
location = json['redirect'];
}
},
error: function(xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/coupon.twig", "");
    }
}
