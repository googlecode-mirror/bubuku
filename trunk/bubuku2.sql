-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2012 at 08:55 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bubuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `ID_AGAMA` int(11) NOT NULL,
  `NAMA_AGAMA` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_AGAMA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE IF NOT EXISTS `detail_order` (
  `ID_DETAIL_ORDER` int(11) NOT NULL,
  `ID_PRODUK` int(11) DEFAULT NULL,
  `ID_ORDER` int(11) DEFAULT NULL,
  `JUMLAH_BELI` varchar(3) DEFAULT NULL,
  `TOTAL_HARGA` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_DETAIL_ORDER`),
  KEY `FK_RELATIONSHIP_11` (`ID_ORDER`),
  KEY `FK_RELATIONSHIP_13` (`ID_PRODUK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `ID_GRADE` int(11) NOT NULL,
  `NAMA_GRADE` varchar(1) DEFAULT NULL,
  `KET_GRADE` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_GRADE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
  `ID_AKSES` int(11) NOT NULL,
  `NAMA_AKSES` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_AKSES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `jenis_kelamin` (
  `ID_JK` int(11) NOT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_JK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `ID_KOTA` int(11) NOT NULL,
  `NAMA_KOTA` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_KOTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID_ORDER` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_STATUS_ORDER` int(11) DEFAULT NULL,
  `TANGGAL_ORDER` date DEFAULT NULL,
  PRIMARY KEY (`ID_ORDER`),
  KEY `FK_RELATIONSHIP_14` (`ID_STATUS_ORDER`),
  KEY `FK_RELATIONSHIP_15` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `ID_PRODUK` int(11) NOT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `ID_GRADE` int(11) DEFAULT NULL,
  `NAMA_PRODUK` varchar(30) DEFAULT NULL,
  `PENERBIT` varchar(20) DEFAULT NULL,
  `TAHUN_CETAK` varchar(4) DEFAULT NULL,
  `HARGA` varchar(10) DEFAULT NULL,
  `FOTO` longblob,
  PRIMARY KEY (`ID_PRODUK`),
  KEY `FK_RELATIONSHIP_6` (`ID_GRADE`),
  KEY `FK_RELATIONSHIP_7` (`ID_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE IF NOT EXISTS `status_order` (
  `ID_STATUS_ORDER` int(11) NOT NULL,
  `NAMA_STATUS_ORDER` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_ORDER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_AGAMA` int(11) DEFAULT NULL,
  `ID_KOTA` int(11) DEFAULT NULL,
  `ID_AKSES` int(11) DEFAULT NULL,
  `ID_JK` int(11) DEFAULT NULL,
  `NAMA_USER` varchar(20) DEFAULT NULL,
  `PASS_USER` varchar(20) DEFAULT NULL,
  `LAHIR_USER` date DEFAULT NULL,
  `ALAMAT_USER` varchar(255) DEFAULT NULL,
  `TELEPON_USER` varchar(12) DEFAULT NULL,
  `EMAIL_USER` varchar(30) DEFAULT NULL,
  `LOGIN_TERAKHIR` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_RELATIONSHIP_1` (`ID_AGAMA`),
  KEY `FK_RELATIONSHIP_16` (`ID_JK`),
  KEY `FK_RELATIONSHIP_2` (`ID_KOTA`),
  KEY `FK_RELATIONSHIP_3` (`ID_AKSES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `ID_WISHLIST` int(11) NOT NULL,
  `ID_GRADE` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_WISHLIST` varchar(30) DEFAULT NULL,
  `TAHUN_TERBIT_WISHLIST` varchar(4) DEFAULT NULL,
  `PENERBIT_WISHLIST` varchar(30) DEFAULT NULL,
  `DESKRIPSI_WISHLIST` varchar(200) DEFAULT NULL,
  `BATAS_WAKTU` date DEFAULT NULL,
  PRIMARY KEY (`ID_WISHLIST`),
  KEY `FK_RELATIONSHIP_12` (`ID_GRADE`),
  KEY `FK_RELATIONSHIP_4` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_PRODUK`) REFERENCES `produk` (`ID_PRODUK`),
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_ORDER`) REFERENCES `orders` (`ID_ORDER`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_STATUS_ORDER`) REFERENCES `status_order` (`ID_STATUS_ORDER`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_GRADE`) REFERENCES `grade` (`ID_GRADE`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_AKSES`) REFERENCES `hak_akses` (`ID_AKSES`),
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_AGAMA`) REFERENCES `agama` (`ID_AGAMA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_JK`) REFERENCES `jenis_kelamin` (`ID_JK`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_KOTA`) REFERENCES `kota` (`ID_KOTA`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_GRADE`) REFERENCES `grade` (`ID_GRADE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
