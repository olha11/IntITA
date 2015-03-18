<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 18.03.2015
 * Time: 15:20
 */

class WebUser extends CWebUser {
    /* по умолчанию модель пуста */
    private $_model = null;


    function getRole() {
        if($user = $this->getModel()){
            return $user->role;
        }else{
            return false;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = User::model()->findByPk($this->id,array('select'=>'role,userEmail'));
        }
        return $this->_model;
    }

    function getNick(){
        if($user = $this->getModel()){
            return $user->userEmail;
        }else{
            return false;
        }
    }

}
