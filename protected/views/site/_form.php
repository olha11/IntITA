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
                <div style="color:red">
                    <?php if(Yii::app()->user->hasFlash('emailinfo')):
                        echo Yii::app()->user->getFlash('emailinfo');
                    endif; ?>
                </div>
			</div>

			<div class="rowpass">
				<?php $placeHolderPassword = Yii::t('regform','Password');?>
				<span class="passEye"> <?php echo $form->passwordField($model,'password',array('class'=>'singInPass','placeholder'=>$placeHolderPassword,'size'=>60,'maxlength'=>255)); ?></span>
				<?php echo $form->error($model,'password'); ?>
				<div style="color:red">
                    <?php if(Yii::app()->user->hasFlash('passinfo')):
                        echo Yii::app()->user->getFlash('passinfo');
                    endif; ?>
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
				<div id="singInFormCarousel">
					<a href="#" class="arrow left-arrow" id="prev"><p><</p></a>
						<div id="uLogin" x-ulogin-params="display=buttons;fields=first_name,last_name;
								redirect_uri=;callback=ucall">
							<ul id="uLoginImages">
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/google_plus.png" x-ulogin-button = "googleplus"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/google.png" x-ulogin-button = "google"/></li></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/vkontakte.png" x-ulogin-button = "vkontakte"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/facebook.png" x-ulogin-button = "facebook"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/instagram.png" x-ulogin-button = "instagram"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/youtube.png" x-ulogin-button = "youtube"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/odnoklassniki.png" x-ulogin-button = "odnoklassniki"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/mailru.png" x-ulogin-button = "mailru"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/twitter.png" x-ulogin-button = "twitter"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/liveid.png" x-ulogin-button = "liveid"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/yandex.png" x-ulogin-button = "yandex"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/livejournal.png" x-ulogin-button = "livejournal"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/openid.png" x-ulogin-button = "openid"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/flickr.png" x-ulogin-button = "flickr"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/wargaming.png" x-ulogin-button = "wargaming"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/lastfm.png" x-ulogin-button = "lastfm"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/linkedin.png" x-ulogin-button = "linkedin"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/soundcloud.png" x-ulogin-button = "soundcloud"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/steam.png" x-ulogin-button = "steam"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/vimeo.png" x-ulogin-button = "vimeo"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/webmoney.png" x-ulogin-button = "webmoney"/></li>
								<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/iconsSingin/4sq.png" x-ulogin-button = "foursquare"/></li>
							</ul>
						</div>						
					<a href="#" class="arrow right-arrow" id="next"><p>></p></a>
				</div>
			</div>

			<?php $this->endWidget(); ?>

			
<script type="text/javascript">
var width = 43; // ширина изображения
var count = 8; // количество изображений

var ul = document.getElementById('uLoginImages');
var imgs = ul.getElementsByTagName('li');

var position = 0; // текущий сдвиг влево

document.getElementById('prev').onclick = function() {
  if (position >= 0) return false; // уже до упора

  // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
  position = Math.min(position + width*count, 0)
  ul.style.marginLeft = position + 'px';
  return false;
}

document.getElementById('next').onclick = function() {
  if (position <= -width*(imgs.length-count)) return false; // уже до упора

  // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
  position = Math.max(position-width*count, -width*(imgs.length-count));
  ul.style.marginLeft = position + 'px';
  return false;
};

</script>













		</div><!-- form -->
	</div>
</div>