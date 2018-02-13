-- MySQL dump 10.13  Distrib 5.6.12, for Linux (x86_64)
--
-- Host: localhost    Database: sdeyaml
-- ------------------------------------------------------
-- Server version	5.6.12

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
-- Table structure for table `invContrabandTypes`
--

DROP TABLE IF EXISTS `invContrabandTypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invContrabandTypes` (
  `factionID` int(11) NOT NULL,
  `typeID` int(11) NOT NULL,
  `standingLoss` double DEFAULT NULL,
  `confiscateMinSec` double DEFAULT NULL,
  `fineByValue` double DEFAULT NULL,
  `attackMinSec` double DEFAULT NULL,
  PRIMARY KEY (`factionID`,`typeID`),
  KEY `ix_invContrabandTypes_typeID` (`typeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invContrabandTypes`
--

LOCK TABLES `invContrabandTypes` WRITE;
/*!40000 ALTER TABLE `invContrabandTypes` DISABLE KEYS */;
INSERT INTO `invContrabandTypes` VALUES (500001,3721,0.2,-1,5,1.1),(500001,3729,0.1,0.4,2,1.1),(500001,9844,0.2,-1,5,1.1),(500001,17796,0,1,0,1.1),(500002,3721,0.5,-1,10,1.1),(500002,3729,0.05,0.8,1.1,1.1),(500002,17796,0,1,0,1.1),(500003,3727,0.05,0.6,1.2,1.1),(500003,9844,0.1,0.5,3,1.1),(500003,12478,0.3,-1,10,1.1),(500004,3721,0.3,-1,8,1.1),(500004,3729,0.15,0.4,2.5,1.1),(500004,11855,0.05,0.8,1.2,1.1),(500004,17796,0,1,0,1.1),(500005,3713,0.2,0.4,4.5,1.1),(500005,3721,0.2,-1,5,1.1),(500005,3727,0.1,0.5,3,1.1),(500005,3729,0.05,0.7,2,1.1),(500006,3721,0,-1,8,1.1),(500006,3729,0,0.4,2.5,1.1),(500006,17796,0,1,0,1.1),(500007,3727,0.05,0.6,1.2,1.1),(500007,9844,0.05,0.6,1.5,1.1),(500007,12478,0.4,-1,10,1.1),(500008,3727,0.05,0.5,1.2,1.1),(500008,9844,0.15,0.3,4,1.1),(500008,12478,0.2,-1,7,1.1),(500009,3721,0.15,-1,4,1.1),(500009,3729,0.05,0.2,1.5,1.1),(500009,11855,0.05,0.3,1.2,1.1),(500013,17796,0,1,0,1.1),(500014,3721,0.2,-1,5,1.1),(500014,3729,0.05,1.1,1.2,1.1),(500014,9844,0.05,0.4,1.1,1.1),(500014,11855,0.05,0.2,1.2,1.1),(500014,17796,0,1,0,1.1),(500015,3721,0.4,-1,9,1.1),(500015,3729,0.05,-1,1.1,1.1),(500016,3721,0.3,-1,6,1.1),(500016,3729,0.1,-1,2,1.1),(500016,11855,0.05,-1,1.2,1.1),(500016,17796,0,1,0,1.1),(500017,3713,0.05,0.5,1.5,1.1),(500017,3721,0.3,-1,8,1.1),(500017,3727,0.05,0.4,2,1.1),(500017,3729,0.15,-1,2.5,1.1),(500017,17796,0,1,0,1.1),(500018,3721,0.2,-1,5,1.1),(500018,3729,0.05,-1,2,1.1),(500018,9844,0.1,-1,3,1.1);
/*!40000 ALTER TABLE `invContrabandTypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-05 17:36:22
