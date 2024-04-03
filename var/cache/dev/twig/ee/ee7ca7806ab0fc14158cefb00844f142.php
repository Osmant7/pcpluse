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
class __TwigTemplate_95387da5384050e0b54ab9f3be46562a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wish_list/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wish_list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wish_list/index.html.twig", 1);
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

        echo " PCplus | Wishlist  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["wishlist"]) || array_key_exists("wishlist", $context) ? $context["wishlist"] : (function () { throw new RuntimeError('Variable "wishlist" does not exist.', 25, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "imageUrls", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  166 => 57,  154 => 51,  146 => 46,  139 => 42,  133 => 39,  127 => 36,  120 => 32,  114 => 28,  112 => 26,  108 => 25,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} PCplus | Wishlist  {% endblock %}


{% block body %}
<div  class=\"main_content\">
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
                                {% for product in wishlist  %}
                                {#
                                #}
                                <tr >
                                    <td  class=\"product-thumbnail\">
                                        <a href=\"#\">
                                            <img width=\"50\" height=\"50\" alt=\"product1\"
                                            src=\"/assets/images/products/{{ product.imageUrls[0] }}\">
                                        </a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\">
                                        <a href=\"#\">{{product.name}}</a>
                                    </td>
                                    <td  data-title=\"Price\" class=\"product-price\">
                                        {{ (product.soldePrice/100) |format_currency('EUR') }}
                                    </td>
                                    <td  data-title=\"Stock Status\" class=\"product-stock-status\">
                                        {{product.stock}}
                                        <span class=\"badge badge-pill badge-success\">In Stock</span>
                                    </td>
                                    <td  class=\"product-add-to-cart\">
                                        <a href=\"/cart/add/{{product.id}}/1\" class=\"btn btn-fill-out btn-addtocart\">
                                             <i class=\"icon-basket-loaded\"></i> Ajouter au panier
                                        </a>
                                    </td>
                                    <td >
                                        <a href=\"/wishlist/remove/{{product.id}}\" class=\"remove-to-wishlist\">
                                            <i class=\"ti-close\"></i>
                                        </a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "wish_list/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\wish_list\\index.html.twig");
    }
}
