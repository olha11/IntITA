<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">



    <!-- layouts style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <!-- layouts style -->
    <!-- aboutUs style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/aboutusstyles.css" />
    <!-- aboutUs style -->
    <!-- steps style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/step.css" />
    <!-- steps style -->
	<!-- studprofile style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/studProfile.css" />
    <!-- studprofile style -->
    <!-- jQuery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <!-- jQuery -->
    <!-- carousel-plugins -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.theme.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/liCover/css/liCover.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/liCover/js/jquery.liCover.js"></script>
    <!-- carousel-plugins -->
    <!-- carousel -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/slider.js"></script>
    <!-- carousel -->
	<!-- passEye, jQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.passEye.js"></script>
    <!-- passEye, jQuery -->
    <!-- uploadInfo, jQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/uploadInfo.js"></script>
    <!-- uploadInfo, jQuery -->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



        <div id="navigation">
            <div class="main">
                <div id="logo_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/Logo_big.png"/>
                </div>

                    <ul>
                        <li><a href="http://www.google.com">Курси</a></li>
                        <li><a href="http://www.google.com">Розклад</a></li>
                        <li><a href="http://www.google.com">Викладачі</a></li>
                        <li><a href="http://www.google.com">Форум</a></li>
                        <li><a href="http://www.google.com">Про нас</a></li>
                    </ul>

            </div>
        </div>
        <a href="#">
<div id="enter_button">
   <!-- <img src="/IntITA/css/images/enter_button.png">-->
</div>
        </a>


        <script>

            var key = document.getElementById('enter_button');
            var nav = document.getElementById('navigation');
            var logo = document.getElementById('logo_img');
            window.onscroll = function() {
                var pageY = window.pageYOffset || document.documentElement.scrollTop;
                if (pageY >= key.offsetHeight) {

                    key.className = "down";
                    logo.className = "down";
                    nav.style.height = "68px";
                    nav.className = "down";

                } else {
                    key.className = "";
                    logo.className = "";
                    nav.className = "";
                    nav.style.height = "100px";

                }
            }

        </script>
        <div class="clear"></div>

<div id="slider" class="owl-carousel owl-theme">
     
    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1.jpg"></div>
    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/2.jpg"></div>
    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/3.jpg"></div>
    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/4.jpg"></div>

</div>
<div class="main">

<div style="height: 105px; width: auto"></div>

        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>


        <?php echo $content; ?>

        <div class="clear"></div>


        <div id="footer">
            <div>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/sotial.gif"/>
            </div>
            <div class="footer">
                <div>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/intITA_logo.png" id="logo"/>
                </div>
                <div>
                    <p>м. Вінниця, вул. Петлюри, 12а</br>
                        АйТі академія "INTITA"</p>
                </div>
                <div>
                    <ul>
                        <li><a href="http://www.google.com">Курси</a></li>
                        <li><a href="http://www.google.com">Розклад</a></li>
                        <li><a href="http://www.google.com">Викладачі</a></li>
                        <li><a href="http://www.google.com">Форум</a></li>
                        <li><a href="http://www.google.com">Про нас</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/go_up.gif"/></a>
            </div>

        </div><!-- footer -->



</div>
</body>
</html>
