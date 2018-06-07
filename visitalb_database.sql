-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2018 at 08:01 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitalb_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps_point`
--

CREATE TABLE `maps_point` (
  `place` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maps_point`
--

INSERT INTO `maps_point` (`place`, `lat`, `lng`, `description`, `id`) VALUES
('Velipoje', 41.8788, 19.4063, '<a href=\"addToArray.php?place=Velipoje\"> Hey </a\\>\r\n\r\nVelipoja eshte nje super vend bredegtar', 6),
('Shengjin', 41.8087, 19.6006, 'Shengjini i vendosur ne afersi te Lezhes ....', 9);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `trip_sum` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `user_id`, `trip_sum`) VALUES
(1685545916, '30', 0x613a33353a7b693a303b733a363a22546972616e65223b693a313b733a353a224c657a6865223b693a323b733a353a22566c6f7265223b693a333b733a373a2273686b6f646572223b693a343b733a343a22426f6269223b693a353b733a343a22426f6269223b693a363b733a373a2273686b6f646572223b693a373b4e3b693a383b733a373a2273686b6f646572223b693a393b733a373a2273686b6f646572223b693a31303b733a373a2273686b6f646572223b693a31313b4e3b693a31323b4e3b693a31333b4e3b693a31343b4e3b693a31353b4e3b693a31363b4e3b693a31373b4e3b693a31383b4e3b693a31393b4e3b693a32303b4e3b693a32313b733a373a2253686b6f646572223b693a32323b733a373a2253686b6f646572223b693a32333b733a373a2253686b6f646572223b693a32343b733a373a2253686b6f646572223b693a32353b733a31303a224b617a616b697374616e223b693a32363b733a303a22223b693a32373b733a383a225368656e676a696e223b693a32383b733a383a225368656e676a696e223b693a32393b733a383a2256656c69706f6a65223b693a33303b733a383a225368656e676a696e223b693a33313b733a383a2256656c69706f6a65223b693a33323b733a383a225368656e676a696e223b693a33333b733a383a2256656c69706f6a65223b693a33343b733a383a225368656e676a696e223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `token`) VALUES
(18, 'sadas', 'sdasda', 'dsadas@dassda.sdfsd', '$2y$10$/GJedZKGaKRA4xQnQei6WeKYqo6A.kHQRqutcB86aDERWcN4WSPtO', ''),
(19, 'arebns', 'adsaf', 'asdsdsagk@sads.com', '$2y$10$bhn40JQyYCgiZpG2B6bfO.Tev2CAljQVdYNHD.wKXrmE7uPU.A0k.', ''),
(20, 'Arens', 'Dem', 'are@gmail.com', '$2y$10$Uhuwcw9y0eDvfEZzEEoMo./zm5jyHjCG8Od99cX2w6iZzrwOCocqi', ''),
(21, 'Arens', 'Demaliaj', 'arens@gmail.com', '$2y$10$/aQzPHJ/XrCOaY2VZIfnoe9dI5fDHjeAIGGmKONPYnbhJ3f0COITK', ''),
(22, 'arens', 'dema', 'arens@a.com', '$2y$10$6M8nMl8dS1buDWXByrnFTuRITINNlkBqVR7NBZ7zu.gIRk5JWQEjq', ''),
(23, 'areashl', 'sladkhas', 'jsdahasklh@asdas.com', '$2y$10$ljuk7dSJqCJz1du3dE1PKOTMosFVI209YapwkW0f0JruZg6..RjnG', ''),
(25, 'arens', 'asda', 'asdlasjldskla@dklasjdla', '$2y$10$ysD3Nth4P9BM5VrmYUxsqOnOKcjI5PrDwekXhrYq9y2BV6pr5GOpW', ''),
(26, 'dfasdfasdf', 'sadfsdfa', 'sfasdfasd@asdsad', '$2y$10$v0P2Remz5rzh.aXp1hvQ.OXTPgyXGvEXZFSB22twCC.0RhIUuWBr.', ''),
(27, 'dfasdfasdf', 'sadfsdfa', 'sfasdfasd@asdsadsads', '$2y$10$C4K6ju2/fTQLDDDaruvSeO2IjMZ9sYBVA3.wBxflXCg8Qzaiik1JC', ''),
(28, 'Arens', 'Demaliaj', 'areded13@htl-shkoder.com', '$2y$10$rBzUji/4d43l2a7XsUeS8.cc..9ciyWfUgiftJ5Q32Q5YDTW1XEPS', ''),
(29, 'adssasdf', 'sadfsd', 'asdfasd@dsfsdf', '$2y$10$eXyIOr3LAN5hRjeo..blkOMGexEE.qNl6cNl7xjiGwhPMyuaHkc12', ''),
(30, 'Arens', 'Demaliaj', 'arensdemaliaj@gmail.com', '$2y$10$Uzv8ljosQ5wRH4frPhKv/uI3lhkoCG68tfgMIvWq7wujc5oXnK3Ei', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maps_point`
--
ALTER TABLE `maps_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maps_point`
--
ALTER TABLE `maps_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1685545917;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
