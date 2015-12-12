<?php

/* AdminBundle:Index:index.html.twig */
class __TwigTemplate_90a4ebb34dfc8dcca0cfbd24d4d6c7c7a966f72e50e571049f65a66a469fa475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Index:index.html.twig", 1);
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
        $__internal_a4ab3bbe6ae58d89b75038612db8df57554f9cefa38977da293013f82c79da18 = $this->env->getExtension("native_profiler");
        $__internal_a4ab3bbe6ae58d89b75038612db8df57554f9cefa38977da293013f82c79da18->enter($__internal_a4ab3bbe6ae58d89b75038612db8df57554f9cefa38977da293013f82c79da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ab3bbe6ae58d89b75038612db8df57554f9cefa38977da293013f82c79da18->leave($__internal_a4ab3bbe6ae58d89b75038612db8df57554f9cefa38977da293013f82c79da18_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1962c8a1acac0b28a815d02ed172f0d5727804dfad21d17de03f08851195cbc2 = $this->env->getExtension("native_profiler");
        $__internal_1962c8a1acac0b28a815d02ed172f0d5727804dfad21d17de03f08851195cbc2->enter($__internal_1962c8a1acac0b28a815d02ed172f0d5727804dfad21d17de03f08851195cbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    IndexAdmin
";
        
        $__internal_1962c8a1acac0b28a815d02ed172f0d5727804dfad21d17de03f08851195cbc2->leave($__internal_1962c8a1acac0b28a815d02ed172f0d5727804dfad21d17de03f08851195cbc2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Index:index.html.twig";
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
/*     IndexAdmin*/
/* {% endblock body %}*/
