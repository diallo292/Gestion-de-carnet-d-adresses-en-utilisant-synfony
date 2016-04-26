<?php

/* ::layout.html.twig */
class __TwigTemplate_2e67ce85e4da778b843d883bd81446e14c71c7f2e03729577f58d22ae6085594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be56034476fc58a4015049cc64c18cfecfb4783a9be117be71798bb8b3afeb13 = $this->env->getExtension("native_profiler");
        $__internal_be56034476fc58a4015049cc64c18cfecfb4783a9be117be71798bb8b3afeb13->enter($__internal_be56034476fc58a4015049cc64c18cfecfb4783a9be117be71798bb8b3afeb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
  --><li><a   href=\"fos_user_security_logout\">Deconnexion</a></li><!--
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
      ";
        // line 140
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 144
        echo " 
      </p>
    </div>

          <div id=\"content\" class=\"col-md-9\">
        ";
        // line 149
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "      </div>
  </div>

  ";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "
</body>
</html>";
        
        $__internal_be56034476fc58a4015049cc64c18cfecfb4783a9be117be71798bb8b3afeb13->leave($__internal_be56034476fc58a4015049cc64c18cfecfb4783a9be117be71798bb8b3afeb13_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed58f1cf81e3c5e65d6802a093db08e8ee0e8f787fa709c94fd0329f743543f1 = $this->env->getExtension("native_profiler");
        $__internal_ed58f1cf81e3c5e65d6802a093db08e8ee0e8f787fa709c94fd0329f743543f1->enter($__internal_ed58f1cf81e3c5e65d6802a093db08e8ee0e8f787fa709c94fd0329f743543f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet d'adresse sous Symfony2";
        
        $__internal_ed58f1cf81e3c5e65d6802a093db08e8ee0e8f787fa709c94fd0329f743543f1->leave($__internal_ed58f1cf81e3c5e65d6802a093db08e8ee0e8f787fa709c94fd0329f743543f1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56fa8caeb838ad02eae06a76cea14e4e1fc2549338af2c39c0930cbc15054007 = $this->env->getExtension("native_profiler");
        $__internal_56fa8caeb838ad02eae06a76cea14e4e1fc2549338af2c39c0930cbc15054007->enter($__internal_56fa8caeb838ad02eae06a76cea14e4e1fc2549338af2c39c0930cbc15054007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

  ";
        
        $__internal_56fa8caeb838ad02eae06a76cea14e4e1fc2549338af2c39c0930cbc15054007->leave($__internal_56fa8caeb838ad02eae06a76cea14e4e1fc2549338af2c39c0930cbc15054007_prof);

    }

    // line 140
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc6c0c87ab1d66bda34a43ccf61997fa0d517a2875d8ecbb7fdc6fa46a7900c9 = $this->env->getExtension("native_profiler");
        $__internal_fc6c0c87ab1d66bda34a43ccf61997fa0d517a2875d8ecbb7fdc6fa46a7900c9->enter($__internal_fc6c0c87ab1d66bda34a43ccf61997fa0d517a2875d8ecbb7fdc6fa46a7900c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 141
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 142
            echo "
    Connecté en tant que ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "  ";
        }
        // line 144
        echo "      ";
        
        $__internal_fc6c0c87ab1d66bda34a43ccf61997fa0d517a2875d8ecbb7fdc6fa46a7900c9->leave($__internal_fc6c0c87ab1d66bda34a43ccf61997fa0d517a2875d8ecbb7fdc6fa46a7900c9_prof);

    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd6b67fd19932811c598877a8cab1058e4f299d1a0657025c120f3619fe0a98 = $this->env->getExtension("native_profiler");
        $__internal_0fd6b67fd19932811c598877a8cab1058e4f299d1a0657025c120f3619fe0a98->enter($__internal_0fd6b67fd19932811c598877a8cab1058e4f299d1a0657025c120f3619fe0a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "        ";
        
        $__internal_0fd6b67fd19932811c598877a8cab1058e4f299d1a0657025c120f3619fe0a98->leave($__internal_0fd6b67fd19932811c598877a8cab1058e4f299d1a0657025c120f3619fe0a98_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97ae8130aefb803e6b82a4b294f256d4cc933211ca1abdbcaf3bcf55af252bf7 = $this->env->getExtension("native_profiler");
        $__internal_97ae8130aefb803e6b82a4b294f256d4cc933211ca1abdbcaf3bcf55af252bf7->enter($__internal_97ae8130aefb803e6b82a4b294f256d4cc933211ca1abdbcaf3bcf55af252bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_97ae8130aefb803e6b82a4b294f256d4cc933211ca1abdbcaf3bcf55af252bf7->leave($__internal_97ae8130aefb803e6b82a4b294f256d4cc933211ca1abdbcaf3bcf55af252bf7_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 155,  269 => 154,  262 => 150,  256 => 149,  249 => 144,  245 => 143,  242 => 142,  240 => 141,  234 => 140,  224 => 13,  222 => 12,  216 => 11,  204 => 9,  195 => 158,  193 => 154,  188 => 151,  186 => 149,  179 => 144,  177 => 140,  167 => 133,  161 => 130,  157 => 129,  43 => 17,  41 => 11,  36 => 9,  27 => 2,);
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
/*   --><li><a   href="fos_user_security_logout">Deconnexion</a></li><!--*/
/*   <!--*/
/*   --><li><a href="{{ path('contact')}}">Contact</a></li>*/
/* </ul> </nav>*/
/* <div  class="jumbotron" id="jumb">*/
/*       <h2>  Bienvenue dans la plateforme de gestion de Carnet d'adresses </h2>*/
/*       <p>   */
/*         Ce plateforme  comme son nom l'indique  vous offre la possibilité de creer votre propre carnet d'adresses en ligne */
/*         Ainsi on vous invite de vous inscrire afin de pouvoire Ajouter supprimer vos contacts .*/
/*       {% block fos_user_content %}*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*     Connecté en tant que {{ app.user.username }}  {% endif %}*/
/*       {% endblock %} */
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
