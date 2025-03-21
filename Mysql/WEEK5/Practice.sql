-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2025 at 11:53 AM
-- Server version: 8.0.41-0ubuntu0.22.04.1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendance`
--

CREATE TABLE `Attendance` (
  `employee_id` int DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Attendance`
--

INSERT INTO `Attendance` (`employee_id`, `attendance_date`, `status`) VALUES
(1, '2024-01-01', 'Present'),
(1, '2024-01-02', 'Late'),
(2, '2024-01-01', 'Present'),
(2, '2024-01-02', 'Present'),
(3, '2024-01-01', 'Absent'),
(3, '2024-01-02', 'Late'),
(4, '2024-01-01', 'Present'),
(5, '2024-01-01', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `Departments`
--

CREATE TABLE `Departments` (
  `department_id` int NOT NULL,
  `department_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Departments`
--

INSERT INTO `Departments` (`department_id`, `department_name`) VALUES
(101, 'Sales'),
(102, 'Engineering'),
(103, 'HR'),
(104, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employee_id` int NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `department_id` int DEFAULT NULL,
  `manager_id` int DEFAULT NULL,
  `hire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_id`, `employee_name`, `salary`, `department_id`, `manager_id`, `hire_date`) VALUES
(1, 'Alice', '9000.00', 101, NULL, '2020-01-10'),
(2, 'Bob', '7000.00', 101, 1, '2020-03-15'),
(3, 'Charlie', '7000.00', 101, 1, '2021-02-20'),
(4, 'David', '6000.00', 102, 1, '2019-05-12'),
(6, 'Frank', '7500.00', 103, 4, '2021-06-17'),
(7, 'Grace', '8500.00', 103, 4, '2022-01-25'),
(8, 'Heidi', '7000.00', 101, 2, '2022-04-10'),
(10, 'Judy', '7000.00', 103, 4, '2023-01-10'),
(11, 'Timi', '7200.00', 102, 4, '2025-02-15'),
(12, 'Loora', '8600.00', 103, 4, '2025-01-25'),
(13, 'Maxi', '7250.00', 101, 2, '2025-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `product_id` int NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`product_id`, `product_name`, `category`) VALUES
(101, 'Laptop', 'Electronics'),
(102, 'Smartphone', 'Electronics'),
(103, 'Tablet', 'Electronics'),
(104, 'Desk Chair', 'Furniture'),
(105, 'Notebook', 'Stationery');

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `sale_id` int NOT NULL,
  `sale_date` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`sale_id`, `sale_date`, `amount`, `customer_id`, `product_id`, `region`) VALUES
(1, '2024-01-01', '500.00', 1, 101, 'North'),
(2, '2024-01-05', '200.00', 1, 102, 'North'),
(3, '2024-01-07', '300.00', 2, 103, 'South'),
(4, '2024-01-15', '450.00', 3, 101, 'East'),
(5, '2024-02-01', '700.00', 1, 103, 'North'),
(6, '2024-02-15', '600.00', 2, 102, 'South'),
(7, '2024-03-01', '650.00', 3, 101, 'East'),
(8, '2024-03-10', '550.00', 4, 104, 'West'),
(9, '2024-04-05', '400.00', 4, 101, 'West'),
(10, '2024-04-10', '800.00', 5, 103, 'North');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `student_id` int NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `class_id` int DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `User_logins`
--

CREATE TABLE `User_logins` (
  `user_id` int DEFAULT NULL,
  `login_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `User_logins`
--

INSERT INTO `User_logins` (`user_id`, `login_date`) VALUES
(1, '2024-01-05'),
(1, '2024-02-10'),
(1, '2024-03-15'),
(2, '2024-01-10'),
(2, '2024-01-25'),
(2, '2024-03-01'),
(3, '2024-02-15'),
(3, '2024-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `idx_employee_name` (`employee_name`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `Departments` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
