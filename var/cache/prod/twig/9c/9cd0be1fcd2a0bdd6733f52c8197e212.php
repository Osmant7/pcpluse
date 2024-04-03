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
class __TwigTemplate_c45ed514ce0001fbd18451e12a661d3a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["error"] ?? null)) {
            // line 19
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 21
        echo "
                                ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                    <div class=\"mb-3\">
                                        You are logged in as ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "userIdentifier", [], "any", false, false, false, 24), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  111 => 37,  101 => 30,  96 => 27,  88 => 24,  85 => 23,  83 => 22,  80 => 21,  74 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\osman\\pcplus\\templates\\security\\login.html.twig");
    }
}
