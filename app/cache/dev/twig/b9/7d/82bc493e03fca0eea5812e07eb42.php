<?php

/* JuniorERPDashboardBundle::layout.html.twig */
class __TwigTemplate_b97d82bc493e03fca0eea5812e07eb42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutDashboard.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'sidebar_list' => array($this, 'block_sidebar_list'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"sidebar\">
\t<ul id=\"sidenav\" class=\"menu collapsible\">
\t\t";
        // line 7
        $this->displayBlock('sidebar_list', $context, $blocks);
        // line 9
        echo "\t</ul>
</div>

";
    }

    // line 7
    public function block_sidebar_list($context, array $blocks = array())
    {
        // line 8
        echo "\t\t";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "JuniorERPDashboardBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  52 => 14,  48 => 8,  45 => 7,  38 => 9,  36 => 7,  31 => 4,  28 => 3,  92 => 37,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  68 => 30,  64 => 29,  44 => 11,  41 => 10,  35 => 7,  30 => 6,  27 => 5,);
    }
}
