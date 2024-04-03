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
class __TwigTemplate_38a05b7e37e11a64771702854a1a9450 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        // line 1
        echo "<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >PCplus</h2>
                            </a></div>
                        <p > Retrouvez les accessoires pour ordinateur... </p>
                    </div>
                    <div  class=\"widget\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"https://facebook.com\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target=\"_blank\"
                                    href=\"https://www.youtube.com/channel/UCkqALrIVPEyGnnbmiFl3lQA/?sub_confirmation=1\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"https://www.instagram.com/mudey_formation/\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Useful Links</h6>
                        <ul  class=\"widget_links\">
                            <li ><a 
                                    ng-reflect-router-link=\"/page,a-propos-de-nous-shop\"
                                    href=\"/page/a-propos-de-nous-shop\">A Propos de nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,nos-services-jstore\"
                                    href=\"/page/nos-services-jstore\">Nos services</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,contactez-nous-category\"
                                    href=\"/page/contactez-nous-category\">Contactez-Nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,nos-partenaires-mudey\"
                                    href=\"/page/nos-partenaires-mudey\">Nos partenaires</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,mentions-lgales-espero\"
                                    href=\"/page/mentions-lgales-espero\">Mentions légales</a></li>
                        </ul>
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
                            <li ><a  routerlink=\"account\"
                                    ng-reflect-router-link=\"account\" href=\"/account\">My Account</a></li>
                            <li ><a  routerlink=\"terms\"
                                    ng-reflect-router-link=\"terms\" href=\"/terms\">Terms</a></li>
                            <li ><a  routerlink=\"signin\"
                                    ng-reflect-router-link=\"signin\" href=\"/signin\">SignIn</a></li>
                            <li ><a  routerlink=\"signup\"
                                    ng-reflect-router-link=\"signup\" href=\"/signup\">Signup</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Contact Info</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p >78200, Paris</p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"mailto:osmantoy035@gmail.com\">osmantoy035@gmail.com</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >+33 7 83 52 97 89</p>
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
                        Reserved by PCplus</p>
                </div>
                <div  class=\"col-md-6\">
                    <ul 
                        class=\"footer_payment text-center text-lg-end d-flex gap-2 justify-content-end\">
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/discover.png\" alt=\"discover\"></a>
                        </li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/master_card.png\"
                                    alt=\"master_card\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/amarican_express.png\"
                                    alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer  class=\"footer_dark\">
    <div  class=\"footer_top\">
        <div  class=\"container\">
            <div  class=\"row\">
                <div  class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div  class=\"widget\">
                        <div  class=\"footer_logo\"><a  href=\"#\">
                                <h2 >PCplus</h2>
                            </a></div>
                        <p > Retrouvez les accessoires pour ordinateur... </p>
                    </div>
                    <div  class=\"widget\">
                        <ul  class=\"social_icons social_white\">
                            <li ><a  target=\"_blank\"
                                    href=\"https://facebook.com\"><i 
                                        class=\"ion-social-facebook\"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target=\"_blank\"
                                    href=\"https://www.youtube.com/channel/UCkqALrIVPEyGnnbmiFl3lQA/?sub_confirmation=1\"><i
                                         class=\"ion-social-youtube-outline\"></i></a>
                            </li>
                            <li ><a  target=\"_blank\"
                                    href=\"https://www.instagram.com/mudey_formation/\"><i 
                                        class=\"ion-social-instagram-outline\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Useful Links</h6>
                        <ul  class=\"widget_links\">
                            <li ><a 
                                    ng-reflect-router-link=\"/page,a-propos-de-nous-shop\"
                                    href=\"/page/a-propos-de-nous-shop\">A Propos de nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,nos-services-jstore\"
                                    href=\"/page/nos-services-jstore\">Nos services</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,contactez-nous-category\"
                                    href=\"/page/contactez-nous-category\">Contactez-Nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,nos-partenaires-mudey\"
                                    href=\"/page/nos-partenaires-mudey\">Nos partenaires</a></li>
                            <li ><a 
                                    ng-reflect-router-link=\"/page,mentions-lgales-espero\"
                                    href=\"/page/mentions-lgales-espero\">Mentions légales</a></li>
                        </ul>
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
                            <li ><a  routerlink=\"account\"
                                    ng-reflect-router-link=\"account\" href=\"/account\">My Account</a></li>
                            <li ><a  routerlink=\"terms\"
                                    ng-reflect-router-link=\"terms\" href=\"/terms\">Terms</a></li>
                            <li ><a  routerlink=\"signin\"
                                    ng-reflect-router-link=\"signin\" href=\"/signin\">SignIn</a></li>
                            <li ><a  routerlink=\"signup\"
                                    ng-reflect-router-link=\"signup\" href=\"/signup\">Signup</a></li>
                        </ul>
                    </div>
                </div>
                <div  class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div  class=\"widget\">
                        <h6  class=\"widget_title\">Contact Info</h6>
                        <ul  class=\"contact_info contact_info_light\">
                            <li ><i 
                                    class=\"ti-location-pin\"></i>
                                <p >78200, Paris</p>
                            </li>
                            <li ><i  class=\"ti-email\"></i><a
                                     href=\"mailto:osmantoy035@gmail.com\">osmantoy035@gmail.com</a>
                            </li>
                            <li ><i  class=\"ti-mobile\"></i>
                                <p >+33 7 83 52 97 89</p>
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
                        Reserved by PCplus</p>
                </div>
                <div  class=\"col-md-6\">
                    <ul 
                        class=\"footer_payment text-center text-lg-end d-flex gap-2 justify-content-end\">
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/discover.png\" alt=\"discover\"></a>
                        </li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/master_card.png\"
                                    alt=\"master_card\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li ><a  href=\"#\"><img
                                     src=\"assets/images/amarican_express.png\"
                                    alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>", "footer/index.html.twig", "C:\\Users\\osman\\pcplus\\templates\\footer\\index.html.twig");
    }
}
