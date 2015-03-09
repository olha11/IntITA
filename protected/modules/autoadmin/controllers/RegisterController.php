<?php

class RegisterController extends Controller
{
    public function actionExtended()
    {
        $this->pageTitle = 'Форма розширеної реєстрації';

        $this->module->tableName('mainpage');
        $this->module->setPK('mainpageID');
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