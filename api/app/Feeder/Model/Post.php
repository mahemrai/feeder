<?php
namespace Feeder\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Post
 * @package Model
 * @uses Illuminate\Database\Eloquent\Model
 * @author Mahendra Rai
 */
class Post extends Model {
    protected $table = 'posts';

    public function buildFromXml($xml) {
        $this->title = (string) $xml->title;
        $this->url = (string) $xml->link;
        return $this;
    }
}