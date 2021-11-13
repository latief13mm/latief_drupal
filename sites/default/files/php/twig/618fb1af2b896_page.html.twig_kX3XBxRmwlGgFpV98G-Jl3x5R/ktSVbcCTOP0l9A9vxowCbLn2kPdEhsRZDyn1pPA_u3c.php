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

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_6a3e83b45564907af625bec3433bb2ba4f7fc93c968eb89c80eb8ca6a8dfdf88 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>

";
        // line 3
        if ((($this->getAttribute(($context["page"] ?? null), "pre_header_first", []) || $this->getAttribute(($context["page"] ?? null), "pre_header_second", [])) || $this->getAttribute(($context["page"] ?? null), "pre_header_third", []))) {
            // line 4
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 12
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_first", [])) {
                // line 13
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 14
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_first", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 17
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 20
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_second", [])) {
                // line 21
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_second", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 25
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_third", [])) {
                // line 29
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_third", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 44
        echo "
";
        // line 45
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", []) || $this->getAttribute(($context["page"] ?? null), "header_top_right", []))) {
            // line 46
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 54
            if ($this->getAttribute(($context["page"] ?? null), "header_top_left", [])) {
                // line 55
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_left_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_left", [])), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 63
            echo "            
            ";
            // line 64
            if ($this->getAttribute(($context["page"] ?? null), "header_top_right", [])) {
                // line 65
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_right_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 68
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_right", [])), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 73
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 82
        echo "
";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 84
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 102
        echo "
<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 113
            echo "                        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
                        ";
        } else {
            // line 115
            echo "                            ";
            if (($context["main_menu"] ?? null)) {
                // line 116
                echo "                            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null)), "html", null, true);
                echo "
                            ";
            }
            // line 118
            echo "                        ";
        }
        // line 119
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 130
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 148
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 151
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 152
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 160
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 170
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <div class=\"row\">
                ";
        // line 176
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 177
            echo "                <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null)), "html", null, true);
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 180
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 185
        echo "
                <section class=\"";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 195
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "promoted", [])) {
            // line 202
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promoted", [])), "html", null, true);
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 210
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 215
            echo "                                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                            ";
        }
        // line 217
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 226
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 227
            echo "                <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null)), "html", null, true);
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 230
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 235
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 242
        if ($this->getAttribute(($context["page"] ?? null), "bottom_content", [])) {
            // line 243
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 251
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_content", [])), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 261
        echo "
</div>
<!-- EOF:#page -->

";
        // line 265
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 266
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 274
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 275
                echo "                    <div class=\"footer-area\">
                    ";
                // line 276
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 279
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 282
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 283
                echo "                    <div class=\"footer-area\">
                    ";
                // line 284
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 287
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 290
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 291
                echo "                    <div class=\"footer-area\">
                    ";
                // line 292
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 295
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 298
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 299
                echo "                    <div class=\"footer-area\">
                    ";
                // line 300
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 303
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 312
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 322
        if (($context["secondary_menu"] ?? null)) {
            // line 323
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 324
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
                    </nav>
                    ";
        }
        // line 326
        echo "                    

                    ";
        // line 328
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 329
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
                    ";
        }
        // line 331
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 331,  574 => 329,  572 => 328,  568 => 326,  562 => 324,  559 => 323,  557 => 322,  545 => 312,  534 => 303,  528 => 300,  525 => 299,  523 => 298,  518 => 295,  512 => 292,  509 => 291,  507 => 290,  502 => 287,  496 => 284,  493 => 283,  491 => 282,  486 => 279,  480 => 276,  477 => 275,  475 => 274,  465 => 266,  463 => 265,  457 => 261,  444 => 251,  434 => 243,  432 => 242,  423 => 235,  415 => 230,  408 => 227,  406 => 226,  395 => 217,  389 => 215,  387 => 214,  381 => 210,  373 => 205,  368 => 202,  366 => 201,  357 => 195,  345 => 186,  342 => 185,  334 => 180,  327 => 177,  325 => 176,  317 => 170,  304 => 160,  294 => 152,  292 => 151,  287 => 148,  274 => 138,  264 => 130,  262 => 129,  250 => 119,  247 => 118,  241 => 116,  238 => 115,  232 => 113,  230 => 112,  218 => 102,  205 => 92,  195 => 84,  193 => 83,  190 => 82,  179 => 73,  171 => 68,  164 => 65,  162 => 64,  159 => 63,  151 => 58,  144 => 55,  142 => 54,  132 => 46,  130 => 45,  127 => 44,  115 => 34,  109 => 31,  105 => 29,  103 => 28,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  82 => 17,  76 => 14,  73 => 13,  71 => 12,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_business/templates/page.html.twig", "C:\\xampp\\htdocs\\latief_drupal\\themes\\bootstrap_business\\templates\\page.html.twig");
    }
}
