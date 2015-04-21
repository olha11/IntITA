<!-- studprofile style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/studProfile.css" />
<!-- studprofile style -->
<!-- uploadInfo, jQuery -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/uploadInfo.js"></script>
<!-- uploadInfo, jQuery -->
<?php
/* @var $this StudentregController */
/* @var $model studentreg */
/* @var $form CActiveForm */
?>
<?php
$this->pageTitle = 'INTITA';
$post=StudentReg::model()->findByPk(Yii::app()->user->id);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/jquery.inputmask.extensions.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/jquery.inputmask.numeric.extensions.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/jquery.inputmask.custom.extensions.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/inputmask/mask.js"></script>
<div class="formStudProfNav">
    <?php
    $this->breadcrumbs=array(
        Yii::t('breadcrumbs', 'Profile')=>Yii::app()->request->baseUrl.'/studentreg/profile',Yii::t('breadcrumbs', 'Edit profile')
    );
    ?>

</div>
<div class="formStudProf">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'studentreg-form',
        'action'=> Yii::app()->createUrl('studentreg/rewrite'),
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

        <div class="row">
            <?php echo $form->label($model,'firstName'); ?>
            <?php echo $form->textField($model,'firstName',array('value'=>$post->firstName,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'firstName'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'secondName'); ?>
            <?php echo $form->textField($model,'secondName',array('value'=>$post->secondName,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'secondName'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'nickname'); ?>
            <?php echo $form->textField($model,'nickname',array('value'=>$post->nickname,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'nickname'); ?></span>
        </div>
        <div class="rowDate">
            <?php echo $form->label($model,'birthday'); ?>
            <?php echo $form->textField($model,'birthday',array('value'=>$post->birthday, 'class'=>'date','maxlength'=>11, 'placeholder'=>'введіть в форматі дд/мм/рррр')); ?>
            <span><?php echo $form->error($model,'birthday'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->labelEx($model,'phone'); ?>
            <?php echo $form->textField($model,'phone',array('value'=>$post->phone,'class'=>'phone','maxlength'=>15)); ?>
            <span><?php echo $form->error($model,'phone'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'address'); ?>
            <?php echo $form->textField($model,'address',array('value'=>$post->address,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'address'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'education'); ?>
            <?php echo $form->textField($model,'education',array('value'=>$post->education,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'education'); ?></span>
        </div>
        <div class="rowRadioButton" id="rowEducForm">
            <?php $model->educform = $post::getEdForm($post->educform);?>
            <?php echo $form->labelEx($model,'educform'); ?>
            <div class="radiolabel">
                <?php echo $form->checkBoxList($model,'educform',array('Онлайн'=>'online','Офлайн'=>'offline'), array('separator'=>' '));?>
            </div>
        </div>
        <div class="row">
            <?php echo $form->label($model,'aboutMy'); ?>
            <?php echo $form->textArea($model,'aboutMy',array('value'=>$post->aboutMy)); ?>
            <?php echo $form->error($model,'aboutMy'); ?>
        </div>
        <div class="row">
            <?php echo $form->label($model,'interests'); ?>
            <?php echo $form->textField($model,'interests',array('value'=>$post->interests,'maxlength'=>255, 'placeholder'=>'введіть Ваші інтереси через кому')); ?>
            <span><?php echo $form->error($model,'interests'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->textField($model,'aboutUs',array('placeholder'=>'звідки Ви про нас дізналися?', 'id'=>'aboutUs')); ?>
            <span><?php echo $form->error($model,'aboutUs'); ?></span>
        </div>
        <div class="row">
            <?php echo $form->label($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('value'=>$post->email,'maxlength'=>255)); ?>
            <span><?php echo $form->error($model,'email'); ?></span>
        </div>
        <div class="rowPass">
            <?php echo $form->label($model,'password'); ?>
            <span class="passEye"><?php echo $form->passwordField($model,'password',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <div class="row">
            <?php echo $form->label($model,'password_repeat'); ?>
            <span class="passEye"> <?php echo $form->passwordField($model,'password_repeat',array('maxlength'=>255)); ?></span>
            <?php echo $form->error($model,'password_repeat'); ?>
        </div>
        <div class="rowbuttons">
            <?php echo CHtml::submitButton('ЗБЕРЕГТИ', array('id' => "submitEdit")); ?>
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
        <img class='avatarimg' src="<?php echo Yii::app()->request->baseUrl.$post->avatar; ?>"/></br>
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
</div>