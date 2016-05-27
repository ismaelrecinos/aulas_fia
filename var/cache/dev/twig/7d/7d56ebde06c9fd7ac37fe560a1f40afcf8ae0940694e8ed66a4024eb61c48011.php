<?php

/* layout.html.twig */
class __TwigTemplate_9cf303e6029af5bf8fcb7b18dec9246b4c0351e461ab960a7742b5453bbf68ec extends Twig_Template
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
        $__internal_e20d0306e455b5a34e4208f90832c2391f88b2e79ccc30ceaeae7c163872ac34 = $this->env->getExtension("native_profiler");
        $__internal_e20d0306e455b5a34e4208f90832c2391f88b2e79ccc30ceaeae7c163872ac34->enter($__internal_e20d0306e455b5a34e4208f90832c2391f88b2e79ccc30ceaeae7c163872ac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>";
        
        $__internal_e20d0306e455b5a34e4208f90832c2391f88b2e79ccc30ceaeae7c163872ac34->leave($__internal_e20d0306e455b5a34e4208f90832c2391f88b2e79ccc30ceaeae7c163872ac34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83cc09bdd2affd8967db21ff3f903766ff57428f248f15b53821dd79104b1027 = $this->env->getExtension("native_profiler");
        $__internal_83cc09bdd2affd8967db21ff3f903766ff57428f248f15b53821dd79104b1027->enter($__internal_83cc09bdd2affd8967db21ff3f903766ff57428f248f15b53821dd79104b1027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administración de Aulas";
        
        $__internal_83cc09bdd2affd8967db21ff3f903766ff57428f248f15b53821dd79104b1027->leave($__internal_83cc09bdd2affd8967db21ff3f903766ff57428f248f15b53821dd79104b1027_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57ba99d665dfad8cebc6cb05fe81cb2f87915d4395b9dea959adb7c213ed98e0 = $this->env->getExtension("native_profiler");
        $__internal_57ba99d665dfad8cebc6cb05fe81cb2f87915d4395b9dea959adb7c213ed98e0->enter($__internal_57ba99d665dfad8cebc6cb05fe81cb2f87915d4395b9dea959adb7c213ed98e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_57ba99d665dfad8cebc6cb05fe81cb2f87915d4395b9dea959adb7c213ed98e0->leave($__internal_57ba99d665dfad8cebc6cb05fe81cb2f87915d4395b9dea959adb7c213ed98e0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b0723b23738f36e897ce87b7e16d4f54adfec2d5e4a9a12e6091281c2382eaa = $this->env->getExtension("native_profiler");
        $__internal_1b0723b23738f36e897ce87b7e16d4f54adfec2d5e4a9a12e6091281c2382eaa->enter($__internal_1b0723b23738f36e897ce87b7e16d4f54adfec2d5e4a9a12e6091281c2382eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_1b0723b23738f36e897ce87b7e16d4f54adfec2d5e4a9a12e6091281c2382eaa->leave($__internal_1b0723b23738f36e897ce87b7e16d4f54adfec2d5e4a9a12e6091281c2382eaa_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8aaf5d27a5cec22933f9b78c565d1c61d6e85a042c0ad26a2d5ee805b24afae0 = $this->env->getExtension("native_profiler");
        $__internal_8aaf5d27a5cec22933f9b78c565d1c61d6e85a042c0ad26a2d5ee805b24afae0->enter($__internal_8aaf5d27a5cec22933f9b78c565d1c61d6e85a042c0ad26a2d5ee805b24afae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8aaf5d27a5cec22933f9b78c565d1c61d6e85a042c0ad26a2d5ee805b24afae0->leave($__internal_8aaf5d27a5cec22933f9b78c565d1c61d6e85a042c0ad26a2d5ee805b24afae0_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 19,  117 => 18,  112 => 17,  106 => 16,  96 => 14,  90 => 13,  81 => 8,  76 => 7,  70 => 6,  58 => 5,  50 => 21,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/*             {{ include('menu.html.twig') }}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-1.11.3.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootbox.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
