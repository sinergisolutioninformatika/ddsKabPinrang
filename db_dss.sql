-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: db_dss
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `data_skpd`
--

DROP TABLE IF EXISTS `data_skpd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_skpd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_data` varchar(45) DEFAULT NULL,
  `id_walidata` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index2` (`id_walidata`),
  CONSTRAINT `fk_data_skpd_1` FOREIGN KEY (`id_walidata`) REFERENCES `walidata` (`idwalidata`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_skpd`
--

LOCK TABLES `data_skpd` WRITE;
/*!40000 ALTER TABLE `data_skpd` DISABLE KEYS */;
INSERT INTO `data_skpd` VALUES (1,'Jumlah Siswa',1);
/*!40000 ALTER TABLE `data_skpd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Sarana Dan Infrastruktur'),(2,'Ekonomi & Pembangunan'),(3,'Sosial & Kesejahteraan Rakyat'),(4,'Manajement Pemerintah');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('andiakbarsisfo@gmail.com','$2y$10$vNdg7DW9N0fmutnP7zCXCO1rLygbg4S7/kU6Yogw9cgOnn2p9hUC.','2018-12-28 07:48:24');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skpd`
--

DROP TABLE IF EXISTS `skpd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skpd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_skpd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skpd`
--

LOCK TABLES `skpd` WRITE;
/*!40000 ALTER TABLE `skpd` DISABLE KEYS */;
INSERT INTO `skpd` VALUES (1,'Dinas Pendidikan'),(2,'Dinas Pemuda');
/*!40000 ALTER TABLE `skpd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_skpd` int(11) DEFAULT NULL,
  `level` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `index3` (`id_skpd`),
  CONSTRAINT `fk_users_1` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Andi Akbar','andiakbarsisfo@gmail.com','$2y$10$.cHe7bK/SbUvTwOqE7iZGev.apzbXfbP/ukgRv1Fa5CLEgqVlcJPy','oJikTqXJSJvE5ANsEba4Daeib0MSLeiYEllbAem3P5LeKnjiqefivmgbNsTR','2018-12-27 22:43:31','2018-12-27 22:43:31',1,'admin'),(3,'sd','asd@gmail.com','$2y$10$0yAAwfsJeh0ZdYqgmeyg8O62IQvHH8fo5ILVlVNzhhM5751IwKBAq',NULL,'2018-12-28 19:17:42','2018-12-28 19:17:42',2,'walidata'),(4,'as','asasas@sd.com','$2y$10$CLvCmf33bVsyn7B017OOsutQqNgKPGNrpdIfMO.NV4.OjPVYNCRHy',NULL,'2018-12-28 19:52:24','2018-12-28 19:52:24',1,'walidata'),(5,'as','aasasas@sd.com','$2y$10$8YRigfZS6w0CeDUaYJKxvu4.Hd.ZNDwrP17xBibax8K9q6FxyLVyi',NULL,'2018-12-28 19:53:18','2018-12-28 19:53:18',1,'walidata'),(6,'as','aaasasas@sd.com','$2y$10$pbVkYugBnkcJuMcahx9u7OChZsLOSbD.ppjEGNfnmXmS9QXzBYq2i',NULL,'2018-12-28 19:53:56','2018-12-28 19:53:56',1,'walidata'),(7,'Walidata','wali@wali.com','$2y$10$rrtPFWeLpFULKG6v5v2peuBP.nq9bCDWxV7fieCDtd50Kwhk0DUOy','9vvI6HxOQIuTw5RcerKbJWt1hkmDtmxpaaLYAlc2votf0js3ry6SjYvW5dp2','2018-12-28 22:49:10','2018-12-28 22:49:10',2,'walidata');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walidata`
--

DROP TABLE IF EXISTS `walidata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walidata` (
  `idwalidata` int(11) NOT NULL AUTO_INCREMENT,
  `id_skpd` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`idwalidata`),
  KEY `index2` (`id_skpd`,`id_kategori`),
  KEY `fk_walidata_1_idx` (`id_kategori`),
  CONSTRAINT `fk_walidata_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_walidata_2` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walidata`
--

LOCK TABLES `walidata` WRITE;
/*!40000 ALTER TABLE `walidata` DISABLE KEYS */;
INSERT INTO `walidata` VALUES (1,1,2);
/*!40000 ALTER TABLE `walidata` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-29 16:33:33
