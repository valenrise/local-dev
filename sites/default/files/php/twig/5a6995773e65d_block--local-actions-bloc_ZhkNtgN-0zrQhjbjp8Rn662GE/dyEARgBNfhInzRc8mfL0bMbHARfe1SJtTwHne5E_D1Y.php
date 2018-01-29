<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_81debda05de8a0993a63e936e7b6c89520d588fc374cb00cf2e7d137991f8767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f6f61e5f2a3e02087de92f5b00de0883d44c58d8bdf4bdc39fe0adac65611d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f6f61e5f2a3e02087de92f5b00de0883d44c58d8bdf4bdc39fe0adac65611d->enter($__internal_31f6f61e5f2a3e02087de92f5b00de0883d44c58d8bdf4bdc39fe0adac65611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f6f61e5f2a3e02087de92f5b00de0883d44c58d8bdf4bdc39fe0adac65611d->leave($__internal_31f6f61e5f2a3e02087de92f5b00de0883d44c58d8bdf4bdc39fe0adac65611d_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_464c060386bb2a8eed4e000a0c7155ccf992e887a0316afd786b200561d8647d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_464c060386bb2a8eed4e000a0c7155ccf992e887a0316afd786b200561d8647d->enter($__internal_464c060386bb2a8eed4e000a0c7155ccf992e887a0316afd786b200561d8647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_464c060386bb2a8eed4e000a0c7155ccf992e887a0316afd786b200561d8647d->leave($__internal_464c060386bb2a8eed4e000a0c7155ccf992e887a0316afd786b200561d8647d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
", "core/themes/seven/templates/block--local-actions-block.html.twig", "/var/www/user5.d8.lab/htdocs/local-dev/core/themes/seven/templates/block--local-actions-block.html.twig");
    }
}
