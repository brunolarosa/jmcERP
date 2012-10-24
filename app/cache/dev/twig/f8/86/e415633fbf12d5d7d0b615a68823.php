<?php

/* JuniorERPDashboardBundle:Admin/Etude:ajouterDomaine.html.twig */
class __TwigTemplate_f886e415633fbf12d5d7d0b615a68823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuniorERPDashboardBundle::layout.html.twig");

        $this->blocks = array(
            'sidebar_list' => array($this, 'block_sidebar_list'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuniorERPDashboardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_sidebar_list($context, array $blocks = array())
    {
        // line 7
        echo "<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_index"), "html", null, true);
        echo "\"><span class=\"nav-icon dboard-icon\"></span> Home</a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_utilisateur_index"), "html", null, true);
        echo "\"><span class=\"nav-icon typo-icon\"></span> Utilisateurs</a></li>
\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_etude_index"), "html", null, true);
        echo "\" class=\"active\"><span class=\"nav-icon typo-icon\"></span> Etudes <span class=\"active-nidicator\">&nbsp;</span></a></li>
\t\t
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div id=\"content\">
\t<div class=\"container_12\">
\t\t<div class=\"widget-panel grid_12\">
\t\t\t<div class=\"widget-top\">
\t\t\t\t<h4>Ajouter un domaine</h4>
\t\t\t</div>
\t\t\t<div class=\"widget-content module\">
\t\t\t\t<div class=\"form-grid\">
\t\t\t\t\t";
        // line 23
        $this->env->loadTemplate("JuniorERPDashboardBundle:Admin/Etude/Form:ajouterDomaineForm.html.twig")->display($context);
        // line 24
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Admin/Etude:ajouterDomaine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  60 => 23,  49 => 14,  46 => 13,  39 => 9,  35 => 8,  30 => 7,  27 => 6,);
    }
}
