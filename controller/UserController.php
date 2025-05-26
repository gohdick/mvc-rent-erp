<?php
require_once "model/User.php";
require_once "config/database.php";

class UserController {

    public function index() {
        $database = new Database();
        $db = $database->getConnection();
        $user = new User($db);
        $stmt = $user->selectAll();
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }
        include __DIR__ . '/../view/users/user.php';
    }

    public function insertUser() {
        $name = "";
        $email = "";
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"] ?? '';
            $email = $_POST["email"] ?? '';
            $database = new Database();
            $db = $database->getConnection();

            $user = new User($db);
            $user->name = $name;
            $user->email = $email;

            if ($user->insert()) {
                $message = "เพิ่มผู้ใช้สำเร็จ";
            } else {
                $message = "เกิดข้อผิดพลาดในการเพิ่ม";
            }
            include __DIR__ . '/../view/users/user.php';
        } else {
            include __DIR__ . '/../view/users/user.php';
        }
    }

    public function selectAll() {
        $database = new Database();
        $db = $database->getConnection();

        $user = new User($db);
        $stmt = $user->selectAll();

        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }

        return $users;
    }

}
