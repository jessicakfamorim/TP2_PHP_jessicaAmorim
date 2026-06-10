CREATE DATABASE  IF NOT EXISTS `simpa_baker` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `simpa_baker`;
-- MySQL dump 10.13  Distrib 8.0.45, for macos15 (arm64)
--
-- Host: localhost    Database: simpa_baker
-- ------------------------------------------------------
-- Server version	9.7.0

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '4940abb8-3e36-11f1-8a29-e69845920e8f:1-2301';

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Bolos Caseiros'),(2,'Massas'),(3,'Recheios e Coberturas'),(4,'Brigadeiros'),(5,'Brownies'),(6,'Cookies'),(7,'Sobremesas'),(8,'Cupcakes'),(9,'Decoração'),(10,'TESTE editado');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receitas`
--

DROP TABLE IF EXISTS `receitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receitas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredientes` text COLLATE utf8mb4_general_ci NOT NULL,
  `modo_preparo` text COLLATE utf8mb4_general_ci NOT NULL,
  `tempo_preparo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rendimento` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `origem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria_id` int DEFAULT NULL,
  `utilizador_id` int DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  KEY `fk_receitas_utilizador` (`utilizador_id`),
  CONSTRAINT `fk_receitas_utilizador` FOREIGN KEY (`utilizador_id`) REFERENCES `utilizadores` (`id`),
  CONSTRAINT `receitas_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (1,'Bolo de Cenoura','3 ovos (150g)\r\n    240ml de óleo\r\n    220g de açucar\r\n    270g de cenoura\r\n    250g de farinha de trigo\r\n    15g de fermento em pó','No liquidificador você irá bater os ovos, óleo,\r\naçúcar e a cenoura em pedaços pequenos.\r\nBata até ficar homogêneo e transfira a mistura\r\npara uma vasilha, por cima da mistura peneire a\r\nfarinha de trigo e mexa delicadamente até\r\nenvolver tudo, por último acrescente o fermento\r\nem pó.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)','35/40 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-de-cenoura.jpg'),(2,'Bolo de Limão Siciliano','4 ovos (200g)\n200ml de óleo\n150ml de água\n270g de açúcar\n75g limão siciliano\n100g de mirtilo\n300g de farinha de trigo\n15g de fermento em pó','No liquidificador você irá bater os ovos, óleo,\naçúcar, água e o limão siciliano.\nBata até ficar homogêneo e transfira a mistura\npara uma vasilha, por cima da mistura peneire\na farinha de trigo e mexa delicadamente até\nenvolver tudo, por último acrescente o\nfermento em pó.\nPré-aquecer o forno por 10 minutos.\nLeve a massa para assar (180°c/350°f)\nTempo médio de forno: 40/45 minutos ou até\nfazer o teste do palito.','40/45 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'tarte-limao.jpg'),(3,'Bolo de Chocolate','4 ovos (200g)\r\n200ml de óleo\r\n170ml de leite integral\r\n220g de açúcar\r\n45g de cacau em pó 100%\r\n150g de maçã fuji\r\n250g de farinha de trigo\r\n10g de fermento em pó\r\n5g de bicarbonato de sódio','No liquidificador você irá bater os ovos, óleo,\r\naçúcar, leite integral, cacau em pó e a maçã em\r\npedaços pequenos.\r\nBata até ficar homogêneo e transfira a mistura\r\npara uma vasilha, por cima da mistura peneire a\r\nfarinha de trigo e mexa delicadamente até\r\nenvolver tudo, por último acrescente o fermento\r\nem pó e o bicarbonato de sódio.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)\r\nTempo médio de forno: 40/45 minutos ou até\r\nfazer o teste do palito.','40/45 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-chocolate.jpg'),(4,'Bolo de Ninho','4 ovos (200g)\r\n200ml de óleo\r\n200ml de água\r\n220g de açúcar\r\n90g de leite ninho\r\n250g de farinha de trigo\r\n15g de fermento em pó','No liquidificador você irá bater os ovos, óleo,\r\naçúcar, água , e o leite ninho.\r\nBata até ficar homogêneo e transfira a mistura\r\npara uma vasilha, por cima da mistura peneire\r\na farinha de trigo e mexa delicadamente até\r\nenvolver tudo, por último acrescente o\r\nfermento em pó.\r\n\r\nPré-aquecer o forno por 10 minutos\r\nLeve a massa para assar (180°c/350°f)\r\nTempo médio de forno: 35/45 minutos ou até\r\nfazer o teste do palito.','35/45 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-ninho.jpeg'),(5,'Bolo de Churros','4 ovos (200g)\r\n200ml de óleo\r\n200ml de leite integral\r\n220g de açúcar\r\n10g canela\r\n250g de farinha de trigo\r\n15g de fermento em pó','No liquidificador você irá bater os ovos, óleo,\r\naçúcar, leite integral e a canela.\r\nBata até ficar homogêneo e transfira a mistura\r\npara uma vasilha, por cima da mistura peneire\r\na farinha de trigo e mexa delicadamente até\r\nenvolver tudo, por último acrescente o\r\nfermento em pó.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f).\r\nTempo médio de forno: 40/45 minutos ou até\r\nfazer o teste do palito.','40/45 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-churros.jpeg'),(6,'Bolo de Maracujá','3 ovos (150g)\r\n100ml de óleo\r\n60ml de água\r\n220g de açúcar\r\n155g de polpa de maracujá (batida e coada)\r\n60g de leite em pó integral\r\n250g de farinha de trigo\r\n15g de fermento em pó','No liquidificador você irá bater os ovos, óleo,\r\naçúcar, suco de maracujá, água, e o leite em pó.\r\nBata até ficar homogêneo e transfira a mistura\r\npara uma vasilha, por cima da mistura peneire a\r\nfarinha de trigo e mexa delicadamente até\r\nenvolver tudo, por último, acrescente o fermento\r\nem pó.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f).\r\nTempo médio de forno: 40/45 minutos ou até\r\nfazer o teste do palito.','40/45 minutos','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-maracuja.jpeg'),(7,'Bolo de Oreo','3 ovos (150g)\r\n    200ml de óleo\r\n    200ml de água\r\n    220g de açúcar\r\n    50g de leite ninho\r\n    250g de farinha de trigo\r\n    100g de biscoito Oreo\r\n    15g de fermento em pó','No liquidificador você irá bater os ovos, óleo, açúcar e a cenoura em pedaços pequenos. Bata até ficar homogêneo e transfira a mistura para uma vasilha, por cima da mistura peneire a farinha de trigo e mexa delicadamente até envolver tudo, por último acrescente o fermento em pó.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)','35/45 min','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-oreo.jpeg'),(10,'Bolo Formigueiro','3 ovos (150g)\r\n200ml de óleo\r\n200ml de água\r\n220g de açúcar\r\n50g de leite ninho\r\n250g de farinha de trigo\r\n70g de granulado\r\n15g de fermento em pó','No liquidificador você irá bater os ovos, óleo, açúcar, água ,eoleite ninho.\r\nBata até ficar homogêneo e transfira a mistura para uma vasilha, por cima da mistura peneire a farinha de trigo e mexa delicadamente até envolver tudo, acrescente o granulado por cima da mistura e mexa. Por último coloque o fermento em pó.\r\nPré-aquecer o forno por 10 minutos\r\nLeve a massa para assar (180°c/350°f)\r\nTempo médio de forno: 35/45 minutos ou até fazer o teste do palito.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)','35/45 min','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-formigueiro.jpeg'),(11,'Bolo Ferrero','4 ovos (200g)\r\n200ml de óleo\r\n170ml de leite integral\r\n220g de açúcar\r\n65g de cacau em pó 100%\r\n150g de maçã fuji\r\n250g de farinha de trigo\r\n40g de avela (picada)\r\n10g de fermento em pó\r\n5g de bicarbonato de sódio','No liquidificador você irá bater os ovos, óleo, açúcar, leite integral, cacau em pó e a maçã em pedaços pequenos. Bata até ficar homogêneo e transfira a mistura para uma vasilha, por cima da mistura peneire a farinha de trigo e mexa delicadamente até envolver tudo, por último acrescente o fermento em pó e o bicarbonato de sódio.\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)\r\nTempo médio de forno: 40/45 minutos ou até fazer o teste do palito.\r\n\r\nPré-aquecer o forno por 10 minutos.\r\nLeve a massa para assar (180°c/350°f)','35/45 min','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-ferrero.jpg'),(12,'Bolo Paçoca','3 ovos\r\n150ml de óleo\r\n270ml de leite\r\n240g açúcar\r\n100g de paçoquinha\r\n250g de farinha de trigo\r\n15g de fermento','Bata no liquidificador: os ovos, o óleo, o leite, o açúcar e a paçoquinha até formar uma mistura homogênea. Transfira a mistura do liquidificador para uma vasilha grande, acrescente a farinha de trigo, o fermento e misture com o auxílio de um fouet, finalize com o fermento e misture.\r\nPré-aquecer o forno por 10 minutos\r\nLeve a massa para assar (180°c/350°f)\r\nTempo médio de forno: 35/40 minutos ou até\r\nfazer o teste do palito.','35/40 min','2 formas russas de 18cm','Titi Risito | @sweetrisito',1,NULL,'bolo-pacoca.jpeg'),(14,'teste2','teste2','teste2','teste2','teste2','teste2',4,NULL,'brigadeiro.jpg');
/*!40000 ALTER TABLE `receitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilizadores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizadores`
--

LOCK TABLES `utilizadores` WRITE;
/*!40000 ALTER TABLE `utilizadores` DISABLE KEYS */;
INSERT INTO `utilizadores` VALUES (1,'Jessica','admin@simpa.pt','$2y$12$pE9Aek4XSOvpXHz5k1YnZ.qPEgqcN9xpgENY3YxwBWWmumkmCY.DO'),(2,'Cleiton','cleiton@gmail.com','$2y$10$qETNfRPnRx9wH/wAGySXMOXxpw8ZA7ZDixCenj/QlmBcA04bJZEjS'),(3,'Deborah','deborah@gmal.com','$2y$10$/eTnfaqI8Ob3q1.R9/yjKuze4sD9NIz7YVw2lzyxdb5q53o36h7hC'),(6,'Luana','luana@gmail.com','$2y$10$4WbCTuCkEMCfwVjjdFViwOHTuIc7wOhIBRe/ZJ7OSqg3fZt2zGrMa'),(8,'Bia','bia@gmail.com','$2y$10$T83r3FTBfa/P0Dkx5IbL1OPrGpDCx/dho5aEQ8Gyci5S/LT6Gu/Ea'),(9,'teste','teste@gmail.com','$2y$10$ZzsiHdSoHa10NriSNue7KemPsPowh4501K/OAzVK8UxJnjqLQuhXq');
/*!40000 ALTER TABLE `utilizadores` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-10 19:07:17
