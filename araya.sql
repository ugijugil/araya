-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2017 at 12:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `araya`
--

-- --------------------------------------------------------

--
-- Table structure for table `DATA_EKSPEDISI`
--

CREATE TABLE `DATA_EKSPEDISI` (
  `KODE_EKSPEDISI` varchar(30) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(500) DEFAULT NULL,
  `TELEPON_1` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DATA_EKSPEDISI`
--

INSERT INTO `DATA_EKSPEDISI` (`KODE_EKSPEDISI`, `NAMA`, `ALAMAT`, `TELEPON_1`) VALUES
('20170901EKSP0001', 'JNE', 'Pancoran Barat', NULL),
('20170901EKSP0002', 'J&T', 'Jakarta Selatan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `DATA_PELANGGAN`
--

CREATE TABLE `DATA_PELANGGAN` (
  `KODE_PELANGGAN` varchar(30) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(500) NOT NULL,
  `TELEPON_1` varchar(15) NOT NULL,
  `TELEPON_2` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(300) DEFAULT NULL,
  `TGL_DAFTAR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DATA_PELANGGAN`
--

INSERT INTO `DATA_PELANGGAN` (`KODE_PELANGGAN`, `NAMA`, `ALAMAT`, `TELEPON_1`, `TELEPON_2`, `EMAIL`, `TGL_DAFTAR`) VALUES
('20170901PLG0001', 'Reny Ayati Rachmayani', 'Jalan Pancoran Barat XI-A', '085640001930', NULL, NULL, '0000-00-00'),
('201709061', 'Setha Sakti Pramudya', 'Cikunir', '081212345678', '', 'sethaompong@gmail.com', '2017-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `DATA_SUPPLIER`
--

CREATE TABLE `DATA_SUPPLIER` (
  `KODE_SUPPLIER` varchar(30) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(500) DEFAULT NULL,
  `TELEPON_1` varchar(15) DEFAULT NULL,
  `AKTIF` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `KATALOG_BARANG`
--

CREATE TABLE `KATALOG_BARANG` (
  `KODE_BARANG` varchar(30) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `PRODUSEN` varchar(30) DEFAULT NULL,
  `HARGA_BELI` int(11) DEFAULT NULL,
  `HARGA_JUAL` int(11) DEFAULT NULL,
  `TIPE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MASTER_JNS_TRANS`
--

CREATE TABLE `MASTER_JNS_TRANS` (
  `KODE_JNS_TRANSAKSI` varchar(30) NOT NULL,
  `JENIS_TRANSAKSI` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SEQ_PELANGGAN`
--

CREATE TABLE `SEQ_PELANGGAN` (
  `SEQUENCES` int(11) NOT NULL,
  `KETERANGAN` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SEQ_PELANGGAN`
--

INSERT INTO `SEQ_PELANGGAN` (`SEQUENCES`, `KETERANGAN`) VALUES
(1, 'ADD SEQUENCE FOR Setha Sakti Pramudya');

-- --------------------------------------------------------

--
-- Table structure for table `STOCK_BARANG`
--

CREATE TABLE `STOCK_BARANG` (
  `KODE_BARANG` varchar(30) NOT NULL,
  `STOCK_SIAP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TRANS_PEMBELIAN_HEADER`
--

CREATE TABLE `TRANS_PEMBELIAN_HEADER` (
  `KODE_TRANS` varchar(30) NOT NULL,
  `KODE_SUPPLIER` varchar(30) NOT NULL,
  `KODE_EKSPEDISI` varchar(30) DEFAULT NULL,
  `TGL_BELI` date NOT NULL,
  `DISKON` float DEFAULT NULL,
  `TOTAL` int(11) NOT NULL,
  `TGL_TRANS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DATA_EKSPEDISI`
--
ALTER TABLE `DATA_EKSPEDISI`
  ADD PRIMARY KEY (`KODE_EKSPEDISI`);

--
-- Indexes for table `DATA_PELANGGAN`
--
ALTER TABLE `DATA_PELANGGAN`
  ADD PRIMARY KEY (`KODE_PELANGGAN`);

--
-- Indexes for table `DATA_SUPPLIER`
--
ALTER TABLE `DATA_SUPPLIER`
  ADD PRIMARY KEY (`KODE_SUPPLIER`);

--
-- Indexes for table `KATALOG_BARANG`
--
ALTER TABLE `KATALOG_BARANG`
  ADD PRIMARY KEY (`KODE_BARANG`),
  ADD KEY `KODE_BARANG` (`KODE_BARANG`);

--
-- Indexes for table `MASTER_JNS_TRANS`
--
ALTER TABLE `MASTER_JNS_TRANS`
  ADD PRIMARY KEY (`KODE_JNS_TRANSAKSI`);

--
-- Indexes for table `SEQ_PELANGGAN`
--
ALTER TABLE `SEQ_PELANGGAN`
  ADD PRIMARY KEY (`SEQUENCES`);

--
-- Indexes for table `STOCK_BARANG`
--
ALTER TABLE `STOCK_BARANG`
  ADD PRIMARY KEY (`KODE_BARANG`);

--
-- Indexes for table `TRANS_PEMBELIAN_HEADER`
--
ALTER TABLE `TRANS_PEMBELIAN_HEADER`
  ADD PRIMARY KEY (`KODE_TRANS`),
  ADD KEY `KODE_SUPPLIER` (`KODE_SUPPLIER`),
  ADD KEY `KODE_EKSPEDISI` (`KODE_EKSPEDISI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `SEQ_PELANGGAN`
--
ALTER TABLE `SEQ_PELANGGAN`
  MODIFY `SEQUENCES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
