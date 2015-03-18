<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.03.2015
 * Time: 17:26
 */

class TeachersController  extends Controller
{
    public function actionPage()
    {
        $this->pageTitle = 'Сторінка - <Наші викладачі>';
        $this->module->tableName('teacherspage');
        $this->module->setPK('id');
        $fieldsConf = array(
            array('lang', 'string', 'Мова', array('show')),
            array('title', 'string', 'Назва сторінки', array('show')),
            array('header', 'string', 'Заголовок', array('show')),
            array('courses', 'string', 'Веде курси:', array('show')),
            array('BCmain', 'string', 'Головна', array('show')),
            array('BCteachers', 'string', 'Викладачі', array('show')),
            array('link1', 'string', 'Посилання - читати', array('show')),
            array('link2', 'string', 'Посилання - відгуки', array('show')),
            array('profile', 'string', 'Персональна сторінка', array('show')),
        );
        $this->module->fieldsConf($fieldsConf);
        $this->module->sortDefault(array('lang'));
        $this->module->process();
    }

    public function actionList()
    {
        $this->pageTitle = 'Список викладачів';
        $this->module->tableName('teacher_temp');
        $this->module->setPK('teacher_id');
        $fieldsConf = array(
            array('lang', 'string', 'Мова', array('show')),
            array('last_name', 'string', 'Прізвище', array('show')),
            array('first_name', 'string', 'Ім\'я', array('show')),
            array('middle_name', 'string', 'По-батькові', array('show')),
            array('foto_url', 'image', 'Фото', array('show', 'directoryPath'=>'/../css/images/')),
            array('subjects', 'text', 'Веде курси', array('show', 'directoryPath'=>'./')),
            array('profile_text', 'text', 'Профіль (коротко)', array('show', 'directoryPath'=>'./')),
            array('profile_text_big', 'text', 'Профіль викладача', array('show', 'directoryPath'=>'./')),
        );
        $this->module->fieldsConf($fieldsConf);
        $this->module->sortDefault(array('lang'));
        $this->module->process();
    }
}