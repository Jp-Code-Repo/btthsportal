<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

require_once __DIR__ . '/../app/core/Database.php';

require_once __DIR__ . '/../app/core/Router.php';

require_once __DIR__ . '/../app/models/DepartmentModel.php';

require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/controllers/DashboardController.php';
require_once __DIR__ . '/../app/controllers/SystemController.php';
require_once __DIR__ . '/../app/controllers/DepartmentController.php';


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
    $controller = new SystemController();
    $controller->index();
});

$router->get('/systems/create', function () {
    $controller = new SystemController();
    $controller->create();
});

$router->get('/departments', function () {
    $controller = new DepartmentController();
    $controller->index();
});

$router->get('/departments/create', function () {
    $controller = new DepartmentController();
    $controller->create();
});

// Test route
$router->get('/toast-test', function () {

    $_SESSION['toast'] = [
        'type' => 'success',
        'message' => 'Portal Toast System Working'
    ];

    header('Location: /portal/public/');
    exit;
});

$router->post('/departments/store', function () {
    $controller = new DepartmentController();
    $controller->store();
});

$router->dispatch();