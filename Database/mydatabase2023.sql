-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 11:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(19, 'Racing tire', '32', '6 inch Racing tires.jpg', '1'),
(20, 'Ferrari brakes', '35', 'Ferrari Brambo brakes.jpg', '1'),
(21, 'Ferrari brakes', '35', 'Ferrari Brambo brakes.jpg', '1'),
(22, 'Pressure pump', '42', 'Pressure pump.jpg', '1'),
(23, 'Pressure pump', '42', 'Pressure pump.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `date`) VALUES
(1, 'llll', 'lewis@gmail.com', 721, '2023-07-02 11:09:18'),
(2, 'lewis', 'lewis@gmail.com', 721321256, '2023-07-02 11:09:38'),
(3, 'Kydz Tiemacs', 'zairotechnology@gmai', 796624226, '2023-07-02 11:12:50'),
(4, 'Peter Mwang', 'petermwangi@gmail.co', 2147483647, '2023-07-02 11:13:52'),
(5, 'antonny', 'kyza', 2147483647, '2023-07-05 21:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `total_parts` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `email`, `method`, `address`, `town`, `country`, `pin`, `total_parts`, `total_price`) VALUES
(1, 'Antonny', '0797777777', 'wachiraallan0@gmail.com', 'cash on delivery', '717-01100', 'Nairobi', 'Kenya', '24-01100', '20,345,23', '388'),
(2, 'Antonny', '2233343', 'antonnykisanya001@gmail.com', 'cash on delivery', '717-01100', 'Nairobi', 'Kenya', '24-01100', '20,345,23,345', '733'),
(3, 'Antonny', '6787997877', 'antonnykisanya001@gmail.com', 'phone pay', '717-01100', 'Nairobi', 'Kenya', '24-01100', '345,23,345', '713');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(26, 'Pressure pump', '42', 'Pressure pump.jpg'),
(27, 'Digital gauges', '42', 'Digital gauges.jpg'),
(28, 'Clutch plates', '50', 'Cluntch plates.jpg'),
(29, 'Headlights', '18', 'Headlights.jpg'),
(30, 'Starter motor', '25', 'starter-motor.jpg'),
(31, 'Ferrari brakes', '35', 'Ferrari Brambo brakes.jpg'),
(33, 'Racing tire', '32', '5 inch racing tires.jpg'),
(34, 'V8 Engine', '97', '1000HP V8 Engine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `Usertype` varchar(255) NOT NULL DEFAULT 'user',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `Usertype`, `date`) VALUES
(29, 'Admin', 'antonnykisanya001@gmail.com', '1234', 'admin', '2023-07-17 15:42:07'),
(30, 'Tonnie', 'antonnykisanya001@gmail.com', '1234', 'user', '2023-07-17 15:42:45'),
(31, 'Kisanya', 'kaborachris@gmail.com', '3232', 'user', '2023-07-17 17:10:18'),
(32, 'Tiemacs', 'Tiemacs@gmail.com', '0101', 'user', '2023-07-17 17:11:52'),
(33, 'Antonny', 'antonnykisanya001@gmail.com', '1212', 'user', '2023-07-18 08:04:27'),
(34, 'Antonny', 'antonnykisanya001@gmail.com', '1212', 'user', '2023-07-18 08:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
