<?php
    $model=new StudentReg();
    $mainpage = new Mainpage();
?>

<script src="//ulogin.ru/js/ulogin.js"></script>

<!-- checkbox validation -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/checkValid.js"></script>
<!-- checkbox validation -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css" />
<div style="position:relative;"><a name="form" style="position:absolute; top:-60px;"></a></div>
<div class="regFormBG" >
	<div class="regFormBox">

		<p class="zagolovok"><?php echo Yii::t('regform','0009'); ?></p>
		<p class="zagolovok2"><?php echo Yii::t('regform','0010'); ?></p>

		<div class="signInForm">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'studentreg-form',
                'action' => array('site/rapidreg'),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
                'enableClientValidation'=>true,
                'enableAjaxValidation'=>true,
                'clientOptions'=>array('validateOnSubmit'=>true,'validateOnChange'=>false),
            )); ?>
			<div class="rowemail">
				<?php $placeHolderEmail = Yii::t('regform','0014');?>
				<?php echo $form->textField($model,'email',array('class'=>'signInEmail','placeholder'=>$placeHolderEmail,'size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'email',array('id'=>'emailErr')); ?>
			</div>

			<div class="rowpass">
				<?php $placeHolderPassword = Yii::t('regform','0015');?>
				<span class="passEye"> <?php echo $form->passwordField($model,'password',array('class'=>'signInPass','placeholder'=>$placeHolderPassword,'size'=>60,'maxlength'=>255)); ?></span>
				<?php echo $form->error($model,'password',array('id'=>'passErr')); ?>
                <div class="forminfo">
                    <?php if(Yii::app()->user->hasFlash('forminfo')):
                        echo Yii::app()->user->getFlash('forminfo');
                    endif; ?>
                </div>
			</div>

            <div class="regCheckboxW">
                <div class="regCheckbox">
                    <input type="checkbox" id="regCheckbox" value="" name="isExtended" onchange="extReg()"/>
                    <label for="regCheckbox"><?php echo Yii::t('regform','0011'); ?></label>
                </div>
            </div>

			<div class="rowButtons">
				<?php $labelButton = $mainpage->getButtonStart();?>
				<?php echo CHtml::submitButton($labelButton, array('id' => "signInButton")); ?>
			</div>

            <div class="linesignInForm"><?php echo $mainpage->getSocialText(); ?></div>

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