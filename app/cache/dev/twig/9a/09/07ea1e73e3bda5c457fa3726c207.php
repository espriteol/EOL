<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_9a0907ea1e73e3bda5c457fa3726c207 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  27 => 14,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  604 => 368,  597 => 361,  593 => 360,  567 => 346,  559 => 341,  535 => 326,  529 => 321,  511 => 310,  504 => 306,  496 => 301,  492 => 299,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  410 => 253,  398 => 243,  394 => 242,  390 => 240,  360 => 222,  354 => 219,  305 => 182,  297 => 177,  271 => 163,  262 => 157,  222 => 138,  207 => 129,  100 => 66,  68 => 30,  73 => 32,  48 => 21,  24 => 2,  22 => 12,  19 => 1,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  672 => 139,  670 => 138,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  635 => 122,  631 => 121,  622 => 119,  616 => 117,  611 => 115,  608 => 370,  587 => 357,  571 => 104,  569 => 103,  549 => 334,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  497 => 87,  488 => 82,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 284,  448 => 71,  440 => 272,  438 => 69,  429 => 64,  412 => 60,  407 => 59,  387 => 50,  382 => 48,  369 => 43,  364 => 41,  350 => 35,  345 => 33,  334 => 27,  323 => 24,  314 => 21,  311 => 20,  290 => 14,  287 => 13,  278 => 8,  267 => 4,  260 => 330,  258 => 329,  246 => 323,  241 => 149,  231 => 306,  218 => 286,  215 => 285,  210 => 273,  195 => 252,  192 => 251,  187 => 118,  174 => 214,  159 => 193,  154 => 186,  141 => 172,  136 => 165,  131 => 157,  129 => 145,  126 => 83,  119 => 114,  116 => 113,  114 => 108,  111 => 107,  109 => 102,  94 => 57,  50 => 15,  28 => 3,  26 => 3,  20 => 1,  686 => 206,  680 => 145,  677 => 202,  675 => 201,  669 => 137,  659 => 197,  654 => 195,  642 => 193,  639 => 123,  636 => 191,  627 => 120,  624 => 184,  607 => 182,  590 => 109,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  560 => 168,  538 => 165,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 88,  498 => 157,  495 => 156,  486 => 151,  482 => 80,  480 => 290,  477 => 147,  475 => 146,  472 => 287,  468 => 286,  462 => 123,  450 => 72,  443 => 140,  437 => 138,  435 => 270,  432 => 136,  426 => 133,  423 => 132,  421 => 62,  416 => 61,  405 => 58,  402 => 57,  400 => 248,  391 => 118,  386 => 115,  380 => 112,  377 => 232,  371 => 109,  366 => 107,  359 => 106,  356 => 37,  353 => 36,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  324 => 92,  321 => 23,  318 => 90,  312 => 88,  310 => 184,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 6,  250 => 325,  243 => 65,  238 => 319,  236 => 313,  228 => 305,  223 => 297,  197 => 261,  178 => 45,  152 => 38,  149 => 179,  146 => 178,  139 => 166,  115 => 75,  107 => 24,  101 => 86,  95 => 64,  90 => 18,  87 => 59,  84 => 41,  81 => 40,  79 => 29,  57 => 27,  52 => 22,  44 => 74,  42 => 12,  34 => 53,  301 => 136,  295 => 16,  292 => 15,  281 => 167,  275 => 126,  269 => 5,  263 => 71,  257 => 120,  254 => 154,  249 => 117,  245 => 114,  233 => 146,  227 => 104,  221 => 101,  216 => 99,  213 => 274,  202 => 265,  196 => 90,  186 => 87,  181 => 115,  175 => 43,  169 => 207,  160 => 76,  150 => 93,  144 => 92,  132 => 86,  123 => 30,  120 => 56,  104 => 87,  98 => 21,  92 => 19,  78 => 56,  75 => 28,  70 => 26,  62 => 24,  59 => 155,  54 => 26,  51 => 38,  38 => 18,  613 => 372,  610 => 204,  605 => 199,  598 => 195,  592 => 110,  588 => 190,  586 => 189,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 102,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 162,  507 => 123,  502 => 89,  499 => 121,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  456 => 121,  453 => 120,  449 => 100,  444 => 98,  441 => 97,  436 => 96,  433 => 95,  430 => 94,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  393 => 52,  389 => 46,  384 => 237,  379 => 236,  375 => 231,  370 => 229,  367 => 42,  361 => 36,  357 => 35,  351 => 32,  347 => 34,  342 => 210,  339 => 28,  336 => 27,  329 => 200,  327 => 204,  322 => 201,  320 => 171,  316 => 22,  313 => 169,  307 => 166,  304 => 165,  302 => 86,  296 => 160,  294 => 159,  289 => 81,  285 => 168,  279 => 152,  276 => 165,  273 => 150,  259 => 149,  253 => 147,  248 => 153,  242 => 142,  234 => 140,  229 => 138,  226 => 298,  203 => 128,  200 => 262,  198 => 132,  191 => 119,  184 => 239,  179 => 222,  176 => 220,  173 => 110,  171 => 213,  166 => 206,  164 => 104,  157 => 41,  155 => 74,  143 => 71,  137 => 88,  133 => 67,  130 => 66,  106 => 101,  103 => 60,  86 => 46,  80 => 36,  74 => 20,  61 => 2,  56 => 40,  47 => 75,  45 => 20,  41 => 17,  39 => 18,  33 => 16,  31 => 22,  264 => 3,  261 => 71,  256 => 328,  252 => 326,  247 => 66,  244 => 322,  237 => 109,  232 => 139,  230 => 62,  225 => 60,  220 => 295,  217 => 136,  211 => 97,  208 => 268,  205 => 267,  199 => 52,  193 => 129,  190 => 242,  188 => 48,  185 => 47,  182 => 223,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 199,  156 => 192,  153 => 43,  151 => 185,  148 => 41,  140 => 67,  134 => 158,  128 => 58,  125 => 34,  121 => 128,  112 => 26,  110 => 25,  105 => 26,  89 => 47,  83 => 30,  76 => 31,  72 => 191,  67 => 175,  64 => 3,  58 => 38,  53 => 10,  40 => 7,  37 => 6,  35 => 5,  32 => 6,  29 => 3,  23 => 18,  127 => 65,  124 => 129,  118 => 28,  113 => 40,  108 => 71,  102 => 36,  99 => 68,  96 => 67,  91 => 35,  85 => 30,  82 => 57,  77 => 27,  71 => 19,  69 => 30,  66 => 25,  63 => 27,  55 => 11,  49 => 103,  46 => 14,  43 => 21,  12 => 45,);
    }
}
