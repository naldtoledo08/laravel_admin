/*
SQLyog Ultimate v8.82 
MySQL - 5.6.17 : Database - site_admin
*********************************************************************
*/
/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1 = sidebar, 2 = navigation, 3 = both sidebar and navigation',
  `parent_id` int(11) DEFAULT '0',
  `is_parent` tinyint(2) DEFAULT '0',
  `role_access` varchar(250) DEFAULT NULL,
  `active` tinyint(2) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

insert  into `pages`(`id`,`name`,`url`,`type`,`parent_id`,`is_parent`,`role_access`,`active`,`created_at`,`updated_at`) values (1,'Users','/user',1,0,0,NULL,1,'2016-10-10 00:00:01',NULL),(2,'Roles','/role',1,0,0,NULL,1,'2016-10-10 00:00:01',NULL),(3,'Pages','/page',1,0,0,NULL,1,'2016-10-10 00:00:01',NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `role_sidebar` */

DROP TABLE IF EXISTS `role_sidebar`;

CREATE TABLE `role_sidebar` (
  `role_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `role_sidebar` */

insert  into `role_sidebar`(`role_id`,`page_id`) values (1,1),(1,2),(1,3),(2,3);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `enable` tinyint(1) DEFAULT '1',
  `active` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`description`,`enable`,`active`,`created_at`,`updated_at`) values (1,'Admin','Supposed to be the User that can access all pages on our entire website.',1,1,NULL,NULL),(2,'Guest','Guest account',1,1,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `remarks` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enable` tinyint(4) DEFAULT '0',
  `active` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role_id`,`remarks`,`remember_token`,`enable`,`active`,`created_at`,`updated_at`) values (1,'Ronald Toledo','nald.toledo08@gmail.com','$2y$10$Xr4TqpZjvITjbnbGEI2EQ.Mes7pCpuHTVNGRTD0ofRlaggzYZtp4a',1,'','Jvu3hsiRQ90KTk8TNy8IaBeBaASEyj4dddOwIGfsEhCuyaxKLcxG7TIvssiD',1,1,'2016-08-15 05:21:14','2016-10-11 09:03:05'),(2,'Guest','guest@gmail.com','$2y$10$Xr4TqpZjvITjbnbGEI2EQ.Mes7pCpuHTVNGRTD0ofRlaggzYZtp4a',2,'','cbXBSxPfbdKmoKEc2qKn0fn1jAMKXvLhxdaEbkLZYh3PmNA0mmHkq5m9l0Nd',1,1,'2016-08-15 05:28:10','2016-10-11 09:02:47');
