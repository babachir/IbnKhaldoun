<?php

/* ::public.html.twig */
class __TwigTemplate_1595605f3bab5093b48ea8c4a46ee68a679ec1ad32fe0d1c989de90b722c730f extends Twig_Template
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
        $__internal_6a9903a13a45567b7a1e224de3c18cd4b690df7720662cf448fa9e85b1a4ca24 = $this->env->getExtension("native_profiler");
        $__internal_6a9903a13a45567b7a1e224de3c18cd4b690df7720662cf448fa9e85b1a4ca24->enter($__internal_6a9903a13a45567b7a1e224de3c18cd4b690df7720662cf448fa9e85b1a4ca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::public.html.twig"));

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
        
        $__internal_6a9903a13a45567b7a1e224de3c18cd4b690df7720662cf448fa9e85b1a4ca24->leave($__internal_6a9903a13a45567b7a1e224de3c18cd4b690df7720662cf448fa9e85b1a4ca24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6f2711b6ce97398edaeaa8664f2662241d08057d31364cd8cd2498ae891c9ba = $this->env->getExtension("native_profiler");
        $__internal_e6f2711b6ce97398edaeaa8664f2662241d08057d31364cd8cd2498ae891c9ba->enter($__internal_e6f2711b6ce97398edaeaa8664f2662241d08057d31364cd8cd2498ae891c9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6f2711b6ce97398edaeaa8664f2662241d08057d31364cd8cd2498ae891c9ba->leave($__internal_e6f2711b6ce97398edaeaa8664f2662241d08057d31364cd8cd2498ae891c9ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_835350bf6bb255839c982410ad344eefc4d2a13d5967aee5a93807124866e450 = $this->env->getExtension("native_profiler");
        $__internal_835350bf6bb255839c982410ad344eefc4d2a13d5967aee5a93807124866e450->enter($__internal_835350bf6bb255839c982410ad344eefc4d2a13d5967aee5a93807124866e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_835350bf6bb255839c982410ad344eefc4d2a13d5967aee5a93807124866e450->leave($__internal_835350bf6bb255839c982410ad344eefc4d2a13d5967aee5a93807124866e450_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e33f96b81e0262d89b5f481d002ac9d7154fe9891e86e166c1987c99b2f5e2ca = $this->env->getExtension("native_profiler");
        $__internal_e33f96b81e0262d89b5f481d002ac9d7154fe9891e86e166c1987c99b2f5e2ca->enter($__internal_e33f96b81e0262d89b5f481d002ac9d7154fe9891e86e166c1987c99b2f5e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e33f96b81e0262d89b5f481d002ac9d7154fe9891e86e166c1987c99b2f5e2ca->leave($__internal_e33f96b81e0262d89b5f481d002ac9d7154fe9891e86e166c1987c99b2f5e2ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abc850d19352d7543449d3478236a3ecdc9d88aa20752cf0099401e2a0b857a2 = $this->env->getExtension("native_profiler");
        $__internal_abc850d19352d7543449d3478236a3ecdc9d88aa20752cf0099401e2a0b857a2->enter($__internal_abc850d19352d7543449d3478236a3ecdc9d88aa20752cf0099401e2a0b857a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_abc850d19352d7543449d3478236a3ecdc9d88aa20752cf0099401e2a0b857a2->leave($__internal_abc850d19352d7543449d3478236a3ecdc9d88aa20752cf0099401e2a0b857a2_prof);

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
