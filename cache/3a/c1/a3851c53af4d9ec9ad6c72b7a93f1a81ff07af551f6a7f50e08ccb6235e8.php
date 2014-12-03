<?php

/* object.html.twig */
class __TwigTemplate_3ac1a3851c53af4d9ec9ad6c72b7a93f1a81ff07af551f6a7f50e08ccb6235e8 extends Twig_Template
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


<div class=\"col-md-9 productBloc \" >
\t<div class=\"viewProduct\" >
\t\t<img class=\"ImgProduct img-responsive\" src=\"/img/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "picture", array()), "html", null, true);
        echo ".png\" alt=\"droduct\" />
\t</div>
\t<div class=\"col-md-5 productOpisanie\">
\t\t<p class=\"titleObject\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "titl", array()), "html", null, true);
        echo " </p>
\t\t<div class=\"separatorLineProduct\">\t</div>
\t\t<p class=\"propertieseObject\">Производитель: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "titl", array()), "html", null, true);
        echo " <br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "model", array()), "html", null, true);
        echo "B <br> Наличие: <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "availability", array()), "html", null, true);
        echo " </strong></p>

\t\t<div class=\"separatorLineProduct\"></div>

\t\t<div class=\"buttonProduct\">
\t\t\t<p class=\"priceBuy\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "price", array()), "html", null, true);
        echo "р.</p>
\t\t\t<div class=\"buttonBlock\">
\t\t\t\t<button class=\"btn\"><p><a href=\"#\">Купить</a></p></button>
\t\t\t</div>
\t\t</div>

\t</div>

</div>


<div class=\"col-md-9 reviews\">

\t<button class=\"btn\"><a href=\"#\">Описание</a></button>&nbsp<button class=\"btn\"><a  href=\"#\">Отзивы</a> </button>

\t<p>Полностью собранное шасси, установленный двигатель Kyosho G20 Stock, электронный <br> регулятор скорости PERFEX KA-15, микроприёмник PERFEX KR-6, сервомашинку  PERFEX KS-101BK,<br> покрашенный корпус с наклейками, двухканальный передатчик Perfex/Futaba KT-6, инструкцию, трубочку <br>для антенны приёмника, крестовой/колёсный ключ.</p>
\t<h4>Спецификации:</h4>
\t<p>Длина: 380 мм.<br>
\t\tШирина: 248 мм.<br>
\t\tВысота: 145 мм.<br>
\t\tКлиренс: 24 мм.<br>
\t\tДлина колесной базы: 270 мм.<br>
\t\tКолея (передняя/задняя): 176/176 мм.<br>
\t\tШирина колёс (перед/зад): 34/42мм.<br>
\t\tПередаточное число: 8.125:1.<br>
\t\tВес (приблизительно): 1650 г.<br>
\t<h4>Комплект требует:</h4>
\tВосемь батареек или аккумуляторов типа АА для передатчика<br>
\tСиловой аккумулятор с разъемом Tamiya на 7.2V NI-MH (не менее 1200mAh)<br>
\tЗарядное устройство для силового аккумулятора<br>
\tВажно: некоторые универсальные зарядные устройства \"питаются\" от 11-18V поэтому для работы от сети (220V) потребуется соответствующий адаптер.<br>
</div>

";
    }

    public function getTemplateName()
    {
        return "object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  49 => 14,  44 => 12,  38 => 9,  31 => 4,  28 => 3,);
    }
}
