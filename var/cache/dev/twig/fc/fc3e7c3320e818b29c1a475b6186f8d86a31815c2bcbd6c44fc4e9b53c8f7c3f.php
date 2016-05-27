<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a75e70b9827a5dd365ead729fdcd12ca3ba94015133d6ae0be2dcb56025a54a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c920044dac4d6e0d07a7a66ad4fdb11523c7828a6fa4d5a02681bbfdfb87368 = $this->env->getExtension("native_profiler");
        $__internal_3c920044dac4d6e0d07a7a66ad4fdb11523c7828a6fa4d5a02681bbfdfb87368->enter($__internal_3c920044dac4d6e0d07a7a66ad4fdb11523c7828a6fa4d5a02681bbfdfb87368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c920044dac4d6e0d07a7a66ad4fdb11523c7828a6fa4d5a02681bbfdfb87368->leave($__internal_3c920044dac4d6e0d07a7a66ad4fdb11523c7828a6fa4d5a02681bbfdfb87368_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5c9e998973c77ffb12e29e17980564a737424a12568e05aafaec5e567d07089 = $this->env->getExtension("native_profiler");
        $__internal_c5c9e998973c77ffb12e29e17980564a737424a12568e05aafaec5e567d07089->enter($__internal_c5c9e998973c77ffb12e29e17980564a737424a12568e05aafaec5e567d07089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5c9e998973c77ffb12e29e17980564a737424a12568e05aafaec5e567d07089->leave($__internal_c5c9e998973c77ffb12e29e17980564a737424a12568e05aafaec5e567d07089_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94e110defd1f4fa49361d771f9e6f7febf0ee4ab851988dd78c0793910f18b6b = $this->env->getExtension("native_profiler");
        $__internal_94e110defd1f4fa49361d771f9e6f7febf0ee4ab851988dd78c0793910f18b6b->enter($__internal_94e110defd1f4fa49361d771f9e6f7febf0ee4ab851988dd78c0793910f18b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94e110defd1f4fa49361d771f9e6f7febf0ee4ab851988dd78c0793910f18b6b->leave($__internal_94e110defd1f4fa49361d771f9e6f7febf0ee4ab851988dd78c0793910f18b6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b6b341f6cc8fa682a742452579efd75e1a0c38d3e870ea4a2e4a6b4e16b3234 = $this->env->getExtension("native_profiler");
        $__internal_8b6b341f6cc8fa682a742452579efd75e1a0c38d3e870ea4a2e4a6b4e16b3234->enter($__internal_8b6b341f6cc8fa682a742452579efd75e1a0c38d3e870ea4a2e4a6b4e16b3234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b6b341f6cc8fa682a742452579efd75e1a0c38d3e870ea4a2e4a6b4e16b3234->leave($__internal_8b6b341f6cc8fa682a742452579efd75e1a0c38d3e870ea4a2e4a6b4e16b3234_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
