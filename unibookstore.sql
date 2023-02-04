/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - unibookstore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`unibookstore` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `unibookstore`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `ID_Buku` char(20) DEFAULT NULL,
  `Kategori` varchar(30) DEFAULT NULL,
  `Nama_Buku` varchar(40) DEFAULT NULL,
  `Harga` int(20) DEFAULT NULL,
  `Stok` int(15) DEFAULT NULL,
  `Penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`ID_Buku`,`Kategori`,`Nama_Buku`,`Harga`,`Stok`,`Penerbit`) values 
('K1001','NK1','Analisis & Perancangan Sistem Informasi',50000,60,'SP01'),
('K1002','NK1','Artifical Intelliegence',45000,60,'SP01'),
('K2003','NK1','Autocad 3 Dimensi',40000,25,'SP01'),
('B1001','NK2','Bisnis Online',75000,9,'SP01'),
('K3004','NK1','Cloud Compunting Technology',85000,15,'SP01'),
('B1002','NK2','Etika Bisnis dan Tanggung Jawab Sosial',67500,20,'SP01'),
('N1001','NK3','Cahaya Di Penjuru Hati',68000,20,'SP02'),
('N1002','NK3','Aku Ingin Cerita',48000,12,'SP03');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `ID_Kategori` varchar(20) DEFAULT NULL,
  `Nama_Kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

insert  into `kategori`(`ID_Kategori`,`Nama_Kategori`) values 
('NK1','Keilmuan'),
('NK2','Bisnis'),
('NK3','Novel');

/*Table structure for table `penerbit` */

DROP TABLE IF EXISTS `penerbit`;

CREATE TABLE `penerbit` (
  `ID_Penerbit` char(20) DEFAULT NULL,
  `Penerbit` varchar(30) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(30) DEFAULT NULL,
  `telepon` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penerbit` */

insert  into `penerbit`(`ID_Penerbit`,`Penerbit`,`Alamat`,`Kota`,`telepon`) values 
('SP01','Penerbit Informatika','Jl. Buah Batu No.121','Bandung','081322201946'),
('SP02','Andi Offset','Jl. Suryala IX No. 3','Bandung','087839030688'),
('SP03','Danendra','Jl Moch. Toha 44','Bandung','02252-1215');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
