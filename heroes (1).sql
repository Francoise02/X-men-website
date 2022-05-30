-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 10:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `x-men`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `real_name` varchar(20) NOT NULL,
  `short_bio` varchar(100) NOT NULL,
  `long_bio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`ID`, `name`, `real_name`, `short_bio`, `long_bio`) VALUES
(2, 'Cyclops', 'Scott Summers', 'Scott Summers was Xavier\'s first recruit and often the group\'s field leader. Former headmaster of th', 'The first X-Man, Scott Summers possesses the mutant ability to fire powerful concussive blasts through his eyes that act as a portal to another dimension full of the force that makes up his optic blast. He is visually distinctive for the ruby quartz visor he wears to control his devastating power. A born leader, Cyclops succeeded his mentor Professor X to command the X-Men.'),
(3, 'Iceman', 'Robbert \"Bobby\" Drak', 'Robert \"Bobby\" Drake is the second and youngest member of the original team. Former member of the Ch', 'The youngest member of the original X-Men. Bobby is an Omega-level mutant, although it took some help from Emma Frost to realize this. Bobby\'s control of ice is vast; he can create shields, clones, spikes, slides and also freeze others. He currently sails with the Marauders out of Krakoa.'),
(4, 'Angel', 'Warren Worthington', 'Warren Worthington III is the third official member of the original team, he is the only one to have', 'A mutant and original member of the X-Men, Warren received his angelic wings at a young age along with a unique healing factor in his blood. After being twisted into a weapon of Apocalypse, Warren became the cold and distant Archangel. In the years since then, he\'s gone back and forth between his two identities.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `real_name` (`real_name`),
  ADD UNIQUE KEY `UNIQUE` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
