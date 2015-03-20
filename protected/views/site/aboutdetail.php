<?php
/**
 * Created by PhpStorm.
 * User: Wizlight
 * Date: 15.03.2015
 * Time: 18:08
 */
$this->pageTitle = 'INTITA';
?>
<!-- course style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/course.css" />
<!-- course style -->
<!-- BD -))) -->
<?php
$post=Course::model()->findByPk(1);
?>
<?php
$this->breadcrumbs=array(
    'Курси'=>Yii::app()->request->baseUrl."/index.php/?r=courses",'Програмування для чайників',
);
?>
<!-- BD -))) -->
<div class="courseBlock">
    <img class="courseImg" src="<?php echo Yii::app()->request->baseUrl.$post->course_img ?>" />
    <div class="courseTitle">
        <h1><?php echo $post->course_name;?></h1>
    </div>
    <div class="courseInfo">
        <table class="courseLevelLine">
            <tr>
                <td>
                    <p><span class="colorP"><b>Рівень курсу: </b></span>сильний початківець</p>
                </td>
                <td class="courseLevel">
                    <?php
                    for ($i=0; $i<1; $i++)
                    {
                        ?>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco1.png" >
                    <?php
                    }
                    for ($j=0; $j<3; $j++)
                    {
                        ?>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco0.png" >
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </table>
        <table class="courseDetail">
            <tr>
                <td>
                    <span class="colorP">Тривалість курсу: </span>
                </td>
                <td>
                    <span class="colorGrey"><b><?php echo $post->course_duration_hours;?></b><?php $post::getHoursTermination($post->course_duration_hours);?> </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="colorP">Модулів: </span>
                </td>
                <td>
                    <span class="colorGrey"><b><?php echo $post->modules_count;?></b><?php $post::getModulesTermination($post->modules_count);?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="colorP">Вартість курсу: </span>
                </td>
                <td>
                    <span class="colorGrey"><b><?php echo number_format($post->course_price, 0, ',', ' ');?></b> грн</span>
                </td>
            </tr>
        </table>
        <p class="subCourseInfo"><b>Для кого:</b></p>
        <ul>
            <?php
            $forWhomArray=explode(";", $post->for_whom);
            for ($k = 0; $k < count($forWhomArray)-1; $k++)
            {
                ?>
                <li><?php echo $forWhomArray[$k].";";?></li>
            <?php
            }
            ?>
        </ul>
        <p class="subCourseInfo"><b>Чому Ви навчитеся?</b></p>
        <ul>
            <?php
            $whatYouLearnArray=explode(";", $post->what_you_learn);
            for ($l = 0; $l < count($whatYouLearnArray)-1; $l++)
            {
                ?>
                <li><?php echo $whatYouLearnArray[$l].";";?></li>
            <?php
            }
            ?>
        </ul>
        <p class="subCourseInfo"><b>Що Ви отримаєте?</b></p>
        <ul>
            <?php
            $whatYouLearnArray=explode(";", $post->what_you_get);
            for ($r = 0; $r < count($whatYouLearnArray)-1; $r++)
            {
                ?>
                <li><?php echo $whatYouLearnArray[$r].";";?></li>
            <?php
            }
            ?>
        </ul>
        <p class="subCourseInfo"><b>Середня оцінка:</b></p>
        <table class="courseDetail">
            <tr>
                <td>
                    <span class="colorGrey">програма:<b> 4,8/5</b></span>
                </td>
                <td>
                    <span class="colorGrey">програма:<b> 4,5/5</b></span>
                </td>
            </tr>
        </table>
        <h2>Викладачі</h2>
        <div class="courseTeacherImg">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
        </div>
        <div class="courseTeacherInfo">
            <h3>Сіра Олександра Василівна</h3>
            <table class="courseTeacherDetail">
                <tr>
                    <td>
                        <span class="colorP">Рейтинг: </span>
                    </td>
                    <td>
                        <span class="colorGrey"><b>8,2/10</b></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="colorP">Модуль: </span>
                    </td>
                    <td>
                        <span class="colorGrey">Програмування PHP; Ява скрипт та Суматра</span>
                    </td>
                </tr>
            </table>
            <p class="courseAboutTeacher">Про викладача</p>
            Повний веб-розробник з великим досвідом розробки систем для електронної комерції. Спеціальності: <b>“Прикладна математика“</b> та <b>"Менеджмінет"</b>.
        </div>
        <div class="courseTeacherImg">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher4.jpg" />
        </div>
        <div class="courseTeacherInfo">
            <h3>Сірий Олександр Васильович</h3>
            <table class="courseTeacherDetail">
                <tr>
                    <td>
                        <span class="colorP">Рейтинг: </span>
                    </td>
                    <td>
                        <span class="colorGrey"><b>9,3/10</b></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="colorP">Модуль: </span>
                    </td>
                    <td>
                        <span class="colorGrey">Програмування PHP; Ява скрипт та Суматра</span>
                    </td>
                </tr>
            </table>
            <p class="courseAboutTeacher">Про викладача</p>
            преподаватель с многолетним стажем работы. Реально шарит в компьютерах.
        </div>
    </div>
    <div class="courseModules">
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    1
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 1. Основи PHP</h2>
                <p>Про PHP, Базовий синтаксис, Змінні, Константи, Типи даних, Перетворення типів, Оператори, Операції, Резюме, Домашнє заданіе. Цикли в РНР, Цикл, поки, Цикл do..while, для Цикл, Нескінченний цикл, Оператор виходу з циклу, Оператор переривання ітерації циклу, Масиви, Обхід масивів в циклі, Функції для роботи з масивами, Багатовимірні масиви, Попереднє визначення масиви, Резюме, Домашнє завдання</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    2
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 2. Семантичне ядро сайту</h2>
                <p>Успішне семядро. Комерційні та некомерційні запити. Загальні принципи збору СемЯдра. Конкуренція ключових слів. Програми та комплекси в допомогу при зборі СемЯдра. Оцінка конкурентів в мережі.</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    3
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 3. Зовнішні ресурси в просуванні</h2>
                <p>Посилальна маса, оцінка сайтів донорів. Біржі посилань, біржі статей-використання і методики. Робота з біржами посилань і статей. Обмін посиланнями-статтями з веб-майстрами безпосередньо. Фахівці та ресурси в цій області Каталоги Яндекс, Мейл, DMOZ в просуванні. Розгалуження програми, Оператор, якщо тернарного оператор умови, Оператор перемикач, Функції, Визначення функції, Значення за замовчуванням, Рекурсия, Область видимості і час життя змінних, Резюме, Домашнє завдання</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    4
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 4. Запити HTTP, URL параметри і форми HTML</h2>
                <p>Типи запитів HTTP, URL і параметри запиту, URL Обробка параметрів, HTML Обробка відправки форми, Резюме, Google Аналітика, Яндекс Метрика, Liveinternet - збір статистики Яндекс Вебвізор, Google Аналітика та інші сервіси аналізу просування Програми та сервіси для збору позиці в посіке СемЯдра, трафіку і інших характеристик розкривають просування. Домашнє завдання</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    5
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 5. Cookies Урок і сесії</h2>
                <p>Що таке Cookies і з чим їх їдять, маніпулюючи Cookies засобами РНР, Що таке сесії РНР і як вони працюють, Робимо авторизацію на сайті, Резюме, Домашнє завдання. Растрове зображення, Розмір зображення, Дозвіл, Зміна розміру зображення. Розмір Команда Image, Зміна розміру полотна. Команда Canvas Size, Повороти і отзеркаливание картинки. Команди Поворот зображення, Інструмент ручного кадрування Crop Tool, Як комп'ютер ставить яскравість, Глибина кольору, Гістограма, Аналіз зображення, Криві (криві) - інтерфейс і принципи роботи, Установка білої і чорної точок, Колір, як відчуття спостерігача, Колірний обхват, адитивності ( RGB) і субтрактивна (CMYK) колірні моделі, Кольоровий круг, Вимірювальні інструменти: Піпетка (піпетка) і палітра Info, Завдання кольору в палітрі Color Picker, Канали зображення, палітра канали, Установка колірного балансу інструментом Curves, Автоматичні корекції і область їх застосування, Аналоги роботи з експозицією: Витримка і Photo Filter</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    6
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 6. Робота з файлами</h2>
                <p>Особливості роботи з файлами в РНР, Два режими роботи з файлом, Функції для роботи з файлами, Журнал відвідувань сайту, Завантаження файлів на сервер, Функції для роботи з каталогами, Отримання списку файлів і підпапок в каталогах, Резюме, Домашнє завдання</p>
            </div>
        </div>
        <div class="cModule">
            <div class="courseModuleNumber">
                <div class="cModuleNumber">
                    7
                </div>
            </div>
            <div class="courseModuleInfo">
                <h2>Модуль 7. Урок Робота з базою даних</h2>
                <p>Для чого потрібна база даних, Відмінність БД від СУБД, Реляційна база даних, Мова SQL Вставка рядків, Видалення рядків, Зміна рядків, Вибірка рядків, Засоби для роботи з РНР MySQL, Резюме, Домашнє завдання</p>
            </div>
        </div>
    </div>
</div>