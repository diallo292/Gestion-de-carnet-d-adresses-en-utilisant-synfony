<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_0abb10d43e1eef1eab66f45c30cda37621c1e46e9b80f4a9405e32ff6b0cf1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::acueil.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::acueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce6d982b32ea4f80cd3134b240448e6e46582e25564dfc528ab155629d90541 = $this->env->getExtension("native_profiler");
        $__internal_2ce6d982b32ea4f80cd3134b240448e6e46582e25564dfc528ab155629d90541->enter($__internal_2ce6d982b32ea4f80cd3134b240448e6e46582e25564dfc528ab155629d90541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce6d982b32ea4f80cd3134b240448e6e46582e25564dfc528ab155629d90541->leave($__internal_2ce6d982b32ea4f80cd3134b240448e6e46582e25564dfc528ab155629d90541_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6eba4b9a1a1db0a407c00beea432d5bf64c31450310bd0778a2496213efab6a = $this->env->getExtension("native_profiler");
        $__internal_c6eba4b9a1a1db0a407c00beea432d5bf64c31450310bd0778a2496213efab6a->enter($__internal_c6eba4b9a1a1db0a407c00beea432d5bf64c31450310bd0778a2496213efab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

";
        
        $__internal_c6eba4b9a1a1db0a407c00beea432d5bf64c31450310bd0778a2496213efab6a->leave($__internal_c6eba4b9a1a1db0a407c00beea432d5bf64c31450310bd0778a2496213efab6a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::acueil.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* {% endblock %}*/
