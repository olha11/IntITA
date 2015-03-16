<style type="text/css">
    .passEye .eye {
        background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/passEye.png') no-repeat left 2px;
    }
    .passEye .openEye {
        background-position:left bottom;
    }
    .formStudProf input[type="submit"]{
        background:#4b75a4;
        background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/pointersmall.png');
        background-repeat: no-repeat;
        background-position: 140px 50%;
    }
    .formStudProf input[type="submit"]:hover {
        background: #454545;
        background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/pointersmall.png');
        background-repeat: no-repeat;
        background-position: 140px 50%;
        cursor: pointer;
    }
</style>
<?php
/* @var $this StudentRegController */
/* @var $model StudentReg */
/* @var $regExtended Regextended*/
/* @var $form CActiveForm */

?>

<!--Role-->
<script type="text/javascript">
    $(document).ready(function(){
        $('.radiolabelRole input[type="radio"]').click(function(){
            var roles=$(this).val();
            if(roles=='1'){
                document.getElementById('rowEducForm').style.display='none';
            } else {
                document.getElementById('rowEducForm').style.display='block';
            }
        });
    });
</script>
<!--Role-->


<div class="formStudProfNav">
    <div class="regLinks">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">Головна</a> &#187; <a href="#">Реєстрація</a>
    </div>
</div>
<div class="formStudProf">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'studentreg-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>
    <div class="studProf">
        <table class="titleProfile">
            <tr>
                <td>
                    <h2>Персональні дані</h2>
                </td>
            </tr>
        </table>

        <div class="rowRadioButton">
            <?php $model->role =0; ?>
            <?php echo $form->labelEx($model,'role'); ?>
            <div class="radiolabelRole">
                <?php echo $form->radioButtonList($model,'role',array(0=>'Студент',1=>'Викладач'), array('separator'=>' '));?>
            </div>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model,'firstName'); ?>
            <?php echo $form->textField($model,'firstName',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'firstName'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'secondName'); ?>
            <?php echo $form->textField($model,'secondName',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'secondName'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'nickname'); ?>
            <?php echo $form->textField($model,'nickname',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'nickname'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'birthday'); ?>
            <?php echo $form->textField($model,'birthday',array('maxlength'=>11, 'placeholder'=>'введіть в форматі дд.мм.рррр')); ?>
            <span><?php echo $form->error($model,'birthday'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?>
            <?php echo $form->textField($model,'phone',array('maxlength'=>15)); ?>
            <span><?php echo $form->error($model,'phone'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'address'); ?>
            <?php echo $form->textField($model,'address',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'address'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'education'); ?>
            <?php echo $form->textField($model,'education',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'education'); ?></span>
        </div>
        <div class="rowRadioButton" id="rowEducForm">
            <?php $model->educform ='0'; ?>
            <?php echo $form->labelEx($model,'educform'); ?>
            <div class="radiolabel">
                <?php echo $form->checkBoxList($model,'educform',array(0=>'online',1=>'offline'), array('separator'=>' '));?>
            </div>
        </div>
        <div class="row">
            <?php echo $form->label($model,'aboutMy'); ?>
            <?php echo $form->textArea($model,'aboutMy'); ?>
            <?php echo $form->error($model,'aboutMy'); ?>
        </div>
        <div class="row">
            <?php echo $form->label($model,'interests'); ?>
            <?php echo $form->textField($model,'interests',array('maxlength'=>255, 'placeholder'=>'введіть Ваші інтереси через кому')); ?>
            <span><?php echo $form->error($model,'interests'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'aboutUs'); ?>
            <?php echo $form->textField($model,'aboutUs'); ?>
            <span><?php echo $form->error($model,'aboutUs'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'email'); ?></span>
        </div>
        <div class="rowPass">
            <?php echo $form->labelEx($model,'password'); ?>
            <span class="passEye"><?php echo $form->passwordField($model,'password',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model,'password_repeat'); ?>
            <span class="passEye">  <?php echo $form->passwordField($model,'password_repeat',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password_repeat'); ?>
        </div>
        <div class="rowbuttons">
            <?php echo CHtml::submitButton('ВІДПРАВИТИ', array('id' => "submit")); ?>

        </div>
        <?php if(Yii::app()->user->hasFlash('message')):
            echo Yii::app()->user->getFlash('message');
        endif; ?>
    </div>
    <div class="studPhoto">
        <table class="titleProfileAv">
            <tr>
                <td>
                    <h2>Завантажити фото профілю</h2>
                </td>
            </tr>
        </table>

        <img class='avatarimg' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1id.jpg"/></br>
        <div class="fileform">
            <input class="avatar" type="button" value="ВИБЕРІТЬ ФАЙЛ">
            <input tabindex="-1" type="file" name="upload" class="chooseAvatar" onchange="getName(this.value);" accept="image/jpeg">
            <input tabindex="-1" class="uploadAvatar" type="submit">
        </div>
        <div id="avatarHelp">Розмір фото до 512кб</div>
        <div id="avatarInfo">Файл не вибрано...</div>
        <div class="avatarError">
            <?php if(Yii::app()->user->hasFlash('avatarmessage')):
                echo Yii::app()->user->getFlash('avatarmessage');
            endif; ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->


