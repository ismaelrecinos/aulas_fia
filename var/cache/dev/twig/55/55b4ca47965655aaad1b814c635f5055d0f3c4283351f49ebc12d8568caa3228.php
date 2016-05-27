<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9b71e6a1cac9e1772640d607145402e082aabab70b8167bb035dada4d8657834 extends Twig_Template
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
        $__internal_bc4ee9d0f2216ae00e4986d0d13bf2caf5949dfc94f5ef47dac313e2d027fd65 = $this->env->getExtension("native_profiler");
        $__internal_bc4ee9d0f2216ae00e4986d0d13bf2caf5949dfc94f5ef47dac313e2d027fd65->enter($__internal_bc4ee9d0f2216ae00e4986d0d13bf2caf5949dfc94f5ef47dac313e2d027fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bc4ee9d0f2216ae00e4986d0d13bf2caf5949dfc94f5ef47dac313e2d027fd65->leave($__internal_bc4ee9d0f2216ae00e4986d0d13bf2caf5949dfc94f5ef47dac313e2d027fd65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
