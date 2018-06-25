-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 09:25 AM
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
-- Database: `cs602`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `profileId` int(11) NOT NULL,
  `catName` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `likesCatnip` tinyint(1) NOT NULL DEFAULT '0',
  `likesDogs` tinyint(1) NOT NULL DEFAULT '0',
  `personality` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`profileId`, `catName`, `gender`, `likesCatnip`, `likesDogs`, `personality`) VALUES
(2, 'Toby', 'male', 0, 0, 'This is Toby, he has a mad face.'),
(3, 'Leo', 'male', 1, 1, 'This is Leo, he is funny.'),
(4, 'Milo', 'male', 1, 0, 'This is Milo, he is surprised.'),
(5, 'Tigger', 'male', 0, 1, 'This is Tigger, I looks like a tiger.'),
(6, 'Cassidy', 'male', 1, 1, 'Tis is Cassidy, I am like a Cass in League.'),
(7, 'Bella', 'female', 1, 1, 'My name is Bella, I like anything.'),
(8, 'Chloe', 'female', 1, 0, 'My name is Chole, I like humans but not dogs.'),
(9, 'Lucy', 'female', 0, 0, 'I am Lucy, just don\'t bother me.'),
(10, 'Lily', 'female', 0, 1, 'I am Lilly, I am scared.'),
(11, 'Sophie', 'female', 1, 1, 'I am Sophie, I am interested in anything.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Henry', 'henry5581984@gmail.com', 2147483647, 'Your product is so expensive.'),
(5, 'Customer 2', 'www@gmail.com', 2147483647, 'I am a test comment.'),
(6, 'Customer 2', 'www@gmail.com', 2147483647, 'I am a test comment.');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `name`, `image`, `price`) VALUES
(1, 'Nova', '1.png', 999.99),
(4, 'KATS', '4.png', 999.99),
(5, 'EnSolv', '5.png', 999.99),
(6, 'Henkel', '6.png', 999.99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `date`) VALUES
(1, 'henry5581984@gmail.com', '123', '2018-05-02 22:51:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`profileId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
