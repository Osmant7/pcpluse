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

/* product/show_product_by_slug.html.twig */
class __TwigTemplate_57ec2d5db3b1326aaf1eb958ef29054d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show_product_by_slug.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show_product_by_slug.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show_product_by_slug.html.twig", 1);
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
<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img  alt=\"product_img1\"
                                src=\"/assets/images/products/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "imageUrls", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14), "html", null, true);
        echo "\"
                                data-zoom-image=\"/assets/images/products/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "imageUrls", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15), "html", null, true);
        echo "\">
                        </div>
                        <div id=\"pr_item_gallery\" class=\"product_gallery_item slick_slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div style=\"opacity: 1; width: 556px; left: 0px;\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "imageUrls", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
            // line 21
            echo "                                        <div class=\"item slick-slide\" style=\"width: 129px;\">
                                            <div data-image=\"/assets/images/products/";
            // line 22
            echo twig_escape_filter($this->env, $context["imageUrl"], "html", null, true);
            echo "\"><img alt=\"product_small_img1\" src=\"/assets/images/products/";
            echo twig_escape_filter($this->env, $context["imageUrl"], "html", null, true);
            echo "\">
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "</a></h4>
                            <div  class=\"product_price\">
                                <span class=\"price\">";
        // line 37
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "soldePrice", [], "any", false, false, false, 37) / 100), "html", null, true);
        echo "</span>
                                    <del>";
        // line 38
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "regularPrice", [], "any", false, false, false, 38) / 100), "html", null, true);
        echo "</del>
                                    <div  class=\"on_sale\"><span>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "regularPrice", [], "any", false, false, false, 39) - twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "soldePrice", [], "any", false, false, false, 39)) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "regularPrice", [], "any", false, false, false, 39)), 2, ".", ","), "html", null, true);
        echo "%</span></div>
                            </div>
                            <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width: 80%;\">
                                    </div>
                                </div><span class=\"rating_num\">(21)</span>
                            </div>
                            <div class=\"pr_desc\">
                                <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <hr>
                        <div class=\"cart_extra\">
                            <div class=\"cart-product-quantity\">
                                <div class=\"quantity\"><input type=\"button\" value=\"-\" class=\"minus\"><input type=\"text\"
                                        name=\"quantity\" value=\"1\" title=\"Qty\" size=\"4\" class=\"qty\"><input type=\"button\"
                                        value=\"+\" class=\"plus\">
                                </div>
                            </div>
                            <div class=\"cart_btn\">
                                <button type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i> Ajouter au panier</button>
                                <button type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i> Acheter cet article </button>
                            </div>
                            <div class=\"cart_btn\"><a
                                    href=\"#\" class=\"add_wishlist\"><i class=\"icon-heart\"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul class=\"product-meta\">
                            <li>SKU: <a href=\"#\">BE45VGRT</a></li>
                            <li>Categories: <a href=\"#\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "categories", [], "any", false, false, false, 72), 0, [], "array", false, false, false, 72), "html", null, true);
        echo " </a></li>
                            ";
        // line 74
        echo "                        </ul>
                        <div class=\"product_share\"><span>Share:</span>
                            <ul class=\"social_icons\">
                                <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Description-tab\" data-bs-toggle=\"tab\" href=\"#Description\"
                                    role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\"
                                    class=\"nav-link active\">Description</a></li>
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                    href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                    aria-selected=\"false\" class=\"nav-link\">Additional info</a></li>
                            ";
        // line 106
        echo "                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\"
                                class=\"tab-pane fade show active\"> 
                                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), "html", null, true);
        echo "
                                </div>
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade\"> 
                                    ";
        // line 115
        echo "                                    ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "moreDescription", [], "any", false, false, false, 115);
        echo "
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 128
        echo "            ";
        // line 398
        echo "        </div>
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
        return "product/show_product_by_slug.html.twig";
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
        return array (  252 => 398,  250 => 128,  240 => 115,  233 => 110,  227 => 106,  196 => 74,  192 => 72,  165 => 48,  153 => 39,  149 => 38,  145 => 37,  140 => 35,  129 => 26,  117 => 22,  114 => 21,  110 => 20,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCplus | Home {% endblock %}

{% block body %}

<div class=\"main_content\">
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
                    <div class=\"product-image\">
                        <div class=\"product_img_box\"><img  alt=\"product_img1\"
                                src=\"/assets/images/products/{{ product.imageUrls[0] }}\"
                                data-zoom-image=\"/assets/images/products/{{ product.imageUrls[0] }}\">
                        </div>
                        <div id=\"pr_item_gallery\" class=\"product_gallery_item slick_slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div style=\"opacity: 1; width: 556px; left: 0px;\">
                                    {% for imageUrl in product.imageUrls %}
                                        <div class=\"item slick-slide\" style=\"width: 129px;\">
                                            <div data-image=\"/assets/images/products/{{ imageUrl }}\"><img alt=\"product_small_img1\" src=\"/assets/images/products/{{ imageUrl }}\">
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"pr_detail\">
                        <div class=\"product_description\">
                            <h4 class=\"product_title\"><a href=\"#\">{{product.name}}</a></h4>
                            <div  class=\"product_price\">
                                <span class=\"price\">{{ product.soldePrice/100 }}</span>
                                    <del>{{ product.regularPrice/100 }}</del>
                                    <div  class=\"on_sale\"><span>{{((product.regularPrice - product.soldePrice)*100 / product.regularPrice) |number_format(2, '.', ',') }}%</span></div>
                            </div>
                            <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width: 80%;\">
                                    </div>
                                </div><span class=\"rating_num\">(21)</span>
                            </div>
                            <div class=\"pr_desc\">
                                <p>{{product.description}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class=\"cart_extra\">
                            <div class=\"cart-product-quantity\">
                                <div class=\"quantity\"><input type=\"button\" value=\"-\" class=\"minus\"><input type=\"text\"
                                        name=\"quantity\" value=\"1\" title=\"Qty\" size=\"4\" class=\"qty\"><input type=\"button\"
                                        value=\"+\" class=\"plus\">
                                </div>
                            </div>
                            <div class=\"cart_btn\">
                                <button type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i> Ajouter au panier</button>
                                <button type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i> Acheter cet article </button>
                            </div>
                            <div class=\"cart_btn\"><a
                                    href=\"#\" class=\"add_wishlist\"><i class=\"icon-heart\"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul class=\"product-meta\">
                            <li>SKU: <a href=\"#\">BE45VGRT</a></li>
                            <li>Categories: <a href=\"#\">{{product.categories[0]}} </a></li>
                            {# <li>Tags: <a href=\"#\" rel=\"tag\">Cloth</a>, <a href=\"#\" rel=\"tag\">printed</a></li> #}
                        </ul>
                        <div class=\"product_share\"><span>Share:</span>
                            <ul class=\"social_icons\">
                                <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"large_divider clearfix\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"tab-style3\">
                        <ul role=\"tablist\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\"><a id=\"Description-tab\" data-bs-toggle=\"tab\" href=\"#Description\"
                                    role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\"
                                    class=\"nav-link active\">Description</a></li>
                            <li class=\"nav-item\"><a id=\"Additional-info-tab\" data-bs-toggle=\"tab\"
                                    href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\"
                                    aria-selected=\"false\" class=\"nav-link\">Additional info</a></li>
                            {# <li class=\"nav-item\"><a id=\"Reviews-tab\" data-bs-toggle=\"tab\" href=\"#Reviews\" role=\"tab\"
                                    aria-controls=\"Reviews\" aria-selected=\"false\" class=\"nav-link\">Reviews (2)</a>
                            </li> #}
                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\"
                                class=\"tab-pane fade show active\"> 
                                    {{product.description}}
                                </div>
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade\"> 
                                    {# {{product.more_description}}  #}
                                    {{product.moreDescription | raw}}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            {# <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"small_divider\"></div>
                    <div class=\"divider\"></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div> #}
            {# <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"heading_s1\">
                        <h3>Releted Products</h3>
                    </div>
                    <div data-margin=\"20\"
                        data-responsive=\"{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;481&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;3&quot;}, &quot;1199&quot;:{&quot;items&quot;: &quot;4&quot;}}\"
                        class=\"releted_product_slider carousel_slider owl-carousel owl-theme owl-loaded owl-drag\">
                        <div class=\"owl-stage-outer\">
                            <div class=\"owl-stage\"
                                style=\"transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1420px;\">
                                <div class=\"owl-item active\" style=\"width: 264px; margin-right: 20px;\">
                                    <div class=\"item\">
                                        <div class=\"product\">
                                            <div class=\"product_img\"><a href=\"shop-product-detail.html\"><img
                                                        src=\"assets/images/product_img1.jpg\" alt=\"product_img1\"></a>
                                                <div class=\"product_action_box\">
                                                    <ul class=\"list_none pr_action_btn\">
                                                        <li class=\"add-to-cart\"><a href=\"#\"><i
                                                                    class=\"icon-basket-loaded\"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href=\"shop-compare.html\"><i class=\"icon-shuffle\"></i></a>
                                                        </li>
                                                        <li><a href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                    class=\"icon-magnifier-add\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product_info\">
                                                <h6 class=\"product_title\"><a href=\"shop-product-detail.html\">Blue Dress
                                                        For Woman</a>
                                                </h6>
                                                <div class=\"product_price\"><span
                                                        class=\"price\">\$45.00</span><del>\$55.25</del>
                                                    <div class=\"on_sale\"><span>35% Off</span></div>
                                                </div>
                                                <div class=\"rating_wrap\">
                                                    <div class=\"rating\">
                                                        <div class=\"product_rate\" style=\"width: 80%;\"></div>
                                                    </div><span class=\"rating_num\">(21)</span>
                                                </div>
                                                <div class=\"pr_desc\">
                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Phasellus blandit massa enim.
                                                        Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                                <div class=\"pr_switch_wrap\">
                                                    <div class=\"product_color_switch\">
                                                        <span data-color=\"#87554B\" class=\"active\"
                                                            style=\"background-color: rgb(135, 85, 75);\"></span><span
                                                            data-color=\"#333333\"
                                                            style=\"background-color: rgb(51, 51, 51);\"></span><span
                                                            data-color=\"#DA323F\"
                                                            style=\"background-color: rgb(218, 50, 63);\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"owl-item active\" style=\"width: 264px; margin-right: 20px;\">
                                    <div class=\"item\">
                                        <div class=\"product\">
                                            <div class=\"product_img\"><a href=\"shop-product-detail.html\"><img
                                                        src=\"assets/images/product_img2.jpg\" alt=\"product_img2\"></a>
                                                <div class=\"product_action_box\">
                                                    <ul class=\"list_none pr_action_btn\">
                                                        <li class=\"add-to-cart\"><a href=\"#\"><i
                                                                    class=\"icon-basket-loaded\"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href=\"shop-compare.html\"><i class=\"icon-shuffle\"></i></a>
                                                        </li>
                                                        <li><a href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                    class=\"icon-magnifier-add\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product_info\">
                                                <h6 class=\"product_title\"><a href=\"shop-product-detail.html\">Lether Gray
                                                        Tuxedo</a></h6>
                                                <div class=\"product_price\"><span
                                                        class=\"price\">\$55.00</span><del>\$95.00</del>
                                                    <div class=\"on_sale\"><span>25% Off</span></div>
                                                </div>
                                                <div class=\"rating_wrap\">
                                                    <div class=\"rating\">
                                                        <div class=\"product_rate\" style=\"width: 68%;\"></div>
                                                    </div><span class=\"rating_num\">(15)</span>
                                                </div>
                                                <div class=\"pr_desc\">
                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Phasellus blandit massa enim.
                                                        Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                                <div class=\"pr_switch_wrap\">
                                                    <div class=\"product_color_switch\">
                                                        <span data-color=\"#847764\" class=\"active\"
                                                            style=\"background-color: rgb(132, 119, 100);\"></span><span
                                                            data-color=\"#0393B5\"
                                                            style=\"background-color: rgb(3, 147, 181);\"></span><span
                                                            data-color=\"#DA323F\"
                                                            style=\"background-color: rgb(218, 50, 63);\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"owl-item active\" style=\"width: 264px; margin-right: 20px;\">
                                    <div class=\"item\">
                                        <div class=\"product\"><span class=\"pr_flash\">New</span>
                                            <div class=\"product_img\"><a href=\"shop-product-detail.html\"><img
                                                        src=\"assets/images/product_img3.jpg\" alt=\"product_img3\"></a>
                                                <div class=\"product_action_box\">
                                                    <ul class=\"list_none pr_action_btn\">
                                                        <li class=\"add-to-cart\"><a href=\"#\"><i
                                                                    class=\"icon-basket-loaded\"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href=\"shop-compare.html\"><i class=\"icon-shuffle\"></i></a>
                                                        </li>
                                                        <li><a href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                    class=\"icon-magnifier-add\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product_info\">
                                                <h6 class=\"product_title\"><a href=\"shop-product-detail.html\">woman full
                                                        sliv dress</a>
                                                </h6>
                                                <div class=\"product_price\"><span
                                                        class=\"price\">\$68.00</span><del>\$99.00</del></div>
                                                <div class=\"rating_wrap\">
                                                    <div class=\"rating\">
                                                        <div class=\"product_rate\" style=\"width: 87%;\"></div>
                                                    </div><span class=\"rating_num\">(25)</span>
                                                </div>
                                                <div class=\"pr_desc\">
                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Phasellus blandit massa enim.
                                                        Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                                <div class=\"pr_switch_wrap\">
                                                    <div class=\"product_color_switch\">
                                                        <span data-color=\"#333333\" class=\"active\"
                                                            style=\"background-color: rgb(51, 51, 51);\"></span><span
                                                            data-color=\"#7C502F\"
                                                            style=\"background-color: rgb(124, 80, 47);\"></span><span
                                                            data-color=\"#2F366C\"
                                                            style=\"background-color: rgb(47, 54, 108);\"></span><span
                                                            data-color=\"#874A3D\"
                                                            style=\"background-color: rgb(135, 74, 61);\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"owl-item active\" style=\"width: 264px; margin-right: 20px;\">
                                    <div class=\"item\">
                                        <div class=\"product\">
                                            <div class=\"product_img\"><a href=\"shop-product-detail.html\"><img
                                                        src=\"assets/images/product_img4.jpg\" alt=\"product_img4\"></a>
                                                <div class=\"product_action_box\">
                                                    <ul class=\"list_none pr_action_btn\">
                                                        <li class=\"add-to-cart\"><a href=\"#\"><i
                                                                    class=\"icon-basket-loaded\"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href=\"shop-compare.html\"><i class=\"icon-shuffle\"></i></a>
                                                        </li>
                                                        <li><a href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                    class=\"icon-magnifier-add\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product_info\">
                                                <h6 class=\"product_title\"><a href=\"shop-product-detail.html\">light blue
                                                        Shirt</a></h6>
                                                <div class=\"product_price\"><span
                                                        class=\"price\">\$69.00</span><del>\$89.00</del>
                                                    <div class=\"on_sale\"><span>20% Off</span></div>
                                                </div>
                                                <div class=\"rating_wrap\">
                                                    <div class=\"rating\">
                                                        <div class=\"product_rate\" style=\"width: 70%;\"></div>
                                                    </div><span class=\"rating_num\">(22)</span>
                                                </div>
                                                <div class=\"pr_desc\">
                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Phasellus blandit massa enim.
                                                        Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                                <div class=\"pr_switch_wrap\">
                                                    <div class=\"product_color_switch\">
                                                        <span data-color=\"#333333\" class=\"active\"
                                                            style=\"background-color: rgb(51, 51, 51);\"></span><span
                                                            data-color=\"#A92534\"
                                                            style=\"background-color: rgb(169, 37, 52);\"></span><span
                                                            data-color=\"#B9C2DF\"
                                                            style=\"background-color: rgb(185, 194, 223);\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"owl-item\" style=\"width: 264px; margin-right: 20px;\">
                                    <div class=\"item\">
                                        <div class=\"product\">
                                            <div class=\"product_img\"><a href=\"shop-product-detail.html\"><img
                                                        src=\"assets/images/product_img5.jpg\" alt=\"product_img5\"></a>
                                                <div class=\"product_action_box\">
                                                    <ul class=\"list_none pr_action_btn\">
                                                        <li class=\"add-to-cart\"><a href=\"#\"><i
                                                                    class=\"icon-basket-loaded\"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href=\"shop-compare.html\"><i class=\"icon-shuffle\"></i></a>
                                                        </li>
                                                        <li><a href=\"shop-quick-view.html\" class=\"popup-ajax\"><i
                                                                    class=\"icon-magnifier-add\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"icon-heart\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product_info\">
                                                <h6 class=\"product_title\"><a href=\"shop-product-detail.html\">blue dress
                                                        for woman</a>
                                                </h6>
                                                <div class=\"product_price\"><span
                                                        class=\"price\">\$45.00</span><del>\$55.25</del>
                                                    <div class=\"on_sale\"><span>35% Off</span></div>
                                                </div>
                                                <div class=\"rating_wrap\">
                                                    <div class=\"rating\">
                                                        <div class=\"product_rate\" style=\"width: 80%;\"></div>
                                                    </div><span class=\"rating_num\">(21)</span>
                                                </div>
                                                <div class=\"pr_desc\">
                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Phasellus blandit massa enim.
                                                        Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                                <div class=\"pr_switch_wrap\">
                                                    <div class=\"product_color_switch\">
                                                        <span data-color=\"#87554B\" class=\"active\"
                                                            style=\"background-color: rgb(135, 85, 75);\"></span><span
                                                            data-color=\"#333333\"
                                                            style=\"background-color: rgb(51, 51, 51);\"></span><span
                                                            data-color=\"#5FB7D4\"
                                                            style=\"background-color: rgb(95, 183, 212);\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"owl-nav disabled\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><i
                                    class=\"ion-ios-arrow-left\"></i></button><button type=\"button\" role=\"presentation\"
                                class=\"owl-next\"><i class=\"ion-ios-arrow-right\"></i></button>
                        </div>
                        <div class=\"owl-dots\"><button role=\"button\" class=\"owl-dot active\"><span></span></button><button
                                role=\"button\" class=\"owl-dot\"><span></span></button></div>
                    </div>
                </div>
            </div> #}
        </div>
    </div>
</div>
{% endblock %}", "product/show_product_by_slug.html.twig", "C:\\Users\\osman\\pcplus\\templates\\product\\show_product_by_slug.html.twig");
    }
}
