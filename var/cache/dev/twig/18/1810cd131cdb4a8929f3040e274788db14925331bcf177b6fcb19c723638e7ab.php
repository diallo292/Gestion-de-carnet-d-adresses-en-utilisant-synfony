<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_a6f9d6c0ef55671b3eb2e44632cec05fd0c27c12513827835a03f2e321dbb4a3 extends Twig_Template
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
        $__internal_7df096e8147864766ac5757c685448db082e1143f2e3bc9fc5479cbe19c4bc53 = $this->env->getExtension("native_profiler");
        $__internal_7df096e8147864766ac5757c685448db082e1143f2e3bc9fc5479cbe19c4bc53->enter($__internal_7df096e8147864766ac5757c685448db082e1143f2e3bc9fc5479cbe19c4bc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Veuillez vous  inscrire ci-dessous</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => " DateNaissance"));
        echo "

      ";
        // line 17
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateNaissance", array()), 'errors');
        echo "


        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateNaissance", array()), 'widget');
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
        // line 59
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "

      ";
        // line 62
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 66
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div> <div class=\"form-group\">
      ";
        // line 70
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Phone"));
        echo "

      ";
        // line 73
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 77
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div> <div class=\"form-group\">
      ";
        // line 81
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email"));
        echo "

      ";
        // line 84
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 88
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>

       </div> <div class=\"form-group\">
      ";
        // line 93
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "username"));
        echo "

      ";
        // line 96
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 100
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div> <div class=\"form-group\">
      ";
        // line 104
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot_de_passe"));
        echo "

      ";
        // line 107
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
        ";
        // line 111
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
     <div class=\"form-group\">
      ";
        // line 115
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "pays"));
        echo "

      ";
        // line 118
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "

      <div class=\"col-sm-3\">
        ";
        // line 122
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
<div>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "soumettre", array()), 'widget', array("attr" => array("class" => "btn btn-primary glyphicon glyphicon-floppy-disk")));
        echo " 
";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annuler", array()), 'widget', array("attr" => array("class" => "btn btn-primary glyphicon glyphicon-remove ")));
        echo " </div>
";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
</div>";
        
        $__internal_7df096e8147864766ac5757c685448db082e1143f2e3bc9fc5479cbe19c4bc53->leave($__internal_7df096e8147864766ac5757c685448db082e1143f2e3bc9fc5479cbe19c4bc53_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 127,  246 => 126,  242 => 125,  235 => 122,  228 => 118,  222 => 115,  215 => 111,  208 => 107,  202 => 104,  195 => 100,  188 => 96,  182 => 93,  174 => 88,  167 => 84,  161 => 81,  154 => 77,  147 => 73,  141 => 70,  134 => 66,  127 => 62,  121 => 59,  114 => 55,  107 => 51,  101 => 48,  94 => 44,  87 => 40,  81 => 37,  73 => 32,  66 => 28,  60 => 25,  53 => 20,  46 => 17,  40 => 14,  35 => 11,  30 => 9,  25 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* <h3>Veuillez vous  inscrire ci-dessous</h3>*/
/* <div class="well" id="formul">*/
/*    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*    {{ form_errors(form) }}*/
/*  <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.DateNaissance, " DateNaissance", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form. DateNaissance) }}*/
/* */
/* */
/*         {{ form_widget(form. DateNaissance) }}*/
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
/*     </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.ville, "Ville", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.ville) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
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
/*       </div>*/
/*     </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.Email, "Email", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.Email) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.Email, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/* */
/*        </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.username, "username", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.username) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div> <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.password, "Mot_de_passe", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.password) }}*/
/* */
/*       <div class="col-sm-6">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*      <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.pays, "pays", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.pays) }}*/
/* */
/*       <div class="col-sm-3">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* <div>{{ form_widget(form.soumettre, {'attr': {'class': 'btn btn-primary glyphicon glyphicon-floppy-disk'}}) }} */
/* {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-primary glyphicon glyphicon-remove '}}) }} </div>*/
/* {{ form_end(form) }} */
/* </div>*/
