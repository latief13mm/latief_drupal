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

/* themes/explore_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_de82cd92c18f92fff2939155b7b3c9ce7db57090193b4c59c0b3e2a7dacdaf31 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 68, "for" => 114];
        $filters = ["escape" => 69, "raw" => 115, "date" => 249];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"navbar-header col-md-2\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 69
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 71
        echo "      </div>

      ";
        // line 73
        if ((($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", [])) || ($context["show_social_icon"] ?? null))) {
            // line 74
            echo "          <div class=\"col-md primary-menu-wrap\">
            ";
            // line 75
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 76
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
            ";
            }
            // line 78
            echo "            
            ";
            // line 79
            if (($context["show_social_icon"] ?? null)) {
                // line 80
                echo "              <p class=\"social-media\">
                ";
                // line 81
                if (($context["facebook_url"] ?? null)) {
                    // line 82
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                }
                // line 84
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["instagram_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                    echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 96
                echo "              </p>
            ";
            }
            // line 98
            echo "            
            ";
            // line 99
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 100
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
            ";
            }
            // line 102
            echo "
          </div>
        ";
        }
        // line 105
        echo "      </div>
    </div>
  </div>
</div>

";
        // line 110
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 111
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 115
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 121
        echo "
";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 123
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 129
        echo "
";
        // line 130
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 131
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 134
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 139
        echo "
<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 144
        if ( !($context["is_front"] ?? null)) {
            // line 145
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 149
        echo "
      <div class=\"row layout\">
        ";
        // line 151
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 152
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 158
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 159
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 165
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 166
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 168
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 172
        echo "      </div>

    </div>
  </div>
</div>

";
        // line 178
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 179
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 182
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 183
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 184
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 187
            echo "
      <div class=\"row\">
        ";
            // line 189
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 190
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 191
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 193
            echo "       
        ";
            // line 194
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 195
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 196
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 199
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 200
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 201
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 204
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 205
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 206
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 209
            echo "      </div>

    </div>
  </div>
";
        }
        // line 214
        echo "
";
        // line 215
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 216
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 219
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 220
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 221
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 224
            echo "
      <div class=\"row\">
        ";
            // line 226
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 227
                echo "          <div class=\"col-sm\">
            ";
                // line 228
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 231
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 232
                echo "          <div class=\"col-sm\">
            ";
                // line 233
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 236
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 237
                echo "          <div class=\"col-sm\">
            ";
                // line 238
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 241
            echo "      </div>

    </div>
  </div>
";
        }
        // line 246
        echo "
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 249
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 250
        if (($context["show_credit_link"] ?? null)) {
            // line 251
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 253
        echo "  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/explore_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 253,  470 => 251,  468 => 250,  464 => 249,  459 => 246,  452 => 241,  446 => 238,  443 => 237,  440 => 236,  434 => 233,  431 => 232,  428 => 231,  422 => 228,  419 => 227,  417 => 226,  413 => 224,  407 => 221,  404 => 220,  402 => 219,  397 => 216,  395 => 215,  392 => 214,  385 => 209,  379 => 206,  374 => 205,  371 => 204,  365 => 201,  360 => 200,  357 => 199,  351 => 196,  346 => 195,  344 => 194,  341 => 193,  335 => 191,  330 => 190,  328 => 189,  324 => 187,  318 => 184,  315 => 183,  313 => 182,  308 => 179,  306 => 178,  298 => 172,  291 => 168,  285 => 166,  282 => 165,  275 => 161,  269 => 159,  266 => 158,  259 => 154,  253 => 152,  251 => 151,  247 => 149,  241 => 146,  238 => 145,  236 => 144,  229 => 139,  221 => 134,  216 => 131,  214 => 130,  211 => 129,  204 => 125,  200 => 123,  198 => 122,  195 => 121,  189 => 117,  180 => 115,  176 => 114,  171 => 111,  169 => 110,  162 => 105,  157 => 102,  151 => 100,  149 => 99,  146 => 98,  142 => 96,  136 => 94,  133 => 93,  127 => 91,  124 => 90,  118 => 88,  115 => 87,  109 => 85,  106 => 84,  100 => 82,  98 => 81,  95 => 80,  93 => 79,  90 => 78,  84 => 76,  82 => 75,  79 => 74,  77 => 73,  73 => 71,  67 => 69,  65 => 68,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/explore_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\latief_drupal\\themes\\explore_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
