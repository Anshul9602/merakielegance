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

/* default/template/common/menu.twig */
class __TwigTemplate_33346c3f3e8b888dbd809a9225d6922e2170dc8f4a68b08a702b4dfea0058bfd extends \Twig\Template
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
\t.dlogo {
\t\tdisplay: flex !important;
\t}

\t.jcenter1 {
\t\tjustify-content: center !important;
\t}

\t.blink {
\t\tanimation: blinker 0.7s linear infinite;

\t\tfont-weight: bold;
\t\tfont-family: sans-serif;
\t}

\t@keyframes blinker {
\t\t50% {
\t\t\tcolor: #4a4975;
\t\t\tfont-weight: bold;

\t\t}
\t}
</style>

";
        // line 26
        if (($context["categories"] ?? null)) {
            // line 27
            echo "<div class=\"container\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t<ul class=\"nav col-md-12  justify-content-start jcenter\" style=\"align-items: center;\">
\t\t\t\t
\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px; left:-300px;\">
\t\t\t\t\t\t";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 38), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 38)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 38), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 40
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 41
                            echo "\t\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 42
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 42);
                            echo " \"
\t\t\t\t\t\t\t\tstyle=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            // line 43
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 43);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 45
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 45));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 46
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 47
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 47);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 47);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t<li style=\"padding:0 2%;\">
\t\t\t\t\t";
                    // line 59
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59) == "New Arrival")) {
                        // line 60
                        echo "\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 60);
                        echo " \" class=\"blink\" style=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t\t";
                        // line 61
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 63
                        echo "\t\t
\t\t\t\t\t<a href=\" ";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 64);
                        echo " \">
\t\t\t\t\t\t";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t</li>
\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t
\t</nav>
</div>
";
        }
        // line 76
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 76,  187 => 70,  181 => 69,  177 => 67,  172 => 65,  168 => 64,  165 => 63,  160 => 61,  155 => 60,  153 => 59,  150 => 58,  145 => 55,  139 => 54,  130 => 50,  119 => 47,  116 => 46,  112 => 45,  107 => 43,  103 => 42,  100 => 41,  95 => 40,  91 => 38,  84 => 36,  81 => 35,  78 => 34,  74 => 33,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
