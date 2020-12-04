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

/* themes/watkins/templates/page.html.twig */
class __TwigTemplate_8de6d826c64bcb36d3457eb7efd105a52b0d557defa876e2ea4c932d1e157c28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
 <section class=\"topArea\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3  text-left\">
        <p class=\"social-links-top\">
          <a href=\"mailto:estimating@watkinsasphaltpaving.com\" target=\"_blank\"><img src=\"/sites/default/files/email-round.png\"></a>
          <!--<a href=\"#\" target=\"_blank\"><img src=\"/sites/default/files/twitter_s.png\"></a>
          <a href=\"#\" target=\"_blank\"><img src=\"/sites/default/files/google_plus.png\"></a>-->
        </p>
      </div>
      <div class=\"col-sm-9  text-right\">
        <p class=\"\"><a href=\"tel:1+984+999+5499\">984-999-5499</a></p>
      </div>
    </div>
  </div>
</section>
<section id=\"sticktacular\" class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3 col-xs-10\">
        ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-9 col-xs-2\">
        <div class=\"header_right_top\">
          ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right_top", [])), "html", null, true);
        echo "  
        </div>
        <div class=\"header_right_bottom\">
          ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right_bottom", [])), "html", null, true);
        echo "  
        </div>
        
      </div>
    </div>
  </div>
  </section>
  <section class=\"banner\" style=\"background:linear-gradient(rgba(255, 255, 255, 0.25),rgba(255, 255, 255, 0.25)),
 ";
        // line 91
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_hero_image", []), "entity", []), "fileuri", []))) {
            // line 92
            echo "    url('/themes/watkins/images/project-banner.jpg');
  ";
        } else {
            // line 94
            echo "    url('";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_hero_image", []), "entity", []), "fileuri", []))]), "html", null, true);
            echo "');
  ";
        }
        // line 95
        echo ";background-repeat:no-repeat;background-size:100%;\">


    <div class=\"container\">
      <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "
      </div>
      </div>
    </div>  
    
  </section>
";
        // line 107
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 108
        echo "

";
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 176
        echo "
<section class=\"prefooter\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        ";
        // line 181
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter3", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section class=\"copy\">
  <div class=\"row\">
    <div class=\"col-sm-12 text-center\">
      <p>&copy;  ";
        // line 195
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo " Watkins Asphalt & Recycling, Greensboro NC USA</p>
    </div>
  </div>
</section>
</div>
</div>";
    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        // line 112
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 116
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 117
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 122
            echo "      ";
        }
        // line 123
        echo "
      ";
        // line 125
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 126
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 131
            echo "      ";
        }
        // line 132
        echo "
      ";
        // line 134
        echo "      ";
        // line 135
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 137
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 138
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 139
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 142
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 145
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 146
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 149
            echo "        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 153
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 159
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 163
        echo "      </section>

      ";
        // line 166
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 167
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 172
            echo "      ";
        }
        // line 173
        echo "    </div>
  </div>
";
    }

    // line 117
    public function block_header($context, array $blocks = [])
    {
        // line 118
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 126
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 127
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 146
    public function block_highlighted($context, array $blocks = [])
    {
        // line 147
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 153
    public function block_help($context, array $blocks = [])
    {
        // line 154
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 159
    public function block_content($context, array $blocks = [])
    {
        // line 160
        echo "          <a id=\"main-content\"></a>
          ";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 167
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 168
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 169
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/watkins/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 169,  319 => 168,  316 => 167,  310 => 161,  307 => 160,  304 => 159,  297 => 154,  294 => 153,  287 => 147,  284 => 146,  277 => 128,  274 => 127,  271 => 126,  264 => 119,  261 => 118,  258 => 117,  252 => 173,  249 => 172,  246 => 167,  243 => 166,  239 => 163,  236 => 159,  233 => 157,  230 => 156,  227 => 153,  224 => 152,  221 => 150,  218 => 149,  215 => 146,  212 => 145,  206 => 142,  204 => 139,  203 => 138,  202 => 137,  201 => 136,  200 => 135,  198 => 134,  195 => 132,  192 => 131,  189 => 126,  186 => 125,  183 => 123,  180 => 122,  177 => 117,  174 => 116,  167 => 112,  164 => 111,  154 => 195,  143 => 187,  137 => 184,  131 => 181,  124 => 176,  122 => 111,  118 => 108,  116 => 107,  107 => 101,  99 => 95,  93 => 94,  89 => 92,  87 => 91,  76 => 83,  70 => 80,  63 => 76,  39 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/watkins/templates/page.html.twig", "/home/washaplt/watkinsasphaltpaving.com/themes/watkins/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 91, "set" => 107, "block" => 111];
        static $filters = ["escape" => 76, "date" => 195];
        static $functions = ["file_url" => 94];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['escape', 'date'],
                ['file_url']
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
