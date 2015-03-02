<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">



    <!-- fonts -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fontface.css"/>
    <!-- fonts -->
    <!-- layouts style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <!-- layouts style -->
    <!-- aboutUs style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/aboutusstyles.css" />
    <!-- teacherProfile style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/teacherProfile.css" />
    <!-- steps style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/step.css" />
    <!-- steps style -->
	<!-- studprofile style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/studProfile.css" />
    <!-- studprofile style -->
    <!-- lesson style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lessonsStyle.css" />
	  <!-- courses style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/courses.css" />
    <!-- lesson style -->
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
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/slider.js"></script>
    <!-- carousel -->
	<!-- passEye, jQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.passEye.js"></script>
    <!-- passEye, jQuery -->
    <!-- uploadInfo, jQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/uploadInfo.js"></script>
    <!-- uploadInfo, jQuery -->
    <!-- Підсвітка синтаксису-->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/syntaxhighlighter/prettify.init.js"></script>
    <!-- Підсвітка синтаксису -->
    <!-- Підключення BBCode WysiBB -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/jquery.wysibb.min.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/theme/default/wbbtheme.css" type="text/css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/wysibb/lang/ua.js"></script>
    <!-- Підключення BBCode WysiBB -->

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
                        <li><a href="http://www.google.com">Викладачі</a></li>
                        <li><a href="http://www.google.com">Форум</a></li>
                        <li><a href="http://www.google.com">Про нас</a></li>
                    </ul>

            </div>
        </div>
        <div id="button_border">
        </div>
        <a id="enter_button" href="#">Вхід</a>

        <script>

            var key = document.getElementById('enter_button');
            var nav = document.getElementById('navigation');
            var logo = document.getElementById('logo_img');
            var border = document.getElementById('button_border');
            window.onscroll = function() {
                var pageY = window.pageYOffset || document.documentElement.scrollTop;
                if (pageY >= key.offsetHeight) {

                    key.className = "down";
                    logo.className = "down";
                    nav.style.height = "68px";
                    nav.className = "down";
                    border.className = "down";

                } else {
                    border.className = "";
                    key.className = "";
                    logo.className = "";
                    nav.className = "";
                    nav.style.height = "100px";

                }
            }

        </script>
        <div class="clear"></div>


<div class="main">

<div style="height: 105px; width: auto"></div>

        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>

</div>
        <?php echo $content; ?>



        <div class="clear"></div>


        <div id="footer">
            <div class="main">
                <div>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/sotial.gif"/>
                </div>
                <div class="footer">
                    <div>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/Logo_big.png" style="max-width: 140px;">
                    </div>
                    <div>
                        <p> телефон: +38 0432 52 82 67<br/>
                            тел. моб. +38 067 431 20 10<br/>
                            e-mail: intita.hr@gmail.com</p>
                    </div>
                    <div>
                        <ul>
                            <li><a href="http://www.google.com">Курси</a></li>
                            <li><a href="http://www.google.com">Викладачі</a></li>
                            <li><a href="http://www.google.com">Форум</a></li>
                            <li><a href="http://www.google.com">Про нас</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer"">
                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/go_up.png"/></a>
                </div>
                <div class="footer"></div>
            </div>
        </div><!-- footer -->



</body>
</html>
