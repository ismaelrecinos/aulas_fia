<?php

/* AulasBundle:Login:login.html.twig */
class __TwigTemplate_33a06d7d8143f264efb3dbadbd6a52c87d9b2ce50f0708b2583b2a8d7255f34f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout-login.html.twig", "AulasBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512dba07880d68bf3ad4c5e29b4809616e0de471e1086fe4857cb219decec72a = $this->env->getExtension("native_profiler");
        $__internal_512dba07880d68bf3ad4c5e29b4809616e0de471e1086fe4857cb219decec72a->enter($__internal_512dba07880d68bf3ad4c5e29b4809616e0de471e1086fe4857cb219decec72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AulasBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512dba07880d68bf3ad4c5e29b4809616e0de471e1086fe4857cb219decec72a->leave($__internal_512dba07880d68bf3ad4c5e29b4809616e0de471e1086fe4857cb219decec72a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_020a0c6375c62c541215a39c3bbee8874e30ae0a86f27a566e1c059db9c88221 = $this->env->getExtension("native_profiler");
        $__internal_020a0c6375c62c541215a39c3bbee8874e30ae0a86f27a566e1c059db9c88221->enter($__internal_020a0c6375c62c541215a39c3bbee8874e30ae0a86f27a566e1c059db9c88221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "    <span class=\"alert-success\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        <hr/>
    </span>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " 

  <!--login modal-->
<div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
  <div class=\"modal-content\">
      <div class=\"modal-header\">
          <h2 class=\"text-center\">Iniciar Sesión</h2>
      </div>
      <div class=\"modal-body\">
          <form class=\"form col-md-12 center-block\"  method=\"POST\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Usuario\" name=\"inputUsuario\" id=\"inputUsuario\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control input-lg\" placeholder=\"Clave\" id=\"inputClave\" name=\"inputClave\">
            </div>
            <div class=\"form-group\">
              <button class=\"btn btn-primary btn-lg btn-block\">Iniciar Sesión</button>
            </div>
          </form>
      </div>
      <div class=\"modal-footer\">  
      </div>
  </div>
  </div>
</div>
";
        
        $__internal_020a0c6375c62c541215a39c3bbee8874e30ae0a86f27a566e1c059db9c88221->leave($__internal_020a0c6375c62c541215a39c3bbee8874e30ae0a86f27a566e1c059db9c88221_prof);

    }

    public function getTemplateName()
    {
        return "AulasBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  61 => 10,  51 => 7,  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout-login.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/*   {% for flashMessage in app.session.flashbag.get("mensaje") %}*/
/*     <span class="alert-success">*/
/*         {{ flashMessage }}*/
/*         <hr/>*/
/*     </span>*/
/*   {% endfor %} */
/* */
/*   <!--login modal-->*/
/* <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*       <div class="modal-header">*/
/*           <h2 class="text-center">Iniciar Sesión</h2>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*           <form class="form col-md-12 center-block"  method="POST" action="{{path('login')}}">*/
/*             <div class="form-group">*/
/*               <input type="text" class="form-control input-lg" placeholder="Usuario" name="inputUsuario" id="inputUsuario">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <input type="password" class="form-control input-lg" placeholder="Clave" id="inputClave" name="inputClave">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <button class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>*/
/*             </div>*/
/*           </form>*/
/*       </div>*/
/*       <div class="modal-footer">  */
/*       </div>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
