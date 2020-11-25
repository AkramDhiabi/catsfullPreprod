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

/* modules/custom/cats_levillagebyca/templates/cats-chicle-head-xs_block.html.twig */
class __TwigTemplate_2b628f95af2dcfc923339e9bfb73825c303599f21236790ea3dd00d34171c997 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 4];
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
<div id=\"ca-xs-blocks-chiffres-container\">
\t<div class=\"ca-xs-blocks-title\">";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uptitle"] ?? null)), "html", null, true);
            echo "</div>
\t<div class=\"ca-xs-blocks-intern-separator\"></div>
\t<div><span class=\"ca-xs-blocks-subtitle-secondary-bis titre-color-head\">";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downcoloredtitle"] ?? null)), "html", null, true);
            echo " </span>
\t\t<span class=\"ca-xs-blocks-subtitle-black\"> ";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downtitle"] ?? null)), "html", null, true);
            echo "</span>
\t</div>

\t<table id=\"ca-xs-blocks-chiffres-box\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item\">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffresu"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textsu"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrepart"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textpart"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrevi"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textvi"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrefo"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textfo"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>
";
        } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "/en") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            // line 48
            echo "<div class=\"ca-blocks-extern-separator\"></div>
<div id=\"ca-xs-blocks-chiffres-container\">
\t<div class=\"ca-xs-blocks-title\">";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uptitleen"] ?? null)), "html", null, true);
            echo "</div>
\t<div class=\"ca-xs-blocks-intern-separator\"></div>
\t<div><span class=\"ca-xs-blocks-subtitle-secondary-bis titre-color-head\">";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downcoloredtitleen"] ?? null)), "html", null, true);
            echo " </span>
\t\t<span class=\"ca-xs-blocks-subtitle-black\"> ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["downtitleen"] ?? null)), "html", null, true);
            echo "</span>
\t</div>

\t<table id=\"ca-xs-blocks-chiffres-box\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item\">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffresuen"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textsuen"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffreparten"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textparten"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrevien"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textvien"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-item \">
\t\t\t\t<div class=\"ca-xs-blocks-chiffres-chiffres\">";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chiffrefoen"] ?? null)), "html", null, true);
            echo "</div>

\t\t\t\t<div class=\"ca-xs-blocks-chiffres-legends\">";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textfoen"] ?? null)), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/cats_levillagebyca/templates/cats-chicle-head-xs_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 86,  203 => 84,  195 => 79,  190 => 77,  180 => 70,  175 => 68,  167 => 63,  162 => 61,  151 => 53,  147 => 52,  142 => 50,  138 => 48,  127 => 40,  122 => 38,  114 => 33,  109 => 31,  99 => 24,  94 => 22,  86 => 17,  81 => 15,  70 => 7,  66 => 6,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cats_levillagebyca/templates/cats-chicle-head-xs_block.html.twig", "/var/www/html/modules/custom/cats_levillagebyca/templates/cats-chicle-head-xs_block.html.twig");
    }
}
