/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - cardmanagement
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cardmanagement` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cardmanagement`;

/*Table structure for table `card` */

DROP TABLE IF EXISTS `card`;

CREATE TABLE `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `value1` varchar(50) DEFAULT NULL,
  `value2` varchar(50) DEFAULT NULL,
  `value3` varchar(50) DEFAULT NULL,
  `value4` varchar(50) DEFAULT NULL,
  `value5` varchar(50) DEFAULT NULL,
  `value6` varchar(50) DEFAULT NULL,
  `value7` varchar(50) DEFAULT NULL,
  `value8` varchar(50) DEFAULT NULL,
  `value9` varchar(50) DEFAULT NULL,
  `card_img` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*Data for the table `card` */

insert  into `card`(`id`,`type`,`value1`,`value2`,`value3`,`value4`,`value5`,`value6`,`value7`,`value8`,`value9`,`card_img`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(20,'26','324','2432432','3243','432432','4324',NULL,NULL,NULL,NULL,'2',1,'2020-04-11 02:30:57','2020-04-11 18:15:11','2020-04-11 18:15:11'),
(21,'27','12321','321','3213','213','21321',NULL,NULL,NULL,NULL,'4',0,'2020-04-11 02:31:44','2020-04-11 18:15:08','2020-04-11 18:15:08'),
(23,'9','wq','213','12321','321','3123',NULL,NULL,NULL,NULL,'3',1,'2020-04-11 02:36:00','2020-04-11 09:32:35','2020-04-11 09:32:35'),
(24,'4','texas','120','123','231','213',NULL,NULL,NULL,NULL,'2',0,'2020-04-11 09:00:27','2020-04-11 18:15:04','2020-04-11 18:15:04'),
(25,'11','eqwewq','132','3','3123','12312',NULL,NULL,NULL,NULL,'2',1,'2020-04-11 18:12:29','2020-04-12 07:33:53',NULL),
(26,'12','2133','321','321','32131','2321',NULL,NULL,NULL,NULL,'4',0,'2020-04-11 18:15:20','2020-04-11 20:00:17',NULL),
(27,'13','21312','3','21321','312312','321',NULL,NULL,NULL,NULL,'3',0,'2020-04-11 18:15:27','2020-04-12 07:32:30',NULL),
(28,'14','city and state','1','2','3','4',NULL,NULL,NULL,NULL,'4',0,'2020-04-11 18:15:33','2020-04-12 08:53:45',NULL),
(29,'15','111','111','111','111','111',NULL,NULL,NULL,NULL,'4',1,'2020-04-11 18:15:39','2020-04-12 09:08:30',NULL),
(30,'16','qwe','232','123','323','232',NULL,NULL,NULL,NULL,'1',0,'2020-04-11 19:32:08','2020-04-12 08:53:43',NULL),
(31,'18','3','3','3','3','3',NULL,NULL,NULL,NULL,'1',0,'2020-04-11 19:33:15','2020-04-12 08:53:41',NULL),
(32,'23','1231','23','21321','321','312',NULL,NULL,NULL,NULL,'2',0,'2020-04-11 19:33:37','2020-04-12 08:53:39',NULL),
(33,'25','4','4','4','4','4',NULL,NULL,NULL,NULL,'1',1,'2020-04-11 19:36:21','2020-04-11 19:36:41','2020-04-11 19:36:41'),
(34,'10','united state','123','123','23','232',NULL,NULL,NULL,NULL,'1',0,'2020-04-11 20:00:51','2020-04-12 08:53:38',NULL),
(35,'22','united state','12','123','23','32',NULL,NULL,NULL,NULL,'1',1,'2020-04-11 20:01:04','2020-04-12 08:55:28',NULL),
(36,'21','New York','12','23','32','423',NULL,NULL,NULL,NULL,'2',1,'2020-04-11 20:55:48','2020-04-12 08:55:04',NULL),
(37,'19','texas','123','23','23','23',NULL,NULL,NULL,NULL,'2',1,'2020-04-11 20:56:07','2020-04-12 08:53:49',NULL),
(38,'20','ca,','12','23','23','32',NULL,NULL,NULL,NULL,'1',1,'2020-04-11 20:56:32','2020-04-12 07:56:39',NULL),
(39,'17','united state','232','323','23','232',NULL,NULL,NULL,NULL,'1',1,'2020-04-11 20:57:15','2020-04-12 08:16:59',NULL),
(40,'24','canada','123','232','3','23',NULL,NULL,NULL,NULL,'2',1,'2020-04-12 00:59:17','2020-04-12 07:55:11',NULL),
(41,'6','canada','22','22','22','100',NULL,NULL,NULL,NULL,'1',1,'2020-04-12 03:30:17','2020-04-12 08:35:07',NULL),
(43,'3','canada','122','23','32','232',NULL,NULL,NULL,NULL,'4',1,'2020-04-12 05:52:02','2020-04-12 08:18:52',NULL),
(44,'7','234','24','42','3242','42',NULL,NULL,NULL,NULL,'1',1,'2020-04-12 05:52:58','2020-04-12 08:41:36',NULL),
(45,'8','united state','232','323','323','32',NULL,NULL,NULL,NULL,'1',0,'2020-04-12 05:58:15','2020-04-12 09:08:12',NULL),
(46,'1','united','432','23','232','32',NULL,NULL,NULL,NULL,'1',0,'2020-04-12 06:00:44','2020-04-12 09:08:06',NULL),
(47,'5','123','232','323','232','32',NULL,NULL,NULL,NULL,'1',0,'2020-04-12 06:11:07','2020-04-12 09:07:51',NULL),
(48,'2','united state','234','23','32','32',NULL,NULL,NULL,NULL,'3',1,'2020-04-12 06:22:08','2020-04-12 09:07:50',NULL);

/*Table structure for table `cardlog` */

DROP TABLE IF EXISTS `cardlog`;

CREATE TABLE `cardlog` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(11) DEFAULT NULL,
  `action` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cardlog` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_11_26_013919_create_orders_table',1),
(5,'2019_11_26_063552_create_pickers_table',1),
(6,'2019_12_09_222330_create_warehouses_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `site_setting` */

DROP TABLE IF EXISTS `site_setting`;

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `site_name` varchar(500) DEFAULT NULL,
  `site_domain` varchar(500) DEFAULT NULL,
  `site_email` varchar(500) DEFAULT NULL,
  `site_address1` varchar(500) DEFAULT NULL,
  `site_address2` varchar(500) DEFAULT NULL,
  `site_address3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `site_setting` */

insert  into `site_setting`(`id`,`logo_url`,`site_name`,`site_domain`,`site_email`,`site_address1`,`site_address2`,`site_address3`) values 
(1,'OC4EB5YYSAk6GDzFEyk3wj8FRJrLmm7RaEAoieRi.png','Terrydale Live','terrydale.com','terrydale@gmail.com','+1 240 5168907','28-12 41* Avenue','Long Island City, NY');

/*Table structure for table `social_facebook_accounts` */

DROP TABLE IF EXISTS `social_facebook_accounts`;

CREATE TABLE `social_facebook_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_user_id` text NOT NULL,
  `provider` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `social_facebook_accounts` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `phone_num` varchar(200) DEFAULT NULL,
  `member` int(1) DEFAULT 0,
  `location` text DEFAULT NULL,
  `permission` int(1) DEFAULT 0,
  `remember_token` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`photo`,`phone_num`,`member`,`location`,`permission`,`remember_token`,`created_at`,`updated_at`) values 
(12,'maxim','maxim@gmail.com','$2y$10$dikMfFdB8f7pzX2STREZzevGkRKraT6fJU4fX7WUoPqL8eYwilwD6',NULL,'+1 240 516 8908',1,'united state, texas',1,'tHbm8X1VRQEBJTESbIatYWACqsUmbkJt7RO4GoPWCIP3s2e05ABaethJ3qvg','2020-04-02 21:33:10','2020-04-11 10:17:57'),
(14,'miracle','miracle@gmail.com','$2y$10$cGgG1Zw5i5krcgc7eL7//.v/k9TwhxIV25AVP/RL8obcNSPaAaDCG',NULL,NULL,0,NULL,1,'4UEqevlhRs5Yw0nVKr7Q4KJhOP76iPSesms5VO2Df3bVER1eo33qZparcECL','2020-04-11 10:18:23','2020-04-11 11:18:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
