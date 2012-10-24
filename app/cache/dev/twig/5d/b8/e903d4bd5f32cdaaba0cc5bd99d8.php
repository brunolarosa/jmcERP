<?php

/* ::header.html.twig */
class __TwigTemplate_5db8e903d4bd5f32cdaaba0cc5bd99d8 extends Twig_Template
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
        echo "        <header id=\"header\" class=\"navbar navbar-inverse\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
\t\t\t\t\t<div class=\"brand-wrap pull-left\">
\t\t\t\t\t\t<div class=\"brand-img\">
\t\t\t\t\t\t\t<a class=\"brand\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    
                    <div id=\"header-right\" class=\"clearfix\">
\t\t\t\t\t\t<div id=\"nav-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"collapsed\">
\t\t\t\t\t\t\t<i class=\"icon-caret-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"header-search\">
\t\t\t\t\t\t\t<span id=\"search-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<form class=\"navbar-search\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-query\" placeholder=\"Search\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"dropdown-lists\">
\t\t\t\t\t\t\t<a class=\"item\" href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"item-icon\"><i class=\"icon-exclamation-sign\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"item-label\">Notifications</span>
\t\t\t\t\t\t\t\t<span class=\"item-count\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"item\" href=\"mail.html\">
\t\t\t\t\t\t\t\t<span class=\"item-icon\"><i class=\"icon-envelope\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"item-label\">Messages</span>
\t\t\t\t\t\t\t\t<span class=\"item-count\">16</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        
                        <div id=\"header-functions\" class=\"pull-right\">
                        \t<div id=\"user-info\" class=\"clearfix\">
                                <span class=\"info\">
                                \tBienvenue
                                    <span class=\"name\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "</span>
                                </span>
                            \t<div class=\"avatar\">
                                \t<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                                    \t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/pp.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                    \t<li><a href=\"#\"><i class=\"icol-user\"></i> My Profile</a></li>                                      
                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\"><i class=\"icol-key\"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id=\"logout-ribbon\">
                            \t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 55,  77 => 50,  69 => 45,  62 => 41,  25 => 7,  17 => 1,);
    }
}
