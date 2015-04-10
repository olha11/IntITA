<?php
/**
 * Created by PhpStorm.
 * User: Wizlight
 * Date: 15.03.2015
 * Time: 18:08
 */
?>
<!-- course style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/course.css" />
<!-- course style -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/readmore/readmore.js"></script>
<!-- Spoiler -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/spoilerPrice.js"></script>
<!-- Spoiler -->
<!-- BD -))) -->
<?php
$post=Course::model()->findByPk(1);
?>
<?php
$this->breadcrumbs=array(
    Yii::t('breadcrumbs', 'Courses')=>Yii::app()->request->baseUrl."/courses",'Програмування для чайників',
);
?>

<div class="courseBlock">
    <div class="courseTitle">
        <h1><?php echo $post->course_name;?></h1>
    </div>
    <div class="courseShortInfo">
        <img class="courseImg" style="display: inline-block" src="<?php echo Yii::app()->request->baseUrl.$post->course_img ?>" />
        <div class="courseShortInfoTable">
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
                            for ($j=0; $j<4; $j++)
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
                        <span class="colorGrey"><b><?php echo $post->course_duration_hours;?></b><?php $post::getHoursTermination($post->course_duration_hours);?> (Орієнтовно 10 міс., 15 год/тиждень)</span>
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
                        <table>
                            <tr>
                                <td>
                                    <span class="colorGrey"><b><?php echo number_format($post->course_price, 0, ',', ' ');?></b> грн</span>
                                </td>
                                <td>
                                    <span class="spoilerLinks"><span class="spoilerClick">За весь курс </span><span class="spoilerTriangle">&#9660;</span></span>
                                    <div class="spoilerBody">
                                        <table>
                                            <tr>
                                                <td>
                                                    <span>по місяцях:</span>
                                                </td>
                                                <td>
                                                    <span><b>500</b> грн</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>кредит на 24 міс.: </span>
                                                </td>
                                                <td>
                                                    <span><b>600</b> грн</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>кредит на 36 міс.: </span>
                                                </td>
                                                <td>
                                                    <span><b>700</b> грн</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="colorP">Середня оцінка: </span>
                    </td>
                    <td>
                              <span class="colorGrey" style="display: block">програма: <b><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/></b></span>
                              <span class="colorGrey">викладачі: <b>4,5/5</b></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="colorP">Знижка: </span>
                    </td>
                    <td>
                        <span class="colorGrey"><b>10%</b></span>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="courseInfo">
        <ul>
            <p class="subCourseInfo"><b>Для кого:</b></p>
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
        <ul>
            <p class="subCourseInfo"><b>Чому Ви навчитеся?</b></p>
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
        <ul>
            <p class="subCourseInfo"><b>Що Ви отримаєте?</b></p>
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
    </div>

    <div class="courseTeachers">
        <h2>Викладачі</h2>
        <article>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                     <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher4.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сірий Олександр</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher4.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сірий Олександр</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher4.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сірий Олександр</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="courseTeacher">
                <div class="courseTeacherImg">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher1.jpg" />
                    </a>
                </div>
                <div class="courseTeacherInfo">
                    <h3><a href="<?php echo Yii::app()->request->baseUrl.'/teacherprofile'?>">Сіра Олександра</a></h3>
                    <table class="courseTeacherDetail">
                        <tr>
                            <td>
                                <span class="colorP">Модуль 1: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 2: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Ява скрипт та Суматра;</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="colorP">Модуль 3: </span><span class="colorGrey"><a href="<?php echo Yii::app()->request->baseUrl.'/module'?>">Програмування PHP;</a></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
    </div>

    <script>
        $('article').readmore({
            maxHeight: 360,
            moreLink: '<span><span class="spoiler">Всі викладачі</span> <span class="spoilerTriangle"> &#9660;</span></span>',
            lessLink: '<span><span class="spoiler">Згорнути</span> <span class="spoilerTriangle"> &#9650;</span></span>'
        });
    </script>

    <div class="courseModules">
        <h2>Модулі</h2>
        <div class="cModule">
            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 1. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Основи PHP</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 2. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Семантичне ядро сайту</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 3. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Зовнішні ресурси в просуванні</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey"">Модуль 4. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Запити HTTP, URL параметри і форми HTML котрі допомагають справжньому програмісту</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 5. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Cookies Урок і сесії</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 6. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Робота з файлами</span></a>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 7. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Урок Робота з базою даних</span></a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <span class="colorGrey">Модуль 11. </span>
                    </td>
                    <td>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/module"><span class="colorP">Урок Робота з базою даних</span></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>