<?php
// Simple MVC Routing
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
