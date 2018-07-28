-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 05:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `title`) VALUES
(1, 'à¦à¦¸à§‹ à¦ªà§à¦°à¦¯à§à¦•à§à¦¤à¦¿à¦° à¦œà¦¨à§à¦¯, à¦¬à§‡à¦°à¦¿à§Ÿà§‡ à¦¯à¦¾à¦“ à¦ªà§à¦°à¦¬à§ƒà¦¦à§à¦§à¦¿à¦° à¦œà¦¨à§à¦¯à¥¤'),
(2, 'à¦†à¦—à¦¾à¦®à§€ à§¨à§¬/à§®/à§¨à§¦à§§à§® à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦¨à¦¤à§à¦¨ à¦›à¦¾à¦¤à§à¦°à¦›à¦¾à¦¤à§à¦°à§€à¦¦à§‡à¦° à¦¬à¦°à¦£ à¦•à¦°à§‡ à¦¨à§‡à§Ÿà¦¾ à¦¹à¦¬à§‡à¥¤'),
(3, 'à¦†à¦—à¦¾à¦®à§€ à§§à§§/à§®/à§¨à§¦à§§à§® à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦•à§à¦²à¦¾à¦¸ à¦¶à§à¦°à§ à¦¹à¦¬à§‡à¥¤');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
