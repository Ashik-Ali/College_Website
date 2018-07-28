-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 05:38 PM
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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `thr_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `home_district` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `join_year` int(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `thr_name`, `department`, `designation`, `home_district`, `photo`, `join_year`, `status`) VALUES
(1, 'Md Majharul Islam', 'Environmental', 'Head of Environmental Department', 'Jhenaidah', 'f7dab033c10fb9e4cd41beaf4e02fe05.jpg', 2010, 1),
(2, 'Md Shahadat Hossain', 'Computer', 'Head of Computer Department', 'Pabna', '4b592b98ff330d312093ce289fb4c90e.jpg', 2010, 1),
(3, 'Md Shoriful Islam', 'Civil', 'Head of Civil Department', 'Jhenaidah', 'a2ff71d282f09f9167f0eebf92302bd6.jpg', 2010, 1),
(4, 'Md Robiul Islam', 'Electronics', 'Head of Electronics Department', 'Jhenaidah', '3b304cdec6d2d2f0b8075be33cb6cd99.jpg', 2008, 1),
(5, 'Goutom Das', 'Electrical', 'Head of Electrical Department', 'Jhenaidah', '37f06d70a20b45fb5cbba871f38a8863.jpg', 2015, 1),
(6, 'Md Mahabub Islam', 'Non-tech', 'Head of Non-Tech', 'Jhenaidah', '1414b0ee0262c2fc4d6ca22568e051ad.jpg', 2015, 1),
(7, 'Instructor 1', 'Civil', 'Instructor', 'Jhenaidah', 'b01a092ceb91bf06518cada533132d4b.png', 2015, 2),
(8, 'Instructor 2', 'Civil', 'Instructor', 'Jhenaidah', '80e8f3e445e1150f748ddbc24717bb9b.png', 2015, 2),
(9, 'Instructor 2', 'Electrical', 'Instructor', 'Jhenaidah', 'aa8700aa41d9dc27c5a992ab54f11f62.png', 2015, 2),
(10, 'Instructor 2', 'Environmental', 'Instructor', 'Jhenaidah', '2fea380550a94ab0f9f5470cd5c9a5f4.png', 2015, 2),
(11, 'Instructor 2', 'Non-tech', 'Instructor', 'Jhenaidah', '611c58e90e72a0a44e71b6641358853b.png', 2015, 2),
(12, 'Instructor 1', 'Electrical', 'Instructor', 'Jhenaidah', 'f5d7e7eb043f37d1b96633719af6942e.png', 2015, 2),
(13, 'Instructor 1', 'Electronics', 'Instructor', 'Jhenaidah', '5db08f4c91b3500d94136c16af2d303b.png', 2015, 2),
(14, 'Instructor 1', 'Environmental', 'Instructor', 'Jhenaidah', '232c51fb1ce6914a996bdd24d63b475b.png', 2015, 2),
(15, 'Instructor 1', 'Non-tech', 'Instructor', 'Jhenaidah', 'ac087cd97ad0303ce2acc0b7a9cd6773.png', 2015, 2),
(16, 'Instructor 2', 'Electronics', 'Instructor', 'Jhenaidah', '6e5fc9ebd01080b724f791247e7fd887.png', 2015, 2),
(17, 'Md Mahbub-Ullah-Sharifi', 'Computer', 'Instructor', 'Kushtia', '0b2af2389abd8eaae33469e7b00538b7.jpg', 2015, 2),
(18, 'Md Harun-Ur-Rashid', 'Computer', 'Instructor', 'Jhenaidah', '2fdc56fce463035f895a198ce2bbb53d.jpg', 2015, 2),
(19, 'Junior Instructor 1', 'Civil', 'Junior Instructor', 'Jhenaidah', 'e8703b6b47d64b61270ef02cafe6640f.png', 2013, 3),
(20, 'Junior Instructor 1', 'Electrical', 'Junior Instructor', 'Jhenaidah', '6d617550e6a0a50f7cdbc1f495c50140.png', 2013, 3),
(21, 'Junior Instructor 1', 'Electronics', 'Junior Instructor', 'Jhenaidah', 'f82620abae4d7873c8a5824a3fb923a2.jpg', 2013, 3),
(22, 'Junior Instructor 1', 'Environmental', 'Junior Instructor', 'Jhenaidah', '38a3df894b3277f09febf40c467539da.jpg', 2013, 3),
(23, 'Junior Instructor 1', 'Non-tech', 'Junior Instructor', 'Jhenaidah', '584a0a7ec2e08367d7af1fb38fdbacda.jpg', 2013, 3),
(24, 'Junior Instructor 2', 'Civil', 'Junior Instructor', 'Jhenaidah', '5b256dcfb49b6830d483e60a7e6f7282.png', 2013, 3),
(25, 'Junior Instructor 2', 'Electrical', 'Junior Instructor', 'Jhenaidah', '87691866830e298f3c532945c7fc009d.png', 2013, 3),
(26, 'Junior Instructor 2', 'Electronics', 'Junior Instructor', 'Jhenaidah', '9e4dbc6ad92d7c91320506facfe3d0c8.png', 2013, 3),
(27, 'Junior Instructor 2', 'Environmental', 'Junior Instructor', 'Jhenaidah', '0cc123917a6819b57daeefa77720f7da.png', 2013, 3),
(28, 'Junior Instructor 2', 'Non-tech', 'Junior Instructor', 'Jhenaidah', 'c18817d27beafce5fba079be10e9e5dd.png', 2013, 3),
(29, 'Mst Sharmin Sultana', 'Computer', 'Junior Instructor', 'Barishal', '9198a85194271b992bb3f7c64dbc2815.jpg', 2013, 3),
(30, 'Mst Tahera Khatun', 'Computer', 'Junior Instructor', 'Jhenaidah', '73234a91d311f4c61928c1f11e7b666a.jpg', 2014, 3),
(31, 'staff 1', 'Civil', 'staff', 'Jhenaidah', 'f3da8b9fc3a8691cfff620f64e49e7d9.png', 2015, 4),
(32, 'staff 1', 'Electrical', 'staff', 'Jhenaidah', '6ef73de4eab430ebe8a4fd40be33e562.png', 2015, 4),
(33, 'staff 1', 'Computer', 'staff', 'Jhenaidah', '3610301b3303a0f80465ec64052ece48.png', 2015, 4),
(34, 'staff 1', 'Electronics', 'staff', 'Jhenaidah', 'ad8794f2e78ef5c209429380ee3373ed.png', 2015, 4),
(35, 'staff 1', 'Environmental', 'staff', 'Jhenaidah', 'e8e5f48085eea8e7c3fe83f16fab3fe6.jpg', 2015, 4),
(36, 'staff 1', 'Non-tech', 'staff', 'Jhenaidah', '07e37d064af10e0a73b2680167f83deb.jpg', 2015, 4),
(37, 'staff 2', 'Civil', 'staff', 'Jhenaidah', '654806fecf6c30e0de5aaddbd6c325f5.jpg', 2015, 4),
(38, 'staff 2', 'Electrical', 'staff', 'Jhenaidah', '8d4ab4d7196325e15593c0773e563a19.jpg', 2015, 4),
(39, 'staff 2', 'Computer', 'staff', 'Jhenaidah', '17e134cd9780c1a65a630b22e40600ab.jpg', 2015, 4),
(40, 'staff 2', 'Electronics', 'staff', 'Jhenaidah', '10e8c63a3bf8563ee7177f3e1b4559f1.jpg', 2015, 4),
(41, 'staff 2', 'Environmental', 'staff', 'Jhenaidah', '8ac1d55da9588ee5e7cc9f3cf1c522aa.jpg', 2015, 4),
(42, 'staff 2', 'Non-tech', 'staff', 'Jhenaidah', 'db124ac09b99efea5a0f71983463ec34.png', 2015, 4),
(43, 'Pione1', 'Civil', 'Pione', 'Jhenaidah', '56d4a81af8c142ca106046ee2b75d2b6.png', 2014, 5),
(44, 'Pione 1', 'Electrical', 'Pione', 'Jhenaidah', 'caed7b1fb3d1ca6a0ba365e221014cde.png', 2014, 5),
(45, 'Pione 1', 'Computer', 'Pione', 'Jhenaidah', '8b047fdd5df92f917e836f24c40996ea.png', 2014, 5),
(46, 'Pione 1', 'Electronics', 'Pione', 'Jhenaidah', 'c73e43cadaa39eb571c2727ec314c660.png', 2014, 5),
(47, 'Pione 1', 'Environmental', 'Pione', 'Jhenaidah', '693a0706ff825f9705959b310e3cbf38.png', 2014, 5),
(48, 'Pione 1', 'Non-tech', 'Pione', 'Jhenaidah', 'fd2a30cc3e5ce969861c19cba8a95a6d.png', 2014, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
