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
                        <p> <span class="colorP">Про себе:</span> </br> <?php echo $post->aboutMyself;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Інтереси:</span> </br><?php echo $post->interests;?></p>
                    </div>
                    <div class="aboutInfo">
                        <p> <span class="colorP">Сертифікати:</span> </br><?php echo $post->certificates;?></p>
                    </div>
                </td>
            </tr>
       </table>
    </div>
    <div class="profileInfo">
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
            <p>Фінанси:</br> <span class="colorP">Курс проплочений у повному обсязі</span></p>
        </div>
    </div>
</div><!-- form -->


