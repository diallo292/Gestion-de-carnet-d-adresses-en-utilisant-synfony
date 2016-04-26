{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{% block title %}Carnet d'adresse sous Symfony2{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  {% endblock %}


  #nav {
  padding: 0; margin: 0;
}
#nav li {
  display: inline;
  list-style: none; /* nécessaire pour IE7 */
}
</head>

<body>
  <div class="container">
    <div id="header" class="jumbotron">
    <ul id="nav"><!--
  --><li><a href="#">Accueil</a></li><!--
  --><li><a href="#">Services</a></li><!--
  --><li><a href="#">À propos</a></li><!--
  --><li><a href="#">Contact</a></li>
</ul>
      <h1>  Bienvenue dans Ma plateforme de Carnet d'adresses </h1>
      <p>   
        Ce plateforme  comme son nom l'indique  vous offre la possibilité de creer votre propre carnet d'adresses en ligne 
        Ainsi on vous invite de vous inscrire afin de pouvoire Ajouter supprimer vos contacts .
      .
      </p>
      <p>
        <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">
          Incription »
        </a>
      </p>
    </div>

    <div class="row">
      <div id="menu" class="col-md-3">
        <h3>Les annonces</h3>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="{{ path('hello2') }}">Accueil</a></li>
          <li><a href="{{ path('hello_the_world') }}">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}
      </div>
      <div id="content" class="col-md-9">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  {% endblock %}

</body>
</html>