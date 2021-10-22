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

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_c212f6328889881947d8fe536246c1b7e7aa13cacb653012948a1b028f1ef447 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('time_widget', $context, $blocks);
        // line 104
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 142
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 166
        echo "
";
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_label', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('button_row', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('choice_row', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('date_row', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('time_row', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")) . " form-control"))]);
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["prepend"] =  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["money_pattern"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "{{") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["money_pattern"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "}}") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 28
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-inline"))]);
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 41), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 42), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 45), "year", [], "any", true, true, false, 45)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 45), "year", [], "any", false, false, false, 45), 'label');
            }
            // line 46
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 46), "month", [], "any", true, true, false, 46)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 46), "month", [], "any", false, false, false, 46), 'label');
            }
            // line 47
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 47), "day", [], "any", true, true, false, 47)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 47), "day", [], "any", false, false, false, 47), 'label');
            }
            // line 48
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 48), "hour", [], "any", true, true, false, 48)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 48), "hour", [], "any", false, false, false, 48), 'label');
            }
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 49), "minute", [], "any", true, true, false, 49)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 49), "minute", [], "any", false, false, false, 49), 'label');
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 50), "second", [], "any", true, true, false, 50)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 53), 'widget', ["datetime" => true]);
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 54), 'widget', ["datetime" => true]);
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 63), "")) : ("")) . " form-inline"))]);
            // line 64
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 65
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            if ( !(($context["label"] ?? null) === false)) {
                // line 68
                echo "<div class=\"sr-only\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 69), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 70), 'label');
                echo "
                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 71), 'label');
                echo "
            </div>";
            }
            // line 75
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 76), 'widget'), "{{ month }}" =>             // line 77
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 77), 'widget'), "{{ day }}" =>             // line 78
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 78), 'widget')]);
            // line 80
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 81
                echo "</div>";
            }
        }
    }

    // line 86
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 88
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 90
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 90), "")) : ("")) . " form-inline"))]);
            // line 91
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 92
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 94
            if ( !(($context["label"] ?? null) === false)) {
                echo "<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 94), 'label');
                echo "</div>";
            }
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 95), 'widget');
            // line 96
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 96), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 96), 'widget');
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 97), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 97), 'widget');
            }
            // line 98
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 99
                echo "</div>";
            }
        }
    }

    // line 104
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 106
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 108
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 108)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 108), "")) : ("")) . " form-inline"))]);
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 111
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 112
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 115
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 115), 'label');
                echo "</th>";
            }
            // line 116
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 116), 'label');
                echo "</th>";
            }
            // line 117
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 117), 'label');
                echo "</th>";
            }
            // line 118
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 118), 'label');
                echo "</th>";
            }
            // line 119
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 119), 'label');
                echo "</th>";
            }
            // line 120
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 120), 'label');
                echo "</th>";
            }
            // line 121
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 121), 'label');
                echo "</th>";
            }
            // line 122
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 126
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 126), 'widget');
                echo "</td>";
            }
            // line 127
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 127), 'widget');
                echo "</td>";
            }
            // line 128
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 128), 'widget');
                echo "</td>";
            }
            // line 129
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 129), 'widget');
                echo "</td>";
            }
            // line 130
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 130), 'widget');
                echo "</td>";
            }
            // line 131
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 131), 'widget');
                echo "</td>";
            }
            // line 132
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 132), 'widget');
                echo "</td>";
            }
            // line 133
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 137
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 137), 'widget');
            }
            // line 138
            echo "</div>";
        }
    }

    // line 142
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 143), "")) : ("")) . " form-control"))]);
        // line 144
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 147
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 148), "")) : ("")))) {
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 150
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 151
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 151)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 151), "")) : ("")), "translation_domain" =>                 // line 152
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 156
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 159
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 159), "")) : ("")), "translation_domain" =>                 // line 160
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "</div>";
        }
    }

    // line 169
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 171), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => ""]))]);
        // line 172
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 175
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 179
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 185
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "<div class=\"form-group\">";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 188
        echo "</div>";
    }

    // line 191
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        $context["force_error"] = true;
        // line 193
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 196
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        $context["force_error"] = true;
        // line 198
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 201
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 206
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  634 => 208,  632 => 207,  628 => 206,  624 => 203,  622 => 202,  618 => 201,  614 => 198,  612 => 197,  608 => 196,  604 => 193,  602 => 192,  598 => 191,  594 => 188,  592 => 187,  590 => 186,  586 => 185,  582 => 180,  578 => 179,  574 => 176,  570 => 175,  566 => 172,  564 => 171,  560 => 169,  555 => 163,  549 => 160,  548 => 159,  547 => 158,  543 => 157,  539 => 156,  532 => 152,  531 => 151,  530 => 150,  526 => 149,  524 => 148,  520 => 147,  516 => 144,  514 => 143,  510 => 142,  505 => 138,  501 => 137,  496 => 133,  490 => 132,  484 => 131,  478 => 130,  472 => 129,  466 => 128,  460 => 127,  454 => 126,  449 => 122,  443 => 121,  437 => 120,  431 => 119,  425 => 118,  419 => 117,  413 => 116,  407 => 115,  402 => 112,  399 => 111,  397 => 110,  393 => 109,  391 => 108,  388 => 106,  386 => 105,  382 => 104,  376 => 99,  374 => 98,  364 => 97,  354 => 96,  352 => 95,  346 => 94,  341 => 92,  339 => 91,  337 => 90,  334 => 88,  332 => 87,  328 => 86,  322 => 81,  320 => 80,  318 => 78,  317 => 77,  316 => 76,  315 => 75,  310 => 71,  306 => 70,  302 => 69,  299 => 68,  297 => 67,  292 => 65,  290 => 64,  288 => 63,  285 => 61,  283 => 60,  279 => 59,  274 => 55,  272 => 54,  270 => 53,  268 => 51,  264 => 50,  260 => 49,  256 => 48,  252 => 47,  248 => 46,  244 => 45,  242 => 44,  240 => 42,  238 => 41,  234 => 40,  232 => 39,  229 => 37,  227 => 36,  223 => 35,  218 => 31,  216 => 30,  214 => 29,  210 => 28,  205 => 24,  201 => 22,  195 => 20,  193 => 19,  191 => 18,  185 => 16,  183 => 15,  178 => 14,  175 => 13,  172 => 12,  170 => 11,  166 => 10,  162 => 7,  160 => 6,  156 => 5,  152 => 206,  149 => 205,  147 => 201,  144 => 200,  142 => 196,  139 => 195,  137 => 191,  134 => 190,  132 => 185,  129 => 184,  126 => 182,  124 => 179,  121 => 178,  119 => 175,  116 => 174,  114 => 169,  111 => 168,  108 => 166,  106 => 147,  103 => 146,  101 => 142,  99 => 104,  97 => 86,  94 => 85,  92 => 59,  89 => 58,  87 => 35,  84 => 34,  82 => 28,  79 => 27,  77 => 10,  74 => 9,  72 => 5,  69 => 4,  66 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_base_layout.html.twig", "/home/deb116267/domains/aazaa.org/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
