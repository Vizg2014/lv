<?php

/* template.twig.html */
class __TwigTemplate_af6cde0d7292f7a1efaa3cc575ca06a1d6a93f9bbb3932294773db0a8b6b5d44 extends Twig_Template
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
        echo "wewqewq

<br>
<br>
";
        // line 5
        if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
        echo twig_escape_filter($this->env, $_var_, "html", null, true);
        echo "
<br>
";
        // line 7
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $_content_, "html", null, true);
    }

    public function getTemplateName()
    {
        return "template.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 5,  19 => 1,);
    }
}
