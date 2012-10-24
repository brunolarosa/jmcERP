<?php

/* JuniorERPDashboardBundle:Etude:index.html.twig */
class __TwigTemplate_88a646e85cccb4408381c57fb3f89ac1 extends Twig_Template
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

    // line 5
    public function block_sidebar_list($context, array $blocks = array())
    {
        // line 6
        echo "\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_index"), "html", null, true);
        echo "\" class=\"active\"><span class=\"nav-icon dboard-icon\"></span> Liste des etudes <span class=\"active-nidicator\">&nbsp;</span></a></li>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_ajouter"), "html", null, true);
        echo "\"><span class=\"nav-icon typo-icon\"></span> Creer une etude </a></li>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"main-header\" class=\"page-header\">
\t<ul class=\"breadcrumb\">
\t\t<li>
\t\t\t<i class=\"icon-home\"></i>JuniorERP
\t\t\t<span class=\"divider\">&raquo;</span>
\t\t</li>
        <li>
        \t<a href=\"#\">Dashboard</a>
        </li>
\t</ul>
                             
    <h1 id=\"main-heading\">
       \tDashboard <span>This is the place where everything started</span>
    </h1>
</div>
                            
<div id=\"main-content\">
\t<div class=\"row-fluid\">
    \t<div class=\"span12 widget\">
    \t\t<div class=\"widget-header\">
    \t\t\t<span class=\"title\">Liste des clients</span>
            </div>
            <div class=\"widget-content table-container\">
            \t<table id=\"demo-dtable-02\" class=\"table table-striped\">
                \t<thead>
                    \t<tr>
                        \t<th>Intitule</th>
\t\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t\t<th>Chargé d'affaire</th>
\t\t\t\t\t\t\t<th>Resp. Qualité</th>
\t\t\t\t\t\t\t<th>Etat</th>
                        </tr>
                \t</thead>
                    <tfoot>
                    \t<tr>
                        \t<td>Intitule</td>
\t\t\t\t\t\t\t<td>Client</td>
\t\t\t\t\t\t\t<td>Chargé d'affaire</td>
\t\t\t\t\t\t\t<td>Resp. Qualité</td>
\t\t\t\t\t\t\t<th>Etat</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "etudes"));
        foreach ($context['_seq'] as $context["_key"] => $context["etude"]) {
            // line 55
            echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_voir", array("id" => $this->getAttribute($this->getContext($context, "etude"), "getId", array(), "method"))), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etude"), "intitule"), "html", null, true);
            echo "</strong></a></td>
\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etude"), "client"), "societe"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etude"), "chefProjet"), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "etude"), "suiveurQualite"), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>En Cours</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etude'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "                    </tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Etude:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 64,  111 => 60,  107 => 59,  103 => 58,  97 => 57,  93 => 55,  89 => 54,  44 => 11,  41 => 10,  35 => 7,  30 => 6,  27 => 5,);
    }
}
