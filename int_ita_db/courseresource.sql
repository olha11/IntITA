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

-- Dumping structure for table int_ita_db.courseresource
DROP TABLE IF EXISTS `courseresource`;
CREATE TABLE IF NOT EXISTS `courseresource` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idCourse` int(10) NOT NULL,
  `idResource` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_courseresource_resource` (`idResource`),
  CONSTRAINT `FK_courseresource_resource` FOREIGN KEY (`idResource`) REFERENCES `resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.courseresource: ~0 rows (approximately)
/*!40000 ALTER TABLE `courseresource` DISABLE KEYS */;
/*!40000 ALTER TABLE `courseresource` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
