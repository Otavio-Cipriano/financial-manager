<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\services\UserSessionService;

class DashboardController extends Controller {
    function index(Request $request, Response $response){
        $session = new UserSessionService();
        $user = $session->user_info();
        $response->render('index', $this->layout, [...$user]);
    }
}