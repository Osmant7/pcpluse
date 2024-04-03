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

/* checkout/index.html.twig */
class __TwigTemplate_e3abf97e364c548a6f145608d8005bb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("default.html.twig", "checkout/index.html.twig", 1);
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

        echo "PCpluse | Paiement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"/assets/css/stripe.css\">
<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div  class=\"main_content\"
data-cart=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["cart_json"]) || array_key_exists("cart_json", $context) ? $context["cart_json"] : (function () { throw new RuntimeError('Variable "cart_json" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" 
data-public_key=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["public_key"]) || array_key_exists("public_key", $context) ? $context["public_key"] : (function () { throw new RuntimeError('Variable "public_key" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " \"
data-orderid=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"
>
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
 
            </div>
            <div  class=\"row\">

            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1\">
                        <h4>Adresse de facturation</h4>
                        <select name=\"billing_address\" class=\"form-control\">
                            <option value=\"\"> Choix de l'adresse de facturation</option>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 31
            echo "                                <option>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "clientName", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                    ( ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 33), "html", null, true);
            echo "
                                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 34), "html", null, true);
            echo "
                                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 35), "html", null, true);
            echo "
                                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 36), "html", null, true);
            echo " )
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </select>
                    </div>
                    <div  class=\"heading_s1\">
                        <h4>Adresse de livraison</h4>
                        <select name=\"shipping_address\" class=\"form-control\">
                        <option value=\"\"> Choix de l'adresse de livraison</option>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 46
            echo "                                <option>
                                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "clientName", [], "any", false, false, false, 47), "html", null, true);
            echo "
                                    ( ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 50), "html", null, true);
            echo "
                                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 51), "html", null, true);
            echo " )
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </select>
                    </div>

                    <div  class=\"heading_s1\">
                        <h4>Commentaire</h4>
                        <textarea class=\"form-control\" name=\"comments\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >Vos commandes</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >Produit</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 76, $this->source); })()), "items", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                                    <tr>

                                        <td>
                                            <img src=\"/assets/images/products/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 80), "imageUrls", [], "any", false, false, false, 80), 0, [], "array", false, false, false, 80), "html", null, true);
            echo "\"
                                            width=\"30\" height=\"30\" alt=\"\">
                                        
                                            ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
            echo "
                                            <span class=\"product-qty\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>
                                        </td>
                                        <td>
                                            ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 87), "soldePrice", [], "any", false, false, false, 87) / 100), "EUR"), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                </tbody>
                                <tfoot >
                                    ";
        // line 97
        echo "                                    <tr >
                                        <th >Total</th>
                                        <td  class=\"product-subtotal\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 99, $this->source); })()), "sub_total", [], "any", false, false, false, 99) / 100), "EUR"), "html", null, true);
        echo "</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                            
                        </div>
                        
                        <div class=\"payment-buttons d-none\">
                            <a  href=\"#\" class=\"btn btn-fill-out btn-block\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
                                Paiement
                                ";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 111, $this->source); })()), "sub_total", [], "any", false, false, false, 111) / 100), "EUR"), "html", null, true);
        echo "
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- AFFICHAGE VIA STRIPE DE L'ETAPE DE PAIEMENT -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">

      <div class=\"modal-body\">
        <!-- Display a payment form -->
        <form id=\"payment-form\">
            <div id=\"link-authentication-element\">
            <!--Stripe.js injects the link authentification element -->
            </div>
        <div id=\"payment-element\">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <button id=\"submit\">
            <div class=\"spinner hidden\" id=\"spinner\"></div>
            <span id=\"button-text\">Pay now</span>
        </button>
        <div id=\"payment-message\" class=\"hidden\"></div>
    </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        ";
        // line 145
        echo "      </div>
    </div>
  </div>
</div>









    <script>
        const main_content = document.querySelector(\".main_content\")
        const cart = JSON.parse(main_content?.dataset?.cart || [])
        const public_key = main_content?.dataset?.public_key || \"\"
        const orderId = main_content?.dataset?.orderid || \"\"
        
        let billing_address = \"\"
        let shipping_address = \"\"
        let comment = \"\"
        let displayPayBtn = false

        const billing_address_select = document.querySelector('select[name=\"billing_address\"]')
        const shipping_address_select = document.querySelector('select[name=\"shipping_address\"]')
        const comments_textarea = document.querySelector('textarea')
        const payBtn = document.querySelector('.payment-buttons')

        const updateButton = () => {
            displayPayBtn = (!!billing_address) && (!!shipping_address)
            //console.log({displayPayBtn}, comment)
            displayPayBtn ? payBtn.classList.remove(\"d-none\") : payBtn.classList.add(\"d-none\")
        }



        billing_address_select.onchange = (event) => {
            billing_address = event.target.value
            updateButton()
        }

        shipping_address_select.onchange = (event) => {
            shipping_address = event.target.value
            updateButton()
        }
        comments_textarea.onchange = (event) => {
            comment = event.target.value
            updateButton()
        }

        payBtn.onclick = async () => {
            const response = await fetch(\"/api/order\", {
                method: \"POST\",
                body : JSON.stringify({billing_address, shipping_address, orderId})
                })
                const result = await response.json()
                console.log({result});
        } 

        // STRIPE 


        // This is your test publishable API key.
        const stripe = Stripe(public_key);

        // The items the customer wants to buy
        const items = cart.items;

        let elements;

        initialize();
        checkStatus();

        document
        .querySelector(\"#payment-form\")
        .addEventListener(\"submit\", handleSubmit);

        let emailAddress = ''
        // Fetches a payment intent and captures the client secret
        async function initialize() {

            const { clientSecret } = await fetch(\"/api/stripe/payment-intent/\"+orderId, {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({  }),
            }).then((r) => r.json());

        elements = stripe.elements({ clientSecret });

        const linkAuthenticationElement = elements.create(\"linkAuthentication\");
        linkAuthenticationElement.mount(\"#link-authentication-element\")

        const paymentElementOptions = {
            layout: \"tabs\",
        };

        const paymentElement = elements.create(\"payment\", paymentElementOptions);
        paymentElement.mount(\"#payment-element\");
        }




        async function handleSubmit(e) {
        e.preventDefault();
        setLoading(true);

        const { error } = await stripe.confirmPayment({
            elements,
            confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: window.location.origin+\"/stripe/payment/success\",
            },
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === \"card_error\" || error.type === \"validation_error\") {
            showMessage(error.message);
        } else {
            showMessage(\"An unexpected error occurred.\");
        }

        setLoading(false);
        }

        // Fetches the payment intent status after payment submission
        async function checkStatus() {
        const clientSecret = new URLSearchParams(window.location.search).get(
            \"payment_intent_client_secret\"
        );

        if (!clientSecret) {
            return;
        }

        const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

        switch (paymentIntent.status) {
            case \"succeeded\":
            showMessage(\"Payment succeeded!\");
            break;
            case \"processing\":
            showMessage(\"Your payment is processing.\");
            break;
            case \"requires_payment_method\":
            showMessage(\"Your payment was not successful, please try again.\");
            break;
            default:
            showMessage(\"Something went wrong.\");
            break;
        }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
        const messageContainer = document.querySelector(\"#payment-message\");

        messageContainer.classList.remove(\"hidden\");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add(\"hidden\");
            messageContainer.textContent = \"\";
        }, 4000);
        }

        // Show a spinner on payment submission
        function setLoading(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector(\"#submit\").disabled = true;
            document.querySelector(\"#spinner\").classList.remove(\"hidden\");
            document.querySelector(\"#button-text\").classList.add(\"hidden\");
        } else {
            document.querySelector(\"#submit\").disabled = false;
            document.querySelector(\"#spinner\").classList.add(\"hidden\");
            document.querySelector(\"#button-text\").classList.remove(\"hidden\");
        }
        }


    </script>
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
        return "checkout/index.html.twig";
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
        return array (  331 => 145,  295 => 111,  280 => 99,  276 => 97,  272 => 91,  262 => 87,  256 => 84,  252 => 83,  246 => 80,  241 => 77,  237 => 76,  213 => 54,  204 => 51,  200 => 50,  196 => 49,  192 => 48,  188 => 47,  185 => 46,  181 => 45,  173 => 39,  164 => 36,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  145 => 31,  141 => 30,  122 => 14,  118 => 13,  114 => 12,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default.html.twig' %}

{% block title %}PCpluse | Paiement{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/assets/css/stripe.css\">
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block body %}
<div  class=\"main_content\"
data-cart=\"{{cart_json}}\" 
data-public_key=\"{{public_key}} \"
data-orderid=\"{{orderId}}\"
>
    <div  class=\"section\">
        <div  class=\"container\">
            <div  class=\"row\">
 
            </div>
            <div  class=\"row\">

            </div>
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <div  class=\"heading_s1\">
                        <h4>Adresse de facturation</h4>
                        <select name=\"billing_address\" class=\"form-control\">
                            <option value=\"\"> Choix de l'adresse de facturation</option>
                            {% for address in addresses %}
                                <option>
                                    {{ address.clientName }}
                                    ( {{ address.street }}
                                    {{ address.codePostal }}
                                    {{ address.city }}
                                    {{ address.state }} )
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div  class=\"heading_s1\">
                        <h4>Adresse de livraison</h4>
                        <select name=\"shipping_address\" class=\"form-control\">
                        <option value=\"\"> Choix de l'adresse de livraison</option>
                            {% for address in addresses %}
                                <option>
                                    {{ address.clientName }}
                                    ( {{ address.street }}
                                    {{ address.codePostal }}
                                    {{ address.city }}
                                    {{ address.state }} )
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <div  class=\"heading_s1\">
                        <h4>Commentaire</h4>
                        <textarea class=\"form-control\" name=\"comments\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
                    </div>
                </div>
                <div  class=\"col-md-6\">
                    <div  class=\"order_review\">
                        <div  class=\"heading_s1\">
                            <h4 >Vos commandes</h4>
                        </div>
                        <div  class=\"table-responsive order_table\">
                            <table  class=\"table\">
                                <thead >
                                    <tr >
                                        <th >Produit</th>
                                        <th >Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                {% for item in cart.items %}
                                    <tr>

                                        <td>
                                            <img src=\"/assets/images/products/{{item.product.imageUrls[0]}}\"
                                            width=\"30\" height=\"30\" alt=\"\">
                                        
                                            {{item.product.name}}
                                            <span class=\"product-qty\">{{item.quantity}}</span>
                                        </td>
                                        <td>
                                            {{ (item.product.soldePrice/100) |format_currency('EUR') }}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                                <tfoot >
                                    {# <tr >
                                        <th >SubTotal</th>
                                        <td  class=\"product-subtotal\">{{ (cart.sub_total/100) |format_currency('EUR') }}</td>
                                    </tr> #}
                                    <tr >
                                        <th >Total</th>
                                        <td  class=\"product-subtotal\">{{ (cart.sub_total/100) |format_currency('EUR') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div  class=\"payment_method\">
                            
                        </div>
                        
                        <div class=\"payment-buttons d-none\">
                            <a  href=\"#\" class=\"btn btn-fill-out btn-block\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
                                Paiement
                                {{ (cart.sub_total/100) |format_currency('EUR') }}
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- AFFICHAGE VIA STRIPE DE L'ETAPE DE PAIEMENT -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">

      <div class=\"modal-body\">
        <!-- Display a payment form -->
        <form id=\"payment-form\">
            <div id=\"link-authentication-element\">
            <!--Stripe.js injects the link authentification element -->
            </div>
        <div id=\"payment-element\">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <button id=\"submit\">
            <div class=\"spinner hidden\" id=\"spinner\"></div>
            <span id=\"button-text\">Pay now</span>
        </button>
        <div id=\"payment-message\" class=\"hidden\"></div>
    </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        {# <button type=\"button\" class=\"btn btn-primary\">Understood</button> #}
      </div>
    </div>
  </div>
</div>









    <script>
        const main_content = document.querySelector(\".main_content\")
        const cart = JSON.parse(main_content?.dataset?.cart || [])
        const public_key = main_content?.dataset?.public_key || \"\"
        const orderId = main_content?.dataset?.orderid || \"\"
        
        let billing_address = \"\"
        let shipping_address = \"\"
        let comment = \"\"
        let displayPayBtn = false

        const billing_address_select = document.querySelector('select[name=\"billing_address\"]')
        const shipping_address_select = document.querySelector('select[name=\"shipping_address\"]')
        const comments_textarea = document.querySelector('textarea')
        const payBtn = document.querySelector('.payment-buttons')

        const updateButton = () => {
            displayPayBtn = (!!billing_address) && (!!shipping_address)
            //console.log({displayPayBtn}, comment)
            displayPayBtn ? payBtn.classList.remove(\"d-none\") : payBtn.classList.add(\"d-none\")
        }



        billing_address_select.onchange = (event) => {
            billing_address = event.target.value
            updateButton()
        }

        shipping_address_select.onchange = (event) => {
            shipping_address = event.target.value
            updateButton()
        }
        comments_textarea.onchange = (event) => {
            comment = event.target.value
            updateButton()
        }

        payBtn.onclick = async () => {
            const response = await fetch(\"/api/order\", {
                method: \"POST\",
                body : JSON.stringify({billing_address, shipping_address, orderId})
                })
                const result = await response.json()
                console.log({result});
        } 

        // STRIPE 


        // This is your test publishable API key.
        const stripe = Stripe(public_key);

        // The items the customer wants to buy
        const items = cart.items;

        let elements;

        initialize();
        checkStatus();

        document
        .querySelector(\"#payment-form\")
        .addEventListener(\"submit\", handleSubmit);

        let emailAddress = ''
        // Fetches a payment intent and captures the client secret
        async function initialize() {

            const { clientSecret } = await fetch(\"/api/stripe/payment-intent/\"+orderId, {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({  }),
            }).then((r) => r.json());

        elements = stripe.elements({ clientSecret });

        const linkAuthenticationElement = elements.create(\"linkAuthentication\");
        linkAuthenticationElement.mount(\"#link-authentication-element\")

        const paymentElementOptions = {
            layout: \"tabs\",
        };

        const paymentElement = elements.create(\"payment\", paymentElementOptions);
        paymentElement.mount(\"#payment-element\");
        }




        async function handleSubmit(e) {
        e.preventDefault();
        setLoading(true);

        const { error } = await stripe.confirmPayment({
            elements,
            confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: window.location.origin+\"/stripe/payment/success\",
            },
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === \"card_error\" || error.type === \"validation_error\") {
            showMessage(error.message);
        } else {
            showMessage(\"An unexpected error occurred.\");
        }

        setLoading(false);
        }

        // Fetches the payment intent status after payment submission
        async function checkStatus() {
        const clientSecret = new URLSearchParams(window.location.search).get(
            \"payment_intent_client_secret\"
        );

        if (!clientSecret) {
            return;
        }

        const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

        switch (paymentIntent.status) {
            case \"succeeded\":
            showMessage(\"Payment succeeded!\");
            break;
            case \"processing\":
            showMessage(\"Your payment is processing.\");
            break;
            case \"requires_payment_method\":
            showMessage(\"Your payment was not successful, please try again.\");
            break;
            default:
            showMessage(\"Something went wrong.\");
            break;
        }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
        const messageContainer = document.querySelector(\"#payment-message\");

        messageContainer.classList.remove(\"hidden\");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add(\"hidden\");
            messageContainer.textContent = \"\";
        }, 4000);
        }

        // Show a spinner on payment submission
        function setLoading(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector(\"#submit\").disabled = true;
            document.querySelector(\"#spinner\").classList.remove(\"hidden\");
            document.querySelector(\"#button-text\").classList.add(\"hidden\");
        } else {
            document.querySelector(\"#submit\").disabled = false;
            document.querySelector(\"#spinner\").classList.add(\"hidden\");
            document.querySelector(\"#button-text\").classList.remove(\"hidden\");
        }
        }


    </script>
</div>


{% endblock %}
", "checkout/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\checkout\\index.html.twig");
    }
}
