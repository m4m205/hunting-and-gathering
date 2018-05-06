CREATE DATABASE  IF NOT EXISTS `connected` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `connected`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: connected
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `sender_name` varchar(45) DEFAULT NULL,
  `id_recipient` int(11) DEFAULT NULL,
  `recipient_name` varchar(45) DEFAULT NULL,
  `status` varchar(2) DEFAULT '1',
  `text_message` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_message`),
  KEY `fk_table1_users_idx` (`id_user`),
  CONSTRAINT `fk_table1_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,8,NULL,10,NULL,'1','first message ever','2017-08-29 00:00:00','2017-08-29 00:00:00'),(2,8,NULL,11,NULL,'1','this is the second message','2017-08-29 00:00:00','2017-08-29 00:00:00'),(3,8,NULL,7,NULL,'1','3 message','2017-08-29 00:00:00','2017-08-29 00:00:00'),(4,8,NULL,9,NULL,'1','44444 message','2017-08-29 00:00:00','2017-08-29 00:00:00'),(5,13,NULL,9,NULL,'1','message for fun','2017-08-30 00:00:00','2017-08-30 00:00:00'),(6,13,NULL,8,NULL,'1','Hey test how are you','2017-08-30 00:00:00','2017-08-30 00:00:00'),(7,13,NULL,8,NULL,'1','miss you ......','2017-08-30 00:00:00','2017-08-30 00:00:00'),(8,13,NULL,8,NULL,'2','hahahahhahahaha','2017-08-30 00:00:00','2017-08-30 00:00:00'),(9,8,NULL,13,NULL,'1','ierrghiperhgoJRGOjwr','2017-08-30 00:00:00','2017-08-30 00:00:00'),(10,8,NULL,13,NULL,'1','HI test how are you','2017-08-30 00:00:00','2017-08-30 00:00:00'),(11,8,'test',8,'test','1','the first message with more dataaaaaaaaaaaaaaaaaaaaaaaaa','2017-08-30 00:00:00','2017-08-30 00:00:00'),(12,8,'test',10,'ureheuu','1','message with moooore dataaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','2017-08-30 00:00:00','2017-08-30 00:00:00');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `looking_for` varchar(255) DEFAULT NULL,
  `link` longtext,
  `story` longtext,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'ooooo','qqqqq','rr@ne.com','b1f91cb7f26bed91e76e735cdc424a87','body','etwtwtb  44tg4','gt4g4g4b b rtg4t','rtljnorithbrtnb nijjtirtjist rtgoht giiht grtgr h','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(8,'test','test','me@me.com','68d76ea814e40d586caad19a812b4d98','eyes','look','linnnnk','happy for ever happy for ever happy for ever happy for ever happy for ever happy for ever happy for ever happy for ever happy for ever','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(9,'mmmm','mmmm','mm@mm.com','68d76ea814e40d586caad19a812b4d98','heads','wirjf pirf 3rpifi','3-p9rjf-39rjf','oorjojrjviiipw wpinfpiwnfpiw ipnrfpirpi pirnfpirf','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(10,'ureheuu','ijpijip','jh@uhu.com','b1f91cb7f26bed91e76e735cdc424a87','eyes','ffffryuujujj','yttrrrrrrryu  y','ntpjketojnoetky[opopopopt po5ykoh pi5yh','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(11,'eiej','ijijppiouhuh','ui@me.com','b1f91cb7f26bed91e76e735cdc424a87','eyes','iuwcuwid','weiohfoewh','iwejoiho[uher itgrth[orutg tgtt\'[t[ghrtogh','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(12,'urhu','pookjj','oi@pwe.com','b1f91cb7f26bed91e76e735cdc424a87','heads','fwrgegeg','ergrthryj','srh;jnrtigniwhgurt;jbninbi  ruotnrout[uorgtr ourn','0','2017-08-29 00:00:00','2017-08-29 00:00:00'),(13,'mahmoud','mahmoud','mahmoud@me.com','68d76ea814e40d586caad19a812b4d98','others','looking for any thing','o[uuRW  [UIHRWFN  [IURE  [IUBWR','my story my story my story my story my story my story my story my story','0','2017-08-30 00:00:00','2017-08-30 00:00:00');
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

-- Dump completed on 2017-08-30 17:34:12
