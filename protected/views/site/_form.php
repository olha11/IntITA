<?php
$model=new StudentReg();
?>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css" />
<div style="position:relative;"><a name="form" style="position:absolute; top:-60px;"></a></div>
<div class="regFormBG" style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/formfon.jpg') repeat-x;background-position: center center">
	<div class="regFormBox">

		<p class="zagolovok"><?php echo Yii::t('regform','Ready to get started?'); ?></p>
		<p class="zagolovok2"><?php echo Yii::t('regform','Enter data into the form below'); ?></p>

		<div class="singInForm">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'studentreg-form',
				'action'=> Yii::app()->createUrl('site/login'),
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
				<div style="color:red">
					<?php if(Yii::app()->user->hasFlash('forminfo')):
						echo Yii::app()->user->getFlash('forminfo');
					endif; ?>
				</div>
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
				<img name="networking" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/networking.png" width="410" height="50" border="0" id="networking" usemap="#m_networking" alt="" />
				<map name="m_networking" id="m_networking">
					<area shape="circle" coords="354,26, 20" href="javascript:" title="instagram" />
					<area shape="circle" coords="309,26, 21" href="javascript:" title="Rubka" />
					<area shape="circle" coords="262,27, 20" href="javascript:" title="Вконтакте" />
					<area shape="circle" coords="214,26, 20" href="javascript:" title="Однокласники" />
					<area shape="circle" coords="167,27, 20" href="javascript:" title="YouTube" />
					<area shape="circle" coords="121,26, 21" href="javascript:" title="Google +" />
					<area shape="circle" coords="74,26, 20" href="javascript:" title="facebook" />
					<area shape="circle" coords="27,25, 21" href="javascript:" title="twitter" />
				</map>
			</div>

			<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div>
</div>