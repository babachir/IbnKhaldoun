<?php

/* AdminBundle:Article:update.html.twig */
class __TwigTemplate_0520b0d046bf3de3027703611eaf0bb566473ccade10cfe922a589251adb44bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Article:update.html.twig", 1);
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
        $__internal_6d939bd84e199fd4c069adbeaaa64d002753e49875c2319cd4444f635cbde4f1 = $this->env->getExtension("native_profiler");
        $__internal_6d939bd84e199fd4c069adbeaaa64d002753e49875c2319cd4444f635cbde4f1->enter($__internal_6d939bd84e199fd4c069adbeaaa64d002753e49875c2319cd4444f635cbde4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Article:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d939bd84e199fd4c069adbeaaa64d002753e49875c2319cd4444f635cbde4f1->leave($__internal_6d939bd84e199fd4c069adbeaaa64d002753e49875c2319cd4444f635cbde4f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6a9ba24b59d91ebd9e0d1f89b72f588bbec095a2a63bce4e1618056eb560a9 = $this->env->getExtension("native_profiler");
        $__internal_ec6a9ba24b59d91ebd9e0d1f89b72f588bbec095a2a63bce4e1618056eb560a9->enter($__internal_ec6a9ba24b59d91ebd9e0d1f89b72f588bbec095a2a63bce4e1618056eb560a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    hello update article from admin
";
        
        $__internal_ec6a9ba24b59d91ebd9e0d1f89b72f588bbec095a2a63bce4e1618056eb560a9->leave($__internal_ec6a9ba24b59d91ebd9e0d1f89b72f588bbec095a2a63bce4e1618056eb560a9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Article:update.html.twig";
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
/*     hello update article from admin*/
/* {% endblock body %}*/
