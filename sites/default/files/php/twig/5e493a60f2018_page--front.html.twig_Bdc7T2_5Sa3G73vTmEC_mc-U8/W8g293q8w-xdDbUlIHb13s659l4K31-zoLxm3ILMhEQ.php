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

/* themes/business_responsive_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_76746dfb6612faa4b445c30936dbaf26007f2c809494b73768c5a7695073598b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 71];
        $filters = ["escape" => 72];
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
        // line 60
        echo "

<!-- Header and Navbar -->
<div class=\"container-fluid main-menuwrap\">
  <div class=\"row\">

";
        // line 67
        echo "<div id=\"menu\">
  <div class=\"close\"><a href=\"#\" aria-label=\"Close\"></a></div>
  <div class=\"wrap\"><div class=\"scroll\" style=\"height: 225px;\">    
    <!-- Main Menu -->
    ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "custom_menu_block", [])) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "custom_menu_block", [])), "html", null, true);
            echo "
    ";
        }
        // line 74
        echo "    <!-- Main Menu End -->
  </div></div>
</div>
<div id=\"headerlinks\">

<a href=\"/\" id=\"logo\" aria-label=\"Houston Airport System Logo\"></a>
<div id=\"controls\">
    
<div class=\"language-switcher\">
    <div class=\"menu\">
        <span class=\"name\">
            English
            <div class=\"wrap\">                        
                            <a class=\"language\">
                                <div>
                                    <span class=\"name\">English</span>
                                    <span class=\"icon\"></span>
                                </div>
                            </a>
                            <a class=\"language\" href=\"https://es.fly2houston.com/\">
                                <div>
                                    <span class=\"name\">Español</span>
                                </div>
                            </a>
                            
                            <a class=\"language\" href=\"https://www.fly2houston.com/iah/chinese/\">
                                <div>
                                    <span class=\"name\">简体中文</span>
                                </div>
                            </a>
                        
                    
                
            </div>
        </span>
        <span class=\"\"><img src=\"themes/business_responsive_theme/images/arrow-d.png\"></span>
    </div>
</div>

    <div id=\"local-time\">4:16 am CST</div>
    <div id=\"weather\" class=\"active\"><span class=\"wi-owm-803\"></span><span>41Â°F | broken clouds</span></div>
    
<div class=\"notifications \">
  <div class=\"\"><img src=\"themes/business_responsive_theme/images/icon-menu.png\"></div>
  <div class=\"wrap\">
        
            <div class=\"bubble\">
                <div class=\"close\" aria-label=\"Close\"></div>
                <div class=\"text\">
                    No alerts at this time
                </div>
            </div>
        
  </div>
</div>

    <div id=\"search\">    
        <form method=\"get\"  action=\"/search/\">
            <input type=\"text\" name=\"q\" class=\"search-micon\" aria-label=\"Search website\">
        </form>
    </div>
    <div class=\"menu-btn\">
    <img src=\"themes/business_responsive_theme/images/menu-icon.png\">
    </div>
</div>

</div>



";
        // line 145
        echo "<!-- Background Image-->
";
        // line 146
        if ($this->getAttribute(($context["page"] ?? null), "home_page_bg_section", [])) {
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_page_bg_section", [])), "html", null, true);
            echo "
";
        }
        // line 149
        echo "<!-- Background Image end-->

<div id=\"navpanel\">
  <div id=\"gradientbottom\"></div>
<!--content-->
";
        // line 154
        if ($this->getAttribute(($context["page"] ?? null), "home_page_slider", [])) {
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_page_slider", [])), "html", null, true);
            echo "
";
        }
        // line 157
        echo "<!--content end-->
  <footer>
    
<!-- Start Footer Menu -->
";
        // line 161
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 162
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-12\">
          ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 173
        echo "<!-- End Footer Menu -->
</footer>


</div>




</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/business_responsive_theme/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 173,  187 => 166,  181 => 162,  179 => 161,  173 => 157,  168 => 155,  166 => 154,  159 => 149,  154 => 147,  152 => 146,  149 => 145,  77 => 74,  71 => 72,  69 => 71,  63 => 67,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
  * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!-- Header and Navbar -->
<div class=\"container-fluid main-menuwrap\">
  <div class=\"row\">

{# Header menu #}
<div id=\"menu\">
  <div class=\"close\"><a href=\"#\" aria-label=\"Close\"></a></div>
  <div class=\"wrap\"><div class=\"scroll\" style=\"height: 225px;\">    
    <!-- Main Menu -->
    {% if page.custom_menu_block %}
    {{ page.custom_menu_block }}
    {% endif %}
    <!-- Main Menu End -->
  </div></div>
</div>
<div id=\"headerlinks\">

<a href=\"/\" id=\"logo\" aria-label=\"Houston Airport System Logo\"></a>
<div id=\"controls\">
    
<div class=\"language-switcher\">
    <div class=\"menu\">
        <span class=\"name\">
            English
            <div class=\"wrap\">                        
                            <a class=\"language\">
                                <div>
                                    <span class=\"name\">English</span>
                                    <span class=\"icon\"></span>
                                </div>
                            </a>
                            <a class=\"language\" href=\"https://es.fly2houston.com/\">
                                <div>
                                    <span class=\"name\">Español</span>
                                </div>
                            </a>
                            
                            <a class=\"language\" href=\"https://www.fly2houston.com/iah/chinese/\">
                                <div>
                                    <span class=\"name\">简体中文</span>
                                </div>
                            </a>
                        
                    
                
            </div>
        </span>
        <span class=\"\"><img src=\"themes/business_responsive_theme/images/arrow-d.png\"></span>
    </div>
</div>

    <div id=\"local-time\">4:16 am CST</div>
    <div id=\"weather\" class=\"active\"><span class=\"wi-owm-803\"></span><span>41Â°F | broken clouds</span></div>
    
<div class=\"notifications \">
  <div class=\"\"><img src=\"themes/business_responsive_theme/images/icon-menu.png\"></div>
  <div class=\"wrap\">
        
            <div class=\"bubble\">
                <div class=\"close\" aria-label=\"Close\"></div>
                <div class=\"text\">
                    No alerts at this time
                </div>
            </div>
        
  </div>
</div>

    <div id=\"search\">    
        <form method=\"get\"  action=\"/search/\">
            <input type=\"text\" name=\"q\" class=\"search-micon\" aria-label=\"Search website\">
        </form>
    </div>
    <div class=\"menu-btn\">
    <img src=\"themes/business_responsive_theme/images/menu-icon.png\">
    </div>
</div>

</div>



{# Header end #}
<!-- Background Image-->
{% if page.home_page_bg_section %}
{{ page.home_page_bg_section }}
{% endif %}
<!-- Background Image end-->

<div id=\"navpanel\">
  <div id=\"gradientbottom\"></div>
<!--content-->
{% if page.home_page_slider %}
{{ page.home_page_slider }}
{% endif %}
<!--content end-->
  <footer>
    
<!-- Start Footer Menu -->
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-12\">
          {{ page.footer_menu }}
        </div>
        
      </div>
    </div>
  </div>
{% endif %}
<!-- End Footer Menu -->
</footer>


</div>




</div>
</div>", "themes/business_responsive_theme/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\fly2houston\\themes\\business_responsive_theme\\templates\\layout\\page--front.html.twig");
    }
}
