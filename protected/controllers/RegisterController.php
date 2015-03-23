<?php
/*@var $user User*/

class RegisterController {

    public function actionSubmitForm()
    {
        $model = new User();

        if(isset($_POST['User']))
        {
            /* Вот так объявляется сценарий для регистрации */
            $model->setScenario('registration');
            /* присвоим нужные поля */
            $model->userEmail  = (string) mb_strtolower(str_replace(" ","",$_POST['User']['userEmail']));
            $model->userPassword    = (string) $_POST['User']['userPassword'];
            $model->role = (int) 1;
            /* Если запрос прошел валидацию */
            if($model->validate())
            {
                /* Если успешно сохранено в БД */
                if($model->save())
                {
                    /*Потому как пароль <s>трансгресирует</s> преобразовывается в md5, вернем в форму (если это нужно) его настоящий вид, а не 32е точки (недалекие перепугаются, пощадим их нервы и сердце). */
                    $model->userPassword = $_POST['User']['userPassword'];
                    /* Выдаем falsh сообщение в $view */
                    Yii::app()->user->setFlash('success-registration',"На вашу почту отправлено письмо с дальнейшими инструкциями. Спасибо за регистрацию.");
                }
                else {

                    $model->userPassword = $_POST['User']['userPassword'];

                    Yii::app()->user->setFlash('failed-registration',"Что-то пошло не так, попробуйте еще раз.");

                }
            }
        }

        $this->redirect(array('courses/index'));

    }



}