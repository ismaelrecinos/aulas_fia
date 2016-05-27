<?php

/* AulasBundle:Login:login.html.twig */
class __TwigTemplate_b3167872fd7375b89831b65eb343d414e95f5875e32fe3c9934cb33dd3dbdc43 extends Twig_Template
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
        $__internal_03d52de15d24ec15de67236b17dcdeaa3e5a404e0eaca19f1410a20d4164185c = $this->env->getExtension("native_profiler");
        $__internal_03d52de15d24ec15de67236b17dcdeaa3e5a404e0eaca19f1410a20d4164185c->enter($__internal_03d52de15d24ec15de67236b17dcdeaa3e5a404e0eaca19f1410a20d4164185c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AulasBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d52de15d24ec15de67236b17dcdeaa3e5a404e0eaca19f1410a20d4164185c->leave($__internal_03d52de15d24ec15de67236b17dcdeaa3e5a404e0eaca19f1410a20d4164185c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b552e7f109f6b3f97cbe527cd3fa74e00cf69fe2d4d012eb464ee86ac1bd80 = $this->env->getExtension("native_profiler");
        $__internal_c9b552e7f109f6b3f97cbe527cd3fa74e00cf69fe2d4d012eb464ee86ac1bd80->enter($__internal_c9b552e7f109f6b3f97cbe527cd3fa74e00cf69fe2d4d012eb464ee86ac1bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t";
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

  <div class=\"container\" style=\"padding-top:5px;\">
\t<form method=\"POST\" class=\"form-horizontal\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
  <div class=\"form-group row\">
    <label for=\"inputEmail3\" class=\"col-sm-1 form-control-label\">Usuario</label>
    <div class=\"col-sm-6\">
      <input type=\"text\" class=\"form-control\" id=\"inputUsuario\" placeholder=\"Usuario\" name=\"inputUsuario\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputPassword3\" class=\"col-sm-1 form-control-label\">Clave</label>
    <div class=\"col-sm-6\">
      <input type=\"password\" class=\"form-control\" id=\"inputClave\" placeholder=\"Clave\" name=\"inputClave\">
    </div>
  </div>
  <div class=\"form-group row\">
    <div class=\"col-sm-offset-1 col-sm-6\">
      <button type=\"submit\" class=\"btn btn-secondary\">Iniciar Sesión</button>
    </div>
  </div>
</form>
</div>
";
        
        $__internal_c9b552e7f109f6b3f97cbe527cd3fa74e00cf69fe2d4d012eb464ee86ac1bd80->leave($__internal_c9b552e7f109f6b3f97cbe527cd3fa74e00cf69fe2d4d012eb464ee86ac1bd80_prof);

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
        return array (  66 => 13,  61 => 10,  51 => 7,  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout-login.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* 	{% for flashMessage in app.session.flashbag.get("mensaje") %}*/
/*     <span class="alert-success">*/
/*         {{ flashMessage }}*/
/*         <hr/>*/
/*     </span>*/
/*   {% endfor %} */
/* */
/*   <div class="container" style="padding-top:5px;">*/
/* 	<form method="POST" class="form-horizontal" action="{{path('login')}}">*/
/*   <div class="form-group row">*/
/*     <label for="inputEmail3" class="col-sm-1 form-control-label">Usuario</label>*/
/*     <div class="col-sm-6">*/
/*       <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario" name="inputUsuario">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group row">*/
/*     <label for="inputPassword3" class="col-sm-1 form-control-label">Clave</label>*/
/*     <div class="col-sm-6">*/
/*       <input type="password" class="form-control" id="inputClave" placeholder="Clave" name="inputClave">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group row">*/
/*     <div class="col-sm-offset-1 col-sm-6">*/
/*       <button type="submit" class="btn btn-secondary">Iniciar Sesión</button>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* </div>*/
/* {% endblock %}*/
