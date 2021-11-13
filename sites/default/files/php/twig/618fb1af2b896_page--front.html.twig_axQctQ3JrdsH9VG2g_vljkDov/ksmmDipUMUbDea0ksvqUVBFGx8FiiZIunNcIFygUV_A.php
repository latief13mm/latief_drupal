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

/* themes/easy_news/templates/layout/page--front.html.twig */
class __TwigTemplate_fdbc7b61b29a2bc61afa042d1b147e75ad5f22a1a557edef4e3e0c7d00cf3cb6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54];
        $filters = ["escape" => 55];
        $functions = ["attach_library" => 55];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 55
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("uikit_slideshow/uikit.slideshow"), "html", null, true);
            echo "
";
        }
        // line 57
        echo "
<div class=\"easy-news-header uk-container uk-container-center uk-responsive-width\" role=\"banner\">
  <div class=\"uk-grid uk-container-center uk-responsive-width uk-margin-top\">
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 62
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 66
        echo "    </div>
    <div class=\"uk-width-medium-1-2\">
    ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "header_ad", [])) {
            // line 69
            echo "      <div class=\"uk-responsive-width uk-margin-top uk-margin-bottom\">
        ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_ad", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 73
        echo "    </div>
  </div>
</div>

<div class=\"easy-news-main-menu uk-container uk-container-center uk-responsive-width\">
  <div class=\"uk-grid uk-responsive-width uk-visible-large\">
    <div class=\"uk-width-1-1\">
      <nav class=\"uk-navbar uk-responsive-width\" role=\"navigation\">
        <div class=\"uk-float-right\">
        ";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "social_icons", [])) {
            // line 83
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social_icons", [])), "html", null, true);
            echo "
        ";
        }
        // line 85
        echo "        </div>
        <div class=\"uk-float-left\">
        ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 88
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 90
        echo "        </div>
      </nav>
    </div>
  </div>
  <div class=\"uk-hidden-large\">
    <nav class=\"uk-navbar\" role=\"navigation\">
    ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 97
            echo "      <a href=\"#offcanvas\" class=\"uk-navbar-toggle\" data-uk-offcanvas=\"{mode:'slide'}\"></a>
      <div class=\"uk-offcanvas-bar\">
        ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 102
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "social_icons", [])) {
            // line 103
            echo "      <div class=\"uk-margin-small-top uk-align-right uk-margin-right\">
        ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social_icons", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 107
        echo "    </nav>
  </div>

</div>

<div class=\"uk-container uk-container-center uk-responsive-width uk-margin-top\">

";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 120
            echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
            // line 121
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 122
                echo "    <div class=\"uk-width-medium-2-3 uk-width-large-3-4\">
  ";
            } else {
                // line 124
                echo "    <div class=\"uk-width-medium-1-1\">
  ";
            }
            // line 126
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
    </div>
  ";
            // line 128
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 129
                echo "    <div class=\"uk-container uk-width-medium-1-3 uk-width-large-1-4 uk-margin-bottom\">
      ";
                // line 130
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 133
            echo "  </div>
";
        }
        // line 135
        echo "
";
        // line 141
        echo "  <div class=\"uk-grid uk-container-center uk-grid-divider uk-margin-bottom\">
  ";
        // line 142
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 143
            echo "    <div class=\"uk-width-large-3-4 uk-margin-bottom\">
  ";
        } else {
            // line 145
            echo "    <div class=\"uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 147
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 148
            echo "      <div class=\"uk-width-1-1\">
        ";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 152
        echo "      <div class=\"uk-width-1-1\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
      </div>
    ";
        // line 160
        if ((((($this->getAttribute(($context["page"] ?? null), "section_widget_1", []) || $this->getAttribute(($context["page"] ?? null), "section_widget_2", [])) || $this->getAttribute(($context["page"] ?? null), "section_widget_3", [])) || $this->getAttribute(($context["page"] ?? null), "section_widget_4", [])) || $this->getAttribute(($context["page"] ?? null), "section_widget_5", []))) {
            // line 161
            echo "      <div class=\"uk-grid uk-grid-divider\">
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_1", [])), "html", null, true);
            echo "
          ";
            // line 164
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_2", [])), "html", null, true);
            echo "
          ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_3", [])), "html", null, true);
            echo "
        </div>
        <div class=\"uk-width-medium-1-2\">
          ";
            // line 168
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_4", [])), "html", null, true);
            echo "
          ";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_5", [])), "html", null, true);
            echo "
          ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_widget_6", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 174
        echo "    </div>

  ";
        // line 176
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 177
            echo "    <div class=\"uk-container uk-width-large-1-4 uk-margin-bottom\">
  ";
        } else {
            // line 179
            echo "    <div class=\"uk-container uk-width-large-1-1 uk-margin-bottom\">
  ";
        }
        // line 181
        echo "  ";
        if ( !$this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 182
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 183
                echo "      <div class=\"uk-margin-bottom\">
        ";
                // line 184
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 187
            echo "  ";
        }
        // line 188
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 189
            echo "      <div class=\"uk-margin-bottom\">
        ";
            // line 190
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 193
        echo "    </div>
  </div>

</div>

";
        // line 198
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 199
            echo "  <div class=\"easy-news-footer uk-container uk-text-center uk-responsive-width\">
    ";
            // line 200
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 204
            echo "  <div class=\"easy-news-secondary-menu uk-container uk-responsive-width\" role=\"navigation\">
    ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 208
        if ($this->getAttribute(($context["page"] ?? null), "credits", [])) {
            // line 209
            echo "  <div class=\"easy-news-credits uk-container uk-responsive-width uk-text-center\" role=\"contentinfo\">
    ";
            // line 210
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "credits", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 213
        echo "
";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 215
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\" role=\"navigation\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas\" data-uk-nav>
        ";
            // line 218
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/easy_news/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 218,  368 => 215,  366 => 214,  363 => 213,  357 => 210,  354 => 209,  352 => 208,  346 => 205,  343 => 204,  341 => 203,  335 => 200,  332 => 199,  330 => 198,  323 => 193,  317 => 190,  314 => 189,  311 => 188,  308 => 187,  302 => 184,  299 => 183,  296 => 182,  293 => 181,  289 => 179,  285 => 177,  283 => 176,  279 => 174,  272 => 170,  268 => 169,  264 => 168,  258 => 165,  254 => 164,  250 => 163,  246 => 161,  244 => 160,  237 => 156,  231 => 152,  225 => 149,  222 => 148,  219 => 147,  215 => 145,  211 => 143,  209 => 142,  206 => 141,  203 => 135,  199 => 133,  193 => 130,  190 => 129,  188 => 128,  182 => 126,  178 => 124,  174 => 122,  172 => 121,  169 => 120,  167 => 119,  158 => 107,  152 => 104,  149 => 103,  146 => 102,  140 => 99,  136 => 97,  134 => 96,  126 => 90,  120 => 88,  118 => 87,  114 => 85,  108 => 83,  106 => 82,  95 => 73,  89 => 70,  86 => 69,  84 => 68,  80 => 66,  74 => 63,  71 => 62,  69 => 61,  63 => 57,  57 => 55,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/easy_news/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\latief_drupal\\themes\\easy_news\\templates\\layout\\page--front.html.twig");
    }
}
