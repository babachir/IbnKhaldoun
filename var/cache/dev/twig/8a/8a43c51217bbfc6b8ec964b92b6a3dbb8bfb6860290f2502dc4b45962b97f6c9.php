<?php

/* ::admin.html.twig */
class __TwigTemplate_56cd05aa69cd48a05781f2712718d9e5393cebe4581b8497d6a17a3048575be0 extends Twig_Template
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
        $__internal_d9ac4a9aebecf06517327cfad0d2875b5962b2aa62cb5227daec6ad1cca504ae = $this->env->getExtension("native_profiler");
        $__internal_d9ac4a9aebecf06517327cfad0d2875b5962b2aa62cb5227daec6ad1cca504ae->enter($__internal_d9ac4a9aebecf06517327cfad0d2875b5962b2aa62cb5227daec6ad1cca504ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
        
        $__internal_d9ac4a9aebecf06517327cfad0d2875b5962b2aa62cb5227daec6ad1cca504ae->leave($__internal_d9ac4a9aebecf06517327cfad0d2875b5962b2aa62cb5227daec6ad1cca504ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c3165565953af07f95898126158023cabee6878f6592cc7e08eea11a2236b0c = $this->env->getExtension("native_profiler");
        $__internal_5c3165565953af07f95898126158023cabee6878f6592cc7e08eea11a2236b0c->enter($__internal_5c3165565953af07f95898126158023cabee6878f6592cc7e08eea11a2236b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c3165565953af07f95898126158023cabee6878f6592cc7e08eea11a2236b0c->leave($__internal_5c3165565953af07f95898126158023cabee6878f6592cc7e08eea11a2236b0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4de9dd313979d0e3ba88593be32f81ce2ae2a7e331ceef20616e9a6a2c45b89a = $this->env->getExtension("native_profiler");
        $__internal_4de9dd313979d0e3ba88593be32f81ce2ae2a7e331ceef20616e9a6a2c45b89a->enter($__internal_4de9dd313979d0e3ba88593be32f81ce2ae2a7e331ceef20616e9a6a2c45b89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4de9dd313979d0e3ba88593be32f81ce2ae2a7e331ceef20616e9a6a2c45b89a->leave($__internal_4de9dd313979d0e3ba88593be32f81ce2ae2a7e331ceef20616e9a6a2c45b89a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d87e2044d792f049bf2e74904cf4af39e5a55652e2aa63eabdd74fe723ee81bc = $this->env->getExtension("native_profiler");
        $__internal_d87e2044d792f049bf2e74904cf4af39e5a55652e2aa63eabdd74fe723ee81bc->enter($__internal_d87e2044d792f049bf2e74904cf4af39e5a55652e2aa63eabdd74fe723ee81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d87e2044d792f049bf2e74904cf4af39e5a55652e2aa63eabdd74fe723ee81bc->leave($__internal_d87e2044d792f049bf2e74904cf4af39e5a55652e2aa63eabdd74fe723ee81bc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e6ec8de2679de47feeb170d2ec221de6ceabe7e92332b6e6b9e12f216dd6e80 = $this->env->getExtension("native_profiler");
        $__internal_6e6ec8de2679de47feeb170d2ec221de6ceabe7e92332b6e6b9e12f216dd6e80->enter($__internal_6e6ec8de2679de47feeb170d2ec221de6ceabe7e92332b6e6b9e12f216dd6e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e6ec8de2679de47feeb170d2ec221de6ceabe7e92332b6e6b9e12f216dd6e80->leave($__internal_6e6ec8de2679de47feeb170d2ec221de6ceabe7e92332b6e6b9e12f216dd6e80_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
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
