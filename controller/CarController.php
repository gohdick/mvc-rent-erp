<?php
require_once "model/Cars.php";
require_once "config/database.php";

class CarController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();
        $car = new Cars($db);
        $cars = $car->selectAll();
        include __DIR__ . '/../view/car.php';
    }
}