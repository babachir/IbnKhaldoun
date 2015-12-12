<?php

/* base.html.twig */
class __TwigTemplate_e71886b8bce9759a991dbd8ec92a5c434920ab810c599ba4cbb3f09cda3b84ae extends Twig_Template
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
        $__internal_e0379d1733208697f10dd0c8a8b957d41c73bed339cd4e7561c1b4efdba6cdfd = $this->env->getExtension("native_profiler");
        $__internal_e0379d1733208697f10dd0c8a8b957d41c73bed339cd4e7561c1b4efdba6cdfd->enter($__internal_e0379d1733208697f10dd0c8a8b957d41c73bed339cd4e7561c1b4efdba6cdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e0379d1733208697f10dd0c8a8b957d41c73bed339cd4e7561c1b4efdba6cdfd->leave($__internal_e0379d1733208697f10dd0c8a8b957d41c73bed339cd4e7561c1b4efdba6cdfd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e10e25242e86d47ddb953a3c8e238b4196bc981525a3ab6c6c9a1a8dde88767 = $this->env->getExtension("native_profiler");
        $__internal_4e10e25242e86d47ddb953a3c8e238b4196bc981525a3ab6c6c9a1a8dde88767->enter($__internal_4e10e25242e86d47ddb953a3c8e238b4196bc981525a3ab6c6c9a1a8dde88767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4e10e25242e86d47ddb953a3c8e238b4196bc981525a3ab6c6c9a1a8dde88767->leave($__internal_4e10e25242e86d47ddb953a3c8e238b4196bc981525a3ab6c6c9a1a8dde88767_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b38f45f85897c3bafad8a0110aea003005c918bb347d89d969fd9dde47fff07 = $this->env->getExtension("native_profiler");
        $__internal_5b38f45f85897c3bafad8a0110aea003005c918bb347d89d969fd9dde47fff07->enter($__internal_5b38f45f85897c3bafad8a0110aea003005c918bb347d89d969fd9dde47fff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b38f45f85897c3bafad8a0110aea003005c918bb347d89d969fd9dde47fff07->leave($__internal_5b38f45f85897c3bafad8a0110aea003005c918bb347d89d969fd9dde47fff07_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2346c23d9cd0d071d1a3d0a8ba12e909b7e5646831872cb50833050e9db32942 = $this->env->getExtension("native_profiler");
        $__internal_2346c23d9cd0d071d1a3d0a8ba12e909b7e5646831872cb50833050e9db32942->enter($__internal_2346c23d9cd0d071d1a3d0a8ba12e909b7e5646831872cb50833050e9db32942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2346c23d9cd0d071d1a3d0a8ba12e909b7e5646831872cb50833050e9db32942->leave($__internal_2346c23d9cd0d071d1a3d0a8ba12e909b7e5646831872cb50833050e9db32942_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_044b33e375c062715a6f3113961e59addce7a2d936d34c65412e5a4afee1693f = $this->env->getExtension("native_profiler");
        $__internal_044b33e375c062715a6f3113961e59addce7a2d936d34c65412e5a4afee1693f->enter($__internal_044b33e375c062715a6f3113961e59addce7a2d936d34c65412e5a4afee1693f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_044b33e375c062715a6f3113961e59addce7a2d936d34c65412e5a4afee1693f->leave($__internal_044b33e375c062715a6f3113961e59addce7a2d936d34c65412e5a4afee1693f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
