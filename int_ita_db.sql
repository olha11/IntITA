/*
Navicat MySQL Data Transfer

Source Server         : IntITA
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : int_ita_db

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-03-13 20:56:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aa_access
-- ----------------------------
DROP TABLE IF EXISTS `aa_access`;
CREATE TABLE `aa_access` (
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

-- ----------------------------
-- Records of aa_access
-- ----------------------------

-- ----------------------------
-- Table structure for aa_authorizations
-- ----------------------------
DROP TABLE IF EXISTS `aa_authorizations`;
CREATE TABLE `aa_authorizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) unsigned NOT NULL,
  `when_enter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `when_enter` (`when_enter`),
  CONSTRAINT `aa_authorizations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of aa_authorizations
-- ----------------------------
INSERT INTO `aa_authorizations` VALUES ('1', '2', '2015-03-02 15:33:25', '::1');
INSERT INTO `aa_authorizations` VALUES ('2', '2', '2015-03-02 15:33:25', '::1');
INSERT INTO `aa_authorizations` VALUES ('3', '2', '2015-03-02 15:41:58', '::1');
INSERT INTO `aa_authorizations` VALUES ('4', '2', '2015-03-02 15:41:59', '::1');
INSERT INTO `aa_authorizations` VALUES ('5', '3', '2015-03-02 15:45:10', '::1');
INSERT INTO `aa_authorizations` VALUES ('6', '3', '2015-03-02 15:45:10', '::1');
INSERT INTO `aa_authorizations` VALUES ('7', '2', '2015-03-03 15:04:10', '::1');
INSERT INTO `aa_authorizations` VALUES ('8', '2', '2015-03-03 15:04:10', '::1');
INSERT INTO `aa_authorizations` VALUES ('9', '2', '2015-03-03 15:41:31', '::1');
INSERT INTO `aa_authorizations` VALUES ('10', '2', '2015-03-03 15:41:32', '::1');
INSERT INTO `aa_authorizations` VALUES ('11', '2', '2015-03-03 17:26:15', '::1');
INSERT INTO `aa_authorizations` VALUES ('12', '2', '2015-03-03 17:26:15', '::1');
INSERT INTO `aa_authorizations` VALUES ('13', '2', '2015-03-04 12:54:56', '::1');
INSERT INTO `aa_authorizations` VALUES ('14', '2', '2015-03-04 12:54:56', '::1');
INSERT INTO `aa_authorizations` VALUES ('15', '2', '2015-03-05 14:12:11', '::1');
INSERT INTO `aa_authorizations` VALUES ('16', '2', '2015-03-05 14:12:12', '::1');
INSERT INTO `aa_authorizations` VALUES ('17', '2', '2015-03-06 13:21:13', '::1');
INSERT INTO `aa_authorizations` VALUES ('18', '2', '2015-03-06 13:21:13', '::1');
INSERT INTO `aa_authorizations` VALUES ('19', '2', '2015-03-06 13:33:29', '::1');
INSERT INTO `aa_authorizations` VALUES ('20', '2', '2015-03-06 13:33:30', '::1');
INSERT INTO `aa_authorizations` VALUES ('21', '2', '2015-03-07 01:19:06', '::1');
INSERT INTO `aa_authorizations` VALUES ('22', '2', '2015-03-07 01:19:07', '::1');
INSERT INTO `aa_authorizations` VALUES ('23', '2', '2015-03-07 10:31:26', '::1');
INSERT INTO `aa_authorizations` VALUES ('24', '2', '2015-03-07 10:31:27', '::1');

-- ----------------------------
-- Table structure for aa_errors
-- ----------------------------
DROP TABLE IF EXISTS `aa_errors`;
CREATE TABLE `aa_errors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `error_type` enum('exception','warning') DEFAULT NULL,
  `info` text,
  `authorization_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `authorization_id` (`authorization_id`),
  CONSTRAINT `aa_errors_ibfk_1` FOREIGN KEY (`authorization_id`) REFERENCES `aa_authorizations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aa_errors
-- ----------------------------

-- ----------------------------
-- Table structure for aa_interfaces
-- ----------------------------
DROP TABLE IF EXISTS `aa_interfaces`;
CREATE TABLE `aa_interfaces` (
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

-- ----------------------------
-- Records of aa_interfaces
-- ----------------------------

-- ----------------------------
-- Table structure for aa_logs
-- ----------------------------
DROP TABLE IF EXISTS `aa_logs`;
CREATE TABLE `aa_logs` (
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

-- ----------------------------
-- Records of aa_logs
-- ----------------------------

-- ----------------------------
-- Table structure for aa_sections
-- ----------------------------
DROP TABLE IF EXISTS `aa_sections`;
CREATE TABLE `aa_sections` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of aa_sections
-- ----------------------------

-- ----------------------------
-- Table structure for aa_users
-- ----------------------------
DROP TABLE IF EXISTS `aa_users`;
CREATE TABLE `aa_users` (
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

-- ----------------------------
-- Records of aa_users
-- ----------------------------
INSERT INTO `aa_users` VALUES ('2', 'root', 'root', '63a9f0ea7bb98050796b649e85481845', '1', 'root', 'root', 'root', 'root', '2015-03-02 15:33:13', null, null, '0');
INSERT INTO `aa_users` VALUES ('3', 'user', 'User', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 'user', 'Surname', 'Name', 'Middle name', '2015-03-02 15:43:00', null, null, '0');

-- ----------------------------
-- Table structure for aboutus
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `blockID` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('EN','UA','RU') NOT NULL,
  `line2Image` varchar(255) NOT NULL,
  `iconImage` varchar(255) NOT NULL,
  `titleText` varchar(50) NOT NULL,
  `textAbout` varchar(255) NOT NULL,
  `linkAddress` varchar(255) NOT NULL,
  `imagesPath` varchar(255) NOT NULL,
  `drop1Text` text NOT NULL,
  `drop2Text` text NOT NULL,
  `drop3Text` text NOT NULL,
  `dropName` varchar(50) NOT NULL,
  `textLarge` text NOT NULL,
  PRIMARY KEY (`blockID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES ('1', 'UA', '/css/images/line2.png', 'image1.png', 'Про що мрієш ти?', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн?</p>', '/index.php?r=site/aboutdetail&id=1', '/css/images/', '', '', '', '', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн? Забезпечене життя для себе та близьких, коли не доводиться думати про гроші?\nА, може, це свобода жити своїм життям? Самостійно керувати власним часом з можливістю працювати за зручним графіком без необхідності щодня їздити на роботу, але при цьому мати стабільно високий дохід?\n	Можливо ти хочеш заробляти, займаючись улюбленою справою і отримувати задоволення від сучасної професії?\nПро що б ти не мріяв, для здійснення більшості мрій потрібні гроші. Сьогодні середня зарплата в Україні є найнижчою в Європі: близько 3,5 тис грн у місяць. Навіть якщо брати сферу бізнесу, зарплати більшості робітників не перевищують 5-8 тис грн. \nЯк щодо 40 - 60 тис грн в місяць з можливістю працювати за гнучким графіком та дистанційно? Ти думаєш, що в нашій країні такі умови лише у керівників та власників бізнесу? У нас хороша новина: вже через рік-два-три так зможеш заробляти і ти.</p>\n\n<p><span class=\"detailTitle2\">Професія майбутнього</span>\n Сьогодні у тебе є реальна можливість поєднати хороший заробіток, гнучкий графік роботи та зручність дистанційної роботи. І це не “заработок в интернете”, про який кричить банерна реклама на багатьох сайтах. Ми віримо у те, що високого стабільного доходу можна досягти лише за допомогою власних зусиль.\nМи живемо в епоху, коли головним двигуном розвитку світової економіки є інформаційні технології (ІТ). Вони дозволяють досягти нових проривних результатів у традиційних галузях: виробництві та послугах. Саме інформаційні технології повністю змінили і продовжують трансформувати індустрії звязку, розваг (книги, музика, фільми), банківських послуг, а також такі традиційні бізнеси, як послуги таксі (Uber), готелів (Airbnb), навчання (Coursera). \nГерої інформаційної епохи - це спеціалісти з інформаційних технологій. Вони знаходяться на передовій змін, вони придумали та продовжують розвивати Windows, iOS, Android, а також мільйони додатків до них, вони створюють соціальні мережі, сайти та бази даних. \nГарна новина для тебе: сьогодні таких спеціалістів не вистачає. Інформаційні технології розвиваються дуже швидко і стають потрібними усюди, тому людей не вистачає, існуючі навчальні заклади просто не встигають готувати потрібну кількість. Нестача спеціалістів означає, що зарплати на ринку стабільно зростають, і сягнули небачених для України значень: в середньому спеціалісти з інформаційних технологій сьогодні отримують 3-5 тис доларів у місяць, і при цьому роботодавці активно полюють на професіоналів. Секрет таких високих зарплат не лише у дефіциті кадрів, а й у тому, що для ІТ-галузі кордони - не проблема. Ти можеш працювати вдома зі своєї квартири в Україні над замовленням клієнта зі США чи Німеччини і отримувати винагороду у доларах чи євро з рівнем оплати, не набагато нижчим від американських чи європейських стандартів.  \nМи запрошуємо тебе приєднатися до світової інформаційної еліти та за короткий час стати професіоналом у сфері інформаційних технологій, щоб отримувати стабільно високий дохід та працювати в зручних умовах за гнучким графіком. </p>\n\n<p><span class=\"detailTitle2\">Що очікується від тебе</span><br/>\nПрограмування - це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля. Ризикнемо сказати, що крім часу та зусиль (та, зрозуміло, наявності простенького компютера) не потрібно більше ні-чо-го. Не потрібно бути сильним у математиці: навіть якщо у школі ти не любив математику, а твої оцінки не піднимались вище середнього рівня, ти зможеш стати чудовим програмістом. Не потрібно знати, як влаштований компютер чи бути досвіченим користувачем будь-яких програм. Достатньо часу на навчання та бажання займатися. Гарні знання з математики, логіки, комп’ютера можуть пришвидшити темп навчання, але й без них кожен зможе досягти високого рівня професіоналізму у програмуванні завдяки іноваційному підходу до навчання Академії Програмування ІНТІТА.</p>');
INSERT INTO `aboutus` VALUES ('2', 'UA', '/css/images/line2.png', 'image2.png', 'Навчання майбутнього сьогодні', '<p>Програмування – це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля.</p>', '/index.php?r=site/aboutdetail&id=2', '/css/images/', '', '', '', '', '<p>Коли мова йде про навчальний заклад, можемо побитися об заклад, що до думки тобі приходять велика будівля з десятками навчальних приміщень, лекційна аудиторія, парти, записники, конспекти, викладачі, лекції, семінари. Така система освіти сформувалася ще у Стародавній Греції, і за кілька тисяч років майже не змінилася. Але зараз світ стоїть на порозі великої революції в освіті, яка назавжди змінить те, як ми навчаємося. Сьогодні технології зробили доступним те, що раніше могли дозволити собі лише одиниці, наймаючи персональних вчителів та репетиторів: персоналізоване навчання.\n<span class=\"detailTitle2\">“Три кити” Академії ІНТІТА </span></p>\n\n<p><span class=\"detailTitle3\">Кит перший. Гнучкість та зручність. </span></p>\n\n<p>Ти можеш самостійно будувати графік навчання, виходячи з власних потреб та цілей. Якщо ти хочеш закінчити навчання та почати працювати вже через рік, обирай інтенсивне навчання та займайся 6-8 годин в день. Якщо ти хочеш освоїти програмування поступово, не жертвуючи іншими важливими для тебе речами, ти можеш займатися ті ж 6-8 годин, але у тиждень. \nНе потрібно відвідувати навчальний заклад, Академія з тобою всюди. Навіть якщо ти у місці, де немає звязку та інтернету, ти можеш переглядати лекції в офлайн-режимі, а практичну частину зробити пізніше, коли зявиться доступ.  \n<span class=\"detailTitle3\">Кит другий. Орієнтація на ринок. </span></p>\n\n<p>Ми даємо тобі лише 100% необхідні знання. Ми поважаємо гуманітарні дисципліни та фундаментальні точні науки, які входять до  складу обовязкових для вивчення у вишах, але переконані, що вони не є обовязковими для того, щоб стати професіоналом у сфері інформаційних технологій. Ми вважаємо, що кожен має вирішувати індивідуально, що вивчати та чим цікавитись за межами своєї професії. У той же час у програмах вишів відсутні критичні для професійного успіху дисципліни, або ж вони викладаються недостатньо професійно (англійська мова для ІТ-спеціалістів, проектний менеджмент тощо). Інформаційні технології - це дисципліна, яка змінюється кожного дня, програми вишів просто не встигають адаптуватися до такої швидкості змін. ІНТІТА слідкує за змінами щодня, і адаптує як навчальну програму, так і зміст окремих предметів за необхідностю миттєво. Ми завжди у пошуку нового матеріалу, який можна передати студентам академії.  \nПорівнюючи звичайний технічний виш та академію ІНТІТА, ти можеш думати про сімейний універсал та болід Формула-1. Перший підходить для широкого кола завдань, але він значно програє позашляховикам у прохідності, міні-венам у місткості, лімузинам - у комфорті, спротивним автомобілям - у швидкості та керуванні. Другий сконструйовано лише заради максимальної швидкості та маневреності, жертвуючи усім іншим. І в результаті ми не зробимо з тебе універсально освічену людину, яка розбирається потрохи у всьому, ми зробимо тебе професіоналом світового класу в області програмування.  \n <span class=\"detailTitle3\">Кит третій. Результативність. </span></p>\n\n<p>На відміну від традиційних закладів, ми не навчаємо задля оцінок. Ми працюємо індивідуально з кожним студентом, щоб досягти 100% засвоєння необхідних знань (а ми даємо лише необхідні знання). Ми не обмежуємо тебе у часі, теоретично ти можеш навчатися як завгодно довго. Ми беремо на себе зобовязання навчити тебе програмуванню, незважаючи на те, які знання у тебе вже є. Єдиними передумовами для початку занять є бажання, час на навчання, наявність хоча б простенького компютера та вміння читати та писати. \nЗнання, які ти отримаєш, максимально практичні та сучасні. Починаючи з першого заняття, ти робитимеш завдання з реального світу програмування. Ближче до закінчення навчання ти будеш приймати участь у створенні реальних програмних продуктів для ринку.\nМи гарантуємо тобі 100% отримання пропозиції про працевлаштування протягом 4-6-ти місяців після успішного закінчення навчання.\n <span class=\"detailTitle2\">ІНТІТА: переваги наочно</span>\n \n <table id=\"detailTable\">\n<tr><td><span class=\"detailTitle2\">Традиційне навчання</span></td><td><span class=\"detailTitle2\">ІНТІТА</span></td><td><span class=\"detailTitle2\">Переваги</span></td></tr>\n <tr><td>Необхідність відвідувати заняття у класі</td><td>Навчання у себе вдома</td><td>Комфортна домашня атмосфера, економія часу та коштів на поїздки</td></tr>\n <tr><td>Заняття за фіксованим графіком</td><td>Заняття за індивідуальним графіком</td><td>Можливість підлаштувати графік навчання під власні потреби</td></tr>\n<tr><td>Жорстко визначена навчальна програма, привязана до часових рамок (академічний рік)</td><td>Можливість обирати предмети та термін навчання </td><td>Навчання в комфортному темпі за власним графіком, не обмежене часом</td></tr>\n<tr><td>Лекції та семінари, як основа навчального процесу (вивчення теорії)</td><td>Практичні заняття з першого дня навчання, створення реальних працюючих проектів</td><td>Отримання реального робочого досвіду вже протягом навчання, портфоліо готових робіт на момент закінчення навчання</td></tr>\n<tr><td>Оцінки за якість засвоєних знань за певний час </td><td>Оцінок немає, лише “знання засвоєні” чи “потрібно навчатися далі”</td><td>Навчання до позитивного результату: до повного засвоєння необхідних знань</td></tr>\n<tr><td>Диплом про вищу освіту видається через 5-6 років за умови засвоєння великої кількості непрофільних знань (мова, історія, філософія тощо)</td><td>Лише практичні знання, які будуть потрібні тобі у роботі та житті: програмування, англійська мова, побудова карєри на ринку інформаційних технологій, основи життєвого успіху.</td><td>Весь час навчання витрачається на отримання корисних практичних знань, тому термін навчання скорочуються, а кількість практичних засвоєних знань більша, ніж у традиційних закладах.</td></tr>\n </table> \'</p>');
INSERT INTO `aboutus` VALUES ('3', 'UA', '/css/images/line2.png', 'image3.png', 'Питання, які нам часто ставлять', '<p>Три кити Академії Програмування ІНТІТА Самостійний графік навчання. Лише 100% необхідні знання. Засвоєння 100% знань!</p>', '/index.php?r=site/aboutdetail&id=3', '/css/images/', '', '', '', '', '<p><span class=\"detailTitle3\">Скільки триває навчання, як швидко я зможу почати заробляти?\n</span><ul><li class=\"listAbout\">навчання не має фіксованого терміну і залежить виключно від темпу, який обереш ти.\n</li></ul>\n<span class=\"detailTitle3\">Чи отримаю я державний диплом про освіту?\n</span><ul><li class=\"listAbout\">ми не видаємо дипломів державного зразка, наша ціль - забезпечити передумови для гарантованого працевлаштування слухачів.\n</li></ul>\n<span class=\"detailTitle3\">Чому навчання коштує так дешево (дорого) у порівнянні з вишем (курсами) Х?\n</span><ul><li class=\"listAbout\">вартість навчання економічно обгрунтована і буде відроблена менше, ніж за рік роботи на позиції програміста-початківця.\n</li></ul>\n<span class=\"detailTitle3\">У мене зараз немає необхідних коштів, чи можу я навчатися у кредит?\n</span><ul><li class=\"listAbout\">так, ми пропонуємо гнучкий підхід в оплаті за навчання, детальніше можна вияснити написавши нам листа на електронну пошту. Контакти.\n</li></ul>\n<span class=\"detailTitle3\">Я чув від знайомого, що він освоїв програмування самотужки, це можливо?\n</span><ul><li class=\"listAbout\">так, на ринку багато “програмістів-самоучок”, але вони, як правило, пройшли довгий шлях для того, щоб навчитись програмуванню, ми - один із ефективних варіантів стати кваліфікованим програмістом за короткий час.\n</li></ul>\n<span class=\"detailTitle3\">У мене у школі було погано з математикою / я давно не займався математикою. Це може завадити мені навчитися програмуванню?\n</span><ul><li class=\"listAbout\">математика допомагає краще розвинути логічне мислення і знання елементарної математики необхідні обов’язково, проте, не математичне, а логічне мислення визначає наскільки гарний програміст і тільки невеликий відсоток гарних математиків стають професійними програмістами.\n</li></ul>\n<span class=\"detailTitle3\">Мені 34 роки, чи можу я зараз розпочати навчання?\n</span><ul><li class=\"listAbout\">верхньої вікової межі для того, щоб вивчати програмування - немає, люди і старшого віку розпочинали і досягали гарних результатів. Життєвий досвід людям старшого віку дозволяє ефективніше побудувати навчальний процес і швидше кар’єрно зростати.\n</li></ul>\n<span class=\"detailTitle3\">Я чув думку, що професія програміста технічна, а я - людина творча. Чи підійде програмування мені?\n</span><ul><li class=\"listAbout\">програмування - це і є творчість, варто спробувати, щоб зрозуміти чи це твоє покликання.\n</li></ul>\'</p>');

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel` (
  `order` int(11) NOT NULL,
  `pictureURL` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imagesPath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carousel
-- ----------------------------
INSERT INTO `carousel` VALUES ('1', '1.jpg', '<p>Слайдер фото 1</p>', '/css/images/slider_img/');
INSERT INTO `carousel` VALUES ('2', '2.jpg', '<p>Слайдер фото 2</p>', '/css/images/slider_img/');
INSERT INTO `carousel` VALUES ('3', '3.jpg', '<p>Слайдер фото 3</p>', '/css/images/slider_img/');
INSERT INTO `carousel` VALUES ('4', '4.jpg', '<p>Слайдер фото 4</p>', '/css/images/slider_img/');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(45) NOT NULL,
  `course_duration_hours` int(11) NOT NULL,
  PRIMARY KEY (`course_ID`),
  UNIQUE KEY `course_name` (`course_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', 'Course 1. OOP', '40');
INSERT INTO `course` VALUES ('2', 'Course 2. Programming', '120');
INSERT INTO `course` VALUES ('3', 'Course 3. Math', '30');
INSERT INTO `course` VALUES ('4', 'Course 4. Discrete math', '40');
INSERT INTO `course` VALUES ('5', 'Course 5', '36');
INSERT INTO `course` VALUES ('6', 'Course 6', '130');
INSERT INTO `course` VALUES ('7', 'Course 7', '64');
INSERT INTO `course` VALUES ('8', 'Course 8', '54');
INSERT INTO `course` VALUES ('9', 'Course 9', '90');

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `footerID` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('EN','UA','RU') NOT NULL DEFAULT 'UA',
  `imageSotial` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imageUp` varchar(255) NOT NULL,
  PRIMARY KEY (`footerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES ('1', 'RU', '/css/images/sotial.gif', 'телефон: +38 0432 52', 'тел. моб. +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');
INSERT INTO `footer` VALUES ('2', 'EN', '/css/images/sotial.gif', 'tel.: +38 0432 52', 'mobile +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');
INSERT INTO `footer` VALUES ('3', 'UA', '/css/images/sotial.gif', 'телефон: +38 0432 52', 'тел. моб. +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');

-- ----------------------------
-- Table structure for header
-- ----------------------------
DROP TABLE IF EXISTS `header`;
CREATE TABLE `header` (
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
  PRIMARY KEY (`headerID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of header
-- ----------------------------
INSERT INTO `header` VALUES ('0', 'UA', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курси', '/index.php?r=courses', 'Викладачі', '/index.php?r=teachers', 'Форум', 'http://www.google.com', 'Про нас', '/index.php?r=site/aboutdetail', 'Вхід');
INSERT INTO `header` VALUES ('1', 'RU', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курсы', '/index.php?r=courses', 'Преподаватели', '/index.php?r=teachers', 'Форум', 'http://www.google.com', 'О нас', '/index.php?r=site/aboutdetail', 'Вход');

-- ----------------------------
-- Table structure for hometasks
-- ----------------------------
DROP TABLE IF EXISTS `hometasks`;
CREATE TABLE `hometasks` (
  `hometask_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `hometask_name` varchar(45) NOT NULL,
  `hometask_description` varchar(45) NOT NULL,
  `hometask_url` varchar(255) NOT NULL,
  PRIMARY KEY (`hometask_ID`),
  UNIQUE KEY `fkmodule_ID` (`fkmodule_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hometasks
-- ----------------------------
INSERT INTO `hometasks` VALUES ('1', '23', '34', 'Hometask 1', 'Description 1', 'URL 1');
INSERT INTO `hometasks` VALUES ('2', '2', '2', 'Hometask 2', 'Descipion 2', 'URL 2');

-- ----------------------------
-- Table structure for language
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` enum('EN','UA','RU') NOT NULL,
  `language` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('0', 'UA', 'українська', 'Україна');
INSERT INTO `language` VALUES ('1', 'RU', 'русский', 'Россия');
INSERT INTO `language` VALUES ('2', 'EN', 'english', 'Great Britain');

-- ----------------------------
-- Table structure for lecture
-- ----------------------------
DROP TABLE IF EXISTS `lecture`;
CREATE TABLE `lecture` (
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

-- ----------------------------
-- Records of lecture
-- ----------------------------
INSERT INTO `lecture` VALUES ('1', '/css/images/lectureImage.png', '1', '0', 'Goal of classes 1', '10', '100', 'css/images/timeIco.p', '0', '', 'css/images/ratIco0.png', 'css/images/ratIco1.png', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for mainpage
-- ----------------------------
DROP TABLE IF EXISTS `mainpage`;
CREATE TABLE `mainpage` (
  `mainpageID` int(11) NOT NULL,
  `language` enum('EN','UA','RU') NOT NULL,
  `title` varchar(100) NOT NULL,
  `sliderHeader` varchar(50) NOT NULL,
  `sliderText` varchar(255) NOT NULL,
  `sliderTextureURL` varchar(255) NOT NULL,
  `sliderLineURL` varchar(255) NOT NULL,
  `sliderButtonText` varchar(20) NOT NULL,
  `header1` varchar(50) NOT NULL,
  `subLineImage` varchar(255) NOT NULL,
  `subheader1` varchar(100) NOT NULL,
  `arrayBlocks` varchar(10) NOT NULL,
  `header2` varchar(50) NOT NULL,
  `subheader2` varchar(100) NOT NULL,
  `arraySteps` varchar(10) NOT NULL,
  `stepSize` varchar(10) NOT NULL,
  `linkName` varchar(20) NOT NULL,
  `hexagon` varchar(255) NOT NULL,
  `formHeader1` varchar(50) NOT NULL,
  `formHeader2` varchar(50) NOT NULL,
  `regText` varchar(50) NOT NULL,
  `buttonStart` varchar(50) NOT NULL,
  `socialText` varchar(50) NOT NULL,
  `imageNetwork` varchar(255) NOT NULL,
  `formFon` varchar(255) NOT NULL,
  PRIMARY KEY (`mainpageID`),
  KEY `FK_mainpage_block` (`arrayBlocks`),
  KEY `FK_mainpage_step` (`arraySteps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mainpage
-- ----------------------------
INSERT INTO `mainpage` VALUES ('0', 'UA', 'IntITA - Академія програмування', 'ПРОГРАМУЙ  МАЙБУТНЄ', 'Програміст — сама древня сучасна професія на планеті Земля!', '/css/images/slider_img/texture.png', '/css/images/slider_img/line.png', 'ПОЧАТИ', 'Про нас', '/css/images/line1.png', 'дещо, що Вам потрібно знати про наші курси', '1', 'Як проводиться навчання?', 'далі пояснення як ви будете вчитися крок за кроком', '1', '958px', 'детальніше ...', '/css/images/hexagon.png', 'Готові розпочати?', 'Введіть дані в форму нижче', 'розширена реєстрація', 'Розпочати', 'Ви можете також зареєструватися через соцмережі:', '/css/images/networking.png', '/css/images/formFon.png');
INSERT INTO `mainpage` VALUES ('1', 'RU', 'IntITA - Академия программирования', 'ПРОГРАММИРУЙ БУДУЩЕЕ', 'Программист - наиболее древняя профессия на планете Земля!', '/css/images/slider_img/texture.png', '/css/images/slider_img/line.png', 'НАЧАТЬ', ' О нас', '/css/images/line1.png', 'кое-что, что Вам нужно знать о наших курсах', '1', 'Как организовано обучение?', 'далее пошаговое обьяснение, как Вы будете учиться', '1', '958px', 'детальнее ...', '/css/images/hexagon.png', 'Готовы начать?', 'Введите данные в форму ниже', 'расширенная регистрация', 'Начать', 'Вы также можете зарегистрироваться через соцсети:', '/css/images/networking.png', '/css/images/formFon.png');

-- ----------------------------
-- Table structure for modules
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `module_ID` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(45) NOT NULL,
  `module_duration_hours` int(11) NOT NULL,
  `module_duration_days` int(11) NOT NULL,
  PRIMARY KEY (`module_ID`),
  UNIQUE KEY `module_ID` (`module_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modules
-- ----------------------------
INSERT INTO `modules` VALUES ('1', 'Module 1', '40', '20');
INSERT INTO `modules` VALUES ('2', 'Module 2', '30', '15');
INSERT INTO `modules` VALUES ('3', 'Module 3', '60', '30');

-- ----------------------------
-- Table structure for regextended
-- ----------------------------
DROP TABLE IF EXISTS `regextended`;
CREATE TABLE `regextended` (
  `regID` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('UA','EN','RU') NOT NULL,
  `mainLink` varchar(30) NOT NULL,
  `regLink` varchar(30) NOT NULL,
  `header` varchar(50) NOT NULL,
  `headerFoto` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repeatPassword` varchar(50) NOT NULL,
  `submitButtonText` varchar(50) NOT NULL,
  `chooseFileButton` varchar(50) NOT NULL,
  `fileNotChoose` varchar(50) NOT NULL,
  PRIMARY KEY (`regID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of regextended
-- ----------------------------
INSERT INTO `regextended` VALUES ('1', 'UA', 'Головна', 'Реєстрація', 'Персональні дані', 'Завантажити фото профілю', 'Ім\'я', 'По-батькові', 'Прізвище', 'Дата народження', 'Освіта', 'Телефон', 'Email', 'Пароль', 'Повтот пароля', 'Відправити />', 'Виберіть файл', 'Файл не вибрано ...');

-- ----------------------------
-- Table structure for step
-- ----------------------------
DROP TABLE IF EXISTS `step`;
CREATE TABLE `step` (
  `stepID` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('UA','RU','EN') NOT NULL,
  `stepName` varchar(30) NOT NULL DEFAULT '0',
  `stepNumber` int(11) NOT NULL,
  `stepTitle` varchar(50) NOT NULL,
  `stepImagePath` varchar(255) NOT NULL DEFAULT '0',
  `stepImage` varchar(50) NOT NULL,
  `stepText` text NOT NULL,
  PRIMARY KEY (`stepID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of step
-- ----------------------------
INSERT INTO `step` VALUES ('1', 'UA', 'крок', '1', 'Реєстрація на сайті', '/css/images/', 'step1.jpg', 'Щоб отримати доступ до переліку курсів, модулів і занять та пройти безкоштовні модулі і заняття зареєструйся на сайті. Реєстрація дозволить тобі оцінити якість та зручність нашого продукт, який стане для тебе надійним партнером і порадником в професійній самореалізації.');
INSERT INTO `step` VALUES ('2', 'UA', 'крок', '2', 'Вибір курсу чи модуля', '/css/images/', 'step2.jpg', 'Щоб стати спеціалістом певного напрямку та рівня (отримати професійну спеціалізацію) вибери для проходження відповідний курс. Якщо Тебе цікавить виключно поглиблення знань в певному напрямку ІТ, то вибери відповідний модуль для проходження.');
INSERT INTO `step` VALUES ('3', 'UA', 'крок', '3', 'Проплата', '/css/images/', 'step3.jpg', 'Щоб розпочати проходження курсу чи модуля вибери схему оплати (вся сума за курс, помісячно, потриместрово тощо) та здійсни оплату зручним Тобі способом (схему оплати курсу чи модуля можна змінювати, також можлива помісячна оплата в кредит).');
INSERT INTO `step` VALUES ('4', 'UA', 'крок', '4', 'Освоєння матеріалу', '/css/images/', 'step4.jpg', 'Вивчення матеріалу можливе шляхом читання тексту чи/і перегляду відео для кожного заняття. Протягом освоєння матеріалу заняття виконуй Проміжні тестові завдання. По завершенню кожного заняття виконуй Підсумкове тестове завдання. Кожен модуль завершується Індивідуальним проектом чи Екзаменом. Можна отримати індивідуальну консультацію викладача чи обговорити питання на форумі.');
INSERT INTO `step` VALUES ('5', 'UA', 'крок', '5', 'Завершення курсу', '/css/images/', 'step5.jpg', 'Підсумком курсу є Командний дипломний проект, який виконується разом з іншими студентами (склад команди формуєш самостійно чи рекомендує керівник, який затверджує тему і технічне завдання проекту). Здача проекту передбачає передзахист та захист в он-лайн режимі із представленням технічної документації. Після захисту видається диплом та рекомендація для працевлаштування.');

-- ----------------------------
-- Table structure for studentprofile
-- ----------------------------
DROP TABLE IF EXISTS `studentprofile`;
CREATE TABLE `studentprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `secondName` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  `education` varchar(255) DEFAULT NULL,
  `educform` decimal(60,0) DEFAULT NULL,
  `interests` text,
  `aboutUs` text,
  `aboutMy` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentprofile
-- ----------------------------
INSERT INTO `studentprofile` VALUES ('1', 'Вова', 'Джа', 'Марля', 'Wizlight', '21.03.1988', 'Wizlightdragon@gmail.com', '', '911', 'Ямайка', 'ВДПУ', '1', 'Ковбаска, колобки, раста', 'Інтернет', 'Володію албанською. Люблю м\'ясо та до м\'яса. Розвожу королів. ', '/css/images/1id.jpg', null);

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
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

-- ----------------------------
-- Records of students
-- ----------------------------

-- ----------------------------
-- Table structure for studentsaccess
-- ----------------------------
DROP TABLE IF EXISTS `studentsaccess`;
CREATE TABLE `studentsaccess` (
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
  CONSTRAINT `FK_courseaccess_students` FOREIGN KEY (`studentID`) REFERENCES `students` (`student_id`),
  CONSTRAINT `FK_studentsaccess_course` FOREIGN KEY (`courseID`) REFERENCES `course` (`course_ID`),
  CONSTRAINT `FK_studentsaccess_lectures` FOREIGN KEY (`lectureID`) REFERENCES `lecture` (`lectureID`),
  CONSTRAINT `FK_studentsaccess_modules` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`module_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentsaccess
-- ----------------------------

-- ----------------------------
-- Table structure for teachers
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `teacherID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(35) NOT NULL,
  `middleName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `fotoURL` varchar(100) NOT NULL,
  `coursesArray` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `dateOfBirth` int(11) NOT NULL DEFAULT '0',
  `subjects` varchar(50) NOT NULL DEFAULT '0',
  `jobTitle` varchar(50) NOT NULL DEFAULT '0',
  `education` varchar(100) NOT NULL DEFAULT '0',
  `degree` varchar(50) NOT NULL DEFAULT '0',
  `articles` text NOT NULL,
  `otherTeacherDetailes` text NOT NULL,
  PRIMARY KEY (`teacherID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teachers
-- ----------------------------

-- ----------------------------
-- Table structure for teacher_temp
-- ----------------------------
DROP TABLE IF EXISTS `teacher_temp`;
CREATE TABLE `teacher_temp` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `foto_url` varchar(100) NOT NULL,
  `subjects` varchar(100) NOT NULL DEFAULT '0',
  `profile_text` text NOT NULL,
  `readMoreLink` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher_temp
-- ----------------------------
INSERT INTO `teacher_temp` VALUES ('1', 'Олександра', 'Василівна', 'Сіра', '/css/images/teacher1.jpg', 'кройка и шитье сроков; програмування самоубийств', '<p>Профессиональный преподаватель бухгалтерского и налогового учета Национальноготранспортного университета кафедры финансов, учета и аудита со стажем преподавательской работы более 25 лет. Закончила аспирантуру, автор 36 научных работ в области учета и аудита, в т.ч. уникальной обучающей методики написания бухгалтерских проводок: <span>\"Как украсть и не сесть\" </span> и <span>\"Как украсть и посадить другого\" </span>.</p><p>Главный бухгалтер акционерного предприятия, специализирующегося на:<ul><li>оказании полезных услуг горизонтального характера;</li><li>торговле, внешнеэкономической и внутреннеэкономической;</li><li>позитивное обучение швейного мастерства;</li></ul></p>', '/index.php?r=teacherProfile');
INSERT INTO `teacher_temp` VALUES ('2', 'Константин', 'Константинович', 'Константинопольский', '/css/images/teacher2.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherProfile');
INSERT INTO `teacher_temp` VALUES ('3', 'Любовь', 'Анатольевна', 'Ктоятакая-Замухриншская', '/css/images/teacher3.jpg', 'Бухгалтер с «О» и до первой отсидки; Программирование своего позитивного прошлого', '<p>Практикующий главный бухгалтер. Учредитель ПП <span>«Логика тут безсильна»</span>;</p>\r\n<p>Образование высшее - ДонГУ (1987г.)</p>\r\n<p>Опыт работы 27 лет, в т. ч. преподавания - 9 лет.</p>\r\n<ul><li>специалист по позитивной энергетике;</li><li>эксперт по эффективному ремонту баянов;</li><li>мастер психотерапии для сложных бабушек и дедушек;</li></ul>', '/index.php?r=teacherProfile');
INSERT INTO `teacher_temp` VALUES ('4', 'Василий', 'Васильевич', 'Меняетпроффесию', '/css/images/teacher4.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherProfile');
INSERT INTO `teacher_temp` VALUES ('5', 'Ия', 'Тожевна', 'Воваяготова', '/css/images/teacher5.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherProfile');
INSERT INTO `teacher_temp` VALUES ('6', 'Петросян', 'Петросянович', 'Забугорный', '/css/images/teacher6.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherProfile');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `post` varchar(64) DEFAULT NULL,
  `pic` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'Кузнецов  Андрей  Сергеевич', 'слесарь', '541dff9af18fe.jpg');
INSERT INTO `team` VALUES ('2', 'Квентин', 'сантехник', '541dffd7e4f9f.jpg');
INSERT INTO `team` VALUES ('3', 'Арни', 'электрик', '541e015b628be.jpg');
INSERT INTO `team` VALUES ('4', 'Аврил', 'пост', '541e01d395797.jpg');
INSERT INTO `team` VALUES ('5', 'Бриттани Мерфи', 'пост', '541e01ecd43b2.jpg');

-- ----------------------------
-- Table structure for tests
-- ----------------------------
DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `test_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `test_title` varchar(45) NOT NULL,
  `test_description` varchar(45) NOT NULL,
  `test_url` varchar(45) NOT NULL,
  PRIMARY KEY (`test_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tests
-- ----------------------------
INSERT INTO `tests` VALUES ('1', '2', '2', 'Test 2', 'Description 2', 'URL 2');
INSERT INTO `tests` VALUES ('2', '3', '3', 'Test 3', 'Description 3', 'URL 3');

-- ----------------------------
-- Table structure for theoreticalsmaterials
-- ----------------------------
DROP TABLE IF EXISTS `theoreticalsmaterials`;
CREATE TABLE `theoreticalsmaterials` (
  `tm_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `TM_name` varchar(45) NOT NULL,
  `TM_description` varchar(45) NOT NULL,
  `TM_url` varchar(255) NOT NULL,
  PRIMARY KEY (`tm_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of theoreticalsmaterials
-- ----------------------------
INSERT INTO `theoreticalsmaterials` VALUES ('1', '1', '1', 'TM 1', 'Description 1', 'URL 1');
INSERT INTO `theoreticalsmaterials` VALUES ('2', '2', '2', 'TM 2', 'Description 2', 'URL 2');




-- Dumping structure for table int_ita_db.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(35) NOT NULL,
  `userPassword` varchar(40) NOT NULL,
  `userHash` varchar(20) DEFAULT NULL,
  `userStatus` tinyint(4) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `user_email` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table int_ita_db.user: ~4 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userID`, `userEmail`, `userPassword`, `userHash`, `userStatus`, `username`, `role`) VALUES
	(1, 'mail1@mail.com', 'qwerty', '67896', 0, 'user', 0),
	(2, 'email', 'password', '098877', 0, 'user', 0),
	(4, 'email1', 'password1', '232213', 1, 'user', 0),
	(5, 'emaildd', 'passworfg', '232213', 0, 'user', 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;



-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `video_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `video_name` varchar(45) NOT NULL,
  `video_description` varchar(45) NOT NULL,
  `video_url` varchar(45) NOT NULL,
  `video_durationin_seconds` int(11) NOT NULL,
  PRIMARY KEY (`video_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('1', '1', '1', 'Video 1', 'Description 1', 'URL 1', '344');
