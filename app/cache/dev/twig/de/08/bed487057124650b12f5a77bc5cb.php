<?php

/* JuniorERPDashboardBundle:Admin/Etude:index.html.twig */
class __TwigTemplate_de08bed487057124650b12f5a77bc5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuniorERPDashboardBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'sidebar_list' => array($this, 'block_sidebar_list'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuniorERPDashboardBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_sidebar_list($context, array $blocks = array())
    {
        // line 6
        echo "\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_index"), "html", null, true);
        echo "\"><span class=\"nav-icon dboard-icon\"></span> Home</a></li>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_utilisateur_index"), "html", null, true);
        echo "\"><span class=\"nav-icon typo-icon\"></span> Utilisateurs</a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_etude_index"), "html", null, true);
        echo "\" class=\"active\"><span class=\"nav-icon typo-icon\"></span> Etudes <span class=\"active-nidicator\">&nbsp;</span></a></li>
\t
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<div id=\"content\">
\t<div class=\"container_12\">
\t\t<div class=\"grid_6\">
\t\t\t<div class=\"widget-panel\">
\t\t\t\t<div class=\"widget-top\">
\t\t\t\t\t<h4>Provenances</h4>
\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_index"), "html", null, true);
        echo "\"><span class=\"placeholder collapse\"></span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"widget-content module\">
\t\t\t\t\t<div class=\"content-block tbl-default\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "provenances"));
        foreach ($context['_seq'] as $context["_key"] => $context["provenance"]) {
            // line 27
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "provenance"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provenance'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"widget-panel\">
\t\t\t\t<div class=\"widget-top\">
\t\t\t\t\t<h4>Domaines d'action</h4>
\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_etude_domaine_ajouter"), "html", null, true);
        echo "\"><span class=\"placeholder collapse\"></span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"widget-content module\">
\t\t\t\t\t<div class=\"content-block tbl-default\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "domaines"));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domaine"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domaine"), "reference"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Admin/Etude:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  113 => 48,  109 => 47,  106 => 46,  102 => 45,  93 => 39,  83 => 31,  74 => 28,  71 => 27,  67 => 26,  58 => 20,  49 => 13,  46 => 12,  39 => 8,  35 => 7,  30 => 6,  27 => 5,);
    }
}
