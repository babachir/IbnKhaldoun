<?php

/* PublicBundle:Article:index.html.twig */
class __TwigTemplate_6fa8a2206c6e5069624980c8b6205076d695417c7d3aefda21dc23c85ffdce12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PublicBundle:Article:index.html.twig", 1);
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
        $__internal_5bc39ff881e9a4d20e321afaf96177dc27ea7d07fa32dd9db83cc695b3d62326 = $this->env->getExtension("native_profiler");
        $__internal_5bc39ff881e9a4d20e321afaf96177dc27ea7d07fa32dd9db83cc695b3d62326->enter($__internal_5bc39ff881e9a4d20e321afaf96177dc27ea7d07fa32dd9db83cc695b3d62326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc39ff881e9a4d20e321afaf96177dc27ea7d07fa32dd9db83cc695b3d62326->leave($__internal_5bc39ff881e9a4d20e321afaf96177dc27ea7d07fa32dd9db83cc695b3d62326_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_376c6bbbd7689785b2c272414b0c859026df8f9360f061f003c2d0d384c3fb91 = $this->env->getExtension("native_profiler");
        $__internal_376c6bbbd7689785b2c272414b0c859026df8f9360f061f003c2d0d384c3fb91->enter($__internal_376c6bbbd7689785b2c272414b0c859026df8f9360f061f003c2d0d384c3fb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Article!
";
        
        $__internal_376c6bbbd7689785b2c272414b0c859026df8f9360f061f003c2d0d384c3fb91->leave($__internal_376c6bbbd7689785b2c272414b0c859026df8f9360f061f003c2d0d384c3fb91_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Article:index.html.twig";
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
/* Article!*/
/* {% endblock body %}*/
