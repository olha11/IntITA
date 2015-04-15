-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-04-15 17:37:54
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.lecturetype
DROP TABLE IF EXISTS `lecturetype`;
CREATE TABLE IF NOT EXISTS `lecturetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `text` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.lecturetype: ~4 rows (approximately)
/*!40000 ALTER TABLE `lecturetype` DISABLE KEYS */;
INSERT INTO `lecturetype` (`id`, `image`, `text`, `description`) VALUES
	(1, '/css/images/lectureType.png', 'лекція/практика', ''),
	(2, '/css/images/lectureType.png', 'екзамен', ''),
	(3, '', 'індивідуальний модульний проект', ''),
	(4, '', 'командний дипломний проект', '');
/*!40000 ALTER TABLE `lecturetype` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
