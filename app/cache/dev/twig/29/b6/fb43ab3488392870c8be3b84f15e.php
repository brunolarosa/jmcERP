<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_29b6fb43ab3488392870c8be3b84f15e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configure.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/logo-small.gif"), "html", null, true);
        echo "\" alt=\"Symfony\" />
            </div>
            <div id=\"symfony-content\">
                ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"version\">Symfony Standard Edition v.";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  201 => 80,  118 => 36,  157 => 55,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  221 => 99,  214 => 95,  164 => 59,  154 => 45,  151 => 53,  119 => 34,  100 => 27,  233 => 136,  228 => 103,  210 => 119,  203 => 81,  183 => 69,  170 => 63,  150 => 43,  136 => 72,  56 => 14,  83 => 26,  68 => 22,  207 => 83,  197 => 112,  194 => 76,  186 => 61,  180 => 68,  175 => 66,  173 => 51,  168 => 48,  163 => 90,  159 => 44,  149 => 39,  106 => 35,  143 => 49,  140 => 52,  114 => 34,  36 => 7,  18 => 1,  130 => 48,  105 => 37,  101 => 49,  98 => 24,  85 => 28,  65 => 18,  61 => 6,  45 => 9,  21 => 3,  76 => 24,  66 => 21,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 97,  165 => 47,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 37,  134 => 50,  132 => 43,  127 => 30,  123 => 38,  109 => 36,  93 => 33,  90 => 31,  54 => 19,  133 => 49,  124 => 41,  111 => 33,  80 => 26,  60 => 16,  52 => 17,  97 => 26,  95 => 30,  88 => 32,  78 => 19,  71 => 37,  25 => 5,  72 => 22,  64 => 35,  53 => 23,  34 => 11,  92 => 23,  86 => 30,  79 => 20,  19 => 1,  42 => 10,  40 => 8,  29 => 6,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 55,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 62,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 31,  103 => 28,  74 => 38,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 10,  17 => 1,  69 => 21,  63 => 17,  58 => 26,  49 => 16,  43 => 11,  37 => 7,  20 => 2,  139 => 47,  131 => 48,  128 => 24,  125 => 36,  121 => 59,  115 => 39,  107 => 19,  99 => 33,  96 => 34,  91 => 31,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 12,  33 => 7,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 46,  116 => 57,  113 => 40,  108 => 38,  104 => 40,  102 => 46,  94 => 32,  89 => 22,  87 => 34,  84 => 29,  81 => 28,  73 => 23,  70 => 21,  67 => 15,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 12,  38 => 8,  35 => 7,  31 => 6,  28 => 7,);
    }
}
