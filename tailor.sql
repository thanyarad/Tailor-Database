-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 10:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `age`, `gender`, `address`, `ph_no`, `email_id`, `password`) VALUES
(1, 'Abhik Salian', 21, 'male', '\'Sanskrithi\', Door no. 7-103/5', 7411328238, 'abhiksalian0728@gmai', 'abc'),
(2, 'abc', 3, 'female', 'sad', 1234567890, 'abc123@gmail.com', '123'),
(3, 'akash', 21, 'male', 'mlore', 8976367828, 'akash@gmail.com', '456'),
(5, 'adithya', 19, 'male', 'blore', 2387892221, 'qwerty@uiop', 'qwerty'),
(6, 'Abhik L Salian', 122, 'male', 'Sanskrithi, D. No. 7-103/5,', 7411328238, '21e03.abhik@sjec.ac.', '2222'),
(7, 'wt', 34, 'male', 'eth', 5555555555, 'hr@e', '34'),
(8, 'wt', 34, 'male', 'eth', 5555555555, 'hr@e', '34'),
(9, 'sef', 23, 'female', 'err', 6666666666, 'e@a', '12345'),
(10, 'aaa', 21, 'male', 'Sanskrithi, D. No. 7-103/5, eghne twignu, 4thn4ih, grbi rtgiu45h trogkuggh, rtiuggn,rtg tnhrinh, grutur -575009', 7411328222, 'saa@saa', '121'),
(11, ' fth', 5, 'female', ' rfg', 5656565656, 'fbg@tr', 'et'),
(12, 'abhik', 78, 'male', 'jgv', 8546253210, 'trd@ttd', 'trd'),
(13, 'Abhik L Salian', 21, 'male', 'Kodikal, Mangalore', 7411328238, 'abhiksalian0728@gmail.com', '321'),
(17, 'Abhik Salian', 21, 'male', '\'Sanskrithi\', Door no. 7-103/5', 7411328238, 'abhksalian0728@gmail.com', '123'),
(18, 'test', 12, 'female', 'qwerty', 1234567890, 'test@test', 'test'),
(19, 'test', 11, 'male', 'wef', 5454545454, 't@t', 't'),
(20, 'link', 12, 'male', 'link', 4561237890, 'link@link', 'link'),
(21, 'Adithya', 21, 'male', 'BC Road', 9465722513, 'adithya123@gmail.com', 'adithya'),
(22, 'karthik', 5, 'male', 'dubai', 1236969692, '69@gmail.com', '1234'),
(23, 'Tanushka', 20, 'male', 'Mangalore', 8660145826, 'tanushka@gmail.com', 'tanushka'),
(24, 'akshay', 21, 'male', 'mangalore', 1234567890, 'akshay@gmail.com', '1234'),
(25, 'dg', 32, 'Male', 'tdg', 4444444444, 'r@r', 'r'),
(26, 'John Smith', 21, 'Male', 'Mangalore', 9876543210, 'john.smith@gmail.com', 'john');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `client_id` int(11) NOT NULL,
  `shirt_id` int(11) NOT NULL,
  `pant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`client_id`, `shirt_id`, `pant_id`) VALUES
(2, 9, 9),
(2, 16, 16),
(5, 16, 16),
(9, 10, 10),
(10, 11, 11),
(13, 17, 17),
(18, 20, 20),
(19, 21, 21),
(20, 22, 22),
(21, 23, 23),
(22, 24, 24),
(23, 25, 25),
(24, 26, 26),
(25, 27, 27),
(26, 28, 28);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `shirt_type` varchar(255) DEFAULT NULL,
  `pant_type` varchar(255) DEFAULT NULL,
  `order_date` date DEFAULT current_timestamp(),
  `delivery_date` date DEFAULT NULL,
  `order_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `client_id`, `shirt_type`, `pant_type`, `order_date`, `delivery_date`, `order_total`) VALUES
(1, 19, NULL, 'Colour Checks Pants Fabric Black Honey Day', '2023-08-30', '2023-09-02', 545.00),
(2, 19, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-08-30', '2023-08-03', 655.00),
(3, 19, NULL, 'Cotton Colour Plain Pants Fabric Navy Style Craft', '2023-08-30', '2023-09-10', 660.00),
(4, 19, NULL, 'Cotton Colour Checked Pant Fabric Navy ICLE Stretch', '2023-08-30', '2023-09-10', 740.00),
(5, 19, 'Cotton Grey Colour Plain Shirt Fabric Candy Colour', NULL, '2023-08-30', '2023-09-09', 415.00),
(6, 5, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-08-30', '2023-09-22', 655.00),
(7, 5, 'Cotton Colour Plain Shirt Fabric Green', NULL, '2023-08-30', '2023-09-10', 360.00),
(8, 21, 'Cotton Striped Shirt Fabric Blue Candy Colour', NULL, '2023-08-31', '2023-09-21', 415.00),
(9, 21, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-08-31', '2023-09-10', 655.00),
(10, 19, NULL, 'Cotton Colour Checked Pant Fabric Navy ICLE Stretch', '2023-08-31', '2023-09-10', 740.00),
(11, 22, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-08-31', '2023-08-30', 655.00),
(12, 19, NULL, 'Colour Off White Checks Pants Fabric Honey Day', '2023-08-31', '2023-09-08', 545.00),
(13, 23, 'Cotton Colour Plain Shirt Fabric Green', NULL, '2023-08-31', '2023-09-09', 360.00),
(14, 23, 'Cotton Colour Plain Shirt Fabric Green', NULL, '2023-08-31', '2023-09-09', 360.00),
(15, 19, 'Cotton Striped Shirt Fabric Blue Candy Colour', NULL, '2023-08-31', '2023-09-08', 415.00),
(16, 24, 'Cotton Grey Colour Plain Shirt Fabric Candy Colour', NULL, '2023-08-31', '2023-09-09', 415.00),
(17, 26, 'Cotton Mixed Plain Shirt Fabric Black Flat', NULL, '2023-09-05', '2023-09-07', 425.00),
(18, 26, NULL, 'Cotton Colour Checked Pants Fabric Grayish Blue', '2023-09-05', '2023-09-07', 670.00),
(19, 19, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-10-08', '2023-10-02', 655.00),
(20, 19, NULL, 'Cotton Colour Checked Grey Suiting Fabric Fun', '2023-11-08', '2023-11-30', 655.00);

-- --------------------------------------------------------

--
-- Table structure for table `pant`
--

CREATE TABLE `pant` (
  `pant_id` int(11) NOT NULL,
  `waist` float NOT NULL,
  `front_rise` float NOT NULL,
  `hip` float NOT NULL,
  `thigh` float NOT NULL,
  `length` float NOT NULL,
  `knee` float NOT NULL,
  `inseam` float NOT NULL,
  `leg_opening` float NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pant`
--

INSERT INTO `pant` (`pant_id`, `waist`, `front_rise`, `hip`, `thigh`, `length`, `knee`, `inseam`, `leg_opening`, `client_id`) VALUES
(1, 12, 0, 0, 0, 0, 0, 0, 0, NULL),
(2, 35, 255, 45, 62, 26, 24, 44, 22, NULL),
(3, 1, 2, 3, 4, 5, 6, 7, 8, NULL),
(4, 1, 2, 3, 4, 5, 6, 7, 8, NULL),
(5, 10, 9, 8, 7, 6, 5, 4, 3, NULL),
(6, 10, 20, 30, 40, 50, 60, 70, 80, NULL),
(7, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(9, 10, 20, 30, 40, 50, 60, 70, 80, NULL),
(10, 3, 8, 1, 2, 3, 4, 5, 6, 9),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 18),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 19),
(22, 0, 0, 0, 25, 0, 0, 0, 0, 20),
(23, 34, 24, 38, 16, 22, 21, 20, 26, 21),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 22),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 23),
(26, 775, 53, 43, 546, 5, 57, 76, 55, 24),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 25),
(28, 38, 7, 44, 22, 30, 14, 16, 20, 26);

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

CREATE TABLE `shirt` (
  `shirt_id` int(11) NOT NULL,
  `collar` float NOT NULL,
  `neck_to_shoulder` float NOT NULL,
  `sleeve_length` float NOT NULL,
  `shoulder_to_shoulder` float NOT NULL,
  `chest` float NOT NULL,
  `front_length` float NOT NULL,
  `sleeve_cuff` float NOT NULL,
  `hem` float NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`shirt_id`, `collar`, `neck_to_shoulder`, `sleeve_length`, `shoulder_to_shoulder`, `chest`, `front_length`, `sleeve_cuff`, `hem`, `client_id`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(2, 12, 12, 4, 34, 533, 35, 35, 35, NULL),
(3, 12, 32, 65, 66, 23, 12, 22, 11, NULL),
(4, 8, 9, 7, 6, 5, 4, 3, 2, NULL),
(5, 1, 2, 3, 4, 5, 6, 7, 8, NULL),
(6, 100, 90, 80, 70, 60, 50, 40, 30, NULL),
(7, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(9, 100, 90, 80, 70, 60, 50, 40, 30, NULL),
(10, 7, 4, 1, 1, 3, 2, 8, 2, 9),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(16, 7, 0, 0, 0, 0, 0, 0, 0, 2),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(18, 7, 0, 0, 0, 0, 0, 0, 0, 2),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 18),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 19),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 20),
(23, 8, 12, 23, 22, 26, 25, 32, 3, 21),
(24, 32, 0, 0, 0, 0, 0, 0, 0, 22),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 23),
(26, 12, 23, 54, 65, 7, 53, 54, 65, 24),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 25),
(28, 12, 32, 34, 43, 23, 22, 21, 11, 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`client_id`,`shirt_id`,`pant_id`),
  ADD KEY `shirt_id` (`shirt_id`),
  ADD KEY `pant_id` (`pant_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `pant`
--
ALTER TABLE `pant`
  ADD PRIMARY KEY (`pant_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`shirt_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pant`
--
ALTER TABLE `pant`
  MODIFY `pant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `shirt`
--
ALTER TABLE `shirt`
  MODIFY `shirt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `link_ibfk_2` FOREIGN KEY (`shirt_id`) REFERENCES `shirt` (`shirt_id`),
  ADD CONSTRAINT `link_ibfk_3` FOREIGN KEY (`pant_id`) REFERENCES `pant` (`pant_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `pant`
--
ALTER TABLE `pant`
  ADD CONSTRAINT `pant_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `shirt`
--
ALTER TABLE `shirt`
  ADD CONSTRAINT `shirt_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
