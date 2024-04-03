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

/* security/login.html.twig */
class __TwigTemplate_39d0c6ba2f8bdcaaa75433d98b2de1f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"login_wrap\" style=\"border-radius:25px !important;\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>Se connecter</h3>
                            </div>
                            <form method=\"post\" class=\"ng-untouched ng-pristine ng-invalid\">

                                ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 21
        echo "
                                ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                    <div class=\"mb-3\">
                                        You are logged in as ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "userIdentifier", [], "any", false, false, false, 24), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                ";
        }
        // line 27
        echo "
                                <div class=\"form-group mb-3\"><input type=\"text\" required=\"\" name=\"email\"
                                        formcontrolname=\"email\" placeholder=\"Your Email\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" required autofocus>
                                </div>
                                <div class=\"form-group mb-3\"><input required=\"\" type=\"password\"
                                        formcontrolname=\"password\" name=\"password\" placeholder=\"Password\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"current-password\" required>
                                </div>
                                
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"form-group mb-3\"><button type=\"submit\" name=\"login\"
                                        class=\"btn btn-fill-out btn-block\">Connexion</button></div>
                            </form>
                            <div class=\"different_login\"><span>
                                    or</span></div>
                            
                            <div class=\"form-note text-center\">Vous n'avez pas de compte ? <a href=\"/register\">inscrivez-vous</a></div>
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
        return "security/login.html.twig";
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
        return array (  141 => 37,  131 => 30,  126 => 27,  118 => 24,  115 => 23,  113 => 22,  110 => 21,  104 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div class=\"main_content\">
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"login_wrap\" style=\"border-radius:25px !important;\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>Se connecter</h3>
                            </div>
                            <form method=\"post\" class=\"ng-untouched ng-pristine ng-invalid\">

                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                {% if app.user %}
                                    <div class=\"mb-3\">
                                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                    </div>
                                {% endif %}

                                <div class=\"form-group mb-3\"><input type=\"text\" required=\"\" name=\"email\"
                                        formcontrolname=\"email\" placeholder=\"Your Email\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"email\" value=\"{{ last_username }}\" required autofocus>
                                </div>
                                <div class=\"form-group mb-3\"><input required=\"\" type=\"password\"
                                        formcontrolname=\"password\" name=\"password\" placeholder=\"Password\"
                                        class=\"form-control ng-untouched ng-pristine ng-invalid\" autocomplete=\"current-password\" required>
                                </div>
                                
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"form-group mb-3\"><button type=\"submit\" name=\"login\"
                                        class=\"btn btn-fill-out btn-block\">Connexion</button></div>
                            </form>
                            <div class=\"different_login\"><span>
                                    or</span></div>
                            
                            <div class=\"form-note text-center\">Vous n'avez pas de compte ? <a href=\"/register\">inscrivez-vous</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\osman\\pcplus\\templates\\security\\login.html.twig");
    }
}
