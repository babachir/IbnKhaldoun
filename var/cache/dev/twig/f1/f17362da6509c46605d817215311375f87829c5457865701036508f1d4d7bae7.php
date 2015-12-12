<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44b86f36f49959f064d58d8304f36169ab042c8d7f890a112e4fd88ffda0a1a4 extends Twig_Template
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
        $__internal_412e5d9503002b406b8b4a7ca45c23ca229e09971325413abcc17d49ef5cd771 = $this->env->getExtension("native_profiler");
        $__internal_412e5d9503002b406b8b4a7ca45c23ca229e09971325413abcc17d49ef5cd771->enter($__internal_412e5d9503002b406b8b4a7ca45c23ca229e09971325413abcc17d49ef5cd771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412e5d9503002b406b8b4a7ca45c23ca229e09971325413abcc17d49ef5cd771->leave($__internal_412e5d9503002b406b8b4a7ca45c23ca229e09971325413abcc17d49ef5cd771_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a158183a1d7e3a674037c4f6cd7450f51c15888ef493cfce32c3717a6e5f836 = $this->env->getExtension("native_profiler");
        $__internal_5a158183a1d7e3a674037c4f6cd7450f51c15888ef493cfce32c3717a6e5f836->enter($__internal_5a158183a1d7e3a674037c4f6cd7450f51c15888ef493cfce32c3717a6e5f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a158183a1d7e3a674037c4f6cd7450f51c15888ef493cfce32c3717a6e5f836->leave($__internal_5a158183a1d7e3a674037c4f6cd7450f51c15888ef493cfce32c3717a6e5f836_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a20ca8c706634f730d95a7c36ce2997bb1c7e0463bcc7b7082d3670f83c049d = $this->env->getExtension("native_profiler");
        $__internal_4a20ca8c706634f730d95a7c36ce2997bb1c7e0463bcc7b7082d3670f83c049d->enter($__internal_4a20ca8c706634f730d95a7c36ce2997bb1c7e0463bcc7b7082d3670f83c049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a20ca8c706634f730d95a7c36ce2997bb1c7e0463bcc7b7082d3670f83c049d->leave($__internal_4a20ca8c706634f730d95a7c36ce2997bb1c7e0463bcc7b7082d3670f83c049d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8f26631e7fc99b7b140a244bc90e1b4fdf0af584fc75b31992cdac5547be5b = $this->env->getExtension("native_profiler");
        $__internal_4c8f26631e7fc99b7b140a244bc90e1b4fdf0af584fc75b31992cdac5547be5b->enter($__internal_4c8f26631e7fc99b7b140a244bc90e1b4fdf0af584fc75b31992cdac5547be5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c8f26631e7fc99b7b140a244bc90e1b4fdf0af584fc75b31992cdac5547be5b->leave($__internal_4c8f26631e7fc99b7b140a244bc90e1b4fdf0af584fc75b31992cdac5547be5b_prof);

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
