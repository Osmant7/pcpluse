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

/* footer/index.html.twig */
class __TwigTemplate_76d84b69a6fdd8d92071041bf078e12b extends Template
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
        // line 1
        echo "<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2>
                                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "get", ["settings"], "method", false, false, false, 9), "websiteName", [], "any", false, false, false, 9), "html", null, true);
        echo "
                                </h2>
                            </a></div>
                        <p > ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 12), "get", ["settings"], "method", false, false, false, 12), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                    </div>
                    <div  class=\"widget\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 17), "get", ["settings"], "method", false, false, false, 17), "facebook", [], "any", false, false, false, 17), "html", null, true);
        echo "\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 23), "get", ["settings"], "method", false, false, false, 23), "youtube", [], "any", false, false, false, 23), "html", null, true);
        echo "\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 27), "get", ["settings"], "method", false, false, false, 27), "instagram", [], "any", false, false, false, 27), "html", null, true);
        echo "\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Useful Links</h6>
                        <ul  class=\"widget_links\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 37), "get", ["pagesFooter"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                            <li ><a href=\"/page/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                                    
                            </li>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Category</h6>
                        <ul  class=\"widget_links\">
                            <li ><a  href=\"#\">Souris</a></li>
                            <li ><a  href=\"#\">Claviers</a></li>
                            <li ><a  href=\"#\">Casques</a></li>
                            <li ><a  href=\"#\">Tapis de souris</a></li>
                            <li ><a  href=\"#\">Best Saller</a>
                            </li>
                            <li ><a  href=\"#\">New Arrivals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">My Account</h6>
                        <ul  class=\"widget_links\">
                            <li ><a href=\"/account\">My Account</a></li>
                            <li ><a href=\"/login\">Se connecter</a></li>
                            <li ><a href=\"/register\">S'inscrire</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Contact Info</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p >
                                    ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 77), "get", ["settings"], "method", false, false, false, 77), "street", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                    ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 78), "get", ["settings"], "method", false, false, false, 78), "city", [], "any", false, false, false, 78), "html", null, true);
        echo "
                                </p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"mailto:";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "get", ["settings"], "method", false, false, false, 82), "email", [], "any", false, false, false, 82), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "get", ["settings"], "method", false, false, false, 82), "email", [], "any", false, false, false, 82), "html", null, true);
        echo "</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "get", ["settings"], "method", false, false, false, 85), "phone", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class=\"bottom_footer border-top-tran\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-md-6\">
                    <p  class=\"mb-md-0 text-center text-md-start\"> © 2024 All Rights
                        Reserved by PCpluse</p>
                </div>
                <div  class=\"col-md-6\">
                    <ul 
                        class=\"footer_payment text-center text-lg-end d-flex gap-2 justify-content-end\">
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/discover.png\" alt=\"discover\"></a>
                        </li>
                        <li ><a  href=\"#\"><img
                                     src=\"/assets/images/master_card.png\"
                                    alt=\"master_card\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer/index.html.twig";
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
        return array (  163 => 85,  155 => 82,  148 => 78,  144 => 77,  107 => 42,  94 => 38,  90 => 37,  77 => 27,  70 => 23,  61 => 17,  53 => 12,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\footer\\index.html.twig");
    }
}
