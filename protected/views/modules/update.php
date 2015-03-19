<?php
/* @var $this ModulesController */
/* @var $model Modules */

$this->breadcrumbs=array(
	'Modules'=>array('index'),
	$model->module_ID=>array('view','id'=>$model->module_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modules', 'url'=>array('index')),
	array('label'=>'Create Modules', 'url'=>array('create')),
	array('label'=>'View Modules', 'url'=>array('view', 'id'=>$model->module_ID)),
	array('label'=>'Manage Modules', 'url'=>array('admin')),
);
?>

<h1>Update Modules <?php echo $model->module_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>