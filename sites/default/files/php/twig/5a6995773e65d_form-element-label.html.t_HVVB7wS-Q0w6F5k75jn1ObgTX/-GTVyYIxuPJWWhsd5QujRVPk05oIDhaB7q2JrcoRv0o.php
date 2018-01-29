<?php

/* themes/custom/ive/templates/form-element-label.html.twig */
class __TwigTemplate_60e6bb6aec66ddcf133b1226dd6069a34a56a018a578f341d0a96044be1e007d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf12fa1b1d82bee2d8d63c4d16e6422b3f30518d43af97bc4f5bbcfa4eff6a9 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf12fa1b1d82bee2d8d63c4d16e6422b3f30518d43af97bc4f5bbcfa4eff6a9->enter($__internal_0bf12fa1b1d82bee2d8d63c4d16e6422b3f30518d43af97bc4f5bbcfa4eff6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/ive/templates/form-element-label.html.twig"));

        $tags = array("set" => 16, "if" => 23, "trans" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["classes"] = array(0 => (((        // line 17
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 1 => (((        // line 18
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")));
        // line 23
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 24
            echo "<label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
    ";
            // line 25
            if (($context["required"] ?? null)) {
                // line 26
                echo "      <span class=\"obligatoire\">";
                echo t("(required)", array());
                echo "</span>
    ";
            }
            // line 28
            echo "  </label>";
        }
        
        $__internal_0bf12fa1b1d82bee2d8d63c4d16e6422b3f30518d43af97bc4f5bbcfa4eff6a9->leave($__internal_0bf12fa1b1d82bee2d8d63c4d16e6422b3f30518d43af97bc4f5bbcfa4eff6a9_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/ive/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  62 => 26,  60 => 25,  53 => 24,  51 => 23,  49 => 19,  48 => 18,  47 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for a form element label.
 *
 * Available variables:
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - required: An indicator for whether the associated form element is required.
 * - attributes: A list of HTML attributes for the label.
 *
 * @see template_preprocess_form_element_label()
 */
#}
{%
  set classes = [
    title_display == 'after' ? 'option',
    title_display == 'invisible' ? 'visually-hidden',
    required ? 'js-form-required',

  ]
%}
{% if title is not empty or required -%}
  <label{{ attributes.addClass(classes) }}>{{ title }}
    {% if required %}
      <span class=\"obligatoire\">{% trans %}(required){% endtrans %}</span>
    {% endif %}
  </label>
{%- endif %}
", "themes/custom/ive/templates/form-element-label.html.twig", "/var/www/user5.d8.lab/htdocs/local-dev/themes/custom/ive/templates/form-element-label.html.twig");
    }
}
