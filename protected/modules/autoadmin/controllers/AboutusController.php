<?php

class AboutusController extends Controller
{

    public function actionBlocklist()
    {
        $this->pageTitle = 'Головна сторінка -> Блоки <Про нас>';

        $this->module->tableName('aboutus');
        $this->module->setPK('blockID');
        $fieldsConf = array(
            array('language', 'string', 'Мова', array('show')),
            array('titleText', 'string', 'Header', array('show')),
            array('iconImage', 'image', 'Фото', array('show', 'directoryPath'=>'/../css/images')),
            array('textAbout', 'text', 'Аннотація', array('show', 'directoryPath'=>'./')),
        );

        $this->module->fieldsConf($fieldsConf);
        $this->module->sortDefault(array('titleText'));
        $this->module->process();
    }

    public function actionBlockextended()
    {
        $this->pageTitle = 'Блоки <Про нас>';

        $this->module->tableName('aboutus');
        $this->module->setPK('blockID');
        $fieldsConf = array(
            array('language', 'string', 'Мова', array('show')),
            array('titleText', 'string', 'Header', array('show')),
            array('iconImage', 'image', 'Фото', array('show', 'directoryPath'=>'./css/images')),
            array('textAbout', 'text', 'Аннотація', array('show', 'directoryPath'=>'./')),
            array('textLarge', 'text', 'Текст блоку', array('show', 'directoryPath'=>'./')),
        );
        $this->module->fieldsConf($fieldsConf);
        $this->module->sortDefault(array('titleText'));
        $this->module->process();
    }

}