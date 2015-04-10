<?php
    $model=new StudentReg();
?>

<script src="//ulogin.ru/js/ulogin.js"></script>

<!-- checkbox validation -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/checkValid.js"></script>
<!-- checkbox validation -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css" />
<div style="position:relative;"><a name="form" style="position:absolute; top:-60px;"></a></div>
<div class="regFormBG" >
	<div class="regFormBox">

		<p class="zagolovok"><?php echo Yii::t('regform','Ready to get started?'); ?></p>
		<p class="zagolovok2"><?php echo Yii::t('regform','Enter data into the form below'); ?></p>

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
				<?php $placeHolderEmail = Yii::t('regform','Email');?>
				<?php echo $form->textField($model,'email',array('class'=>'signInEmail','placeholder'=>$placeHolderEmail,'size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'email',array('id'=>'emailErr')); ?>
			</div>

			<div class="rowpass">
				<?php $placeHolderPassword = Yii::t('regform','Password');?>
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
                    <label for="regCheckbox"><?php echo Yii::t('regform','extended registration'); ?></label>
                </div>
            </div>

			<div class="rowButtons">
				<?php $labelButton = Yii::t('regform','JOIN');?>
				<?php echo CHtml::submitButton($labelButton, array('id' => "signInButton")); ?>
			</div>
			<div class="linesignInForm"><?php echo Yii::t('regform','You can also enter by social networks:'); ?></div>
			<div class="image" >
				<div id="singInFormCarousel">
					<a href="#" class="arrow left-arrow" id="prev"><p><</p></a>
                    <script src="//ulogin.ru/js/ulogin.js"></script>
                    <div id="uReg" x-ulogin-params="display=buttons;fields=email;optional=first_name,last_name,nickname,bdate,phone,photo,city;
								redirect_uri=<?php echo Yii::app()->request->baseUrl.'/site/socialreg'?>">
							<ul id="uLoginImages">
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/google_plus.png" x-ulogin-button = "googleplus" title = "Google +"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/google.png" x-ulogin-button = "google" title = "Google"/></li></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/vkontakte.png" x-ulogin-button = "vkontakte" title = "Вконтакте"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/facebook.png" x-ulogin-button = "facebook" title = "Facebook"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/instagram.png" x-ulogin-button = "instagram" title = "Instagran"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/youtube.png" x-ulogin-button = "youtube" title = "YouTube"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/odnoklassniki.png" x-ulogin-button = "odnoklassniki" title = "Odnoklassniki"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/mailru.png" x-ulogin-button = "mailru" title = "Mail.ru"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/twitter.png" x-ulogin-button = "twitter" title = "Twitter"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/liveid.png" x-ulogin-button = "liveid" title = "LiveID"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/yandex.png" x-ulogin-button = "yandex" title = "Yandex"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/livejournal.png" x-ulogin-button = "livejournal" title = "LiveJournal"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/openid.png" x-ulogin-button = "openid" title = "OpenID"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/flickr.png" x-ulogin-button = "flickr" title = "Flickr"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/wargaming.png" x-ulogin-button = "wargaming" title = "Wargaming.net"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/lastfm.png" x-ulogin-button = "lastfm" title = "LastFM"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/linkedin.png" x-ulogin-button = "linkedin" title = "LinkedIn"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/soundcloud.png" x-ulogin-button = "soundcloud" title = "SoundCloud"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/steam.png" x-ulogin-button = "steam" title = "Steam"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/vimeo.png" x-ulogin-button = "vimeo" title = "Vimeo"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/webmoney.png" x-ulogin-button = "webmoney" title = "Webmoney"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/4sq.png" x-ulogin-button = "foursquare" title = "Foursquare"/></li>
							</ul>
						</div>						
					<a href="#" class="arrow right-arrow" id="next"><p></p></a>
				</div>
			</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>