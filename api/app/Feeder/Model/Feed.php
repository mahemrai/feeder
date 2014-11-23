<?php
namespace Feeder\Model;

use Feeder\Model\Post;
use Illuminate\Database\Eloquent\Model;

/**
 * Feed
 * @package Model
 * @uses Illuminate\Database\Eloquent\Model
 * @author Mahendra Rai
 */
class Feed extends Model {
    protected $table = 'feeds';
    public $posts = array();

    public function posts() {
        return $this->hasMany('Post');
    }

    public function buildFromXml($url, $xml) {
        $this->title = (string) $xml->channel->title;
        $this->url = $url;
        foreach ($xml->channel->item as $item) {
            $post = new Post();
            $this->posts[] = $post->buildFromXml($item);
        }
        return array(
            'title' => $this->title,
            'url'   => $this->url,
            'posts' => $this->posts
        );
    }
}