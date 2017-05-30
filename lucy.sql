-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: lucy
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
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `mainslider` varchar(1000) DEFAULT NULL,
  `registry_options` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_admin`
--

DROP TABLE IF EXISTS `lucy_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_admin` (
  `last_login` datetime NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_admin`
--

LOCK TABLES `lucy_admin` WRITE;
/*!40000 ALTER TABLE `lucy_admin` DISABLE KEYS */;
INSERT INTO `lucy_admin` VALUES ('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin'),('2017-05-09 13:23:10','admin');
/*!40000 ALTER TABLE `lucy_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_all_users`
--

DROP TABLE IF EXISTS `lucy_all_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_all_users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `regType` varchar(200) DEFAULT NULL,
  `registry_url` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_all_users`
--

LOCK TABLES `lucy_all_users` WRITE;
/*!40000 ALTER TABLE `lucy_all_users` DISABLE KEYS */;
INSERT INTO `lucy_all_users` VALUES (32,'96177w5a3l53lzd',0,'$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m','kemime@me.com','j482','127.0.0.1','2017-05-15 18:21:20',NULL,0,1,NULL,'','birthday','utut');
/*!40000 ALTER TABLE `lucy_all_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_anniv_user`
--

DROP TABLE IF EXISTS `lucy_anniv_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_anniv_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `years_of_marriage` varchar(3) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_anniv_user`
--

LOCK TABLES `lucy_anniv_user` WRITE;
/*!40000 ALTER TABLE `lucy_anniv_user` DISABLE KEYS */;
INSERT INTO `lucy_anniv_user` VALUES (2,'u5y8ioi8n1oqy4z',0,'BotMaker','5','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'0000-00-00 00:00:00','ututtii',NULL,NULL,NULL,'2017-05-14 14:46:33',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','NextUp Hub'),(3,'u5y8ioi8n1oqy4z',0,'ABC Hospita','5','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'2016-01-05 00:00:00','ututt',NULL,NULL,NULL,'2017-05-14 14:52:01',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','NextUp Hub');
/*!40000 ALTER TABLE `lucy_anniv_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_birthday_user`
--

DROP TABLE IF EXISTS `lucy_birthday_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_birthday_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_birthday_user`
--

LOCK TABLES `lucy_birthday_user` WRITE;
/*!40000 ALTER TABLE `lucy_birthday_user` DISABLE KEYS */;
INSERT INTO `lucy_birthday_user` VALUES (12,'96177w5a3l53lzd',0,'Olamilekan','$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m','kemime@me.com',NULL,'j482','127.0.0.1','2017-05-15 18:21:20',NULL,NULL,'2016-01-05 00:00:00','utut',NULL,NULL,NULL,'2017-05-15 18:21:38',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-15 18:21:20','Testing');
/*!40000 ALTER TABLE `lucy_birthday_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_category_description`
--

DROP TABLE IF EXISTS `lucy_category_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_category_description` (
  `category_id` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sub_categories` varchar(255) NOT NULL,
  `search_filters` varchar(255) NOT NULL,
  `category_url` varchar(100) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `shop_by` varchar(5000) DEFAULT NULL,
  `price_range` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`title`,`category_url`),
  KEY `name` (`title`,`search_filters`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_category_description`
--

LOCK TABLES `lucy_category_description` WRITE;
/*!40000 ALTER TABLE `lucy_category_description` DISABLE KEYS */;
INSERT INTO `lucy_category_description` VALUES ('hlqlp','Bed & Bath','Essential Bedroom Items','bed,chairs,bin','bedroom, duvet,bed','bedandbath','2017-05-09 13:28:16',NULL,NULL),('sndfh79a7e0wxhzz1939','Birthday','This is just a test category','birth, birthday, birthdays,birthdaysss','birth, birthday, birthdays,birthdaysss','birth','2017-02-04 23:50:45',NULL,''),('bfhbvkhvhbsvv76275687','Test','Another test category','test, tester, testing, tests','test, tester, testing, tests','test',NULL,'testt','123'),('dwf8i','Tetttt','Netup','teeee, tttt, ttt','net','fin','2017-05-09 13:26:14',NULL,NULL);
/*!40000 ALTER TABLE `lucy_category_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_ci_sessions`
--

DROP TABLE IF EXISTS `lucy_ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_ci_sessions`
--

LOCK TABLES `lucy_ci_sessions` WRITE;
/*!40000 ALTER TABLE `lucy_ci_sessions` DISABLE KEYS */;
INSERT INTO `lucy_ci_sessions` VALUES ('f25cf9cc1e8be780e841d2326fcb52ab28a4f82c','::1',1494747134,'__ci_last_regenerate|i:1494747070;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"17\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";}}'),('f47a63279e529bd5235aa3469df474fca888d7c4','::1',1494767776,'__ci_last_regenerate|i:1494767776;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:11:\"ABC Hospita\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"0000-00-00 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 14:16:16\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 08:32:14\";s:5:\"venue\";s:4:\"test\";}}'),('a6bb770a070e742299b77667f7c23ec58a6255fa','::1',1494769593,'__ci_last_regenerate|i:1494769490;user_session|a:1:{i:0;a:29:{s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:17:\"years_of_marriage\";s:1:\"5\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"0000-00-00 00:00:00\";s:16:\"registry_url_tag\";s:7:\"ututtii\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 14:46:33\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 08:32:14\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('716ff264ea820b4560a92cf30981f935ba14f06b','::1',1494770138,'__ci_last_regenerate|i:1494769859;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"20\";s:7:\"user_id\";s:15:\"8ve5pctwcj6v6fh\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$DDBEyApZDVF1MaA359EdWuird3Acl0nnVqDhTsADkxvfgnbG.4Aty\";s:5:\"email\";s:17:\"kemimgggge@me.com\";s:4:\"code\";s:4:\"zzon\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 14:54:33\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:12:\"houseWarming\";}}'),('9ccd6990d5be3dafb649b1fea2e8a75b992f44ea','::1',1494770485,'__ci_last_regenerate|i:1494770191;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"22\";s:7:\"user_id\";s:15:\"kb1nf6cou49o9dp\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$imKV43Z6MhkBEjpo5paobOMNHV6RXGf6EPrTdY1ZRZslX/WyHhWFO\";s:5:\"email\";s:17:\"ffthisisus@me.com\";s:4:\"code\";s:4:\"k5gj\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 14:59:53\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:5:\"lucky\";}}'),('529276eb5544f6442e1bd6f62d1f44099e77d921','::1',1494770505,'__ci_last_regenerate|i:1494770505;user_session|a:1:{i:0;a:29:{s:2:\"id\";s:1:\"8\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:11:\"ABC Hospita\";s:10:\"event_name\";s:7:\"MyEvent\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"1970-01-01 01:00:00\";s:16:\"registry_url_tag\";s:6:\"ututtt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 15:01:45\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:8:\"birthday\";s:5:\"venue\";s:7:\"Testing\";}}'),('88f96a247660d72bcc275ef6b0c410708e2cbab1','::1',1494771194,'__ci_last_regenerate|i:1494771084;'),('014899af1d95c8e71dffeb6c1f715782150ef0b4','::1',1494771769,'__ci_last_regenerate|i:1494771472;'),('82c22dcdf2da4cb2c806ca555f8f6d9dd4d20ad3','::1',1494771917,'__ci_last_regenerate|i:1494771791;'),('175f8ee38724f4ee60ddbf53a01bb7326a9ca118','::1',1494772555,'__ci_last_regenerate|i:1494772319;'),('4ff4de39cba6ad92f2477bf36c1270bf8108eeb4','::1',1494773369,'__ci_last_regenerate|i:1494773071;'),('d5028ad6faa6630e4ae07737f7203ea8a21314ac','::1',1494773650,'__ci_last_regenerate|i:1494773377;'),('9d2a6f0e8c8ed5c5854d8f9e06d5b7ea80e3965f','127.0.0.1',1494776676,'__ci_last_regenerate|i:1494776669;'),('774f2057d8fab51d61cf0b20ac74f9e9c42b3582','127.0.0.1',1494778988,'__ci_last_regenerate|i:1494778980;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"23\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";N;}}'),('2e6d0dac0ad5d87830c324a996adafa1185d56b7','127.0.0.1',1494779428,'__ci_last_regenerate|i:1494779343;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"24\";s:7:\"user_id\";s:15:\"4u1pturx4e2f5qj\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$Qa3BQLUhYycM7.pNjU8teedpXr1pcDdtxOLISQkIvP/b4/cguqTq6\";s:5:\"email\";s:17:\"thisisus@me.comff\";s:4:\"code\";s:4:\"m9ts\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:29:35\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";N;}}'),('34aa263f4ca793da98fd8c553bbab555f455b72b','127.0.0.1',1494864271,'__ci_last_regenerate|i:1494864270;'),('31c2ece25dfa423e43fdbdcedd0147f25bb500da','127.0.0.1',1494864990,'__ci_last_regenerate|i:1494864718;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('17d961af72c1e05866281884272899133c24a479','127.0.0.1',1494865716,'__ci_last_regenerate|i:1494865426;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('8c1e3f2ce9db716f0dbd85e1e742dc906c337652','127.0.0.1',1494865882,'__ci_last_regenerate|i:1494865750;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('26fa7e450f4899486ff0e4c22ee1f22228c1189b','127.0.0.1',1494866352,'__ci_last_regenerate|i:1494866254;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('5fcef1c452b5a824cd321b04fd35366ba2f9e73c','127.0.0.1',1494866949,'__ci_last_regenerate|i:1494866899;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('bc881c512d511a220c5dc58fa0cccd8e5c170037','127.0.0.1',1494867390,'__ci_last_regenerate|i:1494867200;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('4ee94e0118b7b1e7ca8417c160fb1eb1a771bbfe','127.0.0.1',1494868254,'__ci_last_regenerate|i:1494867964;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"8\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"1970-01-01 01:00:00\";s:16:\"registry_url_tag\";s:10:\"olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:07:04\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:6:\"NextUp\";}}'),('cdccf59d0041a32208106605fd19254ec488a7da','127.0.0.1',1494868558,'__ci_last_regenerate|i:1494868393;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"10\";s:7:\"user_id\";s:15:\"uoj8b8d17x7p6lt\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$H/1k/pxcUC54bO8WbJqE9u8JUqlEh.4lpMktjzfX8nT8Us3PUXIa2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j4zo\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:13:39\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:16:\"birth_olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:15:57\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:13:39\";s:5:\"venue\";s:8:\"My house\";}}'),('84d4c3861ff07007f8b5ecc215ca4590d985eb09','127.0.0.1',1494869152,'__ci_last_regenerate|i:1494868859;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"12\";s:7:\"user_id\";s:15:\"96177w5a3l53lzd\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:10:\"Olamilekan\";s:8:\"password\";s:60:\"$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j482\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:21:20\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:4:\"utut\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:21:38\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:21:20\";s:5:\"venue\";s:7:\"Testing\";}}'),('96a5627a9d4661a4c9a8a564e3c89330c3e6920f','127.0.0.1',1494869209,'__ci_last_regenerate|i:1494869209;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"12\";s:7:\"user_id\";s:15:\"96177w5a3l53lzd\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:10:\"Olamilekan\";s:8:\"password\";s:60:\"$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j482\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:21:20\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:4:\"utut\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:21:38\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:21:20\";s:5:\"venue\";s:7:\"Testing\";}}'),('fbab85ce75e3aca95c12ffeec8400521da413e17','127.0.0.1',1494870879,'__ci_last_regenerate|i:1494870877;');
/*!40000 ALTER TABLE `lucy_ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_couple`
--

DROP TABLE IF EXISTS `lucy_couple`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_couple` (
  `couple_id` varchar(30) NOT NULL,
  `couple_status` tinyint(1) NOT NULL,
  `groom_first_name` varchar(200) NOT NULL DEFAULT '',
  `bride_first_name` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `wedding_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `spouse_email` varchar(45) DEFAULT NULL,
  `groom_last_name` varchar(200) NOT NULL DEFAULT '',
  `bride_last_name` varchar(200) NOT NULL DEFAULT '',
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`couple_id`),
  UNIQUE KEY `lucy_couple_email_uindex` (`email`),
  KEY `name` (`email`,`wedding_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_couple`
--

LOCK TABLES `lucy_couple` WRITE;
/*!40000 ALTER TABLE `lucy_couple` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_couple` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_couple_log`
--

DROP TABLE IF EXISTS `lucy_couple_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_couple_log` (
  `couple_id` varchar(30) NOT NULL,
  `couple_status` tinyint(1) NOT NULL,
  `groom_name` varchar(200) NOT NULL DEFAULT '',
  `bride_name` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `wedding_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `regType` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_couple_log`
--

LOCK TABLES `lucy_couple_log` WRITE;
/*!40000 ALTER TABLE `lucy_couple_log` DISABLE KEYS */;
INSERT INTO `lucy_couple_log` VALUES ('0',0,'','','$2y$10$VVij8Gu9z9idh/7mRbTDJ.zIBNEh1nrocIg7ISwBzftqTuE4irLwS','olamyy53@gmail.com',NULL,NULL,'8109xj469esaw9u4na8z','127.0.0.1','2017-01-20 21:11:33',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL),('s8haombj2ks4bk9',0,'','','$2y$10$n7TlXGAQxCdoea8Pvo4dc.6KvtP3rbloESfKcCZlTfZipKQV2Kjia','eminado@me.com',NULL,NULL,'2wvw','127.0.0.1','2017-01-20 21:27:41',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lucy_couple_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_houseWarming_user`
--

DROP TABLE IF EXISTS `lucy_houseWarming_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_houseWarming_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_houseWarming_user`
--

LOCK TABLES `lucy_houseWarming_user` WRITE;
/*!40000 ALTER TABLE `lucy_houseWarming_user` DISABLE KEYS */;
INSERT INTO `lucy_houseWarming_user` VALUES (1,'u5y8ioi8n1oqy4z',0,'ABC Hospita','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'2016-01-05 00:00:00','ututtiiuuu',NULL,NULL,NULL,'2017-05-14 14:56:31',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','Testing');
/*!40000 ALTER TABLE `lucy_houseWarming_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_lucky_user`
--

DROP TABLE IF EXISTS `lucy_lucky_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_lucky_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_lucky_user`
--

LOCK TABLES `lucy_lucky_user` WRITE;
/*!40000 ALTER TABLE `lucy_lucky_user` DISABLE KEYS */;
INSERT INTO `lucy_lucky_user` VALUES (8,'u5y8ioi8n1oqy4z',0,'ABC Hospita','MyEvent','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'1970-01-01 01:00:00','ututtt',NULL,NULL,NULL,'2017-05-14 15:01:45',0,NULL,NULL,NULL,0,NULL,'',NULL,'birthday','Testing');
/*!40000 ALTER TABLE `lucy_lucky_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_misc`
--

DROP TABLE IF EXISTS `lucy_misc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_misc` (
  `ip` varchar(200) NOT NULL,
  `login_attempt` int(11) DEFAULT '0',
  `success_login` int(11) DEFAULT '0',
  `failed_login` int(11) DEFAULT '0',
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_misc`
--

LOCK TABLES `lucy_misc` WRITE;
/*!40000 ALTER TABLE `lucy_misc` DISABLE KEYS */;
INSERT INTO `lucy_misc` VALUES ('127.0.0.1',1,1,25,'2017-01-23 21:08:15');
/*!40000 ALTER TABLE `lucy_misc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_naming_user`
--

DROP TABLE IF EXISTS `lucy_naming_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_naming_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `child_name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_naming_user`
--

LOCK TABLES `lucy_naming_user` WRITE;
/*!40000 ALTER TABLE `lucy_naming_user` DISABLE KEYS */;
INSERT INTO `lucy_naming_user` VALUES (7,'u5y8ioi8n1oqy4z',0,'BotMaker','Deji Ayide','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'2016-01-05 00:00:00','ututtii',NULL,NULL,NULL,'2017-05-14 14:59:12',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','NextUp Hub');
/*!40000 ALTER TABLE `lucy_naming_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_orders`
--

DROP TABLE IF EXISTS `lucy_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_orders` (
  `user_id` varchar(300) DEFAULT NULL,
  `date_ordered` datetime DEFAULT NULL,
  `product_id` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_orders`
--

LOCK TABLES `lucy_orders` WRITE;
/*!40000 ALTER TABLE `lucy_orders` DISABLE KEYS */;
INSERT INTO `lucy_orders` VALUES ('abcd','2017-04-14 16:36:43','bjbj',5,'pending');
/*!40000 ALTER TABLE `lucy_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_product`
--

DROP TABLE IF EXISTS `lucy_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_product` (
  `name` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `product_meta_title` varchar(50) DEFAULT NULL,
  `product_meta_description` varchar(200) DEFAULT NULL,
  `product_meta_keywords` varchar(200) DEFAULT NULL,
  `product_tags` varchar(200) DEFAULT NULL,
  `model` varchar(64) NOT NULL,
  `isbn` varchar(17) DEFAULT NULL,
  `mpn` varchar(64) NOT NULL,
  `quantity` int(5) NOT NULL DEFAULT '0',
  `manufacturer_id` int(11) NOT NULL,
  `delivery` tinyint(1) NOT NULL DEFAULT '1',
  `date_available` datetime DEFAULT NULL,
  `minimum` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `availability` tinyint(1) NOT NULL DEFAULT '0',
  `view_count` int(10) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `position` varchar(200) NOT NULL,
  `search_filters` varchar(300) NOT NULL,
  `out_of_store_range` varchar(300) NOT NULL,
  `requires_delivery` varchar(300) DEFAULT NULL,
  `manufacturer_name` varchar(300) DEFAULT NULL,
  `product_categories` varchar(300) NOT NULL,
  `related_products` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `short_description` varchar(1000) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `product_category` varchar(30) DEFAULT NULL,
  `before_discount_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `name` (`product_id`,`search_filters`,`model`,`image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_product`
--

LOCK TABLES `lucy_product` WRITE;
/*!40000 ALTER TABLE `lucy_product` DISABLE KEYS */;
INSERT INTO `lucy_product` VALUES ('ksvks','5.5 inches IPS LCD capacitive touchscreen, 16M colors\nAndroid OS, v6.0 (Marshmallow)\nDual SIM (Micro-SIM/Nano-SIM, dual stand-by)\nMediatek MT6797 Helio X20\n64 GB, 3 GB RAM, microSD, up to 256 GB (uses SIM 2 slot)\n13 MP, f/2.0, phase detection autofocus, dual-LED (dual tone) flash','680980890','j','wjeh','whg','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Hot Deals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg','This is a short project description',10.00,'sndfh79a7e0wxhzz1939',NULL),('BKJBK','jdfnjb','bb','jdjb','fdjkn','fjb','fbj','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','New Products','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('hdbf','jdbjkb','bjbj','jbkb','sbb','bdb','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Special Offer','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('tytt','bbbb','bjk','bb','jbbfjb','bdb','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Hot Deals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','hbdhbu','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','hbjhb','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('jn','jhbhjv','jbbj','hdbhv','bbv','hvbvb','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jbjk','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jbkjv','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','New Arrivals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jhgfdjkfb6556','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,1,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('jjbk\n','fd','jkbjk','hdbhv','bbv','hvbvb','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jknjkbnb','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Featured Products','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL);
/*!40000 ALTER TABLE `lucy_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_reg_user`
--

DROP TABLE IF EXISTS `lucy_reg_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_reg_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `dashboard_image` varchar(255) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `vent_date` datetime DEFAULT NULL,
  `registry_url_tag` varchar(300) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `walkthrough` tinyint(1) NOT NULL DEFAULT '0',
  `vow_message` varchar(10000) DEFAULT NULL,
  `vote_of_thanks` varchar(10000) DEFAULT NULL,
  `dashboard_name` varchar(1000) DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `base_dashboard_image` varchar(1000) DEFAULT NULL COMMENT 'bigimage',
  `regType` varchar(200) DEFAULT NULL,
  `venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_reg_user`
--

LOCK TABLES `lucy_reg_user` WRITE;
/*!40000 ALTER TABLE `lucy_reg_user` DISABLE KEYS */;
INSERT INTO `lucy_reg_user` VALUES (1,'95xk8xqujkkyo2m',0,'Olamilekan','Victor','$2y$10$oiQAymJS/JcF51ZGfzD6ReCS5DnZIA3e9OeTKk/zUXkHceMadAQyi','admin@dddfvfgffffggff.com',NULL,'8iep','127.0.0.1','2017-05-11 21:25:39',NULL,NULL,NULL,'',NULL,NULL,NULL,'2017-05-11 21:45:54',0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming','NextUp Hub'),(2,'mkgxfv48mpu7gr2',0,'','','$2y$10$ZZFxLcAgDJRUl79w9eDZo.TfGUfIz79JKL8d0Q1Fv8a.jMNM093Gm','admin@dddfvfhhhhgffffggff.com',NULL,'a2lh','127.0.0.1','2017-05-11 21:26:11',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming',''),(3,'rh45secv4yzbk5s',0,'','','$2y$10$sxNSr1jHIJQ8VGKkIBOlP.nLu1LKfLDJa7QxPhcTGwY5MADRsbSoa','admin@dddfvfhhhhgffffggff.com',NULL,'9me5','127.0.0.1','2017-05-11 21:26:55',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming',''),(4,'cuy1urb2tnujo15',0,'','','$2y$10$HDU0nD.z/neLaWJAUZkD0.4jba/UwXpO9K6tdkH4/kUytPu.SNXZC','admin@dddfvfhhhhgffffggff.com',NULL,'6ges','127.0.0.1','2017-05-11 21:28:53',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming',''),(5,'o5pff1xif4so0go',0,'','','$2y$10$MEMllTbatUkH75RdmKXZIeIv9L7ECzJBx.c/EsG5oWZpE08AJkBcK','admin@dddfvfhhhhgffffggff.com',NULL,'ogdy','127.0.0.1','2017-05-11 21:29:53',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming',''),(6,'7vlvnvufarxjepc',0,'','','$2y$10$RkZIeaPN6LDjJZAfudvgsedGp/Xpp1D1S23FyQMzAU7rWQImSmlKe','admin@dddfvfhhhhgffffggff.com',NULL,'i3ta','127.0.0.1','2017-05-11 21:30:23',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,'',NULL,'houseWarming','');
/*!40000 ALTER TABLE `lucy_reg_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_registry_items`
--

DROP TABLE IF EXISTS `lucy_registry_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_registry_items` (
  `registry_item_id` varchar(100) NOT NULL,
  `couple_id` varchar(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `image` varchar(300) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_registry_items`
--

LOCK TABLES `lucy_registry_items` WRITE;
/*!40000 ALTER TABLE `lucy_registry_items` DISABLE KEYS */;
INSERT INTO `lucy_registry_items` VALUES ('hi7de6u','78b06zjf55mvprb','680980890',44,10.00,'leye.jpg','2017-02-26 09:57:28'),('1wd4sam','78b06zjf55mvprb','bb',19,10.00,'leye.jpg','2017-02-26 09:50:40'),('4rz0hh9','78b06zjf55mvprb','bjbj',19,10.00,'leye.jpg','2017-03-01 02:09:23'),('05bi86s','78b06zjf55mvprb','bjk',36,10.00,'leye.jpg','2017-02-26 10:00:17'),('n84dbtc','78b06zjf55mvprb','jbkjv',1,10.00,'leye.jpg','2017-02-26 09:58:10'),('72crj7c','78b06zjf55mvprb','jhgfdjkfb6556',5,10.00,'leye.jpg','2017-02-26 09:53:46'),('ur1a7cy','78b06zjf55mvprb','jkbjk',1,10.00,'leye.jpg','2017-02-26 09:57:05'),('1t1vcpw','78b06zjf55mvprb','jknjkbnb',9,10.00,'leye.jpg','2017-02-26 09:54:12');
/*!40000 ALTER TABLE `lucy_registry_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_returns`
--

DROP TABLE IF EXISTS `lucy_returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_returns` (
  `user_id` varchar(100) DEFAULT NULL,
  `new_column` int(11) DEFAULT NULL,
  `return_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_returns`
--

LOCK TABLES `lucy_returns` WRITE;
/*!40000 ALTER TABLE `lucy_returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_temp_user`
--

DROP TABLE IF EXISTS `lucy_temp_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_temp_user` (
  `user_status` tinyint(1) NOT NULL,
  `temp_user_id` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `cart_id` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_temp_user`
--

LOCK TABLES `lucy_temp_user` WRITE;
/*!40000 ALTER TABLE `lucy_temp_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_temp_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_user`
--

DROP TABLE IF EXISTS `lucy_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_user` (
  `user_id` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(96) NOT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(500) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `card_details` int(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `cart_id` varchar(10) DEFAULT NULL,
  `regType` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_user`
--

LOCK TABLES `lucy_user` WRITE;
/*!40000 ALTER TABLE `lucy_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_user_cart`
--

DROP TABLE IF EXISTS `lucy_user_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_user_cart` (
  `cart_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  UNIQUE KEY `lucy_user_cart_cart_id_pk` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_user_cart`
--

LOCK TABLES `lucy_user_cart` WRITE;
/*!40000 ALTER TABLE `lucy_user_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_user_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_user_cart_items`
--

DROP TABLE IF EXISTS `lucy_user_cart_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_user_cart_items` (
  `cart_item_id` varchar(100) NOT NULL,
  `cart_id` varchar(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `image` varchar(300) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`cart_item_id`),
  KEY `cart_item_id` (`cart_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_user_cart_items`
--

LOCK TABLES `lucy_user_cart_items` WRITE;
/*!40000 ALTER TABLE `lucy_user_cart_items` DISABLE KEYS */;
INSERT INTO `lucy_user_cart_items` VALUES ('x7gmuqf','dtvkle8goi','680980890',98,10.0000,'leye.jpg','2017-03-02 09:54:59'),('x934hg','dtvkle8goi','hbdhbu',20,10.0000,'leye.jpg','2017-03-05 11:16:39');
/*!40000 ALTER TABLE `lucy_user_cart_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_vouchers`
--

DROP TABLE IF EXISTS `lucy_vouchers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_vouchers` (
  `date_created` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_vouchers`
--

LOCK TABLES `lucy_vouchers` WRITE;
/*!40000 ALTER TABLE `lucy_vouchers` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucy_vouchers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-15 19:33:24
