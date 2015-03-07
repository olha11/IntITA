<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
    <!-- for tabs -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for tabs -->

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
            <img id="logo" src="<?php echo $this->logoURL; ?>"/>
        </div>

        <ul>
            <li><a href="<?php echo $this->link1; ?>"><?php echo $this->menu1; ?></a></li>
            <li><a href="<?php echo $this->link2; ?>"><?php echo $this->menu2; ?></a></li>
            <li><a href="<?php echo $this->link3; ?>"><?php echo $this->menu3; ?></a></li>
            <li><a href="<?php echo $this->link4; ?>"><?php echo $this->menu4; ?></a></li>
        </ul>

    </div>
    <div id="lang">
        <form action="" method="post" onsubmit="" name="fff">
            <button formaction="" id="ua" name="ua" onclick="changeLang(this)" class="selectedLang" disabled>ua</button>

            <button formaction="" id="en" name="en" onclick="changeLang(this)">en</button>

            <button formaction="" id="ru" name="ru" onclick="changeLang(this)">ru</button>

        </form>
    </div>
</div>
<div id="button_border">
</div>
<a id="enter_button" href="#"><?php echo $this->buttonText; ?></a>

<script>
    function changeLang(n){
        for (var i=0; i< n.form.length; i++){
            if(n.form.elements[i].id !== n.id){
                console.log(n.form.elements[i].id);
                document.getElementById(n.form.elements[i].id).disabled = false;
                document.getElementById(n.form.elements[i].id).className = "";
            }
        }
        document.getElementById(n.id).disabled = true;
        document.getElementById(n.id).className = "selectedLang";
    }


    var key = document.getElementById('enter_button');
    var nav = document.getElementById('navigation');
    var logo = document.getElementById('logo_img');
    var border = document.getElementById('button_border');
    window.onscroll = function() {
        var pageY = window.pageYOffset || document.documentElement.scrollTop;
        if (pageY >= key.offsetHeight) {
            document.getElementById('logo').src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png";

            key.className = "down";
            logo.className = "down";
            nav.style.height = "68px";
            nav.className = "down";
            border.className = "down";
        } else {
            document.getElementById('logo').src="<?php echo $this->logoURL; ?>";
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
            <img src="<?php echo $this->imageSotial; ?>"/>
        </div>
        <div class="footer">
            <div>
                <img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png" style="max-width: 140px;">
            </div>
            <div>
                <p> <?php echo $this->phone; ?><br/>
                    <?php echo $this->mobile; ?><br/>
                    <?php echo $this->email; ?></p>
            </div>
            <div>
                <ul>
                    <li><a href="<?php echo $this->link1; ?>"><?php echo $this->menu1; ?></a></li>
                    <li><a href="<?php echo $this->link2; ?>"><?php echo $this->menu2; ?></a></li>
                    <li><a href="<?php echo $this->link3; ?>"><?php echo $this->menu3; ?></a></li>
                    <li><a href="<?php echo $this->link4; ?>"><?php echo $this->menu4; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer"">
        <a href="#"><img src="<?php echo $this->imageUp; ?>"/></a>
    </div>
    <div class="footer"></div>
</div>
</div><!-- footer -->
</body>
</html>