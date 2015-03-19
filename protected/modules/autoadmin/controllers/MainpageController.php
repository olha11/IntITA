<?php
class MainpageController extends Controller
{
	public function actionMainpageGeneral()
	{
		$this->pageTitle = 'Головна сторінка';

		$this->module->tableName('mainpage');
		$this->module->setPK('id');
		$fieldsConf = array(
			array('language', 'string', 'Мова', array('show')),
			array('title', 'string', 'Заголовок сторінки', array('show')),
			array('header1', 'string', 'Заголовок 1', array('show')),
			array('subheader1', 'string', 'Підзаголовок 1', array('show')),
			array('header2', 'string', 'Заголовок 2', array('show')),
			array('subheader2', 'string', 'Підзаголовок 2', array('show')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('title'));
		$this->module->process();
	}

	public function actionCarousel()
	{
		$this->pageTitle = 'Слайдер';
		$this->module->tableName('carousel');
		$this->module->setPK('order');
		$fieldsConf = array(
			array('order', 'string', 'Порядок', array('show')),
			array('pictureURL', 'image', 'Фото', array('show', 'directoryPath'=>'./css/images/slider_img/small')),
			array('description', 'text', 'Опис', array('show', 'directoryPath'=>'./')),
			array('text', 'string', 'Текст на фото', array('show')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('order'));
		$this->module->process();
	}

	public function actionContacts(){
		$this->pageTitle = 'Контакти';
		$this->module->tableName('footer');
		$this->module->setPK('footerID');
		$fieldsConf = array(
			array('language', 'string', 'Мова', array('show')),
			array('phone', 'string', 'Телефон', array('show')),
			array('mobile', 'string', 'Мобільний', array('show')),
			array('email', 'string', 'E-mail', array('show')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('phone'));
		$this->module->process();
	}

	public function actionMenu(){
		$this->pageTitle = 'Меню сайта';
		$this->module->tableName('header');
		$this->module->setPK('headerID');
		$fieldsConf = array(
			array('language', 'string', 'Мова', array('show')),
			array('menuItem1', 'string', 'Меню 1 (Курси)', array('show')),
			array('menuItem2', 'string', 'Меню 2 (Викладачі)', array('show')),
			array('menuItem3', 'string', 'Меню 3 (Форум)', array('show')),
			array('menuItem4', 'string', 'Меню 4 (Про нас)', array('show')),
			array('enterButtonText', 'string', 'Кнопка <Вхід>', array('show')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('menuItem1'));
		$this->module->process();
	}

	public function actionForm(){
		$this->pageTitle = 'Форма реєстрації на головній сторінці';
		$this->module->tableName('mainpage');
		$this->module->setPK('id');
		$fieldsConf = array(
			array('language', 'string', 'Мова', array('show')),
			array('formHeader1', 'string', 'Заголовок форми', array('show')),
			array('formHeader2', 'string', 'Підзаголовок', array('show')),
			array('regText', 'string', 'Розширена реєстрація', array('show')),
			array('buttonStart', 'string', 'Кнопка почати', array('show')),
			array('socialText', 'string', 'Текст соцмережі', array('show')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('formHeader1'));
		$this->module->process();
	}
}