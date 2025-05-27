<?php


// id INT PRIMARY KEY AUTO_INCREMENT,
// license_plate VARCHAR(20) NOT NULL,     -- ทะเบียนรถ
// brand VARCHAR(50) NOT NULL,             -- ยี่ห้อ
// model VARCHAR(50) NOT NULL,             -- รุ่น
// color VARCHAR(30),                      -- สีรถ
// year INT,                               -- ปีที่จดทะเบียน
// seats INT DEFAULT 4,                    -- จำนวนที่นั่ง
// status ENUM('available', 'booked', 'unavailable') DEFAULT 'available',
// image_url VARCHAR(255),                 -- ลิงก์รูปภาพ
// note TEXT,                              -- หมายเหตุ
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

class Cars {
    
    private $id;
    private $conn;
    private $table = "cars";
    public $license_plate;
    public $brand;
    public $model;
    public $color;
    public $year;
    public $seats;
    public $status;
    public $image_url;
    public $note;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function selectAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function selectById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function insert($data) {
        $query = "INSERT INTO " . $this->table . " (license_plate, brand, model, color, year, seats, status, image_url, note) VALUES (:license_plate, :brand, :model, :color, :year, :seats, :status, :image_url, :note)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':license_plate', $data['license_plate']);
        $stmt->bindParam(':brand', $data['brand']);
        $stmt->bindParam(':model', $data['model']);
        $stmt->bindParam(':color', $data['color']);
        $stmt->bindParam(':year', $data['year']);
        $stmt->bindParam(':seats', $data['seats']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':image_url', $data['image_url']);
        $stmt->bindParam(':note', $data['note']);
        $stmt->execute();
        return $stmt;
    }

    public function update($data) {
        $query = "UPDATE " . $this->table . " SET license_plate = :license_plate, brand = :brand, model = :model, color = :color, year = :year, seats = :seats, status = :status, image_url = :image_url, note = :note WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':license_plate', $data['license_plate']);
        $stmt->bindParam(':brand', $data['brand']);
        $stmt->bindParam(':model', $data['model']);
        $stmt->bindParam(':color', $data['color']);
        $stmt->bindParam(':year', $data['year']);
        $stmt->bindParam(':seats', $data['seats']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':image_url', $data['image_url']);
        $stmt->bindParam(':note', $data['note']);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function search($keyword) {
        $query = "SELECT * FROM " . $this->table . 
                " WHERE license_plate LIKE :keyword " .
                " OR brand LIKE :keyword " .
                " OR model LIKE :keyword";
        
        $keyword = "%{$keyword}%";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':keyword', $keyword);
        $stmt->execute();
        return $stmt;
    }
}