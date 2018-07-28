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
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `name`, `description`, `status`) VALUES
(1, 'Mission', 'Execute the principals and action of works to ensure the standardized Diploma Engineering Educational and basic trade course Training.', 1),
(2, 'Vision', 'Contemporary sustainable technical vocational Education and Training, Human Resource Development, Employment, Changing life style. Industrial expansion and national economic grouth.', 2),
(4, 'College About', 'Jhenaidah is a district in southwestern Bangladesh. It is a part of the Khulna Division. Jhenaidah Polytechnic Institute is a Government Technical Institute in Jhenaidah, Bangladesh. Jhenaidah Polytechnic Institute is one of the prominent member of this â€˜Civilized Cityâ€™. It was established in 2004 with a few number of student in four technologies. The Institute is located in its own campus near bisik silponogory, Dhaka-Magura road, outside of Jhenaidah city. Jhenaidah Polytechnic Institute offers Diploms in Engineering Courses in various technologies. Traditional departments like Civil, Electrical  flourished here during its early days, later the emergent technologies like Computer, Environmental and Electronics are flourishing fast. Earlier all diploma programs were three years long but from 2000 all the program are standardized as four years. Ford Foundation established Jhenaidah Polytechnic Institute, with a duration of 3 years long courses, based on the syllabus of Oklahoma State University, Still Water, USA. The certificate issued by the then Technical Board Education was â€œAssociated in Engineeringâ€ having provision to undergo B.S course in USA and also in U.K. Its formation and academic course history details goes back to the birth of Ahsanullah Engineering College, which is now known as BUET.  Graduated from this prestigious institute thousands of diploms engineers are working both home and abroad.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
