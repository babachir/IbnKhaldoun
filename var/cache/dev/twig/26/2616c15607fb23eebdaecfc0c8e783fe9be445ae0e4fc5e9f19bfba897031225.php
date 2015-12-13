<?php

/* AdminBundle:Article:test.html.twig */
class __TwigTemplate_f16c6da92514ef4ae7ef54f59dbd11451ae071e58af5210258c847a30b1dc590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:test.html.twig", 1);
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
        $__internal_09cbaab9ab34f6f04eaf3cd62f004f0f27a38e7364453358c178dbf08f7ed293 = $this->env->getExtension("native_profiler");
        $__internal_09cbaab9ab34f6f04eaf3cd62f004f0f27a38e7364453358c178dbf08f7ed293->enter($__internal_09cbaab9ab34f6f04eaf3cd62f004f0f27a38e7364453358c178dbf08f7ed293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09cbaab9ab34f6f04eaf3cd62f004f0f27a38e7364453358c178dbf08f7ed293->leave($__internal_09cbaab9ab34f6f04eaf3cd62f004f0f27a38e7364453358c178dbf08f7ed293_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a16cf8b4084fc0bba415bd9554e89771e51a9b439c7b69ebd75ffbb361d72c0 = $this->env->getExtension("native_profiler");
        $__internal_5a16cf8b4084fc0bba415bd9554e89771e51a9b439c7b69ebd75ffbb361d72c0->enter($__internal_5a16cf8b4084fc0bba415bd9554e89771e51a9b439c7b69ebd75ffbb361d72c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <!-- afichier l'artribut email de l'objet administrateur q'uon a reçu du controleur-->
    <!--  { { administrateur.email  -->
";
        
        $__internal_5a16cf8b4084fc0bba415bd9554e89771e51a9b439c7b69ebd75ffbb361d72c0->leave($__internal_5a16cf8b4084fc0bba415bd9554e89771e51a9b439c7b69ebd75ffbb361d72c0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::admin.html.twig'%}*/
/* {% block body %}*/
/* */
/*     {{ form(form) }}*/
/* */
/*     <!-- afichier l'artribut email de l'objet administrateur q'uon a reçu du controleur-->*/
/*     <!--  { { administrateur.email  -->*/
/* {% endblock body %}*/
