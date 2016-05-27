<?php

/* layout-login.html.twig */
class __TwigTemplate_ed9f6531fc147f4a5b6d1dca08a7c18d90b533cd44c4a4cc215f34776613d9f4 extends Twig_Template
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
        $__internal_00c523d6c6a68b69e7b448464a0d370bc29ade80891f52733b152b139567e5c9 = $this->env->getExtension("native_profiler");
        $__internal_00c523d6c6a68b69e7b448464a0d370bc29ade80891f52733b152b139567e5c9->enter($__internal_00c523d6c6a68b69e7b448464a0d370bc29ade80891f52733b152b139567e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout-login.html.twig"));

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
        
        $__internal_00c523d6c6a68b69e7b448464a0d370bc29ade80891f52733b152b139567e5c9->leave($__internal_00c523d6c6a68b69e7b448464a0d370bc29ade80891f52733b152b139567e5c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a4f4cecbb97ce1e4fb93ae93b5c43bb31e57bb2e6980027a53a294f51ca87c9 = $this->env->getExtension("native_profiler");
        $__internal_6a4f4cecbb97ce1e4fb93ae93b5c43bb31e57bb2e6980027a53a294f51ca87c9->enter($__internal_6a4f4cecbb97ce1e4fb93ae93b5c43bb31e57bb2e6980027a53a294f51ca87c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administración de Aulas";
        
        $__internal_6a4f4cecbb97ce1e4fb93ae93b5c43bb31e57bb2e6980027a53a294f51ca87c9->leave($__internal_6a4f4cecbb97ce1e4fb93ae93b5c43bb31e57bb2e6980027a53a294f51ca87c9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9a3a714449538927b81995e3da2893d0c3d57ebc4d3ead760ee6e9ec1f92b97 = $this->env->getExtension("native_profiler");
        $__internal_d9a3a714449538927b81995e3da2893d0c3d57ebc4d3ead760ee6e9ec1f92b97->enter($__internal_d9a3a714449538927b81995e3da2893d0c3d57ebc4d3ead760ee6e9ec1f92b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d9a3a714449538927b81995e3da2893d0c3d57ebc4d3ead760ee6e9ec1f92b97->leave($__internal_d9a3a714449538927b81995e3da2893d0c3d57ebc4d3ead760ee6e9ec1f92b97_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_452e7e6798025898591e84a374bcea7c7ff14805fd36e4d6eb677e4daa11cd20 = $this->env->getExtension("native_profiler");
        $__internal_452e7e6798025898591e84a374bcea7c7ff14805fd36e4d6eb677e4daa11cd20->enter($__internal_452e7e6798025898591e84a374bcea7c7ff14805fd36e4d6eb677e4daa11cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        
        $__internal_452e7e6798025898591e84a374bcea7c7ff14805fd36e4d6eb677e4daa11cd20->leave($__internal_452e7e6798025898591e84a374bcea7c7ff14805fd36e4d6eb677e4daa11cd20_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19620ec6d670bd1e87d7ac74fc0e0b5671e49d9b470079c96f840edec46b58c1 = $this->env->getExtension("native_profiler");
        $__internal_19620ec6d670bd1e87d7ac74fc0e0b5671e49d9b470079c96f840edec46b58c1->enter($__internal_19620ec6d670bd1e87d7ac74fc0e0b5671e49d9b470079c96f840edec46b58c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_19620ec6d670bd1e87d7ac74fc0e0b5671e49d9b470079c96f840edec46b58c1->leave($__internal_19620ec6d670bd1e87d7ac74fc0e0b5671e49d9b470079c96f840edec46b58c1_prof);

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
