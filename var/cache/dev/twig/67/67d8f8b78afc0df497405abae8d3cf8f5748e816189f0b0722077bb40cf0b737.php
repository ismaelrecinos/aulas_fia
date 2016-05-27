<?php

/* AulasBundle:Usuarios:index.html.twig */
class __TwigTemplate_e8d8ab6fde48e960a6e0cd4e28f409e85012b339a924b4c77b9ad7029f1b54a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AulasBundle:Usuarios:index.html.twig", 1);
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
        $__internal_5eebc4afd27d6627e77c1b8308f41421ab2a82ec47145aebc3b2f3a93603d6aa = $this->env->getExtension("native_profiler");
        $__internal_5eebc4afd27d6627e77c1b8308f41421ab2a82ec47145aebc3b2f3a93603d6aa->enter($__internal_5eebc4afd27d6627e77c1b8308f41421ab2a82ec47145aebc3b2f3a93603d6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AulasBundle:Usuarios:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eebc4afd27d6627e77c1b8308f41421ab2a82ec47145aebc3b2f3a93603d6aa->leave($__internal_5eebc4afd27d6627e77c1b8308f41421ab2a82ec47145aebc3b2f3a93603d6aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b03ea95e91242edeeb00d5040e97341b624933613deb24380419f19f22191f1 = $this->env->getExtension("native_profiler");
        $__internal_4b03ea95e91242edeeb00d5040e97341b624933613deb24380419f19f22191f1->enter($__internal_4b03ea95e91242edeeb00d5040e97341b624933613deb24380419f19f22191f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h2>Lista de Usuarios</h2>
<br/>
<table border=\"1\">
\t<tr>
\t\t<td>Usuario</td>
\t\t<td>Nombre Usuario</td>
\t</tr>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuariosList"]) ? $context["usuariosList"] : $this->getContext($context, "usuariosList")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuarioIter"]) {
            // line 13
            echo "\t\t<tr>
\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuarioIter"], "usuario", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuarioIter"], "nombreUsuario", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioIter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>

";
        
        $__internal_4b03ea95e91242edeeb00d5040e97341b624933613deb24380419f19f22191f1->leave($__internal_4b03ea95e91242edeeb00d5040e97341b624933613deb24380419f19f22191f1_prof);

    }

    public function getTemplateName()
    {
        return "AulasBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  62 => 15,  58 => 14,  55 => 13,  51 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <h2>Lista de Usuarios</h2>*/
/* <br/>*/
/* <table border="1">*/
/* 	<tr>*/
/* 		<td>Usuario</td>*/
/* 		<td>Nombre Usuario</td>*/
/* 	</tr>*/
/* 	{% for usuarioIter in usuariosList %}*/
/* 		<tr>*/
/* 			<td>{{ usuarioIter.usuario }}</td>*/
/* 			<td>{{ usuarioIter.nombreUsuario }}</td>*/
/* 		</tr>*/
/* 	{% endfor%}*/
/* </table>*/
/* */
/* {% endblock %}*/
