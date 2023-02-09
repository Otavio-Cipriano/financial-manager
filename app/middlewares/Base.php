<?php

namespace app\middlewares;

use app\core\Request;
use app\core\Response;
use app\services\UserSessionService;

class Base{
    public function index(Request $request, Response $response){
        $session = new UserSessionService();
        $isLogged = $session->check_session();
        if($isLogged){
            header('Location: /');
            return false;
        }

        return true;
    }
}