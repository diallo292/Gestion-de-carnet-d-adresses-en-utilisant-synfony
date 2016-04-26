<?php

/* ::acueil.html.twig */
class __TwigTemplate_c603037704991842b6bfedb0b2980317811d44f869c516ece302a8c1e07a4dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d3cfd898d1dd0fbd2e14f8588ee2d95f802d7e90dee4ccc50164b6c42298fba = $this->env->getExtension("native_profiler");
        $__internal_5d3cfd898d1dd0fbd2e14f8588ee2d95f802d7e90dee4ccc50164b6c42298fba->enter($__internal_5d3cfd898d1dd0fbd2e14f8588ee2d95f802d7e90dee4ccc50164b6c42298fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::acueil.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "<META HTTP-EQUIV=\"Content-Style-Type\" CONTENT=\"text/css\">
<link href=\"navbar.css\" rel=\"stylesheet\">
<script type=\"text/javascript\" async=\"\" src=\"https://ssl.google-analytics.com/ga.js\"></script>
<Style>
 #nav {
  padding: 0; margin: 0;

  text-align: center; /* centrer le texte */
}
#attion{
  color:#F00;
}
#nav li {
  display: inline;
  list-style: none;

}
#nav a {
  display:inline-block;
  margin: 0 30px;
  margin-top:20px;
  margin-bottom:20px;
}

#jumb{
 margin-right:295px;
  margin-left:227px;
}
#navig{ margin-top:20px;
 margin-right:295px;
  margin-left:227px;
}


# div formul{
  margin-left:300px;

  
}
body {
    background: #252525;
    font-family: 'Open Sans';
    font-weight: 300;
}
.main {
    background: white url(machine_a_ecrire.jpg) right top no-repeat;
    background-size: contain;
    padding: 80px 20px 20px;
    margin-top: 120px;
}
@media only screen and (max-width : 992px) {
    .main {
        background: white;
        margin-top: 30px;
    }
}
h1 {
    font-family: 'Lato', sans-serif;
    font-weight: 200;
    color: #555;
    margin-bottom: 0;
}
h2 {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    color: #999;
    font-size: 18px;
    margin-top: 5px;
}
form {
    margin-top: 20px;
   margin-right: 0px; 
}
input.form-control , input[type=\"submit\"] , .btn {
    border-radius: 0px;
}
.btn {
    transition: all ease-in-out 0.2s;
}

h3
{
  font-size: 32px;
  text-shadow: -1px -1px #0c0, 1px 1px #060, -3px 0 4px #000;
  font-family:Arial, Helvetica, sans-serif;
  color: #00F;
  padding:16px;
  font-weight:lighter;
  -moz-box-shadow: 2px 2px 6px #888;  
  -webkit-box-shadow: 2px 2px 6px #888;  
  box-shadow:2px 2px 6px #888;  
  text-align:center;
  display:block;
  margin-left: 205px;
    
}
#formul {

  margin-left:200px;

  background-image:url(carnet_adresse.jpg);

}
</Style>
</head>

<body  >  
  <div class=\"container\">
 </br>
        <nav id=\"navig\" class=\"navbar navbar-default\" >

    <ul id=\"nav\"><!--
  --><li><a   href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("hello_the_world");
        echo "\">Accueil</a></li><!--
  --><li><a   href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li><!--
  --><li><a   href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a></li><!--
  <!--
  --><li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
</ul> </nav>
<div  class=\"jumbotron\" id=\"jumb\">
      <h2>  Bienvenue dans la plateforme de gestion de Carnet d'adresses </h2>
      <p>   
        Ce plateforme  comme son nom l'indique  vous offre la possibilité de creer votre propre carnet d'adresses en ligne 
        Ainsi on vous invite de vous inscrire afin de pouvoire Ajouter supprimer vos contacts .
      </p>
    </div>

          <div id=\"content\" class=\"col-md-9\">
        ";
        // line 144
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "      </div>
  </div>

  ";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        // line 153
        echo "
</body>
</html>";
        
        $__internal_5d3cfd898d1dd0fbd2e14f8588ee2d95f802d7e90dee4ccc50164b6c42298fba->leave($__internal_5d3cfd898d1dd0fbd2e14f8588ee2d95f802d7e90dee4ccc50164b6c42298fba_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a3a7af156dd48b84940d2221957e05960895e81eadb53c4d37a0d79223e702 = $this->env->getExtension("native_profiler");
        $__internal_37a3a7af156dd48b84940d2221957e05960895e81eadb53c4d37a0d79223e702->enter($__internal_37a3a7af156dd48b84940d2221957e05960895e81eadb53c4d37a0d79223e702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet d'adresse sous Symfony2";
        
        $__internal_37a3a7af156dd48b84940d2221957e05960895e81eadb53c4d37a0d79223e702->leave($__internal_37a3a7af156dd48b84940d2221957e05960895e81eadb53c4d37a0d79223e702_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73ef1f1fd9a4e64f6eac42ec74fc64f66cabf50ddf7baab2b7f084dbb33b7745 = $this->env->getExtension("native_profiler");
        $__internal_73ef1f1fd9a4e64f6eac42ec74fc64f66cabf50ddf7baab2b7f084dbb33b7745->enter($__internal_73ef1f1fd9a4e64f6eac42ec74fc64f66cabf50ddf7baab2b7f084dbb33b7745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

  ";
        
        $__internal_73ef1f1fd9a4e64f6eac42ec74fc64f66cabf50ddf7baab2b7f084dbb33b7745->leave($__internal_73ef1f1fd9a4e64f6eac42ec74fc64f66cabf50ddf7baab2b7f084dbb33b7745_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ac43ace5f75107c2c9f578860b96dad7d32086aa36307aebff0bd9d5bced59 = $this->env->getExtension("native_profiler");
        $__internal_d2ac43ace5f75107c2c9f578860b96dad7d32086aa36307aebff0bd9d5bced59->enter($__internal_d2ac43ace5f75107c2c9f578860b96dad7d32086aa36307aebff0bd9d5bced59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "        ";
        
        $__internal_d2ac43ace5f75107c2c9f578860b96dad7d32086aa36307aebff0bd9d5bced59->leave($__internal_d2ac43ace5f75107c2c9f578860b96dad7d32086aa36307aebff0bd9d5bced59_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b21405b173196f3dec1f510c4e51d6cecdd56f0adfc0b62cd85163fc6c5d1b6 = $this->env->getExtension("native_profiler");
        $__internal_7b21405b173196f3dec1f510c4e51d6cecdd56f0adfc0b62cd85163fc6c5d1b6->enter($__internal_7b21405b173196f3dec1f510c4e51d6cecdd56f0adfc0b62cd85163fc6c5d1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7b21405b173196f3dec1f510c4e51d6cecdd56f0adfc0b62cd85163fc6c5d1b6->leave($__internal_7b21405b173196f3dec1f510c4e51d6cecdd56f0adfc0b62cd85163fc6c5d1b6_prof);

    }

    public function getTemplateName()
    {
        return "::acueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 150,  244 => 149,  237 => 145,  231 => 144,  221 => 13,  219 => 12,  213 => 11,  201 => 9,  192 => 153,  190 => 149,  185 => 146,  183 => 144,  169 => 133,  164 => 131,  160 => 130,  156 => 129,  42 => 17,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Carnet d'adresse sous Symfony2{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*   {% endblock %}*/
/* <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">*/
/* <link href="navbar.css" rel="stylesheet">*/
/* <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>*/
/* <Style>*/
/*  #nav {*/
/*   padding: 0; margin: 0;*/
/* */
/*   text-align: center; /* centrer le texte *//* */
/* }*/
/* #attion{*/
/*   color:#F00;*/
/* }*/
/* #nav li {*/
/*   display: inline;*/
/*   list-style: none;*/
/* */
/* }*/
/* #nav a {*/
/*   display:inline-block;*/
/*   margin: 0 30px;*/
/*   margin-top:20px;*/
/*   margin-bottom:20px;*/
/* }*/
/* */
/* #jumb{*/
/*  margin-right:295px;*/
/*   margin-left:227px;*/
/* }*/
/* #navig{ margin-top:20px;*/
/*  margin-right:295px;*/
/*   margin-left:227px;*/
/* }*/
/* */
/* */
/* # div formul{*/
/*   margin-left:300px;*/
/* */
/*   */
/* }*/
/* body {*/
/*     background: #252525;*/
/*     font-family: 'Open Sans';*/
/*     font-weight: 300;*/
/* }*/
/* .main {*/
/*     background: white url(machine_a_ecrire.jpg) right top no-repeat;*/
/*     background-size: contain;*/
/*     padding: 80px 20px 20px;*/
/*     margin-top: 120px;*/
/* }*/
/* @media only screen and (max-width : 992px) {*/
/*     .main {*/
/*         background: white;*/
/*         margin-top: 30px;*/
/*     }*/
/* }*/
/* h1 {*/
/*     font-family: 'Lato', sans-serif;*/
/*     font-weight: 200;*/
/*     color: #555;*/
/*     margin-bottom: 0;*/
/* }*/
/* h2 {*/
/*     font-family: 'Lato', sans-serif;*/
/*     font-weight: 300;*/
/*     color: #999;*/
/*     font-size: 18px;*/
/*     margin-top: 5px;*/
/* }*/
/* form {*/
/*     margin-top: 20px;*/
/*    margin-right: 0px; */
/* }*/
/* input.form-control , input[type="submit"] , .btn {*/
/*     border-radius: 0px;*/
/* }*/
/* .btn {*/
/*     transition: all ease-in-out 0.2s;*/
/* }*/
/* */
/* h3*/
/* {*/
/*   font-size: 32px;*/
/*   text-shadow: -1px -1px #0c0, 1px 1px #060, -3px 0 4px #000;*/
/*   font-family:Arial, Helvetica, sans-serif;*/
/*   color: #00F;*/
/*   padding:16px;*/
/*   font-weight:lighter;*/
/*   -moz-box-shadow: 2px 2px 6px #888;  */
/*   -webkit-box-shadow: 2px 2px 6px #888;  */
/*   box-shadow:2px 2px 6px #888;  */
/*   text-align:center;*/
/*   display:block;*/
/*   margin-left: 205px;*/
/*     */
/* }*/
/* #formul {*/
/* */
/*   margin-left:200px;*/
/* */
/*   background-image:url(carnet_adresse.jpg);*/
/* */
/* }*/
/* </Style>*/
/* </head>*/
/* */
/* <body  >  */
/*   <div class="container">*/
/*  </br>*/
/*         <nav id="navig" class="navbar navbar-default" >*/
/* */
/*     <ul id="nav"><!--*/
/*   --><li><a   href="{{ path('hello_the_world')}}">Accueil</a></li><!--*/
/*   --><li><a   href="{{ path('fos_user_security_login')}}">Connexion</a></li><!--*/
/*   --><li><a   href="{{ path('fos_user_security_logout')}}">Deconnexion</a></li><!--*/
/*   <!--*/
/*   --><li><a href="{{ path('contact')}}">Contact</a></li>*/
/* </ul> </nav>*/
/* <div  class="jumbotron" id="jumb">*/
/*       <h2>  Bienvenue dans la plateforme de gestion de Carnet d'adresses </h2>*/
/*       <p>   */
/*         Ce plateforme  comme son nom l'indique  vous offre la possibilité de creer votre propre carnet d'adresses en ligne */
/*         Ainsi on vous invite de vous inscrire afin de pouvoire Ajouter supprimer vos contacts .*/
/*       </p>*/
/*     </div>*/
/* */
/*           <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
