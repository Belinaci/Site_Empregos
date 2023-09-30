-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: athon
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id_clientes` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  `celular` char(15) COLLATE utf8mb4_general_ci NOT NULL,
  `escolaridade` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `carta` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `area_pretendida` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `area_atuar` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `exp_titulo` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_empresa` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_local` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_profissional` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (5,'Leonardo','Prestes','2005-04-14','Masculino','leonardorprestes@gmail.com','(15) 99772-5821','valor4','https://www.linkedin.com/in/leonardo-prestes-ba1311272/','Teste','valor6','Técnico de Infraestrutura','Farmacia','Fazfarma','Salto de Pirapora','Teste');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-25 10:24:48
