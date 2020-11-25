<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/cats_levillagebyca/templates/cats-chicle-head_block.html.twig */
class __TwigTemplate_86946fa22a0b35a90cf2f93a04791662d0671934adac1044f995a7aeb890127f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 5];
        $functions = ["path" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "/fr") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 2
            echo "<div class=\"ca-blocks-extern-separator\"></div>
<div class=\"ca-blocks-chiffres-container\">
\t<div class=\"ca-blocks-title\">
\t\t<h2>";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uptitle"] ?? null)), "html", null, true);
            echo "</h2>
\t</div>
\t<div class=\"ca-blocks-intern-separator\"></div>
\t<div class=\"ca-blocks-subtitle-black\">
\t\t<h3>
\t\t\t<span class=\"titre-color-head\">";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downcoloredtitle"] ?? null)), "html", null, true);
            echo "</span> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downtitle"] ?? null)), "html", null, true);
            echo "
\t\t</h3>
\t</div>
\t<div>&nbsp;</div>

\t<table id=\"ca-blocks-chiffres-box\">
\t\t<tbody><tr><td>
\t\t\t<div class=\"ca-blocks-chiffres-item\">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffresu"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textsu"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrepart"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textpart"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrevi"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textvi"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrefo"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textfo"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t\t</td>
\t</tr></tbody></table>
</div>
";
        } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "/en") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            // line 47
            echo "<div class=\"ca-blocks-extern-separator\"></div>
<div class=\"ca-blocks-chiffres-container\">
\t<div class=\"ca-blocks-title\">
\t\t<h2>";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uptitleen"] ?? null)), "html", null, true);
            echo "</h2>
\t</div>
\t<div class=\"ca-blocks-intern-separator\"></div>
\t<div class=\"ca-blocks-subtitle-black\">
\t\t<h3>
\t\t\t<span class=\"titre-color-head\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downcoloredtitleen"] ?? null)), "html", null, true);
            echo "</span> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downtitleen"] ?? null)), "html", null, true);
            echo "
\t\t</h3>
\t</div>
\t<div>&nbsp;</div>

\t<table id=\"ca-blocks-chiffres-box\">
\t\t<tbody><tr><td>
\t\t\t<div class=\"ca-blocks-chiffres-item\">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffresuen"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textsuen"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffreparten"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textparten"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrevien"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textvien"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-blocks-chiffres-chiffres\">";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrefoen"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-blocks-chiffres-legends\">";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textfoen"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t\t</td>
\t</tr></tbody></table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/cats_levillagebyca/templates/cats-chicle-head_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 86,  201 => 84,  193 => 79,  188 => 77,  180 => 72,  175 => 70,  167 => 65,  162 => 63,  149 => 55,  141 => 50,  136 => 47,  127 => 41,  122 => 39,  114 => 34,  109 => 32,  101 => 27,  96 => 25,  88 => 20,  83 => 18,  70 => 10,  62 => 5,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cats_levillagebyca/templates/cats-chicle-head_block.html.twig", "/var/www/html/modules/custom/cats_levillagebyca/templates/cats-chicle-head_block.html.twig");
    }
}
