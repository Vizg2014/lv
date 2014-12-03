<?php

/* car.html.twig */
class __TwigTemplate_350a91e06c69ba4f76696d9c276b0f71ed49bb9c25036a6d2835b20732965df7 extends Twig_Template
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
<div  class=\"sales col-md-9\">
\t<p><a id=\"informe_sales\">Каталог</a></p>
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["catalog"]) {
            // line 8
            echo "\t<div style=\"background: url(/img/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "picture", array()), "html", null, true);
            echo ".png) no-repeat;\" class=\"sales3 col-md-4\">
\t\t<div class=\"price3\"><p> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "price", array()), "html", null, true);
            echo " </p></div>
\t\t<div id=\"opisanie3\"><a href=\"/index.php/object/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "id", array()), "html", null, true);
            echo "\">CYCLONE D4 WORLD CHAMPIONSHIP EDITION KIT</a></div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
\t<ul class=\"pagination pagination pagination-sm\">
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pager"]) ? $context["pager"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "
\t\t<li><a  href=\"?page=";
            // line 17
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a></li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "car.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  69 => 17,  66 => 16,  62 => 15,  58 => 13,  49 => 10,  45 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
