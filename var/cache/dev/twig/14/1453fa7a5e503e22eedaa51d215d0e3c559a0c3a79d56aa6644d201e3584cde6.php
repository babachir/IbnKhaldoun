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
        $__internal_bf20687ae932cc85aa2692edc032a55c65dc322c261cc7d903f1935d099ea970 = $this->env->getExtension("native_profiler");
        $__internal_bf20687ae932cc85aa2692edc032a55c65dc322c261cc7d903f1935d099ea970->enter($__internal_bf20687ae932cc85aa2692edc032a55c65dc322c261cc7d903f1935d099ea970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf20687ae932cc85aa2692edc032a55c65dc322c261cc7d903f1935d099ea970->leave($__internal_bf20687ae932cc85aa2692edc032a55c65dc322c261cc7d903f1935d099ea970_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f6d67753bf51d7b9a459aaf669ebe80a462620b84a56c8fadd203a991b06972 = $this->env->getExtension("native_profiler");
        $__internal_6f6d67753bf51d7b9a459aaf669ebe80a462620b84a56c8fadd203a991b06972->enter($__internal_6f6d67753bf51d7b9a459aaf669ebe80a462620b84a56c8fadd203a991b06972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f6d67753bf51d7b9a459aaf669ebe80a462620b84a56c8fadd203a991b06972->leave($__internal_6f6d67753bf51d7b9a459aaf669ebe80a462620b84a56c8fadd203a991b06972_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dba48beb4b647881513a4aafd50469216657e480c3c992cc7e28fef8bda0439b = $this->env->getExtension("native_profiler");
        $__internal_dba48beb4b647881513a4aafd50469216657e480c3c992cc7e28fef8bda0439b->enter($__internal_dba48beb4b647881513a4aafd50469216657e480c3c992cc7e28fef8bda0439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dba48beb4b647881513a4aafd50469216657e480c3c992cc7e28fef8bda0439b->leave($__internal_dba48beb4b647881513a4aafd50469216657e480c3c992cc7e28fef8bda0439b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e00ab9a14f840f3bf8c72f098260574baf7113af8d6e9f0806d03c79ea6ccaf7 = $this->env->getExtension("native_profiler");
        $__internal_e00ab9a14f840f3bf8c72f098260574baf7113af8d6e9f0806d03c79ea6ccaf7->enter($__internal_e00ab9a14f840f3bf8c72f098260574baf7113af8d6e9f0806d03c79ea6ccaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e00ab9a14f840f3bf8c72f098260574baf7113af8d6e9f0806d03c79ea6ccaf7->leave($__internal_e00ab9a14f840f3bf8c72f098260574baf7113af8d6e9f0806d03c79ea6ccaf7_prof);

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
