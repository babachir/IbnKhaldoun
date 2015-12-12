<?php

/* ::public.html.twig */
class __TwigTemplate_a2cfbb99abd42a4848af49ee61184cf1eacbb51ed07d6991086ed41935dccaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc7231e1b480837dccbe1ceaffbac0653d95e0e7c6a38c3efaa8862981e59ea = $this->env->getExtension("native_profiler");
        $__internal_0fc7231e1b480837dccbe1ceaffbac0653d95e0e7c6a38c3efaa8862981e59ea->enter($__internal_0fc7231e1b480837dccbe1ceaffbac0653d95e0e7c6a38c3efaa8862981e59ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::public.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0fc7231e1b480837dccbe1ceaffbac0653d95e0e7c6a38c3efaa8862981e59ea->leave($__internal_0fc7231e1b480837dccbe1ceaffbac0653d95e0e7c6a38c3efaa8862981e59ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51bfbd8063344b4ecb50f924cb33176a240e08d26973a0a895caa18dba9d36e5 = $this->env->getExtension("native_profiler");
        $__internal_51bfbd8063344b4ecb50f924cb33176a240e08d26973a0a895caa18dba9d36e5->enter($__internal_51bfbd8063344b4ecb50f924cb33176a240e08d26973a0a895caa18dba9d36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51bfbd8063344b4ecb50f924cb33176a240e08d26973a0a895caa18dba9d36e5->leave($__internal_51bfbd8063344b4ecb50f924cb33176a240e08d26973a0a895caa18dba9d36e5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ed9e54a1b312b9c4797b656f85c6700ed986ca0fb4d8a95d863423302f162c0 = $this->env->getExtension("native_profiler");
        $__internal_4ed9e54a1b312b9c4797b656f85c6700ed986ca0fb4d8a95d863423302f162c0->enter($__internal_4ed9e54a1b312b9c4797b656f85c6700ed986ca0fb4d8a95d863423302f162c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ed9e54a1b312b9c4797b656f85c6700ed986ca0fb4d8a95d863423302f162c0->leave($__internal_4ed9e54a1b312b9c4797b656f85c6700ed986ca0fb4d8a95d863423302f162c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d111d11bd714a1abbe48eca165fda43ea7afa7558ec07e5b4651045ee5ea5c6 = $this->env->getExtension("native_profiler");
        $__internal_9d111d11bd714a1abbe48eca165fda43ea7afa7558ec07e5b4651045ee5ea5c6->enter($__internal_9d111d11bd714a1abbe48eca165fda43ea7afa7558ec07e5b4651045ee5ea5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d111d11bd714a1abbe48eca165fda43ea7afa7558ec07e5b4651045ee5ea5c6->leave($__internal_9d111d11bd714a1abbe48eca165fda43ea7afa7558ec07e5b4651045ee5ea5c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4251df9fa01d5adec2800a84b22d88ad039336c08202bce7e3e989b9d950489e = $this->env->getExtension("native_profiler");
        $__internal_4251df9fa01d5adec2800a84b22d88ad039336c08202bce7e3e989b9d950489e->enter($__internal_4251df9fa01d5adec2800a84b22d88ad039336c08202bce7e3e989b9d950489e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4251df9fa01d5adec2800a84b22d88ad039336c08202bce7e3e989b9d950489e->leave($__internal_4251df9fa01d5adec2800a84b22d88ad039336c08202bce7e3e989b9d950489e_prof);

    }

    public function getTemplateName()
    {
        return "::public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
