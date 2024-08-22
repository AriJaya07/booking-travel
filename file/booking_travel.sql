/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.17-MariaDB : Database - booking_travel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `activity_itinerary` */

DROP TABLE IF EXISTS `activity_itinerary`;

CREATE TABLE `activity_itinerary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_main_id` int(11) DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `activity_itinerary` */

insert  into `activity_itinerary`(`id`,`activity_main_id`,`location_name`,`descriptions`,`idx`,`reg_date`,`last_update`) values 
(8,16,' Manta Bay, Indonesia ','Visit',2,'2024-02-21 16:09:05','2024-02-21 16:19:50'),
(9,16,' Gamat Bay, Indonesia ','Visit',3,'2024-02-21 16:12:10','2024-02-21 16:12:10'),
(10,16,' Crystal Bay Nusa Penida, Indonesia ','Visit',4,'2024-02-21 16:12:23','2024-02-21 16:18:19'),
(11,16,'The Wall (snorkeling place) ','',5,'2024-02-21 16:12:41','2024-02-21 16:12:41'),
(13,16,'Sparrow snorkeling ','Starting location',1,'2024-02-21 16:17:14','2024-02-21 16:21:11'),
(18,16,'Sparrow snorkeling','Arrive back at',6,'2024-02-21 16:21:08','2024-02-21 16:21:08');

/*Table structure for table `activity_main` */

DROP TABLE IF EXISTS `activity_main`;

CREATE TABLE `activity_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `introduce` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `highlights` text DEFAULT NULL,
  `inclusions` text DEFAULT NULL,
  `exclusions` text DEFAULT NULL,
  `guide_info_id` int(11) DEFAULT NULL,
  `important_information` text DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `star` varchar(10) DEFAULT NULL,
  `review` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `activity_main` */

insert  into `activity_main`(`id`,`category_id`,`title`,`introduce`,`description`,`highlights`,`inclusions`,`exclusions`,`guide_info_id`,`important_information`,`reg_date`,`last_update`,`star`,`review`) values 
(16,1,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','Discover the diverse marine wildlife in Nusa Penida with this boat tour from Banjar Nyuh Harbor. Look for majestic manta rays, search for turtles, and see unique corals during 4 snorkeling stops.','Snorkel at top locations like Manta Bay, Gamat Bay, Crystal Bay, and The Wall on this guided boat tour from Banjar Nyuh Harbor on Nusa Penida. Share the moment with the included GoPro photos and videos taken by your guide throughout your tour.\r\n\r\nMeet your guide at the activity provider\'s office in Banjar Nyuh Harbor and hop onboard the boat. Make the most of your day with a briefing that includes instructions and tips. Gear up with the included mask and fins. Feel the wind in your hair as you glide to the first snorkeling stop.\r\n\r\nPlunge into the waters of Manta Bay, an oasis for swimming with giant oceanic manta rays, one of the most exciting creatures to encounter in the water. With a wingspan of up to 18 feet (5.5 meters), manta rays are some of the ocean’s most unforgettable creatures.\r\n\r\nHead to Crystal Bay, a secluded bay with lots of wildlife including turtles, moray eels, rays, and sometimes even harmless bamboo sharks. Continue your snorkeling adventure with a visit to Gamat Bay, known for its excellent visibility and abundance of tropical fish.\r\n\r\nFinally reach The Wall where you can snorkel over the blood-red coral take in underwater views of the deep drop-off point at the edge of the coral plateau. The nutrient-rich water allows hard and soft corals to thrive here which supports a healthy ecosystem of marine animals.\r\n\r\nAfter snorkeling, return to the boat to shower, dry off, and hydrate with the include mineral water. While returning to the harbor, your guide enjoy the videos and photos captured during your magical snorkeling experience.','[\"Snorkel alongside the graceful manta rays and laidback turtles of Nusa Penida\",\"Explore 4 unique snorkeling spots including caves, bays, beaches and coral reefs\",\"Immerse yourself in the marine life and colorful corals of Nusa Penida Island\",\"See schools of tropical fish swimming among colorful corals in clear, calm water\",\"Get underwater photos and videos of your snorkeling fun taken by your guide\"]','[\"Boat trip\",\"Guide\",\"Snorkeling at 4 spots\",\"GoPro photo and videos\",\"Snorkel and fins\",\"Shower access and towel\",\"Mineral water\",\"Insurance\"]','[\"Hotel pickup and drop-off\"]',1,'<p>For your safety, the exact snorkeling locations may change at the captain\'s discretion based on weather and sea conditions</p><p>Spotting specific wildlife like manta rays and sea turtles, cannot be guaranteed</p>','2024-02-21 15:49:18','2024-03-12 12:38:53','4','25555');

/*Table structure for table `activity_options` */

DROP TABLE IF EXISTS `activity_options`;

CREATE TABLE `activity_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_main_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `languages` text DEFAULT NULL,
  `private` int(11) DEFAULT NULL,
  `group_size` varchar(50) DEFAULT NULL,
  `is_audio_guide` int(11) DEFAULT NULL,
  `audio_guide` text DEFAULT NULL,
  `is_info_booklets` int(11) DEFAULT NULL,
  `info_booklets` text DEFAULT NULL,
  `is_time_length` int(11) DEFAULT NULL,
  `time_duration_val` text DEFAULT NULL,
  `time_validity_val` text DEFAULT NULL,
  `stop_accept_time` text DEFAULT NULL,
  `meeting_point` varchar(255) DEFAULT NULL,
  `meeting_point_maplink` text DEFAULT NULL,
  `describe_point` text DEFAULT NULL,
  `time_before_activity` text DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `activity_options` */

insert  into `activity_options`(`id`,`activity_main_id`,`title`,`languages`,`private`,`group_size`,`is_audio_guide`,`audio_guide`,`is_info_booklets`,`info_booklets`,`is_time_length`,`time_duration_val`,`time_validity_val`,`stop_accept_time`,`meeting_point`,`meeting_point_maplink`,`describe_point`,`time_before_activity`,`reg_date`,`last_update`,`status`) values 
(24,16,'Banjar Nyuh: Boat Tour with Manta Ray Snorkeling Stops','[\"English\",\"Indonesia\"]',0,'0',1,'[\"English\",\"Japan\"]',NULL,'null',1,'2.5 Hour','','60 Minutes','Sparrow snorkeling ','https://maps.app.goo.gl/jrEmMWLFGAN9vkv1A','Meet at the \'Sparrow Snorkeling\' office, on the beach at Banjar Nyuh, Nusa Penida.','Not relevant for this activity','2024-02-21 15:52:53','2024-02-21 15:53:52','active'),
(26,16,'Banjar Nyuh: Boat Tour with Manta Ray Snorkeling Stops','[\"English\",\"Indonesia\"]',0,'0',1,'[\"English\"]',NULL,'null',1,'30 Minute','','60 Minutes','Sparrow snorkeling ','https://maps.app.goo.gl/jrEmMWLFGAN9vkv1A','Meet at the \'Sparrow Snorkeling\' office, on the beach at Banjar Nyuh, Nusa Penida.','Not relevant for this activity','2024-02-21 15:52:53','2024-02-21 15:53:52','active'),
(27,16,'Banjar Nyuh: Boat Tour with Manta Ray Snorkeling Stops','[\"Jepang\"]',0,'0',1,'[\"English\"]',NULL,'null',1,'5 Day','','60 Minutes','Sparrow snorkeling ','https://maps.app.goo.gl/jrEmMWLFGAN9vkv1A','Meet at the \'Sparrow Snorkeling\' office, on the beach at Banjar Nyuh, Nusa Penida.','Not relevant for this activity','2024-02-21 15:52:53','2024-02-21 15:53:52','active');

/*Table structure for table `activity_options_availibity` */

DROP TABLE IF EXISTS `activity_options_availibity`;

CREATE TABLE `activity_options_availibity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options_id` int(11) DEFAULT NULL,
  `schedule_name` varchar(255) DEFAULT NULL,
  `schedule_start_date` datetime DEFAULT NULL,
  `schedule_end_date` datetime DEFAULT NULL,
  `schedule_minpax` int(11) DEFAULT NULL,
  `schedule_maxpax` int(11) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `activity_options_availibity` */

insert  into `activity_options_availibity`(`id`,`options_id`,`schedule_name`,`schedule_start_date`,`schedule_end_date`,`schedule_minpax`,`schedule_maxpax`,`reg_date`,`last_update`) values 
(18,24,'manta','2024-02-04 00:00:00','2025-12-31 00:00:00',1,5,'2024-02-21 15:54:53','2024-02-21 15:56:25'),
(19,26,'manta','2024-02-04 00:00:00','2025-12-31 00:00:00',1,10,'2024-02-21 15:54:53','2024-02-21 15:56:25'),
(20,27,'manta','2024-02-04 00:00:00','2025-12-31 00:00:00',1,15,'2024-02-21 15:54:53','2024-02-21 15:56:25');

/*Table structure for table `activity_options_availibity_timeslot` */

DROP TABLE IF EXISTS `activity_options_availibity_timeslot`;

CREATE TABLE `activity_options_availibity_timeslot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaibility_id` int(11) DEFAULT NULL,
  `days` varchar(50) DEFAULT NULL,
  `time_slot` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `activity_options_availibity_timeslot` */

insert  into `activity_options_availibity_timeslot`(`id`,`avaibility_id`,`days`,`time_slot`) values 
(29,18,'mon','[\"09:00\",\"09:15\",\"09:30\",\"13:30\",\"13:45\",\"14:00\"]'),
(30,18,'tue','[\"09:00\",\"09:15\",\"09:30\",\"13:30\",\"13:45\",\"14:00\"]');

/*Table structure for table `activity_options_availibity_type_age` */

DROP TABLE IF EXISTS `activity_options_availibity_type_age`;

CREATE TABLE `activity_options_availibity_type_age` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaibility_id` int(11) DEFAULT NULL,
  `type_name` int(11) DEFAULT NULL,
  `age_from` int(11) DEFAULT NULL,
  `age_to` int(11) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `activity_options_availibity_type_age` */

/*Table structure for table `activity_options_availibity_type_age_price` */

DROP TABLE IF EXISTS `activity_options_availibity_type_age_price`;

CREATE TABLE `activity_options_availibity_type_age_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaibility_id` int(11) DEFAULT NULL,
  `from` float DEFAULT NULL,
  `to` float DEFAULT NULL,
  `cust_pays` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `activity_options_availibity_type_age_price` */

insert  into `activity_options_availibity_type_age_price`(`id`,`avaibility_id`,`from`,`to`,`cust_pays`) values 
(22,18,1,25,300000),
(23,19,1,60,250000),
(24,20,1,50,500000);

/*Table structure for table `activity_photo` */

DROP TABLE IF EXISTS `activity_photo`;

CREATE TABLE `activity_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `filename` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `activity_photo` */

insert  into `activity_photo`(`id`,`activity_id`,`name`,`filename`,`file_path`,`reg_date`,`last_update`) values 
(6,16,'activity_upload','1708501891_4bc75f6e75c95c25b31f.jpg','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(7,16,'activity_upload','1708501891_cb027334f5a797797930.jpg','activity/uploads/1708501891_cb027334f5a797797930.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(8,16,'activity_upload','1708501891_c24e910d6ea678d6d0cc.jpg','activity/uploads/1708501891_c24e910d6ea678d6d0cc.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(9,16,'activity_upload','1708501891_d20522bb07197d93398f.jpg','activity/uploads/1708501891_d20522bb07197d93398f.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(10,16,'activity_upload','1708501891_ddedf32840c3556b20e5.jpg','activity/uploads/1708501891_ddedf32840c3556b20e5.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(11,16,'activity_upload','1708501891_ff94ec29befcdd856334.jpg','activity/uploads/1708501891_ff94ec29befcdd856334.jpg','2024-02-21 15:51:31','2024-02-21 15:51:31'),
(12,16,'activity_upload','1708501892_ae99af2e3ed14fdee4ad.jpg','activity/uploads/1708501892_ae99af2e3ed14fdee4ad.jpg','2024-02-21 15:51:32','2024-02-21 15:51:32');

/*Table structure for table `activity_review` */

DROP TABLE IF EXISTS `activity_review`;

CREATE TABLE `activity_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options_id` int(11) DEFAULT NULL,
  `activity_main_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `activity_review` */

insert  into `activity_review`(`id`,`options_id`,`activity_main_id`,`name`,`comment`,`rate`,`reg_date`,`last_update`) values 
(1,24,16,'Dave','Excellent',4.5,'2024-03-23 21:16:22','2024-03-23 21:16:27'),
(2,24,16,'James','Good trip',5,'2024-03-23 22:17:32','2024-03-23 22:17:34');

/*Table structure for table `data_highlights` */

DROP TABLE IF EXISTS `data_highlights`;

CREATE TABLE `data_highlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_highlights` */

/*Table structure for table `master_category` */

DROP TABLE IF EXISTS `master_category`;

CREATE TABLE `master_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `master_category` */

insert  into `master_category`(`id`,`name`,`last_update`,`reg_date`) values 
(1,'Activity','2023-12-23 20:29:08','2023-12-23 20:29:12'),
(2,'Boat','2023-12-23 20:29:19','2023-12-23 20:29:21');

/*Table structure for table `master_currency` */

DROP TABLE IF EXISTS `master_currency`;

CREATE TABLE `master_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `symbol` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `master_currency` */

insert  into `master_currency`(`id`,`name`,`price`,`symbol`,`code`) values 
(1,'IDR',1,'Rp','IDR'),
(2,'USDtoIDR',15000,'$','USD');

/*Table structure for table `master_guide_info` */

DROP TABLE IF EXISTS `master_guide_info`;

CREATE TABLE `master_guide_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `master_guide_info` */

insert  into `master_guide_info`(`id`,`name`,`last_update`,`reg_date`) values 
(1,'No Body','2023-12-23 20:29:53','2023-12-23 20:29:55'),
(2,'Tour Guide','2023-12-23 20:30:07','2023-12-23 20:30:09'),
(3,'Host or Greeter','2023-12-23 20:30:20','2023-12-23 20:30:22'),
(4,'Instructor','2023-12-23 20:30:28','2023-12-23 20:30:29'),
(5,'Driver Only','2023-12-23 20:30:35','2023-12-23 20:30:36');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `title` int(11) NOT NULL AUTO_INCREMENT,
  `content` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `author` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `news` */

insert  into `news`(`title`,`content`,`status`,`author`,`slug`) values 
(1,'asd','published',NULL,'asd'),
(2,'sdfds','published',NULL,'sfdsaf'),
(3,'asdas','published',NULL,'asdaa'),
(4,'asdsaad','published',NULL,'asdasdasadasd'),
(5,'asdsad','published',NULL,'dasd'),
(6,'asdasd','published',NULL,'dasd'),
(7,'asdsada','published',NULL,'dasad'),
(8,'dasda','published',NULL,'dasdsa'),
(9,'asda','published',NULL,'dsad'),
(10,'dsa','published',NULL,'das');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trx_id` int(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'payment, refund, dll',
  `method` varchar(100) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `captures_id` varchar(255) DEFAULT NULL,
  `payment_amount` double DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `response_detail` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`id`,`trx_id`,`order_id`,`type`,`method`,`currency`,`amount`,`status`,`link`,`captures_id`,`payment_amount`,`payment_date`,`reg_date`,`last_update`,`response_detail`) values 
(25,45,'0H100633U91832822','payment','paypal','USD',37,'COMPLETED','https://www.sandbox.paypal.com/checkoutnow?token=0H100633U91832822','3LR17914247399843',37,'2024-04-21 09:34:48','2024-04-21 09:34:15','2024-04-21 09:34:48',NULL),
(26,46,'4GY493738J5576211','payment','paypal','USD',55.49,'waiting payment','https://www.sandbox.paypal.com/checkoutnow?token=4GY493738J5576211',NULL,NULL,NULL,'2024-04-21 11:37:08','2024-04-21 11:37:08',NULL),
(27,47,'9JS82263ND295372X','payment','paypal','USD',55.49,'waiting payment','https://www.sandbox.paypal.com/checkoutnow?token=9JS82263ND295372X',NULL,NULL,NULL,'2024-04-21 11:40:04','2024-04-21 11:40:04',NULL),
(28,48,'8AH36779YM042080Y','payment','paypal','USD',73.99,'COMPLETED','https://www.sandbox.paypal.com/checkoutnow?token=8AH36779YM042080Y','86M66011R7525351L',73.99,'2024-04-21 12:09:58','2024-04-21 12:01:00','2024-04-21 12:09:58','{\"id\":\"8AH36779YM042080Y\",\"status\":\"COMPLETED\",\"payment_source\":{\"paypal\":{\"email_address\":\"sb-g4747jc30100858@personal.example.com\",\"account_id\":\"5PMEAYAAC6NU6\",\"account_status\":\"VERIFIED\",\"name\":{\"given_name\":\"John\",\"surname\":\"Doe\"},\"address\":{\"country_code\":\"ID\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"shipping\":{\"name\":{\"full_name\":\"John Doe\"},\"address\":{\"address_line_1\":\"Jl Senopati 1\",\"admin_area_2\":\"Jakarta\",\"admin_area_1\":\"Jakarta\",\"postal_code\":\"12110\",\"country_code\":\"ID\"}},\"payments\":{\"captures\":[{\"id\":\"86M66011R7525351L\",\"status\":\"COMPLETED\",\"amount\":{\"currency_code\":\"USD\",\"value\":\"73.99\"},\"final_capture\":true,\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"seller_receivable_breakdown\":{\"gross_amount\":{\"currency_code\":\"USD\",\"value\":\"73.99\"},\"paypal_fee\":{\"currency_code\":\"USD\",\"value\":\"2.82\"},\"net_amount\":{\"currency_code\":\"USD\",\"value\":\"71.17\"}},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/86M66011R7525351L\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/86M66011R7525351L\\/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/8AH36779YM042080Y\",\"rel\":\"up\",\"method\":\"GET\"}],\"create_time\":\"2024-04-21T04:09:55Z\",\"update_time\":\"2024-04-21T04:09:55Z\"}]}}],\"payer\":{\"name\":{\"given_name\":\"John\",\"surname\":\"Doe\"},\"email_address\":\"sb-g4747jc30100858@personal.example.com\",\"payer_id\":\"5PMEAYAAC6NU6\",\"address\":{\"country_code\":\"ID\"}},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/8AH36779YM042080Y\",\"rel\":\"self\",\"method\":\"GET\"}]}'),
(29,49,'1M252126WU312372N','payment','paypal','USD',73.99,'waiting payment','https://www.sandbox.paypal.com/checkoutnow?token=1M252126WU312372N',NULL,NULL,NULL,'2024-04-21 12:22:35','2024-04-21 12:22:35',NULL),
(30,50,'67002498GW476872P','payment','paypal','USD',110.99,'COMPLETED','https://www.sandbox.paypal.com/checkoutnow?token=67002498GW476872P','64015158G29924909',110.99,'2024-04-21 12:25:27','2024-04-21 12:24:59','2024-04-21 12:25:27','{\"id\":\"67002498GW476872P\",\"status\":\"COMPLETED\",\"payment_source\":{\"paypal\":{\"email_address\":\"sb-g4747jc30100858@personal.example.com\",\"account_id\":\"5PMEAYAAC6NU6\",\"account_status\":\"VERIFIED\",\"name\":{\"given_name\":\"John\",\"surname\":\"Doe\"},\"address\":{\"country_code\":\"ID\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"shipping\":{\"name\":{\"full_name\":\"John Doe\"},\"address\":{\"address_line_1\":\"Jl Senopati 1\",\"admin_area_2\":\"Jakarta\",\"admin_area_1\":\"Jakarta\",\"postal_code\":\"12110\",\"country_code\":\"ID\"}},\"payments\":{\"captures\":[{\"id\":\"64015158G29924909\",\"status\":\"COMPLETED\",\"amount\":{\"currency_code\":\"USD\",\"value\":\"110.99\"},\"final_capture\":true,\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"seller_receivable_breakdown\":{\"gross_amount\":{\"currency_code\":\"USD\",\"value\":\"110.99\"},\"paypal_fee\":{\"currency_code\":\"USD\",\"value\":\"4.07\"},\"net_amount\":{\"currency_code\":\"USD\",\"value\":\"106.92\"}},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/64015158G29924909\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/64015158G29924909\\/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/67002498GW476872P\",\"rel\":\"up\",\"method\":\"GET\"}],\"create_time\":\"2024-04-21T04:25:24Z\",\"update_time\":\"2024-04-21T04:25:24Z\"}]}}],\"payer\":{\"name\":{\"given_name\":\"John\",\"surname\":\"Doe\"},\"email_address\":\"sb-g4747jc30100858@personal.example.com\",\"payer_id\":\"5PMEAYAAC6NU6\",\"address\":{\"country_code\":\"ID\"}},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/67002498GW476872P\",\"rel\":\"self\",\"method\":\"GET\"}]}');

/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trx_date` datetime DEFAULT NULL,
  `trx_num` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT 'pending, cancel, success',
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transactions` */

insert  into `transactions`(`id`,`trx_date`,`trx_num`,`fullname`,`email`,`country`,`phone`,`currency`,`rate`,`total`,`status`,`reg_date`,`last_update`) values 
(45,'2024-04-21 09:34:13','001/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','084342','IDR',16218.25,600000,'pending','2024-04-21 09:34:13','2024-04-21 09:34:13'),
(46,'2024-04-21 11:37:03','002/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','08312321','IDR',16218.25,900000,'pending','2024-04-21 11:37:03','2024-04-21 11:37:03'),
(47,'2024-04-21 11:40:00','003/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','2323241','IDR',16218.25,900000,'pending','2024-04-21 11:40:00','2024-04-21 11:40:00'),
(48,'2024-04-21 12:00:55','004/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','083423423','IDR',16218.25,1200000,'success','2024-04-21 12:00:55','2024-04-21 12:00:55'),
(49,'2024-04-21 12:22:32','005/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','08352342342','IDR',16218.25,1200000,'pending','2024-04-21 12:22:32','2024-04-21 12:22:32'),
(50,'2024-04-21 12:24:57','006/BK/IV/2024','Dedy','dedy.blinda94@gmail.com','indonesia','0842343242','IDR',16218.25,1800000,'success','2024-04-21 12:24:57','2024-04-21 12:24:57');

/*Table structure for table `transactions_detail` */

DROP TABLE IF EXISTS `transactions_detail`;

CREATE TABLE `transactions_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trx_id` int(11) DEFAULT NULL,
  `options_id` int(11) DEFAULT NULL,
  `options_name` varchar(255) DEFAULT NULL,
  `img_path` text DEFAULT NULL,
  `pax` int(11) DEFAULT NULL,
  `activity_date` date DEFAULT NULL,
  `timeslot_id` int(11) DEFAULT NULL,
  `timeslot` text DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `note` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transactions_detail` */

insert  into `transactions_detail`(`id`,`trx_id`,`options_id`,`options_name`,`img_path`,`pax`,`activity_date`,`timeslot_id`,`timeslot`,`subtotal`,`total`,`note`) values 
(54,45,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',2,'2024-04-22',29,'09:15',300000,600000,'ds'),
(55,46,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',3,'2024-04-22',29,'09:15',300000,900000,'sdfsdff'),
(56,47,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',3,'2024-04-22',29,'09:15',300000,900000,'dasdsads'),
(57,48,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',4,'2024-04-22',29,'09:30',300000,1200000,'sfsfds'),
(58,49,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',2,'2024-04-22',29,'09:15',300000,600000,'dasdadsd'),
(59,49,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',2,'2024-04-22',29,'09:30',300000,600000,'ssdsfdsf'),
(60,50,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',4,'2024-04-22',29,'09:15',300000,1200000,'sdsfsdf'),
(61,50,24,'Nusa penida: Boat Tour with Manta Ray Snorkeling 4 Stops','activity/uploads/1708501891_4bc75f6e75c95c25b31f.jpg',2,'2024-04-22',29,'13:30',300000,600000,'sddfsdf');

/*Table structure for table `upload_file` */

DROP TABLE IF EXISTS `upload_file`;

CREATE TABLE `upload_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `upload_type` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `upload_file` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
