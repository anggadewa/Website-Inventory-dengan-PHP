-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 04:33 PM
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
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama`) VALUES
(1, 'admin@admin.com', 'admin', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `no_transaksi` varchar(35) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stock_barang` int(50) NOT NULL,
  `harga_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `no_transaksi`, `tgl_transaksi`, `nama_supplier`, `kode_barang`, `nama_barang`, `stock_barang`, `harga_barang`) VALUES
(1, 'BM01', '2019-03-26', 'XIAOMI', 'XIAOMI-PF01', 'Xiaomi Pocophone F1', 95, 5000000),
(2, 'BM02', '2019-03-27', 'SAMSUNG', 'SAMSUNG-SGS11', 'Samsung Galaxy S11', 248, 17000000),
(3, 'BM03', '2019-03-28', 'XIAOMI', 'XIAOMI-N10', 'Xiaomi Note 10', 200, 5000000),
(4, 'BM04', '2019-03-28', 'XIAOMI', 'XIAOMI-N10', 'Xiaomi Note 10', 145, 5000000),
(5, 'BM05', '2019-03-28', 'NOKIA', 'NOKIA-NK91', 'Nokia 9.1', 97, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barangkeluar` int(11) NOT NULL,
  `no_transaksikeluar` varchar(35) NOT NULL,
  `no_transaksimasuk` varchar(35) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `total_harga_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barangkeluar`, `no_transaksikeluar`, `no_transaksimasuk`, `tgl_transaksi`, `kode_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `total_harga_barang`) VALUES
(1, 'BK01', 'BM01', '2019-03-28', 'XIAOMI-PF01', 'Xiaomi Pocophone F1', 5, 5000000, 25000000),
(2, 'BK02', 'BM02', '2019-03-28', 'SAMSUNG-SGS11', 'Samsung Galaxy S11', 2, 17000000, 34000000),
(3, 'BK03', 'BM04', '2019-03-28', 'XIAOMI-N10', 'Xiaomi Note 10', 5, 5000000, 25000000),
(4, 'BK04', 'BM05', '2019-03-28', 'NOKIA-NK91', 'Nokia 9.1', 3, 3500000, 10500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barangkeluar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barangkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
