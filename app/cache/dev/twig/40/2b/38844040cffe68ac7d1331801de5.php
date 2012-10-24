<?php

/* JuniorERPDashboardBundle:Client:ajouter.html.twig */
class __TwigTemplate_402b38844040cffe68ac7d1331801de5 extends Twig_Template
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
        echo "\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_client_index"), "html", null, true);
        echo "\"><span class=\"nav-icon dboard-icon\"></span> Liste des Clients </a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_client_ajouter"), "html", null, true);
        echo "\" class=\"active\"><span class=\"nav-icon typo-icon\"></span> Ajouter un Client <span class=\"active-nidicator\">&nbsp;</span></a></li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div id=\"content\">
\t<div class=\"container_12\">
\t\t<div class=\"widget-panel grid_12\">
\t\t\t<div class=\"widget-top\">
\t\t\t\t<h4>Ajouter un client</h4>
\t\t\t</div>
\t\t\t<div class=\"widget-content module\">
\t\t\t\t<div class=\"form-grid\">
\t\t\t\t\t";
        // line 21
        $this->env->loadTemplate("JuniorERPDashboardBundle:Client/Form:ajouterForm.html.twig")->display($context);
        // line 22
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Client:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  55 => 21,  44 => 12,  41 => 11,  35 => 8,  30 => 7,  27 => 6,);
    }
}
