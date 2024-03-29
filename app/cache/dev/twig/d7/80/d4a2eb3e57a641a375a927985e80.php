<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d780d4a2eb3e57a641a375a927985e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  201 => 80,  118 => 36,  157 => 55,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  221 => 99,  214 => 95,  164 => 59,  154 => 45,  151 => 53,  119 => 34,  100 => 27,  233 => 136,  228 => 103,  210 => 119,  203 => 81,  183 => 69,  170 => 63,  150 => 43,  136 => 72,  56 => 14,  83 => 26,  68 => 22,  207 => 83,  197 => 112,  194 => 76,  186 => 61,  180 => 68,  175 => 66,  173 => 51,  168 => 48,  163 => 90,  159 => 44,  149 => 39,  106 => 35,  143 => 49,  140 => 52,  114 => 34,  36 => 6,  18 => 1,  130 => 48,  105 => 22,  101 => 49,  98 => 24,  85 => 28,  65 => 18,  61 => 28,  45 => 9,  21 => 3,  76 => 39,  66 => 21,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 97,  165 => 47,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 37,  134 => 50,  132 => 43,  127 => 30,  123 => 38,  109 => 36,  93 => 33,  90 => 36,  54 => 19,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 20,  52 => 13,  97 => 26,  95 => 30,  88 => 32,  78 => 19,  71 => 37,  25 => 5,  72 => 17,  64 => 35,  53 => 23,  34 => 11,  92 => 23,  86 => 27,  79 => 20,  19 => 2,  42 => 10,  40 => 8,  29 => 4,  26 => 5,  224 => 91,  215 => 90,  211 => 88,  204 => 55,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 62,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 31,  103 => 28,  74 => 38,  47 => 17,  32 => 8,  24 => 3,  22 => 3,  23 => 10,  17 => 1,  69 => 21,  63 => 28,  58 => 26,  49 => 12,  43 => 12,  37 => 7,  20 => 2,  139 => 47,  131 => 48,  128 => 24,  125 => 36,  121 => 59,  115 => 39,  107 => 19,  99 => 34,  96 => 34,  91 => 31,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 12,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 46,  116 => 57,  113 => 43,  108 => 53,  104 => 40,  102 => 46,  94 => 32,  89 => 22,  87 => 34,  84 => 29,  81 => 28,  73 => 23,  70 => 17,  67 => 19,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 7,);
    }
}
