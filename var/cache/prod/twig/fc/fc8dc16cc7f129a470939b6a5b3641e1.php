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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_2bffc2ba7787c2abbe4974b597397f98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<nav id=\"main-menu\">
    ";
        // line 3
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 4
        echo "
    <ul class=\"menu\">
        ";
        // line 6
        $this->displayBlock('main_menu', $context, $blocks);
        // line 33
        echo "    </ul>

    ";
        // line 35
        $this->displayBlock('main_menu_after', $context, $blocks);
        // line 36
        echo "</nav>

";
        // line 43
        echo "
";
    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            echo "                ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 31
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        ";
    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    ";
        $context["is_submenu_item_with_no_items"] = ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "type", [], "any", false, false, false, 9) == twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto::TYPE_SUBMENU")) &&  !twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 9));
        // line 10
        echo "                    ";
        if (($context["is_submenu_item_with_no_items"] ?? null)) {
            // line 11
            echo "                        ";
            // line 13
            echo "                    ";
        } else {
            // line 14
            echo "                        <li class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 14)) ? ("menu-header") : ("menu-item"));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 14)) ? ("has-submenu") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isSelected", [], "any", false, false, false, 14)) ? ("active") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isExpanded", [], "any", false, false, false, 14)) ? ("expanded") : (""));
            echo "\">
                            ";
            // line 15
            echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 15, $context, $this->getSourceContext());
            echo "

                            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 17)) {
                // line 18
                echo "                                <ul class=\"submenu\">
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 19));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                    // line 20
                    echo "                                        ";
                    $this->displayBlock('menu_subitem', $context, $blocks);
                    // line 25
                    echo "                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                </ul>
                            ";
            }
            // line 28
            echo "                        </li>
                    ";
        }
        // line 30
        echo "                ";
    }

    // line 20
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                            <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 21)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isSelected", [], "any", false, false, false, 21)) ? ("active") : (""));
        echo "\">
                                                ";
        // line 22
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 22, $context, $this->getSourceContext());
        echo "
                                            </li>
                                        ";
    }

    // line 35
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 38
    public function macro_render_html_attributes($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 39
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "htmlAttributes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 40
                echo "        ";
                echo twig_escape_filter($this->env, $context["attribute_name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute_value"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 45
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 45)) {
                // line 46
                echo "        <span class=\"menu-header-contents\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [($context["item"] ?? null)], 46, $context, $this->getSourceContext());
                echo ">
            ";
                // line 47
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 47), "html", null, true);
                    echo "\"></i>";
                }
                // line 48
                echo "            <span class=\"menu-item-label position-relative ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                ";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 49));
                echo "
            </span>
            ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "htmlStyle", [], "any", false, false, false, 52), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 52), "content", [], "any", false, false, false, 52), "html", null, true);
                    echo "</span>
            ";
                }
                // line 54
                echo "        </span>
    ";
            } else {
                // line 56
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 56), "html", null, true);
                echo "\" class=\"menu-item-contents ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 56)) ? ("submenu-toggle") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 56), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 56), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 56), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [($context["item"] ?? null)], 56, $context, $this->getSourceContext());
                echo ">
            ";
                // line 57
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57), "html", null, true);
                    echo "\"></i>";
                }
                // line 58
                echo "            <span class=\"menu-item-label position-relative\">
                ";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 59));
                echo "
            </span>
            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 61)) {
                    echo "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 62
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "cssClass", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "htmlStyle", [], "any", false, false, false, 63), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 63), "content", [], "any", false, false, false, 63), "html", null, true);
                    echo "</span>
            ";
                }
                // line 65
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  363 => 65,  351 => 63,  348 => 62,  344 => 61,  339 => 59,  336 => 58,  330 => 57,  315 => 56,  311 => 54,  299 => 52,  297 => 51,  292 => 49,  287 => 48,  281 => 47,  276 => 46,  273 => 45,  260 => 44,  242 => 40,  237 => 39,  224 => 38,  218 => 35,  211 => 22,  204 => 21,  200 => 20,  196 => 30,  192 => 28,  188 => 26,  174 => 25,  171 => 20,  154 => 19,  151 => 18,  149 => 17,  144 => 15,  133 => 14,  130 => 13,  128 => 11,  125 => 10,  122 => 9,  118 => 8,  114 => 32,  100 => 31,  97 => 8,  79 => 7,  75 => 6,  69 => 3,  64 => 43,  60 => 36,  58 => 35,  54 => 33,  52 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "C:\\Users\\osman\\pcplus\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\menu.html.twig");
    }
}
