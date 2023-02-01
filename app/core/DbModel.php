<?php

namespace app\core;

class DbModel{
    private $table;

    private $conn;

    private $query;

    private $action;

    private $data;

    function __construct($table)
    {
        $db = new Db();
        $this->conn = $db->connect();
        $this->table = $table;
    }

    public function delete(){}
    public function edit(){}

    public function fetch(){
        $this->query = "SELECT * FROM $this->table";
        $this->action = "FETCH";
        return $this;
    }

    public function load(){
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute();
        
        switch ($this->action) {
            case 'FETCH':
                $data = $stmt->fetchAll();
                return $data;
                break;
            case 'CREATE':
                # code...
                break;
            case 'DELETE':
                # code...
                break;
            case 'EDIT':
                # code...
                break;                
        }
    }

    private function order(){}

    private function save(array $keys, array $values){
        $placeholders = $this->generate_palceholders($keys);
        $keys = implode(", ", array_keys($values));
        echo $keys;
        echo $placeholders;
        // $stmt = $this->conn->prepare("INSERT INTO $this->table ($keys) VALUES ($placeholders)");
        // $stmt->execute($values);
        // $this->disconnect();
    }

    public function where(array $params){
        foreach ($params as $key => $value) {
            $this->query = "$this->query WHERE $key='$value'";
            echo $this->query;
        }

        return $this;
    }

    private function generate_palceholders($keys){
        $placeholders = array_map(function($key){
            return ":$key";
        }, $keys);
        return $this->array_to_string($placeholders);
    }

    private function array_to_string(array $array){
        return implode(', ', $array);
    }
}