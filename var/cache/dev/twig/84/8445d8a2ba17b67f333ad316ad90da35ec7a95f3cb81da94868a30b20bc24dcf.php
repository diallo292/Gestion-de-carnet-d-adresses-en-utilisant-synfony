<?php

/* OCPlatformBundle:Advert:reussi.html.twig */
class __TwigTemplate_fc97d35823e56ce6c4b4958da1a0f47fd5bb47ab1755d3d10b8b51f51a2ea1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout_connexion.html.twig", "OCPlatformBundle:Advert:reussi.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout_connexion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db8df12164c37012cc3dbe71d3fb2a16ec4cf2bae07cde72113718d5ff29daab = $this->env->getExtension("native_profiler");
        $__internal_db8df12164c37012cc3dbe71d3fb2a16ec4cf2bae07cde72113718d5ff29daab->enter($__internal_db8df12164c37012cc3dbe71d3fb2a16ec4cf2bae07cde72113718d5ff29daab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:reussi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8df12164c37012cc3dbe71d3fb2a16ec4cf2bae07cde72113718d5ff29daab->leave($__internal_db8df12164c37012cc3dbe71d3fb2a16ec4cf2bae07cde72113718d5ff29daab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ba24ab20e61a0479060569682954f5350d62b0d83a25cdeacd387f72d1a5d9 = $this->env->getExtension("native_profiler");
        $__internal_47ba24ab20e61a0479060569682954f5350d62b0d83a25cdeacd387f72d1a5d9->enter($__internal_47ba24ab20e61a0479060569682954f5350d62b0d83a25cdeacd387f72d1a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id =\"connexion\"class=\"jumbotron\"  >
 
   bien jouer
</div>
";
        
        $__internal_47ba24ab20e61a0479060569682954f5350d62b0d83a25cdeacd387f72d1a5d9->leave($__internal_47ba24ab20e61a0479060569682954f5350d62b0d83a25cdeacd387f72d1a5d9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:reussi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout_connexion.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div id ="connexion"class="jumbotron"  >*/
/*  */
/*    bien jouer*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
