-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 07:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `stock` int(10) NOT NULL,
  `status` enum('tampilkan','sembunyikan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjam`
--

INSERT INTO `tbl_peminjam` (`id_peminjam`, `username`, `password`, `name`, `email`) VALUES
(1, 'peminjam', 'VHQJZFQ9A24GaQI5DGELaQ==', 'peminjam', 'peminjam@email.com'),

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username`, `password`, `name`, `email`, `photo`) VALUES
(1, 'peminjam', 'VHQJZFQ9A24GaQI5DGELaQ==', 'peminjam', 'peminjam@email.com', ''),
(2, 'petugas', 'BiYPYgV1Dn9XMQExB3g=', 'petugas', 'petugas@email.com', '\r\n'),

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `keterangan` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
