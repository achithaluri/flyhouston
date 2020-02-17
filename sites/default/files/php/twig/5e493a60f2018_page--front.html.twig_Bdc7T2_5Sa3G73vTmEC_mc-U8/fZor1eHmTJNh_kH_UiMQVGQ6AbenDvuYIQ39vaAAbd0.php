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
        $tags = ["if" => 499];
        $filters = ["escape" => 500];
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
    
        <ul class=\"navtree\">
            <li class=\"opened\">
                <div class=\"expand level1\" style=\"background-color: #74bbe8\">
                    <div class=\"valign\">
                        <div class=\"title\">IAH</div>
                        <div class=\"desc\">George Bush Intercontinental Airport</div>
                    </div>
                </div>
                <ul style=\"display: block;\">
                
                    <li>
                        
                            <div class=\"expand\">Flight &amp; Travel</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"#\">Airlines and Destinations</a>
                                        </li>                                                                  
                                    
                                        <li><a target=\"\" href=\"#\">Baggage</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"#\">International Travel</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"3\">Hotels</a>
                                        </li>
                                                                  
                                    
                                        <li><a target=\"\" href=\"#\">Security</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Dine, Shop &amp; Relax</div>
                            <ul>    
                                        <li><a target=\"\" href=\"#\">Dine</a>
                                        </li>
                                        <li><a target=\"\" href=\"/iah/shop/\">Shop</a> </li>
                                        <li><a target=\"\" href=\"/iah/relax/\">Relax</a>
                                        </li>
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Parking</div>
                            <ul>                                
                                    
                                        <li><a target=\"\" href=\"/iah/parking/\">Terminal Parking</a>
                                        </li>

                                
                                    
                                        <li><a target=\"\" href=\"#\">Valet Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ecopark >ecopark</a> </li>
                                    
                                
                                    
                                        <li><a target=\" \"=\"\">ecopark2</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/corporate-parking/\">Corporate Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/parking-plus/\">Parking Plus</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ev-charging-stations/\">EV Charging Stations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Ground Transportation</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ground-transportation/\">Overview</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/taxis-ride-apps/\">Taxis and TNC</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/limos-sedans/\">Limousines and Sedans</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/shuttles-buses/\">Shuttles and Buses</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/rental-cars/\">Rental Cars</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/interterminal-transportation/\">Inter-terminal Transportation</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <a class=\"level2\" target=\"\" href=\"/iah/maps/\">Maps</a>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Visitor Information</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/iah/visitor-information/\">Airport Visitor Information</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/exploring-houston/\">Exploring Houston</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/services/\">Services</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                </ul>
            </li>
        </ul>
    
        <ul class=\"navtree\">
            <li class=\"opened\">
                <div class=\"expand level1\" style=\"background-color: #90cc85\">
                    <div class=\"valign\">
                        <div class=\"title\">HOU</div>
                        <div class=\"desc\">William P. Hobby Airport</div>
                    </div>
                </div>
                <ul style=\"display: block;\">
                
                    <li>
                        
                            <div class=\"expand\">Flight &amp; Travel</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/baggage/\">Baggage</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/international-travel/\">International Travel</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/hotels/\">Hotels</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/security/\">Security</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/airlines/\">Airlines and Destinations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Dine, Shop &amp; Relax</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/dine/\">Dine</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/shop/\">Shop</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/relax/\">Relax</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Parking</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/parking/\">Terminal Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/valet-parking/\">Valet Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ecopark/\">ecopark</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/corporate-parking/\">Corporate Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/parking-plus/\">Parking Plus</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ev-charging-stations/\">EV Charging Stations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Ground Transportation</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ground-transportation/\">Overview</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/taxis-ride-apps/\">Taxis and TNC</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/limos-sedans/\">Limousines and Sedans</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/shuttles-buses/\">Shuttles and Buses</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/rental-cars/\">Rental Cars</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <a class=\"level2\" target=\"\" href=\"/hou/maps/\">Maps</a>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Visitor Information</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/visitor-information/\">Airport Visitor Information</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/exploring-houston/\">Exploring Houston</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/services/\">Services</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                </ul>
            </li>
        </ul>
    
    <ul class=\"other\">
        <li><a href=\"/ellington-airport/\" class=\"ell\">Ellington Airport</a></li>
        
        <li><a href=\"/spaceport/\" class=\"space\">Houston Spaceport</a></li>
        
        
        <li><a href=\"/biz/\" class=\"biz\">Business and Partnerships</a></li>
        
    </ul>
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
        // line 494
        echo "
<img src=\"themes/business_responsive_theme/images/banner-one.jpg\">
<div id=\"navpanel\">
  <div id=\"gradientbottom\"></div>
<!--content-->
";
        // line 499
        if ($this->getAttribute(($context["page"] ?? null), "home_page_slider", [])) {
            // line 500
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_page_slider", [])), "html", null, true);
            echo "
";
        }
        // line 502
        echo "<!--content end-->
  <footer>
    
<!-- Start Footer Menu -->
";
        // line 506
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 507
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-12\">
          ";
            // line 511
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 518
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
        return array (  529 => 518,  519 => 511,  513 => 507,  511 => 506,  505 => 502,  500 => 500,  498 => 499,  491 => 494,  63 => 67,  55 => 60,);
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
    
        <ul class=\"navtree\">
            <li class=\"opened\">
                <div class=\"expand level1\" style=\"background-color: #74bbe8\">
                    <div class=\"valign\">
                        <div class=\"title\">IAH</div>
                        <div class=\"desc\">George Bush Intercontinental Airport</div>
                    </div>
                </div>
                <ul style=\"display: block;\">
                
                    <li>
                        
                            <div class=\"expand\">Flight &amp; Travel</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"#\">Airlines and Destinations</a>
                                        </li>                                                                  
                                    
                                        <li><a target=\"\" href=\"#\">Baggage</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"#\">International Travel</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"3\">Hotels</a>
                                        </li>
                                                                  
                                    
                                        <li><a target=\"\" href=\"#\">Security</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Dine, Shop &amp; Relax</div>
                            <ul>    
                                        <li><a target=\"\" href=\"#\">Dine</a>
                                        </li>
                                        <li><a target=\"\" href=\"/iah/shop/\">Shop</a> </li>
                                        <li><a target=\"\" href=\"/iah/relax/\">Relax</a>
                                        </li>
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Parking</div>
                            <ul>                                
                                    
                                        <li><a target=\"\" href=\"/iah/parking/\">Terminal Parking</a>
                                        </li>

                                
                                    
                                        <li><a target=\"\" href=\"#\">Valet Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ecopark >ecopark</a> </li>
                                    
                                
                                    
                                        <li><a target=\" \"=\"\">ecopark2</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/corporate-parking/\">Corporate Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/parking-plus/\">Parking Plus</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ev-charging-stations/\">EV Charging Stations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Ground Transportation</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/iah/ground-transportation/\">Overview</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/taxis-ride-apps/\">Taxis and TNC</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/limos-sedans/\">Limousines and Sedans</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/shuttles-buses/\">Shuttles and Buses</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/rental-cars/\">Rental Cars</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/interterminal-transportation/\">Inter-terminal Transportation</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <a class=\"level2\" target=\"\" href=\"/iah/maps/\">Maps</a>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Visitor Information</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/iah/visitor-information/\">Airport Visitor Information</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/exploring-houston/\">Exploring Houston</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/iah/services/\">Services</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                </ul>
            </li>
        </ul>
    
        <ul class=\"navtree\">
            <li class=\"opened\">
                <div class=\"expand level1\" style=\"background-color: #90cc85\">
                    <div class=\"valign\">
                        <div class=\"title\">HOU</div>
                        <div class=\"desc\">William P. Hobby Airport</div>
                    </div>
                </div>
                <ul style=\"display: block;\">
                
                    <li>
                        
                            <div class=\"expand\">Flight &amp; Travel</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/baggage/\">Baggage</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/international-travel/\">International Travel</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/hotels/\">Hotels</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/security/\">Security</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/airlines/\">Airlines and Destinations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Dine, Shop &amp; Relax</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/dine/\">Dine</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/shop/\">Shop</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/relax/\">Relax</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Parking</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/parking/\">Terminal Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/valet-parking/\">Valet Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ecopark/\">ecopark</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/corporate-parking/\">Corporate Parking</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/parking-plus/\">Parking Plus</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ev-charging-stations/\">EV Charging Stations</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Ground Transportation</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/ground-transportation/\">Overview</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/taxis-ride-apps/\">Taxis and TNC</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/limos-sedans/\">Limousines and Sedans</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/shuttles-buses/\">Shuttles and Buses</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/rental-cars/\">Rental Cars</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                    <li>
                        
                            <a class=\"level2\" target=\"\" href=\"/hou/maps/\">Maps</a>
                        
                    </li>
                
                    <li>
                        
                            <div class=\"expand\">Visitor Information</div>
                            <ul>
                                
                                    
                                        <li><a target=\"\" href=\"/hou/visitor-information/\">Airport Visitor Information</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/exploring-houston/\">Exploring Houston</a>
                                        </li>
                                    
                                
                                    
                                        <li><a target=\"\" href=\"/hou/services/\">Services</a>
                                        </li>
                                    
                                
                            </ul>
                        
                    </li>
                
                </ul>
            </li>
        </ul>
    
    <ul class=\"other\">
        <li><a href=\"/ellington-airport/\" class=\"ell\">Ellington Airport</a></li>
        
        <li><a href=\"/spaceport/\" class=\"space\">Houston Spaceport</a></li>
        
        
        <li><a href=\"/biz/\" class=\"biz\">Business and Partnerships</a></li>
        
    </ul>
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

<img src=\"themes/business_responsive_theme/images/banner-one.jpg\">
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
