<style>
    /* PassEye */
    .passEye {
        position:relative;display:inline-block;
    }
    .passEye input {
        padding-right:0px;
    }
    .passEye input::-ms-reveal, .passEye input::-ms-clear {
        display:none
    }
    .passEye .eye {
        position:absolute;
        right:10px;
        top:50%;
        margin-top:-4px;
        display:block;
        height:10px;
        width:18px;
        background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/passEye.png') no-repeat left 2px;
        cursor:pointer;
    }
    .passEye .openEye {
        background-position:left bottom;
    }
</style>
<?php
/* @var $this StudentRegController */
/* @var $model StudentReg */
/* @var $form CActiveForm */
?>

<?php
/* @var $this StudentregController */
/* @var $model studentreg */
/* @var $form CActiveForm */
?>
<div class="formStudProf">

    <div class="studProf">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'studentreg-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
        )); ?>
        <div class="titleProfile">
            <h3>Персональні дані</h3>
        </div>

        <div class="row">
            <?php echo $form->label($model,'firstName'); ?>
            <?php echo $form->textField($model,'firstName',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'firstName'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'secondName'); ?>
            <?php echo $form->textField($model,'secondName',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'secondName'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'middleName'); ?>
            <?php echo $form->textField($model,'middleName',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'middleName'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'login'); ?>
            <?php echo $form->textField($model,'login',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'login'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'birthday'); ?>
            <?php echo $form->textField($model,'birthday',array('maxlength'=>11)); ?>
            <span><?php echo $form->error($model,'birthday'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'education'); ?>
            <?php echo $form->textField($model,'education',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'education'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'aboutMyself'); ?>
            <?php echo $form->textArea($model,'aboutMyself'); ?>
            <span><?php echo $form->error($model,'aboutMyself'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'interests'); ?>
            <?php echo $form->textArea($model,'interests',array('rows'=>5)); ?>
            <span><?php echo $form->error($model,'interests'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'certificates'); ?>
            <?php echo $form->textField($model,'certificates',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'certificates'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?>
            <?php echo $form->textField($model,'phone',array('maxlength'=>15)); ?>
            <span><?php echo $form->error($model,'phone'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->label($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'email'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'address'); ?>
            <?php echo $form->textArea($model,'address'); ?>
            <span><?php echo $form->error($model,'address'); ?></span>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'note'); ?>
            <?php echo $form->textArea($model,'note'); ?>
            <span><?php echo $form->error($model,'note'); ?></span>
        </div>

        <div class="rowPass">
            <?php echo $form->label($model,'password'); ?>
            <span class="passEye"><?php echo $form->passwordField($model,'password',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <div class="row">
            <?php echo $form->label($model,'password_repeat'); ?>
            <span class="passEye">  <?php echo $form->passwordField($model,'password_repeat',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password_repeat'); ?>
        </div>
        <div class="row buttons">
            <?php echo CHtml::submitButton('ВІДПРАВИТИ />', array('id' => "submit")); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="studPhoto">
        <div class="titleProfile">
            <h3>Завантажити фото профілю</h3>
        </div>

        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1id.jpg"/>
        <form id="photoForm" action="/index.php?r=studentreg/uploadAvatar" method="post" enctype="multipart/form-data" style="display:none">
            <div class="fileform">
                <input type="file" name="upload" id="chooseAvatar" onchange="getName(this.value);" accept="image/jpeg">
                <input  id="uploadAvatar" type="submit"></br>
            </div>
        </form>
        <input class="avatar" type="submit" value="ВИБРАТИ">
        <div id="avatarInfo">Файл не вибрано...</div>
        <input class="uploadAvatar" type="submit" value="ЗАВАНТАЖИТИ">
    </div>
</div><!-- form -->


