-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 04:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourismvictoria`
--

CREATE TABLE `tourismvictoria` (
  `id` tinyint(10) NOT NULL,
  `tourismname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourismvictoria`
--

INSERT INTO `tourismvictoria` (`id`, `tourismname`, `location`, `description`, `price`, `image`) VALUES
(4, 'Apollo Bay', '   3233', 'Australian town on Great Ocean Road, with Marriners viewpoint and Great Otway National Park nearby.   ', 115, 'image/apollobay.jpg'),
(5, 'Wilsons Promontory National Park', '3960', 'Australian National Park with Squeaky Beach, rich wildlife & landscape seen from Mount Oberon.', 70, 'image/wilsonspromontorynatinalpark.jpg'),
(6, 'Great Otway National Park', '3314', 'Australia\'s national park is famous for its rugged coastline, the Maits Rest rainforest and Triplet Falls.', 90, 'image/greatotwaynationalpark.jpg'),
(7, 'Grampians National Park', '3314', 'Australian National Park with rich wildlife, indigenous rock sculptures & MacKenzie Falls.', 80, 'image/grampiansnationalpark.jpg'),
(9, 'Melbourne', '3000', 'Capital of an Australian state with 19th century architecture, Royal Botanic Gardens and art institutes.', 106, 'image/melbourne.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourismvictoria`
--
ALTER TABLE `tourismvictoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourismvictoria`
--
ALTER TABLE `tourismvictoria`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
