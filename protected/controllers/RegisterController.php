<?php
/*@var $users Users*/

class RegisterController {

    public function actionSubmitForm()
    {
        $this->redirect(array('users/create'));
        if (isset($_POST['isExtended'])) {
            $this->redirect(array('studentreg/index'));
        }
        $this->redirect(array('users/create'));
    }

}