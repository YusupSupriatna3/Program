/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - prakerin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prakerin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prakerin`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `nip` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`nip`,`nama`,`alamat`,`no_telepon`,`jenis_kelamin`,`username`,`password`,`jurusan`,`role`) values ('0204161001','Ade Sukma','Banjar','081123213654','L','ade01','ade01','Teknik Kendaraan Ringan','guru'),('0204161018','Fitri Sania','Purwakarta','082678546534','P','fitri01','fitri01','Tata Boga','guru'),('0204161019','Firman Setiawan','Garut','087656748576','L','firman01','firman01','Teknik Elektronik Industri','guru'),('0204161020','Resi Meliyanti','Ciamis','087654678912','P','resi01','resi01','Teknik Komputer Jaringan','guru'),('0204161057','Yusup Supriatna','Banjar','081312238745','L','yusup01','yusup01','Perbankan','guru'),('0204161058','Muhammad Ramdan','Tasikmalaya','082678546534','L','ramdan01','ramdan01','Teknik Gambar Bangunan','guru'),('0204161059','Sandra Andri','Jakarta','081312238745','L','sandra01','sandra01','Teknik Komputer Jaringan','guru');

/*Table structure for table `pkl` */

DROP TABLE IF EXISTS `pkl`;

CREATE TABLE `pkl` (
  `id_prakerin` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_prakerin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `romawi` varchar(10) NOT NULL,
  `angka` varchar(10) NOT NULL,
  PRIMARY KEY (`id_prakerin`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `pkl` */

insert  into `pkl`(`id_prakerin`,`nis`,`nama`,`tempat_prakerin`,`alamat`,`kota`,`status`,`jurusan`,`kelas`,`kode`,`romawi`,`angka`) values (28,'0204161050','Suma Albaroh','Telkom Bandung','Jl. Asia Afrika No 10 Bandung','Bandung','pending','Teknik Komputer Jaringan','XI TKJ 1','XI','TKJ','1'),(29,'0204161057','Yusup Supriatna','Telkom Bandung','Jl. Asia Afrika No 10 Bandung','Bandung','ok','Teknik Komputer Jaringan','XI TKJ 1','XI','TKJ','1'),(30,'0204161058','Muhammad Ramdan','Telkom Bandung','Jl. Asia Afrika No 10 Bandung','Bandung','ok','Teknik Komputer Jaringan','XI TKJ 1','XI','TKJ','1'),(31,'0204161056','Yunus Muslim','Telkom Bandung','Jl. Asia Afrika No 10 Bandung','Bandung','pending','Teknik Komputer Jaringan','XI TKJ 1','XI','TKJ','1');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`nama`,`alamat`,`no_telepon`,`jenis_kelamin`,`username`,`password`,`jurusan`,`role`,`status`) values ('0204161050','Suma Albaroh','Jl. Raya Banjar Ciamis','087787987654','L','suma02','suma02','Teknik Komputer Jaringan','siswa','pending'),('0204161055','Winda Bestari DF','Banyumas','081435673845','P','winda02','winda02','Perbankan','siswa',''),('0204161056','Yunus Muslim','Garut','081567565673','L','yunus02','yunus02','Teknik Komputer Jaringan','siswa','pending'),('0204161057','Yusup Supriatna','Banjar','081312238745','L','yusup02','yusup02','Teknik Komputer Jaringan','siswa','ok'),('0204161058','Muhammad Ramdan','Tasikmalaya','08123456734','L','ramdan02','ramdan02','Teknik Komputer Jaringan','siswa','ok'),('0204161059','Resi Meliyanti','Ciamis','087654678912','P','resi02','resi02','Tata Boga','siswa',''),('0204161060','Ade Sukma','Banjar','087654678912','L','ade02','ade02','Tata Boga','siswa',''),('0204161061','Firman Setiawan','Garut','087654678912','L','firman02','firman02','Teknik Kendaraan Ringan','siswa',''),('0204161062','Gian Nugraha','Garut','087654678912','L','gian02','gian02','Teknik Kendaraan Ringan','siswa',''),('0204161063','Andi Iskandar','Cianjur','082678546534','L','andi02','andi02','Teknik Elektronik Industri','siswa',''),('0204161064','Galuh Pangestrika','Banyumas','081312238745','P','galuh02','galuh02','Teknik Elektronik Industri','siswa',''),('0204161065','Gustian Nurhidayat','Garut','082678546534','L','gustian02','gustian03','Teknik Gambar Bangunan','siswa',''),('0204161066','Dede Hilman','Cianjur Selatan','081312238745','L','dede02','dede02','Teknik Gambar Bangunan','siswa',''),('0204161067','Yusup Supriatna','Banjar','081312238745','L','yusup09','yusup09','Teknik Kendaraan Ringan','siswa',''),('0204161068','Andi Iskandar','Cianjur','081312238745','L','andi09','andi09','Teknik Kendaraan Ringan','siswa','');

/*Table structure for table `tanggal` */

DROP TABLE IF EXISTS `tanggal`;

CREATE TABLE `tanggal` (
  `waktu_id` int(10) NOT NULL,
  `tanggal_mulai` varchar(100) NOT NULL,
  `tanggal_selesai` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`waktu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tanggal` */

insert  into `tanggal`(`waktu_id`,`tanggal_mulai`,`tanggal_selesai`,`status`) values (1,'2019-09-23','2019-09-27','aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
