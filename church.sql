-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 12:42 PM
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

INSERT INTO `blogs` (`id`, `title`, `url_key`, `image_url`, `brief_description`, `content`, `author_name`, `publish_date`, `blog_category_id`, `author_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'title of my blog', 'title-of-my-blog', 'assets/uploads/images/627088758.jpg', 'i never said it would be an easy walk down the memory lane', '<p><span style="background-color:#FFFF00">brief content comes here</span></p>\r\n\r\n<p><span style="background-color:#FFFF00">fsd sdf sdf sdf sdf dsfa sdfs</span></p>\r\n\r\n<p>&nbsp;dffsdf asd<img alt="" class="img-responsive" src="/st-monica-utawala/public/assets/filesManagement/uploads/images/thumb-6.jpg" style="height:443px; width:370px" /></p>', 'Jeff lilcot', '2017-02-24 21:00:00', 1, 0, 0, '2017-02-25 03:59:43', '2017-02-27 08:57:11', NULL),
(2, 'God is my true Father', 'god-is-my-true-father', 'assets/uploads/images/728081597.jpg', 'Yes of course you can! Though when you’re there you might find it more comfortable to sing along or even to join in the prayers as you won’t feel quite so isolated as you will if you don’t involve yourself.', '<h1><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/background-onepage-video.jpg" style="height:400px; width:738px" /></h1>\r\n\r\n<div class="entry-content" style="box-sizing: border-box; color: rgb(34, 35, 92); font-family: open_sansregular, Arial, sans-serif; font-size: 14px;">\r\n<div class="quote" style="box-sizing: border-box; max-width: 100%; margin-left: 60px; margin-right: 60px; margin-bottom: 20px; padding: 0px; clear: right; border-left: 1px solid rgb(195, 195, 195); background: url(">\r\n<blockquote>\r\n<p><strong>I&rsquo;m interested in going to church but don&rsquo;t know where to start</strong></p>\r\n</blockquote>\r\n</div>\r\n\r\n<p>Getting started with anything new is never easy.</p>\r\n\r\n<p>One would be to go to church with someone you know who does go. You could sit with them and they could help you by explaining what happens and so on. Perhaps they might introduce you to some others who are there.</p>\r\n\r\n<p>If you&rsquo;d rather go on your own then don&rsquo;t arrive too early, five minutes before the starting time is ok and make sure you sit near the back. That way you won&rsquo;t feel quite so exposed.</p>\r\n\r\n<p>Do ask if you can join others in a row where they are. And never feel you can&rsquo;t ask questions of others around you.</p>\r\n\r\n<p>It&rsquo;s also good if you&rsquo;re new to a church to say to people you&rsquo;ve never been before. Churches can be very friendly places and most folk are only too glad to be of help.</p>\r\n\r\n<div class="quote" style="box-sizing: border-box; max-width: 100%; margin-left: 60px; margin-right: 60px; margin-bottom: 20px; padding: 0px; clear: right; border-left: 1px solid rgb(195, 195, 195); background: url(">\r\n<blockquote>\r\n<p><strong>Can I go to church if I don&rsquo;t believe in God/sceptical/don&rsquo;t know what I believe?</strong></p>\r\n</blockquote>\r\n</div>\r\n\r\n<p>Yes of course you can! Though when you&rsquo;re there you might find it more comfortable to sing along or even to join in the prayers as you won&rsquo;t feel quite so isolated as you will if you don&rsquo;t involve yourself.</p>\r\n\r\n<p>You can always ask to speak to the minister or priest during the week to discuss what believing means.</p>\r\n</div>', 'carol Mathews', '2017-02-25 21:00:00', 2, 0, 1, '2017-02-26 07:37:39', '2017-02-27 08:59:46', NULL);

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
(3, 'jeff', 'jean@gmail.com', 'fasdfasd', 'wow great content', 2, 0, 1, '2017-02-26 07:38:22', '2017-02-26 07:39:42', NULL);

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
(2, 'Help improve the livelihood', 'assets/uploads/images/970350477.jpg', 'Don’t let all the potential of Africa’s girls and boys go to waste. Just because they were born into hunger and poverty, doesn’t mean they can’t have a bright future. Together, we can empower African families to fight hunger and end poverty for this generation and beyond. When you donate money to Africa programs that fight hunger, you support our lifesaving work. Thank you for your generous support.', '<p><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/donate.jpg" style="height:326px; width:555px" /></p>\r\n\r\n<p><strong><u>MPESA</u></strong></p>\r\n\r\n<ol>\r\n	<li>Paybill 236782</li>\r\n	<li>accNo : 908fasd90</li>\r\n</ol>\r\n\r\n<p><strong><u>BANK</u></strong></p>\r\n\r\n<ol>\r\n	<li>accNo: &nbsp;8908fasd</li>\r\n	<li>accName: ackstmonica</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 1, '2017-02-26 07:28:39', '2017-02-27 08:25:46', NULL);

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
(1, 'New event title', 'assets/uploads/images/860080295.jpg', 'brief info on the event', '<p>event content comes here.</p>', '2017-03-10 21:00:00', 'kariadusi', 3, 1, '2017-02-24 12:09:29', '2017-02-27 09:08:55', NULL),
(2, 'wherevet title', 'assets/uploads/images/218831380.jpg', 'Brief dsacritpion', '<p>breif descriptionss</p>', '2017-02-27 21:00:00', 'kilimanjaro estate', 1, 1, '2017-02-24 12:23:05', '2017-02-27 09:08:35', NULL);

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
(3, 'fjas', 'fjlkds', 'fjdklf', 'jdfklsafjdl@gmail.com', 1, '2017-02-26 07:42:03', '2017-02-26 07:42:03', NULL);

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
(17, '2017_02_26_051211_create_contacts_table', 3);

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
(2, 'God love us all', 'assets/uploads/images/548421223.jpg', 'The Bible says that we overcame our in life through Christ, and by the “words of our testimony.” So take a few minutes and tell the world how God is building a better story in your life!', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=qVXjlNkWZNY', 'http://www.oudesporen.nl/Download/HB079.pdf', '2017-02-19 21:00:00', 1, '2017-02-26 07:15:32', '2017-02-27 08:04:00', NULL);

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
(1, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>7:00am&mdash;Hair and makeup starts</li>\r\n	<li>8:30am&mdash;Vendors arrive/Setup starts</li>\r\n	<li>9:00am&mdash;First look and couple&rsquo;s portraits</li>\r\n	<li>9:30am&mdash;Family pictures</li>\r\n	<li>9:30am&mdash;Guests begin to arrive</li>\r\n	<li>10:00am&mdash;Invite time</li>\r\n	<li>10:15 am&mdash;Ceremony starts</li>\r\n	<li>10:45am&mdash;Ceremony concludes</li>\r\n	<li>10:45am&mdash;Cocktail &ldquo;hour&rdquo; starts/Additional family photos</li>\r\n	<li>11:30am&mdash;Brunch starts</li>\r\n	<li>12:15pm&mdash;Toasts</li>\r\n	<li>1:00pm&mdash;First dance</li>\r\n	<li>1:30pm&mdash;Cake cutting/Dessert</li>\r\n	<li>2:45pm&mdash;Couple departs</li>\r\n	<li>3:00pm&mdash;Guests depart</li>\r\n	<li>3:00pm&mdash;Breakdown commences</li>\r\n	<li>4:00pm&mdash;All vendors out</li>\r\n</ul>', 1, 1, 1, '2017-02-26 06:46:23', '2017-02-27 08:32:41', NULL),
(2, '<p>procession follows</p>\r\n\r\n<p><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/image-263x165.jpg" style="height:165px; width:263px" /></p>\r\n\r\n<ul>\r\n	<li>7:00am&mdash;Hair and makeup starts</li>\r\n	<li>8:30am&mdash;Vendors arrive/Setup starts</li>\r\n	<li>9:00am&mdash;First look and couple&rsquo;s portraits</li>\r\n	<li>9:30am&mdash;Family pictures</li>\r\n	<li>9:30am&mdash;Guests begin to arrive</li>\r\n	<li>10:00am&mdash;Invite time</li>\r\n	<li>10:15 am&mdash;Ceremony starts</li>\r\n	<li>10:45am&mdash;Ceremony concludes</li>\r\n	<li>10:45am&mdash;Cocktail &ldquo;hour&rdquo; starts/Additional family photos</li>\r\n	<li>11:30am&mdash;Brunch starts</li>\r\n	<li>12:15pm&mdash;Toasts</li>\r\n	<li>1:00pm&mdash;First dance</li>\r\n	<li>1:30pm&mdash;Cake cutting/Dessert</li>\r\n	<li>2:45pm&mdash;Couple departs</li>\r\n	<li>3:00pm&mdash;Guests depart</li>\r\n	<li>3:00pm&mdash;Breakdown commences</li>\r\n	<li>4:00pm&mdash;All vendors out</li>\r\n</ul>', 1, 2, 1, '2017-02-26 07:50:32', '2017-02-27 08:39:10', NULL);

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
(1, 'confirmation service', 'my theme description', '2017-03-01 21:00:00', 6, 1, '2017-02-24 00:01:33', '2017-02-26 09:42:09', NULL),
(2, 'theme title comes here', 'wow how you doing.', '2017-02-27 21:00:00', 6, 0, '2017-02-26 08:55:47', '2017-02-26 09:36:36', NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
