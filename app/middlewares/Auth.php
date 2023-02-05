<?php

namespace app\middlewares;

use app\core\Request;
use app\core\Response;
use app\services\UserSessionService;

class Auth{
    public function index(Request $request, Response $response, $next = ''){
        $session = new UserSessionService();
        $isLogged = $session->check_session();
        if(!$isLogged){
            header('Location: /login');
            return false;
        }

        return true;
    }

    public function test(){
        // $session = new UserSessionService();
        // $isLogged = $session->check_session();
        // if(false){
        //     header('Location: /login');
        // }

        // call_user_func($next);
        echo "AAA";
    }
}