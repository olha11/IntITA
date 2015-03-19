<?php
/* @var $this ModulesController */
/* @var $model Modules */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'module_ID'); ?>
		<?php echo $form->textField($model,'module_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'module_name'); ?>
		<?php echo $form->textField($model,'module_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'module_duration_hours'); ?>
		<?php echo $form->textField($model,'module_duration_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'module_duration_days'); ?>
		<?php echo $form->textField($model,'module_duration_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lesson_count'); ?>
		<?php echo $form->textField($model,'lesson_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'module_price'); ?>
		<?php echo $form->textField($model,'module_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'for_whom'); ?>
		<?php echo $form->textArea($model,'for_whom',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'what_you_learn'); ?>
		<?php echo $form->textArea($model,'what_you_learn',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'what_you_get'); ?>
		<?php echo $form->textArea($model,'what_you_get',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'module_img'); ?>
		<?php echo $form->textField($model,'module_img',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_module'); ?>
		<?php echo $form->textArea($model,'about_module',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->