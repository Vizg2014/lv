<?php

/* layout.html.twig */
class __TwigTemplate_0f3d525651f6acac75e437b7c5cf312bd9ffa0f09b9a415d8bc80ef180df201b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>

<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
<link rel=\"stylesheet\" href=\"/css/my.css\">
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"/css/bootstrap-theme.css\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"/js/bootstrap.js\"></script>

</head>
<body>




<div class=\"wrapper container\">
\t<div class=\"my_nav  nav\">
\t\t<ul class=\"\">
\t\t\t<li class=\"col-sx-12\" id=\"my_nav\"><a href=\"#\">О компании</a></li>
\t\t\t <li class=\"col-sx-12\"><a href=\"/index.php/products/\">Каталог</a></li>
\t\t\t <li class=\" col-sx-12\"><a href=\"#\">Доставка</a></li>
\t\t\t <li class=\"col-sx-12\"><a href=\"#\">Наши магазины</a></li>
\t\t\t<li class=\"col-sx-12\"><a href=\"#\">Оптовикам</a></li>
\t\t\t<li class=\"col-sx-5\"><a href=\"#\">Контакты</a></li>
\t\t</ul>
\t <form class=\"navbar-form\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"поиск по каталогу\" name=\"serch\" >
\t</form>

\t</div>
\t<div class=\"had row \">
\t\t<div class=\"logo col-md-3 col-cm-3\">
\t\t\t<a class=\"logoLink\" href=\"/\"><img src=\"/img/logo.jpg\" class=\"img-responsive\"></a>
\t\t </div>

\t\t\t<div class=\"contact col-md-5\">
\t\t\t\t<p class=\"nomer\">(495) 234-22-33, (495) 232-22-35</p>
\t\t\t\t<p><a mailto=\"\" class=\"mail\">Написать сообщение</a></p>
\t\t\t\t<p class=\"icq\">288-22-08</p>
\t\t\t</div>

\t\t<div class=\"basket col-md-3 col-sm-7 col-xs-11\">
\t\t\t<p class=\"basket1\">В вашей корзине пусто</p>
\t\t\t<p class=\"kabinet\"><a href=\"#\" class=\"\">Личный кабинет</a></p>
\t     </div>
\t</div>

\t<div class=\"tovar row\">
\t\t<div class=\"col-md-3 nav_vertikal\">
\t\t\t<ul class=\"col-md-10  col-sm-12\" id=\"nav_v\">
\t\t\t\t <li><a href=\"#\">Автомодели</a>
\t\t\t\t    <ul id=\"nav_2_lv\">
\t\t\t\t\t  <li class=\"margin_lv_2_top\" ><a href=\"/index.php/object/\">Машинки</a></li>
\t\t\t\t\t  <li ><a href=\"/index.php/object/\">Машинки</a></li>
\t\t\t\t\t  <li ><a href=\"/index.php/object/\">Машинки</a></li>
\t\t\t\t\t  <li ><a href=\"/index.php/object/\">Машинки</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"/product/\">Самолеты</a></li>
\t\t\t\t<li><a href=\"#\">Вертолеты</a></li>
\t\t\t\t<li><a href=\"#\">Аккумуляторы, кабели</a></li>
\t\t\t\t<li><a href=\"#\">Аппаратуа</a></li>
\t\t\t\t<li><a href=\"#\">Инструмент, материалы</a></li>
\t\t\t\t<li><a href=\"#\">Винты, крепеж, клей</a></li>
\t\t\t\t<li><a href=\"#\">Двигатели ДВС</a></li>
\t\t\t\t<li><a href=\"#\">Электродвигатели</a></li>
\t\t\t\t<li><a href=\"#\">Катеры, яхты</a></li>
\t\t\t</ul>



\t\t\t<aside class=\"col-md-12 inform\">

\t\t\t\t<p class=\"inform_data\">12.10.2011</p>
\t\t\t\t<a href=\"\">Много скидок!</a>
\t\t\t\t<p class=\"inform_text\">Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.</p>
\t\t\t\t<p class=\"inform_data\">12.10.2011</p>
\t\t\t\t<a href=\"\">Обменяй старое на новое!</a>
\t\t\t\t<p class=\"inform_text\">Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.</p>
\t\t\t\t<p class=\"inform_data\">12.10.2011</p>
\t\t\t\t<a href=\"\">Обновление в каталогах!</a>
\t\t\t\t<p class=\"inform_text\">Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.</p>
\t\t\t\t<div class=\"napisatnam\"><p><a  href=\"#\" >Написать нам</a></p></div>
\t\t\t</aside>


\t\t\t<aside class=\"123 col-md-12\">
\t\t\t<aside class=\"sidbar1\"></aside>
\t\t\t<aside class=\"sidbar2\"></aside>
\t\t\t</aside>
        </div>

\t\t";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "\t\t\t</div>
\t<div class=\"footer\">
\t<ul class=\"footer_nav\">
\t\t<li><a href=\"3\">О компании</a></li>
\t\t<li><a href=\"3\">Каталог</a><comment</li>
\t\t<li><a href=\"3\">Доставк></a></li>
\t\t<li><a href=\"3\">Наши магазины</a></li>
\t\t<li><a href=\"3\">Оптовикам</a><li>
\t\t<li><a href=\"3\">Контакты</a></li>
\t</ul>
\t</div>
\t<div class=\"clear\">
</div>
</body>
</html>";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 96,  119 => 97,  117 => 96,  20 => 1,);
    }
}
