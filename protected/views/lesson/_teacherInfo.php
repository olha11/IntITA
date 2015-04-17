<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 09.04.2015
 * Time: 15:34
 */

?>
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
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                            'id'=>'calendar',
                            'themeUrl'=>Yii::app()->request->baseUrl.'/css',
                            'cssFile'=>'jquery-ui.css',
                            'theme'=>'my',
                            'language'=>'ru',
                            'name'=>'datepicker-showButtonPanel',
                            'options'=>array(
                                'showAnim'=>'slideDown',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                'showButtonPanel'=>false,
                                'showOtherMonths'=>true,
                            ),
                            'htmlOptions'=>array(
                                'style'=>''
                            ),
                        ));
                        ?>
                        <a id="consultationCalendar">
                            <?php echo Yii::t('lecture','0079'); ?>
                        </a>
                    </p>
                </ul>
        </span>
    </div>
</div>

<script>
    $('#consultationCalendar').click(function() {
        $('#calendar').focus();
    });
</script>

