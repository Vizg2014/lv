<?php

/* obzor.html.twig */
class __TwigTemplate_822b1d80b011d419c649456d90a99381d30137dced0e8b93ed859ffd11b9b584 extends Twig_Template
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
        echo "<div class=\"review_1\">
\t<img class=\"review\" src=\"/img/";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "image", array()), "html", null, true);
        echo "\">
\t<a id=\"rev_link\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "title", array()), "html", null, true);
        echo "</a>
\t<p class=\"review_text\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "text", array()), "html", null, true);
        echo "</p>
</div>
<div class=\"border\"></div>
";
    }

    public function getTemplateName()
    {
        return "obzor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
