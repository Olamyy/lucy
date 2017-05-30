-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: lucy
-- ------------------------------------------------------
-- Server version	5.7.17

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
INSERT INTO `lucy_admin` VALUES ('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin'),('2017-05-16 20:45:47','admin');
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
  `cart_id` varchar(7000) DEFAULT NULL,
  `registry_id` varchar(20) NOT NULL,
  `regType` varchar(200) DEFAULT NULL,
  `registry_url` varchar(20) DEFAULT NULL,
  `friend_email` varchar(50) DEFAULT NULL,
  `preview_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_all_users`
--

LOCK TABLES `lucy_all_users` WRITE;
/*!40000 ALTER TABLE `lucy_all_users` DISABLE KEYS */;
INSERT INTO `lucy_all_users` VALUES (34,'bfy2993j09f76ti',0,'$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS','olamyy53@gmail.com','liwx','127.0.0.1','2017-05-15 20:43:55',NULL,0,1,'iy4ny5kc0o','8d2fzjyran','birthday','olamilekan',NULL,NULL);
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
  `spouse_email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_anniv_user`
--

LOCK TABLES `lucy_anniv_user` WRITE;
/*!40000 ALTER TABLE `lucy_anniv_user` DISABLE KEYS */;
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
  `friend_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_birthday_user`
--

LOCK TABLES `lucy_birthday_user` WRITE;
/*!40000 ALTER TABLE `lucy_birthday_user` DISABLE KEYS */;
INSERT INTO `lucy_birthday_user` VALUES (13,'utxwvwv39a7feqh',0,'Olamilekan Wahab','$2y$10$VHhf1McAbqFEgT7FjYnXR.e017bvOTJs9/jNjzWyVGbCzjjF8z5fG','olamyy53@gmail.com',NULL,'0cgd','127.0.0.1','2017-05-15 20:27:49',NULL,NULL,'2016-01-05 00:00:00','olamilekan',NULL,NULL,NULL,'2017-05-15 20:29:01',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-15 20:27:49','My house',NULL),(14,'bfy2993j09f76ti',0,'Olamilekan','$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS','olamyy53@gmail.com','http://localhost/lucy/public/_template/uploads/files/bgimagecouple1.jpg','liwx','127.0.0.1','2017-05-15 20:43:55',NULL,NULL,'2016-01-05 00:00:00','olamilekan',NULL,NULL,NULL,'2017-05-15 20:44:17',0,NULL,NULL,NULL,0,NULL,'8d2fzjyran',NULL,'2017-05-15 20:43:55','My house',NULL);
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
INSERT INTO `lucy_category_description` VALUES ('09guouru6g','Bed & Bath','Essential Bed & Bath items','Bedding, Bath','bedroom, duvet,bed','bedandbath','2017-05-16 15:00:13',NULL,NULL),('sndfh79a7e0wxhzz1939','Birthday','This is just a test category','birth, birthday, birthdays,birthdaysss','birth, birthday, birthdays,birthdaysss','birth','2017-02-04 23:50:45',NULL,''),('osag7rn7ej','Kitchenz','This is a bathub','bath, tub. bathu, tub bath','bat, thub, thuf','baththub','2017-05-16 15:43:21',NULL,NULL),('bfhbvkhvhbsvv76275687','Test','Another test category','test, tester, testing, tests','test, tester, testing, tests','test',NULL,'testt','123'),('dwf8i','Tetttt','Netup','teeee, tttt, ttt','net','fin','2017-05-09 13:26:14',NULL,NULL);
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
INSERT INTO `lucy_ci_sessions` VALUES ('f25cf9cc1e8be780e841d2326fcb52ab28a4f82c','::1',1494747134,'__ci_last_regenerate|i:1494747070;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"17\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";}}'),('f47a63279e529bd5235aa3469df474fca888d7c4','::1',1494767776,'__ci_last_regenerate|i:1494767776;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:11:\"ABC Hospita\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"0000-00-00 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 14:16:16\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 08:32:14\";s:5:\"venue\";s:4:\"test\";}}'),('a6bb770a070e742299b77667f7c23ec58a6255fa','::1',1494769593,'__ci_last_regenerate|i:1494769490;user_session|a:1:{i:0;a:29:{s:2:\"id\";s:1:\"2\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:17:\"years_of_marriage\";s:1:\"5\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"0000-00-00 00:00:00\";s:16:\"registry_url_tag\";s:7:\"ututtii\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 14:46:33\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 08:32:14\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('716ff264ea820b4560a92cf30981f935ba14f06b','::1',1494770138,'__ci_last_regenerate|i:1494769859;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"20\";s:7:\"user_id\";s:15:\"8ve5pctwcj6v6fh\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$DDBEyApZDVF1MaA359EdWuird3Acl0nnVqDhTsADkxvfgnbG.4Aty\";s:5:\"email\";s:17:\"kemimgggge@me.com\";s:4:\"code\";s:4:\"zzon\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 14:54:33\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:12:\"houseWarming\";}}'),('9ccd6990d5be3dafb649b1fea2e8a75b992f44ea','::1',1494770485,'__ci_last_regenerate|i:1494770191;user_session|a:1:{i:0;a:14:{s:2:\"id\";s:2:\"22\";s:7:\"user_id\";s:15:\"kb1nf6cou49o9dp\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$imKV43Z6MhkBEjpo5paobOMNHV6RXGf6EPrTdY1ZRZslX/WyHhWFO\";s:5:\"email\";s:17:\"ffthisisus@me.com\";s:4:\"code\";s:4:\"k5gj\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 14:59:53\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:5:\"lucky\";}}'),('529276eb5544f6442e1bd6f62d1f44099e77d921','::1',1494770505,'__ci_last_regenerate|i:1494770505;user_session|a:1:{i:0;a:29:{s:2:\"id\";s:1:\"8\";s:7:\"user_id\";s:15:\"u5y8ioi8n1oqy4z\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:11:\"ABC Hospita\";s:10:\"event_name\";s:7:\"MyEvent\";s:8:\"password\";s:60:\"$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"rdr3\";s:2:\"ip\";s:3:\"::1\";s:10:\"date_added\";s:19:\"2017-05-14 08:32:14\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"1970-01-01 01:00:00\";s:16:\"registry_url_tag\";s:6:\"ututtt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-14 15:01:45\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:8:\"birthday\";s:5:\"venue\";s:7:\"Testing\";}}'),('88f96a247660d72bcc275ef6b0c410708e2cbab1','::1',1494771194,'__ci_last_regenerate|i:1494771084;'),('014899af1d95c8e71dffeb6c1f715782150ef0b4','::1',1494771769,'__ci_last_regenerate|i:1494771472;'),('82c22dcdf2da4cb2c806ca555f8f6d9dd4d20ad3','::1',1494771917,'__ci_last_regenerate|i:1494771791;'),('175f8ee38724f4ee60ddbf53a01bb7326a9ca118','::1',1494772555,'__ci_last_regenerate|i:1494772319;'),('4ff4de39cba6ad92f2477bf36c1270bf8108eeb4','::1',1494773369,'__ci_last_regenerate|i:1494773071;'),('d5028ad6faa6630e4ae07737f7203ea8a21314ac','::1',1494773650,'__ci_last_regenerate|i:1494773377;'),('9d2a6f0e8c8ed5c5854d8f9e06d5b7ea80e3965f','127.0.0.1',1494776676,'__ci_last_regenerate|i:1494776669;'),('774f2057d8fab51d61cf0b20ac74f9e9c42b3582','127.0.0.1',1494778988,'__ci_last_regenerate|i:1494778980;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"23\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";N;}}'),('2e6d0dac0ad5d87830c324a996adafa1185d56b7','127.0.0.1',1494779428,'__ci_last_regenerate|i:1494779343;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"24\";s:7:\"user_id\";s:15:\"4u1pturx4e2f5qj\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$Qa3BQLUhYycM7.pNjU8teedpXr1pcDdtxOLISQkIvP/b4/cguqTq6\";s:5:\"email\";s:17:\"thisisus@me.comff\";s:4:\"code\";s:4:\"m9ts\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:29:35\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";N;}}'),('34aa263f4ca793da98fd8c553bbab555f455b72b','127.0.0.1',1494864271,'__ci_last_regenerate|i:1494864270;'),('31c2ece25dfa423e43fdbdcedd0147f25bb500da','127.0.0.1',1494864990,'__ci_last_regenerate|i:1494864718;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('17d961af72c1e05866281884272899133c24a479','127.0.0.1',1494865716,'__ci_last_regenerate|i:1494865426;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('8c1e3f2ce9db716f0dbd85e1e742dc906c337652','127.0.0.1',1494865882,'__ci_last_regenerate|i:1494865750;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('26fa7e450f4899486ff0e4c22ee1f22228c1189b','127.0.0.1',1494866352,'__ci_last_regenerate|i:1494866254;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('5fcef1c452b5a824cd321b04fd35366ba2f9e73c','127.0.0.1',1494866949,'__ci_last_regenerate|i:1494866899;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('bc881c512d511a220c5dc58fa0cccd8e5c170037','127.0.0.1',1494867390,'__ci_last_regenerate|i:1494867200;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"7\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:8:\"BotMaker\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:5:\"ututt\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 17:13:19\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:10:\"NextUp Hub\";}}'),('4ee94e0118b7b1e7ca8417c160fb1eb1a771bbfe','127.0.0.1',1494868254,'__ci_last_regenerate|i:1494867964;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:1:\"8\";s:7:\"user_id\";s:15:\"p2synpv2301wue3\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$txolHRx8BRUVYuF1XRtxH.XCYu0i31DgrBbZDrDP.1MMWMGCPPMP2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"66bj\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-14 17:23:08\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"1970-01-01 01:00:00\";s:16:\"registry_url_tag\";s:10:\"olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:07:04\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-14 17:23:08\";s:5:\"venue\";s:6:\"NextUp\";}}'),('cdccf59d0041a32208106605fd19254ec488a7da','127.0.0.1',1494868558,'__ci_last_regenerate|i:1494868393;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"10\";s:7:\"user_id\";s:15:\"uoj8b8d17x7p6lt\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$H/1k/pxcUC54bO8WbJqE9u8JUqlEh.4lpMktjzfX8nT8Us3PUXIa2\";s:5:\"email\";s:15:\"thisisus@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j4zo\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:13:39\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:16:\"birth_olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:15:57\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:13:39\";s:5:\"venue\";s:8:\"My house\";}}'),('84d4c3861ff07007f8b5ecc215ca4590d985eb09','127.0.0.1',1494869152,'__ci_last_regenerate|i:1494868859;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"12\";s:7:\"user_id\";s:15:\"96177w5a3l53lzd\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:10:\"Olamilekan\";s:8:\"password\";s:60:\"$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j482\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:21:20\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:4:\"utut\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:21:38\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:21:20\";s:5:\"venue\";s:7:\"Testing\";}}'),('96a5627a9d4661a4c9a8a564e3c89330c3e6920f','127.0.0.1',1494869209,'__ci_last_regenerate|i:1494869209;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"12\";s:7:\"user_id\";s:15:\"96177w5a3l53lzd\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:10:\"Olamilekan\";s:8:\"password\";s:60:\"$2y$10$vpXs0dWOioGVZh8cF5fRk.quM/ESQbgLJF7Xqj5EqT58TBzoq4z8m\";s:5:\"email\";s:13:\"kemime@me.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"j482\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 18:21:20\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:4:\"utut\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 18:21:38\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 18:21:20\";s:5:\"venue\";s:7:\"Testing\";}}'),('fbab85ce75e3aca95c12ffeec8400521da413e17','127.0.0.1',1494870879,'__ci_last_regenerate|i:1494870877;'),('6f23281f6b457bbef7765666d1708accf664883c','127.0.0.1',1494876458,'__ci_last_regenerate|i:1494876458;'),('d79131814f98a1622f62d84302700b77eeb4d22f','127.0.0.1',1494876883,'__ci_last_regenerate|i:1494876883;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"13\";s:7:\"user_id\";s:15:\"utxwvwv39a7feqh\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$VHhf1McAbqFEgT7FjYnXR.e017bvOTJs9/jNjzWyVGbCzjjF8z5fG\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"0cgd\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:27:49\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:10:\"olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 20:29:01\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 20:27:49\";s:5:\"venue\";s:8:\"My house\";}}'),('1ff216a9501089199e0ba907a11f3ef148ad345b','127.0.0.1',1494877377,'__ci_last_regenerate|i:1494877377;user_session|a:1:{i:0;a:28:{s:2:\"id\";s:2:\"13\";s:7:\"user_id\";s:15:\"utxwvwv39a7feqh\";s:11:\"user_status\";s:1:\"0\";s:4:\"name\";s:16:\"Olamilekan Wahab\";s:8:\"password\";s:60:\"$2y$10$VHhf1McAbqFEgT7FjYnXR.e017bvOTJs9/jNjzWyVGbCzjjF8z5fG\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:15:\"dashboard_image\";N;s:4:\"code\";s:4:\"0cgd\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:27:49\";s:7:\"address\";N;s:16:\"delivery_address\";N;s:10:\"event_date\";s:19:\"2016-01-05 00:00:00\";s:16:\"registry_url_tag\";s:10:\"olamilekan\";s:5:\"state\";N;s:6:\"number\";N;s:12:\"card_details\";N;s:13:\"date_modified\";s:19:\"2017-05-15 20:29:01\";s:11:\"walkthrough\";s:1:\"0\";s:11:\"vow_message\";N;s:14:\"vote_of_thanks\";N;s:14:\"dashboard_name\";N;s:12:\"is_logged_in\";s:1:\"0\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:20:\"base_dashboard_image\";N;s:7:\"regType\";s:19:\"2017-05-15 20:27:49\";s:5:\"venue\";s:8:\"My house\";}}'),('ee49a88337a527be8ed3e82a40f1c8ec539fcf4f','127.0.0.1',1494877819,'__ci_last_regenerate|i:1494877819;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('dc42dc4674b11782f2d930bc3d6dde36d29b0347','127.0.0.1',1494878231,'__ci_last_regenerate|i:1494878231;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('229b8fd1caa909d99762eee9cf53f890ca7508d2','127.0.0.1',1494878552,'__ci_last_regenerate|i:1494878552;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('f6a67f390fbd2fa1d4b1dcba3373cdc8c7a2d679','127.0.0.1',1494879514,'__ci_last_regenerate|i:1494879514;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('6e20ac8c3b978c54a7abed3291f7d6d4a033d4ea','127.0.0.1',1494879854,'__ci_last_regenerate|i:1494879854;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('5e9b142e224656deb2f03f0310e0e80d5d089d44','127.0.0.1',1494880333,'__ci_last_regenerate|i:1494880333;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('d04766bc798aadedc13dc8ac1f8d7dcbb42327e5','127.0.0.1',1494880654,'__ci_last_regenerate|i:1494880654;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('f9e0af20648caafee942325af624e833c979470d','127.0.0.1',1494881046,'__ci_last_regenerate|i:1494881046;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('d5fcf60e35624975424f82701ab2c3f6010f38b2','127.0.0.1',1494881375,'__ci_last_regenerate|i:1494881375;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('2fedf32153a80873d3cb517199c0fbadfba085f7','127.0.0.1',1494881695,'__ci_last_regenerate|i:1494881695;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('cdc1b05dc13995403b70ee203906425d63c3a0b1','127.0.0.1',1494882042,'__ci_last_regenerate|i:1494882042;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('0a98548a7e22dfc1a2f6a5aa3af7d8cf02821303','127.0.0.1',1494882343,'__ci_last_regenerate|i:1494882343;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('bc1105fd254eba8bbeaa25b76e72d01df0a7c9d6','127.0.0.1',1494882793,'__ci_last_regenerate|i:1494882793;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('ce97e47d231b40ee9fe98215edbde70a2087ebd1','127.0.0.1',1494883448,'__ci_last_regenerate|i:1494883448;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('60ce506ab82106e8e6f2dc2ad4be977c43101731','127.0.0.1',1494883175,'__ci_last_regenerate|i:1494883175;'),('3c8a9901c3a586e11429f70b4a7142af66e6b976','127.0.0.1',1494882865,'__ci_last_regenerate|i:1494882865;'),('4889f703d28e3bac04d49d6f6c4a7098c435ef20','127.0.0.1',1494882911,'__ci_last_regenerate|i:1494882911;'),('53192b1c21cb7e5b6afa40ba1bf8fba0d803b37d','127.0.0.1',1494882926,'__ci_last_regenerate|i:1494882926;'),('9ec10ce99e7457b4ce83aec8d4c77e4faa04bc28','127.0.0.1',1494883361,'__ci_last_regenerate|i:1494883361;'),('3c1149a805dd7aecc270188f64c00b10d3a06921','127.0.0.1',1494884022,'__ci_last_regenerate|i:1494884022;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('04580e0f56da1ab875e086c87be79d74908c16b5','127.0.0.1',1494884108,'__ci_last_regenerate|i:1494884108;'),('a9c3e05fd4117f15a53a7708eed1526d5d715c2b','127.0.0.1',1494883806,'__ci_last_regenerate|i:1494883806;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('08a50d7909b56b3851c2040c68ae478fb2c812b2','127.0.0.1',1494883450,'__ci_last_regenerate|i:1494883450;'),('c8d0417124610cd0a5c9de26fba28f53d004f9b7','127.0.0.1',1494883461,'__ci_last_regenerate|i:1494883461;'),('204c84d7597f240b3343d3b378b6034397abb078','127.0.0.1',1494883466,'__ci_last_regenerate|i:1494883466;'),('e371fe9d57165a10c4244518a70562f03b703f34','127.0.0.1',1494883469,'__ci_last_regenerate|i:1494883469;'),('af38778611ebf3f62345e13c451fb6b1ca377622','127.0.0.1',1494883725,'__ci_last_regenerate|i:1494883725;'),('f4caf2911ce3d3e680de93c29ba76499ba884868','127.0.0.1',1494883727,'__ci_last_regenerate|i:1494883727;'),('391e6fb7ac44f98fa83569b2832cad0af4bf11d1','127.0.0.1',1494884119,'__ci_last_regenerate|i:1494884119;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('1713e3f4d133e5339773db48063226b8251b088d','127.0.0.1',1494883807,'__ci_last_regenerate|i:1494883807;'),('80b9ff0a59d12f1c397710326209eb20dca0e999','127.0.0.1',1494883810,'__ci_last_regenerate|i:1494883810;'),('881cab88852377b204ffbe3820117cc437dd969a','127.0.0.1',1494883812,'__ci_last_regenerate|i:1494883812;'),('9c52dbf243e6782a7a1390110007aaff40556498','127.0.0.1',1494883814,'__ci_last_regenerate|i:1494883814;'),('76bcf7a9634644f7e24c744f6f3e461791466a41','127.0.0.1',1494883831,'__ci_last_regenerate|i:1494883831;'),('9485b02240cc14d9981c82e83da9595f7dd2b1de','127.0.0.1',1494883834,'__ci_last_regenerate|i:1494883834;'),('6654b9ff926abe31e6926442738af789a5c818d9','127.0.0.1',1494883836,'__ci_last_regenerate|i:1494883836;'),('0315dc1c6faee9165f0278dfbe67bd8ec0fbb12b','127.0.0.1',1494884428,'__ci_last_regenerate|i:1494884428;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('a1f424b5af3f58fe0b5dd394bc7712d387b216a7','127.0.0.1',1494884481,'__ci_last_regenerate|i:1494884481;'),('1bd852d9e4ac58254ba6ddcfbb8a9f6ae902d1cd','127.0.0.1',1494884424,'__ci_last_regenerate|i:1494884424;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('1985d68ecaeb0519fb87009f4543e6a6c4bfae13','127.0.0.1',1494884127,'__ci_last_regenerate|i:1494884127;'),('31f50ce82c783e80dc2666eddb294a8c52c2b552','127.0.0.1',1494884171,'__ci_last_regenerate|i:1494884171;'),('cd557818c8fdc18a0174ce67f4fc578b5964146f','127.0.0.1',1494884174,'__ci_last_regenerate|i:1494884174;'),('28468d2eae4dc09ba5dd0c93648d382541b53b22','127.0.0.1',1494884176,'__ci_last_regenerate|i:1494884176;'),('d2b5c50a520d083c5a6e1c1bbb3bb3d1fe4c28c6','127.0.0.1',1494884195,'__ci_last_regenerate|i:1494884195;'),('930f582eee3473ca5c269880e0b4294f3cfbb7ea','127.0.0.1',1494884200,'__ci_last_regenerate|i:1494884200;'),('c00af25b0b5289d7284dc7998fcfb7a28bd78d87','127.0.0.1',1494884202,'__ci_last_regenerate|i:1494884202;'),('71b912d661fef1b32635e34948d046a987f49aa8','127.0.0.1',1494884204,'__ci_last_regenerate|i:1494884204;'),('ad4d553d9f29a718d08446c1be0888884fdd3e46','127.0.0.1',1494884206,'__ci_last_regenerate|i:1494884206;'),('0cba13b7128688966c809e1ac2864f5fd786e337','127.0.0.1',1494884208,'__ci_last_regenerate|i:1494884208;'),('0d55a5de1595b5a5179566964df1d7a7ccce3cbb','127.0.0.1',1494884211,'__ci_last_regenerate|i:1494884211;'),('0f3846c6c5c4e17d21c517f53fb7d5dabdc08d10','127.0.0.1',1494884214,'__ci_last_regenerate|i:1494884214;'),('590a0c963ff6a590db2d84e86c48972d71f10b9f','127.0.0.1',1494884216,'__ci_last_regenerate|i:1494884216;'),('7a71cf42768a0859243f7043f072d5806588ddd7','127.0.0.1',1494884424,'__ci_last_regenerate|i:1494884424;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('4557f78b5999479eb6c2af515507cd7e0c63392f','127.0.0.1',1494884425,'__ci_last_regenerate|i:1494884425;'),('952489df07f070b94f92dc22b1fc43986f3ec595','127.0.0.1',1494884771,'__ci_last_regenerate|i:1494884771;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('3bc8bf0d51e9bdf7c851f4cfaf02f30e99214064','127.0.0.1',1494884483,'__ci_last_regenerate|i:1494884481;'),('57752031cf3497c04b29eacf23e9c414ccd81fd0','127.0.0.1',1494884966,'__ci_last_regenerate|i:1494884771;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('93ee6d4a206308c7f3888e93325ac5467c46e05e','127.0.0.1',1494902635,'__ci_last_regenerate|i:1494902635;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('40bbcaa4e64132db36b973a0f31ce7e60bb46fc8','127.0.0.1',1494902684,'__ci_last_regenerate|i:1494902650;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('fb2a5d0bdac85c51fbc772c4550f4a777e732162','127.0.0.1',1494903188,'__ci_last_regenerate|i:1494903188;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('b9499b678402d06df1c351f6381564aa92aa45c3','127.0.0.1',1494903503,'__ci_last_regenerate|i:1494903503;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('056eda0f4457aa8e6ac4f5650626535125326bfe','127.0.0.1',1494903804,'__ci_last_regenerate|i:1494903804;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('5bf2b03c712cce12c039d505e1db4c29b81a05a8','127.0.0.1',1494904235,'__ci_last_regenerate|i:1494904235;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('7d8271a7b4d1a6663466c8467f72a22068adec8e','127.0.0.1',1494904846,'__ci_last_regenerate|i:1494904846;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('2340dea0c7646faa36606cbff60526258bb4d0b9','127.0.0.1',1494908020,'__ci_last_regenerate|i:1494908020;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('ccda70c7824d895f0993899ee0c1687edf44294b','127.0.0.1',1494905692,'__ci_last_regenerate|i:1494905692;'),('5be11492cd7c191a6c0cb4d9664394e9f40acb1e','127.0.0.1',1494906038,'__ci_last_regenerate|i:1494906038;'),('5d9515dc60fb366f993401d56d6b5ba0cdfc716c','127.0.0.1',1494906535,'__ci_last_regenerate|i:1494906535;'),('92d7e222d08f58bb57c877df491f0bb6e3eeb75e','127.0.0.1',1494906881,'__ci_last_regenerate|i:1494906881;'),('5d9006572af72cebafdd537cc81e102d37ae4182','127.0.0.1',1494907212,'__ci_last_regenerate|i:1494907212;'),('196f97c62c8936d8179fcc7aaeb95d4d3a7fca2a','127.0.0.1',1494907513,'__ci_last_regenerate|i:1494907513;'),('b1c730389c41c21a37571ca5f598650e023a2582','127.0.0.1',1494907921,'__ci_last_regenerate|i:1494907921;'),('01a84d23795e7dedd77b42b0aafccdf2c242e2dc','127.0.0.1',1494908352,'__ci_last_regenerate|i:1494908352;'),('fa38d3d75c6854443030c234f698eaf554b8aa15','127.0.0.1',1494908409,'__ci_last_regenerate|i:1494908409;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('ea3a01ebb6c223cfa1f045bdb65695766d4ff442','127.0.0.1',1494908406,'__ci_last_regenerate|i:1494908352;'),('41bd4d60997de3661020d0dda150cc8b34bedd93','127.0.0.1',1494908910,'__ci_last_regenerate|i:1494908910;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('b374369e2fbad013530c414bb8e632194415fc2e','127.0.0.1',1494909218,'__ci_last_regenerate|i:1494909218;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('d8173af7dfce8e75b21cb5b24901c9e248dad089','127.0.0.1',1494909586,'__ci_last_regenerate|i:1494909586;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('2ef026bfa9a4ea247ace553c23b8bc381a787918','127.0.0.1',1494910013,'__ci_last_regenerate|i:1494910013;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('679eb936a2b50f8f2cc86af467aa2dedf5d76ba5','127.0.0.1',1494910941,'__ci_last_regenerate|i:1494910941;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('e78c6869dfb9f0897ffde89db67f11b34b1da7b3','127.0.0.1',1494911277,'__ci_last_regenerate|i:1494911277;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('86799d119dc02d4743f82417a0686e57ca248228','127.0.0.1',1494911917,'__ci_last_regenerate|i:1494911917;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('021b79a9c2deeceda3b9c1d686c98eef441c2e36','127.0.0.1',1494911579,'__ci_last_regenerate|i:1494911578;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('013d671c13f2aa401fc75e912e67fa8e9ad6b827','127.0.0.1',1494912475,'__ci_last_regenerate|i:1494912475;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('6fc207ebe757201c303cacbafb013a554ea50d13','127.0.0.1',1494912544,'__ci_last_regenerate|i:1494912475;user_session|a:1:{i:0;a:15:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:0:\"\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";}}'),('24bc992e1905fa551a11c74a280784846c5be0f8','127.0.0.1',1494920089,'__ci_last_regenerate|i:1494920089;'),('96f54093ef53a479a6919f40761a9d5e0986443d','127.0.0.1',1494920491,'__ci_last_regenerate|i:1494920491;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('e8a2e5b95b1b853f183a21337dbb458107d2a0c0','127.0.0.1',1494921363,'__ci_last_regenerate|i:1494921363;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('3055342fbf351d8a2bf9cee85e8921237bfd5ee5','127.0.0.1',1494921707,'__ci_last_regenerate|i:1494921707;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('21e4b050249ebc155123d0d55fbdb91e58364195','127.0.0.1',1494922085,'__ci_last_regenerate|i:1494922085;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('affc576c28b44a77b19663c84580d62ebe764ec0','127.0.0.1',1494926973,'__ci_last_regenerate|i:1494926973;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('7a0c31aa569e1820da9810a538426e51aa3223e5','127.0.0.1',1494928160,'__ci_last_regenerate|i:1494928160;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('5d46e0e031b9a6f89c67e8c0d8bd6caa98fbdbc3','127.0.0.1',1494927914,'__ci_last_regenerate|i:1494927914;'),('e980666e4a91780b8a976c3c245852fa6676f88e','127.0.0.1',1494928784,'__ci_last_regenerate|i:1494928784;'),('6d1b5cb1afe4ae14b055e93bf93c8977f5428f2a','127.0.0.1',1494935109,'__ci_last_regenerate|i:1494935109;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('a805930968deeaee9bcac320974b504e78765f51','127.0.0.1',1494928656,'__ci_last_regenerate|i:1494928656;'),('c3cc2953c2c3a701cb7c2aed6f6d06a566bfc167','127.0.0.1',1494928270,'__ci_last_regenerate|i:1494928270;'),('ffb4dfeb4883381e2b4f4b42d85ab1ff321a4144','127.0.0.1',1494934606,'__ci_last_regenerate|i:1494934606;'),('733cb6520e86084c3a14b2f9ccbadb916525ed56','127.0.0.1',1494933974,'__ci_last_regenerate|i:1494933974;'),('8d055898093bdea8c51a81702fe4cd963fb815a2','127.0.0.1',1494934422,'__ci_last_regenerate|i:1494934422;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"hlqlp\";s:5:\"title\";s:10:\"Bed & Bath\";s:11:\"description\";s:23:\"Essential Bedroom Items\";s:14:\"sub_categories\";s:14:\"bed,chairs,bin\";s:14:\"search_filters\";s:18:\"bedroom, duvet,bed\";s:12:\"category_url\";s:10:\"bedandbath\";s:10:\"created_on\";s:19:\"2017-05-09 13:28:16\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('3489b8c2c7b1e3ffeb14098b2e61e257d12c4a9a','127.0.0.1',1494935498,'__ci_last_regenerate|i:1494935498;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"hlqlp\";s:5:\"title\";s:10:\"Bed & Bath\";s:11:\"description\";s:23:\"Essential Bedroom Items\";s:14:\"sub_categories\";s:14:\"bed,chairs,bin\";s:14:\"search_filters\";s:18:\"bedroom, duvet,bed\";s:12:\"category_url\";s:10:\"bedandbath\";s:10:\"created_on\";s:19:\"2017-05-09 13:28:16\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('0f893669603f8f31b91a6b69d97e98f0893b94bd','127.0.0.1',1494935045,'__ci_last_regenerate|i:1494935045;'),('bcec4d2674797185ddf65ba5482b209066be5c17','127.0.0.1',1494935113,'__ci_last_regenerate|i:1494935109;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"nngkmyd6ii\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('4ac9864cc3a3d0e8e6a37873d70b4d78f88495e5','127.0.0.1',1494936200,'__ci_last_regenerate|i:1494936200;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('4551b4be955976391e2c11e6738ccb1cddf212a1','127.0.0.1',1494935919,'__ci_last_regenerate|i:1494935916;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"hlqlp\";s:5:\"title\";s:10:\"Bed & Bath\";s:11:\"description\";s:23:\"Essential Bedroom Items\";s:14:\"sub_categories\";s:14:\"bed,chairs,bin\";s:14:\"search_filters\";s:18:\"bedroom, duvet,bed\";s:12:\"category_url\";s:10:\"bedandbath\";s:10:\"created_on\";s:19:\"2017-05-09 13:28:16\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('efb938e030b98a89cd85c4029540c59698418e40','127.0.0.1',1494939549,'__ci_last_regenerate|i:1494939549;'),('02984278fc1278c158690876f0ae6cdb2e3cae1a','127.0.0.1',1494936664,'__ci_last_regenerate|i:1494936664;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('84251b6518e8034d44e5288ed72953bf937f8cba','127.0.0.1',1494937850,'__ci_last_regenerate|i:1494937850;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('2296d331a678e067ae9101f8ecbc3e3d3b2e6fc2','127.0.0.1',1494938266,'__ci_last_regenerate|i:1494938266;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('8af6c84479a06c73e6634b2970ad3630fbe5fc8d','127.0.0.1',1494939157,'__ci_last_regenerate|i:1494939157;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('1a8e5f2ac2a3afbc56ca88a80962c9dac06ec1af','127.0.0.1',1494944123,'__ci_last_regenerate|i:1494944123;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('ea3c65d7534342ae59414fc81e5385525d50780a','127.0.0.1',1494939518,'__ci_last_regenerate|i:1494939518;'),('f3a8f4ee12420639383c36bab70ca4b30b6ab34e','127.0.0.1',1494943026,'__ci_last_regenerate|i:1494943026;'),('fd1a6a6a6eba017280f3a70218551f9a3918c281','127.0.0.1',1494943395,'__ci_last_regenerate|i:1494943395;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"hlqlp\";s:5:\"title\";s:10:\"Bed & Bath\";s:11:\"description\";s:23:\"Essential Bedroom Items\";s:14:\"sub_categories\";s:14:\"bed,chairs,bin\";s:14:\"search_filters\";s:18:\"bedroom, duvet,bed\";s:12:\"category_url\";s:10:\"bedandbath\";s:10:\"created_on\";s:19:\"2017-05-09 13:28:16\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('8108b308ded81ebe210cb947c1afc962bf6ecb51','127.0.0.1',1494943804,'__ci_last_regenerate|i:1494943804;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"bt1qo4qy2x\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:21:\"This is a bathub next\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 13:40:20\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('27cdb07e703605105e05d1c925cb4f3f844e5b69','127.0.0.1',1494944115,'__ci_last_regenerate|i:1494944115;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"bt1qo4qy2x\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:21:\"This is a bathub next\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 13:40:20\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('f55171d9db3005cca6c282ec61a1823661e33f7b','127.0.0.1',1494944551,'__ci_last_regenerate|i:1494944551;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"bt1qo4qy2x\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:21:\"This is a bathub next\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 13:40:20\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('ed9cb4380c7f18d7ab0bd50b7c3827a4135c7269','127.0.0.1',1494945069,'__ci_last_regenerate|i:1494945069;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('9b4f771ed4b47ec0785478263508056cf51bc41c','127.0.0.1',1494944933,'__ci_last_regenerate|i:1494944933;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"eh441q7ytt\";s:5:\"title\";s:7:\"Kitchen\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 15:23:51\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('59c9e7e9317ce4f4e06467081b430e2befc72790','127.0.0.1',1494945801,'__ci_last_regenerate|i:1494945801;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"eh441q7ytt\";s:5:\"title\";s:7:\"Kitchen\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 15:23:51\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('bfda9c8c08caa0c79ac41abcdab90304ab929d17','127.0.0.1',1494946462,'__ci_last_regenerate|i:1494946462;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('293a392d9db90c380d5e7a015c504d941151e1d8','127.0.0.1',1494946390,'__ci_last_regenerate|i:1494946390;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"eh441q7ytt\";s:5:\"title\";s:7:\"Kitchen\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 15:23:51\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('9729142e1164c3a057ec70b8ff1a693ba0f9ae67','127.0.0.1',1494946462,'__ci_last_regenerate|i:1494946390;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:10:\"eh441q7ytt\";s:5:\"title\";s:7:\"Kitchen\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 15:23:51\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}'),('94bcc2c910617ccf91bbcc862c950c1d2d9aa632','127.0.0.1',1494946902,'__ci_last_regenerate|i:1494946902;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('6ff6b12b67d17cda39c2e381d1ef231529ac37ba','127.0.0.1',1494947596,'__ci_last_regenerate|i:1494947596;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('22bcd1c9a0cdc2d8d87b4720df54f5ce914f0003','127.0.0.1',1494947900,'__ci_last_regenerate|i:1494947900;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('e4903f1b8aa768b53c787a33f591220336809e34','127.0.0.1',1494948857,'__ci_last_regenerate|i:1494948857;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('04e5ef94826b071baff6493ace2430fd6c90123c','127.0.0.1',1494950330,'__ci_last_regenerate|i:1494950330;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('eaad7f7c4a0a520c6623eb32ab7ec8e8cf522216','127.0.0.1',1494950741,'__ci_last_regenerate|i:1494950741;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('b5706fb6fa1bad750017fc8f58652faae157e9e0','127.0.0.1',1494951079,'__ci_last_regenerate|i:1494951079;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('08c985e9e9d520d6fccec10df70a274895f48e9c','127.0.0.1',1494951922,'__ci_last_regenerate|i:1494951922;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('3196a017f4b4b343c0eab8051fbb1abddf504c33','127.0.0.1',1494952864,'__ci_last_regenerate|i:1494952864;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:5:\"9jtvq\";s:5:\"title\";s:8:\"Baththub\";s:11:\"description\";s:16:\"This is a bathub\";s:14:\"sub_categories\";s:26:\"bath, tub. bathu, tub bath\";s:14:\"search_filters\";s:15:\"bat, thub, thuf\";s:12:\"category_url\";s:8:\"baththub\";s:10:\"created_on\";s:19:\"2017-05-16 12:40:26\";s:7:\"shop_by\";N;s:11:\"price_range\";N;}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('50fc99c7f84faa0a73e841da5755b2a39e05a803','127.0.0.1',1494952777,'__ci_last_regenerate|i:1494952744;'),('a532074454ef17a99251fbb4020c5eae8a8ae107','127.0.0.1',1494953246,'__ci_last_regenerate|i:1494953246;'),('65340a8ff54015cd631a38c4ff45989933342e06','127.0.0.1',1494953344,'__ci_last_regenerate|i:1494953246;'),('acc90560ceed79687e9e0ecd72ffc4ce83947641','127.0.0.1',1494961001,'__ci_last_regenerate|i:1494961001;'),('85f86377983f0a70ab8965edcecf26220daa17bf','127.0.0.1',1494960620,'__ci_last_regenerate|i:1494960619;'),('eabd3c005e1eb2ba334117334362cd4b527ee719','127.0.0.1',1494961708,'__ci_last_regenerate|i:1494961708;'),('8b13fe70da3ee8248d4bca317825cdda11cc1112','127.0.0.1',1494961735,'__ci_last_regenerate|i:1494961735;'),('2e8558745ed0ec2242f9b46829a98128d10958d9','127.0.0.1',1494961742,'__ci_last_regenerate|i:1494961708;'),('2ce9da32c51892c07c4ec4734bcb6c48e0cda116','127.0.0.1',1494962058,'__ci_last_regenerate|i:1494962058;'),('ed31dd7307fd899dc61f71098d5842cebd20fbd7','127.0.0.1',1494962413,'__ci_last_regenerate|i:1494962413;'),('e47502bfb275c3f702cf8f4531ef360501048086','127.0.0.1',1494963236,'__ci_last_regenerate|i:1494963236;'),('a8af259c1e47db69c2937202c890a1f8d1cdfafb','127.0.0.1',1494963652,'__ci_last_regenerate|i:1494963652;'),('3b0d66a4281483fbbfb0510fb036f62894410882','127.0.0.1',1494963938,'__ci_last_regenerate|i:1494963936;'),('bdccbb4423445aeced70591f9ccc82478657cfc6','127.0.0.1',1494964497,'__ci_last_regenerate|i:1494964497;'),('9f0dcaac941a3c31db0d5b0d67b38955ee45aadf','127.0.0.1',1494964828,'__ci_last_regenerate|i:1494964828;'),('291663a90d8323ff300658e397cc5cc08931d5a9','127.0.0.1',1494965398,'__ci_last_regenerate|i:1494965398;'),('0fd6a6359368487586b633216ab027cf0d571b3b','127.0.0.1',1494969568,'__ci_last_regenerate|i:1494969568;'),('9748f1ef598e94272b353dadbc68b4be138c39c3','127.0.0.1',1494973126,'__ci_last_regenerate|i:1494973126;'),('7a954c95bbcde18674e5936796a46cc018b0b837','127.0.0.1',1494973443,'__ci_last_regenerate|i:1494973443;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:20:\"sndfh79a7e0wxhzz1939\";s:5:\"title\";s:8:\"Birthday\";s:11:\"description\";s:28:\"This is just a test category\";s:14:\"sub_categories\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:14:\"search_filters\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:12:\"category_url\";s:5:\"birth\";s:10:\"created_on\";s:19:\"2017-02-04 23:50:45\";s:7:\"shop_by\";N;s:11:\"price_range\";s:0:\"\";}}'),('3a0c4b22581d4102783919cbb584f08f48fc0de2','127.0.0.1',1494973779,'__ci_last_regenerate|i:1494973779;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:20:\"sndfh79a7e0wxhzz1939\";s:5:\"title\";s:8:\"Birthday\";s:11:\"description\";s:28:\"This is just a test category\";s:14:\"sub_categories\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:14:\"search_filters\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:12:\"category_url\";s:5:\"birth\";s:10:\"created_on\";s:19:\"2017-02-04 23:50:45\";s:7:\"shop_by\";N;s:11:\"price_range\";s:0:\"\";}}'),('3bc312650e209506542c45bd0b42a460fd107481','127.0.0.1',1494973972,'__ci_last_regenerate|i:1494973779;cat_details|a:1:{i:0;a:9:{s:11:\"category_id\";s:20:\"sndfh79a7e0wxhzz1939\";s:5:\"title\";s:8:\"Birthday\";s:11:\"description\";s:28:\"This is just a test category\";s:14:\"sub_categories\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:14:\"search_filters\";s:38:\"birth, birthday, birthdays,birthdaysss\";s:12:\"category_url\";s:5:\"birth\";s:10:\"created_on\";s:19:\"2017-02-04 23:50:45\";s:7:\"shop_by\";N;s:11:\"price_range\";s:0:\"\";}}user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"9s36627czb\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('33b50c622ab5a894a3e9aab6405a3edf65683c12','127.0.0.1',1494984811,'__ci_last_regenerate|i:1494984811;'),('b14f0ad25773403fc8520484c2c278c6f14df586','127.0.0.1',1494986195,'__ci_last_regenerate|i:1494986195;'),('25bc3f03a1a1c7f56306240cce716b3cca6dc957','127.0.0.1',1494991910,'__ci_last_regenerate|i:1494991910;'),('549c0670f87b0ae7237e16963035426bc6f3c34e','127.0.0.1',1494992278,'__ci_last_regenerate|i:1494992278;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('2ae4e06224ff41b817742f287b4fa50f57f885a2','127.0.0.1',1494992413,'__ci_last_regenerate|i:1494992278;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('c345f6e1ee03a93e99b08ca71c3ad4a3949a6ff2','127.0.0.1',1494992415,'__ci_last_regenerate|i:1494992415;'),('8d970719e34463d85b09324d9de4790ec0f63d48','127.0.0.1',1494992726,'__ci_last_regenerate|i:1494992726;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('9f400cbc91da3309826464b106702af8b126b6a4','127.0.0.1',1494993233,'__ci_last_regenerate|i:1494993233;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('010e52df871078c4f6683e3a1f80310e8e445282','127.0.0.1',1494994204,'__ci_last_regenerate|i:1494994204;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:4:\"cart\";N;s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('b8d0670704ce44ab513cc469679ef8a5e2e71fd7','127.0.0.1',1494995183,'__ci_last_regenerate|i:1494995183;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('244e976b46b8212d7663a743757cab4c7b2110af','127.0.0.1',1494995685,'__ci_last_regenerate|i:1494995685;'),('dc122e219b12615d22534f4610563315d1b90395','127.0.0.1',1494996252,'__ci_last_regenerate|i:1494996252;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('2fdbc918972fc0deaed535732fd8f8c09cb617b7','127.0.0.1',1494996608,'__ci_last_regenerate|i:1494996608;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('9e097cfec4ace222361f4e32c30a570e8a86bff7','127.0.0.1',1494997648,'__ci_last_regenerate|i:1494997648;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('27bf647b03707831db5dd80cf0b500bdfb6d0ee0','127.0.0.1',1494997980,'__ci_last_regenerate|i:1494997980;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('0f1979fbe437a0d2d5f1764a74b9aaff9b91ab20','127.0.0.1',1494998286,'__ci_last_regenerate|i:1494998286;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('4f3739381102eb82c98a2650b0820d4383343d43','127.0.0.1',1494998645,'__ci_last_regenerate|i:1494998644;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}'),('84d467e8a7789be7ae49f21ad50bf75b099f12b1','127.0.0.1',1494998757,'__ci_last_regenerate|i:1494998644;user_session|a:1:{i:0;a:17:{s:2:\"id\";s:2:\"34\";s:7:\"user_id\";s:15:\"bfy2993j09f76ti\";s:11:\"user_status\";s:1:\"0\";s:8:\"password\";s:60:\"$2y$10$B3PBn8mduW1Aca6FEM44p.PwmHSUj.sWcS9rDjtoUaLbP4JrgJ7yS\";s:5:\"email\";s:18:\"olamyy53@gmail.com\";s:4:\"code\";s:4:\"liwx\";s:2:\"ip\";s:9:\"127.0.0.1\";s:10:\"date_added\";s:19:\"2017-05-15 20:43:55\";s:13:\"date_modified\";N;s:11:\"walkthrough\";s:1:\"0\";s:12:\"is_logged_in\";s:1:\"1\";s:7:\"cart_id\";s:10:\"iy4ny5kc0o\";s:11:\"registry_id\";s:10:\"8d2fzjyran\";s:7:\"regType\";s:8:\"birthday\";s:12:\"registry_url\";s:10:\"olamilekan\";s:12:\"friend_email\";N;s:10:\"preview_id\";N;}}');
/*!40000 ALTER TABLE `lucy_ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lucy_couple`
--

DROP TABLE IF EXISTS `lucy_couple`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_couple` (
  `user_id` varchar(30) NOT NULL,
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
  PRIMARY KEY (`user_id`),
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
  `friend_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_lucky_user`
--

LOCK TABLES `lucy_lucky_user` WRITE;
/*!40000 ALTER TABLE `lucy_lucky_user` DISABLE KEYS */;
INSERT INTO `lucy_lucky_user` VALUES (8,'u5y8ioi8n1oqy4z',0,'ABC Hospita','MyEvent','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'1970-01-01 01:00:00','ututtt',NULL,NULL,NULL,'2017-05-14 15:01:45',0,NULL,NULL,NULL,0,NULL,'',NULL,'birthday','Testing',NULL);
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
INSERT INTO `lucy_misc` VALUES ('127.0.0.1',1,1,29,'2017-01-23 21:08:15');
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
  `friend_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_naming_user`
--

LOCK TABLES `lucy_naming_user` WRITE;
/*!40000 ALTER TABLE `lucy_naming_user` DISABLE KEYS */;
INSERT INTO `lucy_naming_user` VALUES (7,'u5y8ioi8n1oqy4z',0,'BotMaker','Deji Ayide','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'2016-01-05 00:00:00','ututtii',NULL,NULL,NULL,'2017-05-14 14:59:12',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','NextUp Hub',NULL);
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
INSERT INTO `lucy_product` VALUES ('Product','Product','028vnoxj5c','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:01:16',5,0,0,0,'2017-05-16 17:01:16','2017-05-16 17:01:16','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','1n06n6nc6g','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:05:53',5,0,0,0,'2017-05-16 17:05:53','2017-05-16 17:05:53','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','2m3p2ywvfh','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:34:38',5,0,0,0,'2017-05-16 16:34:38','2017-05-16 16:34:38','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','33h25lmw51','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:01:11',5,0,0,0,'2017-05-16 17:01:11','2017-05-16 17:01:11','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','5vz14tkp6j','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:00:01',5,0,0,0,'2017-05-16 17:00:01','2017-05-16 17:00:01','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('ksvks','5.5 inches IPS LCD capacitive touchscreen, 16M colors\nAndroid OS, v6.0 (Marshmallow)\nDual SIM (Micro-SIM/Nano-SIM, dual stand-by)\nMediatek MT6797 Helio X20\n64 GB, 3 GB RAM, microSD, up to 256 GB (uses SIM 2 slot)\n13 MP, f/2.0, phase detection autofocus, dual-LED (dual tone) flash','680980890','j','wjeh','whg','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Hot Deals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg','This is a short project description',10.00,'sndfh79a7e0wxhzz1939',NULL),('Product','Product','6j4jknhznn','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:25:23',5,0,0,0,'2017-05-16 17:25:23','2017-05-16 17:25:23','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','7b7c2ovekj','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:01:42',5,0,0,0,'2017-05-16 16:01:42','2017-05-16 16:01:42','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','a4otso3zs2','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:11:32',5,0,0,0,'2017-05-16 17:11:32','2017-05-16 17:11:32','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','af7or33yt7','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:34:42',5,0,0,0,'2017-05-16 16:34:42','2017-05-16 16:34:42','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('BKJBK','jdfnjb','bb','jdjb','fdjkn','fjb','fbj','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','New Products','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('Product','Product','be1qdt9h5x','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:34:33',5,0,0,0,'2017-05-16 16:34:33','2017-05-16 16:34:33','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('hdbf','jdbjkb','bjbj','jbkb','sbb','bdb','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Special Offer','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('tytt','bbbb','bjk','bb','jbbfjb','bdb','ljgl','skdvkbvwk','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Hot Deals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('Product','Product','cusmolqjlg','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:11:40',5,0,0,0,'2017-05-16 17:11:40','2017-05-16 17:11:40','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','d15y1xa47l','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:01:04',5,0,0,0,'2017-05-16 17:01:04','2017-05-16 17:01:04','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','d24imrhivx','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:45:08',5,0,0,0,'2017-05-16 17:45:08','2017-05-16 17:45:08','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','ddf2b24f87','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:34:24',5,0,0,0,'2017-05-16 16:34:24','2017-05-16 16:34:24','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','ecxll96ool','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:47:26',5,0,0,0,'2017-05-16 17:47:26','2017-05-16 17:47:26','Hot Deals','check','2-3 days','Yes','Test','tech','flink','45177714_m.jpg','Product',50.00,NULL,NULL),('Product','Product','f7nvjygidm','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:05:42',5,0,0,0,'2017-05-16 17:05:42','2017-05-16 17:05:42','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','fez105zatp','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:17:21',5,0,0,0,'2017-05-16 16:17:21','2017-05-16 16:17:21','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','gmuf4tumyc','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:11:19',5,0,0,0,'2017-05-16 17:11:19','2017-05-16 17:11:19','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('ndbdjkndb','jfb','hbdhbu','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','hbjhb','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('jn','jhbhjv','jbbj','hdbhv','bbv','hvbvb','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jbjk','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jbkjv','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','New Arrivals','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jhgfdjkfb6556','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,1,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('jjbk\n','fd','jkbjk','hdbhv','bbv','hvbvb','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Best Sellers','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('ndbdjkndb','jfb','jknjkbnb','kfbkf','fkbj','kbvkj','vbjks','bhjbf','bwjk','bejefqb',0,0,0,'2017-01-20 12:49:32',0,0,0,0,'2017-01-20 12:49:32','2017-01-20 12:49:32','Featured Products','kjbvjwb','2-3 days','Yes','wvbi','jwb','kjbwje','leye.jpg',NULL,10.00,NULL,NULL),('Product','Product','jxh8n5qrlq','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:06:57',5,0,0,0,'2017-05-16 17:06:57','2017-05-16 17:06:57','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('ANewProduct','Product','kh1qzhs4ya','Product','Product','Product','Pro','MOdel','Testing','Please Work',30,0,0,'2017-05-16 20:20:42',20,0,0,0,'2017-05-16 20:20:42','2017-05-16 20:20:42','Hot Deals','Test','2-3 days','Yes','No','Teu','Meto','39568285_s.jpg','Product',50.00,NULL,NULL),('Product','Product','khmpau6inh','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:18:20',5,0,0,0,'2017-05-16 16:18:20','2017-05-16 16:18:20','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','krpxug2a7n','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:34:17',5,0,0,0,'2017-05-16 16:34:17','2017-05-16 16:34:17','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','pxvohyssmy','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:19:41',5,0,0,0,'2017-05-16 16:19:41','2017-05-16 16:19:41','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','qlj6l8a1xb','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:23:07',5,0,0,0,'2017-05-16 16:23:07','2017-05-16 16:23:07','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','r8kjynkevv','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:45:44',5,0,0,0,'2017-05-16 17:45:44','2017-05-16 17:45:44','Hot Deals','check','2-3 days','Yes','Test','tech','flink','45177714_m.jpg','Product',50.00,NULL,NULL),('Product','Product','sdlymq3nt6','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:58:50',5,0,0,0,'2017-05-16 16:58:50','2017-05-16 16:58:50','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','u3nn51o5za','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:36:36',5,0,0,0,'2017-05-16 16:36:36','2017-05-16 16:36:36','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('ANewProduct','Product','u5s73nj1qn','Product','Product','Product','Pro','MOdel','Testing','Please Work',30,0,0,'2017-05-16 20:21:07',20,0,0,0,'2017-05-16 20:21:07','2017-05-16 20:21:07','Hot Deals','Test','2-3 days','Yes','No','Teu','Meto','39568285_s.jpg','Product',50.00,NULL,NULL),('Product','Product','umdbwjlkva','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 17:12:58',5,0,0,0,'2017-05-16 17:12:58','2017-05-16 17:12:58','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','wpfyqvg898','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 20:02:07',5,0,0,0,'2017-05-16 20:02:07','2017-05-16 20:02:07','Hot Deals','check','2-3 days','Yes','Test','tech','flink','45177714_m.jpg','Product',50.00,NULL,NULL),('ANewProduct','Product','xgcteueeto','Product','Product','Product','Pro','MOdel','Testing','Please Work',30,0,0,'2017-05-16 20:20:14',20,0,0,0,'2017-05-16 20:20:14','2017-05-16 20:20:14','Hot Deals','Test','2-3 days','Yes','No','Teu','Meto','39568285_s.jpg','Product',50.00,NULL,NULL),('Product','Product','y58ojdcrib','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:01:55',5,0,0,0,'2017-05-16 16:01:55','2017-05-16 16:01:55','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL),('Product','Product','ztqs5f4v1w','Product','Product','Product','product, product11, product','dsbjvb','jndsjkv','djsnvjn',10,0,0,'2017-05-16 16:22:35',5,0,0,0,'2017-05-16 16:22:35','2017-05-16 16:22:35','Hot Deals','check','2-3 days','Yes','Test','tech','flink','<','Product',50.00,NULL,NULL);
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
  `user_id` varchar(20) NOT NULL,
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
INSERT INTO `lucy_registry_items` VALUES ('eelqq4h','bfy2993j09f76ti','1n06n6nc6g',2,50.00,'<','2017-05-16 23:32:27'),('4pl2otl','bfy2993j09f76ti','680980890',53,10.00,'leye.jpg','2017-05-16 05:03:00'),('vpbwjab','bfy2993j09f76ti','bb',4,10.00,'leye.jpg','2017-05-16 09:01:56'),('n1d9m55','bfy2993j09f76ti','jhgfdjkfb6556',30,10.00,'leye.jpg','2017-05-16 05:19:12');
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
INSERT INTO `lucy_temp_user` VALUES (0,'lr9ra','127.0.0.1','2017-05-16 04:07:58','iy4ny5kc0o'),(0,'ffy05','\n&lt;div style=','2017-05-16 04:07:50','jkt5wvkdw3');
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
INSERT INTO `lucy_user_cart_items` VALUES ('e32tzx0','iy4ny5kc0o','680980890',64,10.0000,'leye.jpg','2017-05-16 08:41:36'),('gkil1ns','iy4ny5kc0o','028vnoxj5c',32,50.0000,'<','2017-05-17 04:41:15'),('qtnjir9','iy4ny5kc0o','bb',5,10.0000,'leye.jpg','2017-05-16 09:01:53'),('sgv7qcu','iy4ny5kc0o','1n06n6nc6g',45,50.0000,'<','2017-05-16 23:32:19');
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

--
-- Table structure for table `lucy_warming_user`
--

DROP TABLE IF EXISTS `lucy_warming_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lucy_warming_user` (
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
  `friend_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lucy_user_email_uindex` (`email`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lucy_warming_user`
--

LOCK TABLES `lucy_warming_user` WRITE;
/*!40000 ALTER TABLE `lucy_warming_user` DISABLE KEYS */;
INSERT INTO `lucy_warming_user` VALUES (1,'u5y8ioi8n1oqy4z',0,'ABC Hospita','$2y$10$.5IfMbCMD4.DEW86k2TbCOVBqeTNukE63vDrUlX05AA3mTXe6NRoK','kemime@me.com',NULL,'rdr3','::1','2017-05-14 08:32:14',NULL,NULL,'2016-01-05 00:00:00','ututtiiuuu',NULL,NULL,NULL,'2017-05-14 14:56:31',0,NULL,NULL,NULL,0,NULL,'',NULL,'2017-05-14 08:32:14','Testing',NULL);
/*!40000 ALTER TABLE `lucy_warming_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-17  6:34:37
