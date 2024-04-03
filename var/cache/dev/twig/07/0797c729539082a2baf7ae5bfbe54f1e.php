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

/* home/index.html.twig */
class __TwigTemplate_a3e1bbfd5414a0657b2106a3e51af377 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PCplus | Home ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
        class=\"carousel slide carousel-fade light_arrow\">
        <div  class=\"carousel-inner\">
            <div  class=\"carousel-item active background_bg\"
               
                data-img-src=\"/assets/files/80746066632713998236489572054461980464175761684755285905.png\"
                style=\"background-image: url(&quot;/assets/files/80746066632713998236489572054461980464175761684755285905.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">50% off in all products</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Man Fashion</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/17099405955142852076105633054671075224313121684753428765.png\"
                style=\"background-image: url(&quot;/assets/files/17099405955142852076105633054671075224313121684753428765.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Get up to 50% off Today Only!
                                    </h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Woman Fashion</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/2850766279112079091504712247552853779750349121684753505113.png\"
                style=\"background-image: url(&quot;/assets/files/2850766279112079091504712247552853779750349121684753505113.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Taking your Viewing Experience to
                                        Next Level</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Summer Sale</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/80746066632713998236489572054461980464175761684755285905.png\"
                style=\"background-image: url(&quot;/assets/files/80746066632713998236489572054461980464175761684755285905.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Taking your Viewing Experience to
                                        Next Level</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Summer Sale</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
            class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
             href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
            class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
    </div>
</div>
<div  class=\"main_content\">
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row justify-content-center\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1 text-center\">
                        <h2 >Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"tab-style1\">
                        <ul  role=\"tablist\" class=\"nav nav-tabs justify-content-center\">
                            <li  class=\"nav-item\"><a 
                                    id=\"arrival-tab\" data-bs-toggle=\"tab\" href=\"#arrival\" role=\"tab\"
                                    aria-controls=\"arrival\" aria-selected=\"true\" class=\"nav-link active\">New
                                    Arrival</a></li>
                            <li  class=\"nav-item\"><a 
                                    id=\"sellers-tab\" data-bs-toggle=\"tab\" href=\"#sellers\" role=\"tab\"
                                    aria-controls=\"sellers\" aria-selected=\"false\" class=\"nav-link\">Best Sellers</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div  class=\"tab-content\">
                        <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                            class=\"tab-pane fade show active\">
                            <div  class=\"row shop_container\">
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Casque X1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$28.24</span><del
                                                    >\$241.5</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-blocs-de-cou\"
                                                    href=\"/product/culotte-blocs-de-couleurs-en-dentelle-jstore\">
                                                    Casque X2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$54.95</span><del
                                                    >\$202.57</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-unicolore-sa\"
                                                    href=\"/product/culotte-unicolore-sans-couture-category\"> Casque X3</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$44.54</span><del
                                                    >\$201.32</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-mudey\"> Casque X4 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$17.17</span><del
                                                    >\$277.59</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-espero\"> Clavier V1 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$23.91</span><del
                                                    >\$221.82</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-unicolore-fe\"
                                                    href=\"/product/culotte-unicolore-femme-sans-couture-akpoli\">
                                                    Clavier V2 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$56.07</span><del
                                                    >\$223.66</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,tanga-unicolore\"
                                                    href=\"/product/tanga-unicolore\"> Clavier V3 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$38.84</span><del
                                                    >\$292.94</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle\"
                                                    href=\"/product/culotte-en-dentelle\"> Clavier V4 </a>
                                            </h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$58.43</span><del
                                                    >\$291.58</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$33.85</span><del
                                                    >\$263.31</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$32.88</span><del
                                                    >\$247.78</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S3 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$14.6</span><del
                                                    >\$216.12</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S4</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$45.83</span><del
                                                    >\$211.75</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$23.23</span><del
                                                    >\$290.35</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$25.13</span><del
                                                    >\$265.45</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T3</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$20.24</span><del
                                                    >\$283.3</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T4</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$39.97</span><del
                                                    >\$203.26</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCplus | Home {% endblock %}

{% block body %}



<div  class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div  id=\"carouselExampleControls\" data-bs-ride=\"carousel\"
        class=\"carousel slide carousel-fade light_arrow\">
        <div  class=\"carousel-inner\">
            <div  class=\"carousel-item active background_bg\"
               
                data-img-src=\"/assets/files/80746066632713998236489572054461980464175761684755285905.png\"
                style=\"background-image: url(&quot;/assets/files/80746066632713998236489572054461980464175761684755285905.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">50% off in all products</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Man Fashion</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/17099405955142852076105633054671075224313121684753428765.png\"
                style=\"background-image: url(&quot;/assets/files/17099405955142852076105633054671075224313121684753428765.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Get up to 50% off Today Only!
                                    </h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Woman Fashion</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/2850766279112079091504712247552853779750349121684753505113.png\"
                style=\"background-image: url(&quot;/assets/files/2850766279112079091504712247552853779750349121684753505113.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Taking your Viewing Experience to
                                        Next Level</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Summer Sale</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class=\"carousel-item background_bg\"
                data-img-src=\"/assets/files/80746066632713998236489572054461980464175761684755285905.png\"
                style=\"background-image: url(&quot;/assets/files/80746066632713998236489572054461980464175761684755285905.png&quot;);\">
                <div  class=\"banner_slide_content\">
                    <div  class=\"container\">
                        <div  class=\"row\">
                            <div  class=\"col-lg-7 col-9\">
                                <div  class=\"banner_content overflow-hidden\">
                                    <h5  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"0.5s\"
                                        class=\"mb-3 staggered-animation font-weight-light animated slideInLeft\"
                                        style=\"animation-delay: 0.5s; opacity: 1;\">Taking your Viewing Experience to
                                        Next Level</h5>
                                    <h2  data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1s\" class=\"staggered-animation animated slideInLeft\"
                                        style=\"animation-delay: 1s; opacity: 1;\">Summer Sale</h2><a
                                         data-animation=\"slideInLeft\"
                                        data-animation-delay=\"1.5s\"
                                        class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft\"
                                        href=\"http://localhost:4300/\"
                                        style=\"animation-delay: 1.5s; opacity: 1;\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a  href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\"
            class=\"carousel-control-prev\"><i  class=\"ion-chevron-left\"></i></a><a
             href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\"
            class=\"carousel-control-next\"><i  class=\"ion-chevron-right\"></i></a>
    </div>
</div>
<div  class=\"main_content\">
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/files/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Super Sale</h5>
                            <h3  class=\"single_bn_title\">New Collection</h3><a
                                 class=\"single_bn_link\"
                                href=\"http://localhost:4400/\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"section small_pt pb_70\">
        <div  class=\"container\">
            <div  class=\"row justify-content-center\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1 text-center\">
                        <h2 >Exclusive Products</h2>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"tab-style1\">
                        <ul  role=\"tablist\" class=\"nav nav-tabs justify-content-center\">
                            <li  class=\"nav-item\"><a 
                                    id=\"arrival-tab\" data-bs-toggle=\"tab\" href=\"#arrival\" role=\"tab\"
                                    aria-controls=\"arrival\" aria-selected=\"true\" class=\"nav-link active\">New
                                    Arrival</a></li>
                            <li  class=\"nav-item\"><a 
                                    id=\"sellers-tab\" data-bs-toggle=\"tab\" href=\"#sellers\" role=\"tab\"
                                    aria-controls=\"sellers\" aria-selected=\"false\" class=\"nav-link\">Best Sellers</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div  class=\"tab-content\">
                        <div  id=\"arrival\" role=\"tabpanel\" aria-labelledby=\"arrival-tab\"
                            class=\"tab-pane fade show active\">
                            <div  class=\"row shop_container\">
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,bikini-unicolore-cte\"
                                                    href=\"/product/bikini-unicolore-ctel-shop\">Casque X1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$28.24</span><del
                                                    >\$241.5</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-blocs-de-cou\"
                                                    href=\"/product/culotte-blocs-de-couleurs-en-dentelle-jstore\">
                                                    Casque X2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$54.95</span><del
                                                    >\$202.57</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-unicolore-sa\"
                                                    href=\"/product/culotte-unicolore-sans-couture-category\"> Casque X3</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$44.54</span><del
                                                    >\$201.32</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Casques/Casque4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-mudey\"> Casque X4 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$17.17</span><del
                                                    >\$277.59</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle-\"
                                                    href=\"/product/culotte-en-dentelle-espero\"> Clavier V1 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$23.91</span><del
                                                    >\$221.82</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-unicolore-fe\"
                                                    href=\"/product/culotte-unicolore-femme-sans-couture-akpoli\">
                                                    Clavier V2 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$56.07</span><del
                                                    >\$223.66</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,tanga-unicolore\"
                                                    href=\"/product/tanga-unicolore\"> Clavier V3 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$38.84</span><del
                                                    >\$292.94</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Claviers/Clavier4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                    
                                                    ng-reflect-router-link=\"/,product,culotte-en-dentelle\"
                                                    href=\"/product/culotte-en-dentelle\"> Clavier V4 </a>
                                            </h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$58.43</span><del
                                                    >\$291.58</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$33.85</span><del
                                                    >\$263.31</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$32.88</span><del
                                                    >\$247.78</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S3 </a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$14.6</span><del
                                                    >\$216.12</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Souris/Souris_4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Souris S4</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$45.83</span><del
                                                    >\$211.75</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris1/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T1</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$23.23</span><del
                                                    >\$290.35</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris2/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T2</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$25.13</span><del
                                                    >\$265.45</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris3/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T3</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$20.24</span><del
                                                    >\$283.3</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a
                                                 href=\"shop-product-detail.html\"><img
                                                     alt=\"product_img1\"
                                                    src=\"/assets/files/Tapis-de-souris/Tapis-de-souris4/1.webp\"></a>
                                            <div  class=\"product_action_box\">
                                                <ul  class=\"list_none pr_action_btn\">
                                                    <li  class=\"add-to-cart\"><a
                                                             href=\"#\"><i
                                                                
                                                                class=\"icon-basket-loaded\"></i> Add To Cart </a>
                                                    </li>
                                                    <li ><a 
                                                            href=\"shop-compare.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-shuffle\"></i></a></li>
                                                    <li ><a 
                                                            href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                
                                                                class=\"icon-magnifier-add\"></i></a></li>
                                                    <li ><a 
                                                            href=\"#\"><i 
                                                                class=\"icon-heart\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\"><a
                                                     href=\"shop-product-detail.html\">
                                                    Tapis de souris T4</a></h6>
                                            <div  class=\"product_price\"><span
                                                     class=\"price\">\$39.97</span><del
                                                    >\$203.26</del>
                                                <div  class=\"on_sale\"><span
                                                        >35% Off</span></div>
                                            </div>
                                            <div  class=\"rating_wrap\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\home\\index.html.twig");
    }
}
