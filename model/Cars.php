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
    
}