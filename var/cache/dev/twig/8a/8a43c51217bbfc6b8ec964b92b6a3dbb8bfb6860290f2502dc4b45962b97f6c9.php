<?php

/* ::admin.html.twig */
class __TwigTemplate_56cd05aa69cd48a05781f2712718d9e5393cebe4581b8497d6a17a3048575be0 extends Twig_Template
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
        $__internal_e46aeea894318f0568ebd9c2bc346d714d4de20997fa21ce2569b10b47d77865 = $this->env->getExtension("native_profiler");
        $__internal_e46aeea894318f0568ebd9c2bc346d714d4de20997fa21ce2569b10b47d77865->enter($__internal_e46aeea894318f0568ebd9c2bc346d714d4de20997fa21ce2569b10b47d77865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
        
        $__internal_e46aeea894318f0568ebd9c2bc346d714d4de20997fa21ce2569b10b47d77865->leave($__internal_e46aeea894318f0568ebd9c2bc346d714d4de20997fa21ce2569b10b47d77865_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d61c4319b8daa40a3755bc535825599345c6d332c328d0228a4b5a4c9be61a21 = $this->env->getExtension("native_profiler");
        $__internal_d61c4319b8daa40a3755bc535825599345c6d332c328d0228a4b5a4c9be61a21->enter($__internal_d61c4319b8daa40a3755bc535825599345c6d332c328d0228a4b5a4c9be61a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d61c4319b8daa40a3755bc535825599345c6d332c328d0228a4b5a4c9be61a21->leave($__internal_d61c4319b8daa40a3755bc535825599345c6d332c328d0228a4b5a4c9be61a21_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28f7fae4a1438355b200a56f25023dfcc09c5af2458c6bab68f17f4a7ec58ee3 = $this->env->getExtension("native_profiler");
        $__internal_28f7fae4a1438355b200a56f25023dfcc09c5af2458c6bab68f17f4a7ec58ee3->enter($__internal_28f7fae4a1438355b200a56f25023dfcc09c5af2458c6bab68f17f4a7ec58ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_28f7fae4a1438355b200a56f25023dfcc09c5af2458c6bab68f17f4a7ec58ee3->leave($__internal_28f7fae4a1438355b200a56f25023dfcc09c5af2458c6bab68f17f4a7ec58ee3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9fdffa184fef1123e73aea668444cb5f2e31ceaa9a2e48bfbc4c4de622e13dd = $this->env->getExtension("native_profiler");
        $__internal_f9fdffa184fef1123e73aea668444cb5f2e31ceaa9a2e48bfbc4c4de622e13dd->enter($__internal_f9fdffa184fef1123e73aea668444cb5f2e31ceaa9a2e48bfbc4c4de622e13dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9fdffa184fef1123e73aea668444cb5f2e31ceaa9a2e48bfbc4c4de622e13dd->leave($__internal_f9fdffa184fef1123e73aea668444cb5f2e31ceaa9a2e48bfbc4c4de622e13dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd4485a28410277b457265315477d96c20ff99705ae7cb470aaeee43d58d9a03 = $this->env->getExtension("native_profiler");
        $__internal_cd4485a28410277b457265315477d96c20ff99705ae7cb470aaeee43d58d9a03->enter($__internal_cd4485a28410277b457265315477d96c20ff99705ae7cb470aaeee43d58d9a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd4485a28410277b457265315477d96c20ff99705ae7cb470aaeee43d58d9a03->leave($__internal_cd4485a28410277b457265315477d96c20ff99705ae7cb470aaeee43d58d9a03_prof);

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
