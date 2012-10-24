<?php

/* JuniorERPDashboardBundle:Admin/Utilisateur:index.html.twig */
class __TwigTemplate_7f00cc99f47c86310221c4bbbe42b425 extends Twig_Template
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
        echo "\" class=\"active\"><span class=\"nav-icon typo-icon\"></span> Utilisateurs  <span class=\"active-nidicator\">&nbsp;</span></a></li>
\t
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div id=\"content\">
\t<div class=\"container_12\">
\t<div class=\"widget-panel grid_12\">
\t\t<div class=\"widget-top\">
\t\t\t<h4>Liste des utilisateurs</h4>
\t\t</div>
\t\t<div class=\"widget-content module\">
\t\t\t<table class=\"display data-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>E-mail</th>
\t\t\t\t\t\t<th>Portale</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "portable"), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Admin/Utilisateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  81 => 35,  77 => 34,  72 => 32,  69 => 31,  65 => 30,  45 => 12,  42 => 11,  35 => 7,  30 => 6,  27 => 5,);
    }
}
