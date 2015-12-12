<?php

/* AdminBundle:Utilisateur:read.html.twig */
class __TwigTemplate_e7f0afe01b01157be458cdb3ffb8af8bf2fc2ddf6f6a97f49b28ee430656363f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Utilisateur:read.html.twig", 1);
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
        $__internal_5fb93c1c28351705e6ca80a114e8c2afc8831910b65f2ae91f86e99cc17680b1 = $this->env->getExtension("native_profiler");
        $__internal_5fb93c1c28351705e6ca80a114e8c2afc8831910b65f2ae91f86e99cc17680b1->enter($__internal_5fb93c1c28351705e6ca80a114e8c2afc8831910b65f2ae91f86e99cc17680b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utilisateur:read.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb93c1c28351705e6ca80a114e8c2afc8831910b65f2ae91f86e99cc17680b1->leave($__internal_5fb93c1c28351705e6ca80a114e8c2afc8831910b65f2ae91f86e99cc17680b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_66bb30e39bd3ec2cc38e29f85b6b147ad2c9e0f2ac4c3be95e52e51662f9f191 = $this->env->getExtension("native_profiler");
        $__internal_66bb30e39bd3ec2cc38e29f85b6b147ad2c9e0f2ac4c3be95e52e51662f9f191->enter($__internal_66bb30e39bd3ec2cc38e29f85b6b147ad2c9e0f2ac4c3be95e52e51662f9f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello user from admin
";
        
        $__internal_66bb30e39bd3ec2cc38e29f85b6b147ad2c9e0f2ac4c3be95e52e51662f9f191->leave($__internal_66bb30e39bd3ec2cc38e29f85b6b147ad2c9e0f2ac4c3be95e52e51662f9f191_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utilisateur:read.html.twig";
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
/*     hello user from admin*/
/* {% endblock body %}*/
