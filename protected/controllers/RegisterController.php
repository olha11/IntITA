<?php
/*@var $users Users*/

class RegisterController {

    public function actionSubmitForm()
    {


        if (isset($_POST['isExtended'])) {
            $this->redirect(array('studentreg/index'));
        }



        $connection=Yii::app()->db;
        $sql="INSERT INTO `users` (`userEmail`, `userPassword`) VALUES (:email, :password);";
        $command=$connection->createCommand($sql);

        $command->bindParam(":email",$_POST['email'],PDO::PARAM_STR);

        $command->bindParam(":password",$_POST['password']::PARAM_STR);
        $command->execute();

        $this->redirect(array('courses/index'));

    }

}