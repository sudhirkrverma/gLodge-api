-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2021 at 07:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glodge_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_rooms`
--

DROP TABLE IF EXISTS `booking_rooms`;
CREATE TABLE IF NOT EXISTS `booking_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry_type_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `channel_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'WEB',
  `room_no` int(11) NOT NULL,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `amount` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lodge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lodge_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lodge_id` int(11) NOT NULL,
  `booked_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_of_guest` int(11) DEFAULT NULL,
  `txn_date` date DEFAULT NULL,
  `gateway_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resp_mesg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resp_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banktxnid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `checksum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_rooms`
--

INSERT INTO `booking_rooms` (`id`, `order_id`, `customer_id`, `industry_type_id`, `channel_id`, `room_no`, `room_type`, `image`, `checkin`, `checkout`, `amount`, `mobile`, `lodge_name`, `lodge_address`, `lodge_id`, `booked_by`, `username`, `age`, `gender`, `address`, `no_of_guest`, `txn_date`, `gateway_name`, `resp_mesg`, `resp_code`, `bank_name`, `payment_mode`, `MID`, `txn_id`, `banktxnid`, `payment_status`, `checksum`, `created_at`, `updated_at`) VALUES
(1, 'PSG5530172', NULL, NULL, 'WEB', 100, 'double', NULL, '2021-05-28', '2021-05-29', 1706, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-05-28 02:15:02', '2021-06-12 03:21:19'),
(2, '3850215', NULL, NULL, 'APP', 147, 'sed', NULL, '2013-09-29', '1984-02-28', 1168, '92598797', 'Berta Langworth Jr.', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Flavio Hodkiewicz', 'clint.schamberger@reichel.org', 48, 'female', '9085 Moore Mills\nSouth Walton, MI 44840-5473', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 03:59:40', '2021-06-09 03:59:40'),
(3, '2787664', NULL, NULL, 'APP', 145, 'quia', NULL, '1977-03-19', '1985-02-02', 1826, '92943181', 'Lilliana Schroeder', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mr. Dallas Waelchi', 'bjenkins@ullrich.com', 10, 'male', '98418 Brekke Streets Suite 397\nWest Adityaburgh, GA 60598-9892', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 03:59:40', '2021-06-09 03:59:40'),
(4, '7277421', NULL, NULL, 'APP', 275, 'at', NULL, '1992-11-03', '2017-07-25', 1782, '96087032', 'Mr. Kennedy Purdy', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Anderson Daniel III', 'ankunding.celestino@conroy.info', 63, 'male', '318 Arvel Fields\nLake Marcia, KS 54390-7739', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 03:59:40', '2021-06-09 03:59:40'),
(5, '8166108', NULL, NULL, 'APP', 131, 'accusantium', NULL, '1970-09-29', '1982-01-28', 1727, '98773463', 'Osbaldo Treutel II', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Kitty Torphy', 'ibarrows@yahoo.com', 76, 'female', '38655 Sporer Mill Suite 404\nEvelynchester, IA 59118-6985', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 03:59:40', '2021-06-09 03:59:40'),
(6, '1940236', NULL, NULL, 'APP', 141, 'repudiandae', NULL, '1993-02-11', '2017-03-28', 1281, '97799067', 'Estel Bernier', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mr. Toby Schmitt', 'eleazar.gutkowski@mueller.com', 38, 'female', '98674 Jovani Harbor\nJeremieberg, LA 28475', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 03:59:40', '2021-06-12 03:21:52'),
(7, '8500459', NULL, NULL, 'APP', 254, 'sunt', NULL, '2012-05-31', '1970-06-12', 1581, '93862376', 'Cydney Lubowitz', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Christina McCullough', 'toney72@langworth.org', 81, 'female', '40778 Baylee Roads\nKubchester, WV 14836', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(8, '5141073', NULL, NULL, 'APP', 247, 'quo', NULL, '2015-06-24', '1999-08-04', 1778, '92489104', 'Zella Kiehn DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Ms. Tessie Zboncak I', 'wendy.heller@nikolaus.com', 56, 'male', '882 Grady Ports Apt. 606\nLake Nannie, MT 01968-8964', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(9, '6366183', NULL, NULL, 'APP', 147, 'inventore', NULL, '1988-08-28', '1976-11-24', 1535, '95756313', 'Vincenzo Zieme III', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Ryan Douglas DVM', 'terry73@hoeger.com', 38, 'female', '38026 Juliana Gardens\nPort Aidenchester, SC 39364', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(10, '3903947', NULL, NULL, 'APP', 218, 'laborum', NULL, '1989-07-22', '2002-09-16', 1783, '95487146', 'Antonio Wilderman', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Alford Lubowitz', 'kwaters@hotmail.com', 33, 'male', '181 Davis Place\nWest Mable, NM 00623', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(11, '8934476', NULL, NULL, 'APP', 273, 'corporis', NULL, '2001-05-28', '1999-09-26', 1578, '91804538', 'Madisyn McCullough', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Ms. Joanny Kassulke', 'barry.koch@gmail.com', 37, 'male', '484 Adah Street\nHauckfurt, MT 76649-5215', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(12, '4963724', NULL, NULL, 'APP', 254, 'nesciunt', NULL, '2015-12-23', '1992-07-17', 1076, '98354587', 'Prof. Celestino Smith DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Quincy Cormier DDS', 'baumbach.deven@heller.net', 43, 'male', '72274 Zieme Pike\nNorth Brennanfort, ME 70868-9133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(13, '1198747', NULL, NULL, 'APP', 146, 'ipsum', NULL, '2019-01-23', '2015-08-27', 1826, '90596434', 'Dr. Elwyn Hand PhD', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Kelvin Mitchell', 'lorenza20@kuhic.com', 21, 'male', '540 Merl Squares Suite 035\nNew Lucile, HI 94800-5749', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(14, '4646124', NULL, NULL, 'APP', 292, 'excepturi', NULL, '1971-03-08', '1988-02-27', 1554, '95578632', 'Miss Delia Balistreri', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Johnny Prosacco', 'traynor@yahoo.com', 94, 'male', '863 Mallory Walk Suite 297\nLangoshport, CT 36063-0754', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(15, '1318779', NULL, NULL, 'APP', 268, 'beatae', NULL, '2002-08-09', '2000-04-28', 1884, '99928082', 'Aletha Schimmel', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Ryley Reichel', 'afeeney@hotmail.com', 35, 'male', '79906 Wunsch Mills Suite 130\nRutherfordfurt, NE 58374-7593', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(16, '5026327', NULL, NULL, 'APP', 167, 'neque', NULL, '1974-12-12', '1972-11-08', 1963, '94238488', 'Nelle Macejkovic', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Kyleigh Carter', 'cleta73@gmail.com', 62, 'female', '2054 Koepp Meadows Apt. 439\nNicoletteland, AZ 46101-4568', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(17, '6417487', NULL, NULL, 'APP', 242, 'sed', NULL, '2013-08-10', '1990-06-19', 1265, '94353128', 'Crystal Prosacco', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Garett Nikolaus', 'oschiller@gibson.info', 92, 'male', '58055 Hintz Drive Suite 665\nPort Duane, FL 52558-7623', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(18, '1444996', NULL, NULL, 'APP', 150, 'dolorem', NULL, '1986-05-03', '1999-06-02', 1857, '96963995', 'Adelbert Marks', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Gordon Nikolaus', 'consuelo55@hotmail.com', 72, 'female', '7794 Stanton Plains Apt. 487\nQuigleyland, AZ 87751-2276', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(19, '1991371', NULL, NULL, 'APP', 185, 'voluptatem', NULL, '2011-03-24', '1974-01-22', 1835, '91838817', 'Raymond Hessel', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Kyleigh Maggio', 'garett70@yahoo.com', 38, 'male', '7571 Myrtle Forest\nPort Lelahview, NY 33278-1725', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(20, '8992051', NULL, NULL, 'APP', 182, 'velit', NULL, '1993-01-05', '1997-01-09', 1697, '90810182', 'Monroe Kessler', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Mabel Carter', 'ramona.wolf@paucek.com', 87, 'female', '729 Noah Square\nAylastad, NM 53026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(21, '3057730', NULL, NULL, 'APP', 146, 'sit', NULL, '2017-03-16', '2015-01-18', 1731, '97298154', 'Jarret Lockman I', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Oren Hegmann Sr.', 'ndamore@gmail.com', 51, 'female', '9353 Freeman Neck Apt. 497\nJeaniemouth, ID 89932-4465', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(22, '2066534', NULL, NULL, 'APP', 240, 'explicabo', NULL, '1989-10-09', '1998-03-13', 1950, '96224608', 'Erika Fisher', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Elise Rowe', 'okeefe.delphine@herzog.biz', 53, 'male', '9891 Kerluke Isle\nEast Piperburgh, AZ 29945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(23, '2985981', NULL, NULL, 'APP', 148, 'nemo', NULL, '1973-10-02', '2004-07-21', 1616, '94333204', 'Cali Hessel', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Ms. Amie Reilly', 'constantin12@yahoo.com', 61, 'female', '3356 Heathcote Shoal\nSouth Annamaeville, DE 89563', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(24, '9078500', NULL, NULL, 'APP', 155, 'consequatur', NULL, '1975-05-09', '2011-05-31', 1910, '97603832', 'Moriah White', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Elliot Jerde', 'darrin87@hotmail.com', 14, 'male', '498 Brayan Mission\nKaylinmouth, NC 77418', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(25, '5775648', NULL, NULL, 'APP', 220, 'pariatur', NULL, '2004-02-27', '2010-05-26', 1957, '97860479', 'Prof. Sandy Reilly', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Franz Harvey Sr.', 'sam.schaefer@huels.com', 12, 'male', '677 Eino Cove\nGrimesfort, DC 93783', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(26, '6424518', NULL, NULL, 'APP', 176, 'et', NULL, '2003-05-23', '2010-12-06', 1782, '95642013', 'Aurelia Dach', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Meagan Hintz', 'edd.ullrich@cormier.info', 50, 'female', '938 Jaylen Brooks\nNew Bernardomouth, IA 44769', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(27, '1225686', NULL, NULL, 'APP', 204, 'nihil', NULL, '2007-08-11', '1990-05-28', 1560, '93732858', 'Margarette Swift', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Rhoda Marks', 'ardella.balistreri@lang.com', 70, 'male', '5045 Marcelo Turnpike\nEast Chadrickton, MD 14975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(28, '5555431', NULL, NULL, 'APP', 238, 'debitis', NULL, '1979-04-30', '1973-08-07', 1511, '92891168', 'Buford Wintheiser', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Regan Sporer', 'robin.franecki@hotmail.com', 66, 'female', '2615 Adalberto Walks Suite 378\nWest Ima, AZ 07014-9426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(29, '1477132', NULL, NULL, 'APP', 224, 'explicabo', NULL, '1983-12-02', '1983-08-28', 1574, '92614988', 'Antonetta Glover', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Colten Goyette DDS', 'yhartmann@renner.info', 92, 'male', '2346 Hoppe Court\nWest Darron, IN 57301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(30, '7949557', NULL, NULL, 'APP', 101, 'est', NULL, '1999-07-22', '1992-10-13', 1194, '90717341', 'Prof. Kobe Ryan', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Franz Bins', 'gabe11@hotmail.com', 17, 'male', '31928 Maggio Squares Apt. 689\nMaxietown, AZ 15574-0234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(31, '6202420', NULL, NULL, 'APP', 223, 'et', NULL, '1985-06-10', '1976-06-05', 1471, '94866458', 'Prof. Demario Beahan V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Jesse Cassin PhD', 'yadams@hotmail.com', 19, 'female', '1434 Effie Shoals Apt. 944\nWest Phylliston, IA 87704', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(32, '8879211', NULL, NULL, 'APP', 257, 'eveniet', NULL, '2016-05-10', '1974-01-11', 1457, '96357441', 'Mr. Tremaine Jast', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Myrtle Goodwin', 'monahan.fred@gmail.com', 94, 'female', '681 London Terrace\nReillystad, WA 47565-7423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(33, '7777852', NULL, NULL, 'APP', 183, 'unde', NULL, '2002-02-10', '1996-03-14', 1526, '98246579', 'Earnestine Murphy', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Jorge Nolan', 'douglas.garth@bins.org', 94, 'male', '99852 Esther Avenue Apt. 741\nLake Rosamondstad, MD 77114-1677', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(34, '8526071', NULL, NULL, 'APP', 148, 'doloremque', NULL, '1987-05-03', '1981-02-07', 1671, '99886231', 'Neoma Beier Sr.', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Cali Franecki', 'vgreen@miller.net', 35, 'male', '59794 Frami Manors Suite 222\nHannaside, TN 82131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(35, '7457926', NULL, NULL, 'APP', 260, 'iusto', NULL, '2003-06-15', '2012-12-09', 1402, '90715392', 'Elvera Bartell', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Vickie Rohan', 'cweissnat@vandervort.com', 24, 'female', '573 Audra View\nNew Magali, HI 69986-3600', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(36, '6979693', NULL, NULL, 'APP', 267, 'consectetur', NULL, '1979-08-31', '1974-06-10', 1577, '97520229', 'Dr. Abner Will V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Misael Swaniawski III', 'reginald07@oconner.info', 80, 'female', '66931 Harrison Shores\nKoleburgh, VT 11245', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(37, '5451456', NULL, NULL, 'APP', 244, 'libero', NULL, '2002-12-26', '1999-02-06', 1310, '96878769', 'Randi Krajcik', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Evalyn Wehner', 'feest.cristal@howell.com', 96, 'female', '700 Tremblay Forks Suite 918\nHaroldmouth, CT 33062-2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(38, '6471774', NULL, NULL, 'APP', 230, 'sunt', NULL, '1972-08-29', '1976-06-09', 1837, '91783574', 'Alexane Schmeler', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Angelita Price', 'jessy29@hotmail.com', 91, 'male', '961 Hollie Roads Suite 761\nJenkinsmouth, PA 09356', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(39, '4735870', NULL, NULL, 'APP', 266, 'esse', NULL, '1992-06-29', '1976-02-19', 1302, '96433470', 'Mable Rolfson', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Pearline Keeling', 'ghessel@rohan.com', 74, 'female', '638 Robert Lights Suite 852\nEast Geovannimouth, UT 17001-9718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(40, '8047718', NULL, NULL, 'APP', 256, 'suscipit', NULL, '1992-12-26', '1974-04-23', 1658, '95859756', 'Prof. Deion Koch DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mr. Freddie Tromp', 'audreanne39@hotmail.com', 99, 'female', '825 Lesly Drive Apt. 129\nWest Adrien, ND 97741-8357', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(41, '9728600', NULL, NULL, 'APP', 290, 'culpa', NULL, '2005-10-12', '1987-06-03', 1476, '91202049', 'Prof. Kennith Upton DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Reuben Jacobson', 'natasha.stark@boehm.info', 55, 'female', '8440 Tianna Parks\nSouth Oceanefort, WA 44710', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(42, '9214990', NULL, NULL, 'APP', 163, 'ipsum', NULL, '2002-09-25', '2006-03-01', 1526, '94259662', 'Ethan Mayert', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Chloe Casper', 'assunta.klein@corwin.com', 11, 'male', '809 Gia Tunnel Apt. 679\nWest Vaughnstad, AZ 41279-8177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(43, '2817281', NULL, NULL, 'APP', 262, 'ad', NULL, '1991-08-08', '1990-08-17', 1249, '93121606', 'Noble Ratke', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Eriberto Reichel Jr.', 'ofay@gmail.com', 69, 'female', '2499 Armando Parkways Apt. 740\nImatown, ND 65954', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(44, '3639785', NULL, NULL, 'APP', 140, 'cum', NULL, '1994-10-14', '1973-10-05', 1369, '93818271', 'Prof. Dagmar Keeling III', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Jeffry Walsh DDS', 'ida.sipes@gmail.com', 29, 'female', '99621 Effertz Ridges\nWest Jewel, NE 50339', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(45, '1155213', NULL, NULL, 'APP', 101, 'nostrum', NULL, '1972-12-18', '2007-11-07', 1421, '91104169', 'River Lockman', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Eldred Farrell', 'carroll.javonte@gmail.com', 42, 'male', '7952 Alexa Village Apt. 003\nAribury, AL 74075-5852', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(46, '2769958', NULL, NULL, 'APP', 109, 'dolores', NULL, '2002-07-24', '1976-02-08', 1125, '90791334', 'Amparo Bashirian', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Korey Gottlieb Sr.', 'jewell70@yahoo.com', 55, 'female', '6617 West Port\nOceanebury, NM 04121-8514', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(47, '1479301', NULL, NULL, 'APP', 127, 'quis', NULL, '2019-05-09', '2004-12-17', 1648, '93449388', 'Madge Daniel', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Janiya Mayer Jr.', 'vickie.johnston@hotmail.com', 19, 'female', '71352 Cortez Route\nSchultzfurt, MD 72402-9640', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(48, '1924323', NULL, NULL, 'APP', 209, 'fugit', NULL, '2011-08-13', '2014-07-27', 1482, '95273329', 'Miss Mckayla Powlowski V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Erica Dare', 'murl15@yahoo.com', 77, 'female', '923 Cartwright Union\nPort Therese, NY 01389-2560', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(49, '4647003', NULL, NULL, 'APP', 224, 'amet', NULL, '1972-02-23', '2015-10-23', 1044, '94771181', 'Greyson Auer', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Delpha Sporer', 'tremblay.evangeline@gmail.com', 21, 'female', '240 Bins Shores Apt. 889\nNorth Lelahmouth, IN 44395-1808', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(50, '2780865', NULL, NULL, 'APP', 128, 'earum', NULL, '2012-04-15', '1990-07-13', 1840, '94798488', 'Nicole Ledner', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Nikolas Morar V', 'mvolkman@yahoo.com', 34, 'male', '1372 Tromp Square\nNorth Zelda, DC 15194-5910', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(51, '4123406', NULL, NULL, 'APP', 113, 'quos', NULL, '1975-10-26', '1975-09-22', 1551, '98790040', 'Mertie Hudson Sr.', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Woodrow Yost', 'wiza.john@yahoo.com', 52, 'male', '26454 Veronica Prairie Suite 461\nWaelchimouth, FL 65493-5116', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(52, '5867271', NULL, NULL, 'APP', 214, 'ut', NULL, '1980-03-02', '1970-10-23', 1944, '92807403', 'Bradford Stanton', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Maryam Gorczany', 'iblock@gmail.com', 66, 'female', '767 Rolfson Summit Suite 099\nPort Kellen, VA 39331', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(53, '3587167', NULL, NULL, 'APP', 205, 'vero', NULL, '1991-03-24', '2019-12-19', 1589, '93336304', 'Ms. Candida Metz DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Miss Carrie Schaefer Jr.', 'dimitri.marks@hotmail.com', 49, 'female', '33001 Mustafa Road Suite 537\nEast Delphineborough, DC 89504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(54, '4706234', NULL, NULL, 'APP', 132, 'facere', NULL, '2011-09-24', '2017-07-28', 1218, '97336237', 'Rafael Kautzer', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Archibald Keeling', 'rmiller@dubuque.net', 14, 'male', '865 Maxie Stream\nWisokybury, KS 90043', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(55, '5533478', NULL, NULL, 'APP', 273, 'nobis', NULL, '1973-10-12', '1987-01-17', 1148, '94860236', 'Berneice Wyman', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Summer Leannon', 'paucek.marcus@schmidt.com', 78, 'male', '84914 DuBuque Light\nSouth Joanabury, WA 49999-3249', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:00:07', '2021-06-09 04:00:07'),
(56, '8841481', NULL, NULL, 'APP', 105, 'facilis', NULL, '2019-11-30', '2001-02-16', 1593, '98683646', 'Adrianna Feest', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Kaitlyn Brakus', 'mireille.reilly@gutkowski.com', 40, 'male', '30920 Soledad Glens Apt. 842\nAdellestad, NV 77244', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 04:00:07', '2021-06-12 03:21:04'),
(57, '4329742', NULL, NULL, 'APP', 127, 'nulla', NULL, '2013-05-29', '1979-05-13', 1982, '90586455', 'Gonzalo Beer', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Shane Marvin', 'ole47@langosh.com', 60, 'female', '411 Loren Shores Suite 991\nDachchester, IA 26476-4680', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(58, '3279758', NULL, NULL, 'APP', 263, 'cumque', NULL, '1975-03-14', '1997-11-04', 1992, '94674966', 'Norene Rau I', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Antwan Gislason V', 'zhintz@hirthe.com', 81, 'male', '42702 Israel Alley Suite 846\nLouveniaton, MT 77561-3143', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(59, '2473488', NULL, NULL, 'APP', 162, 'quia', NULL, '1997-03-17', '2012-05-18', 1898, '90547475', 'Ryder Oberbrunner', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Lilly Frami', 'emmie.towne@cronin.com', 69, 'female', '8978 O\'Connell Shoal\nNew Brodytown, NJ 75519-4889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 04:04:34', '2021-06-12 03:19:59'),
(60, '6039618', NULL, NULL, 'APP', 120, 'architecto', NULL, '1970-05-27', '2020-04-10', 1141, '97301730', 'Name Windler', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Alisha Steuber', 'bertha90@mclaughlin.com', 35, 'male', '252 Raynor Forks\nNorth Jaclyntown, WI 61655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(61, '2273356', NULL, NULL, 'APP', 239, 'provident', NULL, '1983-10-17', '1980-12-04', 1015, '99756316', 'Prof. Jamey Hill DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Valentine Stroman', 'shirley.swaniawski@gmail.com', 99, 'female', '33618 Cyrus Unions Suite 394\nEast Samanta, IL 71362-4127', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(62, '7401109', NULL, NULL, 'APP', 102, 'dolores', NULL, '2019-01-01', '2007-05-02', 1328, '93917059', 'Marcelino Pfannerstill', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'London Sipes II', 'lucio.watsica@konopelski.net', 78, 'female', '6799 Royal Canyon\nVonRuedentown, NH 28206', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(63, '6924971', NULL, NULL, 'APP', 182, 'eum', NULL, '2020-05-28', '1985-07-04', 1350, '99398566', 'Mr. Marques Ryan IV', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dixie Hartmann DVM', 'bobby.christiansen@yahoo.com', 65, 'female', '578 Dangelo Coves\nScotside, VT 15336-7134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(64, '3892625', NULL, NULL, 'APP', 122, 'aut', NULL, '1997-06-18', '1979-01-07', 1354, '91985050', 'Jada Goodwin', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Manuel Dibbert', 'shayna88@gmail.com', 18, 'female', '2645 Jaskolski Shoal\nPort Graciefort, IL 05388', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(65, '4258599', NULL, NULL, 'APP', 274, 'delectus', NULL, '2014-04-10', '1992-11-07', 1369, '94361965', 'Lowell Funk', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mrs. Edythe Rohan DDS', 'myron21@strosin.info', 24, 'female', '831 Beier Forks Apt. 566\nWest Price, IL 70995-3269', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 04:04:34', '2021-06-12 03:20:16'),
(66, '3119214', NULL, NULL, 'APP', 231, 'enim', NULL, '2009-12-14', '1976-08-05', 1303, '92505002', 'Miss Jolie Schultz DVM', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Myra VonRueden', 'chayes@hickle.com', 54, 'male', '40411 Candido Cape\nSouth Reuben, PA 76411', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(67, '5190041', NULL, NULL, 'APP', 285, 'nihil', NULL, '1977-05-22', '1971-01-26', 1549, '92490574', 'Graham Howe', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Laurence Corkery', 'hazle69@runolfsson.biz', 70, 'male', '6881 Watsica Underpass\nNew Marshall, SD 12452', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(68, '1161831', NULL, NULL, 'APP', 276, 'eum', NULL, '1973-05-22', '2019-12-27', 1207, '91072983', 'Caden Bruen', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Miss Maximillia Thiel I', 'alejandra.pfeffer@schneider.com', 62, 'female', '56118 Magdalena Field\nDaltonburgh, AR 22363', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 04:04:34', '2021-06-10 05:39:27'),
(69, '1413472', NULL, NULL, 'APP', 296, 'vero', NULL, '1997-04-20', '1979-01-28', 1135, '93230943', 'Prof. Julien Streich', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Imelda Hermiston', 'erna57@gmail.com', 26, 'male', '885 D\'angelo Squares Suite 981\nNorth Raphaelside, IL 55320', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(70, '6108576', NULL, NULL, 'APP', 229, 'id', NULL, '2018-09-26', '1977-09-05', 1041, '93231570', 'Morris Fisher', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Alexane Mayer', 'dagmar.feil@yahoo.com', 47, 'female', '3361 Torphy Landing Apt. 403\nNew Camren, AR 54671-8571', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(71, '4344121', NULL, NULL, 'APP', 189, 'nam', NULL, '2003-10-13', '1970-09-28', 1519, '94446100', 'Dr. Remington Koss', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Asia Heller', 'labadie.izaiah@gmail.com', 52, 'female', '703 Howell Points\nRicetown, MN 92585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(72, '9066704', NULL, NULL, 'APP', 183, 'recusandae', NULL, '2000-12-04', '2008-03-22', 1991, '93278424', 'Roma Windler', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Daniela D\'Amore', 'rohan.adele@yahoo.com', 66, 'male', '94709 Brant Summit\nSouth Pamela, LA 40929-4413', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(73, '9414126', NULL, NULL, 'APP', 184, 'ad', NULL, '1979-01-04', '1977-08-20', 1318, '98289270', 'Miss Violette Monahan', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Zita Hane', 'ghauck@sipes.net', 63, 'female', '908 Yoshiko Pass\nWest Arden, KS 88693-5552', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(74, '9874896', NULL, NULL, 'APP', 288, 'explicabo', NULL, '2006-01-16', '2018-04-16', 1044, '94368603', 'Frances Heidenreich', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Keyshawn Emard', 'jesse.luettgen@greenholt.net', 39, 'female', '447 Jenkins Flats Suite 948\nNew Destin, IA 57825-9572', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(75, '4652150', NULL, NULL, 'APP', 202, 'a', NULL, '1982-11-11', '2012-06-01', 1969, '98389240', 'Cora O\'Kon', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Fausto Boyle PhD', 'cormier.ethel@yahoo.com', 54, 'female', '3552 Greyson Court Apt. 022\nSouth Colt, SD 22042', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(76, '6999420', NULL, NULL, 'APP', 273, 'explicabo', NULL, '2012-10-15', '1984-11-22', 1439, '91290480', 'Lea Heaney', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Karlee Streich', 'lois16@steuber.biz', 91, 'female', '490 Rebecca Court Apt. 100\nJanicetown, DE 41473-1489', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-09 04:04:34', '2021-06-10 05:39:20'),
(77, '2734181', NULL, NULL, 'APP', 226, 'accusamus', NULL, '2009-05-31', '2017-09-09', 1892, '90407295', 'Kavon Kiehn MD', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mr. Kip Kris', 'cronin.adelle@kreiger.org', 91, 'female', '7402 Kautzer Lane\nSengerview, CA 57983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(78, '4605841', NULL, NULL, 'APP', 128, 'sed', NULL, '2004-11-04', '1993-01-24', 1605, '96450860', 'Kayley Kris', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Jaycee Dietrich', 'bogan.ahmed@abernathy.com', 63, 'female', '44272 Legros Tunnel Apt. 650\nNorth Hildaville, NM 45433-7959', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(79, '5702967', NULL, NULL, 'APP', 193, 'dignissimos', NULL, '1996-04-14', '1983-01-30', 1350, '93216816', 'Eldora Kautzer', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Ms. Geraldine Lebsack', 'russel.emely@gmail.com', 66, 'male', '29165 Sage Parkway Suite 349\nBogisichburgh, SC 19673', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(80, '3213011', NULL, NULL, 'APP', 270, 'dolor', NULL, '2017-04-16', '2002-12-20', 1681, '93570411', 'Mohamed Bartell', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Lucius Pollich', 'alena.fadel@koch.net', 36, 'female', '4913 Reichel Ramp\nPort Shaylee, NV 75721', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(81, '8329345', NULL, NULL, 'APP', 108, 'facilis', NULL, '1994-01-04', '2006-07-21', 1058, '93561856', 'Kelli Welch IV', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Freddy McClure', 'ariane.labadie@yahoo.com', 96, 'male', '11567 Kihn Row\nLake Cary, TX 77275', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(82, '8137100', NULL, NULL, 'APP', 128, 'non', NULL, '2002-06-17', '1987-11-26', 1478, '93315639', 'Dulce West', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Eusebio Kub', 'uriah72@renner.com', 83, 'female', '74119 Johann Ports Suite 971\nMcClureside, HI 51008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(83, '6683130', NULL, NULL, 'APP', 268, 'ex', NULL, '2005-02-15', '1991-05-20', 1147, '91287587', 'Dr. Ismael Wintheiser V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Efren Bashirian', 'gaylord.monserrate@feest.info', 29, 'male', '434 Bernhard Falls\nSchinnerburgh, NE 65809-9093', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(84, '3493848', NULL, NULL, 'APP', 131, 'corrupti', NULL, '1974-03-29', '1984-06-17', 1300, '97114751', 'Prof. Golda Goyette', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Dr. Jacques Russel', 'waylon68@mann.net', 19, 'male', '279 Daryl Knoll\nEast Rhianna, WY 00887-2852', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(85, '4306833', NULL, NULL, 'APP', 210, 'optio', NULL, '1988-11-25', '1977-11-10', 1016, '96488535', 'Tamara Hintz', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mrs. Retta Donnelly', 'vandervort.fabiola@gmail.com', 88, 'female', '696 Henri Lakes Suite 372\nTeaganfurt, AK 15963-7742', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(86, '5378693', NULL, NULL, 'APP', 162, 'id', NULL, '1973-11-15', '2010-07-26', 1679, '94590681', 'Jane Connelly', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Axel Langosh', 'cornelius.monahan@hotmail.com', 28, 'female', '98299 Kub Terrace\nNiaton, NY 50952', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(87, '3713479', NULL, NULL, 'APP', 297, 'molestiae', NULL, '1997-07-25', '2001-09-22', 1336, '97260964', 'Jeromy Rogahn', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Rosalia Hessel', 'gwatsica@hammes.org', 29, 'male', '52978 Alia Vista\nVonRuedenchester, PA 38296-9451', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(88, '6980768', NULL, NULL, 'APP', 265, 'corporis', NULL, '1994-08-13', '1990-04-23', 1599, '98846144', 'Mr. Arvel McCullough PhD', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Mekhi Collins', 'gusikowski.cathryn@cremin.com', 80, 'male', '48594 Harvey Avenue Apt. 794\nPort Harrychester, IN 86756-9789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(89, '5482771', NULL, NULL, 'APP', 189, 'dicta', NULL, '2013-04-14', '1990-01-06', 1980, '98194655', 'Malcolm Streich', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Matilde Bosco I', 'malcolm.lebsack@gmail.com', 91, 'male', '697 Aileen Shores\nNew Jason, SD 10275-5613', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(90, '9112697', NULL, NULL, 'APP', 202, 'neque', NULL, '2018-01-14', '1981-09-13', 1338, '93439340', 'Mrs. Katrine Howe', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Chelsie Stroman', 'audreanne05@gmail.com', 11, 'male', '7352 Ratke Plains Apt. 639\nLindside, DC 39350-1279', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(91, '4884350', NULL, NULL, 'APP', 223, 'enim', NULL, '1992-07-16', '2002-12-13', 1581, '90345002', 'Prof. Terry Hammes V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Stanton Franecki', 'lue06@yahoo.com', 43, 'female', '98228 Isabell Branch Suite 066\nNorth Elyse, TN 08089', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(92, '3189932', NULL, NULL, 'APP', 215, 'eum', NULL, '2016-12-02', '1973-11-22', 1738, '92511058', 'Camren Barrows Sr.', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Cecilia Hahn Jr.', 'mritchie@yahoo.com', 27, 'male', '37737 Christop Glens\nMadgeside, IN 71760-4790', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(93, '3295914', NULL, NULL, 'APP', 265, 'aperiam', NULL, '2006-07-08', '2005-02-25', 1477, '98645100', 'Josephine Shields', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Wava Cruickshank IV', 'yost.muriel@bailey.com', 27, 'male', '778 Jacobson Cove\nWest Eden, KS 53090', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(94, '4705773', NULL, NULL, 'APP', 147, 'sit', NULL, '1995-05-20', '1995-05-19', 1765, '91486791', 'Samantha Hand', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Morton Franecki', 'jkris@mcclure.net', 60, 'male', '845 Spencer Stravenue\nChristopherstad, OH 74767', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(95, '5236947', NULL, NULL, 'APP', 288, 'et', NULL, '2005-05-16', '2013-11-11', 1759, '96191677', 'Dr. Tate Champlin', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Janet Eichmann', 'llangosh@johnson.info', 92, 'male', '4597 Boyle Mall\nTremblaychester, ID 45137', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(96, '7345858', NULL, NULL, 'APP', 157, 'omnis', NULL, '1995-06-09', '1985-03-17', 1413, '92251298', 'Kenyon Nitzsche DDS', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Wilburn Grady', 'adams.rosamond@hotmail.com', 39, 'male', '1635 Mathew Run\nSouth Adele, UT 86452-6572', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(97, '2786990', NULL, NULL, 'APP', 102, 'ex', NULL, '1993-09-14', '2008-11-09', 1684, '95073028', 'Dr. Rocky Shanahan V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Oscar Ledner', 'curtis.dach@gmail.com', 96, 'male', '15511 Maria Views\nWardland, ME 40854-6463', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(98, '3661945', NULL, NULL, 'APP', 141, 'ducimus', NULL, '1981-11-05', '1999-02-21', 1016, '92337930', 'Krystel Renner', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Domenick Watsica', 'shaylee76@vandervort.com', 55, 'male', '5140 Schmidt Stravenue Apt. 054\nAlverachester, UT 09598-9152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(99, '4526241', NULL, NULL, 'APP', 231, 'earum', NULL, '1987-03-22', '1991-08-30', 1651, '95146115', 'Bernadette Spencer Jr.', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Claire Mayer', 'diana31@yahoo.com', 75, 'male', '7658 Jefferey Points\nFidelfort, WI 21427-4381', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(100, '5542626', NULL, NULL, 'APP', 256, 'hic', NULL, '1980-11-27', '2000-03-22', 1472, '96419013', 'Adaline Marquardt', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Celestine Aufderhar', 'idicki@gmail.com', 75, 'female', '358 Kennith Ridges Apt. 477\nColeborough, OR 43005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(101, '6118689', NULL, NULL, 'APP', 253, 'omnis', NULL, '2011-12-23', '2013-03-17', 1167, '98109574', 'Myra Kihn', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Bria O\'Conner Jr.', 'boyer.ally@yahoo.com', 46, 'female', '32798 Rod Isle\nEast Miguel, NM 91595-2468', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(102, '5153157', NULL, NULL, 'APP', 146, 'dolores', NULL, '1982-04-12', '1997-11-21', 1507, '99037139', 'Shanelle Hoppe', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Shanny Heaney', 'zmarvin@hotmail.com', 64, 'male', '589 Jamey Trafficway\nWest Rosemaryborough, SD 10257-2360', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(103, '3321700', NULL, NULL, 'APP', 144, 'voluptas', NULL, '2006-12-29', '1999-08-14', 1646, '90680580', 'Jameson Lueilwitz', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Lorena Lubowitz', 'jackson71@herzog.com', 89, 'male', '3737 Minnie Lodge\nGarrybury, OR 08274', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(104, '7391720', NULL, NULL, 'APP', 227, 'vero', NULL, '1994-03-23', '1984-07-26', 1430, '97039097', 'Evie Hackett V', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Lyla Daugherty', 'jaiden82@glover.com', 70, 'male', '347 Sanford Station Apt. 892\nDarrickbury, AZ 66120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(105, '2193788', NULL, NULL, 'APP', 229, 'cupiditate', NULL, '1977-01-19', '1980-06-19', 1664, '93231132', 'Brent Corwin', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Alvera Mosciski', 'mkertzmann@hotmail.com', 45, 'male', '3849 Anderson Walk Suite 878\nBriaburgh, OK 02979', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(106, '2023577', NULL, NULL, 'APP', 267, 'rerum', NULL, '1991-06-09', '1971-09-24', 1933, '92136695', 'Dr. Emiliano Robel DDS', '7567 Runolfsson Extensions\r\nLefflerland, UT 80210-4899', 1, 'Prof. Francisca Prohaska', 'joanne69@hill.net', 91, 'male', '342 Jack Trail\nRodriguezshire, UT 04375', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, '2021-06-09 04:04:34', '2021-06-09 04:04:34'),
(107, 'PSG5908894', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-10', '2021-06-11', 1397, '9999999999', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 03:55:35', '2021-06-10 03:55:35'),
(108, 'PSG7826619', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-10', '2021-06-11', 1397, '9999999999', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 03:58:10', '2021-06-10 03:58:10'),
(109, 'PSG4553724', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-10', '2021-06-11', 1397, '9999999999', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 03:58:31', '2021-06-10 03:58:31'),
(110, 'PSG9861991', NULL, NULL, 'WEB', 103, 'super deluxe', NULL, '2021-06-10', '2021-06-11', 1684, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:08:39', '2021-06-10 04:08:39'),
(111, 'PSG1340473', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-12', '2021-06-13', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:10:35', '2021-06-10 04:10:35'),
(112, 'PSG2359131', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:12:02', '2021-06-10 04:12:02'),
(113, 'PSG6132627', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:14:01', '2021-06-14 05:20:04'),
(114, 'PSG9466687', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:14:57', '2021-06-10 04:14:57'),
(115, 'PSG3160989', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:15:27', '2021-06-10 04:15:27'),
(116, 'PSG2794562', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:15:36', '2021-06-10 04:15:36'),
(117, 'PSG4548498', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:15:54', '2021-06-10 04:15:54'),
(118, 'PSG6906426', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:16:58', '2021-06-10 04:16:58');
INSERT INTO `booking_rooms` (`id`, `order_id`, `customer_id`, `industry_type_id`, `channel_id`, `room_no`, `room_type`, `image`, `checkin`, `checkout`, `amount`, `mobile`, `lodge_name`, `lodge_address`, `lodge_id`, `booked_by`, `username`, `age`, `gender`, `address`, `no_of_guest`, `txn_date`, `gateway_name`, `resp_mesg`, `resp_code`, `bank_name`, `payment_mode`, `MID`, `txn_id`, `banktxnid`, `payment_status`, `checksum`, `created_at`, `updated_at`) VALUES
(119, 'PSG8945419', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:17:01', '2021-06-10 04:17:01'),
(120, 'PSG5347686', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, TEST, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:18:12', '2021-06-10 04:18:12'),
(121, 'PSG4725882', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, TEST, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:18:32', '2021-06-10 04:18:32'),
(122, 'PSG5045502', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, TEST, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:18:55', '2021-06-10 04:18:55'),
(123, 'PSG3129395', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, TEST, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:19:00', '2021-06-10 04:19:00'),
(124, 'PSG2238368', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-15', '2021-06-16', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, TEST, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-10 04:19:10', '2021-06-10 04:19:10'),
(125, 'PSG1396751', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-24', '2021-06-25', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:19:22', '2021-06-15 04:18:45'),
(126, 'PSG4904097', NULL, NULL, 'WEB', 102, 'deluxe', NULL, '2021-06-29', '2021-06-30', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:20:12', '2021-06-15 04:18:42'),
(127, 'PSG7075951', NULL, NULL, 'WEB', 103, 'super deluxe', NULL, '2021-06-26', '2021-06-27', 1684, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:21:24', '2021-06-10 05:39:00'),
(128, 'PSG8566076', NULL, NULL, 'WEB', 103, 'super deluxe', NULL, '2021-06-12', '2021-06-13', 1684, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:21:51', '2021-06-10 05:36:35'),
(129, 'PSG5870879', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-14', '2021-06-15', 1684, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:26:44', '2021-06-10 05:36:32'),
(130, 'PSG6806001', NULL, NULL, 'WEB', 102, 'deluxe', '1623313787.jpg', '2021-06-19', '2021-06-20', 1397, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-10 04:51:06', '2021-06-12 03:11:07'),
(131, 'PSG3786758', NULL, NULL, 'WEB', 100, 'Double Heritage', '1623314042.jpg', '2021-06-13', '2021-06-14', 5000, '08858291556', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-12 01:29:43', '2021-06-12 03:28:24'),
(132, 'PSG9346896', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-12', '2021-06-13', 1684, '9999999999', 'Siang Guest House', '7567 Runolfsson Extensions\nLefflerland, UT 80210-4899', 1, 'User User', 'user2@gmail.com', 54, 'Male', 'User, User, user', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-12 01:33:42', '2021-06-12 01:33:42'),
(133, 'PSG1096353', NULL, NULL, 'WEB', 102, 'double', '1623313787.jpg', '2021-06-12', '2021-06-13', 1706, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, Uttar Pradesh', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-12 03:03:27', '2021-06-12 03:07:17'),
(134, 'PSG8625871', NULL, NULL, 'WEB', 102, 'double', '1623313787.jpg', '2021-06-12', '2021-06-13', 1706, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, Uttar Pradesh', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-12 03:04:03', '2021-06-12 03:13:00'),
(135, 'PSG8783004', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-15', '2021-06-16', 1684, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, Uttar Pradesh', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-12 03:24:45', '2021-06-12 03:28:23'),
(136, 'PSG3666640', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-15', '2021-06-16', 1684, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, EAST SIANG, East Siang District', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cancelled', NULL, '2021-06-14 02:37:34', '2021-06-14 05:20:16'),
(137, 'PSG8348861', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-15', '2021-06-16', 1684, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'user@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, Maharashtra', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-15 02:47:17', '2021-06-15 02:47:17'),
(138, 'PSG8809970', NULL, NULL, 'WEB', 103, 'super deluxe', '1623314042.jpg', '2021-06-17', '2021-06-18', 1684, '08858291556', 'Siang Guest House', 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', 1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', 44, 'Male', 'NIC O/o District Administration, PASIGHAT, East Siang District', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', NULL, '2021-06-17 04:51:09', '2021-06-17 04:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `address`, `feedback`, `reply`, `created_at`, `updated_at`) VALUES
(1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '0885829155', 'NIC O/o District Administration', 'Can you please suggest that how to book a  room on your website.', '<script>alert(\"You are hacked\");</script>', '2021-05-25 03:09:53', '2021-06-14 05:37:42'),
(2, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'as', 'Sorry I did not get your query, Kindly phrase it again and send it to me.', '2021-05-25 03:21:26', '2021-06-11 05:13:33'),
(3, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'Hello', 'Hello', '2021-06-10 04:27:06', '2021-06-11 05:12:59'),
(4, 'User', 'user@gmail.com', '9436053083', 'Pasighat (NT)', 'Hello admin, I just wanna ask you, in this website there is no option to pay the bill online, so is is okay if we will on the onboading day  at the hotel.', '<script>alert(\"Hey You are hacked\");</script>', '2021-06-11 05:27:18', '2021-06-14 05:37:11'),
(5, 'SUDHIR VERMA', 'user2@gmail.com', '08858291556', 'NIC O/o District Administration', 'Hello can I ask Something.', 'Yaaah Sure, you can write us a detail query, and we will try to resolve it as soon as possible.', '2021-06-11 05:29:40', '2021-06-11 05:31:50'),
(6, 'SUDHIR VERMA', 'user2@gmail.com', '08858291556', 'NIC O/o District Administration', 'Now I got your point.', 'I didn\'t get you properly', '2021-06-11 05:34:12', '2021-06-11 05:37:53'),
(7, 'SUDHIR VERMA', 'user2@gmail.com', '08858291556', 'NIC O/o District Administration', 'Hello', '', '2021-06-11 05:40:55', '2021-06-11 05:40:55'),
(8, 'Test', 'sudhirkr.verma@nic.in', '9874563210', 'NIC O/o District Administration', 'I just wanna ask, Whether this applicaiton has been live or not.', 'Hey, right now it is not available online, but very soon it will be available online.', '2021-06-12 01:01:04', '2021-06-12 01:14:14'),
(9, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident sapiente, minima molestiae repellat recusandae temporibus rerum eaque alias dolores voluptate delectus! Asperiores rem fugiat accusamus suscipit minus non earum sint, molestias ipsum excepturi pariatur voluptates consequuntur aliquid! Voluptates quia explicabo consequuntur ratione dolorum ullam, corporis blanditiis quas quibusdam, harum recusandae sequi, dolorem cupiditate!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum provident sapiente, minima molestiae repellat recusandae temporibus rerum eaque alias dolores voluptate delectus! Asperiores rem fugiat accusamus suscipit minus non earum sint, molestias ipsum excepturi pariatur voluptates consequuntur aliquid! Voluptates quia explicabo consequuntur ratione dolorum ullam, corporis blanditiis quas quibusdam, harum recusandae sequi, dolorem cupiditate!', '2021-06-12 01:14:43', '2021-06-12 01:14:57'),
(10, 'SUDHIR VERMA', 'admin@nic.in', '08858291556', 'NIC O/o District Administration', 'This is my first comment.', 'Hey, Good Morning Glad to see you that you are using my Web application services.', '2021-06-12 02:01:24', '2021-06-12 02:03:28'),
(11, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'Can we access it from mobile.', 'No right now app has not been developed yet, but later on, a Mobile app also is developed and will be share with you. Kindly be with us.', '2021-06-14 02:36:41', '2021-06-14 05:12:45'),
(12, 'Sudhir', 'user.1@nic.in', '2580258056', 'Nic pasighat', 'Is this application live now.?', 'No, till now it is not available yet, since it is in testing phase so you have to wait atleast 15 days,', '2021-06-14 05:08:54', '2021-06-14 05:10:00'),
(13, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'Can you please tell me something about this project??', 'It is a web based application, which is used to provide you the web based apploication for booking your room in Pasighat East Siang District.', '2021-06-14 05:33:07', '2021-06-14 05:35:34'),
(14, 'User', 'user@nic.in', '9874563210', 'K V Pasighat, 2 Mile', 'I want to know that why my booking history correctly. I have booked 2 room but as when I checked in my booking history it is showing that \"You didn\'t book any room\"??', 'I dont think so that may be possible because if you book your room then it should definitely reflected in the database, Kindly send me the screenshot so that I could be assure about your problem in a clear way.\r\n\r\nThank You,\r\nSuperadmin@gLodge.com', '2021-06-15 02:28:53', '2021-06-15 02:37:31'),
(15, 'Siang Guest House', 'admin@nic.in', '08858291556', 'NIC O/o District Administration', 'Hello,\r\nI am the admin of Siang Guest House, I am facing some problems in order to update my Master Data part. So could you please help me figure out my problem.\r\n\r\nThanks & Regards,\r\nAdmin- Siang Guest House', 'Hey, \r\nAdmin, Kindly tell  in a detail what is exact problem you are facing either data is showing wrong or you unable to operate the portal. I dont think so that there may be any error in portal. From my end everything is working fine.\r\n\r\nThanks & Regards, \r\nSuperamdin- gLodge Team', '2021-06-16 02:15:02', '2021-06-16 02:17:37'),
(16, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', '08858291556', 'NIC O/o District Administration', 'Can you please me the better option related to staying in Pasighat?\r\n\r\nThanks,\r\nSuperadmin Team-gLodge', 'Since it is platform where you can see all the lodges/hotels choose whatever you feel confirmation, All the option are available to you. Just click on Room Availability tab and search the room for your visiting day.\r\n\r\nThanks,\r\nSuperadmin Team-gLodge', '2021-06-17 02:14:52', '2021-06-17 02:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `lodges`
--

DROP TABLE IF EXISTS `lodges`;
CREATE TABLE IF NOT EXISTS `lodges` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lodge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receptionist_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lodge_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lodge_img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lodge_img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lodge_img3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lodges`
--

INSERT INTO `lodges` (`id`, `lodge_name`, `owner_name`, `owner_contact`, `receptionist_contact`, `description`, `lodge_img`, `lodge_img1`, `lodge_img2`, `lodge_img3`, `username`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Siang Guest House', 'Mr. Siang', '9874563210', '9874563210', 'Your comfort is our responsibility', '1623483383.jpg', '1623483383.jpg', '1623483383.JPG', '1623483383.JPG', 'admin@nic.in', 1, 'High Region, Near DC Office Complex , East Siang District, Pasighat, AP 791102', '2021-05-12 01:57:50', '2021-06-15 02:58:08'),
(2, 'impedit', 'Vesta Runolfsson', '546234461', '128406999', 'Fugiat laudantium voluptatibus mollitia sit quidem pariatur.', 'siang.jpg', NULL, NULL, NULL, 'reginald.orn@koepp.com', 1, '191 Yundt Square\nSouth Ernie, MI 63943-4326', '2021-05-12 01:57:50', '2021-06-04 05:37:46'),
(3, 'officiis', 'Prof. Bertram Moen', '279705726', '867793319', 'Rerum sunt at quia quidem aut aut.', 'siang.jpg', NULL, NULL, NULL, 'wiegand.muhammad@brekke.com', 1, '863 Lurline Villages\nColleenton, FL 45947-1962', '2021-05-12 01:57:50', '2021-06-17 02:31:16'),
(4, 'officiis', 'Mercedes Hodkiewicz', '462939627', '732112512', 'Voluptatibus quasi sint accusamus id saepe itaque.', 'siang.jpg', NULL, NULL, NULL, 'ycruickshank@welch.com', 1, '90073 Colleen Coves Apt. 031\nGulgowskichester, KS 31400', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(5, 'deleniti', 'Domenick Bins', '775016141', '862305822', 'A aut deserunt eligendi suscipit sint quidem at.', 'siang.jpg', NULL, NULL, NULL, 'greenfelder.verna@conroy.com', 1, '5152 Fay Rapids Suite 685\nMarcelchester, NY 89583', '2021-05-12 01:57:50', '2021-06-17 02:31:20'),
(6, 'quaerat', 'Alexandra Ankunding', '742994928', '366189037', 'Iusto culpa magni eum non esse ea velit.', 'siang.jpg', NULL, NULL, NULL, 'verla.hand@kling.com', 1, '6270 Christiansen Springs\nDibbertstad, AZ 02538-7860', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(7, 'sed', 'Dr. Torey Schaden III', '489131623', '466848317', 'Odit error ullam modi ab repellat.', 'siang.jpg', NULL, NULL, NULL, 'ulittel@hotmail.com', 0, '542 West Viaduct Apt. 573\nPort Deborahborough, WV 86744-0697', '2021-05-12 01:57:50', '2021-06-14 02:43:29'),
(8, 'aperiam', 'Shane Purdy V', '359684210', '652262309', 'Harum omnis ea dignissimos quia nam.', 'siang.jpg', NULL, NULL, NULL, 'cristal56@gmail.com', 1, '911 Emmitt Circle\nChaztown, OR 37259', '2021-05-12 01:57:50', '2021-05-31 05:25:54'),
(9, 'odio', 'Bud Goyette', '145986808', '148506771', 'Aliquam illum nulla voluptates doloribus voluptas.', 'siang.jpg', NULL, NULL, NULL, 'ohara.dayne@hartmann.com', 0, '299 Sauer Points\nNew Phyllishaven, GA 08465', '2021-05-12 01:57:50', '2021-06-12 01:26:15'),
(10, 'voluptatem', 'Gabe Daniel I', '235397098', '263179089', 'Ducimus mollitia vel assumenda necessitatibus.', 'siang.jpg', NULL, NULL, NULL, 'gwillms@oconner.biz', 1, '2142 Purdy Fields\nNew Eve, CT 09731', '2021-05-12 01:57:50', '2021-06-12 01:18:08'),
(11, 'sasad', 'sdsdsd', '1235123454', '1234123456', 'sds', 'siang.jpg', '1622546768.png', '1622546768.png', '1622546768.png', 'chms@nic.in', 1, 'K V Pasighat, 2 Mile', '2021-06-01 04:42:46', '2021-06-01 05:56:12'),
(12, 'Lodge', 'lodge', '9874561230', '0123456987', 'Welcome', '1623485633.jpg', '1623485633.jpg', '1623485633.jpg', '1623485633.jpg', 'lodge1@gmail.com', 1, 'Pasighat (NT)', '2021-06-12 02:43:53', '2021-06-12 02:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `lodge_facilities`
--

DROP TABLE IF EXISTS `lodge_facilities`;
CREATE TABLE IF NOT EXISTS `lodge_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facility` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `lodge_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lodge_facilities`
--

INSERT INTO `lodge_facilities` (`id`, `facility`, `status`, `lodge_id`, `created_at`, `updated_at`) VALUES
(1, 'All rooms have fresh air', 1, 2, '2021-06-03 05:34:14', '2021-06-03 05:34:14'),
(5, 'Lodge is having the proper parking space', 1, 1, '2021-06-03 05:43:09', '2021-06-03 05:43:09'),
(6, 'Lodge is having the proper parking space', 1, 1, '2021-06-03 05:43:35', '2021-06-03 05:43:35'),
(7, 'Lodge is having the proper parking space', 1, 1, '2021-06-03 05:44:06', '2021-06-03 05:44:06'),
(22, 'Parking charge may be extra', 0, 1, '2021-06-10 02:26:37', '2021-06-14 05:16:50'),
(23, 'You are at the right place', 1, 1, NULL, NULL),
(11, 'Lodge is having the proper parking space', 1, 1, '2021-06-03 05:49:08', '2021-06-03 05:49:08'),
(12, 'All room are very great facility', 0, 1, '2021-06-03 05:51:02', '2021-06-17 05:14:24'),
(13, 'All room are very great facility', 0, 1, '2021-06-03 05:52:30', '2021-06-07 02:22:57'),
(14, 'Parking Space Avaiable', 1, 1, '2021-06-03 05:59:01', '2021-06-03 05:59:01'),
(24, 'Most of the room having proper AC', 1, 1, '2021-06-14 05:16:31', '2021-06-14 05:16:31'),
(16, 'Parking not', 1, 1, '2021-06-03 06:04:24', '2021-06-04 05:26:18'),
(17, 'Parking yes', 0, 1, '2021-06-03 06:04:54', '2021-06-04 05:26:31'),
(18, 'Most of the room have fully furnish.', 0, 1, '2021-06-03 06:05:33', '2021-06-03 06:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_04_29_060613_create_lodges_table', 1),
(10, '2021_04_30_065649_create_booking_rooms_table', 1),
(11, '2021_04_30_094237_create_rooms_table', 1),
(12, '2021_04_30_095851_create_room_categories_table', 1),
(13, '2021_04_30_101606_create_room_facilities_table', 1),
(14, '2021_05_03_095812_create_privacy_policies_table', 1),
(15, '2021_05_11_060928_create_feedback_table', 1),
(16, '2021_06_03_102624_create_lodge_facilities_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('eaf432c329ad17f046b3e967f3651ca1cf9ba29b675b4c9b47fe219afba0d5c54d1f4d4adf76c3b8', 2, 1, 'authToken', '[]', 0, '2021-05-12 02:03:31', '2021-05-12 02:03:31', '2022-05-12 07:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'qvuExiqNEvunVRdwGgnwuQghjfIHIRRTEkOUcQBh', NULL, 'http://localhost', 1, 0, 0, '2021-05-12 01:57:53', '2021-05-12 01:57:53'),
(2, NULL, 'Laravel Password Grant Client', '70zc1NJ1SPmFMrBSvuVYzoEREJfCzUr44d2SD3vf', 'users', 'http://localhost', 0, 1, 0, '2021-05-12 01:57:53', '2021-05-12 01:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-05-12 01:57:53', '2021-05-12 01:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sudhirkr.verma@nic.in', '$2y$10$tCV9o5sAKXSthfihfwycY.YyIMiMg3Ez9A0izQjdLvCFfeEd5jGXe', '2021-06-12 03:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

DROP TABLE IF EXISTS `privacy_policies`;
CREATE TABLE IF NOT EXISTS `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `header`, `body`, `created_at`, `updated_at`) VALUES
(1, 'officiis', 'Delectus atque a quae totam culpa qui quaerat. Voluptatem ipsum quibusdam voluptatem quia voluptatem. A animi et vel eum quia.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(2, 'neque', 'Eligendi cupiditate et ducimus animi. Deleniti est quia officia consequatur exercitationem non. Quae aperiam amet iure cumque nesciunt et ea officia.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(3, 'perferendis', 'Eveniet omnis ducimus sunt voluptatem aut nobis. Nesciunt voluptas veniam facere ad excepturi totam sint. Quod voluptatem mollitia et enim atque architecto. Doloremque voluptates recusandae enim quia.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(4, 'officiis', 'Consequatur voluptate praesentium quis cupiditate quia. Ipsa et consequuntur enim ratione sit consequatur ipsam. Quasi perferendis consequatur aut quis voluptas qui. Qui quasi id et et vero. Omnis sed qui at beatae dolor eligendi rerum.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(5, 'et', 'Fugiat consectetur delectus velit nisi ut. Non consequatur quasi possimus deleniti sed. Facilis fugiat ut delectus aliquam. Odio ipsa aut et.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(6, 'et', 'Esse quia consequatur dicta nobis qui fugiat ex. Ipsum nesciunt sequi pariatur esse reiciendis. Rerum vitae ipsam dolor ut excepturi deserunt corporis. Error nisi recusandae magni est.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(7, 'quod', 'Doloremque rerum quas quis facere. Provident molestiae iusto sit non eveniet. Repellendus officiis voluptatem soluta facilis velit et eum. Quia animi incidunt voluptatem ut voluptatem unde velit.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(8, 'assumenda', 'Et ea delectus est quod soluta labore dolore. Quasi autem rem rerum doloremque. Officia aspernatur est perferendis laboriosam. Dignissimos voluptatem perspiciatis fugiat esse adipisci.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(9, 'rem', 'Eos impedit sequi ab non. Fugiat qui possimus hic dolorem rerum id. Mollitia est et aut quibusdam nisi non rerum.', '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(10, 'accusantium', 'Nemo ut a qui aspernatur nihil harum. Expedita id perspiciatis et dolorem. Eveniet nemo et inventore. Magnam id est veniam qui culpa nesciunt quis sit.', '2021-05-12 01:57:50', '2021-05-12 01:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_status` int(11) NOT NULL,
  `lodge_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `room_type`, `img1`, `img2`, `img3`, `room_status`, `lodge_id`, `created_at`, `updated_at`) VALUES
(1, 100, 'Double Heritage', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 1, '2021-05-12 01:57:50', '2021-06-09 05:44:12'),
(3, 102, 'Double', '1623313787.jpg', '1623314042.jpg', '1623314042.jpg', 1, 1, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(4, 103, 'Super Deluxe', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 1, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(5, 104, 'Double Heritage', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 1, '2021-05-12 01:57:50', '2021-06-17 05:30:27'),
(6, 101, 'et', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 1, '2021-06-08 04:51:11', '2021-06-08 04:51:11'),
(7, 228, 'dolor', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 7, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(8, 117, 'ut', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 3, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(9, 143, 'ut', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 7, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(10, 167, 'totam', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 0, 2, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(11, 115, 'qui', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 0, 2, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(12, 285, 'dolores', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 4, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(13, 147, 'assumenda', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 1, 3, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(14, 260, 'nemo', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 0, 4, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(15, 273, 'nemo', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 0, 6, '2021-06-10 02:35:36', '2021-06-10 02:35:36'),
(16, 271, 'sapiente', '1623314042.jpg', '1623314042.jpg', '1623314042.jpg', 0, 1, '2021-06-10 02:35:36', '2021-06-10 02:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

DROP TABLE IF EXISTS `room_categories`;
CREATE TABLE IF NOT EXISTS `room_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lodge_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `room_type`, `lodge_id`, `image`, `status`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Double', 1, '1623927358.jpg', 1, 5000, '2021-05-12 01:57:50', '2021-06-17 05:25:58'),
(2, 'double suit', 1, '1623314042.jpg', 1, 5000, '2021-05-12 01:57:50', '2021-06-10 03:03:12'),
(3, 'deluxe', 1, '1623314042.jpg', 1, 1397, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(4, 'Super Deluxe', 1, '1623314042.jpg', 1, 1684, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(6, 'Double Heritage', 1, '1623314042.jpg', 1, 5000, '2021-06-07 02:59:47', '2021-06-10 03:04:02'),
(19, 'deluxe', 1, '1623314042.jpg', 0, 1000, '2021-06-07 05:11:07', '2021-06-07 05:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

DROP TABLE IF EXISTS `room_facilities`;
CREATE TABLE IF NOT EXISTS `room_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bathroom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toilet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `single_bed` int(11) NOT NULL,
  `double_bed` int(11) NOT NULL,
  `no_of_bed` int(11) NOT NULL,
  `tv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `geyser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lodge_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`id`, `room_type`, `bathroom`, `toilet`, `single_bed`, `double_bed`, `no_of_bed`, `tv`, `wifi`, `geyser`, `ac`, `lodge_id`, `created_at`, `updated_at`) VALUES
(1, 'double', 'YES', 'YES', 3, 2, 2, 'YES', 'NO', 'YES', 'YES', 1, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(2, 'double suit', 'Yes', 'Yes', 1, 1, 2, 'Yes', 'Yes', 'No', 'No', 1, '2021-05-12 01:57:50', '2021-06-17 05:24:26'),
(3, 'deluxe', 'Yes', 'Yes', 1, 1, 2, 'Yes', 'Yes', 'Yes', 'Yes', 1, '2021-05-12 01:57:50', '2021-06-15 04:18:08'),
(4, 'super deluxe', 'YES', 'NO', 3, 2, 2, 'NO', 'NO', 'NO', 'NO', 1, '2021-05-12 01:57:50', '2021-05-12 01:57:50'),
(5, 'et', 'Yes', 'Yes', 1, 1, 2, 'Yes', 'Yes', 'Yes', 'Yes', 1, '2021-05-12 01:57:50', '2021-06-08 03:50:45'),
(6, 'Double Heritage', 'Yes', 'Yes', 0, 0, 0, 'Yes', 'Yes', 'Yes', 'Yes', 1, '2021-06-08 03:24:47', '2021-06-08 03:50:27'),
(7, 'Double Heritage', 'Yes', 'Yes', 0, 0, 0, 'Yes', 'Yes', 'Yes', 'Yes', 1, '2021-06-08 03:28:00', '2021-06-08 03:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'user',
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SUDHIR VERMA', 'sudhirkr.verma@nic.in', NULL, '$2y$10$ja1J08ZYg91CeM9FSXeHUubFfbvIUtfy/etZbJkXIL8iEvD/eGC3e', 'user', NULL, NULL, '2021-05-12 01:58:09', '2021-05-12 01:58:09'),
(18, 'Admin', 'admin@nic.in', NULL, '$2y$10$4NGEHGPXFPYeR7nZyFHUoOp5oNnshqbEOOMr9mnO65T/HVE212ZNK', 'admin', '08858291556', NULL, '2021-06-01 01:55:52', '2021-06-01 01:55:52'),
(3, 'SUDHIR VERMA', 'superadmin@nic.in', NULL, '$2y$10$5uKn1yTjCt6Bo4Wy5sKU6.QepW4Wj39yfJTNOPgx1thdQYjuXWydq', 'user', '8858291556', NULL, '2021-05-27 04:11:04', '2021-05-27 04:11:04'),
(4, 'SUDHIR VERMA', 'user@gmail.com', NULL, '$2y$10$OhdqkhHPUQYWxWAbmTmAvOH/cDfuFmz5.eYkc9dYF.cOo9OqCAVry', 'user', '08858291556', NULL, '2021-05-27 04:18:13', '2021-05-27 04:18:13'),
(5, 'Superadmin', 'superadmin@gmail.com', NULL, '$2y$10$d7kIrz.WJFX0F67g62p66eDnk1pi85vzhYYLCN97GpdDEe4/gp08q', 'superadmin', '08858291556', NULL, '2021-05-27 04:37:10', '2021-05-27 04:37:10'),
(6, 'SUDHIR VERMA', 'user1@gmail.com', NULL, '$2y$10$RC1NMQ5c/Xmk2oVC8hPTPezi9s/hMRu4X64moQgX21cDFDSh3ObVC', 'user', '08858291556', NULL, '2021-05-31 03:53:39', '2021-05-31 03:53:39'),
(7, 'SUDHIR VERMA', 'user2@gmail.com', NULL, '$2y$10$nB7F1vVNPCe2ltybAlQtIOQ9zwD2UL8pOyOCE.M.DemHzZYy0JadW', 'user', '08858291556', NULL, '2021-05-31 03:55:59', '2021-05-31 03:55:59'),
(8, 'SUDHIR VERMA', 'admin1@nic.in', NULL, '$2y$10$8YSKuIKiSyGIGutgVL7yxODlSw7Wbd86jzk9g8E0YhQRPtjkyaj/.', 'user', '08858291556', NULL, '2021-05-31 04:20:14', '2021-05-31 04:20:14'),
(9, 'SUDHIR VERMA', 'admin3@nic.in', NULL, '$2y$10$xsluEYBgMVqxNk1KPY3VKedA938Dx8E.vwz1tGKkpUQpC5xs7ZjyW', 'user', '08858291556', NULL, '2021-05-31 04:21:39', '2021-05-31 04:21:39'),
(10, 'SUDHIR VERMA', 'admin4@nic.in', NULL, '$2y$10$IHhPnqg9iN/NN/m6tKZt7OQovuZpENGiWtCXxFWZM1DWaVQpMHo0q', 'user', '08858291556', NULL, '2021-05-31 04:25:48', '2021-05-31 04:25:48'),
(11, 'SUDHIR VERMA', 'admin5@nic.in', NULL, '$2y$10$d0KJ8xm8fqsgPBmbTA0SjeUq9toKQ4tRwbkSvUfT155NyyM/PCCy6', NULL, '8858291556', NULL, '2021-05-31 04:28:25', '2021-05-31 04:28:25'),
(12, 'SUDHIR VERMA', 'admin6@nic.in', NULL, 'admin', 'admin', '08858291556', NULL, '2021-05-31 04:31:46', '2021-05-31 04:31:46'),
(13, 'SUDHIR VERMA', 'user3@nic.in', NULL, '$2y$10$io5AIxK7S5HYcSlo1GxQvu.o90HUzmAv9.VxY0syHxjK4gnNL8ATa', 'user', '08858291556', NULL, '2021-05-31 04:32:10', '2021-05-31 04:32:10'),
(14, 'SUDHIR VERMA', 'admin6@gmail.com', NULL, 'admin', 'admin', '08858291556', NULL, '2021-05-31 04:34:52', '2021-05-31 04:34:52'),
(15, 'SUDHIR VERMA', 'admin7@nic.in', NULL, 'admin', 'admin', '08858291556', NULL, '2021-05-31 04:36:13', '2021-05-31 04:36:13'),
(16, 'SUDHIR VERMA', 'admin8@nic.in', NULL, 'admin', 'admin', '08858291556', NULL, '2021-05-31 04:36:57', '2021-05-31 04:36:57'),
(17, 'SUDHIR VERMA', 'admin9@nic.in', NULL, 'admin', 'user', '08858291556', NULL, '2021-05-31 04:37:48', '2021-05-31 04:37:48'),
(19, 'CHMS', 'chms@nic.in', NULL, '$2y$10$7HhwWp/YSpXWkHBGcNB0MOEyCWoFB6ZHm3opaQ0HLEOjhKxEWhHXq', 'admin', '08858291556', NULL, '2021-06-01 04:38:18', '2021-06-01 04:38:18'),
(20, 'User', 'sudhir@nic.in', NULL, '$2y$10$y/y7gd6zsvd.UN1vPNRqc.njxbjfdVfFk9vZhWmPwWjcfityWoHm2', 'user', '9874561230', NULL, '2021-06-11 03:36:52', '2021-06-11 03:36:52'),
(21, 'Admin', 'lodge1@gmail.com', NULL, '$2y$10$a7ma9IrdieT1Pq3xdMajCOj2HN3r2t4W6U0emoqFeDAvxA/WP2LVS', 'admin', '9874563210', NULL, '2021-06-12 02:18:37', '2021-06-12 02:18:37'),
(22, 'Lodge', 'lodge2@gmail.com', NULL, '$2y$10$.CLzHoUR8akTR0/hGkKejeiebaRSmYh0HihatHm6gnbBZKsRG6i32', 'admin', '9874561230', NULL, '2021-06-12 02:48:29', '2021-06-12 02:48:29'),
(23, 'New User', 'user.1@nic.in', NULL, '$2y$10$xdCmVPsm.udVmDUBzOoW3eScayNTF4EjTjx7pz9urjIBqcpVzPFbu', 'user', '8858291556', NULL, '2021-06-14 05:05:40', '2021-06-14 05:05:40'),
(24, 'User', 'user@nic.in', NULL, '$2y$10$KuHeM7F4mgLMJkBKIlDJJOHYyYZl7MfJDlLsxJqnhYztYS7kYUWvi', 'user', '3214569870', NULL, '2021-06-15 02:24:37', '2021-06-15 02:24:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
