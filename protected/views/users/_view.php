<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userID), array('view', 'id'=>$data->userID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->userName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userEmail')); ?>:</b>
	<?php echo CHtml::encode($data->userEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userPassword')); ?>:</b>
	<?php echo CHtml::encode($data->userPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userHash')); ?>:</b>
	<?php echo CHtml::encode($data->userHash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userStatus')); ?>:</b>
	<?php echo CHtml::encode($data->userStatus); ?>
	<br />


</div>