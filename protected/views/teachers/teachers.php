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
$post=TeachersTemp::model()->findAll();
?>
<!-- BD -))) -->
<div class="subNavBlockTeachers">
    <?php
    $this->breadcrumbs=array(
        'Викладачі',
    );
    ?>
    <div class="ifYouTeachers">
        Якщо ви професійний ІТ-шник і бажаєте викладати окремі ІТ курси чи модулі і співпрацювати з нами в напрямку підготовки програмістів, напишіть нам листа.
    </div>
</div>
<div class='teachersList'>
    <div class="titleTeachers">
        <h1>Наші викладачі</h1>
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
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>">персональна сторінка &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    Ведет курсы:
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
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>">Читать полностью &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#">Відгуки &#187;</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <div class="rightTeacher">
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
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>">персональна сторінка &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    Ведет курсы:
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
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>">Читать полностью &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#">Відгуки &#187;</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
</div>