<?php

/* OCPlatformBundle::acueil.html.twig */
class __TwigTemplate_9d2d50cc60fd3913ca401ad0fa631d7f3452aafc8d984202b2f88912bf65ee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::acueil.html.twig", "OCPlatformBundle::acueil.html.twig", 3);
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
        $__internal_fa69aa738cebf83e68f4e7303be26561669fc202d4e20de9e087af54493a3625 = $this->env->getExtension("native_profiler");
        $__internal_fa69aa738cebf83e68f4e7303be26561669fc202d4e20de9e087af54493a3625->enter($__internal_fa69aa738cebf83e68f4e7303be26561669fc202d4e20de9e087af54493a3625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::acueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa69aa738cebf83e68f4e7303be26561669fc202d4e20de9e087af54493a3625->leave($__internal_fa69aa738cebf83e68f4e7303be26561669fc202d4e20de9e087af54493a3625_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1270837044208c0ed87356dcf78918cd1895ffaa9857f21c99a2c526472c5dbd = $this->env->getExtension("native_profiler");
        $__internal_1270837044208c0ed87356dcf78918cd1895ffaa9857f21c99a2c526472c5dbd->enter($__internal_1270837044208c0ed87356dcf78918cd1895ffaa9857f21c99a2c526472c5dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1270837044208c0ed87356dcf78918cd1895ffaa9857f21c99a2c526472c5dbd->leave($__internal_1270837044208c0ed87356dcf78918cd1895ffaa9857f21c99a2c526472c5dbd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4182c51f19f24d0a957bd5d85ffea17e1d277d56de2d474ea6d0ffa6439ace0 = $this->env->getExtension("native_profiler");
        $__internal_b4182c51f19f24d0a957bd5d85ffea17e1d277d56de2d474ea6d0ffa6439ace0->enter($__internal_b4182c51f19f24d0a957bd5d85ffea17e1d277d56de2d474ea6d0ffa6439ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4182c51f19f24d0a957bd5d85ffea17e1d277d56de2d474ea6d0ffa6439ace0->leave($__internal_b4182c51f19f24d0a957bd5d85ffea17e1d277d56de2d474ea6d0ffa6439ace0_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3670aa1aa2c65ebfb0823ef0373da760c81fe997c113d5ca9938b82cdb5a44c7 = $this->env->getExtension("native_profiler");
        $__internal_3670aa1aa2c65ebfb0823ef0373da760c81fe997c113d5ca9938b82cdb5a44c7->enter($__internal_3670aa1aa2c65ebfb0823ef0373da760c81fe997c113d5ca9938b82cdb5a44c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_3670aa1aa2c65ebfb0823ef0373da760c81fe997c113d5ca9938b82cdb5a44c7->leave($__internal_3670aa1aa2c65ebfb0823ef0373da760c81fe997c113d5ca9938b82cdb5a44c7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::acueil.html.twig";
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
