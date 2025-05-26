<?php
require_once "model/User.php";
require_once "config/database.php";

class DashboardController {
    public function index() {
        include __DIR__ . '/../view/dashboard.php';
    }
}