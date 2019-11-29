<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/layouts/field.html.twig */
class __TwigTemplate_cc8b68547679707705696e5718e990d18bcd868fd545f2974b2cf78b043da80e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 2
        echo "<div class=\"form-field ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)), "html", null, true);
        echo twig_escape_filter($this->env, twig_trim_filter(($context["form_field_outer_core"] ?? null)), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->displayBlock('contents', $context, $blocks);
        // line 51
        echo "</div>
";
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($context["show_label"] ?? null)) {
            // line 5
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["layout_form_field_outer_label_classes"] ?? null), "html", null, true);
            echo "\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["form_field_toggleable"] ?? null), "html", null, true);
            // line 7
            echo "<label class=\"";
            echo twig_escape_filter($this->env, ($context["layout_form_field_label_classes"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["form_field_label_trim"] ?? null), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [])) {
                echo "for=\"";
                echo twig_escape_filter($this->env, ($context["form_field_for"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 8
            $this->displayBlock('label', $context, $blocks);
            // line 18
            echo "</label>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["layout_form_field_outer_data_classes"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 23
        echo "    >
      ";
        // line 24
        $this->displayBlock('group', $context, $blocks);
        // line 42
        echo "      ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 43
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["form_field_extra_wrapper_classes"] ?? null), "html", null, true);
            echo "\">
          <span class=\"form-description\">
            ";
            // line 45
            echo ($context["form_field_description"] ?? null);
            echo "
          </span>
        </div>
      ";
        }
        // line 49
        echo "    </div>
  ";
    }

    // line 8
    public function block_label($context, array $blocks = [])
    {
        // line 9
        if (($context["form_field_help"] ?? null)) {
            // line 10
            echo "<span class=\"tooltip\" data-tooltip=\"";
            echo twig_escape_filter($this->env, ($context["form_field_help"] ?? null));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["form_field_label"] ?? null), "html", null, true);
            echo "</span>";
        } else {
            // line 12
            echo twig_escape_filter($this->env, ($context["form_field_label"] ?? null), "html", null, true);
        }
        // line 14
        if (($context["form_field_required"] ?? null)) {
            // line 15
            echo "              <span class=\"required\">*</span>";
        }
    }

    // line 22
    public function block_global_attributes($context, array $blocks = [])
    {
    }

    // line 24
    public function block_group($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->displayBlock('input', $context, $blocks);
        // line 41
        echo "      ";
    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        // line 26
        echo "          <div class=\"";
        echo twig_escape_filter($this->env, ($context["layout_form_field_wrapper_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\">
            ";
        // line 27
        $this->displayBlock('prepend', $context, $blocks);
        // line 28
        echo "            <input
              name=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
              value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "));
        echo "\"
              ";
        // line 31
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 32
        echo "            />
            ";
        // line 33
        $this->displayBlock('append', $context, $blocks);
        // line 34
        echo "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 35
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["form_field_inline_error_classes"] ?? null), "html", null, true);
            echo "\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 36
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
            </div>
            ";
        }
        // line 39
        echo "          </div>
        ";
    }

    // line 27
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 31
    public function block_input_attributes($context, array $blocks = [])
    {
    }

    // line 33
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/layouts/field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 33,  212 => 31,  207 => 27,  202 => 39,  196 => 36,  191 => 35,  188 => 34,  186 => 33,  183 => 32,  181 => 31,  177 => 30,  173 => 29,  170 => 28,  168 => 27,  161 => 26,  158 => 25,  154 => 41,  151 => 25,  148 => 24,  143 => 22,  138 => 15,  136 => 14,  133 => 12,  126 => 10,  124 => 9,  121 => 8,  116 => 49,  109 => 45,  103 => 43,  100 => 42,  98 => 24,  95 => 23,  93 => 22,  88 => 21,  83 => 18,  81 => 8,  70 => 7,  68 => 6,  64 => 5,  61 => 4,  58 => 3,  53 => 51,  51 => 3,  45 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/layouts/field.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/form/templates/forms/layouts/field.html.twig");
    }
}
