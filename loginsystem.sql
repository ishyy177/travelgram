-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2020 at 04:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'ishyy17', 'ishyy17@gmail.com', '$2y$10$YbAElYKsxVdeAwpf45JF2OJKJxyT.mm7U.w4vE0S3KXyoBSh5rqIa'),
(2, 'ismail97', 'ishy_faisal@gmail.com', '$2y$10$.r3mVXjOmlFpm/ieU5sRCewXbHHDmOCLfbFlFeYYM60aNf696cwYC'),
(3, 'hannah1', 'hannah@gmail.com', '$2y$10$AvJxT/8DGvuizFABnt3kYezAfDlO9ySUUICt3eII846gNmk5PGA9i'),
(4, 'imohamed17', '98102uk@saeinstitute.edu', '$2y$10$wd4jBE3HElogg.r30IOtIelWv1KNv5wqJ9vtzNxTOXUIC/x2VL7Ci'),
(10, 'messi', 'messi@gmail.com', '$2y$10$k82lBtt9OKjF.iIuStBcg.dGsJ6jn.aam5nsQ8QOXO1gPUMAzzcHS'),
(11, 'ronaldo', 'ronaldo@gmail.com', '$2y$10$WFWd.F/AB6v9OG4ojdaBF.7iHu2oW74epmutPvCv8OVdbRND/rAbu'),
(12, 'liverpool123', 'liverpool1@gmail.com', '$2y$10$SvqyqMpJ75SYeMp0x3.hBOh2jiLdExtemWCbq0aURhsy09uWkp9Na'),
(13, 'ismail', 'ishyy17@gmail.com', '$2y$10$uyJ2mpZRJ65adLOcytybaOBH6B0syRjtE2I.WRjZO1F3fGnVvDMq.'),
(14, 'neymar', 'neymar@gmail.com', '$2y$10$p2O7INDONPVgg5k9g7Zvo.Nbc3kg7Q8yGtExWa.2ApUB1kf8g4zjG'),
(15, 'pirlo', 'pirlo@gmail.com', '$2y$10$utKstp4Js45w3C3VRZVhCeOfK0OzA0XJsyVu/6r3II8MoJZuyg0ca'),
(16, 'xavi', 'xavi@gmail.com', '$2y$10$qQvf5qaS3Cxswo1/oo4ei.2KJDlLs5W4/JUFMcT5sGwhL8djqNnr.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
