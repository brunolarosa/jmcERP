<?php

/* JuniorERPDashboardBundle:Etude:voir.html.twig */
class __TwigTemplate_dd8f0427d6abe1b860dac2b9804cd414 extends Twig_Template
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
        echo "\"><span class=\"nav-icon dboard-icon\"></span> Liste des etudes </a></li>
\t<li>
\t\t<a class=\"active\" href=\"#\">Lol</a>
\t\t\t<ul class=\"acitem\" style=\"display: block;\">
\t\t\t\t<li>Document</li>
\t\t\t\t<li></li>
\t\t\t\t<li></li>
\t\t\t</ul>
\t</li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
<div id=\"content\">
\t<div class=\"container_12\">
\t<div class=\"widget-panel grid_6\">
\t\t<div class=\"widget-top\">
\t\t\t<h4>Liste des clients</h4>
\t\t</div>
\t\t<div class=\"widget-content module\">
\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etude"), "intitule"), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle:Etude:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  48 => 18,  45 => 17,  30 => 6,  27 => 5,);
    }
}
