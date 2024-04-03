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

/* product/display_product.html.twig */
class __TwigTemplate_f7a269311f5bad1e19439448bcec0705 extends Template
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
        echo "<div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a href=\"/product/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
                                            <img alt=\"product_img1\" src=\"/assets/images/products/";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imageUrls", [], "any", false, false, false, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "\"></a>
                                    
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\">
                                                <a href=\"/product/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 9), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
                                            </h6>
                                            <div  class=\"product_price\">
                                                <span class=\"price\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "soldePrice", [], "any", false, false, false, 12) / 100), "EUR"), "html", null, true);
        echo "</span>
                                                <del>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 13) / 100), "EUR"), "html", null, true);
        echo "</del>
                                                    <div  class=\"on_sale\"><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 14) - twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "soldePrice", [], "any", false, false, false, 14)) * 100) / twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 14)), 2, ".", ","), "html", null, true);
        echo "%</span></div>
                                            </div>
                                            <div  class=\"rating_wrap pourResponsive\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                                        <ul  class=\"list_none pr_action_btn\">
                                                            <li  class=\"add-to-cart\" style=\"margin: 0px 0px !important;\">
                                                                <a href=\"/cart/add/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "/1\"><i class=\"icon-basket-loaded\"></i>
                                                                    Ajouter au panier 
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"shop-quick-view.html\" class=\"popup-ajax\">
                                                                <i class=\"icon-magnifier-add\"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href=\"/wishlist/add/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"add-to-wishlist\"><i class=\"icon-heart\"></i></a>
                                                            </li>
                                                        </ul>
                                            </div>
                                            <div  class=\"pr_desc\">
                                                <p >Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Phasellus blandit massa enim.
                                                    Nullam id varius nunc id varius nunc.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/display_product.html.twig";
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
        return array (  94 => 33,  82 => 24,  69 => 14,  65 => 13,  61 => 12,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/display_product.html.twig", "C:\\Users\\osman\\pcplus\\templates\\product\\display_product.html.twig");
    }
}
