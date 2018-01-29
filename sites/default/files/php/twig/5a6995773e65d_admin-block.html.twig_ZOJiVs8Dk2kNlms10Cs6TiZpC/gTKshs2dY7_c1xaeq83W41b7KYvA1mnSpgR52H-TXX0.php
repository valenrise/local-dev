<?php

/* core/themes/stable/templates/admin/admin-block.html.twig */
class __TwigTemplate_a437d6ecc137ffd2ba3709d123667d228d895929eaa0a3fdb12760720cf4b6f2 extends Twig_Template
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
        $__internal_59b0fb64f28d9a3b2a9930a108189e0d81c8573e5a3e05ba1a795854fd4ba0c5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b0fb64f28d9a3b2a9930a108189e0d81c8573e5a3e05ba1a795854fd4ba0c5->enter($__internal_59b0fb64f28d9a3b2a9930a108189e0d81c8573e5a3e05ba1a795854fd4ba0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/admin-block.html.twig"));

        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo "<div class=\"panel\">
  ";
        // line 16
        if ($this->getAttribute(($context["block"] ?? null), "title", array())) {
            // line 17
            echo "    <h3 class=\"panel__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true));
            echo "</h3>
  ";
        }
        // line 19
        echo "  ";
        if ($this->getAttribute(($context["block"] ?? null), "content", array())) {
            // line 20
            echo "    <div class=\"panel__content\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
            echo "</div>
  ";
        } elseif ($this->getAttribute(        // line 21
($context["block"] ?? null), "description", array())) {
            // line 22
            echo "    <div class=\"panel__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "description", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 24
        echo "</div>
";
        
        $__internal_59b0fb64f28d9a3b2a9930a108189e0d81c8573e5a3e05ba1a795854fd4ba0c5->leave($__internal_59b0fb64f28d9a3b2a9930a108189e0d81c8573e5a3e05ba1a795854fd4ba0c5_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  67 => 22,  65 => 21,  60 => 20,  57 => 19,  51 => 17,  49 => 16,  46 => 15,);
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
 * Theme override for an administrative block.
 *
 * Available variables:
 * - block: An array of information about the block, including:
 *   - show: A flag indicating if the block should be displayed.
 *   - title: The block title.
 *   - content: (optional) The content of the block.
 *   - description: (optional) A description of the block.
 *     (Description should only be output if content is not available).
 */
#}
<div class=\"panel\">
  {% if block.title %}
    <h3 class=\"panel__title\">{{ block.title }}</h3>
  {% endif %}
  {% if block.content %}
    <div class=\"panel__content\">{{ block.content }}</div>
  {% elseif block.description %}
    <div class=\"panel__description\">{{ block.description }}</div>
  {% endif %}
</div>
", "core/themes/stable/templates/admin/admin-block.html.twig", "/var/www/user5.d8.lab/htdocs/local-dev/core/themes/stable/templates/admin/admin-block.html.twig");
    }
}
