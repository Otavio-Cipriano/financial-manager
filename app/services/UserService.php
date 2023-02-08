<?php

namespace app\services;

use app\model\User;
use app\repositories\UserRepository;
use PDOException;

class UserService{
    public static function create(User $user){
        try {
            $repo = new UserRepository;
            $repo->create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function findByEmail(string $email){
        try {
            $repo = new UserRepository;
            $data = $repo->findByEmail($email);
            if($data){
                $user = new User($data->name, $data->email, $data->password, $data->id);
                return $user;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}