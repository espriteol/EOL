<?php

/* EspritRubriqueBundle:Rubrique:show.html.twig */
class __TwigTemplate_56a167fe9782c4abf1679ccb4099fbf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Rubrique</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Daterub</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateRub"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EspritRubriqueBundle:Rubrique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  53 => 18,  34 => 5,  167 => 81,  165 => 79,  153 => 73,  129 => 78,  124 => 73,  110 => 62,  102 => 60,  23 => 1,  90 => 31,  76 => 26,  63 => 21,  59 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 30,  38 => 6,  155 => 58,  135 => 47,  126 => 77,  114 => 42,  84 => 37,  70 => 29,  67 => 22,  61 => 21,  94 => 35,  89 => 20,  85 => 28,  75 => 27,  68 => 32,  56 => 9,  87 => 33,  21 => 2,  26 => 2,  93 => 28,  88 => 29,  78 => 34,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 63,  142 => 6,  138 => 57,  136 => 5,  121 => 46,  117 => 44,  105 => 40,  91 => 41,  62 => 20,  49 => 17,  24 => 6,  25 => 3,  19 => 1,  79 => 35,  72 => 34,  69 => 24,  47 => 12,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 7,  139 => 50,  131 => 86,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 40,  98 => 30,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 15,  52 => 15,  50 => 18,  43 => 8,  41 => 7,  35 => 6,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 72,  164 => 59,  162 => 78,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 61,  103 => 37,  99 => 30,  95 => 29,  92 => 33,  86 => 39,  82 => 29,  80 => 19,  73 => 19,  64 => 10,  60 => 22,  57 => 11,  54 => 18,  51 => 14,  48 => 11,  45 => 16,  42 => 8,  39 => 10,  36 => 5,  33 => 6,  30 => 1,);
    }
}
