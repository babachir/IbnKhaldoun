<?php

/* AdminBundle:Article:create_img.html.twig */
class __TwigTemplate_f1b677bfef04c88f8de5b5ce7450c8d39aad053ace96e33f0f739914682acb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:create_img.html.twig", 1);
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
        $__internal_9b39b966f63081786f0fffef8ed1b3a8ef5212fa2cb835448ddadbcd543ab81c = $this->env->getExtension("native_profiler");
        $__internal_9b39b966f63081786f0fffef8ed1b3a8ef5212fa2cb835448ddadbcd543ab81c->enter($__internal_9b39b966f63081786f0fffef8ed1b3a8ef5212fa2cb835448ddadbcd543ab81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:create_img.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b39b966f63081786f0fffef8ed1b3a8ef5212fa2cb835448ddadbcd543ab81c->leave($__internal_9b39b966f63081786f0fffef8ed1b3a8ef5212fa2cb835448ddadbcd543ab81c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1bfe23d6842c6ec15513ff6048d3cede69232adae24c2efc5ac5307fa7d75e = $this->env->getExtension("native_profiler");
        $__internal_6d1bfe23d6842c6ec15513ff6048d3cede69232adae24c2efc5ac5307fa7d75e->enter($__internal_6d1bfe23d6842c6ec15513ff6048d3cede69232adae24c2efc5ac5307fa7d75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_6d1bfe23d6842c6ec15513ff6048d3cede69232adae24c2efc5ac5307fa7d75e->leave($__internal_6d1bfe23d6842c6ec15513ff6048d3cede69232adae24c2efc5ac5307fa7d75e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:create_img.html.twig";
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
/*     {{ form(form) }}*/
/* {% endblock body %}*/
