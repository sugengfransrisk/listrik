-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 01:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `fullname` varchar(12) NOT NULL,
  `role` varchar(12) NOT NULL,
  `foto` text NOT NULL,
  `alamat` varchar(122) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `role`, `foto`, `alamat`, `last_login`) VALUES
(2, 'root', 'root', 'frans', 'admin', '856fc03ed73e20ca99a20ca9db4043073.jpg', 'nganjuk', '0000-00-00'),
(16, 'dasd', 'asdas', 'asdas', 'asdas', '856fc03ed73e20ca99a20ca9db4043073.jpg', 'asdas', '0000-00-00'),
(17, 'ajigile', '123', 'Seftian', 'admin', 'images.png', 'gresik', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_p` int(30) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `kodeTarif` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_p`, `nama`, `alamat`, `kodeTarif`) VALUES
(6, 'sdfsa', 'dsad', 1),
(7, 'asep', 'dsad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(30) NOT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `id_tagihan` int(30) DEFAULT NULL,
  `jumlah_tagihan` int(30) DEFAULT NULL,
  `biaya_denda` int(20) DEFAULT NULL,
  `biaya_admin` int(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(20) NOT NULL,
  `tahunTagih` year(4) DEFAULT NULL,
  `bulanTagih` date DEFAULT NULL,
  `pemakaian` int(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pelanggan_id` int(20) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `tahunTagih`, `bulanTagih`, `pemakaian`, `status`, `pelanggan_id`, `id_admin`) VALUES
(1, 0000, '2018-02-06', 5000, 'ok', 3, 3),
(2, NULL, '2018-01-03', 400, 'ok', 5, 5),
(3, 0000, '0000-00-00', 2000, 'ok', 6, 0),
(4, 0000, '0000-00-00', 1000, 'ok', 2, 0),
(5, 0000, '0000-00-00', 5000, 'ok', 3, 2),
(6, 2018, '0000-00-00', 5000, 'ok', 1, 2),
(7, 2018, '0000-00-00', 6000, 'tydak ok', 1, 2),
(8, 2018, '0000-00-00', 8000, 'ok', 1, 2),
(9, 2018, '0000-00-00', 9000, 'ok', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(30) NOT NULL,
  `kode` int(30) DEFAULT NULL,
  `daya` int(30) DEFAULT NULL,
  `tarif_perKWH` int(30) DEFAULT NULL,
  `beban` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `kode`, `daya`, `tarif_perKWH`, `beban`) VALUES
(1, 512, 1200, 5000, 1900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_p` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
