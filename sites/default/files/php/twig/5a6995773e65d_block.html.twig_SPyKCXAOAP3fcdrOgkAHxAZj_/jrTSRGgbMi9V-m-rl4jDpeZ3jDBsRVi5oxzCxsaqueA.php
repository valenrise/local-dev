<?php

/* core/themes/classy/templates/block/block.html.twig */
class __TwigTemplate_2b14f98ef4f9bb4b271ccc66dd0a76b118926783c53cb8003b4cd6f01807ce2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41621b8d5ad63031ff0455d85236561c4d7b45c42bd0cd84ff305d47ffa3fb17 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_41621b8d5ad63031ff0455d85236561c4d7b45c42bd0cd84ff305d47ffa3fb17->enter($__internal_41621b8d5ad63031ff0455d85236561c4d7b45c42bd0cd84ff305d47ffa3fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block.html.twig"));

        $tags = array("set" => 29, "if" => 37, "block" => 41);
        $filters = array("clean_class" => 31);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 29
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 32
($context["plugin_id"] ?? null))));
        // line 35
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 37
        if (($context["label"] ?? null)) {
            // line 38
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 40
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "</div>
";
        
        $__internal_41621b8d5ad63031ff0455d85236561c4d7b45c42bd0cd84ff305d47ffa3fb17->leave($__internal_41621b8d5ad63031ff0455d85236561c4d7b45c42bd0cd84ff305d47ffa3fb17_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_1adb48d0788b13d055c1c4958f2a40b3e57b50a1c19d49d7a905fa14a6d942dc = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adb48d0788b13d055c1c4958f2a40b3e57b50a1c19d49d7a905fa14a6d942dc->enter($__internal_1adb48d0788b13d055c1c4958f2a40b3e57b50a1c19d49d7a905fa14a6d942dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_1adb48d0788b13d055c1c4958f2a40b3e57b50a1c19d49d7a905fa14a6d942dc->leave($__internal_1adb48d0788b13d055c1c4958f2a40b3e57b50a1c19d49d7a905fa14a6d942dc_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  85 => 41,  77 => 44,  75 => 41,  70 => 40,  62 => 38,  60 => 37,  56 => 36,  51 => 35,  49 => 32,  48 => 31,  47 => 29,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div>
", "core/themes/classy/templates/block/block.html.twig", "/var/www/user5.d8.lab/htdocs/local-dev/core/themes/classy/templates/block/block.html.twig");
    }
}
