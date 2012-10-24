<?php

/* AlphaLemonElFinderBundle:ElFinder:show.html.twig */
class __TwigTemplate_afe84b23c53573d1dc9fd54e2e9af525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'stylesheet_files' => array($this, 'block_stylesheet_files'),
            'javascript_files' => array($this, 'block_javascript_files'),
            'init_script' => array($this, 'block_init_script'),
            'elfinder_html' => array($this, 'block_elfinder_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('sidebar', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('stylesheet_files', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('javascript_files', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('init_script', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('elfinder_html', $context, $blocks);
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheet_files($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f2b8cdf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2b8cdf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f2b8cdf_jquery-ui_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
            // asset "f2b8cdf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2b8cdf_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f2b8cdf_elfinder_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
            // asset "f2b8cdf_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2b8cdf_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f2b8cdf_theme_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "f2b8cdf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f2b8cdf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f2b8cdf.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_javascript_files($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d854fa1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d854fa1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d854fa1_jquery-1.6.2.min_1.js");
            // line 23
            echo "
    <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
            // asset "d854fa1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d854fa1_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d854fa1_jquery-ui.min_2.js");
            // line 23
            echo "
    <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
            // asset "d854fa1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d854fa1_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d854fa1_elfinder.min_3.js");
            // line 23
            echo "
    <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "d854fa1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d854fa1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d854fa1.js");
            // line 23
            echo "
    <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 28
    public function block_init_script($context, array $blocks = array())
    {
        // line 29
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var f = \$('#finder').elfinder({
            url : './al_elFinderConnect',
            lang : 'en'
        })
    })
</script>
";
    }

    // line 39
    public function block_elfinder_html($context, array $blocks = array())
    {
        // line 40
        echo "<div id=\"finder\">finder <span>here</span></div>
";
    }

    public function getTemplateName()
    {
        return "AlphaLemonElFinderBundle:ElFinder:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 40,  155 => 39,  143 => 29,  140 => 28,  132 => 24,  129 => 23,  122 => 24,  119 => 23,  113 => 24,  110 => 23,  104 => 24,  101 => 23,  97 => 18,  94 => 17,  91 => 16,  63 => 12,  58 => 7,  55 => 6,  50 => 3,  46 => 39,  43 => 38,  41 => 28,  38 => 27,  36 => 16,  33 => 15,  31 => 6,  28 => 5,  26 => 3,  22 => 1,);
    }
}
