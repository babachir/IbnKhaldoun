<?php

/* PublicBundle:Article:read.html.twig */
class __TwigTemplate_57809b5ea40bd0958027bf22f1dc59c56f5c3b179e4028d4ddf4ceab80b1d8d4 extends Twig_Template
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
        $__internal_529dd0619e526b8e55b41f9aac37cc9bdf7287bfc21ab704b93185ef489644e7 = $this->env->getExtension("native_profiler");
        $__internal_529dd0619e526b8e55b41f9aac37cc9bdf7287bfc21ab704b93185ef489644e7->enter($__internal_529dd0619e526b8e55b41f9aac37cc9bdf7287bfc21ab704b93185ef489644e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Article:read.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529dd0619e526b8e55b41f9aac37cc9bdf7287bfc21ab704b93185ef489644e7->leave($__internal_529dd0619e526b8e55b41f9aac37cc9bdf7287bfc21ab704b93185ef489644e7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff74c71758de3354b1e3260bc6c2fec9a4bb3b8907c01ebb04e699aacf8618f8 = $this->env->getExtension("native_profiler");
        $__internal_ff74c71758de3354b1e3260bc6c2fec9a4bb3b8907c01ebb04e699aacf8618f8->enter($__internal_ff74c71758de3354b1e3260bc6c2fec9a4bb3b8907c01ebb04e699aacf8618f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "read! ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_ff74c71758de3354b1e3260bc6c2fec9a4bb3b8907c01ebb04e699aacf8618f8->leave($__internal_ff74c71758de3354b1e3260bc6c2fec9a4bb3b8907c01ebb04e699aacf8618f8_prof);

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
