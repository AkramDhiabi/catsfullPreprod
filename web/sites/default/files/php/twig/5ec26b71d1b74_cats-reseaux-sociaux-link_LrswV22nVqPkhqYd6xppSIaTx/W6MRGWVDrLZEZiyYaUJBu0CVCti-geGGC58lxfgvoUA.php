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

/* modules/custom/cats_levillagebyca/templates/cats-reseaux-sociaux-link_block.html.twig */
class __TwigTemplate_c36ced3afb5b95de77efabcaec8c85a0914f5dc266267f69be750aed14cfac99 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 3];
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
            echo "\t<div class=\"social-links-bar\">
\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\">";
            // line 3
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiotitle"] ?? null)), "html", null, true);
            echo "</div>
\t\t<button class=\"button-footer-webradio header\" href=\"#\">";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["playertitle"] ?? null)), "html", null, true);
            echo "</button>
\t\t<button class=\"ca-header-webradio-button ca-fonts-montserrat-medium\" onclick=\"window.open('";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiourl"] ?? null)), "html", null, true);
            echo "', '_blank')\" type=\"button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiotitlebutton"] ?? null)), "html", null, true);
            echo "&nbsp;&nbsp; 
\t\t\t<img alt=\"micro-web-radio\" class=\"svg\" data-entity-type=\"file\" data-entity-uuid=\"2fcb0613-092d-42e7-a58b-0810ebf54a5b\" src=\"/sites/default/files";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iconurl"] ?? null)), "html", null, true);
            echo "\" />
\t\t</button>

\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rstitle"] ?? null)), "html", null, true);
            echo "</div>
\t\t<a class=\"social-links-inter-margin\" href=\"";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["yurl"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ytitle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"youtube-little\" data-entity-type=\"file\" data-entity-uuid=\"f6c722a4-d576-43bf-bb80-c86ea43c1607\" src=\"/sites/default/files";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["yiconpath"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<a class=\"social-links-inter-margin\" href=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["turl"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ttitle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"twitter-little\" data-entity-type=\"file\" data-entity-uuid=\"f34ba27c-9027-4a73-89a2-6ea5ba37e5c4\" src=\"/sites/default/files";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ticonpath"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<a class=\"social-links-extra-margin\" href=\"";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lurl"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ltitle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"linkedin-little\" data-entity-type=\"file\" data-entity-uuid=\"7e6ce9b1-802f-465e-b87e-9e45a6d55d49\" src=\"/sites/default/files";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["liconpath"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\" id=\"header-link-social-network-lang\">";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["languageTitle"] ?? null)), "html", null, true);
            echo "</div>
\t</div>
";
        } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "/en") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            // line 22
            echo "\t<div class=\"social-links-bar\">
\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\">";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiotitleen"] ?? null)), "html", null, true);
            echo "</div>
\t\t<button class=\"button-footer-webradio header\" href=\"#\">";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["playertitleen"] ?? null)), "html", null, true);
            echo "</button>
\t\t<button class=\"ca-header-webradio-button ca-fonts-montserrat-medium\" onclick=\"window.open('";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiourlen"] ?? null)), "html", null, true);
            echo "', '_blank')\" type=\"button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webradiotitlebuttonen"] ?? null)), "html", null, true);
            echo "&nbsp;&nbsp; 
\t\t\t<img alt=\"micro-web-radio\" class=\"svg\" data-entity-type=\"file\" data-entity-uuid=\"2fcb0613-092d-42e7-a58b-0810ebf54a5b\" src=\"/sites/default/files";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iconurlen"] ?? null)), "html", null, true);
            echo "\" />
\t\t</button>

\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\">";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rstitleen"] ?? null)), "html", null, true);
            echo "</div>
\t\t<a class=\"social-links-inter-margin\" href=\"";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["yurlen"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ytitleen"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"youtube-little\" data-entity-type=\"file\" data-entity-uuid=\"f6c722a4-d576-43bf-bb80-c86ea43c1607\" src=\"/sites/default/files";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["yiconpathen"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<a class=\"social-links-inter-margin\" href=\"";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["turlen"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ttitleen"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"twitter-little\" data-entity-type=\"file\" data-entity-uuid=\"f34ba27c-9027-4a73-89a2-6ea5ba37e5c4\" src=\"/sites/default/files";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ticonpathen"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<a class=\"social-links-extra-margin\" href=\"";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lurlen"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ltitleen"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<img alt=\"linkedin-little\" data-entity-type=\"file\" data-entity-uuid=\"7e6ce9b1-802f-465e-b87e-9e45a6d55d49\" src=\"/sites/default/files";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["liconpathen"] ?? null)), "html", null, true);
            echo "\" />
\t\t</a>
\t\t<div class=\"ca-fonts-montserrat-medium btn-primary-bis header-link-social-network\" id=\"header-link-social-network-lang\">";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["languageTitleen"] ?? null)), "html", null, true);
            echo "</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/cats_levillagebyca/templates/cats-reseaux-sociaux-link_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 39,  178 => 37,  172 => 36,  167 => 34,  161 => 33,  156 => 31,  150 => 30,  146 => 29,  140 => 26,  134 => 25,  130 => 24,  126 => 23,  123 => 22,  117 => 19,  112 => 17,  106 => 16,  101 => 14,  95 => 13,  90 => 11,  84 => 10,  80 => 9,  74 => 6,  68 => 5,  64 => 4,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cats_levillagebyca/templates/cats-reseaux-sociaux-link_block.html.twig", "/var/www/html/modules/custom/cats_levillagebyca/templates/cats-reseaux-sociaux-link_block.html.twig");
    }
}
