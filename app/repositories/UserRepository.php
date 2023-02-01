<?php

namespace app\repositories;

use app\core\Db;
use app\model\User;
use PDO;

class UserRepository{
    public function create(array $data){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute($data);
    }

    public function findByEmail(string $email){
        $db = new Db();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(["email" => $email]);
        return (object) $stmt->fetch(PDO::FETCH_ASSOC);
    }
}