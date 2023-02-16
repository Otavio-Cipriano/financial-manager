<?php

require __DIR__ . '/../vendor/autoload.php';

use app\controllers\LoginController;
use app\controllers\RegisterController;
use app\controllers\DashboardController;
use app\controllers\LogoutController;
use app\controllers\ReleaseController;
use app\core\Router;
use app\middlewares\Auth;
use app\middlewares\Base;
use app\repositories\ReleaseRepository;
use app\services\ReleaseService;

$router = new Router();

$router->get('/', [Auth::class, 'index'], [DashboardController::class, 'index']);

$router->get('/releases', [ReleaseController::class, 'index']);

$router->get('/release', [ReleaseController::class, 'detail']);

$router->post('/release/delete', [ReleaseController::class, 'detail']);

$router->post('/release/edit', [ReleaseController::class, 'detail']);

$router->get('/login', [Base::class, 'index'], [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'store']);

$router->get('/logout', [LogoutController::class, 'index']);


$router->get('/register', [RegisterController::class, 'index']);
$router->post('/register', [RegisterController::class, 'store']);

$router->resolve();