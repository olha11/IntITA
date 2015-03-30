<?php

class SiteController extends Controller
{
	/* @var $mainpage Mainpage*/
	/* @var $modelCarousel Carousel */
	/* @var $step1 Step*/
	/* @var $step2 Step*/
	/* @var $step3 Step*/
	/* @var $step4 Step*/
	/* @var $step5 Step*/
	/* @var $objAbout1 AboutUs*/
	/* @var $objAbout2 AboutUs*/
	/* @var $objAbout3 AboutUs*/
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index1.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index1.php'
		// using the default layout 'protected/views/layouts/main.php'
		$modelCarousel = new Carousel();
		$mainpage = new Mainpage();
		$mainpage->setValueById(0);
		$objAbout1 = new AboutUs(1);
		$objAbout1->setValuesById(1);
		$objAbout2 = new AboutUs(2);
		$objAbout2->setValuesById(2);
		$objAbout3 = new AboutUs(3);
		$objAbout3->setValuesById(3);
		$step1=new Step(1);
		$step1->setValueById(1);
		$step2=new Step(2);
		$step2->setValueById(2);
		$step3=new Step(3);
		$step3->setValueById(3);
		$step4=new Step(4);
		$step4->setValueById(4);
		$step5=new Step(5);
		$step5->setValueById(5);
		$arrayAboutUs = array(
			'objAbout1'=>$objAbout1,
			'objAbout2'=>$objAbout2,
			'objAbout3'=>$objAbout3,
		);
		$arraySteps = array(
			'step1'=>$step1,
			'step2'=>$step2,
			'step3'=>$step3,
			'step4'=>$step4,
			'step5'=>$step5,
		);

		$sliderPictures = array(
			'slider1'=>Yii::app()->request->baseUrl.$modelCarousel->findByPk(1)->imagesPath.$modelCarousel->findByPk(1)->pictureURL,
			'sliderText1'=> $modelCarousel->findByPk(1)->text,
			'slider2'=>Yii::app()->request->baseUrl.$modelCarousel->findByPk(2)->imagesPath.$modelCarousel->findByPk(2)->pictureURL,
			'sliderText2'=> $modelCarousel->findByPk(2)->text,
			'slider3'=>Yii::app()->request->baseUrl.$modelCarousel->findByPk(3)->imagesPath.$modelCarousel->findByPk(3)->pictureURL,
			'sliderText3'=> $modelCarousel->findByPk(3)->text,
			'slider4'=>Yii::app()->request->baseUrl.$modelCarousel->findByPk(4)->imagesPath.$modelCarousel->findByPk(4)->pictureURL,
			'sliderText4'=> $modelCarousel->findByPk(4)->text,
		);
		$this->render('index', array(
			'slider1'=>$sliderPictures['slider1'],
			'sliderText1'=>$sliderPictures['sliderText1'],
			'slider2'=>$sliderPictures['slider2'],
			'sliderText2'=>$sliderPictures['sliderText2'],
			'slider3'=>$sliderPictures['slider3'],
			'sliderText3'=>$sliderPictures['sliderText3'],
			'slider4'=>$sliderPictures['slider4'],
			'sliderText4'=>$sliderPictures['sliderText4'],
			'mainpage'=>array(
				'sliderLine'=> $mainpage->sliderLineURL,
				'sliderTexture'=> $mainpage->sliderTextureURL,
				'buttonStart'=>$mainpage->sliderButtonText,
				'sliderHeader'=>$mainpage->sliderHeader,
				'sliderText'=>$mainpage->sliderText,
				'title'=>$mainpage->title,
				'header1'=>$mainpage->header1,
				'header2'=>$mainpage->header2,
				'hexagon'=>$mainpage->hexagon,
				'linkName'=>$mainpage->linkName,
				'subLineImage'=>$mainpage->subLineImage,
				'stepSize'=>$mainpage->stepSize,
				'subheader1'=>$mainpage->subheader1,
				'subheader2'=>$mainpage->subheader2,
				'formHeader1'=>$mainpage->formHeader1,
				'formHeader2'=>$mainpage->formHeader2,
				'regText'=>$mainpage->regText,
				'formButtonStart'=>$mainpage->buttonStart,
				'socialText'=>$mainpage->socialText,
				'imageNetwork'=>$mainpage->imageNetwork,
				'formFon'=>$mainpage->formFon,
			),
			'block1'=>$arrayAboutUs['objAbout1'],
			'block2'=>$arrayAboutUs['objAbout2'],
			'block3'=>$arrayAboutUs['objAbout3'],
			'step1'=>$arraySteps['step1'],
			'step2'=>$arraySteps['step2'],
			'step3'=>$arraySteps['step3'],
			'step4'=>$arraySteps['step4'],
			'step5'=>$arraySteps['step5'],
		));
	}
	
	public function actionAboutdetail()
	{
		$mainpage = new Mainpage(0);
		$mainpage->setValueById(0);
		$objAbout1 = new AboutUs(1);
		$objAbout1->setValuesById(1);
		$objAbout2 = new AboutUs(2);
		$objAbout2->setValuesById(2);
		$objAbout3 = new AboutUs(3);
		$objAbout3->setValuesById(3);
		$arrayAboutUs = array(
			'objAbout1'=>$objAbout1,
			'objAbout2'=>$objAbout2,
			'objAbout3'=>$objAbout3,
		);
		$this->render('aboutdetail', array(
			'mainpage'=>array(
				'title'=>$mainpage->title,
				'header1'=>$mainpage->header1,
				'linkName'=>$mainpage->linkName,
				'subLineImage'=>$mainpage->subLineImage,
				'subheader1'=>$mainpage->subheader1,
			),
			'block1'=>$arrayAboutUs['objAbout1'],
			'block2'=>$arrayAboutUs['objAbout2'],
			'block3'=>$arrayAboutUs['objAbout3'],
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	public  function setLang($lang='UA'){
		$this->actionIndex();
	}


	public function actionChangeLang($lang)
	{
		Yii::app()->language = $lang;
		$this->redirect(Yii::app()->user->returnUrl);
	}
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
        if(isset($_POST['isExtended']))
        {
            $this->redirect(array('studentreg/index'));
        }

		$model = new StudentReg;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['StudentReg']))
		{
			$model->attributes=$_POST['StudentReg'];
			// validate user input and redirect to the previous page if valid
			if(!empty($_POST['StudentReg']['password']) && !empty($_POST['StudentReg']['email']) && $model->login()) {
                $this->redirect($_SERVER['HTTP_REFERER']);
            } else if(empty($_POST['StudentReg']['password']) || empty($_POST['StudentReg']['email'])) {
                Yii::app()->user->setFlash('forminfo', 'Заповніть поля для Входу або реєстрації' );
                $this->redirect(Yii::app()->request->baseUrl.'/?r=site#form');
			} else {
                $model->firstName=$_POST['StudentReg']['email'];
                $model->email=$_POST['StudentReg']['email'];
                $model->password=$_POST['StudentReg']['password'];
                $model->password_repeat=$_POST['StudentReg']['password'];
                if ($model->model()->count("email = :email", array(':email' => $model->email)))
                {
                    // Указанный email уже занят. Создаем ошибку и передаем в форму
                    $model->addError('email', 'Email уже зайнятий');
                }else
                $model->save();
                Yii::app()->user->setFlash('forminfo', 'Ви успішно зареєструвалися. Введіть данні для авторизації' );
                $this->redirect(Yii::app()->request->baseUrl.'/?r=site#form');
            }
		}

		// display the login form
        $this->redirect(Yii::app()->user->returnUrl);

	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}