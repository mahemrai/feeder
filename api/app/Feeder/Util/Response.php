<?php
namespace Feeder\Util;

/**
 * Response
 * @package Util
 * @author Mahendra Rai
 */
class Response {
    protected static $status = array();

    public static function build($data_container) {
        foreach ($data_container as $data_collection) {
            if (!empty($data_collection)) {
                return array(
                    'code'    => 100,
                    'message' => 'Successful',
                    'data'    => $data_collection
                );
            }
            return array('code' => 101, 'message' => 'No data.');
        }
    }
}