<?php
require 'vendor/autoload.php';
require 'config/database.php';

use Feeder\Model\Feed;
use Feeder\Model\Post;
use Feeder\Util\Response;
use Feeder\Http\FeederClient;

//Slim app configuration
$app = new \Slim\Slim();

$app->get('/feed/fetch', function() use ($app) {
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

$app->get('/feeds', function() use ($app) {
    $feed = new Feed();
    $feeds = $feed::all()->toArray();
    $data_container = array(
        'feeds' => $feeds
    );
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(
        json_encode(Response::build($data_container))
    );
});

$app->get('/posts', function() use ($app) {
    $post = new Post();
    $feed_id = $app->request->get('feed');
    $favourite = $app->request->get('favourite');
    $unread = $app->request->get('unread');
    $posts = $post::all()->toArray();
    $data_container = array('posts' => $posts);
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(
        json_encode(Response::build($data_container))
    );
});

$app->get('/feed/:id', function($id) use ($app) {

});

$app->post('/post', function() use ($app) {

});

$app->post('/post/favourite', function() use ($app) {

});

$app->post('/post/to-read', function() use ($app) {

});

$app->run();