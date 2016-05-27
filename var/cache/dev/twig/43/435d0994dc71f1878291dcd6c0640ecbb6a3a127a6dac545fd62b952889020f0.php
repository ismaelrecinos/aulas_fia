<?php

/* AulasBundle:Inicio:inicio.html.twig */
class __TwigTemplate_44399dc83ed72525a99adb9e8b5dd11198a49ec834bbb66f435f2ffc8bc39a46 extends Twig_Template
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
        $__internal_508e3859669e4728f4be40d0c042ef14b23b0bde6abfa2dd38dd4724fb31eaf7 = $this->env->getExtension("native_profiler");
        $__internal_508e3859669e4728f4be40d0c042ef14b23b0bde6abfa2dd38dd4724fb31eaf7->enter($__internal_508e3859669e4728f4be40d0c042ef14b23b0bde6abfa2dd38dd4724fb31eaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AulasBundle:Inicio:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_508e3859669e4728f4be40d0c042ef14b23b0bde6abfa2dd38dd4724fb31eaf7->leave($__internal_508e3859669e4728f4be40d0c042ef14b23b0bde6abfa2dd38dd4724fb31eaf7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5a3ac5a8383e05f2172c70acc2a67060a4ad35dc9f84a6c49dcd1593abb539 = $this->env->getExtension("native_profiler");
        $__internal_9d5a3ac5a8383e05f2172c70acc2a67060a4ad35dc9f84a6c49dcd1593abb539->enter($__internal_9d5a3ac5a8383e05f2172c70acc2a67060a4ad35dc9f84a6c49dcd1593abb539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h2>Bienvenido</h2>

";
        
        $__internal_9d5a3ac5a8383e05f2172c70acc2a67060a4ad35dc9f84a6c49dcd1593abb539->leave($__internal_9d5a3ac5a8383e05f2172c70acc2a67060a4ad35dc9f84a6c49dcd1593abb539_prof);

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
