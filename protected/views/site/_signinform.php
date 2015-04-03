<!-- regform -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/regform.css"/>
<!-- regform -->
<?php
$qForm = new StudentReg;

$form = $this->beginWidget('CActiveForm', array(
'id' => 'quick-form',
'enableClientValidation' => true,
'enableAjaxValidation'=>true,
'clientOptions'=>array('validateOnSubmit'=>true,'validateOnChange'=>false),
'action' => array('site/login'),
));
?>
<div class="signIn">
    <div class="rowemail">
        <?php $placeHolderEmail = Yii::t('regform','Email');?>
        <?php echo $form->textField($qForm,'email',array('class'=>'signInEmailM','placeholder'=>$placeHolderEmail,'size'=>60,'maxlength'=>255)); ?>
        <span><?php echo $form->error($qForm,'email'); ?></span>
    </div>

    <div class="rowpass">
        <?php $placeHolderPassword = Yii::t('regform','Password');?>
        <span class="passEye"> <?php echo $form->passwordField($qForm,'password',array('class'=>'signInPassM','placeholder'=>$placeHolderPassword,'size'=>60,'maxlength'=>255)); ?></span>
        <span><?php echo $form->error($qForm,'password'); ?></span>
        <?php if(Yii::app()->user->hasFlash('info')):
            echo Yii::app()->user->getFlash('info');
        endif; ?>
    </div>

    <div class="forgotPass">
        <?php echo CHtml::link('Забули пароль?', '#', array('id'=>'forgotPass',)); ?>
    </div>
    <?php $labelButton = Yii::t('regform','ВВІЙТИ');?>
    <?php echo CHtml::submitButton($labelButton, array('id' => "signInButtonM")); ?>


    <div class="linesignInForm"><?php echo Yii::t('regform','You can also enter by social networks:'); ?></div>
    <div class="image" >
        <img name="networking" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/networking.png" width="410" height="50" border="0" id="networking" usemap="#m_networking" alt="" />
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
<?php
$this->endWidget();?>