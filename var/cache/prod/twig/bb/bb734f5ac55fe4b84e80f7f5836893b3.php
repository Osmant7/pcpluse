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

/* default.html.twig */
class __TwigTemplate_92d99f5f08c94082e2bf39f42fb49f49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"/assets/css/animate.css\">
        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/all.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/ionicons.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/themify-icons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/linearicons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/flaticon.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/simple-line-icons.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.carousel.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.theme.css\" />
        <link rel=\"stylesheet\" href=\"/assets/owlcarousel/css/owl.theme.default.min.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/magnific-popup.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/slick.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/slick-theme.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />
        <link rel=\"stylesheet\" href=\"/assets/css/responsive.css\" />
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </head>
    <body>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        <div class=\"notification\">
        
        </div>

        <script src=\"/assets/js/jquery-3.6.0.min.js\"></script>
        <script src=\"/assets/js/popper.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/assets/owlcarousel/js/owl.carousel.min.js\"></script>
        <script src=\"/assets/js/magnific-popup.min.js\"></script>
        <script src=\"/assets/js/waypoints.min.js\"></script>
        <script src=\"/assets/js/parallax.js\"></script>
        <script src=\"/assets/js/jquery.countdown.min.js\"></script>
        <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
        <script src=\"/assets/js/isotope.min.js\"></script>
        <script src=\"/assets/js/jquery.dd.min.js\"></script>
        <script src=\"/assets/js/slick.min.js\"></script>
        <script src=\"/assets/js/jquery.elevatezoom.js\"></script>
        <script src=\"/assets/js/scripts.js\"></script>
        <script src=\"/assets/js/main.js\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PCplus !";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            
        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            
        ";
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  133 => 33,  128 => 28,  124 => 27,  119 => 24,  115 => 23,  108 => 5,  82 => 34,  80 => 33,  75 => 30,  73 => 27,  70 => 26,  68 => 23,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default.html.twig", "C:\\Users\\osman\\pcplus\\templates\\default.html.twig");
    }
}
