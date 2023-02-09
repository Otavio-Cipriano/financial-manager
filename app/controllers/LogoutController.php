<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\services\UserSessionService;

class LogoutController extends Controller{
    public function index(Request $request, Response $response){
        $session = new UserSessionService();
        $session->destroy_user();
        
        $response->status(200)->send('Logout: Success');
        $response->redirect('/login');
    }
}