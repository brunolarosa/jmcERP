<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e5276406cbcd66ef84cca7f8a0578f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'erreurs' => array($this, 'block_erreurs'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/login.min.c.css"), "html", null, true);
        echo "\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-login.min.css"), "html", null, true);
        echo "\" media=\"screen\">

";
    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

 <!-- Login Script -->
    \t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/login.js"), "html", null, true);
        echo "\"></script>
    \t\t

";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "<div id=\"login-wrap\">

\t<div id=\"login-ribbon\"><i class=\"icon-lock\"></i></div>

\t<div id=\"login-buttons\">
\t\t<div class=\"btn-wrap\">
\t\t\t<button type=\"button\" class=\"btn btn-inverse\" data-target=\"#login-form\"><i class=\"icon-key\"></i></button>
\t\t</div>
\t\t<div class=\"btn-wrap\">
\t\t\t<button type=\"button\" class=\"btn btn-inverse\"data-target=\"#forget-form\"><i class=\"icon-question-sign\"></i></button>
\t\t</div>
\t</div>

\t<div id=\"login-inner\">

\t\t<div id=\"login-circle\">
\t\t\t<section id=\"login-form\" class=\"login-inner-form active\" data-angle=\"0\">
\t\t\t\t<h1>Login</h1>
\t\t\t\t\t";
        // line 45
        $this->displayBlock('erreurs', $context, $blocks);
        // line 47
        echo "            \t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "
\t\t\t</section>
\t\t\t\t
\t\t\t<section id=\"forget-form\" class=\"login-inner-form\" data-angle=\"180\">
\t\t\t\t<h1>Reset Password</h1>
\t\t\t\t<form class=\"form-vertical\" action=\"dashboard.html\">
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"big\" placeholder=\"Enter Your Email...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-block btn-large\">Reset</button>
\t\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</section>
\t\t</div>

\t</div>
</div>


";
    }

    // line 45
    public function block_erreurs($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t\t\t";
    }

    // line 47
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 48
        echo "            \t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  133 => 47,  129 => 46,  126 => 45,  100 => 49,  97 => 47,  95 => 45,  75 => 27,  72 => 26,  64 => 20,  58 => 17,  55 => 16,  52 => 15,  45 => 11,  41 => 10,  36 => 8,  33 => 7,  30 => 6,);
    }
}
