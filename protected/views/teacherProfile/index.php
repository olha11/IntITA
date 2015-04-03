<!-- teacherProfile style -->
<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'uk'}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/teacherProfile.css" />
<!-- steps style -->
<?php
$this->pageTitle = 'INTITA';
$this->breadcrumbs=array(
    Yii::t('breadcrumbs', 'Teacher profile'),
);
$model=new TeacherProfile;
$model->mainImage=Yii::app()->request->baseUrl.'/css/images/teacher1Image.png';
$model->firstName='Сіра';
$model->lastName='Олександра Василівна';
$model->arraySectionText=array('Програмування ПХП;','Java для IOS;');
$tmp = Yii::t('teacher', 'About teacher:');
$tmp2 = Yii::t('teachers', 'Read courses:');
$model->aboutTextMain="
<span class='TeacherProfiletitles'>$tmp</span><p>
<p>Народилася і виросла в Сакраменто, у 18 років вона переїхала до Лос-Анджелеса й незабаром стала вкладачем. У 2007, 2008 і 2010 рр.. вона виграла кілька номінацій премії AVN Awards (також була названа «Найкращою програмісткою» у 2007 році за версією XRCO). Паралельно з вікладауцью роботою та роботою програміста в Саша Грей грає головну роль в тестванні Інтернету.
<p>Марина Енн Генціс народилася у родині механіка. Її батько мав грецьке походження. Батьки дівчинки розлучилися коли їй було 5 років, надалі її виховувала мати, яка вступила в повторний шлюб у 2000 роц. Марина не ладнала з вітчимом, і, коли їй виповнилося 16 років, дівчина повідомила матері, що збирається покинути будинок. Достеменно невідомо, втекла вона з свого будинку або ж її відпустила мати. Сама Олександра пізніше зізнавалася, що в той час робила все те, що не подобалося її батькам і що вони їй забороняли.
<p>Главный бухгалтер акционерного предприятия, специализирующегося на:
<p><ul><li> оказании полезных услуг горизонтального характера;</li>
<li> торговле, внешнеэкономической и внутреннеэкономической;</li>
<li>позитивное обучение швейного мастерства;</li></ul>
<p>$tmp2";
$model->arrayCourseText=array(
    ' • кройка и шитье сроков давности;'=>'https://www.google.com.ua/',
    ' • программування самоубийств;'=>'https://www.google.com.ua/'
);
$model->aboutTextSecond="
<p> Олександра Сіра виконала головну роль у фільмі оскароносного режисера Стівена Содерберга «Дівчина за викликом»[27][28]. Олександра грає дівчину на ім'я Челсі, яка надає ескорт послуги заможним людям. Содерберг взяв її на роль після того, як прочитав статтю про неї у журналі Los Angeles, коментуючи це так: «She's kind of a new breed, I think. She doesn't really fit the typical mold of someone who goes into the adult film business. … I'd never heard anybody talk about the business the way that she talked about it». Журналіст Скотт Маколей каже, що можливо Грей вибрала саме цю роль через свій інтерес до незалежних режисерів, таких як Жан-Люк Годар, Хармоні Корін, Девід Гордон Грін, Мікеланджело Антоніоні, Аньєс Варда та Вільям Клейн.
<p>Коли Олександра готувалася до ролі у «Дівчині за викликом», Содерберг попросив її подивитися «Жити своїм життям» і «Божевільний П'єро»[29]. У фільмі «Жити своїм життям» піднімаються проблеми проституції, звідки Грей могла взяти щось і для своєї ролі, в той час як у «Божевільному П'єро» показані відносини, схожі на ті, що відбуваються між Челсі, її хлопцем і клієнтами.';";
?>
<div class="TeacherProfilemainBlock">
    <div class="TeacherProfileblock1">
        <img src="<?php echo $model->mainImage; ?>">
        <div class="TeacherProfiletextBlock">
<span class="TeacherProfilename">
<?php echo $model->firstName; ?>
    <p>
        <?php echo $model->lastName; ?>
    </p>
</span>
            <div class="TeacherProfileseparator"></div>
<span class="TeacherProfiletitles">
<?php echo Yii::t('teacher', 'Chapter:') ?>
</span>
            <div class="TeacherProfilesectionText">
                <?php
                foreach ($model->arraySectionText as $val)
                {
                    echo $val; ?><p></p><?php
                }
                ?>
            </div>
            <?php echo $model->aboutTextMain; ?>
            <div class="TeacherProfilecourse">
                <?php
                foreach ($model->arrayCourseText as $linkText=>$linkAdress)
                {
                    ?>
                    <a href="<?php echo $linkAdress; ?>">
                        <?php echo $linkText; ?>
                    </a> <p></p> <?php
                }
                ?>
            </div>
            <?php echo $model->aboutTextSecond; ?>
        </div>
    </div>
    <div class="TeacherProfileblock2">
    </div>
</div>
</body>
</html>
