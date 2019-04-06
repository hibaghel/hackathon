-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: Hospital
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.10.2

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
-- Table structure for table `Donate_Blood`
--

DROP TABLE IF EXISTS `Donate_Blood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Donate_Blood` (
  `Name` char(40) DEFAULT NULL,
  `Blood_Group` char(5) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Sex` char(3) DEFAULT NULL,
  `Diseases` varchar(100) DEFAULT NULL,
  `Nearest_City` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Donate_Blood`
--

LOCK TABLES `Donate_Blood` WRITE;
/*!40000 ALTER TABLE `Donate_Blood` DISABLE KEYS */;
INSERT INTO `Donate_Blood` VALUES ('Hitesh','AB+','9090897654',19,'M','NOTA','Sikar'),('Jaideep','A+','8882221212',19,'M','NOTA','Bikaner'),('Himanshu','O','9678876534',19,'M','Diabetes','Ludhiana'),('Gaurav','A-','9101019283',19,'M','NOTA','Jaipur'),('Vaishali','A+','8882021212',19,'F','Arthritis','Bikaner'),('Deepshikha','A-','8678876534',19,'F','Big Teeth','Jaipur'),('Khyathi','B+','9001019283',19,'F','NOTA','Hyderabad'),('Manas','B-','8882029212',20,'M','NOTA','Vijyawada'),('KTM','AB-','8678876531',19,'F','NOTA','Mumbai'),('Abhishek','B+','9001011283',19,'M','NOTA','Hyderabad');
/*!40000 ALTER TABLE `Donate_Blood` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-06 23:11:38
