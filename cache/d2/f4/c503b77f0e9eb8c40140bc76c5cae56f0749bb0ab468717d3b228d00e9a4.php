<?php

/* index.html.twig */
class __TwigTemplate_d2f4c503b77f0e9eb8c40140bc76c5cae56f0749bb0ab468717d3b228d00e9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

\t<div class=\"sales col-md-9\">
\t\t<p><a id=\"informe_sales\">Распродажа</a></p>


\t\t<div class=\"sales1 col-md-4\">
\t\t\t<div class=\"price\"><p>18480</p></div>
\t\t\t<div id=\"opisanie\"><a href=\"http://testphp/index.php/product/car\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION
\t\t\t\t\tKIT</a></div>
\t\t</div>
\t\t<div class=\"sales2 col-md-4\">
\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t<div id=\"opisanie2\"><a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t\t<div class=\"sales3 col-md-4\">
\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t<div id=\"opisanie3\"><a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t</div>


\t<div class=\"hit_sales col-md-9\">
\t\t<p><a id=\"informe_sales1\">Хиты продаж</a></p>

\t\t<div class=\"sales1 col-md-4\">
\t\t\t<div class=\"price\"><p>18480р</p></div>
\t\t\t<div id=\"opisanie\"><a href=\"756\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>

\t\t<div class=\"sales2 col-md-4\">
\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t<div id=\"opisanie2\"><a href=\"325\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t\t<div class=\"sales3 col-md-4\">
\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t<div id=\"opisanie3\"><a href=\"450\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>

\t\t<div class=\"sales1 col-md-4\">
\t\t\t<div class=\"price\"><p>18480р</p></div>
\t\t\t<div id=\"opisanie\"><a href=\"800\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>

\t\t<div class=\"sales2 col-md-4\">
\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t<div id=\"opisanie2\"><a href=\"900\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t\t<div class=\"sales3 col-md-4\">
\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t<div id=\"opisanie3\"><a href=\"300\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t</div>

\t<div class=\"obzor col-md-9\">
\t\t<p><i class=\"glyphicon glyphicon-bell\"></i> Последние обзоры</p>
\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["var"]) ? $context["var"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 61
            echo "\t\t";
            $this->env->loadTemplate("obzor.html.twig")->display(array_merge($context, array("new" => $context["new"])));
            // line 62
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t</div>
\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bor"]) ? $context["bor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 65
            echo "\t\t<div class=\"O_compani col-md-9\">
\t\t\t<h2>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "title", array()), "html", null, true);
            echo "</h2>

\t\t\t<p class=\"review_text\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "text", array()), "html", null, true);
            echo " <a href=\"#\">читать дальше</a>
\t\t\t</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  133 => 66,  130 => 65,  126 => 64,  123 => 63,  109 => 62,  106 => 61,  89 => 60,  31 => 4,  28 => 3,);
    }
}
