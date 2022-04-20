# Host: 127.0.0.1  (Version 5.5.5-10.1.8-MariaDB)
# Date: 2020-03-05 08:51:53
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "m_apartemen"
#

CREATE TABLE `m_apartemen` (
  `IDAPT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMAAPT` varchar(255) DEFAULT NULL,
  `KODEAPT` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IDAPT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_apartemen"
#


#
# Structure for table "m_fasilitas_gedung"
#

CREATE TABLE `m_fasilitas_gedung` (
  `IDFASILITAS` int(11) NOT NULL AUTO_INCREMENT,
  `IDGEDUNG` int(11) DEFAULT NULL,
  `FASILITAS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDFASILITAS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_fasilitas_gedung"
#


#
# Structure for table "m_gedung"
#

CREATE TABLE `m_gedung` (
  `IDGEDUNG` int(11) NOT NULL AUTO_INCREMENT,
  `KODEGEDUNG` varchar(10) DEFAULT NULL,
  `NAMAGEDUNG` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDGEDUNG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_gedung"
#


#
# Structure for table "m_jadwal"
#

CREATE TABLE `m_jadwal` (
  `IDJADWAL` int(11) NOT NULL AUTO_INCREMENT,
  `IDGEDUNG` int(11) DEFAULT NULL,
  `IDSTAF` int(10) DEFAULT NULL,
  `TGL` date DEFAULT NULL,
  `SHIFT` enum('Pagi','Siang','Malam') DEFAULT 'Pagi',
  PRIMARY KEY (`IDJADWAL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_jadwal"
#


#
# Structure for table "m_penghuni"
#

CREATE TABLE `m_penghuni` (
  `IDPENGHUNI` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(100) DEFAULT NULL,
  `KODE` varchar(50) DEFAULT NULL,
  `NIK` varchar(50) DEFAULT NULL,
  `JK` enum('Laki-laki','Perempuan') DEFAULT 'Laki-laki',
  `TEMPATLAHIR` varchar(100) DEFAULT NULL,
  `TANGALLAHIR` date DEFAULT NULL,
  `STATUS_KEL` varchar(255) DEFAULT NULL,
  `HP` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `STATUS_PENGHUNI` int(11) DEFAULT '1' COMMENT '1 = Aktif, 2 = Non Aktif',
  `IDGEDUNG` int(11) DEFAULT NULL,
  `IDUNIT` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPENGHUNI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_penghuni"
#


#
# Structure for table "m_staff"
#

CREATE TABLE `m_staff` (
  `IDSTAF` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(255) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL,
  `HP` varchar(50) DEFAULT NULL,
  `KATEGORI` enum('Kebersihan','Keamanan','Maintenance') DEFAULT 'Kebersihan',
  `IDGEDUNG` int(11) DEFAULT NULL,
  `STATUS` int(11) DEFAULT '0',
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDSTAF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_staff"
#


#
# Structure for table "m_tenant"
#

CREATE TABLE `m_tenant` (
  `IDTENANT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(100) DEFAULT NULL,
  `DISKIRPSI` varchar(255) DEFAULT NULL,
  `KATEGORI` varchar(255) DEFAULT NULL,
  `HP` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `STATUS` int(11) DEFAULT '1',
  `IDGEDUNG` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDTENANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_tenant"
#


#
# Structure for table "m_transaksi"
#

CREATE TABLE `m_transaksi` (
  `IDTRX` int(11) NOT NULL AUTO_INCREMENT,
  `BL` varchar(20) DEFAULT NULL,
  `TH` varchar(10) DEFAULT NULL,
  `METER` varchar(50) DEFAULT NULL,
  `NOMINAL` int(11) DEFAULT NULL,
  `LINAS` int(11) DEFAULT '0',
  `IDGEDUNG` int(11) DEFAULT NULL,
  `IDUNIT` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDTRX`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_transaksi"
#


#
# Structure for table "m_unit"
#

CREATE TABLE `m_unit` (
  `IDUNIT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMAUNIT` varchar(100) DEFAULT NULL,
  `NOMER` varchar(100) DEFAULT NULL,
  `IDGEDUNG` int(11) DEFAULT NULL,
  `SPEK` text,
  `FOTO` varchar(255) DEFAULT NULL,
  `KET` varchar(255) DEFAULT NULL,
  `LANTAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDUNIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "m_unit"
#


#
# Structure for table "m_user"
#

CREATE TABLE `m_user` (
  `IDUSER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `LEVEL` int(11) DEFAULT NULL,
  `STATUS` int(11) DEFAULT '1',
  `IDAPT` int(11) DEFAULT NULL,
  `IDGEDUNG` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDUSER`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "m_user"
#

INSERT INTO `m_user` VALUES (1,'farid','masfarid','masfarid.ngalam@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,1,-1,-1);
