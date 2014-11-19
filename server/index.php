<?php
require 'vendor/autoload.php';

use Model\Feed;

//require '../config/database.php';

//Slim app configuration
$app = new \Slim\Slim();

$app->get('/', function() use ($app) {
    $feed = new Feed();
    var_dump($feed);
	echo 'Hello';
});

$app->run();