<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Авторизація';

$this->breadcrumbs=array(
	'Авторизація',
);
?>

<h1>Login</h1>

<p>Для авторизації на сайті введіть логін і пароль:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля з <span class="required">*</span> обов'язкові!</p>

	<div class="row">
		<?php echo $form->labelEx($model,'userEmail'); ?>
		<?php echo $form->textField($model,'userEmail'); ?>
		<?php echo $form->error($model,'userEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userPassword'); ?>
		<?php echo $form->passwordField($model,'userPassword'); ?>
		<?php echo $form->error($model,'userPassword'); ?>
		<p class="hint">
			Порада: Ви можете увійти як <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('УВІЙТИ'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
