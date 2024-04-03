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
class __TwigTemplate_383e586669d4a50e4fc7b1d315890352 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show_product_by_slug.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PCpluse | Produit ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 14)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "\"
                                data-zoom-image=\"/assets/images/products/";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 15)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
        echo "\">
                        </div>
                        <div id=\"pr_item_gallery\" class=\"product_gallery_item slick_slider\">
                            <div aria-live=\"polite\" class=\"slick-list draggable\">
                                <div style=\"opacity: 1; width: 556px; left: 0px;\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 20));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "</a></h4>
                            <div  class=\"product_price\">
                                <span class=\"price\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "soldePrice", [], "any", false, false, false, 37) / 100), "EUR"), "html", null, true);
        echo "</span>
                                    <del>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 38) / 100), "EUR"), "html", null, true);
        echo "</del>
                                    <div  class=\"on_sale\"><span>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 39) - twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "soldePrice", [], "any", false, false, false, 39)) * 100) / twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 39)), 2, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <hr>
                        <div class=\"cart_extra\">
                            <div class=\"cart-product-quantity\">
                                <div class=\"quantity\">
                                    <input type=\"button\" value=\"-\" class=\"minus\">
                                    <input type=\"text\" name=\"quantity\" value=\"1\" title=\"Qty\" size=\"4\" class=\"qty\">
                                    <input type=\"button\" value=\"+\" class=\"plus\">
                                </div>
                            </div>
                            <div class=\"cart_btn\">
                                <a href=\"/cart/add/";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "/1\" type=\"button\" class=\"btn btn-fill-out btn-addtocart\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Ajouter au panier
                                </a>
                                <button type=\"button\" class=\"btn btn-fill-out\">
                                    <i class=\"icon-basket-loaded\"></i>
                                    Acheter cet article
                                </button>
                            </div>
                            ";
        // line 72
        echo "                        </div>
                        <hr>
                        <ul class=\"product-meta\">
                            <li>SKU: <a href=\"#\">BE45VGRT</a></li>
                            <li>Categories: <a href=\"#\">";
        // line 76
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, false, 76)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
        echo " </a></li>
                            ";
        // line 78
        echo "                        </ul>
                        ";
        // line 89
        echo "                    </div>
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
                                    aria-selected=\"false\" class=\"nav-link\">Information supplémentaire</a></li>
                            ";
        // line 110
        echo "                        </ul>
                        <div class=\"tab-content shop_info_tab\">
                            <div id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\"
                                class=\"tab-pane fade show active\"> 
                                    ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 114), "html", null, true);
        echo "
                                </div>
                            <div id=\"Additional-info\" role=\"tabpanel\" aria-labelledby=\"Additional-info-tab\"
                                class=\"tab-pane fade\"> 
                                    ";
        // line 119
        echo "                                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "moreDescription", [], "any", false, false, false, 119);
        echo "
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
";
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
        return array (  209 => 119,  202 => 114,  196 => 110,  176 => 89,  173 => 78,  169 => 76,  163 => 72,  151 => 61,  135 => 48,  123 => 39,  119 => 38,  115 => 37,  110 => 35,  99 => 26,  87 => 22,  84 => 21,  80 => 20,  72 => 15,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show_product_by_slug.html.twig", "C:\\Users\\osman\\pcplus\\templates\\product\\show_product_by_slug.html.twig");
    }
}
