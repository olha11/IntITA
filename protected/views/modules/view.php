<?php
/* @var $this ModulesController */
/* @var $model Modules */

$this->breadcrumbs=array(
	'Modules'=>array('index'),
	$model->module_ID,
);

$this->menu=array(
	array('label'=>'List Modules', 'url'=>array('index')),
	array('label'=>'Create Modules', 'url'=>array('create')),
	array('label'=>'Update Modules', 'url'=>array('update', 'id'=>$model->module_ID)),
	array('label'=>'Delete Modules', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->module_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modules', 'url'=>array('admin')),
);
?>

<h1>View Modules #<?php echo $model->module_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'module_ID',
		'module_name',
		'module_duration_hours',
		'module_duration_days',
		'lesson_count',
		'module_price',
		'for_whom',
		'what_you_learn',
		'what_you_get',
		'module_img',
		'about_module',
	),
)); ?>
