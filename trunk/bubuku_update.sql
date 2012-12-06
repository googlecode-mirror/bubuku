-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2012 at 02:29 PM
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
-- Table structure for table `detail_order`
--

CREATE TABLE IF NOT EXISTS `detail_order` (
  `ID_DETAIL_ORDER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUK` int(11) DEFAULT NULL,
  `ID_ORDER` int(11) DEFAULT NULL,
  `JUMLAH_BELI` varchar(3) DEFAULT NULL,
  `TOTAL_HARGA` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_DETAIL_ORDER`),
  KEY `FK_RELATIONSHIP_11` (`ID_ORDER`),
  KEY `FK_RELATIONSHIP_13` (`ID_PRODUK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `kritik`
--

CREATE TABLE IF NOT EXISTS `kritik` (
  `ID_KRITIK` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `KRITIK` varchar(500) DEFAULT NULL,
  `TANGGAL_KRITIK` date DEFAULT NULL,
  PRIMARY KEY (`ID_KRITIK`),
  KEY `FK_RELATIONSHIP_12` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `TELEPON` varchar(15) DEFAULT NULL,
  `AGAMA` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `TANGGAL_DAFTAR` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID_ORDER` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `TANGGAL_ORDER` date DEFAULT NULL,
  `STATUS_ORDER` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_ORDER`),
  KEY `FK_RELATIONSHIP_9` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `ID_PRODUK` int(11) NOT NULL AUTO_INCREMENT,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `NAMA_PRODUK` varchar(30) DEFAULT NULL,
  `PENERBIT` varchar(20) DEFAULT NULL,
  `GRADE` varchar(1) DEFAULT NULL,
  `TAHUN_CETAK` varchar(4) DEFAULT NULL,
  `HARGA` varchar(10) DEFAULT NULL,
  `JUMLAH` varchar(4) DEFAULT NULL,
  `FOTO` longblob,
  PRIMARY KEY (`ID_PRODUK`),
  KEY `FK_RELATIONSHIP_7` (`ID_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `ID_SARAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `SARAN` varchar(500) DEFAULT NULL,
  `TANGGAL_SARAN` date DEFAULT NULL,
  PRIMARY KEY (`ID_SARAN`),
  KEY `FK_RELATIONSHIP_10` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `ID_TESTI` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `TESTI` varchar(500) DEFAULT NULL,
  `TANGGAL_TESTI` date DEFAULT NULL,
  `STATUS_TESTI` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_TESTI`),
  KEY `FK_RELATIONSHIP_14` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `AKSES` varchar(20) DEFAULT NULL,
  `LOGIN_TERAKHIR` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `ID_WISHLIST` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `NAMA_WISHLIST` varchar(30) DEFAULT NULL,
  `TAHUN_CETAK_WISHLIST` varchar(4) DEFAULT NULL,
  `PENERBIT_WISHLIST` varchar(30) DEFAULT NULL,
  `DESKRIPSI_WISHLIST` varchar(200) DEFAULT NULL,
  `BATAS_WAKTU` date DEFAULT NULL,
  PRIMARY KEY (`ID_WISHLIST`),
  KEY `FK_RELATIONSHIP_8` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_ORDER`) REFERENCES `orders` (`ID_ORDER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_PRODUK`) REFERENCES `produk` (`ID_PRODUK`);

--
-- Constraints for table `kritik`
--
ALTER TABLE `kritik`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`);

--
-- Constraints for table `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
