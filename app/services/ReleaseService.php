<?php

namespace app\services;

use app\model\Release;
use app\repositories\ReleaseRepository;

class ReleaseService{
    public static function create(Release $release){
        
    }
    public static function load(int $limit = 25, int $offset = 0){
        $releases = new ReleaseRepository();
        $releases = $releases->get_releases($offset, $limit);
        return $releases;
    }
    public static function findById(int $id){
        if(empty($id)) return false;

        $releases = new ReleaseRepository();
        $releases = $releases->get_by_id($id);
        return $releases;
    }
}