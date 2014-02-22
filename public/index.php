<?php
require '../vendor/autoload.php';

//Slim app configuration
$app = new \Slim\Slim(array(
	'templates.path' => '../app/views',
	'view' => new \Slim\Views\Twig()
));


//View configuration
$view = $app->view();
$view->parserOptions = array(
	'charset' => 'utf-8',
	'cache' => realpath('../app/views/cache'),
	'auto_reload' => true,
	'strict_variables' => false,
	'autoescape' => true
);

$view->parserExtensions = array(new \Slim\Views\TwigExtension());

$app->get('/', function() use ($app) {
	$app->render('test.html');
});

$app->run();
?>