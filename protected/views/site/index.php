<style type="text/css">
    .passEye .eye {
        background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/passEye.png') no-repeat left 2px;
    }
    .passEye .openEye {
        background-position:left bottom;
    }
</style>
<?php
/* @var $this SiteController */
?>
<script>
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



<div class="insideSlider">
    <div class="lineAndButton">
        <img class="sliderLine" src="<?php echo $mainpage['sliderLine']; ?>">
        <a class="sliderButton" href="#"><?php echo $mainpage['buttonStart']; ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/pointer.png"/> </a>
    </div>
    <div class="sliderText">
        <?php echo $mainpage['sliderHeader']; ?><br>
        <div class="sliderTextJr">
            <br/>
            <hr style="border: 1px solid #ffffff; width: 100px;">
            <?php echo $mainpage['sliderText']; ?>
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
$this->pageTitle=$mainpage['title'];
$headerText = $mainpage['header1'];
$subheaderText = $mainpage['subheader1'];
$subLineImage = $mainpage['subLineImage'];
$linkName = $mainpage['linkName'];
$massAbout=array($block1,$block2,$block3);
?>

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
<! Ініціалізація екземплярів класу>
<?php
$stepHeader =  $mainpage['header2'];
$stepSubheader =  $mainpage['subheader2'];
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
                    <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo $stepValue->stepName; ?></p>
					</div>
        			<div class="stepInfo">
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
                        <img class="grid" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/grid.png">
        		   		<img src="<?php echo $stepValue->stepImage; ?>">
        		    </div>
                     <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo $stepValue->stepName; ?></p>
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
    <a name="form"></a>
    <div class="fon"style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/fon.png') no-repeat;">
        <div class="textFon"><p class="zagolovok"><?php echo $mainpage['formHeader1']; ?></p><p class="zagolovok2"><?php echo $mainpage['formHeader2']; ?></p></div>
        <div class="formFon"style=" background:url('<?php echo $mainpage['formFon']; ?>');">
                <form method = "POST" action="<?php echo Yii::app()->createUrl('site/submitForm');?>">
                    <div class="email-password">
                        <input type="email" value="" name="email" class="email1" placeholder="E-mail" />
                        <span class="passEye"><input type="password" value="" name="password" class="password1" placeholder="password"/></span><br>
                        <input type="checkbox" id="regCheckbox" value="" name="isExtended"/><label for="regCheckbox"><?php echo $mainpage['regText']; ?></label>
                    </div>
            <br>
            <br>
                    <div class="button">
                <input type="submit" name="button" class="button1" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/pointer.png'); background-repeat: no-repeat; background-position: 144px 17px;" value="<?php echo $mainpage['formButtonStart']; ?>"/>
                </form>
        </div>

            <div class="lineForm"><hr color="#4b75a4" size="1px"></div>
            <div class="social"><?php echo $mainpage['socialText']; ?></div>
            <div class="image" > <img name="networking" src="<?php echo $mainpage['imageNetwork']; ?>" width="410" height="50" border="0" id="networking" usemap="#m_networking" alt="" />
                <map name="m_networking" id="m_networking">
                    <area shape="circle" coords="354,26, 20" href="javascript:" title="instagram" />
                    <area shape="circle" coords="309,26, 21" href="javascript:" title="Rubka" />
                    <area shape="circle" coords="262,27, 20" href="javascript:" title="Вконтакте" />
                    <area shape="circle" coords="214,26, 20" href="javascript:" title="Однокласники" />
                    <area shape="circle" coords="167,27, 20" href="javascript:" title="YouTube" />
                    <area shape="circle" coords="121,26, 21" href="javascript:" title="Google +" />
                    <area shape="circle" coords="74,26, 20" href="javascript:" title="facebook" />
                    <area shape="circle" coords="27,25, 21" href="javascript:" title="twitter" />
                </map>
            </div>
    </div>
</div>


