-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: ezproxy_config
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `stanzas`
--

DROP TABLE IF EXISTS `stanzas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stanzas` (
  `title` varchar(200) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `additional_directives` varchar(2000) DEFAULT NULL,
  `time_updated` varchar(100) DEFAULT NULL,
  `removed` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stanzas`
--

LOCK TABLES `stanzas` WRITE;
/*!40000 ALTER TABLE `stanzas` DISABLE KEYS */;
INSERT INTO `stanzas` VALUES ('CNN','http://www.cnn.com','DomainJavascript cnn.com, HostJavascript www.cnn.com','October 23, 2016 05:40:27 PM',1),('Academia','http://www.academiatesting.nl','','October 27, 2016 08:43:49 PM',1),('Access Engineering','http://accessengineeringlibrary.com/','DomainJavascript accessengineeringlibrary.com, DomainJavascript books.mcgraw-hill.com, Host www.accessengineeringlibrary.com','October 27, 2016 10:56:58 PM',0),('Acland Anatomy','http://www.aclandanatomy.com','DomainJavascript aclandanatomy.com','October 27, 2016 11:55:55 PM',0),('ALA Journals','https://journals.ala.org/','HostJavascript https://journals.ala.org','October 27, 2016 11:43:42 PM',1),('CPA Canada ','http://edu.knotia.ca/ ','DomainJavascript knotia.ca , HostJavascript www.knotia.ca ','October 27, 2016 11:55:05 PM',0);
/*!40000 ALTER TABLE `stanzas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-02 23:00:48
