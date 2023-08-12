-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 08:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_movie`
--

CREATE TABLE `book_movie` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movie_mod` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_movie`
--

INSERT INTO `book_movie` (`id`, `date`, `time`, `theater`, `movie_mod`, `language`, `person`) VALUES
(1, '2022-08-29', '3:00 to 6:00', 'Miraj City Pluse', '3D', 'Malayalam', '2'),
(3, '2022-09-11', '3:00 to 6:00', 'Shital Theatre', '3D', 'Telugu', '2'),
(4, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(5, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(6, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(7, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(8, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(9, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(10, '2022-09-05', '9:00 to 12:00', 'Connplex Smart', '3D', 'Malayalam', '25'),
(15, '2022-09-06', '3:00 to 6:00', 'PVR', '2D', 'Hindi', '2'),
(16, '2022-09-21', '10:00 to 1:00', 'PVR', '2D', 'Hindi', '6'),
(17, '2022-10-07', '3:00 to 6:00', 'Shital Theatre', 'IMAX 3D', 'Hindi', '4');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Zip` varchar(20) NOT NULL,
  `key` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `Address`, `Address2`, `City`, `State`, `Zip`, `key`) VALUES
(9, 'Shaikh', 'Hamza', 'Admin@gmail', '12345', '12345', ',jcuro8', '', 'Choose...', '', '1'),
(11, 'shaikh', 'hamza', 'shaikh@gmail', '12345', '371/aprtment', '25floor', 'ahmedabad', 'Gujrat', '380021', '0'),
(12, 'shaikh', 'hamza', 'Shaikh.mo.hamza18@gmail.com', '12345', '12345/hyyy', 'lhd;dk8dmd', '', 'Choose...', '', '0'),
(14, 'shaikh', 'Hamza', 'shaikh@gmail', '12212', '371/aprtment', '25floor', 'ahmedabad', 'Rajasthan', '380025', '0'),
(15, 'shaikh', 'shoeb', 'shaikh@shoeb', '12345', '1233', 'dgdg', 'ahmedabad', 'Rajasthan', '28336', '0'),
(16, 'jjj', 'jdj', 'nnd@gmail.com', 'swhhwe', '1234vdlk', 'lhd;dk8dmd', 'ahmedabad', 'Gujrat', '358222', '0'),
(17, 'hamza', 'shaikh', 'dvv@12gmail', '12345', '3245', '25floor', 'ahmedabad', 'Gujrat', '380021', '0'),
(18, 'abcd', 'abcd', 'abc@gmail.com', '123', 'awsdefsvgd', 'wdefsrvdgb', 'sawdcvf', 'Rajasthan', 'wdefv', '0');

-- --------------------------------------------------------

--
-- Table structure for table `movie_master`
--

CREATE TABLE `movie_master` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_master`
--

INSERT INTO `movie_master` (`id`, `movie_name`, `movie_image`) VALUES
(5, 'Chup', 'images/chup.png'),
(6, 'Brahmastra', 'images/Brahmastra.png'),
(7, 'Dhokha', 'images/Dhokha.png'),
(8, 'Ishq Pashmina', 'images/Ishq Pashmina.png'),
(18, 'Vikram Vedha', 'images/Vikram Vedha.png'),
(22, 'Fakt Mahilao Maate', 'images/Fakt Mahilao Maate.png'),
(23, 'Jurassic Hunt', 'images/Jurassic Hunt.png'),
(24, 'DC League of Super-Pets', 'images/Super Pets.png'),
(25, 'The Black Phone', 'images/Black Phone.png'),
(26, 'Beckman', 'images/Beck Man.png'),
(27, 'Top Gun: Maverick', 'images/Top Gun Manverick.png'),
(28, 'Jurassic World: Dominion', 'images/Jurassic World Dominion.png'),
(29, 'Ponniyin Selvan - Part 1', 'images/Ps-1.png'),
(30, 'Prem Geet3', 'images/Prem Geet3.png'),
(31, 'Sita Ramam', 'images/Sita Ramam.png'),
(32, 'Suhani Shah - Kahaani India Tour', 'images/Kahaani.png'),
(33, 'Gaurav Kapoor Live', 'images/Gaurav Kapoor Live.png'),
(34, 'Sunburn Arena ft. Alan Walker - Ahmedabad', 'images/Alan.png'),
(35, 'Uncharted', 'images/Uncharted.png'),
(36, 'Justice Society: World War II', 'images/Justice Society.png'),
(37, 'Mojin - The Treasure Valley', 'images/Mojin.png'),
(38, 'Kursk', 'images/Kursk.png'),
(39, 'Ghostbusters: Afterlife', 'images/GhostBusters.png'),
(40, 'Wonder Woman 1984', 'images/Wonder Women.png'),
(41, 'Bullet Train', 'images/bullet.png'),
(42, 'Avatar', 'images/Avtar.png'),
(43, 'Everything Everywhere All at Once', 'images/everything.png'),
(44, 'Where The Crawdads Sing', 'images/Where the Crawdads.png'),
(45, 'Karthikeya 2', 'images/Karthikeya 2.png'),
(46, 'Kehvatlal Parivar', 'images/Kehvatlal Parivar.png'),
(47, 'erdtfgyh', 'images/log.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_movie`
--
ALTER TABLE `book_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_master`
--
ALTER TABLE `movie_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_movie`
--
ALTER TABLE `book_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `movie_master`
--
ALTER TABLE `movie_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
