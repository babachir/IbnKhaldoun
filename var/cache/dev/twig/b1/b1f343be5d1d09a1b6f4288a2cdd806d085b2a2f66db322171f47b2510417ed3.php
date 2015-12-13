<?php

/* ::admin.html.twig */
class __TwigTemplate_5104ef6e6f25e0daaf0c653f33352579f59fa51ba2166d08b988cb903eb6bd97 extends Twig_Template
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
        $__internal_535c0739d47c5fae8196a7fcccfe163a3479d6566a8c7c3713825e80b85f4cc2 = $this->env->getExtension("native_profiler");
        $__internal_535c0739d47c5fae8196a7fcccfe163a3479d6566a8c7c3713825e80b85f4cc2->enter($__internal_535c0739d47c5fae8196a7fcccfe163a3479d6566a8c7c3713825e80b85f4cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
        
        $__internal_535c0739d47c5fae8196a7fcccfe163a3479d6566a8c7c3713825e80b85f4cc2->leave($__internal_535c0739d47c5fae8196a7fcccfe163a3479d6566a8c7c3713825e80b85f4cc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85feb370e226f173493c41f419559c6fb4801ecd56ed117b5008142a4f0826c6 = $this->env->getExtension("native_profiler");
        $__internal_85feb370e226f173493c41f419559c6fb4801ecd56ed117b5008142a4f0826c6->enter($__internal_85feb370e226f173493c41f419559c6fb4801ecd56ed117b5008142a4f0826c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_85feb370e226f173493c41f419559c6fb4801ecd56ed117b5008142a4f0826c6->leave($__internal_85feb370e226f173493c41f419559c6fb4801ecd56ed117b5008142a4f0826c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6031865008db119cec07f8439c3780a5fc4e5cd92b8348e42aa1beacf5803def = $this->env->getExtension("native_profiler");
        $__internal_6031865008db119cec07f8439c3780a5fc4e5cd92b8348e42aa1beacf5803def->enter($__internal_6031865008db119cec07f8439c3780a5fc4e5cd92b8348e42aa1beacf5803def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6031865008db119cec07f8439c3780a5fc4e5cd92b8348e42aa1beacf5803def->leave($__internal_6031865008db119cec07f8439c3780a5fc4e5cd92b8348e42aa1beacf5803def_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cc798688a2cc7a787474350461333cb0c59407c7ebc23c0595f257509b9f01f = $this->env->getExtension("native_profiler");
        $__internal_9cc798688a2cc7a787474350461333cb0c59407c7ebc23c0595f257509b9f01f->enter($__internal_9cc798688a2cc7a787474350461333cb0c59407c7ebc23c0595f257509b9f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cc798688a2cc7a787474350461333cb0c59407c7ebc23c0595f257509b9f01f->leave($__internal_9cc798688a2cc7a787474350461333cb0c59407c7ebc23c0595f257509b9f01f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_392a25dc3d1537da8f1a52ff5bbd4390d9d8b33322d64c5d1aa07533bdd30566 = $this->env->getExtension("native_profiler");
        $__internal_392a25dc3d1537da8f1a52ff5bbd4390d9d8b33322d64c5d1aa07533bdd30566->enter($__internal_392a25dc3d1537da8f1a52ff5bbd4390d9d8b33322d64c5d1aa07533bdd30566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_392a25dc3d1537da8f1a52ff5bbd4390d9d8b33322d64c5d1aa07533bdd30566->leave($__internal_392a25dc3d1537da8f1a52ff5bbd4390d9d8b33322d64c5d1aa07533bdd30566_prof);

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
