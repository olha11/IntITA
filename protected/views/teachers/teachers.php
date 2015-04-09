
<?php
/**
 * Created by PhpStorm.
 * User: Wizlight
 * Date: 04.03.2015
 * Time: 12:25
 */
?>
<!-- teachers style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/teachers.css" />
<!-- teachers style -->
<!-- BD -))) -->
<?php
$this->pageTitle = 'INTITA';
$post=TeachersTemp::model()->findAll();
?>
<!-- BD -))) -->

<div class="subNavBlockTeachers">
    <?php
    $this->breadcrumbs=array(
        Yii::t('breadcrumbs', 'Teachers'),
    );
    ?>
</div>

<div class='teachersList'>
    <div class="titleTeachers">
        <h1><?php echo Yii::t('teachers', 'Our teachers'); ?></h1>
    </div>
    <div class="leftTeacher">
        <?php
        $i=0;
        foreach ($post as $teacherValue) {
            $i++;
            if ($i % 2 <> 0) {
                ?>
                <div class="teacherBlock">
                    <table>
                        <tr>
                            <td class="profileTeacher" >
                                <img class='teacherAvatar' src="<?php echo Yii::app()->request->baseUrl.$teacherValue->foto_url ?>"/>
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', 'personal page'); ?> &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    <?php echo Yii::t('teachers', 'Read courses:'); ?>
                                </p>
                                <div class="teacherCourses">
                                    <ul>
                                        <?php
                                        $coursesArray=explode(";", $teacherValue->subjects);
                                        for ($j = 0; $j < count($coursesArray); $j++)
                                        {
                                            ?>
                                            <li><a href="#"><?php echo $coursesArray[$j].";";?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="aboutMore">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', 'Read more'); ?> &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#"><?php echo Yii::t('teachers', 'Reviews'); ?> &#187;</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="rightTeacher">
        <div class="ifYouTeachers">
<table>
    <tr>
        <td valign="top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher123.png"/></td>
        <td valign="center"><div id="formTeacher3">Якщо ви професійний ІТ-шник і бажаєте викладати окремі ІТ курси чи модулі і співпрацювати
            в нами в напрямку підготовки програмістів, напишіть нам листа.</div></td>
        </tr>
    </table>
        <form method="post" action="#">
                <label id="formTeacher" for="name" style="margin-left: 50px">Ім'я</label>
                <input class="formTeacher1" required type="text" name="firstname">
                <br>  <br>
                <label id="formTeacher" for="name" style="margin-left: 8px">Прізвище</label>
                <input class="formTeacher1" required type="text" name="lastname">
                <br> <br>
                <label id="formTeacher" for="name" style="margin-left: 52px">Вік</label>
                <input class="formTeacher1" required type="text" name="yearname">
                <br> <br>
                <label id="formTeacher" for="name" style="margin-left: 30px">Освіта</label>
                <input class="formTeacher1" required type="text" name="educationname">
                <br> <br>
                <label id="formTeacher" for="name" style="margin-left: 15px">Телефон</label>
                <input class="formTeacher1" required type="text" name="phonename">
                <br> <br>
            <table>
                <tr>
                    <td>
                <label id="formTeacher" for="text">Які курси <br> Ви готові <br> викладати</label>
                    </td>
                    <td>
                <textarea class="formTeacher1" id="formTeacher2" required type="text" name="textname"></textarea>
                    </td>
                </tr>
            </table>
            <ul class="actions">
                <input id="send_btn" type="submit" value="Отправить" />
            </ul>
            </form>
        </div>
        <?php
        $i=0;
        foreach ($post as $teacherValue) {
            $i++;
            if ($i % 2 == 0) {
                ?>

                <div class="teacherBlock">
                    <table>
                        <tr>
                            <td class="profileTeacher" >
                                <img class='teacherAvatar' src="<?php echo Yii::app()->request->baseUrl.$teacherValue->foto_url ?>"/>
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', 'personal page'); ?> &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    <?php echo Yii::t('teachers', 'Read courses:'); ?>
                                </p>
                                <div class="teacherCourses">
                                    <ul>
                                        <?php
                                        $coursesArray=explode(";", $teacherValue->subjects);
                                        for ($j = 0; $j < count($coursesArray); $j++)
                                        {
                                            ?>
                                            <li><a href="#"><?php echo $coursesArray[$j].";";?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="aboutMore">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', 'Read more'); ?> &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#"><?php echo Yii::t('teachers', 'Reviews'); ?> &#187;</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
</div>
