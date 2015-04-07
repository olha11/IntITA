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

-- Dumping structure for table int_ita_db.lecture
DROP TABLE IF EXISTS `lecture`;
CREATE TABLE IF NOT EXISTS `lecture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `language` varchar(6) NOT NULL,
  `idModule` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `idType` int(11) NOT NULL,
  `durationInMinutes` int(11) NOT NULL,
  `maxNumber` int(11) NOT NULL,
  `iconIsDone` varchar(255) NOT NULL,
  `preLecture` int(11) NOT NULL,
  `nextLecture` int(11) NOT NULL,
  `idTeacher` varchar(50) NOT NULL,
  `lectureUnwatchedImage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lecture_module` (`idModule`),
  CONSTRAINT `FK_lecture_module` FOREIGN KEY (`idModule`) REFERENCES `module` (`module_ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.lecture: ~0 rows (approximately)
/*!40000 ALTER TABLE `lecture` DISABLE KEYS */;
INSERT INTO `lecture` (`id`, `image`, `alias`, `language`, `idModule`, `order`, `title`, `idType`, `durationInMinutes`, `maxNumber`, `iconIsDone`, `preLecture`, `nextLecture`, `idTeacher`, `lectureUnwatchedImage`) VALUES
	(1, '/css/images/lectureImage.png', 'types', 'ua', 1, 3, 'Goal of classes 1', 10, 40, 6, '/css/images/medalIcoFalse.png', 2, 4, '2', 'css/images/ratIco0.png');
/*!40000 ALTER TABLE `lecture` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
