<?php

/* core/themes/stable/templates/admin/admin-page.html.twig */
class __TwigTemplate_9b80caa6b3001e91e60885a03bfb79c7bfc3979b7b2df26ca2611b49aa1bf549 extends Twig_Template
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
        $__internal_dc2f57723f4943a884a46bb78b41e2c42d90cbe7d521b596822b20f518a7198b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2f57723f4943a884a46bb78b41e2c42d90cbe7d521b596822b20f518a7198b->enter($__internal_dc2f57723f4943a884a46bb78b41e2c42d90cbe7d521b596822b20f518a7198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/admin-page.html.twig"));

        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        echo "
<div class=\"clearfix\">
  ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["system_compact_link"] ?? null), "html", null, true));
        echo "
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["containers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 19
            echo "    <div class=\"layout-column layout-column--half\">
      ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["container"], "blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 21
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["block"], "html", null, true));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
        
        $__internal_dc2f57723f4943a884a46bb78b41e2c42d90cbe7d521b596822b20f518a7198b->leave($__internal_dc2f57723f4943a884a46bb78b41e2c42d90cbe7d521b596822b20f518a7198b_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 23,  65 => 21,  61 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 15,);
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
 * Theme override for an administrative page.
 *
 * Available variables:
 * - system_compact_link: Themed link to toggle compact view.
 * - containers: An list of administrative blocks keyed by position: left or
 *   right. Contains:
 *   - blocks: A list of blocks within a container.
 *
 * @see template_preprocess_admin_page()
 */
#}

<div class=\"clearfix\">
  {{ system_compact_link }}
  {% for container in containers %}
    <div class=\"layout-column layout-column--half\">
      {% for block in container.blocks %}
        {{ block }}
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "core/themes/stable/templates/admin/admin-page.html.twig", "/var/www/user5.d8.lab/htdocs/local-dev/core/themes/stable/templates/admin/admin-page.html.twig");
    }
}
