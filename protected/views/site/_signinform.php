<!-- regform -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css"/>
<!-- regform -->
<?php
$qForm = new StudentReg;

$form = $this->beginWidget('CActiveForm', array(
'id' => 'quick-form',
'enableClientValidation' => true,
'enableAjaxValidation'=>true,
'clientOptions'=>array('validateOnSubmit'=>true,'validateOnChange'=>false),
'action' => array('site/login'),
));
?>
<div class="signIn">
    <div class="rowemail">
        <?php $placeHolderEmail = Yii::t('regform','Email');?>
        <?php echo $form->textField($qForm,'email',array('class'=>'signInEmailM','placeholder'=>$placeHolderEmail,'size'=>60,'maxlength'=>255)); ?>
        <span><?php echo $form->error($qForm,'email'); ?></span>
    </div>

    <div class="rowpass">
        <?php $placeHolderPassword = Yii::t('regform','Password');?>
        <span class="passEye"> <?php echo $form->passwordField($qForm,'password',array('class'=>'signInPassM','placeholder'=>$placeHolderPassword,'size'=>60,'maxlength'=>255)); ?></span>
        <span><?php echo $form->error($qForm,'password'); ?></span>
        <?php if(Yii::app()->user->hasFlash('info')):
            echo Yii::app()->user->getFlash('info');
        endif; ?>
    </div>

    <div class="forgotPass">
        <?php echo CHtml::link('Забули пароль?', '#', array('id'=>'forgotPass',)); ?>
    </div>
    <?php $labelButton = Yii::t('regform','ВВІЙТИ');?>
    <?php echo CHtml::submitButton($labelButton, array('id' => "signInButtonM")); ?>


    <div class="linesignInForm"><?php echo Yii::t('regform','You can also enter by social networks:'); ?></div>
    <div class="image" >
        <div id="singInFormCarousel">
            <a href="#" class="arrow left-arrow" id="prev"><p><</p></a>
            <script src="//ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" x-ulogin-params="display=buttons;fields=email;
								redirect_uri=<?php echo Yii::app()->request->baseUrl.'/site/sociallogin'?>">
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
            <a href="#" class="arrow right-arrow" id="next"><p>></p></a>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->
