-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 08:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizza_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `veg` int(1) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `description`, `image`, `veg`, `price`) VALUES
(11, 'Veggie Overload', 'Onion, Tomato, Sweet Corn, Jalapeno, Black Olive', 'vegpizza.png', 1, 209),
(12, 'Paneer Overloaded', 'Peppy Paneer, Onion, Tomato, Green Chillies, Corn, Italian Sprinkle', 'vegpizza.png', 1, 229),
(13, 'El Mexicano Nacho', 'Cheesy Jalapeno and Pepper Paneer, topped with chopped parsley and Nachos!', 'vegpizza.png', 1, 265),
(14, 'Cheese Overload', 'Mozzarella Cheese', 'vegpizza.png', 1, 209),
(15, 'Veggie Supreme ', 'Mushroom, Capsicum, Onion, Tomato, Baby Corn & Olives', 'vegpizza.png', 1, 265),
(16, 'Veggie Crunch', 'Onion & Capsicum', 'vegpizza.png', 1, 170),
(21, 'Chicken Overload ', 'Chicken Keema, Chicken Kofta, Capsicum, Onion, Red Paprika', 'vegpizza.png', 0, 259),
(22, 'Triple Chicken Feast', 'Chicken Keema, Plain chicken , Chicken Hot ''n'' Spicy', 'vegpizza.png', 0, 300),
(23, 'CornNChicken', 'Chunks of Chicken, Tomato & Sweet Corn', 'vegpizza.png', 0, 230),
(24, 'ChickNSpicy', 'Chicken Hot ''n'' Spicy, Capsicum & Mushroom', 'vegpizza.png', 0, 230),
(25, 'Zesty Chicken', 'Chunks of Chicken & Green Chillies', 'vegpizza.png', 0, 170),
(26, 'Kurkure Non-Veg Pizza ', 'Mozzarella cheese, Onion, Tomatoes, Jalapenos, Chicken Keema, Kurkure', 'vegpizza.png', 0, 109),
(31, 'Cheesy Pepper Chicken Pasta', 'Cheesy Pepper Chicken Pasta', 'vegpizza.png', 0, 149),
(32, 'Garlic Bread Exotica ', 'Garlic Bread with Cheese, Olives, Tomato, Jalapenos, Onion & Balsamic Vinegar', 'vegpizza.png', 1, 125),
(33, 'Garlic Bread Stix ', 'Garlic Bread Stix ', 'vegpizza.png', 1, 85),
(34, 'Hot n Spicy Chicken Wings ', '6 Pieces of Tender, Juicy Chicken wings tossed in Spicy BBQ Sauce', 'vegpizza.png', 0, 149),
(35, 'Choco Chip Lava Cookie', 'Choco Chip Lava Cookie', 'vegpizza.png', 1, 39),
(36, 'Coke', 'Coca Cola', 'vegpizza.png', 1, 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
