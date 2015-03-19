<html>
<head>
<link type="text/css" rel="stylesheet" href="courses.css" />
</head>
<body>
<?php
$this->pageTitle = 'INTITA';
$this->breadcrumbs=array(
    'Course',
);

	class Course
	{
		public $courseImage;
		public $courseName;
		public $courseLevel;
		public $courseNumberofModules;
		public $courseReview;
		public $courseMaxNumberofModules=4;
		public $coursesHeader='Наші курси';
		public $courseLevelTitle='Рівень курсу:  ';
		public $coursesTextHeader='Концепція підготовки';
		public $coursesTextFooter="<td  valign='top'><div class='coursesTextFooterBlock1'>Спочатку навчання створюється стійкий фундамент для підготовки програмістів:
		необхідні знання елементарної математики, будови комп’ютера і основ інформатики.
		<p>Потім вивчаються основні принципи програмування на базі класичних комп'ютерних наук і методологій: алгоритмічна мова; 
		лементи вищої та дискретної математики і комбінаторики; структури даних, розробка і аналіз алгоритмів.</div></td>
		<td  valign='top'><div class='coursesTextFooterBlock2'>
		Після чого формується база для переходу до сучасних технологій програмування: об’єктно-орієнтоване програмування; проектування баз даних.
		<p>Завершення процесу підготовки шляхом конкретного застосування отриманих знань на реальних проектах із засвоєнням сучасних методів і технологій, 
		які використовуються в ІТ індустрії компаніями.</div></td>";

		function Course ( $courseImage,$courseName,$courseLevel,$courseNumberofModules,$courseReview)
		{
		$this->courseImage=$courseImage;
		$this->courseName=$courseName;
		$this->courseLevel=$courseLevel;
		$this->courseNumberofModules=$courseNumberofModules;
		$this->courseReview=$courseReview;
		}
	}

	$course1=new Course (Yii::app()->request->baseUrl.'/css/images/course1Image.png','Основи програмування','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course2=new Course (Yii::app()->request->baseUrl.'/css/images/course2Image.png','Основи програмування','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course3=new Course (Yii::app()->request->baseUrl.'/css/images/course3Image.png','Основи програмування','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course4=new Course (Yii::app()->request->baseUrl.'/css/images/course4Image.png','Основи програмування','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course5=new Course (Yii::app()->request->baseUrl.'/css/images/course5Image.png','Основи програмування','середній',2,'Интерактивные веб-приложения разработка программного  for a for aобеспечения/ Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');

	$coursesArray1=array($course1,$course2,$course3,$course4,$course5);

	$course7=new Course (Yii::app()->request->baseUrl.'/css/images/course7Image.png','Основи нейролінгвістичного програмування ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course8=new Course (Yii::app()->request->baseUrl.'/css/images/course8Image.png','Основи нейролінгвістичного програмування','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course9=new Course (Yii::app()->request->baseUrl.'/css/images/course9Image.png','Основи нейролінгвістичного програмування ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course10=new Course (Yii::app()->request->baseUrl.'/css/images/course10Image.png','Основи нейролінгвістичного програмування ','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');
	$course11=new Course (Yii::app()->request->baseUrl.'/css/images/course11Image.png','Основи нейролінгвістичного програмування','професійний',4,'Профессиональная разработка программного обеспечения for a for a Zombie Outlaws Completion Badge. Build faster and more secure web apps with Rails 4.');

	$coursesArray2=array($course7,$course8,$course9,$course10,$course11,);

	$courseDisableImage=Yii::app()->request->baseUrl.'/css/images/ratIco0.png';
	$courseEnableImage= Yii::app()->request->baseUrl.'/css/images/ratIco1.png';

	?>

<div id='coursesMainBox'>


	<div id='coursesHeader'>
	<?php echo $course1->coursesHeader; ?>
	</div>

<table>
<tr><td  valign="top">
<div id='coursesPart1'>
	<?php
	foreach ($coursesArray1 as $val)
	{
		?>
		<div class='courseBox'>
		<img src='<?php echo $val->courseImage; ?>'>
		<div class='courseName'><?php
				echo $val->courseName; ?>
		</div>
		<div class="courseLevelBox">
			<?php echo $val->courseLevelTitle; ?>

			<span class="courseLevel">
			<?php echo $val->courseLevel; ?>
			</span>
			<div class='courseLevelIndex'>
			<?php
			for ($i=0; $i<$val->courseNumberofModules; $i++)
			{
				?><span class="courseLevelImage">
				<img src="<?php echo $courseEnableImage;?>">
				</span><?php
			}
			for ($i=0; $i<($val->courseMaxNumberofModules-$val->courseNumberofModules); $i++)
			{
				?><span class="courseLevelImage">
				<img src="<?php echo $courseDisableImage;?>">
				</span><?php
			}
			?>
			</div>
		</div>
		<span class='courseText'><?php
		echo $val->courseReview;
		?>
		</span>
		</div> <?php
	}
	?>
</div></td>

<td >
<div id='coursesPart2'>
	<?php
	foreach ($coursesArray2 as $val)
	{
		?>
		<div class='courseBox'>
		<img src='<?php echo $val->courseImage; ?>'>
		<div class='courseName'><?php
				echo $val->courseName; ?>
		</div>
		<div class="courseLevelBox">
			<?php echo $val->courseLevelTitle; ?>

			<span class="courseLevel">
			<?php echo $val->courseLevel; ?>
			</span>
			<div class='courseLevelIndex'>
			<?php
			for ($i=0; $i<$val->courseNumberofModules; $i++)
			{
				?><span class="courseLevelImage">
				<img src="<?php echo $courseEnableImage;?>">
				</span><?php
			}
			for ($i=0; $i<($val->courseMaxNumberofModules-$val->courseNumberofModules); $i++)
			{
				?><span class="courseLevelImage">
				<img src="<?php echo $courseDisableImage;?>">
				</span><?php
			}
			?>
			</div>
		</div>
		<span class='courseText'><?php
		echo $val->courseReview;
		?>
		</span>
		</div> <?php
	}

	?>
</div>
</td>
</tr>
</table>
<table>
<tr>
	<div id='coursesHeader'>
	<?php echo $course1->coursesTextHeader; ?>
	</div>
</tr>
<tr>
	<?php echo $course1->coursesTextFooter; ?>
</tr>
</table>
</div><! main box>

</body>
</html>