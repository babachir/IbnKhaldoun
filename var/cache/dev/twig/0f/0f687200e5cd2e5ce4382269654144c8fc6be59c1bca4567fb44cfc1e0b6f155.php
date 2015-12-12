<?php

/* AdminBundle:Article:index.html.twig */
class __TwigTemplate_ca1660c3f1fb0f3d016986ea549f6566f778a84811a264359316fdfaf19fb5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:index.html.twig", 1);
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
        $__internal_6f519e47b98aa2c544c46af26849f78d61cad421af2e05a7e6625198da363488 = $this->env->getExtension("native_profiler");
        $__internal_6f519e47b98aa2c544c46af26849f78d61cad421af2e05a7e6625198da363488->enter($__internal_6f519e47b98aa2c544c46af26849f78d61cad421af2e05a7e6625198da363488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f519e47b98aa2c544c46af26849f78d61cad421af2e05a7e6625198da363488->leave($__internal_6f519e47b98aa2c544c46af26849f78d61cad421af2e05a7e6625198da363488_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc564f4081c39316ad67a4da94b1717f6029e8d9b1d5039133be8f973a68eff = $this->env->getExtension("native_profiler");
        $__internal_afc564f4081c39316ad67a4da94b1717f6029e8d9b1d5039133be8f973a68eff->enter($__internal_afc564f4081c39316ad67a4da94b1717f6029e8d9b1d5039133be8f973a68eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello article from admin
";
        
        $__internal_afc564f4081c39316ad67a4da94b1717f6029e8d9b1d5039133be8f973a68eff->leave($__internal_afc564f4081c39316ad67a4da94b1717f6029e8d9b1d5039133be8f973a68eff_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:index.html.twig";
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
/*     hello article from admin*/
/* {% endblock body %}*/
