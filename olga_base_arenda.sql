-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: denis_base
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arenda`
--

DROP TABLE IF EXISTS `arenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arenda` (
  `id_arenda` int NOT NULL AUTO_INCREMENT,
  `name_sam` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  `number_gai` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  `price` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  `state` tinyint DEFAULT NULL,
  PRIMARY KEY (`id_arenda`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arenda`
--

LOCK TABLES `arenda` WRITE;
/*!40000 ALTER TABLE `arenda` DISABLE KEYS */;
INSERT INTO `arenda` VALUES (1,'Самокат 1','25396','100',1),(2,'Самокат 2','76606','120',1),(3,'Самокат 3','8176','90',1),(4,'Самокат 4','974','110',0),(5,'Самокат 5','39510','80',1),(6,'Самокат 6','94220','150',0),(7,'Самокат 7','13108','130',1),(8,'Самокат 8','70001','95',1),(9,'Самокат 9','48629','140',0),(10,'Самокат 10','86031','115',1);
/*!40000 ALTER TABLE `arenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 14:33:28
