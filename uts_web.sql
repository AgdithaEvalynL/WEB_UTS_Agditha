-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 01:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `psw`) VALUES
(1, 'bayu', '$2y$10$bHOHZrknxpJWvuFxQsZgreoHvKBFeAW2n/hbQLchlRIsy6Y7ARbgW'),
(2, 'user', '$2y$10$MggRQOge1Rl3Ep3tqkBfOuFVjdR97Srf8JOTmKUxz4QkI3uJtWvEm');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `namagambar` varchar(11) NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `kategory` varchar(11) NOT NULL,
  `rak` int(11) NOT NULL,
  `penulis` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `namagambar`, `gambar`, `kategory`, `rak`, `penulis`) VALUES
(5, 'Matahari', 'buku', 'buku.jpg', 'novel', 2, 'Tere Liye');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` int(11) NOT NULL,
  `pinjam` date NOT NULL,
  `kembali` date NOT NULL,
  `namagambar` varchar(20) NOT NULL,
  `gambar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `pinjam`, `kembali`, `namagambar`, `gambar`) VALUES
(5, '0000-00-00', '2022-12-14', '', 'wewe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
