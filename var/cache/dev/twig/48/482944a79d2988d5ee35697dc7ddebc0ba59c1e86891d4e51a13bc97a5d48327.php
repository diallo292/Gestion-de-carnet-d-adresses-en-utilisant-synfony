<?php

/* ::Client.html.twig */
class __TwigTemplate_7d0bac03170ec1127a283a6a17c93c185be5d40d57d8e755faf68703e989a6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body1' => array($this, 'block_body1'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a065d92cca15efcb5426c7cbf527f4062649ecd356fe59ad7c57776d24c81081 = $this->env->getExtension("native_profiler");
        $__internal_a065d92cca15efcb5426c7cbf527f4062649ecd356fe59ad7c57776d24c81081->enter($__internal_a065d92cca15efcb5426c7cbf527f4062649ecd356fe59ad7c57776d24c81081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Client.html.twig"));

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
  margin-left:0px;
}
#navig{ margin-top:20px;
 margin-right:295px;
  margin-left:300px;
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
  margin-right: 300px;
    
}
#formul {

  margin-right:300px;
}
#formul1 {

  margin-right:300px;
}

/* make sidebar nav vertical */ 
@media (min-width: 768px) {
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul {
    float: none;
  }
  .sidebar-nav .navbar ul:not {
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
}
</Style>
</head>

<body  >  
  <div class=\"container\">
 </br>
        <nav id=\"navig\" class=\"navbar navbar-default\" >

    <ul id=\"nav\"><!--
  --><li><a   href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("Page_client");
        echo "\">Actualiser</a></li><!--  -->
 <li><a   href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion <span class=\"glyphicon glyphicon-off\"></a></li>
</ul> </nav>

<div class=\"row\">
  <div class=\"col-sm-3\">
    <div class=\"sidebar-nav\">
      <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <span class=\"visible-xs navbar-brand\">Sidebar menu</span>
        </div>
        <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Menu de gestions de votre Carnet </a></li>
             <ul class=\"nav navbar-nav\">
            <li ><a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("Ajout");
        echo "\" >Ajouter un Contact <span class=\"glyphicon glyphicon-plus-sign\"></span></span></a></li>
            <li  ><a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("Lister");
        echo "\">Lister les Contacts<span class=\"glyphicon glyphicon-list\"></span></a></li>
            <li ><a href=\"#\">Suprimer un Contact <span class=\"glyphicon glyphicon-remove-sign\"></a></li>
          </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class=\"col-sm-9\">
    
<div>
      <h2>  Bienvenue dans la plateforme de gestion de Carnet d'adresses </h2>
     ";
        // line 186
        $this->displayBlock('body1', $context, $blocks);
        // line 189
        echo "    </div>
  </div>
</div>

          <div id=\"content\" class=\"col-md-9\">
        ";
        // line 194
        $this->displayBlock('body', $context, $blocks);
        // line 197
        echo "      </div>
  </div>

  ";
        // line 200
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
        echo "
</body>
</html>";
        
        $__internal_a065d92cca15efcb5426c7cbf527f4062649ecd356fe59ad7c57776d24c81081->leave($__internal_a065d92cca15efcb5426c7cbf527f4062649ecd356fe59ad7c57776d24c81081_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_98cb506c94fcb6bfcaae76033cc4386536c4f4cf31f5aaffef5e8807d61afc41 = $this->env->getExtension("native_profiler");
        $__internal_98cb506c94fcb6bfcaae76033cc4386536c4f4cf31f5aaffef5e8807d61afc41->enter($__internal_98cb506c94fcb6bfcaae76033cc4386536c4f4cf31f5aaffef5e8807d61afc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet d'adresse sous Symfony2";
        
        $__internal_98cb506c94fcb6bfcaae76033cc4386536c4f4cf31f5aaffef5e8807d61afc41->leave($__internal_98cb506c94fcb6bfcaae76033cc4386536c4f4cf31f5aaffef5e8807d61afc41_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdb2a4d0d3352d48dc6b23552679c751b0a7c20ed24ad8c364dd0a1c532e0068 = $this->env->getExtension("native_profiler");
        $__internal_bdb2a4d0d3352d48dc6b23552679c751b0a7c20ed24ad8c364dd0a1c532e0068->enter($__internal_bdb2a4d0d3352d48dc6b23552679c751b0a7c20ed24ad8c364dd0a1c532e0068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

  ";
        
        $__internal_bdb2a4d0d3352d48dc6b23552679c751b0a7c20ed24ad8c364dd0a1c532e0068->leave($__internal_bdb2a4d0d3352d48dc6b23552679c751b0a7c20ed24ad8c364dd0a1c532e0068_prof);

    }

    // line 186
    public function block_body1($context, array $blocks = array())
    {
        $__internal_5262b146d7cdcc995c3d7fc681ec608828dae8185588b8c5712e3cc0cb16315e = $this->env->getExtension("native_profiler");
        $__internal_5262b146d7cdcc995c3d7fc681ec608828dae8185588b8c5712e3cc0cb16315e->enter($__internal_5262b146d7cdcc995c3d7fc681ec608828dae8185588b8c5712e3cc0cb16315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        // line 187
        echo "        
        ";
        
        $__internal_5262b146d7cdcc995c3d7fc681ec608828dae8185588b8c5712e3cc0cb16315e->leave($__internal_5262b146d7cdcc995c3d7fc681ec608828dae8185588b8c5712e3cc0cb16315e_prof);

    }

    // line 194
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ade93a3380017921379641afc0731052585efadf1cbf05bea549d32e61725aa = $this->env->getExtension("native_profiler");
        $__internal_8ade93a3380017921379641afc0731052585efadf1cbf05bea549d32e61725aa->enter($__internal_8ade93a3380017921379641afc0731052585efadf1cbf05bea549d32e61725aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 195
        echo "
        ";
        
        $__internal_8ade93a3380017921379641afc0731052585efadf1cbf05bea549d32e61725aa->leave($__internal_8ade93a3380017921379641afc0731052585efadf1cbf05bea549d32e61725aa_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6175f1b26e475c0fa7215a5db76af1fb8533a70328b4c8e7c47b711a3f2611d = $this->env->getExtension("native_profiler");
        $__internal_a6175f1b26e475c0fa7215a5db76af1fb8533a70328b4c8e7c47b711a3f2611d->enter($__internal_a6175f1b26e475c0fa7215a5db76af1fb8533a70328b4c8e7c47b711a3f2611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_a6175f1b26e475c0fa7215a5db76af1fb8533a70328b4c8e7c47b711a3f2611d->leave($__internal_a6175f1b26e475c0fa7215a5db76af1fb8533a70328b4c8e7c47b711a3f2611d_prof);

    }

    public function getTemplateName()
    {
        return "::Client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 201,  311 => 200,  303 => 195,  297 => 194,  289 => 187,  283 => 186,  273 => 13,  271 => 12,  265 => 11,  253 => 9,  244 => 204,  242 => 200,  237 => 197,  235 => 194,  228 => 189,  226 => 186,  211 => 174,  207 => 173,  184 => 153,  180 => 152,  43 => 17,  41 => 11,  36 => 9,  27 => 2,);
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
/*   margin-left:0px;*/
/* }*/
/* #navig{ margin-top:20px;*/
/*  margin-right:295px;*/
/*   margin-left:300px;*/
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
/*     */
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
/*   margin-right: 300px;*/
/*     */
/* }*/
/* #formul {*/
/* */
/*   margin-right:300px;*/
/* }*/
/* #formul1 {*/
/* */
/*   margin-right:300px;*/
/* }*/
/* */
/* /* make sidebar nav vertical *//*  */
/* @media (min-width: 768px) {*/
/*   .sidebar-nav .navbar .navbar-collapse {*/
/*     padding: 0;*/
/*     max-height: none;*/
/*   }*/
/*   .sidebar-nav .navbar ul {*/
/*     float: none;*/
/*   }*/
/*   .sidebar-nav .navbar ul:not {*/
/*     display: block;*/
/*   }*/
/*   .sidebar-nav .navbar li {*/
/*     float: none;*/
/*     display: block;*/
/*   }*/
/*   .sidebar-nav .navbar li a {*/
/*     padding-top: 12px;*/
/*     padding-bottom: 12px;*/
/*   }*/
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
/*   --><li><a   href="{{ path('Page_client')}}">Actualiser</a></li><!--  -->*/
/*  <li><a   href="{{ path('fos_user_security_logout')}}">Deconnexion <span class="glyphicon glyphicon-off"></a></li>*/
/* </ul> </nav>*/
/* */
/* <div class="row">*/
/*   <div class="col-sm-3">*/
/*     <div class="sidebar-nav">*/
/*       <div class="navbar navbar-default" role="navigation">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <span class="visible-xs navbar-brand">Sidebar menu</span>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">Menu de gestions de votre Carnet </a></li>*/
/*              <ul class="nav navbar-nav">*/
/*             <li ><a href="{{ path('Ajout')}}" >Ajouter un Contact <span class="glyphicon glyphicon-plus-sign"></span></span></a></li>*/
/*             <li  ><a href="{{ path('Lister')}}">Lister les Contacts<span class="glyphicon glyphicon-list"></span></a></li>*/
/*             <li ><a href="#">Suprimer un Contact <span class="glyphicon glyphicon-remove-sign"></a></li>*/
/*           </ul>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="col-sm-9">*/
/*     */
/* <div>*/
/*       <h2>  Bienvenue dans la plateforme de gestion de Carnet d'adresses </h2>*/
/*      {% block body1 %}*/
/*         */
/*         {% endblock %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/*           <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/* */
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
