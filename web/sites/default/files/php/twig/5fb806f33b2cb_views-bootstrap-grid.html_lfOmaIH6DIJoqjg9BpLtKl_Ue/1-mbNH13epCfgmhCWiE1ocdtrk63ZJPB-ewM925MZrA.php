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

/* modules/views_bootstrap/templates/views-bootstrap-grid.html.twig */
class __TwigTemplate_8e7eaa72d23f54d0670e072ef1ecac64f869f75c8ba6bc243b89bf22b5d211c7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 18
($context["options"] ?? null), "alignment", [])];
        // line 21
        if (($context["title"] ?? null)) {
            // line 22
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 24
        echo "<div id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 25
        if (($this->getAttribute(($context["options"] ?? null), "alignment", []) == "horizontal")) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo "      <div class=\"row\">
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 29
                    echo "          <div class=\"col ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_xs"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_sm"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_md"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_lg"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "row_class", [])), "html", null, true);
                    echo "\">
            ";
                    // line 30
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  ";
        } else {
            // line 36
            echo "    <div class=\"row\">
      ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 38
                echo "        <div class=\"col ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_xs"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_sm"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_md"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_lg"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "row_class", [])), "html", null, true);
                echo "\">
          ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 40
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </div>

        ";
                // line 44
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "xs", []))) {
                    // line 45
                    echo "          <div class=\"clearfix visible-xs-block\"></div>
        ";
                }
                // line 47
                echo "
        ";
                // line 48
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "sm", []))) {
                    // line 49
                    echo "          <div class=\"clearfix visible-sm-block\"></div>
        ";
                }
                // line 51
                echo "
        ";
                // line 52
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "md", []))) {
                    // line 53
                    echo "          <div class=\"clearfix visible-md-block\"></div>
        ";
                }
                // line 55
                echo "
        ";
                // line 56
                if ((0 == $this->getAttribute($context["loop"], "index", []) % $this->getAttribute(($context["sizes"] ?? null), "lg", []))) {
                    // line 57
                    echo "          <div class=\"clearfix visible-lg-block\"></div>
        ";
                }
                // line 59
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </div>
  ";
        }
        // line 62
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 62,  193 => 60,  179 => 59,  175 => 57,  173 => 56,  170 => 55,  166 => 53,  164 => 52,  161 => 51,  157 => 49,  155 => 48,  152 => 47,  148 => 45,  146 => 44,  142 => 42,  133 => 40,  129 => 39,  116 => 38,  99 => 37,  96 => 36,  93 => 35,  86 => 33,  77 => 30,  64 => 29,  60 => 28,  57 => 27,  52 => 26,  50 => 25,  43 => 24,  37 => 22,  35 => 21,  33 => 18,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-grid.html.twig", "/Applications/MAMP/htdocs/web/modules/views_bootstrap/templates/views-bootstrap-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 21, "for" => 26];
        static $filters = ["escape" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
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
