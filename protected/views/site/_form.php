<?php
$model=new StudentReg();
?>

<script src="//ulogin.ru/js/ulogin.js"></script>


<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css" />
<div style="position:relative;"><a name="form" style="position:absolute; top:-60px;"></a></div>
<div class="regFormBG" style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/formfon.jpg') repeat-x;background-position: center center">
	<div class="regFormBox">

		<p class="zagolovok"><?php echo Yii::t('regform','Ready to get started?'); ?></p>
		<p class="zagolovok2"><?php echo Yii::t('regform','Enter data into the form below'); ?></p>

		<div class="singInForm">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'studentreg-form',
				'action'=> Yii::app()->createUrl('site/submitForm'),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>
			<div class="rowemail">
				<?php $placeHolderEmail = Yii::t('regform','Email');?>
				<?php echo $form->textField($model,'email',array('class'=>'singInEmail','placeholder'=>$placeHolderEmail,'size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="rowpass">
				<?php $placeHolderPassword = Yii::t('regform','Password');?>
				<span class="passEye"> <?php echo $form->passwordField($model,'password',array('class'=>'singInPass','placeholder'=>$placeHolderPassword,'size'=>60,'maxlength'=>255)); ?></span>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="regCheckbox">
				<input type="checkbox" id="regCheckbox" value="" name="isExtended"/>
				<label for="regCheckbox"><?php echo Yii::t('regform','extended registration'); ?></label>
			</div>

			<div class="rowButtons">
				<?php $labelButton = Yii::t('regform','JOIN');?>
				<?php echo CHtml::submitButton($labelButton, array('id' => "singInButton")); ?>
			</div>


			<div class="linesingInForm"><?php echo Yii::t('regform','You can also enter by social networks:'); ?></div>
			<div class="image" >
				<div id="singInFormCarousel">
						<div id="uLogin" x-ulogin-params="display=buttons;fields=first_name,last_name;
								redirect_uri=;callback=ucall">
							<ul id="uLoginImages">
								<li><img class="facebook" x-ulogin-button = "facebook"/></li>								
								<li><img class="googleplus" x-ulogin-button = "googleplus"/></li>
								<li><img class="linkedin" x-ulogin-button = "linkedin"/></li>								
								<li><img class="vkontakte" x-ulogin-button = "vkontakte"/></li>
								<li><img class="twitter" x-ulogin-button = "twitter"/></li>								
							</ul>
						</div>						
				</div>
			</div>

			<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div>
</div>