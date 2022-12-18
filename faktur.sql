-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2022 at 04:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faktur`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_faktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_nasabah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rangka` int(11) NOT NULL,
  `nomor_mesin` int(11) NOT NULL,
  `kabupaten_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id`, `user_id`, `nomor_faktur`, `nama_nasabah`, `nomor_rangka`, `nomor_mesin`, `kabupaten_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 5, '559561992769', 'Zander Jones', 400972, 1927507, 415, 2, '2021-05-04 11:38:06', '2022-12-18 01:47:02'),
(2, 7, '192551814856', 'Kolby White', 5104137, 5616047, 61, 3, '2021-08-09 14:22:59', '2022-12-18 01:47:02'),
(3, 5, '256801691054', 'Karen Dietrich', 2924910, 5478976, 388, 3, '2021-04-22 03:48:57', '2022-12-18 01:47:02'),
(4, 9, '684451603403', 'Cary Mann Sr.', 1034130, 8994296, 388, 3, '2022-06-28 17:51:54', '2022-12-18 01:47:02'),
(5, 8, '180365598227', 'Ms. Lela Kihn DDS', 9241774, 515109, 61, 2, '2022-07-29 11:25:10', '2022-12-18 01:47:02'),
(6, 10, '583402499061', 'Lesly Towne MD', 6471857, 4537441, 415, 1, '2021-05-01 13:15:26', '2022-12-18 01:47:02'),
(7, 3, '456257958123', 'Brain Heaney', 1355972, 7834981, 415, 1, '2022-04-05 09:31:56', '2022-12-18 01:47:02'),
(8, 10, '540518338760', 'Jermey Watsica', 3411181, 8150340, 61, 1, '2022-10-28 06:19:02', '2022-12-18 01:47:02'),
(9, 3, '945404622769', 'Kassandra Corkery', 5430183, 1018545, 61, 1, '2021-06-26 16:37:19', '2022-12-18 01:47:02'),
(10, 9, '579952777314', 'Jayda Okuneva', 7953363, 4977509, 388, 3, '2022-12-10 02:31:45', '2022-12-18 01:47:02'),
(11, 9, '663092747046', 'Jammie Marks PhD', 9207609, 663068, 61, 3, '2021-08-04 12:03:08', '2022-12-18 01:47:02'),
(12, 2, '678091165102', 'Dr. Clifton Lakin', 7395580, 5040720, 61, 1, '2021-10-05 06:24:51', '2022-12-18 01:47:02'),
(13, 1, '648144639621', 'Prof. Rhiannon Jerde', 9243787, 4410660, 61, 3, '2021-08-10 06:55:43', '2022-12-18 01:47:02'),
(14, 8, '16644307144', 'Mafalda Koss', 7528699, 3601511, 388, 2, '2021-05-25 07:23:24', '2022-12-18 01:47:02'),
(15, 4, '303615748157', 'Audie Blanda', 7215357, 4153545, 388, 3, '2022-06-13 09:27:37', '2022-12-18 01:47:03'),
(16, 1, '417289617137', 'Wyman Macejkovic', 2501275, 2574976, 388, 1, '2022-03-11 15:51:37', '2022-12-18 01:47:03'),
(17, 4, '850863705059', 'Mortimer Hane PhD', 5136051, 3577438, 61, 1, '2022-11-24 04:01:24', '2022-12-18 01:47:03'),
(18, 8, '763879295700', 'Maria Stanton', 7685711, 4497319, 388, 2, '2021-11-30 20:07:09', '2022-12-18 01:47:03'),
(19, 4, '160219226230', 'Prof. Luis Schuster', 9372439, 5478563, 61, 2, '2021-08-26 12:01:30', '2022-12-18 01:47:03'),
(20, 2, '502204410378', 'Cortez Luettgen', 5110962, 3408920, 388, 3, '2021-07-18 22:32:16', '2022-12-18 01:47:03'),
(21, 7, '909952205836', 'Frederic Hayes II', 3710132, 7122151, 415, 2, '2021-07-13 07:26:41', '2022-12-18 01:47:03'),
(22, 7, '655718849659', 'Rhianna Durgan', 9497618, 7521659, 61, 2, '2022-05-13 16:00:54', '2022-12-18 01:47:03'),
(23, 8, '686269894324', 'Eli Cole', 6177782, 9880168, 415, 1, '2021-07-01 12:39:12', '2022-12-18 01:47:03'),
(24, 5, '592909514703', 'Aida Abernathy IV', 7230235, 2451467, 61, 2, '2021-05-29 11:11:46', '2022-12-18 01:47:03'),
(25, 8, '867992085183', 'Daniela Carter IV', 5517535, 3737555, 61, 1, '2022-07-28 00:50:27', '2022-12-18 01:47:03'),
(26, 9, '296357741176', 'Tom Ryan', 3586541, 3371333, 61, 3, '2021-08-10 06:08:29', '2022-12-18 01:47:03'),
(27, 4, '691029055120', 'Carolanne Kertzmann', 3716326, 6497932, 61, 1, '2022-08-29 19:40:25', '2022-12-18 01:47:03'),
(28, 1, '541966527432', 'Alisa Hoppe', 6442661, 4246977, 415, 3, '2021-03-05 00:59:14', '2022-12-18 01:47:03'),
(29, 2, '901752160077', 'Brycen Ullrich', 624103, 6683532, 415, 1, '2022-12-09 20:07:35', '2022-12-18 01:47:03'),
(30, 2, '267708974484', 'Jace Becker', 4959813, 8844877, 61, 3, '2021-10-29 08:44:38', '2022-12-18 01:47:03'),
(31, 6, '182184811812', 'Josiah Schinner', 4978771, 9829685, 388, 3, '2021-05-28 18:41:57', '2022-12-18 01:47:03'),
(32, 9, '977056469460', 'Pascale Gutkowski', 1998511, 7844250, 61, 1, '2022-05-08 08:51:58', '2022-12-18 01:47:03'),
(33, 8, '628924777639', 'Prof. Jovany Haley', 8266752, 8327442, 61, 2, '2021-06-08 03:41:26', '2022-12-18 01:47:03'),
(34, 7, '19674464118', 'Olen Wolf', 9043809, 5399151, 415, 3, '2022-05-18 23:04:33', '2022-12-18 01:47:03'),
(35, 10, '649804891746', 'Laurianne Renner', 7862061, 2575570, 388, 2, '2022-08-22 02:40:03', '2022-12-18 01:47:03'),
(36, 8, '449140754429', 'Marina Hahn', 7649722, 5389370, 61, 1, '2022-06-23 17:34:26', '2022-12-18 01:47:04'),
(37, 4, '239620386067', 'Prof. Hal Stroman DVM', 7949880, 8379091, 61, 1, '2022-11-27 21:05:56', '2022-12-18 01:47:04'),
(38, 6, '202165616272', 'Prof. Kacey Metz', 9056332, 6655009, 388, 1, '2021-03-09 19:57:13', '2022-12-18 01:47:04'),
(39, 7, '885479628752', 'Wendell Schamberger', 9785236, 7063372, 388, 3, '2022-04-28 18:41:48', '2022-12-18 01:47:04'),
(40, 7, '227280679810', 'Okey Schultz', 6968797, 910696, 61, 1, '2022-08-29 23:01:22', '2022-12-18 01:47:04'),
(41, 10, '642992713959', 'Axel Cremin', 112214, 1624524, 388, 2, '2022-09-18 23:53:10', '2022-12-18 01:47:04'),
(42, 4, '245293436735', 'Mr. Jimmie Nienow', 6682364, 2880789, 415, 3, '2022-06-18 20:44:00', '2022-12-18 01:47:04'),
(43, 9, '569564378312', 'Myrl Lesch', 7158593, 7589237, 388, 2, '2021-04-19 21:31:47', '2022-12-18 01:47:04'),
(44, 3, '549747734545', 'Ms. Jayda Schmidt', 4068713, 181600, 61, 2, '2022-08-26 00:00:02', '2022-12-18 01:47:04'),
(45, 9, '853715885435', 'Dr. Isidro Lowe', 7851863, 1780496, 415, 2, '2021-02-12 00:55:52', '2022-12-18 01:47:04'),
(46, 8, '387011481716', 'Willie Schumm', 5746928, 4711149, 388, 1, '2021-04-12 03:52:59', '2022-12-18 01:47:04'),
(47, 3, '186783413075', 'Brisa Thiel', 6295018, 3106962, 415, 3, '2021-11-28 09:39:01', '2022-12-18 01:47:04'),
(48, 5, '68211238017', 'Graham Kirlin', 1441317, 5825976, 415, 2, '2022-01-04 15:07:02', '2022-12-18 01:47:04'),
(49, 4, '449176125457', 'Ms. Daphnee Herzog', 664211, 6539170, 415, 2, '2021-05-09 21:33:42', '2022-12-18 01:47:04'),
(50, 5, '456462511475', 'Faustino Tremblay', 4987967, 2473210, 415, 2, '2021-06-18 09:54:28', '2022-12-18 01:47:04'),
(51, 6, '69423373317', 'Virginie Pouros', 6997692, 1949158, 388, 3, '2022-11-07 12:27:36', '2022-12-18 01:47:04'),
(52, 4, '281653745622', 'Jonathan Schroeder', 1901996, 6511755, 415, 1, '2022-09-19 23:07:32', '2022-12-18 01:47:04'),
(53, 4, '143959973922', 'Dr. Sherman Crona', 7153359, 6090968, 388, 3, '2022-06-23 14:00:32', '2022-12-18 01:47:04'),
(54, 4, '584565169241', 'Ms. Lilliana Ferry', 6411100, 8728755, 415, 3, '2022-03-05 03:44:27', '2022-12-18 01:47:04'),
(55, 2, '717894938148', 'Mrs. Arlie Smitham', 599448, 6198081, 61, 1, '2022-01-08 00:12:49', '2022-12-18 01:47:04'),
(56, 9, '780552610326', 'Ms. Jackeline McClure Jr.', 3642589, 3216082, 61, 1, '2022-12-02 20:51:10', '2022-12-18 01:47:04'),
(57, 5, '748726455672', 'Fannie Conroy', 7949922, 3357125, 388, 3, '2021-12-24 16:14:25', '2022-12-18 01:47:04'),
(58, 7, '15512694228', 'Jedidiah Padberg PhD', 8409976, 3527802, 388, 1, '2021-09-29 12:14:35', '2022-12-18 01:47:04'),
(59, 1, '925862693870', 'Anabel Terry', 9969650, 3143582, 61, 1, '2022-07-20 02:28:30', '2022-12-18 01:47:04'),
(60, 4, '771390096499', 'Alexander Pfeffer', 1186194, 3728041, 415, 3, '2021-08-25 04:04:08', '2022-12-18 01:47:04'),
(61, 10, '489634171747', 'Ophelia Bednar', 1460197, 4800530, 415, 2, '2022-04-24 00:57:21', '2022-12-18 01:47:04'),
(62, 6, '431269967743', 'Polly Barton', 3310526, 5008139, 61, 3, '2022-06-14 09:45:05', '2022-12-18 01:47:05'),
(63, 8, '744396703445', 'Jailyn Keeling', 5237, 9619548, 415, 1, '2021-08-05 06:56:07', '2022-12-18 01:47:05'),
(64, 1, '669490861286', 'Ms. Jana Leannon I', 9131252, 9728823, 61, 1, '2022-01-09 01:53:33', '2022-12-18 01:47:05'),
(65, 9, '551149528977', 'Mrs. Kelly Stokes PhD', 2771995, 6732311, 415, 1, '2021-12-28 09:55:39', '2022-12-18 01:47:05'),
(66, 9, '559846002661', 'Janice Kuvalis', 5178159, 8124240, 61, 3, '2022-10-19 13:32:01', '2022-12-18 01:47:05'),
(67, 5, '505340464439', 'Dr. Robb Torphy IV', 6210582, 5621515, 388, 3, '2021-08-05 09:19:52', '2022-12-18 01:47:05'),
(68, 9, '849449850978', 'Devon Tremblay', 5269315, 9748646, 388, 2, '2022-12-03 21:58:48', '2022-12-18 01:47:05'),
(69, 2, '239991055796', 'Lafayette Batz', 2437316, 1512855, 415, 3, '2021-02-08 00:58:36', '2022-12-18 01:47:05'),
(70, 5, '988776963089', 'Mrs. Chyna Macejkovic I', 2017317, 8270285, 61, 3, '2022-11-20 10:22:53', '2022-12-18 01:47:05'),
(71, 10, '174450777477', 'Jamir Yundt', 4892407, 2357872, 388, 1, '2021-04-18 00:46:41', '2022-12-18 01:47:05'),
(72, 9, '885933653953', 'Izaiah Bashirian', 989707, 8927124, 61, 2, '2022-08-21 07:33:24', '2022-12-18 01:47:05'),
(73, 3, '127914531765', 'Misael Mayer', 5030214, 1629883, 415, 2, '2021-07-06 14:29:13', '2022-12-18 01:47:05'),
(74, 4, '712417347155', 'Prof. Adelbert Ullrich IV', 4019676, 7261125, 61, 1, '2022-05-30 23:03:13', '2022-12-18 01:47:05'),
(75, 7, '852629923037', 'Jamel Schowalter', 821326, 9622936, 415, 3, '2021-08-04 10:04:51', '2022-12-18 01:47:05'),
(76, 9, '945817670174', 'Greyson Blick III', 4850300, 5776565, 388, 2, '2022-02-09 10:08:04', '2022-12-18 01:47:05'),
(77, 6, '309028760327', 'Kolby Kerluke', 5236569, 882149, 388, 3, '2021-10-08 20:07:22', '2022-12-18 01:47:05'),
(78, 7, '48756508798', 'Oliver Schumm', 8152284, 4412952, 388, 1, '2021-04-28 02:36:15', '2022-12-18 01:47:05'),
(79, 4, '206117445321', 'Randal White', 1726488, 571493, 388, 3, '2021-10-01 18:02:11', '2022-12-18 01:47:06'),
(80, 1, '870397521144', 'Kendra Koch', 513249, 6731496, 388, 2, '2021-12-07 15:16:04', '2022-12-18 01:47:06'),
(81, 10, '698671358576', 'Laurence Goodwin', 7538587, 429913, 388, 2, '2022-08-29 09:16:57', '2022-12-18 01:47:06'),
(82, 4, '390244634336', 'Mohamed Zemlak DDS', 8384266, 7509067, 61, 2, '2021-10-06 20:25:35', '2022-12-18 01:47:06'),
(83, 5, '852742890302', 'Mrs. Tressie Beahan', 4245344, 174039, 61, 2, '2021-05-28 07:04:44', '2022-12-18 01:47:06'),
(84, 2, '461857228729', 'Oda Cummings', 404647, 3363563, 388, 1, '2022-09-30 21:41:54', '2022-12-18 01:47:06'),
(85, 9, '684903021250', 'Dr. Angus Douglas', 6316843, 9085427, 388, 2, '2021-10-15 22:43:50', '2022-12-18 01:47:06'),
(86, 2, '800841233065', 'Garrison Bruen', 7628527, 7800557, 388, 2, '2022-03-02 15:09:43', '2022-12-18 01:47:06'),
(87, 5, '308071075921', 'Vicente Schoen', 7557336, 8957020, 61, 2, '2022-04-01 22:27:17', '2022-12-18 01:47:06'),
(88, 5, '256429678260', 'Treva Stoltenberg', 2522068, 4265437, 415, 1, '2021-07-06 19:09:27', '2022-12-18 01:47:06'),
(89, 1, '544755943335', 'Gay Tremblay II', 3017590, 2180487, 61, 2, '2022-02-19 08:46:07', '2022-12-18 01:47:06'),
(90, 9, '137750635711', 'Mr. Dean McLaughlin', 5731954, 1326660, 61, 1, '2022-01-12 19:03:05', '2022-12-18 01:47:06'),
(91, 5, '112272139855', 'Petra Hayes', 3657453, 8755545, 415, 3, '2022-02-22 16:02:16', '2022-12-18 01:47:06'),
(92, 4, '483432048260', 'Georgette Mosciski Jr.', 787038, 2873976, 61, 1, '2021-03-06 06:27:41', '2022-12-18 01:47:06'),
(93, 5, '349626671576', 'Dr. Sydni Gleason', 308574, 2631841, 388, 1, '2022-11-06 13:40:54', '2022-12-18 01:47:06'),
(94, 9, '765273188642', 'Prof. Felton Tromp DVM', 1007422, 5334366, 415, 1, '2021-02-08 10:21:55', '2022-12-18 01:47:06'),
(95, 9, '738054000798', 'Zane Bosco', 7332587, 2988176, 61, 3, '2021-08-09 09:46:24', '2022-12-18 01:47:06'),
(96, 7, '982172051742', 'Rhianna Wolf', 8755551, 1254133, 415, 3, '2021-09-13 14:53:10', '2022-12-18 01:47:06'),
(97, 4, '87819061756', 'Troy Wintheiser', 2319954, 1269074, 61, 1, '2022-03-17 13:19:40', '2022-12-18 01:47:06'),
(98, 5, '456711013772', 'Devan Lowe', 87807, 1768682, 61, 1, '2021-07-20 02:41:22', '2022-12-18 01:47:07'),
(99, 8, '126956786530', 'Tierra Willms', 2988232, 9590075, 61, 3, '2021-02-10 15:08:36', '2022-12-18 01:47:07'),
(100, 9, '595173250729', 'Rafael Lakin', 300501, 8343057, 388, 1, '2021-02-17 16:11:14', '2022-12-18 01:47:07'),
(101, 10, '829147342425', 'Miss Noemie Kling II', 5500670, 3913978, 388, 3, '2021-06-17 04:26:08', '2022-12-18 01:47:07'),
(102, 6, '206464679289', 'Jensen Prosacco', 9515147, 6859413, 388, 2, '2022-11-27 15:58:52', '2022-12-18 01:47:07'),
(103, 6, '69588405399', 'Lilyan Prosacco', 7666708, 2352954, 388, 3, '2021-03-24 12:47:52', '2022-12-18 01:47:07'),
(104, 1, '835509913076', 'Wyman Schmeler', 2515842, 2686482, 388, 2, '2021-03-20 08:58:45', '2022-12-18 01:47:07'),
(105, 6, '266860333459', 'Cristobal Schinner', 2828951, 7590114, 388, 3, '2022-10-29 11:10:45', '2022-12-18 01:47:07'),
(106, 4, '895179536540', 'Shyanne Davis II', 2804357, 1568223, 61, 1, '2021-07-12 07:31:57', '2022-12-18 01:47:07'),
(107, 9, '768576493141', 'Felipa Romaguera', 7707724, 4792879, 388, 1, '2022-01-14 17:34:34', '2022-12-18 01:47:07'),
(108, 6, '250646974437', 'Miss Rosalee Farrell', 5040546, 1441060, 415, 1, '2021-01-13 09:06:23', '2022-12-18 01:47:07'),
(109, 4, '286177860536', 'Roel Casper', 3724189, 3374484, 388, 3, '2022-01-13 01:17:22', '2022-12-18 01:47:07'),
(110, 2, '827267312923', 'Ms. Karianne Stamm IV', 1836574, 884476, 415, 3, '2021-09-10 14:57:46', '2022-12-18 01:47:07'),
(111, 3, '555536003339', 'Dr. Shanie Schuppe Jr.', 374065, 5474959, 61, 1, '2022-04-09 02:44:35', '2022-12-18 01:47:07'),
(112, 3, '255688988743', 'Cathrine Ritchie', 2661276, 7735790, 415, 3, '2022-02-05 19:57:54', '2022-12-18 01:47:07'),
(113, 8, '131964790916', 'Lorena McCullough', 1131596, 4393356, 388, 2, '2022-09-15 18:19:06', '2022-12-18 01:47:07'),
(114, 5, '267362317242', 'Sonya Stamm', 5644995, 2904092, 415, 3, '2021-02-17 03:31:07', '2022-12-18 01:47:07'),
(115, 9, '37662999284', 'Mrs. Thea Nader', 415203, 7068741, 61, 3, '2021-10-31 10:45:03', '2022-12-18 01:47:07'),
(116, 2, '960608369030', 'Mr. Darron Adams', 5210346, 3825328, 415, 3, '2021-12-21 00:53:05', '2022-12-18 01:47:07'),
(117, 9, '346578552508', 'Delmer Schneider', 659342, 9932592, 61, 1, '2022-07-07 10:25:27', '2022-12-18 01:47:08'),
(118, 8, '966362870314', 'King Gorczany', 6939726, 4363864, 61, 3, '2021-12-24 22:21:14', '2022-12-18 01:47:08'),
(119, 6, '156103772656', 'Dr. Coralie Kohler', 7271791, 1811474, 61, 3, '2020-12-21 20:15:49', '2022-12-18 01:47:08'),
(120, 7, '944367064585', 'Mrs. Leatha Mohr', 8784362, 9025812, 388, 1, '2021-03-05 10:35:02', '2022-12-18 01:47:08'),
(121, 8, '222039195748', 'Winston Predovic', 3258559, 3347840, 388, 3, '2022-09-06 03:54:15', '2022-12-18 01:47:08'),
(122, 1, '70109582838', 'Bridie Herman Sr.', 2851725, 3705101, 388, 3, '2022-08-17 06:35:23', '2022-12-18 01:47:08'),
(123, 3, '10308220670', 'Eugenia Jacobi PhD', 2909828, 2322709, 388, 1, '2022-01-30 04:15:35', '2022-12-18 01:47:08'),
(124, 1, '752536774907', 'Cooper Altenwerth', 6423351, 8489529, 61, 2, '2021-03-08 16:35:58', '2022-12-18 01:47:08'),
(125, 1, '681396701948', 'Prof. Shemar Mraz', 5710816, 8337171, 388, 2, '2022-04-16 04:02:55', '2022-12-18 01:47:08'),
(126, 5, '218459949639', 'Dr. Sofia Kertzmann Jr.', 3890413, 795847, 61, 3, '2021-03-01 18:14:14', '2022-12-18 01:47:08'),
(127, 3, '980396940886', 'Bradley Weber', 4786165, 8072639, 415, 2, '2021-02-14 00:36:39', '2022-12-18 01:47:08'),
(128, 4, '917962802767', 'Mrs. Crystal Schamberger', 8881329, 4350301, 415, 3, '2021-04-15 11:01:35', '2022-12-18 01:47:08'),
(129, 8, '711787276044', 'Prof. Duncan Pollich', 5856214, 4060140, 388, 3, '2021-07-14 04:54:21', '2022-12-18 01:47:08'),
(130, 6, '998374476950', 'Milo Tillman', 6654185, 8102503, 61, 2, '2021-05-15 17:15:19', '2022-12-18 01:47:08'),
(131, 5, '925698562920', 'Mr. Adelbert Windler I', 116806, 9443319, 415, 1, '2021-05-30 10:17:27', '2022-12-18 01:47:08'),
(132, 8, '776833438523', 'Parker Emard V', 7592464, 7609162, 61, 2, '2022-06-23 12:28:38', '2022-12-18 01:47:08'),
(133, 7, '495674104883', 'Mrs. Jazmin Spencer', 9415343, 5476283, 388, 3, '2021-09-05 21:59:49', '2022-12-18 01:47:08'),
(134, 6, '30855729917', 'Vivian Von', 6825282, 7790037, 61, 1, '2022-04-30 03:58:18', '2022-12-18 01:47:08'),
(135, 5, '789204510222', 'Dr. Raina Swift DDS', 2576996, 4459961, 415, 2, '2022-07-05 14:09:43', '2022-12-18 01:47:09'),
(136, 8, '981923713464', 'Kaela Nikolaus Sr.', 3552144, 6382863, 415, 3, '2021-05-14 10:18:38', '2022-12-18 01:47:09'),
(137, 10, '178953957768', 'Jadon Daniel', 4704823, 1016213, 61, 1, '2021-12-03 08:03:30', '2022-12-18 01:47:09'),
(138, 9, '609529049436', 'Hilda Treutel DVM', 6335615, 8926606, 415, 3, '2021-11-10 04:08:51', '2022-12-18 01:47:09'),
(139, 6, '22856679688', 'Otis O\'Hara', 6808075, 69064, 61, 2, '2021-12-30 03:07:09', '2022-12-18 01:47:09'),
(140, 9, '172496363355', 'Addison Jones', 7677187, 8793596, 61, 2, '2021-06-24 06:52:52', '2022-12-18 01:47:09'),
(141, 6, '802269883892', 'Therese Jerde', 5786313, 2696585, 415, 1, '2022-05-06 17:00:37', '2022-12-18 01:47:09'),
(142, 9, '912281264432', 'Alayna Jacobson', 5341971, 5507835, 415, 3, '2021-05-09 23:50:18', '2022-12-18 03:11:00'),
(143, 8, '616083007707', 'Mr. Regan Buckridge', 3216698, 2680053, 415, 1, '2021-06-23 20:42:15', '2022-12-18 01:47:09'),
(144, 7, '381980433437', 'Georgianna Lowe', 7789002, 3612315, 388, 3, '2021-09-13 19:48:21', '2022-12-18 01:47:09'),
(145, 6, '566801424411', 'Taurean Farrell', 3812402, 957762, 415, 2, '2022-10-30 21:12:50', '2022-12-18 01:47:09'),
(146, 4, '906411091603', 'Mr. Mason Witting I', 5531014, 3975103, 415, 3, '2021-06-28 23:27:47', '2022-12-18 01:47:09'),
(147, 9, '917363380271', 'Jonatan Hintz', 5725147, 8655882, 415, 3, '2021-08-30 23:15:28', '2022-12-18 01:47:09'),
(148, 7, '479103346474', 'Prof. Stevie Borer Sr.', 7591600, 7847639, 415, 1, '2022-04-18 15:42:40', '2022-12-18 01:47:09'),
(149, 1, '392033880090', 'Ms. Catherine Hintz', 1868843, 4426758, 415, 1, '2022-02-09 17:50:49', '2022-12-18 01:47:09'),
(150, 8, '688189961898', 'Lucie Reichert', 4933079, 7820638, 415, 3, '2022-10-23 02:34:33', '2022-12-18 01:47:09'),
(151, 6, '631958921350', 'Miss Oceane McLaughlin DDS', 9822561, 9162237, 61, 1, '2022-04-20 06:18:21', '2022-12-18 01:47:09'),
(152, 4, '723504417044', 'Kiarra Kilback', 3355688, 7429340, 388, 1, '2022-05-19 19:37:37', '2022-12-18 01:47:09'),
(153, 10, '302203015841', 'Ms. Maida Leannon', 9555722, 4287624, 415, 3, '2022-12-10 16:09:22', '2022-12-18 01:47:09'),
(154, 3, '76245915942', 'Jade Howe', 2375573, 7551896, 61, 2, '2022-09-22 11:23:01', '2022-12-18 01:47:09'),
(155, 5, '666933713163', 'Weston Nienow', 692971, 4621806, 61, 1, '2021-05-05 22:02:11', '2022-12-18 01:47:09'),
(156, 1, '117758306813', 'Dr. Citlalli Steuber I', 6808033, 6792890, 61, 2, '2022-02-12 11:30:01', '2022-12-18 01:47:09'),
(157, 1, '403668736606', 'William Blick', 9435318, 9119049, 415, 2, '2021-04-07 11:09:09', '2022-12-18 01:47:09'),
(158, 9, '874301962667', 'Aiyana Kris', 8474345, 4374680, 388, 2, '2022-01-08 11:31:30', '2022-12-18 01:47:10'),
(159, 9, '575260031289', 'Dr. Diana Kling IV', 1898595, 1969473, 61, 3, '2021-12-16 02:50:22', '2022-12-18 01:47:10'),
(160, 9, '977684900528', 'Willard Thiel MD', 5692013, 6891945, 388, 2, '2022-05-12 01:57:42', '2022-12-18 01:47:10'),
(161, 6, '84699479549', 'Ms. Annamae Waters Sr.', 8444653, 9532351, 61, 2, '2022-10-04 15:28:10', '2022-12-18 01:47:10'),
(162, 6, '613468933305', 'Noemy Huel', 3669645, 3737965, 61, 1, '2021-11-30 15:54:40', '2022-12-18 01:47:10'),
(163, 9, '437913504759', 'Lora Witting PhD', 4808867, 7124751, 61, 3, '2021-06-18 19:23:16', '2022-12-18 01:47:10'),
(164, 9, '466266529733', 'Prof. Harmony Kshlerin MD', 1898024, 199289, 415, 2, '2022-10-21 12:35:43', '2022-12-18 01:47:10'),
(165, 4, '292406479832', 'Mr. Guido Keeling', 8203001, 6555752, 61, 3, '2021-08-10 04:51:34', '2022-12-18 01:47:10'),
(166, 8, '121094266281', 'Antonietta Brekke', 4309169, 3052177, 415, 1, '2021-08-26 09:18:38', '2022-12-18 01:47:10'),
(167, 2, '607534649085', 'Ena Abernathy', 3838244, 7244872, 388, 3, '2021-01-24 17:54:05', '2022-12-18 01:47:10'),
(168, 4, '860123289716', 'Raegan Crist', 6033414, 6220853, 388, 1, '2022-06-23 16:41:24', '2022-12-18 01:47:10'),
(169, 3, '970192379846', 'Mr. Hudson Jakubowski PhD', 2046419, 5668779, 388, 3, '2021-06-18 13:07:23', '2022-12-18 01:47:10'),
(170, 6, '869382377927', 'Walter Becker', 8612801, 9429756, 415, 3, '2021-09-18 14:15:21', '2022-12-18 01:47:10'),
(171, 6, '698923983782', 'Carmel Pacocha', 722999, 760529, 61, 3, '2021-08-27 14:11:17', '2022-12-18 01:47:10'),
(172, 3, '867555151894', 'Ms. Yesenia Mosciski', 5680421, 6559443, 61, 3, '2021-03-29 13:24:44', '2022-12-18 01:47:10'),
(173, 4, '199937563150', 'Ambrose Larson', 6137677, 5850091, 388, 3, '2022-06-29 07:35:38', '2022-12-18 01:47:10'),
(174, 4, '74843806130', 'Thomas Walter Sr.', 1335639, 8879584, 415, 1, '2021-12-07 13:16:56', '2022-12-18 01:47:10'),
(175, 5, '877527847916', 'Hilma Kohler', 7158408, 2165222, 61, 1, '2021-10-13 12:53:36', '2022-12-18 01:47:10'),
(176, 5, '818377637205', 'Neva Jakubowski', 470898, 4024208, 61, 1, '2022-09-06 12:18:55', '2022-12-18 01:47:10'),
(177, 1, '941463866566', 'Doug Lynch', 7176986, 8602701, 61, 2, '2021-08-12 13:08:54', '2022-12-18 01:47:10'),
(178, 2, '951798981931', 'Prof. Kellen Kohler I', 8277959, 1768457, 61, 1, '2021-12-29 12:11:20', '2022-12-18 01:47:10'),
(179, 8, '320674038218', 'Miss Providenci Cummings', 7971458, 9900626, 415, 2, '2021-08-09 06:14:29', '2022-12-18 01:47:10'),
(180, 1, '80945844852', 'Novella Schuppe', 5507082, 6224028, 388, 1, '2021-02-19 22:50:36', '2022-12-18 01:47:10'),
(181, 5, '696871873960', 'Edyth Crooks', 4577598, 9577282, 415, 1, '2022-03-17 11:15:10', '2022-12-18 01:47:10'),
(182, 5, '4458682502', 'Zita Runolfsdottir', 3524242, 7264481, 61, 3, '2022-10-19 21:09:01', '2022-12-18 01:47:10'),
(183, 5, '304970954502', 'Ressie Lynch', 5531467, 5202491, 388, 2, '2021-03-30 19:56:37', '2022-12-18 01:47:10'),
(184, 7, '305072250529', 'Dr. Beaulah Johnston III', 9440771, 4282156, 388, 3, '2021-11-09 23:02:24', '2022-12-18 01:47:11'),
(185, 9, '906080514841', 'Orlando Runte IV', 3113132, 6569591, 61, 2, '2021-08-17 21:15:46', '2022-12-18 01:47:11'),
(186, 3, '783853868744', 'Dr. Tia Hyatt Jr.', 6392083, 5454579, 415, 1, '2022-10-04 01:10:15', '2022-12-18 01:47:11'),
(187, 3, '503235985032', 'Kyler Cummerata V', 4945119, 8092346, 388, 1, '2022-08-07 05:52:26', '2022-12-18 01:47:11'),
(188, 10, '823086360692', 'Dr. Marilyne O\'Hara DDS', 9300911, 4853086, 388, 3, '2022-11-15 19:37:06', '2022-12-18 01:47:11'),
(189, 5, '428872195995', 'Jeremie Gorczany', 9024142, 7295585, 415, 1, '2022-09-15 02:42:56', '2022-12-18 01:47:11'),
(190, 5, '610799482691', 'Mr. Kacey Upton DVM', 6706922, 4636930, 415, 2, '2021-10-11 05:28:48', '2022-12-18 01:47:11'),
(191, 5, '580906772112', 'Corene Bogisich PhD', 5222999, 7242696, 415, 3, '2022-11-15 14:11:42', '2022-12-18 01:47:11'),
(192, 5, '846253544495', 'Lukas Keebler', 4598510, 7741546, 415, 1, '2022-01-15 22:28:27', '2022-12-18 01:47:11'),
(193, 9, '390050043097', 'Emanuel Pfeffer', 3344527, 9050682, 61, 3, '2022-07-11 20:29:04', '2022-12-18 01:47:11'),
(194, 10, '96466693567', 'Clinton Champlin', 8465957, 1558763, 415, 3, '2022-10-10 17:09:15', '2022-12-18 01:47:11'),
(195, 7, '678461087647', 'Santina Kautzer', 9151364, 9085760, 388, 1, '2022-08-01 06:11:12', '2022-12-18 01:47:11'),
(196, 6, '98868009473', 'Michele Roob', 8921418, 9270480, 388, 3, '2022-01-26 08:10:36', '2022-12-18 01:47:11'),
(197, 10, '314592527862', 'Toni Mann', 1471703, 3238571, 388, 3, '2022-12-13 15:22:37', '2022-12-18 01:47:11'),
(198, 2, '623040297125', 'Everardo Nienow I', 6978943, 9720923, 388, 3, '2021-08-12 12:32:01', '2022-12-18 01:47:11'),
(199, 2, '583221978056', 'Rubye Kuhlman', 9860146, 8274006, 61, 2, '2021-09-08 11:32:04', '2022-12-18 01:47:11'),
(200, 5, '792164339018', 'Prof. Peter Romaguera', 77849, 2000192, 415, 3, '2021-10-25 13:30:33', '2022-12-18 01:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`, `provinsi_id`, `created_at`, `updated_at`) VALUES
(61, 'Bengkayang', 12, '2022-06-21 14:09:51', '2022-06-21 14:09:51'),
(388, 'Sambas', 12, '2022-06-21 14:09:52', '2022-06-21 14:09:52'),
(415, 'Singkawang', 12, '2022-06-21 14:09:52', '2022-06-21 14:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_18_011820_create_status_table', 1),
(6, '2022_12_18_011917_create_provinsi_table', 1),
(7, '2022_12_18_082024_create_kabupaten_table', 1),
(8, '2022_12_18_082210_create_faktur_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `provinsi`, `created_at`, `updated_at`) VALUES
(12, 'Kalimantan Barat', '2022-06-21 14:09:50', '2022-06-21 14:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Belum Terverifikasi', '2022-12-18 01:38:20', '2022-12-18 01:38:20'),
(2, 'Terverifikasi SAMSAT', '2022-12-18 01:38:20', '2022-12-18 01:38:20'),
(3, 'Diterima Dealer', '2022-12-18 01:38:20', '2022-12-18 01:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adrienne Breitenberg', 'darrick31@example.org', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'QyXZ78NMYd', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(2, 'Ms. Alia Kilback DVM', 'shanie.bruen@example.org', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'mX3Go3rOb4', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(3, 'Laurel Cummerata', 'douglas.mikayla@example.org', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'rCPrmY5guZ', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(4, 'Damon Pacocha DDS', 'roma.heller@example.com', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'TyIPl8RB2W', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(5, 'Erwin Corwin', 'rlindgren@example.net', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'q4oepeCRKR', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(6, 'Ariel Schuppe Jr.', 'breitenberg.rafael@example.net', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'MQL3WTDaD5', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(7, 'Krystina Anderson PhD', 'emerson.mckenzie@example.org', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'xpnx5Nfm8S', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(8, 'Doug McClure', 'murray.caterina@example.org', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'R2J1EfFO33', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(9, 'Dealer', 'dealer@gmail.com', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'dealer', 'RhHaApdP04', '2022-12-18 01:36:13', '2022-12-18 01:36:13'),
(10, 'Biro', 'biro@gmail.com', '2022-12-18 01:36:13', '$2a$12$bApJxRvnpjexlrtHmv.RNe4BhbUHJx/8Tm9otkl/5Xtkn/A6JHoUq', 'biro', 'oAMLwwUVQR', '2022-12-18 01:36:13', '2022-12-18 01:36:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faktur_user_id_foreign` (`user_id`),
  ADD KEY `faktur_kabupaten_id_foreign` (`kabupaten_id`),
  ADD KEY `faktur_status_id_foreign` (`status_id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabupaten_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faktur`
--
ALTER TABLE `faktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faktur`
--
ALTER TABLE `faktur`
  ADD CONSTRAINT `faktur_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faktur_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `faktur_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
