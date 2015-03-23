<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 18.03.2015
 * Time: 15:28
 */

class AuthManager extends CPhpAuthManager{
    public function init(){
        // Включим наш roles.php
        if($this->authFile===null){
            $this->authFile=Yii::getPathOfAlias('application.config.roles').'.php';
        }

        parent::init();

        // Для гостей роль по умолчанию guest.
        if(!Yii::app()->user->isGuest){
            // Связываем роль, заданную в БД с идентификатором пользователя,
            // возвращаемым UserIdentity.getId().
            $this->assign(Yii::app()->user->role, Yii::app()->user->id);
        }
    }
}