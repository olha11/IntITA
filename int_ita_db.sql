-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-03-03 18:59:34
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for int_ita_db
CREATE DATABASE IF NOT EXISTS `int_ita_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `int_ita_db`;


-- Dumping structure for table int_ita_db.aa_access
CREATE TABLE IF NOT EXISTS `aa_access` (
  `user_id` smallint(5) unsigned NOT NULL,
  `interface_id` smallint(5) unsigned NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `add` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`interface_id`),
  KEY `interface_id` (`interface_id`),
  CONSTRAINT `aa_access_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `aa_access_ibfk_2` FOREIGN KEY (`interface_id`) REFERENCES `aa_interfaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_access: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `aa_access` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_authorizations
CREATE TABLE IF NOT EXISTS `aa_authorizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) unsigned NOT NULL,
  `when_enter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `when_enter` (`when_enter`),
  CONSTRAINT `aa_authorizations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_authorizations: ~10 rows (approximately)
/*!40000 ALTER TABLE `aa_authorizations` DISABLE KEYS */;
INSERT INTO `aa_authorizations` (`id`, `user_id`, `when_enter`, `ip`) VALUES
	(1, 2, '2015-03-02 15:33:25', '::1'),
	(2, 2, '2015-03-02 15:33:25', '::1'),
	(3, 2, '2015-03-02 15:41:58', '::1'),
	(4, 2, '2015-03-02 15:41:59', '::1'),
	(5, 3, '2015-03-02 15:45:10', '::1'),
	(6, 3, '2015-03-02 15:45:10', '::1'),
	(7, 2, '2015-03-03 15:04:10', '::1'),
	(8, 2, '2015-03-03 15:04:10', '::1'),
	(9, 2, '2015-03-03 15:41:31', '::1'),
	(10, 2, '2015-03-03 15:41:32', '::1'),
	(11, 2, '2015-03-03 17:26:15', '::1'),
	(12, 2, '2015-03-03 17:26:15', '::1');
/*!40000 ALTER TABLE `aa_authorizations` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_errors
CREATE TABLE IF NOT EXISTS `aa_errors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `error_type` enum('exception','warning') DEFAULT NULL,
  `info` text,
  `authorization_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `authorization_id` (`authorization_id`),
  CONSTRAINT `aa_errors_ibfk_1` FOREIGN KEY (`authorization_id`) REFERENCES `aa_authorizations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.aa_errors: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_errors` DISABLE KEYS */;
/*!40000 ALTER TABLE `aa_errors` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_interfaces
CREATE TABLE IF NOT EXISTS `aa_interfaces` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` tinyint(3) unsigned DEFAULT NULL,
  `alias` varchar(60) NOT NULL,
  `level` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `title` varchar(80) NOT NULL,
  `info` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`),
  KEY `section_id` (`section_id`),
  CONSTRAINT `aa_interfaces_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `aa_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_interfaces: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_interfaces` DISABLE KEYS */;
/*!40000 ALTER TABLE `aa_interfaces` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_logs
CREATE TABLE IF NOT EXISTS `aa_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `interface_id` smallint(5) unsigned DEFAULT NULL,
  `authorization_id` int(10) unsigned DEFAULT NULL,
  `when_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` text,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `interface_id` (`interface_id`),
  KEY `authorization_id` (`authorization_id`),
  CONSTRAINT `aa_logs_ibfk_1` FOREIGN KEY (`interface_id`) REFERENCES `aa_interfaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `aa_logs_ibfk_2` FOREIGN KEY (`authorization_id`) REFERENCES `aa_authorizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_logs: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `aa_logs` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_sections
CREATE TABLE IF NOT EXISTS `aa_sections` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_sections: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `aa_sections` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aa_users
CREATE TABLE IF NOT EXISTS `aa_users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `level` enum('root','admin','user') NOT NULL DEFAULT 'user',
  `login` varchar(21) NOT NULL,
  `password` varchar(32) NOT NULL,
  `interface_level` tinyint(4) NOT NULL DEFAULT '1',
  `email` varchar(40) NOT NULL,
  `surname` varchar(21) NOT NULL,
  `firstname` varchar(21) NOT NULL,
  `middlename` varchar(21) DEFAULT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `info` tinytext,
  `salt` varchar(8) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `aa_users` DISABLE KEYS */;
INSERT INTO `aa_users` (`id`, `level`, `login`, `password`, `interface_level`, `email`, `surname`, `firstname`, `middlename`, `regdate`, `info`, `salt`, `disabled`) VALUES
	(2, 'root', 'root', '63a9f0ea7bb98050796b649e85481845', 1, 'root', 'root', 'root', 'root', '2015-03-02 15:33:13', NULL, NULL, 0),
	(3, 'user', 'User', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'user', 'Surname', 'Name', 'Middle name', '2015-03-02 15:43:00', NULL, NULL, 0);
/*!40000 ALTER TABLE `aa_users` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.aboutus
CREATE TABLE IF NOT EXISTS `aboutus` (
  `block_id` int(11) NOT NULL AUTO_INCREMENT,
  `line2Image` varchar(255) NOT NULL,
  `iconImage` varchar(255) NOT NULL,
  `titleText` varchar(50) NOT NULL,
  `textAbout` varchar(255) NOT NULL,
  `linkAddress` varchar(255) NOT NULL,
  `imagesPath` varchar(255) NOT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.aboutus: ~3 rows (approximately)
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` (`block_id`, `line2Image`, `iconImage`, `titleText`, `textAbout`, `linkAddress`, `imagesPath`) VALUES
	(1, '/css/images/line2.png', 'image1.png', 'Про що мрієш ти?', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн?</p>', 'https://www.google.com/', '/css/images/'),
	(2, '/css/images/line2.png', 'image2.png', 'Що очікується від тебе', '<p>Програмування – це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля.</p>', 'https://www.google.com/', '/css/images/'),
	(3, '/css/images/line2.png', 'image3.png', 'Три кити Академії Програмування ІНТІТА', '<p>Три кити Академії Програмування ІНТІТА Самостійний графік навчання. Лише 100% необхідні знання. Засвоєння 100% знань!</p>', 'https://www.google.com/', '/css/images/');
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.carousel
CREATE TABLE IF NOT EXISTS `carousel` (
  `order` int(11) NOT NULL,
  `picture_url` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `images_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.carousel: ~4 rows (approximately)
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` (`order`, `picture_url`, `description`, `images_path`) VALUES
	(1, '1.jpg', 'train1', '/css/images/slider_img/'),
	(2, '2.jpg', 'train', '/css/images/slider_img/'),
	(3, '3.jpg', 'train3', '/css/images/slider_img/'),
	(4, '6.jpg', 'train2', '/css/images/slider_img/');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.course
CREATE TABLE IF NOT EXISTS `course` (
  `course_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(45) NOT NULL,
  `course_duration_hours` int(11) NOT NULL,
  PRIMARY KEY (`course_ID`),
  UNIQUE KEY `course_name` (`course_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.course: ~9 rows (approximately)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`course_ID`, `course_name`, `course_duration_hours`) VALUES
	(1, 'Course 1. OOP', 40),
	(2, 'Course 2. Programming', 120),
	(3, 'Course 3. Math', 30),
	(4, 'Course 4. Discrete math', 40),
	(5, 'Course 5', 36),
	(6, 'Course 6', 130),
	(7, 'Course 7', 64),
	(8, 'Course 8', 54),
	(9, 'Course 9', 90);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.footer
CREATE TABLE IF NOT EXISTS `footer` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_social` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image_up` varchar(255) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.footer: ~0 rows (approximately)
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
INSERT INTO `footer` (`footer_id`, `image_social`, `phone`, `mobile`, `email`, `image_up`) VALUES
	(1, '/css/images/sotial.gif', 'телефон: +38 0432 52', 'тел. моб. +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.header
CREATE TABLE IF NOT EXISTS `header` (
  `header_id` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('EN','UA','RU') NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `menu_item_1` varchar(30) NOT NULL,
  `item_1_link` varchar(255) NOT NULL,
  `menu_item_2` varchar(30) NOT NULL,
  `item_2_link` varchar(255) NOT NULL,
  `menu_item_3` varchar(30) NOT NULL,
  `item_3_link` varchar(255) NOT NULL,
  `menu_item_4` varchar(30) NOT NULL,
  `item_4_link` varchar(255) NOT NULL,
  `enter_button_text` varchar(30) NOT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.header: ~0 rows (approximately)
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
INSERT INTO `header` (`header_id`, `language`, `logo_url`, `menu_item_1`, `item_1_link`, `menu_item_2`, `item_2_link`, `menu_item_3`, `item_3_link`, `menu_item_4`, `item_4_link`, `enter_button_text`) VALUES
	(1, 'UA', '/css/images/Logo_big.png', 'Курси', 'http://www.google.com', 'Викладачі', 'http://www.google.com', 'Форум', 'http://www.google.com', 'Про нас', 'http://www.google.com', 'Вхід');
/*!40000 ALTER TABLE `header` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.hometasks
CREATE TABLE IF NOT EXISTS `hometasks` (
  `hometask_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `hometask_name` varchar(45) NOT NULL,
  `hometask_description` varchar(45) NOT NULL,
  `hometask_url` varchar(255) NOT NULL,
  PRIMARY KEY (`hometask_ID`),
  UNIQUE KEY `fkmodule_ID` (`fkmodule_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.hometasks: ~2 rows (approximately)
/*!40000 ALTER TABLE `hometasks` DISABLE KEYS */;
INSERT INTO `hometasks` (`hometask_ID`, `fkmodule_ID`, `fklecture_ID`, `hometask_name`, `hometask_description`, `hometask_url`) VALUES
	(1, 23, 34, 'Hometask 1', 'Description 1', 'URL 1'),
	(2, 2, 2, 'Hometask 2', 'Descipion 2', 'URL 2');
/*!40000 ALTER TABLE `hometasks` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.language
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` enum('EN','UA','RU') NOT NULL,
  `language` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.language: ~0 rows (approximately)
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
/*!40000 ALTER TABLE `language` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.lecture
CREATE TABLE IF NOT EXISTS `lecture` (
  `lectureID` int(11) NOT NULL AUTO_INCREMENT,
  `lectureImageMain` varchar(255) NOT NULL,
  `lectureModule` varchar(100) NOT NULL,
  `lectureNumber` int(11) NOT NULL,
  `lectureNameText` varchar(100) NOT NULL,
  `lectureTypeText` varchar(255) NOT NULL,
  `lectureTypeImage` varchar(255) NOT NULL,
  `lectureTimeText` varchar(20) NOT NULL,
  `lectureMaxNumber` int(11) NOT NULL,
  `lectureIconImage` varchar(255) NOT NULL,
  `lectureUnwatchedImage` varchar(255) NOT NULL,
  `lectureOverlookedImage` varchar(255) NOT NULL,
  `infoLectures` varchar(50) NOT NULL DEFAULT '0',
  `thisLectureInfo` varchar(255) NOT NULL DEFAULT '0',
  `preLectureInfo` varchar(255) NOT NULL DEFAULT '0',
  `postLessonInfo` varchar(255) NOT NULL DEFAULT '0',
  `teacherTitle` varchar(50) NOT NULL DEFAULT '0',
  `linkName` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lectureID`),
  KEY `FK_lectures_modules` (`lectureModule`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.lecture: ~0 rows (approximately)
/*!40000 ALTER TABLE `lecture` DISABLE KEYS */;
INSERT INTO `lecture` (`lectureID`, `lectureImageMain`, `lectureModule`, `lectureNumber`, `lectureNameText`, `lectureTypeText`, `lectureTypeImage`, `lectureTimeText`, `lectureMaxNumber`, `lectureIconImage`, `lectureUnwatchedImage`, `lectureOverlookedImage`, `infoLectures`, `thisLectureInfo`, `preLectureInfo`, `postLessonInfo`, `teacherTitle`, `linkName`) VALUES
	(1, '/css/images/lectureImage.png', '1', 0, 'Goal of classes 1', '10', '100', 'css/images/timeIco.p', 0, '', 'css/images/ratIco0.png', 'css/images/ratIco1.png', '0', '0', '0', '0', '0', '0');
/*!40000 ALTER TABLE `lecture` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.mainpage
CREATE TABLE IF NOT EXISTS `mainpage` (
  `mainpage_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `carousel_id` int(11) NOT NULL,
  `slider_header` varchar(50) NOT NULL,
  `slider_text` varchar(255) NOT NULL,
  `slider_texture_url` varchar(255) NOT NULL,
  `slider_line_url` varchar(255) NOT NULL,
  `slider_button_text` varchar(20) NOT NULL,
  `header1` varchar(50) NOT NULL,
  `subLineImage` varchar(255) NOT NULL,
  `subheader1` varchar(100) NOT NULL,
  `array_blocks` varchar(10) NOT NULL,
  `header2` varchar(50) NOT NULL,
  `subheader2` varchar(100) NOT NULL,
  `array_steps` varchar(10) NOT NULL,
  `step_size` varchar(10) NOT NULL,
  `linkName` varchar(20) NOT NULL,
  `hexagon` varchar(255) NOT NULL,
  `form_header_1` varchar(50) NOT NULL,
  `form_header_2` varchar(50) NOT NULL,
  `reg_text` varchar(50) NOT NULL,
  `button_start` varchar(50) NOT NULL,
  `social_text` varchar(50) NOT NULL,
  `image_network` varchar(255) NOT NULL,
  PRIMARY KEY (`mainpage_id`),
  UNIQUE KEY `carousel_id` (`carousel_id`),
  KEY `FK_mainpage_block` (`array_blocks`),
  KEY `FK_mainpage_step` (`array_steps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.mainpage: ~1 rows (approximately)
/*!40000 ALTER TABLE `mainpage` DISABLE KEYS */;
INSERT INTO `mainpage` (`mainpage_id`, `title`, `carousel_id`, `slider_header`, `slider_text`, `slider_texture_url`, `slider_line_url`, `slider_button_text`, `header1`, `subLineImage`, `subheader1`, `array_blocks`, `header2`, `subheader2`, `array_steps`, `step_size`, `linkName`, `hexagon`, `form_header_1`, `form_header_2`, `reg_text`, `button_start`, `social_text`, `image_network`) VALUES
	(1, 'IntITA', 1, 'ПРОГРАМУЙ  МАЙБУТНЄ', 'Програміст — сама древня сучасна професія на планеті Земля!', '/css/images/slider_img/texture.png', '/css/images/slider_img/line.png', 'ПОЧАТИ />', 'Про нас', '/css/images/line1.png', 'дещо, що Вам потрібно знати про наші курси', '1', 'Як проводиться навчання?', 'далі пояснення як ви будете вчитися крок за кроком', '1', '958px', 'детальніше ...', '/css/images/hexagon.png', 'Готові розпочати?', 'Введіть дані в форму нижче', 'розширена реєстрація', 'Розпочати', 'Ви можете також зареєструватися через соцмережі:', '/css/images/networking.png');
/*!40000 ALTER TABLE `mainpage` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.modules
CREATE TABLE IF NOT EXISTS `modules` (
  `module_ID` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(45) NOT NULL,
  `module_duration_hours` int(11) NOT NULL,
  `module_duration_days` int(11) NOT NULL,
  PRIMARY KEY (`module_ID`),
  UNIQUE KEY `module_ID` (`module_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.modules: ~3 rows (approximately)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`module_ID`, `module_name`, `module_duration_hours`, `module_duration_days`) VALUES
	(1, 'Module 1', 40, 20),
	(2, 'Module 2', 30, 15),
	(3, 'Module 3', 60, 30);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.step
CREATE TABLE IF NOT EXISTS `step` (
  `step_id` int(11) NOT NULL AUTO_INCREMENT,
  `stepName` varchar(30) NOT NULL DEFAULT '0',
  `stepNumber` int(11) NOT NULL,
  `stepTitle` varchar(50) NOT NULL,
  `stepImagePath` varchar(255) NOT NULL DEFAULT '0',
  `stepImage` varchar(50) NOT NULL,
  `stepText` text NOT NULL,
  PRIMARY KEY (`step_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.step: ~5 rows (approximately)
/*!40000 ALTER TABLE `step` DISABLE KEYS */;
INSERT INTO `step` (`step_id`, `stepName`, `stepNumber`, `stepTitle`, `stepImagePath`, `stepImage`, `stepText`) VALUES
	(1, 'крок', 1, 'Реєстрація на сайті', '/css/images/', 'step1.jpg', 'Щоб Ви отримали доступ до переліку курсів та пройти пробні безкоштовні модулі і заняття зареєструйтесь на сайті.'),
	(2, 'крок', 2, 'Вибір курсу чи модуля', '/css/images/', 'step2.jpg', 'Щоб стати спеціалістом певного напрямку та рівня вибери для проходження відповідний курс. Якщо Тебе цікавить виключно поглиблення знань в певному напрямку ІТ, то вибери відповідний модуль.'),
	(3, 'крок', 3, 'Проплата', '/css/images/', 'step3.jpg', 'Щоб розпочати проходження курсу чи модуля виберіть зручну схему оплати та здійсни оплату зручним Тобі способом (схему оплати курсу чи модуля можна змінювати, також можлива помісячна оплата в кредит).'),
	(4, 'крок', 4, 'Освоєння матеріалу', '/css/images/', 'step4.jpg', 'Вивчення матеріалу можливе шляхом читання тексту чи/і перегляду відео для кожного заняття. Протягом освоєння матеріалу заняття виконуй Проміжні тестові завдання. По завершенню кожного заняття виконуй Підсумкове тестове завдання. Кожен модуль завершується Індивідуальним проектом чи Екзаменом, який приймають викладачі. Можна замовити індивідуальну консультацію викладача по темам та завданням чи обговорювати питання на тематичному форумі чи форумі групи.'),
	(5, 'крок', 5, 'Завершення курсу', '/css/images/', 'step5.jpg', 'Підсумком курсу є Командний дипломний проект, який виконується разом із іншими студентами (склад команди формуєте самостійно чи рекомендує керівник, який затверджує тему і технічне завдання проекту). Здача проекту передбачає передзахист та захист в он-лайн режимі із представленням технічної документації. Після захисту видається диплом та рекомендація для працевлаштування.');
/*!40000 ALTER TABLE `step` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.studentprofile
CREATE TABLE IF NOT EXISTS `studentprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `secondName` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  `education` varchar(255) DEFAULT NULL,
  `educform` decimal(60,0) DEFAULT NULL,
  `interests` text,
  `aboutUs` text,
  `aboutMy` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.studentprofile: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentprofile` DISABLE KEYS */;
INSERT INTO `studentprofile` (`id`, `firstName`, `middleName`, `secondName`, `nickname`, `birthday`, `email`, `password`, `phone`, `address`, `education`, `educform`, `interests`, `aboutUs`, `aboutMy`, `avatar`) VALUES
	(1, 'Вова', 'Джа', 'Марля', 'Wizlight', '21.03.1988', 'Wizlightdragon@gmail.com', '123', '911', 'Ямайка', 'ВДПУ', 1, 'Реггі, ковбаска, колобки', 'Растафарай', 'Володію албанською. Люблю м\'ясо та до м\'яса. Розвожу королів. ', NULL);
/*!40000 ALTER TABLE `studentprofile` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.students
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `login` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `education` varchar(255) NOT NULL,
  `about_myself` varchar(255) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `certificates` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_repeat` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_joined` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `timezome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email` (`email`),
  CONSTRAINT `FK_students_users` FOREIGN KEY (`email`) REFERENCES `users` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.students: ~0 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.studentsaccess
CREATE TABLE IF NOT EXISTS `studentsaccess` (
  `id_access` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `date_of_change` date NOT NULL,
  PRIMARY KEY (`id_access`),
  KEY `FK_courseaccess_students` (`student_id`),
  KEY `FK_studentsaccess_course` (`course_id`),
  KEY `FK_studentsaccess_lectures` (`lecture_id`),
  KEY `FK_studentsaccess_modules` (`module_id`),
  CONSTRAINT `FK_courseaccess_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  CONSTRAINT `FK_studentsaccess_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_ID`),
  CONSTRAINT `FK_studentsaccess_lectures` FOREIGN KEY (`lecture_id`) REFERENCES `lecture` (`lectureID`),
  CONSTRAINT `FK_studentsaccess_modules` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.studentsaccess: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentsaccess` DISABLE KEYS */;
/*!40000 ALTER TABLE `studentsaccess` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `foto_url` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `date_of_birth` int(11) NOT NULL DEFAULT '0',
  `subjects` varchar(50) NOT NULL DEFAULT '0',
  `job_title` varchar(50) NOT NULL DEFAULT '0',
  `education` varchar(100) NOT NULL DEFAULT '0',
  `degree` varchar(50) NOT NULL DEFAULT '0',
  `articles` text NOT NULL,
  `other_teacher_detailes` text NOT NULL,
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `email` (`email`),
  CONSTRAINT `FK_teachers_users` FOREIGN KEY (`email`) REFERENCES `users` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.teachers: ~0 rows (approximately)
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.team
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `post` varchar(64) DEFAULT NULL,
  `pic` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.team: ~5 rows (approximately)
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` (`id`, `name`, `post`, `pic`) VALUES
	(1, 'Кузнецов  Андрей  Сергеевич', 'слесарь', '541dff9af18fe.jpg'),
	(2, 'Квентин', 'сантехник', '541dffd7e4f9f.jpg'),
	(3, 'Арни', 'электрик', '541e015b628be.jpg'),
	(4, 'Аврил', 'пост', '541e01d395797.jpg'),
	(5, 'Бриттани Мерфи', 'пост', '541e01ecd43b2.jpg');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `test_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `test_title` varchar(45) NOT NULL,
  `test_description` varchar(45) NOT NULL,
  `test_url` varchar(45) NOT NULL,
  PRIMARY KEY (`test_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.tests: ~2 rows (approximately)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`test_ID`, `fkmodule_ID`, `fklecture_ID`, `test_title`, `test_description`, `test_url`) VALUES
	(1, 2, 2, 'Test 2', 'Description 2', 'URL 2'),
	(2, 3, 3, 'Test 3', 'Description 3', 'URL 3');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.theoreticalsmaterials
CREATE TABLE IF NOT EXISTS `theoreticalsmaterials` (
  `tm_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `TM_name` varchar(45) NOT NULL,
  `TM_description` varchar(45) NOT NULL,
  `TM_url` varchar(255) NOT NULL,
  PRIMARY KEY (`tm_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.theoreticalsmaterials: ~2 rows (approximately)
/*!40000 ALTER TABLE `theoreticalsmaterials` DISABLE KEYS */;
INSERT INTO `theoreticalsmaterials` (`tm_ID`, `fkmodule_ID`, `fklecture_ID`, `TM_name`, `TM_description`, `TM_url`) VALUES
	(1, 1, 1, 'TM 1', 'Description 1', 'URL 1'),
	(2, 2, 2, 'TM 2', 'Description 2', 'URL 2');
/*!40000 ALTER TABLE `theoreticalsmaterials` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(35) NOT NULL,
  `user_passwd` varchar(40) NOT NULL,
  `user_hash` varchar(20) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_email`, `user_passwd`, `user_hash`, `user_status`) VALUES
	(1, 'mail1@mail.com', 'qwerty', '67896', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `video_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `video_name` varchar(45) NOT NULL,
  `video_description` varchar(45) NOT NULL,
  `video_url` varchar(45) NOT NULL,
  `video_durationin_seconds` int(11) NOT NULL,
  PRIMARY KEY (`video_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.videos: ~0 rows (approximately)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`video_ID`, `fkmodule_ID`, `fklecture_ID`, `video_name`, `video_description`, `video_url`, `video_durationin_seconds`) VALUES
	(1, 1, 1, 'Video 1', 'Description 1', 'URL 1', 344);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
