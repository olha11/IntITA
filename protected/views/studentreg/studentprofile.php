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

<div class="formStudProf">

    <div class="studProf">
            <div class="titleProfile">
                <h3>Профіль</h3>
            </div>
       <table>
            <tr>
                <td>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/1id.jpg"/>
                    <form class="photoButton" action="/?r=studentreg/index" method="post">
                        <input type="submit" value="РЕДАГУВАТИ">
                    </form>
                </td>
                <td>
                    <h1><?php echo $post->firstName;?></h1>
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
                        <p> <span class="colorP">Нік:</span> </br><?php echo $post->nickname;?></p>
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
                        <p> <span class="colorP">Форма навчання:</span> </br>
                            <?php if($post->educform){
                                echo 'Online';
                            } else {
                                echo 'Offline';
                            }
                            $post->educform;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Інтереси:</span> </br><?php echo $post->interests;?></p>
                    </div>
                </td>
            </tr>
       </table>
    </div>
    <div class="profileActivity">
     	<div class="titleProfile">
	       	<h3>Активність</h3>
    	</div>
        <div class="activeInfo">
            <p>Курс:</br> <span class="colorP">"Апгрейд головного мозку"</span></p>
        </div>
        <div class="activeInfo">
            <p>Модуль:</br> <span class="colorP">"Модуль 4. Модульне око, модульний ніс"</span></p>
        </div>
        <div class="activeInfo">
            <p>Заняття:</br> <span class="colorP">"Заняття 6. Повторіння мать учіння"</span></p>
        </div>
        <div class="payInfo">
            <p>Проплати:</br> <span class="colorP">Курс проплачений повністю</span></p>
        </div>
        <div class="payInfo">
            <p>Проплату здійснити до: <span class="colorP">21.12.2015</span></p>
        </div>
        <div class="payInfo">
            <p>Сума до проплати: <span class="colorP">5000 грн</span></p>
        </div>
        <form class="photoButton" action="" method="post">
            <input type="submit" value="Замовити консультацію">
        </form>
    </div>
</div><!-- form -->


