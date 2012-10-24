<?php

/* JuniorERPDashboardBundle:Etude/Form:ajouterEtude.html.twig */
class __TwigTemplate_bb05c14fc6fef737e9fdac74e766c42a extends Twig_Template
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
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_ajouter"), "html", null, true);
        echo "\" class=\"topLabel\">
\t\t\t\t\t\t
\t<ul>
\t\t<li class=\"minLabel firstHalf\">
\t\t\t<fieldset>
\t\t\t\t<legend>Informations principales</legend>
\t\t\t\t<ul>
\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "intitule"), "Intitule de l'etude", array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "intitule"));
        echo "

    \t\t<!-- GŽnŽration de l'input. -->
    \t\t\t\t\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "intitule"), array("attr" => array("class" => "large texttips")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "objectif"), "Objectif", array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "objectif"));
        echo "

    \t\t<!-- GŽnŽration de l'input. -->
    \t\t\t\t\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "objectif"), array("attr" => array("class" => "large texttips")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "provenance"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "provenance"));
        echo "

    \t\t<!-- GŽnŽration de l'input. -->
    \t\t\t\t\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "provenance"), array("attr" => array("class" => "chzn-select full")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "domaine"), "Domain d'intervention", array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "domaine"));
        echo "

    \t\t\t\t\t<!-- GŽnŽration de l'input. -->\t\t\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "domaine"), array("attr" => array("class" => "chzn-select full")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</fieldset>
\t\t</li>
\t\t
\t\t<li>
\t\t\t<fieldset>
\t\t\t\t<legend>Commenditaires</legend>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "client"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "client"));
        echo "

    \t\t\t\t\t<!-- GŽnŽration de l'input. -->\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "client"), array("attr" => array("class" => "chzn-select full")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</fieldset>
\t\t</li>
\t\t<li>
\t\t\t<fieldset>
\t\t\t\t<legend>Suivi de l'etude</legend>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "chefProjet"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "chefProjet"));
        echo "

    \t\t\t\t\t<!-- GŽnŽration de l'input. -->\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "chefProjet"), array("attr" => array("class" => "chzn-select full")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "suiveurQualite"), null, array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "suiveurQualite"));
        echo "

    \t\t\t\t\t<!-- GŽnŽration de l'input. -->\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "suiveurQualite"), array("attr" => array("class" => "chzn-select full")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</fieldset>
\t\t</li>
\t\t<li>
\t\t\t<fieldset>
\t\t\t\t<legend>Infomations generales</legend>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 112
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "duree"), "Duree (en semaine)", array("attr" => array("class" => "fldTitle")));
        echo "
\t\t\t
\t\t\t\t\t\t<!-- Affichage des erreurs pour ce champ prŽcis. -->
    \t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "duree"));
        echo "

    \t\t\t\t\t<!-- GŽnŽration de l'input. -->\t\t\t
\t\t\t\t\t\t<div class =\"fieldwrap\">
\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "duree"));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</fieldset>
\t\t</li>
\t\t<li class=\"buttons bottom-round noboder\">
\t\t\t<div class =\"fieldwrap\">
\t\t\t\t<input name=\"\" type=\"submit\" value=\"Submit\" class=\"submit-button\"><input name=\"\" value=\"Clear Form\" type=\"reset\" class=\"submit-button\">
\t\t\t</div>
\t\t\t
\t\t</li>
\t</ul>

\t<!-- Les erreurs gŽnŽrales du formulaire. -->
\t";
        // line 134
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t\t\t\t\t
\t ";
        // line 136
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Etude/Form:ajouterEtude.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 136,  228 => 134,  210 => 119,  203 => 115,  197 => 112,  183 => 101,  176 => 97,  170 => 94,  163 => 90,  156 => 86,  150 => 83,  136 => 72,  129 => 68,  123 => 65,  108 => 53,  101 => 49,  95 => 46,  88 => 42,  80 => 37,  75 => 35,  68 => 31,  60 => 26,  54 => 23,  46 => 18,  38 => 13,  32 => 10,  17 => 1,);
    }
}
