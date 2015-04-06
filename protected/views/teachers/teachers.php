
<?php
/* $this*/
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
        Yii::t('breadcrumbs', '0052'),
    );
    ?>
    <div class="ifYouTeachers">
        <?php Yii::t('teachers', '0060');?>
    </div>
</div>
<div class='teachersList'>
    <div class="titleTeachers">
        <h1><?php echo Yii::t('teachers', '0058'); ?></h1>
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
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', '0059'); ?> &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    <?php echo Yii::t('teachers', '0061'); ?>
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
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', '0062'); ?> &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#"><?php echo Yii::t('teachers', '0063'); ?> &#187;</a>
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
                                <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', '0059'); ?> &#187;</a>
                            </td>
                            <td>
                                <h2><?php echo $teacherValue->last_name ?></h2>
                                <h2><?php echo $teacherValue->first_name ?> <?php echo $teacherValue->middle_name ?></h2>
                                <?php echo $teacherValue->profile_text ?>
                                <p>
                                    <?php echo Yii::t('teachers', '0061'); ?>
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
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/readMore.png"/> <a href="<?php echo Yii::app()->request->baseUrl.$teacherValue->readMoreLink; ?>"><?php echo Yii::t('teachers', '0062'); ?> &#187;</a></br>
                        <?php
                        for ($k=0; $k<10; $k++)
                        {
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/starFull.png"/>
                        <?php
                        }
                        ?>
                        <a href="#"><?php echo Yii::t('teachers', '0063'); ?> &#187;</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
</div>