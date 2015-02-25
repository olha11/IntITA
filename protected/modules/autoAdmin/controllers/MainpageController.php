<?php
class MainpageController extends Controller
{



	public function actionMainpageGeneral()
	{
		$this->pageTitle = 'Mainpage general settings';

		$this->module->tableName('mainpage');
		$this->module->setPK('mainpage_id');
		$fieldsConf = array(
			array('title', 'string', 'Mainpage title', array('show')),
			array('header1', 'string', 'Header 1', array('show')),
			array('subheader1', 'string', 'Subheader 1', array('show')),
			array('header2', 'string', 'Header 2', array('show')),
			array('subheader2', 'string', 'Subheader 2', array('show')),

		);

		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('title'));
		$this->module->process();
	}

	public function actionCarousel()
	{
		$this->pageTitle = 'Carousel';

		$this->module->tableName('carousel');
		$this->module->setPK('order');
		$fieldsConf = array(
			array('order', 'string', 'Order', array('show')),
			array('picture_url', 'image', 'Picture', array('show', 'directoryPath'=>'/css/', 'description'=>'1200x800 px')),
			array('width', 'num', 'Width of picture', array('show')),
			array('height', 'num', 'Height of picture', array('show')),
			array('description', 'string', 'Description', array('show')),

		);

		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('order'));
		$this->module->process();
	}

	public function actionBlocks()
	{
		$this->pageTitle = 'Blocks About Us';

		$this->module->tableName('aboutus');
		$this->module->setPK('block_id');
		$fieldsConf = array(
			array('titleText', 'string', 'Header', array('show')),
			array('iconImage', 'image', 'Picture', array('show', 'directoryPath'=>'/css/images/')),
			array('textAbout', 'string', 'Text', array('show')),
			array('linkAddress', 'string', 'Link details', array('show')),
		);

		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('titleText'));
		$this->module->process();
	}
}