<?php

/* AdminBundle:Article:update.html.twig */
class __TwigTemplate_3ba351047ad933819bf66f2c4261a07fd169771cc90d77ff72c57fd56a0ec2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:update.html.twig", 1);
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
        $__internal_23f2aa09c03627a3c64f51e7953b70c5fc19025879d5156f8c778bf9047b0098 = $this->env->getExtension("native_profiler");
        $__internal_23f2aa09c03627a3c64f51e7953b70c5fc19025879d5156f8c778bf9047b0098->enter($__internal_23f2aa09c03627a3c64f51e7953b70c5fc19025879d5156f8c778bf9047b0098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f2aa09c03627a3c64f51e7953b70c5fc19025879d5156f8c778bf9047b0098->leave($__internal_23f2aa09c03627a3c64f51e7953b70c5fc19025879d5156f8c778bf9047b0098_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f8bec7c9e1bd3f21e91cfcf180f8be5e1abe00e68b476b2a48e60ff4cb574b0 = $this->env->getExtension("native_profiler");
        $__internal_6f8bec7c9e1bd3f21e91cfcf180f8be5e1abe00e68b476b2a48e60ff4cb574b0->enter($__internal_6f8bec7c9e1bd3f21e91cfcf180f8be5e1abe00e68b476b2a48e60ff4cb574b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello update article from admin
";
        
        $__internal_6f8bec7c9e1bd3f21e91cfcf180f8be5e1abe00e68b476b2a48e60ff4cb574b0->leave($__internal_6f8bec7c9e1bd3f21e91cfcf180f8be5e1abe00e68b476b2a48e60ff4cb574b0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:update.html.twig";
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
/*     hello update article from admin*/
/* {% endblock body %}*/
