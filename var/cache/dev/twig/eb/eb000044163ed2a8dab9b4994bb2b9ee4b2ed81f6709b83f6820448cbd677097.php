<?php

/* AdminBundle:Article:create.html.twig */
class __TwigTemplate_51befdd08a41921877e896f41c5af6e232790e0f426bd8d649bc16863a7270d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:create.html.twig", 1);
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
        $__internal_ed6a2389b429876719bbd235153d587f751f3e25fd5f61a1047ff239aad512bd = $this->env->getExtension("native_profiler");
        $__internal_ed6a2389b429876719bbd235153d587f751f3e25fd5f61a1047ff239aad512bd->enter($__internal_ed6a2389b429876719bbd235153d587f751f3e25fd5f61a1047ff239aad512bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6a2389b429876719bbd235153d587f751f3e25fd5f61a1047ff239aad512bd->leave($__internal_ed6a2389b429876719bbd235153d587f751f3e25fd5f61a1047ff239aad512bd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc5f799053f173ad687c5a757191d062b5840a1927547e5f3a0ccf7c7951d6e = $this->env->getExtension("native_profiler");
        $__internal_7dc5f799053f173ad687c5a757191d062b5840a1927547e5f3a0ccf7c7951d6e->enter($__internal_7dc5f799053f173ad687c5a757191d062b5840a1927547e5f3a0ccf7c7951d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_7dc5f799053f173ad687c5a757191d062b5840a1927547e5f3a0ccf7c7951d6e->leave($__internal_7dc5f799053f173ad687c5a757191d062b5840a1927547e5f3a0ccf7c7951d6e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:create.html.twig";
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
