<?php

/* OCPlatformBundle:Advert:liste.html.twig */
class __TwigTemplate_c3cb8386c2b14019c572ab035c7af6c2a511353ef49c6a6ae68bf17154b98c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Client.html.twig", "OCPlatformBundle:Advert:liste.html.twig", 1);
        $this->blocks = array(
            'body1' => array($this, 'block_body1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Client.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0fa8a6b740fee680118973f11d40ec325c50fa31ae5f91f4e7c5e045885feb6 = $this->env->getExtension("native_profiler");
        $__internal_d0fa8a6b740fee680118973f11d40ec325c50fa31ae5f91f4e7c5e045885feb6->enter($__internal_d0fa8a6b740fee680118973f11d40ec325c50fa31ae5f91f4e7c5e045885feb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fa8a6b740fee680118973f11d40ec325c50fa31ae5f91f4e7c5e045885feb6->leave($__internal_d0fa8a6b740fee680118973f11d40ec325c50fa31ae5f91f4e7c5e045885feb6_prof);

    }

    // line 3
    public function block_body1($context, array $blocks = array())
    {
        $__internal_1e2bcc797df2bebfde56ff20ed6551b5a9220dae000c2b3df13ae96c8070bb5b = $this->env->getExtension("native_profiler");
        $__internal_1e2bcc797df2bebfde56ff20ed6551b5a9220dae000c2b3df13ae96c8070bb5b->enter($__internal_1e2bcc797df2bebfde56ff20ed6551b5a9220dae000c2b3df13ae96c8070bb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        // line 4
        echo "        
      <div class=\"well\" id=\"formul1\"> 
<table class=\"table table-striped\"  > 

 <thead> 
                 <tr> 
                 <td>Nom</td> 
                 <td>Prenom</td> 
                 <td>Adresse</td> 
                 <td>Annuversaire</td> 
                 <td>Phone</td> 
                 </tr> 
         </thead> 

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 19
            echo "  
  
                 
        
         <tbody> 
                 <tr id=\"formul1\"> 
                 <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getNom", array(), "method"), "html", null, true);
            echo "</td> 
                 <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td> 
                 <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getAdresse", array(), "method"), "html", null, true);
            echo "</td> 
                 <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td> 
                 <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "getPhone", array(), "method"), "html", null, true);
            echo "</td> 
                 </tr> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "   
        </tbody> 
</table>
</div>
 ";
        
        $__internal_1e2bcc797df2bebfde56ff20ed6551b5a9220dae000c2b3df13ae96c8070bb5b->leave($__internal_1e2bcc797df2bebfde56ff20ed6551b5a9220dae000c2b3df13ae96c8070bb5b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::Client.html.twig" %}*/
/* */
/*  {% block body1 %}*/
/*         */
/*       <div class="well" id="formul1"> */
/* <table class="table table-striped"  > */
/* */
/*  <thead> */
/*                  <tr> */
/*                  <td>Nom</td> */
/*                  <td>Prenom</td> */
/*                  <td>Adresse</td> */
/*                  <td>Annuversaire</td> */
/*                  <td>Phone</td> */
/*                  </tr> */
/*          </thead> */
/* */
/* {%for advert in liste   %}*/
/*   */
/*   */
/*                  */
/*         */
/*          <tbody> */
/*                  <tr id="formul1"> */
/*                  <td>{{ advert.getNom()}}</td> */
/*                  <td>{{ advert.getPrenom()}}</td> */
/*                  <td>{{ advert.getAdresse()}}</td> */
/*                  <td>{{ advert.getDate()|date('Y-m-d')}}</td> */
/*                  <td>{{ advert.getPhone()}}</td> */
/*                  </tr> */
/*               {%endfor%}   */
/*         </tbody> */
/* </table>*/
/* </div>*/
/*  {% endblock %}*/
/* */
