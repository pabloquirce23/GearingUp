-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 10:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ryoou4v`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `about_img` text NOT NULL,
  `about_texts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `about_img`, `about_texts`) VALUES
(1, 'slider3.jpg8772.jpg', '<p>some texts</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `email`, `password`) VALUES
(1, 'ryou4project@hotmail.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `character_name` text NOT NULL,
  `character_kanji_name` text NOT NULL,
  `character_romaji_name` text NOT NULL,
  `character_alias_name` text NOT NULL,
  `character_img` text NOT NULL,
  `character_category` text NOT NULL,
  `quote` text NOT NULL,
  `short_desc` text NOT NULL,
  `design_decs` text NOT NULL,
  `personality_decs` text NOT NULL,
  `story_decs` text NOT NULL,
  `abillities_decs` text NOT NULL,
  `music_decs` text NOT NULL,
  `quotes_decs` text NOT NULL,
  `allusions_decs` text NOT NULL,
  `trivia_decs` text NOT NULL,
  `extreme_links_decs` text NOT NULL,
  `notes_decs` text NOT NULL,
  `references_decs` text NOT NULL,
  `character_race` text NOT NULL,
  `character_gender` text NOT NULL,
  `character_height` text NOT NULL,
  `character_age` text NOT NULL,
  `character_weight` text NOT NULL,
  `character_blood_type` text NOT NULL,
  `character_origin` text NOT NULL,
  `character_birthday` text NOT NULL,
  `character_eye_color` text NOT NULL,
  `character_hobbies` text NOT NULL,
  `character_likes` text NOT NULL,
  `character_dislike` text NOT NULL,
  `character_occupation` text NOT NULL,
  `character_affiliation` text NOT NULL,
  `character_weapons` text NOT NULL,
  `character_title` text NOT NULL,
  `character_type_easyToUse` text NOT NULL,
  `character_voice_actor_japaness` text NOT NULL,
  `character_voice_actor_english` text NOT NULL,
  `character_voice_actor_korean` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `created_at`, `character_name`, `character_kanji_name`, `character_romaji_name`, `character_alias_name`, `character_img`, `character_category`, `quote`, `short_desc`, `design_decs`, `personality_decs`, `story_decs`, `abillities_decs`, `music_decs`, `quotes_decs`, `allusions_decs`, `trivia_decs`, `extreme_links_decs`, `notes_decs`, `references_decs`, `character_race`, `character_gender`, `character_height`, `character_age`, `character_weight`, `character_blood_type`, `character_origin`, `character_birthday`, `character_eye_color`, `character_hobbies`, `character_likes`, `character_dislike`, `character_occupation`, `character_affiliation`, `character_weapons`, `character_title`, `character_type_easyToUse`, `character_voice_actor_japaness`, `character_voice_actor_english`, `character_voice_actor_korean`) VALUES
(7, '2022-05-23 07:39:32', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '2022-05-23 07:40:29', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '2022-05-23 07:43:55', '9097y24xcghvkjkl', '', '', '', '', '0', '', '', '<p>jyrrryyy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a id=\"yyuu\" name=\"yyuu\"></a></p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '2022-05-23 07:45:42', '9097y24xcghvkjkl', '', '', '', '', '0', '', '', '<p>jyrrryyy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a id=\"yyuu\" name=\"yyuu\"></a></p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '2022-05-23 07:48:21', '9097y24xcghvkjkl', '', '', '', '', '0', '', '', '<p>jyrrryyy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a id=\"yyuu\" name=\"yyuu\"></a></p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '2022-05-23 16:04:02', 'rereeee', 'erewre', 'rewrewr', 'erewe', '142647581_2859212844354944_8516029318959371795_n.jpg83905.jpg', '0', 'erewe', '<p>erewe</p>\r\n', '<p>erewe</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '2022-05-23 16:38:06', 'onu', 'oni', 'oni', 'oni', 'Roy-Mustang-From-Fullmetal-Alchemist-Brotherhood.jpg41908.jpg', 'test', 'We will walk together, throw the stone. save this notice, we are not alone.', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.&nbsp; is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>Faust is a recurring character in the Guilty Gear series. He is a medical genius gone insane and sane once more, and is one of the most unorthodox characters in&nbsp;<a href=\"http://localhost/dynamic_project/ryoou4v/character.php?v=16\">the series</a>. Having discarded his old identity, Faust is an itinerant, miraculous healer dedicated to saving everyone in order to atone for his sins.</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>Quotes Description</p>\r\n\r\n<p><a href=\"javascript:void(\'Cut\')\" onclick=\"CKEDITOR.tools.callFunction(556,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Copy\')\" onclick=\"CKEDITOR.tools.callFunction(559,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste\')\" onclick=\"CKEDITOR.tools.callFunction(562,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste as plain text\')\" onclick=\"CKEDITOR.tools.callFunction(565,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste from Word\')\" onclick=\"CKEDITOR.tools.callFunction(568,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Undo\')\" onclick=\"CKEDITOR.tools.callFunction(571,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Redo\')\" onclick=\"CKEDITOR.tools.callFunction(574,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Spell Check As You Type\')\" onclick=\"CKEDITOR.tools.callFunction(577,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Link\')\" onclick=\"CKEDITOR.tools.callFunction(580,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Unlink\')\" onclick=\"CKEDITOR.tools.callFunction(583,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Anchor\')\" onclick=\"CKEDITOR.tools.callFunction(586,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Image\')\" onclick=\"CKEDITOR.tools.callFunction(589,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Table\')\" onclick=\"CKEDITOR.tools.callFunction(592,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert Horizontal Line\')\" onclick=\"CKEDITOR.tools.callFunction(595,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert Special Character\')\" onclick=\"CKEDITOR.tools.callFunction(598,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Maximize\')\" onclick=\"CKEDITOR.tools.callFunction(601,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Source\')\" onclick=\"CKEDITOR.tools.callFunction(604,this);return false;\">&nbsp;Source</a><a href=\"javascript:void(\'Bold\')\" onclick=\"CKEDITOR.tools.callFunction(607,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Italic\')\" onclick=\"CKEDITOR.tools.callFunction(610,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Strikethrough\')\" onclick=\"CKEDITOR.tools.callFunction(613,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Remove Format\')\" onclick=\"CKEDITOR.tools.callFunction(616,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert/Remove Numbered List\')\" onclick=\"CKEDITOR.tools.callFunction(619,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert/Remove Bulleted List\')\" onclick=\"CKEDITOR.tools.callFunction(622,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Decrease Indent\')\" onclick=\"CKEDITOR.tools.callFunction(625,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Increase Indent\')\" onclick=\"CKEDITOR.tools.callFunction(628,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Block Quote\')\" onclick=\"CKEDITOR.tools.callFunction(631,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Formatting Styles\')\" onclick=\"CKEDITOR.tools.callFunction(632,this);return false;\">Styles</a><a href=\"javascript:void(\'Paragraph Format\')\" onclick=\"CKEDITOR.tools.callFunction(635,this);return false;\">Normal</a><a href=\"javascript:void(\'About CKEditor 4\')\" onclick=\"CKEDITOR.tools.callFunction(640,this);return false;\">&nbsp;</a></p>\r\n', '<p>Allusions</p>\r\n', '<p>Trivia</p>\r\n', '<p>Extreme Links</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>Notes</p>\r\n\r\n<p><a href=\"javascript:void(\'Cut\')\" onclick=\"CKEDITOR.tools.callFunction(924,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Copy\')\" onclick=\"CKEDITOR.tools.callFunction(927,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste\')\" onclick=\"CKEDITOR.tools.callFunction(930,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste as plain text\')\" onclick=\"CKEDITOR.tools.callFunction(933,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Paste from Word\')\" onclick=\"CKEDITOR.tools.callFunction(936,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Undo\')\" onclick=\"CKEDITOR.tools.callFunction(939,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Redo\')\" onclick=\"CKEDITOR.tools.callFunction(942,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Spell Check As You Type\')\" onclick=\"CKEDITOR.tools.callFunction(945,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Link\')\" onclick=\"CKEDITOR.tools.callFunction(948,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Unlink\')\" onclick=\"CKEDITOR.tools.callFunction(951,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Anchor\')\" onclick=\"CKEDITOR.tools.callFunction(954,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Image\')\" onclick=\"CKEDITOR.tools.callFunction(957,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Table\')\" onclick=\"CKEDITOR.tools.callFunction(960,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert Horizontal Line\')\" onclick=\"CKEDITOR.tools.callFunction(963,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert Special Character\')\" onclick=\"CKEDITOR.tools.callFunction(966,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Maximize\')\" onclick=\"CKEDITOR.tools.callFunction(969,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Source\')\" onclick=\"CKEDITOR.tools.callFunction(972,this);return false;\">&nbsp;Source</a><a href=\"javascript:void(\'Bold\')\" onclick=\"CKEDITOR.tools.callFunction(975,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Italic\')\" onclick=\"CKEDITOR.tools.callFunction(978,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Strikethrough\')\" onclick=\"CKEDITOR.tools.callFunction(981,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Remove Format\')\" onclick=\"CKEDITOR.tools.callFunction(984,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert/Remove Numbered List\')\" onclick=\"CKEDITOR.tools.callFunction(987,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Insert/Remove Bulleted List\')\" onclick=\"CKEDITOR.tools.callFunction(990,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Decrease Indent\')\" onclick=\"CKEDITOR.tools.callFunction(993,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Increase Indent\')\" onclick=\"CKEDITOR.tools.callFunction(996,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Block Quote\')\" onclick=\"CKEDITOR.tools.callFunction(999,this);return false;\">&nbsp;</a><a href=\"javascript:void(\'Formatting Styles\')\" onclick=\"CKEDITOR.tools.callFunction(1000,this);return false;\">Styles</a><a href=\"javascript:void(\'Paragraph Format\')\" onclick=\"CKEDITOR.tools.callFunction(1003,this);return false;\">Format</a><a href=\"javascript:void(\'About CKEditor 4\')\" onclick=\"CKEDITOR.tools.callFunction(1008,this);return false;\">&nbsp;</a></p>\r\n', '<p>References</p>\r\n', ' human', 'male', '282 cm[2] (9\'4\"[3] or 9\'3\"[4])', '20', ' 55 kg[2] (121 lbs.)[3]', 'unknown', 'unknown', 'unknown', 'unknown', 'Coding, traveling', 'Brand', 'Girl', ' Unlicensed Doctors Union', 'Scalpel', ' Bizarre Underground Doctor (奇妙な闇医者, Kimyōna Yami Isha?)', ' Bizarre Underground Doctor (奇妙な闇医者, Kimyōna Yami Isha?)', ' Unique (★★☆☆☆)', 'dsg', 'dsgdsgds', 'dsgdsg');

-- --------------------------------------------------------

--
-- Table structure for table `character_category`
--

CREATE TABLE `character_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `character_category`
--

INSERT INTO `character_category` (`id`, `name`) VALUES
(1, 'getintouch.php'),
(4, 'test'),
(5, 'gjhggj'),
(6, 'landingPage');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `1st_slider_img` text NOT NULL,
  `2nd_slider_img` text NOT NULL,
  `2nd_slider_title` text NOT NULL,
  `2nd_slider_description` text NOT NULL,
  `3rd_slider_img` text NOT NULL,
  `3rd_slider_title` text NOT NULL,
  `3rd_slider_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `1st_slider_img`, `2nd_slider_img`, `2nd_slider_title`, `2nd_slider_description`, `3rd_slider_img`, `3rd_slider_title`, `3rd_slider_description`) VALUES
(1, 'slider2.jpg41417.jpg', 'slider3.jpg23910.jpg', '2nd slider', '<p>2nd slider description</p>\r\n', 'slider1.png34382.png', '3rd slider', '3rd slider description');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_category` text NOT NULL,
  `post_author` text NOT NULL,
  `post_description` text NOT NULL,
  `post_img` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_category`, `post_author`, `post_description`, `post_img`, `created_at`) VALUES
(1, 'test title', 'value one', 'anik', '<p>if(isset($_GET[&#39;delete&#39;])){</p>\r\n\r\n<p>&nbsp; &nbsp; $delete_id= $_GET[&#39;delete&#39;];</p>\r\n\r\n<p>&nbsp; &nbsp; $sql= &quot;delete from characters where id=&#39;$delete_id&#39;&quot;;</p>\r\n\r\n<p>&nbsp; &nbsp; if(mysqli_query($conn, $sql)){</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; header(&#39;location: ../all_character.php?action=deleted&#39;);</p>\r\n\r\n<p>&nbsp; &nbsp; }else{</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; header(&#39;location: ../all_character.php?action=n_deleted&#39;);</p>\r\n\r\n<p>&nbsp; &nbsp; }</p>\r\n\r\n<p>}</p>\r\n\r\n<p>if(isset($_GET[&#39;delete&#39;])){</p>\r\n\r\n<p>&nbsp; &nbsp; $delete_id= $_GET[&#39;delete&#39;];</p>\r\n\r\n<p>&nbsp; &nbsp; $sql= &quot;delete from characters where id=&#39;$delete_id&#39;&quot;;</p>\r\n\r\n<p>&nbsp; &nbsp; if(mysqli_query($conn, $sql)){</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; header(&#39;location: ../all_character.php?action=deleted&#39;);</p>\r\n\r\n<p>&nbsp; &nbsp; }else{</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; header(&#39;location: ../all_character.php?action=n_deleted&#39;);</p>\r\n\r\n<p>&nbsp; &nbsp; }</p>\r\n\r\n<p>}</p>\r\n', '198895022_804744103743982_429820442938883460_n.jpg99117.jpg', '0000-00-00 00:00:00'),
(3, 'cscxxz', 'style.css', 'dsds', 'Add captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\nAdd captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We hide them initially with .d-none and bring them back on medium-sized devices with .d-md-block.\r\n\r\n', '147818463_242116924078724_8029669862092231855_o.jpg58330.jpg', '0000-00-00 00:00:00'),
(4, 'wdasdasd', 'sdsadsadsdsdssd', 'sdsds', 'sdsds', 'sdsdsd', '2022-05-23 18:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `name`) VALUES
(2, 'style.css');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `brand_name` text NOT NULL,
  `logo` text NOT NULL,
  `shrot_description` text NOT NULL,
  `facebook_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `linkidin_link` text NOT NULL,
  `google_plug_link` text NOT NULL,
  `fav_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `brand_name`, `logo`, `shrot_description`, `facebook_link`, `twitter_link`, `linkidin_link`, `google_plug_link`, `fav_icon`) VALUES
(1, 'wikkis', 'wikkisdsdsds', 'screencapture-fi-xampp-htdocs-dynamic-project-bharatbageja372-index-html-2022-04-07-22_15_40.png37599.png', '<p>somme texxtssas</p>\r\n', 'www.facebook.com', 'www.twitter.com', 'www.Linkedin.com', 'www.google.com', 'autodraw 4_21_2022.png79359.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(2, 'mahfujulalam.anik@gmail.com'),
(3, 'mahfujulalam.anik@gmail.com'),
(4, 'admin@gmail.com'),
(5, 'admin@gmail.com'),
(6, 'mahfujulalam.anik@gmail.com'),
(7, 'mahfujulalam.anik@gmail.com'),
(8, 'mahfujulalam.anik@gmail.com'),
(9, 'mahfujulalam.anik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `theme_settings`
--

CREATE TABLE `theme_settings` (
  `id` int(11) NOT NULL,
  `theme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme_settings`
--

INSERT INTO `theme_settings` (`id`, `theme`) VALUES
(1, 'dark');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `confirm_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `confirm_password`) VALUES
(2, 'admin', 'mahfujulalam.anik@gmail.com', 'ewsdsdsd'),
(3, 'demo', 'mahfujulalam.anik@gmail.com', 'sdsdsds'),
(4, 'admin', 'mahfujulalam.anik@gmail.com', 'asdfg'),
(5, 'anik', 'mahfujulalam.anik@gmail.com', 'd4254fc392043e9cd553887f958bbe3e99f4f2f0'),
(6, 'anik', 'mahfujulalam.anik@gmail.com', 'd4254fc392043e9cd553887f958bbe3e99f4f2f0'),
(7, 'anik', 'mahfujulalam.anik@gmail.com', '54982f4557826931c9fe5cbd0ca1fc8d0d518c16'),
(8, 'lightcivitas@gmail.com', 'mahfujulalam.anik@gmail.com', '8930bb656bdaf586bf3b5a4d3bb7b92ded83f21e'),
(9, 'admin', 'mahfujulalam.anik@gmail.com', '8d4e467cbf5855f15573842412d6f560ba6efc9a'),
(10, 'admin', 'mahfujulalam.anik@gmail.com', '8d4e467cbf5855f15573842412d6f560ba6efc9a'),
(11, 'admin', 'mahfujulalam.anik@gmail.com', '8d4e467cbf5855f15573842412d6f560ba6efc9a'),
(12, 'admin', 'mahfujulalam.anik@gmail.com', '8d4e467cbf5855f15573842412d6f560ba6efc9a'),
(13, 'admin', 'mahfujulalam.anik@gmail.com', '2683fc24071169ae66dfc3980e5336e54c04c666'),
(14, 'admin', 'mahfujulalam.anik@gmail.com', '2683fc24071169ae66dfc3980e5336e54c04c666'),
(15, 'admin', 'mahfujulalam.anik@gmail.com', 'd2a8584699e5733d5061d666f001a45808870fbc'),
(16, 'admin', 'mahfujulalam.anik@gmail.com', 'a0f1490a20d0211c997b44bc357e1972deab8ae3'),
(17, 'admin', 'mahfujulalam.anik@gmail.com', '12975910c3e6352b5b2bdee81fa2fc4653a5bd59'),
(18, 'anikka', 'anikka@gmail.com', 'd4254fc392043e9cd553887f958bbe3e99f4f2f0'),
(19, 'admin', 'mahfujulalam.anik@gmail.com', 'bf41e4fd792164b95b76fc9fd6f0ffb408898100'),
(20, 'admin', 'admin@gmail.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `character_category`
--
ALTER TABLE `character_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_settings`
--
ALTER TABLE `theme_settings`
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
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `character_category`
--
ALTER TABLE `character_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `theme_settings`
--
ALTER TABLE `theme_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
