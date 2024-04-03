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

/* cart/index.html.twig */
class __TwigTemplate_529e196e0c5e0df804991b0648b792bf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PCpluse | Panier d'achat ";
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
                <div class=\"col-12\">
                    <div class=\"table-responsive shop_cart_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"product-thumbnail\">&nbsp;</th>
                                    <th class=\"product-name\">Produit</th>
                                    <th class=\"product-price\">Prix</th>
                                    <th class=\"product-quantity\">Quantité</th>
                                    <th class=\"product-subtotal\">Total</th>
                                    <th class=\"product-remove\">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                                <tr>
                                    <td class=\"product-thumbnail\"><a><img width=\"50\" alt=\"product1\"
                                                src=\"/assets/images/products/";
            // line 29
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "imageUrls", [], "any", false, false, false, 29)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "\"></a>
                                    </td>
                                    <td data-title=\"Product\" class=\"product-name\"><a>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                                    <td data-title=\"Price\" class=\"product-price\">
                                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "soldePrice", [], "any", false, false, false, 33) / 100), "EUR"), "html", null, true);
            echo "
                                    </td>
                                    <td data-title=\"Quantity\" class=\"product-quantity\">
                                        <div class=\"quantity\">
                                            <a href=\"/cart/remove/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "/1\">
                                                <input type=\"button\" value=\"-\" class=\"minus\">
                                            </a>
                                            <input type=\"text\" name=\"quantity\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "\" title=\"Qty\" size=\"4\" class=\"qty\">
                                            <a href=\"/cart/add/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "/1\">
                                                <input type=\"button\" value=\"+\" class=\"plus\">
                                            </a>
                                        </div>
                                    </td>
                                    <td data-title=\"Total\" class=\"product-subtotal\">
                                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["item"], "sub_total", [], "any", false, false, false, 47) / 100), "EUR"), "html", null, true);
            echo " </td>
                                    <td data-title=\"Remove\" class=\"product-remove\">
                                        <a href=\"/cart/remove/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                                            <i class=\"ti-close\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"medium_divider\"></div>
                    <div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
                    <div class=\"medium_divider\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\"></div>
                <div class=\"col-md-6\">
                    <div class=\"border p-3 p-md-4\">
                        <div class=\"heading_s1 mb-3\">
                            <h6>Total du panier</h6>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    ";
        // line 82
        echo "                                    <tr>
                                        <td class=\"cart_total_label\">Total</td>
                                        <td class=\"cart_total_amount\"><strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 84) / 100), "EUR"), "html", null, true);
        echo "</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><a routerlink=\"/checkout\" class=\"btn btn-fill-out\" ng-reflect-router-link=\"/checkout\"
                            href=\"/checkout\">Paiement</a>
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
        return "cart/index.html.twig";
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
        return array (  172 => 84,  168 => 82,  143 => 55,  129 => 49,  124 => 47,  115 => 41,  111 => 40,  105 => 37,  98 => 33,  93 => 31,  88 => 29,  84 => 27,  80 => 26,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\cart\\index.html.twig");
    }
}
