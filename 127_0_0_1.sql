-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-06-07 12:52
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `reset`
--
CREATE DATABASE IF NOT EXISTS `reset` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reset`;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_auth`
--

CREATE TABLE `g5_auth` (
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `au_menu` varchar(50) NOT NULL DEFAULT '',
  `au_auth` set('r','w','d') NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_autosave`
--

CREATE TABLE `g5_autosave` (
  `as_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL,
  `as_uid` bigint(20) UNSIGNED NOT NULL,
  `as_subject` varchar(255) NOT NULL,
  `as_content` text NOT NULL,
  `as_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board`
--

CREATE TABLE `g5_board` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `bo_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `bo_admin` varchar(255) NOT NULL DEFAULT '',
  `bo_list_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_read_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_write_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_reply_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_comment_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_upload_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_download_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_html_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_link_level` tinyint(4) NOT NULL DEFAULT 0,
  `bo_count_delete` tinyint(4) NOT NULL DEFAULT 0,
  `bo_count_modify` tinyint(4) NOT NULL DEFAULT 0,
  `bo_read_point` int(11) NOT NULL DEFAULT 0,
  `bo_write_point` int(11) NOT NULL DEFAULT 0,
  `bo_comment_point` int(11) NOT NULL DEFAULT 0,
  `bo_download_point` int(11) NOT NULL DEFAULT 0,
  `bo_use_category` tinyint(4) NOT NULL DEFAULT 0,
  `bo_category_list` text NOT NULL,
  `bo_use_sideview` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_file_content` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_secret` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_dhtml_editor` tinyint(4) NOT NULL DEFAULT 0,
  `bo_select_editor` varchar(50) NOT NULL DEFAULT '',
  `bo_use_rss_view` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_good` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_nogood` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_name` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_signature` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_ip_view` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_list_view` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_list_file` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_list_content` tinyint(4) NOT NULL DEFAULT 0,
  `bo_table_width` int(11) NOT NULL DEFAULT 0,
  `bo_subject_len` int(11) NOT NULL DEFAULT 0,
  `bo_mobile_subject_len` int(11) NOT NULL DEFAULT 0,
  `bo_page_rows` int(11) NOT NULL DEFAULT 0,
  `bo_mobile_page_rows` int(11) NOT NULL DEFAULT 0,
  `bo_new` int(11) NOT NULL DEFAULT 0,
  `bo_hot` int(11) NOT NULL DEFAULT 0,
  `bo_image_width` int(11) NOT NULL DEFAULT 0,
  `bo_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_include_head` varchar(255) NOT NULL DEFAULT '',
  `bo_include_tail` varchar(255) NOT NULL DEFAULT '',
  `bo_content_head` text NOT NULL,
  `bo_mobile_content_head` text NOT NULL,
  `bo_content_tail` text NOT NULL,
  `bo_mobile_content_tail` text NOT NULL,
  `bo_insert_content` text NOT NULL,
  `bo_gallery_cols` int(11) NOT NULL DEFAULT 0,
  `bo_gallery_width` int(11) NOT NULL DEFAULT 0,
  `bo_gallery_height` int(11) NOT NULL DEFAULT 0,
  `bo_mobile_gallery_width` int(11) NOT NULL DEFAULT 0,
  `bo_mobile_gallery_height` int(11) NOT NULL DEFAULT 0,
  `bo_upload_size` int(11) NOT NULL DEFAULT 0,
  `bo_reply_order` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_search` tinyint(4) NOT NULL DEFAULT 0,
  `bo_order` int(11) NOT NULL DEFAULT 0,
  `bo_count_write` int(11) NOT NULL DEFAULT 0,
  `bo_count_comment` int(11) NOT NULL DEFAULT 0,
  `bo_write_min` int(11) NOT NULL DEFAULT 0,
  `bo_write_max` int(11) NOT NULL DEFAULT 0,
  `bo_comment_min` int(11) NOT NULL DEFAULT 0,
  `bo_comment_max` int(11) NOT NULL DEFAULT 0,
  `bo_notice` text NOT NULL,
  `bo_upload_count` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_email` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_cert` enum('','cert','adult','hp-cert','hp-adult') NOT NULL DEFAULT '',
  `bo_use_sns` tinyint(4) NOT NULL DEFAULT 0,
  `bo_use_captcha` tinyint(4) NOT NULL DEFAULT 0,
  `bo_sort_field` varchar(255) NOT NULL DEFAULT '',
  `bo_1_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_2_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_3_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_4_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_5_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_6_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_7_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_8_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_9_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_10_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_1` varchar(255) NOT NULL DEFAULT '',
  `bo_2` varchar(255) NOT NULL DEFAULT '',
  `bo_3` varchar(255) NOT NULL DEFAULT '',
  `bo_4` varchar(255) NOT NULL DEFAULT '',
  `bo_5` varchar(255) NOT NULL DEFAULT '',
  `bo_6` varchar(255) NOT NULL DEFAULT '',
  `bo_7` varchar(255) NOT NULL DEFAULT '',
  `bo_8` varchar(255) NOT NULL DEFAULT '',
  `bo_9` varchar(255) NOT NULL DEFAULT '',
  `bo_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_board`
--

INSERT INTO `g5_board` (`bo_table`, `gr_id`, `bo_subject`, `bo_mobile_subject`, `bo_device`, `bo_admin`, `bo_list_level`, `bo_read_level`, `bo_write_level`, `bo_reply_level`, `bo_comment_level`, `bo_upload_level`, `bo_download_level`, `bo_html_level`, `bo_link_level`, `bo_count_delete`, `bo_count_modify`, `bo_read_point`, `bo_write_point`, `bo_comment_point`, `bo_download_point`, `bo_use_category`, `bo_category_list`, `bo_use_sideview`, `bo_use_file_content`, `bo_use_secret`, `bo_use_dhtml_editor`, `bo_select_editor`, `bo_use_rss_view`, `bo_use_good`, `bo_use_nogood`, `bo_use_name`, `bo_use_signature`, `bo_use_ip_view`, `bo_use_list_view`, `bo_use_list_file`, `bo_use_list_content`, `bo_table_width`, `bo_subject_len`, `bo_mobile_subject_len`, `bo_page_rows`, `bo_mobile_page_rows`, `bo_new`, `bo_hot`, `bo_image_width`, `bo_skin`, `bo_mobile_skin`, `bo_include_head`, `bo_include_tail`, `bo_content_head`, `bo_mobile_content_head`, `bo_content_tail`, `bo_mobile_content_tail`, `bo_insert_content`, `bo_gallery_cols`, `bo_gallery_width`, `bo_gallery_height`, `bo_mobile_gallery_width`, `bo_mobile_gallery_height`, `bo_upload_size`, `bo_reply_order`, `bo_use_search`, `bo_order`, `bo_count_write`, `bo_count_comment`, `bo_write_min`, `bo_write_max`, `bo_comment_min`, `bo_comment_max`, `bo_notice`, `bo_upload_count`, `bo_use_email`, `bo_use_cert`, `bo_use_sns`, `bo_use_captcha`, `bo_sort_field`, `bo_1_subj`, `bo_2_subj`, `bo_3_subj`, `bo_4_subj`, `bo_5_subj`, `bo_6_subj`, `bo_7_subj`, `bo_8_subj`, `bo_9_subj`, `bo_10_subj`, `bo_1`, `bo_2`, `bo_3`, `bo_4`, `bo_5`, `bo_6`, `bo_7`, `bo_8`, `bo_9`, `bo_10`) VALUES
('before_after', 'community', '전후사진', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'reset_star', 'gallery', '_head.php', '_tail.php', '', '', '', '', '', 4, 300, 300, 125, 100, 10485760, 1, 0, 0, 1, 0, 0, 0, 0, 0, '', 1, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('event', 'community', '이벤트', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 12, 15, 12, 100, 600, 'gallery', 'gallery', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 0, 0, 13, 0, 0, 0, 0, 0, '4,2', 1, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('fast_consulting', 'community', '빠른상담', '', 'both', '', 10, 10, 1, 1, 10, 1, 10, 10, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 600, 'basic', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('free', 'community', '자유게시판', '', 'both', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 835, 'basic', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gallery', 'community', '미디어/보도자료', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, -1, 5, 1, -20, 0, '', 0, 0, 0, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 835, 'gallery', 'gallery', '_head.php', '_tail.php', '', '', '', '', '', 4, 300, 300, 125, 100, 1048576, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 2, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('notice', 'community', '공지사항', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 15, 15, 24, 100, 835, 'basic', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 10485760, 1, 0, 0, 8, 0, 0, 0, 0, 0, '', 1, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('qa', 'community', '시술 후 주의사항', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, -1, 5, 1, -20, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 10, 10, 24, 100, 835, 'basic', 'basic', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 150, 125, 100, 1048576, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('review', 'community', '수기후기', '', 'both', '', 1, 1, 10, 10, 10, 10, 10, 10, 10, 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 60, 30, 12, 12, 24, 100, 600, 'reset_star', 'gallery', '_head.php', '_tail.php', '', '', '', '', '', 4, 202, 360, 125, 100, 1048576, 1, 0, 0, 1, 0, 0, 0, 0, 0, '', 1, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_file`
--

CREATE TABLE `g5_board_file` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT 0,
  `bf_no` int(11) NOT NULL DEFAULT 0,
  `bf_source` varchar(255) NOT NULL DEFAULT '',
  `bf_file` varchar(255) NOT NULL DEFAULT '',
  `bf_download` int(11) NOT NULL,
  `bf_content` text NOT NULL,
  `bf_fileurl` varchar(255) NOT NULL DEFAULT '',
  `bf_thumburl` varchar(255) NOT NULL DEFAULT '',
  `bf_storage` varchar(50) NOT NULL DEFAULT '',
  `bf_filesize` int(11) NOT NULL DEFAULT 0,
  `bf_width` int(11) NOT NULL DEFAULT 0,
  `bf_height` smallint(6) NOT NULL DEFAULT 0,
  `bf_type` tinyint(4) NOT NULL DEFAULT 0,
  `bf_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_board_file`
--

INSERT INTO `g5_board_file` (`bo_table`, `wr_id`, `bf_no`, `bf_source`, `bf_file`, `bf_download`, `bf_content`, `bf_fileurl`, `bf_thumburl`, `bf_storage`, `bf_filesize`, `bf_width`, `bf_height`, `bf_type`, `bf_datetime`) VALUES
('before_after', 1, 0, '20200803232529_전후6.jpg', 'be40cd0cd01209b4a21423f85fe24611_WLqDoC8G_7ffcbe418cbf7c8efd13334963bb9791a290ff31.jpg', 0, '', '', '', '', 1162278, 1772, 1417, 2, '2024-06-07 17:00:06'),
('event', 1, 0, 'spices-4185324.jpg', 'be40cd0cd01209b4a21423f85fe24611_5TqYMaQ0_087ae8b0de164af17d98cf920d1539d28bd0d229.jpg', 0, '', '', '', '', 11340572, 5987, 3981, 2, '2024-06-07 14:54:12'),
('event', 2, 0, 'mushrooms-8618283.jpg', 'be40cd0cd01209b4a21423f85fe24611_Nnq7g4DL_0a83b735aa9a77a2eab3a1e749e02b145ac1b9a7.jpg', 0, '', '', '', '', 3266610, 6016, 3655, 2, '2024-06-07 15:08:09'),
('event', 3, 0, 'muffin-8139065.jpg', 'be40cd0cd01209b4a21423f85fe24611_DiQBRj8C_1ee5d3b0c2111b49843a5d51858c84154c7232cc.jpg', 0, '', '', '', '', 3654666, 4500, 3000, 2, '2024-06-07 15:17:10'),
('event', 4, 0, 'lotus-1205631.jpg', 'be40cd0cd01209b4a21423f85fe24611_TRF61nIi_ef3262591ebad5adc0969f41d2cc45d32e44377b.jpg', 0, '', '', '', '', 4795963, 5184, 3456, 2, '2024-06-07 15:19:31'),
('event', 5, 0, 'woman-6569323.jpg', 'be40cd0cd01209b4a21423f85fe24611_yA16VWzg_6bf0202c79c02d9e36c44c23e1e10873481d422b.jpg', 0, '', '', '', '', 6536979, 10000, 6469, 2, '2024-06-07 15:28:55'),
('event', 6, 0, 'town-6947538.jpg', 'be40cd0cd01209b4a21423f85fe24611_Cg7RWyZN_ee17bc0e5d96eaac34135788c71e2c666100f5ee.jpg', 0, '', '', '', '', 4210748, 7181, 4611, 2, '2024-06-07 15:33:59'),
('event', 7, 0, 'houses-6527892.jpg', 'be40cd0cd01209b4a21423f85fe24611_b9lfIncR_f824b6d3eaa8d61e466a08ddd6b9d203d8e93d07.jpg', 0, '', '', '', '', 3173394, 5472, 3420, 2, '2024-06-07 15:34:27'),
('event', 9, 0, 'city-6238228.jpg', 'be40cd0cd01209b4a21423f85fe24611_9F8LyMKU_c804487f5086d0f03a8ca71e3371006fa15ac1db.jpg', 0, '', '', '', '', 3208335, 6048, 4024, 2, '2024-06-07 15:35:53'),
('event', 10, 0, 'arboretum-2852644.jpg', 'be40cd0cd01209b4a21423f85fe24611_PaYqMRUv_14fc6d149a41fe05f29a88de985c9357d63ebceb.jpg', 0, '', '', '', '', 4058856, 4990, 3216, 2, '2024-06-07 15:36:20'),
('event', 12, 0, 'astronomical-observatory-2464182.jpg', 'be40cd0cd01209b4a21423f85fe24611_tSDbFugp_ba899550060fc12f3055751271f0643ed53ee0af.jpg', 0, '', '', '', '', 3124919, 5184, 3456, 2, '2024-06-07 15:37:22'),
('event', 13, 0, 'pic-du-midi-6604343.jpg', 'be40cd0cd01209b4a21423f85fe24611_Pwn3XDRu_13591f417cd1b297eb8e4d3a54392daf796c23e5.jpg', 0, '', '', '', '', 3716550, 6016, 4000, 2, '2024-06-07 15:37:51'),
('notice', 10, 0, 'mayfly-7945201.jpg', 'be40cd0cd01209b4a21423f85fe24611_P5AF0Bre_2cffa342626574b63977ca640ca1c7f17443bda0.jpg', 0, '', '', '', '', 3827034, 3772, 2515, 2, '2024-06-07 11:38:53'),
('review', 1, 0, 'KakaoTalk_20240607_162241012.jpg', 'be40cd0cd01209b4a21423f85fe24611_9mrEtQGw_53996bf0caa33698a65f60f582b76ac55d63a838.jpg', 0, '', '', '', '', 933440, 4000, 3000, 2, '2024-06-07 16:24:38');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_good`
--

CREATE TABLE `g5_board_good` (
  `bg_id` int(11) NOT NULL,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bg_flag` varchar(255) NOT NULL DEFAULT '',
  `bg_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_board_new`
--

CREATE TABLE `g5_board_new` (
  `bn_id` int(11) NOT NULL,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT 0,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `bn_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_id` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_board_new`
--

INSERT INTO `g5_board_new` (`bn_id`, `bo_table`, `wr_id`, `wr_parent`, `bn_datetime`, `mb_id`) VALUES
(1, 'notice', 1, 1, '2024-06-05 17:30:16', 'admin'),
(2, 'notice', 2, 2, '2024-06-07 10:19:19', 'admin'),
(4, 'notice', 4, 4, '2024-06-07 10:34:52', 'admin'),
(5, 'notice', 5, 5, '2024-06-07 10:42:32', 'admin'),
(6, 'notice', 6, 6, '2024-06-07 10:51:24', 'admin'),
(8, 'notice', 8, 8, '2024-06-07 11:15:33', 'admin'),
(9, 'notice', 9, 9, '2024-06-07 11:38:03', 'admin'),
(10, 'notice', 10, 10, '2024-06-07 11:38:53', 'admin'),
(11, 'event', 1, 1, '2024-06-07 14:54:12', 'admin'),
(12, 'event', 2, 2, '2024-06-07 15:08:09', 'admin'),
(13, 'event', 3, 3, '2024-06-07 15:17:10', 'admin'),
(14, 'event', 4, 4, '2024-06-07 15:19:31', 'admin'),
(15, 'event', 5, 5, '2024-06-07 15:28:55', 'admin'),
(16, 'event', 6, 6, '2024-06-07 15:33:59', 'admin'),
(17, 'event', 7, 7, '2024-06-07 15:34:27', 'admin'),
(18, 'event', 8, 8, '2024-06-07 15:35:07', 'admin'),
(19, 'event', 9, 9, '2024-06-07 15:35:53', 'admin'),
(20, 'event', 10, 10, '2024-06-07 15:36:20', 'admin'),
(21, 'event', 11, 11, '2024-06-07 15:36:45', 'admin'),
(22, 'event', 12, 12, '2024-06-07 15:37:22', 'admin'),
(23, 'event', 13, 13, '2024-06-07 15:37:51', 'admin'),
(24, 'review', 1, 1, '2024-06-07 16:24:38', 'admin'),
(25, 'before_after', 1, 1, '2024-06-07 17:00:06', 'admin');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_cert_history`
--

CREATE TABLE `g5_cert_history` (
  `cr_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `cr_company` varchar(255) NOT NULL DEFAULT '',
  `cr_method` varchar(255) NOT NULL DEFAULT '',
  `cr_ip` varchar(255) NOT NULL DEFAULT '',
  `cr_date` date NOT NULL DEFAULT '0000-00-00',
  `cr_time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_config`
--

CREATE TABLE `g5_config` (
  `cf_id` int(11) NOT NULL,
  `cf_title` varchar(255) NOT NULL DEFAULT '',
  `cf_theme` varchar(100) NOT NULL DEFAULT '',
  `cf_admin` varchar(100) NOT NULL DEFAULT '',
  `cf_admin_email` varchar(100) NOT NULL DEFAULT '',
  `cf_admin_email_name` varchar(100) NOT NULL DEFAULT '',
  `cf_add_script` text NOT NULL,
  `cf_use_point` tinyint(4) NOT NULL DEFAULT 0,
  `cf_point_term` int(11) NOT NULL DEFAULT 0,
  `cf_use_copy_log` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_email_certify` tinyint(4) NOT NULL DEFAULT 0,
  `cf_login_point` int(11) NOT NULL DEFAULT 0,
  `cf_cut_name` tinyint(4) NOT NULL DEFAULT 0,
  `cf_nick_modify` int(11) NOT NULL DEFAULT 0,
  `cf_new_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_new_rows` int(11) NOT NULL DEFAULT 0,
  `cf_search_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_connect_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_faq_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_read_point` int(11) NOT NULL DEFAULT 0,
  `cf_write_point` int(11) NOT NULL DEFAULT 0,
  `cf_comment_point` int(11) NOT NULL DEFAULT 0,
  `cf_download_point` int(11) NOT NULL DEFAULT 0,
  `cf_write_pages` int(11) NOT NULL DEFAULT 0,
  `cf_mobile_pages` int(11) NOT NULL DEFAULT 0,
  `cf_link_target` varchar(50) NOT NULL DEFAULT '',
  `cf_bbs_rewrite` tinyint(4) NOT NULL DEFAULT 0,
  `cf_delay_sec` int(11) NOT NULL DEFAULT 0,
  `cf_filter` text NOT NULL,
  `cf_possible_ip` text NOT NULL,
  `cf_intercept_ip` text NOT NULL,
  `cf_analytics` text NOT NULL,
  `cf_add_meta` text NOT NULL,
  `cf_syndi_token` varchar(255) NOT NULL,
  `cf_syndi_except` text NOT NULL,
  `cf_member_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_use_homepage` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_homepage` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_tel` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_tel` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_hp` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_hp` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_addr` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_addr` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_signature` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_signature` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_profile` tinyint(4) NOT NULL DEFAULT 0,
  `cf_req_profile` tinyint(4) NOT NULL DEFAULT 0,
  `cf_register_level` tinyint(4) NOT NULL DEFAULT 0,
  `cf_register_point` int(11) NOT NULL DEFAULT 0,
  `cf_icon_level` tinyint(4) NOT NULL DEFAULT 0,
  `cf_use_recommend` tinyint(4) NOT NULL DEFAULT 0,
  `cf_recommend_point` int(11) NOT NULL DEFAULT 0,
  `cf_leave_day` int(11) NOT NULL DEFAULT 0,
  `cf_search_part` int(11) NOT NULL DEFAULT 0,
  `cf_email_use` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_wr_super_admin` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_wr_group_admin` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_wr_board_admin` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_wr_write` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_wr_comment_all` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_mb_super_admin` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_mb_member` tinyint(4) NOT NULL DEFAULT 0,
  `cf_email_po_super_admin` tinyint(4) NOT NULL DEFAULT 0,
  `cf_prohibit_id` text NOT NULL,
  `cf_prohibit_email` text NOT NULL,
  `cf_new_del` int(11) NOT NULL DEFAULT 0,
  `cf_memo_del` int(11) NOT NULL DEFAULT 0,
  `cf_visit_del` int(11) NOT NULL DEFAULT 0,
  `cf_popular_del` int(11) NOT NULL DEFAULT 0,
  `cf_optimize_date` date NOT NULL DEFAULT '0000-00-00',
  `cf_use_member_icon` tinyint(4) NOT NULL DEFAULT 0,
  `cf_member_icon_size` int(11) NOT NULL DEFAULT 0,
  `cf_member_icon_width` int(11) NOT NULL DEFAULT 0,
  `cf_member_icon_height` int(11) NOT NULL DEFAULT 0,
  `cf_member_img_size` int(11) NOT NULL DEFAULT 0,
  `cf_member_img_width` int(11) NOT NULL DEFAULT 0,
  `cf_member_img_height` int(11) NOT NULL DEFAULT 0,
  `cf_login_minutes` int(11) NOT NULL DEFAULT 0,
  `cf_image_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_flash_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_movie_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_formmail_is_member` tinyint(4) NOT NULL DEFAULT 0,
  `cf_page_rows` int(11) NOT NULL DEFAULT 0,
  `cf_mobile_page_rows` int(11) NOT NULL DEFAULT 0,
  `cf_visit` varchar(255) NOT NULL DEFAULT '',
  `cf_max_po_id` int(11) NOT NULL DEFAULT 0,
  `cf_stipulation` text NOT NULL,
  `cf_privacy` text NOT NULL,
  `cf_open_modify` int(11) NOT NULL DEFAULT 0,
  `cf_memo_send_point` int(11) NOT NULL DEFAULT 0,
  `cf_mobile_new_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_search_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_connect_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_faq_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_member_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_captcha_mp3` varchar(255) NOT NULL DEFAULT '',
  `cf_editor` varchar(50) NOT NULL DEFAULT '',
  `cf_cert_use` tinyint(4) NOT NULL DEFAULT 0,
  `cf_cert_find` tinyint(4) NOT NULL DEFAULT 0,
  `cf_cert_ipin` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_hp` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_simple` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kg_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kg_mid` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_use_seed` tinyint(4) NOT NULL DEFAULT 0,
  `cf_cert_kcb_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kcp_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_lg_mid` varchar(100) NOT NULL DEFAULT '',
  `cf_lg_mert_key` varchar(100) NOT NULL DEFAULT '',
  `cf_cert_limit` int(11) NOT NULL DEFAULT 0,
  `cf_cert_req` tinyint(4) NOT NULL DEFAULT 0,
  `cf_sms_use` varchar(255) NOT NULL DEFAULT '',
  `cf_sms_type` varchar(10) NOT NULL DEFAULT '',
  `cf_icode_id` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_pw` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_server_ip` varchar(50) NOT NULL DEFAULT '',
  `cf_icode_server_port` varchar(50) NOT NULL DEFAULT '',
  `cf_icode_token_key` varchar(100) NOT NULL DEFAULT '',
  `cf_googl_shorturl_apikey` varchar(50) NOT NULL DEFAULT '',
  `cf_social_login_use` tinyint(4) NOT NULL DEFAULT 0,
  `cf_social_servicelist` varchar(255) NOT NULL DEFAULT '',
  `cf_payco_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_payco_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_facebook_appid` varchar(100) NOT NULL,
  `cf_facebook_secret` varchar(100) NOT NULL,
  `cf_twitter_key` varchar(100) NOT NULL,
  `cf_twitter_secret` varchar(100) NOT NULL,
  `cf_google_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_google_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_rest_key` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_client_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_js_apikey` varchar(100) NOT NULL,
  `cf_captcha` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_site_key` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_secret_key` varchar(100) NOT NULL DEFAULT '',
  `cf_1_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_2_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_3_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_4_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_5_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_6_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_7_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_8_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_9_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_10_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_1` varchar(255) NOT NULL DEFAULT '',
  `cf_2` varchar(255) NOT NULL DEFAULT '',
  `cf_3` varchar(255) NOT NULL DEFAULT '',
  `cf_4` varchar(255) NOT NULL DEFAULT '',
  `cf_5` varchar(255) NOT NULL DEFAULT '',
  `cf_6` varchar(255) NOT NULL DEFAULT '',
  `cf_7` varchar(255) NOT NULL DEFAULT '',
  `cf_8` varchar(255) NOT NULL DEFAULT '',
  `cf_9` varchar(255) NOT NULL DEFAULT '',
  `cf_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_config`
--

INSERT INTO `g5_config` (`cf_id`, `cf_title`, `cf_theme`, `cf_admin`, `cf_admin_email`, `cf_admin_email_name`, `cf_add_script`, `cf_use_point`, `cf_point_term`, `cf_use_copy_log`, `cf_use_email_certify`, `cf_login_point`, `cf_cut_name`, `cf_nick_modify`, `cf_new_skin`, `cf_new_rows`, `cf_search_skin`, `cf_connect_skin`, `cf_faq_skin`, `cf_read_point`, `cf_write_point`, `cf_comment_point`, `cf_download_point`, `cf_write_pages`, `cf_mobile_pages`, `cf_link_target`, `cf_bbs_rewrite`, `cf_delay_sec`, `cf_filter`, `cf_possible_ip`, `cf_intercept_ip`, `cf_analytics`, `cf_add_meta`, `cf_syndi_token`, `cf_syndi_except`, `cf_member_skin`, `cf_use_homepage`, `cf_req_homepage`, `cf_use_tel`, `cf_req_tel`, `cf_use_hp`, `cf_req_hp`, `cf_use_addr`, `cf_req_addr`, `cf_use_signature`, `cf_req_signature`, `cf_use_profile`, `cf_req_profile`, `cf_register_level`, `cf_register_point`, `cf_icon_level`, `cf_use_recommend`, `cf_recommend_point`, `cf_leave_day`, `cf_search_part`, `cf_email_use`, `cf_email_wr_super_admin`, `cf_email_wr_group_admin`, `cf_email_wr_board_admin`, `cf_email_wr_write`, `cf_email_wr_comment_all`, `cf_email_mb_super_admin`, `cf_email_mb_member`, `cf_email_po_super_admin`, `cf_prohibit_id`, `cf_prohibit_email`, `cf_new_del`, `cf_memo_del`, `cf_visit_del`, `cf_popular_del`, `cf_optimize_date`, `cf_use_member_icon`, `cf_member_icon_size`, `cf_member_icon_width`, `cf_member_icon_height`, `cf_member_img_size`, `cf_member_img_width`, `cf_member_img_height`, `cf_login_minutes`, `cf_image_extension`, `cf_flash_extension`, `cf_movie_extension`, `cf_formmail_is_member`, `cf_page_rows`, `cf_mobile_page_rows`, `cf_visit`, `cf_max_po_id`, `cf_stipulation`, `cf_privacy`, `cf_open_modify`, `cf_memo_send_point`, `cf_mobile_new_skin`, `cf_mobile_search_skin`, `cf_mobile_connect_skin`, `cf_mobile_faq_skin`, `cf_mobile_member_skin`, `cf_captcha_mp3`, `cf_editor`, `cf_cert_use`, `cf_cert_find`, `cf_cert_ipin`, `cf_cert_hp`, `cf_cert_simple`, `cf_cert_kg_cd`, `cf_cert_kg_mid`, `cf_cert_use_seed`, `cf_cert_kcb_cd`, `cf_cert_kcp_cd`, `cf_lg_mid`, `cf_lg_mert_key`, `cf_cert_limit`, `cf_cert_req`, `cf_sms_use`, `cf_sms_type`, `cf_icode_id`, `cf_icode_pw`, `cf_icode_server_ip`, `cf_icode_server_port`, `cf_icode_token_key`, `cf_googl_shorturl_apikey`, `cf_social_login_use`, `cf_social_servicelist`, `cf_payco_clientid`, `cf_payco_secret`, `cf_facebook_appid`, `cf_facebook_secret`, `cf_twitter_key`, `cf_twitter_secret`, `cf_google_clientid`, `cf_google_secret`, `cf_naver_clientid`, `cf_naver_secret`, `cf_kakao_rest_key`, `cf_kakao_client_secret`, `cf_kakao_js_apikey`, `cf_captcha`, `cf_recaptcha_site_key`, `cf_recaptcha_secret_key`, `cf_1_subj`, `cf_2_subj`, `cf_3_subj`, `cf_4_subj`, `cf_5_subj`, `cf_6_subj`, `cf_7_subj`, `cf_8_subj`, `cf_9_subj`, `cf_10_subj`, `cf_1`, `cf_2`, `cf_3`, `cf_4`, `cf_5`, `cf_6`, `cf_7`, `cf_8`, `cf_9`, `cf_10`) VALUES
(1, '리셋의원', '', 'admin', 'admin@domain.com', '리셋의원', '', 0, 0, 1, 0, 100, 15, 60, 'basic', 15, 'basic', 'basic', 'basic', 0, 0, 0, 0, 10, 5, '_blank', 0, 30, '18아,18놈,18새끼,18뇬,18노,18것,18넘,개년,개놈,개뇬,개새,개색끼,개세끼,개세이,개쉐이,개쉑,개쉽,개시키,개자식,개좆,게색기,게색끼,광뇬,뇬,눈깔,뉘미럴,니귀미,니기미,니미,도촬,되질래,뒈져라,뒈진다,디져라,디진다,디질래,병쉰,병신,뻐큐,뻑큐,뽁큐,삐리넷,새꺄,쉬발,쉬밸,쉬팔,쉽알,스패킹,스팽,시벌,시부랄,시부럴,시부리,시불,시브랄,시팍,시팔,시펄,실밸,십8,십쌔,십창,싶알,쌉년,썅놈,쌔끼,쌩쑈,썅,써벌,썩을년,쎄꺄,쎄엑,쓰바,쓰발,쓰벌,쓰팔,씨8,씨댕,씨바,씨발,씨뱅,씨봉알,씨부랄,씨부럴,씨부렁,씨부리,씨불,씨브랄,씨빠,씨빨,씨뽀랄,씨팍,씨팔,씨펄,씹,아가리,아갈이,엄창,접년,잡놈,재랄,저주글,조까,조빠,조쟁이,조지냐,조진다,조질래,존나,존니,좀물,좁년,좃,좆,좇,쥐랄,쥐롤,쥬디,지랄,지럴,지롤,지미랄,쫍빱,凸,퍽큐,뻑큐,빠큐,ㅅㅂㄹㅁ', '', '', '', '', '', '', 'basic', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 2, 1000, 2, 0, 0, 30, 10000, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'admin,administrator,관리자,운영자,어드민,주인장,webmaster,웹마스터,sysop,시삽,시샵,manager,매니저,메니저,root,루트,su,guest,방문객', '', 30, 180, 180, 180, '2024-06-07', 2, 5000, 22, 22, 50000, 60, 60, 10, 'gif|jpg|jpeg|png|webp', 'swf', 'asx|asf|wmv|wma|mpg|mpeg|mov|avi|mp3', 1, 15, 15, '오늘:1,어제:0,최대:1,전체:4', 0, '제1조(목적 등)\r\n① 리셋의원(http://reset-your-body.co.kr/) 이용자 약관(이하 \"본 약관\"이라 합니다)은 이용자가 리셋의원에서 제공하는 인터넷 관련 서비스(이하 \"서비스\"라 합니다)를 이용함에 있어 회원과 리셋의원의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.\r\n② 회원이 되고자 하는 자가 리셋의원에서 정한 소정의 절차를 거쳐서 \"등록하기\" 단추를 누르면 본 약관에 동의하는 것으로 간주합니다. 본 약관에 정하는 이외의 회원과 리셋의원의 권리, 의무 및 책임사항에 관해서는 전기통신사업법 기타 대한민국의 관련 법령과 상관습에 의합니다.\r\n\r\n제2조(회원의 정의)\r\n\"회원\"이란 리셋의원에 접속하여 본 약관에 따라 리셋의원 온라인 회원으로 가입하여 리셋의원가 제공하는 서비스를 받는 자를 말합니다.\r\n\r\n제3조 (회원 가입)\r\n① 회원이 되고자 하는 자는 리셋의원가 정한 가입 양식에 따라 회원정보를 기입하고 \"등록하기\" 단추를 누르는 방법으로 회원 가입을 신청합니다.\r\n② 리셋의원는 제1항과 같이 회원으로 가입할 것을 신청한 자가 다음 각 호에 해당하지 않는 한 신청한 자를 회원으로 등록합니다.\r\n1. 가입신청자가 본 약관 제6조 제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우. 다만 제6조 제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 리셋의원의 회원 재가입 승낙을 얻은 경우에는 예외로 합니다.\r\n2. 등록 내용에 허위, 기재누락, 오기가 있는 경우\r\n3. 기타 회원으로 등록하는 것이 리셋의원의 기술상 현저히 지장이 있다고 판단되는 경우\r\n\r\n③ 회원가입계약의 성립시기는 리셋의원의 승낙이 가입신청자에게 도달한 시점으로 합니다.\r\n④ 회원은 제1항의 회원정보 기재 내용에 변경이 발생한 경우, 즉시 변경사항을 정정하여 기재하여야 합니다.\r\n\r\n제4조(서비스의 제공 및 변경)\r\n① 리셋의원는 회원에게 아래와 같은 서비스를 제공합니다.\r\n1. 리셋의원 뉴스 메일 서비스\r\n2. 리셋의원 리셋 웨딩플래너실 /예약 이용 서비스\r\n3. 리셋의원 온라인 회원을 위한 섹션 및 컨텐츠 서비스\r\n4. 기타 리셋의원가 타 업체와 제휴해서 제공하는 각종 서비스\r\n\r\n② 리셋의원는 그 변경될 서비스의 내용 및 제공일자를 제7조 제2항에서 정한 방법으로 회원에게 통지하고, 제1항에 정한 서비스를 변경하여 제공할 수 있습니다.\r\n\r\n제5조(서비스의 중단)\r\n① 리셋의원는 컴퓨터 등 정보통신설비의 보수점검·교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있고, 새로운 서비스로의 교체 기타 리셋의원가 적절하다고 판단하는 사유에 기하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다.\r\n② 제1항에 의한 서비스 중단의 경우에는 리셋의원는 제7조 제2항에서 정한 방법으로 회원에게 통지합니다. 다만, 리셋의원가 통제할 수 없는 사유로 인한 서비스의 중단(시스템 관리자의 고의, 과실이 없는 디스크 장애, 시스템 다운 등)으로 인하여 사전 통지가 불가능한 경우에는 그러하지 아니합니다.\r\n\r\n제6조(회원 탈퇴 및 자격 상실 등)\r\n① 회원은 리셋의원에 언제든지 자신의 회원 등록을 말소해 줄 것(회원 탈퇴)을 요청할 수 있으며, 리셋의원는 위 요청을 받은 즉시 해당 회원의 회원 등록 말소를 위한 절차를 밟습니다.\r\n② 회원이 다음 각 호의 사유에 해당하는 경우, 리셋의원는 회원의 회원자격을 적절한 방법으로 제한 및 정지, 상실시킬 수 있습니다.\r\n1. 가입 신청 시에 허위 내용을 등록한 경우\r\n2. 다른 사람의 리셋의원 사이트 이용을 방해하거나 그 정보를 도용하는 등 전자거래질서를 위협하는 경우\r\n3. 리셋의원을 이용하여 법령과 본 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우\r\n\r\n③ 리셋의원가 회원의 회원자격을 상실시키기로 결정한 경우에는 회원등록을 말소합니다. 이 경우 회원인 회원에게 회원등록 말소 전에 이를 통지하고, 소명할 기회를 부여합니다.\r\n\r\n제7조(회원에 대한 통지)\r\n① 리셋의원가 특정 회원에 대한 통지를 하는 경우 리셋의원에 등록한 메일주소로 할 수 있습니다.\r\n② 리셋의원가 불특정다수 회원에 대한 통지를 하는 경우 1주일이상 리셋의원 게시판에 게시함으로써 개별 통지에 갈음할 수 있습니다.\r\n\r\n제8조(회원의 개인정보보호)\r\n리셋의원는 관련법령이 정하는 바에 따라서 회원 등록정보를 포함한 회원의 개인정보를 보호하기 위하여 노력합니다. 회원의 개인정보보호에 관해서는 관련법령 및 리셋의원가 정하는 \"개인정보보호정책\"에 정한 바에 의합니다.\r\n\r\n제9조(리셋의원의 의무)\r\n① 리셋의원는 법령과 본 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 본 약관이 정하는 바에 따라 지속적이고, 안정적으로 서비스를 제공하기 위해서 노력합니다.\r\n② 리셋의원는 회원이 안전하게 인터넷 서비스를 이용할 수 있도록 회원의 개인정보(신용정보포함)보호를 위한 보안 시스템을 구축합니다.\r\n③ 리셋의원는 회원이 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.\r\n\r\n제10조(회원의 ID 및 비밀번호에 대한 의무)\r\n① 리셋의원가 관계법령, \"개인정보보호정책\"에 의해서 그 책임을 지는 경우를 제외하고, 자신의 ID와 비밀번호에 관한 관리책임은 각 회원에게 있습니다.\r\n② 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.\r\n③ 회원은 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 리셋의원에 통보하고 리셋의원의 안내가 있는 경우에는 그에 따라야 합니다.\r\n\r\n제11조(회원의 의무)\r\n① 회원은 다음 각 호의 행위를 하여서는 안됩니다.\r\n1. 회원가입신청 또는 변경 시 허위내용을 등록하는 행위\r\n2. 리셋의원에 게시된 정보를 변경하는 행위\r\n3. 리셋의원 기타 제3자의 인격권 또는 지적재산권을 침해하거나 업무를 방해하는 행위\r\n4. 다른 회원의 ID를 도용하는 행위\r\n5. 정크메일(junk mail), 스팸메일(spam mail), 행운의 편지(chain letters), 피라미드 조직에 가입할 것을 권유하는 메일, 외설 또는 폭력적인 메시지·화상·음성 등이 담긴 메일을 보내거나 기타 공서양속에 반하는 정보를 공개 또는 게시하는 행위.\r\n6. 관련 법령에 의하여 그 전송 또는 게시가 금지되는 정보(컴퓨터 프로그램 등)의 전송 또는 게시하는 행위\r\n7. 리셋의원의 직원이나 리셋의원 인터넷 서비스의 관리자를 가장하거나 사칭하여 또는 타인의 명의를 도용하여 글을 게시하거나 메일을 발송하는 행위\r\n8. 컴퓨터 소프트웨어, 하드웨어, 전기통신 장비의 정상적인 가동을 방해, 파괴할 목적으로 고안된 소프트웨어 바이러스, 기타 다른 컴퓨터 코드, 파일, 프로그램을 포함하고 있는 자료를 게시하거나 전자우편으로 발송하는 행위\r\n9. 스토킹(stalking) 등 다른 회원을 괴롭히는 행위\r\n10. 다른 회원에 대한 개인정보를 동의 없이 수집, 저장, 공개하는 행위\r\n11. 불특정 다수의 자를 대상으로 하여 광고 또는 선전을 게시하거나 스팸메일을 전송하는 등의 방법으로 리셋의원의 서비스를 이용하여 영리목적의 활동을 하는 행위\r\n12. 리셋의원가 제공하는 서비스에 정한 약관 기타 서비스 이용에 관한 규정을 위반하는 행위\r\n\r\n② 제1항에 해당하는 행위를 한 회원이 있을 경우 리셋의원는 본 약관 제6조 제2, 3항에서 정한 바에 따라 회원의 회원자격을 적절한 방법으로 제한 및 정지, 상실시킬 수 있습니다.\r\n③ 회원은 그 귀책사유로 인하여 리셋의원가나 다른 회원이 입은 손해를 배상할 책임이 있습니다.\r\n\r\n제 12조 (공개게시물의 삭제)\r\n회원의 공개게시물의 내용이 다음 각 호에 해당하는 경우 리셋의원는 회원에게 사전 통지 없이 해당 공개게시물을 삭제할 수 있고, 해당 회원의 회원 자격을 제한, 정지 또는 상실시킬 수 있습니다.\r\n1. 다른 회원 또는 제3자를 비방하거나 중상 모략으로 명예를 손상시키는 내용\r\n2. 공서양속에 위반되는 내용의 정보, 문장, 도형 등을 유포하는 내용\r\n3. 범죄행위와 관련이 있다고 판단되는 내용\r\n4. 다른 회원 또는 제3자의 저작권 등 기타 권리를 침해하는 내용\r\n5. 광고성 또는 상업적 목적이 두드러진 경우\r\n6. 기타 관계 법령에 위배된다고 판단되는 내용\r\n\r\n제13조(저작권의 귀속 및 이용제한)\r\n① 리셋의원가 작성한 저작물에 대한 저작권 기타 지적재산권은 리셋의원에 귀속합니다.\r\n② 회원은 리셋의원을 이용함으로써 얻은 정보를 리셋의원의 사전승낙 없이 복제, 전송, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.\r\n\r\n제14조(상담에 관한 규정)\r\n① 서비스에서 진행된 상담의 내용은 개인 신상정보를 삭제한 다음 아래와 같은 목적으로 사용할 수 있습니다.\r\n1) 학술활동\r\n2) 진료활동\r\n3) 의료서비스\r\n4) 인쇄물, CD-ROM 등의 저작활동\r\n5) FAQ, 추천상담 등의 서비스 내용의 일부\r\n\r\n② 아래와 같은 상담을 신청하는 경우에는 상담 서비스를 전체 또는 일부 제공하지 않을 수 있습니다.\r\n1) 같은 내용의 상담을 반복하여 신청하는 경우\r\n2) 상식에 어긋나는 표현을 사용하거나 비어를 사용하여 상담을 신청하는 경우\r\n3) 진단명을 요구하는 상담을 신청하는 경우\r\n4) 치료비, 검사비, 의약품 가격, 의약품의 효과 등에 대하여 상담을 신청하는 경우\r\n5) 타인을 해하기 위한 정보 취득목적으로 상담하는 경우\r\n\r\n제15조(약관의 개정)\r\n① 리셋의원는 약관의 규제 등에 관한 법률, 전자거래기본법, 전자서명법, 정보통신망 이용촉진 등에 관한 법률 등 관련법을 위배하지 않는 범위에서 본 약관을 개정할 수 있습니다.\r\n② 리셋의원가 본 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다.\r\n③ 리셋의원가 본 약관을 개정할 경우에는 그 개정약관은 개정된 내용이 관계 법령에 위배되지 않는 한 개정 이전에 회원으로 가입한 회원에게도 적용됩니다.\r\n④ 변경된 약관에 이의가 있는 회원은 제6조 제1항에 따라 탈퇴할 수 있습니다.\r\n\r\n제16조(재판관할)\r\n리셋의원와 회원간에 발생한 서비스 이용에 관한 분쟁으로 인한 소는 민사소송법상의 관할을 가지는 대한민국의 법원에 제기합니다.\r\n\r\n부 칙\r\n이 약관은 2017년 6월 27일을 시작으로 새로운 약관이 나오기 전까지 사용한다.', '리셋의원 (이하 ‘본원’이라 합니다)는 인터넷 상에서의 개인정보 보호를 매우 중요하게 생각하고 있으며, 이용자가 본원을 이용함에 있어서 본원에게 제공한 개인정보가 보호받을 수 있도록 최선을 다하고 있습니다. 이에 따라, 본원은 통신비밀보호법, 전기통신사업법, 정보통신망이용촉진 등에 관한 법률 등 정보통신 서비스 제공자가 준수하여야 할 관련 법규를 바탕으로 개인정보 보호정책을 만들어 이를 준수해 나가고 있습니다. 본 개인정보처리방침은 정부의 법률 및 지침 변경이나 본원의 내부방침 변경 등으로 인하여 수시로 변경될 수 있으며, 본원은 변경사항이 있을 경우 즉시 관련 내용을 홈페이지 초기 화면에 게시된 개인정보처리방침에 반영하고 있습니다. 본 개인정보처리방침을 통하여 이용자는 수집된 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 어떻게 안전하게 보호되고 있는지 이해하실 수 있을 것입니다.\r\n\r\n[이 개인정보처리방침의 순서는 다음과 같습니다.]\r\n1. 수집하는 개인정보의 항목 및 수집방법\r\n2. 개인정보의 수집 및 이용목적\r\n3. 개인정보 제공 및 공유\r\n4. 개인정보의 보유 및 이용기간\r\n5. 개인정보의 파기절차 및 그 방법\r\n6. 이용자 및 법정대리인의 권리와 그 행사방법\r\n7. 동의철회 / 회원탈퇴 방법\r\n8. 개인정보 자동 수집 장치의 설치/운영 및 그 거부에 관한 사항\r\n9. 영상정보처리기기 운영/관리에 관한 사항\r\n10. 개인정보의 안전성 확보조치에 관한 사항\r\n11. 개인정보관리책임자\r\n12. 정책 변경에 따른 공지의무\r\n\r\n1. 수집하는 개인정보의 항목 및 수집방법\r\n\r\n본원은 회원가입 시 서비스 이용을 위해 필요한 최소한의 개인 정보만을 수집합니다. 귀하가 본원의 서비스를 이용하기 위하여 수집되는 정보는 회원가입 시 입력되는 필수항목과 선택항목이 있으며, 메일수신여부 등과 같은 선택항목은 입력하지 않더라도 서비스 이용에는 제한이 없습니다.\r\n\r\n가. 진료 시 수집항목\r\n\r\n- 필수항목 : 성명(한글), 주소, 연락처\r\n- 건강정보 : 병력 및 가족력 등 진료서비스 제공을 위하여 의료진이 필요하다고 판단되는 개인건강정보.\r\n※ 의료법에 의해 고유식별정보 및 진료정보를 의무적으로 보유하여야 합니다.\r\n(진료정보 수집에 대하여는 별도의 동의를 받지 않습니다.)\r\n\r\n나. 홈페이지 회원가입 시 수집항목\r\n\r\n- 필수항목 : 아이디, 비밀번호, 이름, 이메일\r\n- 선택항목 : 연락처(전화번호, 휴대폰번호)\r\n- 민감정보사항 : 과거병력, 수술이력, 관심수술분야\r\n- 서비스 이용 과정이나 서비스 제공 업무 처리 과정에서 다음과 같은 정보들이 이용자의 동의없이 자동으로 생성되어 수집될 수 있습니다. (서비스 이용기록, 접속 로그, 쿠키, 접속 IP 정보)\r\n- 본인인증 (휴대폰 인증/아이핀 인증) : 성명, 본인인증값, 아이핀 회원은 아이핀 번호, 생년월일, 성별, 아이디, 비밀번호, 연락처(메일주소, 휴대폰 번호), 만 14세 미만은 법정대리인 정보, 가입인증정보\r\n\r\n다. 진료비 수납 시 수집항목\r\n\r\n- 신용카드 결제 시 : 카드사명, 카드번호 등 카드결제 승인 정보\r\n\r\n라. 개인정보 수집방법\r\n\r\n- 다음과 같은 방법으로 개인정보를 수집합니다.\r\n홈페이지(회원가입, 실시간 상담, 온라인 예약, 리셋 웨딩플래너 등), 서면양식, 팩스, 전화, 이메일\r\n\r\n2. 개인정보의 수집 및 이용목적\r\n\r\n본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다. 이용자가 제공한 모든 정보는 하기 목적에 필요한 용도 이외로는 사용되지 않으며 이용 목적이 변경될 시에는 사전 동의를 구할 것입니다.\r\n- 진료/검사/ 예약조회 및 진료를 위한 본인확인 절차 - 진단 및 치료를 위한 서비스\r\n- 진료비 청구, 수납, 환급 등의 원무 서비스\r\n- 진료비계산서, 내역서, 제 증명서 발송 및 약품/물품 및 결과 발송\r\n- 진료의뢰 및 회송 받은 타 의료기관에 진료정보 제공\r\n- 고지사항 전달, 민원/고충 처리 등을 돕기 위한 의사소통의 경로 확보\r\n- 리셋 웨딩플래너 답변 처리를 위한 자료\r\n- 새로운 서비스 및 행사정보 안내 제공\r\n- 의료의 질 관리, 본원운영을 위한 법적, 행정적 대응 및 조치\r\n- 교육, 연구에 필요한 최소한의 분석 자료\r\n- 진료정보, 학술정보, 본원정보 안내\r\n- 상담 및 진료 시 원활한 서비스 제공을 위한 참조자료 사용\r\n- 소비자 기본법 제52조에 의거한 소비자를 위한 정보 수집\r\n\r\n3. 개인정보 제공 및 공유\r\n\r\n본원은 귀하의 동의가 있거나 관련법령의 규정에 의한 경우를 제외하고는 어떠한 경우에도 『개인정보의 수집 및 이용목적』에서 고지한 범위를 넘어 귀하의 개인정보를 이용하거나 타인 또는 타기업 • 기관에 제공하지 않습니다.\r\n다만, 아래의 경우에는 예외로 합니다.\r\n- 이용자들이 사전에 공개에 동의한 경우\r\n- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우\r\n- 통계작성 • 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 알아볼 수 없는 형태로 가공하여 제공하는 경우\r\n\r\n4. 개인정보의 보유 및 이용기간\r\n\r\n본원은 개인정보의 수집목적 또는 제공받은 목적이 달성된 때에는 귀하의 개인정보를 지체 없이 파기합니다.\r\n가. 회원가입정보의 경우 : 회원가입을 탈퇴하거나 회원에서 제명된 때, 최종 로그인 날짜로부터 1년을 경과한 경우(정보통신망 이용촉진 및 정보보호 등에 관한 법률 제29조 및 동법 시행령 제 16조)\r\n나. 설문조사, 행사 등의 목적을 위하여 수집한 경우 : 당해 설문조사, 행사 등이 종료한 때\r\n다. 진료목적을 위하여 수집한 경우: 『의료법』시행규칙 제15조 \"진료에 관한 기록의 보존\"에 명시된 기간에 준하여 보존 (환자 명부 : 5년 , 진료기록부 : 10년), (보존 항목: 성명, 주소, 진료정보)\r\n라. 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래 등에서의 소비자보호에 관한 법률)\r\n마. 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법률)\r\n바. 본인 확인에 관한 기록 : 6개월 (정보통신망 이용촉진 및 정보보호 등에 관한 법률)\r\n사. 방문에 관한 기록 : 3개월 (통신비밀보호법)\r\n※ 다만, 수집목적 또는 제공받은 목적이 달성된 경우에도 상법 등 법령의 규정에 의하여 보존할 필요성이 있는 경우에는 귀하의 개인정보를 보유할 수 있습니다.\r\n\r\n5. 개인정보의 파기절차 및 그 방법\r\n\r\n본원은 『개인정보의 수집 및 이용목적』이 달성된 후에는 즉시 파기합니다. 파기절차 및 방법은 다음과 같습니다.\r\n\r\n가. 파기절차\r\n\r\n이용자가 회원가입 등을 위해 입력한 정보는 목적이 달성된 후 이하 파기방법에 의하여 즉시 파기합니다.\r\n\r\n나. 파기기한\r\n\r\n이용자의 개인정보는 개인정보의 보유기간이 경과된 경우네는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.\r\n\r\n다. 파기방법\r\n\r\n전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.\r\n\r\n6. 이용자 및 법정대리인의 권리와 그 행사방법\r\n\r\n본원은 고객이 개인정보에 대한 열람, 정정 및 삭제를 요구하는 경우에는 고객의 요구에 성실하게 응대하고, 지체 없이 처리합니다. 개인정보를 보호하기 위하여 고객의 방문 이외의 전화, 우편, FAX 등 기타 신청방법에 의한 고객의 개인정보의 열람, 정정 및 삭제 절차는 제공하지 않습니다.\r\n\r\n가. 개인정보의 열람\r\n\r\n고객은 본원을 방문하여 개인정보의 열람을 요구할 수 있으며, 신속하게 이에 대하여 응대합니다.\r\n\r\n나. 개인정보의 정정/삭제\r\n\r\n- 본원은 고객이 개인정보에 대한 정정/삭제를 요구하는 경우, 개인정보에 오류가 있다고 판명되는 등 정정 • 삭제를 할 필요가 있다고 인정되는 경우에는 지체 없이 정정/삭제를 합니다. 본원은 정정/삭제 내용의 사실 확인에 필요한 증빙자료를 요청할 수 있습니다. 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 조치하겠습니다.\r\n- 고객이 본인의 개인정보에 대한 열람, 정정 및 삭제를 요구하는 경우, 고객의 신분을 나타내는 주민등록증, 여권, 운전면허증 등의 신분증명서를 제시 받아 본인 여부를 확인합니다.\r\n- 고객의 대리인이 방문하여 열람, 정정 및 삭제를 요구하는 경우에는 고객의 위임장 및 동의서와 대리인의 신분증명서 등을 확인하여 정당한 대리인인지 여부를 확인합니다.\r\n- 본원은 개인정보의 전부 또는 일부에 대하여 열람, 정정 및 삭제를 거절할 정당한 이유가 있는 경우에는 고객에게 이를 통지하고 그 이유를 설명합니다.\r\n- 개인정보의 열람 및 정정을 제한할 수 있는 경우\r\n- 본인 또는 제3자의 생명, 신체, 재산 또는 권익을 현저하게 해할 우려가 있는 경우\r\n- 당해 서비스제공자의 업무에 현저한 지장을 미칠 우려가 있는 경우\r\n- 법령에 위반하는 경우 등\r\n- 만14세 미만 아동(이하 \"아동\"이라 함)의 회원가입은 별도의 양식을 통해 이루어지고 있으며 개인정보 수집 시 반드시 법정대리인의 동의를 구하고 있습니다.\r\n- 본원은 법정대리인의 동의를 받기 위하여 아동으로부터 법정대리인의 성명과 연락처 등 최소한의 정보를 수집하고 있으며, 개인정보처리방침에서 규정하고 있는 방법에 따라 법정대리인의 동의를 받고 있습니다.\r\n- 이용자 및 법정대리인은 개인정보와 관련하여 인터넷, 전화, 서면 등을 이용하여 본원에 연락을 하여 권리를 행사할 수 있으며, 병원은 지체 없이 필요한 조치를 합니다.\r\n※ 법에 의해 보관이 의무화된 개인정보는 요청이 있더라도 보관기간 내에 수정/삭제할 수 없습니다.\r\n\r\n7. 동의 철회 • 회원 탈퇴 방법\r\n\r\n귀하는 회원가입 시 개인정보의 수집 • 이용 및 제공에 대해 동의하신 내용을 언제든지 철회하실 수 있습니다. 동의철회(회원탈퇴)는 홈페이지 내의『동의철회(회원탈퇴)』을 클릭하여 본인 확인 절차를 거치신 후 직접 동의철회(회원탈퇴)를 하시거나, 개인정보담당자에게 연락하시면 지체 없이 귀하의 개인정보를 파기하는 등 필요한 조치를 하겠습니다.\r\n\r\n8. 개인정보 자동 수집 장치의 설치/운영 및 그 거부에 관한 사항\r\n\r\n본원은 이용자들에게 특화된 맞춤서비스를 제공하기 위해서 이용자들의 정보를 저장하고 수시로 불러오는 \'쿠키(cookie)\'를 사용합니다. 쿠키는 웹사이트가 이용자의 컴퓨터 웹 브라우저로 전송하는 소량의 정보로 PC 하드디스크에 저장되기도 합니다.\r\n\r\n가. 쿠키의 사용 목적\r\n\r\n- 쿠키는 이용자의 컴퓨터를 식별하지만 이용자 개개인을 개별적으로 식별하지는 않습니다. 본원은 이 쿠키를 이용하여 이용자들이 방문한 각 서비스에 대한 방문 및 이용 형태, 이용자 규모 등을 파악하여 더욱 더 편리한 서비스를 만들 수 있습니다.\r\n- 이용자들은 웹 브라우저의 옵션을 조정하여 쿠키에 대한 사용 여부를 선택하실 수 있습니다. 즉, 모든 쿠키를 다 받아들이거나, 쿠키가 설치될 때 통지를 보내도록 하거나, 아니면 모든 쿠키를 거부하실 수도 있습니다.\r\n- 다만, 이용자들은 본원에 접속한 후 로그인(LOG-IN)하여 서비스를 이용하기 위해서는 쿠키를 허용하여야 합니다.\r\n\r\n나. 쿠키의 설치/운영 및 거부\r\n\r\n- 이용자는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 이용자는 웹 브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.\r\n- 쿠키 설정을 거부하는 방법으로는 이용자가 사용하는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.\r\n- 설정방법 예\r\n• Internet Explorer의 경우 : 웹 브라우저 상단의 도구 메뉴 > 인터넷 옵션 > 개인정보 > 설정\r\n• Chrome의 경우 : 웹 브라우저 우측의 설정 메뉴 > 화면 하단의 고급 설정 표시 > 개인정보의 콘텐츠 설정 버튼 > 쿠키\r\n- 다만, 쿠키의 저장을 거부할 경우에는 로그인이 필요한 본원의 일부 서비스를 이용하는데 어려움이 있을 수 있습니다.\r\n\r\n9. 개인정보의 안전성 확보조치에 관한 사항\r\n\r\n본원은 고객의 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적. 관리적 대책을 강구하고 있습니다.\r\n[개인정보 취급 직원의 최소화 및 교육]\r\n개인정보취급자의 지정을 최소화하고 정기적인 교육을 시행하고 있습니다.\r\n[정기적인 자체 점검 실시]\r\n개인정보 취급 관련 안정성 확보를 위해 연 1회 이상 정기적으로 자체점검을 실시하고 있습니다.\r\n[내부관리계획의 수립 및 시행]\r\n개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.\r\n[개인정보의 암호화]\r\n이용자의 개인정보 중 비밀번호는 암호화 되어 저장 및 관리되고 있어 본인만이 알 수 있으며 중요한 데이터는 파일 및 전송 데이터를 암호화 하는 등의 별도 보안기능을 사용하고 있습니다.\r\n[해킹 등에 대비한 기술적 대책]\r\n해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안프로그램을 설치하고 주기적인 갱신•점검을 하며 외부로부터 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다.\r\n[개인정보에 대한 접근 제한]\r\n개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여, 변경, 말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.\r\n[비인가자에 대한 출입 통제]\r\n개인정보를 보관하고 있는 개인정보시스템의 물리적 보관 장소를 별도로 두고 이에 대해 출입통제 절차를 수립, 운영하고 있습니다.\r\n\r\n10. 영상정보처리기기 운영/관리에 관한 사항\r\n\r\n본원은 아래와 같이 영상정보처리기기를 운영/관리하고 있습니다.\r\n[설치 근거 및 설치 목적]\r\n환자 및 시설안전, 화재 및 범죄 예방\r\n[설치 대수, 설치 위치 및 촬영범위]\r\n설치대수 : 총\r\n설치 위치 및 촬영 범위 : 로비, 복도 등\r\n[관리책임자]\r\n관리 책임자: 봉아라\r\n[영상정보의 촬영시간, 처리방법]\r\n촬영시간 : 24시간 촬영\r\n처리방법 : 개인영상정보의 목적 외 이용, 제3자 제공, 파기, 열람 등 요구에 관한 사항을 기록 관리하고, 보관기간 만료 시 복원이 불가능한 방법으로 영구 삭제(출력물의 경우 파쇄 또는 소각)합니다.\r\n[정보주체의 영상정보 열람 등 요구에 대한 조치]\r\n귀하는 개인영상정보에 관하여 열람 또는 존재확인 등을 원하는 경우 언제든지 영상정보처리기기 운영자에게 요구하실 수 있습니다. 단, 귀하가 촬영된 개인영상정보 및 명백히 정보주체의 급박한 생명, 신체, 재산의 이익을 위하여 필요한 개인영상정보에 한정됩니다.\r\n정보주체의 열람 등 청구에도 불구하고 아래와 같은 경우에는 개인영상정보 열람 등 청구를 거부할 수 있습니다.\r\n- 개인영상정보의 보관기간이 경과하여 파기한 경우\r\n- 기타 정보주체의 열람 등 요구를 거부할 만한 정당한 사유가 존재하는 경우\r\n[영상정보의 보호를 위한 기술적 •관리적 및 물리적 조치]\r\n본원에서 처리하는 영상정보는 암호화 조치 등을 통하여 안전하게 관리되고 있습니다. 또한 본원은 개인영상정보보호를 위한 관리적 대책으로서 개인정보에 대한 접근 권한을 차등부여하고 있고, 개인영상정보의 위 • 변조 방지를 위하여 개인영상정보의 생성 일시, 열람 시 열람 목적 •열람자 •열람 일시 등을 기록하여 관리하고 있습니다. 이 외에도 개인영상정보의 안전한 물리적 보관을 위하여 잠금장치를 설치하고 있습니다.\r\n\r\n11. 개인정보관리책임자\r\n\r\n귀하의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 본원은 아래와 같이 개인정보관리책임자를 두고 있습니다.\r\n[개인정보 관리책임자]\r\n관리 책임자 : 봉아라\r\n취급 당당자 : 봉아라\r\n소속: 리셋의원\r\n직위 : 대표원장님\r\n전화번호 :031-709-6644\r\n이메일 :\r\n귀하께서는 본원의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자로 신고하실 수 있습니다.\r\n본원은 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.\r\n기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.\r\n개인분쟁조정위원회 (http://www.1336.or.kr / 1336)\r\n대검찰청 사이버범죄수사단 (http://www.spo.go.kr / (02) 3480-3573)\r\n경찰청 사이버테러대응센터 (http://www.ctrc.go.kr / (02) 392-0330)\r\n\r\n12. 정책 변경에 따른 공지의무\r\n\r\n이 개인정보처리방침은 2015년 08월 31일에 제정되었으며 법령 • 정책 또는 보안기술의 변경에 따라 내용의 추가 • 삭제 및 수정이 있을 시에는 변경되는 개인정보처리방침을 시행하기 최소 7일전에 본원 홈페이지를 통해 변경이유 및 내용 등을 공지하도록 하겠습니다.', 0, 500, 'basic', 'basic', 'basic', 'basic', 'basic', 'basic', 'smarteditor2', 0, 0, '', '', '', '', '', 0, '', '', '', '', 2, 0, '', '', '', '', '211.172.232.124', '7295', '', '', 1, 'naver,kakao,google', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kcaptcha', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_content`
--

CREATE TABLE `g5_content` (
  `co_id` varchar(20) NOT NULL DEFAULT '',
  `co_html` tinyint(4) NOT NULL DEFAULT 0,
  `co_subject` varchar(255) NOT NULL DEFAULT '',
  `co_content` longtext NOT NULL,
  `co_seo_title` varchar(255) NOT NULL DEFAULT '',
  `co_mobile_content` longtext NOT NULL,
  `co_skin` varchar(255) NOT NULL DEFAULT '',
  `co_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `co_tag_filter_use` tinyint(4) NOT NULL DEFAULT 0,
  `co_hit` int(11) NOT NULL DEFAULT 0,
  `co_include_head` varchar(255) NOT NULL,
  `co_include_tail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_content`
--

INSERT INTO `g5_content` (`co_id`, `co_html`, `co_subject`, `co_content`, `co_seo_title`, `co_mobile_content`, `co_skin`, `co_mobile_skin`, `co_tag_filter_use`, `co_hit`, `co_include_head`, `co_include_tail`) VALUES
('company', 1, '회사소개', '<p align=center><b>회사소개에 대한 내용을 입력하십시오.</b></p>', '', '', 'basic', 'basic', 0, 0, '', ''),
('privacy', 1, '개인정보 처리방침', '<p align=center><b>개인정보 처리방침에 대한 내용을 입력하십시오.</b></p>', '', '', 'basic', 'basic', 0, 0, '', ''),
('provision', 1, '서비스 이용약관', '<p align=center><b>서비스 이용약관에 대한 내용을 입력하십시오.</b></p>', '', '', 'basic', 'basic', 0, 0, '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_faq`
--

CREATE TABLE `g5_faq` (
  `fa_id` int(11) NOT NULL,
  `fm_id` int(11) NOT NULL DEFAULT 0,
  `fa_subject` text NOT NULL,
  `fa_content` text NOT NULL,
  `fa_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_faq_master`
--

CREATE TABLE `g5_faq_master` (
  `fm_id` int(11) NOT NULL,
  `fm_subject` varchar(255) NOT NULL DEFAULT '',
  `fm_head_html` text NOT NULL,
  `fm_tail_html` text NOT NULL,
  `fm_mobile_head_html` text NOT NULL,
  `fm_mobile_tail_html` text NOT NULL,
  `fm_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_faq_master`
--

INSERT INTO `g5_faq_master` (`fm_id`, `fm_subject`, `fm_head_html`, `fm_tail_html`, `fm_mobile_head_html`, `fm_mobile_tail_html`, `fm_order`) VALUES
(1, '자주하시는 질문', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_group`
--

CREATE TABLE `g5_group` (
  `gr_id` varchar(10) NOT NULL DEFAULT '',
  `gr_subject` varchar(255) NOT NULL DEFAULT '',
  `gr_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `gr_admin` varchar(255) NOT NULL DEFAULT '',
  `gr_use_access` tinyint(4) NOT NULL DEFAULT 0,
  `gr_order` int(11) NOT NULL DEFAULT 0,
  `gr_1_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_2_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_3_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_4_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_5_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_6_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_7_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_8_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_9_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_10_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_1` varchar(255) NOT NULL DEFAULT '',
  `gr_2` varchar(255) NOT NULL DEFAULT '',
  `gr_3` varchar(255) NOT NULL DEFAULT '',
  `gr_4` varchar(255) NOT NULL DEFAULT '',
  `gr_5` varchar(255) NOT NULL DEFAULT '',
  `gr_6` varchar(255) NOT NULL DEFAULT '',
  `gr_7` varchar(255) NOT NULL DEFAULT '',
  `gr_8` varchar(255) NOT NULL DEFAULT '',
  `gr_9` varchar(255) NOT NULL DEFAULT '',
  `gr_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_group`
--

INSERT INTO `g5_group` (`gr_id`, `gr_subject`, `gr_device`, `gr_admin`, `gr_use_access`, `gr_order`, `gr_1_subj`, `gr_2_subj`, `gr_3_subj`, `gr_4_subj`, `gr_5_subj`, `gr_6_subj`, `gr_7_subj`, `gr_8_subj`, `gr_9_subj`, `gr_10_subj`, `gr_1`, `gr_2`, `gr_3`, `gr_4`, `gr_5`, `gr_6`, `gr_7`, `gr_8`, `gr_9`, `gr_10`) VALUES
('community', '커뮤니티', 'both', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_group_member`
--

CREATE TABLE `g5_group_member` (
  `gm_id` int(11) NOT NULL,
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `gm_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_login`
--

CREATE TABLE `g5_login` (
  `lo_id` int(11) NOT NULL,
  `lo_ip` varchar(100) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `lo_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lo_location` text NOT NULL,
  `lo_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_login`
--

INSERT INTO `g5_login` (`lo_id`, `lo_ip`, `mb_id`, `lo_datetime`, `lo_location`, `lo_url`) VALUES
(1, '::1', 'admin', '2024-06-07 19:49:34', '/menu10_3.php', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_mail`
--

CREATE TABLE `g5_mail` (
  `ma_id` int(11) NOT NULL,
  `ma_subject` varchar(255) NOT NULL DEFAULT '',
  `ma_content` mediumtext NOT NULL,
  `ma_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ma_ip` varchar(255) NOT NULL DEFAULT '',
  `ma_last_option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_member`
--

CREATE TABLE `g5_member` (
  `mb_no` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `mb_password` varchar(255) NOT NULL DEFAULT '',
  `mb_name` varchar(255) NOT NULL DEFAULT '',
  `mb_nick` varchar(255) NOT NULL DEFAULT '',
  `mb_nick_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_email` varchar(255) NOT NULL DEFAULT '',
  `mb_homepage` varchar(255) NOT NULL DEFAULT '',
  `mb_level` tinyint(4) NOT NULL DEFAULT 0,
  `mb_sex` char(1) NOT NULL DEFAULT '',
  `mb_birth` varchar(255) NOT NULL DEFAULT '',
  `mb_tel` varchar(255) NOT NULL DEFAULT '',
  `mb_hp` varchar(255) NOT NULL DEFAULT '',
  `mb_certify` varchar(20) NOT NULL DEFAULT '',
  `mb_adult` tinyint(4) NOT NULL DEFAULT 0,
  `mb_dupinfo` varchar(255) NOT NULL DEFAULT '',
  `mb_zip1` char(3) NOT NULL DEFAULT '',
  `mb_zip2` char(3) NOT NULL DEFAULT '',
  `mb_addr1` varchar(255) NOT NULL DEFAULT '',
  `mb_addr2` varchar(255) NOT NULL DEFAULT '',
  `mb_addr3` varchar(255) NOT NULL DEFAULT '',
  `mb_addr_jibeon` varchar(255) NOT NULL DEFAULT '',
  `mb_signature` text NOT NULL,
  `mb_recommend` varchar(255) NOT NULL DEFAULT '',
  `mb_point` int(11) NOT NULL DEFAULT 0,
  `mb_today_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_login_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_leave_date` varchar(8) NOT NULL DEFAULT '',
  `mb_intercept_date` varchar(8) NOT NULL DEFAULT '',
  `mb_email_certify` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_email_certify2` varchar(255) NOT NULL DEFAULT '',
  `mb_memo` text NOT NULL,
  `mb_lost_certify` varchar(255) NOT NULL,
  `mb_mailling` tinyint(4) NOT NULL DEFAULT 0,
  `mb_sms` tinyint(4) NOT NULL DEFAULT 0,
  `mb_open` tinyint(4) NOT NULL DEFAULT 0,
  `mb_open_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_profile` text NOT NULL,
  `mb_memo_call` varchar(255) NOT NULL DEFAULT '',
  `mb_memo_cnt` int(11) NOT NULL DEFAULT 0,
  `mb_scrap_cnt` int(11) NOT NULL DEFAULT 0,
  `mb_1` varchar(255) NOT NULL DEFAULT '',
  `mb_2` varchar(255) NOT NULL DEFAULT '',
  `mb_3` varchar(255) NOT NULL DEFAULT '',
  `mb_4` varchar(255) NOT NULL DEFAULT '',
  `mb_5` varchar(255) NOT NULL DEFAULT '',
  `mb_6` varchar(255) NOT NULL DEFAULT '',
  `mb_7` varchar(255) NOT NULL DEFAULT '',
  `mb_8` varchar(255) NOT NULL DEFAULT '',
  `mb_9` varchar(255) NOT NULL DEFAULT '',
  `mb_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_member`
--

INSERT INTO `g5_member` (`mb_no`, `mb_id`, `mb_password`, `mb_name`, `mb_nick`, `mb_nick_date`, `mb_email`, `mb_homepage`, `mb_level`, `mb_sex`, `mb_birth`, `mb_tel`, `mb_hp`, `mb_certify`, `mb_adult`, `mb_dupinfo`, `mb_zip1`, `mb_zip2`, `mb_addr1`, `mb_addr2`, `mb_addr3`, `mb_addr_jibeon`, `mb_signature`, `mb_recommend`, `mb_point`, `mb_today_login`, `mb_login_ip`, `mb_datetime`, `mb_ip`, `mb_leave_date`, `mb_intercept_date`, `mb_email_certify`, `mb_email_certify2`, `mb_memo`, `mb_lost_certify`, `mb_mailling`, `mb_sms`, `mb_open`, `mb_open_date`, `mb_profile`, `mb_memo_call`, `mb_memo_cnt`, `mb_scrap_cnt`, `mb_1`, `mb_2`, `mb_3`, `mb_4`, `mb_5`, `mb_6`, `mb_7`, `mb_8`, `mb_9`, `mb_10`) VALUES
(1, 'admin', 'sha256:12000:xbvFqhagdxZ025LrnTyk+R4PA0WNK2/T:00AARhlGVeHxZBRfOpJXhE9zM9YJUFDJ', '리셋의원', '리셋의원', '2024-06-03', 'admin@domain.com', '', 10, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 200, '2024-06-07 10:18:21', '::1', '2024-06-03 15:33:30', '::1', '', '', '2024-06-03 15:33:30', '', '', '', 1, 0, 1, '0000-00-00', '', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 'true4alse', 'sha256:12000:5b2JW3N+UeOrHBvpIa15lpBl2VYZH/kQ:BEPpt3iJWwhQqSYZdP+ozxOzx2G2yoFC', '정민진', '멀뚱이', '2024-06-05', 'true4alse@gmail.com', '', 2, '', '', '', '010-6262-9996', '', 0, '', '', '', '', '', '', '', '', '', 0, '2024-06-07 19:09:32', '::1', '2024-06-05 11:42:37', '::1', '', '', '2024-06-05 11:42:37', '', '', '', 1, 1, 1, '2024-06-05', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_member_cert_history`
--

CREATE TABLE `g5_member_cert_history` (
  `ch_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `ch_name` varchar(255) NOT NULL DEFAULT '',
  `ch_hp` varchar(255) NOT NULL DEFAULT '',
  `ch_birth` varchar(255) NOT NULL DEFAULT '',
  `ch_type` varchar(20) NOT NULL DEFAULT '',
  `ch_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_member_social_profiles`
--

CREATE TABLE `g5_member_social_profiles` (
  `mp_no` int(11) NOT NULL,
  `mb_id` varchar(255) NOT NULL DEFAULT '',
  `provider` varchar(50) NOT NULL DEFAULT '',
  `object_sha` varchar(45) NOT NULL DEFAULT '',
  `identifier` varchar(255) NOT NULL DEFAULT '',
  `profileurl` varchar(255) NOT NULL DEFAULT '',
  `photourl` varchar(255) NOT NULL DEFAULT '',
  `displayname` varchar(150) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `mp_register_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mp_latest_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_memo`
--

CREATE TABLE `g5_memo` (
  `me_id` int(11) NOT NULL,
  `me_recv_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_read_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_memo` text NOT NULL,
  `me_send_id` int(11) NOT NULL DEFAULT 0,
  `me_type` enum('send','recv') NOT NULL DEFAULT 'recv',
  `me_send_ip` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_menu`
--

CREATE TABLE `g5_menu` (
  `me_id` int(11) NOT NULL,
  `me_code` varchar(255) NOT NULL DEFAULT '',
  `me_name` varchar(255) NOT NULL DEFAULT '',
  `me_link` varchar(255) NOT NULL DEFAULT '',
  `me_target` varchar(255) NOT NULL DEFAULT '',
  `me_order` int(11) NOT NULL DEFAULT 0,
  `me_use` tinyint(4) NOT NULL DEFAULT 0,
  `me_mobile_use` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_new_win`
--

CREATE TABLE `g5_new_win` (
  `nw_id` int(11) NOT NULL,
  `nw_division` varchar(10) NOT NULL DEFAULT 'both',
  `nw_device` varchar(10) NOT NULL DEFAULT 'both',
  `nw_begin_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_disable_hours` int(11) NOT NULL DEFAULT 0,
  `nw_left` int(11) NOT NULL DEFAULT 0,
  `nw_top` int(11) NOT NULL DEFAULT 0,
  `nw_height` int(11) NOT NULL DEFAULT 0,
  `nw_width` int(11) NOT NULL DEFAULT 0,
  `nw_subject` text NOT NULL,
  `nw_content` text NOT NULL,
  `nw_content_html` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_point`
--

CREATE TABLE `g5_point` (
  `po_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `po_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `po_content` varchar(255) NOT NULL DEFAULT '',
  `po_point` int(11) NOT NULL DEFAULT 0,
  `po_use_point` int(11) NOT NULL DEFAULT 0,
  `po_expired` tinyint(4) NOT NULL DEFAULT 0,
  `po_expire_date` date NOT NULL DEFAULT '0000-00-00',
  `po_mb_point` int(11) NOT NULL DEFAULT 0,
  `po_rel_table` varchar(20) NOT NULL DEFAULT '',
  `po_rel_id` varchar(20) NOT NULL DEFAULT '',
  `po_rel_action` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_point`
--

INSERT INTO `g5_point` (`po_id`, `mb_id`, `po_datetime`, `po_content`, `po_point`, `po_use_point`, `po_expired`, `po_expire_date`, `po_mb_point`, `po_rel_table`, `po_rel_id`, `po_rel_action`) VALUES
(1, 'admin', '2024-06-04 10:09:04', '2024-06-04 첫로그인', 100, 0, 0, '9999-12-31', 100, '@login', 'admin', '2024-06-04'),
(2, 'admin', '2024-06-05 10:31:56', '2024-06-05 첫로그인', 100, 0, 0, '9999-12-31', 200, '@login', 'admin', '2024-06-05');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_poll`
--

CREATE TABLE `g5_poll` (
  `po_id` int(11) NOT NULL,
  `po_subject` varchar(255) NOT NULL DEFAULT '',
  `po_poll1` varchar(255) NOT NULL DEFAULT '',
  `po_poll2` varchar(255) NOT NULL DEFAULT '',
  `po_poll3` varchar(255) NOT NULL DEFAULT '',
  `po_poll4` varchar(255) NOT NULL DEFAULT '',
  `po_poll5` varchar(255) NOT NULL DEFAULT '',
  `po_poll6` varchar(255) NOT NULL DEFAULT '',
  `po_poll7` varchar(255) NOT NULL DEFAULT '',
  `po_poll8` varchar(255) NOT NULL DEFAULT '',
  `po_poll9` varchar(255) NOT NULL DEFAULT '',
  `po_cnt1` int(11) NOT NULL DEFAULT 0,
  `po_cnt2` int(11) NOT NULL DEFAULT 0,
  `po_cnt3` int(11) NOT NULL DEFAULT 0,
  `po_cnt4` int(11) NOT NULL DEFAULT 0,
  `po_cnt5` int(11) NOT NULL DEFAULT 0,
  `po_cnt6` int(11) NOT NULL DEFAULT 0,
  `po_cnt7` int(11) NOT NULL DEFAULT 0,
  `po_cnt8` int(11) NOT NULL DEFAULT 0,
  `po_cnt9` int(11) NOT NULL DEFAULT 0,
  `po_etc` varchar(255) NOT NULL DEFAULT '',
  `po_level` tinyint(4) NOT NULL DEFAULT 0,
  `po_point` int(11) NOT NULL DEFAULT 0,
  `po_date` date NOT NULL DEFAULT '0000-00-00',
  `po_ips` mediumtext NOT NULL,
  `mb_ids` text NOT NULL,
  `po_use` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_poll_etc`
--

CREATE TABLE `g5_poll_etc` (
  `pc_id` int(11) NOT NULL DEFAULT 0,
  `po_id` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `pc_name` varchar(255) NOT NULL DEFAULT '',
  `pc_idea` varchar(255) NOT NULL DEFAULT '',
  `pc_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_popular`
--

CREATE TABLE `g5_popular` (
  `pp_id` int(11) NOT NULL,
  `pp_word` varchar(50) NOT NULL DEFAULT '',
  `pp_date` date NOT NULL DEFAULT '0000-00-00',
  `pp_ip` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_qa_config`
--

CREATE TABLE `g5_qa_config` (
  `qa_id` int(11) NOT NULL,
  `qa_title` varchar(255) NOT NULL DEFAULT '',
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_use_email` tinyint(4) NOT NULL DEFAULT 0,
  `qa_req_email` tinyint(4) NOT NULL DEFAULT 0,
  `qa_use_hp` tinyint(4) NOT NULL DEFAULT 0,
  `qa_req_hp` tinyint(4) NOT NULL DEFAULT 0,
  `qa_use_sms` tinyint(4) NOT NULL DEFAULT 0,
  `qa_send_number` varchar(255) NOT NULL DEFAULT '0',
  `qa_admin_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_admin_email` varchar(255) NOT NULL DEFAULT '',
  `qa_use_editor` tinyint(4) NOT NULL DEFAULT 0,
  `qa_subject_len` int(11) NOT NULL DEFAULT 0,
  `qa_mobile_subject_len` int(11) NOT NULL DEFAULT 0,
  `qa_page_rows` int(11) NOT NULL DEFAULT 0,
  `qa_mobile_page_rows` int(11) NOT NULL DEFAULT 0,
  `qa_image_width` int(11) NOT NULL DEFAULT 0,
  `qa_upload_size` int(11) NOT NULL DEFAULT 0,
  `qa_insert_content` text NOT NULL,
  `qa_include_head` varchar(255) NOT NULL DEFAULT '',
  `qa_include_tail` varchar(255) NOT NULL DEFAULT '',
  `qa_content_head` text NOT NULL,
  `qa_content_tail` text NOT NULL,
  `qa_mobile_content_head` text NOT NULL,
  `qa_mobile_content_tail` text NOT NULL,
  `qa_1_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_2_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_3_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_4_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_5_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_qa_config`
--

INSERT INTO `g5_qa_config` (`qa_id`, `qa_title`, `qa_category`, `qa_skin`, `qa_mobile_skin`, `qa_use_email`, `qa_req_email`, `qa_use_hp`, `qa_req_hp`, `qa_use_sms`, `qa_send_number`, `qa_admin_hp`, `qa_admin_email`, `qa_use_editor`, `qa_subject_len`, `qa_mobile_subject_len`, `qa_page_rows`, `qa_mobile_page_rows`, `qa_image_width`, `qa_upload_size`, `qa_insert_content`, `qa_include_head`, `qa_include_tail`, `qa_content_head`, `qa_content_tail`, `qa_mobile_content_head`, `qa_mobile_content_tail`, `qa_1_subj`, `qa_2_subj`, `qa_3_subj`, `qa_4_subj`, `qa_5_subj`, `qa_1`, `qa_2`, `qa_3`, `qa_4`, `qa_5`) VALUES
(1, '1:1문의', '회원|포인트', 'basic', 'basic', 1, 0, 1, 0, 0, '0', '', '', 1, 60, 30, 15, 15, 600, 1048576, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_qa_content`
--

CREATE TABLE `g5_qa_content` (
  `qa_id` int(11) NOT NULL,
  `qa_num` int(11) NOT NULL DEFAULT 0,
  `qa_parent` int(11) NOT NULL DEFAULT 0,
  `qa_related` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `qa_name` varchar(255) NOT NULL DEFAULT '',
  `qa_email` varchar(255) NOT NULL DEFAULT '',
  `qa_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_type` tinyint(4) NOT NULL DEFAULT 0,
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_email_recv` tinyint(4) NOT NULL DEFAULT 0,
  `qa_sms_recv` tinyint(4) NOT NULL DEFAULT 0,
  `qa_html` tinyint(4) NOT NULL DEFAULT 0,
  `qa_subject` varchar(255) NOT NULL DEFAULT '',
  `qa_content` text NOT NULL,
  `qa_status` tinyint(4) NOT NULL DEFAULT 0,
  `qa_file1` varchar(255) NOT NULL DEFAULT '',
  `qa_source1` varchar(255) NOT NULL DEFAULT '',
  `qa_file2` varchar(255) NOT NULL DEFAULT '',
  `qa_source2` varchar(255) NOT NULL DEFAULT '',
  `qa_ip` varchar(255) NOT NULL DEFAULT '',
  `qa_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_scrap`
--

CREATE TABLE `g5_scrap` (
  `ms_id` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` varchar(15) NOT NULL DEFAULT '',
  `ms_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_uniqid`
--

CREATE TABLE `g5_uniqid` (
  `uq_id` bigint(20) UNSIGNED NOT NULL,
  `uq_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_uniqid`
--

INSERT INTO `g5_uniqid` (`uq_id`, `uq_ip`) VALUES
(2024060516460334, '::1'),
(2024060516460910, '::1'),
(2024060517031449, '::1'),
(2024060517064007, '::1'),
(2024060517084351, '::1'),
(2024060517095921, '::1'),
(2024060517101437, '::1'),
(2024060517105284, '::1'),
(2024060517130354, '::1'),
(2024060517133421, '::1'),
(2024060517161956, '::1'),
(2024060517172134, '::1'),
(2024060517174925, '::1'),
(2024060517215341, '::1'),
(2024060517220919, '::1'),
(2024060517251517, '::1'),
(2024060517252288, '::1'),
(2024060517252454, '::1'),
(2024060517260548, '::1'),
(2024060517261535, '::1'),
(2024060517275030, '::1'),
(2024060517292274, '::1'),
(2024060517293898, '::1'),
(2024060517295461, '::1'),
(2024060710184242, '::1'),
(2024060710201815, '::1'),
(2024060710341011, '::1'),
(2024060710421437, '::1'),
(2024060710515889, '::1'),
(2024060711015891, '::1'),
(2024060711143307, '::1'),
(2024060711144563, '::1'),
(2024060711375060, '::1'),
(2024060712313056, '::1'),
(2024060713123111, '::1'),
(2024060714505780, '::1'),
(2024060714514456, '::1'),
(2024060714522145, '::1'),
(2024060714531646, '::1'),
(2024060714531985, '::1'),
(2024060715073494, '::1'),
(2024060715163819, '::1'),
(2024060715190047, '::1'),
(2024060715283361, '::1'),
(2024060715333418, '::1'),
(2024060715341282, '::1'),
(2024060715343882, '::1'),
(2024060715353725, '::1'),
(2024060715360124, '::1'),
(2024060715363352, '::1'),
(2024060715365809, '::1'),
(2024060715373479, '::1'),
(2024060716240507, '::1'),
(2024060716594837, '::1');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_visit`
--

CREATE TABLE `g5_visit` (
  `vi_id` int(11) NOT NULL,
  `vi_ip` varchar(100) NOT NULL DEFAULT '',
  `vi_date` date NOT NULL DEFAULT '0000-00-00',
  `vi_time` time NOT NULL DEFAULT '00:00:00',
  `vi_referer` text NOT NULL,
  `vi_agent` varchar(200) NOT NULL DEFAULT '',
  `vi_browser` varchar(255) NOT NULL DEFAULT '',
  `vi_os` varchar(255) NOT NULL DEFAULT '',
  `vi_device` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_visit`
--

INSERT INTO `g5_visit` (`vi_id`, `vi_ip`, `vi_date`, `vi_time`, `vi_referer`, `vi_agent`, `vi_browser`, `vi_os`, `vi_device`) VALUES
(1, '::1', '2024-06-03', '15:33:33', 'http://localhost/install/install_db.php', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '', '', ''),
(2, '::1', '2024-06-04', '17:45:05', 'http://localhost/index.php', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '', '', ''),
(3, '::1', '2024-06-05', '18:08:42', 'http://localhost/', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '', '', ''),
(4, '::1', '2024-06-07', '10:07:20', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_visit_sum`
--

CREATE TABLE `g5_visit_sum` (
  `vs_date` date NOT NULL DEFAULT '0000-00-00',
  `vs_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_visit_sum`
--

INSERT INTO `g5_visit_sum` (`vs_date`, `vs_count`) VALUES
('2024-06-03', 1),
('2024-06-04', 1),
('2024-06-05', 1),
('2024-06-07', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_before_after`
--

CREATE TABLE `g5_write_before_after` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_write_before_after`
--

INSERT INTO `g5_write_before_after` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_seo_title`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(1, -1, '', 1, 0, 0, '', '', '', '전후사진 공개!', '전후사진입니다!!!!', '전후사진-공개', '', '', 0, 0, 2, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 17:00:06', 1, '2024-06-07 17:00:06', '::1', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_event`
--

CREATE TABLE `g5_write_event` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_write_event`
--

INSERT INTO `g5_write_event` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_seo_title`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(1, -1, '', 1, 0, 0, '', '', 'html1', '이벤트 공지사항입니당', '<p>음하하하하하</p><p><span style=\"font-size: 18pt;\">﻿키키키키키키</span>&nbsp;</p><p><span style=\"font-size: 18pt;\">후후후흐흐<b>​<br>메롱!</b></span></p>', '이벤트-공지사항입니당', '', '', 0, 0, 3, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 14:54:12', 1, '2024-06-07 14:54:12', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, -2, '', 2, 0, 0, '', '', 'html1', '이벤트!! 시작합니당! 이벤트에요!', '<p>말도안되는 이벤트!!</p><p>다퍼준다!</p>', '이벤트-시작합니당-이벤트에요', 'http://www.naver.com', '', 0, 0, 2, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 15:08:09', 1, '2024-06-07 15:08:09', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, -3, '', 3, 0, 0, '', '', 'html1', '이것또한 이벤트!!!!!!!!!', '<p>음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당음하하하하! 다 퍼준당</p>', '이것또한-이벤트', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:17:10', 1, '2024-06-07 15:17:10', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, -4, '', 4, 0, 0, '', '', 'html1', '이런 이벤트만 하면!!!!!!!!!!!!', '<p>좋겟네~~</p><p>하하하하</p><p>음하하하</p><p>히히</p>', '이런-이벤트만-하면', '', '', 0, 0, 2, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:19:31', 1, '2024-06-07 15:19:31', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, -5, '', 5, 0, 0, '', '', 'html1', '아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트', '<p>아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트아아아!!마이크테스트<br></p>', '아아아마이크테스트아아아마이크테스트아아아마이크테스트아아아마이크테스트', '', '', 0, 0, 2, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:28:55', 1, '2024-06-07 15:28:55', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, -6, '', 6, 0, 0, '', '', 'html1', '내용 입력 테스트입니당~~', '<p>내용을 입력을 막~~~해보구있어요~~</p>', '내용-입력-테스트입니당', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:33:59', 1, '2024-06-07 15:33:59', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, -7, '', 7, 0, 0, '', '', 'html1', '또 테스트당', '<p>흠 힘들엉</p>', '또-테스트당', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:34:27', 1, '2024-06-07 15:34:27', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, -8, '', 8, 0, 0, '', '', 'html1', '이건어떨깡?', '<p><img src=\"http://localhost/data/editor/2406/c1fd7a3994aab067f709f72d7b8e069a_1717742096_2212.jpg\" title=\"c1fd7a3994aab067f709f72d7b8e069a_1717742096_2212.jpg\"><br style=\"clear:both;\">이건 어떠냐 이거여!</p>', '이건어떨깡', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:35:07', 0, '2024-06-07 15:35:07', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, -9, '', 9, 0, 0, '', '', 'html1', '슬슬 힘들어져요', '<p>아이고 힘들어요</p>', '슬슬-힘들어져요', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:35:53', 1, '2024-06-07 15:35:53', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, -10, '', 10, 0, 0, '', '', 'html1', '나 이제 가는거여', '<p>가는거여지금</p>', '나-이제-가는거여', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:36:20', 1, '2024-06-07 15:36:20', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, -11, '', 11, 0, 0, '', '', 'html1', '힘들어 죽는거여', '<p>ㅠㅠ</p>', '힘들어-죽는거여', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:36:45', 0, '2024-06-07 15:36:45', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, -12, '', 12, 0, 0, '', '', 'html1', '이게머여??', '<p>내용은 꼭 입력해야대는거여</p>', '이게머여', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:37:22', 1, '2024-06-07 15:37:22', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, -13, '', 13, 0, 0, '', '', 'html1', '이거할라고 이렇게 한거여 많이', '<p>ㅎㅎㅎ</p>', '이거할라고-이렇게-한거여-많이', '', '', 0, 0, 1, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 15:37:51', 1, '2024-06-07 15:37:51', '::1', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_fast_consulting`
--

CREATE TABLE `g5_write_fast_consulting` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_free`
--

CREATE TABLE `g5_write_free` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_gallery`
--

CREATE TABLE `g5_write_gallery` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_notice`
--

CREATE TABLE `g5_write_notice` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_write_notice`
--

INSERT INTO `g5_write_notice` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_seo_title`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(1, -1, '', 1, 0, 0, '', '', '', 'test공지입니다.', '공지사항 테스트입니다.', 'test공지입니다', '', '', 0, 0, 3, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-05 17:30:16', 0, '2024-06-05 17:30:16', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, -2, '', 2, 0, 0, '', '', '', '공지사항 테스트 두번째 입니다.', '랄라랄라룰라룰라\r\n화이팅\r\n\r\n얼릉 얼릉!!!\r\n\r\n허리허리!!! 허리업!!', '공지사항-테스트-두번째-입니다', '', '', 0, 0, 2, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 10:19:19', 0, '2024-06-07 10:19:19', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, -4, '', 4, 0, 0, '', '', '', '4번째 공지인거여!!!4번째여!', '배아프다 배아파', '4번째-공지인거여4번째여', '', '', 0, 0, 2, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 10:34:52', 0, '2024-06-07 10:34:52', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, -5, '', 5, 0, 0, '', '', '', '이건 다섯번째 이벤트', '너와 나의 \r\n연결고리 연결고리', '이건-다섯번째-이벤트', '', '', 0, 0, 2, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 10:42:32', 0, '2024-06-07 10:42:32', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, -6, '', 6, 0, 0, '', '', '', '여섯번째지롱', 'ㅇㄻㄴㅇㄹ', '여섯번째지롱', '', '', 0, 0, 2, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 10:51:24', 0, '2024-06-07 10:51:24', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, -7, '', 8, 0, 0, '', '', 'html1', '이건어떠냐.', '<p><img src=\"http://localhost/data/editor/2406/e76c2b684e0b2eacb94bfcafb98d8687_1717726524_6025.jpg\" title=\"e76c2b684e0b2eacb94bfcafb98d8687_1717726524_6025.jpg\"><br style=\"clear:both;\">&nbsp;</p>', '이건어떠냐', '', '', 0, 0, 1, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 11:15:33', 0, '2024-06-07 11:15:33', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, -8, '', 9, 0, 0, '', '', 'html1', '야이누마', '<p>ㅎㅎㅎ</p>', '야이누마', '', '', 0, 0, 1, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 11:38:03', 0, '2024-06-07 11:38:03', '::1', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, -9, '', 10, 0, 0, '', '', 'html1', '야이눔잉', '<p>ㅎㅁㅎㅁㅎㅁㅁㅎ</p>', '야이눔잉', '', '', 0, 0, 3, 0, 0, 'admin', '', '최고관리자', 'admin@domain.com', '', '2024-06-07 11:38:53', 1, '2024-06-07 11:38:53', '::1', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_qa`
--

CREATE TABLE `g5_write_qa` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `g5_write_review`
--

CREATE TABLE `g5_write_review` (
  `wr_id` int(11) NOT NULL,
  `wr_num` int(11) NOT NULL DEFAULT 0,
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT 0,
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT 0,
  `wr_comment` int(11) NOT NULL DEFAULT 0,
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT 0,
  `wr_link2_hit` int(11) NOT NULL DEFAULT 0,
  `wr_hit` int(11) NOT NULL DEFAULT 0,
  `wr_good` int(11) NOT NULL DEFAULT 0,
  `wr_nogood` int(11) NOT NULL DEFAULT 0,
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT 0,
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `g5_write_review`
--

INSERT INTO `g5_write_review` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_seo_title`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`) VALUES
(1, -1, '', 1, 0, 0, '', '', '', '리셋에서 눈 밑 시술 받았어요!', '진짜 완전 최고!', '리셋에서-눈-밑-시술-받았어요', '', '', 0, 0, 2, 0, 0, 'admin', '', '리셋의원', 'admin@domain.com', '', '2024-06-07 16:24:38', 1, '2024-06-07 16:24:38', '::1', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `g5_auth`
--
ALTER TABLE `g5_auth`
  ADD PRIMARY KEY (`mb_id`,`au_menu`);

--
-- 테이블의 인덱스 `g5_autosave`
--
ALTER TABLE `g5_autosave`
  ADD PRIMARY KEY (`as_id`),
  ADD UNIQUE KEY `as_uid` (`as_uid`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_board`
--
ALTER TABLE `g5_board`
  ADD PRIMARY KEY (`bo_table`);

--
-- 테이블의 인덱스 `g5_board_file`
--
ALTER TABLE `g5_board_file`
  ADD PRIMARY KEY (`bo_table`,`wr_id`,`bf_no`);

--
-- 테이블의 인덱스 `g5_board_good`
--
ALTER TABLE `g5_board_good`
  ADD PRIMARY KEY (`bg_id`),
  ADD UNIQUE KEY `fkey1` (`bo_table`,`wr_id`,`mb_id`);

--
-- 테이블의 인덱스 `g5_board_new`
--
ALTER TABLE `g5_board_new`
  ADD PRIMARY KEY (`bn_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_cert_history`
--
ALTER TABLE `g5_cert_history`
  ADD PRIMARY KEY (`cr_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_config`
--
ALTER TABLE `g5_config`
  ADD PRIMARY KEY (`cf_id`);

--
-- 테이블의 인덱스 `g5_content`
--
ALTER TABLE `g5_content`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `co_seo_title` (`co_seo_title`);

--
-- 테이블의 인덱스 `g5_faq`
--
ALTER TABLE `g5_faq`
  ADD PRIMARY KEY (`fa_id`),
  ADD KEY `fm_id` (`fm_id`);

--
-- 테이블의 인덱스 `g5_faq_master`
--
ALTER TABLE `g5_faq_master`
  ADD PRIMARY KEY (`fm_id`);

--
-- 테이블의 인덱스 `g5_group`
--
ALTER TABLE `g5_group`
  ADD PRIMARY KEY (`gr_id`);

--
-- 테이블의 인덱스 `g5_group_member`
--
ALTER TABLE `g5_group_member`
  ADD PRIMARY KEY (`gm_id`),
  ADD KEY `gr_id` (`gr_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_login`
--
ALTER TABLE `g5_login`
  ADD PRIMARY KEY (`lo_id`),
  ADD UNIQUE KEY `lo_ip_unique` (`lo_ip`);

--
-- 테이블의 인덱스 `g5_mail`
--
ALTER TABLE `g5_mail`
  ADD PRIMARY KEY (`ma_id`);

--
-- 테이블의 인덱스 `g5_member`
--
ALTER TABLE `g5_member`
  ADD PRIMARY KEY (`mb_no`),
  ADD UNIQUE KEY `mb_id` (`mb_id`),
  ADD KEY `mb_today_login` (`mb_today_login`),
  ADD KEY `mb_datetime` (`mb_datetime`);

--
-- 테이블의 인덱스 `g5_member_cert_history`
--
ALTER TABLE `g5_member_cert_history`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_member_social_profiles`
--
ALTER TABLE `g5_member_social_profiles`
  ADD UNIQUE KEY `mp_no` (`mp_no`),
  ADD KEY `mb_id` (`mb_id`),
  ADD KEY `provider` (`provider`);

--
-- 테이블의 인덱스 `g5_memo`
--
ALTER TABLE `g5_memo`
  ADD PRIMARY KEY (`me_id`),
  ADD KEY `me_recv_mb_id` (`me_recv_mb_id`);

--
-- 테이블의 인덱스 `g5_menu`
--
ALTER TABLE `g5_menu`
  ADD PRIMARY KEY (`me_id`);

--
-- 테이블의 인덱스 `g5_new_win`
--
ALTER TABLE `g5_new_win`
  ADD PRIMARY KEY (`nw_id`);

--
-- 테이블의 인덱스 `g5_point`
--
ALTER TABLE `g5_point`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `index1` (`mb_id`,`po_rel_table`,`po_rel_id`,`po_rel_action`),
  ADD KEY `index2` (`po_expire_date`);

--
-- 테이블의 인덱스 `g5_poll`
--
ALTER TABLE `g5_poll`
  ADD PRIMARY KEY (`po_id`);

--
-- 테이블의 인덱스 `g5_poll_etc`
--
ALTER TABLE `g5_poll_etc`
  ADD PRIMARY KEY (`pc_id`);

--
-- 테이블의 인덱스 `g5_popular`
--
ALTER TABLE `g5_popular`
  ADD PRIMARY KEY (`pp_id`),
  ADD UNIQUE KEY `index1` (`pp_date`,`pp_word`,`pp_ip`);

--
-- 테이블의 인덱스 `g5_qa_config`
--
ALTER TABLE `g5_qa_config`
  ADD PRIMARY KEY (`qa_id`);

--
-- 테이블의 인덱스 `g5_qa_content`
--
ALTER TABLE `g5_qa_content`
  ADD PRIMARY KEY (`qa_id`),
  ADD KEY `qa_num_parent` (`qa_num`,`qa_parent`);

--
-- 테이블의 인덱스 `g5_scrap`
--
ALTER TABLE `g5_scrap`
  ADD PRIMARY KEY (`ms_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- 테이블의 인덱스 `g5_uniqid`
--
ALTER TABLE `g5_uniqid`
  ADD PRIMARY KEY (`uq_id`);

--
-- 테이블의 인덱스 `g5_visit`
--
ALTER TABLE `g5_visit`
  ADD PRIMARY KEY (`vi_id`),
  ADD UNIQUE KEY `index1` (`vi_ip`,`vi_date`),
  ADD KEY `index2` (`vi_date`);

--
-- 테이블의 인덱스 `g5_visit_sum`
--
ALTER TABLE `g5_visit_sum`
  ADD PRIMARY KEY (`vs_date`),
  ADD KEY `index1` (`vs_count`);

--
-- 테이블의 인덱스 `g5_write_before_after`
--
ALTER TABLE `g5_write_before_after`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_event`
--
ALTER TABLE `g5_write_event`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_fast_consulting`
--
ALTER TABLE `g5_write_fast_consulting`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_free`
--
ALTER TABLE `g5_write_free`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_gallery`
--
ALTER TABLE `g5_write_gallery`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_notice`
--
ALTER TABLE `g5_write_notice`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_qa`
--
ALTER TABLE `g5_write_qa`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 테이블의 인덱스 `g5_write_review`
--
ALTER TABLE `g5_write_review`
  ADD PRIMARY KEY (`wr_id`),
  ADD KEY `wr_seo_title` (`wr_seo_title`),
  ADD KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  ADD KEY `wr_is_comment` (`wr_is_comment`,`wr_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `g5_autosave`
--
ALTER TABLE `g5_autosave`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_board_good`
--
ALTER TABLE `g5_board_good`
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_board_new`
--
ALTER TABLE `g5_board_new`
  MODIFY `bn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `g5_cert_history`
--
ALTER TABLE `g5_cert_history`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_config`
--
ALTER TABLE `g5_config`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_faq`
--
ALTER TABLE `g5_faq`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_faq_master`
--
ALTER TABLE `g5_faq_master`
  MODIFY `fm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_group_member`
--
ALTER TABLE `g5_group_member`
  MODIFY `gm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_login`
--
ALTER TABLE `g5_login`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_mail`
--
ALTER TABLE `g5_mail`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_member`
--
ALTER TABLE `g5_member`
  MODIFY `mb_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `g5_member_cert_history`
--
ALTER TABLE `g5_member_cert_history`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_member_social_profiles`
--
ALTER TABLE `g5_member_social_profiles`
  MODIFY `mp_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_memo`
--
ALTER TABLE `g5_memo`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_menu`
--
ALTER TABLE `g5_menu`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_new_win`
--
ALTER TABLE `g5_new_win`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_point`
--
ALTER TABLE `g5_point`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `g5_poll`
--
ALTER TABLE `g5_poll`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_popular`
--
ALTER TABLE `g5_popular`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_qa_config`
--
ALTER TABLE `g5_qa_config`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_qa_content`
--
ALTER TABLE `g5_qa_content`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_scrap`
--
ALTER TABLE `g5_scrap`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_visit`
--
ALTER TABLE `g5_visit`
  MODIFY `vi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `g5_write_before_after`
--
ALTER TABLE `g5_write_before_after`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `g5_write_event`
--
ALTER TABLE `g5_write_event`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 테이블의 AUTO_INCREMENT `g5_write_fast_consulting`
--
ALTER TABLE `g5_write_fast_consulting`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_free`
--
ALTER TABLE `g5_write_free`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_gallery`
--
ALTER TABLE `g5_write_gallery`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_notice`
--
ALTER TABLE `g5_write_notice`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 테이블의 AUTO_INCREMENT `g5_write_qa`
--
ALTER TABLE `g5_write_qa`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `g5_write_review`
--
ALTER TABLE `g5_write_review`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
