<?php
require 'vendor/autoload.php';
require 'config/database.php';

use Feeder\Model\Feed;
use Feeder\Model\Post;
use Feeder\Util\Response;
use Feeder\Http\FeederClient;

//Slim app configuration
$app = new \Slim\Slim();

$app->get('/', function() use ($app) {
    $feed = new Feed();
    $post = new Post();
    $feeds = $feed::all()->toArray();
    $posts = $post::all()->toArray();
    $data_container = array(
        'feeds' => $feeds,
        'posts' => $posts
    );
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(
        json_encode(Response::build($data_container))
    );
});

$app->get('/fetch', function() use ($app) {
    $feed = new Feed();
    $client = new FeederClient();
    $xml = $client->get($app->request->get('url'));
    $data_container = array(
        'feed' => $feed->buildFromXml($app->request->get('url'), $xml)
    );
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(
        json_encode(Response::build($data_container))
    );
});

$app->get('/feed/:id', function($id) use ($app) {

});

$app->post('/add', function() use ($app) {

});

$app->post('/favourite', function() use ($app) {

});

$app->post('/to-read', function() use ($app) {

});

$app->run();