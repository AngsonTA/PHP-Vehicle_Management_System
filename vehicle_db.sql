-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 01, 2023 at 10:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

DROP TABLE IF EXISTS `booked`;
CREATE TABLE IF NOT EXISTS `booked` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_about`
--

DROP TABLE IF EXISTS `car_about`;
CREATE TABLE IF NOT EXISTS `car_about` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(600) NOT NULL,
  `info` varchar(500) NOT NULL,
  `info1` varchar(20) NOT NULL,
  `info2` varchar(20) NOT NULL,
  `info3` varchar(20) NOT NULL,
  `info4` varchar(20) NOT NULL,
  `info5` varchar(20) NOT NULL,
  `info6` varchar(20) NOT NULL,
  `info7` varchar(20) NOT NULL,
  `info8` varchar(20) NOT NULL,
  `info9` varchar(20) NOT NULL,
  `info10` varchar(20) NOT NULL,
  `info11` varchar(20) NOT NULL,
  `info12` varchar(20) NOT NULL,
  `info13` varchar(20) NOT NULL,
  `info14` varchar(20) NOT NULL,
  `info15` varchar(20) NOT NULL,
  `info16` varchar(20) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car_about`
--

INSERT INTO `car_about` (`info_id`, `car_name`, `info`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`, `info7`, `info8`, `info9`, `info10`, `info11`, `info12`, `info13`, `info14`, `info15`, `info16`) VALUES
(54, '125', 'fbgfdhfrnhhgfjgtkmgt', 'hfhfhfrhtfrjh', 'hhfjytfhneyem', 'mery4y,4ery', 'km4rym5ruy4r', 'ynmryneteneye', 'neygeneyge', 'nerhgerhgnehge', 'erererher', 'erherherhr', 'hrhrhrhryr', 'nrhrnrherhn', 'rhrhrhr', 'hrhrh', 'jtjtjtjttj', 'jtjtjmtruj', 'etemneyjnyn'),
(56, '126', 'xvdsvfdsv', 'vdsvvvv', 'dfvdvdfv', 'dvdvdfvdfsv', 'vdvdvdv', 'dvdvdvdfvdv', 'reedegegre', 'vregegreg', 'vvvre', 'vhvhvhv', 'hvh', 'vhvh', 'vhv', 'bjbjb jbjbsxs', 'hvhfbgftb', 'vgtgtbgtb', 'jbvjubvjbj'),
(59, '128', 'vvg4trgtrvgrthgvrthg', 'rhrhrhbtrhh', 'rhrhrhbtrhyr', 'hyhrhbhythb', 'htyhythytythyt', 'hthyhythyth', 'bhbtyhbyttyh', 'ythytbhythyhyhy', 'ybhyhbyhhyhy', 'hybhyhyrbhyh', 'hhbthbhythbytb', 'bhyhtyhbh', 'yhbtybhthh', 'hbthytbhyt', 'bhty ntb ht', 'thnbthtybt', 'tbhthbth');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
CREATE TABLE IF NOT EXISTS `car_details` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_img1` varchar(200) NOT NULL,
  `product_img2` varchar(200) NOT NULL,
  `product_img3` varchar(200) NOT NULL,
  `product_img4` varchar(200) NOT NULL,
  `product_img5` varchar(200) NOT NULL,
  `product_img6` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`product_id`, `product_name`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`) VALUES
(125, 'Mini Cooper S', '../image/mini1.jpg', '../image/mini2.jpg', '../image/mini3.jpg', '../image/mini4.jpg', '../image/mini5.jpg', '../image/mini6.jpg'),
(126, 'Dodge Challenger', '../image/dodge1.jpg', '../image/dodge2.jpg', '../image/dodge3.jpg', '../image/dodge4.jpg', '../image/dodge5.jpg', '../image/dodge8.jpg'),
(128, 'Nissan GTR', '../image/gtr1.jpg', '../image/gtr2.jpg', '../image/gtr3.jpg', '../image/gtr4.jpg', '../image/gtr4.jpg', '../image/gtr2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customertbl`
--

DROP TABLE IF EXISTS `customertbl`;
CREATE TABLE IF NOT EXISTS `customertbl` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_name` varchar(100) NOT NULL,
  `reg_email` varchar(100) NOT NULL,
  `reg_password` varchar(100) NOT NULL,
  `reg_phone` varchar(20) NOT NULL,
  `reg_address` varchar(100) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spectbl`
--

DROP TABLE IF EXISTS `spectbl`;
CREATE TABLE IF NOT EXISTS `spectbl` (
  `car_id` int(11) NOT NULL,
  `car_price` varchar(20) NOT NULL,
  `car_mileage` varchar(20) NOT NULL,
  `car_varient` varchar(20) NOT NULL,
  `car_year` int(11) NOT NULL,
  `car_hp` int(11) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spectbl`
--

INSERT INTO `spectbl` (`car_id`, `car_price`, `car_mileage`, `car_varient`, `car_year`, `car_hp`) VALUES
(125, '60 Lakh', '3', 'Manual', 2021, 600),
(126, '1 Cr', '4', 'Auto', 2012, 700),
(128, '1 Cr', '2', 'Auto', 2021, 700);

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

DROP TABLE IF EXISTS `testdrive`;
CREATE TABLE IF NOT EXISTS `testdrive` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(100) NOT NULL,
  `car_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_time` varchar(100) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
