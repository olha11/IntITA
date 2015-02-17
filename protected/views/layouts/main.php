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
    <!-- aboutUs style -->
    <!-- steps style -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/step.css" />
    <!-- steps style -->
    <!-- slider, jQuery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css">
    <!-- slider, jQuery -->

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
<div class="main">

<div style="height: 105px; width: auto"></div>

        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>


        <?php echo $content; ?>

</div>

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
