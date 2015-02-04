<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <!-- stylesheet and script for layouts -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <!-- stylesheet and script for layouts -->
    	<!-- slider, jQuery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/protected/scripts/slider.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css">
    <!-- slider, jQuery -->
    
	<title>IntITA</title>
</head>

<body>

<div class="container" id="page">

	<div id="navigation">
                <div id="logo_img">
				    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/intITA_logo.png"/>
                </div>
                <div>
                    <ul>
                        <li><a href="http://www.google.com"><font color="4b75a5">Курси</a></li>
                        <li><a href="http://www.google.com"><font color="4b75a5">Розклад</a></li>
                        <li><a href="http://www.google.com"><font color="4b75a5">Викладачі</a></li>
                        <li><a href="http://www.google.com"><font color="4b75a5">Форум</a></li>
                        <li><a href="http://www.google.com"><font color="4b75a5">Про нас</a></li>
                    </ul>
                </div>
                <div id="line_small_off">
                
                </div>
                <div id="line_top">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/toper.png"/>
                </div>
                <div id="enter_button">
                       <a href="http://www.google.com"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/enter_button.png"/></a>
                    
               </div>
			</div>
<script>
   var up_menu = document.getElementById('navigation');
   var key = document.getElementById('enter_button');
   var line = document.getElementById('line_top');
   var line_small = document.getElementById('line_small_off');
       window.onscroll = function() {
            var pageY = window.pageYOffset || document.documentElement.scrollTop;
        if (pageY >= key.offsetHeight) {
            key.className = "fixed";
            up_menu.className = "navigation";
            line.className = "none";
            line_small.className = "line_small"
        } else {
            key.className = "";
            line.className = "";
            line_small.className = "";
            up_menu.className = "";
          }
      }
                        
</script>
<?php echo $content; ?>
<script>

</script>
		<div class="main">
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
                                <li><a href="http://www.google.com"><font color="4b75a5">Курси</a></li>
                                <li><a href="http://www.google.com"><font color="4b75a5">Розклад</a></li>
                                <li><a href="http://www.google.com"><font color="4b75a5">Викладачі</a></li>
                                <li><a href="http://www.google.com"><font color="4b75a5">Форум</a></li>
                                <li><a href="http://www.google.com"><font color="4b75a5">Про нас</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer">
						<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/go_up.gif"/></a>
                    </div>
                    <div class="footer">
                    </div>
                </div><!-- footer -->
            </div>
            <hr style="margin-top: -2px; border-bottom: 0px;border-left: 0px;border-right: 0px;border-top: 2px solid #00ffff" />
            <div style="background-color: white; z-index: 1;"></div>
	

</div><!-- page -->

</body>
</html>
