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

/* themes/lesvillagesbyca/templates/pages/page.html.twig */
class __TwigTemplate_036e77b1fee1368cc5ace469d73f62dda949f0fd737dc894c8b2326e42c1b6f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "include" => 8];
        $filters = ["escape" => 4];
        $functions = ["path" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        echo "<div id=\"mySidenav\" class=\"sidenav\" style=\"width: 0;\">
\t<div class=\"sidenav-container\">
\t\t  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\"></a>
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 4
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "/en") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            echo "/en";
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        }
        echo "\"></a>
\t\t  <a href=\"";
        // line 5
        if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "/en") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
            echo "/en";
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        }
        echo "\" data-drupal-link-system-path=\"node\" class=\"is-active home-button\" onclick=\"closeNav()\">ACCUEIL</a>
      ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primarymenu", [])), "html", null, true);
        echo "
\t\t  ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondarymenu", [])), "html", null, true);
        echo "
\t\t  ";
        // line 8
        $this->loadTemplate("@lesvillagesbyca/navigation/links--language-block.html.twig", "themes/lesvillagesbyca/templates/pages/page.html.twig", 8)->display($context);
        // line 9
        echo "\t</div>
</div>
<nav id=\"navbar-sticky\" class=\"navbar navbar-dark bg-light navbar-expand-lg static-top\">
  <div class=\"container\" id=\"navbar-container\">
    <a class=\"navbar-brand\" href=\"";
        // line 13
        if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "/en") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
            echo "/en";
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        }
        echo "\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"   aria-expanded=\"false\" aria-label=\"Toggle navigation\" onclick=\"openNav()\">
          <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
    ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primarymenu", [])), "html", null, true);
        echo "
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
    ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondarymenu", [])), "html", null, true);
        echo "
    </div>
\t</div>
</nav>
<div class=\"jumbotron-";
        // line 25
        if ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "/le-reseau") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 === substr($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, -strlen($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52))))) {
            // line 26
            echo "reseau";
        } elseif ((is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = "/startups") && ('' === $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 === substr($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136, -strlen($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386))))) {
            // line 27
            echo "startups";
        } elseif ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>")) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "/partenaires") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae === substr($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, -strlen($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae))))) {
            // line 28
            echo "partenaires";
        } else {
            echo "home";
        }
        echo "\">
  ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "jumbotron", [])), "html", null, true);
        echo "
</div>
<div class=\"content container\">
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
</div>
<footer>
\t\t<!-- Footer top -->
\t\t<div class=\"footer-top\">
          ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topfooter", [])), "html", null, true);
        echo "
    </div>
\t\t<!-- Footer top -->
\t  
\t\t<!-- Footer bottom: copyright -->
\t\t<div class=\"footer-copyright text-center py-3\" style=\"background-color:#1D1045\">
      ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottomfooter", [])), "html", null, true);
        echo "
    </div>
\t\t<!-- Copyright -->  
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/lesvillagesbyca/templates/pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  146 => 37,  138 => 32,  132 => 29,  125 => 28,  122 => 27,  119 => 26,  117 => 25,  110 => 21,  104 => 18,  92 => 13,  86 => 9,  84 => 8,  80 => 7,  76 => 6,  68 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lesvillagesbyca/templates/pages/page.html.twig", "/var/www/html/themes/lesvillagesbyca/templates/pages/page.html.twig");
    }
}
