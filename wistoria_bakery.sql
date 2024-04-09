-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 08:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wistoria_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `email`, `name`, `password`, `hp`) VALUES
(00020, 'dfdf2342', '1212', '$2y$10$t', '0'),
(00021, '213123123123', '121212', '$2y$10$3', '234234243'),
(00022, '12312323', '121212', '$2y$10$5', '234234243'),
(00023, 'wrewerwr', 'werwerwre', '$2y$10$1', '0'),
(00024, 'testing123@gmail.com', 'TestingABC', '$2y$10$z', '123'),
(00025, 'abc123@gmail.com', 'aName', '$2y$10$S', '123123231'),
(00026, 'new123@gmail.com', 'NewUser', '$2y$10$z.9CL35VaK4iTTc.1/rFD.O0yrLgJRzK/uF9xYoXXIi5N8Tl3H4E2', '1123123'),
(00027, 'newuser@gmail.com', 'new name', '$2y$10$xqJbqu9GQlu1eX5M.XKpVOrcnl2Hv.1Re9WjVxGWa6jybru1sMkJ.', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderitemid` varchar(10) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`orderitemid`, `quantity`) VALUES
('46000002', 4),
('46000003', 2),
('46000005', 2),
('46100002', 2),
('46100005', 2),
('46200005', 1),
('46300005', 1),
('46400005', 1),
('46500005', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `orderid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `customerid` int(10) NOT NULL,
  `totalprice` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`orderid`, `customerid`, `totalprice`) VALUES
(0000000383, 26, 267),
(0000000384, 26, 267),
(0000000385, 26, 267),
(0000000386, 26, 267),
(0000000387, 26, 267),
(0000000388, 26, 267),
(0000000389, 26, 267),
(0000000390, 26, 267),
(0000000465, 27, 49);

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `productitemid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `product_item_name` varchar(50) NOT NULL,
  `product_item_price` int(10) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`productitemid`, `product_item_name`, `product_item_price`, `description`) VALUES
(00001, 'Caramel Cream Cheese Cake', 89, 'Caramel，Cream Cheese，Honey, contains gluten and dairy products'),
(00002, 'Dark Chocolate Cake', 79, 'Belgium Dark Chocolate, contains gluten and dairy products'),
(00003, 'Carrot Cake  ', 69, 'Local organic carrot, contains gluten and dairy products'),
(00004, 'Cherry Coconut Cake', 69, 'Local Coconut, USA Cherry, contains gluten and dairy products'),
(00005, 'Macaron in a box', 49, '16pcs Macaron, flavors: Marmalade, Honey Caramel, Cookies and Cream, Espresso (4pcs each), contains gluten and dairy products '),
(00006, 'Black Forest Gelato Cake', 109, 'Handmade Gelato, Belgium Dark Chocolate, contains gluten and dairy products');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderitemid`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product_item`
--
ALTER TABLE `product_item`
  ADD PRIMARY KEY (`productitemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `orderid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `productitemid` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
