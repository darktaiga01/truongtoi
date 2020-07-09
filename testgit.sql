-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2020 at 04:37 AM
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
(1, 'Super Admin', 'dangngoctan2012@gmail.com', NULL, 'Super Powerful Admin', '$2y$10$Q8HD.Y9enwBVhaM0nEBZ5OuzjnyprBZjBtjbi29YRo29mZAM7K2DG', NULL, '2020-07-08 03:43:57', '2020-07-08 03:43:57');

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
(1, 'Xã hội - Nhân văn', NULL, NULL),
(2, 'Khoa học - Kỹ thuật', NULL, NULL),
(3, 'Năng khiếu', NULL, NULL),
(4, 'Chính trị - Quân sự', NULL, NULL),
(5, 'Kinh tế - Quản lý', NULL, NULL),
(6, 'Y học - Sức khoẻ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thành phố Hồ Chí Minh', NULL, NULL),
(2, 'Hà Nội', NULL, NULL),
(3, 'Cần Thơ', NULL, NULL),
(4, 'Đà Nẵng', NULL, NULL),
(5, 'Huế', NULL, NULL),
(6, 'Vĩnh Long', NULL, NULL);

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_06_17_161500_create_posts_table', 1),
(16, '2020_06_19_041612_create_admins_table', 1),
(17, '2020_06_25_104459_create_categories_table', 1),
(18, '2020_06_25_110318_add_category_id_to_posts', 1),
(19, '2020_07_08_044156_create_comments_table', 1),
(20, '2020_07_08_094321_create_ratings_table', 1),
(21, '2020_07_08_095941_create_location_table', 1),
(22, '2020_07_08_100756_add_location_id_to_posts', 1);

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
  `avg_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `feature_img`, `avg_mark`, `created_at`, `updated_at`, `category_id`, `location_id`) VALUES
(1, 'ĐẠI HỌC BÁCH KHOA - ĐẠI HỌC QUỐC GIA TP.HCM', '<div>\r\n<div><a title=\"Gi&aacute;o dục\" href=\"https://vietnamnet.vn/vn/giao-duc/\">GI&Aacute;O DỤC</a></div>\r\n<div>\r\n<div><a title=\"Tuyển sinh\" href=\"https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/\">❯TUYỂN SINH</a></div>\r\n</div>\r\n<div data-pos=\"imglogo-cate_title\">&nbsp;</div>\r\n</div>\r\n<div id=\"ArticleHolder\">\r\n<div>\r\n<div>\r\n<div>\r\n<div id=\"FixInter\">\r\n<div><a href=\"https://www.facebook.com/sharer.php?u=https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/diem-chuan-dh-bach-khoa-tp-hcm-2019-557357.html?cid=share_facebook\" target=\"_blank\" rel=\"noopener\">Face Book</a></div>\r\n<div><a href=\"https://twitter.com/intent/tweet?text=%C4%90i%E1%BB%83m%20chu%E1%BA%A9n%20%C4%90H%20B%C3%A1ch%20khoa%20TP.HCM%202019%20-%20https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/diem-chuan-dh-bach-khoa-tp-hcm-2019-557357.html\" target=\"_blank\" rel=\"noopener\">Twitter</a></div>\r\n<div><a href=\"https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/diem-chuan-dh-bach-khoa-tp-hcm-2019-557357.html#BoxBinhLuan\">B&igrave;nh luận</a></div>\r\n<div><a href=\"https://vietnamnet.vn/vn/tin-moi-nong/\">Tin n&oacute;ng</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>\r\n<div data-pos=\"vt_top_detail\">&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<h1>Điểm chuẩn Trường ĐH B&aacute;ch khoa TP.HCM cao nhất 25,75</h1>\r\n<div>09/08/2019 &nbsp;&nbsp; 10:36 GMT+7</div>\r\n<div id=\"ArticleContent\">\r\n<div>\r\n<p><img style=\"width: auto;\" title=\"\" src=\"https://vnn-imgs-f.vgcloud.vn/logo.gif\" alt=\"\" />- Trường ĐH B&aacute;ch khoa TP.HCM đ&atilde; c&ocirc;ng bố điểm chuẩn 2019 từ kết quả thi THPT quốc gia</p>\r\n</div>\r\n<div>\r\n<div><a title=\"Điểm chuẩn Trường ĐH X&acirc;y dựng từ 15 đến 19,5\" href=\"https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/truong-dh-xay-dung-cong-bo-diem-trung-tuyen-vao-truong-nam-2019-557342.html\">Điểm chuẩn Trường ĐH X&acirc;y dựng từ 15 đến 19,5</a></div>\r\n<div><a title=\"Điểm chuẩn Trường ĐH Luật H&agrave; Nội cao nhất l&agrave; 27,25 với tổ hợp C00\" href=\"https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/diem-chuan-truong-dh-luat-ha-noi-cao-nhat-la-27-25-voi-to-hop-c00-557330.html\">Điểm chuẩn Trường ĐH Luật H&agrave; Nội cao nhất l&agrave; 27,25 với tổ hợp C00</a></div>\r\n<div><a title=\"Điểm chuẩn Học viện An ninh nh&acirc;n d&acirc;n cao nhất 26,72\" href=\"https://vietnamnet.vn/vn/giao-duc/tuyen-sinh/diem-chuan-hoc-vien-an-ninh-nhan-dan-2019-cao-nhat-26-72-557328.html\">Điểm chuẩn Học viện An ninh nh&acirc;n d&acirc;n cao nhất 26,72</a></div>\r\n</div>\r\n<p>Chỉ ti&ecirc;u tuyển sinh cho phương thức từ kết quả thi THPT quốc gia từ 50-72% tương đương 2500 tới 3600 th&iacute; sinh.</p>\r\n<p>Điểm chuẩn từng ng&agrave;nh cụ thể như sau:</p>\r\n<div>\r\n<div data-pos=\"vt_detail_sponsor_center\">&nbsp;</div>\r\n</div>\r\n<div>\r\n<table style=\"width: 391.05pt;\" border=\"0\" width=\"521\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: 19.5pt;\">\r\n<td style=\"width: 35.5pt; height: 19.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p><strong>STT</strong></p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 19.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p><strong>M&atilde; ng&agrave;nh</strong></p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 19.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p><strong>Nh&oacute;m ng&agrave;nh/Ng&agrave;nh</strong></p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 19.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p><strong>Điểm&nbsp;</strong></p>\r\n<p><strong>tr&uacute;ng tuyển</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 391.05pt; height: 14.5pt;\" colspan=\"4\" valign=\"bottom\" nowrap=\"nowrap\" width=\"521\">\r\n<p><strong>ĐẠI HỌC CH&Iacute;NH QUY</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>1</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>106</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Khoa học M&aacute;y t&iacute;nh</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>25.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>2</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>107</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật M&aacute;y t&iacute;nh</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>25.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>3</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>108</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Điện;<br />Kỹ thuật Điện tử - Viễn th&ocirc;ng;<br />Kỹ thuật Điều khiển v&agrave; Tự động h&oacute;a;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>24.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>4</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>109</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Cơ kh&iacute;;<br />Kỹ thuật Cơ điện tử;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>23.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>5</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>112</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Dệt;<br />C&ocirc;ng nghệ Dệt May;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>6</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>114</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật H&oacute;a học;<br />C&ocirc;ng nghệ Thực phẩm;<br />C&ocirc;ng nghệ Sinh học;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>23.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>7</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>115</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật X&acirc;y dựng;<br />Kỹ thuật X&acirc;y dựng C&ocirc;ng tr&igrave;nh Giao th&ocirc;ng;<br />Kỹ thuật X&acirc;y dựng C&ocirc;ng tr&igrave;nh Thủy;<br />Kỹ thuật X&acirc;y dựng C&ocirc;ng tr&igrave;nh Biển;<br />Kỹ thuật Cơ sở Hạ tầng;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.25</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>8</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>117</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kiến tr&uacute;c</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>9</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>120</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Địa chất;<br />Kỹ thuật Dầu kh&iacute;;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>10</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>123</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Quản l&yacute; C&ocirc;ng nghiệp</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>23.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>11</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>125</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật M&ocirc;i trường;<br />Quản l&yacute; T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>12</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>128</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Hệ thống C&ocirc;ng nghiệp;<br />Logistics v&agrave; Quản l&yacute; chuỗi Cung ứng;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>24.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>13</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>129</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Vật liệu</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>14</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>130</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Trắc địa - Bản đồ</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>15</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>131</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>C&ocirc;ng nghệ Kỹ thuật Vật liệu X&acirc;y dựng</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>16</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>137</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Vật l&yacute; Kỹ thuật&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>17</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>138</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Cơ Kỹ thuật</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>22.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>18</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>140</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Nhiệt (Nhiệt lạnh)</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>22.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>19</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>141</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Bảo dưỡng C&ocirc;ng nghiệp</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>20</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>142</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật &Ocirc; t&ocirc;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>25.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>21</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>145</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật T&agrave;u thủy;<br />Kỹ thuật H&agrave;ng kh&ocirc;ng;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>23.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 391.05pt; height: 14.5pt;\" colspan=\"4\" valign=\"bottom\" nowrap=\"nowrap\" width=\"521\">\r\n<p><strong>ĐẠI HỌC CH&Iacute;NH QUY CHẤT LƯỢNG CAO, TI&Ecirc;N TIẾN</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp; (GIẢNG DẠY BẰNG TIẾNG ANH)</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>22</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>206</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Khoa học M&aacute;y t&iacute;nh&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>24.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>23</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>207</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật M&aacute;y t&iacute;nh&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>24.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>24</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>208</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Điện - Điện tử&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>20.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>25</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>209</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Cơ kh&iacute;&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>26</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>210</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Cơ điện tử&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>23.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>27</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>214</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật H&oacute;a học&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>22.25</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>28</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>215</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật X&acirc;y dựng&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>18.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>29</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>219</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>C&ocirc;ng nghệ Thực phẩm&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.50</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>30</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>220</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Dầu kh&iacute;&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>18.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>31</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>223</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Quản l&yacute; C&ocirc;ng nghiệp&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>20.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>32</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>225</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Quản l&yacute; T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>18.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>33</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>242</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật &Ocirc; t&ocirc;&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>22.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 391.05pt; height: 14.5pt;\" colspan=\"4\" valign=\"bottom\" nowrap=\"nowrap\" width=\"521\">\r\n<p><strong>ĐẠI HỌC CH&Iacute;NH QUY&nbsp;</strong></p>\r\n<p><strong>(Đ&Agrave;O TẠO TẠI PH&Acirc;N HIỆU ĐHQG HCM TẠI TỈNH BẾN TRE)</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>34</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>419</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>C&ocirc;ng nghệ Thực phẩm&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>21.75</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>35</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>441</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Bảo dưỡng C&ocirc;ng nghiệp - Chuy&ecirc;n ng&agrave;nh Bảo dưỡng Cơ điện tử; Chuy&ecirc;n ng&agrave;nh Bảo dưỡng C&ocirc;ng nghiệp&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>18.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>36</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>445</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật X&acirc;y dựng - Chuy&ecirc;n ng&agrave;nh Kỹ thuật Hạ tầng v&agrave; M&ocirc;i trường&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>19.25</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>37</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>446</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật X&acirc;y dựng C&ocirc;ng tr&igrave;nh Giao th&ocirc;ng - Chuy&ecirc;n ng&agrave;nh Cầu đường&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>18.00</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 14.5pt;\">\r\n<td style=\"width: 35.5pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"47\">\r\n<p>38</p>\r\n</td>\r\n<td style=\"width: 77.95pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"104\">\r\n<p>448</p>\r\n</td>\r\n<td style=\"width: 185.45pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"247\">\r\n<p>Kỹ thuật Điện - Chuy&ecirc;n ng&agrave;nh Năng lượng t&aacute;i tạo&nbsp;</p>\r\n</td>\r\n<td style=\"width: 92.15pt; height: 14.5pt;\" valign=\"bottom\" nowrap=\"nowrap\" width=\"123\">\r\n<p>22.00</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'https://edu2review.com/upload/article-images/2018/08/8360/1920x1080_hoc-phi-dai-hoc-bach-khoa-thanh-pho-ho-chi-minh-cover.jpg', 23, '2020-07-08 03:49:37', '2020-07-08 03:49:37', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'DNT', 'darktaiga01@gmail.com', NULL, '$2y$10$.PxMtfPnkwHo23CjEXonZ.JkFn3U7UgDvdc7nPPtZjngUbTJyF952', NULL, '2020-07-08 07:21:04', '2020-07-08 07:21:04'),
(2, 'Dang Ngoc Tan', 'dangngoctan2012@gmail.com', NULL, '$2y$10$Yaxf8cAQHVTaEg0wu9ma0.pfw5T40kn132b3NQ5eoHvXaP9mzBF8e', NULL, '2020-07-08 07:45:22', '2020-07-08 07:45:22');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
