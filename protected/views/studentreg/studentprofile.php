<!-- studprofile style -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/profile.css" />
<!-- studprofile style -->
<?php
/* @var $this StudentprofileController */
/* @var $model Studentprofile */
/* @var $form CActiveForm */
?>
<?php
$this->pageTitle = 'INTITA';
$post=StudentReg::model()->findByPk(Yii::app()->user->id);
?>
<?php
$this->breadcrumbs=array(Yii::t('breadcrumbs', 'Profile'),
);
?>
<div class="formStudProf">
    <div class="studProfInf">
        <table class="titleProfile">
            <tr>
                <td>
                    <h2><?php echo Yii::t('profile', '0095'); ?></h2>
                </td>
                <td>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/profileedit.png"/>
                </td>
                <td>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/?r=studentreg/edit"><?php echo Yii::t('profile', '0096'); ?></a>
                </td>
            </tr>
        </table>
        <img class='avatarimg' src="<?php echo Yii::app()->request->baseUrl.$post->avatar; ?>"/>
        <table class='profileInfo'>
            <tr>
                <td>
                    <h1><?php echo $post->nickname;?></h1>
                    <h1><?php echo $post->firstName;?></h1>
                    <h1><?php echo $post->secondName;?></h1>
                    <div class="aboutInfo">
                        <p><?php echo $post->address;
                            if(!empty($post->address)&&!empty($post->birthday)) echo ', ';
                            $myAge = $post->birthday;
                            $myAge = str_replace("/",".",$myAge);
                            $date_a = new DateTime($myAge);
                            $date_b = new DateTime();
                            $interval = $date_b->diff($date_a);
                            if($interval->format("%Y")!=='00'){
                                echo $interval->format("%Y");
                                $post::getYearsTermination($interval->format("%Y"));
                            }
                            ?>
                        </p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0100'); ?></span><?php echo $post->aboutMy;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0101'); ?></span><?php echo $post->email;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0102'); ?></span><?php echo $post->phone;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0103'); ?></span><?php echo $post->education;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0104'); ?></span>
                            <?php
                            $interestArray=explode(",", $post->interests);

                            if (!empty($interestArray[0])){
                                for ($i = 0; $i < count($interestArray); $i++)
                                {
                                    ?>
                                    <span class="interestBG"><?php echo $interestArray[$i]." ";?></span>
                                <?php
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0105'); ?></span><?php echo $post->aboutUs;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0106'); ?></span><?php echo $post->educform;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP"><?php echo Yii::t('profile', '0107'); ?></span>Курси самогоних апаратів 6-го рівня</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="profileActivity">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabsUp1" for="tab1" title="<?php echo Yii::t('profile', '0108'); ?>"><?php echo Yii::t('profile', '0108'); ?></label>
            <input id="tab2" type="radio" name="tabs" >
            <label for="tab2" title="<?php echo Yii::t('profile', '0109'); ?>"><?php echo Yii::t('profile', '0109'); ?></label>
            <input id="tab3" type="radio" name="tabs" >
            <label for="tab3" title="<?php echo Yii::t('profile', '0110'); ?>"><?php echo Yii::t('profile', '0110'); ?></label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" title="<?php echo Yii::t('profile', '0111'); ?>"><?php echo Yii::t('profile', '0111'); ?></label>
            <input id="tab5" type="radio" name="tabs" >
            <label for="tab5" title="<?php echo Yii::t('profile', '0112'); ?>"><?php echo Yii::t('profile', '0112'); ?></label>
            <div class="lineUnderTab"></div>
            <input id="tab6" type="radio" name="tabs">
            <label class="tabsDown1" for="tab6" title="<?php echo Yii::t('profile', '0113'); ?>"><?php echo Yii::t('profile', '0113'); ?></label>
            <input id="tab7" type="radio" name="tabs">
            <label for="tab7" title="<?php echo Yii::t('profile', '0114'); ?>"><?php echo Yii::t('profile', '0114'); ?></label>
            <input id="tab8" type="radio" name="tabs">
            <label class="tabsDown" for="tab8" title="<?php echo Yii::t('profile', '0115'); ?>"><?php echo Yii::t('profile', '0115'); ?></label>
            <input id="tab9" type="radio" name="tabs">
            <label class="tabsDown" for="tab9" title="<?php echo Yii::t('profile', '0116'); ?>"><?php echo Yii::t('profile', '0116'); ?></label>
            <input id="tab10" type="radio" name="tabs">
            <label class="tabsDown" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/financeico.png);background-repeat: no-repeat;background-position:10px 3px;" for="tab10" title="<?php echo Yii::t('profile', '0117'); ?>"><?php echo Yii::t('profile', '0117'); ?></label>
            <div class="lineUnderTab"></div>
            <section id="myCourse">
                <?php $this->renderPartial('_mycourse'); ?>
            </section>
            <section id="timetable">
                <?php $this->renderPartial('_timetable'); ?>
            </section>
            <section id="consultation">
                <?php $this->renderPartial('_consultation'); ?>
            </section>
            <section id="exams">
                <?php $this->renderPartial('_exams'); ?>
            </section>
            <section id="projects">
                <?php $this->renderPartial('_projects'); ?>
            </section>
            <section id="myRatting">
                <p>
                    Мій рейтинг
                </p>
            </section>
            <section id="myDownload">
                <p>
                    Якісь завантаження
                </p>
            </section>
            <section id="mylettersSend">
                <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/?r=studentreg/sendletter">
                    <label for="letterTheme">Тема:</label>
                    <input type="text" id="letterTheme" name="letterTheme" /></br> </br>
                    <label for="send_letter">Повідомлення:</label>
                    <textarea id="send_letter" name="send_letter"></textarea></br>
                    <input type="submit" value="ВІДПРАВИТИ />" name="submit" />
                </form>
                <?php if(Yii::app()->user->hasFlash('messagemail')):
                    echo Yii::app()->user->getFlash('messagemail');
                endif; ?>
            </section>
            <section id="myMark">
                <p>
                    Як я оцінюю
                </p>
            </section>
            <section id="finances">
                <p>
                    Фінанси
                </p>
            </section>
        </div>
    </div>
</div><!-- form -->