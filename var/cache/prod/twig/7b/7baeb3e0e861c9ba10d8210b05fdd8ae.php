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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_8a8839389967ba8b8752a7c9b9c40985 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_crud_widget_fieldsets' => [$this, 'block_ea_crud_widget_fieldsets'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_form_column_group_open_row' => [$this, 'block_ea_form_column_group_open_row'],
                'ea_form_column_group_close_row' => [$this, 'block_ea_form_column_group_close_row'],
                'ea_form_column_open_row' => [$this, 'block_ea_form_column_open_row'],
                'ea_form_column_close_row' => [$this, 'block_ea_form_column_close_row'],
                'ea_form_fieldset_open_row' => [$this, 'block_ea_form_fieldset_open_row'],
                'ea_form_fieldset_close_row' => [$this, 'block_ea_form_fieldset_close_row'],
                'ea_form_tablist_row' => [$this, 'block_ea_form_tablist_row'],
                'ea_form_tabpane_group_open_row' => [$this, 'block_ea_form_tabpane_group_open_row'],
                'ea_form_tabpane_group_close_row' => [$this, 'block_ea_form_tabpane_group_close_row'],
                'ea_form_tabpane_open_row' => [$this, 'block_ea_form_tabpane_open_row'],
                'ea_form_tabpane_close_row' => [$this, 'block_ea_form_tabpane_close_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
        // line 0
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_errors', $context, $blocks);
        // line 29
        echo "
";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('date_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('time_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('file_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_row', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('collection_row', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('collection_entry_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('button_row', $context, $blocks);
        // line 243
        echo "
";
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('form_label', $context, $blocks);
        // line 290
        echo "
";
        // line 292
        echo "
";
        // line 293
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 298
        echo "
";
        // line 299
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 303
        echo "
";
        // line 304
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 406
        echo "
";
        // line 407
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 410
        echo "
";
        // line 412
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 417
        echo "
";
        // line 419
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 424
        echo "
";
        // line 425
        $this->displayBlock('ea_crud_widget_fieldsets', $context, $blocks);
        // line 490
        echo "
";
        // line 492
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 500
        echo "
";
        // line 502
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 512
        echo "
";
        // line 514
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 525
        echo "
";
        // line 527
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 530
        echo "
";
        // line 531
        $this->displayBlock('ea_form_column_group_open_row', $context, $blocks);
        // line 537
        echo "
";
        // line 538
        $this->displayBlock('ea_form_column_group_close_row', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('ea_form_column_open_row', $context, $blocks);
        // line 565
        echo "
";
        // line 566
        $this->displayBlock('ea_form_column_close_row', $context, $blocks);
        // line 569
        echo "
";
        // line 570
        $this->displayBlock('ea_form_fieldset_open_row', $context, $blocks);
        // line 612
        echo "
";
        // line 613
        $this->displayBlock('ea_form_fieldset_close_row', $context, $blocks);
        // line 619
        echo "
";
        // line 620
        $this->displayBlock('ea_form_tablist_row', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('ea_form_tabpane_group_open_row', $context, $blocks);
        // line 653
        echo "
";
        // line 654
        $this->displayBlock('ea_form_tabpane_group_close_row', $context, $blocks);
        // line 658
        echo "
";
        // line 659
        $this->displayBlock('ea_form_tabpane_open_row', $context, $blocks);
        // line 672
        echo "
";
        // line 673
        $this->displayBlock('ea_form_tabpane_close_row', $context, $blocks);
        // line 677
        echo "
";
        // line 679
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 701
        echo "
";
        // line 702
        $this->displayBlock('comparison_widget', $context, $blocks);
        // line 705
        echo "
";
        // line 706
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 716
        echo "
";
        // line 717
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 720
        echo "
";
        // line 721
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 783
        echo "
";
        // line 784
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 851
        echo "
";
        // line 852
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["referrer"], "method", false, false, false, 10)) {
            // line 11
            echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["referrer"], "method", false, false, false, 11), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
        ";
        }
        // line 19
        echo "    </form>
";
    }

    // line 22
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 25), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
    }

    // line 32
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 34
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")))]);
        }
        // line 36
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 37
            echo "        ";
            // line 38
            $context["required"] = false;
        }
        // line 40
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 43
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 44), "")) : ("")) . " form-inline"))]);
        // line 45
        echo "    <div class=\"datetime-widget datetime-widget-datetime\">";
        // line 46
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        // line 47
        echo "</div>
";
    }

    // line 50
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 52
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 53
        echo "</div>";
    }

    // line 56
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 58
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 59
        echo "</div>";
    }

    // line 62
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 64
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 73
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 75
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 75), "")) : ("")) . " form-group")]);
        // line 77
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 77), "ea_vars", [], "any", false, false, false, 77), "field", [], "any", false, false, false, 77);
        // line 78
        echo "
    <div class=\"";
        // line 79
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 79)) : ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultColumns", [], "any", false, false, false, 79)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 80
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 80, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 82
        echo "<div class=\"form-widget\">
                ";
        // line 83
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 83), null)) : (null)));
        // line 84
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 84), null)) : (null)));
        // line 85
        echo "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 86
        echo "
                ";
        // line 87
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 88
        echo "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 89
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "prepend_html", [], "any", false, false, false, 90);
            echo "</span>
                        </div>
                    ";
        }
        // line 93
        echo "
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    ";
        // line 96
        if (($context["has_append_html"] ?? null)) {
            // line 97
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "append_html", [], "any", false, false, false, 97);
            echo "</span>
                    ";
        }
        // line 99
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 100
        echo "
                ";
        // line 101
        if ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 101) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 101)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 101)) : (false))) {
            // line 102
            echo "                    <small class=\"form-text form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 102), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", true, true, false, 103) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)) : (false))) {
            // line 104
            echo "                    <small class=\"form-text form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "help", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "help_translation_parameters", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "translation_domain", [], "any", false, false, false, 104));
            echo "</small>
                ";
        }
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 108
        echo "</div>
        </div>
    </div>

    ";
        // line 113
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "columns", [], "any", false, false, false, 113), null)) : (null)))) {
            // line 114
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
    }

    // line 118
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "    ";
        if (("ea-autocomplete" == ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 119)) ? (_twig_default_filter((($__internal_compile_2 = ($context["attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 120
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 125
            echo "    ";
        }
        // line 126
        echo "
    ";
        // line 127
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 130
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 131))) {
            // line 132
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 133
            echo "    ";
        }
        // line 134
        echo "
    ";
        // line 135
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_vars", [], "any", false, false, false, 137), "field", [], "any", false, false, false, 137) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_vars", [], "any", false, false, false, 137), "field", [], "any", false, false, false, 137), "customOptions", [], "any", false, false, false, 137), "get", ["entryIsComplex"], "method", false, false, false, 137))) ? ("true") : ("false")), "data-allow-add" => ((        // line 138
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 139
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 140
($context["form"] ?? null), "children", [], "any", false, false, false, 140))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 140))))), "data-form-type-name-placeholder" => ((        // line 141
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)) : (""))]);
        // line 143
        echo "
    ";
        // line 144
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 147
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        // line 150
        echo "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
        // line 151
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_vars", [], "any", false, true, false, 151), "field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)) : (false)));
        // line 152
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 154
        if (($context["isEmptyCollection"] ?? null)) {
            // line 155
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 156
($context["is_array_field"] ?? null)) {
            // line 157
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 159
            echo "            <div class=\"accordion\">
                ";
            // line 160
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 163
        echo "    </div>

    ";
        // line 165
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "prototype", [], "any", true, true, false, 165))) {
            // line 166
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if ((((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false)) &&  !($context["disabled"] ?? null))) {
            // line 170
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 177
    public function block_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", true, true, false, 178) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_vars", [], "any", false, true, false, 178), "field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)) : (false)));
        // line 179
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", true, true, false, 179) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", false, false, false, 179)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_vars", [], "any", false, true, false, 179), "field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", ["entryIsComplex"], "method", false, false, false, 179)) : (false));
        // line 180
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", true, true, false, 180)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", false, false, false, 180), false)) : (false));
        // line 181
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", true, true, false, 181) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", false, false, false, 181)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_vars", [], "any", false, true, false, 181), "field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", ["renderExpanded"], "method", false, false, false, 181)) : (false));
        // line 182
        echo "    ";
        ob_start(function () { return ''; });
        // line 183
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        echo "
    <div class=\"field-collection-item ";
        // line 189
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 189), "valid", [], "any", false, false, false, 189)) ? ("is-invalid") : (""));
        echo "\">
        ";
        // line 190
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 191
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
            ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 193
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 194
                echo "                ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 196
            echo "        ";
        } else {
            // line 197
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 199
            echo ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            echo "
                    </button>

                    ";
            // line 204
            if ((($context["allows_deleting_items"] ?? null) &&  !($context["disabled"] ?? null))) {
                // line 205
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 207
            echo "                </h2>
                <div id=\"";
            // line 208
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        <div class=\"row\">
                            ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 217
        echo "    </div>
";
    }

    // line 220
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 222
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 223
            echo "            ";
            // line 225
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (is_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 226
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 227
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 229
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 229), "prototype", [], "any", true, true, false, 229))) {
                // line 230
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 231
                echo "            ";
            }
            // line 232
            echo "        ";
        }
        // line 233
        echo "
        ";
        // line 234
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 238
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 239), "css_class", [], "any", true, true, false, 239)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 239), "css_class", [], "any", false, false, false, 239), "")) : ("")), "html", null, true);
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 241
        echo "</div>";
    }

    // line 246
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        if ((($context["label"] ?? null) === false)) {
        } else {
            // line 251
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 252
                $context["element"] = "legend";
                // line 253
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 253)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 253), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 255
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " form-control-label"))]);
            }
            // line 257
            if (($context["required"] ?? null)) {
                // line 258
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 258), "")) : ("")) . " required"))]);
            }
            // line 260
            if ((($context["label"] ?? null) === "")) {
            } elseif ((null ===             // line 263
($context["label"] ?? null))) {
                // line 264
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 265
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 266
($context["name"] ?? null), "%id%" =>                     // line 267
($context["id"] ?? null)]);
                } else {
                    // line 270
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 273
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_3 = $context;
                $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($__internal_compile_4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 273, $this->getSourceContext());
                }
                $__internal_compile_4 = twig_to_array($__internal_compile_4);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_3;
            }
            echo ">";
            // line 274
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 275
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 276
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 278
                    echo ($context["label"] ?? null);
                }
            } else {
                // line 281
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 282
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 284
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 287
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 293
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 295
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["label/empty"], "method", false, false, false, 295));
        echo "
    </div>
";
    }

    // line 299
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        echo "    ";
        $context["force_error"] = true;
        // line 301
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 304
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 306
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 307
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 308
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 315
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 316
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 316) &&  !(null === (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>";
            // line 317
            if (((array_key_exists("download_label", $context)) ? (_twig_default_filter(($context["download_label"] ?? null), false)) : (false))) {
                // line 318
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 320
                echo twig_escape_filter($this->env, ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 322
            echo "</a>
        ";
        }
        // line 324
        echo "
        ";
        // line 325
        ob_start(function () { return ''; });
        // line 326
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 326), "vars", [], "any", false, false, false, 326), "id", [], "any", false, false, false, 326), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 329), "vars", [], "any", false, false, false, 329), "id", [], "any", false, false, false, 329), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 331
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 334
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 336), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 339
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 339)) {
            // line 340
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 340), 'row');
            echo "
            ";
        }
        // line 342
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 347
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 348
        echo "    ";
        $context["force_error"] = true;
        // line 349
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 352
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 353), "formTypeOptions", [], "any", true, true, false, 353)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_vars"] ?? null), "field", [], "any", false, true, false, 353), "formTypeOptions", [], "any", false, false, false, 353), "")) : (""));
        // line 354
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 355
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 356
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 357
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 358
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 358) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 358)))) {
                    // line 359
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 359)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 361
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 363
                echo "                </div>
            ";
            } else {
                // line 365
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 366
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 367
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 368
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 368) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 368)))) {
                    // line 369
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 369)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 371
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 373
                echo "                </a>

                <div id=\"";
                // line 375
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 376
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 376) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 376)))) {
                    // line 377
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 377)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 379
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 381
                echo "                </div>
            ";
            }
            // line 383
            echo "        ";
        }
        // line 384
        echo "
        ";
        // line 385
        ob_start(function () { return ''; });
        // line 386
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 386), "vars", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 389), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 391
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 394
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 396), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 399
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 399)) {
            // line 400
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 400), 'row');
            echo "
            ";
        }
        // line 402
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 403
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 403), "vars", [], "any", false, false, false, 403), "id", [], "any", false, false, false, 403), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 407
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 408
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 412
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 413
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 414
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 419
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        echo "    ";
        @trigger_error("The \"ea_crud_widget_panels\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 420).", E_USER_DEPRECATED);
        // line 421
        echo "
    ";
        // line 422
        $this->displayBlock("ea_crud_widget_fieldsets", $context, $blocks);
        echo "
";
    }

    // line 425
    public function block_ea_crud_widget_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 426
        echo "    ";
        @trigger_error("The \"ea_crud_widget_fieldsets\" block is deprecated because the form layout building logic has been revamped. Check \"ea_crud_widget\" block in `form_theme.html.page` for more details."." (\"@EasyAdmin/crud/form_theme.html.twig\" at line 426).", E_USER_DEPRECATED);
        // line 427
        echo "
    ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 428), "ea_crud_form", [], "any", false, false, false, 428), "form_fieldsets", [], "any", false, false, false, 428), function ($__fieldset_config__) use ($context, $macros) { $context["fieldset_config"] = $__fieldset_config__; return ( !twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 428) || (twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "form_tab", [], "any", false, false, false, 428) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["fieldset_name"] => $context["fieldset_config"]) {
            // line 429
            echo "        ";
            $context["fieldset_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 429), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 429), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 429), false)) : (false)));
            // line 430
            echo "
        ";
            // line 431
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "collapsible", [], "any", false, false, false, 431);
            // line 432
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "collapsed", [], "any", false, false, false, 432);
            // line 433
            echo "
        <div class=\"";
            // line 434
            (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", true, true, false, 434) &&  !(null === twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 434)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "css_class", [], "any", false, false, false, 434), "html", null, true))) : (print ("")));
            echo "\">
            <fieldset class=\"form-fieldset\">
                ";
            // line 436
            if (($context["fieldset_has_header"] ?? null)) {
                // line 437
                echo "                    <div class=\"form-fieldset-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 437), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-fieldset-title\">
                            <a ";
                // line 439
                if ( !($context["collapsible"] ?? null)) {
                    // line 440
                    echo "                                href=\"#\" class=\"not-collapsible\"
                            ";
                } else {
                    // line 442
                    echo "                                href=\"#content-";
                    echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                class=\"form-fieldset-collapse ";
                    // line 443
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                                aria-expanded=\"";
                    // line 444
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
                    echo "\"
                            ";
                }
                // line 446
                echo "                            >
                                ";
                // line 447
                if (($context["collapsible"] ?? null)) {
                    // line 448
                    echo "                                    <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                                ";
                }
                // line 450
                echo "
                                ";
                // line 451
                if (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 451), false)) : (false))) {
                    // line 452
                    echo "                                    <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "icon", [], "any", false, false, false, 452), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 454
                echo "                                ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "label", [], "any", false, false, false, 454));
                echo "
                            </a>

                            ";
                // line 457
                if (((twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", true, true, false, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 457), false)) : (false))) {
                    // line 458
                    echo "                                <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["fieldset_config"], "help", [], "any", false, false, false, 458));
                    echo "</div>
                            ";
                }
                // line 460
                echo "                        </div>
                    </div>
                ";
            }
            // line 463
            echo "
                <div id=\"content-";
            // line 464
            echo twig_escape_filter($this->env, $context["fieldset_name"], "html", null, true);
            echo "\" class=\"form-fieldset-body ";
            echo (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 466
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "block_prefixes", [], "any", false, false, false, 466)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "ea_crud_form", [], "any", false, false, false, 466), "form_fieldset", [], "any", false, false, false, 466) == $context["fieldset_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 467
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 467), "ea_crud_form", [], "any", false, false, false, 467), "form_tab", [], "any", false, false, false, 467) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 467), "ea_crud_form", [], "any", false, false, false, 467), "form_tab", [], "any", false, false, false, 467) == ($context["tab_name"] ?? null)))) {
                    // line 468
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 470
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            echo "                    </div>
                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 476
            echo "        ";
            // line 487
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_recursiveFieldsetForm", [($context["form"] ?? null)], 487, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldset_name'], $context['fieldset_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 492
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 493
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 493), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 496
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 497
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 497), "name", [], "any", false, false, false, 497);
        // line 498
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 502
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 503
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 505
($context["form"] ?? null), "vars", [], "any", false, false, false, 505), "ea_vars", [], "any", false, false, false, 505), "field", [], "any", false, false, false, 505), "customOptions", [], "any", false, false, false, 505), "get", ["language"], "method", false, false, false, 505), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 506
($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "ea_vars", [], "any", false, false, false, 506), "field", [], "any", false, false, false, 506), "customOptions", [], "any", false, false, false, 506), "get", ["tabSize"], "method", false, false, false, 506), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 507
($context["form"] ?? null), "vars", [], "any", false, false, false, 507), "ea_vars", [], "any", false, false, false, 507), "field", [], "any", false, false, false, 507), "customOptions", [], "any", false, false, false, 507), "get", ["indentWithTabs"], "method", false, false, false, 507)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 508
($context["form"] ?? null), "vars", [], "any", false, false, false, 508), "ea_vars", [], "any", false, false, false, 508), "field", [], "any", false, false, false, 508), "customOptions", [], "any", false, false, false, 508), "get", ["showLineNumbers"], "method", false, false, false, 508)) ? ("true") : ("false")), "data-number-of-rows" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 509
($context["form"] ?? null), "vars", [], "any", false, false, false, 509), "ea_vars", [], "any", false, false, false, 509), "field", [], "any", false, false, false, 509), "customOptions", [], "any", false, false, false, 509), "get", ["numOfRows"], "method", false, false, false, 509)])]);
        // line 510
        echo "
";
    }

    // line 514
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 515
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 517
($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["numOfRows"], "method", true, true, false, 517)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 517), "ea_vars", [], "any", false, true, false, 517), "field", [], "any", false, true, false, 517), "customOptions", [], "any", false, true, false, 517), "get", ["numOfRows"], "method", false, false, false, 517), 5)) : (5)), "data-trix-editor-config" => json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 518
($context["form"] ?? null), "vars", [], "any", false, true, false, 518), "ea_vars", [], "any", false, true, false, 518), "field", [], "any", false, true, false, 518), "customOptions", [], "any", false, true, false, 518), "get", ["trixEditorConfig"], "method", true, true, false, 518)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 518), "ea_vars", [], "any", false, true, false, 518), "field", [], "any", false, true, false, 518), "customOptions", [], "any", false, true, false, 518), "get", ["trixEditorConfig"], "method", false, false, false, 518), null)) : (null)))])]);
        // line 519
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 522
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>
";
    }

    // line 527
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 528
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 528), "row_attr", [], "any", false, false, false, 528), "class", [], "any", false, false, false, 528), "html", null, true);
        echo "\"></div>
";
    }

    // line 531
    public function block_ea_form_column_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 532
        echo "    ";
        // line 533
        echo "    ";
        if ( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 533), "ea_is_inside_tab", [], "any", true, true, false, 533)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 533), "ea_is_inside_tab", [], "any", false, false, false, 533), false)) : (false))) {
            // line 534
            echo "        <div class=\"row\">
    ";
        }
    }

    // line 538
    public function block_ea_form_column_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 539
        echo "    ";
        // line 541
        echo "    ";
        if ( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_is_inside_tab", [], "any", true, true, false, 541)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 541), "ea_is_inside_tab", [], "any", false, false, false, 541), false)) : (false))) {
            // line 542
            echo "        </div>
    ";
        }
    }

    // line 546
    public function block_ea_form_column_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 547
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 547), "ea_vars", [], "any", false, false, false, 547), "field", [], "any", false, false, false, 547);
        // line 548
        echo "    ";
        $context["field_icon"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["icon"], "method", false, false, false, 548);
        // line 549
        echo "    ";
        $context["column_has_title"] = (((((($context["field_icon"] ?? null) != null) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != false)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != null)) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 549) != "")) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 549) != null));
        // line 550
        echo "
    <div class=\"form-column ";
        // line 551
        echo (( !($context["column_has_title"] ?? null)) ? ("form-column-no-header") : (""));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 551), "html", null, true);
        echo "\">
        ";
        // line 552
        if (($context["column_has_title"] ?? null)) {
            // line 553
            echo "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
            // line 555
            if (($context["field_icon"] ?? null)) {
                echo "<i class=\"form-column-icon fa fa-fw fa-";
                echo twig_escape_filter($this->env, ($context["field_icon"] ?? null), "html", null, true);
                echo "\"></i>";
            }
            // line 556
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 556)) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", true, true, false, 556)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 556), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 556), "translationDomain", [], "any", false, false, false, 556));
            }
            // line 557
            echo "                </div>

                ";
            // line 559
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 559)) {
                // line 560
                echo "                    <div class=\"form-column-help\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 560), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 560), "translationDomain", [], "any", false, false, false, 560));
                echo "</div>
                ";
            }
            // line 562
            echo "            </div>
        ";
        }
    }

    // line 566
    public function block_ea_form_column_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 567
        echo "    </div>
";
    }

    // line 570
    public function block_ea_form_fieldset_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 571
        echo "    ";
        $context["fieldset_has_header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 571), "label", [], "any", false, false, false, 571) || ($context["ea_icon"] ?? null)) || ($context["ea_help"] ?? null));
        // line 572
        echo "
    <div class=\"form-fieldset ";
        // line 573
        echo (( !($context["fieldset_has_header"] ?? null)) ? ("form-fieldset-no-header") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        echo "\">
        <fieldset>
            ";
        // line 575
        if (($context["fieldset_has_header"] ?? null)) {
            // line 576
            echo "                <div class=\"form-fieldset-header ";
            echo ((($context["ea_is_collapsible"] ?? null)) ? ("collapsible") : (""));
            echo " ";
            echo (( !twig_test_empty(($context["ea_help"] ?? null))) ? ("with-help") : (""));
            echo "\">
                    <div class=\"form-fieldset-title\">
                        ";
            // line 578
            ob_start(function () { return ''; });
            // line 579
            echo "                            ";
            if (($context["ea_is_collapsible"] ?? null)) {
                // line 580
                echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
            }
            // line 582
            echo "
                            ";
            // line 583
            if (($context["ea_icon"] ?? null)) {
                // line 584
                echo "                                <i class=\"form-fieldset-icon ";
                echo twig_escape_filter($this->env, ($context["ea_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            ";
            }
            // line 586
            echo "
                            ";
            // line 587
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 587), "label", [], "any", false, false, false, 587));
            echo "
                        ";
            $context["fieldset_title_contents"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 589
            echo "
                        ";
            // line 590
            if (($context["ea_is_collapsible"] ?? null)) {
                // line 591
                echo "                            <a href=\"#content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 591), "name", [], "any", false, false, false, 591), "html", null, true);
                echo "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                // line 592
                echo ((($context["ea_is_collapsed"] ?? null)) ? ("collapsed") : (""));
                echo "\"
                               aria-expanded=\"";
                // line 593
                echo ((($context["ea_is_collapsed"] ?? null)) ? ("false") : ("true"));
                echo "\" aria-controls=\"content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 593), "name", [], "any", false, false, false, 593), "html", null, true);
                echo "\">
                                ";
                // line 594
                echo ($context["fieldset_title_contents"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 597
                echo "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                // line 598
                echo ($context["fieldset_title_contents"] ?? null);
                echo "
                            </span>
                        ";
            }
            // line 601
            echo "
                        ";
            // line 602
            if (($context["ea_help"] ?? null)) {
                // line 603
                echo "                            <div class=\"form-fieldset-help\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null));
                echo "</div>
                        ";
            }
            // line 605
            echo "                    </div>
                </div>
            ";
        }
        // line 608
        echo "
            <div id=\"content-";
        // line 609
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 609), "name", [], "any", false, false, false, 609), "html", null, true);
        echo "\" class=\"form-fieldset-body ";
        echo (( !($context["fieldset_has_header"] ?? null)) ? ("without-header") : (""));
        echo " ";
        echo ((($context["ea_is_collapsible"] ?? null)) ? ("collapse") : (""));
        echo " ";
        echo (( !($context["ea_is_collapsed"] ?? null)) ? ("show") : (""));
        echo "\">
                <div class=\"row\">
";
    }

    // line 613
    public function block_ea_form_fieldset_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 614
        echo "                </div>
            </div>
        </fieldset>
    </div>
";
    }

    // line 620
    public function block_ea_form_tablist_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 621
        echo "    ";
        $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
        // line 622
        echo "    ";
        $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 623
        echo "    ";
        $context["tab_error_count_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
        // line 624
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "ea_vars", [], "any", false, false, false, 624), "field", [], "any", false, false, false, 624);
        // line 625
        echo "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", ["tabs"], "method", false, false, false, 628));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 629
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 630
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 630)) {
                echo "active";
            }
            echo "\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 630), "html", null, true);
            echo "\" id=\"tablist-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_id_option_name"] ?? null)], "method", false, false, false, 630), "html", null, true);
            echo "\" data-bs-toggle=\"tab\">";
            // line 631
            if (((twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 631)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 631), false)) : (false))) {
                // line 632
                echo "<i class=\"tab-nav-item-icon fa-fw ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 632), "html", null, true);
                echo "\"></i>";
            }
            // line 634
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 634), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 634), "translationDomain", [], "any", false, false, false, 634));
            echo "

                        ";
            // line 636
            $context["tab_error_count"] = twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [($context["tab_error_count_option_name"] ?? null)], "method", false, false, false, 636);
            // line 637
            if ((($context["tab_error_count"] ?? null) > 0)) {
                // line 638
                echo "<span class=\"badge badge-danger\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => ($context["tab_error_count"] ?? null)], "EasyAdminBundle"), "html", null, true);
                echo "\">";
                // line 639
                echo twig_escape_filter($this->env, ($context["tab_error_count"] ?? null), "html", null, true);
                // line 640
                echo "</span>";
            }
            // line 642
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 645
        echo "        </ul>
    </div>
";
    }

    // line 649
    public function block_ea_form_tabpane_group_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 650
        echo "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
    }

    // line 654
    public function block_ea_form_tabpane_group_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 655
        echo "        </div>
    </div>
";
    }

    // line 659
    public function block_ea_form_tabpane_open_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 660
        echo "    ";
        $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
        // line 661
        echo "    ";
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 661), "ea_vars", [], "any", false, false, false, 661), "field", [], "any", false, false, false, 661);
        // line 662
        echo "
    <div id=\"";
        // line 663
        echo twig_escape_filter($this->env, ($context["ea_tab_id"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane ";
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getCustomOption", [($context["tab_is_active_option_name"] ?? null)], "method", false, false, false, 663)) {
            echo "active";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["ea_css_class"] ?? null), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 663), "attr", [], "any", false, false, false, 663));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=";
            echo twig_escape_filter($this->env, $context["value"], "html_attr");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 664
        if (($context["ea_help"] ?? null)) {
            // line 665
            echo "            <div class=\"content-header-help tab-help\">
                ";
            // line 666
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["ea_help"] ?? null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 666), "translationDomain", [], "any", false, false, false, 666));
            echo "
            </div>
        ";
        }
        // line 669
        echo "
        <div class=\"row\">
";
    }

    // line 673
    public function block_ea_form_tabpane_close_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 674
        echo "        </div>
    </div>
";
    }

    // line 679
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 680
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 680), "query", [], "any", false, true, false, 680), "all", [], "method", false, true, false, 680), "filters", [], "array", true, true, false, 680)) ? (_twig_default_filter((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 680), "query", [], "any", false, true, false, 680), "all", [], "method", false, true, false, 680)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["filters"] ?? null) : null), [])) : ([])));
        // line 681
        echo "
    ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 683
            echo "        <div class=\"col-12\">
            <div class=\"filter-field px-3\" data-filter-property=\"";
            // line 684
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 684), "name", [], "any", false, false, false, 684), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 685
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 685), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 686
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 686), "name", [], "any", false, false, false, 686), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 687
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 687), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 687), "name", [], "any", false, false, false, 687), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 687), "html", null, true);
            echo "\"
                        ";
            // line 688
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label_attr", [], "any", true, true, false, 688)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 688), "label_attr", [], "any", false, false, false, 688), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 689
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 689), "label", [], "any", true, true, false, 689)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 689), "label", [], "any", false, false, false, 689), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 689), "name", [], "any", false, false, false, 689)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 689), "name", [], "any", false, false, false, 689)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 689), "translationDomain", [], "any", false, false, false, 689)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 692
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 692), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 692), "name", [], "any", false, false, false, 692), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 692), "html", null, true);
            echo "\">
                    <div class=\"form-widget\">
                        ";
            // line 694
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 702
    public function block_comparison_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 703
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 703), "attr", [], "any", false, false, false, 703), ["data-ea-comparison-id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 703), "id", [], "any", false, false, false, 703)])]);
        echo "
";
    }

    // line 706
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 707
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 708
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 708), 'row');
        echo "
        ";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 709), 'row');
        echo "
        <div data-ea-value2-of-comparison-id=\"";
        // line 710
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 710), "vars", [], "any", false, false, false, 710), "id", [], "any", false, false, false, 710), "html", null, true);
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 710), "vars", [], "any", false, false, false, 710), "value", [], "any", false, false, false, 710) != "between")) ? ("d-none") : (""));
        echo "\">
            ";
        // line 711
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 711), 'row');
        echo "
        </div>
    </div>";
        // line 714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 717
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 718
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 721
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 722
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 724
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 725
        echo "            ";
        $context["title"] = "";
        // line 726
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 727
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 728
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 729
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 730
                echo "                ";
            } else {
                // line 731
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 731);
                // line 732
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 732));
                // line 733
                echo "                ";
            }
            // line 734
            echo "            ";
        }
        // line 735
        echo "            <div class=\"custom-file\">
                ";
        // line 736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), "vars", [], "any", false, false, false, 736), "attr", [], "any", false, false, false, 736), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "d-none"])]);
        echo "
                ";
        // line 737
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 737), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 740
        if (($context["currentFiles"] ?? null)) {
            // line 741
            if (($context["multiple"] ?? null)) {
                // line 742
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 742)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 744
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 744)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 747
        if (($context["allow_delete"] ?? null)) {
            // line 748
            echo "                    <label class=\"btn ea-fileupload-delete-btn ";
            echo ((twig_test_empty(($context["currentFiles"] ?? null))) ? ("d-none") : (""));
            echo "\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 748), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 752
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 752), "vars", [], "any", false, false, false, 752), "id", [], "any", false, false, false, 752), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 757
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 758
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 761
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 762
                echo "                        <tr>
                            <td>
                                ";
                // line 764
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 764))), "html", null, true);
                    echo "\">";
                }
                // line 765
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 765)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 766
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 766), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 768
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 769
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 770
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 770)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 773
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 777
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 778
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 778), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 780
        echo "    </div>
    ";
        // line 781
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 781), 'errors');
        echo "
";
    }

    // line 784
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 785
        echo "    ";
        $context["placeholder"] = "";
        // line 786
        echo "    ";
        $context["title"] = "";
        // line 787
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 788
        echo "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 789
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 790
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 791
                echo "        ";
            } else {
                // line 792
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 792);
                // line 793
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 793));
                // line 794
                echo "        ";
            }
            // line 795
            echo "    ";
        }
        // line 796
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 799
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 799), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 799), "vars", [], "any", false, false, false, 799), "attr", [], "any", false, false, false, 799), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        echo "

            ";
        // line 801
        if (($context["currentFiles"] ?? null)) {
            // line 802
            echo "                <span class=\"input-group-text\">
                    ";
            // line 803
            if (($context["multiple"] ?? null)) {
                // line 804
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 804)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 806
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 806)), "html", null, true);
                echo "
                    ";
            }
            // line 808
            echo "                </span>
            ";
        }
        // line 810
        echo "
            ";
        // line 811
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 812
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 816
        echo "
            ";
        // line 817
        if (($context["currentFiles"] ?? null)) {
            // line 818
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 822
        echo "        </div>

        ";
        // line 824
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 825
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 828
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 829
                echo "                        <tr>
                            <td>
                                ";
                // line 831
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 831))), "html", null, true);
                    echo "\">";
                }
                // line 832
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 832)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 833
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 833), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 835
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 836
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 837
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 837)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 840
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 844
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 845
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 845), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 847
        echo "    </div>

    ";
        // line 849
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 849), 'errors');
        echo "
";
    }

    // line 852
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 853
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => json_encode(twig_array_map($this->env, twig_split_filter($this->env,         // line 855
($context["target"] ?? null), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 855), "children", [], "any", false, false, false, 855)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["name"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 855), "id", [], "any", false, false, false, 855); }))]);
        // line 857
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 857)) {
            // line 858
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_9 =             // line 859
($context["attr"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["data-confirm-text"] ?? null) : null))]);
            // line 861
            echo "    ";
        }
        // line 862
        echo "
    <div class=\"input-group\">
        ";
        // line 864
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
    }

    // line 476
    public function macro_recursiveFieldsetForm($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 477
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 477), "block_prefixes", [], "any", false, false, false, 477)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "ea_crud_form", [], "any", false, true, false, 477), "form_tab", [], "any", true, true, false, 477) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 477), "ea_crud_form", [], "any", false, false, false, 477), "form_tab", [], "any", false, false, false, 477)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "ea_crud_form", [], "any", false, true, false, 477), "form_tabs", [], "any", true, true, false, 477))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 478
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 478), "ea_crud_form", [], "any", false, true, false, 478), "form_tabs", [], "any", true, true, false, 478)) {
                    // line 479
                    echo "                    ";
                    // line 480
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveFieldsetForm", [$context["field"]], 480, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 482
                    echo "                    ";
                    // line 483
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                ";
                }
                // line 485
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "        ";

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
        return "@EasyAdmin/crud/form_theme.html.twig";
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
        return array (  2495 => 486,  2489 => 485,  2483 => 483,  2481 => 482,  2475 => 480,  2473 => 479,  2470 => 478,  2465 => 477,  2452 => 476,  2442 => 864,  2438 => 862,  2435 => 861,  2433 => 859,  2431 => 858,  2428 => 857,  2426 => 855,  2424 => 853,  2420 => 852,  2414 => 849,  2410 => 847,  2404 => 845,  2401 => 844,  2395 => 840,  2386 => 837,  2383 => 836,  2379 => 835,  2374 => 833,  2369 => 832,  2363 => 831,  2359 => 829,  2355 => 828,  2350 => 825,  2348 => 824,  2344 => 822,  2338 => 818,  2336 => 817,  2333 => 816,  2327 => 812,  2325 => 811,  2322 => 810,  2318 => 808,  2312 => 806,  2306 => 804,  2304 => 803,  2301 => 802,  2299 => 801,  2294 => 799,  2289 => 796,  2286 => 795,  2283 => 794,  2280 => 793,  2277 => 792,  2274 => 791,  2271 => 790,  2268 => 789,  2265 => 788,  2262 => 787,  2259 => 786,  2256 => 785,  2252 => 784,  2246 => 781,  2243 => 780,  2237 => 778,  2234 => 777,  2228 => 773,  2219 => 770,  2216 => 769,  2212 => 768,  2207 => 766,  2202 => 765,  2196 => 764,  2192 => 762,  2188 => 761,  2183 => 758,  2181 => 757,  2172 => 752,  2162 => 748,  2160 => 747,  2153 => 744,  2147 => 742,  2145 => 741,  2143 => 740,  2138 => 737,  2134 => 736,  2131 => 735,  2128 => 734,  2125 => 733,  2122 => 732,  2119 => 731,  2116 => 730,  2113 => 729,  2110 => 728,  2107 => 727,  2104 => 726,  2101 => 725,  2099 => 724,  2095 => 722,  2091 => 721,  2084 => 718,  2080 => 717,  2076 => 714,  2071 => 711,  2065 => 710,  2061 => 709,  2057 => 708,  2054 => 707,  2050 => 706,  2043 => 703,  2039 => 702,  2017 => 694,  2006 => 692,  2000 => 689,  1986 => 688,  1978 => 687,  1972 => 686,  1968 => 685,  1964 => 684,  1961 => 683,  1944 => 682,  1941 => 681,  1938 => 680,  1934 => 679,  1928 => 674,  1924 => 673,  1918 => 669,  1912 => 666,  1909 => 665,  1907 => 664,  1886 => 663,  1883 => 662,  1880 => 661,  1877 => 660,  1873 => 659,  1867 => 655,  1863 => 654,  1857 => 650,  1853 => 649,  1847 => 645,  1839 => 642,  1836 => 640,  1834 => 639,  1830 => 638,  1828 => 637,  1826 => 636,  1821 => 634,  1816 => 632,  1814 => 631,  1805 => 630,  1802 => 629,  1798 => 628,  1793 => 625,  1790 => 624,  1787 => 623,  1784 => 622,  1781 => 621,  1777 => 620,  1769 => 614,  1765 => 613,  1752 => 609,  1749 => 608,  1744 => 605,  1738 => 603,  1736 => 602,  1733 => 601,  1727 => 598,  1724 => 597,  1718 => 594,  1712 => 593,  1708 => 592,  1703 => 591,  1701 => 590,  1698 => 589,  1693 => 587,  1690 => 586,  1684 => 584,  1682 => 583,  1679 => 582,  1675 => 580,  1672 => 579,  1670 => 578,  1662 => 576,  1660 => 575,  1653 => 573,  1650 => 572,  1647 => 571,  1643 => 570,  1638 => 567,  1634 => 566,  1628 => 562,  1622 => 560,  1620 => 559,  1616 => 557,  1611 => 556,  1605 => 555,  1601 => 553,  1599 => 552,  1593 => 551,  1590 => 550,  1587 => 549,  1584 => 548,  1581 => 547,  1577 => 546,  1571 => 542,  1568 => 541,  1566 => 539,  1562 => 538,  1556 => 534,  1553 => 533,  1551 => 532,  1547 => 531,  1540 => 528,  1536 => 527,  1529 => 522,  1524 => 519,  1522 => 518,  1521 => 517,  1519 => 515,  1515 => 514,  1510 => 510,  1508 => 509,  1507 => 508,  1506 => 507,  1505 => 506,  1504 => 505,  1502 => 503,  1498 => 502,  1491 => 498,  1488 => 497,  1484 => 496,  1477 => 493,  1473 => 492,  1462 => 487,  1460 => 476,  1451 => 471,  1445 => 470,  1439 => 468,  1436 => 467,  1432 => 466,  1421 => 464,  1418 => 463,  1413 => 460,  1407 => 458,  1405 => 457,  1398 => 454,  1392 => 452,  1390 => 451,  1387 => 450,  1383 => 448,  1381 => 447,  1378 => 446,  1371 => 444,  1367 => 443,  1362 => 442,  1358 => 440,  1356 => 439,  1348 => 437,  1346 => 436,  1341 => 434,  1338 => 433,  1335 => 432,  1333 => 431,  1330 => 430,  1327 => 429,  1322 => 428,  1319 => 427,  1316 => 426,  1312 => 425,  1306 => 422,  1303 => 421,  1300 => 420,  1296 => 419,  1285 => 414,  1280 => 413,  1276 => 412,  1269 => 408,  1265 => 407,  1258 => 403,  1255 => 402,  1249 => 400,  1247 => 399,  1241 => 396,  1237 => 395,  1234 => 394,  1230 => 391,  1225 => 389,  1218 => 386,  1216 => 385,  1213 => 384,  1210 => 383,  1206 => 381,  1200 => 379,  1194 => 377,  1192 => 376,  1188 => 375,  1184 => 373,  1178 => 371,  1172 => 369,  1170 => 368,  1166 => 367,  1163 => 366,  1160 => 365,  1156 => 363,  1150 => 361,  1144 => 359,  1142 => 358,  1139 => 357,  1136 => 356,  1134 => 355,  1131 => 354,  1128 => 353,  1124 => 352,  1117 => 349,  1114 => 348,  1110 => 347,  1103 => 343,  1100 => 342,  1094 => 340,  1092 => 339,  1086 => 336,  1082 => 335,  1079 => 334,  1075 => 331,  1070 => 329,  1063 => 326,  1061 => 325,  1058 => 324,  1054 => 322,  1051 => 320,  1048 => 318,  1046 => 317,  1043 => 316,  1038 => 315,  1035 => 308,  1032 => 307,  1030 => 306,  1027 => 305,  1023 => 304,  1016 => 301,  1013 => 300,  1009 => 299,  1002 => 295,  999 => 294,  995 => 293,  988 => 287,  984 => 284,  981 => 282,  979 => 281,  975 => 278,  972 => 276,  970 => 275,  968 => 274,  953 => 273,  949 => 270,  946 => 267,  945 => 266,  944 => 265,  942 => 264,  940 => 263,  938 => 260,  935 => 258,  933 => 257,  930 => 255,  927 => 253,  925 => 252,  923 => 251,  920 => 247,  916 => 246,  912 => 241,  910 => 240,  904 => 239,  900 => 238,  893 => 234,  890 => 233,  887 => 232,  884 => 231,  881 => 230,  878 => 229,  872 => 227,  869 => 226,  866 => 225,  864 => 223,  862 => 222,  859 => 221,  855 => 220,  850 => 217,  841 => 211,  833 => 208,  830 => 207,  824 => 205,  822 => 204,  816 => 201,  809 => 199,  805 => 197,  802 => 196,  796 => 194,  794 => 193,  790 => 192,  785 => 191,  783 => 190,  777 => 189,  774 => 188,  767 => 184,  764 => 183,  761 => 182,  758 => 181,  755 => 180,  752 => 179,  749 => 178,  745 => 177,  737 => 172,  733 => 170,  731 => 169,  728 => 168,  725 => 167,  722 => 166,  720 => 165,  716 => 163,  710 => 160,  707 => 159,  701 => 157,  699 => 156,  694 => 155,  692 => 154,  688 => 152,  685 => 151,  682 => 150,  680 => 148,  676 => 147,  670 => 144,  667 => 143,  665 => 141,  664 => 140,  663 => 139,  662 => 138,  661 => 137,  660 => 135,  657 => 134,  654 => 133,  651 => 132,  648 => 131,  644 => 130,  638 => 127,  635 => 126,  632 => 125,  629 => 120,  626 => 119,  622 => 118,  616 => 114,  613 => 113,  607 => 108,  605 => 107,  599 => 104,  597 => 103,  592 => 102,  590 => 101,  587 => 100,  582 => 99,  576 => 97,  574 => 96,  569 => 94,  566 => 93,  560 => 90,  557 => 89,  554 => 88,  550 => 87,  547 => 86,  544 => 85,  541 => 84,  539 => 83,  536 => 82,  534 => 81,  523 => 80,  519 => 79,  516 => 78,  513 => 77,  511 => 75,  509 => 74,  505 => 73,  500 => 67,  497 => 65,  495 => 64,  493 => 63,  489 => 62,  485 => 59,  483 => 58,  481 => 57,  477 => 56,  473 => 53,  471 => 52,  469 => 51,  465 => 50,  460 => 47,  458 => 46,  456 => 45,  453 => 44,  449 => 43,  445 => 40,  442 => 38,  440 => 37,  438 => 36,  435 => 34,  433 => 33,  429 => 32,  424 => 27,  413 => 25,  408 => 24,  405 => 23,  401 => 22,  396 => 19,  390 => 17,  387 => 16,  383 => 15,  375 => 11,  373 => 10,  369 => 9,  366 => 8,  360 => 6,  357 => 5,  353 => 4,  349 => 852,  346 => 851,  344 => 784,  341 => 783,  339 => 721,  336 => 720,  334 => 717,  331 => 716,  329 => 706,  326 => 705,  324 => 702,  321 => 701,  319 => 679,  316 => 677,  314 => 673,  311 => 672,  309 => 659,  306 => 658,  304 => 654,  301 => 653,  299 => 649,  296 => 648,  294 => 620,  291 => 619,  289 => 613,  286 => 612,  284 => 570,  281 => 569,  279 => 566,  276 => 565,  274 => 546,  271 => 545,  269 => 538,  266 => 537,  264 => 531,  261 => 530,  259 => 527,  256 => 525,  254 => 514,  251 => 512,  249 => 502,  246 => 500,  244 => 496,  241 => 495,  239 => 492,  236 => 490,  234 => 425,  231 => 424,  229 => 419,  226 => 417,  224 => 412,  221 => 410,  219 => 407,  216 => 406,  214 => 352,  211 => 351,  209 => 347,  206 => 346,  204 => 304,  201 => 303,  199 => 299,  196 => 298,  194 => 293,  191 => 292,  188 => 290,  186 => 246,  183 => 245,  180 => 243,  178 => 238,  175 => 237,  173 => 220,  170 => 219,  168 => 177,  165 => 176,  163 => 147,  160 => 146,  158 => 130,  155 => 129,  153 => 118,  150 => 117,  148 => 73,  145 => 72,  142 => 70,  140 => 62,  137 => 61,  135 => 56,  132 => 55,  130 => 50,  127 => 49,  125 => 43,  122 => 42,  120 => 32,  117 => 31,  114 => 29,  112 => 22,  109 => 21,  107 => 15,  104 => 14,  102 => 4,  99 => 3,  92 => 0,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "C:\\Users\\osman\\pcplus\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\form_theme.html.twig");
    }
}
