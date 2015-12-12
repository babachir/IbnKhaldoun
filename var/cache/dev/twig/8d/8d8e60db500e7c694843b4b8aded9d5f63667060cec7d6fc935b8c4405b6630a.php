<?php

/* PublicBundle:Default:index.html.twig */
class __TwigTemplate_6b5d5127bc0c7bbfdef47e52480a64ef099cd202840dc4dc635843380b743766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PublicBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e20c6a017b303117057b69ddb1d238ef1070195ea624ad415aa46afd67ede1a = $this->env->getExtension("native_profiler");
        $__internal_5e20c6a017b303117057b69ddb1d238ef1070195ea624ad415aa46afd67ede1a->enter($__internal_5e20c6a017b303117057b69ddb1d238ef1070195ea624ad415aa46afd67ede1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e20c6a017b303117057b69ddb1d238ef1070195ea624ad415aa46afd67ede1a->leave($__internal_5e20c6a017b303117057b69ddb1d238ef1070195ea624ad415aa46afd67ede1a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_381358daaaca256b840034894acb00abdf1d667d466914ade9ad7eda1da345f1 = $this->env->getExtension("native_profiler");
        $__internal_381358daaaca256b840034894acb00abdf1d667d466914ade9ad7eda1da345f1->enter($__internal_381358daaaca256b840034894acb00abdf1d667d466914ade9ad7eda1da345f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_381358daaaca256b840034894acb00abdf1d667d466914ade9ad7eda1da345f1->leave($__internal_381358daaaca256b840034894acb00abdf1d667d466914ade9ad7eda1da345f1_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:index.html.twig";
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
/* {% extends '::base.html.twig'%}*/
/* {% block body %}*/
/* Hello World!*/
/* {% endblock body %}*/
