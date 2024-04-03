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

/* @EasyAdmin/includes/_importmap.html.twig */
class __TwigTemplate_58b54a342cb2a28d22a2de25529ccc36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderImportmap(twig_array_map($this->env, ($context["assets"] ?? null), function ($__asset__) use ($context, $macros) { $context["asset"] = $__asset__; return twig_get_attribute($this->env, $this->source, ($context["asset"] ?? null), "value", [], "any", false, false, false, 2); }));
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_importmap.html.twig";
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
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/includes/_importmap.html.twig", "C:\\Users\\osman\\pcplus\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\includes\\_importmap.html.twig");
    }
}
