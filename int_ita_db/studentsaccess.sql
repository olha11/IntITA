-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-04-07 17:43:20
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.studentsaccess
DROP TABLE IF EXISTS `studentsaccess`;
CREATE TABLE IF NOT EXISTS `studentsaccess` (
  `accessID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `moduleID` int(11) NOT NULL,
  `lectureID` int(11) NOT NULL,
  `dateChange` date NOT NULL,
  PRIMARY KEY (`accessID`),
  KEY `FK_courseaccess_students` (`studentID`),
  KEY `FK_studentsaccess_course` (`courseID`),
  KEY `FK_studentsaccess_lectures` (`lectureID`),
  KEY `FK_studentsaccess_modules` (`moduleID`),
  CONSTRAINT `FK_studentsaccess_course` FOREIGN KEY (`courseID`) REFERENCES `course` (`course_ID`),
  CONSTRAINT `FK_studentsaccess_lectures` FOREIGN KEY (`lectureID`) REFERENCES `lecture` (`id`),
  CONSTRAINT `FK_studentsaccess_modules` FOREIGN KEY (`moduleID`) REFERENCES `module` (`module_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.studentsaccess: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentsaccess` DISABLE KEYS */;
/*!40000 ALTER TABLE `studentsaccess` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
