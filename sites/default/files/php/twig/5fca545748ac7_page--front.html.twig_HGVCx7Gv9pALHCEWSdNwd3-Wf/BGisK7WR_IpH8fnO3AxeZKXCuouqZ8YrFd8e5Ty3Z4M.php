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

/* themes/watkins/templates/page--front.html.twig */
class __TwigTemplate_cc86bef56fd12d57e8a2a3244e1dea27185387f1785317f2a2d89e7d9cc5e084 extends \Twig\Template
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
  <section class=\"slider\">
  <div class=\"container\">
  \t<div class=\"row\">
  \t\t<div class=\"col-sm-12\">
  \t\t\t";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "\t\t
  \t\t</div>
  \t</div>
  </div>
  \t
  </section>
  <section class=\"slogan\">
    <div class=\"container\">
      <div class=\"col-sm-12 text-center\">
        ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slogan", [])), "html", null, true);
        echo "
      </div>
    </div>
  </section>
  <section class=\"whoweare\">
    <div class=\"container\">
      <div class=\"col-sm-12\">
        ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "whoweare", [])), "html", null, true);
        echo "
      </div>
    </div>
  </section>
  <section class=\"whyus\">
    <div class=\"container\">
      ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "whyus", [])), "html", null, true);
        echo "
    </div>
  </section>
  <section class=\"whatwedo\">
    <div class=\"container\">
      <div class=\"col-sm-12\">
        ";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "whatwedo", [])), "html", null, true);
        echo "
      </div>
  </section>
  
  <section class=\"testimonials\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-sm-offset-3\">
          ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "testimonials", [])), "html", null, true);
        echo "    
        </div>
      </div>
    </div>
  </section>






<section class=\"prefooter\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        ";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-4\">
        ";
        // line 151
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
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo " Watkins Asphalt & Recycling, Greensboro NC USA</p>
    </div>
  </div>
</section>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/watkins/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 159,  164 => 151,  158 => 148,  152 => 145,  134 => 130,  123 => 122,  114 => 116,  105 => 110,  95 => 103,  83 => 94,  69 => 83,  63 => 80,  56 => 76,  32 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/watkins/templates/page--front.html.twig", "/home/washaplt/watkinsasphaltpaving.com/themes/watkins/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 76, "date" => 159];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
