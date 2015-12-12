<?php

/* PublicBundle:Article:read.html.twig */
class __TwigTemplate_a26c93e93b792b142f92b5b10fe687d02cc4d0f1f46faf9bc2dceb0bcfd647e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::public.html.twig", "PublicBundle:Article:read.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_422773df96558d00bcf01b62d801245b38e28a783b2cb31a419bc3d6fb74c63e = $this->env->getExtension("native_profiler");
        $__internal_422773df96558d00bcf01b62d801245b38e28a783b2cb31a419bc3d6fb74c63e->enter($__internal_422773df96558d00bcf01b62d801245b38e28a783b2cb31a419bc3d6fb74c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Article:read.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422773df96558d00bcf01b62d801245b38e28a783b2cb31a419bc3d6fb74c63e->leave($__internal_422773df96558d00bcf01b62d801245b38e28a783b2cb31a419bc3d6fb74c63e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c808abd722b89af15dff7b0d9729002e957657b2bc314ec798fa9608a5b7a3 = $this->env->getExtension("native_profiler");
        $__internal_e0c808abd722b89af15dff7b0d9729002e957657b2bc314ec798fa9608a5b7a3->enter($__internal_e0c808abd722b89af15dff7b0d9729002e957657b2bc314ec798fa9608a5b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "read! ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_e0c808abd722b89af15dff7b0d9729002e957657b2bc314ec798fa9608a5b7a3->leave($__internal_e0c808abd722b89af15dff7b0d9729002e957657b2bc314ec798fa9608a5b7a3_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Article:read.html.twig";
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
/* {% extends '::public.html.twig'%}*/
/* {% block body %}*/
/* read! {{ id }}*/
/* {% endblock body %}*/
