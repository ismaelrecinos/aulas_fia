<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9bbbe58c69619d5245e423e0e85b6b986a54d02ee2c3ae87f762ecd73f81c10d extends Twig_Template
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
        $__internal_d15f4a4b91382317fad438d7b13ec153554d3c80197af64c02947a299a90da13 = $this->env->getExtension("native_profiler");
        $__internal_d15f4a4b91382317fad438d7b13ec153554d3c80197af64c02947a299a90da13->enter($__internal_d15f4a4b91382317fad438d7b13ec153554d3c80197af64c02947a299a90da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15f4a4b91382317fad438d7b13ec153554d3c80197af64c02947a299a90da13->leave($__internal_d15f4a4b91382317fad438d7b13ec153554d3c80197af64c02947a299a90da13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3bb0ded3bbe8629f2ea3fffdfe2db60d409dcb9b221f8e43c9cd4f865561c97 = $this->env->getExtension("native_profiler");
        $__internal_b3bb0ded3bbe8629f2ea3fffdfe2db60d409dcb9b221f8e43c9cd4f865561c97->enter($__internal_b3bb0ded3bbe8629f2ea3fffdfe2db60d409dcb9b221f8e43c9cd4f865561c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3bb0ded3bbe8629f2ea3fffdfe2db60d409dcb9b221f8e43c9cd4f865561c97->leave($__internal_b3bb0ded3bbe8629f2ea3fffdfe2db60d409dcb9b221f8e43c9cd4f865561c97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9f2da8532cf054fd23e80a6bcb59ca90ef0cc4be8ca48324db74b3a7e451b19 = $this->env->getExtension("native_profiler");
        $__internal_c9f2da8532cf054fd23e80a6bcb59ca90ef0cc4be8ca48324db74b3a7e451b19->enter($__internal_c9f2da8532cf054fd23e80a6bcb59ca90ef0cc4be8ca48324db74b3a7e451b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9f2da8532cf054fd23e80a6bcb59ca90ef0cc4be8ca48324db74b3a7e451b19->leave($__internal_c9f2da8532cf054fd23e80a6bcb59ca90ef0cc4be8ca48324db74b3a7e451b19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d240bfcd5841a050efa5fba1c06dc71818e05313c0ae3024c1eb552fc841ecf2 = $this->env->getExtension("native_profiler");
        $__internal_d240bfcd5841a050efa5fba1c06dc71818e05313c0ae3024c1eb552fc841ecf2->enter($__internal_d240bfcd5841a050efa5fba1c06dc71818e05313c0ae3024c1eb552fc841ecf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d240bfcd5841a050efa5fba1c06dc71818e05313c0ae3024c1eb552fc841ecf2->leave($__internal_d240bfcd5841a050efa5fba1c06dc71818e05313c0ae3024c1eb552fc841ecf2_prof);

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
