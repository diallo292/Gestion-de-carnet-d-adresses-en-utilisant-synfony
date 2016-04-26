<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_54de4191dad5cbf153b3afcbd36620384fc3d7f6830c57b56fb6a753bc9acd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::acueil.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::acueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10cfde4ab6b61adfc06ff310bdfb42eae78a71dcae861d8ad61ff863c4bde9d7 = $this->env->getExtension("native_profiler");
        $__internal_10cfde4ab6b61adfc06ff310bdfb42eae78a71dcae861d8ad61ff863c4bde9d7->enter($__internal_10cfde4ab6b61adfc06ff310bdfb42eae78a71dcae861d8ad61ff863c4bde9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10cfde4ab6b61adfc06ff310bdfb42eae78a71dcae861d8ad61ff863c4bde9d7->leave($__internal_10cfde4ab6b61adfc06ff310bdfb42eae78a71dcae861d8ad61ff863c4bde9d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24ae3fe1d9334bcc1b7d9ffcfe05241955441e87d9a54d1189ce0600a7b1972e = $this->env->getExtension("native_profiler");
        $__internal_24ae3fe1d9334bcc1b7d9ffcfe05241955441e87d9a54d1189ce0600a7b1972e->enter($__internal_24ae3fe1d9334bcc1b7d9ffcfe05241955441e87d9a54d1189ce0600a7b1972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24ae3fe1d9334bcc1b7d9ffcfe05241955441e87d9a54d1189ce0600a7b1972e->leave($__internal_24ae3fe1d9334bcc1b7d9ffcfe05241955441e87d9a54d1189ce0600a7b1972e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5a210c11ee5f19dbceeef3bda4c9ad63c38aa1489749107ae69d7051da19186 = $this->env->getExtension("native_profiler");
        $__internal_a5a210c11ee5f19dbceeef3bda4c9ad63c38aa1489749107ae69d7051da19186->enter($__internal_a5a210c11ee5f19dbceeef3bda4c9ad63c38aa1489749107ae69d7051da19186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Inscription</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a5a210c11ee5f19dbceeef3bda4c9ad63c38aa1489749107ae69d7051da19186->leave($__internal_a5a210c11ee5f19dbceeef3bda4c9ad63c38aa1489749107ae69d7051da19186_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4e44a8beb37c94c68d04521542d861f9db662fac4e782e6880ba6084d7189ce5 = $this->env->getExtension("native_profiler");
        $__internal_4e44a8beb37c94c68d04521542d861f9db662fac4e782e6880ba6084d7189ce5->enter($__internal_4e44a8beb37c94c68d04521542d861f9db662fac4e782e6880ba6084d7189ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_4e44a8beb37c94c68d04521542d861f9db662fac4e782e6880ba6084d7189ce5->leave($__internal_4e44a8beb37c94c68d04521542d861f9db662fac4e782e6880ba6084d7189ce5_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::acueil.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Inscription</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
