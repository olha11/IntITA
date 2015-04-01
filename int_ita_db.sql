-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 01 2015 г., 14:14
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `int_ita_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aa_access`
--

CREATE TABLE IF NOT EXISTS `aa_access` (
  `user_id` smallint(5) unsigned NOT NULL,
  `interface_id` smallint(5) unsigned NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `add` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `aa_authorizations`
--

CREATE TABLE IF NOT EXISTS `aa_authorizations` (
`id` int(10) unsigned NOT NULL,
  `user_id` smallint(5) unsigned NOT NULL,
  `when_enter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `aa_authorizations`
--

INSERT INTO `aa_authorizations` (`id`, `user_id`, `when_enter`, `ip`) VALUES
(1, 2, '2015-03-02 13:33:25', '::1'),
(2, 2, '2015-03-02 13:33:25', '::1'),
(3, 2, '2015-03-02 13:41:58', '::1'),
(4, 2, '2015-03-02 13:41:59', '::1'),
(5, 3, '2015-03-02 13:45:10', '::1'),
(6, 3, '2015-03-02 13:45:10', '::1'),
(7, 2, '2015-03-03 13:04:10', '::1'),
(8, 2, '2015-03-03 13:04:10', '::1'),
(9, 2, '2015-03-03 13:41:31', '::1'),
(10, 2, '2015-03-03 13:41:32', '::1'),
(11, 2, '2015-03-03 15:26:15', '::1'),
(12, 2, '2015-03-03 15:26:15', '::1'),
(13, 2, '2015-03-04 10:54:56', '::1'),
(14, 2, '2015-03-04 10:54:56', '::1'),
(15, 2, '2015-03-05 12:12:11', '::1'),
(16, 2, '2015-03-05 12:12:12', '::1'),
(17, 2, '2015-03-06 11:21:13', '::1'),
(18, 2, '2015-03-06 11:21:13', '::1'),
(19, 2, '2015-03-06 11:33:29', '::1'),
(20, 2, '2015-03-06 11:33:30', '::1'),
(21, 2, '2015-03-06 23:19:06', '::1'),
(22, 2, '2015-03-06 23:19:07', '::1'),
(23, 2, '2015-03-07 08:31:26', '::1'),
(24, 2, '2015-03-07 08:31:27', '::1'),
(25, 2, '2015-03-10 12:40:09', '::1'),
(26, 2, '2015-03-10 12:40:09', '::1'),
(27, 2, '2015-03-12 15:10:57', '::1'),
(28, 2, '2015-03-12 15:10:57', '::1'),
(29, 2, '2015-03-12 16:59:14', '::1'),
(30, 2, '2015-03-12 16:59:14', '::1'),
(31, 2, '2015-03-13 11:24:19', '::1'),
(32, 2, '2015-03-13 11:24:21', '::1'),
(33, 2, '2015-03-13 14:25:37', '::1'),
(34, 2, '2015-03-13 14:25:37', '::1'),
(35, 2, '2015-03-19 13:45:40', '::1'),
(36, 2, '2015-03-19 13:45:41', '::1'),
(37, 2, '2015-03-20 13:14:18', '::1'),
(38, 2, '2015-03-20 13:14:18', '::1'),
(39, 2, '2015-03-23 12:29:03', '::1'),
(40, 2, '2015-03-23 12:29:04', '::1'),
(41, 2, '2015-03-24 17:48:01', '::1'),
(42, 2, '2015-03-24 17:48:01', '::1'),
(43, 2, '2015-03-26 14:11:11', '::1'),
(44, 2, '2015-03-26 14:11:12', '::1');

-- --------------------------------------------------------

--
-- Структура таблицы `aa_errors`
--

CREATE TABLE IF NOT EXISTS `aa_errors` (
`id` int(10) unsigned NOT NULL,
  `error_type` enum('exception','warning') DEFAULT NULL,
  `info` text,
  `authorization_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `aa_interfaces`
--

CREATE TABLE IF NOT EXISTS `aa_interfaces` (
`id` smallint(5) unsigned NOT NULL,
  `section_id` tinyint(3) unsigned DEFAULT NULL,
  `alias` varchar(60) NOT NULL,
  `level` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `title` varchar(80) NOT NULL,
  `info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `aa_logs`
--

CREATE TABLE IF NOT EXISTS `aa_logs` (
`id` bigint(20) unsigned NOT NULL,
  `interface_id` smallint(5) unsigned DEFAULT NULL,
  `authorization_id` int(10) unsigned DEFAULT NULL,
  `when_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `aa_sections`
--

CREATE TABLE IF NOT EXISTS `aa_sections` (
`id` tinyint(3) unsigned NOT NULL,
  `title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `aa_users`
--

CREATE TABLE IF NOT EXISTS `aa_users` (
`id` smallint(5) unsigned NOT NULL,
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
  `disabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `aa_users`
--

INSERT INTO `aa_users` (`id`, `level`, `login`, `password`, `interface_level`, `email`, `surname`, `firstname`, `middlename`, `regdate`, `info`, `salt`, `disabled`) VALUES
(2, 'root', 'root', '63a9f0ea7bb98050796b649e85481845', 1, 'root', 'root', 'root', 'root', '2015-03-02 13:33:13', NULL, NULL, 0),
(3, 'user', 'User', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'user', 'Surname', 'Name', 'Middle name', '2015-03-02 13:43:00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
`blockID` int(11) NOT NULL,
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
  `textLarge` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aboutus`
--

INSERT INTO `aboutus` (`blockID`, `language`, `line2Image`, `iconImage`, `titleText`, `textAbout`, `linkAddress`, `imagesPath`, `drop1Text`, `drop2Text`, `drop3Text`, `dropName`, `textLarge`) VALUES
(1, 'UA', '/css/images/line2.png', 'image1.png', 'Про що мрієш ти?', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн?</p>', '/index.php?r=site/aboutdetail&id=1', '/css/images/', '', '', '', '', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн? Забезпечене життя для себе та близьких, коли не доводиться думати про гроші?\nА, може, це свобода жити своїм життям? Самостійно керувати власним часом з можливістю працювати за зручним графіком без необхідності щодня їздити на роботу, але при цьому мати стабільно високий дохід?\n	Можливо ти хочеш заробляти, займаючись улюбленою справою і отримувати задоволення від сучасної професії?\nПро що б ти не мріяв, для здійснення більшості мрій потрібні гроші. Сьогодні середня зарплата в Україні є найнижчою в Європі: близько 3,5 тис грн у місяць. Навіть якщо брати сферу бізнесу, зарплати більшості робітників не перевищують 5-8 тис грн. \nЯк щодо 40 - 60 тис грн в місяць з можливістю працювати за гнучким графіком та дистанційно? Ти думаєш, що в нашій країні такі умови лише у керівників та власників бізнесу? У нас хороша новина: вже через рік-два-три так зможеш заробляти і ти.</p>\n\n<p><span class="detailTitle2">Професія майбутнього</span>\n Сьогодні у тебе є реальна можливість поєднати хороший заробіток, гнучкий графік роботи та зручність дистанційної роботи. І це не “заработок в интернете”, про який кричить банерна реклама на багатьох сайтах. Ми віримо у те, що високого стабільного доходу можна досягти лише за допомогою власних зусиль.\nМи живемо в епоху, коли головним двигуном розвитку світової економіки є інформаційні технології (ІТ). Вони дозволяють досягти нових проривних результатів у традиційних галузях: виробництві та послугах. Саме інформаційні технології повністю змінили і продовжують трансформувати індустрії звязку, розваг (книги, музика, фільми), банківських послуг, а також такі традиційні бізнеси, як послуги таксі (Uber), готелів (Airbnb), навчання (Coursera). \nГерої інформаційної епохи - це спеціалісти з інформаційних технологій. Вони знаходяться на передовій змін, вони придумали та продовжують розвивати Windows, iOS, Android, а також мільйони додатків до них, вони створюють соціальні мережі, сайти та бази даних. \nГарна новина для тебе: сьогодні таких спеціалістів не вистачає. Інформаційні технології розвиваються дуже швидко і стають потрібними усюди, тому людей не вистачає, існуючі навчальні заклади просто не встигають готувати потрібну кількість. Нестача спеціалістів означає, що зарплати на ринку стабільно зростають, і сягнули небачених для України значень: в середньому спеціалісти з інформаційних технологій сьогодні отримують 3-5 тис доларів у місяць, і при цьому роботодавці активно полюють на професіоналів. Секрет таких високих зарплат не лише у дефіциті кадрів, а й у тому, що для ІТ-галузі кордони - не проблема. Ти можеш працювати вдома зі своєї квартири в Україні над замовленням клієнта зі США чи Німеччини і отримувати винагороду у доларах чи євро з рівнем оплати, не набагато нижчим від американських чи європейських стандартів.  \nМи запрошуємо тебе приєднатися до світової інформаційної еліти та за короткий час стати професіоналом у сфері інформаційних технологій, щоб отримувати стабільно високий дохід та працювати в зручних умовах за гнучким графіком. </p>\n\n<p><span class="detailTitle2">Що очікується від тебе</span><br/>\nПрограмування - це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля. Ризикнемо сказати, що крім часу та зусиль (та, зрозуміло, наявності простенького компютера) не потрібно більше ні-чо-го. Не потрібно бути сильним у математиці: навіть якщо у школі ти не любив математику, а твої оцінки не піднимались вище середнього рівня, ти зможеш стати чудовим програмістом. Не потрібно знати, як влаштований компютер чи бути досвіченим користувачем будь-яких програм. Достатньо часу на навчання та бажання займатися. Гарні знання з математики, логіки, комп’ютера можуть пришвидшити темп навчання, але й без них кожен зможе досягти високого рівня професіоналізму у програмуванні завдяки іноваційному підходу до навчання Академії Програмування ІНТІТА.</p>'),
(2, 'UA', '/css/images/line2.png', 'image2.png', 'Навчання майбутнього', '<p>Програмування – це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля.</p>', '/index.php?r=site/aboutdetail&id=2', '/css/images/', '', '', '', '', '<p>Коли мова йде про навчальний заклад, можемо побитися об заклад, що до думки тобі приходять велика будівля з десятками навчальних приміщень, лекційна аудиторія, парти, записники, конспекти, викладачі, лекції, семінари. Така система освіти сформувалася ще у Стародавній Греції, і за кілька тисяч років майже не змінилася. Але зараз світ стоїть на порозі великої революції в освіті, яка назавжди змінить те, як ми навчаємося. Сьогодні технології зробили доступним те, що раніше могли дозволити собі лише одиниці, наймаючи персональних вчителів та репетиторів: персоналізоване навчання.\n<span class="detailTitle2">“Три кити” Академії ІНТІТА </span></p>\n\n<p><span class="detailTitle3">Кит перший. Гнучкість та зручність. </span></p>\n\n<p>Ти можеш самостійно будувати графік навчання, виходячи з власних потреб та цілей. Якщо ти хочеш закінчити навчання та почати працювати вже через рік, обирай інтенсивне навчання та займайся 6-8 годин в день. Якщо ти хочеш освоїти програмування поступово, не жертвуючи іншими важливими для тебе речами, ти можеш займатися ті ж 6-8 годин, але у тиждень. \nНе потрібно відвідувати навчальний заклад, Академія з тобою всюди. Навіть якщо ти у місці, де немає звязку та інтернету, ти можеш переглядати лекції в офлайн-режимі, а практичну частину зробити пізніше, коли зявиться доступ.  \n<span class="detailTitle3">Кит другий. Орієнтація на ринок. </span></p>\n\n<p>Ми даємо тобі лише 100% необхідні знання. Ми поважаємо гуманітарні дисципліни та фундаментальні точні науки, які входять до  складу обовязкових для вивчення у вишах, але переконані, що вони не є обовязковими для того, щоб стати професіоналом у сфері інформаційних технологій. Ми вважаємо, що кожен має вирішувати індивідуально, що вивчати та чим цікавитись за межами своєї професії. У той же час у програмах вишів відсутні критичні для професійного успіху дисципліни, або ж вони викладаються недостатньо професійно (англійська мова для ІТ-спеціалістів, проектний менеджмент тощо). Інформаційні технології - це дисципліна, яка змінюється кожного дня, програми вишів просто не встигають адаптуватися до такої швидкості змін. ІНТІТА слідкує за змінами щодня, і адаптує як навчальну програму, так і зміст окремих предметів за необхідностю миттєво. Ми завжди у пошуку нового матеріалу, який можна передати студентам академії.  \nПорівнюючи звичайний технічний виш та академію ІНТІТА, ти можеш думати про сімейний універсал та болід Формула-1. Перший підходить для широкого кола завдань, але він значно програє позашляховикам у прохідності, міні-венам у місткості, лімузинам - у комфорті, спротивним автомобілям - у швидкості та керуванні. Другий сконструйовано лише заради максимальної швидкості та маневреності, жертвуючи усім іншим. І в результаті ми не зробимо з тебе універсально освічену людину, яка розбирається потрохи у всьому, ми зробимо тебе професіоналом світового класу в області програмування.  \n <span class="detailTitle3">Кит третій. Результативність. </span></p>\n\n<p>На відміну від традиційних закладів, ми не навчаємо задля оцінок. Ми працюємо індивідуально з кожним студентом, щоб досягти 100% засвоєння необхідних знань (а ми даємо лише необхідні знання). Ми не обмежуємо тебе у часі, теоретично ти можеш навчатися як завгодно довго. Ми беремо на себе зобовязання навчити тебе програмуванню, незважаючи на те, які знання у тебе вже є. Єдиними передумовами для початку занять є бажання, час на навчання, наявність хоча б простенького компютера та вміння читати та писати. \nЗнання, які ти отримаєш, максимально практичні та сучасні. Починаючи з першого заняття, ти робитимеш завдання з реального світу програмування. Ближче до закінчення навчання ти будеш приймати участь у створенні реальних програмних продуктів для ринку.\nМи гарантуємо тобі 100% отримання пропозиції про працевлаштування протягом 4-6-ти місяців після успішного закінчення навчання.\n <span class="detailTitle2">ІНТІТА: переваги наочно</span>\n \n <table id="detailTable">\n<tr><td><span class="detailTitle2">Традиційне навчання</span></td><td><span class="detailTitle2">ІНТІТА</span></td><td><span class="detailTitle2">Переваги</span></td></tr>\n <tr><td>Необхідність відвідувати заняття у класі</td><td>Навчання у себе вдома</td><td>Комфортна домашня атмосфера, економія часу та коштів на поїздки</td></tr>\n <tr><td>Заняття за фіксованим графіком</td><td>Заняття за індивідуальним графіком</td><td>Можливість підлаштувати графік навчання під власні потреби</td></tr>\n<tr><td>Жорстко визначена навчальна програма, привязана до часових рамок (академічний рік)</td><td>Можливість обирати предмети та термін навчання </td><td>Навчання в комфортному темпі за власним графіком, не обмежене часом</td></tr>\n<tr><td>Лекції та семінари, як основа навчального процесу (вивчення теорії)</td><td>Практичні заняття з першого дня навчання, створення реальних працюючих проектів</td><td>Отримання реального робочого досвіду вже протягом навчання, портфоліо готових робіт на момент закінчення навчання</td></tr>\n<tr><td>Оцінки за якість засвоєних знань за певний час </td><td>Оцінок немає, лише “знання засвоєні” чи “потрібно навчатися далі”</td><td>Навчання до позитивного результату: до повного засвоєння необхідних знань</td></tr>\n<tr><td>Диплом про вищу освіту видається через 5-6 років за умови засвоєння великої кількості непрофільних знань (мова, історія, філософія тощо)</td><td>Лише практичні знання, які будуть потрібні тобі у роботі та житті: програмування, англійська мова, побудова карєри на ринку інформаційних технологій, основи життєвого успіху.</td><td>Весь час навчання витрачається на отримання корисних практичних знань, тому термін навчання скорочуються, а кількість практичних засвоєних знань більша, ніж у традиційних закладах.</td></tr>\n </table> ''</p>'),
(3, 'UA', '/css/images/line2.png', 'image3.png', 'Питання та відгуки', '<p>Три кити Академії Програмування ІНТІТА Самостійний графік навчання. Лише 100% необхідні знання. Засвоєння 100% знань!</p>', '/index.php?r=site/aboutdetail&id=3', '/css/images/', '', '', '', '', '<p><span class="detailTitle3">Скільки триває навчання, як швидко я зможу почати заробляти?\n</span><ul><li class="listAbout">навчання не має фіксованого терміну і залежить виключно від темпу, який обереш ти.\n</li></ul>\n<span class="detailTitle3">Чи отримаю я державний диплом про освіту?\n</span><ul><li class="listAbout">ми не видаємо дипломів державного зразка, наша ціль - забезпечити передумови для гарантованого працевлаштування слухачів.\n</li></ul>\n<span class="detailTitle3">Чому навчання коштує так дешево (дорого) у порівнянні з вишем (курсами) Х?\n</span><ul><li class="listAbout">вартість навчання економічно обгрунтована і буде відроблена менше, ніж за рік роботи на позиції програміста-початківця.\n</li></ul>\n<span class="detailTitle3">У мене зараз немає необхідних коштів, чи можу я навчатися у кредит?\n</span><ul><li class="listAbout">так, ми пропонуємо гнучкий підхід в оплаті за навчання, детальніше можна вияснити написавши нам листа на електронну пошту. Контакти.\n</li></ul>\n<span class="detailTitle3">Я чув від знайомого, що він освоїв програмування самотужки, це можливо?\n</span><ul><li class="listAbout">так, на ринку багато “програмістів-самоучок”, але вони, як правило, пройшли довгий шлях для того, щоб навчитись програмуванню, ми - один із ефективних варіантів стати кваліфікованим програмістом за короткий час.\n</li></ul>\n<span class="detailTitle3">У мене у школі було погано з математикою / я давно не займався математикою. Це може завадити мені навчитися програмуванню?\n</span><ul><li class="listAbout">математика допомагає краще розвинути логічне мислення і знання елементарної математики необхідні обов’язково, проте, не математичне, а логічне мислення визначає наскільки гарний програміст і тільки невеликий відсоток гарних математиків стають професійними програмістами.\n</li></ul>\n<span class="detailTitle3">Мені 34 роки, чи можу я зараз розпочати навчання?\n</span><ul><li class="listAbout">верхньої вікової межі для того, щоб вивчати програмування - немає, люди і старшого віку розпочинали і досягали гарних результатів. Життєвий досвід людям старшого віку дозволяє ефективніше побудувати навчальний процес і швидше кар’єрно зростати.\n</li></ul>\n<span class="detailTitle3">Я чув думку, що професія програміста технічна, а я - людина творча. Чи підійде програмування мені?\n</span><ul><li class="listAbout">програмування - це і є творчість, варто спробувати, щоб зрозуміти чи це твоє покликання.\n</li></ul>''</p>'),
(4, 'RU', '/css/images/line2.png', 'image1.png', 'О чём ты мечтаешь?', '<p>Попробуем угадать: собственная квартира или даже дом? Красивая машина? Заграничные путешествия в экзотические страны?</p>', '/index.php?r=site/aboutdetail&id=1', '/css/images/', '', '', '', '', ''),
(5, 'RU', '/css/images/line2.png', 'image2.png', 'Обучение будущего', '<p>Программирование - это не так сложно, как ты думаешь. Безусловно, чтобы стать хорошим программистом, нужны время и усилия.</p>', '/index.php?r=site/aboutdetail&id=2', '/css/images/', '', '', '', '', ''),
(6, 'RU', '/css/images/line2.png', 'image3.png', 'Вопросы и отзывы', '<p>Три кита Академии Программирования ИНТИТА. Самостоятельный график обучения. Только 100% необходимые знания. 100 % усвоение знаний!</p>', '/index.php?r=site/aboutdetail&id=3', '/css/images/', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `order` int(11) NOT NULL,
  `pictureURL` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imagesPath` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`order`, `pictureURL`, `description`, `imagesPath`, `text`) VALUES
(1, '1.jpg', '<p>Слайдер фото 1</p>', '/css/images/slider_img/', 'Не упусти свій шанс змінити світ - отримай якісну та сучасну освіту і стань класним спеціалістом!'),
(2, '2.jpg', '<p>Слайдер фото 2</p>', '/css/images/slider_img/', 'Хочеш стати висококласним спеціалістом, приймай вірне рішення - вступай до ІТ Академії ІНТІТА!'),
(3, '3.jpg', '<p>Слайдер фото 3</p>', '/css/images/slider_img/', 'Один рік наполегливого і цікавого навчання - і ти станеш професійним програмістом. Навчатись важко - зате роботу знайти легко!'),
(4, '4.jpg', '<p>Слайдер фото 4</p>', '/css/images/slider_img/', 'Не втрачай свій шанс на гідну та цікаву працю – програмуй своє майбутнє вже сьогодні!');

-- --------------------------------------------------------

--
-- Структура таблицы `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`course_ID` int(11) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `language` varchar(6) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `course_duration_hours` int(11) NOT NULL,
  `modules_count` int(255) DEFAULT NULL,
  `course_price` decimal(10,0) DEFAULT NULL,
  `for_whom` text,
  `what_you_learn` text,
  `what_you_get` text,
  `course_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `course`
--

INSERT INTO `course` (`course_ID`, `alias`, `language`, `course_name`, `course_duration_hours`, `modules_count`, `course_price`, `for_whom`, `what_you_learn`, `what_you_get`, `course_img`) VALUES
(1, 'course1', 'ua', 'Програмування для чайників', 89, 7, '6548', 'хто відповідає за постановку завдань на розробку;для дизайнерів, які готові почати не просто малювати красиві картинки, а й навчитися тому, як створювати працюючі і зручні інтерфейси;для розробників, які хочуть самостійно створити або змінити свій проект;', 'Ви навчитеся писати чистий код;Користуватися системами контролю версій;Дізнаєтеся, з чого складається сучасний додаток;Для чого потрібен безперервна інтеграція (СІ) сервер;Чому потрібно тестувати свої програми і як це робити;', 'Відеозаписи та текстові матеріали всіх онлайн-занять;Спілкування з розумними одногрупниками;Сертифікат про закінчення навчання;Прилаштованість на робоче місце в силіконовій долині;', '/css/images/course1Image.png'),
(2, 'course2', 'ua', 'Course 2. Programming', 120, 0, '0', '', '', '', NULL),
(3, 'course3', 'ua', 'Course 3. Math', 30, 0, '0', '', '', '', NULL),
(4, 'course4', 'ua', 'Course 4. Discrete math', 40, 0, '0', '', '', '', NULL),
(5, 'course5', 'ua', 'Course 5', 36, 0, '0', '', '', '', NULL),
(6, 'course6', 'ua', 'Course 6', 130, 0, '0', '', '', '', NULL),
(7, 'course7', 'ua', 'Course 7', 64, 0, '0', '', '', '', NULL),
(8, 'course8', 'ua', 'Course 8', 54, 0, '0', '', '', '', NULL),
(9, 'course9', 'ua', 'Course 9', 90, 0, '0', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
`footerID` int(11) NOT NULL,
  `language` enum('EN','UA','RU') NOT NULL DEFAULT 'UA',
  `imageSotial` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imageUp` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`footerID`, `language`, `imageSotial`, `phone`, `mobile`, `email`, `imageUp`) VALUES
(1, 'RU', '/css/images/sotial.gif', 'телефон: +38 0432 52 82 67 ', 'тел. моб. +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png'),
(2, 'EN', '/css/images/sotial.gif', 'tel.: +38 0432 52 82 67', 'mobile +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png'),
(3, 'UA', '/css/images/sotial.gif', 'телефон: +38 0432 52 82 67', 'тел. моб. +38 067 432 20 10', 'e-mail: intita.hr@gmail.com', '/css/images/go_up.png');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`headerID` int(11) NOT NULL,
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
  `logoutButtonText` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`headerID`, `language`, `logoURL`, `smallLogoURL`, `menuItem1`, `item1Link`, `menuItem2`, `item2Link`, `menuItem3`, `item3Link`, `menuItem4`, `item4Link`, `enterButtonText`, `logoutButtonText`) VALUES
(0, 'UA', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курси', '/courses', 'Викладачі', '/teachers', 'Форум', 'http://www.google.com', 'Про нас', '/site/aboutdetail', 'Вхід', 'Вхід'),
(1, 'RU', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курсы', '/courses', 'Преподаватели', '/teachers', 'Форум', 'http://www.google.com', 'О нас', '/site/aboutdetail', 'Вход', 'Выход'),
(2, 'UA', '/css/images/Logo_big.png', '/css/images/Logo_small.png', 'Курси', '/courses', 'Викладачі', '/teachers', 'Форум', 'http://www.google.com', 'Про нас', '/site/aboutdetail', 'Вхід', 'Вхід');

-- --------------------------------------------------------

--
-- Структура таблицы `hometasks`
--

CREATE TABLE IF NOT EXISTS `hometasks` (
`hometask_ID` int(11) NOT NULL,
  `fkmodule_ID` int(11) NOT NULL,
  `fklecture_ID` int(11) NOT NULL,
  `hometask_name` varchar(45) NOT NULL,
  `hometask_description` varchar(45) NOT NULL,
  `hometask_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hometasks`
--

INSERT INTO `hometasks` (`hometask_ID`, `fkmodule_ID`, `fklecture_ID`, `hometask_name`, `hometask_description`, `hometask_url`) VALUES
(1, 23, 34, 'Hometask 1', 'Description 1', 'URL 1'),
(2, 2, 2, 'Hometask 2', 'Descipion 2', 'URL 2');

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--

CREATE TABLE IF NOT EXISTS `language` (
`id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `language` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`id`, `code`, `language`, `country`) VALUES
(1, 'RU', 'русский', 'Россия'),
(2, 'EN', 'english', 'Great Britain'),
(3, 'UA', 'українська', 'Україна');

-- --------------------------------------------------------

--
-- Структура таблицы `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
`lectureID` int(11) NOT NULL,
  `lectureImageMain` varchar(255) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `language` varchar(6) NOT NULL,
  `lectureModule` int(11) NOT NULL,
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
  `linkName` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lecture`
--

INSERT INTO `lecture` (`lectureID`, `lectureImageMain`, `alias`, `language`, `lectureModule`, `lectureNumber`, `lectureNameText`, `lectureTypeText`, `lectureTypeImage`, `lectureTimeText`, `lectureMaxNumber`, `lectureIconImage`, `lectureUnwatchedImage`, `lectureOverlookedImage`, `infoLectures`, `thisLectureInfo`, `preLectureInfo`, `postLessonInfo`, `teacherTitle`, `linkName`) VALUES
(1, '/css/images/lectureImage.png', 'types', 'ua', 1, 0, 'Goal of classes 1', '10', '100', 'css/images/timeIco.p', 0, '', 'css/images/ratIco0.png', 'css/images/ratIco1.png', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `mainpage`
--

CREATE TABLE IF NOT EXISTS `mainpage` (
  `id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sliderHeader` varchar(50) NOT NULL,
  `sliderText` varchar(255) NOT NULL,
  `category` varchar(32) NOT NULL,
  `message` varchar(50) NOT NULL,
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
  `formFon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mainpage`
--

INSERT INTO `mainpage` (`id`, `language`, `title`, `sliderHeader`, `sliderText`, `category`, `message`, `sliderTextureURL`, `sliderLineURL`, `sliderButtonText`, `header1`, `subLineImage`, `subheader1`, `arrayBlocks`, `header2`, `subheader2`, `arraySteps`, `stepSize`, `linkName`, `hexagon`, `formHeader1`, `formHeader2`, `regText`, `buttonStart`, `socialText`, `imageNetwork`, `formFon`) VALUES
(0, 'ua', 'INTITA', 'ПРОГРАМУЙ  МАЙБУТНЄ', 'Не упусти свій шанс змінити світ - отримай якісну та сучасну освіту і стань класним спеціалістом!', 'mainpage', 'PROGRAM FUTURE', '/css/images/slider_img/texture.png', '/css/images/slider_img/line.png', 'ПОЧАТИ', 'Про нас', '/css/images/line1.png', 'дещо, що Вам потрібно знати про наші курси', '1', 'Як проводиться навчання?', 'далі пояснення як ви будете вчитися крок за кроком', '1', '958px', 'детальніше ...', '/css/images/hexagon.png', 'Готові розпочати?', 'Введіть дані в форму нижче', 'розширена реєстрація', 'ПОЧАТИ', 'Ви можете також зареєструватися через соцмережі:', '/css/images/networking.png', '/css/images/formFon.png');

-- --------------------------------------------------------

--
-- Структура таблицы `mainpagetranslated`
--

CREATE TABLE IF NOT EXISTS `mainpagetranslated` (
`id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `header1` varchar(100) NOT NULL,
  `subheader1` varchar(255) NOT NULL,
  `translation` text NOT NULL,
  `header2` varchar(100) NOT NULL,
  `subheader2` varchar(255) NOT NULL,
  `sliderHeader` varchar(50) NOT NULL,
  `sliderText` varchar(255) NOT NULL,
  `sliderButtonText` varchar(20) NOT NULL,
  `linkName` varchar(20) NOT NULL,
  `formHeader1` varchar(50) NOT NULL,
  `formHeader2` varchar(50) NOT NULL,
  `regText` varchar(50) NOT NULL,
  `buttonStart` varchar(50) NOT NULL,
  `socialText` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mainpagetranslated`
--

INSERT INTO `mainpagetranslated` (`id`, `language`, `title`, `header1`, `subheader1`, `translation`, `header2`, `subheader2`, `sliderHeader`, `sliderText`, `sliderButtonText`, `linkName`, `formHeader1`, `formHeader2`, `regText`, `buttonStart`, `socialText`) VALUES
(0, 'ru', 'ИНТИТА', 'О нас', '', 'ПРОГРАММИРУЙ БУДУЩЕЕ', '', '', 'ПРОГРАММИРУЙ БУДУЩЕЕ', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `module`
--

CREATE TABLE IF NOT EXISTS `module` (
`module_ID` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `module_name` varchar(45) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `language` varchar(6) NOT NULL,
  `module_duration_hours` int(11) NOT NULL,
  `module_duration_days` int(11) NOT NULL,
  `lesson_count` int(11) DEFAULT NULL,
  `module_price` decimal(10,0) DEFAULT NULL,
  `for_whom` text,
  `what_you_learn` text,
  `what_you_get` text,
  `module_img` varchar(255) DEFAULT NULL,
  `about_module` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `module`
--

INSERT INTO `module` (`module_ID`, `course`, `module_name`, `alias`, `language`, `module_duration_hours`, `module_duration_days`, `lesson_count`, `module_price`, `for_whom`, `what_you_learn`, `what_you_get`, `module_img`, `about_module`) VALUES
(1, 1, 'Основи PHP', 'start', 'ua', 14, 20, 6, '1256', 'для менеджерів проектів і тих, хто відповідає за постановку завдань на розробку;для дизайнерів, які готові почати не просто малювати красиві картинки, а й навчитися тому, як створювати працюючі і зручні інтерфейси;для розробників, які хочуть самостійно створити або змінити свій проект;', 'Ви навчитеся писати чистий код;Користуватися системами контролю версій;Дізнаєтеся, з чого складається сучасний додаток;Для чого потрібен безперервна інтеграція (СІ) сервер;Чому потрібно тестувати свої програми і як це робити;', 'Відеозаписи та текстові матеріали всіх онлайн-занять;Спілкування з розумними одногрупниками;Сертифікат про закінчення навчання;Прилаштованість на робоче місце в силіконовій долині;', '/css/images/courseimg1.png', NULL),
(2, 2, 'Module 2', 'module2', 'ua', 30, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Module 3', 'module3', 'ua', 60, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `regextended`
--

CREATE TABLE IF NOT EXISTS `regextended` (
`regID` int(11) NOT NULL,
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
  `fileNotChoose` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regextended`
--

INSERT INTO `regextended` (`regID`, `language`, `mainLink`, `regLink`, `header`, `headerFoto`, `firstName`, `middleName`, `lastName`, `dateOfBirth`, `education`, `tel`, `email`, `password`, `repeatPassword`, `submitButtonText`, `chooseFileButton`, `fileNotChoose`) VALUES
(1, 'UA', 'Головна', 'Реєстрація', 'Персональні', 'Завантажити фото профілю', 'Ім''я', 'По-батькові', 'Прізвище', 'Дата народження', 'Освіта', 'Телефон', 'Email', 'Пароль', 'Повтор пароля', 'Відправити />', 'Виберіть файл', 'Файл не вибрано ...'),
(2, 'RU', 'Главная', 'Регистрация', 'Персональные данные', 'Загрузить фото профиля', 'Имя', 'Отчество', 'Фамилия', 'Дата рождения', 'Образование', 'Телефон', 'Еmail', 'Пароль', 'Повтор пароля', 'ОТПРАВИТЬ />', 'ВЫБЕРИТЕ ФАЙЛ', 'Файл не вибрано &hellip;');

-- --------------------------------------------------------

--
-- Структура таблицы `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
`id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `resourceId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sourcemessages`
--

CREATE TABLE IF NOT EXISTS `sourcemessages` (
`id` int(10) NOT NULL,
  `category` varchar(32) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COMMENT='Table for interface messages (original - English).';

--
-- Дамп данных таблицы `sourcemessages`
--

INSERT INTO `sourcemessages` (`id`, `category`, `message`) VALUES
(1, 'mainpage', 'INTITA'),
(2, 'mainpage', 'About us'),
(3, 'mainpage', 'How is the training?'),
(4, 'mainpage', 'read more ...'),
(5, 'slider', 'PROGRAM THE FUTURE'),
(6, 'mainpage', 'something that you need to know about our courses'),
(7, 'mainpage', 'then explain how you will learn step by step'),
(8, 'slider', 'ENTER'),
(9, 'regform', 'Ready to get started?'),
(10, 'regform', 'Enter data into the form below'),
(11, 'regform', 'extended registration'),
(12, 'regform', 'You can also enter by social networks:'),
(13, 'regform', 'JOIN'),
(14, 'regform', 'Email'),
(15, 'regform', 'Password'),
(16, 'header', 'Courses'),
(17, 'header', 'Forum'),
(18, 'header', 'About us'),
(19, 'header', 'Sign in'),
(20, 'header', 'Sign out'),
(21, 'header', 'Teachers'),
(22, 'header', 'Sign out'),
(23, 'footer', 'tel: +38 0432 52 82 67'),
(24, 'footer', 'mobile: +38 067 432 20 10'),
(25, 'footer', 'e-mail: intita.hr@gmail.com'),
(26, 'footer', 'skype: int.ita'),
(27, 'slider', 'Don''t miss your chance to change the world - get high-quality and modern education class and become an expert!'),
(28, 'slider', 'Want to become a highly qualified specialist, take the right decision - Join the IT Academy INTITA!'),
(29, 'slider', 'One year of productive and interesting learning - and you will become a professional programmer. Learning to hard - but easy to find a job!'),
(30, 'slider', 'Do not lose your chance at a decent and interesting work - Store your future today!'),
(31, 'slider', 'Fifth text on slider'),
(32, 'aboutus', 'What you dream about?'),
(33, 'aboutus', 'Learning of the future'),
(34, 'aboutus', 'Questions & feedback'),
(35, 'aboutus', 'Try to guess: their own apartment or even a house? A good car? Foreign travel may have to exotic countries?'),
(36, 'aboutus', 'Programming - it''s not as hard as you can imagine. Of course, to become a good programmer, it takes time and effort.'),
(37, 'aboutus', 'Three whales INTITA Independent Programming Academy training schedule. Only 100% of the necessary knowledge. The acquisition of 100% of knowledge!'),
(38, 'step', 'Online Registration'),
(39, 'step', 'Choosing course or module'),
(40, 'step', 'Payment'),
(41, 'step', 'Learning material'),
(42, 'step', 'Completion of the course'),
(43, 'step', 'step'),
(44, 'step', 'To access the list of courses, modules and classes and pass free modules and classes register on the site. Registering will allow you to assess the quality and usability of our product that you will become a reliable partner and advisor to professional fulfillment.'),
(45, 'step', 'To become a specialist in a certain direction and level (get professional specialization) choose to undergo appropriate course. If you are interested only deepen the knowledge in a particular area of IT, then choose the module to pass.'),
(46, 'step', 'To start a course or module choose payment scheme (the entire amount for the course, month, potrymestrovo etc) and make a payment convenient way to You (payment scheme or course module can be changed also possible monthly payment on credit).'),
(47, 'step', 'Learning material is possible by reading the text and / or viewing video for each session. During the development of the material classes perform intermediate tests. At the end of each session do the final test task. Each module ends with an individual project or exam. You can get individual counseling teacher or discuss the issue on the forum.'),
(48, 'step', 'The result of course is the command thesis project, performed together with other students (the team recommends that forms an independent or executive who approved topic and terms of reference of the project). Filing project involves peredzahyst and protection in the online mode of presentation design.'),
(49, 'breadcrumbs', 'Home'),
(50, 'breadcrumbs', 'Courses'),
(51, 'breadcrumbs', 'About us'),
(52, 'breadcrumbs', 'Teachers'),
(53, 'breadcrumbs', 'Forum'),
(54, 'breadcrumbs', 'Profile'),
(55, 'breadcrumbs', 'Edit profile'),
(56, 'breadcrumbs', 'Register'),
(57, 'breadcrumbs', 'Teacher profile'),
(58, 'teachers', 'Our teachers'),
(59, 'teachers', 'personal page'),
(60, 'teachers', 'If you want professional IT and IT teach some courses or modules and cooperate with us in the field of training programmers write us a letter.'),
(61, 'teachers', 'Read courses:'),
(62, 'teachers', 'Read more'),
(63, 'teachers', 'Reviews'),
(64, 'teacher', 'Chapter:'),
(65, 'teacher', 'About teacher:'),
(66, 'courses', 'Our courses'),
(67, 'courses', 'Concept of learning'),
(68, 'courses', 'Level:'),
(69, 'courses', 'Language:');

-- --------------------------------------------------------

--
-- Структура таблицы `step`
--

CREATE TABLE IF NOT EXISTS `step` (
`stepID` int(11) NOT NULL,
  `language` enum('UA','RU','EN') NOT NULL,
  `stepName` varchar(30) NOT NULL DEFAULT '0',
  `stepNumber` int(11) NOT NULL,
  `stepTitle` varchar(50) NOT NULL,
  `stepImagePath` varchar(255) NOT NULL DEFAULT '0',
  `stepImage` varchar(50) NOT NULL,
  `stepText` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `step`
--

INSERT INTO `step` (`stepID`, `language`, `stepName`, `stepNumber`, `stepTitle`, `stepImagePath`, `stepImage`, `stepText`) VALUES
(1, 'UA', 'крок', 1, 'Реєстрація на сайті', '/css/images/', 'step1.jpg', 'Щоб отримати доступ до переліку курсів, модулів і занять та пройти безкоштовні модулі і заняття зареєструйся на сайті. Реєстрація дозволить тобі оцінити якість та зручність нашого продукт, який стане для тебе надійним партнером і порадником в професійній самореалізації.\r\n'),
(2, 'UA', 'крок', 2, 'Вибір курсу чи модуля', '/css/images/', 'step2.jpg', '<p>Щоб стати спеціалістом певного напрямку та рівня (отримати професійну спеціалізацію) вибери для проходження відповідний курс. Якщо Тебе цікавить виключно поглиблення знань в певному напрямку ІТ, то вибери відповідний модуль для проходження.</p>'),
(3, 'UA', 'крок', 3, 'Проплата', '/css/images/', 'step3.jpg', 'Щоб розпочати проходження курсу чи модуля вибери схему оплати (вся сума за курс, помісячно, потриместрово тощо) та здійсни оплату зручним Тобі способом (схему оплати курсу чи модуля можна змінювати, також можлива помісячна оплата в кредит).'),
(4, 'UA', 'крок', 4, 'Освоєння матеріалу', '/css/images/', 'step4.jpg', '<p>Вивчення матеріалу можливе шляхом читання тексту чи/і перегляду відео для кожного заняття.\n    Протягом освоєння матеріалу заняття виконуй Проміжні тестові завдання. По завершенню кожного заняття виконуй Підсумкове тестове завдання. Кожен модуль завершується Індивідуальним проектом чи Екзаменом.\n    Можна отримати індивідуальну консультацію викладача чи обговорити питання на форумі.</p>'),
(5, 'UA', 'крок', 5, 'Завершення курсу', '/css/images/', 'step5.jpg', 'Підсумком курсу є Командний дипломний проект, який виконується разом з іншими студентами (склад команди формуєш самостійно чи рекомендує керівник, який затверджує тему і технічне завдання проекту). Здача проекту передбачає передзахист та захист в он-лайн режимі із представленням технічної документації.');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`student_id` int(11) NOT NULL,
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
  `timezome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `studentsaccess`
--

CREATE TABLE IF NOT EXISTS `studentsaccess` (
`accessID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `moduleID` int(11) NOT NULL,
  `lectureID` int(11) NOT NULL,
  `dateChange` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`teacherID` int(11) NOT NULL,
  `teacher_title` int(11) NOT NULL DEFAULT '0',
  `linkName` int(11) NOT NULL DEFAULT '0',
  `firstName` varchar(35) NOT NULL,
  `middleName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `fotoURL` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `coursesArray` varchar(255) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `dateOfBirth` int(11) NOT NULL DEFAULT '0',
  `subjects` varchar(50) NOT NULL DEFAULT '0',
  `jobTitle` varchar(50) NOT NULL DEFAULT '0',
  `education` varchar(100) NOT NULL DEFAULT '0',
  `degree` varchar(50) NOT NULL DEFAULT '0',
  `articles` text NOT NULL,
  `otherTeacherDetailes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teacherspage`
--

CREATE TABLE IF NOT EXISTS `teacherspage` (
`id` int(11) NOT NULL,
  `lang` varchar(6) NOT NULL,
  `header` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `BCmain` varchar(30) NOT NULL,
  `BCteachers` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacherspage`
--

INSERT INTO `teacherspage` (`id`, `lang`, `header`, `courses`, `link1`, `link2`, `BCmain`, `BCteachers`, `title`, `profile`) VALUES
(1, 'UA', 'Our teachers', 'Веде курси:', 'Читати повністю', 'Відгуки про викладача', 'Головна', 'Викладачі', 'ІНТІТА - Викладачі', 'Персональна сторінка'),
(2, 'RU', 'Наши преподаватели', 'Ведет курсы:', 'Читать полностью', 'Отзывы о преподавателе', 'Главная', 'Преподаватели', 'ИНТИТА - Преподаватели', 'Персональная страница');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher_temp`
--

CREATE TABLE IF NOT EXISTS `teacher_temp` (
`teacher_id` int(11) NOT NULL,
  `lang` varchar(6) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `foto_url` varchar(100) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `profile_text_big` text NOT NULL,
  `profile_text` text NOT NULL,
  `readMoreLink` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `linkName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher_temp`
--

INSERT INTO `teacher_temp` (`teacher_id`, `lang`, `first_name`, `middle_name`, `last_name`, `foto_url`, `subjects`, `profile_text_big`, `profile_text`, `readMoreLink`, `email`, `tel`, `skype`, `title`, `linkName`) VALUES
(1, 'UA', 'Олександра', 'Василівна', 'Сіра', '/css/images/teacher1.jpg', 'кройка и шитье сроков; програмування самоубийств', 'Народилася і виросла в Сакраменто, у 18 років вона переїхала до Лос-Анджелеса й незабаром стала вкладачем. У 2007, 2008 і 2010 рр.. вона виграла кілька номінацій премії AVN Awards (також була названа «Найкращою програмісткою» у 2007 році за версією XRCO). Паралельно з вікладауцью роботою та роботою програміста в Саша Грей грає головну роль в тестванні Інтернету.\r\n\r\nМарина Енн Генціс народилася у родині механіка. Її батько мав грецьке походження. Батьки дівчинки розлучилися коли їй було 5 років, надалі її виховувала мати, яка вступила в повторний шлюб у 2000 роц. Марина не ладнала з вітчимом, і, коли їй виповнилося 16 років, дівчина повідомила матері, що збирається покинути будинок. Достеменно невідомо, втекла вона з свого будинку або ж її відпустила мати. Сама Олександра пізніше зізнавалася, що в той час робила все те, що не подобалося її батькам і що вони їй забороняли.\r\n\r\nГлавный бухгалтер акционерного предприятия, специализирующегося на:\r\n\r\n    оказании полезных услуг горизонтального характера;\r\n    торговле, внешнеэкономической и внутреннеэкономической;\r\n    позитивное обучение швейного мастерства;\r\n\r\n Олександра Сіра виконала головну роль у фільмі оскароносного режисера Стівена Содерберга «Дівчина за викликом»[27][28]. Олександра грає дівчину на ім''я Челсі, яка надає ескорт послуги заможним людям. Содерберг взяв її на роль після того, як прочитав статтю про неї у журналі Los Angeles, коментуючи це так: «She''s kind of a new breed, I think. She doesn''t really fit the typical mold of someone who goes into the adult film business. … I''d never heard anybody talk about the business the way that she talked about it». Журналіст Скотт Маколей каже, що можливо Грей вибрала саме цю роль через свій інтерес до незалежних режисерів, таких як Жан-Люк Годар, Хармоні Корін, Девід Гордон Грін, Мікеланджело Антоніоні, Аньєс Варда та Вільям Клейн.\r\n\r\nКоли Олександра готувалася до ролі у «Дівчині за викликом», Содерберг попросив її подивитися «Жити своїм життям» і «Божевільний П''єро»[29]. У фільмі «Жити своїм життям» піднімаються проблеми проституції, звідки Грей могла взяти щось і для своєї ролі, в той час як у «Божевільному П''єро» показані відносини, схожі на ті, що відбуваються між Челсі, її хлопцем і клієнтами.''; ', '<p>Профессиональный преподаватель бухгалтерского и налогового учета Национальноготранспортного университета кафедры финансов, учета и аудита со стажем преподавательской работы более 25 лет. Закончила аспирантуру, автор 36 научных работ в области учета и аудита, в т.ч. уникальной обучающей методики написания бухгалтерских проводок: <span>"Как украсть и не сесть" </span> и <span>"Как украсть и посадить другого" </span>.</p><p>Главный бухгалтер акционерного предприятия, специализирующегося на:<ul><li>оказании полезных услуг горизонтального характера;</li><li>торговле, внешнеэкономической и внутреннеэкономической;</li><li>позитивное обучение швейного мастерства;</li></ul></p>', '/index.php?r=teacherprofile', '', '', '', '', ''),
(2, 'UA', 'Константин', 'Константинович', 'Константинопольский', '/css/images/teacher2.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherprofile', '', '', '', '', ''),
(3, 'UA', 'Любовь', 'Анатольевна', 'Ктоятакая-Замухриншская', '/css/images/teacher3.jpg', 'Бухгалтер с «О» и до первой отсидки; Программирование своего позитивного прошлого', '', '<p>Практикующий главный бухгалтер. Учредитель ПП <span>«Логика тут безсильна»</span>;</p>\r\n<p>Образование высшее - ДонГУ (1987г.)</p>\r\n<p>Опыт работы 27 лет, в т. ч. преподавания - 9 лет.</p>\r\n<ul><li>специалист по позитивной энергетике;</li><li>эксперт по эффективному ремонту баянов;</li><li>мастер психотерапии для сложных бабушек и дедушек;</li></ul>', '/index.php?r=teacherprofile', '', '', '', '', ''),
(4, 'UA', 'Василий', 'Васильевич', 'Меняетпроффесию', '/css/images/teacher4.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherprofile', '', '', '', '', ''),
(5, 'UA', 'Ия', 'Тожевна', 'Воваяготова', '/css/images/teacher5.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherprofile', '', '', '', '', ''),
(6, 'UA', 'Петросян', 'Петросянович', 'Забугорный', '/css/images/teacher6.jpg', 'программування БДСМ; программування на Php для пострадавших в ЧАЭС; GlobalLoqic, Samsung, Coqniance', '', '<p>Консультант по вопросам бухгалтерского и налогового учета, отчетности для предприятий разной формы собственности. Преподаватель с многолетним стажем работы. <span>Реально шарит в компьютерах.</span></p><p>Автор технологии повышения квалификации специалистов экономического профиля.</p><p>Опыт преподавательской работы около 20 лет в учебных центрах и ВУЗах Киева. Опыт работы главным бухгалтером, финансовым директором. Большой опыт внедрения программ системы Виндовз 3:11.</p>', '/index.php?r=teacherprofile', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `translatedmessagesru`
--

CREATE TABLE IF NOT EXISTS `translatedmessagesru` (
`id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL,
  `translation` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `translatedmessagesru`
--

INSERT INTO `translatedmessagesru` (`id`, `language`, `translation`) VALUES
(1, 'ru', 'INTITA'),
(2, 'ru', 'О нас'),
(3, 'ru', 'Как проходит обучение?'),
(4, 'ru', 'далее ...'),
(5, 'ru', 'ПРОГРАММИРУЙ БУДУЩЕЕ'),
(6, 'ru', 'кое-что, что Вы должны знать о наших курсах'),
(7, 'ru', 'далее о том, как Вы будете учиться шаг за шагом'),
(8, 'ru', 'СТАРТ'),
(9, 'ru', 'Готовы начать?'),
(10, 'ru', 'Введите данные в форму ниже'),
(11, 'ru', 'расширенная регистрация'),
(12, 'ru', 'Вы также можете войти с помощью соцсетей:'),
(13, 'ru', 'НАЧАТЬ'),
(14, 'ru', 'Электронная почта'),
(15, 'ru', 'Пароль'),
(16, 'ru', 'Курсы'),
(17, 'ru', 'Форум'),
(18, 'ru', 'О нас'),
(19, 'ru', 'Вход'),
(20, 'ru', 'Выход'),
(21, 'ru', 'Преподаватели'),
(22, 'ru', 'Выход'),
(23, 'ru', 'телефон: +38 0432 52 82 67 '),
(24, 'ru', 'тел. моб. +38 067 432 20 10'),
(25, 'ru', 'e-mail: intita.hr@gmail.com'),
(26, 'ru', 'скайп: int.ita'),
(27, 'ru', 'Не пропусти свой шанс изменить мир - получи качественное и современное образование и стань крутым специалистом!'),
(28, 'ru', 'Хочешь стать классным специалистом, принимай правильное решение - поступай в ЫТ Академию  ИНТИТА!'),
(29, 'ru', 'Один год упорного и интересного обучения - и ты станешь проессиональным программистом. Учиться тяжело -зато легко найти работу!'),
(30, 'ru', 'Не упускай свой шанс на достойную и интересную работу - программируй свое будущее уже сегодня!'),
(31, 'ru', 'Текст на пятой картинке слайдера'),
(32, 'ru', 'О чем ты мечтаешь?'),
(33, 'ru', 'Обучение будущего'),
(34, 'ru', 'Вопросы и отзывы'),
(35, 'ru', ''),
(36, 'ru', ''),
(37, 'ru', ''),
(38, 'ru', 'Регистрация на сайте'),
(39, 'ru', 'Выбор курса или модуля'),
(40, 'ru', 'Оплата'),
(41, 'ru', 'Изучение материала'),
(42, 'ru', 'Завершение курса'),
(43, 'ru', 'шаг'),
(44, 'ru', ''),
(45, 'ru', ''),
(46, 'ru', ''),
(47, 'ru', ''),
(48, 'ru', ''),
(49, 'ru', 'Главная'),
(50, 'ru', 'Курсы'),
(51, 'ru', 'О нас'),
(52, 'ru', 'Преподаватели'),
(53, 'ru', 'Форум'),
(54, 'ru', 'Профиль'),
(55, 'ru', 'Редактировать профиль'),
(56, 'ru', 'Регистрация'),
(57, 'ru', 'Профиль преподавателя'),
(58, 'ru', 'Наши преподаватели'),
(59, 'ru', 'персональная страница'),
(60, 'ru', 'Если Вы профессиональный ІТ-шник и хотите преподавать некоторые ІТ курсы и сотрудничать с нами в подготовке программистов, напишите нам письмо.'),
(61, 'ru', 'Ведет курсы:'),
(62, 'ru', 'Читать полностью'),
(63, 'ru', 'Отзывы'),
(64, 'ru', 'Раздел:'),
(65, 'ru', 'О преподавателе:'),
(66, 'ru', 'Наши курсы'),
(67, 'ru', 'Концепция подготовки'),
(68, 'ru', 'Уровень курса:'),
(69, 'ru', 'Язык курса:');

-- --------------------------------------------------------

--
-- Структура таблицы `translatedmessagesua`
--

CREATE TABLE IF NOT EXISTS `translatedmessagesua` (
`id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL,
  `translation` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COMMENT='Table for translation interface messages (see sourceMessages). UA';

--
-- Дамп данных таблицы `translatedmessagesua`
--

INSERT INTO `translatedmessagesua` (`id`, `language`, `translation`) VALUES
(1, 'ua', 'INTITA'),
(2, 'ua', 'Про нас'),
(3, 'ua', 'Як проводиться навчання?'),
(4, 'ua', 'детальніше ...'),
(5, 'ua', 'ПРОГРАМУЙ МАЙБУТНЄ'),
(6, 'ua', 'дещо, що Вам потрібно знати про наші курси'),
(7, 'ua', 'далі пояснення як ви будете вчитися крок за кроком'),
(8, 'ua', 'ПОЧАТИ />'),
(9, 'ua', 'Готові розпочати?'),
(10, 'ua', 'Введіть дані в форму нижче'),
(11, 'ua', 'розширена реєстрація'),
(12, 'ua', 'Ви можете також увійти через соцмережі:'),
(13, 'ua', 'ПОЧАТИ '),
(14, 'ua', 'Електронна пошта'),
(15, 'ua', 'Пароль'),
(16, 'ua', 'Курси'),
(17, 'ua', 'Форум'),
(18, 'ua', 'Про нас'),
(19, 'ua', 'Вхід'),
(20, 'ua', 'Вихід'),
(21, 'ua', 'Викладачі'),
(22, 'ua', 'Вихід'),
(23, 'ua', 'телефон: +38 0432 52 82 67 '),
(24, 'ua', 'тел. моб. +38 067 432 20 10'),
(25, 'ua', 'e-mail: intita.hr@gmail.com'),
(26, 'ua', 'скайп: int.ita'),
(27, 'ua', 'Не упусти свій шанс змінити світ - <br>отримай якісну та сучасну освіту і стань класним спеціалістом!'),
(28, 'ua', 'Хочеш стати висококласним спеціалістом, приймай вірне<br>рішення - вступай до ІТ Академії ІНТІТА!'),
(29, 'ua', 'Один рік наполегливого і цікавого навчання - і ти станеш професійним програмістом. <br>Навчатись важко - зате роботу знайти легко!'),
(30, 'ua', 'Не втрачай свій шанс на гідну та цікаву працю – <br>програмуй своє майбутнє вже сьогодні!'),
(31, 'ua', 'Текст на п''ятій картинці слайдера'),
(32, 'ua', 'Про що мрієш ти?'),
(33, 'ua', 'Навчання майбутнього'),
(34, 'ua', 'Питання та відгуки'),
(35, 'ua', '<p>Спробуємо вгадати: власна квартира чи навіть будинок? Гарний автомобіль? Закордонні подорожі, можливо, до екзотичних країн?</p>'),
(36, 'ua', '<p>Програмування – це не так складно, як ти можеш уявляти. Безумовно, щоб стати хорошим програмістом, потрібен час та зусилля.</p>'),
(37, 'ua', '<p>Три кити Академії Програмування ІНТІТА Самостійний графік навчання. Лише 100% необхідні знання. Засвоєння 100% знань!</p>'),
(38, 'ua', 'Реєстрація на сайті'),
(39, 'ua', 'Вибір курсу чи модуля'),
(40, 'ua', 'Проплата'),
(41, 'ua', 'Освоєння матеріалу'),
(42, 'ua', 'Завершення курсу'),
(43, 'ua', 'крок'),
(44, 'ua', 'Щоб отримати доступ до переліку курсів, модулів і занять та пройти безкоштовні модулі і заняття зареєструйся на сайті. Реєстрація дозволить тобі оцінити якість та зручність нашого продукт, який стане для тебе надійним партнером і порадником в професійній самореалізації.'),
(45, 'ua', 'Щоб стати спеціалістом певного напрямку та рівня (отримати професійну спеціалізацію) вибери для проходження відповідний курс. Якщо Тебе цікавить виключно поглиблення знань в певному напрямку ІТ, то вибери відповідний модуль для проходження.'),
(46, 'ua', 'Щоб розпочати проходження курсу чи модуля вибери схему оплати (вся сума за курс, помісячно, потриместрово тощо) та здійсни оплату зручним Тобі способом (схему оплати курсу чи модуля можна змінювати, також можлива помісячна оплата в кредит).'),
(47, 'ua', 'Вивчення матеріалу можливе шляхом читання тексту чи/і перегляду відео для кожного заняття. Протягом освоєння матеріалу заняття виконуй Проміжні тестові завдання. По завершенню кожного заняття виконуй Підсумкове тестове завдання. Кожен модуль завершується Індивідуальним проектом чи Екзаменом. Можна отримати індивідуальну консультацію викладача чи обговорити питання на форумі.'),
(48, 'ua', 'Підсумком курсу є Командний дипломний проект, який виконується разом з іншими студентами (склад команди формуєш самостійно чи рекомендує керівник, який затверджує тему і технічне завдання проекту). Здача проекту передбачає передзахист та захист в он-лайн режимі із представленням технічної документації.'),
(49, 'ua', 'Головна'),
(50, 'ua', 'Курси'),
(51, 'ua', 'Про нас'),
(52, 'ua', 'Викладачі'),
(53, 'ua', 'Форум'),
(54, 'ua', 'Профіль'),
(55, 'ua', 'Редагувати профіль'),
(56, 'ua', 'Реєстрація'),
(57, 'ua', 'Профіль викладача'),
(58, 'ua', 'Наші викладачі'),
(59, 'ua', 'персональна сторінка'),
(60, 'ua', 'Якщо ви професійний ІТ-шник і бажаєте викладати окремі ІТ курси чи модулі і співпрацювати з нами в напрямку підготовки програмістів, напишіть нам листа.'),
(61, 'ua', 'Веде курси:'),
(62, 'ua', 'Читати повністю'),
(63, 'ua', 'Відгуки'),
(64, 'ua', 'Розділ:'),
(65, 'ua', 'Про викладача:'),
(66, 'ua', 'Рівень курсу:'),
(67, 'ua', 'Мова курсу:');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
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
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `firstName`, `middleName`, `secondName`, `nickname`, `birthday`, `email`, `password`, `phone`, `hash`, `address`, `education`, `educform`, `interests`, `aboutUs`, `aboutMy`, `avatar`, `role`) VALUES
(1, 'Вова', 'Джа', 'Марля', 'Wizlight', '21/03/1997', 'Wizlightdragon@gmail.com', '', '911', '', 'Ямайка', 'ВДПУ', 'Онлайн', 'Ковбаска, колобки, раста', 'Інтернет', 'Володію албанською. Люблю м''ясо та до м''яса. Розвожу королів. ', '/css/images/1id.jpg', ''),
(5, 't54wy6wy@ferwg.gtrf', NULL, NULL, NULL, NULL, 't54wy6wy@ferwg.gtrf', 'egrwhjet6', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'dfesafhe@fjgr.gfrje', NULL, NULL, NULL, NULL, 'dfesafhe@fjgr.gfrje', 'fkrjgfrklfjrlk', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'fhsdgfh@deyg.gdehj', NULL, NULL, NULL, NULL, 'fhsdgfh@deyg.gdehj', 'vfdvdf', NULL, '', NULL, NULL, 'Не вибрано', NULL, NULL, NULL, NULL, ''),
(8, 'admin@EHJBF.SNDFS', NULL, NULL, NULL, NULL, 'admin@EHJBF.SNDFS', 'd6877098041a8a30bc8bd8f9faeeb8e62afd682f', NULL, '', NULL, NULL, 'Не вибрано', NULL, NULL, NULL, NULL, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aa_access`
--
ALTER TABLE `aa_access`
 ADD PRIMARY KEY (`user_id`,`interface_id`), ADD KEY `interface_id` (`interface_id`);

--
-- Индексы таблицы `aa_authorizations`
--
ALTER TABLE `aa_authorizations`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `when_enter` (`when_enter`);

--
-- Индексы таблицы `aa_errors`
--
ALTER TABLE `aa_errors`
 ADD PRIMARY KEY (`id`), ADD KEY `authorization_id` (`authorization_id`);

--
-- Индексы таблицы `aa_interfaces`
--
ALTER TABLE `aa_interfaces`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `alias` (`alias`), ADD KEY `section_id` (`section_id`);

--
-- Индексы таблицы `aa_logs`
--
ALTER TABLE `aa_logs`
 ADD PRIMARY KEY (`id`), ADD KEY `interface_id` (`interface_id`), ADD KEY `authorization_id` (`authorization_id`);

--
-- Индексы таблицы `aa_sections`
--
ALTER TABLE `aa_sections`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aa_users`
--
ALTER TABLE `aa_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `aboutus`
--
ALTER TABLE `aboutus`
 ADD PRIMARY KEY (`blockID`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
 ADD PRIMARY KEY (`order`);

--
-- Индексы таблицы `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_ID`), ADD UNIQUE KEY `course_name` (`course_name`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
 ADD PRIMARY KEY (`footerID`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
 ADD PRIMARY KEY (`headerID`);

--
-- Индексы таблицы `hometasks`
--
ALTER TABLE `hometasks`
 ADD PRIMARY KEY (`hometask_ID`), ADD UNIQUE KEY `fkmodule_ID` (`fkmodule_ID`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lecture`
--
ALTER TABLE `lecture`
 ADD PRIMARY KEY (`lectureID`), ADD KEY `FK_lectures_modules` (`lectureModule`);

--
-- Индексы таблицы `mainpage`
--
ALTER TABLE `mainpage`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mainpagetranslated`
--
ALTER TABLE `mainpagetranslated`
 ADD PRIMARY KEY (`id`,`language`);

--
-- Индексы таблицы `module`
--
ALTER TABLE `module`
 ADD PRIMARY KEY (`module_ID`), ADD UNIQUE KEY `module_ID` (`module_ID`), ADD KEY `course` (`course`);

--
-- Индексы таблицы `regextended`
--
ALTER TABLE `regextended`
 ADD PRIMARY KEY (`regID`);

--
-- Индексы таблицы `resource`
--
ALTER TABLE `resource`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sourcemessages`
--
ALTER TABLE `sourcemessages`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `step`
--
ALTER TABLE `step`
 ADD PRIMARY KEY (`stepID`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`student_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `studentsaccess`
--
ALTER TABLE `studentsaccess`
 ADD PRIMARY KEY (`accessID`), ADD KEY `FK_courseaccess_students` (`studentID`), ADD KEY `FK_studentsaccess_course` (`courseID`), ADD KEY `FK_studentsaccess_lectures` (`lectureID`), ADD KEY `FK_studentsaccess_modules` (`moduleID`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`teacherID`), ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `teacherspage`
--
ALTER TABLE `teacherspage`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teacher_temp`
--
ALTER TABLE `teacher_temp`
 ADD PRIMARY KEY (`teacher_id`);

--
-- Индексы таблицы `translatedmessagesru`
--
ALTER TABLE `translatedmessagesru`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translatedmessagesua`
--
ALTER TABLE `translatedmessagesua`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aa_authorizations`
--
ALTER TABLE `aa_authorizations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `aa_errors`
--
ALTER TABLE `aa_errors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `aa_interfaces`
--
ALTER TABLE `aa_interfaces`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `aa_logs`
--
ALTER TABLE `aa_logs`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `aa_sections`
--
ALTER TABLE `aa_sections`
MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `aa_users`
--
ALTER TABLE `aa_users`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `aboutus`
--
ALTER TABLE `aboutus`
MODIFY `blockID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `course`
--
ALTER TABLE `course`
MODIFY `course_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `footer`
--
ALTER TABLE `footer`
MODIFY `footerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
MODIFY `headerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `hometasks`
--
ALTER TABLE `hometasks`
MODIFY `hometask_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `lecture`
--
ALTER TABLE `lecture`
MODIFY `lectureID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `mainpagetranslated`
--
ALTER TABLE `mainpagetranslated`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `module`
--
ALTER TABLE `module`
MODIFY `module_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `regextended`
--
ALTER TABLE `regextended`
MODIFY `regID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `resource`
--
ALTER TABLE `resource`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `sourcemessages`
--
ALTER TABLE `sourcemessages`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT для таблицы `step`
--
ALTER TABLE `step`
MODIFY `stepID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `studentsaccess`
--
ALTER TABLE `studentsaccess`
MODIFY `accessID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
MODIFY `teacherID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `teacherspage`
--
ALTER TABLE `teacherspage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `teacher_temp`
--
ALTER TABLE `teacher_temp`
MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `translatedmessagesru`
--
ALTER TABLE `translatedmessagesru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT для таблицы `translatedmessagesua`
--
ALTER TABLE `translatedmessagesua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `aa_access`
--
ALTER TABLE `aa_access`
ADD CONSTRAINT `aa_access_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `aa_access_ibfk_2` FOREIGN KEY (`interface_id`) REFERENCES `aa_interfaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `aa_authorizations`
--
ALTER TABLE `aa_authorizations`
ADD CONSTRAINT `aa_authorizations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `aa_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `aa_errors`
--
ALTER TABLE `aa_errors`
ADD CONSTRAINT `aa_errors_ibfk_1` FOREIGN KEY (`authorization_id`) REFERENCES `aa_authorizations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `aa_interfaces`
--
ALTER TABLE `aa_interfaces`
ADD CONSTRAINT `aa_interfaces_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `aa_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `aa_logs`
--
ALTER TABLE `aa_logs`
ADD CONSTRAINT `aa_logs_ibfk_1` FOREIGN KEY (`interface_id`) REFERENCES `aa_interfaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `aa_logs_ibfk_2` FOREIGN KEY (`authorization_id`) REFERENCES `aa_authorizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lecture`
--
ALTER TABLE `lecture`
ADD CONSTRAINT `FK_lecture_modules` FOREIGN KEY (`lectureModule`) REFERENCES `module` (`module_ID`);

--
-- Ограничения внешнего ключа таблицы `mainpagetranslated`
--
ALTER TABLE `mainpagetranslated`
ADD CONSTRAINT `FK__mainpage` FOREIGN KEY (`id`) REFERENCES `mainpage` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `module`
--
ALTER TABLE `module`
ADD CONSTRAINT `FK_module_course` FOREIGN KEY (`course`) REFERENCES `course` (`course_ID`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `studentsaccess`
--
ALTER TABLE `studentsaccess`
ADD CONSTRAINT `FK_courseaccess_students` FOREIGN KEY (`studentID`) REFERENCES `user` (`id`),
ADD CONSTRAINT `FK_studentsaccess_course` FOREIGN KEY (`courseID`) REFERENCES `course` (`course_ID`),
ADD CONSTRAINT `FK_studentsaccess_lectures` FOREIGN KEY (`lectureID`) REFERENCES `lecture` (`lectureID`),
ADD CONSTRAINT `FK_studentsaccess_modules` FOREIGN KEY (`moduleID`) REFERENCES `module` (`module_ID`);

--
-- Ограничения внешнего ключа таблицы `translatedmessagesru`
--
ALTER TABLE `translatedmessagesru`
ADD CONSTRAINT `FK_translatedMessagesRU_sourcemessages` FOREIGN KEY (`id`) REFERENCES `sourcemessages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `translatedmessagesua`
--
ALTER TABLE `translatedmessagesua`
ADD CONSTRAINT `FK_translatedmessages_sourcemessages` FOREIGN KEY (`id`) REFERENCES `sourcemessages` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
