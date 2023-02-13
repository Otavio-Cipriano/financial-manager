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

    public function get_releases(int $startAt, int $endAt){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM releases ORDER BY id DESC LIMIT :start, :end");
        $stmt->bindParam('start', $startAt, PDO::PARAM_INT);
        $stmt->bindParam('end', $endAt, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = $db->disconnect();
        return $data;
    }
}