<?php

/* ::base.html.twig */
class __TwigTemplate_a8eb6f265dc75d2935ef42bba3bf55b9aefd9560cffd3b103481155da6245df3 extends Twig_Template
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
        $__internal_0b603e7a7f2f77685330f42735f3eca4d6b29702a2e853c6aead4b205c430449 = $this->env->getExtension("native_profiler");
        $__internal_0b603e7a7f2f77685330f42735f3eca4d6b29702a2e853c6aead4b205c430449->enter($__internal_0b603e7a7f2f77685330f42735f3eca4d6b29702a2e853c6aead4b205c430449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0b603e7a7f2f77685330f42735f3eca4d6b29702a2e853c6aead4b205c430449->leave($__internal_0b603e7a7f2f77685330f42735f3eca4d6b29702a2e853c6aead4b205c430449_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8043a91c387e1aeaaf8a74952bd8ff4221a8c3aa92f33dffb06675e532b0290d = $this->env->getExtension("native_profiler");
        $__internal_8043a91c387e1aeaaf8a74952bd8ff4221a8c3aa92f33dffb06675e532b0290d->enter($__internal_8043a91c387e1aeaaf8a74952bd8ff4221a8c3aa92f33dffb06675e532b0290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8043a91c387e1aeaaf8a74952bd8ff4221a8c3aa92f33dffb06675e532b0290d->leave($__internal_8043a91c387e1aeaaf8a74952bd8ff4221a8c3aa92f33dffb06675e532b0290d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2584fd704f58cccd715383dcebd67e712a95bbb19faa690f90ce0510801c0d02 = $this->env->getExtension("native_profiler");
        $__internal_2584fd704f58cccd715383dcebd67e712a95bbb19faa690f90ce0510801c0d02->enter($__internal_2584fd704f58cccd715383dcebd67e712a95bbb19faa690f90ce0510801c0d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2584fd704f58cccd715383dcebd67e712a95bbb19faa690f90ce0510801c0d02->leave($__internal_2584fd704f58cccd715383dcebd67e712a95bbb19faa690f90ce0510801c0d02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b6800dac3cfc9411baf8d06fe928d0633e7791c61a18b00a306c678b68275d = $this->env->getExtension("native_profiler");
        $__internal_20b6800dac3cfc9411baf8d06fe928d0633e7791c61a18b00a306c678b68275d->enter($__internal_20b6800dac3cfc9411baf8d06fe928d0633e7791c61a18b00a306c678b68275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20b6800dac3cfc9411baf8d06fe928d0633e7791c61a18b00a306c678b68275d->leave($__internal_20b6800dac3cfc9411baf8d06fe928d0633e7791c61a18b00a306c678b68275d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b54c3ba26fbab1bc51faad4134816afea7584bfda94f7093495078d7818ca217 = $this->env->getExtension("native_profiler");
        $__internal_b54c3ba26fbab1bc51faad4134816afea7584bfda94f7093495078d7818ca217->enter($__internal_b54c3ba26fbab1bc51faad4134816afea7584bfda94f7093495078d7818ca217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b54c3ba26fbab1bc51faad4134816afea7584bfda94f7093495078d7818ca217->leave($__internal_b54c3ba26fbab1bc51faad4134816afea7584bfda94f7093495078d7818ca217_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
