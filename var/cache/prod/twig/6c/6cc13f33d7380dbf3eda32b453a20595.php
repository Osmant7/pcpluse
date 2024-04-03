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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_283e7a64f54dbe5a1b48c3b69080a698 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_1954372d8c48e2bd429132cdc1599df1202ee870556099b34620565a5315e177"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo twig_striptags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 44), "textDirection", [], "any", false, false, false, 44))) {
            // line 45
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 45), "defaultAssetPackageName", [], "any", false, false, false, 45)), "html", null, true);
            echo "\">
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 53
        echo "</head>

";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 387
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        echo "\"></script>

        ";
        // line 34
        $this->displayBlock('importmap', $context, $blocks);
        // line 37
        echo "    ";
    }

    // line 34
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)) : ([]))], false);
        echo "
        ";
    }

    // line 39
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", false, false, false, 40)) : ([]))], false);
        echo "
        ";
        // line 41
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)) : ([]))], false);
        echo "
    ";
    }

    // line 48
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", true, true, false, 49) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 49), "headContents", [], "any", false, false, false, 49)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 50
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    <body ";
        $this->displayBlock('body_attr', $context, $blocks);
        // line 57
        echo "        id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\"
        class=\"ea ";
        // line 58
        $this->displayBlock('body_class', $context, $blocks);
        echo "\"
        data-ea-content-width=\"";
        // line 59
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 59), "contentWidth", [], "any", false, false, false, 59)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 59)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-sidebar-width=\"";
        // line 60
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", true, true, false, 60) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 60), "sidebarWidth", [], "any", false, false, false, 60)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 60) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 60)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 61
        echo ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 61)) ? ("true") : ("false"));
        echo "\"
    >
    ";
        // line 63
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 66
        echo "    ";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 377
        echo "
    ";
        // line 378
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 379
        echo "
    ";
        // line 380
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 385
        echo "    </body>
";
    }

    // line 56
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 64), "defaultAssetPackageName", [], "any", false, false, false, 64)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 66
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 67), "defaultAssetPackageName", [], "any", false, false, false, 67)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 70
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        ob_start(function () { return ''; });
        // line 76
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 76), "avatarUrl", [], "any", false, false, false, 76))) {
            // line 77
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 80
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 80))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 84
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 84), "avatarUrl", [], "any", false, false, false, 84), "html", null, true);
            echo "\" />
            ";
        }
        // line 86
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
        ";
        // line 88
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 89
        echo "
        ";
        // line 90
        ob_start(function () { return ''; });
        // line 91
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 93
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 96
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 96))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96))), "html", null, true);
        echo "</span>
                    </div>
                </li>

                ";
        // line 100
        $this->displayBlock('user_menu', $context, $blocks);
        // line 119
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "
        ";
        // line 122
        ob_start(function () { return ''; });
        // line 123
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 123) || twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 123))) {
            // line 124
            echo "                <div class=\"dropdown dropdown-settings\">
                    <a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                        <i class=\"fas fa-gear\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end\">
                        ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 130)) {
                // line 131
                echo "                            <li class=\"dropdown-header dropdown-locales-label\">
                                ";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </li>

                            ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 135));
                foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                    // line 136
                    echo "                                <li>
                                    <a href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137)], "method", false, false, false, 137), "html", null, true);
                    echo "\" class=\"dropdown-item";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 137), "locale", [], "any", false, false, false, 137) == twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137))) {
                        echo " active";
                    }
                    echo "\">
                                        ";
                    // line 138
                    if (twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                                            <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 139), "html", null, true);
                        echo "\"></i>
                                        ";
                    }
                    // line 141
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 141), "html", null, true);
                    echo "
                                    </a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                        ";
            }
            // line 146
            echo "
                        ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 147)) {
                // line 148
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                                <div class=\"dropdown-divider\"></div>
                            ";
                }
                // line 151
                echo "
                            <li class=\"dropdown-header dropdown-appearance-label\">
                                ";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
                                    <i class=\"far fa-sun fa-fw\"></i>
                                    ";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
                                    <i class=\"far fa-moon fa-fw\"></i>
                                    ";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
                                    <i class=\"fas fa-desktop fa-fw\"></i>
                                    ";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 174
            echo "                    </ul>
                </div>
            ";
        }
        // line 177
        echo "        ";
        $context["settings_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        echo "
        <div class=\"wrapper\">
            ";
        // line 180
        $this->displayBlock('wrapper', $context, $blocks);
        // line 375
        echo "        </div>
    ";
    }

    // line 71
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["flash_messages"], "method", false, false, false, 72));
        echo "
        ";
    }

    // line 100
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 101), "items", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            echo "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 103), "items", [], "any", false, false, false, 103));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                echo "                            <li>
                                ";
                // line 105
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 105) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 107
$context["item"], "isMenuSection", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 108), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 108), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 109), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 109), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 111
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 111), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 112
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 112), [],                     // line 2
($context["__internal_1954372d8c48e2bd429132cdc1599df1202ee870556099b34620565a5315e177"] ?? null)), "html", null, true);
                    // line 112
                    echo "
                                    </a>
                                ";
                }
                // line 115
                echo "                            </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                    ";
        }
        // line 118
        echo "                ";
    }

    // line 180
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                <div class=\"responsive-header\">
                    ";
        // line 182
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 211
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 215
        $this->displayBlock('sidebar', $context, $blocks);
        // line 237
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 243
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 243)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 243), "isSearchEnabled", [], "any", false, false, false, 243));
        // line 244
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 245
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 326
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 329
        $this->displayBlock('content', $context, $blocks);
        // line 370
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 182
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 188
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 193
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 195
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo " ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 199
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 199), "avatarDisplayed", [], "any", false, false, false, 199)) {
            // line 200
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 202
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 202))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 204
        echo "                            </a>

                            ";
        // line 206
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>

                        ";
        // line 209
        echo twig_escape_filter($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        echo "
                    ";
    }

    // line 188
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 189)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 189));
        echo "\">
                                    ";
        // line 190
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 190);
        echo "
                                </a>
                            ";
    }

    // line 215
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                            <header class=\"main-header\">
                                ";
        // line 217
        $this->displayBlock('header', $context, $blocks);
        // line 231
        echo "                            </header>

                            ";
        // line 233
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 236
        echo "                        ";
    }

    // line 217
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 219
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 229
        echo "                                </nav>
                                ";
    }

    // line 219
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 221
        $this->displayBlock('header_logo', $context, $blocks);
        // line 227
        echo "                                        </div>
                                    ";
    }

    // line 221
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 222)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 222));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 223
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 223);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 233
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["main_menu"], "method", false, false, false, 234));
        echo "
                            ";
    }

    // line 245
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        echo "                            ";
        $this->displayBlock('search_wrapper', $context, $blocks);
        // line 304
        echo "
                            ";
        // line 305
        $this->displayBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 321
        echo "
                            ";
        // line 322
        $this->displayBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 325
        echo "                        ";
    }

    // line 246
    public function block_search_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "                            <div class=\"content-search\">
                                ";
        // line 248
        if (($context["has_search"] ?? null)) {
            // line 249
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 301
            echo "                                ";
        }
        // line 302
        echo "                            </div>
                            ";
    }

    // line 249
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 252
        $this->displayBlock('search_form', $context, $blocks);
        // line 299
        echo "                                        </form>
                                    ";
    }

    // line 252
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        echo "                                                ";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 278
        echo "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["crudControllerFqcn"], "method", false, false, false, 280), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 287), "get", ["query"], "method", false, false, false, 287), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 288
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 288), "get", ["query"], "method", false, false, false, 288))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", true, true, false, 288) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 288), "get", ["query"], "method", false, false, false, 288), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 288), "translationParameters", [], "any", false, false, false, 288), "EasyAdminBundle"), [],         // line 2
($context["__internal_1954372d8c48e2bd429132cdc1599df1202ee870556099b34620565a5315e177"] ?? null)), "html", null, true);
        // line 288
        echo "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 288), "currentAction", [], "any", false, false, false, 288) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 288), "autofocusSearch", [], "any", false, false, false, 288) == true))) {
            echo " autofocus=\"autofocus\"";
        }
        echo ">
                                                        </label>

                                                        ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 291), "get", ["query"], "method", false, false, false, 291)) {
            // line 292
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 292), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 296
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 253
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 254), "appliedFilters", [], "any", false, false, false, 254));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 255
            echo "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 256
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 257
                    echo "                                                                ";
                    // line 258
                    echo "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 259
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 260
                            echo "                                                                        ";
                            // line 261
                            echo "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 262
                                echo "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 263
                                    echo "                                                                                <input type=\"hidden\" name=\"filters[";
                                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                    echo "]\" value=\"";
                                    echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                    echo "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 265
                                echo "                                                                        ";
                            } else {
                                // line 266
                                echo "                                                                            <input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                                echo "\">
                                                                        ";
                            }
                            // line 268
                            echo "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 269
                        echo "                                                                ";
                    } else {
                        // line 270
                        echo "                                                                    <input type=\"hidden\" name=\"filters[";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\">
                                                                ";
                    }
                    // line 272
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                                                        ";
            } else {
                // line 274
                echo "                                                            <input type=\"hidden\" name=\"filters[";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["fieldValue"], "html", null, true);
                echo "\">
                                                        ";
            }
            // line 276
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                                                ";
    }

    // line 305
    public function block_header_custom_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        echo "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 307
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 319
        echo "                            </div>
                            ";
    }

    // line 307
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 308
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 310
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 311), "isNameDisplayed", [], "any", false, false, false, 311)) {
            // line 312
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 312), "name", [], "any", false, false, false, 312), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 314
        echo "                                        </a>

                                        ";
        // line 316
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 322
    public function block_settings_dropdown_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 323
        echo "                                ";
        echo twig_escape_filter($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        echo "
                            ";
    }

    // line 329
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "                            <article class=\"content\">
                                ";
        // line 331
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 355
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 357
        $this->displayBlock('main', $context, $blocks);
        // line 358
        echo "                                </section>

                                ";
        // line 360
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 368
        echo "                            </article>
                        ";
    }

    // line 331
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", true, true, false, 332) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 332), "helpMessage", [], "any", false, false, false, 332)) : ("")));
        // line 333
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 334
        $this->displayBlock('content_header', $context, $blocks);
        // line 353
        echo "                                    </section>
                                ";
    }

    // line 334
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 337
        $this->displayBlock('content_title', $context, $blocks);
        // line 338
        echo "
                                                    ";
        // line 339
        $this->displayBlock('content_help', $context, $blocks);
        // line 346
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 349
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 352
        echo "                                        ";
    }

    // line 337
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 339
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 340
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 341
            echo "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 341), "helpMessage", [], "any", false, false, false, 341), [],             // line 2
($context["__internal_1954372d8c48e2bd429132cdc1599df1202ee870556099b34620565a5315e177"] ?? null)), "html_attr");
            // line 341
            echo "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 345
        echo "                                                    ";
    }

    // line 349
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 350
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 357
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 360
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 362
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 363
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 364
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 367
        echo "                                ";
    }

    // line 378
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 380
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 381
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", true, true, false, 381) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 381), "bodyContents", [], "any", false, false, false, 381)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 382
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1325 => 384,  1316 => 382,  1311 => 381,  1307 => 380,  1301 => 378,  1297 => 367,  1291 => 364,  1288 => 363,  1285 => 362,  1282 => 361,  1278 => 360,  1272 => 357,  1260 => 350,  1256 => 349,  1252 => 345,  1246 => 341,  1244 => 2,  1242 => 341,  1239 => 340,  1235 => 339,  1229 => 337,  1225 => 352,  1223 => 349,  1218 => 346,  1216 => 339,  1213 => 338,  1211 => 337,  1207 => 335,  1203 => 334,  1198 => 353,  1196 => 334,  1193 => 333,  1190 => 332,  1186 => 331,  1181 => 368,  1179 => 360,  1175 => 358,  1173 => 357,  1169 => 355,  1167 => 331,  1164 => 330,  1160 => 329,  1153 => 323,  1149 => 322,  1142 => 316,  1138 => 314,  1132 => 312,  1130 => 311,  1126 => 310,  1120 => 308,  1116 => 307,  1111 => 319,  1109 => 307,  1106 => 306,  1102 => 305,  1098 => 277,  1092 => 276,  1084 => 274,  1081 => 273,  1075 => 272,  1065 => 270,  1062 => 269,  1056 => 268,  1044 => 266,  1041 => 265,  1024 => 263,  1019 => 262,  1016 => 261,  1014 => 260,  1009 => 259,  1006 => 258,  1004 => 257,  999 => 256,  996 => 255,  991 => 254,  987 => 253,  981 => 296,  973 => 292,  971 => 291,  962 => 288,  960 => 2,  955 => 288,  951 => 287,  941 => 280,  937 => 278,  934 => 253,  930 => 252,  925 => 299,  923 => 252,  919 => 250,  915 => 249,  910 => 302,  907 => 301,  904 => 249,  902 => 248,  899 => 247,  895 => 246,  891 => 325,  889 => 322,  886 => 321,  884 => 305,  881 => 304,  878 => 246,  874 => 245,  867 => 234,  863 => 233,  855 => 223,  848 => 222,  844 => 221,  839 => 227,  837 => 221,  834 => 220,  830 => 219,  825 => 229,  823 => 219,  820 => 218,  816 => 217,  812 => 236,  810 => 233,  806 => 231,  804 => 217,  801 => 216,  797 => 215,  790 => 190,  783 => 189,  779 => 188,  773 => 209,  767 => 206,  763 => 204,  757 => 202,  751 => 200,  748 => 199,  743 => 195,  739 => 193,  737 => 188,  730 => 183,  726 => 182,  718 => 370,  716 => 329,  711 => 326,  709 => 245,  704 => 244,  702 => 243,  694 => 237,  692 => 215,  686 => 211,  684 => 182,  681 => 181,  677 => 180,  673 => 118,  670 => 117,  655 => 115,  650 => 112,  648 => 2,  646 => 112,  640 => 111,  633 => 109,  626 => 108,  624 => 107,  621 => 106,  619 => 105,  616 => 104,  599 => 103,  596 => 102,  593 => 101,  589 => 100,  582 => 72,  578 => 71,  573 => 375,  571 => 180,  567 => 178,  564 => 177,  559 => 174,  552 => 170,  543 => 164,  534 => 158,  526 => 153,  522 => 151,  518 => 149,  515 => 148,  513 => 147,  510 => 146,  507 => 145,  496 => 141,  490 => 139,  488 => 138,  480 => 137,  477 => 136,  473 => 135,  467 => 132,  464 => 131,  462 => 130,  454 => 124,  451 => 123,  449 => 122,  446 => 121,  442 => 119,  440 => 100,  433 => 96,  429 => 95,  424 => 93,  420 => 91,  418 => 90,  415 => 89,  413 => 88,  410 => 87,  407 => 86,  401 => 84,  394 => 80,  389 => 77,  386 => 76,  384 => 75,  381 => 74,  378 => 71,  374 => 70,  367 => 67,  363 => 66,  356 => 64,  352 => 63,  346 => 58,  340 => 57,  334 => 56,  329 => 385,  327 => 380,  324 => 379,  322 => 378,  319 => 377,  317 => 70,  314 => 69,  311 => 66,  309 => 63,  304 => 61,  300 => 60,  296 => 59,  292 => 58,  287 => 57,  284 => 56,  280 => 55,  276 => 52,  267 => 50,  262 => 49,  258 => 48,  252 => 41,  247 => 40,  243 => 39,  236 => 35,  232 => 34,  228 => 37,  226 => 34,  220 => 32,  216 => 31,  209 => 28,  205 => 27,  199 => 24,  194 => 23,  190 => 22,  183 => 19,  179 => 18,  172 => 15,  163 => 8,  159 => 7,  154 => 387,  152 => 55,  148 => 53,  146 => 48,  143 => 47,  137 => 45,  135 => 44,  132 => 43,  130 => 39,  127 => 38,  125 => 31,  122 => 30,  120 => 27,  117 => 26,  115 => 22,  112 => 21,  110 => 18,  104 => 16,  100 => 15,  97 => 14,  95 => 7,  88 => 5,  84 => 3,  82 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\Users\\osman\\pcplus\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
