<?php

require __DIR__ . '/../vendor/autoload.php';

use app\controllers\LoginController;
use app\controllers\RegisterController;
use app\controllers\DashboardController;
use app\core\Router;
use app\middlewares\Auth;

$router = new Router();

$router->get('/', [Auth::class, 'index'], [DashboardController::class, 'index']);

$router->get('/login', [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'store']);

$router->get('/register', [RegisterController::class, 'index']);
$router->post('/register', [RegisterController::class, 'store']);

$router->resolve();
