<?php
require 'vendor/autoload.php';

//require '../config/database.php';

//Slim app configuration
$app = new \Slim\Slim();

$app->get('/', function() use ($app) {
	echo 'Hello';
});

$app->run();