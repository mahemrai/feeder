<?php
namespace Feeder\Http;

use Guzzle\Http\Client;

/**
 * FeederClient
 * @package Http
 * @author Mahendra Rai
 */
class FeederClient {
    protected $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function get($url) {
        $request = $this->client->get($url);
        $response = $request->send();
        return $response->xml();
    }
}