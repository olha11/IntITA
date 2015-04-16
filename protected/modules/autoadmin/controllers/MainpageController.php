<?php
class MainpageController extends Controller
{
	public function actionMainpageGeneral()
	{
		$this->pageTitle = 'Головна сторінка';

		$this->module->tableName('sourcemessages');
		$this->module->setPK('id');
		$fieldsConf = array(
			array('category', 'string', 'Категорія', array('show')),
			array('id', 'foreign', 'Українською', array(
				'show', //Show in List mode
				'search',   //User is allowed to search by this field
				'bindBy'=>'id', //Country is fixed by previous interface. Set that field.
				'foreign'=>array(   //Foreign key options
					'table'     => 'translatedMessagesUA', //Table which it belongs to
					'pk'        => 'id',    //Foreign table's PK
					'select'    => array('translation'),    //Foreign field to select for listing
					'searchBy'  => array('translation'=>'Українською'),//Foreign field to search by
					'order'     => 'translation',   //Foreign field to order by
				)
			)),
            array('id', 'foreign', 'Російською', array(
                'show', //Show in List mode
                'search',   //User is allowed to search by this field
                'bindBy'=>'id', //Country is fixed by previous interface. Set that field.
                'foreign'=>array(   //Foreign key options
                    'table'     => 'translatedMessagesRU', //Table which it belongs to
                    'pk'        => 'id',    //Foreign table's PK
                    'select'    => array('translation'),    //Foreign field to select for listing
                    'searchBy'  => array('translation'=>'Російською'),//Foreign field to search by
                    'order'     => 'translation',   //Foreign field to order by
                )
            )),
            array('id', 'foreign', 'Англійською', array(
                'show', //Show in List mode
                'search',   //User is allowed to search by this field
                'bindBy'=>'id', //Country is fixed by previous interface. Set that field.
                'foreign'=>array(   //Foreign key options
                    'table'     => 'translatedMessagesEN', //Table which it belongs to
                    'pk'        => 'id',    //Foreign table's PK
                    'select'    => array('translation'),    //Foreign field to select for listing
                    'searchBy'  => array('translation'=>'Англійською'),//Foreign field to search by
                    'order'     => 'translation',   //Foreign field to order by
                )
            )),
		);
		$this->module->fieldsConf($fieldsConf);
		$this->module->sortDefault(array('category'));
		$this->module->rowsOnPage = 20;
		$this->module->process();
	}

	public function actionCarousel()
	{
		$this->pageTitle = 'Слайдер';
		$this->module->tableName('carousel');
		$this->module->setPK('order');
		$fieldsConf = array(
			array('order', 'string', 'Порядок', array('show')),
			array('pictureURL', 'image', 'Фото', array('show', 'directoryPath'=>'/../css/images/slider_img/small')),
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