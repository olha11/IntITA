<?php
/* @var $this ModulesController */
/* @var $data Modules */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->module_ID), array('view', 'id'=>$data->module_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_name')); ?>:</b>
	<?php echo CHtml::encode($data->module_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_duration_hours')); ?>:</b>
	<?php echo CHtml::encode($data->module_duration_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_duration_days')); ?>:</b>
	<?php echo CHtml::encode($data->module_duration_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesson_count')); ?>:</b>
	<?php echo CHtml::encode($data->lesson_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_price')); ?>:</b>
	<?php echo CHtml::encode($data->module_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('for_whom')); ?>:</b>
	<?php echo CHtml::encode($data->for_whom); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('what_you_learn')); ?>:</b>
	<?php echo CHtml::encode($data->what_you_learn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('what_you_get')); ?>:</b>
	<?php echo CHtml::encode($data->what_you_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_img')); ?>:</b>
	<?php echo CHtml::encode($data->module_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_module')); ?>:</b>
	<?php echo CHtml::encode($data->about_module); ?>
	<br />

	*/ ?>

</div>