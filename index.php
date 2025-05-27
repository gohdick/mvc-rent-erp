<?php
// Simple MVC Routing
// สำหรับ AJAX request
if (isset($_GET['action'])) {
    $controllerName = 'CarController';
    $action = $_GET['action'];
    require_once 'controller/' . $controllerName . '.php';
    $controller = new $controllerName();

    if ($action === 'updateCar') {
        $controller->updateCar();
        exit;
    }

    if ($action === 'deleteCar') {
        $controller->deleteCar();
        exit;
    }

    if ($action === 'searchCars') {
        $controller->searchCars();
        exit;
    }

    if ($action === 'addCar') {
        $controller->addCar();
        exit;
    }

    if ($action === 'getCar') {
        $controller->getCar();
        exit;
    }

    $controller->$action();
    exit;
}

$url = isset($_GET['url']) ? $_GET['url'] : 'dashboard';
$urlParts = explode('/', $url);

$controllerName = !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : 'DashboardController';
$action = isset($urlParts[1]) ? $urlParts[1] : 'index';
$controllerFile = 'controller/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            echo "Action not found!";
        }
    } else {
        echo "Controller class not found!";
    }
} else {
    echo "Controller file not found!";
}
