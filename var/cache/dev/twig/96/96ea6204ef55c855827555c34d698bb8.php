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
class __TwigTemplate_cc98abf51ba796bb25075583bfeb633f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/display_product.html.twig"));

        // line 1
        echo "<div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a href=\"/product/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
                                            <img alt=\"product_img1\" src=\"/assets/images/products/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "imageUrls", [], "any", false, false, false, 4), 0, [], "array", false, false, false, 4), "html", null, true);
        echo "\"></a>
                                    
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\">
                                                <a href=\"/product/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
                                            </h6>
                                            <div  class=\"product_price\">
                                                <span class=\"price\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "soldePrice", [], "any", false, false, false, 12) / 100), "EUR"), "html", null, true);
        echo "</span>
                                                <del>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "regularPrice", [], "any", false, false, false, 13) / 100), "EUR"), "html", null, true);
        echo "</del>
                                                    <div  class=\"on_sale\"><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "regularPrice", [], "any", false, false, false, 14) - twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "soldePrice", [], "any", false, false, false, 14)) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "regularPrice", [], "any", false, false, false, 14)), 2, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  100 => 33,  88 => 24,  75 => 14,  71 => 13,  67 => 12,  59 => 9,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div  class=\"col-lg-3 col-md-4 col-6\">
                                    <div  class=\"product\">
                                        <div  class=\"product_img\"><a href=\"/product/{{product.slug}}\">
                                            <img alt=\"product_img1\" src=\"/assets/images/products/{{ product.imageUrls[0] }}\"></a>
                                    
                                        </div>
                                        <div  class=\"product_info\">
                                            <h6  class=\"product_title\">
                                                <a href=\"/product/{{product.slug}}\">{{ product.name }}</a>
                                            </h6>
                                            <div  class=\"product_price\">
                                                <span class=\"price\">{{ (product.soldePrice/100) |format_currency('EUR') }}</span>
                                                <del>{{ (product.regularPrice/100) |format_currency('EUR') }}</del>
                                                    <div  class=\"on_sale\"><span>{{((product.regularPrice - product.soldePrice)*100 / product.regularPrice) |number_format(2, '.', ',') }}%</span></div>
                                            </div>
                                            <div  class=\"rating_wrap pourResponsive\">
                                                <div  class=\"rating\">
                                                    <div  class=\"product_rate\"
                                                        style=\"width: 80%;\"></div>
                                                </div><span 
                                                    class=\"rating_num\">(21)</span>
                                                        <ul  class=\"list_none pr_action_btn\">
                                                            <li  class=\"add-to-cart\" style=\"margin: 0px 0px !important;\">
                                                                <a href=\"/cart/add/{{ product.id }}/1\"><i class=\"icon-basket-loaded\"></i>
                                                                    Ajouter au panier 
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"shop-quick-view.html\" class=\"popup-ajax\">
                                                                <i class=\"icon-magnifier-add\"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href=\"/wishlist/add/{{ product.id }}\" class=\"add-to-wishlist\"><i class=\"icon-heart\"></i></a>
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
                                </div>", "product/display_product.html.twig", "C:\\Users\\osman\\pcplus\\templates\\product\\display_product.html.twig");
    }
}
