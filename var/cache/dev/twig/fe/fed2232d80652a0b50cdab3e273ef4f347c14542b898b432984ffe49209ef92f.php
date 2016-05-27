<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c211c5972877067eaa9f876fec42d7abb3f945c6da5b674ae059dc517145fc3a extends Twig_Template
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
        $__internal_9bfc9d2c11023af2de1d80c03664b6375af8092e95967a72bb7e9cd657f9867e = $this->env->getExtension("native_profiler");
        $__internal_9bfc9d2c11023af2de1d80c03664b6375af8092e95967a72bb7e9cd657f9867e->enter($__internal_9bfc9d2c11023af2de1d80c03664b6375af8092e95967a72bb7e9cd657f9867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfc9d2c11023af2de1d80c03664b6375af8092e95967a72bb7e9cd657f9867e->leave($__internal_9bfc9d2c11023af2de1d80c03664b6375af8092e95967a72bb7e9cd657f9867e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34d27cdf5989ce438daf961bbd95accae5dc07994e202108f235ff5622132b05 = $this->env->getExtension("native_profiler");
        $__internal_34d27cdf5989ce438daf961bbd95accae5dc07994e202108f235ff5622132b05->enter($__internal_34d27cdf5989ce438daf961bbd95accae5dc07994e202108f235ff5622132b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34d27cdf5989ce438daf961bbd95accae5dc07994e202108f235ff5622132b05->leave($__internal_34d27cdf5989ce438daf961bbd95accae5dc07994e202108f235ff5622132b05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a20885191b6558ba862ee726120ebf629f6aea2305bc7534f5d22d430022f72a = $this->env->getExtension("native_profiler");
        $__internal_a20885191b6558ba862ee726120ebf629f6aea2305bc7534f5d22d430022f72a->enter($__internal_a20885191b6558ba862ee726120ebf629f6aea2305bc7534f5d22d430022f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a20885191b6558ba862ee726120ebf629f6aea2305bc7534f5d22d430022f72a->leave($__internal_a20885191b6558ba862ee726120ebf629f6aea2305bc7534f5d22d430022f72a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_855d0c20ceba051b51fd4e215930dd4ac0d7e24a6d24ff2d87944a3a49860cf2 = $this->env->getExtension("native_profiler");
        $__internal_855d0c20ceba051b51fd4e215930dd4ac0d7e24a6d24ff2d87944a3a49860cf2->enter($__internal_855d0c20ceba051b51fd4e215930dd4ac0d7e24a6d24ff2d87944a3a49860cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_855d0c20ceba051b51fd4e215930dd4ac0d7e24a6d24ff2d87944a3a49860cf2->leave($__internal_855d0c20ceba051b51fd4e215930dd4ac0d7e24a6d24ff2d87944a3a49860cf2_prof);

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
