/*
 Navicat Premium Data Transfer

 Source Server         : biz_test
 Source Server Type    : MySQL
 Source Server Version : 100421 (10.4.21-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : rent_erp

 Target Server Type    : MySQL
 Target Server Version : 100421 (10.4.21-MariaDB)
 File Encoding         : 65001

 Date: 27/05/2025 11:13:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `license_plate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `model` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `color` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `year` int NULL DEFAULT NULL,
  `seats` int NULL DEFAULT 4,
  `status` enum('available','booked','unavailable') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'available',
  `image_url` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES (6, 'กข1234', 'Toyota', 'Fortuner', 'ดำ', 2020, 7, 'available', 'https://img.pcauto.com/model/images/modelPic/th/2024/04/1367/418240143_1713406426284.jpg', 'รถ SUV ขนาดใหญ่', '2025-05-27 10:29:50');
INSERT INTO `cars` VALUES (7, 'งจ5678', 'Honda', 'Civic', 'ขาว', 2019, 5, 'booked', 'https://imgcdn.zigwheels.co.th/large/gallery/color/9/3161/honda-civic-color-299232.jpg', 'รถเก๋งยอดนิยม', '2025-05-27 10:29:50');
INSERT INTO `cars` VALUES (8, 'ขค7890', 'Isuzu', 'D-Max', 'เทา', 2021, 5, 'available', 'https://s.isanook.com/au/0/ui/17/89255/Isuzu_dmax_2023_2024_16.jpg', 'กระบะสำหรับบรรทุก', '2025-05-27 10:29:50');
INSERT INTO `cars` VALUES (9, 'จฉ1122', 'Nissan', 'Almera', 'แดง', 2022, 4, 'unavailable', 'https://img.pcauto.com/model/images/modelPic/th/2024/04/1316/420149086_1714273333447.jpg', 'อยู่ระหว่างซ่อมบำรุง', '2025-05-27 10:29:50');
INSERT INTO `cars` VALUES (10, 'ตถ3344', 'Mitsubishi', 'Xpander', 'น้ำเงิน', 2023, 7, 'available', 'https://img.pcauto.com/model/images/modelPic/th/2024/04/1314/419181826_1713865654507.jpg', 'รถครอบครัว MPV', '2025-05-27 10:29:50');

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `department_name`(`department_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES (1, 'ฝ่ายบริหาร', 'ดูแลการจัดการและควบคุมภายในองค์กร', '2025-04-29 13:56:50', '2025-04-29 13:56:50');
INSERT INTO `department` VALUES (2, 'ฝ่ายทรัพยากรบุคคล', 'ดูแลพนักงานและการสรรหา', '2025-04-29 13:56:50', '2025-04-29 13:56:50');
INSERT INTO `department` VALUES (3, 'ฝ่ายขาย', 'ดำเนินการขายและติดต่อกับลูกค้า', '2025-04-29 13:56:50', '2025-04-29 13:56:50');
INSERT INTO `department` VALUES (4, 'ฝ่ายบัญชี', 'ดูแลเรื่องของการเงินในบริษัท', '2025-04-29 13:58:30', '2025-04-29 13:58:58');

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `department_id` int NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES (1, 1, 'สมชาย ผู้จัดการ', 'somchai@company.com', 'ผู้จัดการทั่วไป');
INSERT INTO `employees` VALUES (2, 1, 'สมศรี เลขานุการ', 'somsri@company.com', 'เลขานุการ');
INSERT INTO `employees` VALUES (3, 2, 'มนัส ทรัพยากร', 'manat@company.com', 'HR Officer');
INSERT INTO `employees` VALUES (4, 2, 'ปิยะพร สรรหา', 'piyaporn@company.com', 'Recruiter');
INSERT INTO `employees` VALUES (5, 3, 'วิทยา ขายเก่ง', 'witaya@company.com', 'Sales Executive');
INSERT INTO `employees` VALUES (6, 3, 'ศิริพร นำเสนอ', 'siriporn@company.com', 'Sales Representative');
INSERT INTO `employees` VALUES (7, 3, 'จักรกฤษณ์ ปิดการขาย', 'jakkris@company.com', 'Sales Manager');
INSERT INTO `employees` VALUES (8, 4, 'จารุวรรณ บัญชี', 'jaruwan@company.com', 'Accountant');
INSERT INTO `employees` VALUES (9, 4, 'อนันต์ การเงิน', 'anan@company.com', 'Finance Officer');
INSERT INTO `employees` VALUES (10, 4, 'ปัทมา ตรวจสอบ', 'pattama@company.com', 'Auditor');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_level_id` int NULL DEFAULT NULL COMMENT 'การเข้าถึงข้อมูล',
  `department_id` int NULL DEFAULT NULL COMMENT 'รหัสฝ่าย',
  `department` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ชื่อฝ่าย',
  `position` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hire_date` date NULL DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'active',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  INDEX `user_level_id`(`user_level_id` ASC) USING BTREE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `users_level` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '749f09bade8aca755660eeb17792da880218d4fbdc4e25fbec279d7fe9f65d70', 'ก้องภพ', 'ใจดี', 'kongpop@example.com', '0812345678', 1, 1, 'ฝ่ายบริหาร', 'ผู้ดูแลระบบ', '2022-01-15', 'active', '2025-04-29 13:51:29', '2025-05-23 16:32:54');
INSERT INTO `users` VALUES (2, 'Member1', '46e4447a3d5a363b44866c962ab0b0257e5da7333385822b7949c267ebef38d2', 'สุภาพร', 'ใจงาม', 'supaporn@example.com', '0823456789', 4, 2, 'ฝ่ายทรัพยากรบุคคล', 'ผู้จัดการฝ่ายบุคคล', '2023-03-01', 'active', '2025-04-29 13:51:29', '2025-05-23 16:32:37');
INSERT INTO `users` VALUES (3, 'Member2', '13206f240b374ba4e23414e2a02bbd89163b4b1a768c975460f72457547c0ea6', 'ธนา', 'สุขใจ', 'thana@example.com', '0834567890', 4, 3, 'ฝ่ายขาย', 'พนักงานขาย', '2024-06-10', 'active', '2025-04-29 13:51:29', '2025-05-23 16:32:41');

-- ----------------------------
-- Table structure for users_level
-- ----------------------------
DROP TABLE IF EXISTS `users_level`;
CREATE TABLE `users_level`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `level_name`(`level_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_level
-- ----------------------------
INSERT INTO `users_level` VALUES (1, 'Admin', 'เข้าถึงทุกฟังก์ชันของระบบได้ทั้งหมด');
INSERT INTO `users_level` VALUES (2, 'HR', 'จัดการข้อมูลพนักงานและข้อมูลที่เกี่ยวข้อง');
INSERT INTO `users_level` VALUES (3, 'Employee', 'ดูและแก้ไขข้อมูลส่วนตัวของตนเองเท่านั้น');
INSERT INTO `users_level` VALUES (4, 'Member', 'ผู้ใช้งานระบบ');

SET FOREIGN_KEY_CHECKS = 1;
