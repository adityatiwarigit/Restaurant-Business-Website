-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 04:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedseat`
--

CREATE TABLE `bookedseat` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `aadhar_no` int(13) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reservation_for` varchar(10) NOT NULL,
  `seat_no` varchar(5) NOT NULL,
  `alloted_date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookedseat`
--

INSERT INTO `bookedseat` (`id`, `name`, `aadhar_no`, `mobile_no`, `email`, `address`, `reservation_for`, `seat_no`, `alloted_date`, `time_from`, `time_to`) VALUES
(35, 'Aditya Tiwari', 2147483647, 2147483647, 'at2695275@gmail.com', 'Gaddopur Faizabad', 'Hall', 'S1', '2022-11-24', '11:45:00', '00:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(4, 'Aditya Tiwari', 'at2695275@gmail.com', 'This is My Struggle');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `id` int(4) NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `prize` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`id`, `category`, `name`, `image`, `prize`) VALUES
(1, 'pasta', 'Red Sauce Pasta', 'red-sauce-pasta.webp', 150),
(2, 'Pasta', 'White Sauce Pasta', 'white-sauce-pasta.webp', 150),
(4, 'pasta', 'Pink Sauce Pasta', 'pink-sauce-pasta.jpg', 180),
(5, 'Sandwich', 'Cheesy Dream Sandwich', 'cheesy-dream-sandwich.jpg', 60),
(6, 'Sandwich', 'Veggie Delight Sandwich', 'veggie-delight-sandwich.webp', 75),
(7, 'Sandwich', 'Paneer Tikka Sandwich', 'paneer-tikka-sandwich.jpg', 110),
(8, 'Sandwich', 'Pizza Sandwich', 'pizza-sandwich.webp', 149),
(9, 'Burger', 'Aloo Tikki Burger', 'aloo-tikki-burger.webp', 40),
(10, 'Burger', 'Paneer Tikka Burger', 'paneer-tikka-burger.jpg', 80),
(11, 'Burger', 'Big Boy Burger', 'big-boy-burger.jpg', 180),
(12, 'Chinese', 'Spring Role', 'spring-role.webp', 120),
(13, 'Chinese', 'Chilly Potato', 'chilly-potato.jpg', 150),
(14, 'Chinese', 'Chilly Paneer', 'Chili-Paneer.jpg', 169),
(15, 'Chinese', 'Veg Noodles', 'veg-noodles.jpg', 120),
(16, 'Meals and Combo', '1-Burger 1-french fries and 1-coldrink', '1coldrink1burger1frenchfriescombo.jpg', 130),
(17, 'Meals and Combo', '2-large pizza and 2-cock combo', '2pizza2coldrinkcombo.jpg', 299),
(18, 'Meals and Combo', '3-veggie Burger Combo', '3burger combo.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(4) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `disciption` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`, `disciption`) VALUES
(1, 'front.jpg', 'Our Restaurent', 'This is the Front side View of Our restaurent.\r\nHere some common seats are shown in front side.'),
(2, 'localroom.jpeg', 'Inner Room', 'The inner side of room\'s atmosphere is so Good That gives better comfirtability to the Customers.'),
(3, 'familyroom.jpg', 'Family Room', 'The first floor is allotted for Families here maximum 10 familily members be allotted for 1 table if your family is larger then reserve more then a table.'),
(4, 'hallroom.jpg', 'Hall', 'The third floor is alotted for Hall where Customer can celebrate any type of Party.The maximum seat for Hall is 100 and 5 woofers, a saparate restroom.Every things are free but the food charge occur as per mentioned in food menu except Hall charge.'),
(5, 'VIProom.jpg', 'VIP Rooms', 'The forth floor is reserved for VIP rooms.\r\nwe Have maximum 8 seats for a room. and have 5 VIP roooms but you can extend 5 seat except 8 seats in a VIP room '),
(6, 'tarrace.jpg', 'Tarrace', 'The tarrace reserved for Dinner and is open at 6:00 PM to 3:00 AM. The Tarrace Hourly charge is Rs 100/- '),
(7, 'coupleroom.jpg', 'For Couples', 'Couples can reserve a saparate Seat with is arround 10 meter far from families. The charges are as per tarrace charge, no external charges but charges may affect as per some special activity.'),
(8, 'kitchen.jpg', 'Kitchen', 'The kitchen is saparated in 2 parts. 1 is for veg. and another 1 is for Non-veg. The Veg Counter Contains 15 cheffs and the Non-veg Counter contains 17 cheffs both food-vessels and food shelfs are saparated. Non-veg cheffs are not allowed to inter Veg-counter while Making food.'),
(9, 'outerview.jpeg', 'Outer View', 'The outer view from the tarrace is like heaven you Can enjoy and click selfies from that location.'),
(10, 'restroom.jpg', 'Rest Room', 'Each Floor 2 Rest Room which have minimum 7 seats available Here 1 is for Male and Another 1 is for female.');

-- --------------------------------------------------------

--
-- Table structure for table `seatstatus`
--

CREATE TABLE `seatstatus` (
  `id` int(4) NOT NULL,
  `category` varchar(20) NOT NULL,
  `seatno` varchar(30) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatstatus`
--

INSERT INTO `seatstatus` (`id`, `category`, `seatno`, `status`) VALUES
(1, 'seat', 'S1 for Normal', ''),
(2, 'seat', 'S2 for Normal', 'yes'),
(3, 'seat', 'S3 for Normal', 'yes'),
(4, 'seat', 'S4 for Normal', 'yes'),
(5, 'VIP', 'V1 for VIP', ''),
(6, 'VIP', 'V2 for VIP', ''),
(7, 'VIP', 'V3 for VIP', ''),
(8, 'VIP', 'V4 for VIP', ''),
(9, 'family', 'F1 for Family', ''),
(10, 'family', 'F2 for Family', ''),
(11, 'family', 'F3 for Family', ''),
(12, 'family', 'F4 for Family', ''),
(13, 'Hall', 'V5 for VIP', ''),
(14, 'Hall', 'V6 for VIP', ''),
(15, 'Hall', 'V7 for VIP', ''),
(16, 'Hall', 'V8 for VIP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookedseat`
--
ALTER TABLE `bookedseat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatstatus`
--
ALTER TABLE `seatstatus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookedseat`
--
ALTER TABLE `bookedseat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seatstatus`
--
ALTER TABLE `seatstatus`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
