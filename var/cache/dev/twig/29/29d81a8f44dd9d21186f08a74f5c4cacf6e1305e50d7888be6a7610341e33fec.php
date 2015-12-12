<?php

/* AdminBundle:Article:create.html.twig */
class __TwigTemplate_91d42714692fe373f5bb1be9291e461f4bb037582aaf13221db199f20b37ea56 extends Twig_Template
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
        $__internal_c9595ff034fb250e55b979473406966629f9e8d92ebb7c7e8ac3dbb0379d5bca = $this->env->getExtension("native_profiler");
        $__internal_c9595ff034fb250e55b979473406966629f9e8d92ebb7c7e8ac3dbb0379d5bca->enter($__internal_c9595ff034fb250e55b979473406966629f9e8d92ebb7c7e8ac3dbb0379d5bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9595ff034fb250e55b979473406966629f9e8d92ebb7c7e8ac3dbb0379d5bca->leave($__internal_c9595ff034fb250e55b979473406966629f9e8d92ebb7c7e8ac3dbb0379d5bca_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c846f28db0559ba35e32925c57c95c7ebc319761083fc30727d10391314b59e = $this->env->getExtension("native_profiler");
        $__internal_5c846f28db0559ba35e32925c57c95c7ebc319761083fc30727d10391314b59e->enter($__internal_5c846f28db0559ba35e32925c57c95c7ebc319761083fc30727d10391314b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello create article from admin
";
        
        $__internal_5c846f28db0559ba35e32925c57c95c7ebc319761083fc30727d10391314b59e->leave($__internal_5c846f28db0559ba35e32925c57c95c7ebc319761083fc30727d10391314b59e_prof);

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
/*     hello create article from admin*/
/* {% endblock body %}*/
