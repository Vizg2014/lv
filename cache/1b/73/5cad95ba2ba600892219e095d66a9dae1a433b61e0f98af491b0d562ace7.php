<?php

/* index.twig.html */
class __TwigTemplate_1b735cad95ba2ba600892219e095d66a9dae1a433b61e0f98af491b0d562ace7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig.html";
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


<div class=\"sales col-md-9\">
\t\t\t<p><a id=\"informe_sales\">Распродажа</a></p>
\t\t<div class=\"sales1 col-md-4\">
\t       <div class=\"price\"><p>18480</p></div>
\t        <div id=\"opisanie\"> <a href=\"http://testphp/index.php/product/car\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t\t<div class=\"sales2 col-md-4\">
\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t<div id=\"opisanie2\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t</div>
\t\t\t<div class=\"sales3 col-md-4\">\t 
\t\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t\t<div id=\"opisanie3\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t</div>
</div>
\t\t
\t\t
<div class=\"hit_sales col-md-9\">
\t\t\t<p><a id=\"informe_sales1\">Хиты продаж</a></p>
\t\t\t<div class=\"sales1 col-md-4\">
\t\t\t\t<div class=\"price\"><p>18480р</p></div>
\t\t\t<div id=\"opisanie\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sales2 col-md-4\">
\t\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t    <div id=\"opisanie2\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t</div>
\t\t\t    <div class=\"sales3 col-md-4\">
\t\t\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t\t\t<div id=\"opisanie3\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t    </div>
\t\t\t\t\t
\t\t\t<div class=\"sales1 col-md-4\">
\t\t\t    <div class=\"price\"><p>18480р</p></div>
\t\t\t\t<div id=\"opisanie\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sales2 col-md-4\">
\t\t\t\t<div class=\"price2\"><p>5712р</p></div>
\t\t\t\t<div id=\"opisanie2\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t</div>
\t\t\t\t<div class=\"sales3 col-md-4\">\t 
\t\t\t\t\t<div class=\"price3\"><p>18240р</p></div>
\t\t\t\t\t<div id=\"opisanie3\"> <a href=\"#\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myNews"]) ? $context["myNews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 55
            echo "\t\t  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["new"]);
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 56
                echo "
";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "array", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "text", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "date", array()), "html", null, true);
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
\t\t\t";
        // line 62
        $this->env->loadTemplate("obzor.twig.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  112 => 61,  106 => 60,  95 => 57,  92 => 56,  87 => 55,  83 => 54,  31 => 4,  28 => 3,);
    }
}
