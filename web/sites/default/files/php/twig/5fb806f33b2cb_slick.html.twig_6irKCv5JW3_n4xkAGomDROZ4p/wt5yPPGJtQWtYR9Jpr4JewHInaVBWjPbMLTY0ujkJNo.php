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

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_7ff40434264f538ba8d02ec3ee99dcb73d37a96320987fe3e54e749a00c563cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 31
        $context["classes"] = [0 => (($this->getAttribute(        // line 32
($context["settings"] ?? null), "unslick", [])) ? ("unslick") : ("")), 1 => ((((        // line 33
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "blazy", []))) ? ("blazy") : ("")), 2 => (($this->getAttribute(        // line 34
($context["settings"] ?? null), "vertical", [])) ? ("slick--vertical") : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 35
($context["settings"] ?? null), "attributes", []), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "attributes", []), "class", [])), " ")) : ("")), 4 => (($this->getAttribute(        // line 36
($context["settings"] ?? null), "skin", [])) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 5 => ((twig_in_filter("boxed", $this->getAttribute(        // line 37
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--boxed") : ("")), 6 => ((twig_in_filter("split", $this->getAttribute(        // line 38
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--split") : ("")), 7 => (($this->getAttribute(        // line 39
($context["settings"] ?? null), "optionset", [])) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "optionset", []))))) : ("")), 8 => ((        // line 40
array_key_exists("arrow_down_attributes", $context)) ? ("slick--has-arrow-down") : ("")), 9 => (($this->getAttribute(        // line 41
($context["settings"] ?? null), "asNavFor", [])) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null))))) : ("")), 10 => ((($this->getAttribute(        // line 42
($context["settings"] ?? null), "slidesToShow", []) > 1)) ? ("slick--multiple-view") : ("")), 11 => ((($this->getAttribute(        // line 43
($context["settings"] ?? null), "count", []) <= $this->getAttribute(($context["settings"] ?? null), "slidesToShow", []))) ? ("slick--less") : ("")), 12 => ((((        // line 44
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "media_switch", []))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 13 => ((((        // line 45
($context["display"] ?? null) == "thumbnail") && $this->getAttribute(($context["settings"] ?? null), "thumbnail_caption", []))) ? ("slick--has-caption") : (""))];
        // line 49
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => (($this->getAttribute(        // line 51
($context["settings"] ?? null), "vertical", [])) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 52
($context["settings"] ?? null), "skin_arrows", [])) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_arrows", []))))) : (""))];
        // line 55
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 56
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 57
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        $this->displayBlock('slick_content', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 65
            echo "    </div>
    ";
            // line 66
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 79
            echo "  ";
        }
        // line 80
        echo "</div>
";
    }

    // line 60
    public function block_slick_content($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 66
    public function block_slick_arrow($context, array $blocks = [])
    {
        // line 67
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
        ";
        // line 69
        if (array_key_exists("arrow_down_attributes", $context)) {
            // line 70
            echo "          <button";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method"), "setAttribute", [0 => "type", 1 => "button"], "method"), "setAttribute", [0 => "data-role", 1 => "none"], "method"), "setAttribute", [0 => "data-target", 1 => $this->getAttribute(            // line 73
($context["settings"] ?? null), "downArrowTarget", [])], "method"), "setAttribute", [0 => "data-offset", 1 => $this->getAttribute(            // line 74
($context["settings"] ?? null), "downArrowOffset", [])], "method")), "html", null, true);
            echo "></button>
        ";
        }
        // line 76
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 76,  117 => 74,  116 => 73,  114 => 70,  112 => 69,  108 => 68,  103 => 67,  100 => 66,  93 => 61,  90 => 60,  85 => 80,  82 => 79,  80 => 66,  77 => 65,  75 => 64,  72 => 63,  70 => 60,  67 => 59,  61 => 57,  59 => 56,  54 => 55,  52 => 52,  51 => 51,  50 => 49,  48 => 45,  47 => 44,  46 => 43,  45 => 42,  44 => 41,  43 => 40,  42 => 39,  41 => 38,  40 => 37,  39 => 36,  38 => 35,  37 => 34,  36 => 33,  35 => 32,  34 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/slick/templates/slick.html.twig", "/Applications/MAMP/htdocs/web/modules/slick/templates/slick.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 56, "block" => 60];
        static $filters = ["join" => 35, "clean_class" => 36, "escape" => 55, "raw" => 68, "striptags" => 68];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['join', 'clean_class', 'escape', 'raw', 'striptags'],
                []
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
}
