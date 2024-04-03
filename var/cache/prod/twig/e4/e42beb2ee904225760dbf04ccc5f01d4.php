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

/* header/index.html.twig */
class __TwigTemplate_7b8a34dbcc956bb1c0f47e87709dc6a7 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<header  class=\"header_wrap fixed-top header_with_topbar active\">
    <div  class=\"top-header\" style=\"background-color:#292B2C;\">
        <div  class=\"container\">
            <div  class=\"row align-items-center\">
                <div  class=\"col-md-6\">
                    
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"text-center text-md-end\">
                        <ul  class=\"header_list\">
                            <li >
                                
                            <li >
                                ";
        // line 16
        echo "                            
                                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                    <li>
                                        <a href=\"/account\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Compte</span></a>
                                    </li>

                                    <li >
                                        <a href=\"/logout\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Se déconnecter</span></a>
                                    </li>
                                    
                                ";
        } else {
            // line 27
            echo "                                    <li >
                                        <a href=\"/register\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >S'inscrire</span></a>
                                    </li>
                                    <li >
                                        <a href=\"/login\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Se connecter</span></a>
                                    </li>

                                ";
        }
        // line 35
        echo "                            <li ></li>
                            <li ></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_header dark_skin main_menu_uppercase\" style=\"background-color:#F5F5F5;\">
        <div  class=\"container\">
            <nav  class=\"navbar navbar-expand-lg\"><a 
                    routerlink=\"/\" class=\"navbar-brand\" ng-reflect-router-link=\"/\" href=\"/\">
                    <h2>
                        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 48), "get", ["settings"], "method", false, false, false, 48), "websiteName", [], "any", false, false, false, 48), "html", null, true);
        echo "
                    </h2>
                </a><button  type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-expanded=\"false\"
                    class=\"navbar-toggler collapsed\"><span 
                        class=\"ion-android-menu\"></span></button>
                <div  id=\"navbarSupportedContent\"
                    class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul  class=\"navbar-nav\">
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"/\">Accueil</a></li>
                        <li  class=\"dropdown\"><a  href=\"#\"
                                data-bs-toggle=\"dropdown\" class=\"dropdown-toggle nav-link active\"
                                aria-expanded=\"false\">Pages</a>
                            <div  class=\"dropdown-menu\">
                                <ul >
                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 64), "get", ["pagesHeader"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 65
            echo "                                    <li ><a class=\"dropdown-item nav-link nav_item\" href=\"/page/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "</a>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </ul>
                            </div>
                        </li>
                        <li  class=\"dropdown dropdown-mega-menu\"><a
                                 href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link\" aria-expanded=\"false\">Produits</a>
                            <div  class=\"dropdown-menu\">
                                <ul  class=\"mega-menu d-lg-flex\">
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 76), "get", ["categories"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 77
            echo "                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</li>
                                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "                                            <li>
                                            
                                                <a class=\"dropdown-item nav-link nav_item\" href=\"/product/";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 83), "html", null, true);
                echo "\">
                                                    ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                        </ul>
                                    </li>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                                </ul>
                                
                        </li>
                        ";
        // line 99
        echo "                        <li ><a  routerlink=\"/contact\"
                                class=\"nav-link nav_item\" href=\"/contact\">Contact</a></li>
                    </ul>
                </div>
                <ul  class=\"navbar-nav attr-nav align-items-center\">
                    <!-- <li  class=\"dropdown cart_dropdown\"><a 
                            href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link cart_trigger\"><i
                                 class=\"linearicons-cart\"></i><span
                                 class=\"cart_count\">31</span></a>
                        <div  class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul  class=\"cart_list\">
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_5/36851533762117856286455670026456984987161761684087224828.webp\">Culotte
                                        en dentelle</a><span  class=\"cart_quantity\"> 11 x
                                        <span  class=\"cart_amount\"><span
                                                
                                                class=\"price_symbole\">23,91&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_9/116945623386141314594418897879593148825527931684087225230.webp\">Culotte
                                        unicolore (sans couture)</a><span 
                                        class=\"cart_quantity\"> 4 x <span 
                                            class=\"cart_amount\"><span 
                                                class=\"price_symbole\">44,54&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_7/825380258783085919054835307976332473139779511684087224936.webp\">Culotte
                                        en dentelle</a><span  class=\"cart_quantity\"> 3 x
                                        <span  class=\"cart_amount\"><span
                                                
                                                class=\"price_symbole\">17,17&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/970670668041335927385290724653240714148366921684565574162.webp\">Bikini
                                        unicolore côtelé</a><span  class=\"cart_quantity\"> 4
                                        x <span  class=\"cart_amount\"><span
                                                
                                                class=\"price_symbole\">28,24&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_4/87087411019387380483560199609827534551691041684087224752.webp\">Culotte
                                        unicolore femme (sans couture)</a><span 
                                        class=\"cart_quantity\"> 2 x <span 
                                            class=\"cart_amount\"><span 
                                                class=\"price_symbole\">56,07&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_2/64690629656996101166169787112869964617448491684087224479.webp\">Tanga
                                        unicolore</a><span  class=\"cart_quantity\"> 3 x <span
                                             class=\"cart_amount\"><span
                                                
                                                class=\"price_symbole\">38,84&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_8/10518988473111520886581236853833613928085898971684087225041.webp\">Culotte
                                        en dentelle</a><span  class=\"cart_quantity\"> 1 x
                                        <span  class=\"cart_amount\"><span
                                                
                                                class=\"price_symbole\">58,43&nbsp;€</span></span></span></li>
                                <li ><a  href=\"#\"
                                        class=\"item_remove\"><i  class=\"ion-close\"></i></a><a
                                         href=\"#\"><img 
                                            width=\"50\" height=\"50\" alt=\"cart_thumb1\"
                                            src=\"/assets/files/culottes/culotte_3/6138170893214881132536005127536132168491807951684087224669.webp\">Culotte
                                        à blocs de couleurs en dentelle</a><span 
                                        class=\"cart_quantity\"> 3 x <span 
                                            class=\"cart_amount\"><span 
                                                class=\"price_symbole\">54,95&nbsp;€</span></span></span></li>
                            </ul>
                            <div  class=\"cart_footer\">
                                <p  class=\"cart_total\"><strong
                                        >Subtotal:</strong><span
                                         class=\"cart_price\"><span
                                            
                                            class=\"price_symbole\"></span></span>1 057,58&nbsp;€ </p>
                                ";
        // line 195
        echo "                            </div>
                        </div>
                    </li> -->
                     <p  class=\"cart_buttons\">
                            <a class=\"btn btn-fill-out view-cart\" href=\"/cart\">Panier</a>
                            <a class=\"btn btn-fill-line checkout\" href=\"/checkout\">Paiement</a></p>
                </ul>
            </nav>
        </div>
    </div>
</header>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  280 => 195,  188 => 99,  182 => 92,  173 => 88,  163 => 84,  159 => 83,  155 => 81,  151 => 80,  147 => 79,  143 => 77,  139 => 76,  129 => 68,  117 => 65,  113 => 64,  94 => 48,  79 => 35,  69 => 27,  58 => 18,  56 => 17,  53 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\header\\index.html.twig");
    }
}
