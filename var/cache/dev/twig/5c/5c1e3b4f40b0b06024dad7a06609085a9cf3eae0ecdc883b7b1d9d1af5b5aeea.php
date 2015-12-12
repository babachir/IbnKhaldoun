<?php

/* PublicBundle:IbnkhaldounMap:map.html.twig */
class __TwigTemplate_0460e6707415b30a1388974a6b330a633147c5a4644475c27871003a64188191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PublicBundle:IbnkhaldounMap:map.html.twig", 1);
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
        $__internal_b81890e1a6e0981a087a39bc10c4cae92aa63e994d349f141f65dde476ba9328 = $this->env->getExtension("native_profiler");
        $__internal_b81890e1a6e0981a087a39bc10c4cae92aa63e994d349f141f65dde476ba9328->enter($__internal_b81890e1a6e0981a087a39bc10c4cae92aa63e994d349f141f65dde476ba9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:IbnkhaldounMap:map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81890e1a6e0981a087a39bc10c4cae92aa63e994d349f141f65dde476ba9328->leave($__internal_b81890e1a6e0981a087a39bc10c4cae92aa63e994d349f141f65dde476ba9328_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdb0f690479e06114e12242039c54c0fcc96aea8f42f52af2ed11f0ea9eec34a = $this->env->getExtension("native_profiler");
        $__internal_bdb0f690479e06114e12242039c54c0fcc96aea8f42f52af2ed11f0ea9eec34a->enter($__internal_bdb0f690479e06114e12242039c54c0fcc96aea8f42f52af2ed11f0ea9eec34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Map!
";
        
        $__internal_bdb0f690479e06114e12242039c54c0fcc96aea8f42f52af2ed11f0ea9eec34a->leave($__internal_bdb0f690479e06114e12242039c54c0fcc96aea8f42f52af2ed11f0ea9eec34a_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:IbnkhaldounMap:map.html.twig";
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
/* Map!*/
/* {% endblock body %}*/
