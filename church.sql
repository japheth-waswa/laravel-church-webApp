-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 07:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author_name` text COLLATE utf8mb4_unicode_ci,
  `author_image_url` text COLLATE utf8mb4_unicode_ci,
  `publish_date` timestamp NULL DEFAULT NULL,
  `blog_category_id` int(11) NOT NULL DEFAULT '0',
  `author_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `url_key`, `image_url`, `brief_description`, `content`, `author_name`, `author_image_url`, `publish_date`, `blog_category_id`, `author_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'title of my blog', 'title-of-my-blog', 'assets/uploads/images/627088758.jpg', 'i never said it would be an easy walk down the memory lane', '<p><span style="background-color:#FFFF00">brief content comes here</span></p>\r\n\r\n<p><span style="background-color:#FFFF00">fsd sdf sdf sdf sdf dsfa sdfs</span></p>\r\n\r\n<p>&nbsp;dffsdf asd<img alt="" class="img-responsive" src="/st-monica-utawala/public/assets/filesManagement/uploads/images/thumb-6.jpg" style="height:443px; width:370px" /></p>', 'Jeff lilcot', NULL, '2017-02-24 21:00:00', 1, 0, 1, '2017-02-25 03:59:43', '2017-05-04 03:35:17', NULL),
(2, 'God is my true Father', 'god-is-my-true-father', 'assets/uploads/images/728081597.jpg', 'Yes of course you can! Though when you’re there you might find it more comfortable to sing along or even to join in the prayers as you won’t feel quite so isolated as you will if you don’t involve yourself.', '<h1><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/background-onepage-video.jpg" style="height:400px; width:738px" /></h1>\r\n\r\n<div class="entry-content" style="box-sizing: border-box; color: rgb(34, 35, 92); font-family: open_sansregular, Arial, sans-serif; font-size: 14px;">\r\n<div class="quote" style="box-sizing: border-box; max-width: 100%; margin-left: 60px; margin-right: 60px; margin-bottom: 20px; padding: 0px; clear: right; border-left: 1px solid rgb(195, 195, 195); background: url(">\r\n<blockquote>\r\n<p><strong>I&rsquo;m interested in going to church but don&rsquo;t know where to start</strong></p>\r\n</blockquote>\r\n</div>\r\n\r\n<p>Getting started with anything new is never easy.</p>\r\n\r\n<p>One would be to go to church with someone you know who does go. You could sit with them and they could help you by explaining what happens and so on. Perhaps they might introduce you to some others who are there.</p>\r\n\r\n<p>If you&rsquo;d rather go on your own then don&rsquo;t arrive too early, five minutes before the starting time is ok and make sure you sit near the back. That way you won&rsquo;t feel quite so exposed.</p>\r\n\r\n<p>Do ask if you can join others in a row where they are. And never feel you can&rsquo;t ask questions of others around you.</p>\r\n\r\n<p>It&rsquo;s also good if you&rsquo;re new to a church to say to people you&rsquo;ve never been before. Churches can be very friendly places and most folk are only too glad to be of help.</p>\r\n\r\n<div class="quote" style="box-sizing: border-box; max-width: 100%; margin-left: 60px; margin-right: 60px; margin-bottom: 20px; padding: 0px; clear: right; border-left: 1px solid rgb(195, 195, 195); background: url(">\r\n<blockquote>\r\n<p><strong>Can I go to church if I don&rsquo;t believe in God/sceptical/don&rsquo;t know what I believe?</strong></p>\r\n</blockquote>\r\n</div>\r\n\r\n<p>Yes of course you can! Though when you&rsquo;re there you might find it more comfortable to sing along or even to join in the prayers as you won&rsquo;t feel quite so isolated as you will if you don&rsquo;t involve yourself.</p>\r\n\r\n<p>You can always ask to speak to the minister or priest during the week to discuss what believing means.</p>\r\n</div>', 'carol Mathews', NULL, '2017-02-25 21:00:00', 2, 0, 1, '2017-02-26 07:37:39', '2017-02-27 08:59:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bible', 'bible', 'description', 1, NULL, '2017-02-27 08:41:24', NULL),
(2, 'church', 'church', 'description', 1, '2017-02-26 07:35:36', '2017-02-27 08:41:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `blog_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `viewed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `names`, `email`, `phone`, `message`, `blog_id`, `visible`, `viewed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jslkdf sa', 'jfdaslkdfj@gmail.com', 'fjsa', 'fjsakldfsa dfjklasfj kdsl jasfd', 0, 0, 0, '2017-02-26 03:14:00', '2017-02-26 05:17:42', '2017-02-26 05:17:42'),
(2, 'h', 'fsd@gmail.com', NULL, 'jkhkjh jkh kj', 1, 0, 1, '2017-02-26 03:20:53', '2017-02-26 05:40:34', NULL),
(3, 'jeff', 'jean@gmail.com', 'fasdfasd', 'wow great content', 2, 1, 1, '2017-02-26 07:38:22', '2017-05-15 06:20:14', NULL),
(4, 'api blog comment', 'japhethwaswa@gmail.com', '0988', 'i never said it would be easy', 2, 1, 0, '2017-06-09 02:47:04', '2017-06-09 02:47:04', NULL),
(5, 'api blog comment', 'japhethwaswa@gmail.com', '0988', 'i never said it would be easy', 2, 1, 0, '2017-06-09 02:48:55', '2017-06-09 02:48:55', NULL),
(6, 'jean waswa', 'jefflilcot@gmail.com', NULL, 'wow is this realy happening now or iam seing my own things ?', 1, 1, 0, '2017-06-09 03:51:34', '2017-06-09 03:51:34', NULL),
(7, 'agin him', 'adin@gmail.com', NULL, 'well this is not my sure thing.', 2, 1, 0, '2017-06-09 03:53:21', '2017-06-09 03:53:21', NULL),
(8, 'waswa', 'waswa@gmail.com', NULL, 'really people.', 2, 1, 0, '2017-06-09 04:01:56', '2017-06-09 04:01:56', NULL),
(9, 'woo', 'wollo@gmail.com', NULL, 'fajlsdjfaslkdfasdfa', 2, 1, 0, '2017-06-09 04:41:09', '2017-06-09 04:41:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `congregations`
--

CREATE TABLE `congregations` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `place_of_stay` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci COMMENT 'adult,child',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congregations`
--

INSERT INTO `congregations` (`id`, `firstname`, `lastname`, `image_url`, `district`, `gender`, `date_of_birth`, `email`, `phone`, `place_of_stay`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'carol', 'lavina', 'assets/uploads/images/627794053.jpg', 'Bethlehem', 'female', '1995-02-13', 'carolavymathews95@gmail.com', '0717548381', 'utawala fagilia', 'adult', '2017-02-26 07:32:29', '2017-02-26 07:32:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `viewed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `names`, `email`, `phone`, `message`, `viewed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'f', 'fasdfasdfs@gmail.com', NULL, 'fsa sdfsd', 1, '2017-02-26 03:02:09', '2017-02-26 05:55:20', NULL),
(2, 'wlkdsjlka', 'jdakls@gmail.com', 'fjsakld', 'was trying the contacts.', 1, '2017-02-26 07:40:25', '2017-02-26 07:40:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `title`, `image_url`, `description`, `content`, `facebook_url`, `twitter_url`, `youtube_url`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'healthcare fd for health marginalized children', 'assets/uploads/images/263129340.jpg', 'fsjldf kjsdlfka sjdflkasjdfklas djfklsdjf sklfj sdklfjsflkas jdfklsj fdkljs dfkaljdf aklsdf', '<p><span style="background-color:#006400">ahaha &nbsp; &nbsp; &nbsp; &nbsp; jklf sjdklj fdksdl sd fsdfs</span></p>\r\n\r\n<p><span style="background-color:#006400">fsjfds<img alt="" src="/st-monica-utawala/public/assets/filesManagement/uploads/images/thumb-6.jpg" style="height:443px; width:370px" /></span></p>', NULL, NULL, NULL, 0, '2017-02-24 14:53:07', '2017-02-26 07:28:52', NULL),
(2, 'Help improve the livelihood', 'assets/uploads/images/970350477.jpg', 'Don’t let all the potential of Africa’s girls and boys go to waste. Just because they were born into hunger and poverty, doesn’t mean they can’t have a bright future. Together, we can empower African families to fight hunger and end poverty for this generation and beyond. When you donate money to Africa programs that fight hunger, you support our lifesaving work. Thank you for your generous support.', '<p><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/donate.jpg" style="height:326px; width:555px" /></p>\r\n\r\n<p><strong><u>MPESA</u></strong></p>\r\n\r\n<ol>\r\n	<li>Paybill 236782</li>\r\n	<li>accNo : 908fasd90</li>\r\n</ol>\r\n\r\n<p><strong><u>BANK</u></strong></p>\r\n\r\n<ol>\r\n	<li>accNo: &nbsp;8908fasd</li>\r\n	<li>accName: ackstmonica</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 1, '2017-02-26 07:28:39', '2017-05-15 05:42:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `event_date` timestamp NULL DEFAULT NULL,
  `event_location` text COLLATE utf8mb4_unicode_ci,
  `event_category_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image_url`, `brief_description`, `content`, `event_date`, `event_location`, `event_category_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New event title', 'assets/uploads/images/860080295.jpg', 'brief info on the event', '<p>event content comes here.</p>', '2019-11-21 15:50:00', 'kariadusi', 3, 1, '2017-02-24 12:09:29', '2017-05-10 09:07:32', NULL),
(2, 'wherevet title', 'assets/uploads/images/218831380.jpg', 'Brief dsacritpion', '<p>breif descriptionss</p>', '2017-07-11 21:00:00', 'kilimanjaro estate', 1, 1, '2017-02-24 12:23:05', '2017-05-08 07:08:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Celebrations', 'celebrations', 'celebration events.', 1, '2017-02-24 12:06:58', '2017-02-24 12:06:58', NULL),
(2, 'Fests', 'fests', 'fests events', 1, '2017-02-25 02:51:48', '2017-02-25 02:51:48', NULL),
(3, 'Meetings', 'meetings', 'meetings events', 1, '2017-02-25 02:52:06', '2017-02-25 02:52:06', NULL),
(4, 'Prayers', 'prayers', 'prayers events', 1, '2017-02-25 02:52:22', '2017-02-25 02:52:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_registers`
--

CREATE TABLE `event_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `event_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_registers`
--

INSERT INTO `event_registers` (`id`, `firstname`, `lastname`, `phone`, `email`, `event_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jean', 'lilcot', '098777', 'jeany@gmail.com', 2, '2017-02-26 03:45:56', '2017-02-26 03:45:56', NULL),
(2, 'h', 'k', '09', 'fsd@gmail.com', 1, '2017-02-26 03:48:11', '2017-02-26 03:48:11', '2017-02-07 21:00:00'),
(3, 'fjas', 'fjlkds', 'fjdklf', 'jdfklsafjdl@gmail.com', 1, '2017-02-26 07:42:03', '2017-02-26 07:42:03', NULL),
(4, 'jefflilcot', NULL, NULL, NULL, 7, '2017-06-09 02:53:36', '2017-06-09 02:53:36', NULL),
(5, 'jeff lilcot', NULL, '0729837368', 'jefflilcot@gmail.com', 2, '2017-06-09 03:38:15', '2017-06-09 03:38:15', NULL),
(6, 'jefflilcot', NULL, '0712122321', 'jefflilcot@gmail.com', 2, '2017-06-09 03:39:16', '2017-06-09 03:39:16', NULL),
(7, 'japheth waswa', NULL, '0988888888', 'jefflicot@gmail.com', 2, '2017-06-09 03:40:20', '2017-06-09 03:40:20', NULL),
(8, 'waswa jean', NULL, '0999999999', 'jefflilcot@gmail.com', 2, '2017-06-09 03:41:29', '2017-06-09 03:41:29', NULL),
(9, 'waswa', NULL, '0000000000', 'aswa@gmail.com', 1, '2017-06-09 04:02:26', '2017-06-09 04:02:26', NULL),
(10, 'waswa', NULL, '0000000000', 'jeandsla@gmail.com', 1, '2017-06-09 04:13:59', '2017-06-09 04:13:59', NULL),
(11, 'another', NULL, '0909099090', 'wolla@gmail.com', 1, '2017-06-09 04:15:13', '2017-06-09 04:15:13', NULL),
(12, 'rallgg', NULL, '0000000000', 'uoouiou@gmail.com', 2, '2017-06-09 04:15:54', '2017-06-09 04:15:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `image_urls` text COLLATE utf8mb4_unicode_ci,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `link_url` text COLLATE utf8mb4_unicode_ci,
  `gallery_category_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `brief_description`, `image_urls`, `video_url`, `link_url`, `gallery_category_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'whereve gallery title', 'brief description anotherone', 'assets/uploads/images/987223307.jpg,assets/uploads/images/936523437.jpg,assets/uploads/images/693712022.jpg', NULL, NULL, 1, 1, '2017-02-24 14:00:45', '2017-02-27 09:11:53', '2017-02-27 09:11:53'),
(2, 'links first gallery item', 'brief description', 'assets/uploads/images/127956814.jpg', NULL, 'https://www.jumbo.co.ke', 2, 1, '2017-02-24 14:13:58', '2017-02-27 09:18:23', NULL),
(3, 'image wherever', 'brief description', 'assets/uploads/images/281873914.jpg', NULL, NULL, 4, 1, '2017-02-25 03:32:15', '2017-02-27 09:17:17', NULL),
(4, 'video file comes', 'brief description', 'assets/uploads/images/406358506.jpg', 'https://www.youtube.com/watch?v=qVXjlNkWZNY', NULL, 3, 1, '2017-02-25 03:37:07', '2017-02-27 09:17:58', NULL),
(5, 'fjsdklfjewkljflk', 'brief description', 'assets/uploads/images/695773654.jpg,assets/uploads/images/938096788.jpg', NULL, NULL, 1, 1, '2017-02-26 07:43:58', '2017-02-27 09:13:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Slideshow', 'slideshow', 'slideshow', 1, '2017-02-24 03:53:25', '2017-02-24 03:53:25', NULL),
(2, 'Links', 'links', 'links gallery category', 1, '2017-02-24 14:13:21', '2017-02-24 14:13:21', NULL),
(3, 'Video', 'video', 'gallery videos', 1, '2017-02-25 02:57:06', '2017-02-25 02:57:06', NULL),
(4, 'Images', 'images', 'gallery images', 1, '2017-02-25 02:57:22', '2017-02-25 02:57:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_02_18_070519_create_sliders_table', 1),
(2, '2017_02_18_071546_create_donations_table', 1),
(3, '2017_02_18_074022_create_sermons_table', 1),
(4, '2017_02_18_074449_create_event_categories_table', 1),
(5, '2017_02_18_075111_create_events_table', 1),
(6, '2017_02_18_080447_create_event_registers_table', 1),
(7, '2017_02_18_081516_create_gallery_categories_table', 1),
(8, '2017_02_18_081924_create_galleries_table', 1),
(9, '2017_02_18_083024_create_congregations_table', 1),
(10, '2017_02_18_083623_create_blog_categories_table', 1),
(11, '2017_02_18_083841_create_blogs_table', 1),
(12, '2017_02_18_084323_create_comments_table', 1),
(13, '2017_02_18_085646_create_staff_table', 1),
(14, '2017_02_18_090045_create_settings_table', 1),
(15, '2017_02_23_070519_create_sunday_schedules_table', 2),
(16, '2017_02_23_071546_create_sunday_pages_table', 2),
(17, '2017_02_26_051211_create_contacts_table', 3),
(18, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(19, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(20, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(21, '2016_06_01_000004_create_oauth_clients_table', 4),
(22, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('4d55ee34e94a7f388a3ed9fbf413a3d6dcde5636ebdb6d153b0abc1bb24e3fd48cfa7f304beea904', NULL, 3, NULL, '[]', 0, '2017-04-18 11:09:48', '2017-04-18 11:09:48', '2018-04-18 14:09:48'),
('0772509ca5d8a8a09c65d38cb97d5d7a0cfedd34f096d3a11b2bc66c48dfa4ae3360ff5af1a83a5e', NULL, 3, NULL, '[]', 0, '2017-04-18 11:09:58', '2017-04-18 11:09:58', '2018-04-18 14:09:58'),
('4ff08814df0541094bf496d56491b2b5b4b1ab78791f0f273bfe4d484ee190b4444b322835ffab72', NULL, 3, NULL, '[]', 0, '2017-04-18 11:10:37', '2017-04-18 11:10:37', '2018-04-18 14:10:37'),
('3202d5d5f0871e0c7cbe522fd3ddbcaad5cf3dcd6022ff59d47671863d1b8dfffac6a885779f7483', NULL, 3, NULL, '[]', 0, '2017-04-18 11:11:07', '2017-04-18 11:11:07', '2018-04-18 14:11:07'),
('dd5eb1987d984961a3970488c473b712b3f1853281eb73da1a605fbbaa5183e03160e6ddbe10bc40', 1, 4, NULL, '[]', 0, '2017-04-18 11:12:19', '2017-04-18 11:12:19', '2018-04-18 14:12:19'),
('dd05fc29ff7e941d518b6a97bf1dbe5ac8320797faf936ff1de8c8d40ee18fe9bb3d85b1a0d9c100', 1, 4, NULL, '[]', 1, '2017-04-18 11:12:43', '2017-04-18 11:12:43', '2018-04-18 14:12:43'),
('9b8951a47eeff4c13934eb7dc9b01ab502eb320d4d108910063e73ac3f1869170cf591ab0fa5d2c8', 1, 4, NULL, '[]', 0, '2017-04-18 11:14:09', '2017-04-18 11:14:09', '2018-04-18 14:14:09'),
('99652e2d8880269567dfcbf1d7f237c84043b41bf3b14ffe20d15215f4b027c58bf3b58678f5c740', 1, 4, NULL, '[]', 1, '2017-04-18 11:14:31', '2017-04-18 11:14:31', '2018-04-18 14:14:31'),
('dd26901d4b79c5a13165342a7834986fae1ad8bcccdeb207f4cec3b7747f9d7e9d04fcf47f1e6e44', 1, 4, NULL, '[]', 0, '2017-04-18 11:14:55', '2017-04-18 11:14:55', '2018-04-18 14:14:55'),
('4f135c7e262281939700513d1f47392eba1dbc5afcd7a7553266fb9f314e06e9b0e70ee091bd5af6', 1, 4, NULL, '[]', 0, '2017-04-18 11:15:25', '2017-04-18 11:15:25', '2018-04-18 14:15:25'),
('455b1286c20e130d45ac60007567445a3e376755a741ba61da0b28563d01b83129e391e2fd680550', NULL, 3, NULL, '[]', 0, '2017-04-18 11:55:45', '2017-04-18 11:55:45', '2018-04-18 14:55:45'),
('9329ea266ff4d3e3deb99712f7c8bbb30ffe3485f43cf466e4f1620f5010676ea1b2956d77285c30', NULL, 3, NULL, '[]', 0, '2017-04-21 02:54:50', '2017-04-21 02:54:50', '2018-04-21 05:54:50'),
('34e48f897227adf1eba7de2b07a655dcf1eae6cccdb28bbcef423dea0d693bc50061568ed8e88bc9', 1, 4, NULL, '[]', 0, '2017-04-21 05:36:49', '2017-04-21 05:36:49', '2018-04-21 08:36:49'),
('6749bd006b65733d61fc0b0d17e6e25f12c2988cb6727b2e4b2df4844a989c140d69102b731971b8', NULL, 3, NULL, '[]', 0, '2017-04-21 05:45:21', '2017-04-21 05:45:21', '2018-04-21 08:45:21'),
('36d3a191528bad5bde2a52220c8345d57398162425a7c063b507691d5957be051d15e8ed0decc597', NULL, 3, NULL, '[]', 0, '2017-04-21 05:50:22', '2017-04-21 05:50:22', '2018-04-21 08:50:22'),
('b8163a5870561c1039b215dd56b359d0f142bd6aefa86a49fd049a5b4067bfb2e8a927ce367e7f07', NULL, 3, NULL, '[]', 0, '2017-04-21 05:54:10', '2017-04-21 05:54:10', '2018-04-21 08:54:10'),
('dd6ae894397fdda33a0e7b9a27920721dcea4ceae267b2174a85e11aa4a289d8ea77f4920ea24299', NULL, 3, NULL, '[]', 0, '2017-04-21 06:02:34', '2017-04-21 06:02:34', '2018-04-21 09:02:34'),
('ac11d4e76287cb8b15cbf84ded6f307f196b21203f5a1d9081f724bfd8423cbb0c6f47eb3f5ac26a', NULL, 3, NULL, '[]', 0, '2017-04-21 06:24:50', '2017-04-21 06:24:50', '2018-04-21 09:24:50'),
('3ea3f8b6e1e36f609f403b1f3692ec102f74fbad60871b9cd773360bd056bda70b0ef6ab3d68a31d', NULL, 3, NULL, '[]', 0, '2017-04-21 06:34:31', '2017-04-21 06:34:31', '2018-04-21 09:34:31'),
('8b5d72562d80ae80d8c458e01e6c4143e8f6072a801a1218a27f5073f79702e786e401d9b5b9e21b', NULL, 3, NULL, '[]', 0, '2017-04-21 06:46:13', '2017-04-21 06:46:13', '2018-04-21 09:46:13'),
('c75ac324b072e852bfe99957d506e018224b541f9b7fe156d4a0a67dc21dfb00a9ad945d42adce35', NULL, 3, NULL, '[]', 0, '2017-04-21 06:47:02', '2017-04-21 06:47:02', '2018-04-21 09:47:02'),
('352bf214a71e71f68f1f4d02baa88a616fb545217d888dcd7af9313a58a977d8bf263d861005f2df', NULL, 3, NULL, '[]', 0, '2017-04-21 06:55:41', '2017-04-21 06:55:41', '2018-04-21 09:55:41'),
('5eec4b88881f334fcbc9d1713f697a8795356c5cceac8d8131cc3c04f6373edb17fa069a0f909865', 1, 4, NULL, '[]', 0, '2017-04-21 07:47:53', '2017-04-21 07:47:53', '2018-04-21 10:47:53'),
('dc051860f5f3c495523e88d554edd5414b92f6a3419d87511626a31e8ee7800d3a6f71d6fb24cda4', NULL, 3, NULL, '[]', 0, '2017-04-26 05:39:55', '2017-04-26 05:39:55', '2018-04-26 08:39:55'),
('2dd80873a5045714c117a6e119195dc361a5292c8a89f35a37a911d29daa7c558b3a777534c2947e', NULL, 3, NULL, '[]', 0, '2017-04-26 05:39:55', '2017-04-26 05:39:55', '2018-04-26 08:39:55'),
('d6a5efdac2732066e7e898b9ce4c380e9a3314059b43732040afac1e7828cd6a0828f745c443ba98', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('65ea413cfcbfac7edc3cb56884ca76487a2deada1203c62f06fe3c4ba3dce896d307da22b0ec6269', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('6a15802ded005a5115efa4146492ee340b3ad1b746ae8e0a4e6da7d09f1bcb58985016f8962d0349', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('bbb76f64fb8172110a8527df82cfd24a021fd1ba57203968c033f0c39a8a49847b53653f84116b27', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('f3241d47a5bc4d8200fca7583a6e19136117162e6249b6022b8d41358be5098decba18e84c6d3ef7', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('ad4c46c65aa988381d08e08f6b9738fa7354a0c5c256a6e397a8ce83ec5964bb4b921cdac0f99283', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:37', '2017-04-26 06:23:37', '2018-04-26 09:23:37'),
('f4dcdf451fa75a92604b49311a06a2262ccc009b866bcb82e9db7205a4dc530fa6fb4df02794f9ff', NULL, 3, NULL, '[]', 0, '2017-04-26 12:50:52', '2017-04-26 12:50:52', '2018-04-26 15:50:52'),
('da365c0ed2315533bdd897a5217b3c6ed3a2a63a792f7436041ed742863fd52ceef58ded0e771593', NULL, 3, NULL, '[]', 0, '2017-04-26 12:57:00', '2017-04-26 12:57:00', '2018-04-26 15:57:00'),
('2b86c42cd2fcf620d40da90348e40c8480e50ea5befedca3e84c2b978c780145b0afaa8ae844a8ab', NULL, 3, NULL, '[]', 0, '2017-04-26 12:57:57', '2017-04-26 12:57:57', '2018-04-26 15:57:57'),
('d925fc62d5ea89e7bb66d65489c59f5d3addb967a830a4d96708867b11d922f508bf4c867f26c0c7', NULL, 3, NULL, '[]', 0, '2017-04-27 02:47:04', '2017-04-27 02:47:04', '2018-04-27 05:47:04'),
('68cc6506ee6afc2b904f729a06d8dc1ed4007f77d183df404373aa25f2ef50391d83506c709621cd', NULL, 3, NULL, '[]', 0, '2017-04-28 04:33:03', '2017-04-28 04:33:03', '2018-04-28 07:33:03'),
('00492a9d4ee405a4df5c22a1e0e97709ab2983f2afa4bc1d3f96a0475ed8597a8188fe897ce38537', NULL, 3, NULL, '[]', 0, '2017-04-28 05:28:12', '2017-04-28 05:28:12', '2018-04-28 08:28:12'),
('3899d5ec2404a95f2d9552459b142a81c1df7bbc518e0912c514e6f3dbb77b86d2f10a944c26946b', NULL, 3, NULL, '[]', 0, '2017-04-28 05:28:12', '2017-04-28 05:28:12', '2018-04-28 08:28:12'),
('306a25fe66581d331afc917e1bb3af4f69581f8d8e143bf15d0bd8876602db310cf2e354457b1f5e', NULL, 3, NULL, '[]', 0, '2017-05-05 03:27:04', '2017-05-05 03:27:04', '2018-05-05 06:27:04'),
('fc0a2f98bf8cf8126a5f9cf6b51a7ffb00b1efaadd3e92e6e5006c5bef280fbfac48503175d03143', NULL, 3, NULL, '[]', 0, '2017-05-08 07:11:26', '2017-05-08 07:11:26', '2018-05-08 10:11:26'),
('5d1b54633a990b4c3ca7405788eaca7de6330d2000d9b1989312cf03055e83e83036ec55feca0e87', NULL, 3, NULL, '[]', 0, '2017-05-08 07:25:05', '2017-05-08 07:25:05', '2018-05-08 10:25:05'),
('131098b3e7abde24cdb5f92f0372d181b8ff5640b2cea087de4323d8bd3c1f31d579168665292432', NULL, 3, NULL, '[]', 0, '2017-05-08 10:02:17', '2017-05-08 10:02:17', '2018-05-08 13:02:17'),
('9b9041e43b2db18d9654635ae83fe1cfdb45a4c2222120aec489561bd5e9172c573a521ad4e4036d', NULL, 3, NULL, '[]', 0, '2017-05-08 10:20:47', '2017-05-08 10:20:47', '2018-05-08 13:20:47'),
('a1aa21766e1f70568aa8cc815b5d40fe2ef9dbb05f8ed8a7e399fae6f8679280f90a480ce8d69dc4', NULL, 3, NULL, '[]', 0, '2017-05-09 02:47:58', '2017-05-09 02:47:58', '2018-05-09 05:47:58'),
('104c3e4e74ee012cfd8f65ff4066f8e681f5db945ea670579a2d50302ff5c917a64510da10ab069d', NULL, 3, NULL, '[]', 0, '2017-05-10 02:58:13', '2017-05-10 02:58:13', '2018-05-10 05:58:13'),
('7f41cfc66ba5ce0da47b441641a7b601ac14cf2e0563c67fd6c4b501b26c4c736645ef59e7e3b165', NULL, 3, NULL, '[]', 0, '2017-05-10 08:06:29', '2017-05-10 08:06:29', '2018-05-10 11:06:29'),
('b03e27565e56720e817589e5e630eadb7947cd8b7b591cd7886171b78c48f2c0ab714c9ede1c26d1', NULL, 3, NULL, '[]', 0, '2017-05-12 04:19:33', '2017-05-12 04:19:33', '2018-05-12 07:19:33'),
('f176fddaadc9a70780a6f7876cb490c183e2a71bcab82f65bde49cedcc0acdb22d02469e3ebec72f', NULL, 3, NULL, '[]', 0, '2017-05-15 03:07:29', '2017-05-15 03:07:29', '2018-05-15 06:07:29'),
('2da36dfb395935b6cd9785028fff1049b5cd3eefa532c9549fb6db952543995d651c765a30d9c3f8', NULL, 3, NULL, '[]', 0, '2017-05-15 05:11:05', '2017-05-15 05:11:05', '2018-05-15 08:11:05'),
('d9b5e66817b40b89edbdb87e3c6cddccf4dbd97d12fc15d60189bd9117ecd9eb475c38e5da22b71e', NULL, 3, NULL, '[]', 0, '2017-05-15 10:05:44', '2017-05-15 10:05:44', '2018-05-15 13:05:44'),
('2c8a4ca09cfbd2fa85aed1335878c304f6d29d437f719cb33b4da3536ad39f6bd5dc154f9ec9d47a', NULL, 3, NULL, '[]', 0, '2017-05-17 08:39:56', '2017-05-17 08:39:56', '2018-05-17 11:39:56'),
('a69bcf524187de763be03540f03bf253ca28e2dd671a6ef28893f50ca58ab7343d7032eadbffa96d', NULL, 3, NULL, '[]', 0, '2017-05-18 05:47:02', '2017-05-18 05:47:02', '2018-05-18 08:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'MIP7JLzMVfVIA9pxIqwzDBmBSbfslu0HtA0RtNdA', 'http://localhost', 1, 0, 0, '2017-04-18 11:07:56', '2017-04-18 11:07:56'),
(2, NULL, 'Laravel Password Grant Client', 'rGggkPoVmj5GyQIPGceIc6FP1pYVPTBKuOX64W9G', 'http://localhost', 0, 1, 0, '2017-04-18 11:07:56', '2017-04-18 11:07:56'),
(3, 11, 'Client Credentials Client', 'cwQCFnZ0XjeeTyfRPwgorAWu6F8nqWdqqtqHAcl7', 'null', 0, 0, 0, '2017-04-18 11:09:17', '2017-04-18 11:09:17'),
(4, NULL, '21', 'ggVZ2cOeEoVROan8z71qEord94yX24EP4iCkiqUH', 'http://localhost', 0, 1, 0, '2017-04-18 11:12:04', '2017-04-18 11:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-04-18 11:07:56', '2017-04-18 11:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('8cb80b22a022c0fcad2cee4333b25786f9a9a49e45b06f6e6694b4cb33c969e76750e15710142ab1', 'dd5eb1987d984961a3970488c473b712b3f1853281eb73da1a605fbbaa5183e03160e6ddbe10bc40', 0, '2018-04-18 14:12:19'),
('42fe580d07847a005ca2cbe22fbc810071efc1e0aaf80f4ed153799bda956671fcc6253ca7152b08', 'dd05fc29ff7e941d518b6a97bf1dbe5ac8320797faf936ff1de8c8d40ee18fe9bb3d85b1a0d9c100', 1, '2018-04-18 14:12:43'),
('dee040acb2b3240db95941fad43d93085808813fd4b3ad1bb832102a89ba38195c9080cce412b329', '9b8951a47eeff4c13934eb7dc9b01ab502eb320d4d108910063e73ac3f1869170cf591ab0fa5d2c8', 0, '2018-04-18 14:14:09'),
('95f2ae9e54aa07ac9a2cf8a9f8b12a9792962abf8d662d0d900f376aeb009b291a06db9398919a3d', '99652e2d8880269567dfcbf1d7f237c84043b41bf3b14ffe20d15215f4b027c58bf3b58678f5c740', 1, '2018-04-18 14:14:31'),
('c0fe496a5fcabfa917e11ec90f0913d15ba9a414f31b9ad4e5e5ef713a723ca510bf1505a02fc4c2', 'dd26901d4b79c5a13165342a7834986fae1ad8bcccdeb207f4cec3b7747f9d7e9d04fcf47f1e6e44', 0, '2018-04-18 14:14:55'),
('4202686ec0054c40c3a937eab9588e4d4e93f8e95f697e4c4b236b48a874e87af6430dc42fd0ce20', '4f135c7e262281939700513d1f47392eba1dbc5afcd7a7553266fb9f314e06e9b0e70ee091bd5af6', 0, '2018-04-18 14:15:25'),
('d36ece899f943ebd581f4f8fe91ff5736ff6a5521e34526085b205d4823fae86ac3696324efeb11c', '34e48f897227adf1eba7de2b07a655dcf1eae6cccdb28bbcef423dea0d693bc50061568ed8e88bc9', 0, '2018-04-21 08:36:49'),
('c5c95127961d76d713713a7a65e5dc3bc5c506d24c0ee2f0416cf8594aecbc9298e6a8739ac696ef', '5eec4b88881f334fcbc9d1713f697a8795356c5cceac8d8131cc3c04f6373edb17fa069a0f909865', 0, '2018-04-21 10:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jefflilcot@gmail.com', '$2y$10$wIhfLXS09cPBXFUmZno1n.jikq/DdrCG1oaggO4MTDHg2aVOHBEhO', '2017-02-24 02:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `audio_url` text COLLATE utf8mb4_unicode_ci,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `pdf_url` text COLLATE utf8mb4_unicode_ci,
  `sermon_date` timestamp NULL DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`id`, `title`, `image_url`, `brief_description`, `audio_url`, `video_url`, `pdf_url`, `sermon_date`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'The church isn\'t a building. It\'s people', 'assets/uploads/images/234374999.jpg', 'Your story is your testimony. No matter where you’ve been or what you’ve done. Your story tells Gods story. It’s a gift that God wants you to share so that the world around you can experience Jesus through your life. The Bible says that we overcame our in life through Christ, and by the “words of our testimony.” So take a few minutes and tell the world how God is building a better story in your life!', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=qVXjlNkWZNY', 'http://www.oudesporen.nl/Download/HB079.pdf', '2017-02-20 21:00:00', 1, '2017-02-24 04:45:05', '2017-02-27 08:02:58', NULL),
(2, 'God love us all', 'assets/uploads/images/548421223.jpg', 'The Bible says that we overcame our in life through Christ, and by the “words of our testimony.” So take a few minutes and tell the world how God is building a better story in your life!', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=qVXjlNkWZNY', 'http://www.oudesporen.nl/Download/HB079.pdf', '2017-02-19 21:00:00', 1, '2017-02-26 07:15:32', '2017-02-27 08:04:00', NULL),
(3, 'another title slider', 'assets/uploads/images/313612196.jpg', 'well brief info', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', '2017-04-19 21:00:00', 1, '2017-04-21 10:57:35', '2017-04-21 10:57:35', NULL),
(4, 'too', 'assets/uploads/images/282497829.jpg', 'hahahah', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', '2017-05-16 21:00:00', 1, '2017-04-21 10:58:13', '2017-04-21 10:58:13', NULL),
(5, 'mmdsfakd', 'assets/uploads/images/614746093.jpg', 'july is the best', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', '2017-06-06 21:00:00', 1, '2017-04-21 10:58:52', '2017-04-21 10:58:52', NULL),
(6, 'fjdaskldf askldfjaskldfjaskldjf akljdf klasj d', 'assets/uploads/images/814425998.jpg', 'fasdjflask djklasdj fklasdj faklsdfj askldfj asdklf d', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', 'https://caffe2.ai/docs/AI-Camera-demo-android', '2017-07-11 21:00:00', 1, '2017-04-21 10:59:34', '2017-04-21 10:59:34', NULL),
(7, 'me title wresfs', 'assets/uploads/images/488254123.jpg', 'kldnfiasudfioausdfioamsdfad', 'https://caffe2.ai/docs/AI-Camera-demo-android', NULL, NULL, '2017-09-19 21:00:00', 1, '2017-04-21 11:00:20', '2017-05-04 11:54:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` text COLLATE utf8mb4_unicode_ci,
  `logo_url` text COLLATE utf8mb4_unicode_ci,
  `login_logo_url` text COLLATE utf8mb4_unicode_ci,
  `fav_icon_url` text COLLATE utf8mb4_unicode_ci,
  `page_menu_url` text COLLATE utf8mb4_unicode_ci,
  `theme_title` text COLLATE utf8mb4_unicode_ci,
  `theme_description` text COLLATE utf8mb4_unicode_ci,
  `about_us` text COLLATE utf8mb4_unicode_ci,
  `physical_address` text COLLATE utf8mb4_unicode_ci,
  `primary_email` text COLLATE utf8mb4_unicode_ci,
  `secondary_email` text COLLATE utf8mb4_unicode_ci,
  `primary_phone` text COLLATE utf8mb4_unicode_ci,
  `secondary_phone` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `quotation` text COLLATE utf8mb4_unicode_ci,
  `quotation_origin` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo_url`, `login_logo_url`, `fav_icon_url`, `page_menu_url`, `theme_title`, `theme_description`, `about_us`, `physical_address`, `primary_email`, `secondary_email`, `primary_phone`, `secondary_phone`, `facebook_url`, `twitter_url`, `youtube_url`, `quotation`, `quotation_origin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'church name', 'assets/uploads/images/454861111.png', 'assets/uploads/images/987765842.jpg', 'assets/uploads/images/740180121.png', 'assets/uploads/images/828206380.jpg', 'Beyond the limit', 'God love us we are his children and are meant to be faithful to HIM.', '<h1>About the church</h1>\r\n\r\n<p>Church Online meets in every country around the world.Here&rsquo;s how we do it&mdash;and why.</p>\r\n\r\n<p>One would be to go to church with someone you know who does go. You could sit with them and they could help you by explaining what happens and so on. Perhaps they might introduce you to some others who are there.</p>\r\n\r\n<p>If you&rsquo;d rather go on your own then don&rsquo;t arrive too early, five minutes before the starting time is ok and make sure you sit near the back. That way you won&rsquo;t feel quite so exposed.</p>', 'wall down street avenue 23', 'ack@gmail.com', 'ack2@gmail.com', '0719726698', '098736355', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'For God so loved the world that he gave his only begotten son,that whoever believes in him should not perish but have an everlasting life.', 'John 3:16', '2017-02-24 01:27:36', '2017-02-27 07:34:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image_url`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'The current slider', 'assets/uploads/images/476535373.jpg', 'the new description new people', 1, '2017-02-24 07:46:06', '2017-02-27 08:07:07', NULL),
(2, 'the latest', 'assets/uploads/images/640109591.jpg', 'the latest comes soon', 1, '2017-02-24 07:46:56', '2017-02-26 07:11:29', NULL),
(3, 'title 1', 'assets/uploads/images/180013020.jpg', 'brief info about the imageslider', 1, '2017-02-26 07:09:27', '2017-02-27 08:09:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `names`, `email`, `phone`, `image_url`, `title`, `brief_description`, `facebook_url`, `twitter_url`, `youtube_url`, `priority`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jaen lilcot', NULL, '0999999999999', 'assets/uploads/images/335340711.jpg', 'vicar', 'brief info about the vicar', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 1, 1, '2017-02-25 01:40:39', '2017-02-27 08:16:46', NULL),
(2, 'mukuria wair', 'mukuria@gmail.comd', '071876255', 'assets/uploads/images/678521050.jpg', 'Evangelist', 'Brief info about the evangelist.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 1, 1, '2017-02-26 07:24:37', '2017-02-27 08:16:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sunday_pages`
--

CREATE TABLE `sunday_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci,
  `sunday_schedule_id` int(11) DEFAULT NULL,
  `page_order` int(11) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sunday_pages`
--

INSERT INTO `sunday_pages` (`id`, `page_content`, `sunday_schedule_id`, `page_order`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>7:00am&mdash;Hair and makeup starts</li>\r\n	<li>8:30am&mdash;Vendors arrive/Setup starts</li>\r\n	<li>9:00am&mdash;First look and couple&rsquo;s portraits</li>\r\n	<li>9:30am&mdash;Family pictures</li>\r\n	<li>9:30am&mdash;Guests begin to arrive</li>\r\n	<li>10:00am&mdash;Invite time</li>\r\n	<li>10:15 am&mdash;Ceremony starts</li>\r\n	<li>10:45am&mdash;Ceremony concludes</li>\r\n	<li>10:45am&mdash;Cocktail &ldquo;hour&rdquo; starts/Additional family photos</li>\r\n	<li>11:30am&mdash;Brunch starts</li>\r\n	<li>12:15pm&mdash;Toasts</li>\r\n	<li>1:00pm&mdash;First dance</li>\r\n	<li>1:30pm&mdash;Cake cutting/Dessert</li>\r\n	<li>2:45pm&mdash;Couple departs</li>\r\n	<li>3:00pm&mdash;Guests depart</li>\r\n	<li>3:00pm&mdash;Breakdown commences</li>\r\n	<li>4:00pm&mdash;All vendors out</li>\r\n</ul>', 1, 2, 1, '2017-02-26 06:46:23', '2017-04-19 03:31:34', NULL),
(2, '<p>procession follows</p>\r\n\r\n<p><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/image-263x165.jpg" style="height:165px; width:263px" /></p>\r\n\r\n<ul>\r\n	<li>7:00am&mdash;Hair and makeup starts</li>\r\n	<li>8:30am&mdash;Vendors arrive/Setup starts</li>\r\n	<li>9:00am&mdash;First look and couple&rsquo;s portraits</li>\r\n	<li>9:30am&mdash;Family pictures</li>\r\n	<li>9:30am&mdash;Guests begin to arrive</li>\r\n	<li>10:00am&mdash;Invite time</li>\r\n	<li>10:15 am&mdash;Ceremony starts</li>\r\n	<li>10:45am&mdash;Ceremony concludes</li>\r\n	<li>10:45am&mdash;Cocktail &ldquo;hour&rdquo; starts/Additional family photos</li>\r\n	<li>11:30am&mdash;Brunch starts</li>\r\n	<li>12:15pm&mdash;Toasts</li>\r\n	<li>1:00pm&mdash;First dance</li>\r\n	<li>1:30pm&mdash;Cake cutting/Dessert</li>\r\n	<li>2:45pm&mdash;Couple departs</li>\r\n	<li>3:00pm&mdash;Guests depart</li>\r\n	<li>3:00pm&mdash;Breakdown commences</li>\r\n	<li>4:00pm&mdash;All vendors out</li>\r\n</ul>', 1, 1, 1, '2017-02-26 07:50:32', '2017-04-19 03:31:34', NULL),
(3, '<p>fas fdfdasdf asdf&nbsp;</p>', 2, 1, 1, '2017-05-12 05:38:54', '2017-05-12 05:38:54', NULL),
(4, '<p>Thi is my custorm page nothing hapeens anyhow</p>\r\n\r\n<p><img alt="" class="img-responsive" src="https://pbs.twimg.com/media/C5R3TITWcAE7-nn.jpg" style="height:526px; width:500px" /></p>', 1, 3, 1, '2017-05-13 02:43:46', '2017-05-13 02:45:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sunday_schedules`
--

CREATE TABLE `sunday_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_title` text COLLATE utf8mb4_unicode_ci,
  `theme_description` text COLLATE utf8mb4_unicode_ci,
  `sunday_date` timestamp NULL DEFAULT NULL,
  `column_count` tinyint(4) NOT NULL DEFAULT '6',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sunday_schedules`
--

INSERT INTO `sunday_schedules` (`id`, `theme_title`, `theme_description`, `sunday_date`, `column_count`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'confirmation service', 'my theme description', '2017-07-05 21:00:00', 6, 1, '2017-02-24 00:01:33', '2017-05-12 05:45:13', NULL),
(2, 'theme title comes here', 'wow how you doing.', '2017-05-11 21:00:00', 6, 0, '2017-02-26 08:55:47', '2017-05-12 05:40:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `role` tinyint(4) DEFAULT '2',
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `blocked`, `role`, `image_url`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$n6e70KZXcF9Ug0hqOcG7reJtY7Z.LJq3KGX0Viwjbl.PAVHAf.CSW', 0, 1, 'assets/uploads/images/213161892.jpeg', 'WdoJLnB93gWBYJjfJpvSMuJYtDKRfupQC2iL3T0E5Pazb5qIKuVdHrBsR5lY', '2017-02-16 07:01:14', '2017-02-27 06:58:06'),
(2, 'jean', 'jeany@gmail.com', '$2y$10$.LSR16PSZnLpmqKYjKe1ROY3x7DwgF4xWgc4ajSZblSTt9QpIlsYi', 0, 2, NULL, 'ikqwsYJ7Txg8AdjyOg6USe4hy3QvWfAu1LcbkUPpiFbPPdjOzUJjiVzUHO1q', '2017-02-24 00:35:39', '2017-02-24 06:12:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congregations`
--
ALTER TABLE `congregations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registers`
--
ALTER TABLE `event_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunday_pages`
--
ALTER TABLE `sunday_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunday_schedules`
--
ALTER TABLE `sunday_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `congregations`
--
ALTER TABLE `congregations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event_registers`
--
ALTER TABLE `event_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sunday_pages`
--
ALTER TABLE `sunday_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sunday_schedules`
--
ALTER TABLE `sunday_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
