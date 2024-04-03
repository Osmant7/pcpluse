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
class __TwigTemplate_f1b37ce422982dc1e8afc0364dbdc574 extends Template
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

        echo "Hello AccountController!";
        
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
        echo "<!-- START MAIN CONTENT -->
<div class=\"main_content\">

<!-- START SECTION SHOP -->
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
                  \t<div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
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
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                    \t<div class=\"row\">
                        \t<div class=\"col-lg-6\">
                                <div class=\"card mb-3 mb-lg-0\">
                                    <div class=\"card-header\">
                                        <h3>Billing Address</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href=\"#\" class=\"btn btn-fill-out\">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
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
                            </div>
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
<!-- END SECTION SHOP -->



</div>
<!-- END MAIN CONTENT -->
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccountController!{% endblock %}

{% block body %}
<!-- START MAIN CONTENT -->
<div class=\"main_content\">

<!-- START SECTION SHOP -->
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
                  \t<div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
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
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
                    \t<div class=\"row\">
                        \t<div class=\"col-lg-6\">
                                <div class=\"card mb-3 mb-lg-0\">
                                    <div class=\"card-header\">
                                        <h3>Billing Address</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href=\"#\" class=\"btn btn-fill-out\">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
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
                            </div>
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
<!-- END SECTION SHOP -->



</div>
<!-- END MAIN CONTENT -->
{% endblock %}
", "account/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\account\\index.html.twig");
    }
}
