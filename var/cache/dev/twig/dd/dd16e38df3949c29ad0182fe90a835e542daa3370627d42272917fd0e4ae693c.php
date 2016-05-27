<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc44bcaf28ffce2d188a1f0a95590daa92ca0fadc803d36c364936a09ea852c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5169a508fb2694573a520a7d34ddda9f6d08801926af906b448fff08ed06da6 = $this->env->getExtension("native_profiler");
        $__internal_a5169a508fb2694573a520a7d34ddda9f6d08801926af906b448fff08ed06da6->enter($__internal_a5169a508fb2694573a520a7d34ddda9f6d08801926af906b448fff08ed06da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5169a508fb2694573a520a7d34ddda9f6d08801926af906b448fff08ed06da6->leave($__internal_a5169a508fb2694573a520a7d34ddda9f6d08801926af906b448fff08ed06da6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1538c446b206586529348f1026f715f188589da0c2a2a55a453d3b9c452e867d = $this->env->getExtension("native_profiler");
        $__internal_1538c446b206586529348f1026f715f188589da0c2a2a55a453d3b9c452e867d->enter($__internal_1538c446b206586529348f1026f715f188589da0c2a2a55a453d3b9c452e867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1538c446b206586529348f1026f715f188589da0c2a2a55a453d3b9c452e867d->leave($__internal_1538c446b206586529348f1026f715f188589da0c2a2a55a453d3b9c452e867d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2d301979f2a6cfaf270b7534ef4099b98b78ad8188a9a68b6c3d0a76ee49c3a = $this->env->getExtension("native_profiler");
        $__internal_d2d301979f2a6cfaf270b7534ef4099b98b78ad8188a9a68b6c3d0a76ee49c3a->enter($__internal_d2d301979f2a6cfaf270b7534ef4099b98b78ad8188a9a68b6c3d0a76ee49c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2d301979f2a6cfaf270b7534ef4099b98b78ad8188a9a68b6c3d0a76ee49c3a->leave($__internal_d2d301979f2a6cfaf270b7534ef4099b98b78ad8188a9a68b6c3d0a76ee49c3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ed28f2fdc031e91ca3c659bcd06f026814a20cbfd31a228b8f80685ef9018f = $this->env->getExtension("native_profiler");
        $__internal_90ed28f2fdc031e91ca3c659bcd06f026814a20cbfd31a228b8f80685ef9018f->enter($__internal_90ed28f2fdc031e91ca3c659bcd06f026814a20cbfd31a228b8f80685ef9018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_90ed28f2fdc031e91ca3c659bcd06f026814a20cbfd31a228b8f80685ef9018f->leave($__internal_90ed28f2fdc031e91ca3c659bcd06f026814a20cbfd31a228b8f80685ef9018f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
