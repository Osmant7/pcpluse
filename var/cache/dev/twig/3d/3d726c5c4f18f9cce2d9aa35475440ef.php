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
class __TwigTemplate_e1c8534bf38f37e314facec68b7cba67 extends Template
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

        echo "PCplus | Panier d'achat ";
        
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
<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"table-responsive shop_cart_table\">
                        <table  class=\"table\">
                            <thead >
                                <tr >
                                    <th  class=\"product-thumbnail\">&nbsp;</th>
                                    <th  class=\"product-name\">Product</th>
                                    <th  class=\"product-price\">Price</th>
                                    <th  class=\"product-quantity\">Quantity</th>
                                    <th  class=\"product-subtotal\">Total</th>
                                    <th  class=\"product-remove\">Remove</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_5/36851533762117856286455670026456984987161761684087224828.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">23.91</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        167,37&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_9/116945623386141314594418897879593148825527931684087225230.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte unicolore (sans couture)</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">44.54</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        44,54&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_7/825380258783085919054835307976332473139779511684087224936.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">17.17</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        51,51&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/970670668041335927385290724653240714148366921684565574162.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Bikini unicolore côtelé</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">28.24</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        56,48&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_4/87087411019387380483560199609827534551691041684087224752.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte unicolore femme (sans couture)</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">56.07</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        112,14&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_2/64690629656996101166169787112869964617448491684087224479.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Tanga unicolore</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">38.84</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        116,52&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_8/10518988473111520886581236853833613928085898971684087225041.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">58.43</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        58,43&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"medium_divider\"></div>
                    <div  class=\"divider center_icon\"><i 
                            class=\"ti-shopping-cart-full\"></i></div>
                    <div  class=\"medium_divider\"></div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\"></div>
                <div  class=\"col-md-6\">
                    <div  class=\"border p-3 p-md-4\">
                        <div  class=\"heading_s1 mb-3\">
                            <h6 >Cart Totals</h6>
                        </div>
                        <div  class=\"table-responsive\">
                            <table  class=\"table\">
                                <tbody >
                                    <tr >
                                        <td  class=\"cart_total_label\">Cart Subtotal</td>
                                        <td  class=\"cart_total_amount\">606,99&nbsp;€</td>
                                    </tr>
                                    <tr >
                                        <td  class=\"cart_total_label\">Shipping</td>
                                        <td  class=\"cart_total_amount\">Free Shipping</td>
                                    </tr>
                                    <tr >
                                        <td  class=\"cart_total_label\">Total</td>
                                        <td  class=\"cart_total_amount\"><strong
                                                >606,99&nbsp;€</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><a  routerlink=\"/checkout\" class=\"btn btn-fill-out\"
                            ng-reflect-router-link=\"/checkout\" href=\"/checkout\">Proceed To CheckOut</a>
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCplus | Panier d'achat {% endblock %}

{% block body %}

<div  class=\"main_content\">
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"table-responsive shop_cart_table\">
                        <table  class=\"table\">
                            <thead >
                                <tr >
                                    <th  class=\"product-thumbnail\">&nbsp;</th>
                                    <th  class=\"product-name\">Product</th>
                                    <th  class=\"product-price\">Price</th>
                                    <th  class=\"product-quantity\">Quantity</th>
                                    <th  class=\"product-subtotal\">Total</th>
                                    <th  class=\"product-remove\">Remove</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_5/36851533762117856286455670026456984987161761684087224828.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">23.91</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        167,37&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_9/116945623386141314594418897879593148825527931684087225230.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte unicolore (sans couture)</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">44.54</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        44,54&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_7/825380258783085919054835307976332473139779511684087224936.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">17.17</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        51,51&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/970670668041335927385290724653240714148366921684565574162.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Bikini unicolore côtelé</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">28.24</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        56,48&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_4/87087411019387380483560199609827534551691041684087224752.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte unicolore femme (sans couture)</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">56.07</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        112,14&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_2/64690629656996101166169787112869964617448491684087224479.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Tanga unicolore</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">38.84</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        116,52&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                                <tr >
                                    <td  class=\"product-thumbnail\"><a
                                            ><img  width=\"50\"
                                                alt=\"product1\"
                                                src=\"/assets/files/culottes/culotte_8/10518988473111520886581236853833613928085898971684087225041.webp\"></a>
                                    </td>
                                    <td  data-title=\"Product\" class=\"product-name\"><a
                                            >Culotte en dentelle</a></td>
                                    <td  data-title=\"Price\" class=\"product-price\">58.43</td>
                                    <td  data-title=\"Quantity\" class=\"product-quantity\">
                                        <div  class=\"quantity\"><input
                                                 type=\"button\" value=\"-\"
                                                class=\"minus\"><input  type=\"text\"
                                                name=\"quantity\" title=\"Qty\" size=\"4\" class=\"qty\"><input
                                                 type=\"button\" value=\"+\" class=\"plus\"></div>
                                    </td>
                                    <td  data-title=\"Total\" class=\"product-subtotal\">
                                        58,43&nbsp;€ </td>
                                    <td  data-title=\"Remove\" class=\"product-remove\"><a
                                             href=\"#\"><i 
                                                class=\"ti-close\"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-12\">
                    <div  class=\"medium_divider\"></div>
                    <div  class=\"divider center_icon\"><i 
                            class=\"ti-shopping-cart-full\"></i></div>
                    <div  class=\"medium_divider\"></div>
                </div>
            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\"></div>
                <div  class=\"col-md-6\">
                    <div  class=\"border p-3 p-md-4\">
                        <div  class=\"heading_s1 mb-3\">
                            <h6 >Cart Totals</h6>
                        </div>
                        <div  class=\"table-responsive\">
                            <table  class=\"table\">
                                <tbody >
                                    <tr >
                                        <td  class=\"cart_total_label\">Cart Subtotal</td>
                                        <td  class=\"cart_total_amount\">606,99&nbsp;€</td>
                                    </tr>
                                    <tr >
                                        <td  class=\"cart_total_label\">Shipping</td>
                                        <td  class=\"cart_total_amount\">Free Shipping</td>
                                    </tr>
                                    <tr >
                                        <td  class=\"cart_total_label\">Total</td>
                                        <td  class=\"cart_total_amount\"><strong
                                                >606,99&nbsp;€</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><a  routerlink=\"/checkout\" class=\"btn btn-fill-out\"
                            ng-reflect-router-link=\"/checkout\" href=\"/checkout\">Proceed To CheckOut</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{% endblock %}
", "cart/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\cart\\index.html.twig");
    }
}
