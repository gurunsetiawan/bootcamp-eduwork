/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.13-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: bootcamp
-- ------------------------------------------------------
-- Server version	10.11.11-MariaDB-ubu2204

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `products_id` (`products_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES
(1,1,1,2,10000.00,'2025-07-28 09:35:37'),
(2,2,3,1,6000.00,'2025-07-28 09:35:37'),
(3,3,2,2,16000.00,'2025-07-28 09:35:37'),
(4,4,5,1,7000.00,'2025-07-28 09:35:37'),
(5,5,4,3,9000.00,'2025-07-28 09:35:37'),
(6,6,6,1,5000.00,'2025-07-28 09:35:37'),
(7,7,7,2,18000.00,'2025-07-28 09:35:37'),
(8,8,8,1,10000.00,'2025-07-28 09:35:37'),
(9,9,9,4,22000.00,'2025-07-28 09:35:37'),
(10,10,10,1,8500.00,'2025-07-28 09:35:37');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(1,'Roti Coklat',5000.00,'Roti',100,'Roti isi coklat lezat','roti_coklat.jpg','2025-07-28 09:35:30'),
(2,'Kopi Hitam',8000.00,'Minuman',50,'Kopi robusta tanpa gula','kopi_hitam.jpg','2025-07-28 09:35:30'),
(3,'Donat Keju',6000.00,'Roti',70,'Donat tabur keju parut','donat_keju.jpg','2025-07-28 09:35:30'),
(4,'Air Mineral',3000.00,'Minuman',200,'Air mineral botol 600ml','air_mineral.jpg','2025-07-28 09:35:30'),
(5,'Roti Sosis',7000.00,'Roti',60,'Roti isi sosis sapi','roti_sosis.jpg','2025-07-28 09:35:30'),
(6,'Teh Manis',5000.00,'Minuman',80,'Teh manis dalam gelas','teh_manis.jpg','2025-07-28 09:35:30'),
(7,'Brownies Mini',9000.00,'Roti',40,'Brownies coklat mini','brownies_mini.jpg','2025-07-28 09:35:30'),
(8,'Kopi Susu',10000.00,'Minuman',30,'Kopi dengan susu UHT','kopi_susu.jpg','2025-07-28 09:35:30'),
(9,'Roti Tawar',5500.00,'Roti',120,'Roti tawar 10 lembar','roti_tawar.jpg','2025-07-28 09:35:30'),
(10,'Muffin Coklat',8500.00,'Roti',45,'Muffin dengan topping coklat','muffin_coklat.jpg','2025-07-28 09:35:30');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Andi Saputra','andi@example.com','hashed_pw1','2025-07-28 09:35:23'),
(2,'Budi Santoso','budi@example.com','hashed_pw2','2025-07-28 09:35:23'),
(3,'Citra Dewi','citra@example.com','hashed_pw3','2025-07-28 09:35:23'),
(4,'Deni Kurniawan','deni@example.com','hashed_pw4','2025-07-28 09:35:23'),
(5,'Eka Lestari','eka@example.com','hashed_pw5','2025-07-28 09:35:23'),
(6,'Farhan Aziz','farhan@example.com','hashed_pw6','2025-07-28 09:35:23'),
(7,'Gina Rahmawati','gina@example.com','hashed_pw7','2025-07-28 09:35:23'),
(8,'Hadi Pratama','hadi@example.com','hashed_pw8','2025-07-28 09:35:23'),
(9,'Indah Maulani','indah@example.com','hashed_pw9','2025-07-28 09:35:23'),
(10,'Joko Widodo','joko@example.com','hashed_pw10','2025-07-28 09:35:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-28 16:36:58


INSERT INTO `users` (`email`) VALUES ('deni_kurniawan@example.com') WHERE id <= 4;

UPDATE `orders` SET `created_at` = '2025-07-28 09:35:37' WHERE `id` = 1;




