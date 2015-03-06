<?php

class RegisterController {

    public function actionSubmitForm(){

        if(isset($_POST['isExtended']))
        {
            $this->redirect(array('studentreg/index'));
        }
        else rapidRegister($_POST['name'], $_POST['email']);
    }

    public function rapidRegister(String $name, String $email){

    }


}