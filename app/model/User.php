<?php

namespace app\model;

class  User {

    public int $id;
    public string $name;
    public string $email;
    public string $password;

    function __construct($name, $email, $password, $id = 0)
    {
       $this->name = $name;
       $this->email = $email;
       $this->password = $password;
       $this->id = $id;
    }
}