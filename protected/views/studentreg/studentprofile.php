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
                    <h2>Профіль студента</h2>
                </td>
                <td>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/profileedit.png"/>
                </td>
                <td>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/?r=studentreg/edit">Редагувати </br> профіль</a>
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
                        <p> <span class="colorP">Про себе:</span> </br><?php echo $post->aboutMy;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Електрона пошта:</span> </br><?php echo $post->email;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Телефон:</span> </br><?php echo $post->phone;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Освіта:</span> </br><?php echo $post->education;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Інтереси:</span> </br>
                            <?php
                            $interestArray=explode(",", $post->interests);
                            for ($i = 0; $i < count($interestArray); $i++)
                            {
                                ?>
                                <span class="interestBG"><?php echo $interestArray[$i]." ";?></span>
                            <?php
                            }
                            ?>
                        </p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Звідки дізнався про Вас:</span> </br><?php echo $post->aboutUs;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Форма навчання:</span> </br><?php echo $post->educform;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Завершенні курси:</span> </br>Курси самогоних апаратів 6-го рівня</p>
                    </div>
                    <?php if(Yii::app()->user->hasFlash('messageedit')):
                        echo Yii::app()->user->getFlash('messageedit');
                    endif; ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="profileActivity">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" >
            <label class="tabsUp1" for="tab1" title="Мої курси">Мої курси</label>
            <input id="tab2" type="radio" name="tabs" checked>
            <label for="tab2" title="Розклад">Розклад</label>
            <input id="tab3" type="radio" name="tabs" >
            <label for="tab3" title="Консультації">Консультації</label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" title="Екзамени">Екзамени</label>
            <input id="tab5" type="radio" name="tabs">
            <label for="tab5" title="Мої проекти">Проекти</label>
            <div class="lineUnderTab"></div>
            <input id="tab6" type="radio" name="tabs">
            <label class="tabsDown1" for="tab6" title="Мій рейтинг">Мій рейтинг</label>
            <input id="tab7" type="radio" name="tabs">
            <label for="tab7" title="Завантаження">Завантаження</label>
            <input id="tab8" type="radio" name="tabs">
            <label class="tabsDown" for="tab8" title="Листування">Листування</label>
            <input id="tab9" type="radio" name="tabs">
            <label class="tabsDown" for="tab9" title="Мої оцінювання">Мої оцінювання</label>
            <input id="tab10" type="radio" name="tabs">
            <label class="tabsDown" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/financeico.png);background-repeat: no-repeat;background-position:10px 3px;" for="tab10" title="Фінанси">Фінанси</label>
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