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
    <!--   hamburger menu style -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/hamburgerMenu.css" />
    <!-- aboutUs style -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/aboutusstyles.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/step.css" />
    <!-- steps style -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/images/favicon.ico" type="image/x-icon"/>
    <!-- jQuery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <!-- jQuery -->
    <!-- carousel-plugins -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.theme.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.carousel.css"/>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/plugins/owl-carousel/owl.carousel.js"></script>
    <!-- carousel-plugins -->
    <!-- carousel -->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/slider.js"></script>
    <!-- carousel -->
    <!-- passEye, jQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.passEye.js"></script>
    <!-- passEye, jQuery -->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="navigation" class="down" >
    <div class="main">
        <div id="logo_img" class="down">
            <a href="<?php echo Yii::app()->request->baseUrl;?>">
                <img id="logo" src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png"/>
            </a>
        </div>
        <ul>
            <li><a href="<?php echo Yii::app()->createUrl('courses/index', array('courseID'=>1)); ?>"><?php echo Yii::t('header','Courses'); ?></a></li>
            <li><a href="<?php echo $this->link2; ?>"><?php echo Yii::t('header','Teachers'); ?></a></li>
            <li><a href="<?php echo $this->link3; ?>"><?php echo Yii::t('header','Forum'); ?></a></li>
            <li><a href="<?php echo $this->link4; ?>"><?php echo Yii::t('header','About us'); ?></a></li>
        </ul>
    </div>

    <div id="lang" class="down">
        <form action="" method="post" onsubmit="" name="fff">
            <button formaction="" id="ua" name="ua" onclick="changeLang(this)" class="selectedLang" disabled>
                <?php echo CHtml::link('ua',array('site/changeLang','lg'=>'ua')); ?>
            </button>

            <button formaction="" id="en" name="en" onclick="changeLang(this)">
                <?php echo CHtml::link('en',array('site/changeLang','lg'=>'en')); ?>
            </button>

            <button formaction="" id="ru" name="ru" onclick="changeLang(this)">
                <?php echo CHtml::link('ru',array('site/changeLang','lg'=>'ru')); ?>
            </button>
        </form>
    </div>

</div>
<!--SingIn modal-->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    'themeUrl'=>'/css',
    'cssFile'=>'jquery-ui.css',
    'theme'=>'my',
'options' => array(
    'width'=>540,

    'autoOpen' => false,
    'modal' => true,
    'resizable'=> false
),
));
$this->renderPartial('/site/_signinform');

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<!--SignIn modal-->

<div id="centerEnterButton">
    <div id="button_border" class="down">
    </div>
    <?php if(Yii::app()->user->isGuest) {
        echo CHtml::link(Yii::t('header', 'Sign in'), '#', array('id'=>'enter_button','class'=>'down','onclick' => '$("#mydialog").dialog("open"); return false;',));
    } else {?>
        <a id="enter_button" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/site/logout" class="down"><?php echo Yii::t('header', 'Sign out'); ?></a>
    <?php }?>
</div>
<! Hamburger menu>

<div id="hamburgerNavigation">
<div id="hamburgerSenterNavigation">
	<div id="burgerShadow">
	</div>
	<div id="hamburgerButton2" onclick="ShowHamburger()">
		<ul>
		<li><div class="hamburgerButtonLine2"></div></li>
		<li><div class="hamburgerButtonLine2"></div></li>
		<li><div class="hamburgerButtonLine2"></div></li>
		</ul>
	</div>
	<div id="logo2" class="down">
        <a href="<?php echo Yii::app()->request->baseUrl;?>">
            <img  src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png"/>
        </a>
    </div>
	<div id="hamburgerLang">
        <form action="" method="post" onsubmit="" name="fff">
            <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lg'=>'ua'));?>" id="ua" name="ua" onclick="changeLang(this)" class="selectedLang" disabled>ua</button>
            <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lg'=>'en'));?>" id="en" name="en" onclick="changeLang(this)">en</button>
            <button formaction="<?php echo Yii::app()->createUrl('site/changeLang', array('lg'=>'ru'));?>" id="ru" name="ru" onclick="changeLang(this)">ru</button>
        </form>
    </div>
</div>
</div>

<div id="hamburgerMainBox">
	<div id="hamburgerSubBox">
		<div class="hamburgerBox">
			<a class="hamburgerLink" href="<?php echo $this->link1; ?>"><?php echo Yii::t('header','Courses'); ?></a>
		</div>
		<div class="hamburgerLine"></div>
		<div class="hamburgerBox">
			<a  class="hamburgerLink" href="<?php echo $this->link2; ?>"><?php echo Yii::t('header','Teachers'); ?></a>
		</div>
		<div class="hamburgerLine"></div>
		<div class="hamburgerBox">
			<a  class="hamburgerLink" href="<?php echo $this->link3; ?>"><?php echo Yii::t('header','Forum'); ?></a>
		</div>
		<div class="hamburgerLine"></div>
		<div class="hamburgerBox">
			<a  class="hamburgerLink" href="<?php echo $this->link4; ?>"><?php echo Yii::t('header','About us'); ?></a>
		</div>
		<div class="hamburgerLine"></div>
		<div class="hamburgerBox2">
			<a id="hamburgerEnterButton" href="<?php echo Yii::app()->request->baseUrl;?>#form"><?php echo Yii::t('header','Sign in'); ?></a>
		</div>
	</div>
</div>


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

var width=0;
if (self.screen)
{
	width = screen.width
}

if (width>80)
{
	$('#hamburgerNavigation').css('display', 'none');
	$('#contentBoxMain').css('margin-top', '-1000px');
	$('#navigation').css('display', 'block');
	$('#centerEnterButton').css('display', 'block');
    var key = document.getElementById('enter_button');
    var nav = document.getElementById('navigation');
    var logo = document.getElementById('logo_img');
    var border = document.getElementById('button_border');


}
else
{
	var  isShow=0;
	$('#hamburgerNavigation').css('display', 'inline-block');
	$('#navigation').css('display', 'none');
	$('#centerEnterButton').css('display', 'none');
	$('body').css('margin-top', '-23px');
    $('#hamburgerSenterNavigation').css('width', width);
	$('#hamburgerSenterNavigation').css('margin-left', -(width/2));
	$('#hamburgerLang').css('left', width-130);

	function ShowHamburger()
	{
		if (isShow==0)
		{
			isShow=1;
			$('#hamburgerButton').css('display','none');
			$('.hamburgerButtonLine2').css('background-color',' #535353');
			$('#contentBoxMain').animate({left:'+=25%'},'fast');
			$('#hamburgerNavigation').animate({left:'+=25%'},'fast');
			$('#hamburgerMainBox').fadeIn('middle');
			$('#hamburgerLang').animate({left:'-=0px'},'fast');
		}
		else
		{
			isShow=0;
			$('#hamburgerButton').css('display','block');
			$('.hamburgerButtonLine2').css('background-color','#4682B4');
			$('#hamburgerMainBox').css('display','none');
			$('#contentBoxMain').animate({left:'-=25%'});
			$('#hamburgerNavigation').animate({left:'-=25%'});
			$('#contentBoxMain').css('margin-left', '0%');
			$('#hamburgerLang').animate({left:'+=0px'});
		}
	}
}
</script>

<div class="clear"></div>


<div class="main">

    <div style="height: 55px; width: auto"></div>

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>CHtml::link(Yii::t('breadcrumbs', 'Home'),Yii::app()->request->getBaseUrl(true)),
            'htmlOptions' => array(
                'class' => 'my-cool-breadcrumbs'
            )
        )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php if(!Yii::app()->user->isGuest) {
        $post=StudentReg::model()->findByPk(Yii::app()->user->id);
    ?>
    <div class="profileStatus">
        <a href="<?php echo Yii::app()->request->baseUrl.'/studentreg/profile'; ?>">
        <div>
            <?php echo $post->firstName;?></br>
            <?php echo $post->secondName;?></br>
            <?php echo $post->nickname;?></br>
            <span style="color: #33cc00; font-size: smaller">&#x25A0; online</span>
        </div>
        <img src="<?php echo Yii::app()->request->baseUrl.$post->avatar; ?>"/>
        </a>
    </div>
    <?php
    }
    ?>
</div>
<div id="contentBoxMain">
<?php echo $content; ?>



<div class="clear"></div>


<div id="footer">
    <div class="main">
        <div style="height: auto; margin-top: 25px;">
            <a href="https://twitter.com/INTITA_EDU"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/twitter.png"/></a>
            <a href="http://youtube.com"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/youtube.png"/></a>
            <a href="https://plus.google.com/u/0/116490432477798418410/posts"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/googlePlus.png"/><br/></a>
            <a href="https://www.facebook.com/pages/INTITA/320360351410183"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/facebook.png"/></a>
            <a href="https://www.linkedin.com/company/intita?trk=biz-companies-cym"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/odnoklasniki.png"/></a>
            <a href="http://vk.com/intita"><img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/vkontakte.png"/></a>
        </div>
        <div class="footer">
            <div>
                <a href="<?php echo Yii::app()->request->baseUrl;?>">
                    <img src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png" style="max-width: 140px;">
                </a>
            </div>
            <div>
                <p> <?php echo Yii::t('footer','tel: +38 0432 52 82 67');  ?><br/>
                    <?php echo Yii::t('footer','mobile: +38 067 432 20 10');  ?><br/>
                    <?php echo Yii::t('footer','e-mail: intita.hr@gmail.com'); ?><br/>
                    <?php echo Yii::t('footer','skype: int.ita'); ?><br/>
                </p>
            </div>
            <div>
                <ul>
                    <li><a href="<?php echo $this->link1; ?>"><?php echo Yii::t('header','Courses'); ?></a></li>
                    <li><a href="<?php echo $this->link2; ?>"><?php echo Yii::t('header','Teachers');  ?></a></li>
                    <li><a href="<?php echo $this->link3; ?>"><?php echo Yii::t('header','Forum');  ?></a></li>
                    <li><a href="<?php echo $this->link4; ?>"><?php echo Yii::t('header','About us');  ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <a href="<?php echo Yii::app()->request->baseUrl;?>"><img src="<?php echo $this->imageUp; ?>" style="margin-top: 20px;"/></a>
        </div>
    <div class="footer"></div>
</div>
</div><!-- footer -->
</div>
</body>
</html>
