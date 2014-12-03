<?php
require 'vendor/autoload.php';

$connection = mysql_connect("localhost", "root", "root") or die("<p>Ошибка подключения к базе данных: " . mysql_error() . "</p>");
mysql_select_db("test", $connection);

$app = new \Slim\Slim(array(
	'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
	'debug' => true,
	'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory('./tpl');

$app->get('/', function () use ($app, $connection)
{
	$news = mysql_query("SELECT * FROM news", $connection);
	$about = mysql_query("SELECT * FROM pages ORDER BY id DESC LIMIT 1", $connection);
	$aboutUs = array();
	$myNews = array();

	while ($aboutUsRow = mysql_fetch_array($about))
	{
		$aboutUs[] = $aboutUsRow;
	}

	while ($row = mysql_fetch_array($news, MYSQL_ASSOC))
	{
		$myNews[] = $row;
	}


	$app->render('index.html.twig', array(
		'var' => $myNews,
		'bor' => $aboutUs
	));
});


$app->get('/products/', function () use ($app, $connection)
{
	# построенте пагинатора
	$offset = 6;

	if (isset($_GET['page']))
	{
		$currentPage = $_GET['page'];
	}
	else
	{
		$currentPage = 1;
	}

	$limit = ($currentPage * $offset) - $offset;


	$countMySql = mysql_query("SELECT COUNT(*) FROM product", $connection);
	$requestMySql = mysql_query("SELECT * FROM product ORDER BY id DESC LIMIT {$limit},{$offset}", $connection);
	$count = mysql_fetch_array($countMySql, MYSQL_NUM);
	$count1 = $count[0];
	$num_pages = 10;
	$page = 0;

	if (!$requestMySql)
	{
		echo 'Ошибка при получении данных' . mysql_error();
	};
	$pageSize = ceil($count1 / $offset);

	$repacRequst = array();
	while ($tovar = mysql_fetch_array($requestMySql, MYSQL_ASSOC))
	{
		$repacRequst[] = $tovar;
	}

	$app->render('car.html.twig', array(
		'product' => $repacRequst,
		'pager' => $pageSize
	));
});

$app->get('/product/', function() use($app, $connection)
{
	if (isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$request = mysql_query("SELECT * FROM product WHERE id = {$id} LIMIT 1", $connection);
		$viewObject = mysql_fetch_array($request, MYSQL_ASSOC);
		if($viewObject)
		{
			$app->render('object.html.twig',array(
				'object' => $viewObject
			));
		}
		else{
			$app->redirect('/404');
		}
	}
	else
	{
		$app->redirect('/404');
	}
});

$app->get('/object/:id', function ($id) use ($app, $connection)
{
	$request = mysql_query("SELECT * FROM product WHERE id = {$id} LIMIT 1", $connection);
	$viewObject = mysql_fetch_array($request, MYSQL_ASSOC);

	if ($viewObject)
	{
		$app->render('object.html.twig',array(
			'object' => $viewObject
		));

	}
	else
	{
		$app->redirect('/404');
	}
});

//$contact = file_get_contents(/fdfdfsfdsdas/dsdsasd);
$app->run();