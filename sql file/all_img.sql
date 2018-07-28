-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 05:37 PM
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
-- Table structure for table `all_img`
--

CREATE TABLE `all_img` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_img`
--

INSERT INTO `all_img` (`id`, `title`, `department`, `photo`) VALUES
(1, 'Title 1', 'Civil', 'a5131ad52df4ec558cea47d6327cda4c.jpg'),
(2, 'Title 2', 'Civil', '55e23daa9c13dc17db555dc667893481.jpg'),
(3, 'Title 3', 'Civil', '417ff27673ead30e67bcf7e65a91777e.jpg'),
(4, 'Title 4', 'Civil', '9c30d2f0e242dcf4b06322b020c5bdbc.jpg'),
(5, 'Title 5', 'Civil', 'fb409b40d4cfca03356d257a8f566560.jpg'),
(6, 'Title 6', 'Civil', '3752b1cc893b360d0f412f154b7daead.jpg'),
(7, 'Title 1', 'Electrical', 'cc6728a05fdd98ef9bf4630cb03ba592.jpg'),
(8, 'Title 2', 'Electrical', '7724a091dea7341d841ce2702bbdddc7.jpg'),
(9, 'Title 3', 'Electrical', '37f245616c8b05379e315e22a6412d2d.jpg'),
(10, 'Title 4', 'Electrical', '45988e92a25a1002f9d8e719f5033b07.png'),
(11, 'Title 5', 'Electrical', '540f10c3cfe16b8966593d4ed86e387a.png'),
(12, 'Title 1', 'Computer', 'b1ae8a57f0c621ef008c9f0b8e67fa58.jpg'),
(13, 'Title 2', 'Computer', 'db2d5bbfa402461e5be6c67f3bd9e0a2.jpg'),
(14, 'Title 3', 'Computer', 'a6564e5f11492743982d9f25625c6198.jpg'),
(15, 'Title 4', 'Computer', '694b8ba8c05c1bbce7434d320f9a5b4a.jpg'),
(16, 'Title 5', 'Computer', '5053f74a2165aa96ec859240c9b188c4.jpg'),
(17, 'Title 6', 'Computer', '4f55488e24e4a7fcd5956ce17c07d557.jpg'),
(18, 'Title 1', 'Electronics', '0c614383c26713f6ff53fac24fc0c37b.jpg'),
(19, 'Title 2', 'Electronics', 'f80357aa3b3aae4e2d95b9ec78a5fbe7.jpg'),
(20, 'Title 3', 'Electronics', 'fdabee801a783059a286837b0adcb06b.jpg'),
(21, 'Title 4', 'Electronics', '512c90ce28ab328b8fcbe478ab9e90d2.jpeg'),
(22, 'Title 5', 'Electronics', '21714e225e611693a52b5657f3791ef4.jpg'),
(23, 'Title 6', 'Electronics', '966eaab9af7cd28701a2b3760de4d4aa.jpg'),
(24, 'Title 1', 'Environmental', '49ff5869407476031c26ca57f1d7869a.jpg'),
(25, 'Title 2', 'Environmental', '8237990d9c6f1fdf8919abf77ce1a7b1.jpg'),
(26, 'Title 3', 'Environmental', '9f45b9c88adbc39d9912d54fd11d2b43.jpg'),
(27, 'Title 4', 'Environmental', '1010e1a37d9baf90d91b85a53a3f4f59.jpg'),
(28, 'Title 5', 'Environmental', '390e77ebefdf38e015e7f1657dc4392d.jpg'),
(29, 'Title 1', 'Non-tech', 'c5ce82b1ebb5b7ed47dbeb7f3a326b73.jpg'),
(30, 'Title 2', 'Non-tech', '9a48aee191c91dbd9d47342d1d52ff85.png'),
(31, 'Title 3', 'Non-tech', '346ef5b4190ca26ba2863fd58eb255c0.png'),
(32, 'Title 4', 'Non-tech', '5215f108152c31231231079dc45e4566.png'),
(33, 'Title 5', 'Non-tech', '6cc60b0ac2de6965289adb38a8d3eb49.png'),
(34, 'Title 6', 'Non-tech', '52c02169ea2c2a46a07d2d8bbd1f63b6.png'),
(35, 'Title 3', 'Environmental', '67835290e89397e958cbf4829a884943.jpg'),
(36, 'Title 4', 'Environmental', 'd43df767916a1c1e9ce5f92d4ac06edb.jpg'),
(37, 'Title 5', 'Environmental', 'cea5156bf2252627c3d347f61b96fdc4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_img`
--
ALTER TABLE `all_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_img`
--
ALTER TABLE `all_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
