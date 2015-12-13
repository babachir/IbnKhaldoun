<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e519eafc434e1a37d19732b45a8a41d26c4402cb72491e28beced71d607f08d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a0e3843ef32ca9dee5f767836895fde5a6505cc9d31e32b3cb1d706810e69c = $this->env->getExtension("native_profiler");
        $__internal_f6a0e3843ef32ca9dee5f767836895fde5a6505cc9d31e32b3cb1d706810e69c->enter($__internal_f6a0e3843ef32ca9dee5f767836895fde5a6505cc9d31e32b3cb1d706810e69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a0e3843ef32ca9dee5f767836895fde5a6505cc9d31e32b3cb1d706810e69c->leave($__internal_f6a0e3843ef32ca9dee5f767836895fde5a6505cc9d31e32b3cb1d706810e69c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71ae49f9ab682352d292260f5251b7501ab1489950514c6627d6ae766e26cdfa = $this->env->getExtension("native_profiler");
        $__internal_71ae49f9ab682352d292260f5251b7501ab1489950514c6627d6ae766e26cdfa->enter($__internal_71ae49f9ab682352d292260f5251b7501ab1489950514c6627d6ae766e26cdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71ae49f9ab682352d292260f5251b7501ab1489950514c6627d6ae766e26cdfa->leave($__internal_71ae49f9ab682352d292260f5251b7501ab1489950514c6627d6ae766e26cdfa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_422d883181d9d7a13b7d0888ce92bd8b201b0a0f46f50a690e988b01adc89062 = $this->env->getExtension("native_profiler");
        $__internal_422d883181d9d7a13b7d0888ce92bd8b201b0a0f46f50a690e988b01adc89062->enter($__internal_422d883181d9d7a13b7d0888ce92bd8b201b0a0f46f50a690e988b01adc89062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_422d883181d9d7a13b7d0888ce92bd8b201b0a0f46f50a690e988b01adc89062->leave($__internal_422d883181d9d7a13b7d0888ce92bd8b201b0a0f46f50a690e988b01adc89062_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd50383556b8c788739acc4421f17e79458ea68b3b3a8bf6e0ddfa9c52e3e3d2 = $this->env->getExtension("native_profiler");
        $__internal_bd50383556b8c788739acc4421f17e79458ea68b3b3a8bf6e0ddfa9c52e3e3d2->enter($__internal_bd50383556b8c788739acc4421f17e79458ea68b3b3a8bf6e0ddfa9c52e3e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd50383556b8c788739acc4421f17e79458ea68b3b3a8bf6e0ddfa9c52e3e3d2->leave($__internal_bd50383556b8c788739acc4421f17e79458ea68b3b3a8bf6e0ddfa9c52e3e3d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
