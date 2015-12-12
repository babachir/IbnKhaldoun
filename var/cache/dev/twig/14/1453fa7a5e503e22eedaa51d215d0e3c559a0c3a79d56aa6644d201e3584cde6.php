<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26e11594040d11c0f56a3e5a219c011e95bc6c4497dd62b2bc3e007ec167ce78 extends Twig_Template
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
        $__internal_4c3bd5690e7db3a78d60ea05bc738fffafcbec6947df6db0e63e8c0e41655b9b = $this->env->getExtension("native_profiler");
        $__internal_4c3bd5690e7db3a78d60ea05bc738fffafcbec6947df6db0e63e8c0e41655b9b->enter($__internal_4c3bd5690e7db3a78d60ea05bc738fffafcbec6947df6db0e63e8c0e41655b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3bd5690e7db3a78d60ea05bc738fffafcbec6947df6db0e63e8c0e41655b9b->leave($__internal_4c3bd5690e7db3a78d60ea05bc738fffafcbec6947df6db0e63e8c0e41655b9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92dd8a47a8db1e8af25af7a3ffb1a9411f0d4e08879421277248f8f6b0ee9c68 = $this->env->getExtension("native_profiler");
        $__internal_92dd8a47a8db1e8af25af7a3ffb1a9411f0d4e08879421277248f8f6b0ee9c68->enter($__internal_92dd8a47a8db1e8af25af7a3ffb1a9411f0d4e08879421277248f8f6b0ee9c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92dd8a47a8db1e8af25af7a3ffb1a9411f0d4e08879421277248f8f6b0ee9c68->leave($__internal_92dd8a47a8db1e8af25af7a3ffb1a9411f0d4e08879421277248f8f6b0ee9c68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9700e5a235d4e27d26afd408ae8494eeb623b81e8d947e1b4c1451112bebe59e = $this->env->getExtension("native_profiler");
        $__internal_9700e5a235d4e27d26afd408ae8494eeb623b81e8d947e1b4c1451112bebe59e->enter($__internal_9700e5a235d4e27d26afd408ae8494eeb623b81e8d947e1b4c1451112bebe59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9700e5a235d4e27d26afd408ae8494eeb623b81e8d947e1b4c1451112bebe59e->leave($__internal_9700e5a235d4e27d26afd408ae8494eeb623b81e8d947e1b4c1451112bebe59e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18877d068ad5039c6724f8627b3f0759e5a0d0d9a2a20d83940bdcbf17b0bfcf = $this->env->getExtension("native_profiler");
        $__internal_18877d068ad5039c6724f8627b3f0759e5a0d0d9a2a20d83940bdcbf17b0bfcf->enter($__internal_18877d068ad5039c6724f8627b3f0759e5a0d0d9a2a20d83940bdcbf17b0bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18877d068ad5039c6724f8627b3f0759e5a0d0d9a2a20d83940bdcbf17b0bfcf->leave($__internal_18877d068ad5039c6724f8627b3f0759e5a0d0d9a2a20d83940bdcbf17b0bfcf_prof);

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
