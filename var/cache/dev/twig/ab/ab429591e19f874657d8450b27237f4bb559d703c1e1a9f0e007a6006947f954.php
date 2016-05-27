<?php

/* base-login.html.twig */
class __TwigTemplate_f45d210dd4d1fdee0ee9b3f41e622a8e508567fe65db7b12c9cf667f83c3a2a8 extends Twig_Template
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
        $__internal_86ac1dbd75392db32c14308a5dff1e5a7bb43db8944b38589d54452f5ddd3e3d = $this->env->getExtension("native_profiler");
        $__internal_86ac1dbd75392db32c14308a5dff1e5a7bb43db8944b38589d54452f5ddd3e3d->enter($__internal_86ac1dbd75392db32c14308a5dff1e5a7bb43db8944b38589d54452f5ddd3e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base-login.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>";
        
        $__internal_86ac1dbd75392db32c14308a5dff1e5a7bb43db8944b38589d54452f5ddd3e3d->leave($__internal_86ac1dbd75392db32c14308a5dff1e5a7bb43db8944b38589d54452f5ddd3e3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62226b06a40cbd9615d2c727aa073e910386d37def33a8d077f7c60b3ed84f2a = $this->env->getExtension("native_profiler");
        $__internal_62226b06a40cbd9615d2c727aa073e910386d37def33a8d077f7c60b3ed84f2a->enter($__internal_62226b06a40cbd9615d2c727aa073e910386d37def33a8d077f7c60b3ed84f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administración de Aulas";
        
        $__internal_62226b06a40cbd9615d2c727aa073e910386d37def33a8d077f7c60b3ed84f2a->leave($__internal_62226b06a40cbd9615d2c727aa073e910386d37def33a8d077f7c60b3ed84f2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d8fa2208c42f894ac0587b1e013cdc1888274799984966405060f9a0e7a1480 = $this->env->getExtension("native_profiler");
        $__internal_4d8fa2208c42f894ac0587b1e013cdc1888274799984966405060f9a0e7a1480->enter($__internal_4d8fa2208c42f894ac0587b1e013cdc1888274799984966405060f9a0e7a1480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4d8fa2208c42f894ac0587b1e013cdc1888274799984966405060f9a0e7a1480->leave($__internal_4d8fa2208c42f894ac0587b1e013cdc1888274799984966405060f9a0e7a1480_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e248352cf4b7b789ef8855d309b9d4f2015d718aa2dcdd382bc44fcd9c6cc57 = $this->env->getExtension("native_profiler");
        $__internal_7e248352cf4b7b789ef8855d309b9d4f2015d718aa2dcdd382bc44fcd9c6cc57->enter($__internal_7e248352cf4b7b789ef8855d309b9d4f2015d718aa2dcdd382bc44fcd9c6cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        
        $__internal_7e248352cf4b7b789ef8855d309b9d4f2015d718aa2dcdd382bc44fcd9c6cc57->leave($__internal_7e248352cf4b7b789ef8855d309b9d4f2015d718aa2dcdd382bc44fcd9c6cc57_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8b32aa6249233917e49fe6b4426481afbce1e9fb7116b39c4638173e86c4899 = $this->env->getExtension("native_profiler");
        $__internal_a8b32aa6249233917e49fe6b4426481afbce1e9fb7116b39c4638173e86c4899->enter($__internal_a8b32aa6249233917e49fe6b4426481afbce1e9fb7116b39c4638173e86c4899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a8b32aa6249233917e49fe6b4426481afbce1e9fb7116b39c4638173e86c4899->leave($__internal_a8b32aa6249233917e49fe6b4426481afbce1e9fb7116b39c4638173e86c4899_prof);

    }

    public function getTemplateName()
    {
        return "base-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  114 => 17,  109 => 16,  103 => 15,  96 => 14,  90 => 13,  81 => 8,  76 => 7,  70 => 6,  58 => 5,  50 => 20,  47 => 15,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Administración de Aulas{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-1.11.3.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootbox.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
