-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 06:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valo`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--
CREATE DATABASE valo;
USE valo;

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picture` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `picture`, `price`, `description`) VALUES
(1, 'Sage', 'sage.png', 800000, 'Sage merupakan course beginner buat kamu yang baru main. Disini kita akan belajar Cara aim dasar, Cara menghindari musuh, cara membaca maps, dan masih banyak lagi. Course ini 2 kali seminggu Biaya course ini adalah 800.000/bulan'),
(2, 'Sova', 'sova.png', 1000000, 'Sova merupakan course medium buat kamu yang udah main tapi ingin memperdalam Valorant. Disini kita akan belajar Cara aim advanced, Cara mencapai rank platinum & diamond, tips-tips advanced, tips pick agent biar counter musuh, dan masih banyak lagi. Course'),
(3, 'Jett', 'jett.jpg', 1500000, 'Jett merupakan course advanced buat kamu yang udah jago tapi ingin terjun kedalam dunia competitive Valorant. Dalam course ini kita akan belajar cara aim pro player, cara terjun ke dunia competitive, mencapai rank radiant, cheatsheet dalam competitive, da');

-- --------------------------------------------------------

--
-- Table structure for table `crosshair`
--

CREATE TABLE `crosshair` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crosshair`
--

INSERT INTO `crosshair` (`id`, `name`, `picture`, `code`) VALUES
(1, 'Jinggg', 'jinggg.png', ''),
(2, 'cned', 'cned.png', ''),
(3, 'Cyro', 'Cyro.png', ''),
(4, 'shroud', 'shroud.png', ''),
(5, 'tarik', 'tarik.png', ''),
(6, 'Tenz', 'tenz.png', ''),
(7, 'Hollow circle', 'Hollow circle.png', ''),
(8, 'Shuriken', 'shuriken.png', ''),
(9, 'Asuna', 'asuna.png', ''),
(10, 'test', 'tenz.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `userid`, `comment`) VALUES
(2, 2, 'Wah valo ni game bagus bgt ya. Aku pengen jadi pro player valo nihh, Semoga soon aku bisa pro dan bisa competitive di Valo. Sayangnya, tugasku terlalu banyak jadi aku gabisa nih maen valo. Saddd. Pls BINUS ujiannya jangan susah\" dan tugasnya jangan banyak\"'),
(3, 3, 'Valorant itu game apa sih? sakit pala saya mainnya, tapi kok nagih ya? boleh minta tipsnya dong ges hehe :D');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`) VALUES
(1, 'Felysia', 'testing@gmail.com', 'testing', 'felysia.jpeg'),
(2, 'username', 'username@gmail.com', 'username', 'default.jpg'),
(3, 'tesregis', 'register@gmail.com', 'register', 'default.jpg'),
(5, 'steven', 'steven@gmail.com', 'Steven123_', 'default.jpg'),
(6, 'NotFefe', 'notfefe@gmail.com', '12345678', 'notfefe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crosshair`
--
ALTER TABLE `crosshair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crosshair`
--
ALTER TABLE `crosshair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
