-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-04-14 19:44:11
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table int_ita_db.translatedmessagesen
DROP TABLE IF EXISTS `translatedmessagesen`;
CREATE TABLE IF NOT EXISTS `translatedmessagesen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(16) NOT NULL,
  `translation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.translatedmessagesen: ~94 rows (approximately)
/*!40000 ALTER TABLE `translatedmessagesen` DISABLE KEYS */;
INSERT INTO `translatedmessagesen` (`id`, `language`, `translation`) VALUES
	(1, 'en', 'INTITA'),
	(2, 'en', 'About Us'),
	(3, 'en', 'How to start studying?'),
	(4, 'en', 'more ...'),
	(5, 'en', 'PROGRAM THE FUTURE'),
	(6, 'en', 'Important information about studying with us'),
	(7, 'en', 'Five steps to implement your dreams'),
	(8, 'en', 'START />'),
	(9, 'en', 'Ready to get started?'),
	(10, 'en', 'Enter data into the form below'),
	(11, 'en', 'extended registration'),
	(12, 'en', 'You can also register by social networks:'),
	(13, 'en', 'START'),
	(14, 'en', 'Email'),
	(15, 'en', 'password'),
	(16, 'en', 'Courses'),
	(17, 'en', 'Forum'),
	(18, 'en', 'About Us'),
	(19, 'en', 'Enter'),
	(20, 'en', 'Exit'),
	(21, 'en', 'Teachers'),
	(22, 'en', 'Exit'),
	(23, 'en', 'phone: +38 0432 52 82 67'),
	(24, 'en', 'mobile: +38 067 432 50 20'),
	(25, 'en', 'e-mail: intita.hr@gmail.com'),
	(26, 'en', 'skype: int.ita'),
	(27, 'en', 'We guarantee you an offer of employment<br>\r\nafter successful completion of training!'),
	(28, 'en', 'Do not miss your chance to change the world - get high-quality and modern education<br>\r\nand become a specialist class!'),
	(29, 'en', 'One year of productive and interesting learning - and you will become a professional programmer<br>\r\nready work in the IT industry!'),
	(30, 'en', 'Do you want to become a high-class specialist?<br>\r\ntakes correct and informed decision - Learn with us!'),
	(31, 'en', 'Do not lose your chance for creative, interesting, and challenging decent work -<br>\r\nplan their professional future today!'),
	(32, 'en', 'What are you dreaming?'),
	(33, 'en', 'Future Studies'),
	(34, 'en', 'Questions and comments'),
	(35, 'en', 'Maybe this freedom to live their lives? Independently manage own time with opportunity to earn by doing things you love and get business and get meet the modern profession?'),
	(36, 'en', 'Unlike traditional schools, We do not teach for the sake of ratings. We work individually with each student to achieve 100% mastering the necessary knowledge.'),
	(37, 'en', 'We offer each of our graduate guaranteed receipt employment offers for 4-6 months after the successful completion of training.'),
	(38, 'en', 'Register Online'),
	(39, 'en', 'Choice of course or module'),
	(40, 'en', 'Payment for training'),
	(41, 'en', 'Mastering the material'),
	(42, 'en', 'Completion rate'),
	(43, 'en', 'step'),
	(44, 'en', 'To access the courses and pass free modules and classes register on the site. Registration will allow you to assess the quality and usability of our product that you will become a reliable partner and advisor in professional self-realization.'),
	(45, 'en', 'To become specialists in a certain direction and level (get professional specialization) choose to undergo appropriate course. If you are interested only deepen the knowledge in a particular area of ​​information technology, then choose the module to pass.\')'),
	(46, 'en', 'To start a course or module choose payment scheme (the entire amount for the course, payment modules, payment potrymestrovo, month, etc.) and make a payment convenient way to You (payment scheme or course module can be changed monthly as possible payment credit). '),
	(47, 'en', 'The study material is possible by reading the text and / or viewing a video for each session. During the passage Intermediate classes perform tests. At the end of each session do the final test tasks. Each module ends with an individual project or exam. You can receive individual counseling teacher or advice online. '),
	(48, 'en', 'The result of course is the command thesis project, performed together with other students (the team recommends that forms an independent or executive who approved topic and terms of reference of the project). Delivery Project peredzahyst and provides protection in the online mode with presentation design. After defending his diploma and recommendation for employment.'),
	(49, 'en', 'Home'),
	(50, 'en', 'Courses'),
	(51, 'en', 'About us'),
	(52, 'en', 'Teachers'),
	(53, 'en', 'Forum'),
	(54, 'en', 'Profile'),
	(55, 'en', 'Edit profile'),
	(56, 'en', 'Registration'),
	(57, 'en', 'Teacher profile'),
	(58, 'en', 'Our teachers'),
	(59, 'en', 'personal page'),
	(60, 'en', 'If you\'re a professional IT specialist and want to teach some courses or modules IT and cooperate with us in the field of training programmers write us a letter.'),
	(61, 'en', 'Conducts courses'),
	(62, 'en', 'Read more'),
	(63, 'en', 'Reviews'),
	(64, 'en', 'Section:'),
	(65, 'en', 'About the teacher:'),
	(66, 'en', 'Our courses'),
	(67, 'en', 'The concept of training'),
	(68, 'en', 'Level: '),
	(69, 'en', 'Language: '),
	(70, 'en', 'Course:'),
	(71, 'en', 'lang:'),
	(72, 'en', 'Module:'),
	(73, 'en', 'Lecture:'),
	(74, 'en', 'Type:'),
	(75, 'en', 'Duration:'),
	(76, 'en', 'min'),
	(77, 'en', 'Teacher'),
	(78, 'en', 'more'),
	(79, 'en', 'Plan consultation'),
	(80, 'en', 'Content'),
	(81, 'en', 'show'),
	(82, 'en', 'hide'),
	(83, 'en', 'Videos'),
	(84, 'en', 'Sample code'),
	(85, 'en', 'User'),
	(86, 'en', 'task'),
	(87, 'en', 'review the previous lesson'),
	(88, 'en', 'NEXT LECTURE'),
	(89, 'en', 'Reply'),
	(90, 'en', 'Final task'),
	(91, 'en', 'You can also enter by social networks:'),
	(92, 'en', 'Forget password?'),
	(93, 'en', 'SIGN IN'),
	(94, 'en', 'Status:');
/*!40000 ALTER TABLE `translatedmessagesen` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
