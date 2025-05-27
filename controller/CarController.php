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


    public function getCar() {
        if (!isset($_GET['car_id'])) {
            echo json_encode(['success' => false, 'message' => 'Car ID is required']);
            return;
        }

        $database = new Database();
        $db = $database->getConnection();
        $car = new Cars($db);
        
        $result = $car->selectById($_GET['car_id']);
        $carData = $result->fetch(PDO::FETCH_ASSOC);
        
        if ($carData) {
            echo json_encode($carData);
        } else {
            echo json_encode(['success' => false, 'message' => 'Car not found']);
        }
    }

    public function updateCar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->getConnection();
            $car = new Cars($db);

            // ตรวจสอบว่ามี car_id
            if (!isset($_POST['car_id'])) {
                echo json_encode(['success' => false, 'message' => 'Car ID is required']);
                return;
            }

            $data = [
                'id' => $_POST['car_id'],
                'license_plate' => $_POST['car_number'],
                'brand' => $_POST['car_brand'],
                'model' => $_POST['car_model'],
                'seats' => $_POST['car_seat'],
                'color' => $_POST['car_color'],
                'year' => $_POST['car_year'],
                'status' => $_POST['car_status'],
                'image_url' => $_POST['car_image'],
                'note' => $_POST['car_note']
            ];
            
            if ($car->update($data)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to update car']);
            }
        }
    }

    public function deleteCar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['car_id'];
            
            $database = new Database();
            $db = $database->getConnection();
            $car = new Cars($db);
            
            if ($car->delete($id)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        }
    }

    public function searchCars() {
        if (!isset($_GET['keyword'])) {
            echo json_encode(['success' => false, 'message' => 'Keyword is required']);
            return;
        }

        $database = new Database();
        $db = $database->getConnection();
        $car = new Cars($db);
        
        $result = $car->search($_GET['keyword']);
        $cars = $result->fetchAll(PDO::FETCH_ASSOC);
        
        if ($cars) {
            echo json_encode([
                'success' => true,
                'cars' => array_map(function($car) {
                    // แปลงสถานะเป็นสีและชื่อที่แสดงผล
                    $status_color = '';
                    $status_name = '';
                    if ($car['status'] === 'available') {
                        $status_color = 'bg-green-200';
                        $status_name = 'ว่าง';
                    } elseif ($car['status'] === 'booked') {
                        $status_color = 'bg-yellow-200';
                        $status_name = 'จอง';
                    } else {
                        $status_color = 'bg-red-200';
                        $status_name = 'ไม่ใช้งาน';
                    }
                    $car['status_color'] = $status_color;
                    $car['status_name'] = $status_name;
                    return $car;
                }, $cars)
            ]);
        } else {
            echo json_encode(['success' => true, 'cars' => []]);
        }
    }

    public function addCar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->getConnection();
            $car = new Cars($db);
            
            $data = [
                'license_plate' => $_POST['car_number'],
                'brand' => $_POST['car_brand'],
                'model' => $_POST['car_model'],
                'seats' => $_POST['car_seat'],
                'color' => $_POST['car_color'],
                'year' => $_POST['car_year'],
                'status' => $_POST['car_status'],
                'image_url' => $_POST['car_image'],
                'note' => $_POST['car_note']
            ];
            
            if ($car->insert($data)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        }
    }



    public function deleteCarOld($id) {
        $database = new Database();
        $db = $database->getConnection();
        $car = new Cars($db);
        $cars = $car->selectAll();
        include __DIR__ . '/../view/car.php';
    }
}