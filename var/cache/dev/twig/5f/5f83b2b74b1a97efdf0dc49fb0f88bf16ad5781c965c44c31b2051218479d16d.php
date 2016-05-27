<?php

/* base.html.twig */
class __TwigTemplate_9185dccaa1cf1e77fd73a90b9f0592c65eaaf3b5e680b922d87668c8b54c2c0a extends Twig_Template
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
        $__internal_7ed30ac99de598ea9ec652ef17bfc1f1f864d94fd2dc120e9410bbb9daf9afc6 = $this->env->getExtension("native_profiler");
        $__internal_7ed30ac99de598ea9ec652ef17bfc1f1f864d94fd2dc120e9410bbb9daf9afc6->enter($__internal_7ed30ac99de598ea9ec652ef17bfc1f1f864d94fd2dc120e9410bbb9daf9afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7ed30ac99de598ea9ec652ef17bfc1f1f864d94fd2dc120e9410bbb9daf9afc6->leave($__internal_7ed30ac99de598ea9ec652ef17bfc1f1f864d94fd2dc120e9410bbb9daf9afc6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeb21692b2ac0e5ab8bc2f830749e422e1eb9c8782f0b564dd3926a1dfd0d688 = $this->env->getExtension("native_profiler");
        $__internal_eeb21692b2ac0e5ab8bc2f830749e422e1eb9c8782f0b564dd3926a1dfd0d688->enter($__internal_eeb21692b2ac0e5ab8bc2f830749e422e1eb9c8782f0b564dd3926a1dfd0d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eeb21692b2ac0e5ab8bc2f830749e422e1eb9c8782f0b564dd3926a1dfd0d688->leave($__internal_eeb21692b2ac0e5ab8bc2f830749e422e1eb9c8782f0b564dd3926a1dfd0d688_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b14ee0c39ce36af050701d0038be0044994946a9d12829ac8b393a532b37f18 = $this->env->getExtension("native_profiler");
        $__internal_0b14ee0c39ce36af050701d0038be0044994946a9d12829ac8b393a532b37f18->enter($__internal_0b14ee0c39ce36af050701d0038be0044994946a9d12829ac8b393a532b37f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b14ee0c39ce36af050701d0038be0044994946a9d12829ac8b393a532b37f18->leave($__internal_0b14ee0c39ce36af050701d0038be0044994946a9d12829ac8b393a532b37f18_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3fc4436cba9fdc0f13ca9b1f5410869882bf08c29da2861b1a8422c1ac5b29 = $this->env->getExtension("native_profiler");
        $__internal_8e3fc4436cba9fdc0f13ca9b1f5410869882bf08c29da2861b1a8422c1ac5b29->enter($__internal_8e3fc4436cba9fdc0f13ca9b1f5410869882bf08c29da2861b1a8422c1ac5b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e3fc4436cba9fdc0f13ca9b1f5410869882bf08c29da2861b1a8422c1ac5b29->leave($__internal_8e3fc4436cba9fdc0f13ca9b1f5410869882bf08c29da2861b1a8422c1ac5b29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0f28173ac5c2dd6c8a91d4e1ac7bd2ef510a315feaa588a7043fce75dda2fc6 = $this->env->getExtension("native_profiler");
        $__internal_d0f28173ac5c2dd6c8a91d4e1ac7bd2ef510a315feaa588a7043fce75dda2fc6->enter($__internal_d0f28173ac5c2dd6c8a91d4e1ac7bd2ef510a315feaa588a7043fce75dda2fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0f28173ac5c2dd6c8a91d4e1ac7bd2ef510a315feaa588a7043fce75dda2fc6->leave($__internal_d0f28173ac5c2dd6c8a91d4e1ac7bd2ef510a315feaa588a7043fce75dda2fc6_prof);

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
