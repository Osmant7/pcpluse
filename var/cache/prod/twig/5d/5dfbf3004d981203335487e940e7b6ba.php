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

/* registration/register.html.twig */
class __TwigTemplate_e2d3f5230d68097ca7956a0a02af472a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div  class=\"main_content\">
    <div  class=\"login_register_wrap section\">
        <div  class=\"container\">
            <div  class=\"row justify-content-center\">
                <div  class=\"col-xl-6 col-md-10\">
                    <div  class=\"login_wrap\">
                        <div  class=\"padding_eight_all bg-white\">
                            <div  class=\"heading_s1\">
                                <h3 >Créer un compte</h3>
                            </div>
                           ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "

                           ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
        echo "
                                <div  class=\"form-group mb-3\">

                                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "full_name", [], "any", false, false, false, 21), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 22), 'row');
        echo "
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 23), 'row', ["label" => "Password"]);
        // line 25
        echo "

                                <div  class=\"login_footer form-group mb-3\">
                                    <div  class=\"chek-form\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 29), 'row');
        echo "
                                        
                                    </div>
                                </div>
                                <div  class=\"form-group mb-3\"><button
                                         type=\"submit\" name=\"register\"
                                        class=\"btn btn-fill-out btn-block\">S'inscrire</button></div>
                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "

                            <div  class=\"different_login\"><span >
                                    or</span></div>
                            
                            <div  class=\"form-note text-center\">Vous avez déjà un compte ? <a
                                     href=\"/login\">Connexion</a></div>
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
        return "registration/register.html.twig";
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
        return array (  107 => 36,  97 => 29,  91 => 25,  89 => 23,  85 => 22,  81 => 21,  75 => 18,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\Users\\osman\\pcplus\\templates\\registration\\register.html.twig");
    }
}
