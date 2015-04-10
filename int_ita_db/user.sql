-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-04-10 18:50:05
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `network` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `secondName` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `hash` varchar(20) NOT NULL,
  `address` text,
  `education` varchar(255) DEFAULT NULL,
  `educform` varchar(60) DEFAULT NULL,
  `interests` text,
  `aboutUs` text,
  `aboutMy` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.user: ~16 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstName`, `identity`, `network`, `state`, `full_name`, `middleName`, `secondName`, `nickname`, `birthday`, `email`, `password`, `phone`, `hash`, `address`, `education`, `educform`, `interests`, `aboutUs`, `aboutMy`, `avatar`, `role`) VALUES
	(1, 'Вова', '', '', 0, '', 'Джа', 'Марля', 'Wizlight', '21/03/1997', 'Wizlightdragon@gmail.com', '011c945f30ce2cbafc452f39840f025693339c42', '911', '', 'Ямайка', 'ВДПУ', 'Онлайн', 'Ковбаска, колобки, раста', 'Інтернет', 'Володію албанською. Люблю м\'ясо та до м\'яса. Розвожу королів. ', '/css/images/1id.jpg', ''),
	(5, 't54wy6wy@ferwg.gtrf', '', '', 0, '', NULL, NULL, NULL, NULL, 't54wy6wy@ferwg.gtrf', 'egrwhjet6', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
	(6, 'dfesafhe@fjgr.gfrje', '', '', 0, '', NULL, NULL, NULL, NULL, 'dfesafhe@fjgr.gfrje', 'fkrjgfrklfjrlk', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
	(7, 'fhsdgfh@deyg.gdehj', '', '', 0, '', NULL, NULL, NULL, NULL, 'fhsdgfh@deyg.gdehj', 'vfdvdf', NULL, '', NULL, NULL, 'Не вибрано', NULL, NULL, NULL, NULL, ''),
	(8, 'admin@EHJBF.SNDFS', '', '', 0, '', NULL, NULL, NULL, NULL, 'admin@EHJBF.SNDFS', 'd6877098041a8a30bc8bd8f9faeeb8e62afd682f', NULL, '', NULL, NULL, 'Не вибрано', NULL, NULL, NULL, NULL, ''),
	(9, 'gfvzdrgfregt', '', '', 0, '', NULL, '', '', '', 'gfsGFea@EFSF.DEW', '011c945f30ce2cbafc452f39840f025693339c42', '', '', '', '', 'Онлайн', '', '', '', NULL, '0'),
	(10, 'Wizlightdrago@gmail.com', '', '', 0, '', NULL, NULL, NULL, NULL, 'Wizlightdrago@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
	(11, 'ivanna@yutr.rtr', '', '', 0, '', NULL, '', '', '', 'ivanna@yutr.rtr', '011c945f30ce2cbafc452f39840f025693339c42', '', '', '', '', NULL, '', '', '', '/css/images/avatars/ivanna@yutr.rtr.jpg', ''),
	(12, 'dawfawef@efew.rew', '', '', 0, '', NULL, NULL, NULL, NULL, 'dawfawef@efew.rew', '011c945f30ce2cbafc452f39840f025693339c42', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '/css/images/avatars/noname.png', ''),
	(13, 'gtsgrstg@fretf.gtr', '', '', 0, '', NULL, NULL, NULL, NULL, 'gtsgrstg@fretf.gtr', '011c945f30ce2cbafc452f39840f025693339c42', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '/css/images/avatars/noname.png', ''),
	(14, 'fsef@sg.tgf', '', '', 0, '', NULL, NULL, NULL, NULL, 'fsef@sg.tgf', '8eddb6bdf9a5139e587bd661994c33d59ab3320d', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '/css/images/avatars/noname.png', ''),
	(15, 'fsefsergfer', '', '', 0, '', NULL, '', '', '', 'rgdrgrtfg@fdr.uky', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', '', '', '', '', 'Онлайн', '', '', '', '/css/images/avatars/rgdrgrtfg@fdr.uky.jpg', '0'),
	(16, 'bdkjfvh', '', '', 0, '', NULL, '', '', '', 'bbbbbgg@bb.bb', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '', '', '', '', '', '', '', '', NULL, '0'),
	(17, 'fsdgdrhdh', '', '', 0, '', NULL, '', '', '', 'rgdrgjjrtfg@fdr.uky', '011c945f30ce2cbafc452f39840f025693339c42', '', '', '', '', 'Онлайн/Офлайн', '', '', '', NULL, '0'),
	(18, 'bdkjfvh', '', '', 0, '', NULL, '', '', '', 'bbbbhb@bb.bb', '011c945f30ce2cbafc452f39840f025693339c42', '', '', '', '', '', '', '', '', NULL, '0'),
	(19, 'rsysryyu', '', '', 0, '', NULL, '', '', '', 'tesys45y@yt.uy', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', '', '', '', '', 'Не вибрано', '', '', '', NULL, '0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
