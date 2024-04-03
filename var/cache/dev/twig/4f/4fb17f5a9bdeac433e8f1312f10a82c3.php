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
class __TwigTemplate_63cdc2909f6f74179caf7c0c051fee44 extends Template
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

        echo "PCpluse";
        
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
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Meilleure vente</h5>
                            <h3  class=\"single_bn_title\">Nouvelle collection</h3>
                        </div>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Meilleure vente</h5>
                            <h3  class=\"single_bn_title\">Nouvelle collection</h3>
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
                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsNewArrival"]) || array_key_exists("productsNewArrival", $context) ? $context["productsNewArrival"] : (function () { throw new RuntimeError('Variable "productsNewArrival" does not exist.', 63, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 64
            echo "                                    ";
            $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 64)->display($context);
            // line 65
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                 ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsBestSeller"]) || array_key_exists("productsBestSeller", $context) ? $context["productsBestSeller"] : (function () { throw new RuntimeError('Variable "productsBestSeller" does not exist.', 71, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "                                    ";
            $this->loadTemplate("product/display_product.html.twig", "home/index.html.twig", 72)->display($context);
            // line 73
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </div>
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
        return array (  222 => 74,  208 => 73,  205 => 72,  188 => 71,  181 => 66,  167 => 65,  164 => 64,  147 => 63,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCpluse{% endblock %}

{% block body %}

<div  class=\"main_content\">
    <div  class=\"section pb_20\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Meilleure vente</h5>
                            <h3  class=\"single_bn_title\">Nouvelle collection</h3>
                        </div>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"single_banner\"><img 
                            alt=\"shop_banner_img1\"
                            src=\"/assets/images/megaCollection/321456.png\">
                        <div  class=\"single_banner_info\">
                            <h5  class=\"single_bn_title1\">Meilleure vente</h5>
                            <h3  class=\"single_bn_title\">Nouvelle collection</h3>
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
                                {% for product in productsNewArrival %}
                                    {% include \"product/display_product.html.twig\" %}
                                {% endfor %}
                            </div>
                        </div>
                        <div  id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\"
                            class=\"tab-pane fade\">
                            <div  class=\"row shop_container\">
                                 {% for product in productsBestSeller %}
                                    {% include \"product/display_product.html.twig\" %}
                                {% endfor %}
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
