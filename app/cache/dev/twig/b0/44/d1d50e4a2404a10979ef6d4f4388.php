<?php

/* ::layout.html.twig */
class __TwigTemplate_b044d1d50e4a2404a10979ef6d4f4388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t<!-- stylesheets -->
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
\t\t
\t\t<!-- Jquery -->
";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        // line 39
        echo "</head>
<body>
\t\t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "JMC Dashboard";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
<!-- Bootstrap Stylesheet -->


<!-- Uniform Stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" media=\"screen\">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/fonts/icomoon/style.css"), "html", null, true);
        echo "\" media=\"screen\">


";
    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/libs/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
    
   

    <!-- Uniform Script -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" />


";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  103 => 35,  95 => 30,  87 => 28,  69 => 14,  62 => 9,  59 => 8,  48 => 43,  46 => 41,  42 => 39,  40 => 28,  35 => 25,  27 => 5,  21 => 1,  111 => 41,  108 => 30,  104 => 28,  101 => 27,  98 => 26,  92 => 37,  90 => 29,  84 => 32,  82 => 30,  79 => 21,  77 => 26,  72 => 23,  70 => 22,  66 => 20,  63 => 19,  56 => 15,  53 => 5,  50 => 13,  43 => 9,  36 => 5,  33 => 8,  30 => 3,);
    }
}
