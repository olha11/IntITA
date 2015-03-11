<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userEmail'); ?>
		<?php echo $form->textField($model,'userEmail',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'userEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userPassword'); ?>
		<?php echo $form->textField($model,'userPassword',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'userPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userHash'); ?>
		<?php echo $form->textField($model,'userHash',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'userHash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userStatus'); ?>
		<?php echo $form->textField($model,'userStatus'); ?>
		<?php echo $form->error($model,'userStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->