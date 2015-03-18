<?php
/* @var $this SiteController */
/* @var $mainpage Mainpage */

?>

<a name="form">
	<div class="fon"style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/css/images/fon.png') no-repeat;">

		<div class="textFon"><p class="zagolovok"><?php echo $mainpage['formHeader1']; ?></p><p class="zagolovok2"><?php echo $mainpage['formHeader2']; ?></p></div>
		<div class="formFon"style=" background:url('<?php echo $mainpage['formFon']; ?>');">
			<div class="email-password">
				<form method = "POST"  action="<?php echo Yii::app()->createUrl('site/submitForm');?>">
					<input type="email" value="" name="email" class="email1" placeholder="E-mail" />
					<input type="password" value="" name="password" class="password1" placeholder="password"/><br>
					<input type="checkbox" value="" name="isExtended"/> <?php echo $mainpage['regText']; ?>
			</div>
			<br>
			<br>
			<div class="button">
				<input type="submit" value="<?php echo $mainpage['formButtonStart']; ?>" name="button" class="button1"/>
				</form>
			</div>
			<div class="lineForm"><hr color="#4b75a4" size="1px"></div>
			<div class="social"><?php echo $mainpage['socialText']; ?></div>
			<div class="image" > <img name="networking" src="<?php echo $mainpage['imageNetwork']; ?>" width="410" height="50" border="0" id="networking" usemap="#m_networking" alt="" /><map name="m_networking" id="m_networking">
					<area shape="circle" coords="354,26, 20" href="javascript:" title="instagram" />
					<area shape="circle" coords="309,26, 21" href="javascript:" title="Rubka" />
					<area shape="circle" coords="262,27, 20" href="javascript:" title="Вконтакте" />
					<area shape="circle" coords="214,26, 20" href="javascript:" title="Однокласники" />
					<area shape="circle" coords="167,27, 20" href="javascript:" title="YouTube" />
					<area shape="circle" coords="121,26, 21" href="javascript:" title="Google +" />
					<area shape="circle" coords="74,26, 20" href="javascript:" title="facebook" />
					<area shape="circle" coords="27,25, 21" href="javascript:" title="twitter" />
				</map></div>
		</div>
	</div>