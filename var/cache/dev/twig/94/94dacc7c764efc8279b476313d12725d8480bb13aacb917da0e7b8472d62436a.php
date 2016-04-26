<?php

/* OCPlatformBundle::layout_connexion.html.twig */
class __TwigTemplate_e5a7c06067dfbba6c9fbdf0502e82a0cb6d3cafb34868506c106e5b85dac4bc9 extends Twig_Template
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
        $__internal_f9dc74808a3cae968284ec58b7c9059fd52aa2685229a0279cae84978df9c0a2 = $this->env->getExtension("native_profiler");
        $__internal_f9dc74808a3cae968284ec58b7c9059fd52aa2685229a0279cae84978df9c0a2->enter($__internal_f9dc74808a3cae968284ec58b7c9059fd52aa2685229a0279cae84978df9c0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout_connexion.html.twig"));

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
#navig{ margin-top:20px;
  
}
h1
{
  font-size: 32px;
  text-shadow: -1px -1px #0c0, 1px 1px #060, -3px 0 4px #000;
  font-family:Arial, Helvetica, sans-serif;
  color: #090;
  padding:16px;
  font-weight:lighter;
  -moz-box-shadow: 2px 2px 6px #888;  
  -webkit-box-shadow: 2px 2px 6px #888;  
  box-shadow:2px 2px 6px #888;  
  text-align:center;
  display:block;
  margin:16px;
  background-image:url(.jpg);  
}
body {
    background: #252525;
    font-family: 'Open Sans';
    font-weight: 300;
}
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
    font-weight: 300;
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
    margin-top: 60px;
}
input.form-control , input[type=\"submit\"] , .btn {
    border-radius: 0px;
}
.btn {
    transition: all ease-in-out 0.2s;
}
.credits {
    margin-top: 100px;
    color: #999;
    font-size: 12px;
}
.credits a {
    color: inherit;
}
</Style>
</head>

<body>
  <div class=\"container\">

        <nav id=\"navig\" class=\"navbar navbar-default\" >

    
    <ul id=\"nav\"><!--
  --><li><a   href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("hello_the_world");
        echo "\">Accueil</a></li><!--
  --><li><a   href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("hello22");
        echo "\">Connexion</a></li><!--
  --><li><a   href=\"#\">Deconnexion</a></li><!--
  <!--
  --><li><a href=\"#\">Contact</a></li>
</ul> </nav>

          <div id=\"content\" class=\"col-md-9\">
        ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "      </div>
    </div>

    <hr>
  </div>

  ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "
</body>
</html>";
        
        $__internal_f9dc74808a3cae968284ec58b7c9059fd52aa2685229a0279cae84978df9c0a2->leave($__internal_f9dc74808a3cae968284ec58b7c9059fd52aa2685229a0279cae84978df9c0a2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_172a606f2a4ccf1379fbae3a71d006f92754d712ccd84bbea5a82ee095a07594 = $this->env->getExtension("native_profiler");
        $__internal_172a606f2a4ccf1379fbae3a71d006f92754d712ccd84bbea5a82ee095a07594->enter($__internal_172a606f2a4ccf1379fbae3a71d006f92754d712ccd84bbea5a82ee095a07594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet d'adresse sous Symfony2";
        
        $__internal_172a606f2a4ccf1379fbae3a71d006f92754d712ccd84bbea5a82ee095a07594->leave($__internal_172a606f2a4ccf1379fbae3a71d006f92754d712ccd84bbea5a82ee095a07594_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f28480aa9cb0d20ea6511ededb16b01671f1956d48d29811c54b3572959d7ff = $this->env->getExtension("native_profiler");
        $__internal_6f28480aa9cb0d20ea6511ededb16b01671f1956d48d29811c54b3572959d7ff->enter($__internal_6f28480aa9cb0d20ea6511ededb16b01671f1956d48d29811c54b3572959d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

  ";
        
        $__internal_6f28480aa9cb0d20ea6511ededb16b01671f1956d48d29811c54b3572959d7ff->leave($__internal_6f28480aa9cb0d20ea6511ededb16b01671f1956d48d29811c54b3572959d7ff_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_88b2493e7bc227723d70d4148e74e2b68dded5cf326435b32b2085df062ccf6e = $this->env->getExtension("native_profiler");
        $__internal_88b2493e7bc227723d70d4148e74e2b68dded5cf326435b32b2085df062ccf6e->enter($__internal_88b2493e7bc227723d70d4148e74e2b68dded5cf326435b32b2085df062ccf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "        ";
        
        $__internal_88b2493e7bc227723d70d4148e74e2b68dded5cf326435b32b2085df062ccf6e->leave($__internal_88b2493e7bc227723d70d4148e74e2b68dded5cf326435b32b2085df062ccf6e_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a68a0967b64fd947952a8358c546b4bf87fa611e9f50c48162042554604f064 = $this->env->getExtension("native_profiler");
        $__internal_7a68a0967b64fd947952a8358c546b4bf87fa611e9f50c48162042554604f064->enter($__internal_7a68a0967b64fd947952a8358c546b4bf87fa611e9f50c48162042554604f064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7a68a0967b64fd947952a8358c546b4bf87fa611e9f50c48162042554604f064->leave($__internal_7a68a0967b64fd947952a8358c546b4bf87fa611e9f50c48162042554604f064_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout_connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 130,  218 => 129,  211 => 122,  205 => 121,  195 => 13,  193 => 12,  187 => 11,  175 => 9,  166 => 133,  164 => 129,  156 => 123,  154 => 121,  144 => 114,  140 => 113,  42 => 17,  40 => 11,  35 => 9,  26 => 2,);
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
/*   text-align: center; /* centrer le texte *//* */
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
/* #navig{ margin-top:20px;*/
/*   */
/* }*/
/* h1*/
/* {*/
/*   font-size: 32px;*/
/*   text-shadow: -1px -1px #0c0, 1px 1px #060, -3px 0 4px #000;*/
/*   font-family:Arial, Helvetica, sans-serif;*/
/*   color: #090;*/
/*   padding:16px;*/
/*   font-weight:lighter;*/
/*   -moz-box-shadow: 2px 2px 6px #888;  */
/*   -webkit-box-shadow: 2px 2px 6px #888;  */
/*   box-shadow:2px 2px 6px #888;  */
/*   text-align:center;*/
/*   display:block;*/
/*   margin:16px;*/
/*   background-image:url(.jpg);  */
/* }*/
/* body {*/
/*     background: #252525;*/
/*     font-family: 'Open Sans';*/
/*     font-weight: 300;*/
/* }*/
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
/*     font-weight: 300;*/
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
/*     margin-top: 60px;*/
/* }*/
/* input.form-control , input[type="submit"] , .btn {*/
/*     border-radius: 0px;*/
/* }*/
/* .btn {*/
/*     transition: all ease-in-out 0.2s;*/
/* }*/
/* .credits {*/
/*     margin-top: 100px;*/
/*     color: #999;*/
/*     font-size: 12px;*/
/* }*/
/* .credits a {*/
/*     color: inherit;*/
/* }*/
/* </Style>*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/* */
/*         <nav id="navig" class="navbar navbar-default" >*/
/* */
/*     */
/*     <ul id="nav"><!--*/
/*   --><li><a   href="{{ path('hello_the_world')}}">Accueil</a></li><!--*/
/*   --><li><a   href="{{ path('hello22')}}">Connexion</a></li><!--*/
/*   --><li><a   href="#">Deconnexion</a></li><!--*/
/*   <!--*/
/*   --><li><a href="#">Contact</a></li>*/
/* </ul> </nav>*/
/* */
/*           <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
