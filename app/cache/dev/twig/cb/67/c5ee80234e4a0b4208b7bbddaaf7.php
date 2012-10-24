<?php

/* JuniorERPDashboardBundle:Admin/Etude/Form:ajouterDomaineForm.html.twig */
class __TwigTemplate_cb67c5ee80234e4a0b4208b7bbddaaf7 extends Twig_Template
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
        // line 1
        echo "
<form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_etude_domaine_ajouter"), "html", null, true);
        echo "\" class=\"leftLabel\">
\t\t\t\t\t\t
\t<ul>
\t\t<li>
\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "nom"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t";
        // line 8
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "nom"));
        echo "

    \t\t<!-- GŽnŽration de l'input. -->
    \t\t\t\t\t\t\t
\t\t\t<div class =\"fieldwrap\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nom"), array("attr" => array("class" => "large texttips")));
        echo "
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "reference"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "reference"));
        echo "

    \t\t<!-- GŽnŽration de l'input. -->
    \t\t\t\t
\t\t\t<div class =\"fieldwrap\">
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "reference"), array("attr" => array("class" => "large texttips")));
        echo "
\t\t\t</div>
\t\t</li>
\t\t
\t\t<li class=\"buttons bottom-round noboder\">
\t\t\t<div class =\"fieldwrap\">
\t\t\t\t<input name=\"\" type=\"submit\" value=\"Submit\" class=\"submit-button\"><input name=\"\" value=\"Clear Form\" type=\"reset\" class=\"submit-button\">
\t\t\t</div>
\t\t</li>
\t</ul>

\t<!-- Les erreurs gŽnŽrales du formulaire. -->
\t";
        // line 36
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t\t\t\t\t
\t ";
        // line 38
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Admin/Etude/Form:ajouterDomaineForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  77 => 36,  54 => 19,  42 => 13,  34 => 8,  29 => 6,  20 => 2,  17 => 1,  62 => 24,  60 => 23,  49 => 17,  46 => 13,  39 => 9,  35 => 8,  30 => 7,  27 => 6,);
    }
}
