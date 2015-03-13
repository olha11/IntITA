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

<div class="subNavBlock">
    <div class="subLinks">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php"><?php echo $page['BCmain']?></a> &#187; <a href="#"><?php echo $page['BCteachers']?></a>
    </div>
</div>

<div class='teachersList'>

    <div class="titleTeachers">
                <h1><?php echo $page['header']?></h1>
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
                        <td>
                            <img class='teacherAvatar' src="<?php echo Yii::app()->request->baseUrl.$teacherValue->foto_url ?>"/>
                        </td>
                        <td>
                            <h2><?php echo $teacherValue->last_name ?></h2>

                            <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                            <?php echo $teacherValue->profile_text ?>
                            <p>
                                <?php echo $page['courses']?>
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
                            <div class="aboutMore">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo $page['link1']?> &#187;</a></br>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/><a href="#"><?php echo $page['link2']?> &#187;</a>
                            </div>
                        </td>
                    </tr>
                </table>
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
                        <td>
                            <img class='teacherAvatar' src="<?php echo Yii::app()->request->baseUrl.$teacherValue->foto_url ?>"/>
                        </td>
                        <td>
                            <h2><?php echo $teacherValue->last_name ?></h2>

                            <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                            <?php echo $teacherValue->profile_text ?>
                            <p>
                                <?php echo $page['courses']?>
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
                            <div class="aboutMore">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="#"><?php echo $page['link1']?> &#187;</a></br>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/><a href="#"><?php echo $page['link2']?> &#187;</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
        }
    }
    ?>
    </div>
</div>