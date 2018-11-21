-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_a` int(11) NOT NULL,
  `judul_a` varchar(100) NOT NULL,
  `deskripsi_a` text NOT NULL,
  `date_a` date NOT NULL,
  `foto_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'kijul', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id_ebook` int(11) NOT NULL,
  `judul_e` varchar(100) NOT NULL,
  `file_e` varchar(200) NOT NULL,
  `foto_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inovator`
--

CREATE TABLE `inovator` (
  `id_inovator` int(11) NOT NULL,
  `judul_inovator` varchar(100) NOT NULL,
  `foto_inovator` varchar(100) NOT NULL,
  `date_i` date NOT NULL,
  `isi_i` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inovator`
--

INSERT INTO `inovator` (`id_inovator`, `judul_inovator`, `foto_inovator`, `date_i`, `isi_i`) VALUES
(1, 'a', 'a', '2018-11-14', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` int(11) NOT NULL,
  `email_k` varchar(50) NOT NULL,
  `hp_k` varchar(13) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsul`, `email_k`, `hp_k`, `perihal`, `pertanyaan`) VALUES
(1, 'rizki.juliansyah.a.m@gmail.com', '081279887778', 'Hama Padi', 'Bagaimana cara menjaga padi supaya tidak banyak hama yang menginggap?'),
(2, 'x', 'x', 'x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `wawasan`
--

CREATE TABLE `wawasan` (
  `idi_w` int(11) NOT NULL,
  `judul_w` varchar(100) NOT NULL,
  `foto_w` varchar(100) NOT NULL,
  `date_w` date NOT NULL,
  `isi_w` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indexes for table `inovator`
--
ALTER TABLE `inovator`
  ADD PRIMARY KEY (`id_inovator`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsul`);

--
-- Indexes for table `wawasan`
--
ALTER TABLE `wawasan`
  ADD PRIMARY KEY (`idi_w`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inovator`
--
ALTER TABLE `inovator`
  MODIFY `id_inovator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wawasan`
--
ALTER TABLE `wawasan`
  MODIFY `idi_w` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
