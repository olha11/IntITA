<!-- courses style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/courses.css" />

<script type="text/javascript">
    function wrt(x)
    {
        document.getElementById("razv").innerHTML=x;
        if (x!="")
        {document.getElementById("sver").innerHTML="Приховати";}
        else
        {document.getElementById("sver").innerHTML=""; document.getElementById("razv").innerHTML="Далі";}
    }
</script>
<script>
    function xexx()
    {
        document.getElementById('xex').style.display='none'
    }
</script>

<?php
$this->pageTitle = 'INTITA';
$this->breadcrumbs=array(
    Yii::t('breadcrumbs', 'Courses'),
);
class Course
{
    public $courseLang="Мова курсу:";
    public $courseImage;
    public $courseName;
    public $courseLevel;
    public $courseNumberofModules;
    public $courseReview;
    public $courseMaxNumberofModules=5;
    public $coursesHeader='Наші курси';
    public $courseLevelTitle='Рівень курсу:';
    public $coursesTextHeader= 'Концепція підготовки';
    public $coursesTextFooter="<p><span id='courseText2'>Спочатку навчання створюється стійкий фундамент для підготовки програмістів:
		необхідні знання елементарної математики, будови комп’ютера і основ інформатики.</span>";
    public $coursesTextFooter2="<p><span id='courseText2'>Потім вивчаються основні принципи програмування на базі класичних комп'ютерних наук і методологій: алгоритмічна мова;
		лементи вищої та дискретної математики і комбінаторики; структури даних, розробка і аналіз алгоритмів.</span>
		<p><span id='courseText2'>
		Після чого формується база для переходу до сучасних технологій програмування: об’єктно-орієнтоване програмування; проектування баз даних.</span>
		<p><span id='courseText2'>Завершення процесу підготовки шляхом конкретного застосування отриманих знань на реальних проектах із засвоєнням сучасних методів і технологій,
		які використовуються в ІТ індустрії компаніями.</span>";
    function Course ( $courseImage,$courseName,$courseLevel,$courseNumberofModules,$courseReview)
    {
        $this->courseImage=$courseImage;
        $this->courseName=$courseName;
        $this->courseLevel=$courseLevel;
        $this->courseNumberofModules=$courseNumberofModules;
        $this->courseReview=$courseReview;
    }
}

$course1=new Course (Yii::app()->request->baseUrl.'/css/images/course1Image.png','Інтернет програміст (РНР)','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course2=new Course (Yii::app()->request->baseUrl.'/css/images/course2Image.png','програміст (Java Script)','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course3=new Course (Yii::app()->request->baseUrl.'/css/images/course3Image.png','Програміст (Java)','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course4=new Course (Yii::app()->request->baseUrl.'/css/images/course4Image.png','Програміст (C#)','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course5=new Course (Yii::app()->request->baseUrl.'/css/images/course5Image.png','Програміст (С++)','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course11=new Course (Yii::app()->request->baseUrl.'/css/images/course11Image.png','Тестувальник (QA) ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$coursesArray1=array($course1,$course2,$course3,$course4,$course5,$course11);

$course7=new Course (Yii::app()->request->baseUrl.'/css/images/course7Image.png','Основи програмування','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course8=new Course (Yii::app()->request->baseUrl.'/css/images/course8Image.png','Основи нейролінгвістичного програмування','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course9=new Course (Yii::app()->request->baseUrl.'/css/images/course9Image.png','Основи нейролінгвістичного програмування ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
$course10=new Course (Yii::app()->request->baseUrl.'/css/images/course10Image.png','Основи нейролінгвістичного програмування ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');

$coursesArray2=array($course7,$course8,$course9,$course10);

$courseDisableImage=Yii::app()->request->baseUrl.'/css/images/ratIco0.png';
$courseEnableImage= Yii::app()->request->baseUrl.'/css/images/ratIco1.png';

?>

<div id='coursesMainBox'>

    <h1><?php echo $course1->coursesHeader; ?></h1>

    <table>
        <tr>
            <td  valign="top"> <div class='sourse'><a href="#">Усі курси</a>&nbsp;(25)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Для початківців</a>&nbsp;(2)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Веб-дизайн</a>&nbsp;(1)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Під Android </a>&nbsp;(2)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Під Apple</a>&nbsp;(2)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Просунені курси</a>&nbsp;(12)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">UI/UIX</a>&nbsp;(1)</div></td>   <td><div class='sourse'>&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline2.png"/>&nbsp;&nbsp;</div></td>
            <td  valign="top"> <div class='sourse'><a href="#">Адміністрування</a>&nbsp;(1)</div></td>

        </tr>
    </table>



    <div class="coursesline1">
        <a id="coursesline1" href="#form"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/coursesline1.png"/></a>
    </div>



    <table>
        <tr><td  valign="top">
                <div id='coursesPart1'>


                    <?php
                    foreach ($coursesArray1 as $val)
                    {
                        ?>
                        <div class='courseBox'>
                            <img src='<?php echo $val->courseImage; ?>'>
                            <div class='courseName'> <a href="<?php echo Yii::app()->request->baseUrl; ?>/course"><?php
                                    echo $val->courseName; ?></a>
                            </div>
                            <div class="courseLevelBox">
                                <?php echo Yii::t('courses', 'Level:'); ?>

                                <span class="courseLevel">
			<?php echo $val->courseLevel; ?>
			</span>
                                <div class='courseLevelIndex'>
                                    <?php
                                    for ($i=0; $i<$val->courseNumberofModules; $i++)
                                    {
                                        ?><span class="courseLevelImage">
                                        <img src="<?php echo $courseEnableImage;?>">
                                        </span><?php
                                    }
                                    for ($i=0; $i<($val->courseMaxNumberofModules-$val->courseNumberofModules); $i++)
                                    {
                                        ?><span class="courseLevelImage">
                                        <img src="<?php echo $courseDisableImage;?>">
                                        </span><?php
                                    }
                                    ?>
                                </div>
                            </div>


                            <div class="courseStatus">
                                <p>Стан курсу: <span id="courseStatus1">доступний</span></p>
                            </div>





                            <div class="courseLang">
                                <?php echo Yii::t('courses', 'Language:'); ?>
                                <div id="coursesLang" class="down">
                                    <form action="" method="post" onsubmit="" name="fff">
                                        <button  formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'UA'));?>" id="ua" name="ua" onclick="changeLang(this)" class="selectedLang" style="padding-bottom: 0px;padding-top: 0px;height: 20px;" disabled>ua</button>

                                        <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'EN'));?>" id="en" name="en" onclick="changeLang(this)" style="padding-bottom: 0px;padding-top: 0px;height: 20px;">en</button>

                                        <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'RU'));?>" id="ru" name="ru" onclick="changeLang(this)" style="padding-bottom: 0px;padding-top: 0px;height: 20px;">ru</button>

                                    </form>
                                </div>
                            </div>
		<span class='courseText'><?php
            echo $val->courseReview;
            ?>
		</span>
                        </div> <?php
                    }
                    ?>

                </div></td>

            <td  >
                <div id='coursesPart2'>
                    <div class="bgBlue" id="xex">
                        <table>
                            <tr>
                                <td  valign="top">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/course99.png">
                                </td>
                                <td>
                                    <div id='coursesHeader'>
                                        <?php echo $course1->coursesTextHeader; ?>
                                    </div>

                                </td>
                                <td>
                                    <div id="xex" onclick='xexx("")'   style=" left: 39px;font-size: 24px; position: relative; top: -35px;  cursor: pointer; width: 15px;  ">x</div>
                                </td>
                            </tr>
                        </table>
                        <div class='courseBox2'>
                            <?php echo $course1->coursesTextFooter; ?>

                            <div id="razv" onclick='wrt("<p><span> Потім вивчаються основні принципи програмування на базі класичних компютерних наук і методологій алгоритмічна мова; eлементи вищої та дискретної математики і комбінаторики; структури даних, розробка і аналіз алгоритмів.<p>Після чого формується база для переходу до сучасних технологій програмування об’єктно-орієнтоване програмування; проектування баз даних.<p>Завершення процесу підготовки шляхом конкретного застосування отриманих знань на реальних проектах із засвоєнням сучасних методів і технологій,які використовуються в ІТ індустрії компаніями.</span>")'>
                                <br>
                                Далі
                            </div>
                            <br>
                            <div id="sver" onclick='wrt("");'></div> <br>
                        </div>
                    </div>


                    <?php
                    foreach ($coursesArray2 as $val)
                    {
                        ?>
                        <div class='courseBox'>
                            <img src='<?php echo $val->courseImage; ?>'>
                            <div class='courseName'><a id="disabled" href="<?php echo Yii::app()->request->baseUrl; ?>/?r=course"><?php
                                    echo $val->courseName; ?></a>
                            </div>
                            <div class="courseLevelBox2">
                                <?php echo $val->courseLevelTitle; ?>

                                <span class="courseLevel2">
			<?php echo $val->courseLevel; ?>
			</span>
                                <div class='courseLevelIndex'>
                                    <?php
                                    for ($i=0; $i<$val->courseNumberofModules; $i++)
                                    {
                                        ?><span class="courseLevelImage">
                                        <img src="<?php echo $courseEnableImage;?>">
                                        </span><?php
                                    }
                                    for ($i=0; $i<($val->courseMaxNumberofModules-$val->courseNumberofModules); $i++)
                                    {
                                        ?><span class="courseLevelImage">
                                        <img src="<?php echo $courseDisableImage;?>">
                                        </span><?php
                                    }
                                    ?>

                                </div>

                            </div>

                            <div class="courseStatus2">
                                <p>Стан курсу:<span id="courseStatus2"> розробляється </span></p>
                            </div>

                            <div class="courseLang2">
                                <?php echo $val->courseLang; ?>
                                <div id="coursesLang" class="down">
                                    <form  action="" method="post" onsubmit="" name="fff">
                                        <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'UA'));?>" id="ua" name="ua" onclick="changeLang(this)" class="selectedLang" disabled>ua</button>

                                        <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'EN'));?>" id="en" name="en" onclick="changeLang(this)">en</button>

                                        <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lang'=>'RU'));?>" id="ru" name="ru" onclick="changeLang(this)">ru</button>

                                    </form>
                                </div>
                            </div>

		<span class='courseText2'><?php
            echo $val->courseReview;
            ?>
		</span>
                        </div> <?php
                    }
                    ?>
                </div>
            </td>
        </tr>
    </table>
</div>




<! main box>

<script>
    function changeLang(n){
        for (var i=0; i< n.form.length; i++){
            if(n.form.elements[i].id !== n.id){
                console.log(n.form.elements[i].id);
                document.getElementById(n.form.elements[i].id).disabled = false;
                document.getElementById(n.form.elements[i].id).className = "";
            }
        }
    }
</script>
