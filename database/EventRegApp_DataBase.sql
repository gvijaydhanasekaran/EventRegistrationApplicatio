CREATE DATABASE  IF NOT EXISTS `eventreg` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eventreg`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: eventreg
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL,
  `description` longtext,
  `createdBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'UG','',1,'2015-04-18 00:54:06',1,'2015-04-18 00:57:34','D'),(2,'UG','',1,'2015-04-18 01:01:48',1,'2015-04-18 01:46:04','A'),(3,'pg','',1,'2015-04-18 01:52:38',1,'2015-04-19 23:20:21','I');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseId` int(11) NOT NULL,
  `eventname` varchar(200) NOT NULL,
  `eventtime` time DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `prize1` int(11) DEFAULT NULL,
  `prize2` int(11) DEFAULT NULL,
  `prize3` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,0,'Paper Presentation',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,0,'Quiz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,0,'E-Waste & Marketing',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,0,'Software Contest',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,0,'Paper Presentation',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,0,'Quiz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,0,'E-Waste & Marketing',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,0,'Software Contest',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,0,'X-Skill',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,2,'event name','03:00:00',100,NULL,NULL,NULL,1,'2015-04-18 01:27:56',1,'2015-04-19 23:18:23','I'),(11,3,'event name 1','11:30:00',100,NULL,NULL,NULL,1,'2015-04-18 01:47:22',1,'2015-04-19 23:19:09','A');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institutename` varchar(200) NOT NULL,
  `instituteplace` varchar(200) DEFAULT NULL,
  `incharge` varchar(200) DEFAULT NULL,
  `contactno` varchar(15) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A',
  PRIMARY KEY (`id`),
  UNIQUE KEY `collegename_UNIQUE` (`institutename`),
  KEY `fk_sacapp_collegeregistration_1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institute`
--

LOCK TABLES `institute` WRITE;
/*!40000 ALTER TABLE `institute` DISABLE KEYS */;
INSERT INTO `institute` VALUES (1,'Ayya Nadar Janaki Ammal College CS&IT(UG) &ITM(PG)','Sivakasi','','',NULL,'0000-00-00 00:00:00',NULL,'0000-00-00 00:00:00','A'),(2,'Ayya Nadar Janaki Ammal College','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Ayya Nadar Janaki Ammal College (CA)','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Devanga Arts College','Aruppukottai',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Standard Fireworks Rajaratnam College for Women','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Sri SRNM College','Sattur',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'SRI S.RAMASAMY NAIDU MEMORIAL   COLLEGE','SATTUR',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Rajusâ€™college','Rajapalayam',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'SRI KALISWARI COLLEGE-(IT)','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'SRI KALISWARI COLLEGE-(CS)','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'SRI KALISWARI COLLEGE-3','Sivakasi',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'V. V. Vanniaperumal College','Virudhunagar.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Yadava College',' Madurai.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'CPA College','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'V.V.V.COLLEGE (COMPUTERAPPLICATION)','VIRUDHUNAGAR',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'college 2','Place','','',1,'2015-04-18 01:16:57',1,'2015-04-19 15:17:38','A');
/*!40000 ALTER TABLE `institute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(200) NOT NULL,
  `collegeId` int(11) NOT NULL,
  `courseId` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `fk_sacapp_student_1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'N.Renuga Devi',1,NULL,NULL,NULL,NULL,NULL,NULL),(2,'J. Saranya',1,NULL,NULL,NULL,NULL,NULL,NULL),(3,'S.Madhu Bala',1,NULL,NULL,NULL,NULL,NULL,NULL),(4,'B.Maheswari',1,NULL,NULL,NULL,NULL,NULL,NULL),(5,'M.Kokila',1,NULL,NULL,NULL,NULL,NULL,NULL),(6,'P.Pavithra',1,NULL,NULL,NULL,NULL,NULL,NULL),(7,'S.Ramasubramaniyan',1,NULL,NULL,NULL,NULL,NULL,NULL),(8,'R.Giridharan',1,NULL,NULL,NULL,NULL,NULL,NULL),(9,'A.Lakshmi Priya',1,NULL,NULL,NULL,NULL,NULL,NULL),(10,'S.Jagathamani',1,NULL,NULL,NULL,NULL,NULL,NULL),(11,'K.Sugapriya',1,NULL,NULL,NULL,NULL,NULL,NULL),(12,'D.Jothi',1,NULL,NULL,NULL,NULL,NULL,NULL),(13,'M.Samina Shajithaa',1,NULL,NULL,NULL,NULL,NULL,NULL),(14,'M.Saraswathi',2,NULL,NULL,NULL,NULL,NULL,NULL),(15,'B.Arun Prakash',2,NULL,NULL,NULL,NULL,NULL,NULL),(16,'M.Logesh',2,NULL,NULL,NULL,NULL,NULL,NULL),(17,'P.Muralitharan',2,NULL,NULL,NULL,NULL,NULL,NULL),(18,'J.K.Prasad',2,NULL,NULL,NULL,NULL,NULL,NULL),(19,'G.Shyam Anand',2,NULL,NULL,NULL,NULL,NULL,NULL),(20,'B.Srinath',2,NULL,NULL,NULL,NULL,NULL,NULL),(21,'S.Venkatesh',2,NULL,NULL,NULL,NULL,NULL,NULL),(22,'A.Mani Mehalai',2,NULL,NULL,NULL,NULL,NULL,NULL),(23,'M.Kartheeswari',2,NULL,NULL,NULL,NULL,NULL,NULL),(24,'N.Righana Begam',2,NULL,NULL,NULL,NULL,NULL,NULL),(25,'S.Muthu Kumar',2,NULL,NULL,NULL,NULL,NULL,NULL),(26,'E.A.Prabhakaran',2,NULL,NULL,NULL,NULL,NULL,NULL),(27,'M.Ganesh Kumar',3,NULL,NULL,NULL,NULL,NULL,NULL),(28,'P.Sankareswaran',3,NULL,NULL,NULL,NULL,NULL,NULL),(29,'M.Ajith',3,NULL,NULL,NULL,NULL,NULL,NULL),(30,'M.Deepak rajan',3,NULL,NULL,NULL,NULL,NULL,NULL),(31,'C.Saravanan',3,NULL,NULL,NULL,NULL,NULL,NULL),(32,'A.Saravana Kumar',3,NULL,NULL,NULL,NULL,NULL,NULL),(33,'M.Dinesh Kumar',3,NULL,NULL,NULL,NULL,NULL,NULL),(34,'V.Chandrika',3,NULL,NULL,NULL,NULL,NULL,NULL),(35,'P.Mahalakshmi',3,NULL,NULL,NULL,NULL,NULL,NULL),(36,'K.Muthu Karpagam',3,NULL,NULL,NULL,NULL,NULL,NULL),(37,'K.Muthu Selvi',3,NULL,NULL,NULL,NULL,NULL,NULL),(38,'K.Kalaiyarasi',3,NULL,NULL,NULL,NULL,NULL,NULL),(39,'B.Malathi',3,NULL,NULL,NULL,NULL,NULL,NULL),(40,'T.Divya Bharathi',4,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Tharika',4,NULL,NULL,NULL,NULL,NULL,NULL),(42,'Arumugachelvi',4,NULL,NULL,NULL,NULL,NULL,NULL),(43,'Devika',4,NULL,NULL,NULL,NULL,NULL,NULL),(44,'Muthukumari',4,NULL,NULL,NULL,NULL,NULL,NULL),(45,'R.Gracelin',5,NULL,NULL,NULL,NULL,NULL,NULL),(46,'M.Divya Karunya',5,NULL,NULL,NULL,NULL,NULL,NULL),(47,'R.Alagulakshmi',5,NULL,NULL,NULL,NULL,NULL,NULL),(48,'G.Saraswathy',5,NULL,NULL,NULL,NULL,NULL,NULL),(49,'A.Christa Roshan',5,NULL,NULL,NULL,NULL,NULL,NULL),(50,'A.Kalyani Sundari',5,NULL,NULL,NULL,NULL,NULL,NULL),(51,'M.A.Nazeera Aafrin',5,NULL,NULL,NULL,NULL,NULL,NULL),(52,'S.Pavithra',5,NULL,NULL,NULL,NULL,NULL,NULL),(53,'S.Jaya Latha',5,NULL,NULL,NULL,NULL,NULL,NULL),(54,'R.Nirmallakshmi',5,NULL,NULL,NULL,NULL,NULL,NULL),(55,'M.Muthulakshmi',5,NULL,NULL,NULL,NULL,NULL,NULL),(56,'A.Karthiga',5,NULL,NULL,NULL,NULL,NULL,NULL),(57,'M.Nandhini',5,NULL,NULL,NULL,NULL,NULL,NULL),(58,'P.LakshmiPrabha',6,NULL,NULL,NULL,NULL,NULL,NULL),(59,'G.Nithyasri',6,NULL,NULL,NULL,NULL,NULL,NULL),(60,'S.Minipriya',6,NULL,NULL,NULL,NULL,NULL,NULL),(61,'R.Sankareswari',6,NULL,NULL,NULL,NULL,NULL,NULL),(62,'S.RajeshKannan',6,NULL,NULL,NULL,NULL,NULL,NULL),(63,'S.Manikam',6,NULL,NULL,NULL,NULL,NULL,NULL),(64,'R.PraveenRaJ',6,NULL,NULL,NULL,NULL,NULL,NULL),(65,'P.SriramBalaji',7,NULL,NULL,NULL,NULL,NULL,NULL),(66,'Gowtham',7,NULL,NULL,NULL,NULL,NULL,NULL),(67,'V.NaveenSelvam.',1,2,NULL,NULL,NULL,NULL,'A'),(68,'K.Madasamy.',7,NULL,NULL,NULL,NULL,NULL,NULL),(69,'R.ManiRaj.',7,NULL,NULL,NULL,NULL,NULL,NULL),(70,'P.Prabhaharan.',7,NULL,NULL,NULL,NULL,NULL,NULL),(71,'A.Renuga.',7,NULL,NULL,NULL,NULL,NULL,NULL),(72,'K.Gayathri.',7,NULL,NULL,NULL,NULL,NULL,NULL),(73,'S.Nandha Kumar',8,NULL,NULL,NULL,NULL,NULL,NULL),(75,'A.raja Bhuvanesh',8,NULL,NULL,NULL,NULL,NULL,NULL),(76,'S.Sudalai Easwaran',8,NULL,NULL,NULL,NULL,NULL,NULL),(77,'M.Alex Pandian',8,NULL,NULL,NULL,NULL,NULL,NULL),(78,'P.Rajamani',8,NULL,NULL,NULL,NULL,NULL,NULL),(79,'M.Mahesh',8,NULL,NULL,NULL,NULL,NULL,NULL),(80,'B.Thalaimalaipandi',8,NULL,NULL,NULL,NULL,NULL,NULL),(81,'P.Gopikrishnan',8,NULL,NULL,NULL,NULL,NULL,NULL),(82,'A.Ajitha',9,NULL,NULL,NULL,NULL,NULL,NULL),(83,'B.Meena',9,NULL,NULL,NULL,NULL,NULL,NULL),(84,'J.Suganya Mary',9,NULL,NULL,NULL,NULL,NULL,NULL),(85,'B.Pratheesa',9,NULL,NULL,NULL,NULL,NULL,NULL),(86,'G.Kartheeswaran',9,NULL,NULL,NULL,NULL,NULL,NULL),(87,'K.Balaji',9,NULL,NULL,NULL,NULL,NULL,NULL),(88,'K.SivagurunathanÂ Â Â Â Â Â Â Â Â Â Â  ',10,NULL,NULL,NULL,NULL,NULL,NULL),(89,'E.Vigneshwaran',10,NULL,NULL,NULL,NULL,NULL,NULL),(90,'M.Ganesh kumar',10,NULL,NULL,NULL,NULL,NULL,NULL),(91,'S.Suresh kumar',10,NULL,NULL,NULL,NULL,NULL,NULL),(92,'G.Arun kumar',10,NULL,NULL,NULL,NULL,NULL,NULL),(93,'K.Jeeva',10,NULL,NULL,NULL,NULL,NULL,NULL),(94,'M.Velmurugan',10,NULL,NULL,NULL,NULL,NULL,NULL),(95,'N.Deivendran',11,NULL,NULL,NULL,NULL,NULL,NULL),(96,'R.Melvin Jose Thomas',11,NULL,NULL,NULL,NULL,NULL,NULL),(97,'S.Ponnusamy',11,NULL,NULL,NULL,NULL,NULL,NULL),(98,'R.SaravanaKumar',11,NULL,NULL,NULL,NULL,NULL,NULL),(99,'I.Samuvel',11,NULL,NULL,NULL,NULL,NULL,NULL),(100,'K.P.P.Periasamy @Pradeep',11,NULL,NULL,NULL,NULL,NULL,NULL),(101,'R.Arun',11,NULL,NULL,NULL,NULL,NULL,NULL),(102,'S. Sahana',12,NULL,NULL,NULL,NULL,NULL,NULL),(103,'S. Siva Sundari',12,NULL,NULL,NULL,NULL,NULL,NULL),(104,'K. Poorani',12,NULL,NULL,NULL,NULL,NULL,NULL),(105,'S. Shraesta',12,NULL,NULL,NULL,NULL,NULL,NULL),(106,'V. Pourna Priya',12,NULL,NULL,NULL,NULL,NULL,NULL),(107,'K. Monica',12,NULL,NULL,NULL,NULL,NULL,NULL),(109,'R. Aishwarya',12,NULL,NULL,NULL,NULL,NULL,NULL),(110,'B. Raji',12,NULL,NULL,NULL,NULL,NULL,NULL),(111,'B. Nandhini',12,NULL,NULL,NULL,NULL,NULL,NULL),(112,'P. Thiruselvi',12,NULL,NULL,NULL,NULL,NULL,NULL),(113,'N. Abenaya Abarna',12,NULL,NULL,NULL,NULL,NULL,NULL),(114,'P. Shri Vidhya Lakshmi',12,NULL,NULL,NULL,NULL,NULL,NULL),(115,'R.Richardson',13,NULL,NULL,NULL,NULL,NULL,NULL),(116,'M.R.Jothi Babu',13,NULL,NULL,NULL,NULL,NULL,NULL),(117,' M.Ranjith Kumar',13,NULL,NULL,NULL,NULL,NULL,NULL),(118,'K.Sabari Girinathan',13,NULL,NULL,NULL,NULL,NULL,NULL),(119,'M.Siva Kumar',13,NULL,NULL,NULL,NULL,NULL,NULL),(122,'D.Sindhu',4,NULL,NULL,NULL,NULL,NULL,NULL),(123,'A.Rajaprabhu',10,NULL,NULL,NULL,NULL,NULL,NULL),(124,'S.Karthik',10,NULL,NULL,NULL,NULL,NULL,NULL),(125,'M.Karuppasamy Pandian',10,NULL,NULL,NULL,NULL,NULL,NULL),(126,'M.Athikesavan',10,NULL,NULL,NULL,NULL,NULL,NULL),(127,'P.Vasanthi',15,NULL,NULL,NULL,NULL,NULL,NULL),(128,'U.Divya Rani',15,NULL,NULL,NULL,NULL,NULL,NULL),(129,'C.Padmini',15,NULL,NULL,NULL,NULL,NULL,NULL),(130,'S.Divya Lakshmi',15,NULL,NULL,NULL,NULL,NULL,NULL),(131,'C.Yuva Lakshmi',15,NULL,NULL,NULL,NULL,NULL,NULL),(132,'K.Anu Prabha',15,NULL,NULL,NULL,NULL,NULL,NULL),(133,'R.Sinduja',15,NULL,NULL,NULL,NULL,NULL,NULL),(134,'J.Mareeswaran',7,NULL,NULL,NULL,NULL,NULL,NULL),(135,'M.Karthiswari',15,NULL,NULL,NULL,NULL,NULL,NULL),(136,'T.C.Divya Nirosha',15,NULL,NULL,NULL,NULL,NULL,NULL),(137,'R.A.Suganya',15,NULL,NULL,NULL,NULL,NULL,NULL),(138,'S.Suganya',15,NULL,NULL,NULL,NULL,NULL,NULL),(139,'M.Balaji',8,NULL,NULL,NULL,NULL,NULL,NULL),(140,'student 1',16,2,NULL,NULL,1,'2015-04-19 15:23:49','A'),(141,'student 2',1,2,1,'2015-04-19 15:24:15',NULL,NULL,'A'),(142,'student 1',16,2,1,'2015-04-19 23:05:43',NULL,NULL,'A');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentevents`
--

DROP TABLE IF EXISTS `studentevents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studentevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` int(11) DEFAULT NULL,
  `eventId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentevents`
--

LOCK TABLES `studentevents` WRITE;
/*!40000 ALTER TABLE `studentevents` DISABLE KEYS */;
INSERT INTO `studentevents` VALUES (6,6,3),(51,45,1),(52,46,1),(53,47,2),(54,48,2),(55,49,3),(56,50,3),(57,51,4),(58,52,5),(60,54,6),(61,55,6),(62,56,8),(63,57,9),(64,53,5),(153,41,2),(154,40,2),(155,122,4),(156,43,3),(157,42,3),(158,44,8),(161,58,1),(162,59,1),(163,60,2),(164,61,2),(165,62,3),(166,63,3),(167,64,4),(170,86,2),(171,87,2),(172,85,4),(173,84,3),(174,82,1),(175,88,2),(176,89,2),(177,90,3),(178,91,3),(179,94,4),(180,92,1),(181,93,1),(183,15,1),(184,16,2),(185,17,2),(186,18,3),(187,19,3),(188,20,4),(189,123,5),(190,123,6),(191,124,6),(194,126,8),(195,14,1),(196,125,5),(197,127,2),(198,128,2),(199,129,1),(200,65,1),(201,65,3),(202,66,1),(203,130,1),(204,67,2),(205,131,3),(207,132,3),(208,133,4),(209,134,4),(210,135,6),(211,136,6),(212,137,8),(213,138,9),(214,68,2),(215,68,3),(216,115,1),(217,115,3),(218,116,1),(219,117,2),(220,117,3),(221,118,2),(222,119,4),(227,83,1),(228,83,3),(229,73,2),(230,75,2),(231,76,3),(233,77,4),(234,139,3),(235,78,6),(236,79,6),(237,80,8),(238,81,9),(239,69,6),(240,70,6),(241,71,8),(242,72,9),(243,102,1),(244,103,1),(245,104,2),(246,105,2),(247,106,3),(248,107,3),(250,109,5),(251,110,5),(252,111,6),(253,112,6),(254,113,8),(255,114,9),(256,8,5),(257,27,1),(258,9,5),(259,28,1),(260,29,2),(261,10,6),(262,30,2),(263,32,3),(265,11,6),(266,33,4),(267,12,8),(268,34,5),(269,13,9),(270,35,5),(271,36,6),(272,37,6),(274,38,8),(276,2,1),(277,39,9),(278,1,1),(279,3,2),(280,4,2),(281,21,5),(282,5,3),(284,22,5),(285,7,4),(286,95,1),(287,23,6),(288,96,1),(289,24,6),(290,97,2),(291,25,8),(292,98,2),(293,26,9),(294,99,3),(295,100,3),(296,101,4),(297,31,3);
/*!40000 ALTER TABLE `studentevents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `displayname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','G.Vijay','',NULL,'2015-04-17 08:04:40',1,'2015-04-19 23:53:58','A'),(2,'admin@tamilbay.co.uk','e2a313190dee41fee1e50bfde54d42de','hai','',NULL,'0000-00-00 00:00:00',1,'2015-04-18 00:33:38','D'),(3,'admin@tamilbay.co.uk','e2a313190dee41fee1e50bfde54d42de','hai',NULL,1,'2015-04-18 00:45:23',NULL,NULL,'I');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-20 21:03:42
