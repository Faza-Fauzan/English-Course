-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tugas
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `daftar_akun`
--

DROP TABLE IF EXISTS `daftar_akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `pilihan_kursus` varchar(50) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_akun`
--

LOCK TABLES `daftar_akun` WRITE;
/*!40000 ALTER TABLE `daftar_akun` DISABLE KEYS */;
INSERT INTO `daftar_akun` VALUES (1,'Faza Fauzan','faza','Bandung','faza.fzn@gmail.com','1996-10-22','$2y$10$MqzrF3CfR6VwMHxcScn39.ZqcjUQoI7OupkGBjfqwxlJAQ3WewpUK','Writing'),(2,'Dwi Citra Yurista','citra','Bandung','dwi_citra@gmail.com','1992-11-30','$2y$10$9vVkD9EchdG7urY/a33DIOr3JI9iexegveSthUL68HyGU9r/BdKTK','Writing'),(4,'Muhammad Randy Ismail','randy','Jakarta','randy_ismail@gmail.com','1994-04-02','$2y$10$5aJczo5yoFMttdxwT1F/p.Xq5OY/ZvcU5Lt28LBpL73VHGG84A9Uu','Speaking');
/*!40000 ALTER TABLE `daftar_akun` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-20  6:48:21
