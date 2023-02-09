<?php

require __DIR__ . '/../vendor/autoload.php';

use app\controllers\LoginController;
use app\controllers\RegisterController;
use app\controllers\DashboardController;
use app\controllers\LogoutController;
use app\core\Router;
use app\middlewares\Auth;
use app\middlewares\Base;

$router = new Router();

$router->get('/', [Auth::class, 'index'], [DashboardController::class, 'index']);

$router->get('/login', [Base::class, 'index'], [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'store']);

$router->get('/logout', [LogoutController::class, 'index']);


$router->get('/register', [RegisterController::class, 'index']);
$router->post('/register', [RegisterController::class, 'store']);

$router->resolve();
