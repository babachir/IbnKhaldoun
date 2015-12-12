<?php

/* AdminBundle:Utilisateur:index.html.twig */
class __TwigTemplate_6e0862c0e0c1c009bb623c30c92d4a4b1a58a6775892c6669609db9b9b3d4155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Utilisateur:index.html.twig", 1);
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
        $__internal_9c617064bf9a4ec4d6edee88a19b6d2665218c705bb815819b33ad86c9ec678d = $this->env->getExtension("native_profiler");
        $__internal_9c617064bf9a4ec4d6edee88a19b6d2665218c705bb815819b33ad86c9ec678d->enter($__internal_9c617064bf9a4ec4d6edee88a19b6d2665218c705bb815819b33ad86c9ec678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utilisateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c617064bf9a4ec4d6edee88a19b6d2665218c705bb815819b33ad86c9ec678d->leave($__internal_9c617064bf9a4ec4d6edee88a19b6d2665218c705bb815819b33ad86c9ec678d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d62e5f58a87efbe4890356bea3ff5cfd8234d0176f878d954e2410cc3fe68a95 = $this->env->getExtension("native_profiler");
        $__internal_d62e5f58a87efbe4890356bea3ff5cfd8234d0176f878d954e2410cc3fe68a95->enter($__internal_d62e5f58a87efbe4890356bea3ff5cfd8234d0176f878d954e2410cc3fe68a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello user from admin
";
        
        $__internal_d62e5f58a87efbe4890356bea3ff5cfd8234d0176f878d954e2410cc3fe68a95->leave($__internal_d62e5f58a87efbe4890356bea3ff5cfd8234d0176f878d954e2410cc3fe68a95_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utilisateur:index.html.twig";
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
/*     hello user from admin*/
/* {% endblock body %}*/
