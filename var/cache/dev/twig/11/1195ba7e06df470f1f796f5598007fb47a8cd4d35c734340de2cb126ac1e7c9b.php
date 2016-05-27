<?php

/* layout-login.html.twig */
class __TwigTemplate_0df9cb98d391a452e30b4d1c8f0bcff35053fc465efac7a7c24cdf39e3ec3e51 extends Twig_Template
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
        $__internal_c500067059af72cfe66531b8cb2d8e38db79831801cd4f40bc0dd86239c6fe93 = $this->env->getExtension("native_profiler");
        $__internal_c500067059af72cfe66531b8cb2d8e38db79831801cd4f40bc0dd86239c6fe93->enter($__internal_c500067059af72cfe66531b8cb2d8e38db79831801cd4f40bc0dd86239c6fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout-login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"generator\" content=\"Bootply\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
        
        $__internal_c500067059af72cfe66531b8cb2d8e38db79831801cd4f40bc0dd86239c6fe93->leave($__internal_c500067059af72cfe66531b8cb2d8e38db79831801cd4f40bc0dd86239c6fe93_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9618632802b4e1b3b4982d015767e8a62ea3e207f426aa8a1a77a0da8736b397 = $this->env->getExtension("native_profiler");
        $__internal_9618632802b4e1b3b4982d015767e8a62ea3e207f426aa8a1a77a0da8736b397->enter($__internal_9618632802b4e1b3b4982d015767e8a62ea3e207f426aa8a1a77a0da8736b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administración de Aulas";
        
        $__internal_9618632802b4e1b3b4982d015767e8a62ea3e207f426aa8a1a77a0da8736b397->leave($__internal_9618632802b4e1b3b4982d015767e8a62ea3e207f426aa8a1a77a0da8736b397_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acab03d7eb68aa6689fc5d211dae30c843f07b58631def413097d3db76876da2 = $this->env->getExtension("native_profiler");
        $__internal_acab03d7eb68aa6689fc5d211dae30c843f07b58631def413097d3db76876da2->enter($__internal_acab03d7eb68aa6689fc5d211dae30c843f07b58631def413097d3db76876da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_acab03d7eb68aa6689fc5d211dae30c843f07b58631def413097d3db76876da2->leave($__internal_acab03d7eb68aa6689fc5d211dae30c843f07b58631def413097d3db76876da2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_68b00fccb4293a3f4fa31514fc7387827fe57ec38ae3202377335d8eb5edc2e0 = $this->env->getExtension("native_profiler");
        $__internal_68b00fccb4293a3f4fa31514fc7387827fe57ec38ae3202377335d8eb5edc2e0->enter($__internal_68b00fccb4293a3f4fa31514fc7387827fe57ec38ae3202377335d8eb5edc2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "        ";
        
        $__internal_68b00fccb4293a3f4fa31514fc7387827fe57ec38ae3202377335d8eb5edc2e0->leave($__internal_68b00fccb4293a3f4fa31514fc7387827fe57ec38ae3202377335d8eb5edc2e0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04af94c451ac6bbb8af980a6ebb3f1c29924f70830e4c663d4f493d8a845b4e8 = $this->env->getExtension("native_profiler");
        $__internal_04af94c451ac6bbb8af980a6ebb3f1c29924f70830e4c663d4f493d8a845b4e8->enter($__internal_04af94c451ac6bbb8af980a6ebb3f1c29924f70830e4c663d4f493d8a845b4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_04af94c451ac6bbb8af980a6ebb3f1c29924f70830e4c663d4f493d8a845b4e8->leave($__internal_04af94c451ac6bbb8af980a6ebb3f1c29924f70830e4c663d4f493d8a845b4e8_prof);

    }

    public function getTemplateName()
    {
        return "layout-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 22,  118 => 21,  113 => 20,  107 => 19,  100 => 18,  94 => 17,  85 => 12,  80 => 11,  74 => 10,  62 => 9,  54 => 24,  51 => 19,  49 => 17,  42 => 14,  40 => 10,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*         <meta name="generator" content="Bootply" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* */
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
