<?php

namespace app\services;

use app\core\Session;
use app\model\User;

class UserSessionService{

    private Session $session;

    function __construct()
    {
       if(session_status() ==  PHP_SESSION_NONE){
        $this->session = new Session(['httponly' => true]);
        $this->session->start();
       }
    }

    public function start(User $user){
       $this->session->set_session('login', true);
       $this->session->set_session('user', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function check_session(){
        $isLogged =$this->session->get_session('login');
        return $isLogged;
    }

    public function check_validation(){
        // $session = session_cache_expire()
    }

    public function user_info(){
        $this->session = new Session();
        $user = $this->session->get_session('user');
        return $user;
    }

    public function destroy_user(){
        $this->session->destroy_session();
    }
}