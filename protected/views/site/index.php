<body onload="centerPage()">
<!-- regform style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css" />
<!-- regform style -->
<?php
/* @var $this SiteController */
$model = new Mainpage();
?>
<script>
var width=0;
if (self.screen)
{
	width = screen.width
}
function centerPage()   
{
    $('.contentCenterBox').css('width', width); 
    $('.contentCenterBox').css('left', "50%");
    $('.contentCenterBox').css('margin-left', -width/2);  
}
    var key = document.getElementById('enter_button');
    var nav = document.getElementById('navigation');
    var logo = document.getElementById('logo_img');
    var border = document.getElementById('button_border');
    var lang = document.getElementById('lang');

    key.className = "";
    nav.className = "";
    logo.className = "";
    border.className = "";
    lang.className = "";
    document.getElementById('logo').src="<?php echo $this->logoURL; ?>";

    window.onscroll = function() {
        var pageY = window.pageYOffset || document.documentElement.scrollTop;
        if (pageY >= key.offsetHeight) {
            document.getElementById('logo').src="<?php echo Yii::app()->request->baseUrl;?>/css/images/Logo_small.png";
            key.className = "down";
            logo.className = "down";
            nav.className = "down";
            border.className = "down";
            lang.className = "down";
        } else {
            document.getElementById('logo').src="<?php echo $this->logoURL; ?>";
            border.className = "";
            key.className = "";
            logo.className = "";
            nav.className = "";
            lang.className = "";
        }
    }
</script>

<div id="sliderCenterBox">
<div class="insideSlider">
<div id="beginButtonCenter">
    <div class="lineAndButton">
        <img class="sliderLine" src="<?php echo $mainpage['sliderLine']; ?>">
        <a class="sliderButton" href="#form"><?php echo Yii::t('slider','ENTER'); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/pointer.png"/> </a>
    </div>
</div>

    <div class="sliderText">
        <?php echo Yii::t('slider','PROGRAM THE FUTURE'); ?><br>
        <div class="sliderTextJr">
            <br/>
            <hr style="border: 1px solid #ffffff; width: 100px;">
            <?php echo Yii::t('slider','Don\'t miss your chance to change the world - get high-quality and modern education class and become an expert!'); ?>
        </div>
    </div>

</div>
</div>

<div id="slider" class="owl-carousel owl-theme">
    <div class="item"><img src="<?php echo $slider1; ?>"></div>
    <div class="item"><img src="<?php echo $slider2; ?>"></div>
    <div class="item"><img src="<?php echo $slider3; ?>"></div>
    <div class="item"><img src="<?php echo $slider4; ?>"></div>
</div>

<?php
$this->pageTitle = Yii::t('mainpage','INTITA');
$headerText = Yii::t('mainpage','About us');
$subheaderText = Yii::t('mainpage','something that you need to know about our courses');
$subLineImage = $mainpage['subLineImage'];
$linkName = Yii::t('mainpage','read more ...');
$massAbout=array($block1,$block2,$block3);
?>
<div class="contentCenterBox"> 
<div class="mainAbout">
    <div class="header">
        <?php echo $headerText; ?>
        <p>
            <?php echo $subheaderText; ?>
        </p>
    </div>

    <div class="line1">
        <img src="<?php echo $subLineImage;?>">
    </div>

    <?php
    foreach ($massAbout as $val)

    {?>
        <div class="block">
            <ul>
                <li>
                    <div class="line2">
                    <img src="<?php echo $val->line2Image;?>"> 
                    </div>
                    <div class="icon">
                      <img src="<?php echo $val->iconImage;?>">
                    </div>
                    <div class="title">
                        <?php echo $val->titleText; ?>
                        <p>
                            <?php echo $val->textAbout;?>
                        </p>
                    </div>
                        <a href="<?php echo $val->linkAddress ?>">
                        <?php echo $linkName; ?>
                        </a>
                </li>
            </ul>
        </div>
    <?php
    }
    ?>

</div>
</div>
<! Ініціалізація екземплярів класу>
<?php
$stepHeader =  Yii::t('mainpage','How is the training?');
$stepSubheader =  Yii::t('mainpage','then explain how you will learn step by step');
$stepSize= $mainpage['stepSize'];

$stepsArray=array($step1,$step2,$step3,$step4,$step5);
?>

<! Верстка за допомогою масиву з екземплярами класу>
<div class="steps" >
		<div class="stepHeaderCont" style="width:<?php echo $stepSize; ?>">
			<div class="stepHeader">
						<h1><?php echo $stepHeader; ?></h1>
						<h3><?php echo $stepSubheader; ?></h3>
			</div>
		</div>
<?php
    foreach ($stepsArray as $stepValue)
    {
		if ($stepValue->stepNumber % 2 <> 0)
		 {
?>
         <div class="stepLeft" 	style="width:<?php echo $stepSize; ?>" >
					<div class="stepUrl">
                        <img class="grid" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/grid.png">
        		   		<img src="<?php echo $stepValue->stepImage; ?>">
        		    </div>
					<div class="line">
                    </div>

                    <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo Yii::t('step','step'); ?></p>
					</div>
        			<div class="stepInfo" style="min-height:<?php echo $stepSize*0.23 . 'px';?> ">
          				  <h2><?php echo $stepValue->stepTitle; ?></h2>
              			  <p><?php echo $stepValue->stepText; ?></p>
          			</div>
         </div>
		 <?php
		 }
		 else
		 {
		 ?>
		 <div class="stepRight" style="width:<?php echo $stepSize; ?>" >
					<div class="stepUrl">
        		   		 <img src="<?php echo $stepValue->stepImage; ?>">
        		    </div>
					<div class="line">
                    </div>
                     <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo Yii::t('step','step'); ?></p>
					</div>
        			<div class="stepInfo">
          				  <h2><?php echo $stepValue->stepTitle; ?></h2>
              			  <p><?php echo $stepValue->stepText; ?></p>
          			</div>
         </div>
<?php
	    }
	}
?>
</div>
<?php $this->renderPartial('_form', array('mainpage'=>$mainpage)); ?>
</body>



