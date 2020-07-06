-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2019-01-02 11:11:33
-- 服务器版本： 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yy`
--

-- --------------------------------------------------------

--
-- 表的结构 `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `administration_id` int(8) NOT NULL,
  `administration` int(8) NOT NULL,
  `pwd` char(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`administration_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `administration`
--

INSERT INTO `administration` (`administration_id`, `administration`, `pwd`) VALUES
(1, 1, '1'),
(2, 2, 'c81e728d9d4c2f636f067f89cc14862c');

-- --------------------------------------------------------

--
-- 表的结构 `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `colNo` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `CNo` int(10) NOT NULL,
  `type` int(4) NOT NULL,
  PRIMARY KEY (`colNo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `commentNo` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `userName` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `songNo` int(10) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `commentTime` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`commentNo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`commentNo`, `user_id`, `userName`, `songNo`, `content`, `commentTime`) VALUES
(1, 1, '', 1, '666', '0'),
(2, 1, '小白', 2, '666', '2019-01-02 12:17:35'),
(3, 1, '小白', 2, '222', '2019-01-02 12:17:42');

-- --------------------------------------------------------

--
-- 表的结构 `likecomment`
--

DROP TABLE IF EXISTS `likecomment`;
CREATE TABLE IF NOT EXISTS `likecomment` (
  `user_id` int(8) NOT NULL,
  `commentNo` int(10) NOT NULL,
  `songNo` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `likecomment`
--

INSERT INTO `likecomment` (`user_id`, `commentNo`, `songNo`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 2),
(1, 2, 2),
(1, 3, 2);

-- --------------------------------------------------------

--
-- 表的结构 `list`
--

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `listNo` int(10) NOT NULL AUTO_INCREMENT,
  `listName` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `songNo` int(10) NOT NULL,
  `tag` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `play` int(12) NOT NULL,
  `collect` int(12) NOT NULL,
  PRIMARY KEY (`listNo`)
) ENGINE=MyISAM AUTO_INCREMENT=489558 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `list`
--

INSERT INTO `list` (`listNo`, `listName`, `user_id`, `songNo`, `tag`, `play`, `collect`) VALUES
(1, '治愈你每个失眠夜', 1, 1, '失眠', 8888, 6666),
(2, '治愈你每个失眠夜', 1, 3, '失眠', 8888, 6666),
(3, '治愈你每个失眠夜', 1, 2, '失眠', 8888, 6666),
(4, '治愈你每个失眠夜', 1, 5, '失眠', 8888, 6666),
(5, '治愈你每个失眠夜', 1, 21, '失眠', 8888, 6666),
(6, '治愈你每个失眠夜', 1, 15, '失眠', 8888, 6666),
(7, '治愈你每个失眠夜', 1, 6, '失眠', 8888, 6666),
(8, '治愈你每个失眠夜', 1, 4, '失眠', 8888, 6666),
(9, '治愈你每个失眠夜', 1, 7, '失眠', 8888, 6666),
(10, '晚睡党的安心枕头', 1, 6, '熬夜', 8666, 5444),
(11, '晚睡党的安心枕头', 1, 9, '熬夜', 8666, 5444),
(12, '晚睡党的安心枕头', 1, 8, '熬夜', 8666, 5444),
(13, '晚睡党的安心枕头', 1, 13, '熬夜', 8666, 5444),
(14, '晚睡党的安心枕头', 1, 17, '熬夜', 8666, 5444),
(15, '晚睡党的安心枕头', 1, 11, '熬夜', 8666, 5444),
(16, '空洞的声音', 1, 1, '空灵', 8888, 6666),
(17, '空洞的声音', 1, 3, '空灵', 8888, 6666),
(18, '空洞的声音', 1, 2, '空灵', 8888, 6666),
(19, '空洞的声音', 1, 5, '空灵', 8888, 6666),
(20, '空洞的声音', 1, 21, '空灵', 8888, 6666),
(21, '空洞的声音', 1, 15, '空灵', 8888, 6666),
(22, '空洞的声音', 1, 6, '空灵', 8888, 6666),
(23, '空洞的声音', 1, 4, '空灵', 8888, 6666),
(24, '云雾梦境', 1, 1, '梦幻', 8666, 5444),
(25, '云雾梦境', 1, 5, '梦幻', 8666, 5444),
(26, '云雾梦境', 1, 2, '梦幻', 8666, 5444),
(27, '云雾梦境', 1, 3, '梦幻', 8666, 5444),
(28, '云雾梦境', 1, 9, '梦幻', 8666, 5444),
(29, '云雾梦境', 1, 16, '梦幻', 8666, 5444),
(30, '云雾梦境', 1, 15, '梦幻', 8666, 5444),
(31, '云雾梦境', 1, 12, '梦幻', 8666, 5444),
(32, '云雾梦境', 1, 13, '梦幻', 8666, 5444),
(33, '云雾梦境', 1, 18, '梦幻', 8666, 5444),
(34, '云雾梦境', 1, 20, '梦幻', 8666, 5444),
(35, '云雾梦境', 1, 21, '梦幻', 8666, 5444),
(36, '提神夜读电子', 2, 3, '熬夜', 8000, 6000),
(37, '提神夜读电子', 2, 2, '熬夜', 8000, 6000),
(38, '提神夜读电子', 2, 5, '熬夜', 8000, 6000),
(39, '提神夜读电子', 2, 4, '熬夜', 8000, 6000),
(40, '提神夜读电子', 2, 8, '熬夜', 8000, 6000),
(41, '提神夜读电子', 2, 9, '熬夜', 8000, 6000),
(42, '提神夜读电子', 2, 6, '熬夜', 8000, 6000),
(43, '一扫郁闷的不列颠', 2, 12, '欢快', 16212, 12682),
(44, '一扫郁闷的不列颠', 2, 15, '欢快', 16212, 12682),
(45, '一扫郁闷的不列颠', 2, 2, '欢快', 16212, 12682),
(46, '一扫郁闷的不列颠', 2, 3, '欢快', 16212, 12682),
(47, '一扫郁闷的不列颠', 2, 7, '欢快', 16212, 12682),
(48, '一扫郁闷的不列颠', 2, 6, '欢快', 16212, 12682),
(49, '一扫郁闷的不列颠', 2, 4, '欢快', 16212, 12682),
(50, '一扫郁闷的不列颠', 2, 19, '欢快', 16212, 12682),
(51, '一扫郁闷的不列颠', 2, 10, '欢快', 16212, 12682),
(52, '一扫郁闷的不列颠', 2, 23, '欢快', 16212, 12682),
(53, '一扫郁闷的不列颠', 2, 22, '欢快', 16212, 12682),
(54, '催眠系Chillout', 2, 6, '', 6547, 3289),
(55, '催眠系Chillout', 2, 4, '', 6547, 3289),
(56, '催眠系Chillout', 2, 19, '', 6547, 3289),
(57, '催眠系Chillout', 2, 10, '', 6547, 3289),
(58, '催眠系Chillout', 2, 23, '', 6547, 3289),
(59, '催眠系Chillout', 2, 22, '', 6547, 3289),
(60, '聆听天空的声音', 2, 2, '', 15842, 6872),
(61, '聆听天空的声音', 2, 8, '', 15842, 6872),
(62, '聆听天空的声音', 2, 14, '', 15842, 6872),
(63, '聆听天空的声音', 2, 16, '', 15842, 6872),
(64, '聆听天空的声音', 2, 6, '', 15842, 6872),
(65, '聆听天空的声音', 2, 4, '', 15842, 6872),
(66, '聆听天空的声音', 2, 19, '', 15842, 6872),
(67, '聆听天空的声音', 2, 10, '', 15842, 6872),
(68, '聆听天空的声音', 2, 23, '', 15842, 6872),
(69, '聆听天空的声音', 2, 22, '', 15842, 6872),
(70, '老家午后的一缕清风', 2, 20, '休闲', 8692, 7981),
(71, '老家午后的一缕清风', 2, 8, '休闲', 8692, 7981),
(72, '老家午后的一缕清风', 2, 14, '休闲', 8692, 7981),
(73, '老家午后的一缕清风', 2, 15, '休闲', 8692, 7981),
(74, '老家午后的一缕清风', 2, 6, '休闲', 8692, 7981),
(75, '老家午后的一缕清风', 2, 2, '休闲', 8692, 7981),
(76, '老家午后的一缕清风', 2, 11, '休闲', 8692, 7981),
(77, '老家午后的一缕清风', 2, 19, '休闲', 8692, 7981),
(78, '老家午后的一缕清风', 2, 23, '休闲', 8692, 7981),
(79, '老家午后的一缕清风', 2, 22, '休闲', 8692, 7981),
(80, '像你波澜不惊的心海', 3, 9, '安静', 86951, 79214),
(81, '像你波澜不惊的心海', 3, 8, '安静', 86951, 79214),
(82, '像你波澜不惊的心海', 3, 14, '安静', 86951, 79214),
(83, '像你波澜不惊的心海', 3, 15, '安静', 86951, 79214),
(84, '像你波澜不惊的心海', 3, 6, '安静', 86951, 79214),
(85, '像你波澜不惊的心海', 3, 2, '安静', 86951, 79214),
(86, '像你波澜不惊的心海', 3, 4, '安静', 86951, 79214),
(87, '像你波澜不惊的心海', 3, 19, '安静', 86951, 79214),
(88, '像你波澜不惊的心海', 3, 23, '安静', 86951, 79214),
(89, '像你波澜不惊的心海', 3, 22, '安静', 86951, 79214),
(90, '像你波澜不惊的心海', 3, 11, '安静', 86951, 79214);

-- --------------------------------------------------------

--
-- 表的结构 `song`
--

DROP TABLE IF EXISTS `song`;
CREATE TABLE IF NOT EXISTS `song` (
  `songNo` int(10) NOT NULL,
  `songName` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `singer` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `hits` int(100) NOT NULL,
  `vip` int(4) NOT NULL DEFAULT '0' COMMENT 'vip为1',
  `language` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mood` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`songNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='歌曲表';

--
-- 转存表中的数据 `song`
--

INSERT INTO `song` (`songNo`, `songName`, `singer`, `hits`, `vip`, `language`, `mood`, `style`) VALUES
(1, '给我一个理由忘记', '黄丽玲', 666, 1, '中文', '伤感', ''),
(2, '化身孤岛的鲸', '不才', 666, 1, '中文', '伤感', ''),
(3, 'Gangsta Walk', 'Cydian', 100, 0, '', '', '电音'),
(4, 'ты любил её !', 'dalebotbeats', 100, 0, '法语', '1', '1'),
(5, 'Dream It Possibl', 'Delacey', 100, 0, '1', '1', '1'),
(6, 'Ever Eternity', 'Dennis Kuo', 100, 0, '1', '1', '1'),
(7, 'Pop Danthology 2', 'DJ Daniel Kim', 100, 0, '1', '1', '1'),
(8, '我很丑可是我很温柔', '曹格', 100, 0, '1', '1', '1'),
(9, '理想三旬', '陈鸿宇', 100, 0, '', '', ''),
(10, '不再见', '陈学冬', 100, 0, '', '', ''),
(11, '童话镇', '陈一发儿', 100, 0, '', '', ''),
(12, '走在冷风中', '二珂', 100, 0, '', '', ''),
(13, '不找了', '郭旭', 100, 0, '', '', ''),
(14, '问', '简弘亦', 100, 0, '', '', ''),
(15, '爱呀', '金玟岐', 100, 0, '', '', ''),
(16, '才华有限公司', '金玟岐', 100, 0, '', '', ''),
(17, '惊天动地', '金玟岐', 100, 0, '', '', ''),
(18, '岁月神偷', '金玟岐', 100, 0, '', '', ''),
(19, ' 小幸运（Cover 田馥甄）', '金玟岐', 100, 0, '', '', ''),
(20, '最初的梦想', '金玟岐', 100, 0, '', '', ''),
(21, '风吹麦浪', '李健', 100, 0, '', '', ''),
(22, '刚好遇见你', '李玉刚', 100, 0, '', '', ''),
(23, '七友', '梁汉文', 100, 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(8) NOT NULL,
  `userName` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` int(16) NOT NULL,
  `sex` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `birth` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `province` char(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` char(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` int(10) DEFAULT NULL,
  `vip` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `userName`, `pwd`, `sex`, `birth`, `province`, `city`, `e_mail`, `photo`, `vip`) VALUES
(1, '小白', 1, '男', '1998-10-17', '广东', '汕尾', '1241916090@qq.com', 1, 1),
(2, '卡', 1, '1', '0', '', '', '', 0, 0),
(3, '啦啦', 2, '女', '1', '', '', '', 0, 0),
(4, '啦啦啦', 3, '女', '1', '', '', '', 0, 0),
(5, '学习', 3, '女', '222.2.2', '', '', '', 0, 0),
(6, '啦啦啦啦', 1, '女', '1980.1.1', '', '', '', 6, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
