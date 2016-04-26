<?php

/* OCPlatformBundle:Advert:infocontact.html.twig */
class __TwigTemplate_9f3492d69910bcdd210ff2856257d428d57205e3a1630a161bf05056050a91c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::Client.html.twig", "OCPlatformBundle:Advert:infocontact.html.twig", 4);
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
        $__internal_b1c59b9733cb6d6580d8f17d7da24887a7c61c36d2d0d7376a618911440d797c = $this->env->getExtension("native_profiler");
        $__internal_b1c59b9733cb6d6580d8f17d7da24887a7c61c36d2d0d7376a618911440d797c->enter($__internal_b1c59b9733cb6d6580d8f17d7da24887a7c61c36d2d0d7376a618911440d797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:infocontact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c59b9733cb6d6580d8f17d7da24887a7c61c36d2d0d7376a618911440d797c->leave($__internal_b1c59b9733cb6d6580d8f17d7da24887a7c61c36d2d0d7376a618911440d797c_prof);

    }

    // line 6
    public function block_body1($context, array $blocks = array())
    {
        $__internal_3b860f100ed56e507e8e9a142f3532a3d35f16e0fa144bbb70bfa90dd5d63431 = $this->env->getExtension("native_profiler");
        $__internal_3b860f100ed56e507e8e9a142f3532a3d35f16e0fa144bbb70bfa90dd5d63431->enter($__internal_3b860f100ed56e507e8e9a142f3532a3d35f16e0fa144bbb70bfa90dd5d63431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        // line 7
        echo "<h3>Les informations de votre contact ci-dessous</h3>
<div class=\"well\" id=\"formul\">
   ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

   ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
 <div class=\"form-group\">
      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => " Annuversaire"));
        echo "

      ";
        // line 17
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "


        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
      
    </div>
    <div class=\"form-group\">
      ";
        // line 25
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "nom"));
        echo "

      ";
        // line 28
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 32
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
     <div class=\"form-group\">
      ";
        // line 37
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "prenom"));
        echo "

      ";
        // line 40
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 44
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div> <div class=\"form-group\">
      ";
        // line 48
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "adresse"));
        echo "

      ";
        // line 51
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 55
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    
    </div> <div class=\"form-group\">
      ";
        // line 60
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Phone"));
        echo "

      ";
        // line 63
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 67
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div><hr>
<div>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "soumettre", array()), 'widget', array("attr" => array("class" => "btn btn-primary glyphicon glyphicon-floppy-disk")));
        echo " 
";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annuler", array()), 'widget', array("attr" => array("class" => "btn btn-primary glyphicon glyphicon-remove ")));
        echo " </div>
";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
</div>
 ";
        
        $__internal_3b860f100ed56e507e8e9a142f3532a3d35f16e0fa144bbb70bfa90dd5d63431->leave($__internal_3b860f100ed56e507e8e9a142f3532a3d35f16e0fa144bbb70bfa90dd5d63431_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:infocontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 71,  159 => 70,  155 => 69,  149 => 67,  142 => 63,  136 => 60,  128 => 55,  121 => 51,  115 => 48,  108 => 44,  101 => 40,  95 => 37,  87 => 32,  80 => 28,  74 => 25,  67 => 20,  60 => 17,  54 => 14,  49 => 11,  44 => 9,  40 => 7,  34 => 6,  11 => 4,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/infocon.html.twig #}*/
/* */
/* */
/* {% extends "::Client.html.twig" %}*/
/* */
/*  {% block body1 %}*/
/* <h3>Les informations de votre contact ci-dessous</h3>*/
/* <div class="well" id="formul">*/
/*    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*    {{ form_errors(form) }}*/
/*  <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.date, " Annuversaire", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form. date) }}*/
/* */
/* */
/*         {{ form_widget(form. date) }}*/
/*       */
/*     </div>*/
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.nom, "nom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.nom) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*      <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.prenom, "prenom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.prenom) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.adresse, "adresse", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.adresse) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     */
/*     </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.phone, "Phone", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.phone) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}*/
/*       </div><hr>*/
/* <div>{{ form_widget(form.soumettre, {'attr': {'class': 'btn btn-primary glyphicon glyphicon-floppy-disk'}}) }} */
/* {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-primary glyphicon glyphicon-remove '}}) }} </div>*/
/* {{ form_end(form) }} */
/* </div>*/
/*  {% endblock %}*/
/* */
