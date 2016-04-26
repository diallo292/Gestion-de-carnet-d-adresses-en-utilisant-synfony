<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79bd7286b7824904da7258b7419e3534120b4b56007f80aa645b3d384e1fce37 extends Twig_Template
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
        $__internal_4434d9a2108cb32af31768100d8ce4a70adfb74201bc71835dbcb27bb6b1cdf3 = $this->env->getExtension("native_profiler");
        $__internal_4434d9a2108cb32af31768100d8ce4a70adfb74201bc71835dbcb27bb6b1cdf3->enter($__internal_4434d9a2108cb32af31768100d8ce4a70adfb74201bc71835dbcb27bb6b1cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4434d9a2108cb32af31768100d8ce4a70adfb74201bc71835dbcb27bb6b1cdf3->leave($__internal_4434d9a2108cb32af31768100d8ce4a70adfb74201bc71835dbcb27bb6b1cdf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e19ba2545d0fe484c82d6f58b9056f57b8f3a948d9a148cdd174ee334ff8bf5 = $this->env->getExtension("native_profiler");
        $__internal_6e19ba2545d0fe484c82d6f58b9056f57b8f3a948d9a148cdd174ee334ff8bf5->enter($__internal_6e19ba2545d0fe484c82d6f58b9056f57b8f3a948d9a148cdd174ee334ff8bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e19ba2545d0fe484c82d6f58b9056f57b8f3a948d9a148cdd174ee334ff8bf5->leave($__internal_6e19ba2545d0fe484c82d6f58b9056f57b8f3a948d9a148cdd174ee334ff8bf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ef3d02a57a80aaaeb0f9afb55709a040816be993cf562a61006b82d0b9499a5 = $this->env->getExtension("native_profiler");
        $__internal_8ef3d02a57a80aaaeb0f9afb55709a040816be993cf562a61006b82d0b9499a5->enter($__internal_8ef3d02a57a80aaaeb0f9afb55709a040816be993cf562a61006b82d0b9499a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ef3d02a57a80aaaeb0f9afb55709a040816be993cf562a61006b82d0b9499a5->leave($__internal_8ef3d02a57a80aaaeb0f9afb55709a040816be993cf562a61006b82d0b9499a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_398791dba469bc87269eb6a755cfc26b8220f6048693052691257c6932e3b2f4 = $this->env->getExtension("native_profiler");
        $__internal_398791dba469bc87269eb6a755cfc26b8220f6048693052691257c6932e3b2f4->enter($__internal_398791dba469bc87269eb6a755cfc26b8220f6048693052691257c6932e3b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_398791dba469bc87269eb6a755cfc26b8220f6048693052691257c6932e3b2f4->leave($__internal_398791dba469bc87269eb6a755cfc26b8220f6048693052691257c6932e3b2f4_prof);

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
