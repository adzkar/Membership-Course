-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2018 at 11:06 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dubly`
--
CREATE DATABASE IF NOT EXISTS `dubly` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dubly`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_mentor` int(11) NOT NULL,
  `nama_mentor` varchar(100) NOT NULL,
  `line` text NOT NULL,
  `wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_mentor`, `nama_mentor`, `line`, `wa`) VALUES
(3, 'Kartika Putri Dwi Atomojo', 'kartikaputri', '-'),
(4, 'Dian Aries Al Fatah', 'dianaries', '-');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id_content` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `view` bigint(255) NOT NULL,
  `kategori` enum('basic','advance') NOT NULL,
  `status` enum('free','premium') NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `id_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id_content`, `judul`, `content`, `author`, `view`, `kategori`, `status`, `link`, `date`, `id_mentor`) VALUES
(10, 'Perfect Tense', 'ntah', '', 0, 'basic', 'premium', 'perfect-tense', '2018-03-09 21:38:18', 4),
(11, 'Perfect Past Tense', '<iframe src="https://drive.google.com/file/d/1D4iNzCjBkJXCngkhyflEXXzJy1M8MLHE/preview" width="400" height="300"></iframe>', '', 0, 'basic', 'premium', 'perfect-past-tense', '2018-03-09 23:00:12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('free','premium') NOT NULL,
  `line` varchar(100) NOT NULL,
  `wa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `password`, `status`, `line`, `wa`) VALUES
(4, 'Aqmarina Alifah', 'sutiyem@gmail.com', '519a810c28acb6667cf29683cde124d3', 'premium', 'sutiyem', ''),
(5, 'Adzkar Fauzie Rahman', 'adzkarfauzie02@gmail.com', '519a810c28acb6667cf29683cde124d3', 'premium', 'adzkarfauzie', ''),
(6, 'Paijo', 'paijo@gmail.com', '519a810c28acb6667cf29683cde124d3', 'free', 'paijo', '');

-- --------------------------------------------------------

--
-- Table structure for table `upgrade`
--

CREATE TABLE `upgrade` (
  `id_upgrade` int(11) NOT NULL,
  `id_member` int(100) NOT NULL,
  `lunas` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade`
--

INSERT INTO `upgrade` (`id_upgrade`, `id_member`, `lunas`, `bukti_pembayaran`) VALUES
(5, 4, 1, 'Screenshot_from_2018-02-25_17-50-501.png'),
(6, 5, 1, 'Screenshot_from_2018-02-25_10-26-16.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upgrade`
--
ALTER TABLE `upgrade`
  ADD PRIMARY KEY (`id_upgrade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `upgrade`
--
ALTER TABLE `upgrade`
  MODIFY `id_upgrade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
