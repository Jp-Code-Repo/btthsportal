<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/controllers/DashboardController.php';

$router = new Router();

$router->get('/', function () {
    $controller = new DashboardController();
    $controller->index();
});

$router->get('/login', function () {
    echo 'Login Page';
});

$router->get('/users', function () {
    echo 'Users Page';
});

$router->get('/systems', function () {
    echo 'Systems Page';
});

$router->dispatch();