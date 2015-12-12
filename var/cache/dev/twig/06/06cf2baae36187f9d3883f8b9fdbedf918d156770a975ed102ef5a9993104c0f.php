<?php

/* PublicBundle:IbnkhaldounMap:index.html.twig */
class __TwigTemplate_2364f0178b78b42c3a1239714b8b1aefd5fef3e7d3bd2a8667b1ceb032a6dbe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PublicBundle:IbnkhaldounMap:index.html.twig", 1);
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
        $__internal_e362f905370e3eec213185e2401368e0540d16b92645a3eba5a77b7f87d2f059 = $this->env->getExtension("native_profiler");
        $__internal_e362f905370e3eec213185e2401368e0540d16b92645a3eba5a77b7f87d2f059->enter($__internal_e362f905370e3eec213185e2401368e0540d16b92645a3eba5a77b7f87d2f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:IbnkhaldounMap:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e362f905370e3eec213185e2401368e0540d16b92645a3eba5a77b7f87d2f059->leave($__internal_e362f905370e3eec213185e2401368e0540d16b92645a3eba5a77b7f87d2f059_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5ef3efd96e99b7dbc42a169791202708408c78b159aed933a3a4e19cf66ece = $this->env->getExtension("native_profiler");
        $__internal_af5ef3efd96e99b7dbc42a169791202708408c78b159aed933a3a4e19cf66ece->enter($__internal_af5ef3efd96e99b7dbc42a169791202708408c78b159aed933a3a4e19cf66ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_af5ef3efd96e99b7dbc42a169791202708408c78b159aed933a3a4e19cf66ece->leave($__internal_af5ef3efd96e99b7dbc42a169791202708408c78b159aed933a3a4e19cf66ece_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:IbnkhaldounMap:index.html.twig";
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
