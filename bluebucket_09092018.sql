-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 09:04 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluebucket`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `landmark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `address1`, `address2`, `street`, `city`, `state`, `pincode`, `landmark`) VALUES
(1, 'Bld 55b-7', 'JN-1, Sector 9', '', 1, 1, 400703, ''),
(2, 'Shop No 1, Royal Residency', 'Plot No 34, Sector 5, Kopar Khirane', '', 1, 1, 400709, ''),
(3, 'Sector 4A, Koparkhairane', 'Navi Mumbai', '', 1, 1, 400709, 'Near petrol pump'),
(4, 'Ambedkar Nagar', 'Whitefield', '5th cross', 2, 2, 566366, ''),
(5, 'Sector 9, Vashi', 'Navi Mumbai', '', 1, 1, 400603, 'Near Shabri Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `bar_store`
--

CREATE TABLE `bar_store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(50) NOT NULL,
  `address` int(11) NOT NULL,
  `certificate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bar_store`
--

INSERT INTO `bar_store` (`store_id`, `store_name`, `address`, `certificate`) VALUES
(1, 'Pauwa Deck', 2, 3252525),
(2, 'Patrik Bar', 2, 2345678),
(3, 'Nitin Pub', 1, 98765432),
(4, 'Sumit Restaurant', 1, 123456),
(5, 'Nimita Bar', 2, 34456789),
(6, 'Vishram Bar', 1, 96539465);

-- --------------------------------------------------------

--
-- Table structure for table `bottle_track`
--

CREATE TABLE `bottle_track` (
  `row_id` int(11) NOT NULL,
  `bottle_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `turn` int(11) NOT NULL,
  `qunatity_ml` int(11) NOT NULL,
  `quantity_percent` float NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bucket_bottle`
--

CREATE TABLE `bucket_bottle` (
  `bottle_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `remaining` float NOT NULL,
  `purch_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bucket_bottle`
--

INSERT INTO `bucket_bottle` (`bottle_id`, `customer_id`, `drink_id`, `remaining`, `purch_date_time`) VALUES
(24, 3, 1, 100, '2018-05-26 00:24:09'),
(25, 3, 7, 100, '2018-05-26 00:24:15'),
(26, 5, 20, 100, '2018-05-30 01:18:44'),
(27, 5, 3, 100, '2018-06-02 22:00:48'),
(28, 5, 7, 100, '2018-06-03 20:14:58'),
(29, 5, 18, 100, '2018-06-03 21:01:10'),
(30, 5, 8, 100, '2018-06-03 21:21:38'),
(31, 5, 11, 100, '2018-06-03 21:21:44'),
(32, 3, 8, 100, '2018-08-12 19:59:23'),
(33, 3, 3, 100, '2018-08-19 16:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city`, `state`) VALUES
(1, 'Mumbai', 1),
(2, 'Bangluru', 2),
(3, 'Pune', 1),
(4, 'Mysuru', 2);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `customer_id` int(11) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`customer_id`, `password`) VALUES
(3, '1'),
(4, '1'),
(5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `address` int(11) NOT NULL,
  `mobile_number` bigint(15) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `surname`, `address`, `mobile_number`, `email_id`) VALUES
(3, 'Abhijeet', 'Kurade', 1, 9970188701, 'abhijeet.kurade95@gmail.com'),
(4, 'Ganesh', 'Avhad', 5, 9970188702, 'ganesh@gmail.com'),
(5, 'Eknath', 'Chikane', 3, 9970188703, 'eknath@rediffmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drink_id` int(11) NOT NULL,
  `drink_type` int(11) NOT NULL,
  `drink_name` varchar(50) NOT NULL,
  `max_quantity_ml` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drink_id`, `drink_type`, `drink_name`, `max_quantity_ml`, `price`) VALUES
(1, 2, 'DSP Black', 750, 2000),
(2, 2, 'DSP', 750, 1750),
(3, 2, 'Royal Stag', 750, 2400),
(4, 2, 'Royal Challange', 750, 2600),
(5, 2, 'Signature', 750, 3000),
(6, 2, 'Red Label', 750, 4000),
(7, 2, 'Black Label', 750, 6000),
(8, 3, 'Absolute', 750, 1500),
(11, 3, 'Smirnoff', 750, 1500),
(12, 3, 'Magic Moment', 750, 1100),
(13, 3, 'Romanov', 750, 750),
(14, 3, 'White Mischief', 750, 1100),
(15, 3, 'Fuel', 750, 1100),
(16, 1, 'Tuborg', 650, 250),
(17, 1, 'Hayword 200', 650, 300),
(18, 1, 'Kingfisher', 650, 250),
(19, 1, 'Budweiser', 650, 300),
(20, 6, 'Tequaila', 180, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `drink_stock`
--

CREATE TABLE `drink_stock` (
  `row_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `stock_ml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink_stock`
--

INSERT INTO `drink_stock` (`row_id`, `store_id`, `drink_id`, `stock_ml`) VALUES
(1, 1, 8, 2000),
(2, 1, 7, 2000),
(3, 1, 1, 2000),
(4, 1, 2, 2000),
(5, 1, 3, 2000),
(6, 1, 4, 2000),
(7, 1, 5, 2000),
(8, 1, 6, 2000),
(9, 1, 11, 2000),
(10, 1, 12, 2000),
(11, 1, 13, 2000),
(12, 1, 14, 2000),
(13, 1, 15, 2000),
(14, 1, 16, 2000),
(15, 1, 16, 5000),
(16, 1, 17, 5000),
(17, 1, 18, 5000),
(18, 1, 19, 5000),
(19, 1, 20, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `drink_type`
--

CREATE TABLE `drink_type` (
  `drink_type_id` int(11) NOT NULL,
  `drink_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink_type`
--

INSERT INTO `drink_type` (`drink_type_id`, `drink_type`) VALUES
(1, 'Beer'),
(2, 'Whisky'),
(3, 'Vodka'),
(4, 'Rum'),
(5, 'Gin'),
(6, 'Tequaila');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_card`
--

CREATE TABLE `menu_card` (
  `store_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `ac_service` int(11) NOT NULL,
  `30ml` int(11) NOT NULL,
  `60ml` int(11) NOT NULL,
  `90ml` int(11) NOT NULL,
  `120ml` int(11) NOT NULL,
  `150ml` int(11) NOT NULL,
  `180ml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_card`
--

INSERT INTO `menu_card` (`store_id`, `drink_id`, `ac_service`, `30ml`, `60ml`, `90ml`, `120ml`, `150ml`, `180ml`) VALUES
(1, 1, 0, 30, 60, 90, 120, 150, 180),
(1, 2, 0, 21, 2, 2, 2, 2, 2),
(1, 3, 0, 33, 63, 93, 123, 153, 183),
(1, 8, 0, 25, 50, 75, 100, 125, 150),
(1, 13, 0, 50, 95, 140, 185, 230, 275),
(1, 16, 0, 316, 616, 9161, 1216, 1516, 1816),
(1, 17, 0, 317, 617, 917, 1217, 1517, 1817),
(1, 20, 0, 37, 67, 97, 127, 157, 187),
(2, 2, 0, 231, 261, 291, 2121, 2151, 2181),
(2, 8, 0, 230, 160, 290, 2120, 2150, 2180),
(4, 3, 0, 47, 77, 57, 87, 67, 97),
(4, 20, 0, 10, 20, 30, 40, 50, 60),
(5, 1, 0, 530, 560, 590, 5120, 5150, 5180),
(5, 1, 1, 510, 520, 530, 540, 550, 560),
(5, 20, 0, 25, 50, 75, 100, 125, 150);

-- --------------------------------------------------------

--
-- Table structure for table `orders_all`
--

CREATE TABLE `orders_all` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `ac_service` int(11) NOT NULL,
  `order_place_time` datetime NOT NULL,
  `order_end_time` datetime DEFAULT NULL,
  `order_status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_all`
--

INSERT INTO `orders_all` (`order_id`, `customer_id`, `store_id`, `ac_service`, `order_place_time`, `order_end_time`, `order_status`) VALUES
(1, 3, 1, 0, '2018-09-02 23:39:00', NULL, 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `sub_order_count` int(11) NOT NULL,
  `sub_sub_order` int(11) NOT NULL,
  `bottle_id` int(11) NOT NULL,
  `quantity_ml` int(11) NOT NULL,
  `quantity_percent` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_ongoing`
--

CREATE TABLE `order_ongoing` (
  `order_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_queue`
--

CREATE TABLE `order_queue` (
  `order_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `mobile_number` bigint(15) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `mobile_number`, `email_id`) VALUES
(1, 997018870, 'pauwakopakhairane@gmail.com'),
(2, 997018871, 'patrikbar@gmail.com'),
(3, 997018872, 'nitinpub@gmail.com'),
(4, 997018873, 'sumitrestauranr@gmail.com'),
(5, 997018874, 'nimitabar@gmail.com'),
(6, 997018875, 'vishrambar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `partner_credentials`
--

CREATE TABLE `partner_credentials` (
  `partner_id` int(11) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_credentials`
--

INSERT INTO `partner_credentials` (`partner_id`, `password`) VALUES
(1, '1'),
(2, '1'),
(3, '1'),
(4, '1'),
(5, '1'),
(6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state`) VALUES
(1, 'Maharashtra'),
(2, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `sub_order_queue`
--

CREATE TABLE `sub_order_queue` (
  `order_id` int(11) NOT NULL,
  `sub_order_count` int(11) NOT NULL,
  `sub_sub_order` int(11) NOT NULL,
  `bottle_id` int(11) NOT NULL,
  `quantity_ml` int(11) NOT NULL,
  `quantity_percent` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_order_queue`
--

INSERT INTO `sub_order_queue` (`order_id`, `sub_order_count`, `sub_sub_order`, `bottle_id`, `quantity_ml`, `quantity_percent`, `amount`) VALUES
(34, 1, 0, 33, 60, 3, 63),
(34, 1, 1, 32, 60, 3, 50),
(34, 1, 2, 24, 60, 3, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `city_id` (`city`),
  ADD KEY `state_id` (`state`);

--
-- Indexes for table `bar_store`
--
ALTER TABLE `bar_store`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `address` (`address`);

--
-- Indexes for table `bottle_track`
--
ALTER TABLE `bottle_track`
  ADD PRIMARY KEY (`row_id`),
  ADD KEY `bottle_trck_bottle` (`bottle_id`),
  ADD KEY `customer_bottle_track` (`customer_id`),
  ADD KEY `partner_bottle_track` (`store_id`);

--
-- Indexes for table `bucket_bottle`
--
ALTER TABLE `bucket_bottle`
  ADD PRIMARY KEY (`bottle_id`),
  ADD KEY `customer_bottle` (`customer_id`),
  ADD KEY `bottle_drink` (`drink_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_state` (`state`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_address` (`address`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drink_id`),
  ADD KEY `drink_type` (`drink_type`);

--
-- Indexes for table `drink_stock`
--
ALTER TABLE `drink_stock`
  ADD PRIMARY KEY (`row_id`),
  ADD KEY `drink_stock` (`drink_id`),
  ADD KEY `partner_stock` (`store_id`);

--
-- Indexes for table `drink_type`
--
ALTER TABLE `drink_type`
  ADD PRIMARY KEY (`drink_type_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_card`
--
ALTER TABLE `menu_card`
  ADD PRIMARY KEY (`store_id`,`drink_id`,`ac_service`),
  ADD KEY `menu_card_drink` (`drink_id`);

--
-- Indexes for table `orders_all`
--
ALTER TABLE `orders_all`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id_fk` (`customer_id`),
  ADD KEY `store_id_fk` (`store_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`sub_order_count`,`sub_sub_order`);

--
-- Indexes for table `order_ongoing`
--
ALTER TABLE `order_ongoing`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `ongoing_stores` (`store_id`),
  ADD KEY `cust_id_fk` (`customer_id`);

--
-- Indexes for table `order_queue`
--
ALTER TABLE `order_queue`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `wsdfg` (`store_id`),
  ADD KEY `cust_fk` (`customer_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);

--
-- Indexes for table `partner_credentials`
--
ALTER TABLE `partner_credentials`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `sub_order_queue`
--
ALTER TABLE `sub_order_queue`
  ADD PRIMARY KEY (`order_id`,`sub_order_count`,`sub_sub_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bar_store`
--
ALTER TABLE `bar_store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bottle_track`
--
ALTER TABLE `bottle_track`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bucket_bottle`
--
ALTER TABLE `bucket_bottle`
  MODIFY `bottle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `drink_stock`
--
ALTER TABLE `drink_stock`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `drink_type`
--
ALTER TABLE `drink_type`
  MODIFY `drink_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_all`
--
ALTER TABLE `orders_all`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city`) REFERENCES `cities` (`city_id`),
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state`) REFERENCES `states` (`state_id`);

--
-- Constraints for table `bar_store`
--
ALTER TABLE `bar_store`
  ADD CONSTRAINT `address` FOREIGN KEY (`address`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `store_id` FOREIGN KEY (`store_id`) REFERENCES `partner` (`partner_id`);

--
-- Constraints for table `bottle_track`
--
ALTER TABLE `bottle_track`
  ADD CONSTRAINT `bottle_trck_bottle` FOREIGN KEY (`bottle_id`) REFERENCES `bucket_bottle` (`bottle_id`),
  ADD CONSTRAINT `customer_bottle_track` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `partner_bottle_track` FOREIGN KEY (`store_id`) REFERENCES `partner` (`partner_id`);

--
-- Constraints for table `bucket_bottle`
--
ALTER TABLE `bucket_bottle`
  ADD CONSTRAINT `bottle_drink` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`drink_id`),
  ADD CONSTRAINT `customer_bottle` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `city_state` FOREIGN KEY (`state`) REFERENCES `states` (`state_id`);

--
-- Constraints for table `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_address` FOREIGN KEY (`address`) REFERENCES `addresses` (`address_id`);

--
-- Constraints for table `drinks`
--
ALTER TABLE `drinks`
  ADD CONSTRAINT `drink_type` FOREIGN KEY (`drink_type`) REFERENCES `drink_type` (`drink_type_id`);

--
-- Constraints for table `drink_stock`
--
ALTER TABLE `drink_stock`
  ADD CONSTRAINT `drink_stock` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`drink_id`),
  ADD CONSTRAINT `partner_stock` FOREIGN KEY (`store_id`) REFERENCES `bar_store` (`store_id`);

--
-- Constraints for table `menu_card`
--
ALTER TABLE `menu_card`
  ADD CONSTRAINT `menu_card_drink` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`drink_id`),
  ADD CONSTRAINT `store_menu_card` FOREIGN KEY (`store_id`) REFERENCES `bar_store` (`store_id`);

--
-- Constraints for table `orders_all`
--
ALTER TABLE `orders_all`
  ADD CONSTRAINT `customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `store_id_fk` FOREIGN KEY (`store_id`) REFERENCES `bar_store` (`store_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `oorder_id_fk` FOREIGN KEY (`order_id`) REFERENCES `orders_all` (`order_id`);

--
-- Constraints for table `order_ongoing`
--
ALTER TABLE `order_ongoing`
  ADD CONSTRAINT `cust_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `ongoing_stores` FOREIGN KEY (`store_id`) REFERENCES `bar_store` (`store_id`),
  ADD CONSTRAINT `orderid_fk_ongoing` FOREIGN KEY (`order_id`) REFERENCES `orders_all` (`order_id`);

--
-- Constraints for table `order_queue`
--
ALTER TABLE `order_queue`
  ADD CONSTRAINT `cust_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orderid_fk` FOREIGN KEY (`order_id`) REFERENCES `orders_all` (`order_id`),
  ADD CONSTRAINT `wsdfg` FOREIGN KEY (`store_id`) REFERENCES `bar_store` (`store_id`);

--
-- Constraints for table `partner_credentials`
--
ALTER TABLE `partner_credentials`
  ADD CONSTRAINT `partner_id` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`partner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
