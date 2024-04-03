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

/* wish_list/index.html.twig */
class __TwigTemplate_0ee56f8862b9940b2bfbd514becc0ed5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "wish_list/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " PCplus | Wishlist  ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"table-responsive wishlist_table\">
                        <table  class=\"table\">
                            <thead >
                                <tr>
                                    <th  class=\"product-thumbnail\">&nbsp;</th>
                                    <th  class=\"product-name\">Product</th>
                                    <th  class=\"product-price\">Price</th>
                                    <th  class=\"product-stock-status\">Stock Status</th>
                                    <th  class=\"product-add-to-cart\"></th>
                                    <th  class=\"product-remove\">Remove</th>
                                </tr>
                            </thead>
                            <tbody >
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["wishlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "                                ";
            // line 28
            echo "                                <tr >
                                    <td  class=\"product-thumbnail\">
                                        <a href=\"#\">
                                            <img width=\"50\" height=\"50\" alt=\"product1\"
                                            src=\"/assets/images/products/";
            // line 32
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["product"], "imageUrls", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "\">
                                        </a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\">
                                        <a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                                    </td>
                                    <td  data-title=\"Price\" class=\"product-price\">
                                        ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["product"], "soldePrice", [], "any", false, false, false, 39) / 100), "EUR"), "html", null, true);
            echo "
                                    </td>
                                    <td  data-title=\"Stock Status\" class=\"product-stock-status\">
                                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                        <span class=\"badge badge-pill badge-success\">In Stock</span>
                                    </td>
                                    <td  class=\"product-add-to-cart\">
                                        <a href=\"/cart/add/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "/1\" class=\"btn btn-fill-out btn-addtocart\">
                                             <i class=\"icon-basket-loaded\"></i> Ajouter au panier
                                        </a>
                                    </td>
                                    <td >
                                        <a href=\"/wishlist/remove/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"remove-to-wishlist\">
                                            <i class=\"ti-close\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </tbody>
                        </table>
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
        return "wish_list/index.html.twig";
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
        return array (  136 => 57,  124 => 51,  116 => 46,  109 => 42,  103 => 39,  97 => 36,  90 => 32,  84 => 28,  82 => 26,  78 => 25,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "wish_list/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\wish_list\\index.html.twig");
    }
}
