<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f201109081d49274d3a04078d1361a7eeb1f42d7bb11b350a5f0f3fa7674e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3c1b25ba780ec0e7ca07cb8245489aa8995adebe3a1378821461b6ca51b576a = $this->env->getExtension("native_profiler");
        $__internal_c3c1b25ba780ec0e7ca07cb8245489aa8995adebe3a1378821461b6ca51b576a->enter($__internal_c3c1b25ba780ec0e7ca07cb8245489aa8995adebe3a1378821461b6ca51b576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c1b25ba780ec0e7ca07cb8245489aa8995adebe3a1378821461b6ca51b576a->leave($__internal_c3c1b25ba780ec0e7ca07cb8245489aa8995adebe3a1378821461b6ca51b576a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bb48a4773dadbbd086fba31db467b3d62c9f75f0c96e335f59551b10bd4dd7c = $this->env->getExtension("native_profiler");
        $__internal_9bb48a4773dadbbd086fba31db467b3d62c9f75f0c96e335f59551b10bd4dd7c->enter($__internal_9bb48a4773dadbbd086fba31db467b3d62c9f75f0c96e335f59551b10bd4dd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bb48a4773dadbbd086fba31db467b3d62c9f75f0c96e335f59551b10bd4dd7c->leave($__internal_9bb48a4773dadbbd086fba31db467b3d62c9f75f0c96e335f59551b10bd4dd7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b370ceefd94e398377c6b0ec1c5c740f20a61945cb203205c0e688b9e06082fd = $this->env->getExtension("native_profiler");
        $__internal_b370ceefd94e398377c6b0ec1c5c740f20a61945cb203205c0e688b9e06082fd->enter($__internal_b370ceefd94e398377c6b0ec1c5c740f20a61945cb203205c0e688b9e06082fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b370ceefd94e398377c6b0ec1c5c740f20a61945cb203205c0e688b9e06082fd->leave($__internal_b370ceefd94e398377c6b0ec1c5c740f20a61945cb203205c0e688b9e06082fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7bfc50d33a5ffed8836288b14c819f2608e4939257ec13579e23678add1a809 = $this->env->getExtension("native_profiler");
        $__internal_f7bfc50d33a5ffed8836288b14c819f2608e4939257ec13579e23678add1a809->enter($__internal_f7bfc50d33a5ffed8836288b14c819f2608e4939257ec13579e23678add1a809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7bfc50d33a5ffed8836288b14c819f2608e4939257ec13579e23678add1a809->leave($__internal_f7bfc50d33a5ffed8836288b14c819f2608e4939257ec13579e23678add1a809_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
