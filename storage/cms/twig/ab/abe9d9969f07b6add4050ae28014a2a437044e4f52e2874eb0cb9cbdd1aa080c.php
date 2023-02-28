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

/* C:\xampp\htdocs\cerosiete/themes/cerosiete/layouts/default.htm */
class __TwigTemplate_5b4b0a567a94848b5e63bf78f900d8437ea5f346a6e82d0ac43695e0a793aaf0 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es-MX\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>CeroSiete - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"author\" content=\"CeroSiete\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"generator\" content=\"CeroSiete\">
        <!-- <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\"> -->
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor/animate.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor/hover-min.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/dist/jquery.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-2.8.3.min.js");
        echo "\"></script>
        <script>var siteURL = '<?php echo get_site_url(); ?>';</script>
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        </header>

        <!-- Content -->
        <main id=\"layout-content\">
            ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 33
        echo "        </main>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "        </footer>

        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/popper.js/dist/umd/popper.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/dist/js/bootstrap.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery.easing.1.3.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/greensock/dist/TweenMax.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins/wow.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins/slick.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts/genericScript.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts/layoutScripts.min.js");
        echo "\"></script>
        <script>
          var wow = new WOW(
            {
              boxClass: 'wow',      // default
              animateClass: 'animated', // default
              offset: 0,          // default
              mobile: false,       // default
              live: true        // default
            })
          setTimeout(function () {
            wow.init();
          }, 1000);
        </script>
        ";
        // line 62
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 63
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 64
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cerosiete/themes/cerosiete/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  181 => 63,  170 => 62,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  120 => 38,  116 => 37,  110 => 33,  108 => 32,  102 => 28,  98 => 27,  88 => 20,  84 => 19,  81 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es-MX\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>CeroSiete - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"author\" content=\"CeroSiete\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"generator\" content=\"CeroSiete\">
        <!-- <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\"> -->
        <link href=\"{{ 'assets/css/style.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/vendor/animate.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/vendor/hover-min.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}

        <script type=\"text/javascript\" src=\"{{ 'assets/vendor/jquery/dist/jquery.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/vendor/modernizr-2.8.3.min.js'|theme }}\"></script>
        <script>var siteURL = '<?php echo get_site_url(); ?>';</script>
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <main id=\"layout-content\">
            {% page %}
        </main>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"{{ 'assets/vendor/popper.js/dist/umd/popper.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/vendor/bootstrap/dist/js/bootstrap.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/vendor/jquery.easing.1.3.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/vendor/greensock/dist/TweenMax.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/plugins/wow.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/plugins/slick.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/scripts/genericScript.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/scripts/layoutScripts.min.js'|theme }}\"></script>
        <script>
          var wow = new WOW(
            {
              boxClass: 'wow',      // default
              animateClass: 'animated', // default
              offset: 0,          // default
              mobile: false,       // default
              live: true        // default
            })
          setTimeout(function () {
            wow.init();
          }, 1000);
        </script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\cerosiete/themes/cerosiete/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 17, "partial" => 27, "page" => 32, "framework" => 62, "scripts" => 63);
        static $filters = array("escape" => 6, "theme" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
