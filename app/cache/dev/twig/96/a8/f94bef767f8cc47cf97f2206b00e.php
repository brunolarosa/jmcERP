<?php

/* ::topBar.html.twig */
class __TwigTemplate_96a8f94bef767f8cc47cf97f2206b00e extends Twig_Template
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
        echo "
<div id=\"topbar\">
\t<div class=\"search-box\">
\t\t<form action=\"#\" method=\"post\">
\t\t\t<input name=\"searchtext\" class=\"search-text\" type=\"text\">
\t\t\t<input name=\"searchbtn\" type=\"submit\" class=\"search-button\">
\t\t</form>
\t</div>
\t<ul class=\"notify-button\">
\t\t<li class=\"notify-alert\"><a href=\"#\"><span class=\"new-alert\">30</span></a></li>
\t\t<li class=\"msg-alert\"><a href=\"#\"><span class=\"new-alert\">65</span></a></li>
\t</ul>
</div>
<div id=\"usermenu\">
\t<a href=\"#\" class=\"admin-user\"><span class=\"mnu-indicator\"></span>
\t";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "    \t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "
    \t<span class=\"user-icon\"></span></a>
\t<div class=\"sub-menu\">
\t\t<ul>
\t\t\t<li><a href=\"#\"><span class=\"icon-block-black cog-b\"></span>Account Settings</a></li>
\t\t\t<li><a href=\"#\"><span class=\"icon-block-black info-about-b\"></span>Help?</a></li>
\t\t\t<li><a href=\"#\"><span class=\"icon-block-black box-incoming-b\"></span>Inbox</a></li>
\t\t\t<li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><span class=\"icon-block-black locked-tw-b\"></span>Logout</a></li>
\t\t</ul>
\t\t<div class=\"admin-thumb\">
\t\t\t<img src=\"images/user-thumb1.png\" alt=\"user\" width=\"50\" height=\"50\"><span><a href=\"#\" class=\"p-edit\">Edit&nbsp;Profile</a></span>
\t\t</div>
\t</div>
\t";
        } else {
            // line 31
            echo "    \t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
\t";
        }
        // line 33
        echo "\t
</div>
";
    }

    public function getTemplateName()
    {
        return "::topBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 33,  57 => 31,  47 => 24,  34 => 16,  26 => 5,  21 => 3,  17 => 1,  207 => 56,  204 => 55,  200 => 53,  197 => 52,  194 => 51,  188 => 62,  186 => 61,  180 => 57,  178 => 55,  175 => 54,  173 => 51,  168 => 48,  165 => 47,  163 => 46,  159 => 44,  156 => 43,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  42 => 9,  39 => 8,  33 => 4,  55 => 15,  52 => 14,  48 => 8,  45 => 10,  38 => 9,  36 => 17,  31 => 4,  28 => 6,  92 => 37,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  68 => 30,  64 => 29,  44 => 11,  41 => 10,  35 => 7,  30 => 3,  27 => 5,);
    }
}
