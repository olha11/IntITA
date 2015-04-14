-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-04-07 17:43:19
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.header
DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `headerID` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('EN','UA','RU') NOT NULL,
  `logoURL` varchar(255) NOT NULL,
  `smallLogoURL` varchar(255) NOT NULL,
  `menuItem1` varchar(30) NOT NULL,
  `item1Link` varchar(255) NOT NULL,
  `menuItem2` varchar(30) NOT NULL,
  `item2Link` varchar(255) NOT NULL,
  `menuItem3` varchar(30) NOT NULL,
  `item3Link` varchar(255) NOT NULL,
  `menuItem4` varchar(30) NOT NULL,
  `item4Link` varchar(255) NOT NULL,
  `enterButtonText` varchar(30) NOT NULL,
  `logoutButtonText` varchar(30) NOT NULL,
  PRIMARY KEY (`headerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.header: ~3 rows (approximately)
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
INSERT INTO `header` (`headerID`, `language`, `logoURL`, `smallLogoURL`, `menuItem1`, `item1Link`, `menuItem2`, `item2Link`, `menuItem3`, `item3Link`, `menuItem4`, `item4Link`, `enterButtonText`, `logoutButtonText`) VALUES
	(0, 'UA', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курси', '/courses', 'Викладачі', '/teachers', 'Форум', 'http://www.google.com', 'Про нас', '/site/aboutdetail', 'Вхід', 'Вхід'),
	(1, 'RU', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курсы', '/courses', 'Преподаватели', '/teachers', 'Форум', 'http://www.google.com', 'О нас', '/site/aboutdetail', 'Вход', 'Выход'),
	(3, 'UA', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курси', '/courses', 'Викладачі', '/teachers', 'Форум', 'http://www.google.com', 'Про нас', '/site/aboutdetail', 'Вхід', 'Вхід');
/*!40000 ALTER TABLE `header` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
