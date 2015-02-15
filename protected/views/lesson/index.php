<?php
/* @var $this LessonController */
/* @var $model LessonTop */



$this->breadcrumbs=array(
    'Users',
);
?>


<!-- lesson top -->
<?php
//Object Lecture, you can use designer. Ther is only one object, thats why I dont use it.))
$lecture3=new LessonTop();

$lecture3->lectureImageMain=Yii::app()->request->baseUrl.'/css/images/lectureImage.png';
$lecture3->lectureModule='Мова програмування PHP';
$lecture3->lectureNumber=3;
$lecture3->lectureNameText='Змінні та типи данних в PHP';
$lecture3->lectureTypeText='лекція';
$lecture3->lectureTypeImage=Yii::app()->request->baseUrl.'/css/images/lectureType.png';
$lecture3->lectureTimeText='40 хв';
$lecture3->lectureMaxNumber=6;
$lecture3->lectureIconImage=Yii::app()->request->baseUrl.'/css/images/medalIcoFalse.png';



//Oblect Teacher, you can use designer
$teacherIvanov=new LessonTeacher();

$teacherIvanov->teacherImage=Yii::app()->request->baseUrl.'/css/images/teacherImage.png';
$teacherIvanov->teacherName='Іванов Іванов ВгадайПоБатькові';
$teacherIvanov->teacherEmails='ivanov@intita.org, ivanov@gmail.com';
$teacherIvanov->teacherPhoneNumbers='/067/56-569-56, /093/26-45-65';
$teacherIvanov->teacherSkype='ivanov.ivanov';
$teacherIvanov->linkAdress='https://www.google.com.ua/';

?>


<!-- Print Class Lecture -->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lectureStyles.css" />
    <div class="lectureMainBlock" > <!-- Start Main Block -->

            <div class="lectureImageMain">
                <img src="<?php echo $lecture3->lectureImageMain; ?>">
            </div>
            <div class="titlesBlock">
                <ul>
                    <li>
                        <?php echo 'Модуль: ';?>
                            <span><?php echo $lecture3->lectureModule; ?></span>
                    </li>
                    <li><?php echo 'Урок '.$lecture3->lectureNumber.': ';?>
                            <span><?php echo $lecture3->lectureNameText; ?></span>
                    </li>
                    <li><?php echo 'Тип: ';?>
                            <div id="lectionTypeText"><?php echo $lecture3->lectureTypeText; ?></div>
                            <div id="lectionTypeImage"><img src="<?php echo $lecture3->lectureTypeImage; ?>"></div>
                    </li>
                    <li><div id="subTitle"><?php echo 'Тривалість: ';?></div>
                            <div id="lectureTimeText"><?php echo $lecture3->lectureTimeText; ?></div>
                            <div id="lectureTimeImage"><img src="<?php echo $lecture3->lectureTimeImage; ?>"></div>
                    </li>
                    <li>
                        <p>
                            <?php echo '('.$lecture3->lectureNumber.' з '.$lecture3->lectureMaxNumber.' занять)'; ?>
                            <div id="iconImage">
                                <img src="<?php echo $lecture3->lectureIconImage ;?>">
                            </div>
                        </p>
                    </li>
                    <div id="counter">
                         <?php
                         for ($i=0; $i<$lecture3->lectureNumber;$i++){ ?>
                             <img src="<?php echo $lecture3->lectureOverlookedImage;?>">
                         <?php }
                         for ($i=0; $i<$lecture3->lectureMaxNumber-$lecture3->lectureNumber;$i++){ ?>
                             <img src="<?php echo $lecture3->lectureUnwatchedImage;?>">
                         <?php } ?>
                    </div>
                </ul>

        </div>

<!-- Print Class Teacher -->

        <div class="teacherBlock">
                <img src="<?php echo $teacherIvanov->teacherImage; ?>">
                <span>
                <ul>
                    <li> <div class="teacherTitle">
                    <?php echo $teacherIvanov->teacherTitle; ?></div>
                    </li>
                    <li>
                        <?php echo $teacherIvanov->teacherName;?>
                    </li>
                    <li>
                        <?php echo $teacherIvanov->teacherEmails; ?>
                    </li>
                    <li>
                        <?php echo $teacherIvanov->teacherPhoneNumbers; ?>
                    </li>
                    <li>

                        <?php echo 'skype: '?><div id="teacherSkype"><?php echo $teacherIvanov->teacherSkype; ?>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $teacherIvanov->linkAdress; ?>">
                        <?php echo $teacherIvanov->linkName; ?>
                        </a>
                    </li>
                </ul>
                </span>
            </div>

    </div> <!-- Finish Main Block -->

<!-- lesson main part -->


<div>
    <p>

        Контроллер (controller) — это экземпляр класса CController или унаследованного от него класса. Он создается объектом приложения в случае, когда пользователь его запрашивает. При запуске контроллер выполняет соответствующее действие, что обычно подразумевает создание соответствующих моделей и отображение необходимых представлений. В самом простом случае действие — это метод класса контроллера, название которого начинается на action.

        У контроллера есть действие по умолчанию, которое выполняется в случае, когда пользователь не указывает действие при запросе. По умолчанию это действие называется index. Изменить его можно путём установки значения CController::defaultAction.

        Следующий код определяет контроллер site с действиями index (действие по умолчанию) и contact:


    </p>
    <p></p>
    <p>
        1. Маршрут
        Контроллеры и действия опознаются по их идентификаторам. Идентификатор контроллера — это запись формата path/to/xyz, соответствующая файлу класса контроллера protected/controllers/path/to/XyzController.php, где xyz следует заменить реальным названием класса (например, post соответствует protected/controllers/PostController.php). Идентификатор действия — это название метода без префикса action. Например, если класс контроллера содержит метод actionEdit, то идентификатор соответствующего действия — edit.

        Пользователь обращается к контроллеру и действию посредством маршрута (route). Маршрут формируется путём объединения идентификаторов контроллера и действия, отделенных косой чертой. Например, маршрут post/edit указывает на действие edit контроллера PostController, и по умолчанию URL http://hostname/index.php?r=post/edit приведёт к вызову именно этих контроллера и действия.
    </p>
    <p></p>
    <p>
        2. Создание экземпляра контроллера
        Экземпляр контроллера создаётся, когда CWebApplication обрабатывает входящий запрос. Получив идентификатор контроллера, приложение использует следующие правила для определения класса контроллера и его местоположения:

        если установлено свойство CWebApplication::catchAllRequest, контроллер будет создан на основе этого свойства, а контроллер, запрошенный пользователем, будет проигнорирован. Как правило, это используется для установки приложения в режим технического обслуживания и отображения статической страницы с соответствующим сообщением;
        если идентификатор контроллера обнаружен в CWebApplication::controllerMap, то для создания экземпляра контроллера будет использована соответствующая конфигурация контроллера;
        если идентификатор контроллера соответствует формату 'path/to/xyz', то имя класса контроллера определяется как XyzController, а соответствующий класс как protected/controllers/path/to/XyzController.php. Например, идентификатор контроллера admin/user будет соответствовать классу контроллера — UserController и файлу protected/controllers/admin/UserController.php. Если файл не существует, будет сгенерировано исключение CHttpException с кодом ошибки 404.
        При использовании модулей процесс, описанный выше, будет выглядеть несколько иначе. В частности, приложение проверит, соответствует ли идентификатор контроллеру внутри модуля. Если соответствует, то сначала будет создан экземпляр модуля, а затем экземпляр контроллера.
    </p>
</div>



<!-- lesson footer -->
<! Верстка >
<?php

//Загальні параметри блоку
	$footNavSize='958px'; // Ширина блоку
	$footNavMaxMark='6'; // Шкала оцінювання - максимальна кількість балів, поділок

// База даних - проста база даних для прикладу
	$lessonInfo1=array('1','Назва уроку1','практична робота','Тайм1','3','Зараховано');
	$lessonInfo2=array('2','Назва уроку2','лекція','Тайм2','4','Зараховано');
	$lessonInfo3=array('3','Назва уроку3','практична робота','Тайм3','2','Зараховано');
	$lessonInfo4=array('4','Назва уроку4','практична робота','Тайм4','3','Зараховано');
	$lessonInfo5=array('5','Назва уроку5','практична робота','Тайм5','1','Не Зараховано');
	$lessonInfo6=array('6','Назва уроку6','лекція','Тайм6','0','Не Зараховано');
	$lessonInfo7=array('7','Назва уроку7','лекція','Тайм7','0','Не Зараховано');
	$lessonInfo8=array('8','Назва уроку8','практична робота','Тайм8','0','Не Зараховано');
	$lessonInfo9=array('9','Назва уроку9','практична робота','Тайм9','0','Не Зараховано');
	$lessonInfo10=array('10','Назва уроку10','лекція','Тайм10','0','Не Зараховано');
	
	$allLessons=array($lessonInfo1,$lessonInfo2,$lessonInfo3,$lessonInfo4,$lessonInfo5,$lessonInfo6,$lessonInfo7,$lessonInfo8,$lessonInfo9,$lessonInfo10);

	// Ініціалізуємо обьєкт класу який проиймає номер сторінки і інформацію про уроки з бази даних
	$footNav=new LessonFooter ('3',$allLessons);
		
?>
<!  Верстка на основі обьекта $footNav >
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lessonFooter.css" />
		<div class="subViewLessons" 	style="width:<?php echo $footNavSize; ?>" >
<?php
	if (  $footNav->getPre()=='True' )
		{
?>
					<div class="preLessons">
						<p class="lesname">Урок <?php echo $footNav->getPreNumber() ?>: <b><?php echo $footNav->getPreName() ?></b></p>
						<table class="typeLesson">
							<tr>
								<td><p>Тип:</p></td>
								<td><span><?php echo $footNav->getPreType() ?></span></td>
								<td><img src="<?php
																	switch ($footNav->getPreType())
																				{
																					case 'лекція':
																						echo Yii::app()->request->baseUrl."/css/images/lectureIco.png";
																						break;
																					case 'практична робота':
																						echo Yii::app()->request->baseUrl."/css/images/practicalIco.png";
																						break;
																				}
														?> " style="width:<?php echo $footNavSize*0.02 . 'px'; ?>"></td>
								<td><p>Тривалість:</p></td>
								<td><span><?php echo $footNav->getPreDur() ?></span></td>
								<td><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/timeIco.png" style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
							</tr>
						</table>
						<table class="ratingLeson">
							<tr>
								<?php
									for ($i=0; $i<$footNav->getPreRait(); $i++)
									{
								?>
									<td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco1.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
								<?php
									}
									for ($j=0; $j<$footNavMaxMark-$footNav->getPreRait(); $j++)
									{
								?>
									<td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco0.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
								<?php
									}
								?>	
								<td><img src="<?php
															if ($footNav->getPreMedal()=='Зараховано')
																				{
																					echo Yii::app()->request->baseUrl."/css/images/medalIco.png";
																				} else {
																						echo Yii::app()->request->baseUrl."/css/images/medalIcoFalse.png";
																				}
														?> " style="width:<?php echo $footNavSize*0.035 . 'px'; ?>"></td>
							</tr>
						</table>
						<div class="preLesonLink">
							<p><a href="#">&#171 переглянути знову попередній урок</a></p>
						</div>   
					</div>
<?php
		}
		
	if (  $footNav->getPost()=='True' )
		{
?>						
					<div class="nextLessons">
						<p class="lesname">Урок <?php echo $footNav->getPostNumber() ?>: <b><?php echo $footNav->getPostName() ?></b></p>
						<table class="typeLesson">
							<tr>
								<td><p>Тип:</p></td>
								<td><span><?php echo $footNav->getPostType() ?></span></td>
								<td><img src="<?php
																	switch ($footNav->getPostType())
																				{
																					case 'лекція':
																						echo Yii::app()->request->baseUrl."/css/images/lectureIco.png";
																						break;
																					case 'практична робота':
																						echo Yii::app()->request->baseUrl."/css/images/practicalIco.png";
																						break;
																				}
														?> "style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
								<td><p>Тривалість:</p></td>
								<td><span><?php echo $footNav->getPostDur() ?></span></td>
								<td><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/timeIco.png" style="width:<?php echo $footNavSize*0.02 . 'px';?>"></td>
							</tr>
						</table>
						<table class="ratingLeson">
							<tr>
								<?php
									for ($i=0; $i<$footNav->getPostRait(); $i++)
									{
								?>
									<td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco1.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
								<?php
									}
									for ($j=0; $j<$footNavMaxMark-$footNav->getPostRait(); $j++)
									{
								?>
									<td>	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/ratIco0.png" style="width:<?php echo $footNavSize*0.015 . 'px';?>; padding:0px;"></td>
								<?php
									}
								?>																
									<td><img src="<?php
																	if ($footNav->getPostMedal()=='Зараховано')
																				{
																					echo Yii::app()->request->baseUrl."/css/images/medalIco.png";
																				} else {
																						echo Yii::app()->request->baseUrl."/css/images/medalIcoFalse.png";
																				}
														?> " style="width:<?php echo $footNavSize*0.035 . 'px';?>"></td>
							</tr>
						</table>
						<?php if($footNav->getThisMedal()=='Зараховано') { ?>		
							<div class="nextLesonLink">
								<p><a href="#">переглянути наступний урок &#187 </a></p>
							</div>  
						<?php  }?>
					</div>
		</div>
<?php
		}
?>
</div>