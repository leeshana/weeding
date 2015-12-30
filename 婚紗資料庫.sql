-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-12-22 15:13:46
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `qqq`
--

-- --------------------------------------------------------

--
-- 資料表結構 `員工`
--

CREATE TABLE IF NOT EXISTS `員工` (
  `員工編號` varchar(25) NOT NULL,
  `員工姓名` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `員工電話` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `員工`
--

INSERT INTO `員工` (`員工編號`, `員工姓名`, `員工電話`) VALUES
('1001', '林順德', '0987888775'),
('1002', '李晟暐', '0955888751');

-- --------------------------------------------------------

--
-- 資料表結構 `員工上班時間`
--

CREATE TABLE IF NOT EXISTS `員工上班時間` (
  `員工編號` varchar(10) NOT NULL,
  `上班時間` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `員工上班時間`
--

INSERT INTO `員工上班時間` (`員工編號`, `上班時間`) VALUES
('1001', '2015-01-02'),
('1001', '2015-01-03'),
('1001', '2015-12-20'),
('1001', '2015-12-21'),
('1001', '2015-12-23'),
('1001', '2015-12-24'),
('1001', '2015-12-25'),
('1001', '2015-12-27'),
('1001', '2015-12-29'),
('1001', '2015-12-30'),
('1002', '2015-01-01'),
('1002', '2015-01-02'),
('1002', '2015-01-03'),
('1002', '2015-01-17'),
('1002', '2015-01-18'),
('1002', '2015-01-19');

-- --------------------------------------------------------

--
-- 資料表結構 `會員`
--

CREATE TABLE IF NOT EXISTS `會員` (
  `會員帳號` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `會員密碼` varchar(999) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `會員姓名` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `會員電話` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `會員地址` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `會員`
--

INSERT INTO `會員` (`會員帳號`, `會員密碼`, `會員姓名`, `會員電話`, `會員地址`) VALUES
('shana1921', '123456', '林雅涵', '0958557645', '新北市淡水區真理街');

-- --------------------------------------------------------

--
-- 資料表結構 `禮服`
--

CREATE TABLE IF NOT EXISTS `禮服` (
  `禮服編號` varchar(10) NOT NULL,
  `名稱` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `庫存` int(100) NOT NULL,
  `圖檔` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `禮服`
--

INSERT INTO `禮服` (`禮服編號`, `名稱`, `庫存`, `圖檔`) VALUES
('101', '純白婚紗', 5, '6.jpg'),
('102', '紅色旗袍', 5, '1.jpg'),
('103', '海洋婚紗', 5, '2.jpg'),
('104', '白色蕾絲婚紗', 5, '3.jpg'),
('105', '黑色緊身婚紗', 5, '4.jpg'),
('106', '粉色系婚紗', 5, '5.jpg'),
('107', '純白薄紗連身婚紗', 5, '7.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `禮服尺寸`
--

CREATE TABLE IF NOT EXISTS `禮服尺寸` (
  `禮服編號` varchar(10) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL,
  `禮服尺寸` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `禮服尺寸`
--

INSERT INTO `禮服尺寸` (`禮服編號`, `禮服尺寸`) VALUES
('101', 'L'),
('101', 'M'),
('101', 'S'),
('101', 'XL'),
('102', 'L'),
('102', 'M'),
('102', 'S'),
('103', 'L'),
('103', 'M'),
('103', 'S'),
('103', 'XL'),
('104', 'L'),
('104', 'M'),
('105', 'M'),
('105', 'S'),
('105', 'XL'),
('106', 'L'),
('106', 'M'),
('106', 'S'),
('107', 'M'),
('107', 'S'),
('107', 'XL');

-- --------------------------------------------------------

--
-- 資料表結構 `預約表`
--

CREATE TABLE IF NOT EXISTS `預約表` (
  `預約日期` date NOT NULL,
  `會員帳號` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `員工編號` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `禮服編號` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `員工`
--
ALTER TABLE `員工`
  ADD PRIMARY KEY (`員工編號`),
  ADD UNIQUE KEY `員工編號` (`員工編號`);

--
-- 資料表索引 `員工上班時間`
--
ALTER TABLE `員工上班時間`
  ADD PRIMARY KEY (`員工編號`,`上班時間`);

--
-- 資料表索引 `會員`
--
ALTER TABLE `會員`
  ADD PRIMARY KEY (`會員帳號`),
  ADD UNIQUE KEY `會員帳號` (`會員帳號`);

--
-- 資料表索引 `禮服`
--
ALTER TABLE `禮服`
  ADD PRIMARY KEY (`禮服編號`),
  ADD UNIQUE KEY `禮服編號` (`禮服編號`);

--
-- 資料表索引 `禮服尺寸`
--
ALTER TABLE `禮服尺寸`
  ADD PRIMARY KEY (`禮服編號`,`禮服尺寸`);

--
-- 資料表索引 `預約表`
--
ALTER TABLE `預約表`
  ADD PRIMARY KEY (`預約日期`,`會員帳號`),
  ADD KEY `會員帳號` (`會員帳號`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `員工上班時間`
--
ALTER TABLE `員工上班時間`
  ADD CONSTRAINT `員工上班時間_ibfk_1` FOREIGN KEY (`員工編號`) REFERENCES `員工` (`員工編號`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `預約表`
--
ALTER TABLE `預約表`
  ADD CONSTRAINT `預約表_ibfk_1` FOREIGN KEY (`會員帳號`) REFERENCES `會員` (`會員帳號`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
