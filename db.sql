-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: student_id
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Ineza','Bernice','Veronika','b80a9aed8af17118e51d4d0c2d7872ae26e2109e','female','bernineza@gmail.com'),(3,'Irakoze','Bella','Bella','da39a3ee5e6b4b0d3255bfef95601890afd80709','male','bella@gmail.com'),(7,'Mutoni','Glad','Gladx','438e22633933eabefe3b26ea49a070dbe2408df0','female','gladmutoni@gmail.com'),(8,'Uwimfura','Zamzam','Uwimfura','36e65423f0a8016144fcc9179baff2822a782abf','female','zamimfur@gmail.com'),(9,'Ishimwe','Natasha','Nat_tacha','cd3bb8638ac12505bbcab1241809dd6d8cf30eba','female','natash@gmail.com'),(10,'Shami','Nelson','Shami','d915f4e970e53654202c1cf5c62e60a7280a8219','male','nelson@gmail.com'),(16,'Manzi','Elson','Elson','88f22ddbb0c1c3382f6db6e6c3ad8ca9e023ee23','male','ishema@gmail.com'),(17,'Dusabe','Jean','Dusabe','4abaa1681ff1609f0e4e1dfc8fa9290abe79f44a','male','dusabe@gmail.com'),(18,'Ishimwe','Anne','Ishimwe','ce036b532f489dfd2c23eb27e6dbcb9a52734388','female','ishimwe@gmail.com'),(19,'Rudakemwa','Paulin','Dak_x','000f13f376a5bd39b48d5f5154613ff8cd86d162','male','paulin@gmail.com');
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

-- Dump completed on 2023-05-06  9:23:32
