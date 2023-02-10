<?php

namespace app\repositories;

use app\core\Db;
use PDO;

class ReleaseRepository{
    public function create(array $data){
        $db = new Db();
        $conn = $db->connect();
        $query = "INSERT INTO users (type, category, briefing, description, value, date, create_by)" . 
                 "VALUES (:type, :category, :briefing, :description, :value, :date, :create_by)";
        $stmt = $conn->prepare($query);
        $stmt->execute($data);
    }
    public function get_releases($limit = 25, $offset = 0){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM users LIMIT :limit :offset");
        $stmt->execute(['limit' => $limit, 'offset' => $offset]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = $db->disconnect();
        return $data;
    }
}