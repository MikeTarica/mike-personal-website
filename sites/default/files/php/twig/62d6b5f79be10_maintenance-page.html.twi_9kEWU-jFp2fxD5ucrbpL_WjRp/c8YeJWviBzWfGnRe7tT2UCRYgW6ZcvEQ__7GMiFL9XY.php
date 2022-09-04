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

/* core/themes/classy/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_21c8fa5a105ddb8f7339ac64781ca4eb17e57ecf6bcca88fc1d35de52b3d4a71 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if (($context["logo"] ?? null)) {
            // line 16
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 16, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 17, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 22
            echo "      <div class=\"name-and-slogan\">
        ";
            // line 23
            if (($context["site_name"] ?? null)) {
                // line 24
                echo "         <h1 class=\"site-name\">
           <a href=\"";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 25, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 25, $this->source), "html", null, true);
                echo "</a>
         </h1>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (($context["site_slogan"] ?? null)) {
                // line 30
                echo "          <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 30, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 32
            echo "      </div>";
            // line 33
            echo "    ";
        }
        // line 34
        echo "
  </header>

  <main role=\"main\">
    ";
        // line 38
        if (($context["title"] ?? null)) {
            // line 39
            echo "      <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 39, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "

    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
  </main>

  ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 47)) {
            // line 48
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
    </aside>";
            // line 51
            echo "  ";
        }
        // line 52
        echo "
  ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53)) {
            // line 54
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
    </aside>";
            // line 57
            echo "  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 59)) {
            // line 60
            echo "    <footer role=\"contentinfo\">
      ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 64
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  163 => 61,  160 => 60,  158 => 59,  155 => 58,  152 => 57,  148 => 55,  145 => 54,  143 => 53,  140 => 52,  137 => 51,  133 => 49,  130 => 48,  128 => 47,  122 => 44,  117 => 42,  114 => 41,  108 => 39,  106 => 38,  100 => 34,  97 => 33,  95 => 32,  89 => 30,  87 => 29,  84 => 28,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  64 => 21,  61 => 20,  53 => 17,  46 => 16,  44 => 15,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/layout/maintenance-page.html.twig", "/var/www/html/core/themes/classy/templates/layout/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16, "t" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
