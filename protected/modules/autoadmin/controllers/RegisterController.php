<?php

class RegisterController extends Controller
{
    public function actionExtended()
    {
        $this->pageTitle = 'Форма розширеної реєстрації';

        $this->module->tableName('regextended');
        $this->module->setPK('regID');
        $fieldsConf = array(
            array('language', 'string', 'Мова', array('show')),
            array('mainLink', 'string', 'Головна', array('show')),
            array('regLink', 'string', 'Реєстрація', array('show')),
            array('header', 'string', 'Заголовок', array('show')),
            array('headerFoto', 'string', 'Заголовок (фото)', array('show')),
            array('firstName', 'string', 'Ім"я', array('show')),
            array('middleName', 'string', 'По-батькові', array('show')),
            array('lastName', 'string', 'Прізвище', array('show')),
            array('dateOfBirth', 'string', 'Дата народження', array('show')),
            array('education', 'string', 'Освіта', array('show')),
            array('tel', 'string', 'Тел', array('show')),
            array('email', 'string', 'Еmail', array('show')),
            array('password', 'string', 'Пароль', array('show')),
            array('repeatPassword', 'string', 'Повтор пароля', array('show')),
            array('submitButtonText', 'string', 'Кнопка відправити', array('show')),
            array('chooseFileButton', 'string', 'Кнопка вибрати файл', array('show')),
            array('fileNotChoose', 'string', 'Файл не вибрано', array('show')),
        );
        $this->module->fieldsConf($fieldsConf);
        $this->module->sortDefault(array('language'));
        $this->module->process();
    }
}