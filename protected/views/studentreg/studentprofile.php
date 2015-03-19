<?php
/* @var $this StudentProfileController */
/* @var $model StudentProfile */
/* @var $form CActiveForm */
?>

<?php
/* @var $this StudentprofileController */
/* @var $model Studentprofile */
/* @var $form CActiveForm */
?>
<?php
$post=StudentReg::model()->findByPk(1);
?>

<div class="formStudProfNav">
    <div class="regLinks">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">Головна</a> &#187; <a href="#">Профіль</a>
    </div>
    <div class="profileStatus">
        <div>
            <?php echo $post->firstName;?></br>
            <?php echo $post->middleName;?></br>
            <?php echo $post->secondName;?></br>
            <span style="color: #33cc00; font-size: smaller">&#x25A0; online</span>
        </div>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1id.jpg"/>
    </div>
</div>
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
        <img class='avatarimg' src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1id.jpg"/>
       <table class='profileInfo'>
            <tr>
                <td>
                    <h1><?php echo $post->firstName;?></h1>
                    <h1><?php echo $post->middleName;?></h1>
                    <h1><?php echo $post->secondName;?></h1>
                    <div class="aboutInfo">
                        <p><?php echo $post->address;?>,
                            <?php
                            $myAge = $post->birthday;
                            $date_a = new DateTime($myAge);
                            $date_b = new DateTime();
                            $interval = $date_b->diff($date_a);
                            echo $interval->format("%Y");
                            ?>
                            років
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
                <input id="tab1" type="radio" name="tabs" checked>
                <label class="tabsUp1"  for="tab1" title="Мої курси">Мої курси</label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2" title="Розклад">Розклад</label>

                <input id="tab3" type="radio" name="tabs">
                <label for="tab3" title="Консультації">Консультації</label>

                <input id="tab4" type="radio" name="tabs">
                <label for="tab4" title="Екзамени">Екзамени</label>

                <input id="tab5" type="radio" name="tabs">
                <label for="tab5" title="Мій рейтинг">Мій рейтинг</label>

                <div class="lineUnderTab"></div>

                <input id="tab6" type="radio" name="tabs">
                <label class="tabsDown1"  for="tab6" title="Завантаження">Завантаження</label>

                <input id="tab7" type="radio" name="tabs">
                <label class="tabsDown"  for="tab7" title="Листування">Листування</label>

                <input id="tab8" type="radio" name="tabs">
                <label class="tabsDown"  for="tab8" title="Мої оцінювання">Мої оцінювання</label>

                <input id="tab9" type="radio" name="tabs">
                <label class="tabsDown"  style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/financeico.png);background-repeat: no-repeat;background-position:10px 3px;" for="tab9" title="Фінанси">
                      Фінанси
                </label>

                <div class="lineUnderTab"></div>

            <section id="myCourse">
                <div class="profileCourse">
                    <p>Курс:</br> <span class="colorP">"Апгрейд головного мозку"</span></p>
                    <p class="courseLevLang">Рівень курсу: <span class="colorP">початковий</span></p>
                    <p class="courseLevLang">Мова курсу: <span class="colorP">українська</span></p>
                </div>
                <div class="profileModule">
                    <p>Модуль:</br> <span class="colorP">Модуль 4. Модульне око, модульний ніс</span></p>
                </div>
                <div class="profileLesson">
                    <p>Заняття:</br> <span class="colorP">Заняття 6. Повторіння мать учіння</span></p>
                </div>
                <div class="profileCoursePay">
                    <p>Курс:</br> <span class="colorP">"Як прокачати ельфа до 81-го рівня"</span></p>
                    <div class="studPay">
                      <p>Необхідно здійснити наступну проплату до 30.12.2015</p>
                      <p>Сума проплати: 1000грн</p>
                    </div>
                </div>
            </section>
            <section id="timetable">
                <p>
                    Тут буде розклад
                </p>
            </section>
            <section id="advice">
                <p>
                    Консультації
                </p>
            </section>
            <section id="exams">
                <p>
                    Екзамени
                </p>
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