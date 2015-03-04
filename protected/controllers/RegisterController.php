<?php

class RegisterController {

    public function actionSubmitForm(){

        if(isset($_POST['isExtended']))
        {
            $this->redirect(array('studentreg/index'));
        }
        $this->redirect(array('site/index'));
    }
}