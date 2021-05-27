-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 03:11 PM
-- Server version: 5.6.51-cll-lve
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
  `description` text NOT NULL,
  `intro` varchar(64) NOT NULL,
  `aromatic` varchar(64) NOT NULL,
  `cup_size` varchar(64) NOT NULL,
  `intensity` varchar(64) NOT NULL,
  `origin` varchar(64) NOT NULL,
  `Weight` varchar(64) NOT NULL,
  `Warranty` varchar(64) NOT NULL,
  `Dimension` varchar(64) NOT NULL,
  `water_tank` varchar(64) NOT NULL,
  `pressure` varchar(64) NOT NULL,
  `energy` varchar(64) NOT NULL,
  `capacity` varchar(64) NOT NULL,
  `origin_description` varchar(256) NOT NULL,
  `roasting_info` varchar(256) NOT NULL,
  `aromatic_profile` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_thumb`, `description`, `intro`, `aromatic`, `cup_size`, `intensity`, `origin`, `Weight`, `Warranty`, `Dimension`, `water_tank`, `pressure`, `energy`, `capacity`, `origin_description`, `roasting_info`, `aromatic_profile`, `quantity`) VALUES
(1, 'Shanghai Lungo', 'capsule1.jpeg', 35.00, '2021-04-27 20:15:05', '2021-05-18 20:42:28', 'capsule', '', 'capsule1.jpeg', 'A smooth, fruity blend of Arabicas from four distinct origins to represent the diverse culture of Shanghai as a modern city. The Chinese have started to develop a modern coffee style, with Shanghai leading the way. Shanghai Lungo is an insight into the emerging Asian coffee taste and culture. Crafted from Kenyan, Chinese and Indonesian Arabicas, this distinctive light-roast blend will please with its berry notes and fine acidity. Enjoy it like a local: Add to this long cup of coffee with a splash of cream and take it on-the-go.', 'For Lungo Lovers', 'Citric / Berry', 'Grande & Venti', '5 on 13', 'Arabica', '', '', '', '', '', '', '', 'Crafted from Kenyan, Chinese and Indonesian Arabicas, this light-roast blend will please with its smoothness and fine berry notes.\r\n', 'Shanghai Lungo is roasted in two fast and light splits, allowing us to get precise results from each part while keeping the delicacy of the blend. A fine grind and medium capsule load keep it from becoming too mild.', 'Shanghai Lungo is a fruity blend with aromatic notes representing oranges, peach and red fruit. Berry notes and fine acidity add to the smoothness of the blend.', 30),
(2, 'Buenos Lungo', 'capsule2.jpeg', 35.00, '2021-04-27 20:15:13', '2021-04-27 20:15:13', 'capsule', 'capsule2.jpeg', 'capsule2.jpeg', 'The sweet popcorn and mild character of this Arabica and Robusta blend is a delicious complement to the city life of Buenos Aires. A destination for true foodies, Buenos Aires is a highlight of Argentina’s vibrant food scene. Sweetness prevails, and coffee is no exception: they love it sweet and milky! Buenos Lungo blends a gently roasted Colombian Arabica to deliver distinct cereal and sweet tastes. Drink it like a local: Add a generous drop of milk and sugar at will to your Lungo for an extra treat.', 'For Lungo Lovers', 'Sweet & Cereal', 'Venti', '4 on 13', 'Colombian Arabica', '', '', '', '', '', '', '', 'Crafted with Colombian Arabica that adds delicate fruity acidity, and lightly roasted Ugandan Robusta that brings out cereal and sweet tastes in the blend.', 'This coffee is carefully roasted in two controlled splits to ensure its light profile is preserved. The second split is smaller but is roasted for slightly longer to deliver more intensity and texture to the blend.', 'Buenos Lungo is an aromatic and balanced blend with cereal tastes, abundant sweetness and characteristic popcorn notes.', 30),
(3, 'Vienna Lungo', 'capsule3.jpeg', 35.00, '2021-04-27 20:16:47', '2021-04-27 20:16:47', 'capsule', 'capsule3.jpeg', 'capsule3.jpeg', 'Vienna’s coffeehouse tradition shaped the coffee culture of this vibrant city, known for its many recipes and the smoothness of its coffee. Vienna Lungo recreates this balanced and pleasant Viennese taste by pairing sweet Brazilian and Colombian Arabicas, lightly roasted to enhance the malty and aromatic notes in the cup. Enjoy it like a local: Top up your Lungo with hot water for a 150ml cup and pair it with a slice of cake.', 'For Lungo Lovers', 'Malted and cereal', 'Tall & Grande', '6 on 13', 'South America', '', '', '', '', '', '', '', 'Our Lungo is made of Brazil’s pulped and natural Bourbon variety beans with Colombian Arabica which gives a smooth and balanced taste.', 'The Brazilian coffee is light-medium roasted which keeps it smooth and with all the Bourbon variety’s malty notes intact. The Colombian coffee beans get a short roast to release all of their finer aromatics.', 'Remarkably rounded and smooth, the cup boasts malty and aromatic notes that shine through this blend.', 30),
(4, 'Essenza', 'coffee_machine1.jpg', 266.00, '2021-04-27 20:16:49', '2021-04-27 20:16:49', 'machine', 'coffee_machine1.jpg', 'coffee_machine1.jpg', 'Offering 2 programmable cup sizes, Essenza machine creates perfect coffee just the way you like it. ', 'Classic and Modern Design', '', '', '', '', '3.6 Kilogram', '2 years', '84 x 330 x 204 mm', '0.6 litre', '19 bar', 'Eco-mode after 3min.\r\nAuto-off after 9 min.', '6 capsules', '', '', '', 20),
(5, 'Citiz', 'coffee_machine2.jpg', 359.00, '2021-04-27 20:18:50', '2021-04-27 20:18:50', 'machine', 'coffee_machine2.jpg', 'coffee_machine2.jpg', 'The compact design fits in to any urban kitchen without taking up too much space with user-friendly features', 'Retro-modern design with premium finish', '', '', '', 'ukraine', '2.4 Kilograms', '2 years', '84 x 330 x 204 mm', '0.5 litre', '19 bar', '', '5 capsules', '', '', '', 20),
(6, 'Inissia', 'coffee_machine3.jpg', 158.00, '2021-04-27 20:18:55', '2021-04-27 20:18:55', 'machine', 'coffee_machine3.jpg', 'coffee_machine3.jpg', 'Tiny footprint, uniting elegance and innovation in playful colors', 'All-in-one multi-functional coffee machine', '', '', '', '', '2.4 Kilograms', '2 years', '320 x 230 x 120 mm', '0.7 litre', '19 bar', 'Eco-mode after 3min.\r\nAuto-off after 9 min.', '11 capsules', '', '', '', 20),
(7, 'Lungo Sets', 'coffeecups1.jpeg', 35.00, '2021-04-27 20:20:32', '2021-04-27 20:20:32', 'accessories', 'coffeecups1.jpeg', 'coffeecups1.jpeg', 'This set of two lungo cups turns every coffee moment into a little ritual. Keeping your beverage in a cocoon of its own, each cup is made of double-walled porcelain.\r\n\r\n', 'For coffee moments that take you back in time', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(24, 'Baristas Cappucino Cups Set', '', 45.00, '2021-05-27 14:33:10', '2021-05-27 14:33:10', 'accessories', 'coffeecups2.jpeg', 'coffeecups2.jpeg', 'A contemporary and classic design, the Baristas Collection sheds a modern glow on Italian elegance. The white porcelain cups bring a slight twist to the traditional Italian barista know-how. The rim reveals each and every one of the aromas in your coffee. For a cosy touch, it has a matte finish, and for a dash of elegance, the sleek design combines the dense porcelain with a linear look. A contrast with the translucent ochre red saucer. Putting coffee traditions in a new light.', 'Set of 2 Cappuccino cups in white porcelain.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30),
(9, 'Aeroccino Milk Frother', 'milkfrother.jpeg', 99.00, '2021-04-27 20:23:54', '2021-04-27 20:23:54', 'accessories', 'milkfrother.jpeg', 'milkfrother.jpeg', 'Simple and fast automatic system to prepare creamy milk froth', 'Simple and fast automatic system', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(10, 'Cantuccini Biscuits', 'biscuits.jpeg', 10.00, '2021-04-27 20:31:26', '2021-04-27 20:31:26', 'condiments', 'biscuits.jpeg', 'biscuits.jpeg', 'Italian almond biscuits to go with coffee', 'Italian almond biscuits to go with coffee', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(11, 'White Sugar', 'whitesugar.jpg', 10.00, '2021-04-27 20:32:14', '2021-04-27 20:32:14', 'condiments', 'whitesugar.jpg', 'whitesugar.jpg', 'Pack of 100, 3g each', 'Add a little sugar won\'t kill', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(12, 'Brown Sugar', 'brownsugar.jpg', 10.00, '2021-04-27 20:32:53', '2021-04-27 20:32:53', 'condiments', 'brownsugar.jpg', 'brownsugar.jpg', 'Pack of 100, 3g each', 'that goes with your coffee', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(13, 'Touch Travel Mug', 'mug.jpeg', 29.00, '2021-04-27 20:33:30', '2021-04-27 20:33:30', 'accessories', 'mug.jpeg', 'mug.jpeg', 'Touch Travel Mug is a must-have coffee accessory for all those who like to enjoy their Nespresso coffee outside the home. It will keep your Nespresso coffee warm (or cold).\r\n\r\nThe Touch Travel Mug boasts an innovative urban design and great content of maximum 345ml, making it the ideal choice for all coffee lovers.\r\n\r\nCare instructions: This product is dishwasher-safe. Do not put it in a microwave or freezer.', 'Enjoy your coffee on the road', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(14, 'Descaling Kit', 'kit.jpg', 25.00, '2021-04-27 20:34:10', '2021-05-18 22:24:59', 'accessories', 'kit.jpg', 'kit.jpg', 'Maintain optimum temperature of your coffee by descaling your machine regularly. \r\n\r\nSet of 2 descaling kits for your choice of coffee machines. The descaling kit gently eliminates the scale that builds up in your machine over time to ensure that your tasting experience is as perfect as the first day. For complete information on descaling please refer to the user manual of your machine.', 'Keep your coffee at best taste', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 30);

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
