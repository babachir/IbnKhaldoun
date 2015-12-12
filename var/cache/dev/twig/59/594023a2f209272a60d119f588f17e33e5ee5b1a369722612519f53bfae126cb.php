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
        $__internal_79449772dae615d0cc69ce2540fdc3a0cbe4fa66657a5204e1a1b9b73508d7c0 = $this->env->getExtension("native_profiler");
        $__internal_79449772dae615d0cc69ce2540fdc3a0cbe4fa66657a5204e1a1b9b73508d7c0->enter($__internal_79449772dae615d0cc69ce2540fdc3a0cbe4fa66657a5204e1a1b9b73508d7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79449772dae615d0cc69ce2540fdc3a0cbe4fa66657a5204e1a1b9b73508d7c0->leave($__internal_79449772dae615d0cc69ce2540fdc3a0cbe4fa66657a5204e1a1b9b73508d7c0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_38e252ad3f4cd19d69c010c99ac182f9d8f76b44ab3e8f1fd64f1daa0d898669 = $this->env->getExtension("native_profiler");
        $__internal_38e252ad3f4cd19d69c010c99ac182f9d8f76b44ab3e8f1fd64f1daa0d898669->enter($__internal_38e252ad3f4cd19d69c010c99ac182f9d8f76b44ab3e8f1fd64f1daa0d898669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    IndexAdmin
";
        
        $__internal_38e252ad3f4cd19d69c010c99ac182f9d8f76b44ab3e8f1fd64f1daa0d898669->leave($__internal_38e252ad3f4cd19d69c010c99ac182f9d8f76b44ab3e8f1fd64f1daa0d898669_prof);

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
