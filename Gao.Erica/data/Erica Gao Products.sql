-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2021 at 08:34 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ericagao_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_thumb`, `description`) VALUES
(1, 'Shanghai Lungo', '/images/capsule1.jpg', 35.00, '2021-04-27 20:15:05', '2021-04-27 20:15:05', 'coffee capsule', '/images/capsule1.jpg', '/images/capsule1.jpg', 'Fruity with fine acidity'),
(2, 'Buenos Lungo', '/images/capsule2.jpg', 35.00, '2021-04-27 20:15:13', '2021-04-27 20:15:13', 'coffee capsule', '/images/capsule2.jpg', '/images/capsule2.jpg', 'Sweet and cereal'),
(3, 'Vienna Lungo', '/images/capsule3.jpg', 35.00, '2021-04-27 20:16:47', '2021-04-27 20:16:47', 'coffee capsule', '/images/capsule3.jpg', '/images/capsule3.jpg', 'Round and smooth'),
(4, 'Essenza', '/images/coffee_machine1.jpg', 266.00, '2021-04-27 20:16:49', '2021-04-27 20:16:49', 'coffee machine', '/images/coffee_machine1.jpg', '/images/coffee_machine1.jpg', 'Suitable for an espresso, americano or even tea'),
(5, 'Citiz', '/images/coffee_machine2.jpg', 359.00, '2021-04-27 20:18:50', '2021-04-27 20:18:50', 'coffee machine', '/images/coffee_machine2.jpg', '/images/coffee_machine2.jpg', 'Adding a touch of elegance to coffee rituals'),
(6, 'Inissia', '/images/coffee_machine3.jpg', 158.00, '2021-04-27 20:18:55', '2021-04-27 20:18:55', 'coffee machine', '/images/coffee_machine3.jpg', '/images/coffee_machine3.jpg', 'Create rich espresso, macchiato and more'),
(7, 'Lungo', '/images/coffeecups1.jpg', 35.00, '2021-04-27 20:20:32', '2021-04-27 20:20:32', 'coffee cups pack of 2', '/images/coffeecups1.jpg', '/images/coffeecups1.jpg', 'Set of 2 in white porcelain and 2 saucers'),
(8, 'Shanghai & Buenos Aires', '/images/coffeecups2.jpg', 45.00, '2021-04-27 20:23:00', '2021-04-27 20:23:00', 'coffee cups pack of 2', '/images/coffeecups2.jpg', '/images/coffeecups2.jpg', 'Warm-kept with stainless steel'),
(9, 'Aeroccino Milk Frother', '/images/milkfrother.jpg', 99.00, '2021-04-27 20:23:54', '2021-04-27 20:23:54', 'milk frother', '/images/milkfrother.jpg', '/images/milkfrother.jpg', 'simple and fast automatic system to prepare creamy milk froth'),
(10, 'Cantuccini Biscuits', '/images/biscuits.jpg', 10.00, '2021-04-27 20:31:26', '2021-04-27 20:31:26', 'biscuits', '/images/biscuits.jpg', '/images/biscuits.jpg', 'Italian almond biscuits to go with coffee'),
(11, 'White Sugar', '/images/whitesugar.jpg', 10.00, '2021-04-27 20:32:14', '2021-04-27 20:32:14', 'condiments', '/images/whitesugar.jpg', '/images/whitesugar.jpg', 'Pack of 100, 3g each'),
(12, 'Brown Sugar', '/images/brownsugar.jpg', 10.00, '2021-04-27 20:32:53', '2021-04-27 20:32:53', 'condiments', '/images/brownsugar.jpg', '/images/brownsugar.jpg', 'Pack of 100, 3g each'),
(13, 'Touch Travel Mug', '/images/mug.jpg', 29.00, '2021-04-27 20:33:30', '2021-04-27 20:33:30', 'mug', '/images/mug.jpg', '/images/mug.jpg', 'Enjoy your coffee on the road'),
(14, 'Descaling Kit', '/images/kit.jpg', 25.00, '2021-04-27 20:34:10', '2021-04-27 20:34:10', 'coffee maintenance', '/images/kit.jpg', '/images/kit.jpg', 'Maintain optimum temperature of your coffee by descaling your machine regularly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
