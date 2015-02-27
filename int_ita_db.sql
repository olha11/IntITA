-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-02-27 17:49:18
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_authorizations: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_authorizations` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table int_ita_db.aa_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `aa_users` DISABLE KEYS */;
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
	(4, '11.jpg', 'train2', '/css/images/slider_img/');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.continents
CREATE TABLE IF NOT EXISTS `continents` (
  `id` varchar(15) NOT NULL,
  `name_en` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='Континенты';

-- Dumping data for table int_ita_db.continents: ~6 rows (approximately)
/*!40000 ALTER TABLE `continents` DISABLE KEYS */;
INSERT INTO `continents` (`id`, `name_en`) VALUES
	('africa', 'Africa'),
	('asia', 'Asia'),
	('australia', 'Australia'),
	('europe', 'Europe'),
	('n-america', 'North America'),
	('s-america', 'South America');
/*!40000 ALTER TABLE `continents` ENABLE KEYS */;


-- Dumping structure for table int_ita_db.countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `continent_id` varchar(15) NOT NULL,
  `name_en` varchar(60) DEFAULT NULL,
  `flag` varchar(160) DEFAULT NULL,
  `flag_ico` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `continent_id` (`continent_id`),
  CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `continents` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='Страны';

-- Dumping data for table int_ita_db.countries: ~186 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `continent_id`, `name_en`, `flag`, `flag_ico`) VALUES
	(1, 'europe', 'Russia', 'russia.png', 'russia.png'),
	(2, 'europe', 'Ukraine', 'ukraine.png', 'ukraine.png'),
	(3, 'europe', 'Austria', 'austria.png', 'austria.png'),
	(4, 'europe', 'Albania', 'albania.png', 'albania.png'),
	(5, 'europe', 'Andorra', 'andorra.png', 'andorra.png'),
	(6, 'europe', 'Belarus', 'belarus.png', 'belarus.png'),
	(7, 'europe', 'Belgium', 'belgium.png', 'belgium.png'),
	(8, 'europe', 'Bulgaria', 'bulgaria.png', 'bulgaria.png'),
	(9, 'europe', 'Bosnia and Herzegovina', 'bosnia.png', 'bosnia.png'),
	(10, 'europe', 'Vatican City', 'vatikan.png', 'vatikan.png'),
	(11, 'europe', 'Great Britain', 'greatbritain.png', 'greatbritain.png'),
	(12, 'europe', 'Hungary', 'hungary.png', 'hungary.png'),
	(13, 'europe', 'Germany', 'germany.png', 'germany.png'),
	(14, 'europe', 'Greece', 'greece.png', 'greece.png'),
	(15, 'europe', 'Denmark', 'denmark.png', 'denmark.png'),
	(16, 'europe', 'Ireland', 'ireland.png', 'ireland.png'),
	(17, 'europe', 'Iceland', 'iceland.png', 'iceland.png'),
	(18, 'europe', 'Spain', 'spain.png', 'spain.png'),
	(19, 'europe', 'Italy', 'italy.png', 'italy.png'),
	(20, 'europe', 'Kazakhstan', 'kazakhstan.png', 'kazakhstan.png'),
	(21, 'europe', 'Latvia', 'latvia.png', 'latvia.png'),
	(22, 'europe', 'Lithuania', 'lithuania.png', 'lithuania.png'),
	(23, 'europe', 'Liechtenstein', 'liechtenstein.png', 'liechtenstein.png'),
	(24, 'europe', 'Luxembourg', 'luxembourg.png', 'luxembourg.png'),
	(25, 'europe', 'Malta', 'malta.png', 'malta.png'),
	(26, 'europe', 'Maсedonia', 'macedonia.png', 'macedonia.png'),
	(27, 'europe', 'Moldova', 'moldova.png', 'moldova.png'),
	(28, 'europe', 'Monaco', 'monako.png', 'monako.png'),
	(29, 'europe', 'Netherlands', 'netherlands.png', 'netherlands.png'),
	(30, 'europe', 'Norway', 'norway.png', 'norway.png'),
	(31, 'europe', 'Poland', 'poland.png', 'poland.png'),
	(32, 'europe', 'Portugal', 'portugal.png', 'portugal.png'),
	(33, 'europe', 'Romania', 'romania.png', 'romania.png'),
	(34, 'europe', 'San Marino', 'san-marino.png', 'san-marino.png'),
	(35, 'europe', 'Serbia', 'serbia.png', 'serbia.png'),
	(36, 'europe', 'Slovakia', 'slovakia.png', 'slovakia.png'),
	(37, 'europe', 'Slovenia', 'slovenia.png', 'slovenia.png'),
	(38, 'europe', 'Turkey', 'turkey.png', 'turkey.png'),
	(39, 'europe', 'Finland', 'finland.png', 'finland.png'),
	(40, 'europe', 'France', 'france.png', 'france.png'),
	(41, 'europe', 'Croatia', 'croatia.png', 'croatia.png'),
	(42, 'europe', 'Montenegro', 'montenegro.png', 'montenegro.png'),
	(43, 'europe', 'Czech Republic', 'czech.png', 'czech.png'),
	(44, 'europe', 'Switzerland', 'switzerland.png', 'switzerland.png'),
	(45, 'europe', 'Sweden', 'sweden.png', 'sweden.png'),
	(46, 'europe', 'Estonia', 'estonia.png', 'estonia.png'),
	(47, 's-america', 'France Guiana', 'franceguiana.png', 'franceguiana.png'),
	(48, 's-america', 'Chile', 'chile.png', 'chile.png'),
	(49, 's-america', 'Ecuador', 'ecuador.png', 'ecuador.png'),
	(50, 's-america', 'South Georgia and the South Sandwich Islands', 'southgeorgia.png', 'southgeorgia.png'),
	(51, 'asia', 'Armenia', 'armenia.png', 'armenia.png'),
	(52, 'asia', 'Azerbaijan', 'azerbaijan.png', 'azerbaijan.png'),
	(53, 'asia', 'Afghanistan', 'afganistan.png', 'afganistan.png'),
	(54, 'asia', 'Bangladesh', 'bangladesh.png', 'bangladesh.png'),
	(55, 'asia', 'Bahrain', 'bahreyn.png', 'bahreyn.png'),
	(56, 'asia', 'Brunei Darussalam', 'bruney.png', 'bruney.png'),
	(57, 'asia', 'Bhutan', 'butan.png', 'butan.png'),
	(58, 'asia', 'East Timor', 'east-timor.png', 'east-timor.png'),
	(59, 'asia', 'Vietnam', 'vetnam.png', 'vetnam.png'),
	(60, 'europe', 'Georgia', 'georgia.png', 'georgia.png'),
	(62, 'asia', 'India', 'indiya.png', 'indiya.png'),
	(63, 'asia', 'Indonesia', 'indoneziya.png', 'indoneziya.png'),
	(64, 'asia', 'Jordan', 'iordaniya.png', 'iordaniya.png'),
	(65, 'asia', 'Iraq', 'iraq.png', 'iraq.png'),
	(66, 'asia', 'Iran', 'iran.png', 'iran.png'),
	(67, 'asia', 'Yemen', 'yemen.png', 'yemen.png'),
	(69, 'asia', 'Cambodia', 'kambodzha.png', 'kambodzha.png'),
	(70, 'asia', 'Qatar', 'qatar.png', 'qatar.png'),
	(71, 'asia', 'Cyprus', 'cyprus.png', 'cyprus.png'),
	(72, 'asia', 'Kyrgyzstan', 'kyrgyzstan.png', 'kyrgyzstan.png'),
	(73, 'asia', 'China', 'china.png', 'china.png'),
	(74, 'asia', 'North Korea', 'kndr.png', 'kndr.png'),
	(75, 'asia', 'Kuwait', 'kuveyt.png', 'kuveyt.png'),
	(76, 'asia', 'Laos', 'laos.png', 'laos.png'),
	(77, 'asia', 'Lebanon', 'livan.png', 'livan.png'),
	(78, 'asia', 'Malaysia', 'malayziya.png', 'malayziya.png'),
	(79, 'asia', 'Maldives', 'maldivi.png', 'maldivi.png'),
	(80, 'asia', 'Mongolia', 'mongoliya.png', 'mongoliya.png'),
	(81, 'asia', 'Myanmar', 'myanma.png', 'myanma.png'),
	(82, 'asia', 'Nepal', 'nepal.png', 'nepal.png'),
	(83, 'asia', 'United Arab Emirates', 'oae.png', 'oae.png'),
	(84, 'asia', 'Oman', 'oman.png', 'oman.png'),
	(85, 'asia', 'Pakistan', 'pakistan.png', 'pakistan.png'),
	(86, 'asia', 'Palestina', 'palestina.png', 'palestina.png'),
	(87, 'asia', 'Saudi Arabia', 'saudiarabia.png', 'saudiarabia.png'),
	(88, 'asia', 'Syria', 'siriya.png', 'siriya.png'),
	(89, 'asia', 'Singapore', 'singapore.png', 'singapore.png'),
	(90, 'asia', 'Tajikistan', 'tajikistan.png', 'tajikistan.png'),
	(91, 'asia', 'Tailand', 'tailand.png', 'tailand.png'),
	(92, 'asia', 'Turkmeniya', 'turkmeniya.png', 'turkmeniya.png'),
	(93, 'asia', 'Uzbekistan', 'uzbekistan.png', 'uzbekistan.png'),
	(94, 'asia', 'Philippines', 'filippini.png', 'filippini.png'),
	(95, 'asia', 'Sri Lanka', 'sri-lanka.png', 'sri-lanka.png'),
	(96, 'asia', 'Korea', 'korea.png', 'korea.png'),
	(97, 'asia', 'Japan', 'japan.png', 'japan.png'),
	(98, 'africa', 'Algeria', 'algeria.png', 'algeria.png'),
	(99, 'africa', 'Egypt', 'egipet.png', 'egipet.png'),
	(100, 'africa', 'Libya', 'liviya.png', 'liviya.png'),
	(101, 'africa', 'Morocco', 'marokko.png', 'marokko.png'),
	(102, 'africa', 'Sudan', 'sudan.png', 'sudan.png'),
	(103, 'africa', 'Tunisia', 'tunis.png', 'tunis.png'),
	(105, 'africa', 'Ceuta', 'seuta.png', 'seuta.png'),
	(106, 'africa', 'Madeira', 'madeira.png', 'madeira.png'),
	(107, 'africa', 'Melilla', 'melilya.png', 'melilya.png'),
	(108, 'africa', 'Benin', 'benin.png', 'benin.png'),
	(109, 'africa', 'Burkina Faso', 'burkina_faso.png', 'burkina_faso.png'),
	(110, 'africa', 'Gambia', 'gambiya.png', 'gambiya.png'),
	(111, 'africa', 'Ghana', 'gana.png', 'gana.png'),
	(112, 'africa', 'Guinea', 'gvineya.png', 'gvineya.png'),
	(113, 'africa', 'Guinea - Bissau', 'gvineya-bisau.png', 'gvineya-bisau.png'),
	(114, 'africa', 'Cape Verde', 'kabo-verde.png', 'kabo-verde.png'),
	(115, 'africa', 'Ivory Coast', 'ivorycoast.png', 'ivorycoast.png'),
	(116, 'africa', 'Liberia', 'liberiya.png', 'liberiya.png'),
	(117, 'africa', 'Mali', 'mali.png', 'mali.png'),
	(118, 'africa', 'Mauritania', 'mavritaniya.png', 'mavritaniya.png'),
	(119, 'africa', 'Niger', 'niger.png', 'niger.png'),
	(120, 'africa', 'Nigeria', 'nigeria.png', 'nigeria.png'),
	(122, 'africa', 'Senegal', 'senegal.png', 'senegal.png'),
	(123, 'africa', 'Sierra Leone', 'sierra-leone.png', 'sierra-leone.png'),
	(124, 'africa', 'Togo', 'togo.png', 'togo.png'),
	(125, 'africa', 'Angola', 'angola.png', 'angola.png'),
	(126, 'africa', 'Gabon', 'gabon.png', 'gabon.png'),
	(127, 'africa', 'Cameroon', 'kamerun.png', 'kamerun.png'),
	(128, 'africa', 'Democratic Republic of the Congo', 'drk.png', 'drk.png'),
	(129, 'africa', 'Republic of the Congo', 'kongo.png', 'kongo.png'),
	(130, 'africa', 'Sao Tome and Principe', 'sao-tome-principe.png', 'sao-tome-principe.png'),
	(131, 'africa', 'Central African Republic', 'car.png', 'car.png'),
	(132, 'africa', 'Chad', 'chad.png', 'chad.png'),
	(133, 'africa', 'Equatorial Guinea', 'equatorial-guinea.png', 'equatorial-guinea.png'),
	(134, 'africa', 'Burundi', 'burundi.png', 'burundi.png'),
	(135, 'africa', 'Djibouti', 'dzhibuti.png', 'dzhibuti.png'),
	(136, 'africa', 'Zambia', 'zambiya.png', 'zambiya.png'),
	(137, 'africa', 'Zimbabwe', 'zimbabve.png', 'zimbabve.png'),
	(138, 'africa', 'Kenya', 'keniya.png', 'keniya.png'),
	(139, 'africa', 'Comoros', 'comoros.png', 'comoros.png'),
	(140, 'africa', 'Mauritius', 'mavrikiy.png', 'mavrikiy.png'),
	(141, 'africa', 'Madagascar', 'madagaskar.png', 'madagaskar.png'),
	(142, 'africa', 'Malawi', 'malavi.png', 'malavi.png'),
	(143, 'africa', 'Mozambique', 'mozambik.png', 'mozambik.png'),
	(144, 'africa', 'Rwanda', 'ruanda.png', 'ruanda.png'),
	(145, 'africa', 'Seychelles', 'seychelles.png', 'seychelles.png'),
	(146, 'africa', 'Somalia', 'somali.png', 'somali.png'),
	(147, 'africa', 'Somali', 'somalilend.png', 'somalilend.png'),
	(148, 'africa', 'Tanzania', 'tanzaniya.png', 'tanzaniya.png'),
	(149, 'africa', 'Uganda', 'uganda.png', 'uganda.png'),
	(150, 'africa', 'Eritrea', 'eritreya.png', 'eritreya.png'),
	(151, 'africa', 'Ethiopia', 'ethiopia.png', 'ethiopia.png'),
	(152, 'africa', 'Botswana', 'botsvana.png', 'botsvana.png'),
	(153, 'africa', 'Lesotho', 'lesoto.png', 'lesoto.png'),
	(154, 'africa', 'Namibia', 'namibiya.png', 'namibiya.png'),
	(156, 'africa', 'Swaziland', 'svazilend.png', 'svazilend.png'),
	(157, 'africa', 'South Africa', 'sudafricana.png', 'sudafricana.png'),
	(158, 'n-america', 'Belize', 'belize.png', 'belize.png'),
	(159, 'n-america', 'Guatemala', 'guatemala.png', 'guatemala.png'),
	(160, 'n-america', 'Honduras', 'honduras.png', 'honduras.png'),
	(161, 'n-america', 'Costa Rica', 'costa_rica.png', 'costa_rica.png'),
	(162, 'n-america', 'Nicaragua', 'nicaragua.png', 'nicaragua.png'),
	(163, 'n-america', 'Panama', 'panama.png', 'panama.png'),
	(164, 'n-america', 'El Salvador', 'salvador.png', 'salvador.png'),
	(165, 'n-america', 'Cuba', 'cuba.png', 'cuba.png'),
	(166, 'n-america', 'Mexico', 'mexico.png', 'mexico.png'),
	(167, 'n-america', 'Canada', 'canada.png', 'canada.png'),
	(168, 'n-america', 'USA', 'usa.png', 'usa.png'),
	(169, 'europe', 'England', 'england.png', 'england.png'),
	(170, 'europe', 'Scotland', 'scotland.png', 'scotland.png'),
	(171, 'europe', 'Wales', 'wales.png', 'wales.png'),
	(172, 'europe', 'Northern Ireland', 'north_ireland.png', 'north_ireland.png'),
	(173, 'australia', 'Australia', 'australia.png', 'australia.png'),
	(174, 'australia', 'New Zealand', 'newzeland.png', 'newzeland.png'),
	(175, 'australia', 'Solomon Islands', 'solomon_islands.png', 'solomon_islands.png'),
	(176, 'australia', 'Marshall Islands', 'marshall_islands.png', 'marshall_islands.png'),
	(177, 'australia', 'Vanuatu', 'vanuatu.png', 'vanuatu.png'),
	(178, 's-america', 'Argentina', 'argentina.png', 'argentina.png'),
	(179, 's-america', 'Bolivia', 'bolivia.png', 'bolivia.png'),
	(180, 's-america', 'Brazil', 'brazil.png', 'brazil.png'),
	(181, 's-america', 'Venezuela', 'venezuela.png', 'venezuela.png'),
	(182, 's-america', 'Guyana', 'guyana.png', 'guyana.png'),
	(183, 's-america', 'Colombia', 'colombia.png', 'colombia.png'),
	(184, 's-america', 'Paraguay', 'paraguay.png', 'paraguay.png'),
	(185, 's-america', 'Peru', 'peru.png', 'peru.png'),
	(186, 's-america', 'Surinam', 'surinam.png', 'surinam.png'),
	(187, 's-america', 'Uruguay', 'uruguay.png', 'uruguay.png'),
	(188, 'europe', 'Israel', 'israel.png', 'israel.png'),
	(189, 'n-america', 'Jamaica', 'jamaica.png', 'jamaica.png'),
	(195, 'europe', 'Faroe Islands', 'faroe.png', 'faroe.png'),
	(196, 'australia', 'Saint Vincent and the Grenadines', NULL, NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;


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
  `phone` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image_up` varchar(255) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.footer: ~0 rows (approximately)
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
INSERT INTO `footer` (`footer_id`, `image_social`, `phone`, `mobile`, `email`, `image_up`) VALUES
	(1, '/css/images/sotial.gif', 'телефон: +38 0432 52', 'тел. моб. +38 067 43', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');
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
  `enter_button_link` varchar(255) NOT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.header: ~0 rows (approximately)
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
INSERT INTO `header` (`header_id`, `language`, `logo_url`, `menu_item_1`, `item_1_link`, `menu_item_2`, `item_2_link`, `menu_item_3`, `item_3_link`, `menu_item_4`, `item_4_link`, `enter_button_link`) VALUES
	(1, 'UA', '/css/images/Logo_big.png', 'Курси', 'http://www.google.com', 'Викладачі', 'http://www.google.com', 'Форум', 'http://www.google.com', 'Про нас', 'http://www.google.com', '/css/images/enter_button.png');
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


-- Dumping structure for table int_ita_db.lectures
CREATE TABLE IF NOT EXISTS `lectures` (
  `lecture_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkcourse_ID` int(11) NOT NULL,
  `fkmodule_ID` int(11) NOT NULL,
  `name_classes` varchar(45) NOT NULL,
  `goal_of_classes` varchar(45) NOT NULL,
  `total_number_of_items` int(11) NOT NULL,
  `duration_in_hours` int(11) NOT NULL,
  PRIMARY KEY (`lecture_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.lectures: ~3 rows (approximately)
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` (`lecture_ID`, `fkcourse_ID`, `fkmodule_ID`, `name_classes`, `goal_of_classes`, `total_number_of_items`, `duration_in_hours`) VALUES
	(1, 1, 1, 'Name classes 1', 'Goal of classes 1', 10, 100),
	(2, 2, 2, 'Name classes 2', 'Goal of classes 2', 5, 50),
	(3, 3, 3, 'Name of classes 3', 'Goal of classes 3 ', 3, 30);
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;


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
  `block1` int(11) NOT NULL,
  `block2` int(11) NOT NULL,
  `block3` int(11) NOT NULL,
  `header2` varchar(50) NOT NULL,
  `subheader2` varchar(100) NOT NULL,
  `step1` int(11) NOT NULL,
  `step2` int(11) NOT NULL,
  `step3` int(11) NOT NULL,
  `step4` int(11) NOT NULL,
  `step5` int(11) NOT NULL,
  `step_size` varchar(10) NOT NULL,
  `linkName` varchar(20) NOT NULL,
  `hexagon` varchar(255) NOT NULL,
  PRIMARY KEY (`mainpage_id`),
  UNIQUE KEY `carousel_id` (`carousel_id`),
  KEY `FK_mainpage_block` (`block1`),
  KEY `FK_mainpage_block_2` (`block2`),
  KEY `FK_mainpage_block_3` (`block3`),
  KEY `FK_mainpage_step` (`step1`),
  KEY `FK_mainpage_step_2` (`step2`),
  KEY `FK_mainpage_step_3` (`step3`),
  KEY `FK_mainpage_step_4` (`step4`),
  KEY `FK_mainpage_step_5` (`step5`),
  CONSTRAINT `FK_mainpage_block` FOREIGN KEY (`block1`) REFERENCES `aboutus` (`block_id`),
  CONSTRAINT `FK_mainpage_block_2` FOREIGN KEY (`block2`) REFERENCES `aboutus` (`block_id`),
  CONSTRAINT `FK_mainpage_block_3` FOREIGN KEY (`block3`) REFERENCES `aboutus` (`block_id`),
  CONSTRAINT `FK_mainpage_step` FOREIGN KEY (`step1`) REFERENCES `step` (`step_id`),
  CONSTRAINT `FK_mainpage_step_2` FOREIGN KEY (`step2`) REFERENCES `step` (`step_id`),
  CONSTRAINT `FK_mainpage_step_3` FOREIGN KEY (`step3`) REFERENCES `step` (`step_id`),
  CONSTRAINT `FK_mainpage_step_4` FOREIGN KEY (`step4`) REFERENCES `step` (`step_id`),
  CONSTRAINT `FK_mainpage_step_5` FOREIGN KEY (`step5`) REFERENCES `step` (`step_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.mainpage: ~1 rows (approximately)
/*!40000 ALTER TABLE `mainpage` DISABLE KEYS */;
INSERT INTO `mainpage` (`mainpage_id`, `title`, `carousel_id`, `slider_header`, `slider_text`, `slider_texture_url`, `slider_line_url`, `slider_button_text`, `header1`, `subLineImage`, `subheader1`, `block1`, `block2`, `block3`, `header2`, `subheader2`, `step1`, `step2`, `step3`, `step4`, `step5`, `step_size`, `linkName`, `hexagon`) VALUES
	(1, 'IntITA', 1, 'ПРОГРАМУЙ  МАЙБУТНЄ', 'Програміст — сама древня сучасна професія на планеті Земля!', '/css/images/slider_img/texture.png', '/css/images/slider_img/line.png', 'Почати />', 'Про нас', '/css/images/line1.png', 'дещо, що Вам потрібно знати про наші курси', 1, 2, 3, 'Як проводиться навчання?', 'далі пояснення як ви будете вчитися крок за кроком', 1, 2, 3, 4, 5, '958px', 'детальніше ...', '/css/images/hexagon.png');
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

-- Dumping data for table int_ita_db.step: ~4 rows (approximately)
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
  `secondName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `aboutMyself` text,
  `interests` text,
  `certificates` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `note` text,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.studentprofile: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentprofile` DISABLE KEYS */;
INSERT INTO `studentprofile` (`id`, `firstName`, `secondName`, `middleName`, `login`, `birthday`, `education`, `aboutMyself`, `interests`, `certificates`, `phone`, `email`, `address`, `note`, `password`) VALUES
	(1, 'Вова', 'Марля', 'Джа', 'Wizlight', '21.03.1988', 'ВДПУ', 'Растафарай', 'Реггі, ковбаска, колобки', 'Доктора Попова', '911', 'Wizlightdragon@gmail.com', 'Ямайка', 'Нон', '123');
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
  CONSTRAINT `FK_studentsaccess_lectures` FOREIGN KEY (`lecture_id`) REFERENCES `lectures` (`lecture_ID`),
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
