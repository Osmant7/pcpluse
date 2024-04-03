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
class __TwigTemplate_40f6f04e350ee844e02e6d73005f7907 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

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
                                <a href=\"/compare\"><i class=\"ti-control-shuffle\"></i><span style=\"color:#FFFFFF;\" >Compare</span></a></li>
                            <li >
                                <a href=\"/wishlist\"><i class=\"ti-heart\"></i><span style=\"color:#FFFFFF;\" >Wishlist</span></a></li>
                            
                                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
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
                    <h2 >PCplus</h2>
                </a><button  type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-expanded=\"false\"
                    class=\"navbar-toggler collapsed\"><span 
                        class=\"ion-android-menu\"></span></button>
                <div  id=\"navbarSupportedContent\"
                    class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul  class=\"navbar-nav\">
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"/\">Home</a></li>
                        <li  class=\"dropdown\"><a  href=\"#\"
                                data-bs-toggle=\"dropdown\" class=\"dropdown-toggle nav-link active\"
                                aria-expanded=\"false\">Pages</a>
                            <div  class=\"dropdown-menu\">
                                <ul >
                                    <li ><a  routerlink=\"/about\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/about\"
                                            href=\"/about\">About Us</a></li>
                                    <li ><a 
                                            routerlink=\"/contact\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/contact\" href=\"/contact\">Contact Us</a></li>
                                    <li ><a  routerlink=\"/fqa\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/fqa\"
                                            href=\"/fqa\">Faq</a></li>
                                    <li ><a 
                                            routerlink=\"/login\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/login\" href=\"/login\">Login</a></li>
                                    <li ><a 
                                            routerlink=\"/register\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/register\" href=\"/register\">Register</a></li>
                                    <li ><a  routerlink=\"/terms\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/terms\"
                                            href=\"/terms\">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </li>
                        <li  class=\"dropdown dropdown-mega-menu\"><a
                                 href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link\" aria-expanded=\"false\">Products</a>
                            <div  class=\"dropdown-menu\">
                                <ul  class=\"mega-menu d-lg-flex\">
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Souris</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-crayon-taille-h\"
                                                    href=\"/product/jupe-crayon-taille-haute-en-dentelle\">Jupe crayon
                                                    taille haute en dentelle</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-imprim-floral-t\"
                                                    href=\"/product/jupe-imprim-floral-taille-fronce\">Jupe à imprimé
                                                    floral à taille froncée</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,robe-fines-brides-im\"
                                                    href=\"/product/robe-fines-brides-imprim-tropical-en-dentelle\">Robe à
                                                    fines brides à imprimé tropical en dentelle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Tapis de souris</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-noire-brillante\"
                                                    href=\"/product/jupe-noire-brillante\">Jupe noire brillante</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-fendue-taille-h\"
                                                    href=\"/product/jupe-fendue-taille-haute\">Jupe fendue taille
                                                    haute</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-imprim-floral-t\"
                                                    href=\"/product/jupe-imprim-floral-taille-fronce\">Jupe à imprimé
                                                    floral à taille froncée</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Casques </li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-mudey\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-espero\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle\"
                                                    href=\"/product/culotte-en-dentelle\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,short-paillettes-bro\"
                                                    href=\"/product/short-paillettes-broderie-dchir\">Short à paillettes à
                                                    broderie déchiré</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Claviers</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-taille-haut\"
                                                    href=\"/product/pantalon-taille-haute-carreaux-avec-zip\">Pantalon
                                                    taille haute à carreaux avec zip</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-carreaux-av\"
                                                    href=\"/product/pantalon-carreaux-avec-cordon-la-taille\">Pantalon à
                                                    carreaux avec cordon à la taille</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-taille-fron\"
                                                    href=\"/product/pantalon-taille-fronce-poches\">Pantalon à taille
                                                    froncée à poches</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-unicolore-t\"
                                                    href=\"/product/pantalon-unicolore-taille-haute\">Pantalon unicolore
                                                    taille haute</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
                        </li>
                        <li  class=\"dropdown dropdown-mega-menu\"><a
                                 routerlink=\"/shop-list\" class=\"nav-link\"
                                ng-reflect-router-link=\"/shop-list\" href=\"/shop-list\">Shop</a></li>
                        <li ><a  routerlink=\"/contact\"
                                class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\" href=\"/contact\">Contact
                                Us</a></li>
                    </ul>
                </div>
                <ul  class=\"navbar-nav attr-nav align-items-center\">
                    <li ><a  href=\"javascript:void(0);\"
                            class=\"nav-link search_trigger\"><i 
                                class=\"linearicons-magnifier\"></i></a>
                        <div  class=\"search_wrap\"><span 
                                class=\"close-search\"><i 
                                    class=\"ion-ios-close-empty\"></i></span>
                            <form  novalidate=\"\" class=\"ng-untouched ng-pristine ng-valid\">
                                <input  type=\"text\" placeholder=\"Search\" id=\"search_input\"
                                    class=\"form-control\"><button  type=\"submit\"
                                    class=\"search_icon\"><i 
                                        class=\"ion-ios-search-strong\"></i></button></form>
                        </div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div  class=\"search_overlay\"></div>
                    </li>
                    <li  class=\"dropdown cart_dropdown\"><a 
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
                                <p  class=\"cart_buttons\"><a 
                                        routerlink=\"/cart\" class=\"btn btn-fill-line view-cart\"
                                        ng-reflect-router-link=\"/cart\" href=\"/cart\">View Cart</a><a
                                         routerlink=\"/checkout\"
                                        class=\"btn btn-fill-out checkout\" ng-reflect-router-link=\"/checkout\"
                                        href=\"/checkout\">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  84 => 35,  74 => 27,  63 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
                                <a href=\"/compare\"><i class=\"ti-control-shuffle\"></i><span style=\"color:#FFFFFF;\" >Compare</span></a></li>
                            <li >
                                <a href=\"/wishlist\"><i class=\"ti-heart\"></i><span style=\"color:#FFFFFF;\" >Wishlist</span></a></li>
                            
                                {% if app.user %}
                                    <li>
                                        <a href=\"/account\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Compte</span></a>
                                    </li>

                                    <li >
                                        <a href=\"/logout\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Se déconnecter</span></a>
                                    </li>
                                    
                                {% else %}
                                    <li >
                                        <a href=\"/register\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >S'inscrire</span></a>
                                    </li>
                                    <li >
                                        <a href=\"/login\"><i class=\"ti-user\"></i><span style=\"color:#FFFFFF;\" >Se connecter</span></a>
                                    </li>

                                {% endif %}
                            <li ></li>
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
                    <h2 >PCplus</h2>
                </a><button  type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-expanded=\"false\"
                    class=\"navbar-toggler collapsed\"><span 
                        class=\"ion-android-menu\"></span></button>
                <div  id=\"navbarSupportedContent\"
                    class=\"navbar-collapse justify-content-end collapse\" style=\"\">
                    <ul  class=\"navbar-nav\">
                        <li  class=\"dropdown\"><a  routerlink=\"/\"
                                class=\"nav-link\" ng-reflect-router-link=\"/\" href=\"/\">Home</a></li>
                        <li  class=\"dropdown\"><a  href=\"#\"
                                data-bs-toggle=\"dropdown\" class=\"dropdown-toggle nav-link active\"
                                aria-expanded=\"false\">Pages</a>
                            <div  class=\"dropdown-menu\">
                                <ul >
                                    <li ><a  routerlink=\"/about\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/about\"
                                            href=\"/about\">About Us</a></li>
                                    <li ><a 
                                            routerlink=\"/contact\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/contact\" href=\"/contact\">Contact Us</a></li>
                                    <li ><a  routerlink=\"/fqa\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/fqa\"
                                            href=\"/fqa\">Faq</a></li>
                                    <li ><a 
                                            routerlink=\"/login\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/login\" href=\"/login\">Login</a></li>
                                    <li ><a 
                                            routerlink=\"/register\" class=\"dropdown-item nav-link nav_item\"
                                            ng-reflect-router-link=\"/register\" href=\"/register\">Register</a></li>
                                    <li ><a  routerlink=\"/terms\"
                                            class=\"dropdown-item nav-link nav_item\" ng-reflect-router-link=\"/terms\"
                                            href=\"/terms\">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </li>
                        <li  class=\"dropdown dropdown-mega-menu\"><a
                                 href=\"#\" data-bs-toggle=\"dropdown\"
                                class=\"dropdown-toggle nav-link\" aria-expanded=\"false\">Products</a>
                            <div  class=\"dropdown-menu\">
                                <ul  class=\"mega-menu d-lg-flex\">
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Souris</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-crayon-taille-h\"
                                                    href=\"/product/jupe-crayon-taille-haute-en-dentelle\">Jupe crayon
                                                    taille haute en dentelle</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-imprim-floral-t\"
                                                    href=\"/product/jupe-imprim-floral-taille-fronce\">Jupe à imprimé
                                                    floral à taille froncée</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,robe-fines-brides-im\"
                                                    href=\"/product/robe-fines-brides-imprim-tropical-en-dentelle\">Robe à
                                                    fines brides à imprimé tropical en dentelle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Tapis de souris</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-noire-brillante\"
                                                    href=\"/product/jupe-noire-brillante\">Jupe noire brillante</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-fendue-taille-h\"
                                                    href=\"/product/jupe-fendue-taille-haute\">Jupe fendue taille
                                                    haute</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,jupe-imprim-floral-t\"
                                                    href=\"/product/jupe-imprim-floral-taille-fronce\">Jupe à imprimé
                                                    floral à taille froncée</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Casques </li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Bikini unicolore
                                                    côtelé</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-mudey\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-espero\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle\"
                                                    href=\"/product/culotte-en-dentelle\">Culotte en dentelle</a><a
                                                     class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,short-paillettes-bro\"
                                                    href=\"/product/short-paillettes-broderie-dchir\">Short à paillettes à
                                                    broderie déchiré</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class=\"mega-menu-col col-lg-3\">
                                        <ul >
                                            <li  class=\"dropdown-header\">Claviers</li>
                                            <li ><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-taille-haut\"
                                                    href=\"/product/pantalon-taille-haute-carreaux-avec-zip\">Pantalon
                                                    taille haute à carreaux avec zip</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-carreaux-av\"
                                                    href=\"/product/pantalon-carreaux-avec-cordon-la-taille\">Pantalon à
                                                    carreaux avec cordon à la taille</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-taille-fron\"
                                                    href=\"/product/pantalon-taille-fronce-poches\">Pantalon à taille
                                                    froncée à poches</a><a 
                                                    class=\"dropdown-item nav-link nav_item\"
                                                    ng-reflect-router-link=\"/,product,pantalon-unicolore-t\"
                                                    href=\"/product/pantalon-unicolore-taille-haute\">Pantalon unicolore
                                                    taille haute</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
                        </li>
                        <li  class=\"dropdown dropdown-mega-menu\"><a
                                 routerlink=\"/shop-list\" class=\"nav-link\"
                                ng-reflect-router-link=\"/shop-list\" href=\"/shop-list\">Shop</a></li>
                        <li ><a  routerlink=\"/contact\"
                                class=\"nav-link nav_item\" ng-reflect-router-link=\"/contact\" href=\"/contact\">Contact
                                Us</a></li>
                    </ul>
                </div>
                <ul  class=\"navbar-nav attr-nav align-items-center\">
                    <li ><a  href=\"javascript:void(0);\"
                            class=\"nav-link search_trigger\"><i 
                                class=\"linearicons-magnifier\"></i></a>
                        <div  class=\"search_wrap\"><span 
                                class=\"close-search\"><i 
                                    class=\"ion-ios-close-empty\"></i></span>
                            <form  novalidate=\"\" class=\"ng-untouched ng-pristine ng-valid\">
                                <input  type=\"text\" placeholder=\"Search\" id=\"search_input\"
                                    class=\"form-control\"><button  type=\"submit\"
                                    class=\"search_icon\"><i 
                                        class=\"ion-ios-search-strong\"></i></button></form>
                        </div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div class=\"search_overlay\"></div>
                        <div  class=\"search_overlay\"></div>
                    </li>
                    <li  class=\"dropdown cart_dropdown\"><a 
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
                                <p  class=\"cart_buttons\"><a 
                                        routerlink=\"/cart\" class=\"btn btn-fill-line view-cart\"
                                        ng-reflect-router-link=\"/cart\" href=\"/cart\">View Cart</a><a
                                         routerlink=\"/checkout\"
                                        class=\"btn btn-fill-out checkout\" ng-reflect-router-link=\"/checkout\"
                                        href=\"/checkout\">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>", "header/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\header\\index.html.twig");
    }
}
