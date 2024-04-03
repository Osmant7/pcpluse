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

/* payment/index.html.twig */
class __TwigTemplate_2cb2387b4b66173a2485014e8baf9c99 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "payment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PCpluse | Paiement validé";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"text-center order_complete\">
                \t<i class=\"fas fa-check-circle\"></i>
                    <div class=\"heading_s1\">
                  \t<h3>Votre commande est passé avec succès !</h3>
                    </div>
                  \t<p>Merci pour la confiance que vous nous avez accordé. À bientot ! </p>
                    <a href=\"/\" class=\"btn btn-fill-out\">Accueil</a>
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
        return "payment/index.html.twig";
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
        return array (  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payment/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\payment\\index.html.twig");
    }
}
