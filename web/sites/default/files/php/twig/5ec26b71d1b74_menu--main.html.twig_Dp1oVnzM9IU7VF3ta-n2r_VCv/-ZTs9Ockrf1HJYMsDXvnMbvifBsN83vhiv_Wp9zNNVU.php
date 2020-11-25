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

/* themes/lesvillagesbyca/templates/navigation/menu--main.html.twig */
class __TwigTemplate_1813ad4a31f40e256eb40bb36110892f66a3fbb4c68c8a409c960504d510af26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "macro" => 9, "if" => 11, "set" => 13, "for" => 20];
        $filters = ["escape" => 19];
        $functions = ["link" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link']
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
        $context["menus"] = $this;
        // line 2
        echo "
";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 9
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 10
            echo "  ";
            $context["menus"] = $this;
            // line 11
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 12
                echo "        ";
                // line 13
                $context["classes__ul"] = [0 => "main-menu", 1 => "navbar-nav", 2 => "ml-auto"];
                // line 19
                echo "      <ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes__ul"] ?? null)], "method")), "html", null, true);
                echo ">
      ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "        ";
                    // line 22
                    $context["classes__li"] = [0 => "nav-item", 1 => "main-menu-item", 2 => "ca-fonts-montserrat-medium", 3 => (($this->getAttribute(                    // line 26
$context["item"], "is_expanded", [])) ? ("main-menu-item--expanded") : ("")), 4 => (($this->getAttribute(                    // line 27
$context["item"], "is_collapsed", [])) ? ("main-menu-item--collapsed") : ("")), 5 => (($this->getAttribute(                    // line 28
$context["item"], "in_active_trail", [])) ? ("main-menu-item--active-trail") : (""))];
                    // line 31
                    echo "        <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes__li"] ?? null)], "method")), "html", null, true);
                    echo ">
          ";
                    // line 32
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    echo "
          ";
                    // line 33
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 34
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
          ";
                    }
                    // line 36
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "      </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/lesvillagesbyca/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  124 => 36,  118 => 34,  116 => 33,  112 => 32,  107 => 31,  105 => 28,  104 => 27,  103 => 26,  102 => 22,  100 => 21,  96 => 20,  91 => 19,  89 => 13,  87 => 12,  84 => 11,  81 => 10,  67 => 9,  60 => 7,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lesvillagesbyca/templates/navigation/menu--main.html.twig", "/var/www/html/themes/lesvillagesbyca/templates/navigation/menu--main.html.twig");
    }
}
