<?php

/* layout.html.twig */
class __TwigTemplate_930d4ff6c126e5805f7d6f6330fb3caabe945555e5229a43f9af5435f15fafaa extends Twig_Template
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
        $__internal_e32f5ca69ce6cf7b31ee4407aada30ce6a6fe0216ef0f13e0d791f199e561a86 = $this->env->getExtension("native_profiler");
        $__internal_e32f5ca69ce6cf7b31ee4407aada30ce6a6fe0216ef0f13e0d791f199e561a86->enter($__internal_e32f5ca69ce6cf7b31ee4407aada30ce6a6fe0216ef0f13e0d791f199e561a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_e32f5ca69ce6cf7b31ee4407aada30ce6a6fe0216ef0f13e0d791f199e561a86->leave($__internal_e32f5ca69ce6cf7b31ee4407aada30ce6a6fe0216ef0f13e0d791f199e561a86_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34ecb980810362667542b3fca9703207254d815a5900e6dc31ca4e89a3c0ab42 = $this->env->getExtension("native_profiler");
        $__internal_34ecb980810362667542b3fca9703207254d815a5900e6dc31ca4e89a3c0ab42->enter($__internal_34ecb980810362667542b3fca9703207254d815a5900e6dc31ca4e89a3c0ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administración de Aulas";
        
        $__internal_34ecb980810362667542b3fca9703207254d815a5900e6dc31ca4e89a3c0ab42->leave($__internal_34ecb980810362667542b3fca9703207254d815a5900e6dc31ca4e89a3c0ab42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab0f55d5353f164f9930bc7f9556a1f176592d5c849cfc54bf549eb7d724b935 = $this->env->getExtension("native_profiler");
        $__internal_ab0f55d5353f164f9930bc7f9556a1f176592d5c849cfc54bf549eb7d724b935->enter($__internal_ab0f55d5353f164f9930bc7f9556a1f176592d5c849cfc54bf549eb7d724b935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ab0f55d5353f164f9930bc7f9556a1f176592d5c849cfc54bf549eb7d724b935->leave($__internal_ab0f55d5353f164f9930bc7f9556a1f176592d5c849cfc54bf549eb7d724b935_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_16d2a90beeab076f5007dec9a48a68634c0783a3a6cf39fc6125e37dce5b3880 = $this->env->getExtension("native_profiler");
        $__internal_16d2a90beeab076f5007dec9a48a68634c0783a3a6cf39fc6125e37dce5b3880->enter($__internal_16d2a90beeab076f5007dec9a48a68634c0783a3a6cf39fc6125e37dce5b3880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_16d2a90beeab076f5007dec9a48a68634c0783a3a6cf39fc6125e37dce5b3880->leave($__internal_16d2a90beeab076f5007dec9a48a68634c0783a3a6cf39fc6125e37dce5b3880_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_452771028d5407ef3ed9cecf6b875519bc3c0e42e357eab2357ee430e1596302 = $this->env->getExtension("native_profiler");
        $__internal_452771028d5407ef3ed9cecf6b875519bc3c0e42e357eab2357ee430e1596302->enter($__internal_452771028d5407ef3ed9cecf6b875519bc3c0e42e357eab2357ee430e1596302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_452771028d5407ef3ed9cecf6b875519bc3c0e42e357eab2357ee430e1596302->leave($__internal_452771028d5407ef3ed9cecf6b875519bc3c0e42e357eab2357ee430e1596302_prof);

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
