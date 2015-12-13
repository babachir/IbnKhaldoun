<?php

/* AdminBundle:Article:create_localisation.html.twig */
class __TwigTemplate_f40b375bd03cc0d31fad74d7df44f8e7bf71f47817ecf32199f0502f7db1f0ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:create_localisation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_014e8dc655aae66c5932c9a63e69cb3158144a1842e74d86a7a0cf811a36becd = $this->env->getExtension("native_profiler");
        $__internal_014e8dc655aae66c5932c9a63e69cb3158144a1842e74d86a7a0cf811a36becd->enter($__internal_014e8dc655aae66c5932c9a63e69cb3158144a1842e74d86a7a0cf811a36becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:create_localisation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014e8dc655aae66c5932c9a63e69cb3158144a1842e74d86a7a0cf811a36becd->leave($__internal_014e8dc655aae66c5932c9a63e69cb3158144a1842e74d86a7a0cf811a36becd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf347660a7b798c1a4399ded4e9080fc9886dc40bdaae3408eb3ebce79ab63f1 = $this->env->getExtension("native_profiler");
        $__internal_bf347660a7b798c1a4399ded4e9080fc9886dc40bdaae3408eb3ebce79ab63f1->enter($__internal_bf347660a7b798c1a4399ded4e9080fc9886dc40bdaae3408eb3ebce79ab63f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_bf347660a7b798c1a4399ded4e9080fc9886dc40bdaae3408eb3ebce79ab63f1->leave($__internal_bf347660a7b798c1a4399ded4e9080fc9886dc40bdaae3408eb3ebce79ab63f1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:create_localisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::admin.html.twig'%}*/
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock body %}*/
