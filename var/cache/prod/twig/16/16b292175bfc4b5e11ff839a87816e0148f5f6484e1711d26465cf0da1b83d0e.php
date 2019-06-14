<?php

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_e8a697babe4d3cc06988867ccc67e1547ffdf362be57ecd7cc40192d11a2a842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'date_range_widget' => array($this, 'block_date_range_widget'),
                'search_and_reset_widget' => array($this, 'block_search_and_reset_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'material_choice_table_widget' => array($this, 'block_material_choice_table_widget'),
                'material_multiple_choice_table_widget' => array($this, 'block_material_multiple_choice_table_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 311
        echo "
";
        // line 312
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 379
        echo "
";
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('form_label', $context, $blocks);
        // line 386
        echo "
";
        // line 387
        $this->displayBlock('choice_label', $context, $blocks);
        // line 392
        echo "
";
        // line 393
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('radio_label', $context, $blocks);
        // line 400
        echo "
";
        // line 401
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 430
        echo "
";
        // line 432
        echo "
";
        // line 433
        $this->displayBlock('form_row', $context, $blocks);
        // line 440
        echo "
";
        // line 441
        $this->displayBlock('button_row', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('choice_row', $context, $blocks);
        // line 451
        echo "
";
        // line 452
        $this->displayBlock('date_row', $context, $blocks);
        // line 456
        echo "
";
        // line 457
        $this->displayBlock('time_row', $context, $blocks);
        // line 461
        echo "
";
        // line 462
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('radio_row', $context, $blocks);
        // line 480
        echo "
";
        // line 482
        echo "
";
        // line 483
        $this->displayBlock('form_errors', $context, $blocks);
        // line 512
        echo "

";
        // line 515
        echo "
";
        // line 516
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 546
        echo "
";
        // line 547
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 31
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? null)) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 61
        echo "    </div>";
    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 74
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        // line 88
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 93
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 100
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 101
                echo "</div>";
            }
        }
    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        // line 107
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 112
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 115
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 116
                echo "</div>";
            }
        }
    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 149
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 160
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 171
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 182
        echo "<li>
        ";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
                    ";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 193
            echo "                    ";
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
            echo "
                    ";
            // line 203
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                echo "                    ";
                $context["child"] = $context["item"];
                // line 213
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
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
            // line 215
            echo "</ul>
        ";
        }
        // line 217
        echo "    </li>";
    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        // line 221
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 223
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>
        ";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
";
    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        // line 247
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 259
            echo "
            ";
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 262
                echo "            ";
            }
            // line 263
            echo "
            ";
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 265
            echo "
            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? null)))));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "
        ";
        // line 269
        if ( !($context["hide_locales"] ?? null)) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>
        ";
        }
        // line 288
        echo "    </div>";
    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 305
    public function block_date_range_widget($context, array $blocks = array())
    {
        // line 306
        echo "  ";
        ob_start();
        // line 307
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'widget');
        echo "
    ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", array()), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_search_and_reset_widget($context, array $blocks = array())
    {
        // line 313
        echo "    ";
        ob_start();
        // line 314
        echo "        <button type=\"submit\"
                class=\"btn btn-primary d-block\"
                title=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "\"
                name=\"";
        // line 317
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "
        </button>

        ";
        // line 323
        if (($context["show_reset_button"] ?? null)) {
            // line 324
            echo "            <button type=\"reset\"
                    name=\"";
            // line 325
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block\"
                    data-url=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-url", array(), "array"), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-redirect", array(), "array"), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Global"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 334
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 337
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 338
        echo "    ";
        ob_start();
        // line 339
        echo "    <span class=\"ps-switch\">
        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 341
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 342
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 343
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 350
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        // line 351
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 355
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 367
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 382
    public function block_form_label($context, array $blocks = array())
    {
        // line 383
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 384
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 387
    public function block_choice_label($context, array $blocks = array())
    {
        // line 389
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 390
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 393
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 394
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 397
    public function block_radio_label($context, array $blocks = array())
    {
        // line 398
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 401
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 402
        echo "    ";
        // line 403
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 404
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 405
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 406
                echo "      ";
            }
            // line 407
            echo "      ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 408
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 409
                echo "      ";
            }
            // line 410
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 411
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 412
                echo "      ";
            }
            // line 413
            echo "
      ";
            // line 414
            if ((isset($context["material_design"]) || array_key_exists("material_design", $context))) {
                // line 415
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 417
                echo ($context["widget"] ?? null);
                // line 418
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 419
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 420
                echo "</label>
        </div>
      ";
            } else {
                // line 423
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 424
                echo ($context["widget"] ?? null);
                // line 425
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 426
                echo "</label>
      ";
            }
            // line 428
            echo "    ";
        }
    }

    // line 433
    public function block_form_row($context, array $blocks = array())
    {
        // line 434
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 438
        echo "</div>";
    }

    // line 441
    public function block_button_row($context, array $blocks = array())
    {
        // line 442
        echo "<div class=\"form-group\">";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 444
        echo "</div>";
    }

    // line 447
    public function block_choice_row($context, array $blocks = array())
    {
        // line 448
        $context["force_error"] = true;
        // line 449
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 452
    public function block_date_row($context, array $blocks = array())
    {
        // line 453
        $context["force_error"] = true;
        // line 454
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 457
    public function block_time_row($context, array $blocks = array())
    {
        // line 458
        $context["force_error"] = true;
        // line 459
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 462
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 463
        $context["force_error"] = true;
        // line 464
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 467
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 468
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 470
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 471
        echo "</div>";
    }

    // line 474
    public function block_radio_row($context, array $blocks = array())
    {
        // line 475
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 478
        echo "</div>";
    }

    // line 483
    public function block_form_errors($context, array $blocks = array())
    {
        // line 484
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 485
            echo "<div class=\"alert alert-danger\">";
            // line 486
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 487
                echo "<ul class=\"alert-text\">";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 489
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 490
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 491
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 492
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 493
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                echo "</ul>";
            } else {
                // line 498
                echo "<div class=\"alert-text\">";
                // line 499
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 500
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 501
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 502
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 503
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 504
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 507
                echo "</div>";
            }
            // line 509
            echo "</div>";
        }
    }

    // line 516
    public function block_material_choice_table_widget($context, array $blocks = array())
    {
        // line 517
        echo "  ";
        ob_start();
        // line 518
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 535
            echo "          <tr>
            <td>
              ";
            // line 537
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("material_design" => true));
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 547
    public function block_material_multiple_choice_table_widget($context, array $blocks = array())
    {
        // line 548
        echo "  ";
        ob_start();
        // line 549
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 553
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 555
            echo "              <th class=\"text-center\">
                ";
            // line 556
            if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                // line 557
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 559
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 562
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 565
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
                echo "
                ";
            }
            // line 567
            echo "              </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 573
            echo "          <tr>
            <td>
              ";
            // line 575
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 577
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 578
                echo "              <td class=\"text-center\">
                ";
                // line 579
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], array(), "array", false, true), $context["child_choice_name"], array(), "array", true, true)) {
                    // line 580
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], array(), "array"), $context["child_choice_name"], array(), "array");
                    // line 581
                    echo "
                  ";
                    // line 582
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                        // line 583
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), array(), "array"), 'widget', array("material_design" => true));
                        echo "
                  ";
                    } else {
                        // line 585
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), array(), "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 587
                    echo "                ";
                } else {
                    // line 588
                    echo "                  --
                ";
                }
                // line 590
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1678 => 594,  1671 => 592,  1664 => 590,  1660 => 588,  1657 => 587,  1651 => 585,  1645 => 583,  1643 => 582,  1640 => 581,  1637 => 580,  1635 => 579,  1632 => 578,  1628 => 577,  1623 => 575,  1619 => 573,  1615 => 572,  1610 => 569,  1595 => 567,  1589 => 565,  1583 => 562,  1577 => 559,  1573 => 557,  1571 => 556,  1568 => 555,  1551 => 554,  1547 => 553,  1541 => 549,  1538 => 548,  1535 => 547,  1527 => 541,  1517 => 537,  1513 => 535,  1509 => 534,  1499 => 527,  1488 => 518,  1485 => 517,  1482 => 516,  1477 => 509,  1474 => 507,  1467 => 504,  1465 => 503,  1464 => 502,  1463 => 501,  1461 => 500,  1457 => 499,  1455 => 498,  1452 => 496,  1445 => 493,  1443 => 492,  1442 => 491,  1441 => 490,  1439 => 489,  1435 => 488,  1433 => 487,  1431 => 486,  1429 => 485,  1427 => 484,  1424 => 483,  1420 => 478,  1418 => 477,  1416 => 476,  1410 => 475,  1407 => 474,  1403 => 471,  1401 => 470,  1399 => 469,  1393 => 468,  1390 => 467,  1386 => 464,  1384 => 463,  1381 => 462,  1377 => 459,  1375 => 458,  1372 => 457,  1368 => 454,  1366 => 453,  1363 => 452,  1359 => 449,  1357 => 448,  1354 => 447,  1350 => 444,  1348 => 443,  1346 => 442,  1343 => 441,  1339 => 438,  1337 => 437,  1335 => 436,  1333 => 435,  1327 => 434,  1324 => 433,  1319 => 428,  1315 => 426,  1313 => 425,  1311 => 424,  1296 => 423,  1291 => 420,  1289 => 419,  1287 => 418,  1285 => 417,  1271 => 416,  1268 => 415,  1266 => 414,  1263 => 413,  1260 => 412,  1257 => 411,  1254 => 410,  1251 => 409,  1248 => 408,  1245 => 407,  1242 => 406,  1239 => 405,  1236 => 404,  1233 => 403,  1231 => 402,  1228 => 401,  1224 => 398,  1221 => 397,  1217 => 394,  1214 => 393,  1210 => 390,  1208 => 389,  1205 => 387,  1201 => 384,  1199 => 383,  1196 => 382,  1187 => 373,  1170 => 370,  1166 => 369,  1162 => 368,  1159 => 367,  1142 => 366,  1136 => 362,  1132 => 361,  1128 => 360,  1120 => 355,  1114 => 352,  1109 => 351,  1106 => 350,  1099 => 345,  1081 => 343,  1063 => 342,  1060 => 341,  1043 => 340,  1040 => 339,  1037 => 338,  1034 => 337,  1029 => 334,  1023 => 331,  1017 => 328,  1013 => 327,  1008 => 325,  1005 => 324,  1003 => 323,  997 => 320,  991 => 317,  987 => 316,  983 => 314,  980 => 313,  977 => 312,  970 => 308,  965 => 307,  962 => 306,  959 => 305,  940 => 295,  937 => 294,  934 => 293,  931 => 292,  928 => 291,  924 => 288,  919 => 285,  908 => 283,  904 => 282,  900 => 281,  894 => 278,  889 => 276,  881 => 270,  879 => 269,  876 => 268,  868 => 266,  865 => 265,  863 => 264,  860 => 263,  857 => 262,  854 => 261,  852 => 260,  849 => 259,  846 => 258,  843 => 257,  839 => 256,  834 => 254,  831 => 253,  827 => 250,  824 => 248,  822 => 247,  819 => 246,  813 => 242,  804 => 239,  800 => 238,  781 => 237,  777 => 236,  773 => 234,  769 => 232,  759 => 228,  751 => 227,  748 => 226,  744 => 225,  741 => 224,  739 => 223,  735 => 222,  730 => 221,  727 => 220,  723 => 217,  719 => 215,  702 => 213,  699 => 212,  682 => 211,  679 => 210,  676 => 209,  672 => 206,  666 => 204,  664 => 203,  660 => 202,  652 => 201,  648 => 199,  644 => 196,  638 => 194,  635 => 193,  630 => 191,  625 => 189,  623 => 188,  615 => 187,  611 => 185,  608 => 184,  606 => 183,  603 => 182,  600 => 181,  595 => 177,  578 => 175,  561 => 174,  558 => 173,  552 => 171,  549 => 170,  544 => 166,  542 => 165,  540 => 164,  537 => 162,  535 => 161,  533 => 160,  530 => 159,  525 => 155,  523 => 154,  521 => 153,  518 => 151,  516 => 150,  514 => 149,  511 => 148,  506 => 144,  500 => 141,  499 => 140,  498 => 139,  494 => 138,  490 => 137,  487 => 135,  481 => 132,  480 => 131,  479 => 130,  475 => 129,  473 => 128,  471 => 127,  468 => 126,  464 => 123,  462 => 122,  459 => 121,  453 => 116,  450 => 115,  442 => 114,  437 => 112,  435 => 111,  433 => 110,  430 => 108,  428 => 107,  425 => 106,  419 => 101,  417 => 100,  415 => 98,  414 => 97,  413 => 96,  412 => 95,  407 => 93,  405 => 92,  403 => 91,  400 => 89,  398 => 88,  395 => 87,  390 => 83,  388 => 82,  386 => 81,  384 => 80,  382 => 79,  378 => 78,  376 => 77,  373 => 75,  371 => 74,  368 => 73,  361 => 67,  359 => 66,  357 => 65,  354 => 64,  350 => 61,  344 => 58,  341 => 57,  339 => 56,  337 => 55,  331 => 52,  328 => 51,  325 => 50,  323 => 49,  320 => 48,  317 => 47,  313 => 44,  311 => 43,  308 => 42,  304 => 39,  302 => 38,  299 => 37,  295 => 34,  292 => 32,  290 => 31,  287 => 30,  283 => 547,  280 => 546,  278 => 516,  275 => 515,  271 => 512,  269 => 483,  266 => 482,  263 => 480,  261 => 474,  258 => 473,  256 => 467,  253 => 466,  251 => 462,  248 => 461,  246 => 457,  243 => 456,  241 => 452,  238 => 451,  236 => 447,  233 => 446,  231 => 441,  228 => 440,  226 => 433,  223 => 432,  220 => 430,  218 => 401,  215 => 400,  213 => 397,  210 => 396,  208 => 393,  205 => 392,  203 => 387,  200 => 386,  198 => 382,  195 => 381,  192 => 379,  190 => 350,  187 => 349,  185 => 337,  182 => 336,  180 => 312,  177 => 311,  175 => 305,  172 => 304,  170 => 291,  167 => 290,  165 => 253,  162 => 252,  160 => 246,  157 => 245,  155 => 220,  152 => 219,  150 => 181,  147 => 180,  145 => 170,  142 => 169,  140 => 159,  137 => 158,  135 => 148,  132 => 147,  130 => 126,  127 => 125,  125 => 121,  122 => 120,  120 => 106,  117 => 105,  115 => 87,  112 => 86,  110 => 73,  107 => 72,  105 => 64,  102 => 63,  100 => 47,  97 => 46,  95 => 42,  92 => 41,  90 => 37,  87 => 36,  85 => 30,  82 => 29,  79 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "C:\\Programs\\XAMPP\\htdocs\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\bootstrap_4_layout.html.twig");
    }
}
