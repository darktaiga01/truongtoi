-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2020 at 02:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truongtoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'dangngoctan2012@gmail.com', NULL, 'Admin', '$2y$10$Gv8nvuVBtq8EE/z/iBKCuOFAAM9lJkLUcCvSJdmVnaLpv7KGPd0Pa', NULL, '2020-06-22 08:50:38', '2020-06-22 08:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Khoa học - Kỹ thuật', NULL, NULL),
(2, 'Kinh tế - Quản lý', NULL, NULL),
(3, 'Xã hội - Nhân văn', NULL, NULL),
(4, 'Năng khiếu', NULL, NULL),
(5, 'Chính trị - Quân sự', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_06_17_161500_create_posts_table', 1),
(15, '2020_06_19_041612_create_admins_table', 1),
(16, '2020_06_25_104459_create_categories_table', 2),
(17, '2020_06_25_110318_add_category_id_to_posts', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nameless',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `feature_img`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'ĐẠI HỌC BÁCH KHOA - ĐẠI HỌC QUỐC GIA TP.HCM', '<div>\r\n<h2 style=\"text-align: justify;\"><a id=\"aibiet\"></a><span style=\"font-family: \'times new roman\', times, serif;\">Giới thiệu</span></h2>\r\n<hr /></div>\r\n<div id=\"about-school\">\r\n<div>\r\n<div>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><strong>Nổi tiếng với danh hiệu l&agrave; trường đại học đ&agrave;o tạo kỹ thuật đầu ng&agrave;nh của miền Nam, Đại học B&aacute;ch Khoa TP.HCM l&agrave; trường đại học trọng điểm v&agrave; cũng l&agrave; trường nổi tiếng nhất trong hệ thống Đại học Quốc gia TP.HCM.</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Trường Đại học B&aacute;ch Khoa &ndash; ĐHQG TP.HCM (website: hcmut.edu.vn) đ&atilde; trải qua 55 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển. Hiện nay, với m&ocirc;i trường s&aacute;ng tạo v&agrave; chuy&ecirc;n nghiệp được định h&igrave;nh ng&agrave;y c&agrave;ng r&otilde; n&eacute;t, trường Đại học B&aacute;ch Khoa vẫn kh&ocirc;ng ngừng lớn mạnh, giữ vững vai tr&ograve; đầu t&agrave;u về đ&agrave;o tạo v&agrave; nghi&ecirc;n cứu khoa học của khu vực ph&iacute;a Nam cũng như của cả nước.</span></p>\r\n<h2 style=\"text-align: justify;\"><a id=\"gioithieu\"></a><span style=\"font-family: \'times new roman\', times, serif;\">Giới thiệu trường</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Tiền th&acirc;n của Trường Đại học B&aacute;ch Khoa TP.HCM l&agrave; Trung t&acirc;m Quốc gia Kỹ thuật, được th&agrave;nh lập ng&agrave;y 29/6/1957.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Năm 1957, Trung t&acirc;m Kỹ thuật Quốc gia Ph&uacute; Thọ được th&agrave;nh lập tr&ecirc;n cơ sở hợp nhất 4 trường Cao đẳng C&ocirc;ng ch&aacute;nh, Cao đẳng Điện lực, Quốc gia Kỹ sư C&ocirc;ng nghệ Việt Nam H&agrave;ng hải.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">T&iacute;nh đến th&aacute;ng 5 năm 2005, trường đ&atilde; c&oacute; 11 khoa chuy&ecirc;n ng&agrave;nh, 10 trung t&acirc;m nghi&ecirc;n cứu khoa học v&agrave; chuyển giao c&ocirc;ng nghệ, 4 trung t&acirc;m đ&agrave;o tạo, 10 ph&ograve;ng ban chức năng v&agrave; một c&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn.</span></p>\r\n<div style=\"text-align: justify;\">\r\n<div id=\"zeb2lWZ4_Kc\"><span style=\"font-family: \'times new roman\', times, serif;\"><img style=\"height: 475.438px; width: 791.9px;\" src=\"https://img.youtube.com/vi/zeb2lWZ4_Kc/0.jpg\" data-src=\"https://img.youtube.com/vi/zeb2lWZ4_Kc/0.jpg\" /></span>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><em>Giới thiệu trường Đại học B&aacute;ch Khoa TP HCM &ndash; Đại học Quốc gia TP.HCM (Nguồn: Youtube &ndash; Haiau Nguyen)</em></span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Sứ mệnh</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Đ&agrave;o tạo thanh ni&ecirc;n c&aacute;c ng&agrave;nh học Cao đẳng Kỹ thuật cần thiết cho nền Kinh tế v&agrave; Kỹ nghệ Quốc gia.</span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Tầm nh&igrave;n</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Trường Đại học B&aacute;ch Khoa TP.HCM mong muốn giữ vững vai tr&ograve; l&agrave; một trong những trường đại học kỹ thuật h&agrave;ng đầu về đ&agrave;o tạo v&agrave; nghi&ecirc;n cứu khoa học của khu vực ph&iacute;a Nam cũng như của cả nước, tiếp tục l&agrave; th&agrave;nh vi&ecirc;n n&ograve;ng cốt của Đại học Quốc gia TP.HCM, g&oacute;p phần xứng đ&aacute;ng v&agrave;o sự nghiệp x&acirc;y dựng v&agrave; bảo vệ tổ quốc.</span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Hoạt động của sinh vi&ecirc;n</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Sinh vi&ecirc;n Đại học B&aacute;ch Khoa kh&ocirc;ng chỉ c&oacute; nghị lực, quyết t&acirc;m, đam m&ecirc; với ng&agrave;nh nghề m&igrave;nh chọn m&agrave; c&ograve;n tham gia c&aacute;c hoạt động ngoại kh&oacute;a rất năng nổ. Tuy thuộc top những trường đại học c&oacute; chương tr&igrave;nh học khiến sinh vi&ecirc;n vất vả nhất nhưng c&aacute;c c&acirc;u lạc bộ, đội nh&oacute;m, c&aacute;c phong tr&agrave;o đều được c&aacute;c bạn hưởng ứng v&agrave; tham gia t&iacute;ch cực.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">C&aacute;c bạn sinh vi&ecirc;n với sức trẻ năng động lu&ocirc;n s&ocirc;i nổi tham gia chiến dịch m&ugrave;a h&egrave; xanh th&ocirc;ng qua những hoạt động thiết thực như x&acirc;y dựng cầu đường, sữa chữa nh&agrave;, x&oacute;a m&ugrave; chữ cho trẻ nhỏ ở c&aacute;c v&ugrave;ng n&ocirc;ng th&ocirc;n.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">C&aacute;c m&ocirc;n thể thao ngay tại trường như b&oacute;ng đ&aacute;, b&oacute;ng chuyền, b&oacute;ng rổ, tennis,... đều c&oacute; c&acirc;u lạc bộ để c&aacute;c bạn r&egrave;n luyện, giao lưu, học hỏi lẫn nhau. Ngo&agrave;i thời giờ l&ecirc;n lớp sinh vi&ecirc;n c&ograve;n c&oacute; thể d&agrave;nh thời gian cho c&aacute;c hoạt động văn nghệ, thể thao, c&acirc;u lạc bộ đội nh&oacute;m, ngoại ngữ hoặc đọc s&aacute;ch giải tr&iacute; trong thư viện.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><picture><source srcset=\"\" media=\"(max-width: 320px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/320x213_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" /><source srcset=\"\" media=\"(max-width: 375px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/375x250_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" /><source srcset=\"\" media=\"(max-width: 480px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/480x320_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" /><source srcset=\"\" media=\"(max-width: 768px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x512_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" /><img style=\"width: 791.9px;\" src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x512_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" alt=\"Đại học B&aacute;ch Khoa gi&agrave;nh giải nhất cuộc thi VUG 2018\" data-src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x512_dh-bach-khoa-danh-giai-nhat-vug-2018.jpg\" /></picture><em>Đại học B&aacute;ch Khoa gi&agrave;nh giải nhất cuộc thi VUG 2018</em></span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Đội ngũ nh&acirc;n sự</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">T&iacute;nh đến th&aacute;ng 5 năm 2012, trường c&oacute; 1.418 c&aacute;n bộ c&ocirc;ng chức trong đ&oacute; c&oacute; 1.038 c&aacute;n bộ giảng dạy. Trong số c&aacute;n bộ giảng dạy c&oacute; 7 Gi&aacute;o sư, 74 ph&oacute; gi&aacute;o sư, 327 tiến sĩ, 434 thạc sĩ, 272 giảng vi&ecirc;n c&oacute; tr&igrave;nh độ đại học v&agrave; 5 cao đẳng.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Tỷ lệ giảng vi&ecirc;n cơ hữu c&oacute; tr&igrave;nh độ tiến sĩ trở l&ecirc;n tr&ecirc;n tổng số giảng vi&ecirc;n cơ hữu của nh&agrave; trường l&agrave; 31,5%. Tỷ lệ giảng vi&ecirc;n cơ hữu c&oacute; tr&igrave;nh độ thạc sĩ tr&ecirc;n tổng số giảng vi&ecirc;n cơ hữu của nh&agrave; trường l&agrave; 41,8%.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><picture><source srcset=\"\" media=\"(max-width: 320px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/320x240_hinh1.jpg\" /><source srcset=\"\" media=\"(max-width: 375px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/375x281_hinh1.jpg\" /><source srcset=\"\" media=\"(max-width: 480px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/480x360_hinh1.jpg\" /><source srcset=\"\" media=\"(max-width: 768px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x576_hinh1.jpg\" /><img style=\"width: 791.9px;\" src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x576_hinh1.jpg\" alt=\"\" data-src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x576_hinh1.jpg\" /></picture></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><em>Đội ngũ giảng vi&ecirc;n của trường Đại học B&aacute;ch Khoa TP HCM</em></span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Cơ sở vật chất</span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Tổng diện t&iacute;ch đất sử dụng của trường (2 cơ sở) l&agrave; 41,23 ha, trường c&oacute; 240 ph&ograve;ng học, 180 ph&ograve;ng th&iacute; nghiệm v&agrave; 11 xưởng thực tập.</span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><strong>C&aacute;c địa điểm học:</strong></span></h2>\r\n<hr />\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Hiện nay, trường Đại học B&aacute;ch Khoa TP.HCM l&agrave; một trong những trường Đại học c&oacute; diện t&iacute;ch lớn nhất tại TP.HCM, trường c&oacute; hai cơ sở ở nội th&agrave;nh v&agrave; ngoại th&agrave;nh:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Cơ sở ch&iacute;nh nằm ở số 268 L&yacute; Thường Kiệt Quận 10 TP.HCM c&oacute; diện t&iacute;ch 14,2 ha, với 96 ph&ograve;ng th&iacute; nghiệm, 3 xưởng thực h&agrave;nh v&agrave; 1 thư viện</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Cơ sở Dĩ An: đường 621 &ndash; khu đ&ocirc; thị Đại học Quốc Gia TP.HCM &ndash; Dĩ An &ndash; B&igrave;nh Dương c&oacute; diện t&iacute;ch 26 ha.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><strong>K&yacute; t&uacute;c x&aacute;:&nbsp;</strong>nằm ở số 497 H&ograve;a Hảo, phường 7, quận 10, TP HCM với diện t&iacute;ch 1,4 ha c&aacute;ch trường 1,5 km. Ngo&agrave;i ra, c&aacute;c bạn sinh vi&ecirc;n ở l&agrave;ng đại học c&oacute; thể ở tại K&yacute; t&uacute;c x&aacute; Đại học Quốc gia TP.HCM, phường Linh Trung, quận Thủ Đức. C&aacute;c ph&ograve;ng được thiết kế đầy đủ tiện nghi cho sinh vi&ecirc;n, tạo điều kiện tốt nhất để c&aacute;c bạn học tập, v&agrave; sinh hoạt.</span></p>\r\n<div style=\"text-align: justify;\">\r\n<div id=\"nMZijuohXuY\"><span style=\"font-family: \'times new roman\', times, serif;\"><img style=\"height: 475.438px; width: 791.9px;\" src=\"https://img.youtube.com/vi/nMZijuohXuY/0.jpg\" data-src=\"https://img.youtube.com/vi/nMZijuohXuY/0.jpg\" /></span>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><em>K&yacute; t&uacute;c x&aacute; đại học Quốc gia (Nguồn: Youtube &ndash; View 24)</em></span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Th&agrave;nh tựu</span></h2>\r\n<hr />\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Hu&acirc;n chương lao động hạng 3 cho phong tr&agrave;o t&igrave;nh nguyện g&oacute;p phần x&acirc;y dựng Chủ nghĩa x&atilde; hội.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Bằng khen Ủy ban nh&acirc;n Th&agrave;nh phố cho Tập thể lao động xuất sắc năm 2004, 2005, 2006, 2008, 2009, 2010, 2011.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Bằng khen bộ trưởng Bộ Y tế, Bằng khen Hội chữ thập đỏ Việt Nam cho đơn vị c&oacute; th&agrave;nh t&iacute;ch xuất sắc trong c&ocirc;ng t&aacute;c Hiến m&aacute;u nh&acirc;n đạo năm 2002.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Bằng khen Ủy ban nh&acirc;n d&acirc;n Th&agrave;nh phố đ&atilde; c&oacute; th&agrave;nh t&iacute;ch trong c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, vận động, tổ chức Hiến m&aacute;u t&igrave;nh nguyện năm 2010, 2011.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Bằng khen Trung ương Hội sinh vi&ecirc;n Việt Nam cho đơn vị ho&agrave;n th&agrave;nh xuất sắc c&ocirc;ng t&aacute;c Hội v&agrave; phong tr&agrave;o sinh vi&ecirc;n từ năm học 2000 - 2011 đến năm học 2010 &ndash; 2011</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Bằng khen Ủy ban nh&acirc;n d&acirc;n c&aacute;c tỉnh Bến Tre, Tr&agrave; Vinh, Đồng Th&aacute;p, TP.HCM, Trung Ương Hội sinh vi&ecirc;n Việt Nam cho đơn vị c&oacute; th&agrave;nh t&iacute;ch xuất sắc trong chiến dịch t&igrave;nh nguyện M&ugrave;a h&egrave; xanh từ năm 2001 đến năm 2011.</span></li>\r\n</ul>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Cựu sinh vi&ecirc;n nổi bật</span></h2>\r\n<hr />\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng Nguyễn Thiện Nh&acirc;n, Gi&aacute;o sư, Tiến sĩ, Ch&iacute;nh trị gia, Chủ tịch Ủy ban Trung ương Mặt trận Tổ quốc Việt Nam, Nguy&ecirc;n Ph&oacute; Thủ tướng, Nguy&ecirc;n Bộ trưởng Bộ gi&aacute;o dục v&agrave; Đ&agrave;o tạo từng l&agrave; Ph&oacute; Hiệu trưởng Đại học B&aacute;ch Khoa TP.HCM.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng Trương H&ograve;a B&igrave;nh, Ch&aacute;nh &aacute;n T&ograve;a &aacute;n Nh&acirc;n d&acirc;n Tối cao Việt Nam.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng L&acirc;m Du Sơn, Ph&oacute; tổng gi&aacute;m đốc Tổng c&ocirc;ng ty Điện lực Việt Nam.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">B&agrave; Trần Thị Thu H&agrave;, Ph&oacute; Chủ tịch Ủy ban Nh&acirc;n d&acirc;n TP.HCM.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng Nguyễn Thanh Mỹ, Tiến sĩ, Nh&agrave; ph&aacute;t minh, Doanh nh&acirc;n, Chủ tịch H&atilde;ng American Dye Source, Inc., Chủ tịch Tập đo&agrave;n Mỹ Lan.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng Phan Thanh B&igrave;nh, Gi&aacute;m đốc Đại học Quốc gia TP.HCM.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng Trần Qu&iacute; Thanh, Chủ tịch Hội đồng Quản trị ki&ecirc;m Gi&aacute;m đốc Điều h&agrave;nh Tập đo&agrave;n T&acirc;n Hiệp Ph&aacute;t.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">&Ocirc;ng L&ecirc; Tr&iacute; Th&ocirc;ng, Ph&oacute; Tổng Gi&aacute;m đốc DongA Bank.</span></li>\r\n<li><span style=\"font-family: \'times new roman\', times, serif;\">Diễn vi&ecirc;n Chi Bảo.</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><picture><source srcset=\"\" media=\"(max-width: 320px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/320x229_hinh2.jpg\" /><source srcset=\"\" media=\"(max-width: 375px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/375x269_hinh2.jpg\" /><source srcset=\"\" media=\"(max-width: 480px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/480x344_hinh2.jpg\" /><source srcset=\"\" media=\"(max-width: 768px)\" data-srcset=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x550_hinh2.jpg\" /><img style=\"width: 791.9px;\" src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x550_hinh2.jpg\" alt=\"\" data-src=\"https://edu2review.com/upload/school-images/dai-hoc-bach-khoa-tphcm/img/about/768x550_hinh2.jpg\" /></picture></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\"><em>&Ocirc;ng Nguyễn Thiện Nh&acirc;n l&agrave; một trong những cựu sinh vi&ecirc;n th&agrave;nh đạt của trường</em></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif;\">Nguồn: Đại học B&aacute;ch Khoa TP.HCM</span></p>\r\n</div>\r\n</div>\r\n</div>', 'https://edu2review.com/upload/article-images/2018/08/8360/1920x1080_hoc-phi-dai-hoc-bach-khoa-thanh-pho-ho-chi-minh-cover.jpg', '2020-06-22 07:20:24', '2020-06-23 10:33:05', 1),
(2, 'ĐH CNTT', '<p style=\"text-align: center;\"><strong>ĐH CNTT l&agrave; bladbldasbldsabl</strong></p>', 'https://tuyensinh.uit.edu.vn/sites/default/files/styles/slider/public/slider/86981f67-c975-4266-b43a-0c972697c269.png', '2020-06-22 19:31:35', '2020-06-22 19:31:35', 1),
(4, 'ĐẠI HỌC CÔNG NGHỆ THÔNG TIN - ĐẠI HỌC QUỐC GIA TPHCM', '<p>C&aacute;i g&igrave; đ&oacute; ok</p>', 'https://petrotimes.vn/stores/news_dataimages/thienthanh/102018/03/10/dhqg-tphcm-trien-khai-mo-hinh-tu-chu-dai-hoc-theo-hai-giai-doan.jpg', '2020-06-23 11:25:14', '2020-06-23 11:25:14', 1),
(5, 'ĐẠI HỌC CÔNG NGHỆ THÔNG TIN - ĐẠI HỌC QUỐC GIA TPHCM', '<p>C&aacute;i g&igrave; đ&oacute; ok</p>', 'https://petrotimes.vn/stores/news_dataimages/thienthanh/102018/03/10/dhqg-tphcm-trien-khai-mo-hinh-tu-chu-dai-hoc-theo-hai-giai-doan.jpg', '2020-06-23 11:26:08', '2020-06-23 11:26:08', 1),
(6, 'ĐH XÃ HỘI NHÂN VĂN', '<p>DSASD</p>', 'DSA', '2020-06-25 08:42:40', '2020-06-25 09:10:43', 2);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dang Ngoc Tan', 'dangngoctan2012@gmail.com', NULL, '$2y$10$/Q/x5tknZWg5GAu2X/ERHOi8MWcRi0A5FnLFVSIoyc.a/A46QcEYa', 'O886rlQvmbw8WpmCPJfK1TDNw7dpT8c8851bcVGz3xRoJPHCIzOPO224C1SK', '2020-06-22 18:04:29', '2020-06-22 18:04:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
