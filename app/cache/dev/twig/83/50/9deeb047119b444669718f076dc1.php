<?php

/* ::shortcurBar.html.twig */
class __TwigTemplate_83509deeb047119b444669718f076dc1 extends Twig_Template
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
        echo "\t<div id=\"shortcur-bar\">
\t\t<ul>
\t\t\t<li><a href=\"#\"><span class=\"sc-icon dashboard\"></span> Dashboard </a></li>
\t\t\t<li><a href=\"#\"><span class=\"sc-icon satistics\"></span> Statistics</a></li>
\t\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_client_index"), "html", null, true);
        echo "\"><span class=\"sc-icon userlist\"></span> Clients </a></li>
\t\t\t<li><a href=\"#\"><span class=\"sc-icon tasklist\"></span> Task List </a></li>
\t\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_index"), "html", null, true);
        echo "\"><span class=\"sc-icon content-c\"></span> Etudes </a></li>
\t\t\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show_el_finder"), "html", null, true);
        echo "\"><span class=\"sc-icon medialibrary\"></span> Documents </a></li>
\t\t\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_admin_index"), "html", null, true);
        echo "\"><span class=\"sc-icon settings\"></span> Settings </a></li>
\t\t</ul>
\t</div>";
    }

    public function getTemplateName()
    {
        return "::shortcurBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 8,  28 => 7,  23 => 5,  17 => 1,);
    }
}
