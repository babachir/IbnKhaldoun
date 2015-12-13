<?php

/* AdminBundle:Article:read.html.twig */
class __TwigTemplate_0ed9e0011270901a3fbf37f4aa71e8a2016e97207a74c95d3da4be70a04cd4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:read.html.twig", 1);
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
        $__internal_e48c80af912acbbb3e82a6208d4e8a6784b69a191bc3d6dfb8c26243d58e5507 = $this->env->getExtension("native_profiler");
        $__internal_e48c80af912acbbb3e82a6208d4e8a6784b69a191bc3d6dfb8c26243d58e5507->enter($__internal_e48c80af912acbbb3e82a6208d4e8a6784b69a191bc3d6dfb8c26243d58e5507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:read.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48c80af912acbbb3e82a6208d4e8a6784b69a191bc3d6dfb8c26243d58e5507->leave($__internal_e48c80af912acbbb3e82a6208d4e8a6784b69a191bc3d6dfb8c26243d58e5507_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_13666ed9c598d338159f40ece2cbb9afeae15f9421185b34e2aac4e86304968f = $this->env->getExtension("native_profiler");
        $__internal_13666ed9c598d338159f40ece2cbb9afeae15f9421185b34e2aac4e86304968f->enter($__internal_13666ed9c598d338159f40ece2cbb9afeae15f9421185b34e2aac4e86304968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello read article from admin
";
        
        $__internal_13666ed9c598d338159f40ece2cbb9afeae15f9421185b34e2aac4e86304968f->leave($__internal_13666ed9c598d338159f40ece2cbb9afeae15f9421185b34e2aac4e86304968f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:read.html.twig";
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
/*     hello read article from admin*/
/* {% endblock body %}*/
