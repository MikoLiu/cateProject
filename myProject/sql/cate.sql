-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-01-09 08:22:43
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cate`
--

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE `food` (
  `fid` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `ftype` varchar(64) DEFAULT NULL,
  `fdetail` varchar(164) DEFAULT NULL,
  `fimg` varchar(128) DEFAULT NULL,
  `simg` varchar(128) DEFAULT NULL,
  `intro` varchar(128) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`fid`, `fname`, `ftype`, `fdetail`, `fimg`, `simg`, `intro`, `price`) VALUES
(5, '澳洲青柠经典牛排', 'zhucai', 'Australian blue lemon classic steak', 'img/dishes/zhucai1.jpg', 'img/dishes/s2.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(6, '美式黑椒烤牛排', 'zhucai', 'American black pepper grilled steak', 'img/dishes/zhucai2.jpg', 'img/dishes/s2.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(7, '鲜嫩深海三文鱼', 'zhucai', 'Fresh deep-sea salmon', 'img/dishes/zhucai3.jpg', 'img/dishes/s2.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(8, '清新香辣虾', 'zhucai', 'Fresh and spicy shrimp', 'img/dishes/zhucai4.jpg', 'img/dishes/s2.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(59, '澳洲经典虾', 'type0', 'Australia roast shrimp', 'img/dishes/0.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(60, '鲜嫩碳烤鸡丁', 'type1', 'Australia cheese steak', 'img/dishes/1.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(61, '鲜嫩黑椒培根', 'type2', 'Australia roast steak', 'img/dishes/2.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(62, '清新碳烤鸡丁', 'type3', 'American classic chicken', 'img/dishes/3.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(63, '鲜嫩经典虾', 'type4', 'Germany black peppersalmon', 'img/dishes/4.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(64, '美式芝士鸡丁', 'type5', 'Australia black peppershrimp', 'img/dishes/5.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(65, '澳洲芝士牛排', 'type6', 'Australia roast shrimp', 'img/dishes/6.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(66, '清新经典培根', 'type7', 'American roast salmon', 'img/dishes/7.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(67, '美式碳烤虾', 'type8', 'Freach cheese chicken', 'img/dishes/8.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(68, '澳洲经典培根', 'type9', 'Australia classic shrimp', 'img/dishes/9.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(70, '美式碳烤培根', 'type11', 'Freach classic shrimp', 'img/dishes/11.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(72, '清新香辣烤肉', 'type13', 'Australia black peppersteak', 'img/dishes/13.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(73, '美式香辣虾', 'type14', 'American roast shrimp', 'img/dishes/14.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(74, '澳洲香辣牛排', 'type15', 'Germany roast chicken', 'img/dishes/15.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(75, '法式芝士培根', 'type16', 'Australia black pepperchicken', 'img/dishes/16.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(76, '美式黑椒培根', 'type17', 'Australia roast salmon', 'img/dishes/17.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(77, '鲜嫩碳烤烤肉', 'type18', 'Freach cheese chicken', 'img/dishes/18.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(78, '美式经典烤肉', 'type19', 'American classic salmon', 'img/dishes/19.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(80, '美式香辣牛排', 'type21', 'Australia classic steak', 'img/dishes/21.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(81, '法式经典牛排', 'type22', 'Australia classic salmon', 'img/dishes/22.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(82, '鲜嫩经典烤肉', 'type23', 'American classic salmon', 'img/dishes/23.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(83, '澳洲芝士鸡丁', 'type24', 'American roast salmon', 'img/dishes/24.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(84, '法式碳烤鸡丁', 'type25', 'American classic shrimp', 'img/dishes/25.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(85, '法式香辣鸡丁', 'type26', 'Freach classic chicken', 'img/dishes/26.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(88, '清新碳烤虾', 'type29', 'Germany cheese salmon', 'img/dishes/29.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(89, '鲜嫩香辣牛排', 'type30', 'Australia black peppershrimp', 'img/dishes/30.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(91, '鲜嫩黑椒虾', 'type32', 'American classic salmon', 'img/dishes/32.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(92, '清新黑椒培根', 'type33', 'Germany roast steak', 'img/dishes/33.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(95, '清新经典鸡丁', 'type36', 'Freach classic salmon', 'img/dishes/36.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(96, '鲜嫩香辣烤肉', 'type37', 'Australia classic salmon', 'img/dishes/37.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(97, '清新黑椒牛排', 'type38', 'American classic salmon', 'img/dishes/38.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(100, '美式黑椒牛排', 'type41', 'American cheese shrimp', 'img/dishes/41.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(103, '鲜嫩经典鸡丁', 'type44', 'Germany roast salmon', 'img/dishes/44.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(104, '清新黑椒烤肉', 'type45', 'Germany classic salmon', 'img/dishes/45.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(105, '澳洲香辣烤肉', 'type46', 'American roast chicken', 'img/dishes/46.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(106, '鲜嫩香辣鸡丁', 'type47', 'American classic chicken', 'img/dishes/47.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00'),
(108, '鲜嫩芝士鸡丁', 'type49', 'Freach cheese shrimp', 'img/dishes/49.jpg', 'img/dishes/s1.png', 'Steaks are usually grilled,[1] but they can be pan-fried, or broiled. Steak is often grilled in an attempt to replicate the flav', '88.00');

-- --------------------------------------------------------

--
-- 表的结构 `food_pic`
--

CREATE TABLE `food_pic` (
  `pid` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `foodid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food_pic`
--

INSERT INTO `food_pic` (`pid`, `img`, `foodid`) VALUES
(1, 'img/dishes/1.jpg', 5),
(2, 'img/dishes/2.jpg', 5),
(3, 'img/dishes/3.jpg', 5),
(4, 'img/dishes/4.jpg', 5),
(5, 'img/dishes/5.jpg', 6),
(6, 'img/dishes/6.jpg', 6),
(8, 'img/dishes/8.jpg', 6),
(9, 'img/dishes/9.jpg', 6),
(10, 'img/dishes/10.jpg', 7),
(11, 'img/dishes/11.jpg', 7),
(12, 'img/dishes/12.jpg', 7),
(13, 'img/dishes/13.jpg', 7),
(14, 'img/dishes/14.jpg', 8),
(15, 'img/dishes/15.jpg', 8),
(16, 'img/dishes/16.jpg', 8),
(17, 'img/dishes/17.jpg', 8),
(18, 'img/dishes/18.jpg', 59),
(19, 'img/dishes/19.jpg', 59),
(20, 'img/dishes/20.jpg', 59),
(21, 'img/dishes/21.jpg', 59),
(22, 'img/dishes/22.jpg', 60),
(23, 'img/dishes/23.jpg', 60),
(24, 'img/dishes/24.jpg', 60),
(25, 'img/dishes/25.jpg', 60),
(26, 'img/dishes/26.jpg', 61),
(27, 'img/dishes/27.jpg', 61),
(28, 'img/dishes/28.jpg', 61),
(29, 'img/dishes/29.jpg', 61),
(30, 'img/dishes/30.jpg', 62),
(31, 'img/dishes/31.jpg', 62),
(32, 'img/dishes/32.jpg', 62),
(33, 'img/dishes/33.jpg', 62),
(34, 'img/dishes/34.jpg', 63),
(35, 'img/dishes/35.jpg', 63),
(36, 'img/dishes/36.jpg', 63),
(37, 'img/dishes/37.jpg', 63),
(38, 'img/dishes/38.jpg', 64),
(39, 'img/dishes/39.jpg', 64),
(40, 'img/dishes/40.jpg', 64),
(41, 'img/dishes/41.jpg', 64),
(42, 'img/dishes/42.jpg', 65),
(43, 'img/dishes/43.jpg', 65),
(44, 'img/dishes/44.jpg', 65),
(45, 'img/dishes/45.jpg', 65),
(46, 'img/dishes/46.jpg', 66),
(47, 'img/dishes/47.jpg', 66),
(48, 'img/dishes/48.jpg', 66),
(49, 'img/dishes/49.jpg', 66),
(50, 'img/dishes/50.jpg', 66),
(51, 'img/dishes/51.jpg', 67),
(52, 'img/dishes/52.jpg', 67),
(53, 'img/dishes/53.jpg', 67),
(54, 'img/dishes/54.jpg', 67),
(55, 'img/dishes/55.jpg', 68),
(56, 'img/dishes/56.jpg', 68),
(57, 'img/dishes/57.jpg', 68),
(58, 'img/dishes/58.jpg', 68),
(59, 'img/dishes/59.jpg', 70),
(60, 'img/dishes/60.jpg', 70),
(61, 'img/dishes/61.jpg', 70),
(62, 'img/dishes/62.jpg', 70),
(63, 'img/dishes/63.jpg', 72),
(64, 'img/dishes/64.jpg', 72),
(65, 'img/dishes/65.jpg', 72),
(66, 'img/dishes/66.jpg', 72),
(67, 'img/dishes/67.jpg', 73),
(68, 'img/dishes/68.jpg', 73),
(69, 'img/dishes/69.jpg', 73),
(70, 'img/dishes/70.jpg', 73),
(71, 'img/dishes/71.jpg', 74),
(72, 'img/dishes/72.jpg', 74),
(73, 'img/dishes/73.jpg', 74),
(74, 'img/dishes/74.jpg', 74),
(75, 'img/dishes/75.jpg', 75),
(76, 'img/dishes/76.jpg', 75),
(77, 'img/dishes/77.jpg', 75),
(78, 'img/dishes/78.jpg', 75),
(79, 'img/dishes/79.jpg', 76),
(80, 'img/dishes/80.jpg', 76),
(81, 'img/dishes/81.jpg', 76),
(82, 'img/dishes/82.jpg', 76),
(83, 'img/dishes/83.jpg', 77),
(84, 'img/dishes/84.jpg', 77),
(85, 'img/dishes/85.jpg', 77),
(86, 'img/dishes/86.jpg', 78),
(87, 'img/dishes/87.jpg', 78),
(88, 'img/dishes/88.jpg', 78),
(89, 'img/dishes/89.jpg', 78),
(90, 'img/dishes/90.jpg', 80),
(91, 'img/dishes/91.jpg', 80),
(92, 'img/dishes/92.jpg', 80),
(93, 'img/dishes/93.jpg', 80),
(94, 'img/dishes/94.jpg', 81),
(95, 'img/dishes/95.jpg', 81),
(96, 'img/dishes/96.jpg', 81),
(97, 'img/dishes/97.jpg', 81),
(98, 'img/dishes/98.jpg', 82),
(99, 'img/dishes/99.jpg', 82),
(100, 'img/dishes/100.jpg', 82),
(101, 'img/dishes/101.jpg', 82),
(102, 'img/dishes/102.jpg', 83),
(103, 'img/dishes/103.jpg', 83),
(104, 'img/dishes/104.jpg', 83),
(105, 'img/dishes/105.jpg', 83),
(106, 'img/dishes/106.jpg', 84),
(107, 'img/dishes/107.jpg', 84),
(108, 'img/dishes/108.jpg', 84),
(109, 'img/dishes/109.jpg', 84),
(110, 'img/dishes/110.jpg', 84),
(111, 'img/dishes/111.jpg', 85),
(112, 'img/dishes/112.jpg', 85),
(113, 'img/dishes/113.jpg', 85),
(114, 'img/dishes/114.jpg', 85),
(115, 'img/dishes/115.jpg', 88),
(116, 'img/dishes/116.jpg', 88),
(117, 'img/dishes/117.jpg', 88),
(118, 'img/dishes/118.jpg', 88),
(119, 'img/dishes/119.jpg', 88),
(120, 'img/dishes/120.jpg', 89),
(121, 'img/dishes/121.jpg', 89),
(122, 'img/dishes/122.jpg', 89),
(123, 'img/dishes/123.jpg', 89),
(124, 'img/dishes/124.jpg', 91),
(125, 'img/dishes/125.jpg', 91),
(126, 'img/dishes/126.jpg', 91),
(127, 'img/dishes/127.jpg', 91),
(128, 'img/dishes/128.jpg', 92),
(129, 'img/dishes/129.jpg', 92),
(130, 'img/dishes/130.jpg', 92),
(131, 'img/dishes/131.jpg', 92),
(132, 'img/dishes/132.jpg', 95),
(133, 'img/dishes/133.jpg', 95),
(134, 'img/dishes/134.jpg', 95),
(135, 'img/dishes/135.jpg', 95),
(136, 'img/dishes/136.jpg', 96),
(137, 'img/dishes/137.jpg', 96),
(138, 'img/dishes/138.jpg', 96),
(139, 'img/dishes/139.jpg', 96),
(140, 'img/dishes/140.jpg', 97),
(141, 'img/dishes/141.jpg', 97),
(142, 'img/dishes/142.jpg', 97),
(143, 'img/dishes/143.jpg', 97),
(144, 'img/dishes/144.jpg', 97),
(145, 'img/dishes/145.jpg', 100),
(146, 'img/dishes/146.jpg', 100),
(147, 'img/dishes/147.jpg', 100),
(148, 'img/dishes/148.jpg', 100),
(149, 'img/dishes/149.jpg', 103),
(150, 'img/dishes/150.jpg', 103),
(151, 'img/dishes/151.jpg', 103),
(152, 'img/dishes/152.jpg', 103),
(153, 'img/dishes/153.jpg', 104),
(154, 'img/dishes/154.jpg', 104),
(155, 'img/dishes/155.jpg', 104),
(156, 'img/dishes/156.jpg', 104),
(157, 'img/dishes/157.jpg', 104),
(158, 'img/dishes/158.jpg', 105),
(159, 'img/dishes/159.jpg', 105),
(160, 'img/dishes/160.jpg', 105),
(161, 'img/dishes/161.jpg', 105),
(162, 'img/dishes/162.jpg', 106),
(163, 'img/dishes/163.jpg', 106),
(164, 'img/dishes/164.jpg', 106),
(165, 'img/dishes/165.jpg', 106),
(166, 'img/dishes/166.jpg', 108),
(167, 'img/dishes/167.jpg', 108),
(168, 'img/dishes/168.jpg', 108),
(169, 'img/dishes/169.jpg', 108);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `upwd` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `avatar` varchar(128) DEFAULT 'img/avatar/default.png',
  `user_name` varchar(32) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `favorite` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upwd`, `email`, `phone`, `avatar`, `user_name`, `gender`, `favorite`) VALUES
(1, 'klaus', '123456', 'klaus@163.com', '1350123467', 'img/avatar/default.png', '克劳斯', 1, '喜欢好多好吃的东东'),
(2, 'darly', '123456', 'darly@163.com', '1350123468', 'img/avatar/default.png', '达尔', 1, '喜欢好多好吃的东东'),
(3, 'judith', '123456', 'judith@163.com', '1350123469', 'img/avatar/default.png', '朱迪斯', 0, '喜欢好多好吃的东东'),
(4, 'kety', '123456', 'kety@163.com', '1350123460', 'img/avatar/default.png', '凯迪', 0, '喜欢好多好吃的东东'),
(5, 'miko', '123456', 'miko@163.com', '12134563432', 'http://127.0.0.1/3efd3570-f49b-4272-8dbc-e9ca3f39f0ce', NULL, NULL, '喜欢好多好吃的东东'),
(6, 'huanhuan', '123456', 'huan@126.com', '152145269674', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(7, 'kk', 'm12345', '332308697@qq.com', '15514821549', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(8, 'jerry', 'j123', '121589465@qq.com', '18245963214', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(9, 'hcl', '12345', '', '', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(10, 'liuhuan', '123456', '332308697@qq.com', '15618307873', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(11, 'fdsafsaf', 'fdsf', '', '', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(12, 'jing', 'j123', 'jing@126.com', '15642359876', 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(13, '', NULL, NULL, NULL, 'img/avatar/default.png', NULL, NULL, '喜欢好多好吃的东东'),
(14, 'cs', '123456', '332356842@qq.com', '15648245687', 'img/avatar/default.png', NULL, NULL, NULL),
(15, 'liusheng', '123456', '456@123.as', '17811111111', 'img/avatar/default.png', NULL, NULL, NULL),
(16, 'asd', 'asdf', 'sadf@a.a', '18711111111', 'img/avatar/default.png', NULL, NULL, NULL),
(17, 'betty', '123456', '5564892485@qq.com', '15846952436', 'img/avatar/default.png', NULL, NULL, NULL),
(18, 'qwe123', '123456', 'fsed@163.com', '13535352525', 'img/avatar/default.png', NULL, NULL, NULL),
(19, 'wuyou89757', '123456', '417746548@qq.com', '13995600176', 'img/avatar/default.png', NULL, NULL, NULL),
(20, 'kkk', '123', '332308697@qq.com', '18245697860', 'img/avatar/default.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `is_checked` tinyint(1) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_order`
--

INSERT INTO `user_order` (`order_id`, `fid`, `uid`, `is_checked`, `count`) VALUES
(4, 6, 1, 0, 3),
(38, 7, 2, 0, 1),
(43, 7, 17, 0, 4),
(44, 62, 17, 0, 3),
(45, 7, 18, 0, 104),
(46, 6, 19, 0, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `food_pic`
--
ALTER TABLE `food_pic`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- 使用表AUTO_INCREMENT `food_pic`
--
ALTER TABLE `food_pic`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
