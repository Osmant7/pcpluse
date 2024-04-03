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
class __TwigTemplate_ea9e44b7e578612cb0790bb8be0aee57 extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "checkout/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PCpluse | Paiement";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link rel=\"stylesheet\" href=\"/assets/css/stripe.css\">
<script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div  class=\"main_content\"
data-cart=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["cart_json"] ?? null), "html", null, true);
        echo "\" 
data-public_key=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["public_key"] ?? null), "html", null, true);
        echo " \"
data-orderid=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["orderId"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                                    <tr>

                                        <td>
                                            <img src=\"/assets/images/products/";
            // line 80
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 80), "imageUrls", [], "any", false, false, false, 80)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 99) / 100), "EUR"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "sub_total", [], "any", false, false, false, 111) / 100), "EUR"), "html", null, true);
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
        return array (  289 => 145,  253 => 111,  238 => 99,  234 => 97,  230 => 91,  220 => 87,  214 => 84,  210 => 83,  204 => 80,  199 => 77,  195 => 76,  171 => 54,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  143 => 46,  139 => 45,  131 => 39,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  99 => 30,  80 => 14,  76 => 13,  72 => 12,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\checkout\\index.html.twig");
    }
}
