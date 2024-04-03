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

/* account/index.html.twig */
class __TwigTemplate_dba33a274f5217b66d35b901a2c614e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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

        echo "PCpluse | Your account";
        
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
        echo "<div class=\"main_content\">
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-bs-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-bs-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-bs-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-bs-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"logout-tab\"  href=\"#logout\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"logout\" aria-selected=\"true\" ><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                <div class=\"tab-content dashboard_content\">
                  \t<div class=\"tab-pane fade\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Dashboard</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                            </div>
                        </div>
                  \t</div>
                  \t<div class=\"tab-pane fade\" id=\"logout\" role=\"tabpanel\" aria-labelledby=\"logout-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Logout</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                                <button type=\"submit\" class=\"btn btn-fill-out py-2\" name=\"submit\" value=\"Submit\">Logout</button>
                            </div>
                        </div>
                  \t</div>
                  \t<div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>March 15, 2020</td>
                                                <td>Processing</td>
                                                <td>\$78.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>June 20, 2020</td>
                                                <td>Completed</td>
                                                <td>\$81.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                  \t</div>
\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                    \t<div class=\"row\">
                        <div class=\"action d-flex mb-3\">
                            <a href=\"#\" id=\"add_new_address\"class=\"btn btn-fill-out\">Ajouter</a>
                        </div>
                        <div class=\"col-lg-12 d-none\" id=\"add_form\">
                            <form action=\"\">
                                <div class=\"row\">
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Type d'adresse <span class=\"required\">*</span></label>
                                        <select name=\"address_type\" id=\"\" class=\"form-control\">
                                            <option value=\"Facturation\">Facturation</option>
                                            <option value=\"Livraison\">Livraison</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Nom <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"name\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Votre nom complet <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"client_name\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Rue <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"street\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Code postal <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"code_postal\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Ville <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"city\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Pays <span class=\"required\">*</span></label>
                                        <select class=\"form-control\" name=\"state\" id=\"state\">

                                        </select>
                                        
                                    </div>
                                    <div class=\"d-flex\">
                                        <button class=\"btn btn-fill-out\">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-lg-12 d-block\" id=\"address_details\">
                            <div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Les addresses</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<div class=\"table-responsive address_content\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Addresse</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 157
            echo "                                            <tr>
                                                <td>#";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
                                                <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>

                                                <td><a href=\"#\" 
                                                        data-id=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 162), "html", null, true);
            echo "\"
                                                        data-address_type=\"";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "addressType", [], "any", false, false, false, 163), "html", null, true);
            echo "\"
                                                        data-client_name=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "clientName", [], "any", false, false, false, 164), "html", null, true);
            echo "\"
                                                        data-street=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 165), "html", null, true);
            echo "\"
                                                        data-code_postal=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codePostal", [], "any", false, false, false, 166), "html", null, true);
            echo "\"
                                                        data-city=\"";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 167), "html", null, true);
            echo "\"
                                                        data-state=\"";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 168), "html", null, true);
            echo "\"
                                                        class=\"btn btn-fill-out btn-sm edit_address\">
                                                    Modifier
                                                    </a>
                                                </td>
                                                <td><a href=\"#\" data-id=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 173), "html", null, true);
            echo "\" class=\"btn btn-fill-out btn-sm remove_address\">Supprimer</a></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                        
                            ";
        // line 196
        echo "                        </div>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
\t\t\t\t\t\t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>Already have an account? <a href=\"#\">Log in instead!</a></p>
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
    const addform = document.getElementById(\"add_form\")
    const form = document.querySelector(\"#add_form form\")
    const addAddressButton = document.getElementById(\"add_new_address\");
    const addressDetails = document.getElementById(\"address_details\")
    const editAddress = document.querySelectorAll(\".edit_address\")
    let isUpdating = false
    let currentAddress
    
    
    const displayAddress = (addresses) => {
        isUpdating = false
        currentAddress = undefined
        const tbody = document.querySelector(\".address_content tbody\")
        if (tbody) {
            tbody.innerHTML = \"\"
            addresses.forEach(address => {
                tbody.innerHTML += `
                <tr>
                    <td>#\${address.id}</td>
                    <td>\${address.street} \${address.codePostal} \${address.city} \${address.state}</td>                       
                    <td><a href=\"#\" 
                        data-id=\"\${address.id}\"
                        data-address_type=\"\${address.address_type}\"
                        data-name=\"\${address.name}\"
                        data-client_name=\"\${address.clientName}\"
                        data-street=\"\${address.street}\"
                        data-code_postal=\"\${address.codePostal}\"
                        data-city=\"\${address.city}\"
                        data-state=\"\${address.state}\"
                        class=\"btn btn-fill-out btn-sm edit_address\">Edit</a></td>
                    <td><a href=\"#\" data-id=\"\${address.id}\" class=\"btn btn-fill-out btn-sm remove_address\">Delete</a></td>
                </tr>
                `

            });
            addform.classList.add(\"d-none\")
            addressDetails.classList.remove(\"d-none\")
            addAddressButton.innerHTML = \"Add New\"
            addEvent()
        }
    }

    const initState = async () =>{
        const select = document.querySelector(\"#add_form form select#state\")
        select.innerHTML = \"\"

        const response = await fetch(\"/assets/data/countries.json\")

        const countries = await response.json()

        countries.forEach((countrie)=>{
            select.innerHTML += `
            <option value=\"\${countrie.alpha2Code}\"> \${countrie.name} </option>
            `
        })
    }

    const addEvent = (address) => {
        const addform = document.getElementById(\"add_form\")
        const addAddressButton = document.getElementById(\"add_new_address\");
        const addressDetails = document.getElementById(\"address_details\")
        const remove_address_btns = document.querySelectorAll(\".remove_address\")
        const editAddress = document.querySelectorAll(\".edit_address\")


        remove_address_btns.forEach((remove_address_btn) => {
            remove_address_btn.addEventListener(\"click\", async (event) => {
                event.preventDefault()
                const element = event.target
                const id = element.dataset.id
    
                if (id) {
                    const response = await fetch(\"/api/address/\" + id, {
                        method: \"DELETE\"
                    })
    
                    const result = await response.json()
    
                    console.log(result);
    
                    if (result.isSuccess) {
                        const addresses = result.data
                        displayAddress(addresses)
                    }
                }
            })
        });

        addform.addEventListener(\"submit\", async (event) => {
            event.preventDefault()
            const form = document.querySelector(\"#add_form form\")
            const formData = new FormData(form)

        
            if(isUpdating){
                // update data
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);

                const response = await fetch(\"/api/address/\"+currentAddress.id, {
                    method: \"PUT\",
                    body: json
                })
    
                const result = await response.json()
    
                if (result.isSuccess) {
                    const addresses = result.data
                    displayAddress(addresses)
                }
            }else{
                //create data
    
                const response = await fetch(\"/api/address\", {
                    method: \"POST\",
                    body: formData
                })
    
                const result = await response.json()
    
                if (result.isSuccess) {
                    const addresses = result.data
    
                    displayAddress(addresses)
    
                }
            }


        })

        editAddress.forEach(item =>item.addEventListener(\"click\", updateAddress))
    }

    const updateAddress = (event)=>{
        event.preventDefault()
        isUpdating = true
        currentAddress = Object.assign({},event.target.dataset)
        addAddressButton.click()

        document.getElementsByName(\"name\")[0].value = currentAddress.name
        document.getElementsByName(\"client_name\")[0].value = currentAddress.client_name
        document.getElementsByName(\"address_type\")[0].value = currentAddress.address_type
        document.getElementsByName(\"street\")[0].value = currentAddress.street
        document.getElementsByName(\"city\")[0].value = currentAddress.city
        document.getElementsByName(\"code_postal\")[0].value = currentAddress.code_postal
        document.getElementsByName(\"state\")[0].value = currentAddress.state
        form.querySelector(\"button\").innerHTML = \"Modifier\"

        console.log(currentAddress);
    }
    
    addAddressButton.addEventListener(\"click\", (event) => {
        event.preventDefault()
        if (addform.classList.contains(\"d-none\")) {
            addform.classList.remove(\"d-none\")
            addressDetails.classList.add(\"d-none\")
            addAddressButton.innerHTML = \"Annuler\"
            form.querySelector(\"button\").innerHTML = \"Ajouter\"
            form.reset()
        } else {
            addAddressButton.innerHTML = \"Ajouter\"
            addform.classList.add(\"d-none\")
            addressDetails.classList.remove(\"d-none\")

        }
    })

    
    addEvent()
    initState()


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
        return "account/index.html.twig";
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
        return array (  314 => 196,  304 => 176,  295 => 173,  287 => 168,  283 => 167,  279 => 166,  275 => 165,  271 => 164,  267 => 163,  263 => 162,  251 => 159,  247 => 158,  244 => 157,  240 => 156,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PCpluse | Your account{% endblock %}

{% block body %}
<div class=\"main_content\">
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-bs-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-bs-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-bs-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-bs-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"logout-tab\"  href=\"#logout\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"logout\" aria-selected=\"true\" ><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                <div class=\"tab-content dashboard_content\">
                  \t<div class=\"tab-pane fade\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Dashboard</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                            </div>
                        </div>
                  \t</div>
                  \t<div class=\"tab-pane fade\" id=\"logout\" role=\"tabpanel\" aria-labelledby=\"logout-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Logout</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                                <button type=\"submit\" class=\"btn btn-fill-out py-2\" name=\"submit\" value=\"Submit\">Logout</button>
                            </div>
                        </div>
                  \t</div>
                  \t<div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                    \t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>March 15, 2020</td>
                                                <td>Processing</td>
                                                <td>\$78.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>June 20, 2020</td>
                                                <td>Completed</td>
                                                <td>\$81.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                  \t</div>
\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                    \t<div class=\"row\">
                        <div class=\"action d-flex mb-3\">
                            <a href=\"#\" id=\"add_new_address\"class=\"btn btn-fill-out\">Ajouter</a>
                        </div>
                        <div class=\"col-lg-12 d-none\" id=\"add_form\">
                            <form action=\"\">
                                <div class=\"row\">
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Type d'adresse <span class=\"required\">*</span></label>
                                        <select name=\"address_type\" id=\"\" class=\"form-control\">
                                            <option value=\"Facturation\">Facturation</option>
                                            <option value=\"Livraison\">Livraison</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Nom <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"name\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Votre nom complet <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"client_name\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Rue <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"street\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Code postal <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"code_postal\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Ville <span class=\"required\">*</span></label>
                                        <input type=\"text\" required=\"\" class=\"form-control\" name=\"city\">
                                    </div>
                                    <div class=\"form-group col-md-12 mb-3\">
                                        <label> Pays <span class=\"required\">*</span></label>
                                        <select class=\"form-control\" name=\"state\" id=\"state\">

                                        </select>
                                        
                                    </div>
                                    <div class=\"d-flex\">
                                        <button class=\"btn btn-fill-out\">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-lg-12 d-block\" id=\"address_details\">
                            <div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Les addresses</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<div class=\"table-responsive address_content\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Addresse</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for address in addresses %}
                                            <tr>
                                                <td>#{{address.id}}</td>
                                                <td>{{address.street}} {{address.codePostal}} {{address.city}} {{address.state}}</td>

                                                <td><a href=\"#\" 
                                                        data-id=\"{{address.id}}\"
                                                        data-address_type=\"{{address.addressType}}\"
                                                        data-client_name=\"{{address.clientName}}\"
                                                        data-street=\"{{address.street}}\"
                                                        data-code_postal=\"{{address.codePostal}}\"
                                                        data-city=\"{{address.city}}\"
                                                        data-state=\"{{address.state}}\"
                                                        class=\"btn btn-fill-out btn-sm edit_address\">
                                                    Modifier
                                                    </a>
                                                </td>
                                                <td><a href=\"#\" data-id=\"{{address.id}}\" class=\"btn btn-fill-out btn-sm remove_address\">Supprimer</a></td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                        
                            {# <div class=\"col-lg-6\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3>Shipping Address</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href=\"#\" class=\"btn btn-fill-out\">Edit</a>
                                    </div>
                                </div>
                            </div> #}
                        </div>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
\t\t\t\t\t\t<div class=\"card\">
                        \t<div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                    \t\t\t<p>Already have an account? <a href=\"#\">Log in instead!</a></p>
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6 mb-3\">
                                        \t<label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12 mb-3\">
                                        \t<label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
    const addform = document.getElementById(\"add_form\")
    const form = document.querySelector(\"#add_form form\")
    const addAddressButton = document.getElementById(\"add_new_address\");
    const addressDetails = document.getElementById(\"address_details\")
    const editAddress = document.querySelectorAll(\".edit_address\")
    let isUpdating = false
    let currentAddress
    
    
    const displayAddress = (addresses) => {
        isUpdating = false
        currentAddress = undefined
        const tbody = document.querySelector(\".address_content tbody\")
        if (tbody) {
            tbody.innerHTML = \"\"
            addresses.forEach(address => {
                tbody.innerHTML += `
                <tr>
                    <td>#\${address.id}</td>
                    <td>\${address.street} \${address.codePostal} \${address.city} \${address.state}</td>                       
                    <td><a href=\"#\" 
                        data-id=\"\${address.id}\"
                        data-address_type=\"\${address.address_type}\"
                        data-name=\"\${address.name}\"
                        data-client_name=\"\${address.clientName}\"
                        data-street=\"\${address.street}\"
                        data-code_postal=\"\${address.codePostal}\"
                        data-city=\"\${address.city}\"
                        data-state=\"\${address.state}\"
                        class=\"btn btn-fill-out btn-sm edit_address\">Edit</a></td>
                    <td><a href=\"#\" data-id=\"\${address.id}\" class=\"btn btn-fill-out btn-sm remove_address\">Delete</a></td>
                </tr>
                `

            });
            addform.classList.add(\"d-none\")
            addressDetails.classList.remove(\"d-none\")
            addAddressButton.innerHTML = \"Add New\"
            addEvent()
        }
    }

    const initState = async () =>{
        const select = document.querySelector(\"#add_form form select#state\")
        select.innerHTML = \"\"

        const response = await fetch(\"/assets/data/countries.json\")

        const countries = await response.json()

        countries.forEach((countrie)=>{
            select.innerHTML += `
            <option value=\"\${countrie.alpha2Code}\"> \${countrie.name} </option>
            `
        })
    }

    const addEvent = (address) => {
        const addform = document.getElementById(\"add_form\")
        const addAddressButton = document.getElementById(\"add_new_address\");
        const addressDetails = document.getElementById(\"address_details\")
        const remove_address_btns = document.querySelectorAll(\".remove_address\")
        const editAddress = document.querySelectorAll(\".edit_address\")


        remove_address_btns.forEach((remove_address_btn) => {
            remove_address_btn.addEventListener(\"click\", async (event) => {
                event.preventDefault()
                const element = event.target
                const id = element.dataset.id
    
                if (id) {
                    const response = await fetch(\"/api/address/\" + id, {
                        method: \"DELETE\"
                    })
    
                    const result = await response.json()
    
                    console.log(result);
    
                    if (result.isSuccess) {
                        const addresses = result.data
                        displayAddress(addresses)
                    }
                }
            })
        });

        addform.addEventListener(\"submit\", async (event) => {
            event.preventDefault()
            const form = document.querySelector(\"#add_form form\")
            const formData = new FormData(form)

        
            if(isUpdating){
                // update data
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);

                const response = await fetch(\"/api/address/\"+currentAddress.id, {
                    method: \"PUT\",
                    body: json
                })
    
                const result = await response.json()
    
                if (result.isSuccess) {
                    const addresses = result.data
                    displayAddress(addresses)
                }
            }else{
                //create data
    
                const response = await fetch(\"/api/address\", {
                    method: \"POST\",
                    body: formData
                })
    
                const result = await response.json()
    
                if (result.isSuccess) {
                    const addresses = result.data
    
                    displayAddress(addresses)
    
                }
            }


        })

        editAddress.forEach(item =>item.addEventListener(\"click\", updateAddress))
    }

    const updateAddress = (event)=>{
        event.preventDefault()
        isUpdating = true
        currentAddress = Object.assign({},event.target.dataset)
        addAddressButton.click()

        document.getElementsByName(\"name\")[0].value = currentAddress.name
        document.getElementsByName(\"client_name\")[0].value = currentAddress.client_name
        document.getElementsByName(\"address_type\")[0].value = currentAddress.address_type
        document.getElementsByName(\"street\")[0].value = currentAddress.street
        document.getElementsByName(\"city\")[0].value = currentAddress.city
        document.getElementsByName(\"code_postal\")[0].value = currentAddress.code_postal
        document.getElementsByName(\"state\")[0].value = currentAddress.state
        form.querySelector(\"button\").innerHTML = \"Modifier\"

        console.log(currentAddress);
    }
    
    addAddressButton.addEventListener(\"click\", (event) => {
        event.preventDefault()
        if (addform.classList.contains(\"d-none\")) {
            addform.classList.remove(\"d-none\")
            addressDetails.classList.add(\"d-none\")
            addAddressButton.innerHTML = \"Annuler\"
            form.querySelector(\"button\").innerHTML = \"Ajouter\"
            form.reset()
        } else {
            addAddressButton.innerHTML = \"Ajouter\"
            addform.classList.add(\"d-none\")
            addressDetails.classList.remove(\"d-none\")

        }
    })

    
    addEvent()
    initState()


</script>
</div>



{% endblock %}



", "account/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\account\\index.html.twig");
    }
}
