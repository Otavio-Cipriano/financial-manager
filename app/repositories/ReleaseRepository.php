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

    public function get_by_id(int $id){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM releases WHERE id=:id");
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = $db->disconnect();
        return $data;
    }

    public function delete_by_id(int $id){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("DELETE FROM releases WHERE id=:id");
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $conn = $db->disconnect();
    }

    public function edit_by_id(int $id){
        $db = new Db();
        $conn = $db->connect();
        $query = "UPDATE releases SET type=:type, category=:category, briefing=:briefing, description=:description, value=:description, date=:date WHERE id=:id";
        $stmt = $conn->prepare("UPDATE releases SET  WHERE id=:id");
        $stmt->execute();
    }
}