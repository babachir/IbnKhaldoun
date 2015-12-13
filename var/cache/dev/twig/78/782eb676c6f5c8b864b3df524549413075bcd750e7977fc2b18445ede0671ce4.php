<?php

/* AdminBundle:Index:index.html.twig */
class __TwigTemplate_16b817b4c2dddbfe6fe730ca3e1c2a1e7d4d720b159e785228d5b3ea71463c7b extends Twig_Template
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
        $__internal_c1f6953a9fc0260da420730bfad5a4c4ab96422e2f6dd74b27e587f95df5b297 = $this->env->getExtension("native_profiler");
        $__internal_c1f6953a9fc0260da420730bfad5a4c4ab96422e2f6dd74b27e587f95df5b297->enter($__internal_c1f6953a9fc0260da420730bfad5a4c4ab96422e2f6dd74b27e587f95df5b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f6953a9fc0260da420730bfad5a4c4ab96422e2f6dd74b27e587f95df5b297->leave($__internal_c1f6953a9fc0260da420730bfad5a4c4ab96422e2f6dd74b27e587f95df5b297_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96b7cd1780160041ca1db0a82af859c3aff649f6ccb4d552cfaae5b895f4b8be = $this->env->getExtension("native_profiler");
        $__internal_96b7cd1780160041ca1db0a82af859c3aff649f6ccb4d552cfaae5b895f4b8be->enter($__internal_96b7cd1780160041ca1db0a82af859c3aff649f6ccb4d552cfaae5b895f4b8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    IndexAdmin bonjouuurrr
";
        
        $__internal_96b7cd1780160041ca1db0a82af859c3aff649f6ccb4d552cfaae5b895f4b8be->leave($__internal_96b7cd1780160041ca1db0a82af859c3aff649f6ccb4d552cfaae5b895f4b8be_prof);

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
/*     IndexAdmin bonjouuurrr*/
/* {% endblock body %}*/
