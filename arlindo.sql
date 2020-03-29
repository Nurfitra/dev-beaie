-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: arlindo
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_activity`
--

DROP TABLE IF EXISTS `tbl_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_activity` (
  `id_activity` int(11) NOT NULL DEFAULT '0',
  `activity_title_id` varchar(150) NOT NULL,
  `activity_desc_id` text NOT NULL,
  `activity_title_en` varchar(150) NOT NULL,
  `activity_desc_en` text NOT NULL,
  `activity_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity`
--

LOCK TABLES `tbl_activity` WRITE;
/*!40000 ALTER TABLE `tbl_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_activity_img`
--

DROP TABLE IF EXISTS `tbl_activity_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_activity_img` (
  `id_img` int(11) NOT NULL DEFAULT '0',
  `id_activity` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_activity_img`
--

LOCK TABLES `tbl_activity_img` WRITE;
/*!40000 ALTER TABLE `tbl_activity_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_activity_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(120) NOT NULL,
  `email` varchar(60) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `cookie` varchar(100) DEFAULT NULL,
  `role` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin`
--

LOCK TABLES `tbl_admin` WRITE;
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','admin@localhost','2018-05-30 16:25:30','Os80UiGWxPu2AfFHyhkrBqaq6lvayMDvX0QwRkHEwEYY3pnbDunV9Z1NF2fUe7jb','1');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_faq`
--

DROP TABLE IF EXISTS `tbl_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `question_en` varchar(120) DEFAULT NULL,
  `answer_en` text,
  `question_id` varchar(120) DEFAULT NULL,
  `answer_id` text,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_faq`
--

LOCK TABLES `tbl_faq` WRITE;
/*!40000 ALTER TABLE `tbl_faq` DISABLE KEYS */;
INSERT INTO `tbl_faq` VALUES (1,'How to Join?','','Bagaimana Cara Bergabung?','<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n');
/*!40000 ALTER TABLE `tbl_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL DEFAULT '0',
  `gallery_title_id` varchar(150) NOT NULL,
  `gallery_desc_id` text NOT NULL,
  `gallery_title_en` varchar(150) NOT NULL,
  `gallery_desc_en` text NOT NULL,
  `gallery_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gallery`
--

LOCK TABLES `tbl_gallery` WRITE;
/*!40000 ALTER TABLE `tbl_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_gallery_img`
--

DROP TABLE IF EXISTS `tbl_gallery_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_gallery_img` (
  `id_img` int(11) NOT NULL DEFAULT '0',
  `id_gallery` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gallery_img`
--

LOCK TABLES `tbl_gallery_img` WRITE;
/*!40000 ALTER TABLE `tbl_gallery_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_gallery_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_history`
--

DROP TABLE IF EXISTS `tbl_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_history` (
  `id_history` int(11) NOT NULL AUTO_INCREMENT,
  `history_desc_en` text NOT NULL,
  `history_desc_id` text NOT NULL,
  `video` longblob NOT NULL,
  PRIMARY KEY (`id_history`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_history`
--

LOCK TABLES `tbl_history` WRITE;
/*!40000 ALTER TABLE `tbl_history` DISABLE KEYS */;
INSERT INTO `tbl_history` VALUES (1,'<p><span style=\"font-size:11pt\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">PT.&nbsp;</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">Sayuran Siap Saji</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\"> was established in 2010 as a subsidiary of PT.&nbsp;Saung Mirwan who was established earlier from 1986 who has supplied whole vegetables especially hydroponic vegetables such as tomato recento, cherry tomato, peppers, mini cucumber and shishito to several supermarkets such as <em>Hero, Carrefour, Hypermat, Lion Superindo</em> and <em>Ranch Market</em>.&nbsp;</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">PT. Sayuran Siap Saji</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\"> as a subsidiary of PT.&nbsp;Saung Mirwan focuses more on Horeka market (hotel, re</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">staurant </span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">dan ca</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">thering</span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">) produce fresh vegetables in whole condition, fresh cut and ready to eat mixed salad.</span></span> <span style=\"font-size:12.0pt\"><span style=\"color:#222222\">Currently </span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">PT. Sayuran Siap Saji </span></span><span style=\"font-size:12.0pt\"><span style=\"color:#222222\">supplies to several restaurants such as <em>McDonalds, Bakmi GM, Domino&#39;s Pizza, Burger King, Sate Khas Senayan, Solaria, Pizza Marzano, Purantara Inflight Catering, Lawson, Johny Rockets, PT.&nbsp;Kenkomayo Diamond, Jaddi Foods, Rejuve, Nam Nam Resto &amp; Noodle Bar and Coffee Bean.</em></span></span></span></span></span></p>\r\n','<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji didirikan pada tahun 2010 sebagai anak perusahaan dari PT. Saung Mirwan yang telah berdiri sebelumnya dari tahun 1986 yang telah mensuplai sayur utuh khususnya sayuran hidroponik seperti tomat recento, <em>cherry tomato</em>, paprika, timun mini dan shishito ke beberapa supermarket seperti <em>Hero,</em> <em>Carrefour, Hypermat, Lion Superindo</em> dan <em>Ranch Market</em>. PT. Sayuran Siap Saji&nbsp; sebagai anak perusahaan dari PT. Saung Mirwan lebih memfokuskan suplai untuk market Horeka (hotel, restorandan katering) memproduksi sayur segar baik dalam&nbsp; kondisi utuh (<em>whole</em>), sudah dipotong (<em>fresh cut)</em> dan <em>mixed salad ready to eat</em>. Saat ini PT. Sayuran Siap Saji mensuplai ke beberapa restoran seperti <em>McDonalds, Bakmi GM, Domino&rsquo;s Pizza, Burger King,</em> Sate Khas Senayan, Solaria, <em>Pizza Marzano</em>, <em>Purantara Inflight Catering, Lawson, Johny Rockets</em>, PT. Intan Kenkomayo, Jaddi Foods, Rejuve, Nam Nam <em>Resto &amp; Noodle Bar</em> dan <em>Coffee Bean</em>. </span></span></p>\r\n','Capture001.png');
/*!40000 ALTER TABLE `tbl_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_joinus`
--

DROP TABLE IF EXISTS `tbl_joinus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_joinus` (
  `id_joinus` int(15) NOT NULL AUTO_INCREMENT,
  `joinus_desc_id` text NOT NULL,
  `joinus_desc_en` text NOT NULL,
  PRIMARY KEY (`id_joinus`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_joinus`
--

LOCK TABLES `tbl_joinus` WRITE;
/*!40000 ALTER TABLE `tbl_joinus` DISABLE KEYS */;
INSERT INTO `tbl_joinus` VALUES (1,'','');
/*!40000 ALTER TABLE `tbl_joinus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kemitraan`
--

DROP TABLE IF EXISTS `tbl_kemitraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kemitraan` (
  `id_kemitraan` int(15) NOT NULL AUTO_INCREMENT,
  `kemitraan_title_id` varchar(210) NOT NULL,
  `kemitraan_desc_id` text NOT NULL,
  `kemitraan_title_en` varchar(210) NOT NULL,
  `kemitraan_desc_en` text NOT NULL,
  `email` varchar(210) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `kemitraan_date` date NOT NULL,
  `video` longblob NOT NULL,
  PRIMARY KEY (`id_kemitraan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kemitraan`
--

LOCK TABLES `tbl_kemitraan` WRITE;
/*!40000 ALTER TABLE `tbl_kemitraan` DISABLE KEYS */;
INSERT INTO `tbl_kemitraan` VALUES (7,'Mitra Kami','<p><span style=\"font-size:11.0pt\">Kemitraan merupakan bagian penting dalam bisnis PT. Sayuran Siap Saji. Bekerja sama dengan pihak lain membantu mencapai tujuan bisnis. PT. Sayuran Siap Saji membuka peluang usaha dan bekerja sama untuk menjadi Mitra kami.</span></p>\r\n','Mitra Kami','<p><span style=\"font-size:11.0pt\"><span style=\"background-color:white\"><span style=\"color:#212121\">Partnership is an important part of PT. Sayuran Siap Saji. Working with others helps to reach business goals. PT. Sayuran Siap Saji opens for business opportunities and works together to become our Partner.</span></span></span></p>\r\n','wasil@sayuransiapsaji.co.id','Jalan Cikopo Selatan No. 134, Kec. Megamendung, Bogor 16770','0812 8999 0505 , 0818 6050 73','0000-00-00','');
/*!40000 ALTER TABLE `tbl_kemitraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kemitraan_img`
--

DROP TABLE IF EXISTS `tbl_kemitraan_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kemitraan_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_mitra` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kemitraan_img`
--

LOCK TABLES `tbl_kemitraan_img` WRITE;
/*!40000 ALTER TABLE `tbl_kemitraan_img` DISABLE KEYS */;
INSERT INTO `tbl_kemitraan_img` VALUES (12,7,'834c64e9228c52b3b5617626c3eb1f70324_gADOG.JPG'),(8,6,'442a8da40e74d12967bf4adf789899b8e91_Daikon.jpg'),(13,7,'329322a5d95e96c7230e1db6b073c540f_lettuce .jpg');
/*!40000 ALTER TABLE `tbl_kemitraan_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_news` (
  `id_news` int(15) NOT NULL AUTO_INCREMENT,
  `news_title_id` varchar(210) NOT NULL,
  `news_desc_id` text NOT NULL,
  `news_title_en` varchar(210) NOT NULL,
  `news_desc_en` text NOT NULL,
  `news_date` date NOT NULL,
  `news_img` blob NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

LOCK TABLES `tbl_news` WRITE;
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
INSERT INTO `tbl_news` VALUES (2,'Pengiriman Kapal Perang Jepang Makinami, Asayuki dan Shimayuki','<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/makinami.jpg\" style=\"height:203px; width:360px\" /></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Pada Rabu 22 Februari 2017 PT. Sayuran Siap Saji bekerja sama dengan&nbsp; PT. Trias Tanjung untuk melaksanakan kegiatan pengiriman produk sayuran segar untuk kapal perang jepang yaitu Makinami, Asayuki dan Shimayuki.&nbsp;</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/asayuki.jpg\" style=\"height:203px; width:360px\" />&nbsp;</td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\"><span style=\"background-color:#ffffff\">Pengiriman&nbsp; ini merupakan kegiatan rutin yang dilakukan oleh pihak PT. Trias Tanjung untuk memenuhi segala kebutuhan kapal perang disaat berlabuh di perairan Indonesia. Sebagai&nbsp;&nbsp;perusahaan yang bergerak dibidang Agribisnis, kami PT. Sayuran&nbsp; &nbsp; Siap Saji dipercaya oleh PT. Trias&nbsp;Tanjung&nbsp; untuk memenuhi segala kebutuhan sayuran segar dan berkualitas. &nbsp; </span></span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">&nbsp;</span></span></span><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;.</span></span></span></div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/syimayuki.jpg\" style=\"height:203px; width:360px\" /></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Seluruh produk sayuran yang &nbsp;dikirim, dipersiapkan dengan standar pengemasan PT. Sayuran siap saji dimana kondisi suhu selama proses pengemasan dan pengiriman terjaga dengan baik, sehingga tetap menjaga kualitas produk sayuran.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Terima kasih kepada PT. Trias Tanjung yang telah kembali mempercayakan dan menjalin kerjasama yang baik dengan&nbsp; PT. Sayuran Siap Saji.</span></span></span></div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Salam dari <strong>PT Sayuran Siap Saji</strong></span></span></span></div>\r\n\r\n<div style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Fresh And Quality</strong></span></span></span></div>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n','Japan Shipping Warship Makinami, Asayuki, and Shimayuki','<div>\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/makinami.jpg\" style=\"height:203px; width:360px\" /></p>\r\n			</td>\r\n			<td style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">On Wednesday&nbsp;February 22nd,&nbsp;2017 PT. Sayuran Siap Saji cooperates with PT. Trias Tanjung to carry out the activities of delivering fresh vegetable products for Japanese warships Makinami, Asayuki and Shimayuki.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div>\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/asayuki.jpg\" style=\"height:203px; width:360px\" /></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">Running this is a routine activity conducted by the PT. Trias Tanjung to meet the needs of warships while anchored in the Indonesian port. As a company engaged in Agribusiness, we PT. Sayuran Siap Saji by PT. Trias Tanjung to meet the needs of fresh and quality vegetables.</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div>&nbsp;\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://sayuransiapsaji.co.id/assets/img/syimayuki.jpg\" style=\"height:203px; width:360px\" /></td>\r\n			<td>\r\n			<div style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">All vegetable products are shipped, prepared with packaging standard PT. Sayuran Siap Saji where temperature conditions during packaging and shipping process are good, maintaining product quality.</span></span></span></div>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div><br />\r\n&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><span style=\"font-size:14px\">Thanks to PT. Trias Tanjung who has returned to trust and establish good cooperation with PT. Sayuran Siap Saji.</span></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\">Best Regard <strong>PT. Sayuran Siap Saji</strong></span></span></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#27ae60\"><strong>Fresh And Quality</strong></span></span></span></div>\r\n','0000-00-00','MAkinami1.jpg');
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news_img`
--

DROP TABLE IF EXISTS `tbl_news_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_news_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_img`),
  CONSTRAINT `tbl_news_img_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `tbl_news` (`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news_img`
--

LOCK TABLES `tbl_news_img` WRITE;
/*!40000 ALTER TABLE `tbl_news_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_news_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_onfarm`
--

DROP TABLE IF EXISTS `tbl_onfarm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_onfarm` (
  `id_onfarm` int(11) NOT NULL AUTO_INCREMENT,
  `onfarm_desc_en` text NOT NULL,
  `onfarm_desc_id` text NOT NULL,
  PRIMARY KEY (`id_onfarm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_onfarm`
--

LOCK TABLES `tbl_onfarm` WRITE;
/*!40000 ALTER TABLE `tbl_onfarm` DISABLE KEYS */;
INSERT INTO `tbl_onfarm` VALUES (1,'<p>On farm products are products obtained from plants grown in green house and that they use the media rather than soil. So the result is a clean product and have a brighter color so that the sale price obtained will be higher than the other product.</p>\r\n','<p>On farm products are products obtained from plants grown in green house and that they use the media rather than soil. So the result is a clean product and have a brighter color so that the sale price obtained will be higher than the other product. coba</p>\r\n');
/*!40000 ALTER TABLE `tbl_onfarm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_onfarm_img`
--

DROP TABLE IF EXISTS `tbl_onfarm_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_onfarm_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_onfarm` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_onfarm_img`
--

LOCK TABLES `tbl_onfarm_img` WRITE;
/*!40000 ALTER TABLE `tbl_onfarm_img` DISABLE KEYS */;
INSERT INTO `tbl_onfarm_img` VALUES (2,1,'onfarm-1.jpg'),(3,1,'onfarm-2.jpg'),(4,1,'onfarm-3.jpg'),(5,1,'onfarm-4.jpg'),(6,1,'onfarm-5.jpg');
/*!40000 ALTER TABLE `tbl_onfarm_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ourpartner`
--

DROP TABLE IF EXISTS `tbl_ourpartner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ourpartner` (
  `id_ourpartner` int(11) NOT NULL AUTO_INCREMENT,
  `ourpartner_name` varchar(120) DEFAULT NULL,
  `ourpartner_desc_en` text,
  `ourpartner_desc_id` text,
  `ourpartner_img` blob,
  PRIMARY KEY (`id_ourpartner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ourpartner`
--

LOCK TABLES `tbl_ourpartner` WRITE;
/*!40000 ALTER TABLE `tbl_ourpartner` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ourpartner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_processing`
--

DROP TABLE IF EXISTS `tbl_processing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_processing` (
  `id_processing` int(11) NOT NULL AUTO_INCREMENT,
  `processing_desc_en` text NOT NULL,
  `processing_desc_id` text NOT NULL,
  PRIMARY KEY (`id_processing`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_processing`
--

LOCK TABLES `tbl_processing` WRITE;
/*!40000 ALTER TABLE `tbl_processing` DISABLE KEYS */;
INSERT INTO `tbl_processing` VALUES (1,'Product process known fresh-cut products is an end product produced by a the process from raw material into products that are ready to be processed or consumption of which has a much better higenitas. accuracy of the cost of fresh-cut it would be more appropriate than calculating the cost of basic mate. ','Product process known fresh-cut products is an end product produced by a the process from raw material into products that are ready to be processed or consumption of which has a much better higenitas. accuracy of the cost of fresh-cut it would be more appropriate than calculating the cost of basic mate. ');
/*!40000 ALTER TABLE `tbl_processing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_processing_img`
--

DROP TABLE IF EXISTS `tbl_processing_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_processing_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_processing` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_processing_img`
--

LOCK TABLES `tbl_processing_img` WRITE;
/*!40000 ALTER TABLE `tbl_processing_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_processing_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `product_title_id` varchar(150) NOT NULL,
  `product_desc_id` text NOT NULL,
  `product_title_en` varchar(150) NOT NULL,
  `product_desc_en` text NOT NULL,
  `product_img` blob NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (15,'Tomat','','Tomato','','beef_tomato_(2).jpg'),(16,'Brokoli','','Broccoli','','Brocolly.jpg'),(18,'Caisim','','Caisim','','Caysim1.JPG'),(19,'Lobak Putih','','Daikon','','Daikon.jpg'),(20,'Daun Bawang','','Scallion','','Daun_Bawang.jpg'),(21,'Edamame','','Edamame','','Edamame.jpg'),(23,'Horinso','','Japanese Spinach','','Horinso.jpg'),(24,'Kembang Kol','','Cauliflower','','Kembang_Kol.JPG'),(25,'Kol Putih','','Cabbage','','Kol_Putih.jpg'),(26,'Lettuce Head ','','Lettuce Head ','','Lettuce_Head.jpg'),(27,'Bawang Bombai','','Onion','','onion1.jpg'),(28,'Pak Coy Hijau','','Green Pak Choy','','Pakcoy_Hijau.JPG'),(29,'Paprika Hijau','','Green paprika','','paprika_hijau.JPG'),(30,'Paprika Merah','','Red Paprika','','paprika_merah.JPG'),(31,'Paprika Kuning','','Yellow Paprika','','paprika_kuning.JPG'),(32,'Sawi Putih','','Chinese Cabbage','','Sawi_Putih.jpg'),(33,'Selada keriting','','Lettuce','','Selada_Keriting.jpg'),(34,'Selada Merah','','Red Leaf Lettuce','','Selada_Merah.JPG'),(35,'Seledri Lokal','','Celery','','Seledri_Lokal.JPG'),(36,'Seledri Stik','','Celery','','Seledri_Stik.jpg'),(37,'Tomat Cherry','','Cherry Tomato','','Tomat_Cherry_(2).jpg'),(38,'Wortel Lokal','','Carrot','','wortel_lokal.jpg'),(39,'Timun Jepang','','Zucchini','','zukini.jpg'),(40,'Jamur Champignon','','Jamur Champignon','',''),(41,'Timun Sayur','','Cucumber','',''),(42,'Kentang','','Potato','',''),(43,'Jagung Manis','','Sweet Corn','',''),(44,'Bit','','Bit','',''),(45,'Daun Dil','','Dil Leaf','',''),(46,'Thai Basil','','Thai Basil','',''),(48,'Oakleaf Merah','','Red Oakleaf','',''),(49,'Rocket (Arugula)','','Rocket Wild','',''),(51,'Kangkung','','Kale','',''),(52,'Buncis','','Bean','',''),(53,'Fresh Cut Veggie','','Fresh Cut Veggie','','');
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_img`
--

DROP TABLE IF EXISTS `tbl_product_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_img`
--

LOCK TABLES `tbl_product_img` WRITE;
/*!40000 ALTER TABLE `tbl_product_img` DISABLE KEYS */;
INSERT INTO `tbl_product_img` VALUES (48,19,'780a8da40e74d12967bf4adf789899b8e91_Daikon.jpg'),(6,39,'62327ee0ca8988a397af2503b6bfe773ff3_DIT_3342 copy.jpg'),(7,39,'2275280fce35fa4c0b535cffc636a44ef6a_DIT_3344 copy.jpg'),(8,39,'790d0c9731c81f2a5a87af4abdc33dad648_DIT_3350 copy.jpg'),(9,38,'49597eb66a191d822b04ef8b7b938371066_DIT_3377 copy.jpg'),(10,38,'621bacf0456a1bb08186a934cf47267a04e_DIT_3381 copy.jpg'),(11,38,'5189410328d3e77c47bf610d0a49e29693e_DIT_3384 copy.jpg'),(12,37,'834e8ed6c614ea2041efda3fdc62f842999_DIT_3482 copy.jpg'),(13,25,'32810930b045e0887c1fbe565986ac63d39_DIT_3427 copy.jpg'),(14,25,'27a467bb117b97d8b2e051aa63a9d73417_DIT_3433 copy.jpg'),(15,25,'8188ac05d0461542d999c2f98b4b56ab903_DIT_3437 copy.jpg'),(21,35,'661499a5c5b73c8de3db140666e036a3d26_DIT_3291 copy.jpg'),(20,35,'4386db6b7a54bb7fd0488e18c25a6dc54d1_DIT_3287 copy.jpg'),(19,36,'5064dcbb739b34653219f7781e91ca4792f_Seledri Stik.jpg'),(22,35,'614fdb9920494aaa280e08dbd46231a98_DIT_3295 copy.jpg'),(23,34,'8062401a9065bffec672392dc9efb87f539_24. Selada Merah.jpg'),(24,33,'47102145a2eab05dd4d23a536c2887a1056_Selada Keriting.jpg'),(25,32,'32322cc12ec3ab8a367d1bbe37de64f5d06_DIT_3464 copy.jpg'),(26,31,'43259ff624db4e82f92961510e44c6ab943_DIT_3420 copy.jpg'),(27,30,'875f17301a9b5d87f4f0794908751e746be_DIT_3406 copy.jpg'),(28,30,'776742060c7a8b4086194b06ce1d0bb0c8a_DIT_3412 copy.jpg'),(29,30,'872b2cee2fa9bd7d45f9a6ac66161d0b5ea_DIT_3416 copy.jpg'),(30,29,'55133d1c3f35bbb04a7395ccc25b7d7d32b_DIT_3394 copy.jpg'),(31,28,'604ff537c28a9d5c9b54310c88349231900_Pakcoy Hijau.JPG'),(32,27,'46876c8706b967f862c9c2b676d1a4aacc1_DIT_3449 copy.jpg'),(33,27,'604b4654eeb46046d9a0a845c5a8a1eafcc_DIT_3446 copy.jpg'),(34,27,'5510b64b2d68f3c014d978ac94de68fecd1_DIT_3453 copy.jpg'),(35,26,'52809b2eba447e3f06315ae476f701ebec0_DIT_3256 copy.jpg'),(36,26,'658fec7399caf23b557b83ea62bc1a3f8ca_DIT_3251 copy.jpg'),(37,26,'2569ba4388ee4d59421d8ed84f9636ea3b5_DIT_3259 copy.jpg'),(38,24,'2770104c78dc65148ea5c2ced19c479d59a_DIT_3264 copy.jpg'),(39,24,'82633ae826cbd13a71ca4d6da49e55c1a4d_DIT_3270 copy.jpg'),(40,24,'87469b2e1a3d411b097eec63354b3e7a548_DIT_3282 copy.jpg'),(41,23,'904b299e7b7fbc52a806d345cf2ada99c95_Horinso.jpg'),(42,21,'663287e4a6770b463d65b10dfa5b9326083_Edamame.jpg'),(43,20,'88176d27820e3709bd32f4ee3ab5e4fd612_DIT_3304 copy.jpg'),(44,20,'5774d23ccdf20864605abe17fb2a8a534d2_DIT_3301 copy.jpg'),(45,20,'2138dc89902d3f6bcce813bb26aadea7dba_DIT_3309 copy.jpg'),(46,20,'32242c35f9c526d560aa9b964b06e410a82_DIT_3494 copy.jpg'),(47,20,'694b58541e52cb52454ea35e8091b26f40e_DIT_3498 copy.jpg'),(49,18,'5833e1f949e6674ca5596dfa71e149ff16b_DIT_3370 copy.jpg'),(50,18,'3356c8b274331517e6842049d7ce3aed3fc_DIT_3367 copy.jpg'),(51,18,'7334cd5b086452aafb40994df13d7864f82_DIT_3373 copy.jpg'),(52,16,'196947e40e3e32c9eead9490bb2aba5f521_DIT_3359 copy.jpg'),(53,16,'985b7bc58e2eda60c3df8b20de8b9cc0d4c_DIT_3356 copy.jpg'),(54,16,'20971919c30cf2b0d809ba43f6198b7ce04_DIT_3363 copy.jpg'),(55,15,'645556a9dec8bfbd859eb849e59610e3fce_DIT_3329 copy.jpg'),(56,15,'443141c4013872aab9a703430084a960384_DIT_3333 copy.jpg'),(57,15,'20477a2643ad3596d86fbfe18a8501bf783_DIT_3337 copy.jpg'),(58,40,'1609aa611ed7ffd6a440074cd0d0de13847_DIT_3315 copy.jpg'),(59,40,'13389f487eae1fcffaae33fd570518409fc_DIT_3319 copy.jpg'),(60,40,'823563bef279f69d3c1cc51cba6a2f0c807_DIT_3325 copy.jpg'),(61,41,'5082b8aaf978b0dce9ae6b61770e198cdc1_DIT_3477 copy.jpg'),(62,42,'43419eef487863f9aa332fba11fef31f419_DIT_3456 copy.jpg'),(63,42,'91c3cca617a2e83529f4dd5b47f8f31dbd_DIT_3459 copy.jpg'),(64,43,'851e5eed1bc1697ca32085ba0e92cd00675_DIT_3466 copy.jpg'),(65,43,'921b07834ca9d5ca647a225074427bf8fe9_DIT_3469 copy.jpg'),(66,43,'773c0dd14dbfc1590d53277f7184f2fc1b_DIT_3473 copy.jpg'),(67,44,'376f24fab464f1e6f0b531b0fd2a9ecb6bd_21. Bit.jpg'),(68,45,'469dcc696f9d95ba16d7118489ca5c80a93_22. Daun Dil.jpg'),(69,46,'70c16761a4626e1d62638a2872c16b9f3c_23. Thai Basil.jpg'),(70,48,'900e7f383cadeaf98e57d4a98b7f0b22a8_25. Oak Leaf.jpg'),(71,49,'34183f9feeed230cbbcf6f1d1e946e825c5_26. Rokula.jpg'),(72,50,'443a6e94e2fb71dc1ea84ef06e471514570_kangkung.jpg'),(73,51,'1389e83ea86ff0763d15c8a5e05f23a8027_membersihkan-dan-mengolah-kangkung-choysum.org_.jpg'),(74,44,'4690d18aec322f272558d262e544db9301e_dice bit.jpg'),(75,42,'663ff407718c2fb5565ef182a5fc2556ea5_potato salad.jpg'),(76,42,'864f7224ccacbffbfc7877c659241428cc1_potato dice pack.jpg'),(77,26,'296cf6caddd3b5f147665c15f18eedd7622_shreded lettuce.jpg'),(78,24,'3260fd01cd6e45e590a3de02bdc96d8c8f4_cauliflower cut.jpg'),(79,20,'7975f109bba76257ff550b1152c4b71e097_spring onion slice.jpg'),(80,38,'2711bb4183fa8e5c40d920efdc443153c0a_carrot triangle.jpg'),(81,31,'227af290c05e038abcc35790d66bdc9f6a2_yellow pepper cut.JPG'),(82,31,'2403dfff85e8b355d2e251cad1e273ded1e_yellow pepper ring.JPG'),(83,31,'874f346a1e5033a47e7df1740c490c8e0de_yellow pepper slice.JPG'),(84,16,'94268dce0bd66f80895b1c6915d159b9bcc_broccoli.jpg'),(85,25,'84b3e859d27824df6ca91a205779a722c8_Cabbage juliane.JPG'),(86,25,'4388b4357caa67af2ab56d1261e48610327_cabbage cut.JPG'),(87,32,'5023254e1ae7e94711913eb1a61e864c4df_chinese cabbage slice.JPG'),(88,27,'40d4c6adeb901649704dce10bccd542636_Onion ring burger king.JPG'),(91,52,'391f97672facc96b38feaff0093da52f153_Bean slice stick.JPG'),(90,52,'931a90e4efacf0e5af1a8f5337b766db04e_Bean slice.JPG'),(92,38,'979046625e2d79717a2483ea8b4a62a70c1_Carrot stick.JPG'),(93,53,'155e531d4144a9b54691d228e0672faa659_fresh cut veggie (1).jpg'),(94,53,'9147305f578b70bc05bb6ba22f4c45a1ade_fresh cut veggie.jpg');
/*!40000 ALTER TABLE `tbl_product_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_profile` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profile_id` text NOT NULL,
  `profile_en` text NOT NULL,
  `address` varchar(120) NOT NULL,
  `telephone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `email_purchasing` varchar(150) NOT NULL,
  `email_kemitraan` varchar(150) NOT NULL,
  `email_sales` varchar(150) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profile`
--

LOCK TABLES `tbl_profile` WRITE;
/*!40000 ALTER TABLE `tbl_profile` DISABLE KEYS */;
INSERT INTO `tbl_profile` VALUES (1,'<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Hortikultura merupakan salah satu komoditas pertanian yang utama di Indonesia. Salah satu produk hortikultura yang memiliki prospek di masa mendatang yaitu sayuran. Meksipun Indonesia negeri yang subur dan menghasilkan sayuran yang tinggi, akan tetapi Indonesia masih mengimpor sayuran dari luar negeri. Pemanfaatan sayuran ini tidak hanya sebatas pada industri rumah tangga, tetapi juga lebih mengarah pada indrustri bisnis seperti rumah makan, restoran siap saji, hotel, dan hal-hal yang berkaitan dengan industri pengolahan makanan. </span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Komoditas pertanian mempunyai karakteristik khusus, yaitu (1) <em>Perishable</em> atau mudah rusak, (2) Proses penanaman, pertumbuhan, dan pemanen tergantung pada iklim dan musim, (3) Hasil panen memiliki bentuk dan ukuran yang bervariasi. Faktor tersebut sangat penting dipertimbangkan untuk menganalisis strategi yang tepat dalam pemasaran. </span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Oleh sebab itu langkah pertama yang harus dilakukan oleh suatu industri adalah mengetahui terlebih dahulu produk seperti apa yang diminta oleh pasar, baru kemudian memproduksi sesuai harapan pelanggan dengan syarat produk yang ditawarkan oleh perusahaan harus memiliki kualitas bersaing dengan produk perusahaan yang sejenis.</span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk mengetahui harapan dari pelanggan diperlukan suatu analisa yang dapat menangkap dengan jeli keinginan konsumen terhadap produk yang dihasilkan perusahaan, dan menentukan aspek-aspek yang harus menjadi prioritas dan harus diperhatikan oleh pihak perusahaan dalam upaya pemenuhan dan peningkatan kepuasan konsumen yang berarti pula untuk peningkatan kualitas industri. Untuk menghasilkan produk yang memenuhi harapan pelanggan diperlukan perbaikan kualitas yang dapat dilakukan melalu suatu pengendalian proses produksi. Aplikasi pengendalian proses pada suatu industri bertujuan untuk mengetahui kesesuaian proses yang dilakukan perusahaan dengan standar yang telah ditentukan. </span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Sejarah perusahaan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji didirikan pada tahun 2010 sebagai anak perusahaan dari PT. Saung Mirwan yang telah berdiri sebelumnya dari tahun 1986 yang telah mensuplai sayur utuh khususnya sayuran hidroponik seperti tomat recento, <em>cherry tomato</em>, paprika, timun mini dan shishito ke beberapa supermarket seperti <em>Hero,</em> <em>Carrefour, Hypermat, Lion Superindo</em> dan <em>Ranch Market</em>. PT. Sayuran Siap Saji&nbsp; sebagai anak perusahaan dari PT. Saung Mirwan lebih memfokuskan suplai untuk market Horeka (hotel, restorandan katering) memproduksi sayur segar baik dalam&nbsp; kondisi utuh (<em>whole</em>), sudah dipotong (<em>fresh cut)</em> dan <em>mixed salad ready to eat</em>. Saat ini PT. Sayuran Siap Saji mensuplai ke beberapa restoran seperti <em>McDonalds, Bakmi GM, Domino&rsquo;s Pizza, Burger King,</em> Sate Khas Senayan, Solaria, <em>Pizza Marzano</em>, <em>Purantara Inflight Catering, Lawson, Johny Rockets</em>, PT. Intan Kenkomayo, Jaddi Foods, Rejuve, Nam Nam <em>Resto &amp; Noodle Bar</em> dan <em>Coffee Bean</em>.</span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Penjelasan mengenai lokasi, luas perkebunan, produk yg dihasilkan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Dalam memproduksi sayuran yang dihasilkan PT. Sayuran Siap Saji bekerjasama dengan beberapa petani di Garut, Lembang, Cipanas dan Gadog sekitarnya, dalam pengawasan Divisi Kemitraan melalui penyuluh yang ditunjuk yang bertanggungjawab membina petani, memberikan penyuluhan untuk budidaya tanaman, memberikan masukan untuk pengendalian hama dan penyakit pada tanaman agar produk yang dihasilkan sesuai baik dalam kualitas maupun kuantitas yang diinginkan.</span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Visi misi perusahaan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">&ldquo;Menjadi salah satu <em>leader</em> dalam bidang agribisnis serta produksi sayur fresh cut dengan menerapkan teknologi yang tepat guna untuk meningkatkan peran teknologi yang tepat guna untuk meningkatkan peran serta dan kesejahteraan masyarakat petani dalam membangun Negara Indonesia&rdquo; adalah visi PT. Sayuran Siap Saji yang ditetapkan berdasarkan cita-cita pendiri, latar belakang dan kondisi masyarakat dikembangkan misi dan nilai-nilai luhur perusahaan. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong>Adapun misi PT. Sayuran Siap Saji :</strong></span></span></span></li>\r\n</ul>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Memproduksi secara berkesinambungan dan secara konsisten menjaga standar mutu yang tinggi sesuai permintaan pasar</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Meningkatkan mutu produk, pelayanan dan SDM untuk menjaga kepuasan pelanggan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Mengembangkan usaha pertanian dengan memperluas jaringan pasar dan jaringan kemitraan dengan para petani kecil, dan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Menggalang kerjasama dengan lembaga-lembaga penelitian dan pendidikan untuk mendapatkan teknologi tepat guna yang dapat diaplikasikan oleh masyarakat petani. </span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in\">&nbsp;</p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji melakukan penanganan sayuran dengan standarisasi <em>HACCP</em>. <em><span style=\"background-color:white\">(HACCP)<strong>&nbsp;</strong></span><span style=\"background-color:white\">Hazard Analysis Critical Control Point&nbsp;</span></em><span style=\"background-color:white\">adalah suatu sistem kontrol dalam upaya pencegahan terjadinya masalah yang didasarkan atas identifikasi titik-titik kritis di dalam tahap penanganan dan proses produksi. HACCP merupakan salah satu bentuk manajemen resiko yang dikembangkan untuk menjamin keamanan pangan dengan pendekatan pencegahan (<em>preventive</em>) yang dianggap dapat memberikan jaminan dalam menghasilkan makanan yang aman bagi konsumen.&nbsp;Tujuan dari penerapan HACCP dalam suatu industri pangan adalah untuk mencegah terjadinya bahaya sehingga dapat dipakai sebagai jaminan mutu pangan guna memenuhi tuntutan konsumen. HACCP bersifat sebagai sistem pengendalian mutu sejak bahan&nbsp;baku dipersiapkan sampai produk akhir diproduksi masal dan didistribusikan. </span></span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\">Beberapa keunggulan dari sayur potong yang diproduksi oleh PT. Sayuran Siap Saji adalah dengan telah dimilikinya sertifikasi <em>HACCP</em> sebagai salah satu standar keamanan pangan. Pelanggan tidak perlu memotong dan mencuci sayur, berkurangnya proses <em>preparation</em> dan <em>space</em> untuk penyimpanan di store dan tentunya untuk beberapa sayuran seperti <em>mixed salad</em> bisa siap dimakan tanpa proses potong atau dicuci.</span></span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji berkomitmen melaksanakan, mengembangkan dan meningkatkan kinerja proses produksinya di dalam menjamin keamanan pangan produknya melalui :</span></span></span></p>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan cara pembuatan makanan yang baik berdasarkan <em>Good Manufacturing Practices </em>(GMP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan cara pembuatan makanan yag hiegienis berdasarkan <em>Standar Sanitation Operation Procedures</em> (SSOP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan sistem analisa bahaya dan pengendalian dan pengendalian titik kritis (<em>Hazard Analysis Critical Control Points</em>-HACCP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan sistem mutu dan manajemen keamanan pangan (ISO 22000 : 2005); </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pentaatan terhadap standar produk <em>fresh cut vegetables</em> serta produk <em>fresh vegetables</em> dan sejumlah regulasi bersesuaian;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Pemberian kepedulian, pemahaman dan pelatihan yang tepat bagi seluruh jajaran manajemen dan seluruh karyawan di organisasi di perusahaan mengenai aspek keamanan pangan.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Mengkomunikasikan kepada seluruh organisasi mengenai pentingnya perbaikan berkelanjutan (<em>continous improvement</em>) dan pencapaian kualitas keamanan pangan.</span></span></span></li>\r\n</ol>\r\n','<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Hortikultura merupakan salah satu komoditas pertanian yang utama di Indonesia. Salah satu produk hortikultura yang memiliki prospek di masa mendatang yaitu sayuran. Meksipun Indonesia negeri yang subur dan menghasilkan sayuran yang tinggi, akan tetapi Indonesia masih mengimpor sayuran dari luar negeri. Pemanfaatan sayuran ini tidak hanya sebatas pada industri rumah tangga, tetapi juga lebih mengarah pada indrustri bisnis seperti rumah makan, restoran siap saji, hotel, dan hal-hal yang berkaitan dengan industri pengolahan makanan. </span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Komoditas pertanian mempunyai karakteristik khusus, yaitu (1) <em>Perishable</em> atau mudah rusak, (2) Proses penanaman, pertumbuhan, dan pemanen tergantung pada iklim dan musim, (3) Hasil panen memiliki bentuk dan ukuran yang bervariasi. Faktor tersebut sangat penting dipertimbangkan untuk menganalisis strategi yang tepat dalam pemasaran. </span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Oleh sebab itu langkah pertama yang harus dilakukan oleh suatu industri adalah mengetahui terlebih dahulu produk seperti apa yang diminta oleh pasar, baru kemudian memproduksi sesuai harapan pelanggan dengan syarat produk yang ditawarkan oleh perusahaan harus memiliki kualitas bersaing dengan produk perusahaan yang sejenis.</span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Untuk mengetahui harapan dari pelanggan diperlukan suatu analisa yang dapat menangkap dengan jeli keinginan konsumen terhadap produk yang dihasilkan perusahaan, dan menentukan aspek-aspek yang harus menjadi prioritas dan harus diperhatikan oleh pihak perusahaan dalam upaya pemenuhan dan peningkatan kepuasan konsumen yang berarti pula untuk peningkatan kualitas industri. Untuk menghasilkan produk yang memenuhi harapan pelanggan diperlukan perbaikan kualitas yang dapat dilakukan melalu suatu pengendalian proses produksi. Aplikasi pengendalian proses pada suatu industri bertujuan untuk mengetahui kesesuaian proses yang dilakukan perusahaan dengan standar yang telah ditentukan. </span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Sejarah perusahaan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji didirikan pada tahun 2010 sebagai anak perusahaan dari PT. Saung Mirwan yang telah berdiri sebelumnya dari tahun 1986 yang telah mensuplai sayur utuh khususnya sayuran hidroponik seperti tomat recento, <em>cherry tomato</em>, paprika, timun mini dan shishito ke beberapa supermarket seperti <em>Hero,</em> <em>Carrefour, Hypermat, Lion Superindo</em> dan <em>Ranch Market</em>. PT. Sayuran Siap Saji&nbsp; sebagai anak perusahaan dari PT. Saung Mirwan lebih memfokuskan suplai untuk market Horeka (hotel, restorandan katering) memproduksi sayur segar baik dalam&nbsp; kondisi utuh (<em>whole</em>), sudah dipotong (<em>fresh cut)</em> dan <em>mixed salad ready to eat</em>. Saat ini PT. Sayuran Siap Saji mensuplai ke beberapa restoran seperti <em>McDonalds, Bakmi GM, Domino&rsquo;s Pizza, Burger King,</em> Sate Khas Senayan, Solaria, <em>Pizza Marzano</em>, <em>Purantara Inflight Catering, Lawson, Johny Rockets</em>, PT. Intan Kenkomayo, Jaddi Foods, Rejuve, Nam Nam <em>Resto &amp; Noodle Bar</em> dan <em>Coffee Bean</em>.</span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Penjelasan mengenai lokasi, luas perkebunan, produk yg dihasilkan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Dalam memproduksi sayuran yang dihasilkan PT. Sayuran Siap Saji bekerjasama dengan beberapa petani di Garut, Lembang, Cipanas dan Gadog sekitarnya, dalam pengawasan Divisi Kemitraan melalui penyuluh yang ditunjuk yang bertanggungjawab membina petani, memberikan penyuluhan untuk budidaya tanaman, memberikan masukan untuk pengendalian hama dan penyakit pada tanaman agar produk yang dihasilkan sesuai baik dalam kualitas maupun kuantitas yang diinginkan.</span></span></p>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Visi misi perusahaan</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">&ldquo;Menjadi salah satu <em>leader</em> dalam bidang agribisnis serta produksi sayur fresh cut dengan menerapkan teknologi yang tepat guna untuk meningkatkan peran teknologi yang tepat guna untuk meningkatkan peran serta dan kesejahteraan masyarakat petani dalam membangun Negara Indonesia&rdquo; adalah visi PT. Sayuran Siap Saji yang ditetapkan berdasarkan cita-cita pendiri, latar belakang dan kondisi masyarakat dikembangkan misi dan nilai-nilai luhur perusahaan. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong>Adapun misi PT. Sayuran Siap Saji :</strong></span></span></span></li>\r\n</ul>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Memproduksi secara berkesinambungan dan secara konsisten menjaga standar mutu yang tinggi sesuai permintaan pasar</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Meningkatkan mutu produk, pelayanan dan SDM untuk menjaga kepuasan pelanggan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Mengembangkan usaha pertanian dengan memperluas jaringan pasar dan jaringan kemitraan dengan para petani kecil, dan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Menggalang kerjasama dengan lembaga-lembaga penelitian dan pendidikan untuk mendapatkan teknologi tepat guna yang dapat diaplikasikan oleh masyarakat petani. </span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0.5in; margin-right:0in\">&nbsp;</p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji melakukan penanganan sayuran dengan standarisasi <em>HACCP</em>. <em><span style=\"background-color:white\">(HACCP)<strong>&nbsp;</strong></span><span style=\"background-color:white\">Hazard Analysis Critical Control Point&nbsp;</span></em><span style=\"background-color:white\">adalah suatu sistem kontrol dalam upaya pencegahan terjadinya masalah yang didasarkan atas identifikasi titik-titik kritis di dalam tahap penanganan dan proses produksi. HACCP merupakan salah satu bentuk manajemen resiko yang dikembangkan untuk menjamin keamanan pangan dengan pendekatan pencegahan (<em>preventive</em>) yang dianggap dapat memberikan jaminan dalam menghasilkan makanan yang aman bagi konsumen.&nbsp;Tujuan dari penerapan HACCP dalam suatu industri pangan adalah untuk mencegah terjadinya bahaya sehingga dapat dipakai sebagai jaminan mutu pangan guna memenuhi tuntutan konsumen. HACCP bersifat sebagai sistem pengendalian mutu sejak bahan&nbsp;baku dipersiapkan sampai produk akhir diproduksi masal dan didistribusikan. </span></span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\">Beberapa keunggulan dari sayur potong yang diproduksi oleh PT. Sayuran Siap Saji adalah dengan telah dimilikinya sertifikasi <em>HACCP</em> sebagai salah satu standar keamanan pangan. Pelanggan tidak perlu memotong dan mencuci sayur, berkurangnya proses <em>preparation</em> dan <em>space</em> untuk penyimpanan di store dan tentunya untuk beberapa sayuran seperti <em>mixed salad</em> bisa siap dimakan tanpa proses potong atau dicuci.</span></span></span></p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">PT. Sayuran Siap Saji berkomitmen melaksanakan, mengembangkan dan meningkatkan kinerja proses produksinya di dalam menjamin keamanan pangan produknya melalui :</span></span></span></p>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan cara pembuatan makanan yang baik berdasarkan <em>Good Manufacturing Practices </em>(GMP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan cara pembuatan makanan yag hiegienis berdasarkan <em>Standar Sanitation Operation Procedures</em> (SSOP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan sistem analisa bahaya dan pengendalian dan pengendalian titik kritis (<em>Hazard Analysis Critical Control Points</em>-HACCP);</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pemeliharaan sistem mutu dan manajemen keamanan pangan (ISO 22000 : 2005); </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Penerapan dan pentaatan terhadap standar produk <em>fresh cut vegetables</em> serta produk <em>fresh vegetables</em> dan sejumlah regulasi bersesuaian;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Pemberian kepedulian, pemahaman dan pelatihan yang tepat bagi seluruh jajaran manajemen dan seluruh karyawan di organisasi di perusahaan mengenai aspek keamanan pangan.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\">Mengkomunikasikan kepada seluruh organisasi mengenai pentingnya perbaikan berkelanjutan (<em>continous improvement</em>) dan pencapaian kualitas keamanan pangan.</span></span></span></li>\r\n</ol>\r\n','Jalan Cikopo Selatan No. 134, Kec. Megamendung, Bogor 16770','+62 251-8241269','umum@sayuransiapsaji.co.id','','partnership@sayuransiapsaji.co.id','sales@sayuransiapsaji.co.id, sayuransiapsaji@gmail.com','+62 251-8241268','facebook.com/sayuran.siapsaji','','');
/*!40000 ALTER TABLE `tbl_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_slider` (
  `id_slider` int(15) NOT NULL AUTO_INCREMENT,
  `slider_title_id` varchar(120) NOT NULL,
  `slider_desc_id` varchar(120) NOT NULL,
  `slider_title_en` varchar(120) NOT NULL,
  `slider_desc_en` varchar(120) NOT NULL,
  `slider_date` date NOT NULL,
  `slider_img` blob NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_slider`
--

LOCK TABLES `tbl_slider` WRITE;
/*!40000 ALTER TABLE `tbl_slider` DISABLE KEYS */;
INSERT INTO `tbl_slider` VALUES (10,'Prosesing','Prosesing','Processing','Processing ','0000-00-00','IMG_2635.JPG'),(7,'Mesin Prosesing','Mesin Prosesing','Processing Machine','Processing Machine','0000-00-00','IMG_0108.jpg'),(8,'Prosesing','Prosesing','Processing','Processing ','0000-00-00','IMG_0105.jpg'),(9,'Lahan Sayur','Lahan Sayur','Vegetables Land','Vegetables Land','0000-00-00','Kebun_LTD_Garut.jpg');
/*!40000 ALTER TABLE `tbl_slider` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-30 22:20:31
