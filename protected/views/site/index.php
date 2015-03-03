<?php
/* @var $this SiteController */
?>

<img id="sliderTexture" src="<?php echo $mainpage['sliderTexture']; ?>">
<div class="insideSlider">
    <div class="lineAndButton">
        <img class="sliderLine" src="<?php echo $mainpage['sliderLine']; ?>">
        <a class="sliderButton" href="#"><?php echo $mainpage['buttonStart']; ?> </a>
    </div>
    <div class="sliderText">
        <?php echo $mainpage['sliderHeader']; ?><br>
        <div class="sliderTextJr">
            _____<br><br>
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
					<div class="line">
                    </div>

                    <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo $stepValue->stepName; ?></p>
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
                        <img class="grid" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/grid.png">
        		   		<img src="<?php echo $stepValue->stepImage; ?>">
        		    </div>
					<div class="line">
                    </div>
                     <img class="hexagon" src="<?php echo $mainpage['hexagon']; ?>">
					<div class="stepArticle">
						<p class="stepNumber"><?php echo $stepValue->stepNumber; ?></p>
						<p class="stepName"><?php echo $stepValue->stepName; ?></p>
					</div>
        			<div class="stepInfo" style="min-height:<?php echo $stepSize*0.229 . 'px';?> ">
          				  <h2><?php echo $stepValue->stepTitle; ?></h2>
              			  <p><?php echo $stepValue->stepText; ?></p>
          			</div>
         </div>
<?php
	    }
	}
?>
</div>
<div class="fon"style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/fon.png') no-repeat;">
    <div class="textFon"><p class="zagolovok">Готові розпочати?</p><p class="zagolovok2">Введіть дані в форму нижче</p></div>
    <div class="formFon"style="  background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/formFon.png');">
        <div class="email-password">
            <form method = "POST" action="">
                <input type="email" value="" name="email" class="email1" placeholder="E-mail" />
                <input type="password" value="" name="password" class="password1" placeholder="password"/>

        </div>
        <div class="extendedRegistration"><a href="#" >розширена реєстрація</a></div>
        <div class="button">

            <input type="submit" value="Розпочати" name="button" class="button1"/>
            </form>
        </div>
        <div class="lineForm"><hr color="#4b75a4" size="1px"></div>
        <div class="social">Ви можете також зареєструватися через соцмережі:</div>
        <div class="image" > <img name="networking" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/networking.png" width="410" height="50" border="0" id="networking" usemap="#m_networking" alt="" /><map name="m_networking" id="m_networking">
                <area shape="circle" coords="354,26, 20" href="javascript:" title="instagram" />
                <area shape="circle" coords="309,26, 21" href="javascript:" title="Rubka" />
                <area shape="circle" coords="262,27, 20" href="javascript:" title="Вконтакте" />
                <area shape="circle" coords="214,26, 20" href="javascript:" title="Однокласники" />
                <area shape="circle" coords="167,27, 20" href="javascript:" title="YouTube" />
                <area shape="circle" coords="121,26, 21" href="javascript:" title="googl" />
                <area shape="circle" coords="74,26, 20" href="javascript:" title="facebook" />
                <area shape="circle" coords="27,25, 21" href="javascript:" title="twitter" />
            </map></div>
    </div>

</div>

