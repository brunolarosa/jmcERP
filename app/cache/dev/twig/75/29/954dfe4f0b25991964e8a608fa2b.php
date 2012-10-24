<?php

/* ::layoutDashboard.html.twig */
class __TwigTemplate_7529954dfe4f0b25991964e8a608fa2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<head>
<meta charset=\"utf-8\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<!-- Bootstrap Stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">

<!-- jquery-ui Stylesheets -->

<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/css/jquery.ui.all.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/jquery-ui.custom.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/timepicker/jquery-ui-timepicker.css"), "html", null, true);
        echo "\" media=\"screen\">


<!-- Uniform Stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\" media=\"screen\">

<!-- Fullcalendar -->
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"screen\">

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/fonts/icomoon/style.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/mooncake.min.c.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/plugins/plugins.min.css"), "html", null, true);
        echo "\" media=\"screen\">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->

<title>MoonCake :: Responsive Admin Template</title>

</head>

<body>
\t<div id=\"wrapper\">
\t
\t";
        // line 51
        $this->env->loadTemplate("::header.html.twig")->display($context);
        // line 52
        echo "        
        <div id=\"content-wrap\">
        \t<div id=\"content\">
            \t<div id=\"content-outer\">
                \t<div id=\"content-inner\">
                    \t<aside id=\"sidebar\">
                    \t\t";
        // line 58
        $this->displayBlock('navigation', $context, $blocks);
        // line 83
        echo "                        </aside>

                        <div id=\"sidebar-separator\"></div>
                        
                        
                        
                        <section id=\"main\" class=\"clearfix\">
                        ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <footer id=\"footer\">
            <div class=\"footer-left\">Junior MIAGE Concept</div>
            <div class=\"footer-right\"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>
        
    </div>

    <!-- Core Scripts -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Template Script -->
    
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/setup.js"), "html", null, true);
        echo "\"></script
    
    <!-- Uniform Script -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- jquery-ui Scripts -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/js/jquery-ui-1.8.24.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/timepicker/jquery-ui-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jui/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/excanvas.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/plugins/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/plugins/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/plugins/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Circular Stat -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("custom-plugins/circular-stat/circular-stat.min.js"), "html", null, true);
        echo "\"></script>

    <!-- SparkLine -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- iButton -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Full Calendar -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- DataTables -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/TableTools/js/TableTools.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Demo Scripts -->
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/demo/dataTables.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"../../ga.js\"></script>
</body>

</html>";
    }

    // line 58
    public function block_navigation($context, array $blocks = array())
    {
        // line 59
        echo "                    \t\t<nav id=\"navigation\" class=\"collapse\">
                        \t\t<ul>
                                \t<li>
                                    \t<span title=\"General\">
                                    \t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">General</span>
                                        </span>
                                    \t<ul class=\"inner-nav\">
                                        \t<li class=\"active\"><a href=\"dashboard.html\"><i class=\"icol-dashboard\"></i> Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"active\">
                                    \t<span title=\"Etude\">
                                    \t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Etude</span>
                                        </span>
                                    \t<ul class=\"inner-nav\">
                                        \t<li class=\"active\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_index"), "html", null, true);
        echo "\"><i class=\"icol-dashboard\"></i> Liste des Žtudes </a></li>
                                        \t<li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("JuniorERPDashboardBundle_etude_ajouter"), "html", null, true);
        echo "\"><i class=\"icol-calendar-2\"></i> Ajouter une Žtude </a></li>
                                        </ul>
                                    </li>
                            \t</ul>
                        \t</nav>
                    \t\t";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "::layoutDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 91,  306 => 90,  296 => 77,  292 => 76,  273 => 59,  270 => 58,  260 => 154,  254 => 151,  250 => 150,  246 => 149,  240 => 146,  234 => 143,  228 => 140,  222 => 137,  216 => 134,  212 => 133,  208 => 132,  204 => 131,  199 => 129,  190 => 123,  186 => 122,  182 => 121,  178 => 120,  172 => 117,  166 => 114,  162 => 113,  155 => 109,  151 => 108,  147 => 107,  143 => 106,  127 => 92,  125 => 90,  116 => 83,  114 => 58,  106 => 52,  104 => 51,  87 => 37,  83 => 36,  79 => 35,  71 => 30,  67 => 29,  61 => 26,  53 => 21,  46 => 17,  42 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }
}
