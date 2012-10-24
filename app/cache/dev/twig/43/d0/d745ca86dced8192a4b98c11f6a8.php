<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_43d0d745ca86dced8192a4b98c11f6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<form class=\"form-vertical\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t<div class=\"control-group\">
\t\t<input type=\"text\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"input-username\" name=\"_username\" class=\"big\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"/>
\t\t<input type=\"password\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"input-password\" name=\"_password\" class=\"big\" />
\t</div>
\t<div class=\"control-group\">
\t\t<label class=\"checkbox\">
\t\t\t<input type=\"checkbox\" class=\"uniform\" name=\"_remember_me\" value=\"on\" /> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t</label>
\t</div>
\t<div class=\"form-actions\">
\t\t<button type=\"submit\" name=\"_submit\" class=\"btn btn-success btn-block btn-large\">Login</button>
\t</div>
\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 11,  41 => 7,  35 => 6,  29 => 4,  26 => 3,);
    }
}
