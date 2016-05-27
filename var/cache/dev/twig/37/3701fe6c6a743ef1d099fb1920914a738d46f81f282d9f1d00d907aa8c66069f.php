<?php

/* menu.html.twig */
class __TwigTemplate_aa4cfcb9192d754b4932c98647180766e53f5262c0dac0b886a9952e2c891857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2aad7103fc068dacfd049c2e80ce8c4860a68314b7eaad58ad3711d41b7cced = $this->env->getExtension("native_profiler");
        $__internal_b2aad7103fc068dacfd049c2e80ce8c4860a68314b7eaad58ad3711d41b7cced->enter($__internal_b2aad7103fc068dacfd049c2e80ce8c4860a68314b7eaad58ad3711d41b7cced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Seguridad", array(), "messages");
        echo "  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Usuarios", array(), "messages");
        echo " </a></li>
                    </ul>
                </li> 
                <li class=\"dropdown\">
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("salir");
        echo "\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Salir", array(), "messages");
        echo " </a>
                <li/>             
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_b2aad7103fc068dacfd049c2e80ce8c4860a68314b7eaad58ad3711d41b7cced->leave($__internal_b2aad7103fc068dacfd049c2e80ce8c4860a68314b7eaad58ad3711d41b7cced_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  44 => 18,  39 => 16,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {% trans %} Seguridad {% endtrans %}  <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('usuarios_index') }}"> {% trans %} Usuarios  {% endtrans %} </a></li>*/
/*                     </ul>*/
/*                 </li> */
/*                 <li class="dropdown">*/
/*                     <a href="{{ path('salir') }}" role="button" aria-haspopup="true" aria-expanded="false"> {% trans %} Salir {% endtrans %} </a>*/
/*                 <li/>             */
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
