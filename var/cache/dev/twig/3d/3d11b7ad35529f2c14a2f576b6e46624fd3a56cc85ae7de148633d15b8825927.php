<?php

/* AulasBundle:Inicio:inicio.html.twig */
class __TwigTemplate_caa54d1dff06a070ebf8cb2597ce5d8f89bb2b119845afd04b8ed0b01509b30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AulasBundle:Inicio:inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20cebbd02cd4dcf1fb75d2174139ef285d0d0757f98e16310a6ac0f9c2227fc3 = $this->env->getExtension("native_profiler");
        $__internal_20cebbd02cd4dcf1fb75d2174139ef285d0d0757f98e16310a6ac0f9c2227fc3->enter($__internal_20cebbd02cd4dcf1fb75d2174139ef285d0d0757f98e16310a6ac0f9c2227fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AulasBundle:Inicio:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20cebbd02cd4dcf1fb75d2174139ef285d0d0757f98e16310a6ac0f9c2227fc3->leave($__internal_20cebbd02cd4dcf1fb75d2174139ef285d0d0757f98e16310a6ac0f9c2227fc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3902121f8bf96fa3f693c3b33b249c604852a0c39d475a6a66e02bb63d865c54 = $this->env->getExtension("native_profiler");
        $__internal_3902121f8bf96fa3f693c3b33b249c604852a0c39d475a6a66e02bb63d865c54->enter($__internal_3902121f8bf96fa3f693c3b33b249c604852a0c39d475a6a66e02bb63d865c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h2>Bienvenido</h2>

";
        
        $__internal_3902121f8bf96fa3f693c3b33b249c604852a0c39d475a6a66e02bb63d865c54->leave($__internal_3902121f8bf96fa3f693c3b33b249c604852a0c39d475a6a66e02bb63d865c54_prof);

    }

    public function getTemplateName()
    {
        return "AulasBundle:Inicio:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <h2>Bienvenido</h2>*/
/* */
/* {% endblock %}*/
