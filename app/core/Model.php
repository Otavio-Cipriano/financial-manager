<?php

namespace app\core;

class Model{
    private $db;
    protected $table;
    private $action;


    public function delete(){}
    public function edit(){}
    public function fetch(){
        $dbModel = new DbModel($this->table);
        $this->action = $dbModel->fetch();
        return $this;
    }
    public function load(){
        return $this->action->load() ?? false;
    }
    public function order(){}
        
    public function where(array $params){
        if($this->action){
            $this->action->where($params);
            return $this;
        }
    }
    public function save(){
        // $this->db->save()
    }
}