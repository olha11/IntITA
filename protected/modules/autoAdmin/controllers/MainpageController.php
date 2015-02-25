<?php
class MainpageController extends Controller
{
	public function actionMainpageGeneral()
	{
		$this->pageTitle = 'Головна сторінка';

		$this->module->tableName('mainpage');
		$this->module->setPK('mainpage_id');
		$fieldsConf = array(
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
			array('picture_url', 'image', 'Фото', array('show', 'directoryPath'=>'./')),
			array('description', 'text', 'Опис', array('show', 'directoryPath'=>'./')),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('order'));
		$this->module->process();
	}

	public function actionBlocks()
	{
		$this->pageTitle = 'Блоки <Про нас>';

		$this->module->tableName('aboutus');
		$this->module->setPK('block_id');
		$fieldsConf = array(
			array('titleText', 'string', 'Header', array('show')),
			array('iconImage', 'image', 'Фото', array('show', 'directoryPath'=>'./')),
			array('textAbout', 'text', 'Текст блоку', array('show', 'directoryPath'=>'./')),
			array('linkAddress', 'string', 'Посилання', array('show')),
		);

		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('titleText'));
		$this->module->process();
	}
}