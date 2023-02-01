<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;

class DashboardController extends Controller {
    function index(Request $request, Response $response){
        $response->render('index', $this->layout);
    }
}