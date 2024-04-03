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
class __TwigTemplate_f0e087d20e2c7470c2a210472ad45158 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "PCpluse | Panier d'achat ";
        
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()), "items", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                                <tr>
                                    <td class=\"product-thumbnail\"><a><img width=\"50\" alt=\"product1\"
                                                src=\"/assets/images/products/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "imageUrls", [], "any", false, false, false, 29), 0, [], "array", false, false, false, 29), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 84, $this->source); })()), "sub_total", [], "any", false, false, false, 84) / 100), "EUR"), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  202 => 84,  198 => 82,  173 => 55,  159 => 49,  154 => 47,  145 => 41,  141 => 40,  135 => 37,  128 => 33,  123 => 31,  118 => 29,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCpluse | Panier d'achat {% endblock %}

{% block body %}

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

                                {% for item in cart.items %}
                                <tr>
                                    <td class=\"product-thumbnail\"><a><img width=\"50\" alt=\"product1\"
                                                src=\"/assets/images/products/{{ item.product.imageUrls[0] }}\"></a>
                                    </td>
                                    <td data-title=\"Product\" class=\"product-name\"><a>{{ item.product.name }}</a></td>
                                    <td data-title=\"Price\" class=\"product-price\">
                                        {{ (item.product.soldePrice/100) |format_currency('EUR') }}
                                    </td>
                                    <td data-title=\"Quantity\" class=\"product-quantity\">
                                        <div class=\"quantity\">
                                            <a href=\"/cart/remove/{{item.product.id}}/1\">
                                                <input type=\"button\" value=\"-\" class=\"minus\">
                                            </a>
                                            <input type=\"text\" name=\"quantity\" value=\"{{ item.quantity }}\" title=\"Qty\" size=\"4\" class=\"qty\">
                                            <a href=\"/cart/add/{{item.product.id}}/1\">
                                                <input type=\"button\" value=\"+\" class=\"plus\">
                                            </a>
                                        </div>
                                    </td>
                                    <td data-title=\"Total\" class=\"product-subtotal\">
                                        {{ (item.sub_total/100)  |format_currency('EUR')  }} </td>
                                    <td data-title=\"Remove\" class=\"product-remove\">
                                        <a href=\"/cart/remove/{{item.product.id}}/{{item.quantity}}\">
                                            <i class=\"ti-close\"></i>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor%}

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
                                    {# <tr>
                                        <td class=\"cart_total_label\">Total du panier</td>
                                        <td class=\"cart_total_amount\">{{ (cart.sub_total/100)   |format_currency('EUR') }}</td>
                                    </tr> #}
                                    <tr>
                                        <td class=\"cart_total_label\">Total</td>
                                        <td class=\"cart_total_amount\"><strong>{{ (cart.sub_total/100)   |format_currency('EUR') }}</strong></td>
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
{% endblock %}", "cart/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\cart\\index.html.twig");
    }
}
