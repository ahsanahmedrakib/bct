-- MySQL dump 10.13  Distrib 8.0.46, for Win64 (x86_64)
--
-- Host: localhost    Database: bct_app
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@bct.com','2026-09-06 21:52:04','$2y$12$IR2nAZxvZFloRzTLJaOMquPmGcq0MF6/y77T0WAHQYS4AiOLcFNz6','nF9ffOmtZj','2026-09-06 21:52:06','2026-09-06 21:52:06');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Admin',
  `published_date` date DEFAULT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'Cloud solutions for scalable IT infrastructure.','cloud-solutions-for-scalable-it-infrastructure','CLOUD','/images/home/blog/blog-01.jpg','<p>Cloud computing has transformed how businesses build and scale their IT infrastructure. From shared storage to on-demand compute, organisations can now provision resources in minutes instead of months.</p><p>With the right cloud strategy, businesses reduce capital expenditure, improve resilience and unlock the flexibility needed to grow. Explore how managed cloud services can keep your operations agile.</p>','Admin','2026-04-09',1,1,'2026-09-18 03:39:53','2026-09-23 13:05:43'),(2,'Innovative software solutions for businesses.','innovative-software-solutions-for-businesses','SOFTWARE','/images/home/blog/blog-02.jpg','<p>Modern software streamlines operations, automates repetitive tasks and delivers insights that drive better decisions. Choosing the right tools makes all the difference.</p><p>Whether it is custom development or integrating proven platforms, the goal is the same: software that works for your people and your goals.</p>','Admin','2026-04-09',1,2,'2026-09-18 03:39:53','2026-09-23 13:05:43'),(3,'Practical tips for secure it systems checklist.','practical-tips-for-secure-it-systems-checklist','CYBERSAFE','/images/home/blog/blog-03.jpg','<p>Security is not a one-off project — it is an ongoing process. A practical IT security checklist keeps employees safe, systems patched and data protected.</p><p>Start with the fundamentals: strong passwords, multi-factor authentication, regular backups and keeping software up to date.</p>','Admin','2026-04-09',1,3,'2026-09-18 03:39:53','2026-09-23 13:05:43');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel-cache-BrsBQuFL6PMD6d3b','a:1:{s:11:\"valid_until\";i:1790005625;}',1790841365),('laravel-cache-dw6ddZMs6rSKw7il','a:1:{s:11:\"valid_until\";i:1790192129;}',1791397409),('laravel-cache-KLIZdp2yhqsMrybN','a:1:{s:11:\"valid_until\";i:1790020370;}',1790841350),('laravel-cache-nGvgYiRJIADiAn5P','a:1:{s:11:\"valid_until\";i:1790178630;}',1791230070),('laravel-cache-Yat0ZnZYwX4jlTST','a:1:{s:11:\"valid_until\";i:1790011394;}',1790841374),('laravel-cache-YcPrDf8fyxD65Glr','a:1:{s:11:\"valid_until\";i:1790184638;}',1791230078);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Textile & Garments',1,'2026-09-16 11:28:44','2026-09-16 11:28:44'),(2,'Fashion & Retail',1,'2026-09-16 11:28:44','2026-09-16 11:28:44'),(3,'IT & Engineering',1,'2026-09-16 11:28:44','2026-09-16 11:28:44'),(4,'Business & Corporate',1,'2026-09-16 11:28:44','2026-09-16 11:28:44'),(5,'Healthcare & Hospitality',1,'2026-09-16 11:28:44','2026-09-16 11:28:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
INSERT INTO `contact_messages` VALUES (3,'5tt4ttt','a@gmail.com','01631112475','ffffffff','efwfffff e fwfef',0,'2026-09-23 13:52:27','2026-09-23 13:52:27'),(4,'Davidexowl','genzprotecton@gmail.com','83385366483','UK Breaking News24x7','et the latest UK breaking news and global headlines with UK Breaking News24x7. Stay updated on politics, business, technology, sports, entertainment, and more—24/7 - ukbreakingnews24x7.com',0,'2026-09-24 01:49:28','2026-09-24 01:49:28'),(5,'Adelaida Annand','info@freeb2bdata.org','92473177','FreeB2BData.org Shutting Down','Hello,\r\n\r\nI am Adelaida Annand from FreeB2BData\r\n\r\nIt is with sad regret to inform you that we are shutting down\r\n\r\nWe have over 252 countries and over 33 million companies available in our database with phone numbers, industries, emails, etc.\r\n\r\nPlease come and download your data in the next 24 hours. \r\n\r\nhttps://Adelaida.freeb2bdata.org\r\n\r\nRegards,\r\nAdelaida Annand',0,'2026-09-24 12:23:49','2026-09-24 12:23:49'),(6,'RobertRen','gregoryj8tl2g@gmail.com','82651914628','Hi, i am write about   the price','Hi, ego volo scire vestri pretium.',0,'2026-09-25 01:13:50','2026-09-25 01:13:50'),(7,'RobertRen','gregoryj8tl2g@gmail.com','84782315662','Hallo  i am writing about your   prices','Kaixo, zure prezioa jakin nahi nuen.',0,'2026-09-25 19:57:09','2026-09-25 19:57:09');
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'How can IT solutions benefit my business?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,1,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(2,'How do I know which IT solution is right for my business?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,2,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(3,'What is your approach to risk management?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,3,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(4,'What is IT Managed Services, and how does it work?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,4,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(5,'How do you ensure data security in IT solutions?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,5,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(6,'Can you integrate IT solutions with my existing systems?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,6,'2026-09-18 07:15:07','2026-09-18 07:15:07'),(7,'How do you optimize IT infrastructure for scalability?','In today\'s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach.',1,7,'2026-09-18 07:15:07','2026-09-18 07:15:07');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_images`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

LOCK TABLES `gallery_images` WRITE;
/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
INSERT INTO `gallery_images` VALUES (1,'/images/pages/gallery/gallery_10_1.jpg',1,1,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(2,'/images/pages/gallery/gallery_10_2.jpg',1,2,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(3,'/images/pages/gallery/gallery_10_3.jpg',1,3,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(4,'/images/pages/gallery/gallery_10_4.jpg',1,4,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(5,'/images/pages/gallery/gallery_10_5.jpg',1,5,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(6,'/images/pages/gallery/gallery_10_6.jpg',1,6,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(7,'/images/pages/gallery/gallery_10_7.jpg',1,7,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(8,'/images/pages/gallery/gallery_10_8.jpg',1,8,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(9,'/images/pages/gallery/gallery_10_9.jpg',1,9,'2026-09-18 02:14:46','2026-09-18 02:14:46'),(10,'/images/pages/gallery/gallery_11.jpg',1,10,'2026-09-18 02:14:47','2026-09-18 02:14:47'),(11,'/images/pages/gallery/gallery_11_1.jpg',1,11,'2026-09-18 02:14:47','2026-09-18 02:14:47');
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hero_slides`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hero_slides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hero_slides`
--

LOCK TABLES `hero_slides` WRITE;
/*!40000 ALTER TABLE `hero_slides` DISABLE KEYS */;
INSERT INTO `hero_slides` VALUES (1,'Reliable IT. Real-Time Results.','Comprehensive IT Solutions for Digital World','Our IT solutions combine modern technologies, expert strategies, and reliable services to meet the evolving technological needs of businesses and organizations.',NULL,'/images/home/hero/hero_1.jpg',1,1,'2026-09-17 12:32:30','2026-09-17 12:32:30'),(2,'Design. Develop. Deliver.','Your Vision, Our Web And App Mastery','Transform your ideas into powerful digital experiences with innovative web and app solutions designed to streamline operations, improve efficiency, and drive growth.',NULL,'/images/home/hero/hero_2.jpg',1,2,'2026-09-17 12:32:30','2026-09-17 12:32:30'),(3,'Code. Create. Conquer.','Unlocking the Future with Digital Solutions','Embrace digital transformation with smart technologies and innovative solutions that improve business processes, enhance customer experiences, and create lasting growth.',NULL,'/images/home/hero/hero_3.jpg',1,3,'2026-09-17 12:32:30','2026-09-17 12:32:30'),(4,'Internet','BCT & Business Internet','High-speed, redundant pipelines keeping your office fast and reliable.',NULL,'/images/home/hero/hero_4.jpg',1,4,'2026-09-17 12:32:30','2026-09-17 12:32:30'),(5,'Cyber Security','Cyber Security & Data Protection','Proactive real-time monitoring and defenses to keep your data safe.',NULL,'/images/home/hero/hero_5.jpg',1,5,'2026-09-17 12:32:30','2026-09-17 12:32:30'),(6,'Cloud Services','Microsoft 365 & Cloud Services','Secure email, collaboration and cloud services — set up the right way.',NULL,'/images/home/hero/hero_6.jpg',1,6,'2026-09-17 12:32:30','2026-09-17 12:32:30');
/*!40000 ALTER TABLE `hero_slides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `directions_link` varchar(255) DEFAULT NULL,
  `color` varchar(255) NOT NULL DEFAULT 'blue',
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Head Office','Dhaka, Bangladesh','House# 86, Road# Lake Drive, Sector#7, Uttara, Dhaka, Bangladesh','+880 1313010180','+880 9666777009','contact@bct.com.bd','https://www.google.com/maps/search/House+86+Road+Lake+Drive+Sector+7+Uttara+Dhaka+Bangladesh','blue',1,1,'2026-09-18 03:39:57','2026-09-18 03:39:57'),(2,'Branch Office','Dhaka, Bangladesh','House#6, Road# Shera Bangal Avenue, Block#B, Dolipara, Uttara, Dhaka-1230','+880 1313010180','+880 9666777009','contact@bct.com.bd','https://www.google.com/maps/search/House+6+Road+Shera+Bangal+Avenue+Block+B+Dolipara+Uttara+Dhaka+1230','purple',1,2,'2026-09-18 03:39:57','2026-09-18 03:39:57');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marquee_items`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marquee_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marquee_items`
--

LOCK TABLES `marquee_items` WRITE;
/*!40000 ALTER TABLE `marquee_items` DISABLE KEYS */;
INSERT INTO `marquee_items` VALUES (1,'NETWORK SETUP',1,1,'2026-09-21 13:36:06','2026-09-21 13:36:06'),(2,'SOLUTIONS',1,2,'2026-09-21 13:36:06','2026-09-21 13:36:06'),(3,'CONSULTING',1,3,'2026-09-21 13:36:06','2026-09-21 13:36:06'),(4,'IT SERVICES',1,4,'2026-09-21 13:36:06','2026-09-21 13:36:06');
/*!40000 ALTER TABLE `marquee_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_08_26_163620_create_contact_messages_table',2),(5,'2026_09_07_093608_create_admins_table',2),(6,'2026_09_16_000000_create_projects_table',3),(7,'2026_09_16_100000_create_categories_table',4),(8,'2026_09_17_000000_create_team_members_table',5),(9,'2026_09_18_000000_create_hero_slides_table',6),(10,'2026_09_18_000001_add_link_to_hero_slides_table',7),(11,'2026_09_18_000002_create_gallery_images_table',8),(12,'2026_09_18_000003_create_blog_posts_table',9),(13,'2026_09_18_000004_create_pricing_plans_table',9),(14,'2026_09_18_000005_create_locations_table',9),(15,'2026_09_18_000006_create_faqs_table',10),(16,'2026_09_22_000000_create_marquee_items_table',11),(17,'2026_09_24_000001_add_slug_to_blog_posts_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pricing_plans`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pricing_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pricing_plans`
--

LOCK TABLES `pricing_plans` WRITE;
/*!40000 ALTER TABLE `pricing_plans` DISABLE KEYS */;
INSERT INTO `pricing_plans` VALUES (1,'Basic Package','৳199.00','/Monthly','[\"Community Support\",\"Dedicated Tech Experts\",\"Unlimited Storage\",\"Custom Domains\",\"24\\/7 System Monitoring\"]',0,1,1,'2026-09-18 03:39:55','2026-09-18 03:39:55'),(2,'Standard Package','৳299.00','/Monthly','[\"Community Support\",\"Dedicated Tech Experts\",\"Unlimited Storage\",\"Custom Domains\",\"24\\/7 System Monitoring\"]',1,1,2,'2026-09-18 03:39:55','2026-09-18 03:39:55'),(3,'Premium Package','৳399.00','/Monthly','[\"Community Support\",\"Dedicated Tech Experts\",\"Unlimited Storage\",\"Custom Domains\",\"24\\/7 System Monitoring\"]',0,1,3,'2026-09-18 03:39:55','2026-09-18 03:39:55');
/*!40000 ALTER TABLE `pricing_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_category_id_foreign` (`category_id`),
  CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,2,'Rizqin Abd','https://rizqinabd.com','/images/web/portfolio/rizqinabd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(2,4,'Blue Arc Sourcing','https://bluearcsourcing.net','/images/web/portfolio/bluearcsourcing.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(3,1,'Mahatex BD','https://mahatexbd.com','/images/web/portfolio/mahatexbd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(4,3,'Ahead Solar','https://aheadsolarbd.com','/images/web/portfolio/aheadsolarbd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(5,3,'Bismillah Computer & Technology','https://bct.com.bd','/images/web/portfolio/bct.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(6,3,'TS Network','https://tsnetwork.net.bd','/images/web/portfolio/tsnetwork.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(7,1,'Trax Textile','https://traxtextile.com','/images/web/portfolio/traxtextile.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(8,1,'Texman BD','https://texman-bd.com','/images/web/portfolio/texman.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(9,3,'Limbs Engineering','https://limbsengineering.com','/images/web/portfolio/limbsengineering.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(10,4,'Ignite Global Ltd','https://ignitegloballtd.com','/images/web/portfolio/ignitegloballtd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(11,1,'Flatknit Sourcing','https://flatknitsourcing.com','/images/web/portfolio/flatknitsourcing.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(12,5,'BD Paradise','https://bdparadise.com','/images/web/portfolio/bdparadise.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(13,5,'RM Nursing BD','https://rmnursingbd.com','/images/web/portfolio/rmnursingbd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(14,1,'Brand Tex BD','https://brandtexbd.com','/images/web/portfolio/brandtexbd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(15,4,'Design Hub BD','https://designhub-bd.com','/images/web/portfolio/designhubbd.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28'),(16,2,'Lenient Fashion','https://lenientfashion.com','/images/web/portfolio/lenientfashion.png',1,'2026-09-16 03:33:28','2026-09-16 03:33:28');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_members`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `x` varchar(255) DEFAULT NULL,
  `seed` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_members`
--

LOCK TABLES `team_members` WRITE;
/*!40000 ALTER TABLE `team_members` DISABLE KEYS */;
INSERT INTO `team_members` VALUES (1,'Tamzid Hasan','IT Consultant','Consultant','/images/home/team/thp.png',NULL,NULL,NULL,NULL,1,1,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(2,'Tanzim Hasan Anik','Director','Director','/images/home/team/tha.jpg',NULL,NULL,NULL,NULL,1,2,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(3,'Nazmul Apple','System Engineer','Engineer','/images/home/team/na.jpeg',NULL,NULL,NULL,NULL,1,3,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(4,'Habibullah Mezbah','Web Developer','Developer','/images/home/team/hm.png',NULL,NULL,NULL,NULL,1,4,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(5,'Ahsan Ahmed Rakib','Software Engineer','Engineer','/images/home/team/aar.jpg',NULL,NULL,NULL,NULL,1,5,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(6,'Md. Tarikul Islam','Technical Support Engineer','Engineer','/images/home/team/ti.jfif',NULL,NULL,NULL,NULL,1,6,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(7,'Rizwan Sadat','IT Executive','Executive','/images/home/team/rs.jpeg',NULL,NULL,NULL,NULL,1,7,'2026-09-17 00:13:01','2026-09-17 00:13:01'),(8,'Chandra Barai','Marketing Executive & Customer Support','Executive','/images/home/team/cb.jpeg',NULL,NULL,NULL,NULL,1,8,'2026-09-17 00:13:01','2026-09-17 00:13:01');
/*!40000 ALTER TABLE `team_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2026-09-24  1:58:04
