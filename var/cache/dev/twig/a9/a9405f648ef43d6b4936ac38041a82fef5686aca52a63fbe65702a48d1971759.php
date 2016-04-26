<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d4788b7fa45619356a897d90f1d348bae343a531302e59c2c59f639dcd1e768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e94ee10d0b341d7e47f71d085ddce59d64daa9cd26079999925f76f6653fac = $this->env->getExtension("native_profiler");
        $__internal_f8e94ee10d0b341d7e47f71d085ddce59d64daa9cd26079999925f76f6653fac->enter($__internal_f8e94ee10d0b341d7e47f71d085ddce59d64daa9cd26079999925f76f6653fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e94ee10d0b341d7e47f71d085ddce59d64daa9cd26079999925f76f6653fac->leave($__internal_f8e94ee10d0b341d7e47f71d085ddce59d64daa9cd26079999925f76f6653fac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f033292672716bfd384cfa429f178279be233cb651c02bbdb86e41d356d585b7 = $this->env->getExtension("native_profiler");
        $__internal_f033292672716bfd384cfa429f178279be233cb651c02bbdb86e41d356d585b7->enter($__internal_f033292672716bfd384cfa429f178279be233cb651c02bbdb86e41d356d585b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f033292672716bfd384cfa429f178279be233cb651c02bbdb86e41d356d585b7->leave($__internal_f033292672716bfd384cfa429f178279be233cb651c02bbdb86e41d356d585b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e26a8b37a41115656bfa2078d3d148cd0c8109df506a9c861c7c42c776d565a8 = $this->env->getExtension("native_profiler");
        $__internal_e26a8b37a41115656bfa2078d3d148cd0c8109df506a9c861c7c42c776d565a8->enter($__internal_e26a8b37a41115656bfa2078d3d148cd0c8109df506a9c861c7c42c776d565a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e26a8b37a41115656bfa2078d3d148cd0c8109df506a9c861c7c42c776d565a8->leave($__internal_e26a8b37a41115656bfa2078d3d148cd0c8109df506a9c861c7c42c776d565a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9bd952812210fd3978e9361e079cc6e4a250de91655f6acba1955f44c822f9f = $this->env->getExtension("native_profiler");
        $__internal_d9bd952812210fd3978e9361e079cc6e4a250de91655f6acba1955f44c822f9f->enter($__internal_d9bd952812210fd3978e9361e079cc6e4a250de91655f6acba1955f44c822f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9bd952812210fd3978e9361e079cc6e4a250de91655f6acba1955f44c822f9f->leave($__internal_d9bd952812210fd3978e9361e079cc6e4a250de91655f6acba1955f44c822f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
