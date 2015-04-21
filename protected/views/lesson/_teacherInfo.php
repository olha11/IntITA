<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 09.04.2015
 * Time: 15:34
 */

?>
<?php
$user = new StudentReg();
$app = Yii::app();
?>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/bootstrap/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">

<div class="teacherBlock">
    <img src="<?php echo Yii::app()->request->baseUrl.$teacher['photo']; ?>">
    <a href="<?php echo Yii::app()->request->baseUrl.$teacher['readMoreLink']; ?>"><?php echo Yii::t('teachers','0059'); ?> &#187;</a>
        <span>
                <ul>
                    <li> <div class="teacherTitle">
                            <?php echo Yii::t('lecture','0077'); ?></div>
                    </li>
                    <li>
                        <?php echo $teacher['full_name'];?>
                    </li>
                    <li>
                        <?php echo $teacher['email']; ?>
                    </li>
                    <li>
                        <?php echo $teacher['tel']; ?>
                    </li>
                    <li>
                        <?php echo 'skype: '?><div id="teacherSkype"><?php echo $teacher['skype']; ?>
                        </div>
                    </li>
                    <p class="calendar">
                    <div class="input-append date form_datetime">
                        <input size="16" type="text" value="" readonly id="dateTimePicker">
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>
                        <a id="consultationCalendar">
                            <?php echo Yii::t('lecture','0079'); ?>
                        </a>
                    </p>
                </ul>
        </span>
    </div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.ua.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.ru.js"></script>

<script type="text/javascript">
    $('#consultationCalendar').click(function() {
        $('#dateTimePicker').focus();
    });

    $("#dateTimePicker").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        language: '<?php echo $app->session['lg']?>',
        weekStart: 1,
        autoclose: true,
        todayBtn: 0,
        todayHighlight: 1,
        startView: 2,
        minView: 0,
        forceParse: 0,
        minuteStep: 20,
    });
    $('#dateTimePicker').datetimepicker('setDaysOfWeekDisabled', [0,6]);
</script>


