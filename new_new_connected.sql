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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (40,'Mahmoud','Almorahlee','mahmoud@me.com','68d76ea814e40d586caad19a812b4d98','Head','RESTART','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8ojc7lcB1ng\" frameborder=\"0\" allowfullscreen></iframe>','Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla  ',NULL,NULL,NULL),(41,'Mika','van IJzendoorn','mika@me.com','68d76ea814e40d586caad19a812b4d98','Body','RESTART','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3tmd-ClpJxA\" frameborder=\"0\" allowfullscreen></iframe>','Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla  ',NULL,NULL,NULL),(42,'Ivas','Ivas','ivas@me.com','68d76ea814e40d586caad19a812b4d98','Hand','RESTART','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vpFFOVyxxbQ\" frameborder=\"0\" allowfullscreen></iframe>','Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla  ',NULL,NULL,NULL),(43,'Random','User','random@me.com','68d76ea814e40d586caad19a812b4d98','Ear','Guitar player','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xPr14A_r30M\" frameborder=\"0\" allowfullscreen></iframe>',' My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(44,'Random 2','User2','random2@me.com','68d76ea814e40d586caad19a812b4d98','Body','Dancers','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/estX2GznPZI\" frameborder=\"0\" allowfullscreen></iframe>','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(45,'Random 3','User3','random3@me.com','68d76ea814e40d586caad19a812b4d98','Eye','Painter for Animals','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xBwbcv_kuOw\" frameborder=\"0\" allowfullscreen></iframe>','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(46,'Random 4','User4','random4@me.com','68d76ea814e40d586caad19a812b4d98','Other','place for Exhibition','www.facebook.com','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(47,'Someone','Someone','someone@me.com','68d76ea814e40d586caad19a812b4d98','Eye','Any thing Any thing Any thing ','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8ojc7lcB1ng\" frameborder=\"0\" allowfullscreen></iframe>','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(48,'Someone2','Someone2','someone2@me.com','68d76ea814e40d586caad19a812b4d98','Body','Any thing  Any thing  Any thing ','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xBwbcv_kuOw\" frameborder=\"0\" allowfullscreen></iframe>','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(49,'Someone3','Someone3','someone3@me.com','68d76ea814e40d586caad19a812b4d98','Ear','Any thing Any thing Any thing ','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xPr14A_r30M\" frameborder=\"0\" allowfullscreen></iframe>','My story My story My story My story My story My story My story My story My story My story My story My story My story My story My story ',NULL,NULL,NULL),(50,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2017-09-01 10:58:50
